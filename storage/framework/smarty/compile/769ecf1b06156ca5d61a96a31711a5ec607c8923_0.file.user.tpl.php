<?php
/* Smarty version 4.3.1, created on 2023-05-19 00:20:59
  from '/var/www/zero/resources/views/zero/admin/user/user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6466506b32f197_20780263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '769ecf1b06156ca5d61a96a31711a5ec607c8923' => 
    array (
      0 => '/var/www/zero/resources/views/zero/admin/user/user.tpl',
      1 => 1683724119,
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
function content_6466506b32f197_20780263 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 用户</title>
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
	<?php $_smarty_tpl->_subTemplateRender('file:admin/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid mt-10">
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <div id="kt_app_content_container" class="app-container container-xxl">

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">用户列表</div>
                                            <div class="card-toolbar">
                                                <div class="d-flex align-items-center position-relative me-2 my-2">
                                                    <span class="svg-icon svg-icon-1 position-absolute ms-6"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                        </svg>
                                                    </span>
                                                    <input type="text" data-kt-admin-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers"/>
                                                </div>
                                                <button class="btn btn-primary btn-sm fw-bold" data-bs-toggle="modal" data-bs-target="#zero_modal_create_user">
                                                    <i class="bi bi-cloud-plus fs-3"></i>创建用户
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body" id="KTAdmin_node_record">
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
        <!-- modal -->
        <div class="modal fade" id="zero_modal_create_user" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
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
                            <h1 class="mb-3">创建用户</h1>
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">邮箱</span>
                            </label>                         
                            <input type="text" value="" class="form-control form-control-solid" placeholder="账号" id="zero_create_user_email">
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">密码</span>
                            </label>
                            <input type="text" value="" class="form-control form-control-solid" placeholder="留空则与邮箱相同" id="zero_create_user_passwd">
                        </div>                  
                        <div class="d-flex flex-center flex-row-fluid pt-12">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('discard');?>
</button>
                            <button type="submit" class="btn btn-primary" data-kt-admin-update-ban-rule-action="submit" onclick="zeroCreateUser()">
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

        <!-- modal order -->
        <div class="modal fade" id="zero_modal_create_order_for_user" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
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
                            <h1 class="mb-3">分配订单</h1>
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="fw-6 fw-semibold mb-2">
                                <span class="required">用户ID</span>
                            </label>
                            <input class="form-control form-control-solid" type="text" value="" placeholder="用户ID" id="zero_create_order_user_id">
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required">选择产品</span>
                            </label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" id="zero_create_order_product_id" data-placeholder="选择产品">
                                <option></option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                    <option value=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required">选择周期</span>
                            </label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" id="zero_create_order_product_period" data-placeholder="选择周期">
                                <option></option>
                                <option value="30">一月</option>
                                <option value="90">三个月</option>
                                <option value="180">半年</option>
                                <option value="360">一年</option>
                                <option value="720">两年</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="fw-6 fw-semibold mb-2">
                                <span class="required">支付金额</span>
                            </label>
                            <input class="form-control form-control-solid" type="text" value="" placeholder="请输入需要支付的金额,留空则默认为产品价格" id="zero_create_order_total">
                        </div>              
                        <div class="d-flex flex-center flex-row-fluid pt-12">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('discard');?>
</button>
                            <button type="submit" class="btn btn-primary" data-kt-admin-update-ban-rule-action="submit" onclick="zeroCreateOrderForUser()">
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
>
            window.addEventListener('load', () => {
                <?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            })
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function updateUserStatus(type, id){
                switch (type){
                    case 'enable':
                        var enable = $("#user_enable_"+id).prop("checked") ? 1 : 0;
                        $.ajax({
                            type: "PUT",
                            url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/user/update/status/enable",
                            dataType: "JSON",
                            data: {
                                enable,
                                id,
                            },
                            success: function(data){}
                        });
                        break;
                    case 'is_admin':                      
                        var is_admin = $("#user_is_admin_"+id).prop("checked") ? 1 : 0;
                        $.ajax({
                            type: "PUT",
                            url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/user/update/status/is_admin",
                            dataType: "JSON",
                            data: {
                                is_admin,
                                id,
                            },
                            success: function(data){}
                        });
                        break;
                }
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function zeroCreateUser() {
                $.ajax({
                    type: "POST",
                    url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/user/create",
                    dataType: "JSON",
                    data: {
                        email: $('#zero_create_user_email').val(),
                        passwd: $('#zero_create_user_passwd').val()
                    },
                    success: function (data) {
                        if (data.ret === 1) {
                            table_1.ajax.reload();
                            $("#zero_modal_create_user").modal('hide');
                            getResult(data.msg, '', 'success');
                        } else {
                            getResult('发生错误', '', 'error');
                        }
                    }
                });
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function zeroModalAdminCreateOrderForUser(id) {
                $('#zero_create_order_user_id').val(id);
                $('#zero_modal_create_order_for_user').modal('show');
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
        function zeroCreateOrderForUser() {
            $.ajax({
                type: "POST",
                url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/order/create",
                dataType: "JSON",
                data: {
                    id: $('#zero_create_order_user_id').val(),
                    product_id: $('#zero_create_order_product_id').val(),
                    product_period: $('#zero_create_order_product_period').val(),
                    order_total: $('#zero_create_order_total').val()
                },
                success: function (data) {
                    if (data.ret === 1) {
                        $("#zero_modal_create_order_for_user").modal('hide');
                        getResult(data.msg, '', 'success');
                    } else {
                        getResult(data.msg, '', 'error');
                    }
                }
            });
        }
    <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            const filterSearch = document.querySelector('[data-kt-admin-table-filter="search"]');
            filterSearch.addEventListener('keyup', function (e) {
                table_1.search(e.target.value).draw();
            });
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
