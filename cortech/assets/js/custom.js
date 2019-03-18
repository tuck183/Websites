/* --------------------------------------
=========================================
Theme : Cortech
Version: 1.0 (Initial Release)
=========================================
*/

"use strict";

function gallery(){
    // Banner Slider Start

    new fwslider().init({
        duration: "500", /* Fade Speed (miliseconds) */
        pause:    "6000"  /* Autoslide pause between slides (miliseconds)*/
    });

    // Banner Slider End
}


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

function sticky(){
    var stickyNavTop = $('#introduction').offset().top;
        var stickyNav = function(){
            var scrollTop = $(window).scrollTop();
                 
            if (scrollTop > stickyNavTop) { 
                $('#introduction').addClass('sticky');
            } else {
                $('#introduction').removeClass('sticky'); 
            }
        };
    stickyNav();

$(window).scroll(function() {
    stickyNav();
});
}


/*----------------------------------------------------*/
/* SELECT MENU ITEMS WITH WAYPOINTS
/*----------------------------------------------------*/
$(function() {
    var nav_container = $(".subNav, .dr-menu, .btn-1c");
    var nav = $(".subNav,.dr-menu, .btn-1c");
    var top_spacing = 0;
    var sections = $("section.nav-sections");
    var navigation_links = $(".subNav a");
    
    sections.waypoint({
        handler: function(event, direction) {
            var active_section;
            active_section = $(this);
            if (direction === "up") active_section = active_section.prev();

            var active_link = $('.subNav a[href="#' + active_section.attr("id") + '"]');
            /* window.location.hash = active_section.attr("id")+"/"; */
            navigation_links.removeClass("activeMenu");
            active_link.addClass("activeMenu");
        },
        offset: 80
    });
});


function PolicyNav(){
  
    /* menu navigation with scrollTop animation */
    $('a.nav-to[href*=#]:not([href=#])').each(function() {
        var $this = $(this);
        var isMenu = ($this.parents('.subNav,.dr-menu, .btn-1c').length) ? true : false;
        if ($this.children('.sub-arrow').length){
            $this.click(function(e){
                e.preventDefault();
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    if (!$this.children('.sub-arrow').is(':hover')){
                        $('html,body').animate({
                          scrollTop: target.offset().top - 50
                        }, {
                            duration: 1000,
                            easing: "easeOutQuad",
                            complete: function(){
                                if ($('.navbar-toggle').is(':visible') && isMenu){
                                    $('.navbar-toggle').trigger('click');
                                } 
                            }
                        });
                    }
                }
            });
        } else {
            $this.click(function(e){
                e.preventDefault();
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                      scrollTop: target.offset().top - 0
                    }, {
                        duration: 1200,
                        easing: "easeOutQuad",
                        complete: function(){
                            if ($('.navbar-toggle').is(':visible') && isMenu){
                                 $('.navbar-toggle').trigger('click');
                            }
                        }
                    });             
                }
            });
        }
    });   
}


/*----------------------------------------------------*/
/* WAYPOINTS SCROLL INTO VIEW
/*----------------------------------------------------*/
function isScrolledIntoView(id){
    var elem = "#" + id;
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    if ($(elem).length > 0){
        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();
    }

    return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom)
      && (elemBottom <= docViewBottom) &&  (elemTop >= docViewTop) );
}
function incrementNumerical(id, percent, speed){
    setTimeout(function(){
        var newVal = parseInt($(id+' .value').html(),10)+speed;

        if (newVal > percent) newVal = percent;
        $(id+' .value').html(newVal);
        if (newVal < percent){
            incrementNumerical(id, percent, speed);
        }
    }, 1);
}



// Dom Ready Function
jQuery(document).on('ready', function() {
    (function($) {
        // add your functions
        gallery();
        mobileMenu();
        sticky();
        PolicyNav();
        incrementNumerical();
        isScrolledIntoView();
        disablestuff();
    })(jQuery);
});


