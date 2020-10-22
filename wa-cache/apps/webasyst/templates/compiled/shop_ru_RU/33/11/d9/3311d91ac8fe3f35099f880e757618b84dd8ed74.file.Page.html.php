<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 18:27:45
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-system/page/templates/Page.html" */ ?>
<?php /*%%SmartyHeaderCode:15469872485ba65f71c1bdf8-44879094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3311d91ac8fe3f35099f880e757618b84dd8ed74' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/page/templates/Page.html',
      1 => 1516098349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15469872485ba65f71c1bdf8-44879094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ibutton' => 0,
    'wa_url' => 0,
    'wa' => 0,
    'options' => 0,
    'lang' => 0,
    'sidebar' => 0,
    'routes' => 0,
    'r' => 0,
    'route' => 0,
    'unsettled_pages_count' => 0,
    'domain' => 0,
    'p' => 0,
    'page_url' => 0,
    'backend_pages_sidebar' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba65f71ee1395_81251575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba65f71ee1395_81251575')) {function content_5ba65f71ee1395_81251575($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/www-root/data/www/ftf.metateg.pro/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['ibutton']->value){?>
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" rel="stylesheet" type="text/css" >
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['options']->value['js']['storage']){?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.json.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.store.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script>
    if (!$.storage) {
        $.storage = new $.store();
    }
    </script>
<?php }?>

<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.draggable.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.droppable.min.js"></script>

<?php if ($_smarty_tpl->tpl_vars['options']->value['js']['ace']||!$_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/ace/ace.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<?php }?>

<script>(function() { "use strict";

    var lang = <?php echo json_encode($_smarty_tpl->tpl_vars['lang']->value);?>
;
    var wa_url = <?php echo json_encode($_smarty_tpl->tpl_vars['wa_url']->value);?>
;
    var framework_version = <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->version(true));?>
;

    // This promise is resolved when all WYSIWYG files are loaded
    // and $.fn.waEditor() function is ready.
    $.wa_editor_ready = (function() {
        // Load $.wa.loadFiles() if not loaded already
        if (!$.wa || !$.wa.loadFiles) {
            return $.ajax({
                url: wa_url+"wa-content/js/jquery-wa/wa.core.js?v"+framework_version,
                dataType: "script",
                cache: true
            });
        } else {
            return $.Deferred().resolve().promise();
        }
    }()).then(function() {
        var to_load = [];
        var load_locale = false;

        // Load Redactor II unless already loaded by application
        if (!$.Redactor) {
            to_load.push(wa_url+"wa-content/js/redactor/2/redactor.css?v"+framework_version);
            to_load.push(wa_url+"wa-content/js/redactor/2/redactor.min.js?v"+framework_version);
            load_locale = lang !== 'en';
        }

        if(!$.fileupload) {
            to_load.push(wa_url+"wa-content/js/jquery-plugins/fileupload/jquery.fileupload.js?v"+framework_version);
        }

        return $.wa.loadFiles(to_load).then(function() {
            if (load_locale) {
                // Load Redactor II locale when its ready
                return $.wa.loadFiles(wa_url+"wa-content/js/redactor/2/"+lang+".js?v"+framework_version);
            } else {
                return true;
            }
        }).then(function() {
            if ($.Redactor.VERSION.substr(0, 3) == '10.') {
                // Old RedactorI used by legacy application
                return $.wa.loadFiles(wa_url+"wa-content/js/jquery-wa/editor.js?v"+framework_version).then(function() {
                    return 'waEditor';
                });
            } else {
                // New RedactorII
                return $.wa.loadFiles(wa_url+"wa-content/js/jquery-wa/editor2.js?v"+framework_version).then(function() {
                    return 'waEditor2';
                });
            }
        });
    });

})();</script>

<style type="text/css">
    .wa-pages { margin-bottom: 80px; }
    .wa-pages h4.heading { word-wrap: break-word; word-break: break-all; position: relative; margin-right: 15px; }
    .wa-pages h4.heading span.count { position: absolute; right: -15px; }

    .wa-page-gray { color: #AAA;}
    .wa-page-draft { background: #CCC; color: white; font-weight: bold; font-size: 0.8em; padding: 0 2px; }
    .wa-page-wysiwyg-html-toggle { margin-right: 17px; margin-top: -20px; float: right; margin-bottom: 0; }
    .wa-page-wysiwyg-html-toggle li { list-style: none;float: left;}
    .wa-page-wysiwyg-html-toggle li.selected a { background: white;}
    .wa-page-wysiwyg-html-toggle li a { display: block; color: #888; font-weight: bold; padding: 4px 12px 6px; text-decoration: none; font-size: 0.9em; }

    .wa-page-urls a i { margin: 0}

    .block-pages h4.heading { margin-bottom: 10px; margin-top: 5px; margin-left: -2px; }
    .block-pages ul.menu-v.with-icons li a { word-break: break-all; }

    a.wa-page-link .count i.icon10 { display: none; }
    a.wa-page-link:hover .count i.icon10 { display: block; }
    .wa-page-gray-toolbar { background: #EEE; padding-left: 15px; padding-bottom: 17px; padding-top: 13px; }
    .wa-page-gray-toolbar h2 { font-size: 1.5em; margin-bottom: 10px; }
    .wa-page-save-panel { position: fixed; bottom: 0; left: 0; right: 0; background: #eee; padding-left: 470px; z-index: 1053; }

    .block-pages ul li.drag-newposition.active { border-top: 2px solid #BB8; background: none; }
    .wa-editor-core-wrapper { background: white;}
    .wa-ibutton-checkbox ul.menu-h li { padding: 1px 0 10px; vertical-align: middle;}

    #wa-editor-status i.icon16 { margin-top: 6px; }

    .wa-dropdown { float: right; margin: 2px 20px 0 0; }
    .wa-dropdown .wa-dropdown-content { padding: 20px;  width: auto; width: 760px;  min-height: 180px; max-height: 310px; overflow: auto; overflow-x: hidden;}
    .wa-dropdown .wa-dropdown-content .field .name .inline-link b i { font-weight: bold; }
    .wa-dropdown .wa-dropdown-content .field .name { width: 330px; }
    .wa-dropdown .wa-dropdown-content .field .value { margin-left: 350px; }
    .wa-dropdown .wa-dropdown-content .field.subfield .name { margin-left: 20px; }
    .wa-dropdown .wa-dropdown-content .field.subfield .name .inline-link b i { font-weight: normal; font-size: 0.9em; }
    .wa-dropdown .wa-drop-link { position: relative; padding: 6px 0 0 ; display: block;}
    .wa-dropdown .wa-dropdown-block { display: none; position: absolute; bottom:1.4em; right:0; background: #F3F3F3; border: 2px solid #AAAAAA; box-shadow: 0 2px 10px #777; -webkit-box-shadow: 0 2px 10px #777; -moz-box-shadow: 0 2px 10px #777; -o-box-shadow: 0 2px 10px #777; z-index: 1054; }
    .wa-dropdown ul.tabs { height: 45px; padding-top: 6px; }
    .wa-dropdown ul.tabs li.selected a { background: #fff;}
    .wa-dropdown ul.tabs li.no-tab { min-width: 70px;}
    .wa-dropdown ul.tabs li a { position: relative; padding:5px 15px 8px; height: 30px;}
    .wa-dropdown ul.tabs li.no-tab { padding:4px 0.8em 0 40px;}
    .wa-dropdown ul.tabs li.no-tab .hint { font-weight: bold;}
    .wa-dropdown ul.tabs li.no-tab p { margin: 0 ; line-height: 16px; white-space: nowrap;}
    .wa-dropdown ul.tabs li.no-tab img { float: left; vertical-align: top; margin:2px 0 0 -32px; width: 24px; height: 24px; }
    .wa-dropdown .field .name { word-wrap: break-word; }

    #wa-page-advanced-params-link { margin-left: 180px; }

    .expander { cursor:pointer; float:left;}
    .notebook { float:left;}
</style>

<?php if ($_smarty_tpl->tpl_vars['sidebar']->value){?>
<?php if ($_smarty_tpl->tpl_vars['options']->value['container']){?>
<div class="shadowed wa-pages">
<?php }?>
    <div class="sidebar left250px" style="min-height: 300px;">
        <?php  $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['route']->_loop = false;
 $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['route']->key => $_smarty_tpl->tpl_vars['route']->value){
$_smarty_tpl->tpl_vars['route']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->value = $_smarty_tpl->tpl_vars['route']->key;
?>
            <?php if ((count($_smarty_tpl->tpl_vars['routes']->value)>1)&&!$_smarty_tpl->tpl_vars['r']->value&&is_array($_smarty_tpl->tpl_vars['route']->value['pages'])&&$_smarty_tpl->tpl_vars['route']->value['pages']){?>
                <?php $_smarty_tpl->tpl_vars['unsettled_pages_count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['route']->value['pages']), null, 0);?>
            <?php }else{ ?>
                <?php $_smarty_tpl->tpl_vars['unsettled_pages_count'] = new Smarty_variable(0, null, 0);?>
            <?php }?>
            <div class="block block-pages">
                <h4 class="heading">
                    <span class="count"><span style="display: none;"></span><i <?php if (!$_smarty_tpl->tpl_vars['r']->value){?>style="display:none" <?php }?>class="icon16 add wa-page-add no-parent"></i></span>
                    <i class="icon16 darr"></i> <?php if ($_smarty_tpl->tpl_vars['r']->value){?><?php echo smarty_modifier_truncate(htmlspecialchars(str_replace('www.','',$_smarty_tpl->tpl_vars['route']->value['url_decoded']), ENT_QUOTES, 'UTF-8', true),23,'...',false,true);?>
<?php }else{ ?>Неопубликованные<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['unsettled_pages_count']->value){?>
                        <a id="wa-page-settle" style="margin-left: 10px;" href="#"><i class="icon16 exclamation"></i></a>
                    <?php }?>
                </h4>
                <ul class="menu-v collapsible with-icons" data-domain="<?php if (!$_smarty_tpl->tpl_vars['r']->value&&isset($_smarty_tpl->tpl_vars['domain']->value)){?><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['route']->value['domain'];?>
<?php }?>" data-route="<?php echo $_smarty_tpl->tpl_vars['route']->value['route'];?>
">
                    <li class="drag-newposition"></li>
                    <?php if (!empty($_smarty_tpl->tpl_vars['route']->value['pages'])){?>
                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['route']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                            <li class="dr" id="page-<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">
                                <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['childs'])){?><i class="icon16 darr expander overhanging"></i><?php }?>
                                <i class="icon16 notebook"></i>
                                <a class="wa-page-link" href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">
                                    <span class="count"><i class="icon10 add wa-page-add"></i></span>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                    <span class="hint">/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['full_url'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <?php if (!$_smarty_tpl->tpl_vars['p']->value['status']){?> <span class="wa-page-draft">черновик</span><?php }?>
                                </a>
                                <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['childs'])){?>
                                    <?php echo waPageActions::printPagesTree($_smarty_tpl->tpl_vars['p']->value,$_smarty_tpl->tpl_vars['p']->value['childs'],$_smarty_tpl->tpl_vars['page_url']->value);?>

                                <?php }?>
                            </li>
                            <li class="drag-newposition"></li>
                        <?php } ?>
                    <?php }?>
                </ul>
            </div>
        <?php } ?>

        <?php if ($_smarty_tpl->tpl_vars['unsettled_pages_count']->value){?>
            <div id="wa-page-settle-dialog" style="display: none;">
                <form method="post" action="?module=pages&action=settle">
                    <div class="dialog-content">
                        <p>Эти страницы не прикреплены ни к одному правилу в структуре сайта и поэтому не видны на сайте. Чтобы опубликовать их сейчас, выберите правило в структуре сайта, к которому нужно прикрепить неопубликованные страницы:</p>
                        <select>
                            <option value=""></option>
                            <?php  $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['route']->_loop = false;
 $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['route']->key => $_smarty_tpl->tpl_vars['route']->value){
$_smarty_tpl->tpl_vars['route']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->value = $_smarty_tpl->tpl_vars['route']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['r']->value){?>
                                    <option data-domain="<?php echo $_smarty_tpl->tpl_vars['route']->value['domain'];?>
" data-route="<?php echo $_smarty_tpl->tpl_vars['route']->value['route'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value;?>
</option>
                                <?php }?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="dialog-buttons">
                        <input class="button green" type="submit" value="Сохранить"> или <a class="cancel" href="#">отмена</a>
                    </div>
                </form>
            </div>
            <script type="text/javascript">
            $("#wa-page-settle").click(function () {
                $("#wa-page-settle-dialog").waDialog({
                    title: 'Неопубликованные страницы',
                    className: 'small',
                    onLoad: function () {
                        var n = $("#wa-page-settle").closest('div.block-pages').find('ul li.dr').length;
                        $(this).find('.dialog-content p span').html(n);
                    },
                    onSubmit: function (d) {
                        var o = $(this).find('select option:selected');
                        if (o.data('domain')) {
                            $.post($(this).attr('action'), {
                                domain:o.data('domain'), route:o.data('route')
                            }, function (response) {
                                location.reload();
                            }, "json");
                        }
                        return false;
                    }
                });
                return false;
            });
            </script>
        <?php }?>

        <!-- plugin hook: 'backend_pages_sidebar' -->
        
        <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_pages_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

    </div>
<?php }?>
<div id="wa-page-container" class="content bordered-left blank<?php if ($_smarty_tpl->tpl_vars['sidebar']->value){?> left250px<?php }?>">
    <div  class="block double-padded">
        Загрузка... <i class="icon16 loading"></i>
    </div>
    <div class="clear"></div>
</div>
<script type="text/javascript">
    var wa_url = "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
";
    var wa_app = "<?php echo $_smarty_tpl->tpl_vars['wa']->value->app();?>
";

    function waExpand(page_id) {
        var t = $('#page-'+page_id);
        var c = t.children('ul');
        if(c) {
            t.children('i.expander').removeClass('rarr').addClass('darr');
            c.show();
        }
        var parent_id = t.parent().data('parent-id');
        if(parent_id) waExpand(parent_id);
        var i = t.closest('.block-pages').find("h4.heading i.icon16");
        if (i.hasClass('rarr')) {
            i.trigger('click', true);
        }
    }

    function waLoadPage(params) {
        $(".block-pages ul li.selected").removeClass('selected');
        if (params % 1 === 0) {
            $("#page-" + params).addClass('selected');
            waExpand(params);
        }
        $("#wa-page-container").html('<div class="block double-padded">' +
            'Загрузка... <i class="icon16 loading"></i>' +
            '</div><div class="clear"></div>');
        $("#wa-page-container").load("?module=pages&action=edit&id=" + params);
    }

    if (!jQuery.fn.liveDraggable) {
        jQuery.fn.liveDraggable = function (opts) {
            this.each(function(i,el) {
                var self = $(this);
                if (self.data('init_draggable')) {
                    self.die("mouseover", self.data('init_draggable'));
                }
            });
            this.live("mouseover", function() {
                var self = $(this);
                if (!self.data("init_draggable")) {
                    self.data("init_draggable", arguments.callee).draggable(opts);
                }
            });
        };
    }

    if (!jQuery.fn.liveDroppable) {
        jQuery.fn.liveDroppable = function (opts) {
            this.each(function(i,el) {
                var self = $(this);
                if (self.data('init_droppable')) {
                    self.die("mouseover", self.data('init_droppable'));
                }
            });

            var init = function() {
                var self = $(this);
                if (!self.data("init_droppable")) {
                    self.data("init_droppable", arguments.callee).droppable(opts);
                    self.mouseover();
                }
            };
            init.call(this);
            this.die("mouseover", init).live("mouseover", init);
        };
    }


    $(function () {
        function waClose(page_id) {
            var t = $('#page-'+page_id);
            var c = t.children('ul');
            if(c) {
                t.children('i.expander').removeClass('darr').addClass('rarr');
                c.hide();
            } else {
                t.children('i.expander').removeClass('rarr').removeClass('darr').addClass('notebook');
            }
        }

        $('.expander').click(function() {
            var page_id = $(this).parent().attr('id').replace(/page-/g, '');
            var k = wa_app+'/pages/page-' + page_id;
            if($(this).hasClass('rarr')) {
                waExpand(page_id);
                $.storage.del(k);
             } else {
                waClose(page_id);
                $.storage.set(k, 1);
            }
        });

        $('.expander').each(function() {
            var page_id = $(this).parent().attr('id').replace(/page-/g, '');
            var k = wa_app+'/pages/page-' + page_id;
            if ($.storage.get(k)) {
                waClose(page_id);
            }
        });

        $(".block-pages").on('click', 'i.wa-page-add', function () {
            var li = $('<li><a class="wa-page-link" href="#"><i class="icon16 notebook"></i>Новая страница</a></li>');
            if ($(this).hasClass('no-parent')) {
                $(this).closest('h4').next('ul').append(li);
            } else {
                var p = $(this).closest("li");
                if (!p.children('ul').length) {
                    p.append('<ul class="menu-v with-icons" data-parent-id="' + p.attr('id').replace(/page-/, '') + '"></ul>');
                }
                p.children('ul').append(li);
            }
            li.children('a').click();
            return false;
        });
        $(".block-pages ul").on('click', 'li a.wa-page-link', function (e) {
            if ($(e.target).hasClass('wa-page-add')) return true;
            var p = $(this).parent();
            if (p.attr('id')) {
                var id = $(this).parent().attr('id').replace(/page-/, '');
                <?php if ($_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>
                    var new_hash = <?php echo json_encode($_smarty_tpl->tpl_vars['page_url']->value);?>
 + id;
                    if (new_hash == location.hash) {
                        $.wa.site.dispatch();
                    } else {
                        $.wa.setHash(new_hash);
                    }
                    return false;
                <?php }else{ ?>
                    waLoadPage(id);
                <?php }?>
            } else {
                var ul = p.closest('ul');
                if (ul.data('parent-id')) {
                    waLoadPage('&parent_id=' + ul.data('parent-id'));
                } else {
                    waLoadPage('&domain=' + ul.data('domain') + '&route=' + ul.data('route'));
                }
                $(this).parent().addClass('selected');
            }
            return <?php if ($_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>false<?php }else{ ?>true<?php }?>;
        });

        var page_id = location.hash.replace(/.*?\/(\d+)\/?/, '$1');
        if (page_id && page_id % 1 === 0 && $("#page-" + page_id).length > 0) {
            waLoadPage(page_id);
        } else {
            if ($(".block-pages ul li a.wa-page-link").length) {
                $(".block-pages ul li a.wa-page-link:first").click();
            } else {
                $(".block-pages .wa-page-add:first").click();
            }
        }

        $(".block-pages h4.heading").click(function (e, not_save) {
            if ($(e.target).hasClass('wa-page-add')) return true;
            var h = $(this);
            var ul = h.next('ul');
            var k = wa_app+'/pages/domain-' + ul.data('domain') + '/' + ul.data('route');
            var is_save = !(not_save || false)
            if (is_save) {
                if (!$.storage.get(k)) {
                    $.storage.set(k, 1);
                } else {
                    $.storage.del(k);
                }
            }
            var c = h.children('span.count');
            if (h.children('i').hasClass('darr')) {
                h.children('i').removeClass('darr').addClass('rarr');
                c.children('i').hide();
                c.children('span').html(ul.find('a.wa-page-link').length).show();
                ul.hide();
            } else {
                h.children('i').removeClass('rarr').addClass('darr');
                c.children('span').hide();
                c.children('i').show();
                ul.show();
            }
        });
        $(".block-pages h4.heading").each(function () {
            var ul = $(this).next('ul');
            var k = wa_app+'/pages/domain-' + ul.data('domain') + '/' + ul.data('route');
            if ($.storage.get(k)) {
                $(this).trigger('click', true);
            }
        });

        
        $("li.dr", $('.block-pages ul')).liveDraggable({
            refreshPositions: true,
            revert: "invalid",
            helper: function() {
                var self = $(this);
                var parent = self.parents('.block-pages:first').find('>ul');
                return self.clone().addClass('ui-draggable helper').css({
                    position: 'absolute'
                }).appendTo(parent);
            },
            cursor: "move",
            opacity: 0.75,
            zIndex: 9999,
            distance: 5,
            cursorAt: { left: 5 }
        });

        $("li.drag-newposition", $('.block-pages ul')).liveDroppable({
            accept: 'li.dr',
            tolerance: 'pointer',
            greedy: true,
            hoverClass: 'active',
            over: function() {
                $(this).parent().parent().addClass('drag-active');
            },
            out: function() {
                $(this).parent().parent().removeClass('drag-active');
            },
            deactivate: function(event, ui) {
                var self = $(this);
                if (self.is(':animated') || self.hasClass('dragging')) {
                    self.stop().animate({height: '2px'}, 300, null, function() {self.removeClass('dragging');});
                }
                self.parent().parent().removeClass('drag-active');
            },
            drop: function(event, ui) {
                var self = $(this);
                var dr = ui.draggable;
                var id = dr.attr('id').replace(/page-/, '');
                var ul = self.parent();

                var before_id = 0;
                var before = self.next('li.dr');
                if (before.length && !before.hasClass('helper')) {
                    before_id = before.attr('id').replace(/page-/, '');
                }

                var sep = dr.next();
                // means that actually nothing will be changed
                if (sep.get(0) == self.get(0) || id == before_id) {
                    return false;
                }
                var data = {
                    id: id,
                    route: ul.attr('data-route') || '',
                    domain: ul.attr('data-domain') || '',
                    parent_id: ul.attr('data-parent-id') || 0,
                    before_id: before_id
                };

                var home = dr.prev();

                sep.insertAfter(self);
                dr.insertAfter(self);

                waPageMove(data, function() {}, function() {
                        // restore
                        home.after(dr.next()).after(dr);
                });
            }
        });

        $("li.dr a", $('.block-pages ul')).liveDroppable({
            accept: 'li.dr',
            tolerance: 'pointer',
            greedy: true,
            out: function() {
                $(this).parent().removeClass('drag-newparent');
            },
            over: function(event, ui) {
                var self = $(this).parent(); // li
                self.addClass('drag-newparent');

                var dr = ui.draggable;
                var drSelector = '.dr[id!="'+dr.attr('id')+'"]';
                var nearby = $();

                // helper to widen all spaces below the current li and above next li (which may be on another tree level, but not inside current)
                var addBelow = function(nearby, current) {
                    if (!current.length) {
                        return nearby;
                    }
                    nearby = nearby.add(current.nextUntil(drSelector).filter('li.drag-newposition'));
                    if (current.nextAll(drSelector).length > 0) {
                        return nearby;
                    }
                    return arguments.callee(nearby, current.parent().closest('li'));
                }

                // widen all spaces above the current li and below the prev li (which may be on another tree level)
                var above = self.prevAll(drSelector+':first');
                if(above.length > 0) {
                    var d = above.find(drSelector);
                    if (d.length > 0) {
                        nearby = addBelow(nearby, d.last());
                    } else {
                        nearby = addBelow(nearby, above);
                    }
                } else {
                    nearby = nearby.add(self.prevUntil(drSelector).filter('li.drag-newposition'));
                }

                // widen all spaces below the current li and above the next li (which may be on another tree level)
                if (self.children('ul').children(drSelector).length > 0) {
                    nearby = nearby.add(self.children('ul').children('li.drag-newposition:first'));
                } else {
                    nearby = addBelow(nearby, self);
                }

                var old = $('.drag-newposition:animated, .drag-newposition.dragging').not(nearby);

                old.stop().animate({height: '2px'}, 300, null, function(){old.removeClass('dragging');});
                nearby.stop().animate({height: '10px'}, 300, null, function(){nearby.addClass('dragging');});
            },
            drop: function(event, ui) {
                var self = $(this).parent().removeClass('drag-newparent'); // li
                var parent_id = self.attr('id').replace(/page-/, '');
                var dr = ui.draggable;

                var id = dr.attr('id').replace(/page-/, '');
                if (id == parent_id) {
                    return false;
                }

                var ul;
                var sep  = dr.next();
                var home = dr.prev();
                if (self.children('ul').length) {
                    ul =  self.children('ul');
                } else {
                    ul = $('<ul class="menu-v with-icons unapproved" data-parent-id="' + parent_id + '"><li class="drag-newposition"></li></ul>').appendTo(self);
                    ul.find('.drag-newposition').mouseover(); // init droppable
                }
                ul.append(dr).append(sep);

                waPageMove({id: id, parent_id: parent_id, before_id: 0}, function() {
                        ul.removeClass('unapproved');
                    },function() {
                        // restore
                        home.after(dr).after(sep);
                        if (ul.hasClass('unapproved')) {
                            ul.remove();
                        }
                });
            }
        });
        

        function waPageMove(data, success, error) {
            $.post("?module=pages&action=move", data, function (response) {
                if (response.status == 'ok') {
                    var id = response.data.id;
                    var full_url = response.data.full_url;
                    if (full_url) {
                        $("#page-" + id + ' > a span.hint').html('/' + full_url);
                        if (response.data.old_full_url) {
                            var old_full_url = response.data.old_full_url;
                            $("#page-" + id + ' ul li span.hint').each(function () {
                                $(this).text('/' + full_url + (full_url.length > 0 && full_url.substr(-1) != '/' ? '/' : '') + $(this).text().substr(old_full_url.length + 1));
                            });
                        }
                        // if moved page is current active
                        if ($("#page-" + id).hasClass('selected')) {
                            waLoadPage(id);
                        }
                    }
                    success();
                } else {
                    error();
                }
            }, "json");
        }

    });

</script>
<?php if ($_smarty_tpl->tpl_vars['sidebar']->value){?>
<?php if ($_smarty_tpl->tpl_vars['options']->value['container']){?>
</div>
<?php }?>
<?php }?>
<?php }} ?>