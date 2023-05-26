<?php
/* Smarty version 4.3.1, created on 2023-05-11 20:47:09
  from '/var/www/zero/resources/views/zero/user/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645ce3cd30df72_93759723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5839c683f80cae47ca028c0c48d9eb53204d2896' => 
    array (
      0 => '/var/www/zero/resources/views/zero/user/index.tpl',
      1 => 1683724119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/index/menu.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
    'file:include/index/news.tpl' => 1,
  ),
),false)) {
function content_645ce3cd30df72_93759723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/zero/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 Dashboard</title>
        <link href="/theme/zero/assets/css/zero.css" rel="stylesheet" type="text/css"/>
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
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<div class="col-xxl-6">
											<div class="card card-flush h-md-100">
												<div class="card-header border-0">
													<div class="card-title text-dark fs-3 fw-bolder"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('product details');?>
</div>
													<!--
													<?php if ($_smarty_tpl->tpl_vars['user']->value->class >= 1) {?>
														<div class="card-toolbar">
															<button class="btn btn-light-primary btn-sm" onclick="zeroUserRenewalProduct()">续费</button>
														</div>
													<?php }?>
													-->
												</div>     
												<div class="card-body pt-0">
													<div class="d-flex align-items-center mb-9 bg-light-warning rounded p-5">
														<span class="svg-icon svg-icon-warning svg-icon-1 me-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
																<path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
																<path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
																<path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
															</svg>
														</span>
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a class="fs-lg fw-bolder text-gray-800 mb-1">
																<?php if ($_smarty_tpl->tpl_vars['user']->value->class >= 1) {?>
																	<span class="counter"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('time');?>
:&nbsp;<span id="user_class_expired_time"></span></span>
																<?php } elseif ($_smarty_tpl->tpl_vars['user']->value->class <= 0) {?>
																	<span class="counter"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('time');?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('no product');?>
</span>
																<?php }?>
															</a>					   
															<span class="text-muted fw-semibold d-block">
																<?php if ($_smarty_tpl->tpl_vars['user']->value->class >= 1) {?>
																	<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('expired date');?>
:&nbsp;<?php echo substr($_smarty_tpl->tpl_vars['user']->value->class_expire,0,10);?>

																<?php }?>
															</span>
														</div>
														<div class="text-end">
															<i class="bi bi-database-add fs-2hx fw-bold text-warning" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="续费" onclick="KTUsersCreateOrder(3, '', '')"></i>
														</div>
													</div>
													<div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
														<span class="svg-icon svg-icon-success svg-icon-1 me-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-soundwave" viewBox="0 0 16 16">
																<path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z"/>
															</svg>
														</span>
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a class="fw-bolder text-gray-800 fs-lg mb-1">
																<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('traffic');?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->usedTraffic();?>
 / <span id="traffic"><?php echo $_smarty_tpl->tpl_vars['user']->value->enableTraffic();?>
</span>
															</a>
															<span class="text-muted fw-semibold d-block">
																<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('reset date');?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->productTrafficResetDate();?>

															</span>
														</div>
													</div>
													<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-9">
														<span class="svg-icon svg-icon-danger svg-icon-1 me-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
																<path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
																<path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
															</svg>
														</span>
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a class="fw-bolder text-gray-800 fs-lg mb-1">
																<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('online ip');?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->onlineIPCount();?>
 / <?php if ($_smarty_tpl->tpl_vars['user']->value->node_iplimit === 0) {
echo $_smarty_tpl->tpl_vars['trans']->value->t('unlimited');
} else {
echo $_smarty_tpl->tpl_vars['user']->value->node_iplimit;
}?>
															</a>
															<span class="text-muted fw-semibold d-block">
																<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('latest used date');?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->lastUseTime();?>

															</span>
														</div>
													</div>
													<div class="d-flex align-items-center bg-light-info rounded p-5 mb-5">
														<span class="svg-icon svg-icon-info svg-icon-1 me-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
																<path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
															</svg>
														</span>
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a class="fw-bolder text-gray-800 fs-lg mb-1">
																<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('credit');?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
 $
															</a>
															<span class="text-muted fw-semibold d-block">
																<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('commission');?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->commission;?>
 $
															</span>
														</div>
														<div class="text-end">
															
														<i class="bi bi-plus-circle fs-2hx fw-bold text-info" type="button" data-bs-toggle="modal" data-bs-target="#zero_user_add_credit_modal"></i>
															
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xxl-6">
											<div class="card card-flush mb-5">
												<div class="card-header pt-5">
													<div class="card-title  fw-bold text-dark fs-3"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('traffic details');?>
</div>
												</div>
												<div class="card-body d-flex flex-column pt-0">
													<div id="zero_user_traffic_chart" data-kt-chart-color="success" style="height: 150px; min-height: 130px;"></div>
												</div>
											</div>
											<div class="card card-flush">
												<div class="card-header border-0">
													<div class="card-title text-dark fw-bolder fs-3">														
														<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('subscription url');?>

													</div>
												</div>
												<div class="card-body pt-0">
													<div class="row">
														<div class="col">
															<!-- Clash订阅 -->
															<div class="btn-group mb-3 mr-3">
																<button type="button" class="btn btn-pill btn-clash dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zero-clash text-white"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('clash');?>
&nbsp;&nbsp;</button>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item copy-text" href="Javascript:;" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['clash'];?>
"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('copy');?>
</a></li>
																	<li><hr class="dropdown-divider"></li>
																	<li><a class="dropdown-item" href="Javascript:;" onclick="oneclickImport('clash', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['clash'];?>
')"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('import');?>
</a></li>
																</ul>
															</div>
															<!-- Surge订阅 -->
															<div class="btn-group mb-3 mr-3">
																<button type="button" class="btn btn-pill btn-surge dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zero-surge text-white"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('surge');?>
&nbsp;&nbsp;</button>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item copy-text" href="Javascript:;" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surge"];?>
"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('copy');?>
</a></li>
																	<li><hr class="dropdown-divider"></li>
																	<li><a class="dropdown-item" href="Javascript:;" onclick="oneclickImport('surge4', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['surge'];?>
')"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('import');?>
</a></li>
																</ul>
															</div>
															<!-- ss订阅 -->
															<div class="btn-group mb-3 mr-3">
																<button type="button" class="btn btn-pill btn-surfboard copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["shadowsocks"];?>
"><i class="zero-ssr text-white"></i>&nbsp;&nbsp;SS&nbsp;&nbsp;</button>
															</div>
															<!-- V2Ray订阅 -->
															<div class="btn-group mb-3 mr-3">
																<button type="button" class="btn btn-pill btn-v2ray copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["v2rayn"];?>
"><i class="zero-v2rayng text-white"></i><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('v2rayn');?>
</button>
															</div>
															<!-- Shadowrocket订阅 -->
															<div class="btn-group mb-3 mr-3">
																<button type="button" class="btn btn-pill btn-shadowrocket dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zero-shadowrocket text-white"></i><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('shadowrocket');?>
</button>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item copy-text" href="Javascript:;" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['shadowrocket'];?>
"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('copy');?>
</a></li>
																	<li><hr class="dropdown-divider"></li>
																	<li><a class="dropdown-item" href="Javascript:;" onclick="oneclickImport('shadowrocket', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['shadowrocket'];?>
')"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('import');?>
</a></li>
																</ul>
															</div>
															<!-- Quantumult订阅 -->
															<div class="btn-group mb-3 mr-3">
																<button type="button" class="btn btn-pill btn-quantumult dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zero-quantumult text-white"></i><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('quan');?>
</button>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item copy-text" href="Javascript:;" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['quantumult'];?>
"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('copy');?>
</a></li>
																	<li><hr class="dropdown-divider"></li>
																	<li><a class="dropdown-item" href="Javascript:;" onclick="oneclickImport('quantumult', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['quantumult'];?>
')"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('import');?>
</a></li>
																</ul>
															</div>
															<!-- QuantumultX订阅 -->
															<div class="btn-group mb-3 mr-3">
																<button class="btn btn-pill btn-quantumultx dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="zero-quantumultx text-white"></i>
																	<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('quanx');?>

																</button>
																<ul class="dropdown-menu">
																	<li>
																		<a class="dropdown-item copy-text" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['quantumultx'];?>
"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('copy');?>
</a>
																	</li>
																	<li>
																		<hr class="dropdown-divider">
																	</li>
																	<li>
																		<a class="dropdown-item" type="button" onclick="oneclickImport('quantumultx', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['quantumultx'];?>
')"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('import');?>
</a>
																	</li>
																</ul>
															</div>
															<!-- Surfboard订阅 -->
															<div class="btn-group mb-3 mr-3">
																<button type="button" class="btn btn-pill btn-surfboard dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zero-surfboard text-white"></i><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('surfboard');?>
</button>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item copy-text" href="Javascript:;" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surfboard"];?>
"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('copy');?>
</a></li>
																	<li><hr class="dropdown-divider"></li>
																	<li><a class="dropdown-item" href="Javascript:;" onclick="oneclickImport('surfboard', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['surfboard'];?>
')"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('import');?>
</a></li>
																</ul>
															</div>
															<!-- AnXray订阅 -->
															<div class="btn-group mb-3 mr-3">
																<button type="button" class="btn btn-pill btn-kitsunebi dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zero-ssr text-white"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('sagernet');?>
&nbsp;&nbsp;</button>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item copy-text" href="Javascript:;" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["anxray"];?>
"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('copy');?>
</a></li>
																	<li><hr class="dropdown-divider"></li>
																	<li><a class="dropdown-item" href="Javascript:;" onclick="oneclickImport('sagernet', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['anxray'];?>
')"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('import');?>
</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>                                   
									</div>
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<div class="col-xxl-8">
										<div class="card card-flush">
												<div class="card-header">
													<div class="card-title">
														<div class="fw-bolder text-dark fs-h3">
															<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('tutorial details');?>

														</div>
													</div>
												
													<div class="card-toolbar">
														<ul class="nav">
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_tab_pane_1_1">Android</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_tab_pane_2_2">IOS</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_tab_pane_3_3">MACOS</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4" data-bs-toggle="tab" href="#kt_tab_pane_4_4">Windows</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="card-body pt-0">
													<div class="tab-content mt-5">
													<div class="tab-pane fade show active" id="kt_tab_pane_1_1">
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zeroconfig']->value['client_android'], 'c_w');
$_smarty_tpl->tpl_vars['c_w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_w']->value) {
$_smarty_tpl->tpl_vars['c_w']->do_else = false;
?>
														<div class="d-flex align-items-center flex-wrap mb-8">
															<div class="symbol symbol-40px symbol-light me-5">
																<span class="symbol-label">
																	<img src="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['img'];?>
" class="h-50 align-self-center" alt="">
																</span>
															</div>
															<div class="d-flex flex-column flex-grow-1 me-2">
																<a  class="fw-bold text-gray-800 fs-h5 mb-1"><?php echo $_smarty_tpl->tpl_vars['c_w']->value['name'];?>
</a>
															</div>
															<a href="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['url'];?>
" class="badge badge-light-primary my-lg-0 my-2  fw-bolde fs-5"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('view');?>
</a>
														</div>
														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</div>
													<div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel" aria-labelledby="kt_tab_pane_2_2">
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zeroconfig']->value['client_ios'], 'c_w');
$_smarty_tpl->tpl_vars['c_w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_w']->value) {
$_smarty_tpl->tpl_vars['c_w']->do_else = false;
?>
														<div class="d-flex align-items-center flex-wrap mb-8">
															<div class="symbol symbol-40px symbol-light me-5">
																<span class="symbol-label">
																	<img src="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['img'];?>
" class="h-50 align-self-center" alt="">
																</span>
															</div>
															<div class="d-flex flex-column flex-grow-1 mr-2">
																<a  class="fw-bold text-gray-800 fs-h5 mb-1"><?php echo $_smarty_tpl->tpl_vars['c_w']->value['name'];?>
</a>
															</div>
															<a href="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['url'];?>
" class="badge badge-light-primary my-lg-0 my-2  fw-bolde fs-5"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('view');?>
</a>
														</div>
														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</div>
													<div class="tab-pane fade" id="kt_tab_pane_3_3" role="tabpanel" aria-labelledby="kt_tab_pane_3_3">
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zeroconfig']->value['client_macos'], 'c_w');
$_smarty_tpl->tpl_vars['c_w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_w']->value) {
$_smarty_tpl->tpl_vars['c_w']->do_else = false;
?>
														<div class="d-flex align-items-center flex-wrap mb-8">
															<div class="symbol symbol-40px symbol-light me-5">
																<span class="symbol-label">
																	<img src="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['img'];?>
" class="h-50 align-self-center" alt="">
																</span>
															</div>
															<div class="d-flex flex-column flex-grow-1 mr-2">
																<a  class="fw-bold text-gray-800 fs-h5 mb-1"><?php echo $_smarty_tpl->tpl_vars['c_w']->value['name'];?>
</a>
															</div>
															<a href="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['url'];?>
" class="badge badge-light-primary my-lg-0 my-2  fw-bolde fs-5"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('view');?>
</a>
														</div>
														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</div>
													<div class="tab-pane fade" id="kt_tab_pane_4_4" role="tabpanel" aria-labelledby="kt_tab_pane_4_4">
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zeroconfig']->value['client_windows'], 'c_w');
$_smarty_tpl->tpl_vars['c_w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_w']->value) {
$_smarty_tpl->tpl_vars['c_w']->do_else = false;
?>
														<div class="d-flex align-items-center flex-wrap mb-8">
															<div class="symbol symbol-40px symbol-light me-5">
																<span class="symbol-label">
																	<img src="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['img'];?>
" class="h-50 align-self-center" alt="">
																</span>
															</div>
															<div class="d-flex flex-column flex-grow-1 mr-2">
																<a  class="fw-bold text-gray-800 fs-h5 mb-1"><?php echo $_smarty_tpl->tpl_vars['c_w']->value['name'];?>
</a>
															</div>
															<a href="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['url'];?>
" class="badge badge-light-primary my-lg-0 my-2  fw-bolde fs-5"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('view');?>
</a>
														</div>
														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xxl-4">
										<div class="card card-flush h-md-100" style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">                                   
                                                <div class="card-body">                                        
                                                    <div class="row align-items-center h-100">                                           
                                                        <div class="col-7 ps-xl-13">                                                
                                                            <div class="text-white mb-6 pt-6">
                                                                <span class="fs-h4 fw-bold me-2 d-block lh-1 pb-2 opacity-75"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('ref.gift');?>
</span>
                                                                <span class="fs-h2 fw-bolder"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('ref.referral');?>
</span>
                                                            </div>                                                                                              
                                                            <span class="fw-bold text-white fs-h6 mb-8 d-block opacity-75"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['trans']->value->t('ref.content 1'),'ZeroBoard',$_smarty_tpl->tpl_vars['config']->value['appName']);
echo $_smarty_tpl->tpl_vars['config']->value['rebate_ratio'];?>
%</span>                                               
                                                            <span class="fw-bold text-white fs-h6 mb-8 d-block opacity-75"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('ref.content 2');?>
</span>                                                                                          
                                                            <div class="d-flex flex-column flex-sm-row">
                                                                <a href="JavaScript:;" class="btn btn-success flex-shrink-0 mr-2 fw-bold copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['invite_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('ref.copy');?>
</a>
                                                            </div>                                                
                                                        </div>                                                                                        
                                                        <div class="col-5 pt-10">                                               
                                                            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px" style="background-image:url('/theme/zero/assets/media/svg/illustrations/easy/5.svg');"></div>                                                
                                                        </div>                                           
                                                    </div>                                       
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
		<!-- add credit modal -->
		<div class="modal fade" id="zero_user_add_credit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-lg">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLongTitle"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('add credit');?>
</h4>
                    </div>
                    <div class="modal-body">
                        <label class="col-form-label fw-bold" for="recipient-name"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('amount');?>
:</label>		
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('amount');?>
" id="add_credit_amount">
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('discard');?>
</button>
                        <button type="submit" class="btn btn-primary" data-kt-users-action="submit" onclick="KTUsersCreateOrder(2, '', '')">
                            <span class="indicator-label"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('submit');?>
</span>			
                            <span class="indicator-progress"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('please wait');?>

                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
		<?php $_smarty_tpl->_subTemplateRender('file:include/global/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:include/index/news.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php echo '<script'; ?>
>countdown('<?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
', 'user_class_expired_time')<?php echo '</script'; ?>
>							
	</body>
</html>
<?php }
}
