<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 18:17:12
         compiled from "45e5a6d728a662c8bde5e2065e9c0b3d62e361e5" */ ?>
<?php /*%%SmartyHeaderCode:11668480785ba65cf83076b0-30213417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45e5a6d728a662c8bde5e2065e9c0b3d62e361e5' => 
    array (
      0 => '45e5a6d728a662c8bde5e2065e9c0b3d62e361e5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '11668480785ba65cf83076b0-30213417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_theme_url' => 0,
    'wa' => 0,
    'products' => 0,
    'product' => 0,
    'categories' => 0,
    'c' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba65cf8491f67_19043000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba65cf8491f67_19043000')) {function content_5ba65cf8491f67_19043000($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/index.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/catalog-index.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/product-index.css">

<section class="firstscreencopy logo_title">
    <div class="asset4">
        <img class="shape" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape@2x.png">
        <img class="shape1" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 1@2x.png">
        <img class="shape2" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 2@2x.png">
        <img class="shape3" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 3@2x.png">
        <img class="shape4" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 4@2x.png">
        <img class="shape5" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 5@2x.png">
        <img class="shape6" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 6@2x.png">
        <img class="shape7" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 7@2x.png">
        <img class="shape8" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 8@2x.png">
        <img class="shape9" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 9@2x.png">
        <img class="shape10" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 10@2x.png">
        <img class="shape11" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 11@2x.png">
        <img class="shape12" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 12@2x.png">
    </div>
</section>
<section class="uto">
    <div class="social_panel">
        <a href="" class="facebook"></a>
        <a href="" class="instagram"></a>
        <a href="" class="twitter"></a>
    </div>
    <div class="text">
        <h1>Какой-то продающий заголовок по поисковому запросу</h1>
        <br>
        <h2>Авторские сумки, нашивки. <br>вышивка на одежде и аксессуарах</h2>
    </div>
    <div class="slider">
        <div class="vertical-center-4 slider">
            <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet("promo"), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['product']->value,'750');?>

                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="favourites catalog anchor">
    <div class="title">Вышивки</div>
    <div class="categories">
        <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet("favorites"), null, 0);?>
        <ul>
            <li><a href="javascript:void(0)" id="category_all" class="active" onclick="showAllFavoritesCategory()">Все</a></li>
            <?php $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->getFavoritesCategories($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
            <li><a href="javascript:void(0)" id="category<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" onclick="filterFavoritesCategory(<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="showcase">
        <div class="product_list">
            <?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable(0, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['dummy'] = new Smarty_variable($_smarty_tpl->tpl_vars['c']->value++, null, 0);?>
            <div id="favourite<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value>10){?>style="display:none"<?php }?> class="category<?php echo $_smarty_tpl->tpl_vars['p']->value['category_id'];?>
 <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgWrapperClass($_smarty_tpl->tpl_vars['p']->value);?>
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
                        <div class="catalog_product_title"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</div>
                        <div class="product_price"><?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
 руб.</div>
                    </a>
                </div>
            </div>
            <?php } ?>
            <?php if (count($_smarty_tpl->tpl_vars['products']->value)>10){?>
            <div class="load_more_wrapper">
                <a href="javascript:void(0)" onclick="loadMoreFavourites()" id="load_more" class="button">Загрузить еще</a>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<section class="collections product anchor">
    <div class="showcase">
        <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet("collections"), null, 0);?>
        <div class="left_arrow"></div>
        <div class="center bottom_slider">
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <div class="product_content">
                <div class="product_title">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>
                </div>
                <div class="left_side"></div>
                <div class="right_side">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['product']->value,'500x500');?>

                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="right_arrow"></div>            
    </div>
</section>
<!-- End Основная часть --><?php }} ?>