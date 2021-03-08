jQuery(document).ready(function($){
	
	//Mobile Menu
	$('.sideMenu').sidr({
		name: 'sidr-main',
		source: '.menu',
		side: 'right'
	}); 
	
	$('.searchandfilter ul li:nth-child(1) option:first').prop('selected',true);
	$('.searchandfilter ul li:nth-child(2) option:first').prop('selected',true);
	$('.searchandfilter ul li:nth-child(3) option:first').prop('selected',true);
	$('.searchandfilter ul li:nth-child(4) option:first').prop('selected',true);
	$('.searchandfilter ul li:nth-child(5) option:first').prop('selected',true);
	$('.searchandfilter ul li:nth-child(6) option:first').prop('selected',true);

	
	$('.searchandfilter select#ofbedrooms').on('change', function() {
		var selects = $('.searchandfilter select#ofbedrooms').prop('selectedIndex') + 2;
		if ( selects == 3 ) {
			$('.searchandfilter ul li:nth-child(3)').css('display', 'inline-block');
			$('.searchandfilter ul li:nth-child(4)').hide();
			$('.searchandfilter ul li:nth-child(5)').hide();
			$('.searchandfilter ul li:nth-child(6)').hide();
			$('.searchandfilter ul li:nth-child(4) option:first').prop('selected',true);
			$('.searchandfilter ul li:nth-child(5) option:first').prop('selected',true);
			$('.searchandfilter ul li:nth-child(6) option:first').prop('selected',true);
		} else if ( selects == 4 ) {
			$('.searchandfilter ul li:nth-child(4)').css('display', 'inline-block');
			$('.searchandfilter ul li:nth-child(3)').hide();
			$('.searchandfilter ul li:nth-child(5)').hide();
			$('.searchandfilter ul li:nth-child(6)').hide();
			$('.searchandfilter ul li:nth-child(3) option:first').prop('selected',true);
			$('.searchandfilter ul li:nth-child(5) option:first').prop('selected',true);
			$('.searchandfilter ul li:nth-child(6) option:first').prop('selected',true);
		} else if ( selects == 5 ) {
			$('.searchandfilter ul li:nth-child(5)').css('display', 'inline-block');
			$('.searchandfilter ul li:nth-child(3)').hide();
			$('.searchandfilter ul li:nth-child(4)').hide();
			$('.searchandfilter ul li:nth-child(6)').hide();
			$('.searchandfilter ul li:nth-child(3) option:first').prop('selected',true);
			$('.searchandfilter ul li:nth-child(4) option:first').prop('selected',true);
			$('.searchandfilter ul li:nth-child(6) option:first').prop('selected',true);
		} else if ( selects == 6 ) {
			$('.searchandfilter ul li:nth-child(6)').css('display', 'inline-block');
			$('.searchandfilter ul li:nth-child(3)').hide();
			$('.searchandfilter ul li:nth-child(4)').hide();
			$('.searchandfilter ul li:nth-child(5)').hide();
			$('.searchandfilter ul li:nth-child(3) option:first').prop('selected',true);
			$('.searchandfilter ul li:nth-child(4) option:first').prop('selected',true);
			$('.searchandfilter ul li:nth-child(5) option:first').prop('selected',true);
		} else {
			$('.searchandfilter ul li:nth-child(3)').hide();
			$('.searchandfilter ul li:nth-child(4)').hide();
			$('.searchandfilter ul li:nth-child(5)').hide();
			$('.searchandfilter ul li:nth-child(6)').hide();
			$('.searchandfilter ul li:nth-child(3) option:first').prop('selected',true);
			$('.searchandfilter ul li:nth-child(4) option:first').prop('selected',true);
			$('.searchandfilter ul li:nth-child(5) option:first').prop('selected',true);
			$('.searchandfilter ul li:nth-child(56) option:first').prop('selected',true);
		}
	});	
	
	
	$(window).resize(function(){
		$.sidr('close', 'sidr-main');
	});
	
	if ($('.home .heroSlider').length > 0 ) {
		$('.heroSlider').delay(100).animate({opacity: "1"}, {duration: 100});
		$('.heroSlider').fadeIn(500);	
	}
		
	if ($('.heroSlider li').length > 0 ) {
		var heroSlider = $('.heroSlider > ul').bxSlider({
			mode: 'fade',
			pager: true,
			auto: true,
			controls: false,
			autoControls: false,
			speed: 1500,
			pause: 9000,
			adaptiveHeight: false
		});
	} 
		
	$('.thumb li img').on('click', function () {
		if ( $(window).width() > 1260 ) {				
			var pos = $(this).parent('li').index();
			$('.mainImage li').hide();
			$('.mainImage li').eq(pos).fadeIn();
			var targetPosition = $('.mainImage').offset().top - 20;
				$('html,body').animate({
					scrollTop: targetPosition
			}, 500);
		} else {
			var pos = $(this).parent('li').index();
			$('.mainImage li').hide();
			$('.mainImage li').eq(pos).fadeIn();
			var targetPosition = $('.mainImage').offset().top - 200;
				$('html,body').animate({
					scrollTop: targetPosition
			}, 500);
		}
	});
	
	$(window).resize(function() {

		if ( heroSlider != null) {
			heroSlider.destroySlider();
		}		
		setTimeout(function(){		
			if ($('.heroSlider li').length > 0 ) {
				var heroSlider = $('.heroSlider > ul').bxSlider({
					mode: 'fade',
					pager: true,
					auto: true,
					controls: false,
					autoControls: false,
					speed: 1500,
					pause: 9000,
					adaptiveHeight: false
				});
			} 
		}, 100);
	});
	
	
	if ($('.heroSliderSm img').length > 1 ) {
		var heroSliderSm = $('.heroSliderSm').bxSlider({
			mode: 'horizontal',
			pager: true,
			auto: true,
			controls: true,
			autoControls: false,
			speed: 1500,
			pause: 9000,
			adaptiveHeight: false
		});
	} 
	
	$('.back').on('click', function(e){
    	e.preventDefault();
    	window.history.back();
	});

});

/* Global Functions */
