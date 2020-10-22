<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:30:33
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/backend/BackendProducts.html" */ ?>
<?php /*%%SmartyHeaderCode:19712990395ba619c97d6457-43523144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '898ac2ec9d6e0f5da6e3375acacec247b59d7e9f' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/backend/BackendProducts.html',
      1 => 1534244723,
      2 => 'file',
    ),
    'fcbd2f4079524373f598cfd2abe71326117c4d79' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/backend/include.categories.html',
      1 => 1511965954,
      2 => 'file',
    ),
    'bcf64836d25a39c1cad4ff93cf37d19574e579e9' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/products/ProductsLoadTypes.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19712990395ba619c97d6457-43523144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
    'lang' => 0,
    'default_view' => 0,
    'sidebar_width' => 0,
    'products_rights' => 0,
    'count_all' => 0,
    'count_promos' => 0,
    'count_reviews' => 0,
    'count_services' => 0,
    'backend_products' => 0,
    '_' => 0,
    'categories' => 0,
    'sets' => 0,
    'set' => 0,
    'types' => 0,
    'cloud' => 0,
    'max_tags' => 0,
    'tag' => 0,
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba619c9cc21d1_82337494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba619c9cc21d1_82337494')) {function content_5ba619c9cc21d1_82337494($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/vendors/smarty-plugins/block.wa_js.php';
?><link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-tagsinput/jquery.tagsinput.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
">

<?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/product/product.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/product/product.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tmpl.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/live.dragndrop.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/inline.editable.widget.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/photo.stream.slider.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/dragndrop.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/categories_tree.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/sidebar.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/products.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/product.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/rate.widget.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/reviews.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/images.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/files.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/stocks.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/stocks_log.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/stocks_log.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/orders.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-tagsinput/jquery.tagsinput.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/list.js
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/product/product.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/ace/ace.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/2/redactor.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
">
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/2/redactor.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<?php if ($_smarty_tpl->tpl_vars['lang']->value!='en'){?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/2/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php }?>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/editor2.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/js/charts/d3.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/js/charts/d3chart-sales.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/js/charts/d3chart-pie.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<?php $_smarty_tpl->tpl_vars['view'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wa']->value->get('view'))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_view']->value : $tmp), null, 0);?>
<div class="sidebar left<?php echo $_smarty_tpl->tpl_vars['sidebar_width']->value;?>
px" id="s-sidebar">
    <!-- top -->
    <div class="block">
        <ul class="menu-v with-icons">
            <?php if ($_smarty_tpl->tpl_vars['products_rights']->value){?>
            <li class="bottom-padded">
                <a href="#/product/new/edit/" class="bold">
                    <i class="icon16 add"></i>Новый товар
                </a>
            </li>
            <?php }?>
            <li id="s-all-products">
                <a href="#/products/" class="s-product-list">
                    <span class="count"><?php echo $_smarty_tpl->tpl_vars['count_all']->value;?>
</span>
                    <i class="icon16 folders"></i>Все товары
                </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->getRights('shop','setscategories')){?>
                <li id="s-promos">
                    <a href="#/promos/" class="s-promo-list">
                        <span class="count"><?php echo $_smarty_tpl->tpl_vars['count_promos']->value;?>
</span>
                        <i class="icon16 ss promo"></i>Промо
                    </a>
                </li>
            <?php }?>
            <li id="s-all-reviews">
                <a href="#/reviews/">
                    <span class="count"><?php echo $_smarty_tpl->tpl_vars['count_reviews']->value['all'];?>
</span>
                    <i class="icon16 ss comments"></i>Отзывы
                    <strong class="small highlighted count-new"><?php if ($_smarty_tpl->tpl_vars['count_reviews']->value['new']){?>+<?php echo $_smarty_tpl->tpl_vars['count_reviews']->value['new'];?>
<?php }?></strong>
                </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('services')){?>
            <li id="s-services">
                <a href="#/services/">
                    <span class="count"><?php echo $_smarty_tpl->tpl_vars['count_services']->value;?>
</span>
                    <i class="icon16 ss service"></i>Услуги
                </a>
            </li>
            <?php }?>
            <li id="s-product-stocks-info">
                <a href="#/stocks/">
                    <i class="icon16 status-yellow"></i>Склад
                </a>
            </li>

            <!-- plugin hook: 'backend_products.sidebar_top_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_products']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_top_li']);?>
<?php } ?><?php }?>

        </ul>
    </div>

    <!-- plugin hook: 'backend_products.sidebar_section' -->
    
    <?php if (!empty($_smarty_tpl->tpl_vars['backend_products']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_section']);?>
<?php } ?><?php }?>

    <!-- categories -->
    <div class="block drop-target" id="s-category-list-block">

        <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('setscategories')){?>
        <span class="count">
            <a href="#"><i title="Новая категория" class="icon16 add s-new-list" id="s-new-category"></i></a>
        </span>
        <?php }?>
        <h5 class="heading">
            <i class="icon16 loading" style="float:right; display:none;"></i>
            <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['categories']->value->isExpanded()){?>darr<?php }else{ ?>rarr<?php }?> collapse-handler-ajax" id="s-category-list-handler"></i>Категории<?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('setscategories')&&$_smarty_tpl->tpl_vars['categories']->value->count()){?> <i class="icon16 ss sort-bw" id="s-forcesort-by-name" title="Сортировать по алфавиту"></i><?php }?>
        </h5>

        <div class="hierarchical s-collection-list" id="s-category-list"
            <?php if (!$_smarty_tpl->tpl_vars['categories']->value->isExpanded()){?>style="display:none;"<?php }?>
        >
            <?php /*  Call merged included template "./include.categories.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./include.categories.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('categories'=>$_smarty_tpl->tpl_vars['categories']->value->getList()), 0, '19712990395ba619c97d6457-43523144');
content_5ba619c99b29d5_51588275($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.categories.html" */?>
            <div class="block s-empty-list" <?php if ($_smarty_tpl->tpl_vars['categories']->value->count()){?>style="display:none;"<?php }?>>
                <p class="hint align-center">
                    <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('setscategories')){?>
                        Создайте новую категорию товаров с помощью зеленой иконки выше.
                    <?php }else{ ?>
                        Список категорий пуст.
                    <?php }?>
                </p>
            </div>
        </div>
    </div>

    <!-- sets -->
    <div class="block drop-target" id="s-set-list-block">
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('setscategories')){?>
        <span class="count">
            <a href="#"><i title="Новый список" class="icon16 add s-new-list" id="s-new-set"></i></a>
        </span>
        <?php }?>
        <h5 class="heading">
            <i class="icon16 darr collapse-handler" id="s-set-list-handler"></i>Списки
        </h5>
        <div class="s-collection-list" id="s-set-list">

            <?php if (!empty($_smarty_tpl->tpl_vars['sets']->value)){?>

                <ul class="menu-v with-icons">
                    <li class="drag-newposition" data-type="set"></li>
                    <?php  $_smarty_tpl->tpl_vars['set'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['set']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['set']->key => $_smarty_tpl->tpl_vars['set']->value){
$_smarty_tpl->tpl_vars['set']->_loop = true;
?>
                        
                        <li class="<?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('setscategories')){?>dr<?php }?> <?php if ($_smarty_tpl->tpl_vars['set']->value['type']==shopSetModel::TYPE_DYNAMIC){?>dynamic<?php }?>" id="set-<?php echo $_smarty_tpl->tpl_vars['set']->value['id'];?>
" data-type="set">
                            <span class="counters">
                                <span class="count"><?php echo $_smarty_tpl->tpl_vars['set']->value['count'];?>
</span>
                            </span>
                            <a href="#/products/set_id=<?php echo $_smarty_tpl->tpl_vars['set']->value['id'];?>
"><i class="icon16 <?php if ($_smarty_tpl->tpl_vars['set']->value['type']==shopSetModel::TYPE_DYNAMIC){?>funnel<?php }else{ ?>ss set<?php }?>"></i><span class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><span class="hint id"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
</span><strong class="small highlighted count-new"></strong></a>
                        </li>
                        <li class="drag-newposition" data-type="set"></li>
                    <?php } ?>
                </ul>

            <?php }?>

            <div class="block s-empty-list" <?php if (!empty($_smarty_tpl->tpl_vars['sets']->value)){?>style="display:none;"<?php }?>>
                <p class="hint align-center">Списки товаров используются для размещения товаров в информационных страницах и в шаблонах дизайна.</p>
            </div>
        </div>

    </div>

    <!-- types -->
    <div class="block">
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('settings')){?>
            <span class="count">
                <a href="?action=settings#/features/"><i title="Изменить типы товаров" class="icon16 settings"></i></a>
            </span>
        <?php }?>
        <h5 class="heading">
            <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['types']->value===false){?>rarr<?php }else{ ?>darr<?php }?> collapse-handler" id="s-type-list-handler"></i>Типы товаров
        </h5>
         <?php if (($_smarty_tpl->tpl_vars['types']->value===false)){?>
         <div class="s-collection-list" id="s-type-list-placeholder" data-url="?module=products&amp;action=loadTypes">
             <!-- types list placeholder -->
         </div>
         <?php }else{ ?>
             <?php /*  Call merged included template "./../products/ProductsLoadTypes.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./../products/ProductsLoadTypes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '19712990395ba619c97d6457-43523144');
content_5ba619c9bd9750_27214019($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../products/ProductsLoadTypes.html" */?>
         <?php }?>
    </div>
    <!-- tags -->
    <div class="block" <?php if (!isset($_smarty_tpl->tpl_vars['cloud']->value)){?>style="display:none;"<?php }?>>
        <h5 class="heading">
            <i class="icon16 darr collapse-handler" id="tag-cloud-handler"></i>Теги
        </h5>
        <div id="s-tag-cloud">
            <?php if ($_smarty_tpl->tpl_vars['cloud']->value=='search'){?>
                <div class="block">
                    <input id="s-products-all-tags" value="" data-default="" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                    <br>
                    <span class="hint" style="margin: 1em 0;"><?php echo sprintf(_w('There are more than %u tags.'),$_smarty_tpl->tpl_vars['max_tags']->value);?>
<br>
                        Начните писать в поле поиска, чтобы найти нужный тег.</span>
                </div>
            <?php }else{ ?>
                <ul class="tags">
                    <li class="block align-center">
                        <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cloud']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                            <a href="#/products/tag=<?php echo $_smarty_tpl->tpl_vars['tag']->value['uri_name'];?>
/" style="font-size: <?php echo $_smarty_tpl->tpl_vars['tag']->value['size'];?>
%; opacity: <?php echo $_smarty_tpl->tpl_vars['tag']->value['opacity'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
" class="s-product-list"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <?php } ?>
                    </li>
                </ul>
            <?php }?>
        </div>
    </div>

    <!-- sidebar width control -->
    <div id="s-category-list-widen-arrows" class="block s-sidebar-width-control">
        <a href="#" class="arrow left">&larr;</a>
        <a href="#" class="arrow right">&rarr;</a>
    </div>

</div>

<div class="content left<?php echo $_smarty_tpl->tpl_vars['sidebar_width']->value;?>
px blank" id="s-content">
    <div class="block double-padded">
    Загрузка <i class="icon16 loading"></i>
    </div>
</div>

<div class="dialog width400px height200px" id="s-products-sort-categories">
    <div class="dialog-background"></div>
    <form method="post" action="?module=products&action=sortCategories">
        <div class="dialog-window">
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h1>Сортировать по алфавиту</h1>
                    <input type="hidden" name="field" value="name">
                    <p>Дерево категорий будет отсортировано по алфавиту (иерархия категорий останется без изменений).</p>
                </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="submit" value="Сортировать дерево" class="button blue">
                    или <a class="cancel" href="#">закрыть</a>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        </div>
    </form>
</div>


<script id="template-sidebar-list-item" type="text/html">

{% var icons = { category: ['folder', 'funnel'], set: ['ss set', 'funnel'] }; %}
{% var dynamic = '<?php echo shopCategoryModel::TYPE_DYNAMIC;?>
'; %}
<li class="drag-newposition" data-type="{%#o.type%}"><\/li>
<li class="dr {% if (o.item.type == dynamic) { %}dynamic{% } %}" id="{%#o.type%}-{%#o.item.id%}" data-type="{%#o.type%}">
    <span class="counters">
        <span class="count">{%#''+(o.item.count || 0)%}<\/span>
        {% if (o.type == 'category') { %}
            <span class="count subtree" style="display:none;">{%#'' + (o.item.total_count || 0)%}<\/span>
        {% } %}
    </span>
    <a href="#/products/{%#o.type%}_id={%#o.item.id%}&view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
">
         <i class="icon16
            {% if (o.item.type == dynamic) { %}
                {%#icons[o.type][1]%}
            {% } else { %}
                {%#icons[o.type][0]%}
            {% } %}"
         ><\/i><span class="name">{%#o.item.name%}<\/span>
         {% if (o.type == 'set') { %}
             <span class="hint id">{%#o.item.id%}</span>
         {% } %}
         <strong class="small highlighted count-new"><\/strong>
         {% if (o.type == 'category') { %}
             <span class="count"><i class="icon10 add s-new-list"><\/i><\/span>
         {% } %}
    <\/a>
<\/li>

</script>

<script type="text/javascript">$(function() {
    $.products.init({
        view: '<?php echo $_smarty_tpl->tpl_vars['default_view']->value;?>
'
    });
});</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:30:33
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/backend/include.categories.html" */ ?>
<?php if ($_valid && !is_callable('content_5ba619c99b29d5_51588275')) {function content_5ba619c99b29d5_51588275($_smarty_tpl) {?>
<!-- categories begin -->

<?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)){?>

    <?php $_smarty_tpl->tpl_vars['categories_rights'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->userRights('setscategories'), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable(-1, null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>

      <?php if ($_smarty_tpl->tpl_vars['category']->value['depth']<$_smarty_tpl->tpl_vars['depth']->value){?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['name'] = "end-category";
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['depth']->value-$_smarty_tpl->tpl_vars['category']->value['depth']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total']);
?>
                </li>
                <li class="drag-newposition" data-type="category"></li>
            </ul>
        <?php endfor; endif; ?>
        <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['depth'], null, 0);?>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['category']->value['depth']==$_smarty_tpl->tpl_vars['depth']->value){?>
          </li>
          <li class="drag-newposition" data-type="category"></li>
          <li class="<?php if ($_smarty_tpl->tpl_vars['categories_rights']->value){?>dr<?php }?> <?php if ($_smarty_tpl->tpl_vars['category']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?>dynamic<?php }?>" id="category-<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" data-type="category">
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['category']->value['depth']>$_smarty_tpl->tpl_vars['depth']->value){?>
          <ul class="menu-v with-icons">
              <li class="drag-newposition" data-type="category"></li>
              <li class="<?php if ($_smarty_tpl->tpl_vars['categories_rights']->value){?>dr<?php }?> <?php if ($_smarty_tpl->tpl_vars['category']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?>dynamic<?php }?>" id="category-<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" data-type="category">
              <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['depth'], null, 0);?>
      <?php }?>
        <i class="icon16 loading" style="float:right; display:none;"></i>
        <span class="counters">
            <span class="count" <?php if (empty($_smarty_tpl->tpl_vars['category']->value['expanded'])&&$_smarty_tpl->tpl_vars['category']->value['children_count']>0){?>style="display:none;"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['category']->value['include_sub_categories']){?>
                    <?php echo $_smarty_tpl->tpl_vars['category']->value['total_count'];?>

                <?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['category']->value['count'];?>

                <?php }?>
            </span>
            <span class="count subtree" <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['expanded'])||$_smarty_tpl->tpl_vars['category']->value['children_count']==0){?>style="display:none;"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['category']->value['total_count'];?>

            </span>
        </span>

        <?php if ($_smarty_tpl->tpl_vars['category']->value['children_count']>0){?>
            <i class="icon16 <?php if (empty($_smarty_tpl->tpl_vars['category']->value['expanded'])){?>rarr<?php }else{ ?>darr<?php }?> overhanging collapse-handler-ajax" id="category-<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
-handler"></i>
        <?php }?>

        <a href="#/products/category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="s-product-list<?php if (!$_smarty_tpl->tpl_vars['category']->value['status']){?> gray<?php }?>"><i class="icon16 <?php if ($_smarty_tpl->tpl_vars['category']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?>funnel<?php }else{ ?>folder<?php }?>"></i><span class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><span class="hint routes"> <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['routes'])){?><?php echo implode(' ',$_smarty_tpl->tpl_vars['category']->value['routes_decoded']);?>
<?php }?></span><strong class="small highlighted count-new"></strong><?php if ($_smarty_tpl->tpl_vars['categories_rights']->value){?><span class="count"><i class="icon10 add s-new-list"></i></span><?php }?></a>

    <?php } ?>

    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['name'] = "end-category";
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['depth']->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total']);
?>
          </li>
          <li class="drag-newposition" data-type="category"></li>
        </ul>
    <?php endfor; endif; ?>
<?php }?>

<!-- categories end -->
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:30:33
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/products/ProductsLoadTypes.html" */ ?>
<?php if ($_valid && !is_callable('content_5ba619c9bd9750_27214019')) {function content_5ba619c9bd9750_27214019($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['types']->value)){?>
    <div class="s-collection-list" id="s-type-list"
         data-on-collapse-url="?module=products&amp;action=loadTypes&amp;hide=1"
         data-on-expand-url="?module=products&amp;action=loadTypes&amp;hide=0"
        >
        <ul class="menu-v with-icons">
            <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
                <li data-type="type" id="type-<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
">
                    <span class="count"><?php echo $_smarty_tpl->tpl_vars['type']->value['count'];?>
</span>
                    <a href="#/products/type_id=<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
/">
                        <?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['type']->value['icon'],'icon.box');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
<?php }else{ ?>
    <div class="block">
        <p class="hint align-center">В вашем магазине отсутствуют типы товаров. Добавьте новый тип в настройках.</p>
    </div>
<?php }?><?php }} ?>