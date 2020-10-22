<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 18:40:51
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/category.html" */ ?>
<?php /*%%SmartyHeaderCode:11787503775ba618b358d4b8-99262958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0be57853a804af17f4190511582210a290fdf6c' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/category.html',
      1 => 1537630850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11787503775ba618b358d4b8-99262958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba618b372f0d1_09585044',
  'variables' => 
  array (
    'wa' => 0,
    'subject' => 0,
    'carrier' => 0,
    'for_whom' => 0,
    'color' => 0,
    'size' => 0,
    'category' => 0,
    'products' => 0,
    'filters' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba618b372f0d1_09585044')) {function content_5ba618b372f0d1_09585044($_smarty_tpl) {?><section class="catalog">
    <h1 class="title">Каталог</h1>
    <div class="filter">
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
    <div class="showcase">
        <h2 class="title"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h2>
        <div class="product_list">
        <?php if (!$_smarty_tpl->tpl_vars['products']->value){?>
            <div class="empty">
            <?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?>
                Не найдено ни одного товара.
            <?php }else{ ?>
                В этой категории нет ни одного товара.
            <?php }?>
            </div>
        <?php }else{ ?>
            <?php echo $_smarty_tpl->getSubTemplate ('list-thumbs.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sorting'=>!empty($_smarty_tpl->tpl_vars['category']->value['params']['enable_sorting'])), 0);?>

            
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