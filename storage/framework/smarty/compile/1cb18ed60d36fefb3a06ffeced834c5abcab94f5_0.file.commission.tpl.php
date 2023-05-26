<?php
/* Smarty version 4.3.1, created on 2023-04-01 20:14:38
  from '/var/www/zero/resources/views/zero/admin/commission.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6428202e34ea17_13507707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cb18ed60d36fefb3a06ffeced834c5abcab94f5' => 
    array (
      0 => '/var/www/zero/resources/views/zero/admin/commission.tpl',
      1 => 1680350427,
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
    'file:table/lang_chinese.tpl' => 1,
  ),
),false)) {
function content_6428202e34ea17_13507707 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 佣金</title>
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
                                            <div class="card-title text-dark fs-3 fw-bolder">提现管理</div>
                                        </div>
                                        <div class="card-body">
                                            <?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        </div>  
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">佣金记录</div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table align-middle table-striped table-row-bordered text-nowrap gy-5 gs-7" id="zero_admin_commission_record">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">                                                       
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config_commission']->value['total_column'], 'value_commission', false, 'key_commission');
$_smarty_tpl->tpl_vars['value_commission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_commission']->value => $_smarty_tpl->tpl_vars['value_commission']->value) {
$_smarty_tpl->tpl_vars['value_commission']->do_else = false;
?>
                                                            <th class="<?php echo $_smarty_tpl->tpl_vars['key_commission']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value_commission']->value;?>
</th>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-gray-600 fw-semibold"></tbody>
                                            </table>
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
            window.addEventListener('load', () => {
                <?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            })
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            KTAdminCommissionRecord = $('#zero_admin_commission_record').DataTable({
            ajax: {
            url: '<?php echo $_smarty_tpl->tpl_vars['table_config_commission']->value['ajax_url'];?>
',
            type: "POST"
            },
            processing: true,
            serverSide: true,
            order: [[ 0, 'desc' ]],
            stateSave: true,
            columnDefs: [
                { width: '5%', targets: 0 },
                { className: 'text-end', targets: -1 }
            ],
            columns: [
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config_commission']->value['total_column'], 'value_commission', false, 'key_commission');
$_smarty_tpl->tpl_vars['value_commission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_commission']->value => $_smarty_tpl->tpl_vars['value_commission']->value) {
$_smarty_tpl->tpl_vars['value_commission']->do_else = false;
?>
                { "data": "<?php echo $_smarty_tpl->tpl_vars['key_commission']->value;?>
" },
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            ],
            <?php $_smarty_tpl->_subTemplateRender('file:table/lang_chinese.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            })


            var has_init = JSON.parse(localStorage.getItem(window.location.href + '-hasinit'));
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function zeroAdminUpdateWithdrawCommission(mode, id){
                $.ajax({
                    type: "PUT",
                    url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/commission/withdraw/update",
                    dataType: "json",
                    data: {
                        mode,
                        id
                    },
                    success: function(data){
                        if(data.ret == 1) {
                            getResult(data.msg, '', 'success');
                        }else{
                            getResult(data.msg, '', 'error');
                        }
                    }
                });
            }
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
