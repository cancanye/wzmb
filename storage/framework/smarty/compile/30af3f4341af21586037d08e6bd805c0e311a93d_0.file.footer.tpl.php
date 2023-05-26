<?php
/* Smarty version 4.3.1, created on 2023-03-30 20:08:37
  from '/var/www/zero/resources/views/zero/admin/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64257bc5115793_97725334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30af3f4341af21586037d08e6bd805c0e311a93d' => 
    array (
      0 => '/var/www/zero/resources/views/zero/admin/footer.tpl',
      1 => 1680177854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64257bc5115793_97725334 (Smarty_Internal_Template $_smarty_tpl) {
?>                        <div class="app_footer py-4 d-flex flex-lg-column" id="kt_app_footer">
                            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                                <div class="text-dark-75 order-2 order-md-1">
                                    &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
>,&nbsp;<a><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
,&nbsp;Inc.&nbsp;All rights reserved.</a>
                                </div>
                            </div>
                        </div><?php }
}
