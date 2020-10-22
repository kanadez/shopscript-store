<?php /* Smarty version Smarty-3.1.14, created on 2018-09-20 18:52:39
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/cart.html" */ ?>
<?php /*%%SmartyHeaderCode:3072104755ba3c247ca2c89-25115830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95b5ddf3871d96c5481fb341dd7ff3731f1ce833' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/cart.html',
      1 => 1537115690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3072104755ba3c247ca2c89-25115830',
  'function' => 
  array (
    'translateCurrency' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa_theme_url' => 0,
    'currency' => 0,
    'currency_translates' => 0,
    'cart' => 0,
    'regular_product_type' => 0,
    'item' => 0,
    'wa' => 0,
    'shop_currency' => 0,
    'product_type' => 0,
    'digital_product_type' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3c247e8af85_77585407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3c247e8af85_77585407')) {function content_5ba3c247e8af85_77585407($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/cart.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/cart.js"></script>

<?php if (!function_exists('smarty_template_function_translateCurrency')) {
    function smarty_template_function_translateCurrency($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['translateCurrency']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['currency_translates'] = new Smarty_variable(array("EUR"=>"евро","RUB"=>"руб.","USD"=>"дол."), null, 0);?>
    <?php echo $_smarty_tpl->tpl_vars['currency_translates']->value[$_smarty_tpl->tpl_vars['currency']->value];?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<section class="cart">
    <div class="title">Корзина</div>
    <?php if (count($_smarty_tpl->tpl_vars['cart']->value['items'])){?>
    <div class="progress_bar">
        <div id="progress_cart_step" class="step active">
            <div>1</div>
            <div style="margin-left:-16px">Корзина</div>
        </div>
        <div class="space"></div>
        <div id="progress_delivery_step" class="step">
            <div>2</div>
            <div style="margin-left:-21px">Доставка</div>
        </div>
        <div class="space"></div>
        <div id="progress_checkout_step" class="step">
            <div>3</div>
            <div style="margin-left:-11px">Оплата</div>
        </div>
        <div class="space"></div>
        <div id="progress_finish_step" class="step">
            <div>4</div>
            <div style="margin-left:-11px">Готово</div>
        </div>
    </div>
    <?php }?>
    <div class="showcase">
        <?php if (count($_smarty_tpl->tpl_vars['cart']->value['items'])){?>
        <?php $_smarty_tpl->tpl_vars['digital_product_type'] = new Smarty_variable(1, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['regular_product_type'] = new Smarty_variable(2, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['product_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['regular_product_type']->value, null, 0);?> 
        <table class="purchased">
            <thead>
                <tr>
                    <th>Наименование</th>
                    <th class="quantity">Количество</th>
                    <th width="13%">Цена</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr id="item_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_row">
                    <?php $_smarty_tpl->tpl_vars['product_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['product']['type_id'], null, 0);?>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['item']->value['product']);?>
" target="_blank" class="photo"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['item']->value['product'],'150x150',array('default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy48.png"));?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['item']->value['product']);?>
" target="_blank" class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </td>
                    <td class="quantity">
                        <a id="item_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_count_up" class="count_up" href="javascript:void(0)" onclick="cart.upItemQty(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)">
                            <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.342131 10C0.296513 10 0.252525 9.99185 0.210166 9.97556C0.167807 9.95927 0.130336 9.93483 0.0977517 9.90225C0.0325836 9.83708 0 9.75888 0 9.66764C0 9.57641 0.0325836 9.49821 0.0977517 9.43304L4.565 4.96579L0.166178 0.576735C0.10101 0.511567 0.0684262 0.431737 0.0684262 0.337243C0.0684262 0.24275 0.10101 0.16292 0.166178 0.0977517C0.231346 0.0325836 0.311176 0 0.40567 0C0.500163 0 0.579993 0.0325836 0.645161 0.0977517L5.26882 4.73118C5.33399 4.79635 5.36657 4.87455 5.36657 4.96579C5.36657 5.05702 5.33399 5.13522 5.26882 5.20039L0.576735 9.90225C0.544151 9.93483 0.50668 9.95927 0.464321 9.97556C0.421961 9.99185 0.381232 10 0.342131 10Z" transform="translate(10.6985 5.6958) scale(-1 1) rotate(-90)" fill="#050505"/>
                            </svg>
                        </a>
                        <div id="item_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_count" class="count"><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</div>
                        
                        <a id="item_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_count_down" style="<?php if ($_smarty_tpl->tpl_vars['item']->value['quantity']==1){?>display:none<?php }?>" class="count_down" href="javascript:void(0)" onclick="cart.downItemQty(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)">
                            <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.342131 10C0.296513 10 0.252525 9.99185 0.210166 9.97556C0.167807 9.95927 0.130336 9.93483 0.0977517 9.90225C0.0325836 9.83708 0 9.75888 0 9.66764C0 9.57641 0.0325836 9.49821 0.0977517 9.43304L4.565 4.96579L0.166178 0.576735C0.10101 0.511567 0.0684262 0.431737 0.0684262 0.337243C0.0684262 0.24275 0.10101 0.16292 0.166178 0.0977517C0.231346 0.0325836 0.311176 0 0.40567 0C0.500163 0 0.579993 0.0325836 0.645161 0.0977517L5.26882 4.73118C5.33399 4.79635 5.36657 4.87455 5.36657 4.96579C5.36657 5.05702 5.33399 5.13522 5.26882 5.20039L0.576735 9.90225C0.544151 9.93483 0.50668 9.95927 0.464321 9.97556C0.421961 9.99185 0.381232 10 0.342131 10Z" transform="translate(10.6985 0.32959) rotate(90)" fill="#050505"/>
                            </svg>
                        </a>
                    </td>
                    <td class="padding">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['compare_price']>0){?>
                        <s id="item_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_discount"><?php echo $_smarty_tpl->tpl_vars['item']->value['compare_price'];?>
</s>
                        <?php }?>
                        <b id="item_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_price"><?php echo $_smarty_tpl->tpl_vars['item']->value['full_price'];?>
</b> <?php smarty_template_function_translateCurrency($_smarty_tpl,array('currency'=>$_smarty_tpl->tpl_vars['item']->value['currency']));?>

                    </td>
                    <td class="padding">
                        <a href="javascript:void(0)" onclick="cart.delete(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.50725 3.1495L5.83625 4.4785C6.21125 4.8535 6.21125 5.4615 5.83625 5.8365C5.46125 6.2115 4.85325 6.2115 4.47925 5.8365L3.14925 4.5075L1.70725 5.9495C1.31625 6.3405 0.68325 6.3405 0.29325 5.9495C-0.09775 5.5595 -0.09775 4.9255 0.29325 4.5355L1.73525 3.0935L0.40625 1.7635C0.03125 1.3885 0.03125 0.7805 0.40625 0.4065C0.78125 0.0315 1.38825 0.0315 1.76325 0.4065L3.09325 1.7355L4.53525 0.2925C4.92625 -0.0975 5.55925 -0.0975 5.94925 0.2925C6.34025 0.6835 6.34025 1.3165 5.94925 1.7075L4.50725 3.1495Z" transform="translate(4.99854 5.00342)" fill="#868686"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.53333 13.0667C10.1416 13.0667 13.0667 10.1416 13.0667 6.53333C13.0667 2.92507 10.1416 0 6.53333 0C2.92507 0 0 2.92507 0 6.53333C0 10.1416 2.92507 13.0667 6.53333 13.0667Z" transform="translate(1.46655 1.4668)" stroke="#9C9C9C"/>
                            </svg>

                        </a>
                    </td>
                </tr>
                <?php } ?>                
            </tbody>
        </table>
        <div class="checkout-panel">
            <div>Итого</div>
            <div class="price"><?php echo $_smarty_tpl->tpl_vars['cart']->value['total'];?>
</div>
            <?php $_smarty_tpl->tpl_vars['shop_currency'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->primaryCurrency(), null, 0);?>
            <div class="currency"><?php smarty_template_function_translateCurrency($_smarty_tpl,array('currency'=>$_smarty_tpl->tpl_vars['shop_currency']->value));?>
</div>
            <!--<a id="checkout" href="<?php if ($_smarty_tpl->tpl_vars['product_type']->value==2){?>/shop/checkout<?php }else{ ?>/shop/checkout_digital<?php }?>" class="button_solid">Далее</a>-->
            <a 
                id="checkout" 
                href="javascript:void(0)" 
                onclick="<?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>order.checkoutIfAuth()<?php }else{ ?>order.openAuthModal()<?php }?>" 
                class="button_solid">
                Далее
            </a>
            <div id="checkout_loader" class="outer_loader order_process_loader"></div>            
        </div>
        <?php }else{ ?>
        <div class='empty'>
            <span>К сожалению, корзина пока пуста :(</span>
            <p></p>
            <a href="/shop" class="button_solid">В каталог</a>
        </div>
        <?php }?>
    </div>
    <div class="delivery">
        <div class="title">Доставка</div>
        <form class="options checkout-form" data-step-id="shipping" action="/shop/checkout/">
            
        </form>
    </div>
    <div class="confirmation">
        <div class="title">Оплата</div>
        <form class="options checkout-form" data-step-id="confirmation" action="/shop/checkout/">
            
        </form>
    </div>
    <div class="payment">
        <div class="title">Оплата</div>
        <form class="options checkout-form" data-step-id="confirmation" action="/shop/checkout/">
            
        </form>
    </div>
    <div class="social_panel">
        <a href="" class="facebook"></a>
        <a href="" class="instagram"></a>
        <a href="" class="twitter"></a>
    </div>
</section>

<div id="auth_modal" class="modal big">
    <div class="left">
        <div class="title">Авторизация</div>
        <div class="body">
            <div class="form-group">
                <label class="container_radio">Я новый покупатель
                    <input 
                        name="customer_type" 
                        value="new_customer" 
                        class="customer_type" 
                        checked type="radio" 
                        onchange="order.switchCustomerType()"
                    />
                    <span class="checkmark"></span>
                </label>
                <label style="margin-left:30px" class="container_radio">У меня есть аккаунт
                    <input 
                        name="customer_type" 
                        value="existing_customer" 
                        class="customer_type" 
                        type="radio" 
                        onchange="order.switchCustomerType()" 
                    />
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="form-group">
                <div class="hr"></div>
            </div>

            <form id="new_customer_form" class="checkout-form" data-step-id="contactinfo" action="/shop/checkout/"> <!--.serialize при субмите-->
                <div class="form-group regular">
                    <input class="firstname" maxlength="255" name="customer[firstname]" placeholder="Имя" />
                </div>
                <div class="form-group regular">
                    <input class="lastname" maxlength="255" name="customer[lastname]" placeholder="Фамилия" />
                </div>
                <div class="form-group regular">
                    <input class="phone" maxlength="50" name="customer[phone]" placeholder="Телефон" />
                </div>
                <div class="form-group">
                    <input class="email" maxlength="255" name="customer[email]" placeholder="E-Mail" />
                </div>
                <div class="form-group regular">
                    <label class="subtitle">Адрес</label>
                </div>
                <div class="form-group region custom-select regular">
                    <select class="region" name="customer[address.shipping][region]" data-country="rus">
                        <option value="" selected="">Выберите регион</option>
                        <option value="01">Адыгея республика</option>
                        <option value="04">Алтай республика</option>
                        <option value="22">Алтайский край</option>
                        <option value="28">Амурская область</option>
                        <option value="29">Архангельская область</option>
                        <option value="30">Астраханская область</option>
                        <option value="02">Башкортостан республика</option>
                        <option value="31">Белгородская область</option>
                        <option value="32">Брянская область</option>
                        <option value="03">Бурятия республика</option>
                        <option value="33">Владимирская область</option>
                        <option value="34">Волгоградская область</option>
                        <option value="35">Вологодская область</option>
                        <option value="36">Воронежская область</option>
                        <option value="05">Дагестан республика</option>
                        <option value="79">Еврейская автономная область</option>
                        <option value="75">Забайкальский край</option>
                        <option value="37">Ивановская область</option>
                        <option value="06">Ингушетия республика</option>
                        <option value="38">Иркутская область</option>
                        <option value="07">Кабардино-Балкарская республика</option>
                        <option value="39">Калининградская область</option>
                        <option value="08">Калмыкия республика</option>
                        <option value="40">Калужская область</option>
                        <option value="41">Камчатский край</option>
                        <option value="09">Карачаево-Черкесская республика</option>
                        <option value="10">Карелия республика</option>
                        <option value="42">Кемеровская область</option>
                        <option value="43">Кировская область</option>
                        <option value="11">Коми республика</option>
                        <option value="44">Костромская область</option>
                        <option value="23">Краснодарский край</option>
                        <option value="24">Красноярский край</option>
                        <option value="91">Крым республика</option>
                        <option value="45">Курганская область</option>
                        <option value="46">Курская область</option>
                        <option value="47">Ленинградская область</option>
                        <option value="48">Липецкая область</option>
                        <option value="49">Магаданская область</option>
                        <option value="12">Марий Эл республика</option>
                        <option value="13">Мордовия республика</option>
                        <option value="77">Москва</option>
                        <option value="50">Московская область</option>
                        <option value="51">Мурманская область</option>
                        <option value="83">Ненецкий автономный округ</option>
                        <option value="52">Нижегородская область</option>
                        <option value="53">Новгородская область</option>
                        <option value="54">Новосибирская область</option>
                        <option value="55">Омская область</option>
                        <option value="56">Оренбургская область</option>
                        <option value="57">Орловская область</option>
                        <option value="58">Пензенская область</option>
                        <option value="59">Пермский край</option>
                        <option value="25">Приморский край</option>
                        <option value="60">Псковская область</option>
                        <option value="61">Ростовская область</option>
                        <option value="62">Рязанская область</option>
                        <option value="63">Самарская область</option>
                        <option value="78">Санкт-Петербург</option>
                        <option value="64">Саратовская область</option>
                        <option value="14">Саха (Якутия) республика</option>
                        <option value="65">Сахалинская область</option>
                        <option value="66">Свердловская область</option>
                        <option value="92">Севастополь</option>
                        <option value="15">Северная Осетия-Алания</option>
                        <option value="67">Смоленская область</option>
                        <option value="26">Ставропольский край</option>
                        <option value="68">Тамбовская область</option>
                        <option value="16">Татарстан республика</option>
                        <option value="69">Тверская область</option>
                        <option value="70">Томская область</option>
                        <option value="71">Тульская область</option>
                        <option value="17">Тыва республика</option>
                        <option value="72">Тюменская область</option>
                        <option value="18">Удмуртская республика</option>
                        <option value="73">Ульяновская область</option>
                        <option value="27">Хабаровский край</option>
                        <option value="19">Хакасия республика</option>
                        <option value="86">Ханты-Мансийский-Югра автономный округ</option>
                        <option value="74">Челябинская область</option>
                        <option value="20">Чеченская республика</option>
                        <option value="21">Чувашская республика</option>
                        <option value="87">Чукотский автономный округ</option>
                        <option value="89">Ямало-Ненецкий автономный округ</option>
                        <option value="76">Ярославская область</option>
                </select>
                </div>
                <div class="form-group regular">
                    <input class="city" maxlength="255" name="customer[address.shipping][city]" placeholder="Город" />
                </div>
                <div class="form-group regular">
                    <input class="street" maxlength="255" name="customer[address.shipping][street]" placeholder="Улица, дом, квартира" />
                </div>
                <div class="form-group">
                    <label class="container">Зарегистрироваться как постоянный покупатель
                        <input id="create_new_customer_checkbox" onchange="order.toggleNewCustomerRegFields()" type="checkbox" name="create_user" value="1">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div style="display:none" class="form-group login">
                    <input name="login" maxlength="255" placeholder="Логин" />
                </div>
                <div style="display:none" class="form-group password">
                    <input name="password" maxlength="50" type="password" placeholder="Пароль" />
                </div>
                <input type="hidden" name="user_type" value="0">
                <input type="hidden" name="step" value="contactinfo">
                <input type="submit" class="button_solid" value="Далее" />                
                <span id="signup_error" class="submit_error"></span>
                <div id="auth_loader" class="outer_loader order_process_loader"></div>
            </form>
            
            <form id="existing_customer_form" style="display:none" class="checkout-form" data-step-id="contactinfo" action="/shop/checkout/"> <!--.serialize при субмите-->               
                <div class="login_panel">
                    <div class="form-group">
                        <input name="login" maxlength="255" class="login" placeholder="Логин" />
                    </div>
                    <div class="form-group">
                        <input name="password" maxlength="50" class="password" type="password" placeholder="Пароль" />
                    </div>
                    <div class="form-group">
                        <span id="auth_error" class="submit_error"></span>
                        <label class="container rememberme">Запомнить меня
                            <input type="checkbox" name="remember" value="1" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <input type="hidden" name="user_type" value="1">
                        <input type="hidden" name="wa_auth_login" value="1">
                        <input type="hidden" name="step" value="contactinfo">
                        <input type="submit" class="action button_solid" value="Войти" />
                        <div id="login_loader" class="outer_loader_transparent order_process_loader"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
(function($){
    $(document).ready(function(){
        $("form.checkout-form").on('submit', function(){
            var f = $(this);
            var step = f.data('step-id');
            
            // запустить лоадер на кнопке субмита в любом случае
            
            if (order.isNewCustomer()){
                switch (step){
                    case "contactinfo": 
                        showOuterLoader('#auth_loader');

                        if (
                                order.isNewUserDataNotOK() ||
                                order.isCreateUserDataNotOK()
                        ){
                            hideOuterLoader('#auth_loader');

                            return false;
                        }
                    break;
                    case "shipping":
                        showOuterLoader('#shipping_loader');

                        if (order.isSecondShippingDataNotOK()){
                            hideOuterLoader('#shipping_loader');

                            return false;
                        }

                        if (!f.find('input[name="shipping_id"]:checked').not(':disabled').length){ // shipping not selected
                            hideOuterLoader('#shipping_loader');
                            modal.openError("Пожалуйста, выберите способ доставки");

                            return false;
                        }
                    break;
                    case "confirmation":
                        showOuterLoader('#confirmation_loader');
                    break;
                }
            }
            else{
                if (order.isCustomerAuthorized()){
                    switch (step){
                        case "shipping":
                            showOuterLoader('#shipping_loader');

                            if (order.isSecondShippingDataNotOK()){
                                hideOuterLoader('#shipping_loader');

                                return false;
                            }

                            if (!f.find('input[name="shipping_id"]:checked').not(':disabled').length){ // shipping not selected
                                hideOuterLoader('#shipping_loader');
                                modal.openError("Пожалуйста, выберите способ доставки");

                                return false;
                            }
                        break;
                        case "confirmation":
                            showOuterLoader('#confirmation_loader');
                        break;
                    }
                }
                else{
                    if (order.isLoginUserDataNotOK()){
                        return false;
                    }

                    showOuterLoader('#login_loader');
                }
            }
            
            $.post(order.getPostAction(), f.serialize(), function(response){
                var content = $(response);
                var step_id = content.data('step-id');
                var is_checkout_result = content.filter(".checkout-result").length == 1;
                
                var error = content.find("p.error");
                var login_error = content.find("div.error");
                var signup_error = content.find(".errormsg");
                
                if (error.length != 0 || signup_error.length != 0 || login_error.length != 0){
                    hideOuterLoader('.order_process_loader');
                    var error_text = error.text() || signup_error.text() || login_error.text();
                    modal.openError(error_text);
                    
                    return false;
                }
                
                if (order.isNewCustomer()){
                    if (is_checkout_result){
                        $('.payment form').html(response);
                        order.closeConfirmationScreen();
                        order.openPaymentScreen();
                        hideOuterLoader('#confirmation_loader');
                    }
                    else{
                        switch (step_id){
                            case "shipping":
                                hideOuterLoader('#auth_loader');
                                $('.delivery form').html(response);
                                modal.close("#auth_modal");
                                order.initShippingDOM();
                                order.openDeliveryScreen();
                            break;
                            case "confirmation":
                                $('.confirmation form').html(response);
                                
                                if (order.isDigitalProductsType()){
                                    hideOuterLoader('#auth_loader');
                                    modal.close("#auth_modal");
                                    order.openConfirmationScreen();
                                }
                                else{
                                    hideOuterLoader('#shipping_loader');
                                    order.closeDeliveryScreen();
                                    order.openConfirmationScreen();
                                }
                            break;
                        }
                    }
                }
                else if (!order.isNewCustomer()){
                    if (order.isCustomerAuthorized()){
                        if (is_checkout_result){
                            $('.payment form').html(response);
                            order.closeConfirmationScreen();
                            order.openPaymentScreen();
                            hideOuterLoader('#confirmation_loader');
                        }
                        else{
                            switch (step_id){
                                case "shipping":
                                    hideOuterLoader('#auth_loader');
                                    $('.delivery form').html(response);
                                    modal.close("#auth_modal");
                                    order.initShippingDOM();
                                    order.openDeliveryScreen();
                                break;
                                case "confirmation":
                                    hideOuterLoader('#shipping_loader');
                                    $('.confirmation form').html(response);
                                    order.closeDeliveryScreen();
                                    order.openConfirmationScreen();
                                break;
                            }
                        }
                    }
                    else{
                        var auth_error = content.find(".checkout-result.error");

                        if (auth_error.length == 0){
                            order.customerAuthorized();
                            $('#auth_error').hide().text("");
                            order.checkoutIfAuth();
                        }
                        else{
                            hideOuterLoader('#login_loader');
                            $('#auth_error').show().text(auth_error.text());
                        }
                    }
                }
            });
            
            return false;
        });
    });
})(jQuery);
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/order.js"></script>

<script>
    <?php if ($_smarty_tpl->tpl_vars['product_type']->value==$_smarty_tpl->tpl_vars['regular_product_type']->value){?>
    order.setProductsType(<?php echo $_smarty_tpl->tpl_vars['regular_product_type']->value;?>
);
    <?php }else{ ?>
    order.setProductsType(<?php echo $_smarty_tpl->tpl_vars['digital_product_type']->value;?>
);
    <?php }?>
</script><?php }} ?>