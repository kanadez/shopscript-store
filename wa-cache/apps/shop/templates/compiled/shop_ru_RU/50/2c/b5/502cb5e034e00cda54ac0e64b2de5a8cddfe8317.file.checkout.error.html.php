<?php /* Smarty version Smarty-3.1.14, created on 2018-12-23 18:08:37
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout.error.html" */ ?>
<?php /*%%SmartyHeaderCode:20173458645c1fa4f5464e62-47470820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '502cb5e034e00cda54ac0e64b2de5a8cddfe8317' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout.error.html',
      1 => 1535724694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20173458645c1fa4f5464e62-47470820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'wa_app_url' => 0,
    'frontend_checkout' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c1fa4f55bc490_34579952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1fa4f55bc490_34579952')) {function content_5c1fa4f55bc490_34579952($_smarty_tpl) {?><div class="checkout-result">
    <h1>Ошибка!</h1>
    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>
        <p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    <?php }else{ ?>
        <p>При обработке платежа произошла ошибка.</p>
    <?php }?>
    
    <p class="back">
        &larr; <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
">Вернуться в магазин</a>
    </p>
    
    <!-- plugin hook: 'frontend_checkout' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_checkout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>    
    
</div>

<?php }} ?>