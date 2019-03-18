// start of scripts
console.log();

    // jQuery MeanMenu
    jQuery('nav#dropdown').meanmenu();
    // on scroll fixed navbar and back to top btn start
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 55) {
            $('#back-to-top').addClass('reveal');
            $('#header').addClass('navbar-fixed-top');
        } else {
            $('#back-to-top').removeClass('reveal');
            $('#header').removeClass('navbar-fixed-top');
        }

    });
	    /* meanmenu */
 	$('#mobile-menu-active').meanmenu({
		meanScreenWidth: "991",
		meanMenuContainer: ".mobile-menu",
	});




    /* slider */
    $( document ).ready(function( $ ) {
        $( '#gallery' ).sliderPro({
            width: '100%',
            height: 600,
            arrows: true,
            buttons: false,
            waitForLayers: true,
            thumbnailWidth: 200,
            thumbnailHeight: 100,
            thumbnailPointer: true,
            autoplay: false,
            autoScaleLayers: false,
            breakpoints: {
                500: {
                    thumbnailWidth: 120,
                    thumbnailHeight: 50
                }
            }
        });
    });


    // carousel home blog
    $(document).ready(function() {
     
      var owl = $("#blog-home");

      owl.owlCarousel({
         
          itemsCustom : [
            [0, 1],
            [450, 1],
            [600, 2],
            [700, 2],
            [1000, 2],
            [1200, 2],
            [1400, 2],
            [1600, 2]
          ],
         navigation:true,
    navigationText: [
      "<i class='icon-chevron-left icon-white'></i>",
      "<i class='icon-chevron-right icon-white'></i>"
      ],
  });
     
    });

