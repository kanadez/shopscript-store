<?php /* Smarty version Smarty-3.1.14, created on 2018-09-20 17:33:04
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/site/themes/default/error.html" */ ?>
<?php /*%%SmartyHeaderCode:5367546365ba3afa08aa803-86873561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6aeaa265200cee5a30aae17bc616da6a890c9fd' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/site/themes/default/error.html',
      1 => 1533138892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5367546365ba3afa08aa803-86873561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3afa08faf60_44178664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3afa08faf60_44178664')) {function content_5ba3afa08faf60_44178664($_smarty_tpl) {?><div class="error_page">
    <h1>
            <?php if ($_smarty_tpl->tpl_vars['error_code']->value){?>
                <div class="code"><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
</div> 
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['error_message']->value){?>
                <?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>

            <?php }else{ ?>
                Ошибка
            <?php }?>
    </h1>

    Запрашиваемый ресурс недоступен.
</div><?php }} ?>