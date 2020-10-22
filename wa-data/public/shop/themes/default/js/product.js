var product = new Product();

function Product(){
    this.was_added = false;
    
    this.addToCart = function(item){
        var that = this;
        var quantity_value = 1;
        var per_value = 1;
        var quantity_parsed = 0;
        var quantity_parsed = quantity_value*per_value;

        if (quantity_parsed > 0){
            if (!this.was_added){
                setInnerLoader('#add_to_cart');
                
                $.post("/shop/cart/add/",{
                    "html": 1, 
                    "product_id": item,
                    "quantity": quantity_parsed
                },function (response){
                    unsetInnerLoader('#add_to_cart');
                    
                    if (response.status == "fail"){
                        modal.openWarning(response.errors)
                    }
                    else{
                        var success_text = $('#add_to_cart').data("added-success-text");
                        that.was_added = true;

                        $('#add_to_cart')
                            .addClass("added_success")
                            .text(success_text);
                    }
                }).fail(function(){
                    var fail_text = $('#add_to_cart').data("added-fail-text");

                    $('#add_to_cart')
                        .addClass("added_fail")
                        .text(fail_text);
                });
            }
        }
        else{
            //$("#buy_buttons_wrapper_"+item+" > .list_table_input").removeClass("count_input_animated").addClass("count_input_animated").focus();
        }
    };
}