<?php
/* Smarty version 4.3.1, created on 2023-03-30 20:09:51
  from '/var/www/zero/resources/views/zero/table/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64257c0f648d39_18016615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2f3795708e49387173584a25399bafd598b606c' => 
    array (
      0 => '/var/www/zero/resources/views/zero/table/table.tpl',
      1 => 1680174611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64257c0f648d39_18016615 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table align-middle table-striped table-row-bordered text-nowrap gy-5 gs-7" id="table_1" style="width:100%">
    <thead>
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">                                                       
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <th class="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</th>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold"></tbody>
</table>
<?php }
}
