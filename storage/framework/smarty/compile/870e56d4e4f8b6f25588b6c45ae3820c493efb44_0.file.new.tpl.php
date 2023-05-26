<?php
/* Smarty version 4.3.1, created on 2023-04-05 19:34:44
  from '/var/www/zero/resources/conf/surfboard/new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642d5cd4c7b1f9_98749992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '870e56d4e4f8b6f25588b6c45ae3820c493efb44' => 
    array (
      0 => '/var/www/zero/resources/conf/surfboard/new.tpl',
      1 => 1680174611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642d5cd4c7b1f9_98749992 (Smarty_Internal_Template $_smarty_tpl) {
?>PROCESS-NAME,v2ray,DIRECT
PROCESS-NAME,xray,DIRECT
PROCESS-NAME,clash,DIRECT
PROCESS-NAME,naive,DIRECT
PROCESS-NAME,trojan,DIRECT
PROCESS-NAME,trojan-go,DIRECT
PROCESS-NAME,ss-local,DIRECT
PROCESS-NAME,privoxy,DIRECT
PROCESS-NAME,leaf,DIRECT
PROCESS-NAME,Thunder,DIRECT
PROCESS-NAME,DownloadService,DIRECT
PROCESS-NAME,qBittorrent,DIRECT
PROCESS-NAME,Transmission,DIRECT
PROCESS-NAME,fdm,DIRECT
PROCESS-NAME,aria2c,DIRECT
PROCESS-NAME,Folx,DIRECT
PROCESS-NAME,NetTransport,DIRECT
PROCESS-NAME,uTorrent,DIRECT
PROCESS-NAME,WebTorrent,DIRECT
URL-REGEX,(Subject|HELO|SMTP),DIRECT
URL-REGEX,(api|ps|sv|offnavi|newvector|ulog.imap|newloc)(.map|).(baidu|n.shifen).com,DIRECT
URL-REGEX,(.+.|^)(360|so|qihoo|360safe|qhimg|360totalsecurity|yunpan).(cn|com),DIRECT
URL-REGEX,(.+.)?(torrent|announce.php?passkey=|tracker|BitTorrent|bt_key|ed2k|find_node|get_peers|info_hash|magnet:|peer_id=|xunlei)(..+)?,DIRECT
URL-REGEX,(.?)(xunlei|sandai|Thunder|XLLiveUD)(.),DIRECT
PROCESS-NAME,DownloadService,DIRECT
URL-REGEX,(.+\.|^)(360|so)\.(cn|com),DIRECT
PROCESS-NAME,Weiyun,DIRECT

DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/private.txt,DIRECT
DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/reject.txt,REJECT
RULE-SET,SYSTEM,DIRECT
DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/icloud.txt,🍎 APPLE
DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/apple.txt,🍎 APPLE
RULE-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/telegramcidr.txt,✈️ TELEGRAM
RULE-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/cncidr.txt,DIRECT
DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/netflix.txt,🎞 NETFLIX
DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/music.txt,🎧 MUSIC
DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/video.txt,📺 VIDEO
DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/socialapp.txt,🪁 SOCIAL APP
DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/google.txt,🔍 GOOGLE
DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/googler.txt,🔍 GOOGLE
DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/youtube.txt,🎬 YOUTUBE
DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/proxy.txt,🌎 PROXY,force-remote-dns
DOMAIN-SET,<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/rules/surge/direct.txt,DIRECT
RULE-SET,LAN,DIRECT
FINAL,🌎 PROXY,dns-failed<?php }
}
