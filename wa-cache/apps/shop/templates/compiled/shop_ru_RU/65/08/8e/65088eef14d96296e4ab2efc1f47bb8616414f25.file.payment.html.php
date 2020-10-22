<?php /* Smarty version Smarty-3.1.14, created on 2018-09-20 18:52:52
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-plugins/payment/yandexmoney/templates/payment.html" */ ?>
<?php /*%%SmartyHeaderCode:16728105165ba3c254a23204-86380280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65088eef14d96296e4ab2efc1f47bb8616414f25' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-plugins/payment/yandexmoney/templates/payment.html',
      1 => 1534511441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16728105165ba3c254a23204-86380280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'integration_type' => 0,
    'form_url' => 0,
    'hidden_fields' => 0,
    'name' => 0,
    'value' => 0,
    'auto_submit' => 0,
    'plugin' => 0,
    'fields' => 0,
    'field' => 0,
    'order' => 0,
    'return_url' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3c254b2b8d8_13136485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3c254b2b8d8_13136485')) {function content_5ba3c254b2b8d8_13136485($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['integration_type']->value=='kassa'){?>
<form id="paymentForm" action="<?php echo $_smarty_tpl->tpl_vars['form_url']->value;?>
" method="post" target="_top">
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hidden_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['auto_submit']->value){?>
        <i class="icon16 loading"></i>
        <em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value->_w('Redirecting to Yandex.Money website for payment...'), ENT_QUOTES, 'UTF-8', true);?>
</em>
        <br/>
        <br/>
        <script type="text/javascript">
            (function(){
                var form = document.getElementById('paymentForm');
                var timer = setTimeout(function () {
                    document.getElementById('paymentFormSubmit').setAttribute('disabled','disabled');
                    form.submit();
                }, 3000);
                form.addEventListener("submit", function(){
                    document.getElementById('paymentFormSubmit').setAttribute('disabled','disabled');
                    if(timer) {
                        clearTimeout(timer);
                    }
                });
            })();
        </script>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['field']->value;?>
<br>
    <?php } ?>
    <input id="paymentFormSubmit"  type="submit" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value->_w('Pay for your order on Yandex.Money website'), ENT_QUOTES, 'UTF-8', true);?>
"/>
</form>
<?php }elseif($_smarty_tpl->tpl_vars['integration_type']->value=='mpos'){?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value->_w('Pay using a bank card via a mobile point-of-sale terminal upon order receipt.'), ENT_QUOTES, 'UTF-8', true);?>

<?php }else{ ?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value->_w('Pay from your Yandex.Money purse:'), ENT_QUOTES, 'UTF-8', true);?>
<br>
    <iframe frameborder="0" allowtransparency="true" scrolling="no"
        src="https://money.yandex.ru/embed/small.xml?account=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->account;?>
&quickpay=small&yamoney-payment-type=on&button-text=01&button-size=l&button-color=orange&targets=<?php echo rawurlencode($_smarty_tpl->tpl_vars['order']->value['description']);?>
&default-sum=<?php echo rawurlencode($_smarty_tpl->tpl_vars['order']->value['amount']);?>
&successURL=<?php echo rawurlencode($_smarty_tpl->tpl_vars['return_url']->value);?>
&label=<?php echo rawurlencode($_smarty_tpl->tpl_vars['label']->value);?>
"
        width="228" height="54">

    </iframe><br>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value->_w('or using a bank card:'), ENT_QUOTES, 'UTF-8', true);?>
<br>

    <iframe frameborder="0" allowtransparency="true" scrolling="no"
            src="https://money.yandex.ru/embed/small.xml?account=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->account;?>
&quickpay=small&any-card-payment-type=on&button-text=01&button-size=l&button-color=orange&targets=<?php echo rawurlencode($_smarty_tpl->tpl_vars['order']->value['description']);?>
&default-sum=<?php echo rawurlencode($_smarty_tpl->tpl_vars['order']->value['amount']);?>
&successURL=<?php echo rawurlencode($_smarty_tpl->tpl_vars['return_url']->value);?>
&label=<?php echo rawurlencode($_smarty_tpl->tpl_vars['label']->value);?>
"
            width="228" height="54">

    </iframe>
<?php }?><?php }} ?>