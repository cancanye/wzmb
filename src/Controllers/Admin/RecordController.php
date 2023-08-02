<?php

namespace App\Controllers\Admin;

use App\Controllers\AdminController;
use App\Models\{
    Ip,
    SigninIp,
    TrafficLog,
    UserSubscribeLog,
    User
};
use App\Utils\{
    Tools
};
use Slim\Http\Response;
use Slim\Http\ServerRequest;

class RecordController extends AdminController
{
    public function recordIndex(ServerRequest $request, Response $response, array $args): Response
    {
        $table_config_alive['total_column'] = [
            'id'        => 'ID',
            'userid'    => '用户',
            'node_name' => '节点名',
            'ip'        => 'IP',
            'location'  => '归属地',
            'datetime'  => '时间'
    ];
        $table_config_alive['ajax_url']      = 'record/ajax/alive';
        $table_config_signin['total_column'] = [
            'id'        => 'ID',
            'userid'    => '用户',
            'ip'        => 'IP',
            'location'  => '归属地',
            'datetime'  => '时间',
            'type'      => '类型'
        ];
        $table_config_signin['ajax_url']        = 'record/ajax/signin';
        $table_config_subscribe['total_column'] = [
            'id'                  => 'ID',
            'user_id'             => '用户',
            'request_user_agent'      => '类型',
            'request_ip'          => 'IP',
            'location'            => '归属地',
            'request_time'        => '时间',
        ];
        $table_config_subscribe['ajax_url']   = 'record/ajax/subscribe';
        $table_config_traffic['total_column'] = [
            'id'              => 'ID',
            'user_id'         => '用户',
            'node_name'       => '使用节点',
            'rate'            => '倍率',
            'origin_traffic'  => '实际使用流量',
            'traffic'         => '结算流量',
            'datetime'        => '记录时间'
        ];
        $table_config_traffic['ajax_url'] = 'record/ajax/traffic';
        $this->view()
            ->assign('table_config_alive', $table_config_alive)
            ->assign('table_config_signin', $table_config_signin)
            ->assign('table_config_subscribe', $table_config_subscribe)
            ->assign('table_config_traffic', $table_config_traffic)
            ->display('admin/record.tpl');
        return $response;
    }

    public function recordAjax(ServerRequest $request, Response $response, array $args): Response
    {
        $type = $args['type'];
        switch ($type) {
            case 'alive':
                $query = Ip::getTableDataFromAdmin(
                    $request,
                    static function (&$order_field) {
                        if (in_array($order_field, ['node_name'])) {
                            $order_field = 'id';
                        }
                        if (in_array($order_field, ['location'])) {
                            $order_field = 'id';
                        }
                    },
                    static function ($query) {
                        $query->selectRaw('*, MAX(datetime) AS latest_datetime')->whereRaw('datetime >= UNIX_TIMESTAMP() - 180')->groupBy('ip');
                    }
                );

                $data = $query['datas']->map(function($rowData) {
                    return [
                        'id'        =>  $rowData->id,
                        'userid'    =>  User::userEmail($rowData->userid),
                        'node_name' =>  $rowData->node_name(),
                        'ip'        =>  Tools::getRealIp($rowData->ip),
                        'location'  =>  Tools::getIPLocation(Tools::getRealIp($rowData->ip)),
                        'datetime'  =>  date('Y-m-d H:i:s', $rowData->latest_datetime),
                    ];
                })->toArray();
                $total = Ip::count();
                break;
            case 'signin':
                $query = SigninIp::getTableDataFromAdmin(
                    $request,
                    static function (&$order_field) {
                        if (in_array($order_field, ['name'])) {
                            $order_field = 'userid';
                        }
                        if (in_array($order_field, ['location'])) {
                            $order_field = 'ip';
                        }
                    }
                );

                $data = $query['datas']->map(function($rowData) {
                    return [
                        'id'       => $rowData->id,
                        'userid'   => User::userEmail($rowData->userid),
                        'ip'       => $rowData->ip,
                        'location' => Tools::getIPLocation($rowData->ip),
                        'datetime' => date('Y-m-d H:i:s', $rowData->datetime),
                        'type'     => $rowData->type(),
                    ];
                })->toArray();
                $total = SigninIp::count();
                break;
            case "subscribe":
                $query = UserSubscribeLog::getTableDataFromAdmin(
                    $request,
                    static function (&$order_field) {
                        if (in_array($order_field, ['location'])) {
                            $order_field = 'request_ip';
                        }
                    },
                    
                );
        
                $data = $query['datas']->map(function($rowData) {
                    return [
                        'id'             => $rowData->id,
                        'user_id'        => User::userEmail($rowData->user_id),
                        'request_user_agent' => substr($rowData->request_user_agent,0, 50),
                        'request_ip'     => $rowData->request_ip,
                        'location'       => Tools::getIPLocation($rowData->request_ip),
                        'request_time'   => date('Y-m-d H:i:s', $rowData->request_time),
                    ];
                })->toArray();
                $total = UserSubscribeLog::count();
                break;
            case 'traffic':
                $query = TrafficLog::getTableDataFromAdmin($request);
                $data = $query['datas']->map(function($rowData) {
                    return [
                        'id'             => $rowData->id,
                        'user_id'        => User::userEmail($rowData->user_id),
                        'node_name'      => $rowData->node()->name,
                        'rate'           => $rowData->rate,
                        'origin_traffic' => Tools::flowAutoShow($rowData->u + $rowData->d),
                        'traffic'        => $rowData->traffic,
                        'datetime'       => date('Y-m-d H:i:s', $rowData->datetime),
                    ];
                })->toArray();
                $total = TrafficLog::count();
                break;
        }
        return $response->withJson([
            'draw'            => $request->getParsedBodyParam('draw'),
            'recordsTotal'    => $total,
            'recordsFiltered' => $query['count'],
            'data'            => $data,
        ]);
    }
}