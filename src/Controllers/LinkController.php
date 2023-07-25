<?php

namespace App\Controllers;

use App\Models\{
    Node, 
    User, 
    UserSubscribeLog,
    Setting
};
use App\Utils\URL;
use App\Controllers\SubController;
use voku\helper\AntiXSS;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;
use Slim\Http\ServerRequest;

class LinkController extends BaseController
{
    public static function GetContent(ServerRequest $request, Response $response, array $args)
    {
        $token = $args['token'];
        $user = User::where('subscription_token', $token)->first();
        $opts = $request->getQueryParams();

        // 筛选节点部分
        $Rule['type'] = (isset($opts['type']) ? trim($opts['type']) : 'all');

        if (isset($opts['class'])) {
            $class = trim(urldecode($opts['class']));
            $Rule['content']['class'] = array_map(
                function ($item) {
                    return (int)$item;
                },
                explode('-', $class)
            );
        }

        if (isset($opts['noclass'])) {
            $noclass = trim(urldecode($opts['noclass']));
            $Rule['content']['noclass'] = array_map(
                function ($item) {
                    return (int)$item;
                },
                explode('-', $noclass)
            );
        }

        if (isset($opts['regex'])) {
            $Rule['content']['regex'] = trim(urldecode($opts['regex']));
        }

        // Emoji
        $Rule['emoji'] = Setting::obtain('enable_subscribe_emoji');
        if (isset($opts['emoji'])) {
            $Rule['emoji'] = (bool)$opts['emoji'];
        }

        // 显示流量以及到期时间等
        $Rule['extend'] = Setting::obtain('enable_subscribe_extend');
        if (isset($opts['extend'])) {
            $Rule['extend'] = (bool)$opts['extend'];
        }


        // 订阅类型
        $subscribe_type = '';

        $getBody = '';
        $sub_type_array = ['list', 'clash', 'surge', 'surfboard'];
        foreach ($sub_type_array as $key) {
            if (isset($opts[$key])) {
                // 新增vless
                $query_value = $opts[$key];
                if ($query_value != '0' && $query_value != '') {
                    if ($key == 'list') {
                        $SubscribeExtend = self::getSubscribeExtend($query_value);
                    } else {
                        $SubscribeExtend = self::getSubscribeExtend($key, $query_value);
                    }
                    $filename =  Setting::obtain('website_name'). '_' . $SubscribeExtend['filename'] . '_' . time() . '.' . $SubscribeExtend['suffix'];
                    $subscribe_type = $SubscribeExtend['filename'];

                    $class = ('get' . $SubscribeExtend['class']);
                    $content = self::$class($user, $query_value, $opts, $Rule);
                    $getBody = self::getBody(
                        $user,
                        $response,
                        $content,
                        $filename
                    );
                    break;
                }
                continue;
            }
        }

        // 记录订阅日志
        if (Setting::obtain('enable_subscribe_log') == true) {
            self::Subscribe_log($user, $subscribe_type, $request->getHeaderLine('User-Agent'));
        }

        return $getBody;
    }

    /**
     * 获取订阅类型的文件名
     *
     * @param string $type 订阅类型
     * @param string|null $value 值
     *
     * @return array
     */
    public static function getSubscribeExtend($type, $value = null)
    {
        switch ($type) {
            case 'shadowsocks':
                $return = [
                    'filename' => 'Shadowsocks',
                    'suffix'   => 'txt',
                    'class'    => 'Lists'
                ];
                break;
            case 'clash': 
                if (!is_null($value)) {                   
                    $return          = self::getSubscribeExtend('clash');
                    $return['class'] = 'Clash';
                } else {
                    $return = [
                        'filename' => 'Clash',
                        'suffix'   => 'yaml',
                        'class'    => 'Lists'
                    ];
                }
                break;
            case 'surge': 
                if (!is_null($value)) {
                    $return = [
                        'filename' => 'Surge',
                        'suffix'   => 'conf',
                        'class'    => 'Surge'
                    ];
                    $return['filename'] .= $value;
                } else {
                    $return = [
                        'filename' => 'SurgeList',
                        'suffix'   => 'list',
                        'class'    => 'Lists'
                    ];
                }
                break;
            case 'v2rayn': 
                $return = [
                    'filename' => 'V2rayn',
                    'suffix'   => 'txt',
                    'class'    => 'Lists'
                ];
                break;
            case 'trojan': 
                $return = [
                    'filename' => 'Trojan',
                    'suffix'   => 'txt',
                    'class'    => 'Lists'
                ];
                break;
            case 'anxray': 
                    $return = [
                        'filename' => 'AnXray',
                        'suffix'   => 'txt',
                        'class'    => 'Lists'
                    ];
                    break;
            case 'surfboard': 
                $return = [
                    'filename' => 'Surfboard',
                    'suffix'   => 'conf',
                    'class'    => 'Surfboard'
                ];
                break;
            case 'quantumult': 
               
                $return = [
                    'filename' => 'Quantumult',
                    'suffix'   => 'conf',
                    'class'    => 'Lists'
                ];
                
                break;
            case 'quantumultx': 
                $return = [
                    'filename' => 'QuantumultX',
                    'suffix'   => 'txt',
                    'class'    => 'Lists'
                ];
                if (!is_null($value)) {
                    $return['class'] = 'QuantumultX';
                }
                break;
            case 'shadowrocket': 
                $return = [
                    'filename' => 'Shadowrocket',
                    'suffix'   => 'txt',
                    'class'    => 'Lists'
                ];
                break;
            default: 
                $return = [
                    'filename' => 'UndefinedNode',
                    'suffix'   => 'txt',
                    'class'    => 'Sub'
                ];
                break;
        }
        return $return;
    }

    /**
     * 记录订阅日志
     *
     * @param User $user 用户
     * @param string $type 订阅类型
     * @param string $ua UA
     *
     * @return void
     */
    private static function Subscribe_log($user, $type, $ua)
    {
        $log                     = new UserSubscribeLog();
        $log->user_id            = $user->id;
        $log->email              = $user->email;
        $log->subscribe_type     = $type;
        $log->request_ip         = $_SERVER['REMOTE_ADDR'];
        $log->request_time       = time();
        $antiXss                 = new AntiXSS();
        $log->request_user_agent = $antiXss->xss_clean($ua);
        $log->save();
    }

    /**
     * 响应内容
     *
     * @param User $user
     * @param object $response
     * @param string $content 订阅内容
     * @param string $filename 文件名
     */
    public static function getBody($user, $response, $content, $filename): ResponseInterface
    {
        $response = $response
            ->withHeader(
                'Content-type',
                ' application/octet-stream; charset=utf-8'
            )
            ->withHeader(
                'Cache-Control',
                'no-store, no-cache, must-revalidate'
            )
            ->withHeader(
                'Content-Disposition',
                ' attachment; filename=' . $filename
            )
            ->withHeader(
                'Subscription-Userinfo',
                (' upload=' . $user->u
                    . '; download=' . $user->d
                    . '; total=' . $user->transfer_enable
                    . '; expire=' . strtotime($user->class_expire))
            );

        return $response->write($content);
    }

    /**
     * 订阅链接汇总
     *
     * @param User $user 用户
     * @param int $int 当前用户访问的订阅类型
     *
     * @return array
     */
    public static function getSubinfo($user, $int = 0)
    {
        if ($int == 0) {
            $int = '';
        }
        $userapiUrl = Setting::obtain('subscribe_address_url') . '/link/' . $user->subscription_token;
        $return_info = [
            'link'         => '',
            'shadowsocks'  => '?list=shadowsocks',
            'v2rayn'       => '?list=v2rayn',
            'trojan'       => '?list=trojan',
            'anxray'       => '?list=anxray',
            'clash'        => '?clash=1',
            'surge'        => '?surge=4',
            'surfboard'    => '?surfboard=1',
            'quantumult'   => '?list=quantumult',
            'quantumultx'  => '?list=quantumultx',
            'shadowrocket' => '?list=shadowrocket',
        ];

        return array_map(
            function ($item) use ($userapiUrl) {
                return ($userapiUrl . $item);
            },
            $return_info
        );
    }

    public static function getListItem($item, $list)
    {
        $return = null;
        switch ($list) {
            case 'shadowsocks':
                $return = SubController::getShadowsocks($item);
                break;
            case 'v2rayn':
                $return = SubController::getV2RayN($item);
                break;
            case 'trojan':
                $return = SubController::getTrojan($item);
                break;
            case 'anxray':
                $return = SubController::getAnXray($item);
                break;
            case 'surge':
                $return = SubController::getSurge($item);
                break;
            case 'quantumult':
                $return = SubController::getQuantumult($item);
                break;
            case 'quantumultx':
                $return = SubController::getQuantumultX($item);
                break;
            case 'shadowrocket':
                $return = SubController::getShadowrocket($item);
                break;
        }
        return $return;
    }

    public static function getLists($user, $list, $opts, $Rule)
    {
        $list = strtolower($list);
        if ($list == 'shadowrocket') {
            // Shadowrocket 自带 emoji
            $Rule['emoji'] = false;
        }
        $items = URL::getNew_AllItems($user, $Rule);
        $return = [];
        if ($Rule['extend'] === true) {
            switch ($list) {
                default:
                    $return[] = implode(PHP_EOL, self::getListExtend($user, $list));
                    break;
            }
        }
        foreach ($items as $item) {
            $out = self::getListItem($item, $list);
            if (!is_null($out)) {
                $return[] = $out;
            }
        }
        switch ($list) {
            case 'quantumult':
            case 'quantumultx':
            case 'shadowrocket':
            case 'anxray':
            case 'shadowsocks':
            case 'v2rayn':
            case 'trojan':
                return base64_encode(implode(PHP_EOL, $return));
            default:
                return implode(PHP_EOL, $return);
        }
    }

    public static function getListExtend($user, $list)
    {
        $return = [];
        $info_array = (array)Setting::obtain('subscribe_diy_message');
        if (strtotime($user->class_expire) > time()) {
            if ($user->transfer_enable == 0) {
                $unusedTraffic = '剩余流量：0';
            } else {
                $unusedTraffic = '剩余流量：' . $user->unusedTraffic();
            }
            $expire_in = '过期时间：';
            if ($user->class_expire != '1989-06-04 00:05:00') {
                $userClassExpire = explode(' ', $user->class_expire);
                $expire_in .= $userClassExpire[0];
            } else {
                $expire_in .= '无限期';
            }
        } else {
            $unusedTraffic = '账户已过期，请续费后使用';
            $expire_in = '账户已过期，请续费后使用';
        }
        if (in_array($list, ['quantumult', 'quantumultx', 'shadowrocket', 'anxray', 'shadowsocks', 'v2rayn', 'trojan'])) {
            $info_array[] = $unusedTraffic;
            $info_array[] = $expire_in;
        }
        $baseUrl = explode('//', Setting::obtain('website_url'))[1];
        $Extend = [
            'remark'      => '',
            'type'        => '',
            'add'         => Setting::obtain('website_url'),
            'address'     => Setting::obtain('website_url'),
            'port'        => 10086,
            'method'      => 'aes-256-gcm',
            'passwd'      => $user->passwd,
            'uuid'        => $user->uuid,
            'aid'         => 0,
            'net'         => 'tcp',
            'headertype'  => 'none',
            'host'        => '',
            'path'        => '/',
            'security'    => '',
            'sni'         => '',
            'flow'        => '',
            'servicename' => '',
            'group'       => Setting::obtain('website_name')
        ];
        if ($list == 'shadowrocket') {
            $return[] = ('STATUS=' . $unusedTraffic . '.♥.' . $expire_in . PHP_EOL . 'REMARKS=' . Setting::obtain('website_name'));
        }
        foreach ($info_array as $remark) {
            $Extend['remark'] = $remark;
            if (in_array($list, ['quantumult', 'v2rayn', 'anxray'])) {
                $Extend['type'] = 'vmess';
                $out = self::getListItem($Extend, $list);
            } elseif ($list == 'trojan') {
                $Extend['type'] = 'trojan';
                $out = self::getListItem($Extend, $list);
            } elseif ($list = 'shadowsocks') {               
                $Extend['type'] = 'shadowsocks';
                $out = self::getListItem($Extend, $list);
                
            }
            if (!is_null($out)) $return[] = $out;
        }
        return $return;
    }

    /**
     * Surge 配置
     *
     * @param User $user 用户
     * @param int $surge 订阅类型
     * @param array $opts request
     * @param array $Rule 节点筛选规则
     *
     * @return string
     */
    public static function getSurge($user, $surge, $opts, $Rule)
    {
        $subInfo = self::getSubinfo($user, $surge);
        $userapiUrl = $subInfo['surge'];
        $items = URL::getNew_AllItems($user, $Rule);
        $Nodes = [];
        $All_Proxy = '';
        foreach ($items as $item) {
            $out = SubController::getSurge($item, $surge);
            if (!is_null($out)) {
                $Nodes[] = $item;
                $All_Proxy .= $out . PHP_EOL;
            }
        }
        if (isset($opts['profiles']) && in_array($opts['profiles'], array_keys($_ENV['Surge_Profiles']))) {
            $Profiles = $opts['profiles'];
            $userapiUrl .= ('&profiles=' . $Profiles);
        } else {
            $Profiles = Setting::obtain('subscribe_surge_default_profile');
        }

        return ConfController::getSurgeConfs($user, $All_Proxy, $Nodes, $_ENV['Surge_Profiles'][$Profiles]);
    }


    /**
     * Surfboard 配置
     *
     * @param User $user 用户
     * @param int $surfboard 订阅类型
     * @param array $opts request
     * @param array $Rule 节点筛选规则
     *
     * @return string
     */
    public static function getSurfboard($user, $surfboard, $opts, $Rule)
    {
        $subInfo = self::getSubinfo($user, $surfboard);
        $userapiUrl = $subInfo['surfboard'];
        $Nodes = [];
        $All_Proxy = '';
        $items = URL::getNew_AllItems($user, $Rule);
        foreach ($items as $item) {
            $out = SubController::getSurfboard($item);
            if (!is_null($out)) {
                $Nodes[] = $item;
                $All_Proxy .= $out . PHP_EOL;
            }
        }
        if (isset($opts['profiles']) && in_array($opts['profiles'], array_keys($_ENV['Surfboard_Profiles']))) {
            $Profiles = $opts['profiles'];
            $userapiUrl .= ('&profiles=' . $Profiles);
        } else {
            $Profiles = Setting::obtain('subscribe_surfboard_default_profile'); // 默认策略组
        }

        return ConfController::getSurgeConfs($user, $All_Proxy, $Nodes, $_ENV['Surfboard_Profiles'][$Profiles]);
    }

    /**
     * Clash 配置
     *
     * @param User $user 用户
     * @param int $clash 订阅类型
     * @param array $opts request
     * @param array $Rule 节点筛选规则
     *
     * @return string
     */
    public static function getClash($user, $clash, $opts, $Rule)
    {
        $subInfo     = self::getSubinfo($user, $clash);
        $userapiUrl  = $subInfo['clash'];
        $ssr_support = ($clash == 2 ? true : false);
        $items       = URL::getNew_AllItems($user, $Rule);
        $Proxys      = [];
        foreach ($items as $item) {
            $Proxy = SubController::getClash($item, $ssr_support);
            if (!is_null($Proxy)) {
                $Proxys[] = $Proxy;
            }
        }
        if (isset($opts['profiles']) && in_array($opts['profiles'], array_keys($_ENV['Clash_Profiles']))) {
            $Profiles = $opts['profiles'];
            $userapiUrl .= ('&profiles=' . $Profiles);
        } else {
            $Profiles = Setting::obtain('subscribe_clash_default_profile'); // 默认策略组
        }

        return ConfController::getClashConfs($user, $Proxys, $_ENV['Clash_Profiles'][$Profiles]);
    }

}
