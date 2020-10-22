<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:31:46
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/backend/BackendCategoryExpand.html" */ ?>
<?php /*%%SmartyHeaderCode:13460106585ba61a125e49e5-15372749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9898ba58c58e955b79bcab3733ee5f767235ad02' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/backend/BackendCategoryExpand.html',
      1 => 1452519801,
      2 => 'file',
    ),
    'fcbd2f4079524373f598cfd2abe71326117c4d79' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/backend/include.categories.html',
      1 => 1511965954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13460106585ba61a125e49e5-15372749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba61a12792462_26565298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba61a12792462_26565298')) {function content_5ba61a12792462_26565298($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)){?>
    <?php /*  Call merged included template "./include.categories.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./include.categories.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '13460106585ba61a125e49e5-15372749');
content_5ba61a1261b9a5_61740652($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.categories.html" */?>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:31:46
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/backend/include.categories.html" */ ?>
<?php if ($_valid && !is_callable('content_5ba61a1261b9a5_61740652')) {function content_5ba61a1261b9a5_61740652($_smarty_tpl) {?>
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
<?php }} ?>