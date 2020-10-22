<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:30:52
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/dialog/DialogProductSetCreate.html" */ ?>
<?php /*%%SmartyHeaderCode:10647842995ba619dca68452-35408628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9bf6c062ee1dea4c3f9b87a1d2034d1c8304cb7' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/dialog/DialogProductSetCreate.html',
      1 => 1461663989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10647842995ba619dca68452-35408628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'default_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba619dcb23854_26463461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba619dcb23854_26463461')) {function content_5ba619dcb23854_26463461($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['title_text'] = new Smarty_variable("Новый список", null, 0);?>
<?php $_smarty_tpl->tpl_vars['name_text'] = new Smarty_variable("Название", null, 0);?>
<?php $_smarty_tpl->tpl_vars['type_text'] = new Smarty_variable("Тип", null, 0);?>
<?php $_smarty_tpl->tpl_vars['static_type_text'] = new Smarty_variable("Статический список, в котором товары добавляются и упорядочиваются вручную.", null, 0);?>
<?php $_smarty_tpl->tpl_vars['dynamic_type_text'] = new Smarty_variable("Динамический список, формируемый в соответствии с параметрами поиска.", null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('frontend_url', null, null); ob_start(); ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array('custom_params', null, null); ob_start(); ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array('description', null, null); ob_start(); ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('ext_fields', null, null); ob_start(); ?>
<div class="field-group">
    <div class="field">
        <div class="name">ID списка</div>
        <div class="value no-shift">
            &#123;$wa->shop->productSet("<input type="text" name="id" class="s-full-width-input" value="" id="s-product-set-id" style="margin-top: -3px;">")&#125;
            <em class="errormsg"></em>
            <p class="hint">ID используется для встраивания списка товаров в шаблоны витрины и отдельные страницы.</p>
        </div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('dynamic_settings', null, null); ob_start(); ?>
<div class="field">
    <div class="name">
        Фильтр товаров
    </div>
    <div class="value no-shift">
        <select name="rule">
            <option value="price DESC">Самые дорогие</option>
            <option value="price ASC">Самые дешевые</option>
            <option value="rating DESC">С высокой оценкой</option>
            <option value="rating ASC">С низкой оценкой</option>
            <option value="total_sales DESC">Хиты продаж</option>
            <option value="total_sales ASC">Низкие продажи</option>
            <option value="name ASC">По названию</option>
            <option value="compare_price DESC">С зачеркнутой ценой</option>
            <option value="" selected="selected">Дата добавления</option>
        </select>
    </div>
</div>
<div class="field">
    <div class="name">
        Макс. кол-во товаров
    </div>
    <div class="value">
        <input type="text" name="count" value="<?php echo $_smarty_tpl->tpl_vars['default_count']->value;?>
">
        <p class="hint">Ограничить количество товаров в этом списке</p>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('js', null, null); ob_start(); ?>
<script type="text/javascript">
    (function(){
        var id_input   = $('#s-product-set-id');
        var name_input = $('#s-product-list-name');
        var state = { val: "", changed: false };

        var delay = 200;
        var id_input_timer;
        var name_input_timer;

        id_input.bind('keydown', function() {
            var self = $(this);
            if (id_input_timer !== null) {
                clearTimeout(id_input_timer);
                id_input_timer = null;
            }
            id_input_timer = setTimeout(function() {
                var val = self.val();
                if (state.val !== val) {
                    state.changed = true;
                    state.val = val;
                    self.unbind('keydown');
                }
            }, delay);
        });

        name_input.bind('keydown', function() {
            var self = $(this);
            if (state.changed) {
                self.unbind('keydown');
                return;
            }
            if (name_input_timer !== null) {
                clearTimeout(name_input_timer);
                name_input_timer = null;
            }
            name_input_timer = setTimeout(function() {
                var val = self.val();
                if (!val) {
                    return;
                }
                $.getJSON('?action=transliterate&str='+val, function(r) {
                    if (state.changed) {
                        self.unbind('keydown');
                        return;
                    }
                    if (r.status == 'ok') {
                        state.val = r.data;
                        id_input.val(state.val);
                    }
                });
            }, delay);
        });
    })();
</script>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php echo $_smarty_tpl->getSubTemplate ("./DialogProductListCreate.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>