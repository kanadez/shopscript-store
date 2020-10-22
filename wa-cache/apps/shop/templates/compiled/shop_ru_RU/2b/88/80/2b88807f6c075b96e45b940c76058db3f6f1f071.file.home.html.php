<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:25:50
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/home.html" */ ?>
<?php /*%%SmartyHeaderCode:9787901555ba618aea758e0-64856763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b88807f6c075b96e45b940c76058db3f6f1f071' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/home.html',
      1 => 1533050972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9787901555ba618aea758e0-64856763',
  'function' => 
  array (
    'showCatalogCell' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'showCatalogCellUnderFold' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'showTable' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'showCatalog' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa' => 0,
    'categories' => 0,
    'cat' => 0,
    'embroidery_cat_name' => 0,
    'embroideries' => 0,
    'subcat' => 0,
    'design_cat_name' => 0,
    'designs' => 0,
    'products_counter' => 0,
    'cell_counter' => 0,
    'design' => 0,
    'td_counter' => 0,
    'e' => 0,
    'times_to_show' => 0,
    'i' => 0,
    'wa_theme_url' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba618af033098_64835203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba618af033098_64835203')) {function content_5ba618af033098_64835203($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['embroidery_cat_name'] = new Smarty_variable("Готовые вышивки", null, 0);?>
<?php $_smarty_tpl->tpl_vars['design_cat_name'] = new Smarty_variable("Дизайны", null, 0);?>
<?php $_smarty_tpl->tpl_vars['embroideries'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['designs'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->categories(0,1,true), null, 0);?>
<?php if (count($_smarty_tpl->tpl_vars['categories']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['cat']->value['name']==$_smarty_tpl->tpl_vars['embroidery_cat_name']->value){?>
            <?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
$_smarty_tpl->tpl_vars['subcat']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['dummy'] = new Smarty_variable(array_push($_smarty_tpl->tpl_vars['embroideries']->value,$_smarty_tpl->tpl_vars['subcat']->value), null, 0);?>
            <?php } ?>
        <?php }elseif($_smarty_tpl->tpl_vars['cat']->value['name']==$_smarty_tpl->tpl_vars['design_cat_name']->value){?>
            <?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
$_smarty_tpl->tpl_vars['subcat']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['dummy'] = new Smarty_variable(array_push($_smarty_tpl->tpl_vars['designs']->value,$_smarty_tpl->tpl_vars['subcat']->value), null, 0);?>
            <?php } ?>
        <?php }?>
    <?php } ?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['cell_counter'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['products_counter'] = new Smarty_variable(0, null, 0);?>
<?php if (!function_exists('smarty_template_function_showCatalogCell')) {
    function smarty_template_function_showCatalogCell($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['showCatalogCell']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['design'] = new Smarty_variable($_smarty_tpl->tpl_vars['designs']->value[$_smarty_tpl->tpl_vars['products_counter']->value], null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['cell_counter']->value==0){?>
    <div class="big_square fill_lightgray wow fadeIn" data-wow-delay="0.1s" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->getFirstCategoryProductImage($_smarty_tpl->tpl_vars['design']->value);?>
)">
        <div class="text">
            <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['design']->value['description'];?>
</div>
        </div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==1){?>
    <div class="text upper">
        <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==2){?>
    <div class="text lower">
        <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==3){?>
    <div class="text lower">
        <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==4){?>
    <div class="big_square fill_lightgray wow fadeIn" data-wow-delay="0.9s" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->getFirstCategoryProductImage($_smarty_tpl->tpl_vars['design']->value);?>
)">
        <div class="text">
            <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['design']->value['description'];?>
</div>
        </div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==5){?>
    <div class="big_square fill_lightgray wow fadeIn" data-wow-delay="1.1s">
        <div class="text">
            <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['design']->value['description'];?>
</div>
        </div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==6){?>
    <div class="big_square fill_gainsboro wow fadeIn" data-wow-delay="1.3s">
        <div class="text">
            <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['design']->value['description'];?>
</div>
        </div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==7){?>
    <div class="big_square fill_lavender wow fadeIn" data-wow-delay="1.5s">
        <div class="text">
            <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['design']->value['description'];?>
</div>
        </div>
    </div>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['dummy'] = new Smarty_variable($_smarty_tpl->tpl_vars['products_counter']->value++, null, 0);?>        
    <?php $_smarty_tpl->tpl_vars['dummy'] = new Smarty_variable($_smarty_tpl->tpl_vars['cell_counter']->value++, null, 0);?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_showCatalogCellUnderFold')) {
    function smarty_template_function_showCatalogCellUnderFold($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['showCatalogCellUnderFold']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['design'] = new Smarty_variable($_smarty_tpl->tpl_vars['designs']->value[$_smarty_tpl->tpl_vars['products_counter']->value], null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['cell_counter']->value==0){?>
    <div class="text upper">
        <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==1){?>
    <div class="big_square fill_lightgray wow fadeIn" data-wow-delay="0.1s" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->getFirstCategoryProductImage($_smarty_tpl->tpl_vars['design']->value);?>
)">
        <div class="text">
            <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['design']->value['description'];?>
</div>
        </div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==2){?>
    <div class="text lower">
        <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==3){?>
    <div class="text lower">
        <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==4){?>
    <div class="big_square fill_lightgray wow fadeIn" data-wow-delay="0.9s" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->getFirstCategoryProductImage($_smarty_tpl->tpl_vars['design']->value);?>
)">
        <div class="text">
            <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['design']->value['description'];?>
</div>
        </div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==5){?>
    <div class="big_square fill_lavender wow fadeIn" data-wow-delay="1.1s">
        <div class="text">
            <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['design']->value['description'];?>
</div>
        </div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==6){?>
    <div class="big_square fill_gainsboro wow fadeIn" data-wow-delay="1.3s">
        <div class="text">
            <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['design']->value['description'];?>
</div>
        </div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['cell_counter']->value==7){?>
    <div class="big_square fill_lightgray wow fadeIn" data-wow-delay="1.5s">
        <div class="text">
            <div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['design']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</a><sup><?php echo $_smarty_tpl->tpl_vars['design']->value['count'];?>
</sup></div>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['design']->value['description'];?>
</div>
        </div>
    </div>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['dummy'] = new Smarty_variable($_smarty_tpl->tpl_vars['products_counter']->value++, null, 0);?>        
    <?php $_smarty_tpl->tpl_vars['dummy'] = new Smarty_variable($_smarty_tpl->tpl_vars['cell_counter']->value++, null, 0);?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_showTable')) {
    function smarty_template_function_showTable($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['showTable']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['td_counter'] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['embroideries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['td_counter']->value==0){?>
        <tr>
        <?php }?>
            <td><b><a href="<?php echo $_smarty_tpl->tpl_vars['e']->value['url'];?>
">~</b> <?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
<a></td>
        <?php if ($_smarty_tpl->tpl_vars['td_counter']->value==2){?>
        </tr>
        <?php $_smarty_tpl->tpl_vars['td_counter'] = new Smarty_variable(0, null, 0);?>
        <?php }?>
        <?php $_smarty_tpl->tpl_vars['dummy'] = new Smarty_variable($_smarty_tpl->tpl_vars['td_counter']->value++, null, 0);?>
    <?php } ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_showCatalog')) {
    function smarty_template_function_showCatalog($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['showCatalog']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['times_to_show'] = new Smarty_variable(ceil(count($_smarty_tpl->tpl_vars['design_cat_name']->value)/8), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['times_to_show']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['times_to_show']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <?php if ($_smarty_tpl->tpl_vars['i']->value==0){?>
            <?php smarty_template_function_showCatalogCell($_smarty_tpl,array());?>

            <div class="big_square wow fadeIn" data-wow-delay="0.3s">
                <div class="small_square fill_lightsteelblue"></div>
                <div class="small_square fill_lightgray"></div>
                <div class="bar fill_gainsboro">
                    <?php smarty_template_function_showCatalogCell($_smarty_tpl,array());?>

                </div>
            </div>
            <div class="big_square wow fadeIn" data-wow-delay="0.5s">
                <div class="bar fill_gainsboro">
                    <?php smarty_template_function_showCatalogCell($_smarty_tpl,array());?>

                </div>
                <div class="bar fill_lightsteelblue">
                    <?php smarty_template_function_showCatalogCell($_smarty_tpl,array());?>

                </div>
            </div>

            <!--<div class="header_abs wow fadeIn" data-wow-delay="0.1s">
                <header class="header_lk">
                    <div class="top_line">
                        <div class="left firstscreencopy">
                            <div class="sector_menu left">
                                <div class="bng_close"></div>
                                <div class="burger menu-trigger">
                                    <a href="#" class="mob_menu_link"></a>
                                </div>
                            </div>
                            <a href="/" class="asset2"></a>
                            <div class="top_menu" style="display:none">
                                <a href="#" class="active">Каталог</a>  
                                <a href="#">Скидки</a>  
                                <a href="#">Оплата и доставка</a>
                                <a href="#" class="button">Индивидуальный заказ</a>
                            </div>
                        </div>
                        <div class="right firstscreencopy">
                            <div class="profile left">
                                <div class="mini_modal" id="modal_logon">
                                    <a href="/">Выход</a>
                                </div>
                            </div>
                            <div class="cart left top_menu">
                                <a href="/">Корзина (1)</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </header>
            </div>-->

            <div class="double_square fill_lavender wow fadeIn" data-wow-delay="0.7s">
                <div class="title">Готовые вышивки</div>
                <table id="designs">
                    <tbody>
                        <?php smarty_template_function_showTable($_smarty_tpl,array());?>

                    </tbody>
                </table>
            </div>

            <?php smarty_template_function_showCatalogCell($_smarty_tpl,array());?>

            <?php smarty_template_function_showCatalogCell($_smarty_tpl,array());?>

            <?php smarty_template_function_showCatalogCell($_smarty_tpl,array());?>

            <?php smarty_template_function_showCatalogCell($_smarty_tpl,array());?>

            <?php $_smarty_tpl->tpl_vars['cell_counter'] = new Smarty_variable(0, null, 0);?>
        <?php }else{ ?>
            <div class="big_square wow fadeIn" data-wow-delay="0.3s">
                <div class="small_square fill_lavender"></div>
                <div class="small_square fill_lightsteelblue"></div>
                <div class="bar fill_gainsboro">
                    <?php smarty_template_function_showCatalogCellUnderFold($_smarty_tpl,array());?>

                </div>
            </div>
            <?php smarty_template_function_showCatalogCellUnderFold($_smarty_tpl,array());?>

            <div class="big_square wow fadeIn" data-wow-delay="0.5s">
                <div class="bar fill_gainsboro">
                    <?php smarty_template_function_showCatalogCellUnderFold($_smarty_tpl,array());?>

                </div>
                <div class="bar fill_lightsteelblue">
                    <?php smarty_template_function_showCatalogCellUnderFold($_smarty_tpl,array());?>

                </div>
            </div>
            <?php smarty_template_function_showCatalogCellUnderFold($_smarty_tpl,array());?>

            <div class="double_square fill_lavender wow fadeIn" data-wow-delay="0.7s">
                
            </div>
            <?php smarty_template_function_showCatalogCellUnderFold($_smarty_tpl,array());?>

            <?php smarty_template_function_showCatalogCellUnderFold($_smarty_tpl,array());?>

            <?php smarty_template_function_showCatalogCellUnderFold($_smarty_tpl,array());?>

            <?php $_smarty_tpl->tpl_vars['cell_counter'] = new Smarty_variable(0, null, 0);?>
        <?php }?>
    <?php }} ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/categories.css">

<section class="categories_grid" style="display:none">    
    <?php smarty_template_function_showCatalog($_smarty_tpl,array());?>

</section>

<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plugins/wow/wow.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/categories.js"></script><?php }} ?>