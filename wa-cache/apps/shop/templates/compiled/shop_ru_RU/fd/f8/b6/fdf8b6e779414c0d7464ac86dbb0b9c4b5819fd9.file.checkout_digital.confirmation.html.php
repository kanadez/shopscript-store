<?php /* Smarty version Smarty-3.1.14, created on 2018-09-20 18:52:50
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout_digital.confirmation.html" */ ?>
<?php /*%%SmartyHeaderCode:19278113495ba3c2521183e9-04098880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf8b6e779414c0d7464ac86dbb0b9c4b5819fd9' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout_digital.confirmation.html',
      1 => 1535724086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19278113495ba3c2521183e9-04098880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'wa' => 0,
    'tax' => 0,
    'items' => 0,
    'item' => 0,
    'discount' => 0,
    'colspan' => 0,
    'total' => 0,
    'billing_address' => 0,
    'contact' => 0,
    'terms' => 0,
    'frontend_checkout' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3c2522762b0_07183165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3c2522762b0_07183165')) {function content_5ba3c2522762b0_07183165($_smarty_tpl) {?><div class="checkout-content" data-step-id="confirmation">

    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>    
        <div class="checkout-result error">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            <br><br>
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/checkout_digital');?>
">Начать заново</a>
        </div>
    <?php }else{ ?>    
        <table class="table">
            <tr class="header">
                <th></th>
                <th class="align-left"><span class="non-mobile-only">Количество</span></th>
                <?php if ($_smarty_tpl->tpl_vars['tax']->value>0){?>
                    <th class="align-left">Налог</th>
                <?php }?>
                <th class="align-left">Итого</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr<?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='service'){?> class="service"<?php }?>>
                <td class="product_title"><?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='service'){?>+ <?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td class="align-left nowrap value"><span class="gray"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['item']->value['price'],$_smarty_tpl->tpl_vars['item']->value['currency']);?>
 &times;</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['tax']->value>0){?> 
                    <td class="align-left nowrap value"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['tax'])){?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['item']->value['tax'],true);?>
<?php }else{ ?>&ndash;<?php }?></td>
                <?php }?>
                <td class="align-left nowrap value"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity'],$_smarty_tpl->tpl_vars['item']->value['currency']);?>
</td>
            </tr>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['tax']->value>0){?><?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable(3, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable(2, null, 0);?><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['discount']->value)){?>
            <tr class="no-border thin">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
" class="align-right label">Скидка</td>
                <td class="align-left nowrap value">&minus; <?php echo shop_currency_html($_smarty_tpl->tpl_vars['discount']->value,true);?>
</td>
            </tr>
            <?php }?>            
            <?php if ($_smarty_tpl->tpl_vars['tax']->value>0){?>
            <tr class="no-border thin">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
" class="align-right label">Налог</td>
                <td class="align-left nowrap value"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['tax']->value,true);?>
</td>
            </tr>
            <?php }?>
            <tr class="no-border thin large">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
" class="align-right label"><b>Итого</b></td>
                <td class="align-left nowrap"><strong class="large value"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['total']->value,true);?>
</strong></td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['billing_address']->value){?>
            <tr class="no-border thin large">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
" class="align-right label">Плательщик</td>
                <td colspan="2" class="align-left nowrap value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            </tr>
            <?php }?>
            <tr class="no-border thin large">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
" class="align-right label">Комментарий</td>
                <td colspan="2" class="align-left nowrap value"><textarea class="comment" name="comment"><?php echo htmlspecialchars(waRequest::post('comment','','string'), ENT_QUOTES, 'UTF-8', true);?>
</textarea></td>
            </tr>
        </table>
    
        <?php if (!empty($_smarty_tpl->tpl_vars['terms']->value)){?>
        <br>
        <?php if (waRequest::method()=='post'&&!$_smarty_tpl->tpl_vars['wa']->value->post('terms')){?>
            <p class="error">Вы должны прочитать и принять Условия предоставления услуг для того, чтобы оформить заказ.</p>
        <?php }?>
        <label><input type="checkbox" name="terms" value="1"> <?php echo sprintf('Я принимаю <a href="%s" target="_blank">Условия предоставления услуг</a>',($_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/checkout',array('step'=>'confirmation'))).('?terms=1'));?>
</label>
        <?php }?>
    
    <?php }?>

    <!-- plugin hook: 'frontend_checkout' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_checkout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
    
    <button class="button_solid shipping back" onclick="order.backToCart(); return false;">Назад</button>
    <input type="hidden" name="step" value="confirmation">
    <input type="submit" class="button_solid" value="Оформить заказ" />
    <div id="confirmation_loader" class="outer_loader order_process_loader"></div>
    <span id="confirmation_error" class="submit_error">Пожалуйста, выберите способ доставки</span>  

</div><?php }} ?>