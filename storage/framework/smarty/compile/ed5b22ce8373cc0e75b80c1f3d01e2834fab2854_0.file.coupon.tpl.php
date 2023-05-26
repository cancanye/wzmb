<?php
/* Smarty version 4.3.1, created on 2023-05-07 20:49:44
  from '/var/www/zero/resources/views/zero/admin/coupon/coupon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64579e68019ce2_02315884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed5b22ce8373cc0e75b80c1f3d01e2834fab2854' => 
    array (
      0 => '/var/www/zero/resources/views/zero/admin/coupon/coupon.tpl',
      1 => 1683463780,
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
function content_64579e68019ce2_02315884 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 优惠码</title>
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
                                            <div class="card-title text-dark fs-3 fw-bolder">优惠码记录</div>
                                            <div class="card-toolbar">
                                                <button class="btn btn-primary btn-sm" type="button" id="kt_drawer_coupon_toggle">
                                                    <i class="bi bi-cloud-plus fs-3"></i>创建优惠码
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

        <div id="kt_drawer_coupon" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="coupon" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{ default:'300px', 'md': '500px' }" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_coupon_toggle" data-kt-drawer-close="#kt_drawer_coupon_close">
            <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
                <div class="card-header pe-5" id="kt_drawer_coupon_messenger_header">
                    <div class="card-title">
                        <div class="me-3">
                            <p class="fs-4 fw-bold text-gray-900 me-1 mb-2 lh-1">创建优化码</a>
                        </div>
                    </div>
                    <div class="card-toolbar">
                        <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body" id="kt_drawer_cpupon_messenger_body">
                    <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                            <div class="card card-bordered mb-2">
                                <div class="card-body">
                                    <div class="d-flex flex-column mb-8">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">优惠码</span>
                                        </label>
                                        <input type="text" value="" class="form-control form-control-solid" placeholder="优惠码" id="zero_create_coupon_code">
                                    </div>
                                    <div class="d-flex flex-column mb-8">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">折扣比例</span>
                                        </label>
                                        <div class="input-group input-group-solid">
                                            <input type="text" value="" class="form-control form-control-solid" placeholder="折扣比例" id="zero_create_coupon_dicount_rate">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mb-8">
                                        <label class="fs-6 fw-semibold mb-2">
                                            <span class="required">有效时间</span>
                                        </label>
                                        <div class="input-group input-group-solid">
                                            <input type="text" value="1" class="form-control form-control-solid" placeholder="有效时间" id="zero_create_coupon_valid_time">
                                            <span class="input-group-text">小时</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mb-8">
                                        <label class="fs-6 fw-semibold mb-2">
                                            <span class="required">指定商品</span>
                                        </label>
                                        <select class="form-select form-select-solid" id="zero_create_coupon_limit_product" data-control="select2" data-close-on-select="false" data-placeholder="限制指定产品使用优惠" data-allow-clear="true" multiple="multiple">
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
                                            <span class="required">指定周期</span>
                                        </label>
                                        <select class="form-select form-select-solid" id="zero_create_coupon_limit_product_period" data-control="select2" data-close-on-select="false" data-placeholder="限制指定周期使用优惠" data-allow-clear="true" multiple="multiple">                            
                                            <option></option>
                                            <option value="30">一个月</option>
                                            <option value="90">三个月</option>
                                            <option value="180">半年</option>
                                            <option value="360">一年</option>
                                            <option value="720">两年</option>
                                        </select>
                                    </div>
                                    <div class="d-flex flex-column mb-8">
                                        <label class="fs-6 fw-semibold mb-2">
                                            <span class="required">用户使用次数</span>
                                        </label>
                                        <div class="input-group input-group-solid">
                                            <input type="text" value="" class="form-control form-control-solid" placeholder="默认为无限制" id="zero_create_coupon_per_times">
                                            <span class="input-group-text">次</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mb-8">
                                        <label class="fs-6 fw-semibold mb-2">
                                            <span class="required">总使用次数</span>
                                        </label>
                                        <div class="input-group input-group-solid">
                                            <input type="text" value="" class="form-control form-control-solid" placeholder="默认为无限制" id="zero_create_coupon_total_times">
                                            <span class="input-group-text">次</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mb-8">
                                        <label class="fs-6 fw-semibold mb-2">
                                            <span class="required">生成方式</span>
                                        </label>
                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" id="zero_create_coupon_generation_method">
                                            <option value="1">指定字符</option>
                                            <option value="2">随机字符</option>
                                            <option value="3">指定字符+随机字符</option>
                                        </select>
                                    </div>
                                    <div class="d-flex flex-center flex-row-fluid pt-12">
                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('discard');?>
</button>
                                        <button type="submit" class="btn btn-primary" data-kt-admin-action="submit" onclick="zeroAdminCreateCoupon()">
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
            function zeroAdminCreateCoupon(){
                const submitButton = document.querySelector('[data-kt-admin-action="submit"]');
                submitButton.setAttribute('data-kt-indicator', 'on');
                submitButton.disabled = true;
                $.ajax({
                    type: "POST",
                    url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/coupon/create",
                    dataType: "json",
                    data: {
                        code: $('#zero_create_coupon_code').val(),
                        discount: $('#zero_create_coupon_dicount_rate').val(),
                        limited_product: $('#zero_create_coupon_limit_product').val(),
                        limited_product_period: $('#zero_create_coupon_limit_product_period').val(),
                        per_use_count: $('#zero_create_coupon_per_times').val(),
                        total_use_count: $('#zero_create_coupon_total_times').val(),
                        expire: $('#zero_create_coupon_valid_time').val(),
                        generate_type: $('#zero_create_coupon_generation_method').val()
                    },
                    success: function (data) {
                        if (data.ret == 1) {
                            setTimeout(function() {
                                submitButton.removeAttribute('data-kt-indicator');
                                submitButton.disabled = false;
                                getResult(data.msg, '', 'success');
                                $('#zero_modal_create_coupon').modal('hide');
                                table_1.ajax.reload();
                            }, 1500);
                        } else {
                            getResult(data.msg, '', 'error');
                            submitButton.removeAttribute('data-kt-indicator');
                            submitButton.disabled = false;
                        }
                    }
                });
            }
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
