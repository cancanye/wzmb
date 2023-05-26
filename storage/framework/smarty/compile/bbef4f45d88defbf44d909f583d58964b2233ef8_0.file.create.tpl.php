<?php
/* Smarty version 4.3.1, created on 2023-05-10 14:57:30
  from '/var/www/zero/resources/views/zero/admin/product/create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645b405a5cfb23_46538469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbef4f45d88defbf44d909f583d58964b2233ef8' => 
    array (
      0 => '/var/www/zero/resources/views/zero/admin/product/create.tpl',
      1 => 1683701847,
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
function content_645b405a5cfb23_46538469 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 创建产品</title>
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
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">产品配置</div>
                                            <div class="card-toolbar">
                                                <button class="btn btn-primary btn-sm fw-bold" onclick="zeroAdminCreateProduct()">
                                                <i class="bi bi-cloud-plus fs-3"></i>保存产品
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xxl-6">
                                                    <label class="form-label required">产品名称</label>
                                                    <input class="form-control mb-5" id="name" name="name" type="text" placeholder="产品名称" value="">
                                                    <label class="form-label required">产品价格</label>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <input class="form-control mb-5" id="month_price" name="month_price" type="number" placeholder="月付" value="">
                                                        </div>
                                                        <div class="col-4">
                                                            <input class="form-control mb-5" id="quarter_price" name="quarter_price" type="number" placeholder="季付" value="">
                                                        </div>
                                                        <div class="col-4">
                                                            <input class="form-control mb-5" id="half_year_price" name="half_year_price" type="number" placeholder="半年付" value="">
                                                        </div>
                                                        <div class="col-4">
                                                            <input class="form-control mb-5" id="year_price" name="year_price" type="number" placeholder="年付" value="">
                                                        </div>
                                                        <div class="col-4">
                                                            <input class="form-control mb-5" id="two_year_price" name="two_year_price" type="number" placeholder="两年付" value="">
                                                        </div>
                                                        <div class="col-4">
                                                            <input class="form-control mb-5" data-bs-toggle="tooltip" title="当设置为其他产品时,请设置一次性价格" id="onetime_price" name="onetime_price" type="number" placeholder="一次性" value="">
                                                        </div>
                                                    </div>
                                                    <label class="form-label required">产品类型</label>
                                                    <select class="form-select mb-5" id="type" data-control="select2" data-hide-search="true">
                                                        <option value="1">周期产品</option>
                                                        <option value="2">流量产品</option>
                                                        <option value="3">其他产品</option>
                                                    </select>
                                                    <label class="form-label required">产品流量</label>
                                                    <div class="input-group mb-5">
                                                        <input class="form-control" data-bs-toggle="tooltip" title="默认为0" id="traffic" name="traffic" type="number" placeholder="产品流量" value="0">
                                                        <span class="input-group-text">GB</span>
                                                    </div>
                                                    <label class="form-label required">产品等级</label>
                                                    <input class="form-control mb-5" data-bs-toggle="tooltip" title="默认为0" id="class" name="class" type="number" placeholder="产品等级" value="0">
                                                    
                                                </div>
                                                <div class="col-xxl-6">
                                                    <label class="form-label">产品库存</label>
                                                    <input class="form-control mb-5" id="stock" name="name" type="number" placeholder="默认为无限制" value="">
                                                    <label class="form-label required">产品流量重置周期</label>
                                                    <select class="form-select mb-5" id="reset" data-control="select2" data-hide-search="true">
                                                        <option value="0">一次性</option>
                                                        <option value="1">订单日重置</option>
                                                        <option value="2">每月1日重置</option>
                                                    </select>
                                                    <label class="form-label">产品速度</label>
                                                    <div class="input-group mb-5">
                                                        <input class="form-control" id="speed_limit" name="speed_limit" type="number" placeholder="默认为无限制" value="">
                                                        <span class="input-group-text">Mbps</span>
                                                    </div>
                                                    <label class="form-label">产品IP</label>
                                                    <div class="input-group mb-5">
                                                        <input class="form-control" id="ip_limit" name="ip_limit" type="number" placeholder="默认为无限制" value="">
                                                        <span class="input-group-text">个</span>
                                                    </div>
                                                    <label class="form-label required">产品排序</label>
                                                    <input class="form-control mb-5" id="sort" name="sort" type="number" placeholder="产品排序,数字越大越靠前" value="0">
                                                    <label class="form-label">产品群组</label>
                                                    <input class="form-control" data-bs-toggle="tooltip" title="不分组保持默认" id="group" name="group" type="number" placeholder="不分组保持默认" value="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">商品介绍</div>
                                        </div>
                                        <div class="card-body">
                                            <textarea class="form-control" data-kt-autosize="true" id="custom_content"></textarea>
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
>
            function zeroAdminCreateProduct() {
                $.ajax({
                    type: "POST",
                    url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/product/create",
                    dataType: "JSON",
                    data: {
                        name: $('#name').val(),
                        month_price: $('#month_price').val(),
                        quarter_price: $('#quarter_price').val(),
                        half_year_price: $('#half_year_price').val(),
                        year_price: $('#year_price').val(),
                        two_year_price: $('#two_year_price').val(),
                        onetime_price: $('#onetime_price').val(),
                        type: $('#type').val(),
                        traffic: $('#traffic').val(),
                        class: $('#class').val(),
                        group: $('#group').val(),
                        stock: $('#stock').val(),
                        reset: $('#reset').val(),
                        speed_limit: $('#speed_limit').val(),
                        ip_limit: $('#ip_limit').val(),
                        sort: $('#sort').val(),
                        custom_content: $('#custom_content').val()
                    },
                    success: function(data){
                        if (data.ret === 1){
                            Swal.fire({
                                text: data.msg,
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            getResult(data.msg, '', 'error');
                        }
                    }
                })
            }
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
