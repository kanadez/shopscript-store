<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 15:56:16
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/head.html" */ ?>
<?php /*%%SmartyHeaderCode:6817244085ba3ab7b66d6c2-56695546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aa901eaa22c79ffb70a84b9c0e9a48b4341afc9' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/head.html',
      1 => 1537620965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6817244085ba3ab7b66d6c2-56695546',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3ab7b6fa6b5_78413209',
  'variables' => 
  array (
    'wa_theme_url' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'wa_static_url' => 0,
    'nofollow' => 0,
    'frontend_head' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3ab7b6fa6b5_78413209')) {function content_5ba3ab7b6fa6b5_78413209($_smarty_tpl) {?><!-- Подключение файлов стилей -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plugins/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plugins/slick/slick-theme.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/modal.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/styles.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/catalog.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/catalog-filter.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/jquery.fancybox.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/ion.rangeSlider.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/animate.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/anima.css">

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plugins/grid/css/base.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plugins/grid/css/demo1.css" />

<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Ваш браузер сильно устарел и не поддерживает наш сайт. Пожалуйста, используйте более современный.");</script>


<!-- js -->
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/jquery-3.1.1.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-plugins/jquery.retina.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<!--<script type="text/javascript">$(window).load(function() {
    $('.promo img').retina({ force_original_dimensions: false });
    $('.product-list img,.product-info img,.cart img').retina();;
    $('.bestsellers img').retina();
});
</script>-->
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['nofollow']->value)){?>
    <!-- "nofollow" for pages not to be indexed, e.g. customer account -->
    <meta name="robots" content="noindex,nofollow" />
<?php }?>

<!-- plugin hook: 'frontend_head' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_head']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
<?php }} ?>