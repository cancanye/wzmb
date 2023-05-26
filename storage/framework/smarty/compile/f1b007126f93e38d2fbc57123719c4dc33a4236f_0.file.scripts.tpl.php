<?php
/* Smarty version 4.3.1, created on 2023-05-11 21:15:44
  from '/var/www/zero/resources/views/zero/include/global/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645cea80794064_26798109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1b007126f93e38d2fbc57123719c4dc33a4236f' => 
    array (
      0 => '/var/www/zero/resources/views/zero/include/global/scripts.tpl',
      1 => 1683810942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:live_chat.tpl' => 1,
  ),
),false)) {
function content_645cea80794064_26798109 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="/js/datatable.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/chart.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/general.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/i18nextBrowserLanguageDetector.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/i18next.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/language.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>var webName = "<?php echo $_smarty_tpl->tpl_vars['config']->value['appName'];?>
";<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['config']->value['verify_email'] === 'open') {?>
        var veried = <?php echo $_smarty_tpl->tpl_vars['user']->value->verified;?>
;
        if (veried == 0) {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toastr-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300000",
                "hideDuration": "100000000",
                "timeOut": "5000000",
                "extendedTimeOut": "1000000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.warning('<span class=fw-bold fs-5>请验证邮箱</span> <button type="button" class="btn btn-light-primary btn-sm fw-bold" id="zero_user_verify_email">验证</button>');
            $('#zero_user_verify_email').click(function() {
                $.ajax({
                    type: 'POST',
                    url: '/user/verify/email/send',
                    dataType: 'json',
                    data: {},
                    success: function(data){
                        if (data.ret == 1) {
                            getResult(data.msg, '', 'success');
                        } else {
                            getResult('失败', '', 'error');
                        }
                    }								
                })
            });
        }
    <?php }
echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:live_chat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
