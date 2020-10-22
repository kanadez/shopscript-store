<?php /* Smarty version Smarty-3.1.14, created on 2018-10-30 15:59:55
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/customers/CustomersSidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:8019644965bd855cb759f30-14937143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69733e4703de7387bfa11c25d81884229e3eaf5c' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/customers/CustomersSidebar.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8019644965bd855cb759f30-14937143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'all_customers_count' => 0,
    'backend_customers' => 0,
    '_' => 0,
    'filters' => 0,
    'filter' => 0,
    'categories' => 0,
    'c' => 0,
    'wa' => 0,
    'contacts_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bd855cb8471b1_82936470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd855cb8471b1_82936470')) {function content_5bd855cb8471b1_82936470($_smarty_tpl) {?>    <div class="block">
        <ul class="menu-v with-icons">
            <li class="bottom-padded">
                <a href="#/add/" class="bold"><i class="icon16 add"></i>Новый покупатель</a>
            </li>
            <li>
                <span class="count"><?php echo $_smarty_tpl->tpl_vars['all_customers_count']->value;?>
</span>
                <a href="#/all/">
                    <i class="icon16 ss shop"></i>Все покупатели
                </a>
            </li>
            <!-- plugin hook: 'backend_customers.sidebar_top_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_customers']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_top_li']);?>
<?php } ?><?php }?>
        </ul>

        <ul class="menu-v with-icons" id="s-customer-filters">
            <?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
                <li class="s-customer-filter" data-id="<?php echo $_smarty_tpl->tpl_vars['filter']->value['id'];?>
"><a href="#/filter/<?php echo $_smarty_tpl->tpl_vars['filter']->value['id'];?>
/"><i class="icon16 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['filter']->value['icon'])===null||$tmp==='' ? 'funnel' : $tmp);?>
"></i><span class="s-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></a></li>
            <?php } ?>
            <li>
                <a href="#/searchform/" class="small"><i class="icon10 add"></i>Новый поиск</a>
            </li>
        </ul>

    </div>

    <!-- plugin hook: 'backend_customers.sidebar_section' -->
    
    <?php if (!empty($_smarty_tpl->tpl_vars['backend_customers']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_section']);?>
<?php } ?><?php }?>

    <div class="block drop-target">
        <h5 class="heading" style="cursor:default">
            <span class="count"><a href="#/editcategory/" title="Новая категория"><i class="icon16 add"></i></a></span>
            Категории
        </h5>
        <ul class="menu-v with-icons collapsible" id="customer-categories">
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                <li data-category-id="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                    <span class="count"><?php echo $_smarty_tpl->tpl_vars['c']->value['cnt'];?>
</span>
                    <a href="#/category/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->icon16($_smarty_tpl->tpl_vars['c']->value['icon']);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>

    <div class="block double-padded align-center">
        <p class="hint">Отображаются только покупатели, оформившие хотя бы один заказ.</p>
    </div>


<script>$(function() { "use strict";

    $('.link-to-contacts a').attr('href', "<?php echo $_smarty_tpl->tpl_vars['contacts_url']->value;?>
");

    $('#customer-categories').bind('update_counters', function(e, counters) {
        if (!$.isEmptyObject(counters)) {
            var items = $('#customer-categories li').find('.count').text(0).end();
            $.each(counters, function(id, count) {
                items.filter('[data-category-id=' +  id + ']').find('.count').text(count || 0);
            });
        }
    });

    //$('#customer-categories li[data-category-id='+category_id+'] .count').text(r.data.count);

    // Categories in sidebar accept drag-and-droppable customers
    $('#customer-categories li').droppable({
        accept: 'tr.s-customer',
        tolerance: 'pointer',
        over: function() {
            $(this).addClass('drag-newparent');
        },
        out: function() {
            $(this).removeClass('drag-newparent');
        },
        activate: function() {
            $(this).parents('.block').addClass('drag-active');
        },
        deactivate: function() {
            $(this).removeClass('drag-newparent').parents('.block').removeClass('drag-active');
        },
        drop: function(e, ui) {
            var li = $(this);
            var customer_id = ui.draggable.data('customerId');
            var category_id = li.data('categoryId');
            if (!customer_id || !category_id) {
                return;
            }
            $.post('?module=customers&action=category', { customer_id: customer_id, category_id: category_id }, function(r) {
                li.children('a').append(
                    $('<span><i class="icon10 yes" style="margin-left:10px"></i>'+'</span>').animate({ 'opacity': 0 }, 1000, function() {
                        $(this).remove();
                    })
                );
                if (r.data && !$.isEmptyObject(r.data.counts)) {
                    $('#customer-categories').trigger('update_counters', [r.data.counts]);
                }
            }, 'json');
        }
    });

    // Init List of filters
    (function(ul) {
        var getOrder = function() {
            return $.storage.get('shop/customers_filters_order') || [];
        };
        var setOrder = function(order) {
            $.storage.set('shop/customers_filters_order', order || []);
        };

        $.each(getOrder().reverse(), function(i, id) {
            ul.prepend(ul.find('li[data-id="' + id + '"]'));
        });

        ul.sortable({
            axis: 'y',
            items: 'li.s-customer-filter',
            distance: 5,
            tolerance: 'pointer',
            update: function(e, ui) {
                setOrder(ul.find('li').map(function() {
                    return $(this).data('id');
                }).toArray());
            }
        }).bind('add', function(e, filter) {
            var html = '<li class="s-customer-filter" data-id="' + filter.id + '">' +
                    '<a href="#/filter/' + filter.id + '/">' +
                        '<i class="icon16 ' + filter.icon + '"></i>' +
                            '<span class="s-name">' + $.wa.encodeHTML(filter.name) + '</span>' +
                    '</a>' +
                '</li>';
            var last = ul.find('li.s-customer-filter:last');
            if (last.length) {
                last.after(html);
            } else {
                ul.prepend(html);
            }
        }).bind('update', function(e, filter) {
             ul.find('li[data-id="' + filter.id + '"]').find('.s-name').text(filter.name)
        }).bind('exists', function(e, filter_id) {
            return ul.find('li[data-id="' + filter_id + '"]').length;
        }).bind('delete', function(e, filter_id) {
            ul.find('li[data-id="' + filter_id + '"]').remove();
        });
    })($('#s-customer-filters'));

});</script>

<?php }} ?>