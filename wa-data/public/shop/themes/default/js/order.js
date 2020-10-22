var order = new Order();

function Order(){
    this.customer_type = "new_customer";
    this.current_step = "cart";
    this.checkout_url = "/shop/checkout/";
    this.creating_user = false;
    this.customer_authorized = false;
    this.products_type = "regular";
    this.digital_products_action = "/shop/checkout_digital/";
    this.regular_products_action = "/shop/checkout/";

    this.init = function(){
        this.initCustomerType();
        this.initStep();
    };
    
    this.initCustomerType = function(){
        if (this.customer_type == "existing_customer"){
            this.switchExistingCustomer();
        }
        else if (this.customer_type == "new_customer"){
            this.switchNewCustomer();
        }
    };
    
    this.initShippingDOM = function(){
        $('input.delivery_type').change(function(){
            var shipping_id = $(this).val();
            
            $('.change_address_form').parent().hide();
            $('.address_form').hide();
            
            var data_filled = $('#address_form_'+shipping_id).attr("data-filled") == "true";
            
            if (data_filled){
                $('#address_form_'+shipping_id).show();
                $('#change_address_form_'+shipping_id).hide();
            }
            else{
                $('#address_form_'+shipping_id).hide();
                $('#change_address_form_'+shipping_id).show();
            }
        });        
    };
    
    this.initAddressForms = function(){
        var shipping_id = $('.address_form.current').data("shipping-id");
        var data_filled = $('.address_form.current').attr("data-filled") == "true";
        
        $('.change_address_form.editable').parent().hide();
        
        if (!data_filled){
            $('#address_form_'+shipping_id).hide();
            $('#change_address_form_'+shipping_id).show();
        }
        else{
            $('#address_form_'+shipping_id).show();
            $('#change_address_form_'+shipping_id).hide();
        }
    };
    
    this.initStep = function(){
        switch (this.current_step){
            case "delivery":
                this.openDeliveryScreen();
            break;
        }
    };
    
    this.setProductsType = function(type_value){
        this.products_type = type_value == 1 ? "digital" : "regular";
        
        if (this.products_type == "digital"){
            this.initDigitalAuthForm();
        }
    };
    
    this.isDigitalProductsType = function(){
        return this.products_type == "digital" ? true : false;
    };
    
    this.initDigitalAuthForm = function(){
        $('#new_customer_form .form-group.regular').hide();
        $('#auth_modal').addClass("reduced");
        $('#existing_customer_form').addClass("reduced");
        $('#existing_customer_form .login_panel').addClass("reduced");
        $('.quantity').hide();
    };
    
    this.isNewCustomer = function(){
        return this.customer_type == "new_customer" ? true : false;
    };
    
    this.switchCustomerType = function(){
        this.customer_type = $('input.customer_type:checked').val();
        
        this.initCustomerType();
    };
    
    this.switchNewCustomer = function(){
        this.customer_type = "new_customer";
        $('input.customer_type[value="new_customer"]').attr("checked", true);
        $('#existing_customer_form').hide();
        $('#new_customer_form').show();
        
        if (this.creating_user && !this.isDigitalProductsType()){
            $('#auth_modal').addClass("expanded");
        }
    };
    
    this.switchExistingCustomer = function(){
        this.customer_type = "existing_customer";
        $('input.customer_type[value="existing_customer"]').attr("checked", true);
        $('#new_customer_form').hide();
        $('#existing_customer_form').show();
        
        if (this.creating_user){
            $('#auth_modal').removeClass("expanded");
        }
    };
    
    this.openDeliveryScreen = function(){
        $('#progress_cart_step').removeClass("active").addClass("disabled");
        $('#progress_delivery_step').removeClass("disabled").addClass("active");
        
        $('.cart .showcase').hide();
        $('.cart .delivery').show();
    };
    
    this.backToCart = function(){
        $('#progress_cart_step').addClass("active").removeClass("disabled");
        $('#progress_delivery_step').removeClass("disabled").removeClass("active");
        $('#progress_checkout_step').removeClass("disabled").removeClass("active");
        
        $('.cart .showcase').show();
        $('.cart .confirmation').hide();
        $('.cart .delivery').hide();
    };
    
    this.closeDeliveryScreen = function(){
        $('#progress_delivery_step').addClass("disabled").removeClass("active");
        $('.cart .delivery').hide();
    };
    
    this.openConfirmationScreen = function(){
        $('#progress_cart_step').removeClass("active").addClass("disabled");
        $('#progress_delivery_step').removeClass("active").addClass("disabled");
        $('#progress_checkout_step').removeClass("disabled").addClass("active");
        
        $('.cart .showcase').hide();
        $('.cart .confirmation').show();
    };
    
    this.backToDelivery = function(){
        $('#progress_delivery_step').addClass("active").removeClass("disabled");
        $('#progress_checkout_step').removeClass("disabled").removeClass("active");
        
        $('.cart .delivery').show();
        $('.cart .confirmation').hide();
    };
    
    this.closeConfirmationScreen = function(){
        $('.cart .confirmation').hide();
    };
    
    this.openPaymentScreen = function(){
        $('.cart .payment').show();
    };
    
    this.openAuthModal = function(){
        modal.open("#auth_modal");
        
        return false;
    };
    
    this.toggleNewCustomerRegFields = function(){
        var create = $('#create_new_customer_checkbox:checked').length == 0 ? false : true;
        
        if (create){
            this.creating_user = true;
            $('#new_customer_form > .login').show();
            $('#new_customer_form > .password').show();
            $('#auth_modal').addClass("expanded");
        }
        else{
            this.creating_user = false;
            $('#new_customer_form > .login').hide();
            $('#new_customer_form > .password').hide();
            $('#auth_modal').removeClass("expanded");
        }
    };
    
    this.editCheckoutData = function(){
        this.switchNewCustomer();
        modal.open("#auth_modal");
        
        return false;
    };
    
    this.setShippingAddress = function(){
        $('.change_address_form.editable').each(function(){
            var region = String($(this).find('.wa-field-address-region > select').val());
            var city = String($(this).find('.wa-field-address-city > input').val());
            var address = String($(this).find('.wa-field-address-street > input').val());
            var shipping_id = $(this).data("shipping-id");
            
            if (!isEmpty(region) && !isEmpty(city) && !isEmpty(address)){
                var full_address = city+", "+address;
                
                $('#address_form_'+shipping_id+' .address_value').text(full_address);
                $('#address_form_'+shipping_id).attr("data-filled", "true");
            }
            else{
                $('#address_form_'+shipping_id).attr("data-filled", "false");
            }
            
            $('#new_customer_form select.region').val(region);
        });
    };
    
    this.editShippingAddress = function(shipping_id){
        $('#address_form_'+shipping_id).hide();
        $('#change_address_form_'+shipping_id).show();
        
        return false;
    };
    
    this.isNewUserDataNotOK = function(){
        validator.reinit();
        
        if (this.isDigitalProductsType()){
            validator.set(
                $('#new_customer_form input.email'),
                "email",
                $('#new_customer_form input.email'),
                "shakeRed"
            );
        }
        else{
            validator.set(
                $('#new_customer_form select.region'),
                "empty",
                $('#new_customer_form .custom-select > .select-selected'),
                "shakeRed"
            );
            validator.set(
                $('#new_customer_form input.city'),
                "empty",
                $('#new_customer_form input.city'),
                "shakeRed"
            );
            validator.set(
                $('#new_customer_form input.street'),
                "empty",
                $('#new_customer_form input.street'),
                "shakeRed"
            );
            validator.set(
                $('#new_customer_form input.firstname'),
                "empty",
                $('#new_customer_form input.firstname'),
                "shakeRed"
            );
            validator.set(
                $('#new_customer_form input.lastname'),
                "empty",
                $('#new_customer_form input.lastname'),
                "shakeRed"
            );
            validator.set(
                $('#new_customer_form input.phone'),
                "empty",
                $('#new_customer_form input.phone'),
                "shakeRed"
            );
        }
        
        return !validator.validate(); // если false (т.е. валидацию прошло), вернет true, что значит data not ok
    };
    
    this.isSecondShippingDataNotOK = function(){
        if ($('.change_address_form .wa-field-address-city > input').length == 0){
            return false;
        }

        if (this.isDigitalProductsType()){
            return false;
        }

        validator.reinit();
        validator.set(
            $('.change_address_form .wa-field-address-region > select'),
            "empty",
            $('.change_address_form .wa-field-address-region > select'),
            "shakeRed"
        );
        validator.set(
            $('.change_address_form .wa-field-address-city > input'),
            "empty",
            $('.change_address_form .wa-field-address-city > input'),
            "shakeRed"
        );
        validator.set(
            $('.change_address_form .wa-field-address-street > input'),
            "empty",
            $('.change_address_form .wa-field-address-street > input'),
            "shakeRed"
        );

        return !validator.validate(); // если false (т.е. валидацию прошло), вернет true, что значит data not ok
    };
    
    this.isCreateUserDataNotOK = function(){
        if (!this.creating_user){
            return false;
        }
        
        validator.reinit();
        validator.set(
            $('#new_customer_form .login > input'),
            "empty",
            $('#new_customer_form .login > input'),
            "shakeRed"
        );
        validator.set(
            $('#new_customer_form .password > input'),
            "empty",
            $('#new_customer_form .password > input'),
            "shakeRed"
        );

        return !validator.validate(); // если false (т.е. валидацию прошло), вернет true, что значит data not ok
    };
    
    this.isLoginUserDataNotOK = function(){
        validator.reinit();
        validator.set(
            $('#existing_customer_form input.login'),
            "empty",
            $('#existing_customer_form input.login'),
            "shakeRed"
        );
        validator.set(
            $('#existing_customer_form input.password'),
            "empty",
            $('#existing_customer_form input.password'),
            "shakeRed"
        );

        return !validator.validate(); // если false (т.е. валидацию прошло), вернет true, что значит data not ok
    };
    
    this.checkoutIfAuth = function(){
        var that = this;
        showOuterLoader("#checkout_loader");
        
        $.post(this.getPostAction(), null, function(response){
            var content = $(response);
            var error = content.find("p.error");
            var login_error = content.find("div.error");
            var signup_error = content.find(".errormsg");

            if (error.length != 0 || signup_error.length != 0 || login_error.length != 0){
                hideOuterLoader('.order_process_loader');
                var error_text = error.text() || signup_error.text() || login_error.text();
                modal.openError(error_text);

                return false;
            }
            
            that.getCheckoutData();
            hideOuterLoader('#login_loader');
            modal.close("#auth_modal");
            
            if (that.isDigitalProductsType()){
                $('.confirmation form').html(response);
                that.openConfirmationScreen();
            }
            else{
                $('.delivery form').html(response);
                that.initShippingDOM();
                that.setShippingAddress();
                that.initAddressForms();
                that.openDeliveryScreen();
            }
            
            hideOuterLoader("#checkout_loader");
            $('a#checkout').attr("onclick", "");
            $('a#checkout').click(function(){
                order.checkoutIfAuth();
            });
        });
    };
    
    this.getCheckoutData = function(){
        $.get(this.checkout_url, null, function(response){
            var content = $(response);
            var customer_firstname = content.find('input[name="customer[firstname]"]').val().trim();
            var customer_lastname = content.find('input[name="customer[lastname]"]').val().trim();
            var customer_phone = content.find('input[name="customer[phone]"]').val().trim();
            var customer_email = content.find('input[name="customer[email]"]').val().trim();
            var customer_address = content.find('input[name="customer[address.shipping][street]"]').val().trim();
            var customer_city = content.find('input[name="customer[address.shipping][city]"]').val().trim();
            
            //var customer_region = content.find('input[name="customer[address.shipping][region]"]').val().trim();
            //var customer_zip = content.find('input[name="customer[address.shipping][zip]"]').val().trim();
            //var customer_country = content.find('input[name="customer[address.shipping][country]"]').val().trim();
            
            $('#new_customer_form input.firstname').val(customer_firstname);
            $('#new_customer_form input.lastname').val(customer_lastname);
            $('#new_customer_form input.phone').val(customer_phone);
            $('#new_customer_form input.email').val(customer_email);
            $('#new_customer_form input.street').val(customer_address);
            $('#new_customer_form input.city').val(customer_city);
        });
    };
    
    this.customerAuthorized = function(){
        this.customer_authorized = true;
    };
    
    this.isCustomerAuthorized = function(){
        return this.customer_authorized;
    };
    
    this.getPostAction = function(){
        if (this.isDigitalProductsType()){
            return this.digital_products_action;
        }
        else{
            return this.regular_products_action;
        }
    };
    
    this.init();
}