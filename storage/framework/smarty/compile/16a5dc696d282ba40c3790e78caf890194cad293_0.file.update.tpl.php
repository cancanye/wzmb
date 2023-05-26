<?php
/* Smarty version 4.3.1, created on 2023-05-24 15:04:32
  from '/var/www/zero/resources/views/zero/admin/user/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646db7009c19e1_83365277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16a5dc696d282ba40c3790e78caf890194cad293' => 
    array (
      0 => '/var/www/zero/resources/views/zero/admin/user/update.tpl',
      1 => 1684911870,
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
function content_646db7009c19e1_83365277 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 编辑用户</title>
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
                                            <div class="card-title text-dark fs-3 fw-bolder">用户配置</div>
                                            <div class="card-toolbar">
                                                <a class="btn btn-primary btn-sm fw-bold" onclick="updateUser('<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
')">保存用户</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xxl-6">
                                                    <label class="form-label required">用户邮箱</label>
                                                    <input class="form-control mb-5" id="email" name="email" type="text" placeholder="用户邮箱" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
">
                                                    <label class="form-label required">用户备注</label>
                                                    <input class="form-control mb-5" id="remark" name="remark" type="text" placeholder="用户备注" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->remark;?>
">
                                                    <label class="form-label required">用户密码</label>
                                                    <input class="form-control mb-5" id="password" name="password" type="password" placeholder="用户密码(不修改留空)" value="" autocomplete="new-password">
                                                    <label class="form-label required">用户余额</label>
                                                    <input class="form-control mb-5" id="money" name="money" type="number" placeholder="用户余额" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
">
                                                    <label class="form-label required">用户佣金</label>
                                                    <input class="form-control mb-5" id="commission" name="commission" type="number" placeholder="用户佣金" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->commission;?>
">
                                                    <label class="form-label required">手动封禁时长</label>
                                                    <div class="input-group mb-5">
                                                        <input class="form-control" id="ban_time" name="ban_time" type="number" placeholder="手动封禁时长" value="0">
                                                        <span class="input-group-text">Min</span>
                                                    </div>
                                                    <label class="form-label required">最后被封禁时间</label>
                                                    <input class="form-control mb-5" id="last_detect_ban_time" name="last_detect_ban_time" type="text" disabled  value="<?php echo $_smarty_tpl->tpl_vars['user']->value->last_detect_ban_time();?>
">
                                                    <label class="form-label required">解禁时间</label>
                                                    <input class="form-control mb-5" id="unban_time" name="unban_time" type="text" disabled  value="<?php echo $_smarty_tpl->tpl_vars['user']->value->relieve_time();?>
">
                                                    <label class="form-label required">累积封禁次数</label>
                                                    <input class="form-control mb-5" id="detect_ban_number" name="detect_ban_number" type="text" disabled  value="<?php if ($_smarty_tpl->tpl_vars['user']->value->detect_ban_number() == 0) {?>标杆用户，没有被封禁过耶<?php } else { ?>太坏了，这位用户累计被封禁过 <?php echo $_smarty_tpl->tpl_vars['user']->value->detect_ban_number();?>
 次呢<?php }?>"">
                                                    <label class="form-label required">累积触犯次数</label>
                                                    <input class="form-control mb-5" id="all_detect_number" name="all_detect_number" type="text" disabled  value="<?php echo $_smarty_tpl->tpl_vars['user']->value->all_detect_number;?>
">
                                                </div>
                                                <div class="col-xxl-6">
                                                    <label class="form-label required">SS 密码</label>
                                                    <input class="form-control mb-5" id="passwd" name="passwd" type="text" disabled value="<?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
">
                                                    <label class="form-label required">VMESS/TROJAN UUID</label>
                                                    <input class="form-control mb-5" id="uuid" name="uuid" type="text" disabled value="<?php echo $_smarty_tpl->tpl_vars['user']->value->uuid;?>
">
                                                    <label class="form-label required">用户流量</label>
                                                    <input class="form-control mb-5" id="transfer_enable" name="transfer_enable" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->enableTrafficInGB();?>
">
                                                    <label class="form-label required">已用流量</label>
                                                    <input class="form-control mb-5" id="usedTraffic" name="usedTraffic" type="text" disabled value="<?php echo $_smarty_tpl->tpl_vars['user']->value->usedTraffic();?>
">
                                                    <label class="form-label required">邀请人ID</label>
                                                    <input class="form-control mb-5" id="ref_by" name="ref_by" type="number" disabled value="<?php echo $_smarty_tpl->tpl_vars['user']->value->ref_by;?>
">
                                                    <label class="form-label required">用户群组</label>
                                                    <select class="form-select mb-5" id="group" data-control="select2" data-placeholder="用户分组" data-hide-search="true" />
                                                        <option></option>                              
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_groups']->value, 'value', false, 'index');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                    <label class="form-label required">用户等级</label>
                                                    <input class="form-control mb-5" id="class" name="class" type="number" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
">
                                                    <label class="form-label required">用户等级过期时间</label>
                                                    <input class="form-control mb-5" id="class_expire" name="class_expire" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
">
                                                    <label class="form-label required">用户速度</label>
                                                    <div class="input-group mb-5">
                                                        <input class="form-control" data-bs-toggle="tooltip" title="0为不限制" id="node_speedlimit" name="node_speedlimit" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->node_speedlimit;?>
">
                                                        <span class="input-group-text">Mbps</span>
                                                    </div>
                                                    <label class="form-label required">用户IP数</label>
                                                    <div class="input-group mb-5">
                                                        <input class="form-control" data-bs-toggle="tooltip" title="0为不限制" id="node_iplimit" name="node_iplimit" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->node_iplimit;?>
">
                                                        <span class="input-group-text">个</span>
                                                    </div>
                                                </div>
                                            </div>
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
            function updateUser(id) {
                $.ajax({
                    type: "PUT",
                    url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/user/update",
                    dataType: "JSON",
                    data: {
                        id,
                        email: $('#email').val(),
                        password: $('#password').val(),
                        group: $('#group').val(),
                        transfer_enable: $('#transfer_enable').val(),
                        node_speedlimit: $('#node_speedlimit').val(),
                        remark: $('#remark').val(),
                        money: $('#money').val(),
                        commission: $('#commission').val(),
                        ban_time: $('#ban_time').val(),
                        class: $('#class').val(),
                        class_expire: $('#class_expire').val(),
                        node_iplimit: $('#node_iplimit').val()
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
        <?php echo '<script'; ?>
>
            $('#group').val("<?php echo $_smarty_tpl->tpl_vars['user']->value->node_group;?>
").trigger('change');
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
