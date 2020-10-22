<?php /* Smarty version Smarty-3.1.14, created on 2018-09-20 18:54:25
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/site/themes/default/login.html" */ ?>
<?php /*%%SmartyHeaderCode:5872689595ba3c2b1bf5125-25339167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e19c665a00a7b76c9db2b664e996fb549628fac3' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/site/themes/default/login.html',
      1 => 1531924787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5872689595ba3c2b1bf5125-25339167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'error' => 0,
    'without_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3c2b1c67135_18330283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3c2b1c67135_18330283')) {function content_5ba3c2b1c67135_18330283($_smarty_tpl) {?><div id="page" role="main">
    <h1>Логин</h1>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->authAdapters();?>

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->loginForm($_smarty_tpl->tpl_vars['error']->value,empty($_smarty_tpl->tpl_vars['without_form']->value));?>

</div><?php }} ?>