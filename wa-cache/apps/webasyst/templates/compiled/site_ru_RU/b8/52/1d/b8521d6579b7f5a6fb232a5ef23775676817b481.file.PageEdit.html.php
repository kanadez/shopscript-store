<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:29:23
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-system/page/templates/PageEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:4809683695ba619830a8ff6-71994053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8521d6579b7f5a6fb232a5ef23775676817b481' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/page/templates/PageEdit.html',
      1 => 1518705241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4809683695ba619830a8ff6-71994053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'options' => 0,
    'k' => 0,
    'v' => 0,
    'backend_page_edit' => 0,
    '_' => 0,
    'url' => 0,
    'preview_hash' => 0,
    'url_decoded' => 0,
    'page_route' => 0,
    'params' => 0,
    'n' => 0,
    'vars' => 0,
    'p' => 0,
    'og_params' => 0,
    'page_edit' => 0,
    'other_params' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'lang' => 0,
    'page_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba619834f8066_29123145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba619834f8066_29123145')) {function content_5ba619834f8066_29123145($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><div class="wa-page-editor">
<form id="wa-page-form" method="post" action="?module=pages&action=save<?php if ($_smarty_tpl->tpl_vars['page']->value){?>&id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
<?php }?>">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php } ?>
    <div class="block wa-page-gray-toolbar">
        <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
        <div class="float-right ie-menu-h-fix">
            <ul class="menu-h">

                <!-- plugin hook: 'backend_page_edit.action_button_li' -->
                
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_page_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['action_button_li']);?>
<?php } ?>

                <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['update_datetime'])){?>
                    <li><h3 class="gray"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['page']->value['update_datetime'],"humandatetime");?>
</h3></li>
                <?php }?>
                <li><a href="#" class="inline-link" id="wa-page-settings-toggle"><i class="icon16 edit"></i><b><i>Настройки страницы</i></b></a></li>
                <li><a class="wa-page-delete" href="?module=pages&action=delete"><i class="icon16 delete"></i>Удалить</a></li>
            </ul>
        </div>
        <?php }?>
        <div>
            <h2 class="wa-page-name"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?> <span class="wa-page-draft">черновик</span><?php }?><?php }else{ ?>Новая страница<?php }?></h2>
            <div class="wa-page-urls small">
                <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>" title="Предпросмотр" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_decoded']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>" target="_blank"><i class="icon10 new-window"></i></a>
                    <?php }elseif($_smarty_tpl->tpl_vars['page']->value['domain']&&$_smarty_tpl->tpl_vars['page']->value['route']!==null){?>
                        <?php $_smarty_tpl->tpl_vars['page_route'] = new Smarty_variable(waRouting::clearUrl($_smarty_tpl->tpl_vars['page']->value['route']), null, 0);?>
                        <a style="text-decoration: line-through;" href="http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>" title="Предпросмотр" target="_blank">http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
</a>
                        <a href="http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>"><i class="icon10 new-window"></i></a>
                    <?php }else{ ?>
                    Страница не опубликована, потому что не прикреплена ни к одному поселению приложения (правилу маршрутизации). Перетащите страницу из секции «Неопубликованные», чтобы подключить ее к существующему правилу маршрутизации.
                    <?php }?>
                <?php }?>
                <br />
            </div>
        </div>
        <div id="wa-page-settings" style="<?php if ($_smarty_tpl->tpl_vars['page']->value){?>display: none;<?php }?>">
            <div class="fields form">
                <div class="field-group">
                    <div class="field">
                        <div class="name bold">Название страницы</div>
                        <div class="value">
                            <input type="text" class="bold large long" name="info[name]" value="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                        </div>
                    </div>
                    <div class="field">
                        <div class="value wa-ibutton-checkbox">
                            <ul class="menu-h">
                                <li><span id="wa-page-v-open-label" class="wa-page-gray">Черновик</span></li>
                                <li><input type="checkbox" id="wa-page-v" name="info[status]" <?php if (!$_smarty_tpl->tpl_vars['page']->value||$_smarty_tpl->tpl_vars['page']->value['status']){?>checked="checked"<?php }?> /></li>
                                <li><span id="wa-page-v-private-label">Опубликовано</span></li>
                            </ul>

                        </div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['id'])){?>
                        <div class="value gray">
                            id: <strong><?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
</strong>
                        </div>
                        <?php }?>
                    </div>

                    <div class="field wa-page-url">
                        <div class="name bold">URL страницы</div>
                        <div class="value wa-page-app-url no-shift">
                            <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_decoded']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><input type="text" name="info[url]" class="bold" value="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                        </div>
                        <?php if (empty($_smarty_tpl->tpl_vars['url']->value)){?>
                        <div class="value small wa-page-app-url no-shift">
                            <span style="color: red;">Страница не опубликована, потому что не прикреплена ни к одному поселению приложения (правилу маршрутизации). Перетащите страницу из секции «Неопубликованные», чтобы подключить ее к существующему правилу маршрутизации.</span>
                        </div>
                        <?php }?>
                    </div>

                </div>

                <?php if (!$_smarty_tpl->tpl_vars['page']->value||!$_smarty_tpl->tpl_vars['page']->value['id']){?>
                    <a id="wa-page-advanced-params-link" href="#" class="hint inline-link"><b><i>еще</i></b><i class="icon10 darr"></i></a>
                <?php }?>
                <div id="wa-page-advanced-params"<?php if (!$_smarty_tpl->tpl_vars['page']->value||!$_smarty_tpl->tpl_vars['page']->value['id']){?> style="display:none"<?php }?>>
                    <div class="field-group">
                        <div class="field">
                            <div class="name"><strong class="title">Заголовок</strong> <span class="hint">&lt;title&gt;</span></div>
                            <div class="value"><input type="text" name="info[title]" value="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="bold long" /></div>
                        </div>
                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
                        <div class="field">
                            <div class="name"><?php echo $_smarty_tpl->tpl_vars['vars']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</div>
                            <?php if ($_smarty_tpl->tpl_vars['n']->value=='description'){?>
                            <div class="value"><textarea name="params[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea></div>
                            <?php }else{ ?>
                            <div class="value"><input type="text" name="params[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                            <?php }?>
                        </div>
                        <?php } ?>
                        <div class="field">
                            <div class="name">Соцсети</div>
                            <div class="value no-shift">
                                <label><input class="og-checkbox" type="checkbox" <?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?>checked<?php }?>> Для соцсетей использовать эти же заголовки и описания</label>
                            </div>
                        </div>
                    </div>

                    <div class="field-group og-group" <?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?>style="display: none;"<?php }?>>
                        <div class="field">
                            <div class="name">Заголовок для соцсетей <span class="hint">og:title</span></div>
                            <div class="value">
                                <input name="og[title]" class="long bold" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og_params']->value['title'],''), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?>disabled<?php }?>>
                            </div>
                        </div>
                        <div class="field">
                            <div class="name">URL изображения для соцсетей <span class="hint">og:image</span></div>
                            <div class="value">
                                <input name="og[image]" class="long" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og_params']->value['image'],''), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?>disabled<?php }?>>
                                <br>
                                <span class="hint">Если адрес не указан явно, соцсеть автоматически выберет одно из изображений на странице</span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="name">URL видео для соцсетей <span class="hint">og:video</span></div>
                            <div class="value">
                                <input name="og[video]" class="long" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og_params']->value['video'],''), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?>disabled<?php }?>>
                            </div>
                        </div>
                        <div class="field">
                            <div class="name">Описание для соцсетей <span class="hint">og:description</span></div>
                            <div class="value">
                                <textarea name="og[description]"<?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?>disabled<?php }?>><?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og_params']->value['description'],''), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                            </div>
                        </div>
                        <div class="field">
                            <div class="name">Тип страницы для соцсетей <span class="hint">og:type</span></div>
                            <div class="value">
                                <input name="og[type]" placeholder="" value="<?php echo ifset($_smarty_tpl->tpl_vars['og_params']->value['type'],'');?>
" <?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?>disabled<?php }?>>
                            </div>
                        </div>

                        <div class="field">
                            <div class="value">
                                <span class="hint">Подробная информация о параметрах для соцсетей и их возможных значениях опубликована на сайте протокола <a href="http://ogp.me" target="_blank">Open Graph</a>.</span>
                            </div>
                        </div>
                    </div>

                    <?php if (!empty($_smarty_tpl->tpl_vars['page_edit']->value)){?>
                        <div class="field-group">
                            <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
                        </div>
                    <?php }?>

                    <div class="field">
                        <div class="name">Дополнительные параметры страницы</div>
                        <div class="value">
                            <textarea name="other_params"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['other_params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>

<?php } ?><?php }?></textarea><br />
                            <span class="hint">Необязательный набор параметров вида <em>key=value</em>, к значениям которых можно обращаться в шаблоне page.html или в содержимом текущей страницы как <em>&#123;$page.key&#125;</em>. Каждая пара key=value должна быть указана на отдельной строке. <a href="http://www.webasyst.com/ru/framework/docs/site/pages/" target="_blank">Помощь</a> <i class="icon10 new-window"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <br clear="left" />
        </div>
    </div>
    <div class="wa-editor-core-wrapper">
        <ul class="wa-editor-wysiwyg-html-toggle">
            <li class="selected"><a class="wysiwyg" href="#">Визуальный редактор</a></li>
            <li><a class="html" href="#">HTML</a></li>
        </ul>
        <div style="clear:both">
            <div class="wa-editor-upload-img hidden" title="Загрузить изображение">
                <i class="icon16 image"></i>
            </div>
            <textarea style="display:none" id="wa-page-content" name="info[content]"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['options']->value['save_panel']){?>
    <div class="wa-page-save-panel block bordered-top">
        <div class="wa-dropdown">
            <div class="wa-drop-link">
                <a class="inline-link" id="wa-editor-help-link" href="#">
                    <i class="icon16 cheatsheet"></i><b><i>Шпаргалка</i></b>
                    <i class="icon10 uarr no-overhanging"></i>
                </a>
                <div id="wa-editor-help" class="wa-dropdown-block"></div>
            </div>
        </div>

        <input id="wa-page-button" type="submit" class="button green" value="Сохранить" />
        <em class="hint">Ctrl + S</em>
        <span id="wa-editor-status" style="margin-left: 25px; display: none"></span>

    </div>
    <?php }?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

</form>
<div class="clear"></div>
</div>

<div class="dialog" id="s-upload-dialog">
    <div class="dialog-background"> </div>
    <div class="dialog-window" style="height: 225px; min-height: 225px; width: 450px; min-width: 450px">
        <form id="s-upload-form" method="post" action="?module=pages&action=uploadimage&r=2" enctype="multipart/form-data">
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h2>Загрузить изображение</h2>
                    <div id="redactor-droparea" style="text-align: center;">
                        <input id="s-input-file" type="file" name="file" multiple>
                        <input type="hidden" name="path" id="s-upload-path" value="" />
                        <div class="loading" style="display:none; margin-top: 10px">
                            <i class="icon16 loading"></i> Загрузка...
                        </div>
                    </div>
                </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="submit" class="button green" value="Загрузить">
                    или <a href="#" class="inline-link cancel"><b><i>отмена</i></b></a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="dialog" id="s-switch-editor">
    <div class="dialog-background"> </div>
    <div class="dialog-window" style="height: 140px; min-height: 140px; width: 530px; min-width: 530px">
        <form>
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <b>Редактор WYSIWYG может изменить ваш HTML-код.</b><br><br>Это необходимо для правильного форматирования текста. Код Smarty может быть взломан, и устаревшие HTML-теги могут быть заменены на современные.<br><br>Вы действительно хотите переключиться на WYSIWYG-редактор?
                </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="submit" class="button green" value="Переключиться" />
                    или <a href="#" class="inline-link cancel"><b><i>отмена</i></b></a>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">$(function () { "use strict";

    var wa_url = window.wa_url = <?php echo json_encode($_smarty_tpl->tpl_vars['wa_url']->value);?>
;
    var wa_app = window.wa_app = <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->app());?>
;
    var page_delete_confirm_msg = "Будет удалена вся страница. Продолжить?";

    <?php if ($_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>
        <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
            document.title = <?php echo json_encode($_smarty_tpl->tpl_vars['page']->value['name']);?>
 + " — " + <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->appName(false));?>
;
        <?php }else{ ?>
            document.title = "Новая страница — " + <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->appName(false));?>
;
        <?php }?>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['id'])){?>
        // Link to delete the page
        $(".wa-page-delete").click(function () {
            if (confirm(page_delete_confirm_msg)) {
                $.post($(this).attr('href'), { id:<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
}, function () {

                    var li = $("#page-<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
");
                    var prev = li.prevAll('.dr:first');
                    if (prev.length > 0) {
                        location.href = prev.addClass('selected').find('a').attr('href');
                        li.remove();
                    } else {
                        var next = li.nextAll('.dr:first');
                        if (next.length > 0) {
                            location.href = next.addClass('selected').find('a').attr('href');
                            li.remove();
                        } else {
                            location.reload(true);
                        }
                    }
                }, "json");
            }
            return false;
        });
    <?php }?>

    // Show/hide block of OG fields when user clicks the checkbox
    $('.og-checkbox').change(function () {
        if ($(this).is(':checked')) {
            $('.og-group').hide().find('input,textarea').attr('disabled', 'disabled');
        } else {
            $('.og-group').show().find('input,textarea').removeAttr('disabled');
        }
    });

    // Open template vars help
    $("#wa-editor-help-link").click(function () {
        if ($("#wa-editor-help").is(":visible")) {
            $("#wa-editor-help").hide();
            return false;
        }
        $("#wa-editor-help").load('?module=pages&action=help', "app=<?php echo $_smarty_tpl->tpl_vars['wa']->value->app();?>
&id=<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
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

    // Insert template var into test when user clicks a row in vars help
    $("#wa-editor-help").on('click', "div.fields a.inline-link", function () {
        var el = $(this).find('i');
        if (el.children('b').length) {
            el = el.children('b');
        }
        $.wa_editor_ready.then(function(method) {
            $('#wa-page-content')[method]('insert', el.text());
        });
        return false;
    });

    // Initialize editor when JS is loaded
    $.wa_editor_ready.then(function(method) {
        $('#wa-page-content')[method]({
            lang: $.Redactor.opts.langs["<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"] ? "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" : 'en',
            smarty_wysiwyg_msg: <?php echo json_encode(_ws('WYSIWYG editor is disabled because page source contains Smarty code tags.'));?>
,
            modification_wysiwyg_msg: $('#s-switch-editor'),
            saveButton: '#wa-page-button',
            upload_img_dialog: '#s-upload-dialog',
            uploadFields: {
                '_csrf': "<?php echo waRequest::cookie('_csrf','');?>
"
            },
            locales: {
                'close': "Закрыть"
            }
        });
    });

    // i-button toggle between draft and published state
    (function() {
        // Initialize i-button when it becomes visible
        var iButtonInit = function () {
            $("#wa-page-v").iButton({
                labelOn: "",
                labelOff: "",
                classContainer: 'ibutton-container mini'
            });
        };
        if ($("#wa-page-settings").is(":visible")) {
            setTimeout(iButtonInit, 200);
        } else {
            $("#wa-page-settings-toggle").one('click', function () {
                setTimeout(iButtonInit, 100);
            });
        }

        // Change color of lables when user clicks i-button
        var status_check = function(item) {
            if ($(item).is(':checked')) {
                $('#wa-page-v-open-label').addClass('wa-page-gray');
                $('#wa-page-v-private-label').removeClass('wa-page-gray');
            } else {
                $('#wa-page-v-open-label').removeClass('wa-page-gray');
                $('#wa-page-v-private-label').addClass('wa-page-gray');
            }
        };
        status_check($('#wa-page-v'));
        $('#wa-page-v').change(function(){
            $('#wa-page-button').removeClass('green').addClass('yellow');
            status_check(this);
        });
    }());

    // Show/hide page settings when user clicks on the link
    $('#wa-page-settings-toggle').click(function(){
        $('#wa-page-settings').toggle();
        return false;
    });

    // Show advanced params when user clicks on the link
    $("#wa-page-advanced-params-link").click(function () {
        $("#wa-page-advanced-params").show();
        $(this).remove();
        return false;
    });

    <?php if ((!$_smarty_tpl->tpl_vars['page']->value||!$_smarty_tpl->tpl_vars['page']->value['id'])&&empty($_smarty_tpl->tpl_vars['options']->value['disable_auto_url'])){?>
        // Transliterate page title into URL while user types
        (function() {
            $.fn.onKeyFinish = function (defer, callback) {
                return this.each(function () {
                    var that = $(this);
                    that.currentValue = that.val();
                    that.interval = null;
                    $(this).off('keyup.wapages');
                    $(this).on('keyup.wapages', function (e) {
                        clearInterval(that.interval);
                        if (that.currentValue != that.val()) {
                            that.interval = setInterval(function () {
                                clearInterval(that.interval);
                                callback.call(that);
                                that.currentValue = that.val();
                            }, defer);
                        }
                    });
                });
            };
            $("#wa-page-settings input:first").focus();
            $('#wa-page-settings input[name="info[name]"]').onKeyFinish(300, function () {
                if (!$("#wa-page-form-translit").length) {
                    $("#wa-page-form").append('<input id="wa-page-form-translit" type="hidden" name="translit" value="1">');
                }
                var url = $('#wa-page-settings input[name="info[url]"]');
                if ($(this).val() && (!url.val() || !url.data('changed'))) {
                    $.post("?module=pages&action=translit", { str: $(this).val()}, function (response) {
                        $("#wa-page-form-translit").remove();
                        if (response.status == 'ok') {
                            if (!url.val() || !url.data('changed')) {
                                url.val(response.data.str);
                            }
                        }
                    }, "json");
                }
            });
            $('#wa-page-settings input[name="info[url]"]').on('keyup', function () {
               $(this).data('changed', 1);
            });
        }());
    <?php }?>

    // Save the page via XHR when the form is submitted
    $("#wa-page-form").submit(function (evt) {
        var form = $(this);
        evt.preventDefault();
        $.wa_editor_ready.then(function(method) {
            if ($('#wa-page-settings input[name="info[name]"]').is(":focus")) {
                if (!$("#wa-page-form-translit").length) {
                    $("#wa-page-form").append('<input id="wa-page-form-translit" type="hidden" name="translit" value="1">');
                }
            }
            $('#wa-page-content')[method]('sync');
            var li = $(".block-pages ul li.selected");
            $("#wa-editor-status").html("<i class='icon16 loading'></i> Сохранение...").fadeIn("slow");
            $.post(form.attr('action'), form.serialize(), function (response) {
                if (response.status == 'ok') {
                    $(".error").removeClass('error');
                    $("#wa-editor-status").html('<i class="icon16 yes"></i> Сохранено').fadeOut('slow');
                    $('#wa-page-button').removeClass('yellow').removeClass('red').addClass('green');
                    var p = response.data;
                    if (!p.status) {
                        p.name += ' <span class="wa-page-draft">черновик</span>';
                    }
                    var html = $('<li id="page-' + p.id + '" class="dr selected">' +
                    '<a class="wa-page-link" href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
' + p.id + '">' +
                    '<span class="count"><i class="icon10 add wa-page-add"></i></span>' +
                    '<i class="icon16 notebook"></i>' + p.name + ' <span class="hint">/' + p.full_url +'</span>' + '</a></li>');
                    if (p.add) {
                        li.replaceWith(html);
                    } else {
                        $("#page-" + p.id).children('a.wa-page-link').replaceWith($(html).find('a.wa-page-link'));
                        $("#page-" + p.id + ' > ul li span.hint').each(function () {
                            $(this).text('/' + p.full_url + (p.full_url.length > 0 && p.full_url.substr(-1) != '/' ? '/' : '') + $(this).text().substr(p.old_full_url.length + 1));
                        });
                    }
                    if (response.data.add) {
                        waLoadPage(p.id);
                    } else {
                        $(".wa-page-editor h2.wa-page-name").html(p.name);
                    }
                    <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?>
                    var page_url = <?php echo json_encode(waIdna::dec($_smarty_tpl->tpl_vars['url']->value));?>
 + p.url;
                    <?php }elseif(isset($_smarty_tpl->tpl_vars['page_route']->value)){?>
                    var page_url = 'http://<?php echo waIdna::dec($_smarty_tpl->tpl_vars['page']->value['domain']);?>
/<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
' + p.full_url;
                    <?php }?>

                    if ($('#wa-page-v').is(':checked')) {
                        var page_attr_url = page_url;
                    } else {
                        var page_attr_url = page_url + '?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
';
                    }

                    if ($(".wa-page-urls a").length) {
                        $(".wa-page-urls a").attr('href', page_attr_url);
                        $(".wa-page-urls a:first").html(page_url);
                    }
                } else if (response.status == 'fail') {
                    if ($.isArray(response.errors)) {
                        var e = response.errors[0];
                        $(response.errors[1]).addClass('error');
                    } else {
                        var e = response.errors;
                    }
                    $("#wa-editor-status").html('<b style="color:red">' + (e ? e : $_('An error occurred while saving')) + '</b>');
                    $('#wa-page-button').removeClass('yellow').removeClass('green').addClass('red');
                }
            }, "json");
        });
    });
});</script>
<?php }} ?>