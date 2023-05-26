<?php
/* Smarty version 4.3.1, created on 2023-03-30 19:51:15
  from '/var/www/zero/resources/views/zero/include/index/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642577b37910b1_46145601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7971d410498e2187a1df530a78edbfba163610c' => 
    array (
      0 => '/var/www/zero/resources/views/zero/include/index/news.tpl',
      1 => 1680174611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642577b37910b1_46145601 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{ default:'300px', 'md': '500px' }" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
	<div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
		<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
			<div class="card-title">
				<div class="me-3">
					<p class="fs-4 fw-bold text-gray-900 me-1 mb-2 lh-1"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('news');?>
</a>
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
		<div class="card-body" id="kt_drawer_chat_messenger_body">
			
			<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">			
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['anns']->value, 'ann');
$_smarty_tpl->tpl_vars['ann']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ann']->value) {
$_smarty_tpl->tpl_vars['ann']->do_else = false;
?>
					<div class="card card-bordered mb-2">
						<div class="card-body">
							<p class="fs-5 fw-semibold text-gray-800"><?php echo $_smarty_tpl->tpl_vars['ann']->value->content;?>
</p>
							<p class="fs-6 text-muted"><?php echo substr($_smarty_tpl->tpl_vars['ann']->value->date,0,10);?>
</p>
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>	
		</div>
	</div>
</div><?php }
}
