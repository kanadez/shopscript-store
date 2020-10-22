var cart = new Cart();

function Cart(){
    this.delete = function(item_id){
        var that = this;
        
        $.post('delete/', {
            html: 0, 
            id: item_id
        }, function (response){
            $('#item_'+item_id+'_row').remove();
            
            if (response.data.count == 0) {
                location.reload();
            }
            
            that.update(response.data);
        }, "json").fail(function(){
            console.log("cart delete/ error");
        });
    };
    
    this.update = function(data){
        $('.checkout-panel .price').text(data.total_no_currency);
    };
    
    this.upItemQty = function(item_id){
        var that = this;
        var current_qty = Number($('#item_'+item_id+'_count').text());
        var new_qty = Number(current_qty)+1;
        
        $.post('save/', {
            html: 0, 
            id: item_id, 
            quantity: new_qty
        }, function (response){
            if (response.data.error) {
                modal.openWarning(response.data.error);
            } 
            else{
                $('#item_'+item_id+'_count').text(new_qty);
                $('#item_'+item_id+'_price').text(response.data.item_total_no_currency);
                
                if (response.data.item_discounts_total_no_currency > 0){
                    $('#item_'+item_id+'_discount').show().text(response.data.item_discounts_total_no_currency);
                }
                
                $('.checkout-panel .price').text(response.data.total_no_currency);
                that.showDownButton(item_id, new_qty);
            }
        }, "json");
    };
    
    this.downItemQty = function(item_id){
        var that = this;
        var current_qty = $('#item_'+item_id+'_count').text();
        var new_qty = Number(current_qty)-1;
        
        $.post('save/', {
            html: 0, 
            id: item_id, 
            quantity: new_qty
        }, function (response){
            if (response.data.error) {
                alert(response.data.error); // здесь модал
            }
            else{
                $('#item_'+item_id+'_count').text(new_qty);
                $('#item_'+item_id+'_price').text(response.data.item_total_no_currency);
                
                if (response.data.item_discounts_total_no_currency > 0){
                    $('#item_'+item_id+'_discount').show().text(response.data.item_discounts_total_no_currency);
                }
                
                $('.checkout-panel .price').text(response.data.total_no_currency);
                that.showDownButton(item_id, new_qty);
            }
        }, "json");
    };
    
    this.showDownButton = function(item_id, new_qty){
        if (new_qty == 1){
            $('#item_'+item_id+'_count_down').hide();
        }
        else{
            $('#item_'+item_id+'_count_down').show();
        }
    };
}