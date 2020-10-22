<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 18:24:11
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/product_big.html" */ ?>
<?php /*%%SmartyHeaderCode:14552286615ba3c2441ed694-07974272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a940348b028446e88cd8975d95812e7b50f80975' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/product_big.html',
      1 => 1537629842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14552286615ba3c2441ed694-07974272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3c244381860_37001514',
  'variables' => 
  array (
    'wa_theme_url' => 0,
    'product' => 0,
    'wa' => 0,
    'image' => 0,
    'crossselling' => 0,
    'cross_product' => 0,
    'arrow_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3c244381860_37001514')) {function content_5ba3c244381860_37001514($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/product-big.css">

<section class="product">
    <div class="showcase">
        <div class="center">
            <div class="product_content">
                <h1 class="product_title">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                </h1>
                <div class="images_slider <?php if (count($_smarty_tpl->tpl_vars['product']->value['images'])>1){?>padding<?php }?>">
                    <div class="vertical-center-4 slider">
                        <div>
                            <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['product']->value,'750',array('itemprop'=>'image','id'=>'product-image','alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true)));?>

                        </div>
                        <?php if (count($_smarty_tpl->tpl_vars['product']->value['images'])>1){?>
                            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                                <div>
                                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->imgHtml($_smarty_tpl->tpl_vars['image']->value,'750');?>

                                </div>
                            <?php } ?>
                        <?php }?>
                    </div>
                </div>
                <h2 class="product_description"><?php echo $_smarty_tpl->tpl_vars['product']->value['summary'];?>
</h2>
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['compare_price'])){?>
                <div class="product_price"><s><?php echo $_smarty_tpl->tpl_vars['product']->value['compare_price'];?>
</s>&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 <?php smarty_template_function_translateCurrency($_smarty_tpl,array('currency'=>$_smarty_tpl->tpl_vars['product']->value['currency']));?>
</b></div>
                <?php }else{ ?>
                <div class="product_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 <?php smarty_template_function_translateCurrency($_smarty_tpl,array('currency'=>$_smarty_tpl->tpl_vars['product']->value['currency']));?>
</div>
                <?php }?>
                <a id="add_to_cart" data-added-success-text="Добавлено" data-added-fail-text="Ошибка" href="javascript:void(0)" onclick="product.addToCart(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
)" class="button_solid">В корзину</a>
                <div class="product_full_description">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['description']){?>
                    <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

                <?php }?>
                </div>
                
                <?php $_smarty_tpl->tpl_vars['crossselling'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->crossSelling(4), null, 0);?> 
                
                
                <?php if ($_smarty_tpl->tpl_vars['crossselling']->value){?>
                    <div class="cross_links">
                        <div class="title">С этим товаром покупают</div>
                        <div class="showcase">
                        <?php  $_smarty_tpl->tpl_vars['cross_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cross_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['crossselling']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cross_product']->key => $_smarty_tpl->tpl_vars['cross_product']->value){
$_smarty_tpl->tpl_vars['cross_product']->_loop = true;
?>
                            <div class="single">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['cross_product']->value['frontend_url'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['cross_product']->value,'172x172',array('itemprop'=>'image','id'=>'product-image','alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['cross_product']->value['name'], ENT_QUOTES, 'UTF-8', true)));?>

                                </a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['cross_product']->value['frontend_url'];?>
">
                                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['cross_product']->value['name'];?>
</div>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['cross_product']->value['compare_price'])){?>
                                    <div class="price"><s><?php echo $_smarty_tpl->tpl_vars['cross_product']->value['compare_price'];?>
</s>&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['cross_product']->value['price'];?>
 <?php smarty_template_function_translateCurrency($_smarty_tpl,array('currency'=>$_smarty_tpl->tpl_vars['cross_product']->value['currency']));?>
</b></div>
                                    <?php }else{ ?>
                                    <div class="price"><?php echo $_smarty_tpl->tpl_vars['cross_product']->value['price'];?>
 <?php smarty_template_function_translateCurrency($_smarty_tpl,array('currency'=>$_smarty_tpl->tpl_vars['cross_product']->value['currency']));?>
</div>
                                    <?php }?>
                                </a>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
        <?php if (!isset($_smarty_tpl->tpl_vars['arrow_url'])) $_smarty_tpl->tpl_vars['arrow_url'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['arrow_url']->value = $_smarty_tpl->tpl_vars['wa']->value->shop->getNextProduct($_smarty_tpl->tpl_vars['product']->value)){?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['arrow_url']->value;?>
" class="right_arrow"></a>
        <?php }?>
    </div>
    <div class="social_panel">
        <a href="" class="facebook"></a>
        <a href="" class="instagram"></a>
        <a href="" class="twitter"></a>
    </div>
</section><?php }} ?>