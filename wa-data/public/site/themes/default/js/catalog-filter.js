$(function(){
    var filter = new Filter();
    
    $('button#open_filter').click(function(){
        filter.toggle();
    });
    
    $('.filter .custom-select > .select-items > div').click(function(){
        filter.filtrate($(this).data("key"), $(this).data("value"));
    });
});

function Filter(){
    this.opened = false;
    this.params = ["razmer", "tsvet", "nositel", "for_whom", "tematika"];
    
    this.init = function(){
        var urlparams = urlparser.getParams();
        
        for (var key in urlparams){
            if (this.params.indexOf(key) != -1){
                this.openFast();
            }
        }
    };
    
    this.toggle = function(){
        if (this.opened){
            this.close();
        }
        else{
            this.open();
        }
    };
    
    this.showcase_closed_width_wide = "63%";
    this.showcase_closed_width_narrow = "58%";
    
    this.open = function(){
        $('.filter button.open').css({left: "auto"});
        $('.filter .wrapper').animate(
            {
                height: "412px", 
                width: "209px"
            }, 
            100, 
            function(){
                $('.filter .wrapper').css("overflow", "visible");
            }
        );

        var showcase_width = screen.width > 1024 ? this.showcase_closed_width_wide : this.showcase_closed_width_narrow;

        $('.filter').animate({width: "299px"}, 100);
        $('.catalog .showcase').animate({width: showcase_width}, 100);
        $('button#open_filter').removeClass("filter_closed");
        
        this.opened = true;
    };
    
    this.openFast = function(){
        $('.filter button.open').css({left: "auto"});
        $('.filter .wrapper').css({
            height: "412px", 
            width: "209px"
        });
        
        var showcase_width = screen.width > 1024 ? this.showcase_closed_width_wide : this.showcase_closed_width_narrow;
        
        $('.filter .wrapper').css("overflow", "visible");
        $('.filter').animate({width: "299px"}, 100);
        $('.catalog .showcase').css({width: showcase_width});
        $('button#open_filter').removeClass("filter_closed");
        
        this.opened = true;
    };
    
    this.showcase_opened_width_wide = "86%";
    this.showcase_opened_width_narrow = "81%";

    this.close = function(){
        $('.filter .wrapper').animate(
            {
                height: "50px", 
                width: "50px"
            }, 
            100, 
            function(){
                $('.filter .wrapper').css("overflow", "hidden");
            }
        );

        var showcase_width = screen.width > 1024 ? this.showcase_opened_width_wide : this.showcase_opened_width_narrow;

        $('.filter button.open').animate({left: "0"}, 100);
        $('.filter').animate({width: "50px"}, 100);
        $('.catalog .showcase').animate({width: showcase_width}, 100);
        $('button#open_filter').addClass("filter_closed");
        
        this.opened = false;
    };
    
    this.filtrate = function(key, value){
        var filter_string = location.pathname+"?";
        
        $('.filter .custom-select > select').each(function(){
            var other_value = $(this).val();
            var other_id = $(this).attr("id");
            
            if (other_value.length > 0){
                filter_string += other_id+'%5B%5D='+other_value+'&';
            }
        });
        
        if (value.length > 0){
            filter_string += key+'%5B%5D='+value+'&';
        }
        
        location.href = filter_string;
    };
    
    this.hide = function(){
        $('.filter').hide();
        $('.catalog .showcase').css("padding", 0);
    };
    
    this.init();
}
