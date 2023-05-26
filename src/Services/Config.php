<?php

namespace App\Services;

use App\Models\Setting;

class Config
{
    // TODO: remove
    public static function get($key)
    {
        return $_ENV[$key];
    }

    public static function getPublicConfig()
    {
        $public_configs = Setting::getPublicConfig();

        // 鉴于还未完成配置的全面数据库化，先这么用着
        
        return [
            'appName'                       => $public_configs['website_name'],
            'version'                       => VERSION,
            'baseUrl'                       => $public_configs['website_url'],
            'live_chat'                     => $public_configs['live_chat'],
            'tawk_id'                       => $public_configs['tawk_id'],
            'crisp_id'                      => $public_configs['crisp_id'],
            'livechat_id'                   => $public_configs['livechat_id'],
            'mylivechat_id'                 => $public_configs['mylivechat_id'],
            'captcha_provider'              => $public_configs['captcha_provider'],
            'enable_signup_captcha'         => $public_configs['enable_signup_captcha'],
            'enable_signin_captcha'         => $public_configs['enable_signin_captcha'],
            'register_mode'                 => $public_configs['reg_mode'],
            'invite_get_money'              => $public_configs['invitation_to_signup_credit_reward'],
            'invite_gift'                   => $public_configs['invitation_to_signup_traffic_reward'],
            'rebate_ratio'                  => $public_configs['rebate_ratio'],
            'enable_withdraw'               => $public_configs['enable_withdraw'],
            'withdraw_minimum_amount'       => $public_configs['withdraw_minimum_amount'],
            'withdraw_method'               => $public_configs['withdraw_method'],
            'enable_sales_agent'            => $public_configs['enable_sales_agent'],
            'purchase_sales_agent_price'    => $public_configs['purchase_sales_agent_price'],
            'sales_agent_commission_ratio'  => $public_configs['sales_agent_commission_ratio'],
            'subscribe_log_keep_time'       => $public_configs['subscribe_log_keep_time'],
            'enable_telegram_bot'           => $public_configs['enable_telegram_bot'],
            'telegram_bot_id'               => $public_configs['telegram_bot_id'],
            'telegram_group_url'            => $public_configs['telegram_group_url'],
            'telegram_channel_id'           => $public_configs['telegram_channel_id'],
            'website_auth_background_image' => $public_configs['website_auth_background_image'],
            'website_admin_path'            => $public_configs['website_admin_path'],
            'verify_email'                  => $public_configs['verify_email']
        ];
    }

    public static function getAllConfig()
    {
        global $_ENV;
        
    }

    public static function getDbConfig()
    {
        return [
            'driver'        => $_ENV['db_driver'],
            'host'          => $_ENV['db_host'],
            'unix_socket'   => $_ENV['db_socket'],
            'database'      => $_ENV['db_database'],
            'username'      => $_ENV['db_username'],
            'password'      => $_ENV['db_password'],
            'charset'       => $_ENV['db_charset'],
            'collation'     => $_ENV['db_collation'],
            'prefix'        => $_ENV['db_prefix'],
        ];
    }
}
