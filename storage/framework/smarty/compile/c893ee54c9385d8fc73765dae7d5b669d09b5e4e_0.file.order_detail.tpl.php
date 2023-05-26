<?php
/* Smarty version 4.3.1, created on 2023-05-15 23:32:26
  from '/var/www/zero/resources/views/zero/user/order_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6462508a7952c0_10781925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c893ee54c9385d8fc73765dae7d5b669d09b5e4e' => 
    array (
      0 => '/var/www/zero/resources/views/zero/user/order_detail.tpl',
      1 => 1684164743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/index/menu.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
    'file:include/index/news.tpl' => 1,
  ),
),false)) {
function content_6462508a7952c0_10781925 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php $_smarty_tpl->_subTemplateRender('file:include/index/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
											<?php if ($_smarty_tpl->tpl_vars['order']->value->order_status === 1) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['order']->value->order_total != 0) {?>
                                                    <div class="col-lg-12">
                                                        <label class="col-form-label fs-3 fw-bold"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('payment method');?>
:</label>                                                       
                                                        <ul class="nav nav-pills d-flex flex-column flex-xl-row justify-content-center" role="tablist" id="payment_method">                                                         
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
                                                                <li class="nav-item mb-3">
                                                                    <a class="btn btn-outline btn-active-light-primary d-flex flex-column" <?php if ($_smarty_tpl->tpl_vars['payment']->value->gateway == 'PayPal') {?> id="payment_paypal_<?php echo $_smarty_tpl->tpl_vars['payment']->value->id;?>
"<?php } else { ?> id="payment_others_<?php echo $_smarty_tpl->tpl_vars['payment']->value->id;?>
"<?php }?> data-bs-toggle="pill" data-payment-id="<?php echo $_smarty_tpl->tpl_vars['payment']->value->id;?>
"  data-payment-uuid="<?php echo $_smarty_tpl->tpl_vars['payment']->value->uuid;?>
">                                                                       
                                                                        <img class="h-35px w-auto" src=<?php echo $_smarty_tpl->tpl_vars['payment']->value->icon;?>
>                           
                                                                        <span class="fs-3 py-2 fw-bold"><?php echo $_smarty_tpl->tpl_vars['payment']->value->name;?>
</span>
                                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->order_type == 2 && !empty($_smarty_tpl->tpl_vars['payment']->value->recharge_bonus)) {?>
                                                                            <span class="text-muted fs-6">+10%余额</span>
                                                                        <?php }?>
                                                                    </a>
                                                                </li>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </ul>
                                                    </div>
                                                <?php }?>
                                                <div class="text-center pt-15">
                                                    <button class="btn btn-primary" type="submit" data-kt-users-action="submit" onclick="KTUsersPayOrder('<?php echo $_smarty_tpl->tpl_vars['order']->value->order_no;?>
')">
                                                        <span class="indicator-label"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('submit');?>
</span>
                                                        <span class="indicator-progress"><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('please wait');?>

                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <?php echo '<script'; ?>
 src="https://www.paypal.com/sdk/js?client-id=Aa69h7psOgN_5Gp20yOP0eOuYBKsKZapS0ZK_RvWTl57ZZTS_SDoCvtG3j0_1R_hcp2sSl8-2f7Jik5R&currency=<?php echo $_smarty_tpl->tpl_vars['paypal_currency_unit']->value;?>
&disable-funding=credit,card"><?php echo '</script'; ?>
>
                                                <!-- Set up a container element for the button -->
                                                <div id="paypal-button-container" class="text-center"></div>
                                            <?php }?>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="app_footer py-4 d-flex flex-lg-column" id="kt_app_footer">
                            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                                <div class="text-dark-75 order-2 order-md-1">
                                    &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
>,&nbsp;<a><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
,&nbsp;Inc.&nbsp;All rights reserved.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php $_smarty_tpl->_subTemplateRender('file:include/global/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:include/index/news.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php echo '<script'; ?>
>
        
            paypal
            .Buttons({
                
            // Sets up the transaction when a payment button is clicked
            createOrder: function () {
                return fetch("/user/order/pay_order", {
                method: "post",
                headers: {
                    "Content-Type": "application/json",
                },
                // use the "body" param to optionally pass additional order information
                // like product skus and quantities
                body: JSON.stringify({
                    payment_id: $("#payment_method a.active").attr("data-payment-id"),
                    order_no: '<?php echo $_smarty_tpl->tpl_vars['order']->value->order_no;?>
',
                }),
                })
                .then((response) => response.json())
                .then((order) => order.id);
            },
            // Finalize the transaction after payer approval
            onApprove: function (data) {
                return fetch("/payment/notify/PayPal/"+$("#payment_method a.active").attr("data-payment-uuid"), {
                method: "post",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    orderID: data.orderID,
                }),
                })
                .then((response) => response.json())
                .then((data) => {
                    location.reload();
                });
            },
            })
            .render("#paypal-button-container");
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $('[id^=payment_paypal_]').on('click', function() {
                $('button[type^="submit"]').addClass('d-none');
                $('#paypal-button-container').removeClass('d-none');
            });
            $('[id^=payment_others_]').on('click', function() {
                $('button[type^="submit"]').removeClass('d-none');
                $('#paypal-button-container').addClass('d-none');
            });
            $('#paypal-button-container').addClass('d-none');
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
