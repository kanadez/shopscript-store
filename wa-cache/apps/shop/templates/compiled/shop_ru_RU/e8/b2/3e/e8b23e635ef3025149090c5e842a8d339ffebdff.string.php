<?php /* Smarty version Smarty-3.1.14, created on 2018-09-21 02:45:11
         compiled from "e8b23e635ef3025149090c5e842a8d339ffebdff" */ ?>
<?php /*%%SmartyHeaderCode:1310312275ba43107c94109-33467126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b23e635ef3025149090c5e842a8d339ffebdff' => 
    array (
      0 => 'e8b23e635ef3025149090c5e842a8d339ffebdff',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1310312275ba43107c94109-33467126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'subject' => 0,
    'carrier' => 0,
    'for_whom' => 0,
    'color' => 0,
    'size' => 0,
    'products' => 0,
    'filters' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba43107f09888_71547021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba43107f09888_71547021')) {function content_5ba43107f09888_71547021($_smarty_tpl) {?><section class="catalog">
    <div class="title">Скидки</div>
    <div class="filter" style="display:none">
        <div class="wrapper">
            <div class="title">ФИЛЬТР</div>
            <button id="open_filter" class="open filter_closed"></button>
            <div class="controls">
                <label class="container">Готовые работы
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Дизайны вышивки
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                
                <div id="tematics" class="custom-select">
                    <select id="tematika">
                        <option value="">Тематика</option>
                        <option key="tematika" value="">Все</option>
                        <?php  $_smarty_tpl->tpl_vars['subject'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subject']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->shop->allFeatures(10); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->key => $_smarty_tpl->tpl_vars['subject']->value){
$_smarty_tpl->tpl_vars['subject']->_loop = true;
?>
                            <option 
                                key="tematika" 
                                value="<?php echo $_smarty_tpl->tpl_vars['subject']->value['id'];?>
"
                                <?php if (in_array($_smarty_tpl->tpl_vars['subject']->value['id'],(array)$_smarty_tpl->tpl_vars['wa']->value->get("tematika",array()))){?>selected<?php }?>
                            >
                            <?php echo $_smarty_tpl->tpl_vars['subject']->value['value'];?>

                            </option>
                        <?php } ?>
                    </select>
                </div>                
                <div class="custom-select">
                    <select id="nositel">
                        <option value="">Носитель</option>
                        <option key="nositel" value="">Все</option>
                        <?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->shop->allFeatures(9); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value){
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
?>
                            <option 
                                key="nositel" 
                                value="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['id'];?>
"
                                <?php if (in_array($_smarty_tpl->tpl_vars['carrier']->value['id'],(array)$_smarty_tpl->tpl_vars['wa']->value->get("nositel",array()))){?>selected<?php }?>
                            >
                            <?php echo $_smarty_tpl->tpl_vars['carrier']->value['value'];?>

                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="custom-select">
                    <select id="for_whom">
                        <option value="">Для кого</option>
                        <option key="for_whom" value="">Для всех</option>
                        <?php  $_smarty_tpl->tpl_vars['for_whom'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['for_whom']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->shop->allFeatures(4); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['for_whom']->key => $_smarty_tpl->tpl_vars['for_whom']->value){
$_smarty_tpl->tpl_vars['for_whom']->_loop = true;
?>
                            <option 
                                key="for_whom" 
                                value="<?php echo $_smarty_tpl->tpl_vars['for_whom']->value['id'];?>
"
                                <?php if (in_array($_smarty_tpl->tpl_vars['for_whom']->value['id'],(array)$_smarty_tpl->tpl_vars['wa']->value->get("for_whom",array()))){?>selected<?php }?>
                            >
                            <?php echo $_smarty_tpl->tpl_vars['for_whom']->value['value'];?>

                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="custom-select">
                    <select id="tsvet">
                        <option value="">Цвет</option>
                        <option key="tsvet" value="">Все</option>
                        <?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->shop->allFeatures(8); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value){
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
                            <option 
                                key="tsvet" 
                                value="<?php echo $_smarty_tpl->tpl_vars['color']->value['id'];?>
"
                                <?php if (in_array($_smarty_tpl->tpl_vars['color']->value['id'],(array)$_smarty_tpl->tpl_vars['wa']->value->get("tsvet",array()))){?>selected<?php }?>
                            >
                            <?php echo $_smarty_tpl->tpl_vars['color']->value['value'];?>

                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="custom-select">
                    <select id="razmer">
                        <option value="">Размер</option>
                        <option key="razmer" value="">Все</option>
                        <?php  $_smarty_tpl->tpl_vars['size'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['size']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->shop->allFeatures(11); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['size']->key => $_smarty_tpl->tpl_vars['size']->value){
$_smarty_tpl->tpl_vars['size']->_loop = true;
?>
                            <option 
                                key="razmer" 
                                value="<?php echo $_smarty_tpl->tpl_vars['size']->value['id'];?>
"
                                <?php if (in_array($_smarty_tpl->tpl_vars['size']->value['id'],(array)$_smarty_tpl->tpl_vars['wa']->value->get("razmer",array()))){?>selected<?php }?>
                            >
                            <?php echo $_smarty_tpl->tpl_vars['size']->value['value'];?>

                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="showcase no-padding">
        <div class="title">Скидки</div>
        <div class="product_list">
        <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet("discounts"), null, 0);?>
        <?php if (!$_smarty_tpl->tpl_vars['products']->value){?>
            <div class="empty">
            <?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?>
                Не найдено ни одного товара.
            <?php }else{ ?>
                В этой категории нет ни одного товара.
            <?php }?>
            </div>
        <?php }else{ ?>
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa']->value->shop->themePath('default'))."list-discounts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

            <?php }?>
            
        <?php }?>
        </div>
    </div>
    <div class="social_panel">
        <a href="" class="facebook"></a>
        <a href="" class="instagram"></a>
        <a href="" class="twitter"></a>
    </div>
</section>

<div class="clear-both"></div><?php }} ?>