<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:30:35
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/products/product_list_skus.html" */ ?>
<?php /*%%SmartyHeaderCode:7840768795ba619cbec9e68-74453862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b34e733288d95274c16ffa247014c45345375ad4' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/products/product_list_skus.html',
      1 => 1519916636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7840768795ba619cbec9e68-74453862',
  'function' => 
  array (
    'sort_url' => 
    array (
      'parameter' => 
      array (
        'field' => '',
      ),
      'compiled' => '',
    ),
    'sort_icon' => 
    array (
      'parameter' => 
      array (
        'field' => '',
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'collection_param' => 0,
    'view' => 0,
    'field' => 0,
    'order' => 0,
    'sort' => 0,
    'manual' => 0,
    'sort_column' => 0,
    'total_count' => 0,
    'stocks' => 0,
    'stock' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba619cc0655d9_76475550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba619cc0655d9_76475550')) {function content_5ba619cc0655d9_76475550($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_sort_url')) {
    function smarty_template_function_sort_url($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['sort_url']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>#/products/<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?><?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
&<?php }?>view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
&order=<?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'&&$_smarty_tpl->tpl_vars['sort']->value==$_smarty_tpl->tpl_vars['field']->value){?>desc<?php }else{ ?>asc<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_sort_icon')) {
    function smarty_template_function_sort_icon($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['sort_icon']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php if ($_smarty_tpl->tpl_vars['sort']->value==$_smarty_tpl->tpl_vars['field']->value){?><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>uarr<?php }else{ ?>darr<?php }?>"></i><?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php $_smarty_tpl->tpl_vars['sort_column'] = new Smarty_variable($_smarty_tpl->tpl_vars['manual']->value&&$_smarty_tpl->tpl_vars['sort']->value=='sort', null, 0);?>

<div id="s-product-list-skus-container" class="s-product-list-table-container">
    <table class="zebra single-lined" id="product-list">
        <tr class="header">
            <?php if ($_smarty_tpl->tpl_vars['sort_column']->value){?>
                <th class="min-width"></th>
            <?php }?>
            <th class="min-width">
                <input type="checkbox" class="s-select-all" data-count=<?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
>
            </th>

            <th>
                <div class="sort" title="Название">
                    <a href="<?php smarty_template_function_sort_url($_smarty_tpl,array('field'=>'name'));?>
" class="inline-link selected">
                        Название
                    </a><?php smarty_template_function_sort_icon($_smarty_tpl,array('field'=>'name'));?>

                </div>
            </th>

            <th></th>
            <th class="short align-right" title="Закупочная цена">
                <div>Закупочная цена</div>
            </th>

            <th class="short align-right" title="Зачеркнутая цена">
                <div>Зачеркнутая цена</div>
            </th>

            <th class="short align-right" title="Цена">
                <div>Цена</div>
            </th>

            <?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
?>
                <th class="short align-right" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                </th>
            <?php }
if (!$_smarty_tpl->tpl_vars['stock']->_loop) {
?>
                <th class="short align-right" title="В наличии">
                    <div>В наличии</div>
                </th>
            <?php } ?>

        </tr>
    </table>

    <div class="s-product-list-save-panel block bordered-top" style="display:none;">
        <input type="button" class="button green" value="Сохранить">
        <span class="s-loading" style="display: none"><i class="icon16 loading" style="margin-top: 0.5em;"></i></span>
        <span class="s-yes" style="display: none"><i class="icon16 yes" style="margin-top: 0.5em;"></i> Сохранено</span>
        <span class="s-error errormsg" style="display: inline"></span>
    </div>

</div>

<script id="template-product-list-skus" type="text/html">
    
    {% var stocks = o.stocks; %}
    {% var stock_count = stocks.length > 0 ? stocks.length : 1; %}
    {% var sort_column = <?php if ($_smarty_tpl->tpl_vars['sort_column']->value){?>true<?php }else{ ?>false<?php }?>; %}

    {% var sku_prices_html = function(product, sku) { %}
        {% var product_currency_html = ''; %}
        {% if (product.currency !== null) { %}
            {% product_currency_html = product.currency; %}
        {% } else { %}
            {% product_currency_html = o.primary_currency; %}
        {% } %}
        <td class="align-right">{%=product_currency_html%}</td>
        <td class="short align-right s-product-sku-purchase-price">
            {% if (product.edit_rights) { %}
            <input class="short"
                   placeholder="0"
                   name="product[{%#product.id%}][sku][{%#sku.id%}][purchase_price]"
                   value="{%#sku.purchase_price_float%}"
                   {% if (!product.edit_rights) { %}readonly="readonly"{% } %}
            >
            {% } else { %}
             &nbsp;
            {% } %}
        </td>
        <td class="short align-right s-product-sku-compare-price">
            <input class="short strike"
                   placeholder="0"
                   name="product[{%#product.id%}][sku][{%#sku.id%}][compare_price]"
                   value="{%#sku.compare_price_float%}"
                   {% if (!product.edit_rights) { %}readonly="readonly"{% } %}
            >
        </td>
        <td class="short align-right s-product-sku-price">
            <input class="short"
                   placeholder="0"
                   name="product[{%#product.id%}][sku][{%#sku.id%}][price]"
                   value="{%#sku.price_float%}"
                   {% if (!product.edit_rights) { %}readonly="readonly"{% } %}
            >
        </td>
    {% }; %}

    {% var sku_stocks_html = function(product, sku) { %}
        {% if (sku.stock === null) { %}
            <td class="short align-center nowrap" colspan="{%#stock_count%}">
                {%#sku.count_icon_html%}
                <input class="small instock"
                       name="product[{%#product.id%}][sku][{%#sku.id%}][count]"
                       {% if (sku.count === null) { %}
                            placeholder="∞" value=""
                       {% } else { %}
                            placeholder="{%#sku.count%}" value="{%#sku.count%}"
                       {% } %}
                       {% if (!product.edit_rights) { %}readonly="readonly"{% } %}
                >
            </td>
        {% } else { %}
            {% var stock, stock_iterator = $.shop.iterator(stocks); %}
            {% while (stock = stock_iterator.next()) { %}
            <td class="short align-right nowrap">
                {% if ($.isPlainObject(sku.stock)) { %}
                    {% var count = sku.stock[stock.id].count; %}
                    {%#sku.stock[stock.id].icon_html%}
                    <input class="short small instock"
                           name="product[{%#product.id%}][sku][{%#sku.id%}][stock][{%#stock.id%}]"
                           {% if (count === null) { %}
                                placeholder="∞" value=""
                           {% } else { %}
                                placeholder="{%#count%}" value="{%#count%}"
                           {% } %}
                           {% if (!product.edit_rights) { %}readonly="readonly"{% } %}
                    >
                {% } %}
            </td>
            {% } %}
        {% } %}
    {% }; %}

    {% var product, product_iterator = $.shop.iterator(o.products); %}
    {% while (product = product_iterator.next()) { %}
        <tr class="product {% if (product_iterator.isLast()) { %}last{% } %}
            {% if (product.status == '0') { %}gray{% } %}
            {% if (o.check_all) { %}selected{% } %}
            {% if (product.alien) { %}s-alien{% } %}"
            data-product-id="{%#product.id%}"
            data-edit-rights="{%#product.edit_rights%}"
            data-sku-count="{%#product.sku_count%}"
            data-min-price="{%#product.min_price%}"
            data-max-price="{%#product.max_price%}"
            data-currency="{%#product.currency%}"
            {% if (product.alien) { %}title="(Этот товар находится в одной из подкатегорий) {%#product.name%}"{% } %}
            {% if (product.status == '0' && !product.alien) { %}title="(Скрытый товар) {%#product.name%}"{% } %}
            {% if (product.status != '0' && !product.alien) { %}title="{%#product.name%}""{% } %}
        >

            {% if (sort_column) { %}
                <td class="min-width drag-handle">{% if (!product.alien) { %}<i class="icon16 sort"></i>{% } %}</td>
            {% } %}

            <td class="min-width drag-handle">
                <input type="checkbox" {% if (o.check_all) { %}checked{% } %}>
            </td>

            <td class="drag-handle s-product-name">
                <a href="#/product/{%#product.id%}/"><div>{%#product.name%}<i class="shortener"></i></div></a>
            </td>

            {% if (product.sku) { %}
                {% sku_prices_html(product, product.sku); %}
            {% } else { %}
                <td colspan="3"></td>
            {% } %}

            {% if (product.sku) { %}
                {% sku_stocks_html(product, product.sku); %}
            {% } else { %}
                <td colspan="{%#stock_count+1%}"></td>
            {% } %}

        </tr>

        {% var sku, sku_iterator = $.shop.iterator(product.skus); %}
        {% while (sku = sku_iterator.next()) { %}
            <tr class="s-product-sku"
                data-product-id="{%#product.id%}"
                data-sku-id="{%#sku.id%}">

                {% if (sort_column) { %}
                    <td class="min-width"></td>
                {% } %}

                <td class="min-width"></td>

                <td class="s-product-sku-name" title="{%=sku.sku%}">
                    <div class="{% if (sku.available <= 0) { %}gray{% } %}">{%=sku.name%} <span class="hint">{%=sku.sku%}</span><i class="shortener"></i></div>
                </td>

                {% sku_prices_html(product, sku); %}
                {% sku_stocks_html(product, sku); %}

            </tr>
        {% } %}
    {% } %}
    
</script>

<script>

    (function() { "use strict";

        var product_list_container = $('#s-product-list-skus-container');

        var save_panel = product_list_container.find('.s-product-list-save-panel');
        save_panel.css({
            paddingLeft: $('#s-sidebar').width()
        });
        
        // listen for appending, check rights and available save button
        $('#product-list').unbind('append_product_list.product_list_skus')
            .bind('append_product_list.product_list_skus', function (e, products) {
                var product, product_iterator = $.shop.iterator(products);
                while (product = product_iterator.next()) {
                    if (product.edit_rights) {
                        save_panel.show().find('[type=button]').attr('disabled', false);
                        break;
                    }
                }
            });

        var save_button = save_panel.find(':button');
        var changed = false;

        var onAnyChange = function () {
            var el = $(this);
            save_button.removeClass('green').addClass('yellow');
            el.addClass('s-changed-input');
            if (el.hasClass('instock') && el.val() === '') {
                el.attr('placeholder', '∞');
            }
            changed = true;
        };

        $.shop.changeListener(
            product_list_container,
            ':input:not(:button):not(.s-select-all):not([type=checkbox])',
            onAnyChange
        );

        $.shop.confirmLeave({
            keepListen: function () { return !product_list_container.is(':hidden'); },
            confirmIf:  function () { return !product_list_container.is(':hidden') && changed; },
            message: 'Введенная информация не будет сохранена. Вы уверены, что хотите уйти со страницы без сохранения?'
        });

        save_button.click(function (e) {
            e.preventDefault();

            var xhr = save_button.data('xhr');
            if (xhr || !changed) {
                return;
            }

            var onAlways = function () {
                save_panel.find('.s-loading').hide();
                save_panel.find('.s-yes').show();
                save_button.removeClass('yellow').addClass('green');
                setTimeout(function () {
                    save_panel.find('.s-yes').fadeOut();
                }, 200);
                changed = false;
                save_button.data('xhr', null);
            };

            var data = $('.s-changed-input', product_list_container).map(function () {
                var el = $(this);
                el.removeClass('s-changed-input');
                return {
                    name: el.attr('name'),
                    value: el.val()
                }
            }).toArray();

            if ($.isEmptyObject(data)) {
                return;
            }

            save_panel.find('.s-loading').show();

            xhr = $.shop.jsonPost(
                '?module=products&action=massUpdate',
                data,
                function () {
                    $.shop.trace('massUpdate - ok');
                },
                function () {
                    $.shop.trace('massUpdate - fail');
                }
            ).always(function () {
                onAlways();
            });

            save_button.data('xhr', xhr);

        });

    })();
</script>
<?php }} ?>