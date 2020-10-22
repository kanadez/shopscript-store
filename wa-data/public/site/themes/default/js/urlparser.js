var urlparser = new URLparser();

function URLparser(){
    this.url_params = {};
    this.url_string = "";

    this.getParameter = function(parameter){
        var params_string = window.location.href.slice(window.location.href.indexOf('?') + 1);
        var params = params_string.split("&");
        var result = {};

        for (var i = 0; i < params.length; i++){
           var tmp = params[i].split("=");
           result[tmp[0]] = tmp[1];
        }

        return result[parameter];
    };

    this.setParameter = function(parameter, value){
        this.url_params[parameter] = value;
        this.url_string = "";

        for (var key in this.url_params)
           this.url_string += key+"="+this.url_params[key]+"&";

        window.history.pushState(null, null, "?"+(this.url_string = this.url_string.substring(0, this.url_string.length - 1)));
    };

    this.clearParams = function(){
        this.url_params = {};
    };
   
    this.getParams = function(){
        var params_string = window.location.href.slice(window.location.href.indexOf('?') + 1);
        var params = params_string.split("&");
        var result = {};

        for (var i = 0; i < params.length; i++){
            var tmp = params[i].split("=");
            result[tmp[0].replace("%5B%5D", "")] = tmp[1];
        }

        this.url_papams = result;
        
        return result;
    };
}