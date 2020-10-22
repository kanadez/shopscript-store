$(function () {

    var self = {
        init: function () {
            self.events();
            self.writeLineCountCookie();
            if (self.isFile()) {
                self.fixFirstPageLinks();
                self.adjustPagination();
                prettyPrint();
                self.adjustFileContentsHeight();
                self.fileInitScrollDown();
            }
        },

        isFile: function () {
            return $('.file-data').length > 0;
        },

        writeLineCountCookie: function () {
            var line_count = Math.floor(($(window).height() - 270) / 14);
            document.cookie = 'lines_per_page=' + line_count + '; path=' + location.pathname + ';';
        },

        fixFirstPageLinks: function () {
            $('.pagination a').each(function () {
                var link = $(this);
                if (link.attr('href').indexOf('page') == '-1') {
                    link.attr('href', link.attr('href') + '&page=1');
                }
            });
        },

        adjustPagination: function () {
            var pagination = $('.pagination > ul');
            var pagination_width = 0;
            pagination_width += parseInt(pagination.css('margin-left')) + parseInt(pagination.css('margin-right'));
            pagination.children('li').each(function () {
                var li = $(this);
                pagination_width += li.width()
                    + parseInt(li.css('margin-left'), 10)
                    + parseInt(li.css('margin-right'), 10)
                    + parseInt(li.css('padding-left'), 10)
                    + parseInt(li.css('padding-right'), 10);
            });
            pagination.css('margin-left', Math.floor((pagination.parent().width() - pagination_width) / 2) + 'px');
        },

        scrollUp: function (element, initital_scroll_top) {
            element.prop('scrollTop', initital_scroll_top).animate({
                scrollTop: 0
            }, 1000);
        },

        scrollDown: function (element, initital_scroll_top) {
            element.prop('scrollTop', initital_scroll_top).animate({
                scrollTop: element.prop('scrollHeight')
            }, 1000);
        },

        adjustFileContentsHeight: function () {
            var file_contents = $('.file-contents:first');
            file_contents.css('height', 'auto');  //reset to auto height for a fresh start after previous adjustment
            var document_height = $(document).height();
            if ($.browser.msie) {
                document_height -= 5; //hack for IE
            }
            var height_diff = document_height - $(window).height();
            if (height_diff > 0) {
                var bottom_margin = 10;
                file_contents.height(file_contents.height() - height_diff - bottom_margin);
            } else {
                if ($('.get-more.disabled').length > 0) {
                    var enabled_button = $('.get-more').not('.disabled').eq(0);
                    var disabled_button = $('.get-more.disabled').eq(0);
                    file_contents.height(file_contents.height() + enabled_button.height()
                        - parseInt(disabled_button.css('padding-top'))
                        - parseInt(disabled_button.css('padding-bottom')));
                }
            }
        },
        
        fileInitScrollDown: function () {
            if (window.location.search.indexOf('page=') < 0) {
                var file_contents = $('.file-contents:first');
                file_contents.prop('scrollTop', file_contents.prop('scrollHeight'));
            }
        },

        events: function () {
          //delete file
            $(document).on('click', '.logs-action-delete-file', function () {
                var icon = $(this);
                var path = icon.data('path');
                $('<p class="error hidden"></p>'
                + '<input name="path" type="hidden" value="' + path + '">').waDialog({
                    'buttons': '<input type="submit" value="' + $.loc['Delete'] + '" class="button blue small">&nbsp;'
                        + '<a href="" class="cancel">' + $.loc['cancel'] + '</a>',
                    'height': '150px',
                    title: '<h1>' + $.loc['Delete file'] + ' <span class="gray">' + path + '</span>?</h1>',
                    onSubmit: function (dialog) {
                        dialog.find('.error').addClass('hidden').empty();
                        dialog.find('.cancel').after('<i class="icon16 loading left-margin"></i>');
                        var update_size_param = $('.total-size').length > 0 ? '&update_size=1' : '';
                        $.post('?action=delete' + update_size_param, $(this).serialize(), function (response) {
                            if (response.status == 'fail') {
                                dialog.find('.loading').remove();
                                dialog.find('.error').removeClass('hidden').html(response.errors.join('<br>'));
                            } else {
                                if (self.isFile()) {
                                    location.href = icon.data('return-url');
                                } else {
                                    icon.closest('li').remove();
                                    if ($('.item-list li').length) {
                                        $('.total-size').show().text(response.data.total_size);
                                        if (response.data.total_size_class != undefined) {
                                            $('.total-size').attr('class', response.data.total_size_class);
                                        }
                                        if (response.data.is_large != undefined && !response.data.is_large) {
                                            $('#wa-app-logs .indicator').remove();
                                        }
                                    } else {
                                        $('.item-list').hide();
                                        $('.total-size').hide();
                                        $('.total-size').attr('class', 'total-size');
                                        $('#wa-app-logs .indicator').remove();
                                        $('.no-logs-message').show();
                                    }
                                    dialog.trigger('close');
                                }
                            }
                        }, 'json');
                        return false;
                    },
                    onClose: function () {
                        $(this).remove();
                    }
                });
            });

            //download more file contents via AJAX
            $(document).on('click', '.get-more', function () {
                var button = $(this);
                var arrow = button.find('.arrow');
                if (arrow.hasClass('hidden')) {
                    return;
                }
                arrow.addClass('hidden');
                button.append('<i class="icon16 loading"></i>');
                var direction = $(this).hasClass('previous') ? 'previous' : 'next';
                var form = $('.get-more-form:first');
                form.find('[name="direction"]').val(direction);
                $.post('?action=getmore', form.serialize(), function (response) {
                    button.find('.loading').remove();
                    if (response.status == 'fail') {
                        arrow.removeClass('hidden');
                        $('<p class="error">' + response.errors.join('<br>') + '</p>').waDialog({
                            'buttons': '<input type="submit" value="' + $.loc['OK'] + '" class="button blue">',
                            'width': '500px',
                            'height': '100px',
                            'esc' : false,
                            onSubmit: function (d) {
                                d.find('.loading').show();
                                location.href = response.data.redirect_url;
                                return false;
                            },
                            onClose: function () {
                                $(this).remove();
                            }
                        });
                    } else {
                        var file_contents = $('.file-contents');
                        
                        if (response.data.contents) {
                            var yes_icon = $('<i class="icon16 yes-bw"></i>');
                            yes_icon.appendTo(button);
                            yes_icon.animate({opacity: 0}, 700, function () {
                                $(this).remove();
                                if (response.data.first_line == 0) {
                                    button.addClass('disabled').attr('title', '');
                                } else {
                                    arrow.removeClass('hidden');
                                }
                            });

                            if (direction == 'previous') {
                                var initial_scroll_height = file_contents.prop('scrollHeight');
                                file_contents.prepend(response.data.contents);
                                var initial_scroll_top = file_contents.prop('scrollHeight') - initial_scroll_height + file_contents.prop('scrollTop');
                                if (response.data.first_line > 0) {
                                    $('[name="first_line"]').val(response.data.first_line);
                                }
                            } else {
                                var initial_scroll_top = file_contents.prop('scrollTop');
                                file_contents.append("\n" + response.data.contents);
                                $('[name="last_line"]').val(response.data.last_line);
                            }

                            prettyPrint();

                            if ($.browser.msie && parseFloat($.browser.version) < 9) {
                                setTimeout(function () {
                                    self.adjustFileContentsHeight();
                                }, 0);
                            } else {
                                self.adjustFileContentsHeight();
                            }

                            if (direction == 'previous') {
                                self.scrollUp(file_contents, initial_scroll_top);
                            } else {
                                self.scrollDown(file_contents, initial_scroll_top);
                            }
                        } else {
                            self.scrollDown(file_contents);
                            var message = $('<span class="hint message">' + $.loc['nothing received'] + '</span>');
                            message.appendTo(button);
                            message.animate({opacity: 0}, 700, function () {
                                $(this).remove();
                                arrow.removeClass('hidden');
                            });
                        }
                    }
                }, 'json');
            });

            //show & save settings
            $(document).on('click', '.logs-action-settings', function () {
                $('<h1>' + $.loc['Settings'] + '</h1>'
                + '<div class="content"><i class="icon16 loading"></i></div>'
                + '<p class="error hidden"></p>').waDialog({
                    buttons: '<input type="submit" value="' + $.loc['Save'] + '" class="button blue">'
                        + '&nbsp;<a href="" class="cancel">' + $.loc['cancel'] + '</a>',
                    onLoad: function () {
                        var dialog = $(this);
                        $.get('?module=dialog&action=settings', function (html) {
                            dialog.find('.content').html(html);
                        });
                    },
                    onSubmit: function (d) {
                        var dialog = $(d);
                        dialog.find('.cancel').after('<i class="icon16 loading left-margin"></i>');
                        dialog.find('.error').addClass('hidden').empty();
                        $.post('?module=dialog&action=settingsSave', $(this).serialize(), function (response) {
                            if (response.status == 'fail') {
                                dialog.find('.loading').remove();
                                dialog.find('.error').removeClass('hidden').html(response.errors.join('<br>'));
                            } else {
                                d.trigger('close');
                            }
                        }, 'json');
                        return false;
                    },
                    onClose: function () {
                        $(this).remove();
                    }
                });
            });

            //reload content
            $(document).on('click', '.logs-action-reload', function () {
                var icon = $(this);
                icon.removeClass('update').addClass('loading');
                $.get(location.href, function (html) {
                    setTimeout(function () {
                        var content = $(html);
                        content.find('.icon16.update').removeClass('update').addClass('yes');
                        $('#wa-app').replaceWith(content);
                        $('.icon16.yes').animate(
                            {opacity: 0},
                            700,
                            function () {
                                $(this).removeClass('yes').addClass('update').css({opacity: 1});
                            }
                        );
                    }, 500);
                });
            });

            //show phpinfo() not available message
            $(document).on('click', '.logs-action-phpinfo-disabled', function () {
                $('<p>' + $.loc['Function <tt>phpinfo()</tt> is not available on your server.'] + '</p>').waDialog({
                    buttons: '<input type="submit" value="' + $.loc['Close'] + '" class="button blue cancel">',
                    width:   '700px',
                    height:  '150px',
                    title: $.loc['Cannot show PHP configuration'],
                    onClose: function () {
                        $(this).remove();
                    }
                });
                return false;
            });

            //show share link dialog
            $(document).on('click', '.logs-action-published', function () {
                var icon = $(this);
                $('<p><i class="icon16 loading"></i></p>').waDialog({
                    buttons: '<input type="submit" value="' + $.loc['Close'] + '" class="button blue cancel">',
                    width:   '700px',
                    height:  '200px',
                    title: $.loc['Share link'],
                    onLoad: function () {
                        var dialog = $(this);
                        $.get('?module=dialog&action=published&path=' + icon.data('path'), function (html) {
                            var content = $(html);
                            dialog.find('.loading').parent().replaceWith(content);

                            $('.published-url').select();
                            $('.published-status-ibutton').iButton({
                                labelOn: '',
                                labelOff: '',
                                className: 'mini'
                            }).change(function () {
                                var checkbox = $(this);
                                var url_container = $('.published-url-container');
                                var loading = $('<i class="icon16 loading middle"></i>');
                                var error_message = $('.dialog-error-message');
                                
                                $('.published-status-selector').after(loading);

                                $.post('?module=dialog&action=updatePublishedStatus', {
                                    path: checkbox.data('path'),
                                    status: checkbox.is(':checked') ? 1 : 0
                                }, function (response) {
                                    loading.remove();
                                    if (response.status == 'ok') {
                                        $('.published-url').val(response.data.url);
                                        if (checkbox.is(':checked')) {
                                            url_container.slideDown('fast', function () {
                                                $('.published-url').select();
                                            });
                                        } else {
                                            url_container.slideUp();
                                        }
                                    } else {
                                        error_message.html(response.errors.join(' '));
                                    }
                                }, 'json');
                            });
                        });
                    },
                    onClose: function () {
                        $(this).remove();
                    }
                });
            });
        }
    };

    self.init();

});