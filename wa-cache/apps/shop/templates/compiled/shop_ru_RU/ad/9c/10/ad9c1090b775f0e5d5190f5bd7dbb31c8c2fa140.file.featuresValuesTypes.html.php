<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:52:04
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/includes/featuresValuesTypes.html" */ ?>
<?php /*%%SmartyHeaderCode:1462425945ba61ed4c3afb1-76104694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad9c1090b775f0e5d5190f5bd7dbb31c8c2fa140' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/includes/featuresValuesTypes.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1462425945ba61ed4c3afb1-76104694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base' => 0,
    'available' => 0,
    'link' => 0,
    'variants' => 0,
    'group' => 0,
    'v' => 0,
    'class' => 0,
    'subtypes' => 0,
    'key' => 0,
    'subtype' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba61ed4d7bad5_91774442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba61ed4d7bad5_91774442')) {function content_5ba61ed4d7bad5_91774442($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['base']->value)){?><?php $_smarty_tpl->tpl_vars['base'] = new Smarty_variable('', null, 0);?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['available']->value)){?><?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable(2, null, 0);?><?php }?>
<?php $_smarty_tpl->tpl_vars['variants'] = new Smarty_variable(shopFeatureModel::getTypes(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['subtypes'] = new Smarty_variable(array(), null, 0);?>
<select<?php if (!empty($_smarty_tpl->tpl_vars['link']->value)){?> style="display:none;"<?php }?> class="js-feature-types-control">
    <?php if ($_smarty_tpl->tpl_vars['available']->value>1){?><option>—</option><?php }?>
    <?php $_smarty_tpl->tpl_vars['group'] = new Smarty_variable(false, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['group']->value&&(empty($_smarty_tpl->tpl_vars['v']->value['group'])||($_smarty_tpl->tpl_vars['v']->value['group']!=$_smarty_tpl->tpl_vars['group']->value))){?>
        </optgroup>
        <?php $_smarty_tpl->tpl_vars['group'] = new Smarty_variable(false, null, 0);?>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['v']->value['group'])&&!$_smarty_tpl->tpl_vars['group']->value){?>
        <optgroup label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['group'], ENT_QUOTES, 'UTF-8', true);?>
">
        <?php $_smarty_tpl->tpl_vars['group'] = new Smarty_variable($_smarty_tpl->tpl_vars['v']->value['group'], null, 0);?>
    <?php }?>

    <option<?php if ($_smarty_tpl->tpl_vars['v']->value['available']<$_smarty_tpl->tpl_vars['available']->value){?> disabled="disabled"<?php }?> data-type="<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
" data-multiple="<?php echo $_smarty_tpl->tpl_vars['v']->value['multiple'];?>
" data-selectable="<?php echo $_smarty_tpl->tpl_vars['v']->value['selectable'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
    <?php if (!empty($_smarty_tpl->tpl_vars['v']->value['subtype'])){?><?php $_smarty_tpl->createLocalArrayVariable('subtypes', null, 0);
$_smarty_tpl->tpl_vars['subtypes']->value[$_smarty_tpl->tpl_vars['v']->value['type']] = $_smarty_tpl->tpl_vars['v']->value['subtype'];?><?php }?>
    <?php } ?>
    <?php if ($_smarty_tpl->tpl_vars['group']->value){?>
        </optgroup>
    <?php }?>
</select>


<?php $_smarty_tpl->tpl_vars['v'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['variants']->value), null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['link']->value)){?>
<a href="#<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['class']->value)){?> class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon16 settings"></i></a>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['subtype'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subtype']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subtypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subtype']->key => $_smarty_tpl->tpl_vars['subtype']->value){
$_smarty_tpl->tpl_vars['subtype']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['subtype']->key;
?>
<select style="display:none;" class="js-feature-subtypes-control" data-subtype="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
<?php if ($_smarty_tpl->tpl_vars['available']->value>1){?><option>—</option><?php }?>
<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
<option<?php if ($_smarty_tpl->tpl_vars['s']->value['available']<$_smarty_tpl->tpl_vars['available']->value){?> disabled="disabled"<?php }?> data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['type'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</option>
<?php } ?>
</select>
<?php } ?>

<?php if (!empty($_smarty_tpl->tpl_vars['link']->value)){?>
<br>
<span class="hint" style="display:none;">Если добавляемый вами тип характеристики недоступен для выбора в этом списке, сначала добавьте эту характеристику в разделе «Настройки» и затем укажите ее значение в свойствах данного товара.</span>
<?php }?>
<?php }} ?>