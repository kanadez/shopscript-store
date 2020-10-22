/**
 *
 */
(function ($) {
    $.installer_settings = {
        options: {
            url: '?module=settings&action=clearCache',
            loading: '<i class="icon16 loading"></i>',
            container: '#installer-cache-state'
        },
        container: null,
        init: function (options) {
            this.container = $(this.options.container);
            var self = this;
            $('input[name="clear_cache"]').click(function (eventObject) {
                return self.clear_cache.apply(self, [this, eventObject]);
            });
            var $templates = $('.i-image-select');
            var $input = $('input[name="auth_form_background_thumb"]');
            var $checkbox = $('input[name="auth_form_background_stretch"]');

            $templates.on('click', 'li > a', function () {
                $templates.find('.selected').removeClass('selected');
                var $this = $(this);
                $this.parents('li').addClass('selected');
                var value = $this.data('value');
                $input.val(value);
                if (value.match(/^stock:/)) {
                    $checkbox.attr('disabled', true);
                } else {
                    $checkbox.attr('disabled', null);
                }

                return false;
            });

            //SHOW DKIM
            var $dkim_wrapper = $(".js-dkim-wrapper"),
                $dkim_checkbox = $('.js-dkim-checkbox'),
                $dkim_private_key = $('.js-sender-dkim-pvt-key'),
                $dkim_public_key = $('.js-sender-dkim-pub-key'),
                $dkim_selector = $('.js-sender-dkim-selector'),
                $dkim_info = $('.js-dkim-info'),
                $dkim_one_string_key = $('#one-string-key'),
                $sender_dkim_selector = $('#sender-dkim-selector'),
                $dkim_sender_domain_0 = $('#sender-domain-0'),
                $dkim_sender_domain = $('#sender-domain'),
                $dkim_sender_input = $('#config-sender'),
                $dkim_needs_email = $('.js-dkim-needs-email'),
                $dkim_error = $('.js-dkim-error');

            $dkim_checkbox.change(function() {
                var is_on = $(this).is(':checked');
                if (is_on) {
                    generateDkim();
                } else {
                    removeDkim();
                }

                function generateDkim() {
                    var email = $.trim($('input[name="sender"]').val()),
                        href = '?module=settings&action=generateSenderDkim',
                        data = { email: email };
                    $dkim_error.slideUp().text('');
                    $dkim_wrapper.find('.what').after(' <i class="icon16 loading"></i>');
                    $.post(href, data, function(r) {
                        if (r.status == 'ok') {
                            $dkim_private_key.val(r.data.dkim_pvt_key);
                            $dkim_public_key.val(r.data.dkim_pub_key);
                            $dkim_selector.val(r.data.sender_selector);
                            $dkim_one_string_key.text(r.data.one_string_key);
                            $sender_dkim_selector.text(r.data.sender_selector);
                            $dkim_sender_domain_0.text(r.data.sender_domain);
                            $dkim_sender_domain.text(r.data.sender_domain);
                            $dkim_info.slideDown();
                        } else if (r.status == 'fail' && r.errors) {
                            $dkim_error.text(r.errors[0]).slideDown();
                        }
                        $dkim_wrapper.find('i.icon16').remove();
                    }, 'json')
                    .error(function() {
                        $dkim_error.text('Failed to create DKIM signature').slideDown();
                    });
                }

                function removeDkim() {
                    $dkim_info.slideUp();
                    setTimeout(function () {
                        removeDkimData();
                    }, 150);
                }
            });

            $dkim_sender_input.on('input', function () {
                if (!$.trim($dkim_sender_input.val())) {
                    $dkim_needs_email.slideDown();
                } else {
                    $dkim_needs_email.slideUp();
                }

                $dkim_checkbox.prop('checked', false);
                $dkim_info.slideUp();
                setTimeout(function () {
                    removeDkimData();
                }, 150);
            });

            function removeDkimData() {
                $dkim_error.slideUp().text('');
                $dkim_private_key.val('');
                $dkim_public_key.val('');
                $dkim_selector.val('');
                $dkim_one_string_key.text('');
                $sender_dkim_selector.text('');
                $dkim_sender_domain_0.text('');
                $dkim_sender_domain.text('');
            }

            //SHOW CAPTCHA
            $(':input[name="captcha"]').change(function(){
                if (this.value == 'waReCaptcha') {
                    $('div.js-captcha-adapter-settings').slideDown();
                } else {
                    $('div.js-captcha-adapter-settings').slideUp();
                }
            });

            //SHOW MAPS
            $(':input[name="map_adapter"]').change(function(event){
                var $scope = $(this).parents('div.field');
                var fast = event.originalEvent ? false : true;
                if(fast) {
                    $scope.find('div.js-map-adapter-settings').hide();
                    if (this.checked) {
                        $scope.find('div.js-map-adapter-settings[data-adapter-id="' + this.value + '"]').show();
                    }
                } else {
                    $scope.find('div.js-map-adapter-settings').slideUp();
                    if (this.checked) {
                        $scope.find('div.js-map-adapter-settings[data-adapter-id="' + this.value + '"]').slideDown();
                    }
                }
            });
            $(':input[name="map_adapter"]:checked').change();
        },
        clear_cache: function () {
            $.ajax({
                url: this.options.url,
                type: 'GET',
                dataType: 'json',
                success: this.response_handler,
                beforeSend: this.show_loader
            });
        },
        show_loader: function () {
            var self = $.installer_settings;
            self.container.html(self.options.loading).show();
        },
        response_handler: function (data, textStatus, XMLHttpRequest) {
            var self = $.installer_settings;
            try {
                if (data.status == 'ok') {
                    self.container.html(data.data.message).show().css('color', 'green');
                } else {
                    var error = '';
                    for (var error_item in data.errors) {
                        error += (error ? '\n' : '') + data.errors[error_item][0];
                    }
                    self.container.html('&mdash;&nbsp;' + error).show().css('color', 'red');
                }
            } catch (e) {
            }

        }
    };
})(jQuery, this);
