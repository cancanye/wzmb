<?php
/* Smarty version 4.3.1, created on 2023-05-10 15:00:20
  from '/var/www/zero/resources/views/zero/admin/news/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645b41046d1929_15712330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13a19d274906842766d192080b17de07baf2190a' => 
    array (
      0 => '/var/www/zero/resources/views/zero/admin/news/news.tpl',
      1 => 1683044631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/menu.tpl' => 1,
    'file:table/table.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:admin/script.tpl' => 1,
    'file:table/js_2.tpl' => 1,
  ),
),false)) {
function content_645b41046d1929_15712330 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 公告</title>
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
	<?php $_smarty_tpl->_subTemplateRender('file:admin/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid mt-10">
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <div id="kt_app_content_container" class="app-container container-xxl">

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">公告列表</div>
                                            <div class="card-toolbar">
												<button class="btn btn-primary fw-bold btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#zero_modal_create_news">
                                                <i class="bi bi-cloud-plus fs-3"></i>创建公告
                                                </button>
											</div>
                                        </div>
                                        <div class="card-body">
                                            <?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
        <div class="modal fade" id="zero_modal_create_news" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content rounded">
                    <div class="modal-header justify-content-end border-0 pb-0">
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                            
                        </div>
                    </div>
                    <div class="modal-body scroll-y pt-0 pb-15 px-5 px-xl-20">
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">创建公告</h1>
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('details');?>
</span>
                            </label>
                            <textarea id="zero_modal_create_news_ckeditor_classic" name="zero_modal_create_news_ckeditor_classic"></textarea>
                        </div>
                        <div class="d-flex flex-center flex-row-fluid pt-12">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('discard');?>
</button>
                            <button type="submit" class="btn btn-primary" data-kt-admin-create-news-action="submit" onclick="zeroAdminCreateNews()">
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
    
        <div class="modal fade" id="zero_modal_update_news" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content rounded">
                    <div class="modal-header justify-content-end border-0 pb-0">
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                            
                        </div>
                    </div>
                    <div class="modal-body scroll-y pt-0 pb-15 px-5 px-xl-20">
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">更新公告</h1>
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('details');?>
</span>
                            </label>
                            <textarea id="zero_modal_update_news_ckeditor_classic" name="zero_modal_update_news_ckeditor_classic"></textarea>
                        </div>
                        <div class="d-flex flex-center flex-row-fluid pt-12">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('discard');?>
</button>
                            <button type="submit" class="btn btn-primary" data-kt-admin-update-news-action="submit" onclick="zeroAdminUpdateNews()">
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
        <?php $_smarty_tpl->_subTemplateRender('file:admin/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php echo '<script'; ?>
 src="/js/ckeditor.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            var create_news_editors;
            ClassicEditor
                .create(document.getElementById('zero_modal_create_news_ckeditor_classic'), {
                    toolbar: [
                        'heading', 
                        '|',
                        'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                        '|',
                        'outdent', 'indent',
                        '|',
                        'undo', 'redo'
                    ]
                })
                .then(editor => {
                    create_news_editors = editor;
                })
                .catch(error => {
                    console.error(error);
                });
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            var update_news_editors;
            ClassicEditor
                .create(document.getElementById('zero_modal_update_news_ckeditor_classic'), {
                    toolbar: [
                        'heading', 
                        '|',
                        'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                        '|',
                        'outdent', 'indent',
                        '|',
                        'undo', 'redo'
                    ]
                })
                .then(editor => {
                    update_news_editors = editor;
                })
                .catch(error => {
                    console.error(error);
                });
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            window.addEventListener('load', () => {
                <?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            })
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function zeroAdminCreateNews(){
                const submitButton = document.querySelector('[data-kt-admin-create-news-action="submit"]');
                submitButton.setAttribute('data-kt-indicator', 'on');
                submitButton.disabled = true;
                var text = create_news_editors.getData();
                setTimeout(function () {
                    $.ajax({
                        type: "POST",
                        url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/news/create",
                        dataType: "json",
                        data: {
                            content: text,
                            issend: 1,
                            page: 1
                        },
                        success: function (data) {
                            if (data.ret == 1) {
                                getResult(data.msg, '', 'success');
                                submitButton.removeAttribute('data-kt-indicator');
                                submitButton.disabled = false;
                                $('#zero_modal_create_news').modal('hide');
                                table_1.ajax.reload();
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
        <?php echo '<script'; ?>
>
            function zeroAdminUpdateNews(type, id){
                const submitButton = document.querySelector('[data-kt-admin-update-news-action="submit"]');
                switch (type){
                    case 'request':
                        $.ajax({
                            type: "POST",
                            url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/news/request",
                            dataType: "json",
                            data:{
                                id,
                            },
                            success: function(data){
                                update_news_editors.data.set(data.content);
                                submitButton.setAttribute('onclick', 'zeroAdminUpdateNews("update", '+data.id+')')
                                $('#zero_modal_update_news').modal('show');
                            }
                        });
                        break;
                    case 'update':
                        submitButton.setAttribute('data-kt-indicator', 'on');
                        submitButton.disabled = true;
                        var text = update_news_editors.getData();
                        setTimeout(function () {
                            $.ajax({
                                type: "PUT",
                                url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/news/update",
                                dataType: "json",
                                data: {
                                    content: text,
                                    id
                                },
                                success: function (data) {
                                    if (data.ret == 1) {
                                        getResult(data.msg, '', 'success');
                                        submitButton.removeAttribute('data-kt-indicator');
                                        submitButton.disabled = false;
                                        $('#zero_modal_update_news').modal('hide');
                                        table_1.ajax.reload();
                                    } else {
                                        getResult(data.msg, '', 'error');
                                        submitButton.removeAttribute('data-kt-indicator');
                                        submitButton.disabled = false;
                                    }
                                }
                            });
                        }, 2000);
                        break;
                }
            }
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
