<?php /* Smarty version Smarty-3.1.14, created on 2018-09-20 17:15:23
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/main.html" */ ?>
<?php /*%%SmartyHeaderCode:1173742555ba3ab7b70ee62-84199794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70227a1ee0e1998c2db66bbb451042ecdc38eab8' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/main.html',
      1 => 1535460153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1173742555ba3ab7b70ee62-84199794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_header' => 0,
    '_' => 0,
    'action' => 0,
    '_use_store_schema' => 0,
    'theme_settings' => 0,
    'wa' => 0,
    'wa_theme_url' => 0,
    'wa_theme_version' => 0,
    '_absolute_thumb_uri' => 0,
    'breadcrumbs' => 0,
    'wa_app_url' => 0,
    'breadcrumb' => 0,
    'content' => 0,
    'in_comparison' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3ab7b83a0f1_16569783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3ab7b83a0f1_16569783')) {function content_5ba3ab7b83a0f1_16569783($_smarty_tpl) {?><!-- plugin hook: 'frontend_header' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_header']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

<?php $_smarty_tpl->tpl_vars['_use_store_schema'] = new Smarty_variable(false, null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['action']->value)&&($_smarty_tpl->tpl_vars['action']->value==="default")){?>
    <?php $_smarty_tpl->tpl_vars['_use_store_schema'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<div class="content" id="page-content" itemscope itemtype="<?php if ($_smarty_tpl->tpl_vars['_use_store_schema']->value){?>http://schema.org/Store<?php }else{ ?>http://schema.org/WebPage<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['_use_store_schema']->value){?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['store_address'])){?>
            <meta itemprop="address" content="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['store_address'];?>
">
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['store_price_range'])){?>
            <meta itemprop="priceRange" content="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['store_price_range'];?>
">
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['logo'])){?>
            <?php ob_start();?><?php echo substr($_smarty_tpl->tpl_vars['wa_theme_url']->value,1);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['_absolute_thumb_uri'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa']->value->url(true)).$_tmp1.((string)$_smarty_tpl->tpl_vars['theme_settings']->value['logo'])."?v".((string)$_smarty_tpl->tpl_vars['wa_theme_version']->value), null, 0);?>
            <meta itemprop="image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_absolute_thumb_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <?php }?>
    <?php }?>

    <!-- internal navigation breadcrumbs -->
    <!--<?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?>
        <nav class="breadcrumbs" itemprop="breadcrumb">
            <?php if (!$_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount')){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('name');?>
</a>  <span class="rarr">&rarr;</span>
            <?php }else{ ?>
                
                <?php $_smarty_tpl->createLocalArrayVariable('breadcrumbs', null, 0);
$_smarty_tpl->tpl_vars['breadcrumbs']->value[0] = null;?>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value){
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a> <span class="rarr">&rarr;</span>
                <?php }?>
            <?php } ?>
        </nav>
    <?php }?>-->

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


    <div class="clear-both"></div>

</div>


<div class="clear-both"></div>

<div id="dialog" class="dialog">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <!-- common part -->
        <div class="cart">

        </div>
        <!-- /common part -->

    </div>
</div>

<div class="modal warning">
    <div class="left">
        <div class="title"></div>
    </div>
    <div class="clear"></div>
    <div class="left" style="margin-top:20px;">
        <button class="action button_solid" onclick="modal.close()">OK</button>
    </div>
    <div class="clear"></div>
</div>

<div class="modal error">
    <div class="left">
        <div class="title"></div>
    </div>
    <div class="clear"></div>
    <div class="left" style="margin-top:20px;">
        <button class="action button_solid" onclick="modal.close()">OK</button>
    </div>
    <div class="clear"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['compare_products']){?>
<aside id="compare-leash">
    <?php $_smarty_tpl->tpl_vars['in_comparison'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->inComparison(), null, 0);?>
    <a <?php if (!$_smarty_tpl->tpl_vars['in_comparison']->value){?>style="display:none;"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare',array('id'=>implode(',',$_smarty_tpl->tpl_vars['in_comparison']->value)));?>
">Сравнить выбранные товары (<strong><?php echo count($_smarty_tpl->tpl_vars['in_comparison']->value);?>
</strong>)</a>
    <?php if ($_smarty_tpl->tpl_vars['in_comparison']->value){?><style>.appfooter { padding-bottom: 60px; } </style><?php }?>
</aside>
<?php }?>
<?php }} ?>