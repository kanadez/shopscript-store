var modal = new Modal();

function Modal(){
    this.open = function(selector){
        $.fancybox.open({
            src: selector,
            type: 'inline',
            opts: {
                speed: 300,
                margin: [20,0],
                slideShow : false,
                fullScreen : false,
                thumbs : false,
                focus : false
            }
        });
    };
    
    this.close = function(){
        $.fancybox.close();
    };
    
    this.openWarning = function(message){
        $('.warning .title').text(message);
        this.open('.warning');
    };
    
    this.openError = function(message){
        $('.error .title').text(message);
        this.open('.error');
    };
}