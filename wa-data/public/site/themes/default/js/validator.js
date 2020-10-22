var validator = new Validator();

function Validator(){
    // класс занимается валидацией данных
    // есть функция, которая берет элемент для валидации, метод валидации и элемент вывода результата
    // есть ф-ия для валидации по методу, список методов и соответствующие им ф-ии заранее определены
    // также нужно определить функцию вывода результата валидации отдельно (потряхивание инпута)
    
    this.methods = {
        empty: function(argument){
            var argument_in_string = String(argument);
            
            return argument_in_string.length == 0 ? false: true;
        },
        email: function(argument){
            var regexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var argument_in_string = String(argument);
            
            if (argument_in_string.length == 0){
                return false;
            }
            
            return !regexp.test(argument_in_string.toLowerCase()) ? false : true;
        }
    };
    this.result_functions = {
        shakeRed: function(element, error){
            if (error){
                element.addClass("data_error").addClass("shake");
            }
            else{
                element.removeClass("data_error");
            }
            
            setTimeout(function(){
                element.removeClass("shake");
            }, 1000);
        }
    };
    this.data_to_validate = [];
    
    this.reinit = function(){
        this.data_to_validate = [];
    };
    
    this.set = function(element_to_validate, validate_method, element_to_result, function_to_result){
        this.data_to_validate.push({
            "element_to_validate": element_to_validate, 
            "validate_method": validate_method, 
            "element_to_result": element_to_result,
            "function_to_result": function_to_result
        });
    };
    
    this.validate = function(){
        var everything_is_ok = true;
        
        for (var key in this.data_to_validate){
            var v = this.data_to_validate[key];
            var error = false;
            var element_data = v.element_to_validate.val().trim();
            
            if (!this.methods[v.validate_method](element_data)){
                error = true;
                everything_is_ok = false;
                // здесь выполнить ф-ию вывода результата с параметро v.element_to_result
                this.result_functions[v.function_to_result](v.element_to_result, error);                
            }
            else{
                this.result_functions[v.function_to_result](v.element_to_result, error);
            }
        }
        
        return everything_is_ok;
    };
}