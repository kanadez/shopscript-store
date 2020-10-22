<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 13:29:21
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/site/templates/layouts/Sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:14126288195ba619814d5035-01116879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de4f23c90cb9c5e8dcfab90062254db354714134' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-apps/site/templates/layouts/Sidebar.html',
      1 => 1511525901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14126288195ba619814d5035-01116879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'domains' => 0,
    'd_id' => 0,
    'domain_id' => 0,
    'd' => 0,
    'domain_alias' => 0,
    'backend_sidebar' => 0,
    'output' => 0,
    'rights' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba619815d3cd6_29875884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba619815d3cd6_29875884')) {function content_5ba619815d3cd6_29875884($_smarty_tpl) {?><div class="block double-padded">
    <ul class="menu-v with-icons">
        <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_smarty_tpl->tpl_vars['d_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['d_id']->value = $_smarty_tpl->tpl_vars['d']->key;
?>
        <li<?php if ($_smarty_tpl->tpl_vars['d_id']->value==$_smarty_tpl->tpl_vars['domain_id']->value){?> class="selected"<?php }?>>
            <a href="?domain_id=<?php echo $_smarty_tpl->tpl_vars['d_id']->value;?>
">
                <i class="icon16 favicon" style="background-image:url(http<?php if (waRequest::isHttps()){?>s<?php }?>://<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
/favicon.ico)"></i><?php echo htmlspecialchars(waIdna::dec(str_replace('www.','',$_smarty_tpl->tpl_vars['d']->value['title'])), ENT_QUOTES, 'UTF-8', true);?>

            </a>
        </li>
        <?php } ?>
    </ul>
</div>

<div style="display:none" id="addsite-dialog">
	<form method="post" action="?module=domains&amp;action=save">
		<div class="dialog-content">
			<h1>Новый сайт</h1>
			<p>
				<strong class="large">http://</strong><input type="text" id="domain-name" name="name" class="bold large long" value="" placeholder="www.mydomain.ru" />
				<br /><span class="hint">Например, mydomain.ru, www.mydomain.ru, subdomain.mydomain.ru</span>
			</p>

			<p>Введите URL нового сайта. Вы должны быть владельцем доменного имени и предварительно настроить домен так, чтобы он указывал на данную установку Webasyst. Для настройки доменного имени обратитесь за помощью к вашему хостинг-провайдеру. <a href="http://www.webasyst.ru/developers/docs/routing/site-app-routing/" target="_blank">Помощь</a> <i class="icon10 new-window"></i></p>

            <p>
                <ul class="menu-v">
                    <li>
                        <label>
                            <input type="radio" name="alias" value="0" checked> Новый сайт
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="radio" name="alias" value="1">
                            Зеркало сайта
                            <select id="alias-domain" name="domain">
                                <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_smarty_tpl->tpl_vars['d_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['d_id']->value = $_smarty_tpl->tpl_vars['d']->key;
?>
                                    <?php if (empty($_smarty_tpl->tpl_vars['d']->value['is_alias'])){?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php }?>
                                <?php } ?>
                            </select>
                            <script type="text/javascript">
                                $('#alias-domain').on('change', function () {
                                    $('#alias-domain').parent().find('input').attr('checked', 'checked');
                                });
                            </script>
                        </label>
                    </li>
                </ul>
            </p>
            <span class="errormsg"></span>
		</div>
		<div class="dialog-buttons">
			<input type="submit" class="button green" value="Создать сайт">
			или <a href="#" class="inline-link cancel"><b><i>отмена</i></b></a>

		</div>
	</form>
</div>


<div class="s-site-mgmt-tab">
	<div class="block">
    	<h5 class="heading">
			<div class="s-site-mgmt-current-url"><?php echo waIdna::dec(htmlspecialchars(str_replace('www.','',$_smarty_tpl->tpl_vars['domains']->value[$_smarty_tpl->tpl_vars['domain_id']->value]['title']), ENT_QUOTES, 'UTF-8', true));?>
</div>
        </h5>
    </div>
    <ul class="menu-v s-links with-icons">
        <?php if (empty($_smarty_tpl->tpl_vars['domain_alias']->value)){?>
        <li id="s-link-pages"><a href="#/pages/"><i class="icon16 notebook"></i>Страницы</a></li>
        <li id="s-link-design"><a href="#/design/"><i class="icon16 palette"></i>Дизайн</a></li>
        <li id="s-link-routing"><a href="#/routing/"><i class="icon16 split"></i>Структура</a></li>
        <li id="s-link-personal"><a href="#/personal/"><i class="icon16 access"></i>Личный кабинет</a></li>
        <?php }?>
        <li id="s-link-settings"><a href="#/settings/"><i class="icon16 settings"></i>Настройки</a></li>

        
        <!-- plugin hook: "backend_sidebar.menu" -->
        <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
        <?php if (is_array($_smarty_tpl->tpl_vars['output']->value)&&isset($_smarty_tpl->tpl_vars['output']->value['menu_li'])){?><?php echo $_smarty_tpl->tpl_vars['output']->value['menu_li'];?>
<?php }?>
        <?php } ?>
    </ul>
    <?php if (!empty($_smarty_tpl->tpl_vars['domain_alias']->value)){?>
    <div class="block align-center hint">
        <?php echo sprintf('Это зеркало сайта <strong>%s</strong>',$_smarty_tpl->tpl_vars['domain_alias']->value);?>

    </div>
    <?php }?>
</div>


<div class="block double-padded">
	<ul class="menu-v with-icons s-links">
		<?php if ($_smarty_tpl->tpl_vars['rights']->value['blocks']){?><li id="s-link-blocks"><a href="#/blocks/"><i class="icon16 zone"></i>Блоки</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rights']->value['files']){?><li id="s-link-files"><a href="#/files/"><i class="icon16 upload"></i>Файл-менеджер</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rights']->value['admin']){?>
            <li><a id="s-link-plugins" href="#/plugins/"><i class="icon16 plugins"></i>Плагины</a></li>
            <li class="s-add-new-site top-padded"><a href="#" class="small"><i class="icon10 add"></i>Новый сайт</a> </li>
        <?php }?>

        
        <!-- plugin hook: "backend_sidebar.system" -->
        <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
        <?php if (is_array($_smarty_tpl->tpl_vars['output']->value)&&isset($_smarty_tpl->tpl_vars['output']->value['system_li'])){?><?php echo $_smarty_tpl->tpl_vars['output']->value['system_li'];?>
<?php }?>
        <?php } ?>
	</ul>
</div>
<?php }} ?>