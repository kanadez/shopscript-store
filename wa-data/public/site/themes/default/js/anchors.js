var anchors = new Anchors();

function Anchors(){
    this.anchors = [];
    this.currentAnchor = 0;
    this.isAnimating  = false;
    this.disabled = true;
    
    this.update = function(){
        if (this.disabled == true){
            return false;
        }
        
        var that = this;
        this.anchors = [0];
        
        $('section.anchor').each(function(){
            that.anchors.push($(this).offset().top-15);
        });
    };
    
    this.onWheel = function(e){
        if (this.disabled == true){
            return false;
        }
        
        e.preventDefault();
        e.stopPropagation();
        
        var that = this;
        var scroll_top = $(document).scrollTop();
        var document_height = $(window.top).height();
        var bottom = scroll_top+document_height;
        var down = e.originalEvent.wheelDelta >= 0 ? false : true;
        var next_anchor_key = down ? this.currentAnchor+1 : this.currentAnchor-1;
        var current_anchor = parseInt(this.anchors[next_anchor_key]);

        if (this.isAnimating){
            return false;
        }
        
        
        if (down && current_anchor - bottom > 100){
            this.isAnimating = true;
            
            $('html, body').animate({
                scrollTop: parseInt($(document).scrollTop()+100)
            }, 10, 'swing', function(){
                that.isAnimating = false;
            });
            
            return false;
        }
        else if (!down && scroll_top - this.anchors[this.currentAnchor] > 100){
            $('html, body').animate({
                scrollTop: parseInt($(document).scrollTop()-100)
            }, 10, 'swing', function(){
                that.isAnimating = false;
            });
            
            return false;
        }
        
        if (next_anchor_key > 0){
            this.whiteHeader();
        }
        else{
            this.darkHeader();
        }
        
        this.isAnimating = true;
        
        if (down){
            this.currentAnchor++;
        }else if (this.currentAnchor > 0){
            this.currentAnchor--;
        }
        
        if(this.currentAnchor > (this.anchors.length - 1)){
            //this.currentAnchor = -1;
            if (down){
                this.currentAnchor--;
            }
            else{
                return false;
            }
        }
        
        this.isAnimating = true;
        
        if (!down && that.anchors[that.currentAnchor] + document_height < scroll_top-100){
            $('html, body').animate({
                scrollTop: parseInt(scroll_top - document_height)
            }, 500, 'swing', function(){
                that.isAnimating = false;
            });
            
            return false;
        }
        
        $('html, body').animate({
            scrollTop: parseInt(that.anchors[that.currentAnchor])
        }, 500, 'swing', function(){
            that.isAnimating = false;
        });
    };
    
    this.whiteHeader = function(){
        $('.header_abs, header .top_line, header .burger').addClass("white_background");
    };
    
    this.darkHeader = function(){
        $('.header_abs, header .top_line, header .burger').removeClass("white_background");
    };
}