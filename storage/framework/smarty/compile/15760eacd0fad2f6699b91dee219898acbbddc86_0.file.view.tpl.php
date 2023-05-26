<?php
/* Smarty version 4.3.1, created on 2023-04-01 22:47:55
  from '/var/www/zero/resources/views/zero/user/ticket/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6428441b3b0589_07300801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15760eacd0fad2f6699b91dee219898acbbddc86' => 
    array (
      0 => '/var/www/zero/resources/views/zero/user/ticket/view.tpl',
      1 => 1680174611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/index/menu.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
  ),
),false)) {
function content_6428441b3b0589_07300801 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
	<title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 Ticket Detail</title>
        
        <meta charset="UTF-8" />
        <meta name="renderer" content="webkit" />
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
                                    <div class="card">
                                        <div class="card-body">
											<div class="mb-9">
												<div class="accordion" id="zero_accordion_ticket">
													<div class="accordion-item">
														<div class="accordion-header" id="zero_accordion_ticket_header">
															<button class="accordion-button fs-4 fw-semibold" type="button"  data-bs-toggle="collapse" data-bs-target="#zero_accordion_ticket_body" aria-expanded="true" aria-controls="zero_accordion_ticket_body">
																<?php echo $_smarty_tpl->tpl_vars['trans']->value->t('reply');?>

															</button>
														</div>
														<div class="accordion-collapse collapse show" id="zero_accordion_ticket_body" aria-labelledby="zero_accordion_ticket_header" data-bs-parent="#zero_accordion_ticket">
															<div class="accordion-body">
																<textarea id="zero_reply_ckeditor_classic" name="zero_reply_ckeditor_classic">
																</textarea>
																<div class="d-flex align-items-center mt-5">
																	<button class="btn btn-primary" type="submit" data-kt-users-action="submit" onclick="KTUsersTicket('reply_ticket', <?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
, 1)">
																		<span class="indicator-label"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('submit');?>
</span>
																		<span class="indicator-progress"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('please wait');?>

																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
															</div>
															
														</div>
													</div>
												</div>
											</div>
												
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
                                            <div class="mb-9">
                                                <div class="card card-bordered w-100">
													
                                                    <div class="card-body">
                                                        <div class="w-100 d-flex flex-stack mb-8">
                                                            <div class="d-flex align-itmes-center f">
																<i class="bi bi-person-fill fs-3x me-3 <?php if ($_smarty_tpl->tpl_vars['ticket']->value->user()->is_admin == 1) {?>text-primary <?php } else { ?>text-success<?php }?>"></i>
                                                                <div class="d-flex flex-column fw-semibold fs-5 text-gray-600 text-dark">
                                                                    <div class="d-flex align-items-center">
                                                                        <a class="text-gray-800 fw-bold text-hover-primary fs-5 me-3"><?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter_email'];?>
</a>
                                                                        <span class="mb-0"></span>
                                                                    </div>
                                                                    <span class="text-muted fw-semibold fs-6"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['comment']->value['datetime']);?>
</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fw-normal fs-3 text-gray-700 m-0"><?php echo nl2br($_smarty_tpl->tpl_vars['comment']->value['comment']);?>
</div>
                                                    </div>
													
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
		<?php echo '<script'; ?>
 src="/js/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
var editors;
ClassicEditor
    .create(document.getElementById('zero_reply_ckeditor_classic'), {
        toolbar: [ 'heading', 'bold', 'italic', 'link', 'undo', 'redo']
    })
    .then(editor => {
        editors = editor;
    })
    .catch(error => {
        console.error(error);
    });
<?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
