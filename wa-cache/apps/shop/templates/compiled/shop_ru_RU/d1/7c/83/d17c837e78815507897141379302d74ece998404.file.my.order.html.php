<?php /* Smarty version Smarty-3.1.14, created on 2018-09-20 18:58:11
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/my.order.html" */ ?>
<?php /*%%SmartyHeaderCode:20424500585ba3b0695139e7-56810965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd17c837e78815507897141379302d74ece998404' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/my.order.html',
      1 => 1537459059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20424500585ba3b0695139e7-56810965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3b069df9c84_95961704',
  'variables' => 
  array (
    'pin_required' => 0,
    'encoded_order_id' => 0,
    'wrong_pin' => 0,
    'order' => 0,
    'wa' => 0,
    'tracking' => 0,
    'contact' => 0,
    'shipping_address' => 0,
    'payment' => 0,
    'billing_address' => 0,
    'item' => 0,
    'subtotal' => 0,
    'frontend_my_order' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3b069df9c84_95961704')) {function content_5ba3b069df9c84_95961704($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['pin_required']->value)){?>
    <h1>
        Заказ <?php echo $_smarty_tpl->tpl_vars['encoded_order_id']->value;?>

    </h1>

    <form action="" method="post">
        <?php if ($_smarty_tpl->tpl_vars['wrong_pin']->value){?>
            <p style="color:red">PIN-код введен неверно</p>
        <?php }?>
        <p>Введите четырехзначный PIN-код, который был отправлен вам в уведомлении о заказе по электронной почте.</p>
        <div>
            <input type="text" name="pin">
        </div>
        <div>
            <input type="submit" value="Просмотреть заказ">
        </div>
    </form>
<?php }else{ ?>
    <h1>
        Заказ <?php echo $_smarty_tpl->tpl_vars['order']->value['id_str'];?>

        <span class="order-status" style="<?php echo $_smarty_tpl->tpl_vars['order']->value['state']->getStyle(1);?>
">
            <?php echo $_smarty_tpl->tpl_vars['order']->value['state']->getName();?>

        </span>
    </h1>
    <p class="gray"><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['order']->value['create_datetime'],'humandatetime');?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->isOrderDigital($_smarty_tpl->tpl_vars['order']->value['id'])){?>
    <a href="/shop/checkout_digital/success/?order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
&from=orders">Скачать товар</a>
    <?php }else{ ?>
    <!-- shipping -->
    <h3>Доставка
        <?php if ($_smarty_tpl->tpl_vars['order']->value['shipping_name']){?>
            &mdash; <strong><?php echo $_smarty_tpl->tpl_vars['order']->value['shipping_name'];?>
</strong>
        <?php }?>
    </h3>

    <!-- shipping plugin output -->
    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value['params']['tracking_number'])){?>
        Номер отправления: <?php echo $_smarty_tpl->tpl_vars['order']->value['params']['tracking_number'];?>

        <br />
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['tracking']->value)&&$_smarty_tpl->tpl_vars['order']->value['state']->getId()!='completed'){?>
        <div class="plugin">
            <?php echo $_smarty_tpl->tpl_vars['tracking']->value;?>

        </div>
    <?php }?>

    <p>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br>
        <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value;?>

        <?php }?>
    </p>
    <?php }?>
    <!-- billing -->
    <h3>Оплата
        <?php if ($_smarty_tpl->tpl_vars['order']->value['payment_name']){?>
            &mdash; <strong><?php echo $_smarty_tpl->tpl_vars['order']->value['payment_name'];?>
</strong>
        <?php }?>
    </h3>
    
    <!-- payment plugin output -->
    <?php if (!empty($_smarty_tpl->tpl_vars['payment']->value)){?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->isOrderDigital($_smarty_tpl->tpl_vars['order']->value['id'])){?>
        <div class="payment_tip" style="margin: 20px 0;">
            <i>Внимание! Скачать товар Вы сможете только после оплаты.</i>
        </div>
        <?php }?>
        <div class="plugin">
            <?php echo $_smarty_tpl->tpl_vars['payment']->value;?>

        </div>
    <?php }?>
    
    <p>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br>
        <?php if ($_smarty_tpl->tpl_vars['billing_address']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['billing_address']->value;?>

        <?php }?>
    </p>

    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value['comment'])){?>
        <h3>Комментарий</h3>
        <p>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>
<br>
        </p>
    <?php }?>

    <!-- order content and total -->
    <table class="table">
        <tr>
            <th></th>
            <th class="align-right">Количество</th>
            <th class="align-right">Итого</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr<?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='service'){?> class="service"<?php }?>>
                <td><?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='service'){?>+ <?php }?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                    <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='product'&&!empty($_smarty_tpl->tpl_vars['item']->value['download_link'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['download_link'];?>
"><strong>Скачать</strong></a><?php }?></td>
                <td class="align-right"><span class="gray"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['item']->value['price'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
 x</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
                <td class="align-right"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td>
            </tr>
        <?php } ?>
        <tr class="no-border thin">
            <td colspan="2" class="align-right">Подытог</td>
            <td class="align-right"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['subtotal']->value,$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td>
        </tr>
        <tr class="no-border thin">
            <td colspan="2" class="align-right">Скидка</td>
            <td class="align-right">&minus; <?php echo wa_currency_html($_smarty_tpl->tpl_vars['order']->value['discount'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td>
        </tr>
        <tr class="no-border thin">
            <td colspan="2" class="align-right">
                Доставка
                <?php if (!empty($_smarty_tpl->tpl_vars['order']->value['params']['shipping_name'])){?>
                    (<strong><?php echo $_smarty_tpl->tpl_vars['order']->value['params']['shipping_name'];?>
</strong>)
                <?php }?>
            </td>
            <td class="align-right"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['order']->value['shipping'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['order']->value['tax']>0){?>
            <tr class="no-border thin">
                <td colspan="2" class="align-right">Налог</td>
                <td class="align-right"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['order']->value['tax'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td>
            </tr>
        <?php }?>
        <tr class="no-border thin large">
            <td colspan="2" class="align-right"><b>Итого</b></td>
            <td class="align-right bold"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['order']->value['total'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td>
        </tr>
    </table>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount',true);?>


<!-- plugin hook: 'frontend_my_order' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_my_order']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
<?php }} ?>