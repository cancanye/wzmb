<?php

namespace App\Services;

use App\Models\Message;
use App\Models\UserMessage;
use Smarty;
use Pkly\I18Next\I18n;

class View
{
    public static $connection;
    public static $beginTime;

    public static function getSmarty()
    {
        $smarty = new smarty(); //实例化smarty

        $user = Auth::getUser();

        if ($user->isLogin) {
            $theme = $user->theme;
        } else {
            $theme = $_ENV['theme'];
        }

        $isReadMessageID = UserMessage::where('user_id', $user->id)->pluck('message_id')->toArray();

        $messages = Message::where('user_id', $user->id)
            ->where('is_read', 0)
            ->where('updated_at', '>', time() - (86400*30))
            ->orderBy('updated_at', 'desc')
            ->get();

        $smarty->settemplatedir(BASE_PATH . '/resources/views/' . $theme . '/'); //设置模板文件存放目录
        $smarty->setcompiledir(BASE_PATH . '/storage/framework/smarty/compile/'); //设置生成文件存放目录
        $smarty->setcachedir(BASE_PATH . '/storage/framework/smarty/cache/'); //设置缓存文件存放目录

        $smarty->assign('config', Config::getPublicConfig());
        $smarty->assign('zeroconfig', ZeroConfig::getPublicSetting());
        $smarty->assign('trans', I18n::get());
        $smarty->assign('user', $user);
        $smarty->assign('messages', $messages);

        if (self::$connection) {
            $smarty->assign('queryLog', self::$connection->connection('default')->getQueryLog());
            $optTime = microtime(true) - self::$beginTime;
            $smarty->assign('optTime', $optTime * 1000);
        }

        return $smarty;
    }
}
