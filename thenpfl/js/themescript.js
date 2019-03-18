jQuery(function($) {
	/*
	| ----------------------------------------------------------------------------------
	| Main menu & Mega menu
	| ----------------------------------------------------------------------------------
	*/
	// add class submenu to submenu's that are not megamenu
	$('.main-menu ul').each(function() {
		if ( $(this).closest('.mega-menu').length == 0 )
		{
			$(this).addClass('sub-menu');
		}
	});
	// add class has-child to each menu item that has child
	$('.main-menu li').each(function() {
		if ( $(this).find('ul').length ) 
			$(this).addClass('has-child');
	});
	
	$('.main-menu li').hoverIntent({
		// on menu mouse hover function handler
		over: function() {
			var $this = $(this),
				$mm = $this.children('.mega-menu'),
				$parent = $this.closest('.inner');
			
			// we need to setup megamenu position and width
			$mm.css({ 
				'left': ($parent.offset().left - $this.offset().left - 1) + 'px', 
				'width': $parent.outerWidth() + 'px', 
				'visibility': 'visible'
			});
			
			// now we are good and we can show the megamenu
			$this.addClass('active').children('ul, .mega-menu').animate({ 'height': 'toggle' }, 300, function() { $(this).css('overflow', 'visible'); } );
		}, 
		// mouse out handler
		out: function() {
			$(this).removeClass('active').children('ul, .mega-menu').animate({ 'height': 'toggle' }, 200, function() { $(this).css('overflow', 'visible'); } );
		},
		// A simple delay, in milliseconds, before the "out" function is called
		timeout: 200
	});
	
	/*
	| ----------------------------------------------------------------------------------
	| animate elements when they are in viewport
	| ----------------------------------------------------------------------------------
	*/
	$('.noIE .animated').waypoint(function() {
		var animation = $(this).data('animation');
		$(this).addClass('animation-done').addClass(animation);
	}, { 
		triggerOnce: true,
		offset: '60%' 
	});
});

				//	Responsive layout, resizing the items
				$('#hfx').carouFredSel({
					responsive: true,
					auto: false,
					prev: '#prev2',
					next: '#next2',
					width: '100%',
					scroll: 4,
					items: {
					//	width: 100,
					//	height: '30%',	//	optionally resize item-height
						visible: {
							min: 2,
							max: 10
						}
					}
				});
	/*---------------------------------
	  MAIN SLIDER
	  ---------------------------------*/
	$("#featured-slider").bxSlider({
		useCSS: false,
		pagerCustom: "#featured-slider-pager",
		controls: false,
		auto: false,
		mode: "horizontal",
		captions: true
	});
	/*---------------------------------
	  POST SLIDER
	  ---------------------------------*/
	$(".slider ul").bxSlider({
		mode: "fade", // horizontal, vertical, fade
		captions: false,
		controls: false,
		auto: false
	});
	/*---------------------------------
	  WIDGET SLIDER
	  ---------------------------------*/
	$(".widget-slider ul").bxSlider({
		mode: "horizontal", // horizontal, vertical, fade
		pause: 3000,
		captions: true,
		controls: true,
		pager: false,
		auto: true,
		prevText: "&#xf053;",
		nextText: "&#xf054;"
	});
	/*---------------------------------
	  CAROUSEL
	  ---------------------------------*/
	$("#featured-carousel").bxSlider({
		controls: true,
		adaptiveHeight: true,
		prevText: "&#xf053;",
		nextText: "&#xf054;",
		pager: false,
		minSlides: 1,
		maxSlides: 4,
		slideWidth: 276,
		slideMargin: 30
	});


	// Tabs
	var tabs = jQuery('ul.tabs');
	tabs.each(function (i) {
		// get tabs
		var tab = jQuery(this).find('> li > a');
		tab.click(function (e) {
			// get tab's location
			var contentLocation = jQuery(this).attr('href');
			// Let go if not a hashed one
			if (contentLocation.charAt(0) === "#") {
				e.preventDefault();
				// add class active
				tab.removeClass('active');
				jQuery(this).addClass('active');
				// show tab content & add active class
				jQuery(contentLocation).fadeIn(500).addClass('active').siblings().hide().removeClass('active');
			}
		});
	});




    $(document).ready(function() {
     
    $("#owl-demo").owlCarousel({
     
    navigation : true, 
    items : 4,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3]
     
    });
     
    });

