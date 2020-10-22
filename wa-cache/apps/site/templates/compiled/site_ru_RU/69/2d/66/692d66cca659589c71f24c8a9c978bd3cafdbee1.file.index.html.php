<?php /* Smarty version Smarty-3.1.14, created on 2018-09-22 16:16:53
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/site/themes/default/index.html" */ ?>
<?php /*%%SmartyHeaderCode:74423505ba3afa0911677-78680251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692d66cca659589c71f24c8a9c978bd3cafdbee1' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/site/themes/default/index.html',
      1 => 1537622189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74423505ba3afa0911677-78680251',
  'function' => 
  array (
    'active_or_not' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3afa0b37aa5_08594305',
  'variables' => 
  array (
    'wa' => 0,
    'url' => 0,
    'exploded' => 0,
    'current_url' => 0,
    'e' => 0,
    'wa_active_theme_path' => 0,
    'wa_theme_url' => 0,
    'cart_count' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3afa0b37aa5_08594305')) {function content_5ba3afa0b37aa5_08594305($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_active_or_not')) {
    function smarty_template_function_active_or_not($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['active_or_not']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['current_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->currentUrl(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['exploded'] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['url']->value), null, 0);?>
    
    <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['exploded']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
        <?php if (strpos($_smarty_tpl->tpl_vars['current_url']->value,$_smarty_tpl->tpl_vars['e']->value)!=false){?>
            <?php echo 'class="active"';?>

        <?php }?>
    <?php } ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Переключение IE в последнию версию, на случай если в настройках пользователя стоит меньшая -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Адаптирование страницы для мобильных устройств -->
    <meta name="viewport" content="width=1024">

    <!-- Запрет распознования номера телефона -->
    <meta name="format-detection" content="telephone=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

    <!-- Заголовок страницы -->
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->title(), ENT_QUOTES, 'UTF-8', true);?>
</title>

    <!-- Данное значение часто используют(использовали) поисковые системы -->
    <meta name="Keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('keywords'), ENT_QUOTES, 'UTF-8', true);?>
" />
    <meta name="Description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('description'), ENT_QUOTES, 'UTF-8', true);?>
" />

    <!-- Традиционная иконка сайта, размер 16x16, прозрачность поддерживается. Рекомендуемый формат: .ico или .png -->
    <link rel="shortcut icon" href="favicon.ico">

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <!-- Обучение старых версий IE тегам html5 -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="main">
        <div class="content">
            <!-- Шапка -->
            <div class="header_abs">
                <header class="header_lk">
                    <div class="top_line">
                        <div class="left firstscreencopy">
                            <div class="sector_menu left">
                                <div class="bng_close"></div>
                                <div class="burger menu-trigger">
                                    <a href="javascript:void(0)" class="mob_menu_link"></a>
                                </div>
                            </div>
                            <a href="/" class="asset2">
                                <img class="shape13" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 13@2x.png">
                                <img class="shape14" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 14@2x.png">
                                <img class="shape15" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/catalog-shape 2@2x.png">
                                <img class="shape16" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 16@2x.png">
                                <img class="shape17" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 4@2x.png">
                                <img class="shape18" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 18@2x.png">
                                <img class="shape19" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 6@2x.png">
                                <img class="shape20" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 20@2x.png">
                                <img class="shape21" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 8@2x.png">
                                <img class="shape22" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 22@2x.png">
                                <img class="shape23" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 23@2x.png">
                                <img class="shape24" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-2-shape 11@2x.png">
                                <img class="shape25" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 25@2x.png">
                                <img class="shape26" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/catalog-shape 13@2x.png">
                                <img class="shape27" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 14@2x.png">
                                <img class="shape28" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/catalog-shape 15@2x.png">
                                <img class="shape29" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 29@2x.png">
                                <img class="shape30" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 30@2x.png">
                                <img class="shape31" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 18@2x.png">
                                <img class="shape32" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 32@2x.png">
                                <img class="shape33" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 20@2x.png">
                                <img class="shape34" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-2-shape 21@2x.png">
                                <img class="shape35" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 22@2x.png">
                                <img class="shape36" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/catalog-shape 23@2x.png">
                                <img class="shape37" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 37@2x.png">
                                <img class="shape38" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/catalog-shape 25@2x.png">
                                <img class="shape39" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 39@2x.png">
                                <img class="shape40" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-2-shape 27@2x.png">
                                <img class="shape41" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 41@2x.png">
                                <img class="shape42" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/catalog-shape 29@2x.png">
                                <img class="shape43" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 30@2x.png">
                                <img class="shape44" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 44@2x.png">
                                <img class="shape45" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 46@2x.png">
                                <img class="shape46" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 46@2x.png">
                                <img class="shape47" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 49@2x.png">
                                <img class="shape48" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/catalog-shape 37@2x.png">
                                <img class="shape49" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 49@2x.png">
                                <img class="shape50" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/catalog-shape 37@2x.png">
                                <img class="shape51" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 51@2x.png">
                                <img class="shape52" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-2-shape 39@2x.png">
                                <img class="shape53" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 53@2x.png">
                                <img class="shape54" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 41@2x.png">
                                <img class="shape55" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-2-shape 42@2x.png">
                                <img class="shape56" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 56@2x.png">
                                <img class="shape57" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-2-shape 44@2x.png">
                                <img class="shape58" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 58@2x.png">
                                <img class="shape59" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/catalog-shape 46@2x.png">
                                <img class="shape60" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 60@2x.png">
                                <img class="shape61" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-2-shape 48@2x.png">
                                <img class="shape62" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 62@2x.png">
                                <img class="shape63" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-2-shape 50@2x.png">
                                <img class="shape64" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 51@2x.png">
                                <img class="shape65" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 65@2x.png">
                                <img class="shape66" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 53@2x.png">
                                <img class="shape67" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/catalog-shape 54@2x.png">
                                <img class="shape68" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 68@2x.png">
                                <img class="shape69" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-2-shape 56@2x.png">
                                <img class="shape70" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 70@2x.png">
                                <img class="shape71" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/catalog-shape 58@2x.png">
                                <img class="shape72" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 72@2x.png">
                                <img class="shape73" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-2-shape 60@2x.png">
                                <img class="shape74" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 61@2x.png">
                                <img class="shape75" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 75@2x.png">
                                <img class="shape76" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 76@2x.png">
                                <img class="shape77" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 77@2x.png">
                                <img class="shape78" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 65@2x.png">
                                <img class="shape79" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 79@2x.png">
                                <img class="shape80" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 67@2x.png">
                                <img class="shape81" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 81@2x.png">
                                <img class="shape82" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 69@2x.png">
                                <img class="shape83" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 83@2x.png">
                                <img class="shape84" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 84@2x.png">
                                <img class="shape85" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-2-shape 72@2x.png">
                                <img class="shape86" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 86@2x.png">
                                <img class="shape87" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-2-shape 74@2x.png">
                                <img class="shape88" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-copy-shape 88@2x.png">
                                <img class="shape89" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/catalog-shape 76@2x.png">
                                <img class="shape90" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 77@2x.png">
                                <img class="shape91" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/first-screen-shape 91@2x.png">
                                <img class="shape92" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
images/logo/pixel-copy-shape 79@2x.png">
                            </a>
                            <div class="top_menu leftside">
                                <a href="/shop" <?php smarty_template_function_active_or_not($_smarty_tpl,array('url'=>"category"));?>
>Каталог</a>  
                                <a href="/shop/skidki" <?php smarty_template_function_active_or_not($_smarty_tpl,array('url'=>"skidki|discounts"));?>
>Скидки</a>  
                                <a href="/oplata-i-dostavka" <?php smarty_template_function_active_or_not($_smarty_tpl,array('url'=>"oplata-i-dostavka"));?>
>Оплата и доставка</a>
                                <!--<a href="#" class="button">Индивидуальный заказ</a>-->
                            </div>
                        </div>
                        <div class="right firstscreencopy">
                            <div class="profile left">
                                <div class="mini_modal" id="modal_logon">
                                    <a href="/">Выход</a>
                                </div>
                            </div>
                            <div class="cart left top_menu">
                                <?php $_smarty_tpl->tpl_vars['cart_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->cart->count(), null, 0);?>
                                <a href="/shop/cart" <?php smarty_template_function_active_or_not($_smarty_tpl,array('url'=>"cart"));?>
>Корзина (<?php echo $_smarty_tpl->tpl_vars['cart_count']->value;?>
)</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </header>
                <!-- End Шапка -->
            </div>

            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

        <!-- Подвал -->
        <footer>
            <a href="tel:+70000000000" class="contact">+7 (000) 000-00-00</a>
        </footer>
        <!-- End Подвал -->
    </div>
    
    <main>
            <div id="content-2" class="content content--switch">
                    <h2 class="content__title">Помощь</h2>
                    <p class="content__text">Synchronising customer experience and possibly increase viewability. Driving bleeding edge with the aim to make users into advocates. Generating below the line so that as an end result, we increase viewability. Executing thought leadership and try to improve overall outcomes. Growing below the fold so that we create actionable insights. Considering responsive websites yet make users into advocates.</p>
            </div>
            <div id="content-3" class="content content--switch">
                    <h2 class="content__title">Доставка и оплата</h2>
                    <p class="content__text">Informing vertical integration while remembering to funnel users. Take thought leadership with the possibility to surprise and delight. Target analytics to in turn infiltrate new markets. Demonstrate audience segments so that as an end result, we think outside the box. Create analytics in order to make the logo bigger.</p>
            </div>
            <div id="content-4" class="content content--switch">
                    <h2 class="content__title">Индивидуальный заказ</h2>
                    <p class="content__text">Utilising growth hacking in order to get buy in. Repurposing stakeholder management while remembering to re-target key demographics. Grow vertical integration to, consequently, create synergy. Synchronising custom solutions with the aim to gain traction. Amplifying branding to, consequently, re-target key demographics.</p>
            </div>
            <div id="content-5" class="content content--switch">
                    <h2 class="content__title">Скидка</h2>
                    <p class="content__text">Leverage outside the box thinking to in turn re-target key demographics. Build empathy maps with the possibility to re-target key demographics. Informing key demographics yet make users into advocates. Leveraging customer journeys and above all, maximise share of voice. Amplifying awareness with a goal to re-target key demographics.</p>
            </div>
            <div id="content-6" class="content content--switch">
                    <h2 class="content__title">Каталог</h2>
                    <p class="content__text">Amplifying below the fold in order to think outside the box. Leveraging innovation and above all, build ROI. Synchronise responsive websites but disrupt the balance. Synchronise innovation to, consequently, funnel users. Create above the fold in order to be on brand. Amplify awareness with a goal to infiltrate new markets.</p>
            </div>
            <nav class="grim">
                    <div class="grim__item">
                            <div class="grim__item-bg grim__item-bg--1"></div>
                    </div>
                    <div class="grim__item">
                            <div class="grim__item-bg grim__item-bg--2"></div>
                    </div>
                    <div class="grim__item">
                            <div class="grim__item-bg grim__item-bg--3"></div>
                            <div class="grim__item-content">
                                    <div class="grim__item-inner">
                                            <button class="menu-trigger menu-trigger--close">- Выход</button>
                                    </div>
                            </div>
                    </div>
                    <div class="grim__item">
                            <div class="grim__item-bg grim__item-bg--4"></div>
                    </div>
                    <div class="grim__item">
                            <div class="grim__item-bg grim__item-bg--5"></div>
                            <a href="#" class="grim__link grim__item-content">
                                    <div class="grim__item-inner">
                                            <h3 class="grim__item-title">Контакты</h3>
                                    </div>
                            </a>
                    </div>
                    <div class="grim__item">
                            <div class="grim__item-bg grim__item-bg--6"></div>
                            <a href="#" class="grim__link grim__item-content">
                                    <div class="grim__item-inner">
                                            <h3 class="grim__item-title">Помощь</h3>
                                            <span class="grim__item-desc"></span>
                                    </div>
                            </a>
                    </div>
                    <div class="grim__item">
                            <div class="grim__item-bg grim__item-bg--7"></div>
                            <a href="/oplata-i-dostavka" class="grim__link grim__item-content">
                                    <div class="grim__item-inner">
                                            <h3 class="grim__item-title">Доставка и оплата</h3>
                                            <span class="grim__item-desc"></span>
                                    </div>
                            </a>
                    </div>
                    <div class="grim__item">
                            <div class="grim__item-bg grim__item-bg--8"></div>
                            <a href="/shop/skidki" class="grim__link grim__item-content">
                                    <div class="grim__item-inner">
                                            <h3 class="grim__item-title">Скидка</h3>
                                            <span class="grim__item-desc"></span>
                                    </div>
                            </a>
                    </div>
                    <div class="grim__item">
                            <div class="grim__item-bg grim__item-bg--9"></div>
                            <a href="#" class="grim__link grim__item-content">
                                    <div class="grim__item-inner">
                                            <h3 class="grim__item-title">Индивидуальный заказ</h3>
                                            <span class="grim__item-desc"></span>
                                    </div>
                            </a>
                    </div>
                    <div class="grim__item">
                            <div class="grim__item-bg grim__item-bg--10" data-duration="1000" data-easing="easeOutQuint"></div>
                            <a href="/shop" class="grim__link grim__item-content">
                                    <div class="grim__item-inner">
                                            <h3 class="grim__item-title">Каталог</h3>
                                            <span class="grim__item-desc"></span>
                                    </div>
                            </a>
                    </div>
            </nav>
    </main>

    <div class="modal_advice">
            <div class="info">
                    <div class="tablet"></div>
                    <div class="title">
                            Для удобства, пожалуйста, поверните свой девайс в горизонтальное положение
                    </div>
                    <div class="close">
                            <a href="#">ОК</a>
                    </div>
                    <div class="not_show">
                            <a href="#">больше не показывать эту подсказку</a>
                    </div>
            </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html><?php }} ?>