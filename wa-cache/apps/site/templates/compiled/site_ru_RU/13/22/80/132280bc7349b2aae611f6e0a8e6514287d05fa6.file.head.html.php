<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 15:56:41
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/site/themes/default/head.html" */ ?>
<?php /*%%SmartyHeaderCode:19516679135ba3afa0b3e7e9-15201755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '132280bc7349b2aae611f6e0a8e6514287d05fa6' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/site/themes/default/head.html',
      1 => 1537620974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19516679135ba3afa0b3e7e9-15201755',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3afa0b7a775_65899000',
  'variables' => 
  array (
    'wa_theme_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3afa0b7a775_65899000')) {function content_5ba3afa0b7a775_65899000($_smarty_tpl) {?><!-- put your Site app-only custom <head> tag instructions here -->

<!-- Подключение файлов стилей -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plugins/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plugins/slick/slick-theme.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/styles.css">
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


<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/jquery-3.1.1.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/jquery-migrate-1.4.1.min.js"></script><?php }} ?>