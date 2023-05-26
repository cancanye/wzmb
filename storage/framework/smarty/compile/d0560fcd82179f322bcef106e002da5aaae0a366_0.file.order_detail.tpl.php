<?php
/* Smarty version 4.3.1, created on 2023-04-14 11:51:14
  from '/var/www/zero/resources/views/zero/admin/order_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6438cdb26c3e40_60876018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0560fcd82179f322bcef106e002da5aaae0a366' => 
    array (
      0 => '/var/www/zero/resources/views/zero/admin/order_detail.tpl',
      1 => 1681444271,
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
function content_6438cdb26c3e40_60876018 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
	<title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 Order Detail</title>
        
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
                                    
                                    <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                        
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('order');?>
 #<?php echo $_smarty_tpl->tpl_vars['order']->value->order_no;?>
</h2>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                
                                                <table class="table align-middle table-striped table-row-bordered gy-5 gs-7 mb-0">
                                                    
                                                    <thead>
                                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                            <th class="min-w-175px"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('type');?>
</th>
                                                            <th class="min-w-70px text-end"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('status');?>
</th>
                                                            <th class="min-w-70px text-end"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('payment method');?>
</th>
                                                            <th class="min-w-100px text-end"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('order number');?>
</th>
                                                            <th class="min-w-70px text-end"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('quantity');?>
</th>
                                                            <th class="min-w-100px text-end"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('price');?>
</th>
                                                            <th class="min-w-100px text-end"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('total');?>
</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    
                                                    <tbody class="fw-semibold text-gray-600">
                                                        
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="ms-5">
                                                                        <a class="fw-bold text-gray-600 text-hover-primary"><?php echo $_smarty_tpl->tpl_vars['order_type']->value[$_smarty_tpl->tpl_vars['order']->value->order_type];?>
</a>
                                                                        <div class="fs-7 text-muted"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('date');?>
: <?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['order']->value->created_time);?>
</div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </td>
                                                            
                                                            <td class="text-end">
                                                                <?php if ($_smarty_tpl->tpl_vars['order']->value->order_status == '1') {?>
                                                                <span class="badge badge-warning fs-6 fw-bold"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('pending');?>
</span>
                                                                <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->order_status == '2') {?>
                                                                <span class="badge badge-success fs-6 fw-bold"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('paid');?>
</span>
																<?php } elseif ($_smarty_tpl->tpl_vars['order']->value->order_status == '0') {?>
																<span class="badge badge-danger fs-6 fw-bold"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('invalid');?>
</span>	
                                                                <?php }?>   
                                                            </td>
															<td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->payment();?>
</td>
                                                            <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->order_no;?>
</td>                                                           
                                                            <td class="text-end">1</td>
                                                            <?php if ($_smarty_tpl->tpl_vars['order']->value->order_type == '2') {?>
                                                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->order_total;?>
</td>                                                           
                                                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->order_total;?>
</td>
                                                            <?php } else { ?>
                                                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->product_price;?>
</td>                                                           
                                                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->product_price;?>
</td>
                                                            <?php }?>
                                                        </tr>
                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->order_type != '2') {?>                                                                                                            
                                                        <tr>
                                                            <td colspan="6" class="text-end">余额抵扣</td>
                                                            <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->credit_paid;?>
</td>
                                                        </tr>                                                       
                                                        <tr>
                                                            <td colspan="6" class="text-end"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('discount');?>
</td>
                                                            <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->discount_amount;?>
</td>
                                                        </tr>
                                                        <?php }?>														                                                        
                                                        <tr>
                                                            <td colspan="6" class="fs-3 text-dark text-end"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('total');?>
</td>
                                                            <td class="text-dark fs-3 fw-bolder text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->order_total;?>
</td>
                                                        </tr>
														
														<?php if ($_smarty_tpl->tpl_vars['order']->value->order_status == '2') {?>
														<tr>
                                                            <td colspan="6" class="fs-3 text-dark text-end"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('paid');?>
</td>
                                                            <td class="text-dark fs-3 fw-bolder text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->order_total;?>
</td>
                                                        </tr>
														<?php }?>
                                                        
                                                    </tbody>
                                                    
                                                </table>
                                                
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
    </body>
</html><?php }
}
