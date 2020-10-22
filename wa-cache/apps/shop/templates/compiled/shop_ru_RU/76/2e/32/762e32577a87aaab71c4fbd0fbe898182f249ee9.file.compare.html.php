<?php /* Smarty version Smarty-3.1.14, created on 2018-09-23 05:40:59
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/compare.html" */ ?>
<?php /*%%SmartyHeaderCode:6162765045ba6fd3bc30887-72279653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '762e32577a87aaab71c4fbd0fbe898182f249ee9' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/compare.html',
      1 => 1531929216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6162765045ba6fd3bc30887-72279653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'td_width' => 0,
    'p' => 0,
    'wa' => 0,
    'wa_theme_url' => 0,
    'product_names' => 0,
    'features' => 0,
    'f' => 0,
    'f_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba6fd3be89b85_57330750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba6fd3be89b85_57330750')) {function content_5ba6fd3be89b85_57330750($_smarty_tpl) {?><ul class="compare-diff-all">
    <li class="selected"><a id="compare-all" href="#" class="inline-link"><b><i>Все характеристики</i></b></a></li>
    <li><a id="compare-diff" href="#" class="inline-link"><b><i>Различные</i></b></a></li>
</ul>        
<h1>Сравнить товары</h1>

<script type="text/javascript">
$(function () {
    $("#compare-all").click(function () {
        $("#compare-table tr.same").show();
        $(this).closest('ul').find('li.selected').removeClass('selected');
        $(this).parent().addClass('selected');
        return false;
    });
    $("#compare-diff").click(function () {
        $("#compare-table tr.same").hide();
        $(this).closest('ul').find('li.selected').removeClass('selected');
        $(this).parent().addClass('selected');
        return false;
    });
    $(".compare-remove").on('click', function () {
        var compare = $.cookie('shop_compare');
        if (compare) {
            compare = compare.split(',');
        } else {
            compare = [];
        }
        var i = $.inArray($(this).data('product') + '', compare);
        if (i != -1) {
            compare.splice(i, 1)
        }
        if (compare.length) {
            $.cookie('shop_compare', compare.join(','), { expires: 30, path: '/'});
        } else {
            $.cookie('shop_compare', null, {path: '/'});
        }
    });

    $('#compare-clear').on('click', function () {
        $.cookie('shop_compare', null, {path: '/'});
        location.href = location.href.replace(/compare\/.*/, 'compare/');
    });

    var fixed = $("#compare-table-fixed").append($("#compare-table > thead").clone());

    $(window).on("scroll", function(e, force) {
        var offset = $(this).scrollTop();
        var tableOffset = $("#compare-table").offset().top;

        if (offset >= tableOffset && (fixed.is(":hidden") || force)) {
            fixed.css('left', $("#compare-table").offset().left);
            fixed.css('width', $("#compare-table").width());
            $("#compare-table > thead th").each(function (i) {
                fixed.find('th:eq(' + i + ')').css('width', $(this).width());
            });
            fixed.show();
        } else if (offset < tableOffset) {
            fixed.hide();
        }
    });
    $(window).resize(function () {
        $(window).trigger('scroll', true);
    });
});
</script>


<?php if (count($_smarty_tpl->tpl_vars['products']->value)){?>
    <?php $_smarty_tpl->tpl_vars['td_width'] = new Smarty_variable(round((100-25)/max(1,count($_smarty_tpl->tpl_vars['products']->value))), null, 0);?>
    <table id="compare-table" class="compare">
        <thead>
            <tr>
                <th></th>
                <?php $_smarty_tpl->tpl_vars['product_names'] = new Smarty_variable('', null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['p']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['p']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->iteration++;
 $_smarty_tpl->tpl_vars['p']->last = $_smarty_tpl->tpl_vars['p']->iteration === $_smarty_tpl->tpl_vars['p']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_names']['last'] = $_smarty_tpl->tpl_vars['p']->last;
?>
                    <td width="<?php echo $_smarty_tpl->tpl_vars['td_width']->value;?>
%">
                        <a class="image-link" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/product/',array('product_url'=>$_smarty_tpl->tpl_vars['p']->value['url']));?>
">
                            <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['p']->value,'96x96',array('itemprop'=>'image','id'=>'product-image','default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy96.png",'title'=>htmlspecialchars(($_smarty_tpl->tpl_vars['p']->value['name']).(' ').(strip_tags($_smarty_tpl->tpl_vars['p']->value['summary'])), ENT_QUOTES, 'UTF-8', true)));?>

                        </a>
                        <div class="name-wrapper">
                            <a class="name-link" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/product/',array('product_url'=>$_smarty_tpl->tpl_vars['p']->value['url']));?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a>
                            <a class="compare-remove" href="<?php echo $_smarty_tpl->tpl_vars['p']->value['delete_url'];?>
" title="Удалить из списка сравнения" data-product="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><i class="icon16 remove"></i></a>
                        </div>

                        <?php $_smarty_tpl->tpl_vars['product_names'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product_names']->value).(($_smarty_tpl->tpl_vars['p']->value['name'])), null, 0);?>
                        <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['product_names']['last']){?><?php $_smarty_tpl->tpl_vars['product_names'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product_names']->value).(', '), null, 0);?><?php }?>
    
                    </td>
                <?php } ?>
            </tr>
        </thead>
        <tr>
            <th>Цена</th>
            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                <td width="<?php echo $_smarty_tpl->tpl_vars['td_width']->value;?>
%">
                    <span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</span>
                </td>
            <?php } ?>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['f_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['f_id']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
        <tr<?php if ($_smarty_tpl->tpl_vars['f']->value['same']){?> class="same"<?php }?>>
            <th><?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
</th>
            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                <td>
                <?php if (isset($_smarty_tpl->tpl_vars['p']->value['features'][$_smarty_tpl->tpl_vars['f_id']->value])){?>
                    <?php if (is_array($_smarty_tpl->tpl_vars['p']->value['features'][$_smarty_tpl->tpl_vars['f_id']->value])){?>
                        <?php echo implode('<br> ',$_smarty_tpl->tpl_vars['p']->value['features'][$_smarty_tpl->tpl_vars['f_id']->value]);?>

                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['p']->value['features'][$_smarty_tpl->tpl_vars['f_id']->value];?>

                    <?php }?>
                <?php }else{ ?>
                    <span class="gray">&mdash;</span>
                <?php }?>
                </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
    
    <div class="align-center">
        <input id="compare-clear" type="button" class="gray" value="Очистить список сравнения">
    </div>
    
    <table id="compare-table-fixed" class="compare compare-fixed" style="position: fixed; top: 0px; display:none; background: white;"></table>
    <style>
        #compare-leash { display: none; }
        .page-content { overflow-x: scroll; }
    </style>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->title(sprintf('Сравнить %s',$_smarty_tpl->tpl_vars['product_names']->value));?>

    
<?php }else{ ?>

    <p>Список товаров для сравнения пуст.</p>

<?php }?><?php }} ?>