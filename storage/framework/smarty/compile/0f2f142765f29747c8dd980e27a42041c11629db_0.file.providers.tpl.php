<?php
/* Smarty version 4.3.1, created on 2023-04-05 21:53:37
  from '/var/www/zero/resources/conf/clash/providers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642d7d619988e8_50894389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f2f142765f29747c8dd980e27a42041c11629db' => 
    array (
      0 => '/var/www/zero/resources/conf/clash/providers.tpl',
      1 => 1680174611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642d7d619988e8_50894389 (Smarty_Internal_Template $_smarty_tpl) {
?>  reject:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/reject.txt"
    path: ./ruleset/reject.yaml
    interval: 86400

  icloud:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/icloud.txt"
    path: ./ruleset/icloud.yaml
    interval: 86400

  apple:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/apple.txt"
    path: ./ruleset/apple.yaml
    interval: 86400

  direct:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/direct.txt"
    path: ./ruleset/direct.yaml
    interval: 86400
    
  proxy:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/proxy.txt"
    path: ./ruleset/proxy.yaml
    interval: 86400

  private:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/private.txt"
    path: ./ruleset/private.yaml
    interval: 86400

  telegramcidr:
    type: http
    behavior: ipcidr
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/telegramcidr.txt"
    path: ./ruleset/telegramcidr.yaml
    interval: 86400
    
  youtube:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/youtube.txt"
    path: ./ruleset/youtube.yaml
    interval: 86400
    
  netflix:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/netflix.txt"
    path: ./ruleset/netflix.yaml
    interval: 86400
    
  socialapp:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/socialapp.txt"
    path: ./ruleset/socialapp.yaml
    interval: 86400
    
  googler:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/googler.txt"
    path: ./ruleset/googler.yaml
    interval: 86400
    
  google:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/google.txt"
    path: ./ruleset/google.yaml
    interval: 86400
    
  music:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/music.txt"
    path: ./ruleset/music.yaml
    interval: 86400
    
  video:
    type: http
    behavior: domain
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/video.txt"
    path: ./ruleset/video.yaml
    interval: 86400

  cncidr:
    type: http
    behavior: ipcidr
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/cncidr.txt"
    path: ./ruleset/cncidr.yaml
    interval: 86400

  lancidr:
    type: http
    behavior: ipcidr
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/lancidr.txt"
    path: ./ruleset/lancidr.yaml
    interval: 86400

  applications:
    type: http
    behavior: classical
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/clash/applications.txt"
    path: ./ruleset/applications.yaml
    interval: 86400<?php }
}
