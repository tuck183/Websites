$(window).load(function(){
    
    // Banner Slider Start

    new fwslider().init({
        duration: "1000", /* Fade Speed (miliseconds) */
        pause:    "6000"  /* Autoslide pause between slides (miliseconds)*/
    });

    // Banner Slider End
       $("#owl-demo").owlCarousel({
        navigation : true
      });
       
});
