<?php /* Smarty version Smarty-3.1.14, created on 2018-09-20 18:49:53
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/my.orders.html" */ ?>
<?php /*%%SmartyHeaderCode:12158231985ba3c145b63d83-78655534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4abf00d40bc92ecd57bed2c24979a31785790e09' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/my.orders.html',
      1 => 1537458592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12158231985ba3c145b63d83-78655534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3c145c57f35_63944504',
  'variables' => 
  array (
    'orders' => 0,
    'o' => 0,
    'wa' => 0,
    'i' => 0,
    'frontend_my_orders' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3c145c57f35_63944504')) {function content_5ba3c145c57f35_63944504($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><h1>Мои заказы</h1>

<table class="table">
<?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
$_smarty_tpl->tpl_vars['o']->_loop = true;
?>
    <tr id="order-<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
">
        <td class="nowrap">
            <a href="<?php echo $_smarty_tpl->tpl_vars['o']->value['url'];?>
" class="bold">
                <?php echo $_smarty_tpl->tpl_vars['o']->value['id_str'];?>

            </a>
        </td>
        <td class="nowrap">
            <span class="nowrap order-status" style="<?php echo $_smarty_tpl->tpl_vars['o']->value['state']->getStyle(1);?>
">
                <?php echo $_smarty_tpl->tpl_vars['o']->value['state']->getName();?>

            </span>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->isOrderDigital($_smarty_tpl->tpl_vars['o']->value['id'])){?>
            <a href="/shop/checkout_digital/success/?order_id=<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
&from=orders">Скачать товар</a>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['o']->value['items'])){?>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['o']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <span class="gray">x <?php echo $_smarty_tpl->tpl_vars['i']->value['quantity'];?>
</span><br />
                <?php } ?>
            <?php }?>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['o']->value['shipping_name']){?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['shipping_name'], ENT_QUOTES, 'UTF-8', true);?>

            <?php }else{ ?>
                &nbsp;
            <?php }?>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['o']->value['payment_name']){?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['payment_name'], ENT_QUOTES, 'UTF-8', true);?>

            <?php }else{ ?>
                &nbsp;
            <?php }?>
        </td>
        <td>
            <span class="gray"><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['o']->value['create_datetime'],'humandate');?>
</span>
        </td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['o']->_loop) {
?>
	<tr class="no-border">
        <td>Ваша история заказов пуста.</td>
  	</tr>
<?php } ?>
</table>

<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount',true);?>


<!-- plugin hook: 'frontend_my_orders' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_my_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php }} ?>