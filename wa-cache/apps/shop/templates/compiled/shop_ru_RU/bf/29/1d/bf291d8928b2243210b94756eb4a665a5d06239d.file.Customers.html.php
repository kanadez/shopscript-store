<?php /* Smarty version Smarty-3.1.14, created on 2018-10-30 15:59:55
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/customers/Customers.html" */ ?>
<?php /*%%SmartyHeaderCode:10954848085bd855cb6083c1-13301101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf291d8928b2243210b94756eb4a665a5d06239d' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/customers/Customers.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10954848085bd855cb6083c1-13301101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bd855cb69fa80_35914440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd855cb69fa80_35914440')) {function content_5bd855cb69fa80_35914440($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_action')) include '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/vendors/smarty-plugins/function.wa_action.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/customers.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<div class="sidebar left200px s-inner-sidebar" id="s-sidebar">
    <?php echo smarty_function_wa_action(array('app'=>"shop",'module'=>"customers",'action'=>"sidebar"),$_smarty_tpl);?>

</div>

<div class="content left200px blank" id="s-content">
    <div class="block triple-padded"><i class="icon16 loading"></i>Загрузка...</div>
</div>

<script>$(function() { "use strict";
    $.customers.init();
});</script>

<?php }} ?>