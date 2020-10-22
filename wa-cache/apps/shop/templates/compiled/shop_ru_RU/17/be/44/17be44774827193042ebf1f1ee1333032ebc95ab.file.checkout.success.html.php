<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 15:36:03
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout.success.html" */ ?>
<?php /*%%SmartyHeaderCode:20693286955ba63733757c75-60770499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17be44774827193042ebf1f1ee1333032ebc95ab' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout.success.html',
      1 => 1535296896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20693286955ba63733757c75-60770499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'payment' => 0,
    'payment_success' => 0,
    'frontend_checkout' => 0,
    '_' => 0,
    'wa_app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba637337be231_89584308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba637337be231_89584308')) {function content_5ba637337be231_89584308($_smarty_tpl) {?><div class="checkout-result success">
    <div class="welcome">
        <h1>Спасибо!</h1>
        <p>Ваш заказ успешно оформлен. Мы свяжемся с вами в ближайшее время.<br />
        Номер вашего заказа <strong><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</strong>.</p>
    </div>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['payment']->value)){?>
        <div class="plugin">
            <?php echo $_smarty_tpl->tpl_vars['payment']->value;?>

        </div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['payment_success']->value)){?>
        <span class="highlighted">Оплата успешно принята. Мы обработаем ваш заказ и свяжемся с вами в ближайшее время.</span>
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
</p><?php }} ?>