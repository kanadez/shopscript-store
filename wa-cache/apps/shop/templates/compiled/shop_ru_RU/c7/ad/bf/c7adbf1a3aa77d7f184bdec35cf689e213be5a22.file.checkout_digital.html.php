<?php /* Smarty version Smarty-3.1.14, created on 2018-09-20 17:15:23
         compiled from "/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout_digital.html" */ ?>
<?php /*%%SmartyHeaderCode:7741596105ba3ab7b181205-10504009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7adbf1a3aa77d7f184bdec35cf689e213be5a22' => 
    array (
      0 => '/var/www/www-root/data/www/ftf.metateg.pro/wa-data/public/shop/themes/default/checkout_digital.html',
      1 => 1533661142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7741596105ba3ab7b181205-10504009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkout_steps' => 0,
    'checkout_current_step' => 0,
    'step_id' => 0,
    'current_step_index' => 0,
    '_upcoming_flag' => 0,
    's' => 0,
    'wa' => 0,
    'wa_parent_theme_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba3ab7b3853d9_84498438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba3ab7b3853d9_84498438')) {function content_5ba3ab7b3853d9_84498438($_smarty_tpl) {?><!-- following CSS hides top navigation menu; remove <style>…</style> to unhide -->
<style>
    html,
    body,
    .content,
    main.maincontent { background: #e3e3e3; }
    
    .currency-toggle,
    .followus,
    .appnav,
    .apps,
    .globalfooter,
    #compare-leash,

    header .auth { display: none; }
    
    .float-right { float: right; }
    .container { max-width: 800px; }
</style>

<div class="checkout">

    <?php if (isset($_smarty_tpl->tpl_vars['checkout_steps']->value)){?>
        <?php $_smarty_tpl->tpl_vars['current_step_index'] = new Smarty_variable(array_search($_smarty_tpl->tpl_vars['checkout_current_step']->value,array_keys($_smarty_tpl->tpl_vars['checkout_steps']->value))+1, null, 0);?>
    <!-- checkout step content -->
    <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['step_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['checkout_steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['s']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['s']->iteration=0;
 $_smarty_tpl->tpl_vars['s']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['step_id']->value = $_smarty_tpl->tpl_vars['s']->key;
 $_smarty_tpl->tpl_vars['s']->iteration++;
 $_smarty_tpl->tpl_vars['s']->index++;
 $_smarty_tpl->tpl_vars['s']->first = $_smarty_tpl->tpl_vars['s']->index === 0;
 $_smarty_tpl->tpl_vars['s']->last = $_smarty_tpl->tpl_vars['s']->iteration === $_smarty_tpl->tpl_vars['s']->total;
?>
        <div class="checkout-step step-<?php echo $_smarty_tpl->tpl_vars['step_id']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['current_step_index']->value>0&&$_smarty_tpl->tpl_vars['current_step_index']->value>$_smarty_tpl->tpl_vars['s']->iteration){?>is-done<?php }?>" data-step-index="<?php echo $_smarty_tpl->tpl_vars['s']->iteration;?>
">
            <form class="checkout-form <?php if ($_smarty_tpl->tpl_vars['s']->last){?>last<?php }?>" method="post" action="">
                <h2 class="step-header <?php if (isset($_smarty_tpl->tpl_vars['_upcoming_flag']->value)){?>upcoming<?php }?><?php if ($_smarty_tpl->tpl_vars['step_id']->value==$_smarty_tpl->tpl_vars['checkout_current_step']->value){?><?php $_smarty_tpl->tpl_vars['_upcoming_flag'] = new Smarty_variable(1, null, 0);?><?php }?>"<?php if ($_smarty_tpl->tpl_vars['s']->first){?> style="border-top: none;"<?php }?>>
                    <?php if (!$_smarty_tpl->tpl_vars['s']->first){?>
                        <a href="#" class="hint float-right back"<?php if ($_smarty_tpl->tpl_vars['checkout_current_step']->value!=$_smarty_tpl->tpl_vars['step_id']->value){?> style="display:none"<?php }?>>Назад</a>
                    <?php }?>
                    <a href="#"><span class="gray"><?php echo $_smarty_tpl->tpl_vars['s']->iteration;?>
.</span> <?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</a>
                </h2>

                <?php if ($_smarty_tpl->tpl_vars['s']->first&&$_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>
                    <div class="checkout-step-content auth" <?php if ($_smarty_tpl->tpl_vars['checkout_current_step']->value!=$_smarty_tpl->tpl_vars['step_id']->value){?>style="display:none"<?php }?>>
                        <?php if (!$_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
                            <!-- authorized / not authorized selector -->
                            <ul>
                                <li><label><input name="user_type" type="radio" <?php if (!$_smarty_tpl->tpl_vars['wa']->value->post('wa_auth_login')){?>checked<?php }?> value="0"> Я новый покупатель</label></li>
                                <li><label><input name="user_type" type="radio" <?php if ($_smarty_tpl->tpl_vars['wa']->value->post('wa_auth_login')){?>checked<?php }?> value="1"> Я уже заказывал ранее и у меня есть аккаунт</label></li>
                            </ul>
                            <div id="login-form"<?php if (!$_smarty_tpl->tpl_vars['wa']->value->post('wa_auth_login')){?> style="display:none"<?php }?>>
                                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('without_form'=>true), 0);?>

                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $("#login-form input").attr('disabled', 'disabled');
                                    $("input[name='user_type']").change(function () {
                                        if ($("input[name='user_type']:checked").val() == '1') {
                                            $("#login-form input").removeAttr('disabled');
                                            $(this).closest('div.auth').next(".checkout-step-content").hide();
                                            $("input[type=submit]:last").hide();
                                            $("#login-form").show();
                                        } else {
                                            $("#login-form input").attr('disabled', 'disabled');
                                            $("#login-form").hide();
                                            $(this).closest('div.auth').next(".checkout-step-content").show();
                                            $("input[type=submit]:last").show();
                                        }
                                    });
                                    <?php if ($_smarty_tpl->tpl_vars['checkout_current_step']->value==$_smarty_tpl->tpl_vars['step_id']->value){?>
                                        $("input[name='user_type']").change();
                                    <?php }?>
                                });
                            </script>
                            <div class="clear-both"></div>
                        <?php }else{ ?>
                        <!-- authorized -->
                            <blockquote>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['wa']->value->user()->getPhoto(50);?>
">
                                <p>
                                    <span class="black"><?php echo sprintf("Вы авторизованы как <strong>%s</strong>. Пожалуйста, подтвердите или обновите вашу контактную информацию. Изменения будут автоматически сохранены в вашем профиле. ",$_smarty_tpl->tpl_vars['wa']->value->user('name'));?>
</span>
                                    <br>
                                    <em>Если вы хотите оформить заказ от имени другого пользователя, <a href="?logout">выйдите из сеанса</a> и перейдите к оформлению заказа заново.</em>
                                </p>
                            </blockquote>
                            <div class="clear-both"></div>
                        <?php }?>
                    </div>
                <?php }?>

                <div class="checkout-step-content" style="<?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()&&$_smarty_tpl->tpl_vars['s']->first){?>margin-top: 0px;<?php }?><?php if ($_smarty_tpl->tpl_vars['checkout_current_step']->value!=$_smarty_tpl->tpl_vars['step_id']->value||$_smarty_tpl->tpl_vars['wa']->value->post('wa_auth_login')){?> display:none;<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['checkout_current_step']->value==$_smarty_tpl->tpl_vars['step_id']->value){?>
                        <?php if (in_array($_smarty_tpl->tpl_vars['step_id']->value,array('contactinfo','shipping','payment','confirmation'))){?>
                            <?php echo $_smarty_tpl->getSubTemplate ("checkout_digital.".((string)$_smarty_tpl->tpl_vars['step_id']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['s']->value['content'];?>

                        <?php }?>
                    <?php }else{ ?>
                        <div class="checkout-content" data-step-id="<?php echo $_smarty_tpl->tpl_vars['step_id']->value;?>
"></div>
                    <?php }?>
                    <div class="clear-both"></div>
                    <input type="hidden" name="step" value="<?php echo $_smarty_tpl->tpl_vars['step_id']->value;?>
">
                    <?php if ($_smarty_tpl->tpl_vars['s']->last){?>
                    <div class="float-right">
                        <input type="submit" class="large bold" value="Оформить заказ">
                    </div>
                    <?php }else{ ?>
                    <input type="submit" class="large bold" value="Далее &rarr;">
                    <?php }?>
                    <div class="clear-both"></div>
                </div>
            </form>
        </div>
    <?php } ?>
    <?php }else{ ?>
        <div class="checkout-step">
            <?php echo $_smarty_tpl->getSubTemplate ("checkout_digital.".((string)$_smarty_tpl->tpl_vars['checkout_current_step']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    <?php }?>

</div>

<script>
( function($) {
    $(document).ready( function() {
        $('header .banner h3').text('Оформление заказа').show();

        var $steps = $(".checkout-step");

        function setStepOrnament( $step ) {
            var step_index = $step.data("step-index"),
                done_class = "is-done",
                upcoming_class = "upcoming";

            if (step_index > 0) {
                $steps.each( function(index) {
                    var $step = $(this),
                        $header = $step.find(".step-header");

                    if (index + 1 >= step_index) {
                        $step.removeClass(done_class);

                        if (index + 1 === step_index) {
                            $header.removeClass(upcoming_class);
                        }

                        if (index + 1 > step_index) {
                            $header.addClass(upcoming_class);
                        }

                    } else {
                        $header.removeClass(upcoming_class);
                        $step.addClass(done_class);
                    }
                })
            }
        }

        function checkoutStep(step_id) {
            $.get("<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/checkoutDigital');?>
" + step_id + '/', function (response) {
                var current = $(".checkout-step .checkout-step-content:visible");
                var current_step_id =  current.find(".checkout-content").data('step-id');
                if (current_step_id != step_id) {
                    current.animate( { height: 0 }, 200, function() { $(this).hide(); } );
                    current.parent().find('a.back').hide();
                }
                $(".checkout-step.step-" + step_id + " .checkout-content").replaceWith(response);
                $(".checkout-step.step-" + step_id + " a.back").show();
                if (current_step_id != step_id) {
                    $(".checkout-step.step-" + step_id + " .checkout-step-content").show(0).css({ height: 'auto'});
                }
                if ($(".checkout-step.step-" + step_id + ' .auth').length) {
                    $("input[name='user_type']").change();
                }

                var $step = $(".checkout-step.step-" + step_id);
                setStepOrnament( $step );
            });
        }
        $(".checkout h2 a").click(function () {
            if ($(this).hasClass('hint')) {
                if ($(this).hasClass('back')) {
                    checkoutStep($(this).closest('div').prev().find('.checkout-content').data('step-id'));
                    return false;
                }
                return true;
            }
            if ($(this).closest('h2').hasClass('upcoming')) {
                return false;
            }
            checkoutStep($(this).closest('div').find('.checkout-content').data('step-id'));
            return false;
        });
        $("form.checkout-form").on('submit', function () {
            var f = $(this);
            var step = f.find('.checkout-content').data('step-id');
            if (step == 'payment' || step == 'shipping') {
                if (!f.find('input[name="' + step + '_id"]:checked').not(':disabled').length) {
                    if (!f.find('em.errormsg').length) {
                    $('<em class="errormsg inline">' + (step == 'payment' ? 'Пожалуйста, выберите способ оплаты' :
                            'Пожалуйста, выберите способ доставки') + '</em>').insertAfter(f.find('input:submit:last'));
                    }
                    return false;
                } else {
                    f.find('em.errormsg').remove();
                }
            }
            if (f.hasClass('last') || ($("#login-form").length && !$("#login-form input:submit").attr('disabled'))) {
                $('<span class="loading"> <i class="icon24 loading"></i></span>').insertBefore(f.find('input:submit:last'));
                return true;
            }
            $('<span class="loading"> <i class="icon24 loading"></i></span>').insertAfter(f.find('input:submit:last').attr('disabled', 'disabled'));
            $.post(f.attr('action') || window.location, f.serialize(), function (response) {
                var content = $(response);
                var step_id = content.data('step-id');
                if (!step_id) {
                    step_id = content.filter('.checkout-content').data('step-id');
                }
                var current = $(".checkout-step .checkout-step-content:visible");
                var current_step_id =  current.find(".checkout-content").data('step-id');
                if (current_step_id != step_id) {
                    current.animate({ height: 0}, 200, function() {
                        $(this).hide();
                    });
                    $(".checkout-step.step-" + step_id + " .checkout-step-content").css({ height: 'auto'}).show(200, function () {
                        $(document).scrollTop($(".checkout-step.step-" + step_id).offset().top);
                    });
                    current.parent().find('a.back').hide();
                }
                $(".checkout-step.step-" + step_id + " .checkout-content").replaceWith(content);
                $(".checkout-step.step-" + step_id + " a.back").show();
                $(".checkout-step.step-" + step_id + " input[type=submit]:last").show();
                if (current_step_id != step_id) {
                    $(".checkout-step.step-" + step_id + " .checkout-step-content").show(0).css({ height: 'auto'});
                }

                var $step = $(".checkout-step.step-" + step_id);
                setStepOrnament( $step );

            }).always(function () {
                f.find('span.loading').remove();
                f.find('input:submit:last').removeAttr('disabled');
            });
            return false;
        });
    });
})(jQuery);
</script><?php }} ?>