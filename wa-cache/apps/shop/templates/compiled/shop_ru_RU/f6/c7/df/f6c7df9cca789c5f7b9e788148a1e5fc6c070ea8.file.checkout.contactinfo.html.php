<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 15:35:44
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout.contactinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:8102276985ba63720811417-84898979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6c7df9cca789c5f7b9e788148a1e5fc6c070ea8' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout.contactinfo.html',
      1 => 1531929216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8102276985ba63720811417-84898979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'checkout_contact_form' => 0,
    'billing_matches_shipping' => 0,
    'checkout_steps' => 0,
    'errors' => 0,
    'add_affiliate_bonus' => 0,
    'customer' => 0,
    'frontend_checkout' => 0,
    '_' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba637209d8607_43454502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba637209d8607_43454502')) {function content_5ba637209d8607_43454502($_smarty_tpl) {?><div class="checkout-content" data-step-id="contactinfo">
    <div id="checkout-contact-form">
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()&&!$_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->authAdapters();?>

        <?php }?>
        <div class="wa-form">
            <?php echo $_smarty_tpl->tpl_vars['checkout_contact_form']->value->html();?>


            
            <?php if ($_smarty_tpl->tpl_vars['billing_matches_shipping']->value){?>
                <div class="wa-field billing-address-fake" style="display:none;">
                    <div class="wa-name"><?php echo $_smarty_tpl->tpl_vars['checkout_contact_form']->value->fields('address.billing')->getName(null,true);?>
</div>
                    <div class="wa-value">
                        Совпадает с адресом доставки <a href="javascript:void(0)" id="edit-billing-address-link">Изменить адрес плательщика</a>
                    </div>
                </div>
                <script>(function() { "use strict";
                    if (!$) { return; }
                    var $edit_billing_address_link = $('#edit-billing-address-link');
                    var $billing_address_fake = $edit_billing_address_link.closest('.wa-field');
                    var $billing_address_wrapper = $edit_billing_address_link.closest('.wa-form').find('.wa-field-address-billing');
                    var $shipping_address_wrapper = $edit_billing_address_link.closest('.wa-form').find('.wa-field-address-shipping');
                    if (!$edit_billing_address_link.length || !$billing_address_fake.length || !$billing_address_wrapper.length || !$shipping_address_wrapper.length) {
                        return;
                    }

                    $billing_address_fake.insertAfter($billing_address_wrapper)
                        .append('<input type="hidden" name="billing_matches_shipping" value="1">')
                        .show();
                    $billing_address_wrapper.hide();

                    $edit_billing_address_link.on('click', function() {
                        $billing_address_wrapper.show();
                        $billing_address_fake.remove();

                        // Fill all fields in billing address
                        $shipping_address_wrapper.find(':input[name^="customer[address.shipping]"]').each(function() {
                            var $fld = $(this);
                            if ($fld.is(':radio')) {
                                if ($fld.is(':checked')) {
                                    $billing_address_wrapper.find('[name="'+$fld.attr('name').replace('address.shipping', 'address.billing')+'"]').filter(function() {
                                        return this.value == $fld.val();
                                    }).prop('checked', true);
                                }
                            } else {
                                $billing_address_wrapper.find('[name="'+$fld.attr('name').replace('address.shipping', 'address.billing')+'"]').val($fld.val()).change();
                            }
                        });
                    });

                    // Update billing country when user selects shipping country
                    // so that region field is able to reload itself
                    $shipping_address_wrapper.find(':input[name="customer[address.shipping][country]"]').change(function() {
                        $billing_address_wrapper.find(':input[name="customer[address.billing][country]"]').val($(this).val()).change();
                    });

                })();</script>
            <?php }?>

            <?php if (!empty($_smarty_tpl->tpl_vars['checkout_steps']->value['contactinfo']['service_agreement'])&&!empty($_smarty_tpl->tpl_vars['checkout_steps']->value['contactinfo']['service_agreement_hint'])){?>
                <div class="wa-field service-agreement-wrapper">
                    <div class="wa-value">
                        <label>
                            <?php if ($_smarty_tpl->tpl_vars['checkout_steps']->value['contactinfo']['service_agreement']=='checkbox'){?>
                                <input type="hidden" name="service_agreement" value="">
                                <input type="checkbox" name="service_agreement" value="1"<?php if ($_smarty_tpl->tpl_vars['wa']->value->post('service_agreement')||$_smarty_tpl->tpl_vars['wa']->value->storage('shop_checkout_contactinfo_agreement')){?> checked<?php }?>>
                            <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['checkout_steps']->value['contactinfo']['service_agreement_hint'];?>

                        </label>
                        <?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['service_agreement'])){?>
                            <em class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errors']->value['service_agreement'], ENT_QUOTES, 'UTF-8', true);?>
</em>
                        <?php }?>
                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()&&!$_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
            <div class="wa-field">
                <div class="wa-value">
                    <label><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['wa']->value->post('create_user')){?>checked<?php }?> id="create-user" name="create_user" value="1"> Зарегистрироваться как постоянный покупатель <i class="icon16 like"></i></label>
                    <?php if (shopAffiliate::isEnabled()){?>
                        <p class="hint">
                            Зарегистрированные покупатели получают накопительные бонусные баллы и скидки на будущие заказы.
                            <?php $_smarty_tpl->tpl_vars['add_affiliate_bonus'] = new Smarty_variable(round(shopAffiliate::calculateBonus(array('items'=>$_smarty_tpl->tpl_vars['wa']->value->shop->cart->items(),'total'=>$_smarty_tpl->tpl_vars['wa']->value->shop->cart->total())),2), null, 0);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['add_affiliate_bonus']->value)){?>
                                <?php echo sprintf("Этот заказ добавит +%s баллов к вашему партнерскому бонусу.",$_smarty_tpl->tpl_vars['add_affiliate_bonus']->value);?>

                            <?php }?>
                        </p>
                    <?php }?>
                </div>
            </div>
            <div id="create-user-div" style="display:none">
                <div class="wa-field">
                    <div class="wa-name">
                        Email
                    </div>
                    <div class="wa-value">
                        <?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['email'])){?><p><?php }?>
                        <input <?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['email'])){?>class="error"<?php }?> name="login" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->post('login',$_smarty_tpl->tpl_vars['customer']->value->get('email','default')), ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['email'])){?></p>
                        <em class="errormsg"><?php echo $_smarty_tpl->tpl_vars['errors']->value['email'];?>
</em>
                        <?php }?>
                    </div>
                </div>
                <div class="wa-field">
                    <div class="wa-name">
                        Пароль
                    </div>
                    <div class="wa-value">
                        <input <?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['password'])){?>class="error"<?php }?> name="password" type="password" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->post('password'), ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['password'])){?><br><em class="errormsg"><?php echo $_smarty_tpl->tpl_vars['errors']->value['password'];?>
</em><?php }?>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    var e = $('input[name="customer[email]"]');
                    if (e.length) {
                        e.on('keyup', function () {
                           if ($("#create-user-div").is(':visible')) {
                               $('#create-user-div input[name="login"]').val($(this).val());
                           }
                        });
                        $('#create-user-div input[name="login"]').on('keyup', function () {
                            e.val($(this).val());
                        })
                    }
                    $("#create-user").change(function () {
                        if ($(this).is(':checked')) {
                            $("#create-user-div").show().find('input').removeAttr('disabled');
                            var l = $(this).closest('form').find('input[name="customer[email]"]');
                            if (l.length && l.val()) {
                                $('#create-user-div input[name="login"]').val(l.val());
                            }
                        } else {
                            $("#create-user-div").hide().find('input').attr('disabled', 'disabled').val('');
                        }
                    }).change();
                });
            </script>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['all'])){?>
            <p class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['all'];?>
</p>
            <?php }?>
        </div>
    </div>

    <!-- plugin hook: 'frontend_checkout' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_checkout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>
    <div class="checkout-result error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>

</div>
<?php }} ?>