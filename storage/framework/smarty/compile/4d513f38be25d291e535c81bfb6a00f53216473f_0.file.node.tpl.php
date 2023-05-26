<?php
/* Smarty version 4.3.1, created on 2023-05-25 23:20:45
  from '/var/www/zero/resources/views/zero/user/node.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646f7ccdc2acd3_49854981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d513f38be25d291e535c81bfb6a00f53216473f' => 
    array (
      0 => '/var/www/zero/resources/views/zero/user/node.tpl',
      1 => 1685028043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/index/menu.tpl' => 1,
    'file:include/index/news.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
  ),
),false)) {
function content_646f7ccdc2acd3_49854981 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 Node</title>
        
        <meta charset="UTF-8" />
        <meta name="renderer" content="webkit" />
        <meta name="description" content="Updates and statistics" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="format-detection" content="telephone=no,email=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
        <meta http-equiv="expires" content="0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <link href="/theme/zero/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/theme/zero/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/theme/zero/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/favicon.png" rel="shortcut icon">
        <link href="/apple-touch-icon.png" rel="apple-touch-icon">
    </head>
    <?php $_smarty_tpl->_subTemplateRender('file:include/index/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>                
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<div class="d-flex flex-column flex-column-fluid mt-10">
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                    <div class="card" id="kt_pricing">
                                        <div class="card-body p-lg-17">
                                            <div class="d-flex flex-column">
                                                <?php if (!$_smarty_tpl->tpl_vars['class']->value->isEmpty()) {?>
                                                    <div class="nav-group nav-group-outline mx-auto mb-15 nav" data-kt-buttons="true">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['classifications']->value, 'classification');
$_smarty_tpl->tpl_vars['classification']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['classification']->value) {
$_smarty_tpl->tpl_vars['classification']->do_else = false;
?>
                                                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 <?php if ($_smarty_tpl->tpl_vars['classification']->value->sort == $_smarty_tpl->tpl_vars['firstShow']->value) {?> active<?php }?>" data-bs-toggle="tab" data-bs-target="#node_show_<?php echo $_smarty_tpl->tpl_vars['classification']->value->classification;?>
"><?php echo $_smarty_tpl->tpl_vars['classification']->value->name;?>
</button>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </div>
                                                <?php } else { ?>
                                                    <span class="fw-bold fs-3 text-center">对不起，系统中没有任何节点</span>     
                                                <?php }?>
												<div class="tab-content">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['classifications']->value, 'classification');
$_smarty_tpl->tpl_vars['classification']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['classification']->value) {
$_smarty_tpl->tpl_vars['classification']->do_else = false;
?>
                                                    <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['classification']->value->sort == $_smarty_tpl->tpl_vars['firstShow']->value) {?>active show<?php }?>" id="node_show_<?php echo $_smarty_tpl->tpl_vars['classification']->value->classification;?>
">
                                                            <div class="row g-10">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servers']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?> 
                                                                    <?php if ($_smarty_tpl->tpl_vars['server']->value->node_classification == $_smarty_tpl->tpl_vars['classification']->value->classification) {?>                     
                                                                        <div class="col-xl-4">
                                                                            
                                                                            <div class="d-flex h-100 rounded-3 bg-light bg-opacity-75 align-items-center flex-wrap ribbon ribbon-top" type="button" onclick="KTUsersShowNodeInfo(<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
, <?php echo $_smarty_tpl->tpl_vars['server']->value->node_class;?>
)">
                                                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->class >= $_smarty_tpl->tpl_vars['server']->value->node_class) {?>
                                                                                    <div class="d-flex ribbon-label bg-success fs-9">
                                                                                        已解锁
                                                                                    </div>
                                                                                <?php } else { ?>
                                                                                    <div class="d-flex ribbon-label bg-danger fs-9">
                                                                                        未解锁
                                                                                    </div>
                                                                                <?php }?>
                                                                                <div class="w-100 px-10 py-5 d-flex flex-warp">                                                      
                                                                                    <div class="d-flex flex-column">
                                                                                        <img alt="image" class="rounded-circle shadow" width="35"
                                                                                            src="/theme/zero/assets/media/flags/<?php echo $_smarty_tpl->tpl_vars['server']->value->node_flag;?>
.svg">
                                                                                    </div>
                                                                                    <div class="d-flex flex-row-fluid flex-column flex-center">
                                                                                        <span class="fw-bold fs-3"><?php echo $_smarty_tpl->tpl_vars['server']->value->name;?>
</span>                                                                                       
                                                                                        
                                                                                    </div>                             
                                                                                </div>
                                                                                <div class="px-10 mb-3 d-flex flex-warp">
                                                                                    <span class="me-2"><i class="bi bi-people fs-4 me-1"></i><?php echo $_smarty_tpl->tpl_vars['server']->value->getNodeOnlineUserCount();?>
</span>
                                                                                    <span class="me-2"><i class="bi bi-lightning-charge fs-4 me-1"></i><?php echo $_smarty_tpl->tpl_vars['server']->value->traffic_rate;?>
倍</span>
                                                                                    <span class="me-2"><i class="bi bi-hdd-rack fs-4 me-1"></i><?php echo $_smarty_tpl->tpl_vars['server']->value->nodeType();?>
</span>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->is_admin) {?>
                                                                                        <span class="me-2"><i class="bi bi-arrow-clockwise me-1"></i><?php echo $_smarty_tpl->tpl_vars['server']->value->nodeLoad();?>
</span>
                                                                                        <?php if ($_smarty_tpl->tpl_vars['server']->value->node_traffic_limit > 0) {?>
                                                                                            <span><i class="bi bi-activity fs-4 me-1"></i><?php echo $_smarty_tpl->tpl_vars['server']->value->nodeUsedTraffic();?>
/<?php echo $_smarty_tpl->tpl_vars['server']->value->node_traffic_limit/1024/1024/1024;?>
GB</span>
                                                                                        <?php }?>
                                                                                    <?php }?>
                                                                                </div>    
                                                                            </div>
                                                                        </div>
                                                                    <?php }?>
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </div>
                                                        </div>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app_footer py-4 d-flex flex-lg-column" id="kt_app_footer">
                            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                                <div class="text-dark-75 order-2 order-md-1">
                                    &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
>,&nbsp;<a><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
,&nbsp;Inc.&nbsp;All rights reserved.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender('file:include/index/news.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<!-- vmess modal -->
        <div class="modal fade" id="zero_modal_vmess_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="zero_modal_vmess_node_info_title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content shadow-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">
						<strong id="zero_modal_vmess_node_info_remark"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('node name');?>
</strong></h4>
                    </div>
                    <div class="modal-body align-items-center" id="zero_modal_vmess_node_info_body">
						<nav class="nav nav-tabs nav-justified" role="tablist">
							<button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true" data-bs-target="#zero_modal_tab_vmess_qrcode">
								<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('qrcode');?>

							</button>
							<button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false" data-bs-target="#zero_modal_tab_vmess_config">
								<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('config');?>

							</button>
                        </nav>
                        <div class="tab-content m-0 p-0">
                            <div class="tab-pane fade active show" id="zero_modal_tab_vmess_qrcode">
                                
                                    <div class="text-center pt-10" id="zero_modal_vmess_node_info_qrcode">
                                    </div>
                                
                            </div>
                            <div class="tab-pane fade show" id="zero_modal_tab_vmess_config">
								<div class="pt-10 pl-10 ms-10 text-start fs-4">
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('address');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_address"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('port');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_port"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('alter id');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_aid"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('uuid');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_uuid"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('network');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_net"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('path');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_path"></span></p>
									<p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('host');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_host"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('grpc servicename');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_servicename"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('protocol');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_type"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('security');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_security"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('discard');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- vless modal -->
        <div class="modal fade" id="zero_modal_vless_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="zero_modal_vless_node_info_title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content shadow-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">
						<strong id="zero_modal_vless_node_info_remark"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('node name');?>
</strong></h4>
                    </div>
                    <div class="modal-body align-items-center" id="zero_modal_vless_node_info_body">
						<nav class="nav nav-tabs nav-justified" role="tablist">
							<button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true" data-bs-target="#zero_modal_tab_vless_qrcode">
								<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('qrcode');?>

							</button>
							<button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false" data-bs-target="#zero_modal_tab_vless_config">
								<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('config');?>

							</button>
                        </nav>
                        <div class="tab-content m-0 p-0">
                            <div class="tab-pane fade active show" id="zero_modal_tab_vless_qrcode">
                                
                                    <div class="text-center pt-10" id="zero_modal_vless_node_info_qrcode">
                                    </div>
                                
                            </div>
                            <div class="tab-pane fade show" id="zero_modal_tab_vless_config">
								<div class="pt-10 pl-10 ms-10 text-start fs-4">
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('address');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_address"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('port');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_port"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('uuid');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_uuid"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('network');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_net"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('path');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_path"></span></p>
									<p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('host');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_host"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('grpc servicename');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_servicename"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('protocol');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_type"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('security');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_security"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('flow');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_flow"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('sni');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_sni"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('discard');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
		<!-- ss modal -->
		<div class="modal fade" id="zero_modal_shadowsocks_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="zero_modal_vmess_node_info_title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content shadow-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">
						<strong id="zero_modal_shadowsocks_node_info_remark"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('node name');?>
</strong></h4>
                    </div>
                    <div class="modal-body align-items-center" id="zero_modal_shadowsocks_node_info_body">
                        <nav class="nav nav-tabs nav-justified" role="tablist">
							<button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true" data-bs-target="#zero_modal_tab_shadowsocks_qrcode">
								<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('qrcode');?>

							</button>
							<button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false" data-bs-target="#zero_modal_tab_shadowsocks_config">
								<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('config');?>

							</button>
                        </nav>
                        <div class="tab-content m-0 p-0">
                            <div class="tab-pane fade active show" id="zero_modal_tab_shadowsocks_qrcode">
                                
                                    <div class="text-center pt-10" id="zero_modal_shadowsocks_node_info_qrcode">
                                    </div>
                                
                            </div>
                            <div class="tab-pane fade show" id="zero_modal_tab_shadowsocks_config">
                                <div class="pt-10 pl-10 ms-10 text-start fs-4">
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('address');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_shadowsocks_node_info_address"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('port');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_shadowsocks_node_info_port"></span></p>
									<p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('encrypt');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_shadowsocks_node_info_method"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('passwd');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_shadowsocks_node_info_passwd"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('discard');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- trojan modal -->
		<div class="modal fade" id="zero_modal_trojan_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="zero_modal_vmess_node_info_title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content shadow-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">
						<strong id="zero_modal_trojan_node_info_remark"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('node name');?>
</strong></h4>
                    </div>
                    <div class="modal-body align-items-center" id="zero_modal_trojan_node_info_body">
                        <nav class="nav nav-tabs nav-justified" role="tablist">
							<button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true" data-bs-target="#zero_modal_tab_trojan_qrcode">
								<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('qrcode');?>

							</button>
							<button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false" data-bs-target="#zero_modal_tab_trojan_config">
								<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('config');?>

							</button>
                        </nav>
                        <div class="tab-content m-0 p-0">
                            <div class="tab-pane fade active show" id="zero_modal_tab_trojan_qrcode">
                                
                                    <div class="text-center pt-10" id="zero_modal_trojan_node_info_qrcode">
                                    </div>
                                
                            </div>
                            <div class="tab-pane fade show" id="zero_modal_tab_trojan_config">
                                <div class="pt-10 pl-10 ms-10 text-start fs-4">
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('address');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_trojan_node_info_address"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('port');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_trojan_node_info_port"></span></p>
									<p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('sni');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_trojan_node_info_sni"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('uuid');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_trojan_node_info_uuid"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('security');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_trojan_node_info_security"></span></p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('flow');?>
: <span class="badge badge-secondary badge-lg" id="zero_modal_trojan_node_info_flow"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('discard');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender('file:include/global/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php echo '<script'; ?>
 src="/js/qrcode.min.js"><?php echo '</script'; ?>
>
    </body>
</html>
                                            
                                                            
                                                                    <?php }
}
