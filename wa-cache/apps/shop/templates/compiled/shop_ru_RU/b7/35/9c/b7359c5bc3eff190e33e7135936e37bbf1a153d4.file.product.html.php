<?php /* Smarty version Smarty-3.1.14, created on 2018-09-20 18:52:36
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/product.html" */ ?>
<?php /*%%SmartyHeaderCode:1804134005ba3c244066c20-42698257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7359c5bc3eff190e33e7135936e37bbf1a153d4' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/product.html',
      1 => 1533474866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1804134005ba3c244066c20-42698257',
  'function' => 
  array (
    'translateCurrency' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'currency' => 0,
    'currency_translates' => 0,
    'wa_theme_url' => 0,
    'product' => 0,
    'template' => 0,
    'wa_active_theme_path' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3c2441e7014_43410879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3c2441e7014_43410879')) {function content_5ba3c2441e7014_43410879($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_translateCurrency')) {
    function smarty_template_function_translateCurrency($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['translateCurrency']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['currency_translates'] = new Smarty_variable(array("EUR"=>"евро","RUB"=>"руб.","USD"=>"дол."), null, 0);?>
    <?php echo $_smarty_tpl->tpl_vars['currency_translates']->value[$_smarty_tpl->tpl_vars['currency']->value];?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/slick-slider.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/product.css">


<?php $_smarty_tpl->tpl_vars['template'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['features']["shablon_stranitsy_produkta"], null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['template']->value=="Маленький"){?>
    <?php $_smarty_tpl->tpl_vars['template_file'] = new Smarty_variable("product_small.html", null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['template_file'] = new Smarty_variable("product_big.html", null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/".((string)$_smarty_tpl->tpl_vars['template_file']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/product.js"></script><?php }} ?>