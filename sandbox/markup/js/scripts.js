$(function(){
        $(".vertical-center-4").slick({
            dots: true,
            vertical: false,
            centerMode: false,
            variableWidth: true
        });
	// Основной слайдер на главной
	$('.main_slider').owlCarousel({
		loop: true,
		margin: 20,
		dots: true,
		nav: true,
		navSpeed: 500,
		mouseDrag: false,
		items: 1,
		onInitialized: function(){
			setTimeout(function(){
				$('.main_slider .owl-item.active .title_slide').addClass('animated fadeInDown')
				$('.main_slider .owl-item.active .play').addClass('animated fadeInUp')
			}, 100)

			$('.main_section .logos .img').addClass('animated fadeInDown')
		},
		onTranslate: function(event){
			$('.main_slider .owl-item .title_slide').removeClass('animated fadeInUp')
			$('.main_slider .owl-item .play').removeClass('animated fadeInUp')
		},
		onTranslated: function(event){
			var page = event.page.index

			$('.main_slider .owl-item:not(.cloned):eq(' + page + ') .title_slide').addClass('animated fadeInDown')
			$('.main_slider .owl-item:not(.cloned):eq(' + page + ') .play').addClass('animated fadeInUp')
		}
	})

	$('.lk_slider .slider').owlCarousel({
		loop: true,
		margin: 20,
		dots: true,
		nav: false,
		navSpeed: 500,
		items: 1
	})
	
	$owl = $('.product_view .view .slider').owlCarousel({
		loop: false,
		margin: 20,
		dots: true,
		nav: false,
		navSpeed: 500,
		smartSpeed: 500,
		items: 1,
		onTranslate: callback
	})

	function callback(event) {
		var page = event.page.index;
		if (page != $('.product_view .thumbs a').prop('data-slide-index')) {

			$('.product_view .thumbs a').removeClass('active')
			$('.product_view .thumbs a:eq(' + page + ')').addClass('active')
		}
	}

	$('.product_view .view .thumbs a').click(function(e) {
		e.preventDefault()

		$('.product_view .view .thumbs a').removeClass('active')
		$(this).addClass('active')

		$owl.trigger('to.owl.carousel', $(this).attr('data-slide-index'))
	})

	//Селекты
	$('select').selectbox()
	
	//Мини всплывающие окна
	firstClick = false
	$('.mini_modal_link').click(function(e){
	    e.preventDefault()

	    var modalId = $(this).attr('data-modal-id')
	    if($(modalId).is(':visible')){
	        $(this).removeClass('active')
	        $('.mini_modal').fadeOut(200)
	        firstClick = false
	    }else{
	        $('.mini_modal_link').removeClass('active')
	        $(this).addClass('active')

	        $('.mini_modal').fadeOut(200)
	        $(modalId).fadeIn(300)
	        firstClick = true
	    }
	})

	//Закрываем всплывашку при клике вне неё
	$(document).click(function(e){
	    if (!firstClick && $(e.target).closest('.mini_modal').length == 0){
	        $('.mini_modal').fadeOut(300)
	        $('.mini_modal_link').removeClass('active')
	    }
	    firstClick = false
	})

	//Табы
	$(".tabs_container").each(function(){
		var activeTabFirst = $(this).find(".tab_content:first").show()
	})
		
	$(".tabs_container .tabs li").click(function() {
		var parentBox = $(this).parents('.tabs_container')
		
		$(parentBox).find(".tabs li").removeClass("active")
		$(this).addClass("active")
		$(parentBox).find(".tab_content").hide()
	
		var activeTab = $(this).find("a").attr("href")
		$(activeTab).fadeIn()
		return false
	})

	// Моб. меню
	/*$('.mob_menu_link').click(function(e){
		e.preventDefault()

		$(this).parent().hide().next().addClass('show')
		$(this).parent().prev().show()
		$('body').addClass('body_hidden')
	})

	$('.mob_menu_close').click(function(e){
		e.preventDefault()

		$(this).parent().removeClass('show').prev().show().prev().hide()
		$('body').removeClass('body_hidden')
	})*/

	$('.bng_close').click(function(e){
		e.preventDefault()

		$(this).hide().next().show().next().removeClass('show')
		$('body').removeClass('body_hidden')
	})
	
	$('.accordion .open_sub').click(function(e){
		e.preventDefault()

		if($(this).hasClass('active')){
			$(this).removeClass('active').next().slideUp(300)
		}else{
			$('.accordion .open_sub').removeClass('active')
			$('.accordion .on').slideUp(300)
			$(this).addClass('active').next().slideDown(300)
		}
	})

	$('.cont_filter .open_filter').click(function(e){
		e.preventDefault()

		if($(this).hasClass('active')){
			$(this).removeClass('active').next().hide()
			$sticky.sticky('update')
		}else{
			$(this).addClass('active').next().show()
			$sticky.sticky('update')
		}
	})

	firstClick2 = false
	$('.cont_filter .range .range_btn').click(function(e){
		e.preventDefault()

		if($(this).hasClass('active')){
			$(this).removeClass('active').parent().removeClass('active')
			firstClick2 = false
		}else{
			$(this).addClass('active').parent().addClass('active')
			firstClick2 = true
		}
	})

	$(document).click(function(e){
	    if (!firstClick2 && $(e.target).closest('.range').length == 0){
	        $('.cont_filter .range').removeClass('active').find('.range_btn').removeClass('active')
	    }
	    firstClick2 = false
	})

	$('.modal_advice .not_show a').click(function(e){
		e.preventDefault()

		$(this).parents('.modal_advice').addClass('hideImp')
	})

	$('.modal_advice .close a').click(function(e){
		e.preventDefault()

		$(this).parents('.modal_advice').addClass('hide')
	})

	// Всплывающие окна
	$('.modal_link').fancybox({
		speed: 300,
		margin: [20,0],
		slideShow : false,
		fullScreen : false,
		thumbs : false,
		focus : false
	})

	$('.fancy_img').fancybox({
		margin: [20,0]
	})

	// Фильтр цены
	$("#height_range").ionRangeSlider({
        type     : 'double',
        min      : 0,
        max      : 180,
        from     : 10,
	    to       : 120,
        step     : 1,
        prettify : function (num) {
        	return num + ' см';
	    }
    })

    //Полоса прокрутки
	$('.modal_color .scroll, .modal_group .scroll').slimScroll({
        height 		  : '270px',
        size 		  : '2px',
		color		  : '#212121',
		alwaysVisible : true,
    })

    //Поиск при вводе значения
	$('.cont_filter .block_searh .search').keyup(function() {
		var email_value = $('.block_searh .search').val()

		if (email_value.length > 0) {
			$(this).addClass('active')
		} else {
			$(this).removeClass('active')
    	}
	})
})

$(window).load(function(){
	// Шапка
	if( $(window).width() > 1023 ) {
		$sticky = $('.header_abs').sticky({
			topSpacing: 0
		})
	}

	// Выравнивание элементов в сетке
	$('.catalog_small').each(function(){
		productHeight( $(this).find('.product_wrap'), $(this).attr('data-in-line'))
	})

	// Выравнивание элементов в сетке
	$('.catalog_big').each(function(){
		productHeight( $(this).find('.product_wrap'), $(this).attr('data-in-line'))
	})

	//анимации
	setTimeout(function(){
		$('.content_over .img_abs1').addClass('anime2')
	}, 100)
	setTimeout(function(){
		$('.content_over .img_abs2').addClass('anime1')
	}, 100)
	setTimeout(function(){
		$('.content_over .img_abs3').addClass('anime2')
	}, 500)
	setTimeout(function(){
		$('.content_over .img_abs4').addClass('anime1')
	}, 400)
	setTimeout(function(){
		$('.content_over .img_abs5').addClass('anime3')
	}, 800)
})

$(window).resize(function(){
	// Обнуение
	$('.catalog_small .product .name, .catalog_big  .product .name').height('auto')

	// Выравнивание элементов в сетке
	$('.catalog_small').each(function(){
		productHeight( $(this).find('.product_wrap'), $(this).attr('data-in-line'))
	})

	// Выравнивание элементов в сетке
	$('.catalog_big').each(function(){
		productHeight( $(this).find('.product_wrap'), $(this).attr('data-in-line'))
	})

	if( $(window).width() < 800 ) {
		$('.modal_advice').removeClass('hide')
	}
})

function setHeight(className){
	var maxheight = 0
	$(className).each(function() {
		if($(this).innerHeight() > maxheight) {
			maxheight = $(this).innerHeight()
		}
	})
	$(className).innerHeight(maxheight)
}

function productHeight(selector, step){
	var start = 0
	var finish = step

	var products = selector

	for( var i = 0; i < products.length; i++ ){
		var obj = products.slice(start, finish).find('.name')
		setHeight( obj )

		start = start+step
		finish = finish+step
	}
}