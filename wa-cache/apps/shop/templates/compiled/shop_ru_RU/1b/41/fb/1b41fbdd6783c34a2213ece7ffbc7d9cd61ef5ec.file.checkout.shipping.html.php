<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 15:35:44
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout.shipping.html" */ ?>
<?php /*%%SmartyHeaderCode:8297758635ba637200e4960-10756822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b41fbdd6783c34a2213ece7ffbc7d9cd61ef5ec' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout.shipping.html',
      1 => 1535642864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8297758635ba637200e4960-10756822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkout_shipping_methods' => 0,
    'm' => 0,
    'shipping' => 0,
    'r' => 0,
    'rate_id' => 0,
    'checkout_steps' => 0,
    'checkout_shipping_options' => 0,
    'wa' => 0,
    'authorized_user_back_action' => 0,
    'new_user_back_action' => 0,
    'frontend_checkout' => 0,
    '_' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba6372030f013_26141215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba6372030f013_26141215')) {function content_5ba6372030f013_26141215($_smarty_tpl) {?><div data-step-id="shipping">
<?php $_smarty_tpl->tpl_vars['external_methods'] = new Smarty_variable(array(), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['checkout_shipping_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
    <div class="form-group top-margin">
        <label class="container_radio"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

            <input 
                type="radio" 
                name="shipping_id" 
                value="<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
" 
                class="delivery_type" 
                <?php if ($_smarty_tpl->tpl_vars['m']->value['external']||!empty($_smarty_tpl->tpl_vars['m']->value['error'])){?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['m']->value['id']==$_smarty_tpl->tpl_vars['shipping']->value['id']){?>checked<?php }?>                
            />
            <span class="checkmark"></span>
        </label>
    </div>
    <?php if (empty($_smarty_tpl->tpl_vars['m']->value['error'])){?>
    <div class="form-group">
        <div class="advanced_rates">
            <?php if (empty($_smarty_tpl->tpl_vars['m']->value['error'])&&!empty($_smarty_tpl->tpl_vars['m']->value['rates'])){?>
                <?php if (count($_smarty_tpl->tpl_vars['m']->value['rates'])>1){?>
                    <select class="shipping-rates" name="rate_id[<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
]">
                        <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['rate_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['m']->value['rates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['rate_id']->value = $_smarty_tpl->tpl_vars['r']->key;
?>
                            <option data-rate="<?php echo shop_currency($_smarty_tpl->tpl_vars['r']->value['rate'],$_smarty_tpl->tpl_vars['r']->value['currency']);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['r']->value['est_delivery'])){?>data-est_delivery="<?php echo $_smarty_tpl->tpl_vars['r']->value['est_delivery'];?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['r']->value['comment'])){?>data-comment="<?php echo $_smarty_tpl->tpl_vars['r']->value['comment'];?>
"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['rate_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['rate_id']->value==$_smarty_tpl->tpl_vars['shipping']->value['rate_id']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
 (<?php echo shop_currency($_smarty_tpl->tpl_vars['r']->value['rate'],$_smarty_tpl->tpl_vars['r']->value['currency']);?>
)</option>
                        <?php } ?>
                    </select>
                <?php }else{ ?>
                    <input type="hidden" name="rate_id[<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
]" value="<?php echo key($_smarty_tpl->tpl_vars['m']->value['rates']);?>
">
                <?php }?>
            <?php }?>
        </div>
        <div class="rate">
            <?php if ($_smarty_tpl->tpl_vars['m']->value['rate']!==null){?>
            <?php echo shop_currency_html($_smarty_tpl->tpl_vars['m']->value['rate'],$_smarty_tpl->tpl_vars['m']->value['currency']);?>

            <?php }elseif($_smarty_tpl->tpl_vars['m']->value['external']){?>
            <?php $_smarty_tpl->createLocalArrayVariable('external_methods', null, 0);
$_smarty_tpl->tpl_vars['external_methods']->value[] = $_smarty_tpl->tpl_vars['m']->value['id'];?>
            Загрузка... <i class="icon16 loading"></i>
            <?php }?>
        </div>
    </div>
    <div class="form-group">
        <div class="description">
            Приблизительное время доставки: <?php if (!empty($_smarty_tpl->tpl_vars['m']->value['est_delivery'])){?><?php echo $_smarty_tpl->tpl_vars['m']->value['est_delivery'];?>
<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['m']->value['description']){?><p><?php echo $_smarty_tpl->tpl_vars['m']->value['description'];?>
</p><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['m']->value['form'])){?>
            <div 
                id="address_form_<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
" 
                data-shipping-id="<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
" 
                <?php if ($_smarty_tpl->tpl_vars['m']->value['id']!=$_smarty_tpl->tpl_vars['shipping']->value['id']){?>style="display:none"<?php }?> 
                class="form-group bottom-margin address_form <?php if ($_smarty_tpl->tpl_vars['m']->value['id']==$_smarty_tpl->tpl_vars['shipping']->value['id']){?>current<?php }?>"
            >
                <div class="change_address_form static">
                    <label>Ваш адрес:</label>
                    <div class="address_value"></div>
                    <button onclick="order.editShippingAddress(<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
); return false;">Изменить</button>
                </div>
            </div>
            <div 
                id="change_address_form_<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
" 
                class="form-group bottom-margin"
            >
                <div class="change_address_form editable narrow" data-shipping-id="<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['m']->value['form']->html();?>

                <?php if (!empty($_smarty_tpl->tpl_vars['checkout_steps']->value['shipping']['service_agreement_hint'])){?>                    
                    <?php echo $_smarty_tpl->tpl_vars['checkout_steps']->value['shipping']['service_agreement_hint'];?>
                        
                <?php }?>
                </div>
            </div>
            <?php }else{ ?>
            <div class="form-group bottom-margin">
                <div class="change_address_form">
                    <label>Ваш адрес:</label>
                    <div class="address_value"><?php echo $_smarty_tpl->tpl_vars['checkout_shipping_options']->value["address"]["city"];?>
, <?php echo $_smarty_tpl->tpl_vars['checkout_shipping_options']->value["address"]["street"];?>
</div>
                    <button onclick="order.editCheckoutData(); return false;">Изменить</button>
                </div>
            </div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['m']->value['custom_html'])){?>
                <div class="clear-both"></div>
                <div class="wa-form" <?php if ($_smarty_tpl->tpl_vars['m']->value['id']!=$_smarty_tpl->tpl_vars['shipping']->value['id']){?>style="display:none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['m']->value['custom_html'];?>
</div>
            <?php }?>
        </div>
    </div>
    <?php }else{ ?>
    <div class="form-group">
        <div class="description"><?php echo $_smarty_tpl->tpl_vars['m']->value['error'];?>
</div>
    </div>
    <?php }?>
<?php }
if (!$_smarty_tpl->tpl_vars['m']->_loop) {
?>
    <div class="form-group">
        <div class="description">Извините, заказ не может быть оформлен — <strong>мы не можем доставить заказанные товары по указанному адресу</strong>.</div>
    </div>
<?php } ?>
</div>
<input type="hidden" name="step" value="shipping">
<?php $_smarty_tpl->tpl_vars['authorized_user_back_action'] = new Smarty_variable("order.backToCart(); return false;", null, 0);?>
<?php $_smarty_tpl->tpl_vars['new_user_back_action'] = new Smarty_variable("order.editCheckoutData(); return false;", null, 0);?>
<button 
    class="button_solid shipping back" 
    onclick="<?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?> <?php echo $_smarty_tpl->tpl_vars['authorized_user_back_action']->value;?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['new_user_back_action']->value;?>
 <?php }?>">
    Назад
</button>
<input type="submit" class="button_solid" value="Далее" />
<div id="shipping_loader" class="outer_loader order_process_loader"></div>
<span id="shipping_not_selected_error" class="submit_error">Пожалуйста, выберите способ доставки</span>

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
<?php }?><?php }} ?>