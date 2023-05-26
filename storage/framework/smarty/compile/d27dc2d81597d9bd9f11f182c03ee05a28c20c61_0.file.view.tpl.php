<?php
/* Smarty version 4.3.1, created on 2023-04-01 20:14:27
  from '/var/www/zero/resources/views/zero/admin/ticket/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64282023eeac78_23576937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd27dc2d81597d9bd9f11f182c03ee05a28c20c61' => 
    array (
      0 => '/var/www/zero/resources/views/zero/admin/ticket/view.tpl',
      1 => 1680350981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/menu.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:admin/script.tpl' => 1,
  ),
),false)) {
function content_64282023eeac78_23576937 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
	<title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 回复工单</title>
        
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
    <?php $_smarty_tpl->_subTemplateRender('file:admin/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
																	<button class="btn btn-primary" type="submit" data-kt-users-action="submit" onclick="zeroAdminUpdateTicket(<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
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
                        <?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender('file:admin/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php echo '<script'; ?>
 src="/js/ckeditor.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            var editors;
            ClassicEditor
                .create(document.getElementById('zero_reply_ckeditor_classic'))
                .then(editor => {
                    editors = editor;
                })
                .catch(error => {
                    console.error(error);
                });
            <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function zeroAdminUpdateTicket(id, ticket_status){
                const submitButton = document.querySelector('[data-kt-users-action="submit"]');
                submitButton.setAttribute('data-kt-indicator', 'on');
                submitButton.disabled = true;
                var text = editors.getData();
                setTimeout(function () {
                    $.ajax({
                        type: "PUT",
                        url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/ticket/update",
                        dataType: "json",
                        data: {
                            id,
                            status: ticket_status,
                            comment: text
                        },
                        success: function (data) {
                            if (data.ret == 1) {
                                location.reload();
                                submitButton.removeAttribute('data-kt-indicator');
                                submitButton.disabled = false;
                            } else {
                                getResult(data.msg, '', 'error');
                                submitButton.removeAttribute('data-kt-indicator');
                                submitButton.disabled = false;
                            }
                        }
                    });
                }, 2000);
            }
        <?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
