<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:29:30
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-system/design/templates/DesignEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:9108117025ba6198ad1fff0-47248333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec83de14f34ebb27b7deb85c762bc163a0760edb' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/design/templates/DesignEdit.html',
      1 => 1511525901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9108117025ba6198ad1fff0-47248333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme' => 0,
    'theme_usages' => 0,
    'route_url' => 0,
    'theme_usages_decoded' => 0,
    'route_url_decoded' => 0,
    'theme_files' => 0,
    'f_id' => 0,
    'file' => 0,
    'f' => 0,
    'design_url' => 0,
    'theme_id' => 0,
    'options' => 0,
    'parent_theme' => 0,
    'i' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba6198b109977_20448792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba6198b109977_20448792')) {function content_5ba6198b109977_20448792($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><div id="wa-design-sidebar" class="sidebar left200px" style="min-height:300px">
    <div class="wa-theme-block">
        <h4 class="heading"><?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
</h4>
        <?php if ($_smarty_tpl->tpl_vars['theme_usages']->value&&$_smarty_tpl->tpl_vars['route_url']->value){?>
        <div class="block">
            <p class="hint" style="margin-bottom: 0;"><i class="icon10 exclamation"></i> <?php echo sprintf('Эта тема дизайна также используется по адресу <strong>%s</strong>. Редактирование шаблонов дизайна этой темы приведет к изменению внешнего вида как %s, так и всех других перечисленных поселений.',implode(', ',$_smarty_tpl->tpl_vars['theme_usages_decoded']->value),$_smarty_tpl->tpl_vars['route_url_decoded']->value);?>
</p>
        </div>
        <?php }?>
        <ul class="menu-v with-icons wa-theme wa-theme-templates">
            <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['f_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['theme_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['f']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['f_id']->value = $_smarty_tpl->tpl_vars['f']->key;
 $_smarty_tpl->tpl_vars['f']->index++;
 $_smarty_tpl->tpl_vars['f']->first = $_smarty_tpl->tpl_vars['f']->index === 0;
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['f_id']->value==$_smarty_tpl->tpl_vars['file']->value['id']){?>selected <?php }?><?php if ($_smarty_tpl->tpl_vars['f']->first){?>top-padded <?php }?><?php if ($_smarty_tpl->tpl_vars['f']->value['parent']){?><?php if (!empty($_smarty_tpl->tpl_vars['f']->value['parent_exists'])){?>inherit<?php }else{ ?>error<?php }?><?php }?>">
                <a <?php if (!empty($_smarty_tpl->tpl_vars['f']->value['modified'])){?>class="bold"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['design_url']->value;?>
theme=<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
&file=<?php echo rawurlencode($_smarty_tpl->tpl_vars['f_id']->value);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['f']->value['parent_exists'])){?> title="файл родительской темы"<?php }?>>
                <i class="icon16 <?php if (!empty($_smarty_tpl->tpl_vars['f']->value['parent_exists'])){?>link<?php }else{ ?>script<?php if (substr($_smarty_tpl->tpl_vars['f_id']->value,-4)=='.css'){?>-css<?php }elseif(substr($_smarty_tpl->tpl_vars['f_id']->value,-3)=='.js'){?>-js<?php }?><?php }?>"></i><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['f_id']->value, ENT_QUOTES, 'UTF-8', true),25,'...',false,true);?>

                </a>
            </li>
            <?php } ?>
            <li class="add-file top-padded"><a href="<?php echo $_smarty_tpl->tpl_vars['design_url']->value;?>
theme=<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
&file=" class="small"><i class="icon10 add"></i>Новый файл </a> </li>
        </ul>
        <br>
    </div>
</div>
<div class="content left200px bordered-left blank">
<div class="wa-design-editor">
    <form id="wa-design-form" method="post" action="?module=design&theme_id=<?php echo $_smarty_tpl->tpl_vars['theme_id']->value;?>
&file=<?php echo rawurlencode($_smarty_tpl->tpl_vars['file']->value['id']);?>
&action=save">
        <div class="block wa-design-gray-toolbar">
            <?php if ($_smarty_tpl->tpl_vars['file']->value['id']){?>
            <div class="float-right">
                <ul class="menu-h">
                    <?php if (!empty($_smarty_tpl->tpl_vars['file']->value['has_original'])){?>
                        <li id="wa-design-original-link" <?php if (empty($_smarty_tpl->tpl_vars['file']->value['modified'])){?> style="display: none"<?php }?>>
                            <a href="?module=design&action=viewOriginal" class="wa-design-view-original"><i class="icon16 script-lock"></i>Посмотреть оригинал</a>
                            <script type="text/javascript">
                                $(".wa-design-view-original").click(function () {
                                    var d = $('#wa-design-view-original-dialog').empty().removeClass('dialog');
                                    if (!d.length) {
                                        d = $('<div id="wa-design-view-original-dialog"></div>').appendTo('body');
                                    }
                                    var url = $(this).attr('href') + '&theme_id=<?php echo $_smarty_tpl->tpl_vars['theme_id']->value;?>
&file=<?php echo rawurlencode($_smarty_tpl->tpl_vars['file']->value['id']);?>
';
                                    d.waDialog({
                                        url: url,
                                        buttons: '<input type="button" class="button cancel" value="Закрыть"> <input type="submit" class="button yellow float-right" value="Сбросить мои изменения к оригинальной версии файла">',
                                        onSubmit: function (dialog) {
                                            if (confirm('Это сбросит все выполненные вами изменения. Вы уверены?')) {
                                                $.post('?module=design&action=revertFile', {
                                                    theme: '<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
',
                                                    file: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
'
                                                }, function (response) {
                                                    if (response.status == 'fail') {
                                                        alert(response.errors);
                                                    } else {
                                                        dialog.trigger('close');
                                                        waDesignLoad();
                                                    }
                                                }, 'json')
                                            }
                                            return false;
                                        }
                                    });
                                    return false;
                                });
                            </script>
                        </li>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['file']->value['custom'])){?>
                        <li><a href="#" class="inline-link" id="wa-design-settings-toggle"><i class="icon16 edit"></i><b><i>Настройки шаблона</i></b></a></li>
                        <li>
                            <a class="wa-design-delete" href="?module=design&action=delete"><i class="icon16 delete"></i>Удалить</a>
                            <script type="text/javascript">
                                $(".wa-design-delete").click(function () {
                                    if (confirm('Файл будет удален без возможности восстановления. Удалить?')) {
                                        $.post($(this).attr('href'), { theme_id:"<?php echo $_smarty_tpl->tpl_vars['theme_id']->value;?>
", file: "<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"}, function () {
                                            var li = $("ul.wa-theme li.selected");
                                            if (li.prev().length > 0) {
                                                var hash = li.prev().addClass('selected').find('a').attr('href');
                                            } else if (li.next().length > 0) {
                                                var hash = li.next().addClass('selected').find('a').attr('href');
                                            } else {
                                                var hash = "<?php echo $_smarty_tpl->tpl_vars['design_url']->value;?>
theme=<?php echo $_smarty_tpl->tpl_vars['theme_id']->value;?>
&file=";
                                            }
                                            li.remove();
                                            $.wa.setHash(hash);
                                            <?php if (!$_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>
                                                waDesignLoad();
                                            <?php }?>
                                        }, "json");
                                    }
                                    return false;
                                });
                            </script>
                        </li>
                    <?php }?>
                </ul>
            </div>
            <?php }?>
            <h4>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['id'], ENT_QUOTES, 'UTF-8', true);?>

                <?php if (isset($_smarty_tpl->tpl_vars['file']->value['description'])){?><span id="wa-design-desc" class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
            </h4>

            <?php if (!empty($_smarty_tpl->tpl_vars['file']->value['custom'])){?>
            <div id="wa-design-settings" style="<?php if ($_smarty_tpl->tpl_vars['file']->value['id']){?>display: none; <?php }?>">
                <?php if (isset($_smarty_tpl->tpl_vars['parent_theme']->value)&&empty($_smarty_tpl->tpl_vars['file']->value['id'])){?>
                    <ul class="menu-v">
                        <li><input id="wa-file-create" name="type" type="radio" value="0" checked> <label for="wa-file-create">Создать новый файл</label></li>
                        <li><input id="wa-file-link" name="type" type="radio" value="1"> <label for="wa-file-link">Файл из родительской темы</label></li>
                    </ul>
                <?php }?>
                <div class="fields form">
                    <div id="wa-file-create-group" class="field-group">
                        <div class="field">
                            <div class="name bold">
                                Имя файла
                            </div>
                            <div class="value">
                                <input name="file" type="text" class="bold" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" />
                                <br /><span class="hint">Допустимые расширения файла: .html, .css, .js</span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="name">
                                Описание
                            </div>
                            <div class="value">
                                <textarea id="s-text-desc" name="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                <br /><span class="hint">Необязательное описание шаблона</span>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['parent_theme']->value)){?>
                    <div id="wa-file-link-group" class="field-group" style="display: none;">
                        <div class="field">
                            <div class="name">
                                Выберите файл
                            </div>
                            <div class="value">
                                <select id="wa-design-parent" name="parent">
                                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['f_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['parent_theme']->value['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['f']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['f_id']->value = $_smarty_tpl->tpl_vars['f']->key;
 $_smarty_tpl->tpl_vars['f']->index++;
 $_smarty_tpl->tpl_vars['f']->first = $_smarty_tpl->tpl_vars['f']->index === 0;
?>
                                    <?php if (!isset($_smarty_tpl->tpl_vars['theme']->value['files'][$_smarty_tpl->tpl_vars['f_id']->value])){?>
                                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
</option>
                                    <?php }?>
                                    <?php } ?>
                                    <?php if (!$_smarty_tpl->tpl_vars['i']->value){?>
                                    <option value="">все файлы родительской темы уже подключены</option>
                                    <?php }?>
                                </select>
                                <?php if ($_smarty_tpl->tpl_vars['i']->value){?>
                                    <p class="hint"><?php echo sprintf('Этот список отображает все шаблоны дизайна родительской темы (<strong>%s</strong>), которые еще не подключены в текущей теме дизайна.',($_smarty_tpl->tpl_vars['parent_theme']->value['app']).(':').($_smarty_tpl->tpl_vars['parent_theme']->value['id']));?>
</p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $("#wa-file-create, #wa-file-link").click(function () {
                            if ($("#wa-file-create").is(':checked')) {
                                $("#wa-file-link-group").hide();
                                $("#wa-file-create-group").show();
                                $(".wa-editor-core-wrapper").show();
                                $("#wa-editor-help-link").show();
                                $("#wa-design-button").removeAttr('disabled');
                            } else {
                                $("#wa-file-create-group").hide();
                                $(".wa-editor-core-wrapper").hide();
                                $("#wa-editor-help-link").hide();
                                $("#wa-file-link-group").show();
                                if ($("#wa-design-parent option:first").attr('value') == '') {
                                    $("#wa-design-parent").attr('disabled', 'disabled');
                                    $("#wa-design-button").attr('disabled', 'disabled');
                                }
                            }
                        });
                    </script>
                    <?php }?>
                </div>
                <div class="clear-left"></div>
            </div>
            <?php }?>
        </div>
        <div class="wa-editor-core-wrapper ace">
            <div style="clear:both">
                <textarea style="display:none" id="wa-design-content" name="content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['options']->value['save_panel']){?>
        <div class="wa-design-save-panel block bordered-top">
            <div class="wa-dropdown">
                <div class="wa-drop-link">
                    <a class="inline-link" id="wa-editor-help-link" href="#">
                        <i class="icon16 cheatsheet"></i><b><i>Шпаргалка</i></b>
                        <i class="icon10 uarr no-overhanging"></i>
                    </a>
                    <div id="wa-editor-help" class="wa-dropdown-block"></div>
                    <script type="text/javascript">
                        $("#wa-editor-help-link").click(function () {
                            if ($("#wa-editor-help").is(":visible")) {
                                $("#wa-editor-help").hide();
                                return false;
                            }
                            $("#wa-editor-help").load('?module=pages&action=help', "app=<?php echo $_smarty_tpl->tpl_vars['wa']->value->app();?>
&file=<?php if ($_smarty_tpl->tpl_vars['file']->value){?><?php echo rawurlencode($_smarty_tpl->tpl_vars['file']->value['id']);?>
<?php }?>", function () {
                                $(this).show();
                                var f = function (e) {
                                    if ($(e.target).attr('id') == 'wa-editor-help' || $(e.target).parents('#wa-editor-help').length) {
                                        $(document).one('click', f);
                                    } else {
                                        $("#wa-editor-help").hide();
                                    }
                                };
                                $(document).one('click', f);
                            });
                            return false;
                        });

                        $("#wa-editor-help").on('click', "div.fields a.inline-link", function () {
                            var el = $(this).find('i');
                            if (el.children('b').length) {
                                el = el.children('b');
                            }
                            if ($(".el-rte").length && $(".el-rte").is(':visible')) {
                                try {
                                    $("#wa-design-content").elrte()[0].elrte.selection.insertHtml(el.text());
                                } catch (e) {}
                            } else {
                                wa_editor.insert(el.text());
                            }
                            return false;
                        });
                    </script>
                </div>
            </div>

            <input id="wa-design-button" type="submit" class="button green" value="Сохранить" />
            <em class="hint">Ctrl + S</em>
            <span id="wa-editor-status" style="margin-left: 20px; display: none"></span>

        </div>
        <?php }?>
    </form>
    <div class="clear"></div>
</div>
</div>
<script>
    $(document).ready(function () {

        $(".wa-theme-templates").on('click', 'a', function () {
            if (!waDesignConfirm()) return false;
            $("#wa-design-sidebar li.selected").removeClass('selected');
            $(this).parent().addClass('selected');
            $.wa.setHash($(this).attr('href'));
            <?php if ($_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>
            return false;
            <?php }else{ ?>
            waDesignLoad();
            <?php }?>
        });

        $('#wa-design-settings-toggle').click(function(){
            $('#wa-design-settings').toggle();
            return false;
        });

        var options = {
            'id': 'wa-design-content',
            'type': "<?php if (substr($_smarty_tpl->tpl_vars['file']->value['id'],-3)=='css'){?>css<?php }elseif(substr($_smarty_tpl->tpl_vars['file']->value['id'],-2)=='js'){?>javascript<?php }else{ ?>html<?php }?>",
            'prefix': 'wa-design-'
        };

        var element = $('#' + options.id);

        <?php if ($_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>
            <?php if ($_smarty_tpl->tpl_vars['file']->value&&$_smarty_tpl->tpl_vars['file']->value['id']){?>
                document.title = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
 — <?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
";
                <?php }else{ ?>
                document.title = "Новый файл — <?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
";
            <?php }?>
        <?php }?>
        if (!options.height) {
            var h = $("div.wa-design-editor").height() - $("div.wa-design-editor .wa-design-gray-toolbar").height() - 98;
            if ($("#wa-app").height() < $("#wa").height() - $("#wa-header").height()) {
                h += $("#wa").height() - $("#wa-header").height() - $("#wa-app").height();
            }
            if (h < 300) {
                h = 300;
            }
            options.height = h;
        }

        waEditorAceInit(options);

        $("#wa-design-form").submit(function () {
            var form = $(this);
            $("#wa-design-content").val(wa_editor.getValue());
            $("#wa-editor-status").html("<i class='icon16 loading'></i> Сохранение...").fadeIn("slow");
            $.post(form.attr('action'), form.serialize(), function (response) {
                if (response.status == 'ok') {
                    $("#wa-editor-status").html('<i class="icon16 yes"></i> Сохранено').fadeOut('slow');
                    $('#wa-design-button').removeClass('yellow').removeClass('red').addClass('green');
                    $('#wa-design-original-link').show();
                    $('.wa-theme-templates li.selected a').addClass('bold');
                    <?php if (!$_smarty_tpl->tpl_vars['file']->value['id']){?>
                        var li = $('<li class="selected' + (response.data.inherit ? ' inherit' : '') +'"><a class="bold" href="<?php echo $_smarty_tpl->tpl_vars['design_url']->value;?>
theme=<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
&amp;file=' + response.data.id + '">' +
                            '<i class="icon16 ' + (response.data.inherit ? 'link' : 'script' + (response.data['type'] ? '-' + response.data['type'] : '')) + '"></i>' + response.data.id + '</a></li>');
                        li.insertBefore($(".wa-theme-block li.selected").removeClass('selected'));
                        li.children('a').click();
                        $.wa.setHash(li.children('a').attr('href').replace(/^.*?#/, ''));
                        <?php if (!$_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>
                            waDesignLoad();
                        <?php }?>
                    <?php }else{ ?>
                    if (response.data.id !== "<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
") {
                        $("#wa-design-form h4").html(response.data.id);
                        var li = $(".wa-theme-block li.selected");
                        li.html('<a class="bold" href="<?php echo $_smarty_tpl->tpl_vars['design_url']->value;?>
theme=<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
&amp;file=' + response.data.id + '">' +
                        '<i class="icon16 script"></i>' + response.data.id + '</a>');
                        $.wa.setHash(li.children('a').attr('href').replace(/^.*?#/, ''));
                        wa_design_not_load = true;
                    }
                    <?php }?>
                } else if (response.status == 'fail') {
                    if ($.isArray(response.errors)) {
                        var e = response.errors[0];
                        $(response.errors[1]).addClass('error');
                    } else {
                        var e = response.errors;
                    }
                    $("#wa-editor-status").show().html('<b style="color:red">' + (e ? e : $_('An error occurred while saving')) + '</b>');
                    $('#wa-design-button').removeClass('yellow').removeClass('green').addClass('red');
                }
            }, "json");
            return false;
        });
    });
</script><?php }} ?>