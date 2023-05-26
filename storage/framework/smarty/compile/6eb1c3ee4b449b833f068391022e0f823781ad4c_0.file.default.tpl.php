<?php
/* Smarty version 4.3.1, created on 2023-04-05 21:53:37
  from '/var/www/zero/resources/conf/clash/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642d7d6199b5c0_31825596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eb1c3ee4b449b833f068391022e0f823781ad4c' => 
    array (
      0 => '/var/www/zero/resources/conf/clash/default.tpl',
      1 => 1680174611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642d7d6199b5c0_31825596 (Smarty_Internal_Template $_smarty_tpl) {
?>  - RULE-SET,applications,DIRECT
  - DOMAIN,clash.razord.top,DIRECT
  - DOMAIN,yacd.haishan.me,DIRECT
  - DOMAIN-SUFFIX,smtp,DIRECT
  - DOMAIN-KEYWORD,aria2,DIRECT
  - RULE-SET,private,DIRECT
  - RULE-SET,reject,REJECT
  - RULE-SET,telegramcidr,✈️TELEGRAM
  - RULE-SET,youtube,🖥YOUTUBE
  - RULE-SET,netflix,📺NETFLIX
  - RULE-SET,icloud,📱APPLE
  - RULE-SET,apple,📱APPLE
  - RULE-SET,music,🎸MUSIC
  - RULE-SET,googler,💡GOOGLE
  - RULE-SET,google,💡GOOGLE
  - RULE-SET,socialapp,📡SOCIAL APP
  - RULE-SET,video,🚡VIDEO
  - RULE-SET,proxy,🎯PROXY
  - RULE-SET,direct,DIRECT
  - RULE-SET,cncidr,DIRECT,no-resolve
  - GEOIP,LAN,DIRECT
  - GEOIP,CN,DIRECT
  - MATCH,🛺OTHERS
<?php }
}
