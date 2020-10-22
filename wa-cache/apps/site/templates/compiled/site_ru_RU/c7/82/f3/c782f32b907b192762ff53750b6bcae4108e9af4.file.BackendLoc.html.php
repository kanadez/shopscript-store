<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:29:21
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/site/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:12310700825ba6198189a483-93637144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c782f32b907b192762ff53750b6bcae4108e9af4' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/site/templates/actions/backend/BackendLoc.html',
      1 => 1452519803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12310700825ba6198189a483-93637144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba619818ce030_62910664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba619818ce030_62910664')) {function content_5ba619818ce030_62910664($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>