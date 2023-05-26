<?php
/* Smarty version 4.3.1, created on 2023-05-02 12:43:01
  from '/var/www/zero/resources/views/zero/user/tutorial/android/clash.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645094d5bb9cf0_15502377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1bf70cd9207128931a5fe5c55f20de8ba05a728' => 
    array (
      0 => '/var/www/zero/resources/views/zero/user/tutorial/android/clash.tpl',
      1 => 1683002502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/index/menu.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
  ),
),false)) {
function content_645094d5bb9cf0_15502377 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 Clash</title>
        <link href="/theme/zero/assets/css/zero.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8" />
        <meta name="renderer" content="webkit" />
        <meta name="description" content="Updates and statistics" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="format-detection" content="telephone=no,email=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="theme-color" content="#3B5598" />
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
                                    <div class="row">
                                        <div class="col-12">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['knowledges']->value, 'knowledge');
$_smarty_tpl->tpl_vars['knowledge']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['knowledge']->value) {
$_smarty_tpl->tpl_vars['knowledge']->do_else = false;
?>
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <div class="fs-2 fw-bold text-dark">
                                                            <?php echo $_smarty_tpl->tpl_vars['knowledge']->value->title;?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">                                                   
                                                    <?php echo $_smarty_tpl->tpl_vars['knowledge']->value->content;?>
                                                   
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
        <?php $_smarty_tpl->_subTemplateRender('file:include/global/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html><?php }
}
