<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Efficient Delivery - SwiftPro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGINS -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/swiper/css/swiper.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- END PLUGINS -->
    <!-- BEGIN PAGES CSS -->
    <link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="pages/css/pages-icons.css" rel="stylesheet" type="text/css" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGES CSS -->
  </head>
  <body class="pace-dark">
    <!-- BEGIN HEADER NOTIFICATION -->
    <section id="hdr_notification">
        <div class="header__notification bg-1">
            <div class="container">
    <div class="header__notification__content p-t-20">
        Looking to order food? Find your favourite restaurant in Abuja <a class="btn btn-sm btn-bordered btn-black block-title fs-12 hidden-sm hidden-xs" href="#" >Order Now</a>
                    </div>
                     <div class="header__notification__close"><a href="#"><svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"><path d="M10.667 0L6 4.666 1.334 0 0 1.333 4.667 6 0 10.665 1.333 12 6 7.333 10.668 12 12 10.666 7.333 6 12 1.332 10.667 0z" fill="#36363D" fill-rule="evenodd"></path></svg></a></div>
                </div>              
            </div>
        </div>
    </section>

    <!-- END HEADER -->
<section id="headr_nav" class="p-t-20 p-b-20">
    <!-- header -->
    <header>
      <div class="container">
            <div class="col-sm-12">
                <!-- logo -->
                <div class="logo pull-left p-t-10 p-b-10">
                    <a href="#">
                        <img src="assets/images/logo_black.png" class="img-responsive">
                    </a>
                </div>
                <!-- menu -->
            <div class="header-right-info pull-right clearfix">
               <nav class="mainmenu-area">        
                 <div class="navigation pull-left">
                <div class="nav-header">
                    <ul>
                        <li><a href="#">Home</a></li>

                        <li><a href="about.php">About</a></li>
                        <li>
                            <a href="food.swiftprong.com">Buy Food</a>                            
                        </li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="https://swiftprologistics.typeform.com/to/WPqu9n">Register Restaurant</a></li>
                        <li><a href="#">Log In</a></li>

            <a class="btn btn-md btn-bordered btn-black block-title fs-12" href="#" data-text="Sign Up">Sign Up</a>

                    </ul>
                </div>
                <div class="nav-footer">
                    <button><img src="assets/images/menu-icon.png" class="img-responsive" width="30px" height="30px" alt="Menu"></button>
                </div>
            </div>                      
            </nav>
            <!-- /.mainmenu-area -->
            </div>
            <!-- End menu -->
            </div>
      </div>
    </header>
    <!-- /.header -->

</section>

    <!-- BEGIN JUMBOTRON -->
    <section class="jumbotron demo-custom-height xs-full-height bg-black" data-pages-bg-image="assets/images/delivery_banner.jpg">
      <div class="container-xs-height full-height">
        <div class="col-xs-height col-middle text-left">
          <div class="container">
            <div class="col-sm-12 hidden-sm hidden-xs">
              <h1 class="light text-white">Online Ordering Built <br>just for you!</h1>
            </div>
    <!-- Price Estimate -->
        <div class="col-md-6 estimate_package bg-2">
             <h4 class="text-white">Get Pricing Estimate</h4>

              <form class="m-t-10 m-b-20">

                  <div class="form-group form-group-default">
                    <label class="control-label">Select Pickup Location</label>
                    <input id="autocomplete" name="autocomplete" placeholder="Enter Pickup Address" class="form-control" required>
                  </div>

                  <div class="form-group form-group-default">
                    <label class="control-label">Select Delivery Location</label>
                    <input id="auto_delivery" name="auto_delivery" placeholder="Enter Delivery Address" class="form-control" required>
                  </div>

                  <div class="sm-p-t-10 clearfix">
                    <button class="btn btn-black font-montserrat fs-12 pull-left xs-pull-left">Estimate Delivery Cost</button>
                  </div>
<p class="text-white fs-12">Price estimates are only valid for Abuja</p>
              </form>
    <script>
      var autocomplete, order_pickup, auto_delivery;

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        auto_delivery = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('auto_delivery')),
            {types: ['geocode']});

         order_pickup = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('order_pickup')),
            {types: ['geocode']});
                   // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDC50h1QCYNw5yPNmD1Q6NelqQUwaJekBU&libraries=places&callback=initAutocomplete"
        async defer></script>
        </div>
   
    <!--// Price Estimate -->
        <!-- Track Package -->
        <div class="col-md-6 track_package bg-0">
             <h4 class="text-white">Send/Receive Package</h4>

              <form class="m-t-10 m-b-20">

                  <div class="form-group form-group-default">
                    <label class="control-label">Select Pickup Location</label>
                    <input id="order_pickup" name="order_pickup" placeholder="Enter Pickup Address" class="form-control" required>
                  </div>

                  <div class="m-t-30 sm-p-t-10 clearfix">
                    <button class="btn btn-warning font-montserrat fs-12 pull-left xs-pull-left">Place Order</button> 
                    <button class="btn m-l-5 btn-danger font-montserrat fs-12 pull-left xs-pull-left">Track Package</button>
              </div>
              </form>
        </div>
        <!--// Track Package -->
          </div>
        </div>
        <!-- end -->
      </div>
    </section>
    <!-- END JUMBOTRON -->
        <!-- Content -->
    <section class="container container-fixed-lg p-t-65 p-b-30">
      <div class="md-p-l-20 md-p-r-20 xs-no-padding">
        <div class="row">
          <div class="col-sm-3 xs-m-b-30">
            <h2 class="font-montserrat no-margin text-uppercase p-l-30 sm-no-padding"><span data-pages-animate="number" data-value="10000000" data-animation-duration="800">0</span></h2>
            <h6 class="block-title fs-13 m-t-5 text-uppercase p-l-30 sm-no-padding muted">Potential deliveries</h6>
          </div>
          <div class="col-sm-9">
            <div class="sm-p-l-20 xs-no-padding">
              <p>Our motivation is to provide businesses with the efficient and seamless delivery needed to compete in an increasingly competitive world.</p>
              <p class="m-t-30 fs-12 font-arial hint-text">Last Mile Delivery
              </p>
            </div>
          </div>
        </div>
        <div class="progress progress-tiny m-t-15 m-b-5">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-pages-animate="progressbar" data-percentage="79%">
            <span class="sr-only">60% Complete</span>
          </div>
        </div>
        <p class="pull-right font-arial hint-text fs-11">67% <span class="hint-text">SwiftFood Launch</span></p>
      </div>
    </section>
        <!--// Content -->
            <!-- How to place order -->
    <section class="p-b-20">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h1 class="m-t-5 bold">Let us take control of your delivery</h1>
            <p class="m-t-20">With SwiftPro, customers can place orders directly from our website, Whatsapp, Twitter and Apps - same rates apply across all platform.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END How to place order -->

    <!-- BEGIN CONTENT SECTION -->
    <section class="p-b-85 p-t-75 p-b-65 p-t-55 bg-master-lightest">
      <div class="container">
        <div class="md-p-l-20 xs-no-padding clearfix">
          <div class="col-sm-3 no-padding">
            <div class="p-r-40 md-pr-30">
              <img alt="" class="m-b-20" src="assets/images/Parachute.svg">
              <h6 class="block-title p-b-5 bold">Place an Order </h6>
              <p class="m-b-30">Place an order quickly using any of our platforms (Whatsapp, Facebook, Website, App, SMS)</p>
            </div>
            <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
          </div>
          <!-- // End -->
          <div class="col-sm-3 no-padding">
            <div class="p-r-40 md-pr-30">
              <img alt="" class="m-b-20" src="assets/images/Prizemedalion.svg">
              <h6 class="block-title p-b-5 bold">Rider picks up the order </h6>
              <p class="m-b-30">Our well charted routes makes it easy for our riders to pinpoint pickup locations</p>
            </div>
            <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
          </div>
          <!-- // End -->
          <div class="col-sm-3 no-padding">
            <div class="p-r-40 md-pr-30">
              <img alt="" class="m-b-20" src="assets/images/Umbrella.svg">
              <h6 class="block-title p-b-5 bold">Our Rider delivers Package</h6>
              <p class="m-b-30">Our rider deliver packages in 60minutes from pickup</p>

            </div>
          </div>
          <!-- // end -->
          <div class="col-sm-3 no-padding">
            <div class="p-r-40 md-pr-30">
              <img alt="" class="m-b-20" src="assets/images/Umbrella.svg">
              <h6 class="block-title p-b-5 bold">Amazing Support</h6>
              <p class="m-b-30">Our admins are ready to support you from start to finish, 24/7</p>

            </div>
          </div>
          <!-- // end -->
            <div class="col-md-12 text-center">
                <a class="btn btn-lg btn-danger block-title fs-12 hidden-sm hidden-xs" href="#" >Place An Order Now</a>
            </div>
        </div>
      </div>
    </section>
    <!-- END CONTENT SECTION -->






    <section class="p-b-65 p-t-55 bg-1 full-height xs-full-width">
      <div class="container full-height">
        <div class="row full-height">
          <div class="col-sm-5 full-height ">
            <!-- BEGIN SLIDER -->
            <div class="swiper-container" id="inner-conent-slider">
              <div class="top-left z-index-10 xs-relative xs-m-b-20">
                <img src="assets/images/Headphones.svg" alt="">
                <h5 class="block-title text-black hint-text">
                    Discover
                  </h5>
              </div>
              <div class="swiper-wrapper ">
                <!-- BEGIN SLIDE -->
                <div class="swiper-slide bg-1 fit">
                  <h1 class="m-t-5  sm-p-t-20 light text-left">
                      Better customer service comes from better relationships with our <span class=
                      "font-montserrat text-uppercase">customers.</span>
                    </h1>
                </div>
                <!-- END SLIDE -->
                <!-- BEGIN SLIDE -->
                <div class="swiper-slide bg-1 fit">
                  <h1 class="m-t-5 light text-left">
                      <span class="font-montserrat text-uppercase">True prosperity</span> is the result of well placed
                      confidence in ourselves & our fellow man
                    </h1>
                </div>
                <!-- END SLIDE -->
                <!-- BEGIN SLIDE -->
                <div class="swiper-slide bg-1 fit">
                  <h1 class="m-t-5 light text-left">
                      Every great business<br>
                      is built on <span class="font-montserrat text-uppercase">Friendship.</span>
                    </h1>
                </div>
                <!-- END SLIDE -->
              </div>
              <p class="text-black hint-text font-arial small-text bottom-left z-index-10 xs-relative xs-m-b-20 xs-m-t-20">
             <a class="btn btn-lg btn-black block-title fs-12" href="#">
             Order Food Now </a> </p>
                      
            </div>
          </div>
          <div class="col-sm-7 full-height pull-left">
            <div class="container-xs-height full-height">
              <div class="col-xs-height col-middle text-left">
                <div class="col-md-11">
                  <img alt="" class="image-responsive-height lazy" src="assets/images/Ipad11.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-t-55 bg-success-light scroll-x-hidden" data-pages-bg-image="assets/images/work.jpg" data-pages="parallax">
      <div class="container p-b-100">
        <h5 class="block-title text-white ">Customers</h5>
        <div class="row p-b-65 p-t-55">
          <div class="col-sm-6">
            <h1 class="m-t-5 light text-white">
              Powered by companies who trust us 
              with their customers.
            </h1>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
                <div class="progress progress-small transparent-white m-t-15">
                  <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                  </div>
                </div>
                <h3 class="text-white no-margin lh-large">100%</h3>
                <p class="text-white fs-12 font-arial">Fast Delivery
                </p>
              </div>
              <div class="col-sm-6">
                <div class="progress progress-small transparent-white m-t-15">
                  <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                  </div>
                </div>
                <h3 class="text-white no-margin lh-large">100%</h3>
                <p class="text-white fs-12 font-arial">Efficiency Guaranteed
                </p>
              </div>
              <div class="col-sm-6">
                <div class="progress progress-small transparent-white m-t-15">
                  <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                  </div>
                </div>
                <h3 class="text-white no-margin lh-large">100%</h3>
                <p class="text-white fs-12 font-arial">Awesomness
                </p>
              </div>
              <div class="col-sm-6">
                <div class="progress progress-small transparent-white m-t-15">
                  <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                  </div>
                </div>
                <h3 class="text-white no-margin lh-large">100%</h3>
                <p class="text-white fs-12 font-arial">Reliability
                </p>
              </div>
            </div>
          </div>
        </div>
        <p class="text-white font-arial small-text m-b-50"></p>
        <div class="content-triangle"></div>
      </div>
    </section>
    <section class="p-b-55 p-t-25">
      <!-- BEGIN TESTIMONIALS SLIDER-->
      <div class="swiper-container" id="testimonials_slider">
        <div class="swiper-wrapper">
          <!-- BEGIN TESTIMONIAL -->
          <div class="swiper-slide">
            <div class="container text-left">
              <h5 class="semi-bold m-b-30">- Kukli Yoghurt</h5>
              <h3 class="m-b-30">“SwiftPro is the right balance of proven solution and true partner. They've helped us meet our customers on time and improved our process”</h3>
              <h6 class="block-title hint-text fs-12">Kukli Yoghurt</h6>
            </div>
          </div>
          <!-- END TESTIMONIAL -->
        </div>
        <!-- Add Navigation -->
        <div class="container">
          <div class="swiper-pagination relative pull-left"></div>
        </div>
      </div>
      <!-- END TESTIMONIALS -->
    </section>


    <!-- BEGIN FOOTER -->
    <section class="p-b-55 p-t-75 xs-p-b-20 bg-master-darker ">
      <div class="container">
        <div class="row">
          <div class="col-sm-2 col-xs-12 xs-m-b-40">

            <img src="assets/images/logo_white.png" data-src-retina="assets/images/logo_white.png" class="img-responsive alt" alt="">

            <ul class="no-style fs-12 no-padding m-t-20">
              <li class="inline no-padding"><a class="text-white fs-16 xs-no-padding" href="#"><i class="fa fa-facebook"></i></a></li>

              <li class="inline no-padding"><a class="text-white p-l-30 fs-16" href="#"><i class="fa fa-twitter"></i></a></li>

              <li class="inline no-padding"><a class="text-white p-l-30 fs-16" href="#"><i class="fa fa-instagram"></i></a></li>


              <li class="inline no-padding"><a class="text-white p-l-30 fs-16" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
 
          </div>
          <div class="col-sm-2 col-xs-6 xs-m-b-20">
            <h6 class="font-montserrat text-uppercase fs-14 text-white p-b-10 bold">Company </h6>
            <ul class="no-style">
              <li class="m-b-5 no-padding"><a href="#" class="link text-white ">About Us</a></li>
              <li class="m-b-5 no-padding"><a href="#" class="link text-white">Terms and Conditions</a></li>
              <li class="m-b-5 no-padding"><a href="#" class="link text-white">Privacy Policy</a></li>
              <li class="m-b-5 no-padding"><a href="#" class="link text-white">Shipping Policy</a></li>
               <li class="m-b-5 no-padding"><a href="#" class="link text-white">Download Assets</a></li>
            </ul>
          </div>
          <div class="col-sm-2 col-xs-6 xs-m-b-20">
            <h6 class="font-montserrat text-uppercase fs-14 text-white p-b-10 bold">Partnerships </h6>
            <ul class="no-style">
              <li class="m-b-5 no-padding"><a href="#" class="link text-white ">Our Pricing</a></li>
              <li class="m-b-5 no-padding"><a href="#" class="link text-white ">Become a Rider</a></li>
              <li class="m-b-5 no-padding"><a href="#" class="link text-white ">Register your Restaurant</a></li>


            </ul>
          </div>
          <div class="col-sm-2 col-xs-6 xs-m-b-20">
            <h6 class="font-montserrat text-uppercase fs-14 text-white p-b-10 bold">Get in Touch </h6>
            <ul class="no-style">
              <li class="text-white m-b-5 no-padding">hello@swiftprong.com</li>
              <li class="text-white m-b-5 no-padding">+234.809.000.0000</li>
              <li class="text-white m-b-5 no-padding">+234.909.000.0000</li>
            </ul>
          </div>
          <div class="col-sm-4 col-xs-6 xs-m-b-20 font-arial">
        <h6 class="font-montserrat text-uppercase fs-14 text-white p-b-10 bold">Subscribe to our newsletter </h6>
            <div class="form-group form-group-default input-group col-md-12  col-sm-12 bg-transparent b-a b-transparent-white">
              <label class="control-label">Email Address</label>
              <input class="form-control text-white" placeholder="Example@mailserver.com" type="email">
              <span class="input-group-btn">
                <button class="btn btn-primary m-r-10 btn-cons" type="button">Subscribe!</button>
              </span>
            </div>
          </div>
        </div>
 
      </div>
    </section>
    <!-- END FOOTER -->
    <!-- BEGIN CORE FRAMEWORK -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="pages/js/pages.image.loader.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- BEGIN SWIPER DEPENDENCIES -->
    <script type="text/javascript" src="assets/plugins/swiper/js/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/velocity/velocity.min.js"></script>
    <script type="text/javascript" src="assets/plugins/velocity/velocity.ui.js"></script>
    <!-- BEGIN RETINA IMAGE LOADER -->
    <script type="text/javascript" src="assets/plugins/jquery-unveil/jquery.unveil.min.js"></script>
    <!-- BEGIN TEXT ROTATOR -->
    <script type="text/javascript" src="assets/plugins/text-rotate/jquery.simple-text-rotator.min.js"></script>
    <!-- BEGIN AUTO-ANIMATE NUMBERS -->
    <script type="text/javascript" src="assets/plugins/jquery-appear/jquery.appear.js"></script>
    <script type="text/javascript" src="assets/plugins/animateNumber/jquery.animateNumbers.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN PAGES FRONTEND LIB -->
    <script type="text/javascript" src="pages/js/pages.frontend.js"></script>
    <!-- END PAGES LIB -->
    <!-- BEGIN YOUR CUSTOM JS -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <!-- END PAGES LIB -->
  </body>
</html>