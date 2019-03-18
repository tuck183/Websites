/* --------------------------------------
=========================================
Theme : Lindengates
Version: 1.0 (Initial Release)
Designed By: Meshads
=========================================
*/

"use strict";
// mobileMenu
function mobileMenu() {
    if ($('.navigation .nav-footer button').length) {
        $('.navigation .nav-footer button').on('click', function() {
            $('.navigation .nav-header').slideToggle();
            $('.navigation .nav-header').find('.dropdown').children('a').append(function() {
                return '<button><img src="assets/images/menu-icon.png" class="img-responsive" width="20px" height="20px" alt="Education Template"></button>';
            });
            $('.navigation .nav-header .dropdown a button').on('click', function() {
                $(this).parent().parent().children('ul.submenu').slideToggle();
                return false;
            });
        });
    };
}

// Homepage Gallery

function HomepageGallery() {
      $('#slides').superslides({
        inherit_width_from: '.wide-container',
        inherit_height_from: '.wide-container',
        play: 7000,
        animation: 'fade',
      });
}

// News Carousel 

function NewsCarousel() {
 
      var owl = $(".event-tabs");
      owl.owlCarousel({
         
          itemsCustom : [
            [0, 1],
            [450, 1],
            [600, 3],
            [700, 3],
            [1000, 4],
            [1200, 4],
            [1400, 4],
            [1600, 4]
          ],
         navigation:false,
    navigationText: [
      "<i class='icon-chevron-left icon-white'></i>",
      "<i class='icon-chevron-right icon-white'></i>"
      ],
  });
}


// Dom Ready Function
jQuery(document).on('ready', function() {
    (function($) {
        // add your functions
        mobileMenu();
        HomepageGallery();
        NewsCarousel();
    })(jQuery);
});


