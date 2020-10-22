<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 18:19:31
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/site/themes/default/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:15504247655ba3afa0c53747-00219259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73eb3094fd70454359e441ec1bc772e23ef1f12b' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/site/themes/default/footer.html',
      1 => 1537629550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15504247655ba3afa0c53747-00219259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3afa0cb34d1_79243666',
  'variables' => 
  array (
    'wa_theme_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3afa0cb34d1_79243666')) {function content_5ba3afa0cb34d1_79243666($_smarty_tpl) {?><!-- Подключение javascript файлов -->
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/owl.carousel.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/jquery.fancybox.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/ion.rangeSlider.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/selectbox.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/select.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/anchors.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/scrollTo-min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/jquery.sticky.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/jquery.slimscroll.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/device.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/jquery.inview.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/scrolloverflow.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/jquery.fullPage.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plugins/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/scripts.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plugins/grid/js/demo.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plugins/grid/js/anime.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plugins/grid/js/menu.js"></script>


<?php if ($_smarty_tpl->tpl_vars['wa']->value->currentUrl()=="/"){?>
<script>
    
    $('body').on('mousewheel', function(e){
        anchors.onWheel(e);
        toggleHeaderDarkness();
    });

    $('body').on('scroll', function(e){
        anchors.onWheel(e);
        
    });

    $(document).ready(function(){
        anchors.update();
    });
    
    function toggleHeaderDarkness(){
        var scroll_top = $(document).scrollTop();
        
        if (scroll_top > 700){
            anchors.whiteHeader();
        }
        else{
            anchors.darkHeader();
        }
    }
    
</script>
<?php }?><?php }} ?>