<?php
/* Smarty version 4.3.1, created on 2023-04-18 16:24:24
  from '/var/www/zero/resources/views/zero/table/js_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643e53b8922ad7_45642834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f038e10bee47adf91b2d8e1bce11203e8394ca67' => 
    array (
      0 => '/var/www/zero/resources/views/zero/table/js_2.tpl',
      1 => 1681802824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:table/lang_chinese.tpl' => 1,
  ),
),false)) {
function content_643e53b8922ad7_45642834 (Smarty_Internal_Template $_smarty_tpl) {
?>table_1 = $('#table_1').DataTable({
ajax: {
url: '<?php echo $_smarty_tpl->tpl_vars['table_config']->value['ajax_url'];?>
',
type: "POST"
},
searchDelay: 500,
processing: true,
serverSide: true,
scrollCollapse: true,
scrollX: true,
order: [[ 0, 'desc' ]],
stateSave: true,
columnDefs: [
    { className: 'text-end', targets: -1 },
    { orderable: false, targets: [-1] }
],
columns: [
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    { "data": "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" },
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
],
fixedColumns: true,
<?php $_smarty_tpl->_subTemplateRender('file:table/lang_chinese.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
})
<?php }
}
