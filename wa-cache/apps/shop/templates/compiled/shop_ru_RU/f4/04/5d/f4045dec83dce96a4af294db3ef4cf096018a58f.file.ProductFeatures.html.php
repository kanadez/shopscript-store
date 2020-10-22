<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:52:04
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/product/ProductFeatures.html" */ ?>
<?php /*%%SmartyHeaderCode:8515494565ba61ed43630f6-05158207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4045dec83dce96a4af294db3ef4cf096018a58f' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/product/ProductFeatures.html',
      1 => 1511525901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8515494565ba61ed43630f6-05158207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_types' => 0,
    'type_id' => 0,
    'product' => 0,
    'features' => 0,
    'code' => 0,
    'feature' => 0,
    'features_selectable' => 0,
    'value_id' => 0,
    'product_features' => 0,
    'value' => 0,
    'feature_selectable' => 0,
    'value_checked' => 0,
    'selected_' => 0,
    'type' => 0,
    'feature_unit' => 0,
    'd' => 0,
    'i' => 0,
    'code_' => 0,
    'units' => 0,
    'unit' => 0,
    'dimension' => 0,
    'dimensions' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'changed_features' => 0,
    'name' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba61ed4bb65b0_39856413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba61ed4bb65b0_39856413')) {function content_5ba61ed4bb65b0_39856413($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['product_types']->value)&&!empty($_smarty_tpl->tpl_vars['type_id']->value)){?>

<div class="s-alert">
    <a href="#" class="s-alert-close">&times;</a>
    Характеристики позволяют детально описать свойства товара, настроить системы фильтрации товаров и рекомендации схожих товаров (upselling).
</div>

<div class="fields form">
<?php $_smarty_tpl->tpl_vars['product_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['features'], null, 0);?>
<?php if (true){?>
    
    <?php $_smarty_tpl->tpl_vars['features_selectable'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['features_selectable'], null, 0);?>
<?php }else{ ?>
    
    <?php $_smarty_tpl->tpl_vars['features_selectable'] = new Smarty_variable(array(), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['feature_type'] = new Smarty_variable(0, null, 0);?>

<div class="field">
    <div class="name">Тип товаров</div>
    <div class="value no-shift">
        <span class="js-type-icon"><?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['product']->value['type']['icon']);?>
</span>
        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['type']['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>&nbsp;
        <?php if ($_smarty_tpl->tpl_vars['type_id']->value!=$_smarty_tpl->tpl_vars['product']->value['type_id']){?>&nbsp;&rarr;&nbsp;<?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['product_types']->value[$_smarty_tpl->tpl_vars['type_id']->value]['icon']);?>

            <strong><?php echo $_smarty_tpl->tpl_vars['product_types']->value[$_smarty_tpl->tpl_vars['type_id']->value]['name'];?>
</strong><?php }?>
        <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/main/type/select/" class="inline-link js-action"><b><i>Изменить тип</i></b></a>
    </div>
</div>


<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['feature']->key;
?>
    <?php if (strpos($_smarty_tpl->tpl_vars['code']->value,'.')==false){?>
        <div class="field<?php if ($_smarty_tpl->tpl_vars['feature']->value['type']=='divider'){?> divider<?php }?>" data-type="<?php echo $_smarty_tpl->tpl_vars['feature']->value['type'];?>
" data-multiple="<?php echo $_smarty_tpl->tpl_vars['feature']->value['multiple'];?>
"
             data-selectable="<?php echo $_smarty_tpl->tpl_vars['feature']->value['selectable'];?>
" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <div class="name"><label for="product-features-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
                    <?php if (empty($_smarty_tpl->tpl_vars['feature']->value['internal'])){?><i class="icon10 exclamation"
                                                    title="Эта характеристика не принадлежит типу товаров, который выбран для данного товара"></i> <?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['status']!='public'){?><i class="icon16 ss visibility" title="Видна только в бекенде"></i><?php }?>
                </label></div>


                <?php if ($_smarty_tpl->tpl_vars['feature']->value['selectable']){?>
                    <?php $_smarty_tpl->tpl_vars['feature_selectable'] = new Smarty_variable(($_smarty_tpl->tpl_vars['feature']->value['multiple']&&!empty($_smarty_tpl->tpl_vars['features_selectable']->value[$_smarty_tpl->tpl_vars['code']->value])&&!empty($_smarty_tpl->tpl_vars['features_selectable']->value[$_smarty_tpl->tpl_vars['code']->value]['selected'])), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['feature_selectable_disabled'] = new Smarty_variable(0, null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['multiple']){?>
                        <input type="hidden" name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][]" value="">
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value_id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                            <?php $_smarty_tpl->tpl_vars['value_checked'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['value_id']->value]), null, 0);?>

                            <div class="value"
                                 data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                                 data-value-id="<?php echo $_smarty_tpl->tpl_vars['value_id']->value;?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['feature_selectable']->value&&!$_smarty_tpl->tpl_vars['value_checked']->value){?> style="display: none;"<?php }?>>
                            <label>
                                <input type="checkbox"
                                       name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][]"
                                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['value_checked']->value){?> checked="checked"<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['feature_selectable']->value){?> disabled="disabled"<?php }?>
                                >
                                <?php if (is_object($_smarty_tpl->tpl_vars['value']->value)&&isset($_smarty_tpl->tpl_vars['value']->value['icon'])){?><?php echo $_smarty_tpl->tpl_vars['value']->value['icon'];?>
<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>

                            </label>
                            </div>

                        <?php } ?>

                        <?php if (empty(Smarty::$_smarty_vars['capture'])||empty(Smarty::$_smarty_vars['capture']['feature-value-multiple-template-js'])){?>
                                <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-multiple-template-js", null, null); ob_start(); ?> edit feature jquery template -->
                            <div class="value">
                            <label>
                            <input type="checkbox" checked="checked" disabled="disabled"
                                   name="product[features][{%=o.feature.input%}]" value="">
                            {% include (o.feature.value_template, {'feature': o.feature}); %}
                            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/features/value/delete/" class="inline-link js-action" title="Отмена">
                            <i class="icon10 delete"></i>
                            </a>
                            </label>
                            </div>
                            <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->
                        <?php }?>

                    <?php }else{ ?>
                        <div class="value">

                        <select name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]">
                            <option value=""<?php if (empty($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?> selected="selected"<?php }?>>&nbsp;</option>
                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value_id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable((!empty($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&((string)$_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value]==$_smarty_tpl->tpl_vars['value']->value)), null, 0);?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?><?php if (is_object($_smarty_tpl->tpl_vars['value']->value)){?> style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['style'])===null||$tmp==='' ? '' : $tmp);?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                            <?php if (empty(Smarty::$_smarty_vars['capture'])&&empty(Smarty::$_smarty_vars['capture']['feature-value-template-js'])){?>
                                    <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-template-js", null, null); ob_start(); ?> edit feature jquery template -->
                                <option value="{%=o.value%}">{%=o.value%}</option>
                                <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->
                            <?php }?>
                        </select>
                        </div>
                    <?php }?>
                    <div class="value js-value-add" <?php if ($_smarty_tpl->tpl_vars['feature_selectable']->value){?> style="display: none;"<?php }?>>
                        <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/features/value/add/" class="inline-link hint js-action"><b><i>добавить значение</i></b></a>
                    </div>
                <?php }else{ ?>
                    <div class="value">
                
                    <?php if ((strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'2d')===0)||(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'3d')===0)){?>
                        <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['feature']->value['type'],3), null, 0);?>
                        <?php if (strpos($_smarty_tpl->tpl_vars['type']->value,'dimension')===0){?>
                            <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['type']->value), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['d'] = new Smarty_variable(intval($_smarty_tpl->tpl_vars['feature']->value['type']), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['feature_unit'] = new Smarty_variable(null, null, 0);?>
                            <?php if (!$_smarty_tpl->tpl_vars['feature_unit']->value&&isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['d']->value-1])){?>
                                <?php $_smarty_tpl->tpl_vars['feature_unit'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['d']->value-1]->unit, null, 0);?>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['d']->value){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['d']->value; $_smarty_tpl->tpl_vars['i']->value++){
?>
                                <?php $_smarty_tpl->tpl_vars['code_'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['code']->value).".".((string)$_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                                <?php if (!$_smarty_tpl->tpl_vars['feature_unit']->value&&isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value])){?>
                                    <?php $_smarty_tpl->tpl_vars['feature_unit'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value]->unit, null, 0);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->value){?>×<?php }?>
                                <input id="product-features-<?php echo $_smarty_tpl->tpl_vars['code_']->value;?>
" type="text"
                                       value="<?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value]->convert($_smarty_tpl->tpl_vars['feature_unit']->value,false), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                                       name="product[features][<?php echo $_smarty_tpl->tpl_vars['code_']->value;?>
][value]" class="numerical short">
                            <?php }} ?>
                            <select name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
.0][unit]">
                                <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                                    <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable((!$_smarty_tpl->tpl_vars['feature_unit']->value&&$_smarty_tpl->tpl_vars['unit']->first)||(($_smarty_tpl->tpl_vars['feature_unit']->value==$_smarty_tpl->tpl_vars['unit']->value['value'])), null, 0);?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"
                                            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>
                        <?php }else{ ?>
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<intval($_smarty_tpl->tpl_vars['feature']->value['type'])){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<intval($_smarty_tpl->tpl_vars['feature']->value['type']); $_smarty_tpl->tpl_vars['i']->value++){
?>
                                <?php $_smarty_tpl->tpl_vars['code_'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['code']->value).".".((string)$_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->value){?>×<?php }?>
                                <input id="product-features-<?php echo $_smarty_tpl->tpl_vars['code_']->value;?>
" type="text"
                                       value="<?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                                       name="product[features][<?php echo $_smarty_tpl->tpl_vars['code_']->value;?>
]" class="numerical short">
                            <?php }} ?>
                        <?php }?>
                    <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'dimension')===0){?>
                        <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['feature']->value['type']), null, 0);?>
                        <input id="product-features-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" type="text"
                               value="<?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value]->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                               name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value]">
                        <select name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][unit]">
                            <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                                <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable((!isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&$_smarty_tpl->tpl_vars['unit']->first)||(isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value]->unit==$_smarty_tpl->tpl_vars['unit']->value['value'])), null, 0);?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"
                                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        </select>
                    <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'range')===0){?>
                        <input id="product-features-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" type="text"
                               value="<?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&!$_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value]->begin->is_null()){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value]->begin->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                               name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value][begin]" class="numerical short">
                        —
                        <input id="product-features-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" type="text"
                               value="<?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&!$_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value]->end->is_null()){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value]->end->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                               name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value][end]" class="numerical short">
                        <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['feature']->value['type']), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['units']->value){?>
                            <select name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][unit]">
                                <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                                    <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable((!isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&$_smarty_tpl->tpl_vars['unit']->first)||(isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value]->unit==$_smarty_tpl->tpl_vars['unit']->value['value'])), null, 0);?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"
                                            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>
                        <?php }?>
                    <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'text')===0){?>
                        <textarea id="product-features-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"
                                  name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]"><?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>

                    <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'color')===0){?>
                        <input name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value]" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value]['value'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="название цвета">
                        <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/features/value/color/" class="inline-link js-action" style="display: inline;">
                            <i class="icon16 color" style="background: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value]['hex'])===null||$tmp==='' ? '#FFFFFF' : $tmp);?>
;"></i>
                        </a>
                        #<input name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][code]" type="text" value="<?php echo htmlspecialchars(smarty_modifier_replace((($tmp = @$_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value]['hex'])===null||$tmp==='' ? '' : $tmp),'#',''), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="000000" class="small">


                    <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'boolean')===0){?>
                        <?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?>
                            <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value]->value, null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(false, null, 0);?>
                        <?php }?>
                        <label>
                            <input type="radio" name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]"
                                   value="1"<?php if ($_smarty_tpl->tpl_vars['value']->value===1){?> checked="checked"<?php }?>>
                            Да
                        </label>
                        </div>
                        <div class="value">
                        <label>
                            <input type="radio" name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]"
                                   value="0"<?php if ($_smarty_tpl->tpl_vars['value']->value===0){?> checked="checked"<?php }?>>
                            Нет
                        </label>
                        </div>
                        <div class="value">
                        <label>
                            <input type="radio" name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]"
                                   value=""<?php if ($_smarty_tpl->tpl_vars['value']->value===false){?> checked="checked"<?php }?>>
                            Не указано
                        </label>
                    <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'divider')===0){?>
                        <input type="hidden" value="-" name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]">
                    <?php }else{ ?>
                        <input id="product-features-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" type="text" name="product[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]" data-type="<?php echo $_smarty_tpl->tpl_vars['feature']->value['type'];?>
"
                               value="<?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['code']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                    <?php }?>
                    </div>
                <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['type']=='divider'&&empty($_smarty_tpl->tpl_vars['feature']->value['internal'])){?>
                <a class="inline-link js-delete-divider" style="float:right;" href="javascript:void(0);">
                <i class="icon10 delete"></i>
                <b><i>удалить</i></b>
            </a><?php }?>
        </div>
    <?php }?>
    <?php }
if (!$_smarty_tpl->tpl_vars['feature']->_loop) {
?>
    Характеристики товаров не определены
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
    <?php if (empty($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['code']->value])){?>
        <div class="field">
            <div class="name"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</div>
            <div class="value"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</div>
        </div>
    <?php }?>
<?php } ?>



<!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-add-template-js", null, null); ob_start(); ?> -->
<div class="field"  data-type="{%=o.feature.type%}" data-multiple="{%=o.feature.multiple%}" data-selectable="{%=o.feature.selectable%}" data-code="{%=o.feature.code%}">
    <div class="name">
        
    <input type="text" placeholder="Название характеристики" name="product[features][{%=o.feature.input%}][name]"
           value="{%=o.feature.name%}">
    <input type="hidden" value="{%=o.feature.type%}" name="product[features][{%=o.feature.input%}][type]">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
"
               name="product[features][{%=o.feature.input%}][types][]">
        
    </div>

    <div class="value no-shift">
        
        
            {% o.feature.input = o.feature.input +'][value'; %}
            {% include (o.feature.value_template, {feature: o.feature}); %}
        
        <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-template-js", null, null); ob_start(); ?> -->
    <input type="text" value="" placeholder="Значение характеристики"
           name="product[features][{%=o.feature.input%}]">
        <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> values here -->

        <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-text-template-js", null, null); ob_start(); ?> -->
        <textarea name="product[features][{%=o.feature.input%}]"></textarea>
        <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> values here -->

        <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-divider-template-js", null, null); ob_start(); ?> -->
        <hr/>
        <input type="hidden" value="-" name="product[features][{%=o.feature.input%}]">
        <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> values here -->

        <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-color-template-js", null, null); ob_start(); ?> -->

        <input name="product[features][{%=o.feature.input%}][value]" type="text" value="" placeholder="название цвета">

        <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/features/value/color/" class="inline-link js-action" style="display: inline;">
            <i class="icon16 color" style="background: #FFFFFF;"></i>
        </a>
        #<input name="product[features][{%=o.feature.input%}][code]" type="text" value="" placeholder="FFFFFF" class="small">

        <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> values here -->

        <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-boolean-template-js", null, null); ob_start(); ?> -->
        <label>
            <input type="radio" name="product[features][{%=o.feature.input%}]" value="1"
                   checked="checked">
            Да

        </label>
    </div>
    <div class="value">
        <label>
            <input type="radio" name="product[features][{%=o.feature.input%}]" value="0">
            Нет
        </label>
    </div>
    <div class="value">
        <label>
            <input type="radio" name="product[features][{%=o.feature.input%}]" value="">
            Не указано
        </label>
        <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> values here -->

        <?php $_smarty_tpl->tpl_vars['dimension'] = new Smarty_variable(shopDimension::getInstance(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['dimensions'] = new Smarty_variable($_smarty_tpl->tpl_vars['dimension']->value->getList(), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dimensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['unit']->key;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-dimension-".((string)$_smarty_tpl->tpl_vars['code']->value)."-template-js", null, null); ob_start(); ?> -->
            <input type="text" name="product[features][{%=o.feature.input%}][value]" value=""
                   placeholder="<?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
">
            <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['code']->value), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['units']->value){?>
                <select name="product[features][{%=o.feature.input%}][unit]">
                    <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                    <?php } ?>
                </select>
            <?php }?>
            <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->
        <?php } ?>

        <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-range-double-template-js", null, null); ob_start(); ?> -->
    <input type="text" name="product[features][{%=o.feature.input%}][value][begin]" value=""
           placeholder="Значение характеристики" class="numerical short">
        <span class="input">—</span>
    <input type="text" name="product[features][{%=o.feature.input%}][value][end]" value=""
           placeholder="Значение характеристики" class="numerical short">

        <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->

        <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dimensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['unit']->key;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-range-".((string)$_smarty_tpl->tpl_vars['code']->value)."-template-js", null, null); ob_start(); ?> -->
            <input type="text" name="product[features][{%=o.feature.input%}][value][begin]" value=""
                   placeholder="<?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
">
            <span class="input">—</span>
            <input type="text" name="product[features][{%=o.feature.input%}][value][end]" value=""
                   placeholder="<?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
">
            <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['code']->value), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['units']->value){?>
                <select name="product[features][{%=o.feature.input%}][unit]">
                    <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                    <?php } ?>
                </select>
            <?php }?>
            <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->
        <?php } ?>

        <?php echo $_smarty_tpl->getSubTemplate ("../../includes/featuresValuesTypes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('base'=>"/product/".((string)$_smarty_tpl->tpl_vars['product']->value['id'])."/edit/features/feature/type",'class'=>"js-action",'link'=>true), 0);?>

    </div>
</div>
<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->

<div class="field">
    <div class="value">
        <br>
        <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/features/add/" class="inline-link js-action"><i class="icon16 add"></i><b><i>Новая характеристика</i></b></a>
    </div>
</div>


</div>
<div class="clear"></div>


<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/features.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.css" type="text/css" />
<script type="text/javascript">
    $.product = $.extend(true, $.product, {
        features_values:<?php echo json_encode($_smarty_tpl->tpl_vars['changed_features']->value);?>

    });
    
    $.product.init({
        value_templates: {
            <?php $_smarty_tpl->tpl_vars['dimensions'] = new Smarty_variable($_smarty_tpl->tpl_vars['dimension']->value->getList(), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dimensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
$_smarty_tpl->tpl_vars['var']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['var']->key;
?>'dimension.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
': '-dimension-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
',
            <?php } ?>
            <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dimensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
$_smarty_tpl->tpl_vars['var']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['var']->key;
?>'range.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
': '-range-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
',
            <?php } ?>
            'range.double': '-range-double',
            boolean: '-boolean',
            color: '-color',
            divider:'-divider',
            text: '-text'
        }
    }, 'features');
    
</script>


<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = Smarty::$_smarty_vars['capture']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['template']->key;
?> <?php if (strpos($_smarty_tpl->tpl_vars['name']->value,'template-js')){?>
    <script type="text/x-jquery-tmpl" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
        <!-- begin <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template']->value,'</','<\\/');?>
 end <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 -->
    </script>
<?php }?> <?php } ?>

<?php }elseif(empty($_smarty_tpl->tpl_vars['product_types']->value)){?>
    <div class="value">
        <p>Для редактирования характеристик товара создайте хотя бы один тип товаров в разделе <em>Настройки → Типы товаров и характеристики</em>.</p>
    </div>
<?php }else{ ?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/features.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.css" type="text/css" />
    <div class="fields form">
        <div class="value">
            <p class="hint">Для редактирования значений характеристик необходимо указать тип этого товара.</p>
            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/main/type/select/" class="inline-link js-action"><b><i>Изменить тип</i></b></a>
        </div>
        <script type="text/javascript">$.product.init({}, 'features');</script>
    </div>
<?php }?>
<?php }} ?>