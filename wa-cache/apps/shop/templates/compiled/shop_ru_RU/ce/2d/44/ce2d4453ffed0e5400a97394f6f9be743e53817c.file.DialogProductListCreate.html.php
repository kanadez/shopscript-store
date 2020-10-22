<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:30:52
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/dialog/DialogProductListCreate.html" */ ?>
<?php /*%%SmartyHeaderCode:9182976595ba619dcb2a0a0-30945275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce2d4453ffed0e5400a97394f6f9be743e53817c' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/shop/templates/actions/dialog/DialogProductListCreate.html',
      1 => 1511965954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9182976595ba619dcb2a0a0-30945275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'parent' => 0,
    'title_text' => 0,
    'name_text' => 0,
    'type_text' => 0,
    'static_type_text' => 0,
    'dynamic_type_text' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba619dcc97622_23412926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba619dcc97622_23412926')) {function content_5ba619dcc97622_23412926($_smarty_tpl) {?><div class="dialog <?php if ($_smarty_tpl->tpl_vars['type']->value=='set'){?>width650px height350px<?php }else{ ?>large<?php }?>" id="s-product-list-create-dialog">
    <div class="dialog-background"></div>
    <form id="s-product-list-create-form" method="post"
          action="?module=products&action=saveListSettings&<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
_id=0&parent_id=<?php if (!empty($_smarty_tpl->tpl_vars['parent']->value)){?><?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
<?php }else{ ?>0<?php }?>"
          enctype="multipart/form-data"
    >
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1><?php echo $_smarty_tpl->tpl_vars['title_text']->value;?>
</h1>
                <div class="fields form s-dialog-form">
                    <div class="field-group">
                        <div class="field">
                            <div class="name"><?php echo $_smarty_tpl->tpl_vars['name_text']->value;?>
</div>
                            <div class="value">
                                <input type="text" name="name" class="large long s-full-width-input" value="" id="s-c-product-list-name">
                            </div>
                        </div>
                        <?php echo Smarty::$_smarty_vars['capture']['frontend_url'];?>

                    </div>
                    <?php echo Smarty::$_smarty_vars['capture']['ext_fields'];?>

                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                <?php echo $_smarty_tpl->tpl_vars['type_text']->value;?>

                            </div>
                            <div class="value no-shift">
                                <ul class="thumbs li150px s-list-type-selector">
                                    <?php if (ifset($_smarty_tpl->tpl_vars['parent']->value['type'],0)!=1){?>
                                    <li style="margin-bottom: 0;">
                                        <label>
                                            <input id="s-type-static" type="radio" name="type" value="0" checked="checked">
                                            <strong><?php if ($_smarty_tpl->tpl_vars['type']->value=='category'){?>Категория<?php }else{ ?>Список<?php }?></strong>
                                            <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['type']->value=='category'){?>folder<?php }else{ ?>ss set<?php }?>"></i>
                                            <br><br>
                                            <span class="hint"><?php echo $_smarty_tpl->tpl_vars['static_type_text']->value;?>
</span>
                                        </label>
                                    </li>
                                    <?php }?>
                                    <li style="margin-bottom: 0;">
                                        <label>
                                            <input id="s-type-dynamic" type="radio" name="type" value="1" <?php if (ifset($_smarty_tpl->tpl_vars['parent']->value['type'],0)==1){?>checked="checked"<?php }?>>
                                            <strong>Фильтр</strong>
                                            <i class="icon16 funnel"></i>
                                            <br><br>
                                            <span class="hint"><?php echo $_smarty_tpl->tpl_vars['dynamic_type_text']->value;?>
</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="field-group" id="s-dynamic-field-group" <?php if (ifset($_smarty_tpl->tpl_vars['parent']->value['type'],0)!=1){?>style="display:none;"<?php }?>>
                        <?php echo Smarty::$_smarty_vars['capture']['dynamic_settings'];?>

                    </div>
                    <?php echo Smarty::$_smarty_vars['capture']['description'];?>

                    <?php echo Smarty::$_smarty_vars['capture']['custom_params'];?>

                </div>
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <input type="submit" value="Сохранить" class="button green">
                или <a class="cancel" href="#">отмена</a>
            </div>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

    </div>
    </form>
</div>
<script type="text/javascript">
    $(function() {
        var d = $('#s-product-list-create-dialog');
        $('#s-product-list-create-dialog input[name=type]').click(function() {
            if ($(this).val() == '0') {
                $('#s-dynamic-field-group').hide();
            } else {
                $('#s-dynamic-field-group').show();
                d.trigger('dynamic_settings');
            }
        });
    });
</script>
<?php echo Smarty::$_smarty_vars['capture']['js'];?>

<?php }} ?>