<?php /* Smarty version Smarty-3.1.14, created on 2018-09-21 02:45:12
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/page.html" */ ?>
<?php /*%%SmartyHeaderCode:11917303395ba431081784a6-18655066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9bb0c3bf2f7826a05310a6f312f74625aaff8ba' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/page.html',
      1 => 1537030243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11917303395ba431081784a6-18655066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'wa' => 0,
    'subpages' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba431081af4a1_72207253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba431081af4a1_72207253')) {function content_5ba431081af4a1_72207253($_smarty_tpl) {?><!--<h1><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</h1>-->

<?php $_smarty_tpl->tpl_vars['subpages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->pages($_smarty_tpl->tpl_vars['page']->value['id']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['subpages']->value){?>
    <ul class="sub-links">
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subpages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></li>
        <?php } ?>
    </ul>
<?php }?>

<div id="page" role="main">
    <?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

</div><?php }} ?>