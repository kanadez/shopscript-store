$(function(){
    
    //$($('.header_abs')[0]).remove();    
    new WOW().init();
    //$('.header_abs').unstick();
    $('.asset2').children().remove();
    $('.top_menu.leftside').children().remove();
    $('.categories_grid').show();
    //$('#sticky-wrapper').hide();    
    
    // sizing catalog cells
    var w = $('.categories_grid > .big_square').width();
    $('.categories_grid > .big_square').height(w);
    $('.categories_grid > .big_square > .small_square').height(w/2);
    $('.categories_grid > .big_square > .bar').height(w/2);
    $('.categories_grid > .double_square').outerHeight(w);
});