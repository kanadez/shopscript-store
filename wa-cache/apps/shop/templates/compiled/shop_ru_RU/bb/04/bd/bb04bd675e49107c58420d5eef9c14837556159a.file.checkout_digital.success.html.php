<?php /* Smarty version Smarty-3.1.14, created on 2018-09-20 17:33:56
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout_digital.success.html" */ ?>
<?php /*%%SmartyHeaderCode:3788215455ba3ab7b38d591-70379076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb04bd675e49107c58420d5eef9c14837556159a' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout_digital.success.html',
      1 => 1537454035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3788215455ba3ab7b38d591-70379076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3ab7b424d35_83965085',
  'variables' => 
  array (
    'wa' => 0,
    'from_orders_get_value' => 0,
    'from_orders_get_key' => 0,
    'from_orders' => 0,
    'payment_success' => 0,
    'order' => 0,
    'payment' => 0,
    'link' => 0,
    'frontend_checkout' => 0,
    '_' => 0,
    'wa_app_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3ab7b424d35_83965085')) {function content_5ba3ab7b424d35_83965085($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['from_orders_get_key'] = new Smarty_variable("orders", null, 0);?>
<?php $_smarty_tpl->tpl_vars['from_orders_get_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->get("from"), null, 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['from_orders_get_value']->value)&&$_smarty_tpl->tpl_vars['from_orders_get_value']->value==$_smarty_tpl->tpl_vars['from_orders_get_key']->value){?>
    <?php $_smarty_tpl->tpl_vars['from_orders'] = new Smarty_variable(true, null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['from_orders'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['from_orders']->value){?>
<div class="checkout-result success">
    <div class="welcome">
        <h1>Скачивание товара</h1>
        <?php if (empty($_smarty_tpl->tpl_vars['payment_success']->value)||!$_smarty_tpl->tpl_vars['order']->value['payment_completed']){?>
        <div class="payment_tip" style="margin: 20px 0;">
            <i>Внимание! Скачать товар Вы сможете только после оплаты.</i>
            <br><i>Для этого нажмите "Вернуться на сайт" сразу после оплаты.</i>
            <br><i>Также скачать купленный товар можно из письма в Вашей электронной почте.</i>
        </div>
        <?php }?>
    </div>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['payment']->value)){?>
        <div class="plugin">
            <?php echo $_smarty_tpl->tpl_vars['payment']->value;?>

        </div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['payment_success']->value)&&$_smarty_tpl->tpl_vars['order']->value['payment_completed']&&$_smarty_tpl->tpl_vars['order']->value['purchased_product_links']){?>
        <span class="highlighted">Чтобы скачать купленный товар, нажмите на ссылки ниже.</span>
        <div>Ссылки будут доступны в течение часа:</div>
        <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['purchased_product_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['file_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['file_name'];?>
</a>
        <?php } ?>
    <?php }elseif(!empty($_smarty_tpl->tpl_vars['order']->value['payment_error_message'])){?>
        <?php echo $_smarty_tpl->tpl_vars['order']->value['payment_error_message'];?>

        <a href="/support">Написать в поддержку</a>
    <?php }?>
    
    <!-- plugin hook: 'frontend_checkout' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_checkout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
        
</div>

<p class="back">
    <a class="button_solid back" onclick="history.back()" href="javascript:void(0)">Назад</a>
</p>
<?php }else{ ?>
<div class="checkout-result success">
    <div class="welcome">
        <h1>Спасибо!</h1>
        <p>Ваш заказ успешно оформлен. Мы свяжемся с вами в ближайшее время.<br />
        Номер вашего заказа <strong><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</strong>.</p>
        <?php if (empty($_smarty_tpl->tpl_vars['payment_success']->value)||!$_smarty_tpl->tpl_vars['order']->value['payment_completed']){?>
        <div class="payment_tip " style="margin: 20px 0;">
            <i>Внимание! Скачать товар Вы сможете только после оплаты.</i>
            <br><i>Для этого нажмите "Вернуться на сайт" сразу после оплаты.</i>
            <br><i>Также скачать купленный товар можно из письма в Вашей электронной почте.</i>
        </div>
        <?php }?>
    </div>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['payment']->value)){?>
        <div class="plugin">
            <?php echo $_smarty_tpl->tpl_vars['payment']->value;?>

        </div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['payment_success']->value)&&$_smarty_tpl->tpl_vars['order']->value['payment_completed']&&$_smarty_tpl->tpl_vars['order']->value['purchased_product_links']){?>
        <span class="highlighted">Оплата успешно принята. Мы обработаем ваш заказ и свяжемся с вами в ближайшее время.</span>
        <div>Ссылки для скачивания товара (будут доступны в течение часа):</div>
        <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['purchased_product_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['file_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['file_name'];?>
</a>
        <?php } ?>
    <?php }elseif(!empty($_smarty_tpl->tpl_vars['order']->value['payment_error_message'])){?>
        <?php echo $_smarty_tpl->tpl_vars['order']->value['payment_error_message'];?>

        <a href="/support">Написать в поддержку</a>
    <?php }?>
    
    <!-- plugin hook: 'frontend_checkout' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_checkout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
        
</div>

<p class="back">
    <a class="button_solid back" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
">Вернуться в магазин</a>
</p>
<?php }?><?php }} ?>