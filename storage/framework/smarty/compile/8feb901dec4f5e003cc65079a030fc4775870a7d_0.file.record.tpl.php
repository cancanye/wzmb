<?php
/* Smarty version 4.3.1, created on 2023-05-24 15:10:39
  from '/var/www/zero/resources/views/zero/admin/record.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646db86faa2367_65083958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8feb901dec4f5e003cc65079a030fc4775870a7d' => 
    array (
      0 => '/var/www/zero/resources/views/zero/admin/record.tpl',
      1 => 1683724119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/menu.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:admin/script.tpl' => 1,
    'file:table/lang_chinese.tpl' => 4,
  ),
),false)) {
function content_646db86faa2367_65083958 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 记录</title>
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
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">在线用户</div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table align-middle table-striped table-row-bordered text-nowrap gy-5 gs-7" id="zero_admin_alive_record">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">                                                       
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config_alive']->value['total_column'], 'value_alive', false, 'key_alive');
$_smarty_tpl->tpl_vars['value_alive']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_alive']->value => $_smarty_tpl->tpl_vars['value_alive']->value) {
$_smarty_tpl->tpl_vars['value_alive']->do_else = false;
?>
                                                            <th class="<?php echo $_smarty_tpl->tpl_vars['key_alive']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value_alive']->value;?>
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
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">登录记录</div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table align-middle table-striped table-row-bordered text-nowrap gy-5 gs-7" id="zero_admin_signin_record">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">                                                       
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config_signin']->value['total_column'], 'value_signin', false, 'key_signin');
$_smarty_tpl->tpl_vars['value_signin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_signin']->value => $_smarty_tpl->tpl_vars['value_signin']->value) {
$_smarty_tpl->tpl_vars['value_signin']->do_else = false;
?>
                                                            <th class="<?php echo $_smarty_tpl->tpl_vars['key_signin']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value_signin']->value;?>
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
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">订阅记录</div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table align-middle table-striped table-row-bordered text-nowrap gy-5 gs-7" id="zero_admin_subscribe_record">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">                                                       
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config_subscribe']->value['total_column'], 'value_subscribe', false, 'key_subscribe');
$_smarty_tpl->tpl_vars['value_subscribe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_subscribe']->value => $_smarty_tpl->tpl_vars['value_subscribe']->value) {
$_smarty_tpl->tpl_vars['value_subscribe']->do_else = false;
?>
                                                            <th class="<?php echo $_smarty_tpl->tpl_vars['key_subscribe']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value_subscribe']->value;?>
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
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">流量记录</div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table align-middle table-striped table-row-bordered text-nowrap gy-5 gs-7" id="zero_admin_traffic_record">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">                                                       
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config_traffic']->value['total_column'], 'value_traffic', false, 'key_traffic');
$_smarty_tpl->tpl_vars['value_traffic']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_traffic']->value => $_smarty_tpl->tpl_vars['value_traffic']->value) {
$_smarty_tpl->tpl_vars['value_traffic']->do_else = false;
?>
                                                            <th class="<?php echo $_smarty_tpl->tpl_vars['key_traffic']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value_traffic']->value;?>
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
            KTAdminAliveRecord = $('#zero_admin_alive_record').DataTable({
            ajax: {
            url: '<?php echo $_smarty_tpl->tpl_vars['table_config_alive']->value['ajax_url'];?>
',
            type: "POST"
            },
            processing: true,
            serverSide: true,
            order: [[ 0, 'desc' ]],
            stateSave: true,
            columnDefs: [
                { className: 'text-end', targets: -1 }
            ],
            columns: [
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config_alive']->value['total_column'], 'value_alive', false, 'key_alive');
$_smarty_tpl->tpl_vars['value_alive']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_alive']->value => $_smarty_tpl->tpl_vars['value_alive']->value) {
$_smarty_tpl->tpl_vars['value_alive']->do_else = false;
?>
                { "data": "<?php echo $_smarty_tpl->tpl_vars['key_alive']->value;?>
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
            KTAdminSigninRecord = $('#zero_admin_signin_record').DataTable({
            ajax: {
            url: '<?php echo $_smarty_tpl->tpl_vars['table_config_signin']->value['ajax_url'];?>
',
            type: "POST"
            },
            processing: true,
            serverSide: true,
            order: [[ 0, 'desc' ]],
            stateSave: true,
            columnDefs: [
                { className: 'text-end', targets: -1 }
            ],
            columns: [
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config_signin']->value['total_column'], 'value_signin', false, 'key_signin');
$_smarty_tpl->tpl_vars['value_signin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_signin']->value => $_smarty_tpl->tpl_vars['value_signin']->value) {
$_smarty_tpl->tpl_vars['value_signin']->do_else = false;
?>
                { "data": "<?php echo $_smarty_tpl->tpl_vars['key_signin']->value;?>
" },
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            ],
            <?php $_smarty_tpl->_subTemplateRender('file:table/lang_chinese.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            })
    
    
            var has_init = JSON.parse(localStorage.getItem(window.location.href + '-hasinit'));
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            KTAdminSubscribeRecord = $('#zero_admin_subscribe_record').DataTable({
            ajax: {
            url: '<?php echo $_smarty_tpl->tpl_vars['table_config_subscribe']->value['ajax_url'];?>
',
            type: "POST"
            },
            processing: true,
            serverSide: true,
            order: [[ 0, 'desc' ]],
            stateSave: true,
            columnDefs: [
                { className: 'text-end', targets: -1 }
            ],
            columns: [
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config_subscribe']->value['total_column'], 'value_subscribe', false, 'key_subscribe');
$_smarty_tpl->tpl_vars['value_subscribe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_subscribe']->value => $_smarty_tpl->tpl_vars['value_subscribe']->value) {
$_smarty_tpl->tpl_vars['value_subscribe']->do_else = false;
?>
                { "data": "<?php echo $_smarty_tpl->tpl_vars['key_subscribe']->value;?>
" },
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            ],
            <?php $_smarty_tpl->_subTemplateRender('file:table/lang_chinese.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            })
    
    
            var has_init = JSON.parse(localStorage.getItem(window.location.href + '-hasinit'));
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            KTAdminTrafficRecord = $('#zero_admin_traffic_record').DataTable({
            ajax: {
            url: '<?php echo $_smarty_tpl->tpl_vars['table_config_traffic']->value['ajax_url'];?>
',
            type: "POST"
            },
            processing: true,
            serverSide: true,
            order: [[ 0, 'desc' ]],
            stateSave: true,
            columnDefs: [
                { className: 'text-end', targets: -1 }
            ],
            columns: [
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config_traffic']->value['total_column'], 'value_traffic', false, 'key_traffic');
$_smarty_tpl->tpl_vars['value_traffic']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_traffic']->value => $_smarty_tpl->tpl_vars['value_traffic']->value) {
$_smarty_tpl->tpl_vars['value_traffic']->do_else = false;
?>
                { "data": "<?php echo $_smarty_tpl->tpl_vars['key_traffic']->value;?>
" },
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            ],
            <?php $_smarty_tpl->_subTemplateRender('file:table/lang_chinese.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            })
    
    
            var has_init = JSON.parse(localStorage.getItem(window.location.href + '-hasinit'));
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
