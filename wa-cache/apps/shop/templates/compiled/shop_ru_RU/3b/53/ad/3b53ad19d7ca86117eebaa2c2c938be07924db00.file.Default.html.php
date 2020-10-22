<?php /* Smarty version Smarty-3.1.14, created on 2018-09-21 16:08:50
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/widgets/sources/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:10605555075ba4ed62eec060-01507778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b53ad19d7ca86117eebaa2c2c938be07924db00' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/widgets/sources/templates/Default.html',
      1 => 1443175668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10605555075ba4ed62eec060-01507778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'metric' => 0,
    'is_tv' => 0,
    'sources' => 0,
    'progressbar_color1' => 0,
    'progressbar_color2' => 0,
    'progressbar_color' => 0,
    's' => 0,
    'background_style' => 0,
    'widget_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba4ed630a8512_02182908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba4ed630a8512_02182908')) {function content_5ba4ed630a8512_02182908($_smarty_tpl) {?><style>
    table.zebra.s-sources-widget-table td,
    table.zebra.s-sources-widget-table tr:hover td { background: transparent; }
    table.zebra.s-sources-widget-table tr { background: transparent; }
    table.zebra.s-sources-widget-table tr:nth-child(2n+1) { background: #f2f7ff; }
    
    .s-sources-widget-table .source-name { padding-left: 0.8rem; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; max-width: 10rem; }
    .s-sources-widget-table .source-metric { text-align: right; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; }
    
    .widget-1x1 .s-sources-widget-table .source-name { max-width: 5rem; }
    .widget-2x2 .s-sources-widget-table .source-metric { white-space: nowrap; }
    
    .tv .s-sources-widget-table .source-metric { color: #ffa; }
    .tv table.zebra.s-sources-widget-table tr:nth-child(2n+1) { background: #282828; }

</style>
<div class="block">
    <h6 class="heading nowrap">
        <?php if ($_smarty_tpl->tpl_vars['metric']->value=='sales'){?>
            Продажи по источникам
        <?php }elseif($_smarty_tpl->tpl_vars['metric']->value=='profit'){?>
            Прибыль по источникам
        <?php }elseif($_smarty_tpl->tpl_vars['metric']->value=='orders'){?>
            Заказы по источникам
        <?php }?>
    </h6>
</div>

<?php if ($_smarty_tpl->tpl_vars['is_tv']->value){?>
    <?php $_smarty_tpl->tpl_vars['progressbar_color1'] = new Smarty_variable('#197a8f', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['progressbar_color2'] = new Smarty_variable('#0a6478', null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['progressbar_color1'] = new Smarty_variable('#8ec7ec', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['progressbar_color2'] = new Smarty_variable('#55a9df', null, 0);?>
<?php }?>

<table class="zebra s-sources-widget-table">
    <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['s']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['s']->index++;
?>
        <?php if ($_smarty_tpl->tpl_vars['s']->index%2){?>
            <?php $_smarty_tpl->tpl_vars['progressbar_color'] = new Smarty_variable($_smarty_tpl->tpl_vars['progressbar_color1']->value, null, 0);?>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['progressbar_color'] = new Smarty_variable($_smarty_tpl->tpl_vars['progressbar_color2']->value, null, 0);?>
        <?php }?>
        <?php $_smarty_tpl->tpl_vars['background_style'] = new Smarty_variable("background:linear-gradient(to right, ".((string)$_smarty_tpl->tpl_vars['progressbar_color']->value)." 0%, ".((string)$_smarty_tpl->tpl_vars['progressbar_color']->value)." ".((string)$_smarty_tpl->tpl_vars['s']->value['percent'])."%, transparent ".((string)$_smarty_tpl->tpl_vars['s']->value['percent'])."%, transparent 100%);", null, 0);?>
        <tr>
            <td class="source-name" style="<?php echo $_smarty_tpl->tpl_vars['background_style']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            <td class="source-metric"><?php echo $_smarty_tpl->tpl_vars['s']->value['metric_html'];?>
</td>
        </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['s']->_loop) {
?>
        <tr>
            <td colspan="2"><div class="align-center">Не найдено источников для отображения.</div></td>
        </tr>
    <?php } ?>
</table>

<script>(function($) {

    var widget_id = "<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
",
        uniqid = '' + (new Date).getTime() + Math.random();

    setTimeout(function() {
        try {
            DashboardWidgets[widget_id].uniqid = uniqid;
            setTimeout(function() {
                try {
                    if (uniqid == DashboardWidgets[widget_id].uniqid) {
                        DashboardWidgets[widget_id].renderWidget();
                    }
                } catch (e) {
                    console && console.log('Error updating Sources widget', e);
                }
            }, 15*60*1000);
        } catch (e) {
            console && console.log('Error setting up Sources widget updater', e);
        }
    }, 0);

})(jQuery);</script><?php }} ?>