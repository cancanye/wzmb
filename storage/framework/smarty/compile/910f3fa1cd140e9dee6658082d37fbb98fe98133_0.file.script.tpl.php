<?php
/* Smarty version 4.3.1, created on 2023-05-02 14:10:20
  from '/var/www/zero/resources/views/zero/admin/script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6450a94c78fd61_03277167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '910f3fa1cd140e9dee6658082d37fbb98fe98133' => 
    array (
      0 => '/var/www/zero/resources/views/zero/admin/script.tpl',
      1 => 1683007818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6450a94c78fd61_03277167 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="/theme/zero/assets/plugins/global/plugins.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/theme/zero/assets/js/scripts.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/theme/zero/assets/plugins/custom/datatables/datatables.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    // get result 
function getResult(titles, texts, icons) {
    Swal.fire({
        title: titles,
        text: texts,
        icon: icons,
        buttonsStyling: false,
        confirmButtonText: "OK",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
}

function getwarning() {
  return new Promise(function (resolve, reject) {
    Swal.fire({
      text: '继续执行下面操作?',
      icon: "warning",
      buttonsStyling: false,
      showCancelButton: true,
      confirmButtonText: "确定",
      cancelButtonText: "取消",
      customClass: {
        confirmButton: "btn btn-primary",
        cancelButton: "btn btn-light"
      }
    }).then(function (result) {
      if (result.isConfirmed) {
        resolve(); // 点击确定时返回一个已解决的 Promise 对象
      } else {
        reject(); // 点击取消时返回一个已拒绝的 Promise 对象
      }
    });
  });
}

$(document).ready(function (){
    // 获取当前 URL 路径
    var path = window.location.pathname;

    // 使用 split() 切割路径字符串
    var parts = path.split('/');

    // 访问最后一个元素
    var target2 = parts[2];
    var target1 = parts[1];
    $("a.menu-link[href='/"+target1+"/"+target2+"']").addClass('active');
});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function zeroAdminDelete(type, id){
        getwarning().then(function() {
            $.ajax({
                type: "DELETE",
                url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/"+type+"/delete",
                dataType: "json",
                data: {
                    id
                },
                success: function(data){
                    if (data.ret === 1){
                        getResult(data.msg, '', 'success');
                        table_1.ajax.reload();
                    }else{
                        getResult('发生错误', '', 'error');
                    }
                }
            });
        }).catch(function() {
            Swal.close();
        })
    }
<?php echo '</script'; ?>
><?php }
}
