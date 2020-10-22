<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:25:55
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/list-thumbs.html" */ ?>
<?php /*%%SmartyHeaderCode:17198857355ba618b3764d83-69830329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce6063df16844548fcb8135f878f71f66f7bbc76' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/list-thumbs.html',
      1 => 1537101057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17198857355ba618b3764d83-69830329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'p' => 0,
    'wa' => 0,
    'wa_theme_url' => 0,
    'pages_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba618b37f6ab2_08980052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba618b37f6ab2_08980052')) {function content_5ba618b37f6ab2_08980052($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_pagination')) include '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/vendors/smarty-plugins/function.wa_pagination.php';
?><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
<div class="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgWrapperClass($_smarty_tpl->tpl_vars['p']->value);?>
">
    <div>
        <a class="product_link" href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['p']->value,'200',array('itemprop'=>'image','alt'=>$_smarty_tpl->tpl_vars['p']->value['name'],'default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy200.png"));?>

        </a>
    </div>
    <div>
        <a class="product_link" href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
">
            <div class="product_title"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</div>
            <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['compare_price'])){?>
            <div class="product_price"><s><?php echo $_smarty_tpl->tpl_vars['p']->value['compare_price'];?>
</s>&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
 руб.</b></div>
            <?php }else{ ?>
            <div class="product_price"><?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
 руб.</div>
            <?php }?>
        </a>
    </div>
</div>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['pages_count']->value)&&$_smarty_tpl->tpl_vars['pages_count']->value>1){?>
<div class="load_more_wrapper">
    <a href="javascript:void(0)" id="load_more" class="button">Загрузить еще</a>
</div>
<div class="block lazyloading-paging" data-loading-str="Загрузка..." style="text-align: center;display: none;">
    <?php echo smarty_function_wa_pagination(array('total'=>$_smarty_tpl->tpl_vars['pages_count']->value,'attrs'=>array('class'=>"menu-h")),$_smarty_tpl);?>

</div>
<?php }?>

<!--<div class="single">
    <div></div>
    <div>
        <div class="product_title">Нашивка</div>
        <div class="product_price">100 руб.</div>
    </div>
</div>
<div class="double">
    <div></div>
    <div>
        <div class="product_title">Нашивка</div>
        <div class="product_price">100 руб.</div>
    </div>
</div>
<div class="single">
    <div></div>
    <div>
        <div class="product_title">Нашивка</div>
        <div class="product_price">100 руб.</div>
    </div>
</div>
<div class="single">
    <div></div>
    <div>
        <div class="product_title">Нашивка</div>
        <div class="product_price">100 руб.</div>
    </div>
</div>
<div class="single">
    <div></div>
    <div>
        <div class="product_title">Нашивка</div>
        <div class="product_price">100 руб.</div>
    </div>
</div>--><?php }} ?>