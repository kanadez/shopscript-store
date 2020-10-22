<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:51:59
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/product/Product.html" */ ?>
<?php /*%%SmartyHeaderCode:17064572835ba61ecfe805a2-74902734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd13cbae65730d1d6345f21ebae432f238af20d1e' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/product/Product.html',
      1 => 1534265815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17064572835ba61ecfe805a2-74902734',
  'function' => 
  array (
    'categories_select' => 
    array (
      'parameter' => 
      array (
        'category_id' => 0,
      ),
      'compiled' => '',
    ),
    'sets_select' => 
    array (
      'parameter' => 
      array (
        'set_id' => NULL,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'product' => 0,
    'backend_product' => 0,
    '_' => 0,
    'edit_rights' => 0,
    'frontend_urls' => 0,
    'frontend_url' => 0,
    'report_rights' => 0,
    'sales' => 0,
    'forecast' => 0,
    'category' => 0,
    'product_sets' => 0,
    'set' => 0,
    'tag' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'sku_id' => 0,
    'sku' => 0,
    'primary_currency' => 0,
    'stocks' => 0,
    'stock_id' => 0,
    'count' => 0,
    'stock' => 0,
    'counters' => 0,
    'url_in_use' => 0,
    'product_types' => 0,
    'type' => 0,
    'id' => 0,
    'taxes' => 0,
    'tax' => 0,
    'categories' => 0,
    'category_id' => 0,
    '_show_selects' => 0,
    'c' => 0,
    '_parent_id' => 0,
    '_path' => 0,
    'sets' => 0,
    'set_id' => 0,
    'backend_product_edit' => 0,
    'features' => 0,
    'use_product_currency' => 0,
    'currencies' => 0,
    'code' => 0,
    'popular_tags' => 0,
    'editable_ogs_list' => 0,
    'editable_ogs' => 0,
    'product_og' => 0,
    'other_ogs' => 0,
    'k' => 0,
    'v' => 0,
    'template_content' => 0,
    'template' => 0,
    'lang' => 0,
    'category_name' => 0,
    'sidebar_counters' => 0,
    'sales_data' => 0,
    'sku_plot_data' => 0,
    'title_suffix' => 0,
    'sidebar_width' => 0,
    'orders_default_view' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba61ed0cde4f6_46270395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba61ed0cde4f6_46270395')) {function content_5ba61ed0cde4f6_46270395($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><div class="block double-padded" id="shop-productprofile" data-product-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
    <h1>
        <a href="#/" class="back">&larr; Назад</a>

        <span class="s-product-name"><?php if ($_smarty_tpl->tpl_vars['product']->value['id']=='new'){?>Новый товар<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
        <span class="hint float-right s-product-id" <?php if ($_smarty_tpl->tpl_vars['product']->value['id']=='new'){?>style="display:none;"<?php }?>>id: <?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</span>

        <!-- plugin hook: 'backend_product.title_suffix' -->
        
        <?php if (!empty($_smarty_tpl->tpl_vars['backend_product']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['title_suffix']);?>
<?php } ?><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['edit_rights']->value){?>
            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/" class="button green s-product-edit-link" id="s-edit-product">Редактировать</a>
        <?php }?>

        <!-- plugin hook: 'backend_product.action_button' -->
        
        <?php if (!empty($_smarty_tpl->tpl_vars['backend_product']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['action_button']);?>
<?php } ?><?php }?>

    </h1>

    <ul class="menu-h s-product-nav" id="s-product-frontend-links">
        <li class="s-inline-mixed-string">
            Ссылка:
            <?php  $_smarty_tpl->tpl_vars['frontend_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['frontend_url']->_loop = false;
 $_from = array_slice(array_reverse($_smarty_tpl->tpl_vars['frontend_urls']->value),0,100); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['frontend_url']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['frontend_url']->key => $_smarty_tpl->tpl_vars['frontend_url']->value){
$_smarty_tpl->tpl_vars['frontend_url']->_loop = true;
 $_smarty_tpl->tpl_vars['frontend_url']->index++;
 $_smarty_tpl->tpl_vars['frontend_url']->first = $_smarty_tpl->tpl_vars['frontend_url']->index === 0;
?>
                <span class="s-product-frontend-url-not-empty">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['url'];?>
" target="_blank"><span><?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['url'];?>
</span></a>
                </span>
                <br>
            <?php } ?>
            <span class="s-product-frontend-url-empty gray" <?php if (!empty($_smarty_tpl->tpl_vars['frontend_urls']->value)){?>style="display:none;"<?php }?>>
                <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['type']['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo sprintf('Этот товар не показывается ни на одной из витрин, поскольку тип «%s», к которому принадлежит этот товар, не разрешен к публикации ни на одной витрине.',$_tmp1);?>

            </span>
        </li>
    </ul>


    <div id="s-product-profile-page">
        <div class="sidebar right200px" id="s-toolbar">

            <div class="align-center">
                <ul class="menu-h small s-report-toggler">
                    <li class="selected" data-target="last-month"><a href="javascript:void(0);" class="inline-link"><b><i>Последние 30 дней</i></b></a></li>
                    <li data-target="forecast"><a href="javascript:void(0);" class="inline-link" title="На основании данных о продажах в течение последних 90 дней"><b><i>Прогноз</i></b></a></li>
                </ul>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['report_rights']->value){?>
                <table class="zebra s-report-tabs">
                    <tr>
                        <td>Продано шт.</td>
                        <td class="align-right nowrap">
                            <strong class="s-target s-last-month"><?php echo $_smarty_tpl->tpl_vars['sales']->value['quantity'];?>
</strong>
                            <strong class="s-target s-forecast hidden" data-hidden="<?php if ($_smarty_tpl->tpl_vars['forecast']->value['sold_rounded_1']==0){?>1<?php }else{ ?>0<?php }?>"><?php if ($_smarty_tpl->tpl_vars['forecast']->value['sold']<1){?><?php echo $_smarty_tpl->tpl_vars['forecast']->value['sold_rounded_1_str'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['forecast']->value['sold_rounded'];?>
<?php }?></strong>
                        </td>
                    </tr>
                    <tr>
                        <td>Продажи</td>
                        <td class="align-right nowrap">
                            <strong class="s-target s-last-month"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['sales']->value['total']);?>
</strong>
                            <strong class="s-target s-forecast hidden"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['forecast']->value['sales']);?>
</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>Прибыль</td>
                        <td class="align-right nowrap">
                            <strong class="s-target s-last-month"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['sales']->value['profit']);?>
</strong>
                            <strong class="s-target s-forecast hidden"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['forecast']->value['profit']);?>
</strong>
                        </td>
                    </tr>
                </table>
            <?php }?>

            <br><br>
            <?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?>
                <div class="graph-wrapper align-center" id="product-sku-plot">
                    <div class="pie-wrapper"></div>
                    <div class="hint-wrapper"></div>
                </div>
            <?php }?>

            <?php if (count($_smarty_tpl->tpl_vars['product']->value['categories'])){?>
                <ul class="menu-v compact with-icons" id="s-product-categories">
                    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                        <li><a href="#/products/category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><i class="icon16 <?php if ($_smarty_tpl->tpl_vars['category']->value['type']){?>funnel<?php }else{ ?>folder<?php }?>"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                    <?php } ?>
                </ul>
            <?php }?>

            <?php if (count($_smarty_tpl->tpl_vars['product_sets']->value)){?>
                <ul class="menu-v compact with-icons" id="s-product-sets">
                    <?php  $_smarty_tpl->tpl_vars['set'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['set']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_sets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['set']->key => $_smarty_tpl->tpl_vars['set']->value){
$_smarty_tpl->tpl_vars['set']->_loop = true;
?>
                        <li><a href="#/products/set_id=<?php echo $_smarty_tpl->tpl_vars['set']->value['id'];?>
"><i class="icon16 <?php if ($_smarty_tpl->tpl_vars['set']->value['type']==shopSetModel::TYPE_DYNAMIC){?>funnel<?php }else{ ?>ss set<?php }?>"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                    <?php } ?>
                </ul>
            <?php }?>

            <?php if (count($_smarty_tpl->tpl_vars['product']->value['tags'])){?>
                <ul class="menu-v compact with-icons tags" id="s-product-tags">
                    <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_smarty_tpl->tpl_vars['tag_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag_id']->value = $_smarty_tpl->tpl_vars['tag']->key;
?>
                        <li><a href="#/products/tag=<?php echo urlencode($_smarty_tpl->tpl_vars['tag']->value);?>
"><i class="icon16 tags"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                    <?php } ?>
                </ul>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['edit_rights']->value>1||$_smarty_tpl->tpl_vars['product']->value['contact_id']==$_smarty_tpl->tpl_vars['wa']->value->userId()){?>
                <div id="s-product-delete" class="block align-center top-padded">
                    <ul class="menu-h with-icons">
                        <li><a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/main/product/delete/" class="inline-link js-action"><i class="icon16 delete"></i>Удалить товар</a></li>
                    </ul>
                </div>
            <?php }?>

            <!-- plugin hook: 'backend_product.toolbar_section' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_product']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['toolbar_section']);?>
<?php } ?><?php }?>



        </div>
        <div class="content right200px" id="s-product-view">

            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_product']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['info_section']);?>
<?php } ?><?php }?>

            <?php $_smarty_tpl->_capture_stack[0][] = array('template-product-categories', null, null); ob_start(); ?>
                
                    {% if (!$.isEmptyObject(o.categories) && $.isArray(o.categories)) { %}
                        {% for (var i = 0; i < o.categories.length; i += 1) { %}
                            {% var category = o.categories[i]; %}
                            <li><a href="#/products/category_id={%=category.id%}"><i class="icon16 {% if (category.type != '0') { %}funnel{% } else { %}folder{% } %}"></i>{%=category.name%}</a></li>
                        {% } %}
                    {% } %}
                
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php $_smarty_tpl->_capture_stack[0][] = array('template-product-tags', null, null); ob_start(); ?>
                
                    {% if (!$.isEmptyObject(o.tags) && $.isArray(o.tags)) { %}
                        {% for (var i = 0; i < o.tags.length; i += 1) { %}
                            {% var tag = o.tags[i]; %}
                            <li><a href="#/products/tag={%=tag.url%}">{%=tag.name%}</a></li>
                        {% } %}
                    {% } %}
                
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <ul class="s-product-image-crops"></ul>

            <?php if ($_smarty_tpl->tpl_vars['report_rights']->value){?>
                <div class="graph-wrapper"  id="product-sales-plot">
                    <!-- INCLUDE RESOURCES -->
                    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/css/charts.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
">
                    <!-- CHART WRAPPERS -->
                    <div class="sales-wrapper"></div>
                    <div class="hint-wrapper" id="hint-wrapper"></div>
                </div>
            <?php }?>

            <div class="block" id="s-product-profile-tabs">
                <ul class="tabs">
                    <li class="selected" data-tab="profile"><a href="#">Цены и наличие</a></li>
                    <li data-tab="stock-logs"><a href="#">Журнал изменений остатков</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('orders')){?>
                    <li data-tab="recent-orders"><a href="#">Последние заказы</a></li>
                    <?php }?>
                    <li data-tab="reviews"><a href="#">Отзывы</a></li>
                    <li data-tab="buybuttons"><a href="#"><i class="icon16 ss div"></i>Виджет «Купить»</a></li>
                    <!-- plugin hook: 'backend_product.tab_li' -->
                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['backend_product']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['tab_li']);?>
<?php } ?><?php }?>
                </ul>
                <div class="tab-content">
                    <div class="block s-tab-block" data-tab="profile">

                        <div id="product-stock-stat" class="s-product-mini-stock-log">
                            Доступный остаток на складе: <strong><?php echo shopHelper::getStockCountIcon($_smarty_tpl->tpl_vars['product']->value['count']);?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['count']!==null){?><?php echo $_smarty_tpl->tpl_vars['product']->value['count'];?>
<?php }else{ ?>∞<?php }?></strong>

                            <br><br>

                            <?php if ($_smarty_tpl->tpl_vars['report_rights']->value&&$_smarty_tpl->tpl_vars['forecast']->value['date']!==null){?>
                                <p class="small"><em>
                                        <?php if ($_smarty_tpl->tpl_vars['forecast']->value['days']<shopProduct::MAX_FORECAST_DAYS){?> 
                                            <?php echo sprintf(_w('Based on your average monthly sales volume for %s during last three months (%d units per month), you will run out of this product in <strong>%d days</strong> (on %s).'),htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['forecast']->value['sold_rounded'],$_smarty_tpl->tpl_vars['forecast']->value['days'],wa_date("humandate",$_smarty_tpl->tpl_vars['forecast']->value['date']));?>

                                        <?php }else{ ?>
                                            <?php echo sprintf(_w('Based on your average monthly sales volume for %s during last three months (%d units per month), you will run out of this product in more than 10 years (on %s).'),htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['forecast']->value['sold_rounded'],wa_date("humandate",$_smarty_tpl->tpl_vars['forecast']->value['date']));?>

                                        <?php }?>

                                </em></p>
                            <?php }?>

                        </div>
                        <?php $_smarty_tpl->_capture_stack[0][] = array('template-product-stock-stat', null, null); ob_start(); ?>
                            <p>
                                Доступный остаток на складе: <strong>{% if (o.count !== null) { %}{%#o.count%}{% } else { %}∞{% } %}</strong>
                            </p>
                            
                            {% if (o.count !== null && !$.isEmptyObject(o.runout_str)) { %}
                                <span class="small"><em>{%=o.runout_str%}</em></span>
                            {% } %}
                            
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                        <table class="s-product-skus">
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_smarty_tpl->tpl_vars['sku_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['sku']->total= $_smarty_tpl->_count($_from);
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
 $_smarty_tpl->tpl_vars['sku_id']->value = $_smarty_tpl->tpl_vars['sku']->key;
?>
                                <tr data-id="<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
" class="<?php if (empty($_smarty_tpl->tpl_vars['sku']->value['available'])){?>grey <?php }?><?php if ($_smarty_tpl->tpl_vars['sku']->value['virtual']){?>s-sku-virtual<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['sku'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <td class="s-name">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                        <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['sku'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_name'])){?>
                                            <i class="icon16 attachment-small"></i>
                                        <?php }?>
                                    </td>
                                    <td class="s-price">
                                        <strong><?php if ($_smarty_tpl->tpl_vars['product']->value['currency']!==null){?><?php echo wa_currency_html($_smarty_tpl->tpl_vars['sku']->value['price'],$_smarty_tpl->tpl_vars['product']->value['currency']);?>
<?php }else{ ?><?php echo wa_currency_html($_smarty_tpl->tpl_vars['sku']->value['price'],$_smarty_tpl->tpl_vars['primary_currency']->value);?>
<?php }?></strong>
                                    </td>
                                    <td class="s-stock">
                                        <?php if (!count($_smarty_tpl->tpl_vars['sku']->value['stock'])){?>
                                            <?php echo shopHelper::getStockCountIcon($_smarty_tpl->tpl_vars['sku']->value['count']);?>

                                            <?php if ($_smarty_tpl->tpl_vars['sku']->value['count']===null){?>∞<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sku']->value['count'];?>
<?php }?>
                                        <?php }else{ ?>
                                            <?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_smarty_tpl->tpl_vars['stock_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['stock']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
 $_smarty_tpl->tpl_vars['stock_id']->value = $_smarty_tpl->tpl_vars['stock']->key;
 $_smarty_tpl->tpl_vars['stock']->index++;
 $_smarty_tpl->tpl_vars['stock']->first = $_smarty_tpl->tpl_vars['stock']->index === 0;
?>
                                                <?php if (isset($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value])){?>
                                                    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value], null, 0);?>
                                                <?php }else{ ?>
                                                    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(null, null, 0);?>
                                                <?php }?>
                                                    <?php echo shopHelper::getStockCountIcon($_smarty_tpl->tpl_vars['count']->value,$_smarty_tpl->tpl_vars['stock_id']->value);?>


                                                    <?php if ($_smarty_tpl->tpl_vars['count']->value===null){?>∞<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
<?php }?>

                                                <?php if (count($_smarty_tpl->tpl_vars['stocks']->value)>1){?>
                                                    <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><br>
                                                <?php }?>
                                            <?php } ?>
                                        <?php }?>
                                    </td>
                                    <?php if ($_smarty_tpl->tpl_vars['edit_rights']->value){?>
                                    <td class="min-width">
                                        <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/focus=name&sku=<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
" class="nowrap s-product-edit-link"><i class="icon16 edit"></i>Редактировать</a>
                                    </td>
                                    <?php }?>
                                </tr>
                                <?php } ?>

                                <?php $_smarty_tpl->_capture_stack[0][] = array('template-sku', null, null); ob_start(); ?>
                                    {% var sku_id = o.sku_id; %}
                                    {% var sku = o.sku; %}
                                    {% var stocks = o.stocks || {}; %}
                                    {% sku.stocks = sku.stocks || {}; %}
                                    {% var stock_ids = o.stock_ids; %}
                                    <tr data-id="{%=sku_id%}" class="{% if(!sku.available) { %}grey {% } %}{% if (sku.virtual == '1') { %}s-sku-virtual{% } %}" title="{%=sku.sku%}">
                                        <td class="s-name">
                                            {%=sku.name%}
                                            <span class="hint">{%=sku.sku%}</span>
                                            {% if (sku.file_name) { %}
                                                <i class="icon16 attachment-small"></i>
                                            {% } %}
                                        </td>
                                        <td class="s-price"><strong>{%#sku.price_html%}</strong></td>
                                        <td class="s-stock">
                                            {% if (!$.isEmptyObject(sku.stock)){ %}
                                                {% for (var i = 0, n = stock_ids.length; i < n; i += 1) { %}
                                                    {% var stock_id = stock_ids[i]; %}
                                                    {% count = typeof sku.stock[stock_id] !== 'undefined' ? sku.stock[stock_id] : null; %}

                                                    {%# sku.stock_icon[stock_id] %}

                                                    {% if (count === null) { %}∞{% }else{ %}{%=''+count%}{% } %}

                                                    {% if (!$.isEmptyObject(stocks)){ %}
                                                        <span class="hint">@{%=stocks[stock_id]['name']%}</span><br>
                                                    {% } %}

                                                {% } %}
                                            {% } else { %}
                                                {%# sku.stock_icon[0] %}
                                                {% if (sku.count === null) { %}∞{% }else{ %}{%=''+sku.count%}{% } %}

                                            {% } %}
                                        </td>
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['edit_rights']->value){?>
                                        <td class="min-width">
                                            <a href="#/product/{%=sku.product_id%}/edit/focus=name&sku={%=sku_id%}" class="nowrap asdf s-product-edit-link"><i class="icon16 edit"></i>Редактировать</a>
                                        </td>
                                        <?php }?>
                                    </tr>
                                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            </tbody>
                        </table>

                    </div>
                    <div class="block s-tab-block" data-tab="stock-logs" style="display:none;"><i class="icon16 loading"></i></div>
                    <div class="block s-tab-block" data-tab="recent-orders" style="display:none;"><i class="icon16 loading"></i></div>
                    <div class="block s-tab-block" data-tab="reviews" style="display:none;"><i class="icon16 loading"></i></div>
                    <div class="block s-tab-block" data-tab="buybuttons" style="display:none;"><i class="icon16 loading"></i></div>
                </div>
            </div>

        </div>

    </div>



    <ul class="menu-h" id="s-product-edit-menu">
        <li class="main">
            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/">Основные данные
            <span class="s-product-edit-tab-status"></span></a>
        </li>
        <li class="descriptions">
            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/descriptions/">Описание и SEO
            <span class="s-product-edit-tab-status"></span></a>
        </li>
        <li class="images">
            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/images/">Фото и видео <span class="hint"><?php echo $_smarty_tpl->tpl_vars['counters']->value['images'];?>
</span>
            <span class="s-product-edit-tab-status"></span></a>
        </li>
        <li class="files">
            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/files/">Файлы <span class="hint"><?php echo $_smarty_tpl->tpl_vars['counters']->value['files'];?>
</span>
            <span class="s-product-edit-tab-status"></span></a>
        </li>
        <li class="features">
            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/features/">Характеристики
            <span class="s-product-edit-tab-status"></span></a>
        </li>
        <li class="services">
            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/services/">Услуги <span class="hint"><?php echo $_smarty_tpl->tpl_vars['counters']->value['services'];?>
</span>
            <span class="s-product-edit-tab-status"></span></a>
        </li>
        <li class="related">
            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/related/">Рекомендуемые товары
            <span class="s-product-edit-tab-status"></span></a>
        </li>
        <li class="pages">
            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/pages/">Подстраницы <span class="hint"><?php echo $_smarty_tpl->tpl_vars['counters']->value['pages'];?>
</span>
            <span class="s-product-edit-tab-status"></span></a>
        </li>

        <!-- plugin hook: 'backend_product.edit_section_li' -->
        
        <?php if (!empty($_smarty_tpl->tpl_vars['backend_product']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['edit_section_li']);?>
<?php } ?><?php }?>

    </ul>


    <div id="s-product-edit-forms">
        <form action="?module=product&action=save" method="post" id="s-product-save">
        <input type="hidden" name="product[id]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">



        <div class="s-product-form main fields form" style="display: none;">
            <div class="field-group">
                <div class="field">
                    <div class="name">Наименование</div>
                    <div class="value"><input type="text" class="long bold s-product-name-input" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" name="product[name]"></div>
                </div>
                <div class="field">
                    <div class="value no-shift">

                        <div class="s-product-status">
                            <i class="icon10 <?php if ($_smarty_tpl->tpl_vars['product']->value['status']){?>yes<?php }else{ ?>no-bw<?php }?>"></i>
                            <select name="product[status]">
                                <option <?php if ($_smarty_tpl->tpl_vars['product']->value['status']){?>selected<?php }?> value="1">Опубликован на сайте</option>
                                <option <?php if (!$_smarty_tpl->tpl_vars['product']->value['status']){?>selected<?php }?> value="0">Скрыт с сайта</option>
                            </select>
                        </div>

                        <?php  $_smarty_tpl->tpl_vars['frontend_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['frontend_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_urls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['frontend_url']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['frontend_url']->key => $_smarty_tpl->tpl_vars['frontend_url']->value){
$_smarty_tpl->tpl_vars['frontend_url']->_loop = true;
 $_smarty_tpl->tpl_vars['frontend_url']->index++;
 $_smarty_tpl->tpl_vars['frontend_url']->first = $_smarty_tpl->tpl_vars['frontend_url']->index === 0;
?>
                            <?php if ($_smarty_tpl->tpl_vars['frontend_url']->first){?>
                                
                                <span class="s-product-frontend-url-not-empty">
                                    <span style="display:none" class="s-frontend-base-url"><?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['base'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['url'];?>
"  class="s-frontend-base-url" target="_blank"><span><?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['base'];?>
</span><span id="s-product-frontend-url"><?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
</span><span class="slash">/</span></a><input type="text" class="s-product-url-input" id="s-product-frontend-url-input"value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"name="product[url]" style="display:none;">
                                    <a href="javascript:void(0);" class="small gray inline-link" id="s-product-frontend-url-edit-link">
                                        <i class="icon10 edit"></i><b><i>редактировать</i></b>
                                    </a>
                                </span>
                            <?php }else{ ?>
                                
                                <span class="s-product-frontend-url-not-empty small">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['url'];?>
" target="_blank" class="s-product-frontend-url"><?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['url'];?>
</a>
                                </span>
                            <?php }?>
                            <br>
                        <?php } ?>

                        <p class="s-product-frontend-url-empty hint" <?php if (!empty($_smarty_tpl->tpl_vars['frontend_urls']->value)){?>style="display:none;"<?php }?>>
                            <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['type']['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp2=ob_get_clean();?><?php echo sprintf('Этот товар не показывается ни на одной из витрин, поскольку тип «%s», к которому принадлежит этот товар, не разрешен к публикации ни на одной витрине.',$_tmp2);?>

                        </p>

                        <span class="s-product-status-text hint" <?php if ($_smarty_tpl->tpl_vars['product']->value['status']){?>style="display:none;"<?php }?>>
                            <br>
                            Скрытые товары не показываются на витрине в общих списках товаров и их нельзя добавить в корзину. Просмотреть скрытый товар на витрине возможно только по прямому открытию страницы товара (нужно знать ее адрес).
                        </span>
                    </div>

                    <div class="value no-shift s-product-url-in-use-block" id="s-product-url-in-use-block" <?php if (!$_smarty_tpl->tpl_vars['url_in_use']->value){?>style="display: none"<?php }?>>
                        <p class="small italic">
                            <i class="icon10 exclamation"></i>
                            <span class="s-text"><?php echo $_smarty_tpl->tpl_vars['url_in_use']->value;?>
</span>
                        </p>
                    </div>

                </div>
            </div>
            <div class="field-group">
                <?php if ($_smarty_tpl->tpl_vars['product_types']->value){?>
                    <div class="field">
                        <div class="name">Тип товаров</div>
                        <div class="value no-shift" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['type']['id'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <span class="js-type-icon"><?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['product']->value['type']['icon']);?>
</span>
                            <strong class="js-type-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['type']['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>&nbsp;
                            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/main/type/select/" class="js-action gray inline-link"><b><i>Изменить тип</i></b></a>

                            <select name="product[type_id]" style="display:none;">
                            <?php if (empty($_smarty_tpl->tpl_vars['product']->value['type']['id'])){?>
                            <option data-icon="<?php echo htmlspecialchars(shopHelper::getIcon(null), ENT_QUOTES, 'UTF-8', true);?>
" value="" selected="selected" disabled="disabled"></option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
                                <option data-icon="<?php echo htmlspecialchars(shopHelper::getIcon(ifempty($_smarty_tpl->tpl_vars['type']->value['icon'],'box')), ENT_QUOTES, 'UTF-8', true);?>
" data-sku-type="<?php echo $_smarty_tpl->tpl_vars['type']->value['sku_type'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['product']->value['type']['id']==$_smarty_tpl->tpl_vars['id']->value){?> selected="selected"<?php }?>>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                </option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                <?php }else{ ?>
                    <input type="hidden" name="product[type_id]" value="">
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['taxes']->value)){?>
                    <div class="field">
                        <div class="name">Облагается налогом</div>
                        <div class="value no-shift">
                            <select name="product[tax_id]">
                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['product']->value['tax_id'])){?> selected="selected"<?php }?>>Нет</option>
                            <?php  $_smarty_tpl->tpl_vars['tax'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->key => $_smarty_tpl->tpl_vars['tax']->value){
$_smarty_tpl->tpl_vars['tax']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['tax']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['product']->value['tax_id']==$_smarty_tpl->tpl_vars['tax']->value['id']){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                <?php }?>
                <div class="field">
                    <input type="text" name="product[categories.deleted]" value="" style="display:none;">
                    <div class="name">Категории</div>

                    <?php if (!function_exists('smarty_template_function_categories_select')) {
    function smarty_template_function_categories_select($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_select']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                        <select name="product[categories][]" class="s-product-categories">
                            <?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)){?>
                                <option value="select" <?php if (!$_smarty_tpl->tpl_vars['category_id']->value){?>selected="selected"<?php }?>>
                                    Выберите категорию
                                </option>
                                <option value="create">Создать новую категорию...</option>
                                <option class="separator" value="---" disabled="disabled">---</option>
                                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                                    <option class="category" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['category_id']->value==$_smarty_tpl->tpl_vars['category']->value['id']){?> selected="selected"<?php }?>><?php echo str_repeat("-",$_smarty_tpl->tpl_vars['category']->value['depth']);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            <?php }else{ ?>
                                <option value=""></option>
                                <option value="create">Создать новую категорию...</option>
                                <option class="separator" value="---" disabled="disabled" style="display:none;">---</option>
                            <?php }?>
                        </select>
                        <a href="#" class="s-product-delete-from-category" title="Удалить товар из этой категории" <?php if (!$_smarty_tpl->tpl_vars['category_id']->value){?>style="display:none;"<?php }?>><i class="icon10 delete-bw no-overhanging"></i></a>
                    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


                    <?php $_smarty_tpl->tpl_vars['_show_selects'] = new Smarty_variable((count($_smarty_tpl->tpl_vars['product']->value['categories'])*count($_smarty_tpl->tpl_vars['categories']->value)<200), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['category_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['c']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['category_id']->value = $_smarty_tpl->tpl_vars['c']->key;
 $_smarty_tpl->tpl_vars['c']->index++;
 $_smarty_tpl->tpl_vars['c']->first = $_smarty_tpl->tpl_vars['c']->index === 0;
?>
                        <div class="value s-product-categories no-shift">
                            <?php if ($_smarty_tpl->tpl_vars['_show_selects']->value||$_smarty_tpl->tpl_vars['c']->first){?>
                                <?php smarty_template_function_categories_select($_smarty_tpl,array('category_id'=>$_smarty_tpl->tpl_vars['category_id']->value));?>

                            <?php }else{ ?>
                                <input value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" name="product[categories][]" type="hidden" class="s-product-categories">
                                <i class="icon16 folder"></i>
                                <?php $_smarty_tpl->tpl_vars['_parent_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['c']->value['parent_id'], null, 0);?><?php $_smarty_tpl->tpl_vars['_path'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('_path', null, 0);
$_smarty_tpl->tpl_vars['_path']->value[$_smarty_tpl->tpl_vars['c']->value['depth']] = $_smarty_tpl->tpl_vars['c']->value['name'];?><?php while ($_smarty_tpl->tpl_vars['_parent_id']->value&&isset($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['_parent_id']->value])){?><?php $_smarty_tpl->createLocalArrayVariable('_path', null, 0);
$_smarty_tpl->tpl_vars['_path']->value[$_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['_parent_id']->value]['depth']] = $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['_parent_id']->value]['name'];?><?php $_smarty_tpl->tpl_vars['_parent_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['_parent_id']->value]['parent_id'], null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_'] = new Smarty_variable(ksort($_smarty_tpl->tpl_vars['_path']->value), null, 0);?>
                                <?php echo htmlspecialchars(implode(' » ',$_smarty_tpl->tpl_vars['_path']->value), ENT_QUOTES, 'UTF-8', true);?>


                                <a href="#" class="s-product-delete-from-category" title="Удалить товар из этой категории" <?php if (!$_smarty_tpl->tpl_vars['c']->value['id']){?>style="display:none;"<?php }?>><i class="icon10 delete-bw no-overhanging"></i></a>
                            <?php }?>
                        </div>
                    <?php } ?>

                    <div class="value s-product-categories no-shift" <?php if (count($_smarty_tpl->tpl_vars['product']->value['categories'])){?> style="display: none;" <?php }?>>
                        <?php smarty_template_function_categories_select($_smarty_tpl,array());?>

                        <span class="s-new-category" style="display:none;">
                            <input type="text" name="new_category" class="new-category" class="js-ignore-change" placeholder="Название категории">
                            <input type="hidden" name="product[categories][]" class="val" value="<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
" disabled="disabled">
                            <input type="button" value="Создать">
                        </span>
                    </div>
                    <div class="value s-product-categories">
                        <ul class="menu-v s-category-action s-inline-links">
                            <li><a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/main/categories/add/" class="small inline-link js-action"><i class="icon10 add"></i> <b><i>Дополнительная категория</i></b></a></li>
                            
                            <?php if (!empty($_smarty_tpl->tpl_vars['backend_product']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['category_action_li']);?>
<?php } ?><?php }?>
                        </ul>
                    </div>
                </div>

                <?php if (!empty($_smarty_tpl->tpl_vars['sets']->value)){?>
                    <div class="field s-product-sets">
                        <div class="name">Списки</div>

                        <?php if (!function_exists('smarty_template_function_sets_select')) {
    function smarty_template_function_sets_select($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['sets_select']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                            <select name="product[sets][]">
                                <option value="" <?php if (empty($_smarty_tpl->tpl_vars['set_id']->value)){?> selected="selected"<?php }?>>Выберите список товаров</option>
                                <option class="separator" value="" disabled="disabled">---</option>
                                <?php  $_smarty_tpl->tpl_vars['set'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['set']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['set']->key => $_smarty_tpl->tpl_vars['set']->value){
$_smarty_tpl->tpl_vars['set']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['set']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['set_id']->value&&$_smarty_tpl->tpl_vars['set_id']->value==$_smarty_tpl->tpl_vars['set']->value['id']){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
)</option>
                                <?php } ?>
                            </select>
                            <a href="javascript:void(0)" class="s-product-delete-from-set" title="Удалить товар из этого списка"><i class="icon10 delete-bw no-overhanging"></i></a>
                        <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


                        <?php  $_smarty_tpl->tpl_vars['set'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['set']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_sets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['set']->key => $_smarty_tpl->tpl_vars['set']->value){
$_smarty_tpl->tpl_vars['set']->_loop = true;
?>
                            <div class="value no-shift">
                                <?php smarty_template_function_sets_select($_smarty_tpl,array('set_id'=>$_smarty_tpl->tpl_vars['set']->value['id']));?>

                            </div>
                        <?php }
if (!$_smarty_tpl->tpl_vars['set']->_loop) {
?>
                            <div class="value no-shift">
                                <?php smarty_template_function_sets_select($_smarty_tpl,array());?>

                            </div>
                        <?php } ?>

                        <div class="value">
                            <ul class="menu-v s-inline-links compact">
                                <li><a href="javascript:void(0)" class="small inline-link add-set-button"><i class="icon10 add"></i> <b><i>Дополнительный список</i></b></a></li>
                            </ul>
                        </div>

                        <div class="value no-shift hidden template">
                            <?php smarty_template_function_sets_select($_smarty_tpl,array());?>

                        </div>
                    </div>
                <?php }?>

                
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['_']->value['basics'])){?><?php echo $_smarty_tpl->tpl_vars['_']->value['basics'];?>
<?php }?><?php } ?>

            </div>

            <div class="field-group" id="s-sku-type-field-group" style="margin-bottom: 0;">
                <div class="field">
                    <div class="name">
                        Цены и наличие
                    </div>
                    <div class="value no-shift s-sku-type-field-value">
                        <ul class="s-selling-mode">
                            <li<?php if (empty($_smarty_tpl->tpl_vars['features']->value)||$_smarty_tpl->tpl_vars['product']->value['sku_type']==shopProductModel::SKU_TYPE_FLAT){?> class="selected"<?php }?>>
                                <label>
                                    <a href="javascript:void(0);">Варианты покупки</a>
                                    <input type="hidden" name="product[sku_type]" value="<?php echo shopProductModel::SKU_TYPE_FLAT;?>
"
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['features']->value)&&$_smarty_tpl->tpl_vars['product']->value['sku_type']!=shopProductModel::SKU_TYPE_FLAT){?>disabled="disabled"<?php }?> />
                                </label>
                            </li>
                            <li class="<?php if (!empty($_smarty_tpl->tpl_vars['features']->value)&&$_smarty_tpl->tpl_vars['product']->value['sku_type']==shopProductModel::SKU_TYPE_SELECTABLE){?>selected<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['features']->value)){?>gray<?php }?>">
                                <label>
                                    <a href="javascript:void(0);"><span<?php if (empty($_smarty_tpl->tpl_vars['features']->value)){?> class="gray"<?php }?>>Выбор параметров</span></a>
                                    <input type="hidden" name="product[sku_type]" value="<?php echo shopProductModel::SKU_TYPE_SELECTABLE;?>
"
                                                            <?php if (empty($_smarty_tpl->tpl_vars['features']->value)||$_smarty_tpl->tpl_vars['product']->value['sku_type']!=shopProductModel::SKU_TYPE_SELECTABLE){?>disabled="disabled"<?php }?> />
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="field" id="s-product-feature-superposition-field-group" <?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']==shopProductModel::SKU_TYPE_FLAT){?>style="display:none"<?php }else{ ?>data-type="<?php echo $_smarty_tpl->tpl_vars['product']->value['type_id'];?>
"<?php }?>>
                <?php echo $_smarty_tpl->getSubTemplate ("./ProductFeaturesSelectable.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>


            <!-- plugin hook: 'backend_product.edit_basics' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_product']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['edit_basics']);?>
<?php } ?><?php }?>

            <div class="field">
                <div class="value s-sku-list">
                    <table class="s-product-skus">
                        <thead>
                            <tr class="white">
                                <th class="s-sku-sort min-width"<?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])<=1){?> style="display:none;"<?php }?>>&nbsp;</th>
                                <th>Артикул</th>
                                <th>Закупочная цена</th>
                                <th>Зачеркнутая цена</th>
                                <th>Цена</th>
                                <th>Количество</th>
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tfoot>
                        <tr class="white no-border">
                            <td colspan="8" class="alist">
                                <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/main/sku/add/" class="inline-link js-action add-sku">
                                    <i class="icon16 add"></i><b><i>Добавить артикул</i></b>
                                </a>
                            </td>
                        </tr>
                        </tfoot>
                        <tbody>
                            <?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_smarty_tpl->tpl_vars['sku_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['sku']->total= $_smarty_tpl->_count($_from);
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
 $_smarty_tpl->tpl_vars['sku_id']->value = $_smarty_tpl->tpl_vars['sku']->key;
?>
                                <tr data-id="<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['sku']->value['virtual']){?>s-sku-virtual<?php }?>">
                                    <td class="s-sku-sort extra-top-padded min-width" style="white-space: nowrap;<?php if ($_smarty_tpl->tpl_vars['sku']->total<=1){?>display: none;<?php }?>">
                                        <i class="icon16 sort"></i>
                                        <input type="radio" name="product[sku_id]" value="<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['sku_id']==$_smarty_tpl->tpl_vars['sku']->value['id']){?>checked="checked"<?php }?>>
                                        <input type="hidden" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][available]" value="<?php echo intval($_smarty_tpl->tpl_vars['sku']->value['available']);?>
">
                                    </td>
                                    <td class="s-sku">
                                        <div class="s-name"<?php if ($_smarty_tpl->tpl_vars['sku']->total<=1){?> style="display: none;"<?php }?>>
                                            <input type="text" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="bold s-sku-name-input long large<?php if (empty($_smarty_tpl->tpl_vars['sku']->value['available'])){?> grey<?php }?>" placeholder="Наименование артикула" title="Название артикула, которое покупатели видят на витрине вашего магазина">
                                        </div>
                                        <input type="text" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][sku]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['sku'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Код артикула" title="Текстовый идентификатор товара, например, номер модели"<?php if (empty($_smarty_tpl->tpl_vars['sku']->value['available'])){?> class="grey"<?php }?>>
                                    </td>
                                    <td class="s-price">
                                        <input type="text" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][purchase_price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['purchase_price'], ENT_QUOTES, 'UTF-8', true);?>
" class="<?php if (empty($_smarty_tpl->tpl_vars['sku']->value['available'])){?> grey<?php }?>" placeholder="0" title="Закупочная цена">
                                    </td>
                                    <td class="s-price">
                                        <input type="text" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][compare_price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['compare_price'], ENT_QUOTES, 'UTF-8', true);?>
" class="bold strike gray <?php if (empty($_smarty_tpl->tpl_vars['sku']->value['available'])){?> grey<?php }?>" placeholder="0" title="Зачеркнутая цена">
                                    </td>
                                    <td class="s-price">
                                        <input type="text" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['price'], ENT_QUOTES, 'UTF-8', true);?>
" class="bold large <?php if (empty($_smarty_tpl->tpl_vars['sku']->value['available'])){?> grey<?php }?>" placeholder="0" title="Цена">
                                        <?php if ($_smarty_tpl->tpl_vars['use_product_currency']->value){?>
                                            <select class="s-product-currency">
                                                <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['currency']->key;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['product']->value['currency']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</option>
                                                <?php } ?>
                                            </select>
                                        <?php }else{ ?>
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['currency']!==null){?><?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['primary_currency']->value;?>
<?php }?>
                                        <?php }?>
                                    </td>
                                    <td class="s-stock">
                                        <?php if (!count($_smarty_tpl->tpl_vars['sku']->value['stock'])){?>
                                            <div id="s-product-sku-<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
">
                                            <span data-stock="0" class="s-product-stock-icon">
                                            <?php echo shopHelper::getStockCountIcon($_smarty_tpl->tpl_vars['sku']->value['count']);?>

                                            </span>
                                            <input class="short<?php if (empty($_smarty_tpl->tpl_vars['sku']->value['available'])){?> grey<?php }?>" type="text" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][stock][0]"value="<?php if ($_smarty_tpl->tpl_vars['sku']->value['count']!==null){?><?php echo $_smarty_tpl->tpl_vars['sku']->value['count'];?>
<?php }?>" placeholder="∞" title="В наличии"> <span class="small">шт.</span>
                                            <?php if ((count($_smarty_tpl->tpl_vars['stocks']->value)>=1)){?>
                                                <br><a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/main/sku/stock/<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
/" class="small gray inline-link js-action"><b><i>По складам</i></b></a>
                                            </div>
                                            <?php }?>
                                        <?php }?>
                                        <?php if (count($_smarty_tpl->tpl_vars['stocks']->value)>=1){?>
                                        <div<?php if (empty($_smarty_tpl->tpl_vars['sku']->value['stock'])){?> style="display: none;"<?php }?> id="s-product-sku-stock-<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
">

                                        <?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_smarty_tpl->tpl_vars['stock_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['stock']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
 $_smarty_tpl->tpl_vars['stock_id']->value = $_smarty_tpl->tpl_vars['stock']->key;
 $_smarty_tpl->tpl_vars['stock']->index++;
 $_smarty_tpl->tpl_vars['stock']->first = $_smarty_tpl->tpl_vars['stock']->index === 0;
?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value])){?>
                                                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value], null, 0);?>
                                            <?php }else{ ?>
                                                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(null, null, 0);?>
                                            <?php }?>
                                            <span data-stock="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" class="s-product-stock-icon">
                                                <?php echo shopHelper::getStockCountIcon($_smarty_tpl->tpl_vars['count']->value,$_smarty_tpl->tpl_vars['stock_id']->value);?>

                                            </span>
                                            <input class="short" type="text" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][stock][<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
]"value="<?php if (empty($_smarty_tpl->tpl_vars['sku']->value['stock'])&&$_smarty_tpl->tpl_vars['stock']->first){?><?php echo $_smarty_tpl->tpl_vars['sku']->value['count'];?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['count']->value!==null){?><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
<?php }?><?php }?>" placeholder="∞"<?php if (empty($_smarty_tpl->tpl_vars['sku']->value['stock'])){?> disabled="disabled"<?php }?>>
                                            <span class="hint" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><br>
                                        <?php } ?>
                                        </div>
                                        <?php }?>

                                    </td>
                                    <td class="extra-top-padded">
                                      <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/main/sku/settings/<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
/" class="inline-link nowrap inline-link gray js-action" title="Показать все настройки"><i class="icon16 settings"></i><b><i>Еще</i></b></a>
                                    </td>
                                    <td class="extra-top-padded">
                                          <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/main/sku/delete/<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
/" <?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])<=1){?>style="display:none;"<?php }?>
                                               class="gray inline-link js-action js-confirm"
                                               title="Удалить этот артикул?">
                                                <i class="icon16 delete"></i>
                                          </a>
                                    </td>
                                    <input type="hidden" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][virtual]" value="<?php echo $_smarty_tpl->tpl_vars['sku']->value['virtual'];?>
" class="s-input-virtual">
                                </tr>
                            <?php } ?>

                            <?php $_smarty_tpl->_capture_stack[0][] = array('template-sku-edit', null, null); ob_start(); ?>
                                {% var empty = function(val) { return !val || val === '0'; }; %}
                                {% var sku_id = o.sku_id; %}
                                {% var sku = o.sku; %}
                                {% var stocks = o.stocks || {}; %}
                                {% sku.stock = sku.stock || {}; %}
                                {% var stock_ids = o.stock_ids; %}
                                <tr data-id="{%=sku_id%}" class="{% if (sku.virtual == '1') { %}s-sku-virtual{% } %}">
                                    <td  class="s-sku-sort extra-top-padded min-width" style="white-space: nowrap; {% if (o.hide_sort_column) { %} display:none;{% } %}">
                                        <i class="icon16 sort"></i>
                                        <input type="radio" name="product[sku_id]" value="{%=sku_id%}" {% if (o.checked) { %}checked="checked"{%}%}>
                                        <input type="hidden" name="skus[{%=sku_id%}][available]" value="{%=sku.available%}">
                                    </td>
                                    <td class="s-sku">
                                        <div class="s-name">
                                            <input type="text" name="skus[{%=sku_id%}][name]" value="{%=sku.name%}" class="bold s-sku-name-input long large {% if (empty(sku.available)) { %}grey{% } %}" placeholder="Наименование артикула">
                                        </div>
                                        <input type="text" name="skus[{%=sku_id%}][sku]" value="{%=sku.sku%}" class="{% if (empty(sku.available)) { %}grey{% } %}" placeholder="Код артикула">
                                    </td>
                                    <td class="s-price">
                                        <input type="text" name="skus[{%=sku_id%}][purchase_price]" value="{%=sku.purchase_price_loc%}" class="{% if (empty(sku.available)) { %}grey{% } %}" placeholder="0">
                                    </td>
                                    <td class="s-price">
                                        <input type="text" name="skus[{%=sku_id%}][compare_price]" value="{%=sku.compare_price_loc%}" class="strike {% if (empty(sku.available)) { %}grey{% } %}" placeholder="0">
                                    </td>
                                    <td class="s-price">
                                        <input type="text" name="skus[{%=sku_id%}][price]" value="{%=sku.price_loc%}" class="bold large {% if (empty(sku.available)) { %}grey{% } %}" placeholder="0">
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['use_product_currency']->value){?>
                                            <select class="s-product-currency">
                                                <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['currency']->key;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['product']->value['currency']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</option>
                                                <?php } ?>
                                            </select>
                                        <?php }else{ ?>
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['currency']!==null){?><?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['primary_currency']->value;?>
<?php }?>
                                        <?php }?>
                                        
                                    </td>
                                    <td class="s-stock">
                                        {% if ($.isEmptyObject(sku.stock)) { %}
                                            <div id="s-product-sku-{%=sku_id%}">
                                            <span data-stock="0" class="s-product-stock-icon">
                                            {%# sku.stock_icon[0] %}
                                            </span>
                                            <input class="short {% if (empty(sku.available)) { %}grey{% } %}" type="text" name="skus[{%=sku_id%}][stock][0]"value="{% if(sku.count !== null) { %}{%=''+sku.count%}{% } %}" placeholder="∞"> <span class="small">шт.</span>
                                            {% if(!$.isEmptyObject(stocks)) { %}
                                                <br><a href="#/product/{%=sku.product_id%}/edit/main/sku/stock/{%=sku_id%}/" class="small gray inline-link js-action"><b><i>По складам</i></b></a>
                                            </div>
                                            {% } %}
                                        {% } %}

                                        {% if(!$.isEmptyObject(stocks)) { %}
                                        <div{% if($.isEmptyObject(sku.stock)) { %} style="display: none;"{% } %} id="s-product-sku-stock-{%=sku_id%}">

                                            {% for (var i = 0, n = stock_ids.length; i < n; i += 1) { %}
                                                {% var stock_id = stock_ids[i]; %}
                                                {% if(typeof(sku.stock[stock_id]) != 'undefined') { %}
                                                    {% count = sku.stock[stock_id]; %}
                                                {% } else { %}
                                                    {% count = null; %}
                                                {% } %}
                                                <span data-stock="{%=stock_id%}" class="s-product-stock-icon">
                                                    {%# sku.stock_icon[stock_id]?sku.stock_icon[stock_id]:sku.stock_icon[0] %}
                                                </span>
                                                <input class="short" type="text" name="skus[{%=sku_id%}][stock][{%=stock_id%}]"
                                                        value="{% if (count !== null) { %}{%=''+count%}{% } %}" placeholder="∞"
                                                        {% if($.isEmptyObject(sku.stock)) { %} disabled="disabled"{% } %}>
                                                {% if(!$.isEmptyObject(stocks)) { %}
                                                    <span class="hint">{%=stocks[stock_id]['name']%}</span><br>
                                                {% } %}
                                            {% } %}

                                        </div>
                                        {% } %}

                                    </td>

                                    <td class="extra-top-padded">
                                      <a href="#/product/{%=sku.product_id%}/edit/main/sku/settings/{%=sku_id%}/" class="inline-link gray nowrap js-action" title="Показать все настройки"><i class="icon16 settings"></i><b><i>Еще</i></b></a>
                                    </td>
                                    <td class="extra-top-padded">
                                          <a href="#/product/{%=sku.product_id%}/edit/main/sku/delete/{%=sku_id%}/"
                                               class="inline-link js-action js-confirm"
                                               title="Удалить этот артикул?">
                                                <i class="icon16 delete"></i>
                                          </a>
                                    </td>
                                    <input type="hidden" name="skus[{%=sku_id%}][virtual]" value="{%=sku.virtual%}" class="s-input-virtual">
                                </tr>
                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                            <?php $_smarty_tpl->_capture_stack[0][] = array('template-sku-settings', null, null); ob_start(); ?>
                                {% var sku_id = o.sku_id; %}
                                {% var sku = o.sku; %}
                                <tr data-id="{%=sku_id%}" class="js-sku-settings">
                                    <td colspan="7">
                                    загрузка...<i class="icon16 loading"></i>
                                    </td>
                                </tr>
                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        </tbody>
                    </table>
                </div>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
" name="product[currency]" id="s-product-currency-code">
            </div>

        </div>




        <div class="s-product-form descriptions" style="display: none;">
            <div class="fields form">
              <div class="field-group">
                <div class="field">
                    <div class="name">Краткое описание</div>
                    <div class="value"><textarea name="product[summary]" style="height: 37px;" id="s-product-summary"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['summary'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        <br /><span class="hint">Отображается в списках товаров.</span>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Теги</div>
                    <div class="value">
                        <input id="product-tags" value="<?php echo htmlspecialchars(implode(',',$_smarty_tpl->tpl_vars['product']->value['tags']), ENT_QUOTES, 'UTF-8', true);?>
" name="product[tags]">
                        <span class="hint">Разделяйте теги запятой (,).</span>

                        <div id="s-product-popular-tags" class="tags small">
                            <?php if ($_smarty_tpl->tpl_vars['popular_tags']->value){?>
                                Популярные теги:
                                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['popular_tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                    <span><a data-tag-id="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
" href="javascript:void(0);" class="inline-link"><b><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</i></b></a></span>
                                <?php } ?>
                                <br>
                            <?php }?>
                        </div>

                    </div>
                </div>

                <!-- plugin hook: 'backend_product.edit_descriptions' -->
                
                <?php if (!empty($_smarty_tpl->tpl_vars['backend_product']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['edit_descriptions']);?>
<?php } ?><?php }?>

              </div>
              <div class="field-group">
                <div class="field">
                    <div class="name">Заголовок страницы <span class="hint">&lt;title&gt;</span></div>
                    <div class="value">
                        <input value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
"
                                            id="s-product-meta-title"
                                            name="product[meta_title]"
                                            placeholder="<?php echo htmlspecialchars(shopProduct::getDefaultMetaTitle($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8', true);?>
" class="long bold"
                                      >
                    </div>
                </div>
                <div class="field">
                    <div class="name">META Keywords</div>
                    <div class="value">
                        <textarea id="s-product-meta-keywords" name="product[meta_keywords]" placeholder="<?php echo shopProduct::getDefaultMetaKeywords($_smarty_tpl->tpl_vars['product']->value);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['meta_keywords'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                </div>
                <div class="field">
                    <div class="name">META Description</div>
                    <div class="value">
                        <textarea id="s-product-meta-description" name="product[meta_description]" placeholder="<?php echo htmlspecialchars(shopProduct::getDefaultMetaDescription($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['meta_description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        <br>
                        <span class="hint"><?php echo sprintf('В содержимом заголовка title и META-полей товара можно использовать переменные <strong>%s</strong>, которые будут заменены актуальной информацией о товаре при его отображении на витрине.','&#123;$name&#125;, &#123;$summary&#125;, &#123;$price&#125;');?>
</span>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Соцсети</div>
                    <div class="value no-shift">
                        <?php $_smarty_tpl->tpl_vars['editable_ogs_list'] = new Smarty_variable(explode(',','title,image,video,description,type'), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['editable_ogs'] = new Smarty_variable(array_intersect_key($_smarty_tpl->tpl_vars['product']->value['og'],array_fill_keys($_smarty_tpl->tpl_vars['editable_ogs_list']->value,1)), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['other_ogs'] = new Smarty_variable(array_diff_key($_smarty_tpl->tpl_vars['product']->value['og'],$_smarty_tpl->tpl_vars['editable_ogs']->value), null, 0);?>
                        <label><input type="checkbox" id="checkbox-use-default-ogs"<?php if (!$_smarty_tpl->tpl_vars['editable_ogs']->value){?> checked<?php }?>> Для соцсетей использовать эти же заголовки и описания</label>
                    </div>
                </div>
              </div>

              <?php $_smarty_tpl->tpl_vars['product_og'] = new Smarty_variable($_smarty_tpl->tpl_vars['editable_ogs']->value, null, 0);?>
              <div class="field-group" id="og-fieldgroup"<?php if (!$_smarty_tpl->tpl_vars['editable_ogs']->value){?> style="display: none;"<?php }?>>
                <div class="field">
                    <div class="name">Заголовок для соцсетей <span class="hint">og:title</span></div>
                    <div class="value">
                        <input name="product[og][title]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['product_og']->value['title']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo htmlspecialchars(shopProduct::getDefaultMetaTitle($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8', true);?>
" class="long bold">
                    </div>
                </div>
                <div class="field">
                    <div class="name">URL изображения для соцсетей <span class="hint">og:image</span></div>
                    <div class="value">
                        <input name="product[og][image]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['product_og']->value['image']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="PRODUCT DEFAULT IMAGE 970 URL" class="long">
                        <br>
                        <span class="hint">Если адрес не указан явно, соцсеть автоматически выберет одно из изображений на странице</span>
                    </div>
                </div>
                <div class="field">
                    <div class="name">URL видео для соцсетей <span class="hint">og:video</span></div>
                    <div class="value">
                        <input name="product[og][video]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['product_og']->value['video']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="" class="long">
                    </div>
                </div>
                <div class="field">
                    <div class="name">Описание для соцсетей <span class="hint">og:description</span></div>
                    <div class="value">
                        <textarea name="product[og][description]" placeholder="<?php echo shopProduct::getDefaultMetaDescription($_smarty_tpl->tpl_vars['product']->value);?>
"><?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['product_og']->value['description']), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Тип страницы для соцсетей <span class="hint">og:type</span></div>
                    <div class="value">
                        <input name="product[og][type]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['product_og']->value['type']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="og:product">
                    </div>
                </div>

                <div class="field">
                    <div class="value">
                        <p class="hint">Подробная информация о параметрах для соцсетей и их возможных значениях опубликована на сайте протокола <a href="http://ogp.me" target="_blank">Open Graph</a>.</p>
                    </div>
                </div>

                
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['other_ogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <input type="hidden" name="product[og][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php } ?>

                
                <?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['editable_ogs_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
                    <input type="hidden" name="product[og][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
]" value="" class="editable-og-disabler"<?php if ($_smarty_tpl->tpl_vars['editable_ogs']->value){?> disabled<?php }?>>
                <?php } ?>

              </div>

              <div class="field-group">
                <div class="field description">
                    <div class="name">Описание</div>
                    <div class="value" id="s-product-description">
                        <div class="wa-editor-core-wrapper s-editor-core-wrapper">
                            <ul class="wa-editor-wysiwyg-html-toggle s-wysiwyg-html-toggle">
                                <li class="selected"><a class="wysiwyg" href="#">Визуальный редактор</a></li>
                                <li><a class="html" href="#">HTML</a></li>
                            </ul>
                            <div>
                                <textarea id="s-product-description-content" name="product[description]"
                                    data-modification-wysiwyg-msg="Визуальный редактор может изменить ваш HTML-код. Это нужно для правильного форматирования текста. Код Smarty может быть испорчен, а устаревшие HTML-теги — заменены на современные. Переключиться на визуальный редактор?"
                                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

                <div class="field-group">
                    <div class="field">
                        <div class="name">
                            <label for="custom-settings">
                            Дополнительные параметры
                            </label>
                        </div>
                        <div class="value">
                            <textarea name="product[params]" rows="10" cols="5"><?php if ($_smarty_tpl->tpl_vars['product']->value->params){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->params; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['k']->value!='order'){?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo (htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true)).("\n");?>
<?php }?><?php } ?><?php }?></textarea><br>
                            <span class="hint">Необязательный набор дополнительных параметров <em>key=value</em> (используются в шаблоне общедоступной части в виде <em>&#123;$product.params.key&#125;</em>). Каждую пару key=value указывайте с новой строки.</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <?php $_smarty_tpl->_capture_stack[0][] = array("template-productprofile-tab", null, null); ob_start(); ?>
        <div class="s-product-form {%#o.id%}">
            <i class="icon16 loading"></i>Загрузка
        </div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


        <div id="s-product-edit-save-panel">
            <div class="block bordered-top">
                <input type="submit" class="button green" value="Сохранить" id="s-product-save-button">
                <em class="hint">Ctrl + S</em>
                <span id="product-save-message" class="s-product-save-message"><!-- message placeholder --></span>
            </div>
        </div>
        </form>
    </div>

</div>

<?php $_smarty_tpl->_capture_stack[0][] = array('template-product-image-list', null, null); ob_start(); ?>
    
        {% if (o.type === 'crop') { %}
            {% include('template-product-crop-image-list', o); %}
        {% } else { %}
            {% include('template-product-thumb-image-list', o); %}
        {% } %}
    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('template-product-crop-image-list', null, null); ob_start(); ?>
    
        {% var image, image_iterator = $.shop.iterator(o.images); %}
        {% while (image = image_iterator.next()) { %}
            <li data-image-id="{%#image.id%}">
                <div class="s-image">
                    <a href="#/product/{%#o.product_id%}/edit/images/{%#image.id%}/">
                        <img src="{%#image.url_crop%}{%# image.edit_datetime_ts ? '?'+image.edit_datetime_ts : '' %}" alt="">
                    </a>
                </div>
            </li>
        {% } %}
    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('template-product-thumb-image-list', null, null); ob_start(); ?>
    
        {% var image, image_iterator = $.shop.iterator(o.images); %}
        {% while (image = image_iterator.next()) { %}
            <li data-image-id="{%#image.id%}">
                <div class="s-image">
                    <a href="#/product/{%#o.product_id%}/edit/images/{%#image.id%}/">
                        <img src="{%#image.url_thumb%}{%# image.edit_datetime_ts ? '?'+image.edit_datetime_ts : '' %}" alt="">
                    </a>
                </div>
                <div class="p-description">
                    {% if (image.description) { %}
                        <div class="small editable">{%#image.description%}</div>
                    {% } else { %}
                        <div class="small gray editable">{%#o.placeholder%}</div>
                    {% } %}
                </div>
            </li>
        {% } %}
    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('template-product-file-list', null, null); ob_start(); ?>
    
        {% include('template-product-thumb-file-list', o); %}
    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('template-product-thumb-file-list', null, null); ob_start(); ?>
    
        {% var image, image_iterator = $.shop.iterator(o.images); %}
        {% while (image = image_iterator.next()) { %}
            <li id="file_{%#image.id%}" class="file" data-image-id="{%#image.id%}">
                <div class="s-image">
                    <a class="delete" href="javascript:void(0)" onclick="files.openRemoveFileDialog({%#image.id%})">×</a>
                    <img src="/wa-apps/shop/img/file.png" />
                    <a href="{%#image.url%}">{%#image.filename%}</a>
                </div>
                <div class="p-description">
                    <div class="small">{%#image.original_filename%}</div>
                </div>
            </li>
        {% } %}
    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php  $_smarty_tpl->tpl_vars['template_content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template_content']->_loop = false;
 $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable;
 $_from = Smarty::$_smarty_vars['capture']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template_content']->key => $_smarty_tpl->tpl_vars['template_content']->value){
$_smarty_tpl->tpl_vars['template_content']->_loop = true;
 $_smarty_tpl->tpl_vars['template']->value = $_smarty_tpl->tpl_vars['template_content']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['template_content']->value&&(strpos($_smarty_tpl->tpl_vars['template']->value,'template-')===0)){?>
<script id="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
" type="text/html">
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template_content']->value,'</','<\/');?>

</script><?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['template']->value, null, null); ob_start(); ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php } ?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title_suffix'] = new Smarty_variable(strtr((" — ").($_tmp3), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), null, 0);?>

<script type="text/javascript">
    var wa_url = '<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
';
    var wa_app = 'shop';
    var wa_lang = '<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
';


    $(function() {

        $('#s-product-description-content').data('uploadFields', {
            '_csrf': <?php echo json_encode(waRequest::cookie('_csrf',''));?>

        });

        $.product.setData('main','stocks',<?php echo json_encode($_smarty_tpl->tpl_vars['stocks']->value);?>
);
        $.product.setData('main','stock_ids', <?php echo json_encode(array_keys($_smarty_tpl->tpl_vars['stocks']->value));?>
);
        $.product.setData('main', 'category_name', <?php echo json_encode($_smarty_tpl->tpl_vars['category_name']->value);?>
);
        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['reviews'])){?>
        $.product_reviews.init({
            container: '#s-reviews-block',
            reply: 'ignore',
            statuses: {
                deleted:  '<?php echo shopProductReviewsModel::STATUS_DELETED;?>
',
                published:'<?php echo shopProductReviewsModel::STATUS_PUBLISHED;?>
'
            }
        });
        <?php }?>
    });
    <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['reviews'])){?>
        $('#s-all-reviews').find('.count-new:first').text(<?php if ($_smarty_tpl->tpl_vars['sidebar_counters']->value['reviews']['new']){?>'+<?php echo $_smarty_tpl->tpl_vars['sidebar_counters']->value['reviews']['new'];?>
'<?php }else{ ?>''<?php }?>);
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['id']>0){?>
        $.product_images.init({
            product_id: <?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
,
            images: <?php echo json_encode(array_values($_smarty_tpl->tpl_vars['product']->value['images']));?>
,
            type: 'crop',
            enable_2x: <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?>true<?php }else{ ?>false<?php }?>,
            image_list: '#s-product-view .s-product-image-crops'
        });
    <?php }?>

    var sales_data = <?php if (!empty($_smarty_tpl->tpl_vars['sales_data']->value)&&$_smarty_tpl->tpl_vars['report_rights']->value){?><?php echo json_encode($_smarty_tpl->tpl_vars['sales_data']->value);?>
<?php }else{ ?>[]<?php }?>;
    var cash_type = <?php echo json_encode(smarty_modifier_replace(wa_currency_html(0,$_smarty_tpl->tpl_vars['primary_currency']->value),'0','%s'));?>
;

    // "By SKU" pie graph
    var sku_plot_data = <?php if (!empty($_smarty_tpl->tpl_vars['sku_plot_data']->value)&&$_smarty_tpl->tpl_vars['report_rights']->value){?><?php echo json_encode($_smarty_tpl->tpl_vars['sku_plot_data']->value);?>
<?php }else{ ?>[]<?php }?>;
    $.product.setOptions({
        title_suffix: '<?php echo $_smarty_tpl->tpl_vars['title_suffix']->value;?>
',
        edit_rights:    <?php if ($_smarty_tpl->tpl_vars['edit_rights']->value){?>true<?php }else{ ?>false<?php }?>,
        sidebar_width: <?php if ($_smarty_tpl->tpl_vars['sidebar_width']->value){?><?php echo $_smarty_tpl->tpl_vars['sidebar_width']->value;?>
<?php }else{ ?>0<?php }?>
    });

    <?php if ($_smarty_tpl->tpl_vars['product']->value['id']>0){?>
        document.title = '<?php echo (strtr($_smarty_tpl->tpl_vars['product']->value['name'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))).($_smarty_tpl->tpl_vars['title_suffix']->value);?>
';
    <?php }else{ ?>
        document.title = 'Новый товар<?php echo $_smarty_tpl->tpl_vars['title_suffix']->value;?>
';
    <?php }?>


   (function(container) {
        var makeTooltip = function(el) {
            el.bind('mouseover', function(event) {
                if (el.hasClass('gray')) {
                    // Render Tooltip
                    $('<div class="tooltip-bubble"></div>')
                            .html('Чтобы включить этот режим продажи для данного товара, необходимо отнести его к типу товаров с хотя бы одной характеристикой, предполагающей <strong>выбор</strong> из заданных вариантов (список типов товаров и характеристик настраивается в разделе <em>Настройки &rarr; Типы товаров и характеристики</em>).')
                            .appendTo('body')
                            .css({
                                top: (event.pageY - 10) + 'px',
                                left: (event.pageX + 20) + 'px'
                            })
                            .fadeIn('slow');
                }
            }).bind('mouseout', function() {
                $('.tooltip-bubble').remove();
            }).bind('mousemove', function(event) {
                $(".tooltip-bubble").css({
                    top: (event.pageY - 10) + 'px',
                    left: (event.pageX + 20) + 'px'
                });
            });
        };
        $('a', container).click(function() {
            if (!$(this).closest('li').hasClass('gray')) {
                container.find('li.selected').removeClass('selected');
                container.find('input[type="hidden"]').attr('disabled', true);
                $(this).closest('li').addClass('selected').find('input[type=hidden]').attr('disabled', false).trigger('change');
            }
            return false;
        });
        $('input', container).bind('disabled', function(e, disabled) {
            var item = $(this);
            if (disabled) {
                item.closest('li').removeClass('selected').addClass('gray');
                item.attr('disabled', true);
            } else {
                item.closest('li').removeClass('gray');
                if (item.closest('li').hasClass('selected')) {
                    item.attr('disabled', false);
                }
            }
        });
        $('input', container).bind('checked', function(e, checked) {
            var item = $(this);
            if (!item.closest('li').hasClass('gray')) {
                $(this).attr('checked', !!checked);
                container.find('li.selected').removeClass('selected');
                container.find('li:not(.gray)').attr('disabled', true);
                if (checked) {
                    $(this).attr('disabled', false).closest('li').addClass('selected');
                }
            }
        });
        makeTooltip(container.find('[name="product[sku_type]"]').closest('li'));
   })($('.s-selling-mode'));

    $(function() {

        setTimeout(function() {
                // profile tabs
            (function(container) {
                var loadTo = function(block, url, after) {
                    if (!block.data('loaded')) {
                        block.load(url, after).data('loaded', 1);
                    }
                    return block;
                };
                var getLastTab = function() {
                    return $.storage.get('shop/product-profile/tab');
                };
                var setLastTab = function(tab) {
                    $.storage.set('shop/product-profile/tab', tab);
                };

                container.on('click', '.tabs a', function() {
                    $(this).closest('.tabs').find('.selected').removeClass('selected')
                    var el = $(this).closest('li').addClass('selected');
                    $('.tab-content', container).find('.s-tab-block').hide()
                            .end().find('.s-tab-block[data-tab="' + el.data('tab') + '"]').show().trigger('open');
                    setLastTab(el.data('tab'));
                    return false;
                }).on('open', '.s-tab-block', function() {
                    container.find('.s-tab-block').each(function() {
                        $(this).data('opened', 0);
                    });
                    $(this).data('opened', 1);
                }).on('open', '.s-tab-block[data-tab="stock-logs"]', function() {
                    var url = '?module=product&action=stocksLog&id=' + $.product.getId();
                    var block = loadTo($(this), url)
                        .on('click', '.p-log-filters a', function() {
                            block.load(url + '&' + $(this).attr('href'));
                            return false;
                        });
                }).on('open', '.s-tab-block[data-tab="reviews"]', function() {
                    loadTo($(this), '?module=product&action=reviews&id=' + $.product.getId());
                }).on('open', '.s-tab-block[data-tab="recent-orders"]', function() {
                    var view=$.storage.get('shop/orders/view') || '<?php echo $_smarty_tpl->tpl_vars['orders_default_view']->value;?>
';
                    loadTo($(this), '?module=product&action=orders&view=' + view + '&id=' + $.product.getId());
                }).on('open', '.s-tab-block[data-tab="buybuttons"]', function() {
                    loadTo($(this), '?module=product&action=buybuttons&id=' + $.product.getId());
                }).on('refresh', '.s-tab-block', function() {
                    var block = $(this).html('').data('loaded', 0);
                    if (block.data('opened')) {
                        block.trigger('open');
                    }
                });

                <?php if ($_smarty_tpl->tpl_vars['product']->value['id']>0){?>
                    var last_tab = getLastTab();
                    if (last_tab) {
                        container.find('li[data-tab="' + last_tab + '"] a').click();
                    }
                <?php }?>

            })($('#s-product-profile-tabs'));
        }, 200);

    });

    (function() {
        $('.s-product-name-input').change(function() {
            $.product.updateMetaFields();
        });
        $.shop.changeListener($('#s-product-summary'), function() {
            $.product.updateMetaFields();
        });
        $('#product-tags').change(function() {
            $.product.updateMetaFields();
        });
        $('.s-sku-name-input').change(function() {
            $.product.updateMetaFields();
        });

        $('#checkbox-use-default-ogs').change(function() {
            if (this.checked) {
                $('#og-fieldgroup').slideUp(200);
                $('.editable-og-disabler').prop('disabled', false);
            } else {
                $('#og-fieldgroup').slideDown(200);
                $('.editable-og-disabler').prop('disabled', true);
            }
        });
    })();

    (function(menu, tabs_block) {
        menu.find('a').click(function() {
            menu.find('li.selected').removeClass('selected');
            tabs_block.find('tr').show();
            var item = $(this).closest('li').addClass('selected');
            var target = item.data('target');
            tabs_block.find('.s-target').hide()
                .end().find('.s-' + target).show();
            if (target === 'forecast') {
                tabs_block.find('.s-' + target + '[data-hidden=1]').closest('tr').hide();
            }
            return false;
        });
    })($('.s-report-toggler'), $('.s-report-tabs'));

    // Control for sets
    (function() { "use strict";
        var $form = $('#s-product-save');
        var $sets_wrapper = $form.find('.s-product-sets');
        if (!$sets_wrapper.length) {
            return;
        }

        var $add_set_button = $sets_wrapper.find('.add-set-button');
        var $template = $add_set_button.closest('.value').siblings('.hidden.template');

        // Add new selector when user clicks on "additional set" link
        $add_set_button.click(function() {
            $template.clone().removeClass('hidden template').insertBefore($add_set_button.closest('.value'));
            return false;
        });

        // Remove select when user clicks on a cross icon
        $sets_wrapper.on('click', '.s-product-delete-from-set', function() {
            $(this).closest('.value').remove();
        });
    })();

</script>
<?php }} ?>