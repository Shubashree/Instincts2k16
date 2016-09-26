<!DOCTYPE html>
<?php session_start();
    
      if(!isset($_GET['contactName2'])){
        $_GET['contactName2']="";
    }

    if(!isset($_GET['contactEmail2'])){
        $_GET['contactEmail2']="";
    }

    if(!isset($_GET['contactMessage'])){
        $_GET['contactMessage']="";
    }
  
    if(!isset($_GET['contactSubject'])){
        $_GET['contactSubject']="";
    }

    if(isset($_GET['contactSubmit'])){
    // code for check server side validation


    if(empty($_SESSION['contact_captcha_code'] ) || strcasecmp($_SESSION['contact_captcha_code'], $_GET['contact_captcha_code']) != 0){
        $contact_msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.

    }else{// Captcha verification is Correct. Final Code Execute here!
         
        $contact_msg="<span style='color:green'>The Validation code has been matched.</span>";
      
        
        //header("Location: php/enterContactMessage.php?".$_SERVER['QUERY_STRING']);
        echo "<script>
        alert('Email sent!');
        window.location.href='php/enterContactMessage.php?".$_SERVER['QUERY_STRING']."';
        </script>";
   
      }

    }

    if(!isset($_GET['contactName'])){
        $_GET['contactName']="";
    }
    if(!isset($_GET['contactPhone'])){
        $_GET['contactPhone']="";
    }
    if(!isset($_GET['contactEmail'])){
        $_GET['contactEmail']="";
    }
    if(!isset($_GET['contactCollege'])){
        $_GET['contactCollege']="";
    }

    if(isset($_GET['Submit'])){
	// code for check server side validation

	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_GET['captcha_code']) != 0){
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.
	}else{// Captcha verification is Correct. Final Code Execute here!
		$msg="<span style='color:green'>The Validation code has been matched.</span>";
        header("Location: php/entry.php?".$_SERVER['QUERY_STRING']);
	}

}
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="matx no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Instincts2k!6</title>
        <meta name="description" content="SSN Instincts V11 Website">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- matx favicons -->
       
        <link rel="icon" type="image/png" href="img/instincts/ico/apple-touch-icon-114x114.png" sizes="16x16"/>
        <meta name="application-name" content="&nbsp;" />
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="img/instincts/ico/apple-touch-icon-114x114.png"/>

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,700italic,700,500italic,900' rel='stylesheet' type='text/css'>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="assets/libs/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/libs/mdl/material.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/libs/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/libs/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets/libs/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/common.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/lightbox.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link href="assets/css/animate.css" rel="stylesheet">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="assets/libs/revolution/css/settings.css">
        <!-- REVOLUTION LAYERS STYLES -->
        

        <!-- REVOLUTION NAVIGATION STYLES -->
        

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->




        <!-- Header Scripts -->
        <!--[if lt IE 9]>
            <script src="assets/js/vendor/html5shiv.js"></script>
        <![endif]-->
  
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Loader -->
        <div id="loader" class="loader-wrapper">
            <div class="matx-preloader"></div>
        </div>

        <!-- Overlay display while mobile navigation will open  -->
        <div class="nav-overlay-bg"></div>

        <!-- start site main header -->
        <header class="main-header init-animation">

            <!-- start desktop logo -->
            <a href="#" class="logos matx-logo logo-initial init-animation">
                <img class="logo-dark" src="img/instincts/logo/ssn.png" alt="logo">
                <img class="logo-lite" src="img/instincts/logo/logo-nav.png" alt="logo">
            </a>
            <!-- end desktop logo -->

            <!-- start desktop nav -->
            <nav class="nav-typo main-nav">
                <ul>
                    <li class="active"><a href="#home" data-target="#home" class="menu-smooth-scroll">Home</a></li>
                    <li class="active"><a href="#about" data-target="#about" class="menu-smooth-scroll">About</a></li>
                    <li><a href="#events" data-target="#events" class="menu-smooth-scroll">Events</a></li>
                    <li><a href="#special" data-target="#special" class="menu-smooth-scroll">Special Event</a></li>
                    <li><a href="https://drive.google.com/file/d/0B809GXHbvqjzXy1hdzk1a2xOQnc5Tm0xa2pjRFBuMVpXTjNN/view?usp=sharing" data-target="#schedule" target="_blank">Schedule</a></li>
                    <li><a href="#gallery" data-target="#gallery" class="menu-smooth-scroll">Gallery</a></li>
                    <li><a href="#sponsor" data-target="#sponsor" class="menu-smooth-scroll">Sponsors</a></li>
                   <li><a href="hosp/hospitality.html" target="_blank">Hospitality</a></li>
                    <li><a href="#contact" data-target="#contact" class="menu-smooth-scroll">Contact</a></li>
                <li><a href="#register" data-target="#register" class="menu-smooth-scroll">Register</a></li>
                <li><a href="https://ssninstincts.wordpress.com/" target="_blank">Blog</a></li>
                </ul>
            </nav>
            <!-- end desktop nav -->

            <!-- start mobile logo -->
            <a href="index.php" class="logo matx-logo mobile-logo">
                <img src="img/instincts/ico/apple-touch-icon-57x57.png" alt="logo">
            </a>
            <!-- end mobile logo -->

            <!-- toogle icons, which are responsible for display and hide menu in small layout -->
            <div class="mdl-layout__drawer-button mobile-menu-area">
                <i id="menu-back-btn" class="mobile-menu-ctrl zmdi zmdi-arrow-right"></i>
                <i id="menu-show-btn" class="mobile-menu-ctrl active zmdi zmdi-menu"></i>
            </div>

        </header>
        <!-- end site main header -->

        <!-- start mobile nav -->
        <nav class="nav-typo mobile-nav">
            <ul>
                <li class="active"><a href="#home" data-target="#home" class="menu-smooth-scroll">Home</a></li>
                <li class="active"><a href="#about" data-target="#about" class="menu-smooth-scroll">About</a></li>
                <li><a href="#service" data-target="#service" class="menu-smooth-scroll">Events</a></li>
                <li><a href="#special" data-target="#special" class="menu-smooth-scroll">Special Event</a></li>
                <li><a href="https://drive.google.com/file/d/0B809GXHbvqjzXy1hdzk1a2xOQnc5Tm0xa2pjRFBuMVpXTjNN/view?usp=sharing" data-target="#schedule" target="_blank">Schedule</a></li>
                <li><a href="#gallery" data-target="#gallery" class="menu-smooth-scroll">Gallery</a></li>
                <li><a href="#sponsor" data-target="#sponsor" class="menu-smooth-scroll">Sponsors</a></li>
               <li><a href="hosp/hospitality.html" target="_blank">Hospitality</a></li>
                <li><a href="#contact" data-target="#contact" class="menu-smooth-scroll">Contact</a></li>
                <li><a href="#register" data-target="#register" class="menu-smooth-scroll">Register</a></li>
                <li><a href="https://ssninstincts.wordpress.com/" target="_blank">Blog</a></li>
            </ul>
        </nav>
        <!-- end mobile nav -->

        <!-- start main wrapper   -->
        <main class="main-wrapper">

            <!-- start banner section-->
            <section id="home" class="section-main">

                    <div class="row" id="home_text">
                        <div class="col-md-12">
                     <p id="text_upper"><span id="ssn">SSN</span> College of Engineering </p>
                         </div>
                        <div class="col-md-12">
                     <p id="text_middle">in association with </p>
                         </div>
                        <div class="col-md-12">
                     <img id="hcl_img" src="img/instincts/sponsors/hcl.png"  />
                         </div>
                        <div class="col-md-12">
                        <p id="text_lower"> <span style="font-size: 20px;">Presents</span> Instincts v11</p>
                        </div>
                        <div class="col-md-12">
                        <a href="#about" data-target="#about" class="menu-smooth-scroll"><img src="img/instincts/ico/apple-touch-icon-114x114.png" id="ins_mainpg"/></a>
                        </div>
                     </div>

                <div id="rev_slider_70_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="web-product-light-hero66" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

                        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                    <div id="rev_slider_70_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">

                        <ul>

                            <!-- SLIDE 1 -->
                            <li class="slider-color-schema-dark" data-index="rs-68" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-saveperformance="off"  data-title="Intro" data-description="">

                                <!-- MAIN IMAGE -->
                                <img src="img/instincts/slider/5_g.jpg"  alt=""  data-bgposition="center bottom" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina style="background:white;">
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption slide-3 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                    id="sl1-lyr1"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full"
                                    data-height="full"
                                    data-whitespace="normal"
                                    data-transform_idle="o:1;"
                                    data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="s:300;s:300;"
                                    data-start="1000"
                                    data-basealign="slide"
                                    data-responsive_offset="on" style="z-index:1;background-color: rgba(31, 27, 27, 0.29);">
                                </div>


                            </li>

                            <!-- SLIDE 2 -->
                            <li class="slider-color-schema-dark" data-index="rs-2" data-transition="fade" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="img/instincts/slider/1.jpg"  alt=""  data-bgposition="center bottom" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYER NR. 1 -->
                            <div class="tp-caption slide-3 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                    id="sl1-lyr1"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full"
                                    data-height="full"
                                    data-whitespace="normal"
                                    data-transform_idle="o:1;"
                                    data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="s:300;s:300;"
                                    data-start="1000"
                                    data-basealign="slide"
                                    data-responsive_offset="on" style="z-index:1;background-color: rgba(31, 27, 27, 0.29);">
                                </div>

                            </li>

                            <!-- SLIDE 3 -->
                            <li class="slider-color-schema-dark" data-index="rs-3" data-transition="fade" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="img/instincts/slider/IMG_5288.JPG"  alt=""  data-bgposition="center bottom" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption slide-3 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                    id="sl1-lyr1"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full"
                                    data-height="full"
                                    data-whitespace="normal"
                                    data-transform_idle="o:1;"
                                    data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="s:300;s:300;"
                                    data-start="1000"
                                    data-basealign="slide"
                                    data-responsive_offset="on" style="z-index:1;background-color: rgba(31, 27, 27, 0.29);">
                                </div>
                                <!-- Slide Video Background -->




                            </li>

                        </ul>
                    </div>
                </div><!-- END REVOLUTION SLIDER -->
            </section>
            <!-- end banner section-->

            <!-- start about section-->
            <section class="dark-secion what-we-do what-we-do-v2 overflow-hidden" id="first_span">
                    <div class="section-common-space" style="background: url('img/instincts/img5.jpg') center center repeat;background-size: contain;">
                        <div class="container">
                                <div class="row" style="text-align: center;">
                                    <h1 class="col-md-12"><span>At SSN</span></h1>
                                    <h1 class="col-md-12"><span>College of Engineering</span></h1>
                                </div>

                        </div>
                    </div>
                </section>

                <!-- start highlighted things portion -->
            <section id="about" class="section-main">



            <section class="secondary-bg-color story-experience story-experiencev1" id="about">
                    <div class="section-common-space">
                        <div class="container">
                            <div class="row">
                                <div class="why-choose-us-content-start" data-action="accordionWithImage">
                                        <div class="col-sm-12 col-md-7 col-lg-offset-1 col-lg-5">
                                            <ul class="wcu-collapse" id="abt_collapse">
                                                <li class="single-acc-item collapse-open">
                                                    <div class="collapse-label">
                                                        <div class="cllabelmain">About us</div>
                                                        <div class="icwrap"><i class="zmdi zmdi-plus"></i></div>
                                                    </div>
                                                    <div class="collapse-content" id="abt_us">Instincts, the annual cultural extravaganza of the SSN College of Engineering is back this year with its usual bang! This year we are booting up to spread our vibes throughout the city on the 10th, 11th and 12th 
of March.<br> Being the 11th version of Instincts, we are not about to disappoint you this year! With an exciting lineup of events, and legends in each field prepared to judge you, this version of Instincts is only going to get 

better. It doesn’t stop there! Every night of Instincts is filled with some crazy singing and dancing with 

leading DJs, professional dance teams and enchanting voices from the cine industry set to startle you 

with their stellar performances. <br>

This year, we, at SSN are celebrating the comeback of our beautiful city, after the recent disasters. 

Come, be a part of us, and contribute your part to the city.
</div>
             
                                                </li>
                                                <li class="single-acc-item">
                                                    <div class="collapse-label">
                                                        <div class="cllabelmain">Stats</div>
                                                        <div class="icwrap"><i class="zmdi zmdi-plus"></i></div>
                                                    </div>
                                                    <div class="collapse-content" id="abt_us">
                                                    <div class="row satistic-wrap">

                                                            <div class="col-xxs-6 col-xs-3 text-center">
                                                                <div class="satistic" style="background: white;
    padding: 8px;">
                                                                    <div class="top"><i class="zmdi zmdi-equalizer"></i><span class="countNumb" data-from="1" data-to="250">5L</span></div>
                                                                    <div class="bottom">Prizes Worth</div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xxs-6 col-xs-3 text-center">
                                                                <div class="satistic" style="background: white;
    padding: 4px;">
                                                                    <div class="top"><i class="zmdi zmdi-equalizer"></i><span class="countNumb" data-from="1" data-to="554">10K</span></div>
                                                                    <div class="bottom">Avg Foot Fall</div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xxs-6 col-xs-3 text-center">
                                                                <div class="satistic" style="background: white;
    padding: 5px;">
                                                                    <div class="top"><i class="zmdi zmdi-equalizer"></i><span class="countNumb" data-from="1" data-to="826">826</span></div>
                                                                    <div class="bottom">Tweets</div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="dark-secion why-choose-us overflow-hidden" id="thrill">

                    <div class="bg-image what-we-do-bg" data-center="transform: translate3d(0px, -50%, 0px)" data-top-bottom="transform: translate3d(0px, -25%, 0px)" data-bottom-top="transform: translate3d(0px, -75%, 0px)"></div>

                    <div class="overlay overlay-six">
                        <div class="section-common-space">
                            <div class="container">
                                <div class="row">
                                    <div class="why-choose-us-content-start" data-action="accordionWithImage">
                                         <!-- start testimonial slider -->
                                <div class="slider-item testimonials styled-paginantion colorsch-black" data-action="testimonialSlider">

                                    <!-- start single testimonial -->
                                    <div class="text-center single-testimonial">
                                        <div class="recomenders-info">
                                            <!-- testimonial text -->
                                            <h2><span>Come <span style="font-weight: bolder;">EXPERIENCE</span> the thrill like never before</span></h2>
                                        </div>
                                    </div>
                                    <!-- end single testimonial -->

                                   <!-- start single testimonial -->
                                    <div class="text-center single-testimonial">
                                        <div class="recomenders-info">
                                            <!-- testimonial text -->
                                            <h2><span>March 10, 11 & 12</span></h2>
                                        </div>
                                    </div>
                                    <!-- end single testimonial -->

                                    <!-- start single testimonial -->
                                    <div class="text-center single-testimonial">
                                        <div class="recomenders-info">
                                            <!-- testimonial text -->
                                           <h2><span>At <span style="font-weight: bolder;">SSN</span> College of Engineering</span></h2>
                                        </div>
                                    </div>
                                    <!-- end single testimonial -->

                                </div>
                                <!-- end testimonial slider -->


                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                </section>
            </section>
            <!-- end service section-->


            <!-- start portfolio section-->
            <section id="events" class="section-main portfolio">
                <div class="section-common-space">
                    <div class="container">

                        <!-- start section title -->
                        
                        <div class="text-center section-heading">
                            <img src="img/instincts/logo/instinctslogo-01.png" style="height: 100px"/>
                            <h2 class="title-sec" style="font-size: 36px;">EVENTS</h2>
                        </div>
                        <!-- end section title -->

                        <div class="section-main-content-start" data-action="portfolio">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="text-center portfolio-category-wrap">

                                       
                                       <ul class="clearfix portfolio-category mdl-shadow--2dp">
                                            <!--<li class="filter active" data-target="*">ALL</li>-->
                                            <li class="filter" data-target=".dance">DANCE</li>
                                           <li class="filter" data-target=".photo">PHOTOGRAPHY</li>
                                            <li class="filter" data-target=".quiz">QUIZ</li>
                                            <li class="filter" data-target=".gaming">GAMING</li>
                                            <li class="filter" data-target=".variety">VARIETY</li>
                                            <li class="filter" data-target=".elc">ELC</li>
                                            <li class="filter" data-target=".fine">FINE ARTS</li>
                                            <li class="filter" data-target=".lop">LOP</li>
                                           <li class="filter" data-target=".rof">REELS OF FIRE</li>
                                            <li class="filter" data-target=".music">MUSIC</li>
                                                 <li class="filter" data-target=".saral">சாரல் தமிழ் மன்றம்</li>
                                           
                                       </ul>
                                        

                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <!-- start portfolio items -->
                                <div class="clearfix protfolio-items" id="port" style="display:none;">

                                    <!-- start single portfolio item -->
                                    <div id="portfolio-01" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio saral">
                                        <div class="portfolio-item">
                                            <a href="portfolios/portfolio-01/pattimanram.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/pattimanram.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">பட்டிமன்றம்</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end single portfolio item -->

                                    <!-- start single portfolio item-->
                                    <div id="portfolio-02" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio photo">
                                        <div class="portfolio-item">
                                            <a href="portfolios/photography/online.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/onlinephoto.jpg" alt="portfolio" style="height: 175px">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Online Photography</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end single portfolio item-->

                                    <!-- start single portfolio item-->
                                    <div id="portfolio-03" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio saral">
                                        <div class="portfolio-item">
                                            <a href="portfolios/portfolio-01/vaayai_moodi_pesavum.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/vaayai-moodi-pesavum-poster-610x330.jpg" alt="portfolio" style="height:175px;">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">வாயை மூடி பேசவும்</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end single portfolio item -->

                                    <!-- start single portfolio item-->
                                    <div id="portfolio-04" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio photo">
                                        <div class="portfolio-item">
                                            <a href="portfolios/photography/onday.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/onday.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Onday Photography</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end single portfolio item -->

                                    <!-- start single portfolio item-->
                                    <div id="portfolio-05" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio saral">
                                        <div class="portfolio-item">
                                            <a href="portfolios/portfolio-01/sagalakala.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/Sakalakala%20Vallavan%20(4%20of%2012).jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">சகலகலா வல்லவன்</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end single portfolio item -->

                                    <!-- start single portfolio item-->
                                    <div id="portfolio-06" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio saral">
                                        <div class="portfolio-item">
                                            <a href="portfolios/portfolio-01/kalakkal.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/Kavi%20Saaral%20(1%20of%203).jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">கலக்கல் கவிதை</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div id="portfolio-07" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio saral">
                                        <div class="portfolio-item">
                                            <a href="portfolios/portfolio-01/kirukezuthu.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/Kirukezhuthu%20(1%20of%204).jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">கிறுக்கெழுத்து (Creative Writing)</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div id="portfolio-08" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio quiz">
                                        <div class="portfolio-item">
                                            <a href="portfolios/quiz/general.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/General-Quiz.jpg" alt="portfolio" style="height:175px">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">General Quiz</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div id="portfolio-09" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio saral">
                                        <div class="portfolio-item">
                                            <a href="portfolios/portfolio-01/sirukadhai.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/saaral/siru_kadhai.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">சிறுகதைப் போட்டி</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div id="portfolio-10" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio saral">
                                        <div class="portfolio-item">
                                            <a href="portfolios/portfolio-01/isai.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/saaral/isai_tamil.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">இசைத்தமிழ்</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div id="portfolio-11" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio saral">
                                        <div class="portfolio-item">
                                            <a href="portfolios/portfolio-01/kurukezhuthu.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/saaral/Kurukezhuthu_Potti.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">குறுக்கெழுத்துப்போட்டி</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div id="portfolio-12" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio quiz">
                                        <div class="portfolio-item">
                                            <a href="portfolios/quiz/spent.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/spent_quiz.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Spent Quiz</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div id="portfolio-13" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio variety">
                                        <div class="portfolio-item">
                                            <a href="portfolios/variety/adzap.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/adzap1.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">ADZAP</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-14" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio variety">
                                        <div class="portfolio-item">
                                            <a href="portfolios/variety/mash.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/mash%20it%20up%20thumb.png" alt="portfolio" style="height:175px;">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Mash it up</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-15" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio variety">
                                        <div class="portfolio-item">
                                            <a href="portfolios/variety/60.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/Infographic-60seconds-Thumb1.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">60 Seconds</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-16" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio variety">
                                        <div class="portfolio-item">
                                            <a href="portfolios/variety/variety_show.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/variety_show.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">VARIETY SHOW</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-17" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio variety">
                                        <div class="portfolio-item">
                                            <a href="portfolios/variety/treasure.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/treasure-hunt.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">TREASURE HUNT</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-18" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio variety">
                                        <div class="portfolio-item">
                                            <a href="portfolios/variety/mix.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/mix-match-logo.png" alt="portfolio" style="height:175px;">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">MIX N MATCH</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div id="portfolio-19" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio fine">
                                        <div class="portfolio-item">
                                            <a href="portfolios/fine_arts/rapid_fire.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/rapid.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Rapid Fire Art</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-20" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio fine">
                                        <div class="portfolio-item">
                                            <a href="portfolios/fine_arts/mehendi.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/mehendi.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Mehendi</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-21" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio fine">
                                        <div class="portfolio-item">
                                            <a href="portfolios/fine_arts/glass.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/glass.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Glass painting</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div id="portfolio-22" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio lop">
                                        <div class="portfolio-item">
                                            <a href="portfolios/lop/24hr.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/24hr.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">24 Hour Theatre</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-23" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio fine">
                                        <div class="portfolio-item">
                                            <a href="portfolios/fine_arts/face.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/face.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Face Painting</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-24" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio music">
                                        <div class="portfolio-item">
                                            <a href="portfolios/music/lightmusic.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/music/light_music.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">LIGHT MUSIC BAND EVENT- DHWANI</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-25" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio music">
                                        <div class="portfolio-item">
                                            <a href="portfolios/music/idol.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/music/solo_singing.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">LIGHT MUSIC SOLO VOCAL – SSN IDOL</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-26" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio music">
                                        <div class="portfolio-item">
                                            <a href="portfolios/music/carnatic.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/music/carnatic.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">CARNATIC MUSIC EVENT (SOLO) – SWARALAYA</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-27" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio music">
                                        <div class="portfolio-item">
                                            <a href="portfolios/music/western.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/western.jpg" alt="portfolio" style="height: 175px;">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">WESTERN BAND HUNT - ELECTRICS</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-28" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio dance">
                                        <div class="portfolio-item">
                                            <a href="portfolios/dance/choreo.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/dance/choreo-nite.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">CHOREONITE</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-29" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio dance">
                                        <div class="portfolio-item">
                                            <a href="portfolios/dance/western.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/dance/western-solo.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">WESTERN SOLO DANCE</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-30" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio dance">
                                        <div class="portfolio-item">
                                            <a href="portfolios/dance/adapt.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/dance/adapttotune.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">ADAPT TUNE</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-31" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio dance">
                                        <div class="portfolio-item">
                                            <a href="portfolios/dance/classical.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/dance/classical-solo.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Classical Solo</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-32" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio rof">
                                        <div class="portfolio-item">
                                            <a href="portfolios/rof/rof.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/realsoffire.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Reels of Fire</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-32" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio gaming">
                                        <div class="portfolio-item">
                                            <a href="portfolios/gaming/dota.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/gaming/dota.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Dota2</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-33" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio gaming">
                                        <div class="portfolio-item">
                                            <a href="portfolios/gaming/cs.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/gaming/cs.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Counter strike 1.6</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div id="portfolio-34" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio gaming">
                                        <div class="portfolio-item">
                                            <a href="portfolios/gaming/fifa.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/gaming/fifa.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Fifa</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                     <div id="portfolio-35" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio gaming">
                                        <div class="portfolio-item">
                                            <a href="portfolios/gaming/nfs.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/gaming/nfs.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">NFS Most Wanted</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-36" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio elc">
                                        <div class="portfolio-item">
                                            <a href="portfolios/elc/debate.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/elc/debate.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">SSN Debates</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-37" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio elc">
                                        <div class="portfolio-item">
                                            <a href="portfolios/elc/jam.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/elc/jam.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">JAM</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-38" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio elc">
                                        <div class="portfolio-item">
                                            <a href="portfolios/elc/ship.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/elc/Shipwreck.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Ship Wreck</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-39" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio elc">
                                        <div class="portfolio-item">
                                            <a href="portfolios/elc/lawyer.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/elc/harvey.jpg" alt="portfolio" style="height: 200px;">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Lawyer up</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-40" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio elc">
                                        <div class="portfolio-item">
                                            <a href="portfolios/elc/pot.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/elc/pot.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">POT POURRI</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-41" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio elc">
                                        <div class="portfolio-item">
                                            <a href="portfolios/elc/creative.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/elc/creative_writing.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">Creative writing</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-42" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio elc">
                                        <div class="portfolio-item">
                                            <a href="portfolios/elc/lounge.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/elc/stress.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">ELC Lounge</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="portfolio-43" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio saral">
                                        <div class="portfolio-item">
                                            <a href="portfolios/portfolio-01/theru.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/theru.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">தெருக்கூத்து</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                     <div id="portfolio-44" class="col-xxs-6 col-xs-6 col-sm-3 single-portfolio saral">
                                        <div class="portfolio-item">
                                            <a href="portfolios/portfolio-01/kolam.html" class="ajax-portfolio">

                                                <!-- start portfolio image -->
                                                <div class="protfolio-image">
                                                    <img src="img/instincts/events/kolam.jpg" alt="portfolio">
                                                </div>
                                                <!-- end portfolio image -->

                                                <div class="text-center portfolio-meta">
                                                    <i class="zmdi zmdi-plus-circle"></i>

                                                    <!-- portfolio items caption -->
                                                    <h3 class="portfolio-title">கோலப்போட்டி</h3>
                                                </div>
                                                <div class="pf-overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <!-- end single portfolio item -->

                                </div>
                                <!-- end portfolio items -->

                                <!-- Portfolio ajax div, it's a hidden div need for ajax loading -->
                                

                                <!-- start portfolio load more button -->
                                
                                <!-- end portfolio load more button -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- start video-checkout portion-->
                <section class="video-checkout" >

                    <div class="bg-image video-checkout-bg" data-center="transform: translate3d(0px, -50%, 0px)" data-top-bottom="transform: translate3d(0px, -25%, 0px)" data-bottom-top="transform: translate3d(0px, -75%, 0px)"></div>

                    <div class="overlay overlay-three" style="background-color:rgba(0, 0, 0, 0);">
                        <div class="section-common-space">
                            <div class="container">
                                <div class="text-center video-checkout-content-start">
                                    <div>
                                        Check out
                                        <a href="https://www.youtube.com/watch?v=4-svLVw4gRc" class="show-video mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect btn-highlight">
                                            <i class="zmdi zmdi-play"></i>
                                        </a> the video!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end video-checkout portion-->
            </section>
            <!-- end portfolio section-->
            <!-- end portfolio section-->

            <!-- start team section -->
            <section id="special" class="section-main service servicev1" data-action="count-up">

                <!-- start secvice tab and content portion-->
                <section class="secondary-bg-color">
                    <div class="section-common-space" style="background: url('img/instincts/gallery_bg/texture_layer.png');">
                        <div class="container">
                            <div class="service-content-start">

                                <!-- start section title -->
                                <div class="text-center section-heading">
                                    <img src="img/instincts/logo/instinctslogo-01.png" style="height: 100px"/>
                                    <h2 class="title-sec" style="font-size : 36px;">NAAN VEEZHVEN ENDRU NINAITHAYO</h2>
                                </div>
                                <!-- end section title -->

                                <div class="service-tabs service-tabv2">
                                    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-10 col-md-offset-1">
                                                <p id="special_event">This year, we are celebrating the comeback of chennai from the devastation caused by torrential rains.

As part of the celebration, we are hosting a special function "Naan Veezhven endru Ninaithayo" which will be held between
4.30 - 6.30 PM in our campus on 10th March, 2016.</p>

                                                <!-- start tab content-->
                                            </div>
                                         
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="text-center section-heading">
                                    
                                    <h4 class="title-sec" style="font-size : 26px;"><span id="cheif_guest">OUR CHIEF GUEST</span></h4>
                                     <div class="row" id="guests">
                                     <div class="col-md-12">&#10025; Mr. R. Srinivasan</div>
                                    
                                         </div>
                                </div>
                                <div class="text-center section-heading">
                                    
                                    <h4 class="title-sec" style="font-size : 26px;"><span id="cheif_guest">GUEST OF HONOUR</span></h4>
                                     <div class="row" id="guests">
                                    
                                     <div class="col-md-6">&#10025; Dr. V. Pasupathy</div>
                                     <div class="col-md-6">&#10025; R.C. Kudawla IPS</div>
                                         </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end secvice tab and content portion-->
                </section>
            <!-- end team section -->

            <!-- start testimonial section -->
            <section id="gallery" class="section-main team">
                <div class="section-common-space" id="gallery_common" style="background:rgb(0, 0, 0);">
                    <div class="container">

                        <!-- start section title -->
                        <div class="text-center section-heading">
                            <img src="img/instincts/logo/instinctslogo-02.png" style="height: 100px"/>
                            <h2 class="title-sec" style="font-size : 36px;color: white;">GALLERY</h2>
                        </div>
                        <!-- end section title -->

                        <div class="ov-hidden">
                            <div class="row">
                                <div class="team-content-start">
                                    <!-- start team slider -->
                                    <div class="slider-items team-slider styled-paginantion colorsch-white" data-action="teamSlider">

                                      <div class="col-sm-3">
                                            <div class="team-member">
                                                <!-- start team member image -->
                                                <div class="member-img">
                                                   <a href="img/gallery/1.jpg" data-lightbox="Gallery">
														<img src="img/gallery/gallery_thumb/1.jpg" alt="">
													</a>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="team-member">
                                                <!-- start team member image -->
                                                <div class="member-img">
                                                   <a href="img/gallery/2.jpg" data-lightbox="Gallery">
														<img src="img/gallery/gallery_thumb/2.jpg" alt="">
													</a>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="team-member">
                                                <!-- start team member image -->
                                                <div class="member-img">
                                                   <a href="img/gallery/3.jpg" data-lightbox="Gallery">
														<img src="img/gallery/gallery_thumb/3.jpg" alt="">
													</a>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="team-member">
                                                <!-- start team member image -->
                                                <div class="member-img">
                                                   <a href="img/gallery/4.jpg" data-lightbox="Gallery">
														<img src="img/gallery/gallery_thumb/4.jpg" alt="">
													</a>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="team-member">
                                                <!-- start team member image -->
                                                <div class="member-img">
                                                   <a href="img/gallery/5.jpg" data-lightbox="Gallery">
														<img src="img/gallery/gallery_thumb/5.jpg" alt="">
													</a>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="team-member">
                                                <!-- start team member image -->
                                                <div class="member-img">
                                                   <a href="img/gallery/6.jpg" data-lightbox="Gallery">
														<img src="img/gallery/gallery_thumb/6.jpg" alt="">
													</a>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="team-member">
                                                <!-- start team member image -->
                                                <div class="member-img">
                                                   <a href="img/gallery/7.jpg" data-lightbox="Gallery">
														<img src="img/gallery/gallery_thumb/7.jpg" alt="">
													</a>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="team-member">
                                                <!-- start team member image -->
                                                <div class="member-img">
                                                   <a href="img/gallery/8.jpg" data-lightbox="Gallery">
														<img src="img/gallery/gallery_thumb/8.jpg" alt="">
													</a>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end team slider -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end testimonial section -->

            <!-- start blog section -->
                          <section id="sponsor" class="section-main service servicev1" data-action="count-up">

                <!-- start secvice tab and content portion-->
                <section class="secondary-bg-color">
                    <div class="section-common-space" style="background: url('img/instincts/gallery_bg/texture_layer.png');">
                        <div class="container">
                            <div class="service-content-start">

                                <!-- start section title -->
                                <div class="text-center section-heading">
                                    <img src="img/instincts/logo/instinctslogo-01.png" style="height: 100px"/>
                                    <h2 class="title-sec" style="font-size : 36px;">OUR SPONSORS</h2>
                                </div>
                                <!-- end section title -->

                               <div class="text-center">
                                <h3><span class="spons_title">Title Sponsor</span></h3>
                                <img src="img/instincts/sponsors/hcl.png" id="hcl" alt="hcl"/><br>
                            </div><br>
                                <div class="text-center">
                                <h3><span class="spons_title">Associate Sponsor</span></h3>
                                
                            </div>
                                <div class="row"><div class="col-md-2 col-md-offset-3">
                                     <img src="img/instincts/sponsors/Logo.png" id="cts" alt="cts"/>
                                    </div>
                                <div class="col-md-2 col-md-offset-2">
                                     <img src="img/instincts/sponsors/zoho.png" id="zoho" alt="zoho"/>
                                    </div></div>
                                <div class="row">
                                    <div class="col-md-6">
                                <div class="text-center">
                                <h3><span class="spons_title">Airline Partner</span></h3>
                                <img src="img/instincts/sponsors/Logo%20Air_India.jpg" id="air" alt="air"/><br>
                            </div><br></div>
                                    <div class="col-md-6">
                                <div class="text-center">
                                <h3><span class="spons_title">Hospitality Partner</span></h3>
                                <img src="img/instincts/sponsors/confluence.png" id="cnf" alt="cnf"/><br>
                            </div><br></div></div>
                                <div class="row">
                                    <div class="col-md-6">
                                <div class="text-center">
                                <h3><span class="spons_title">T-Shirt Partner</span></h3>
                                <img src="img/instincts/sponsors/sequel.png" id="sql" alt="sql"/><br>
                            </div><br></div>
                                    <div class="col-md-6">
                                <div class="text-center">
                                <h3><span class="spons_title">Informals Partner</span></h3>
                                <img src="img/instincts/sponsors/Titaneye+%20logo.jpg" id="titan" alt="titan"/><br>
                            </div><br></div></div>
                                <div class="row">
                                    <div class="col-md-6">
                                <div class="text-center">
                                <h3><span class="spons_title">Communication Partner</span></h3>
                                <img src="img/instincts/sponsors/brigge.jpg" id="sql" alt="sql"/><br>
                            </div><br></div>
                                    <div class="col-md-6">
                                <div class="text-center">
                                <h3><span class="spons_title">Guest Partner</span></h3>
                                <img src="img/instincts/sponsors/nirmala.PNG" id="nirmala" alt="titan"/><br>
                            </div><br></div></div>
                                
                                <div class="text-center">
                                <h3><span class="spons_title">Other Partners</span></h3>
                                
                            </div>
                                <div class="row"><div class="col-md-2 col-md-offset-2">
                                     <img src="img/instincts/sponsors/TMB_new_logo.png" id="tmb" alt="tmb"/>
                                    </div>
                                <div class="col-md-2 col-md-offset-2">
                                     <img src="img/instincts/sponsors/logo_smg.jpg" id="smg" alt="smg"/>
                                    </div></div>
                                
                                </div>
                        </div>
                    </div>
                </section>
                <!-- end secvice tab and content portion-->
                </section>
            <!-- end blog section -->

            <!-- start pricing section -->

            <!-- end pricing section -->
<section id="contact" class="section-main contact devide-50 devide-bg">
                <div class="container">
                    <div class="row">

                        <!-- start contact left portion / contact address -->
                        <div class="col-sm-6 contact-info-start">
                            <div class="section-common-space">
                                <h2 class="title-sec">CONTACT US</h2>
                                <div class="contact-info" id="contact_info">
                                    <div class="clearfix ci-items">
                                        <span class="ci-icons"><i class="zmdi zmdi-home"></i></span>
                                        <address>SSN College of Engineering, Old Mahabalipuram Road, Kalavakkam, Tamil Nadu 603110</address>
                                    </div>
                                    <div class="clearfix ci-items">
                                        <span class="ci-icons"><i class="zmdi zmdi-email"></i></span>
                                        <address>instincts2k16@gmail.com</address>
                                    </div>
                                    <div class="clearfix ci-items">
                                        <span class="ci-icons"><i class="zmdi zmdi-phone"></i></span>
                                        <address>7358919680</address>
                                    </div>
                                    <div class="clearfix ci-items">
                                        <span class="ci-icons"><i class="zmdi zmdi-globe"></i></span>
                                        <address>www.ssninstincts.org.in</address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end left contact portion -->

                        <!-- start right contact portion /contact form-->
                        <div class="col-sm-6 contact-form-start">
                            <div class="section-common-space">
                                <form id="contactForm" class="matx-form-valid contact-form">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" name="contactName2" id="name2" onblur="checkName2()" value="<?php echo $_GET['contactName2'] ?>"/>
                                                <label class="mdl-textfield__label" for="name">Name</label>
                                                <span class="span" id="nameSpan2"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" name="contactEmail2" id="email2" onblur="checkEmail2()" value="<?php echo $_GET['contactEmail2'] ?>"/>
                                                <label class="mdl-textfield__label" for="email">Email</label>
                                                <span class="span" id="emailSpan2"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" name="contactSubject" id="subject" onblur="checkSubject()" value="<?php echo $_GET['contactSubject'] ?>"/>
                                                <label class="mdl-textfield__label" for="subject">Subject</label>
                                                <span class="span" id="subjectSpan"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textarea">
                                                <textarea class="mdl-textfield__input" name="contactMessage" id="message" onblur="checkMessage()" value="<?php echo $_GET['contactMessage'] ?>"></textarea>
                                                <label class="mdl-textfield__label" for="message">Message</label>
                                                <span class="span" id="messageSpan"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <table border="0"  cellpadding="5" cellspacing="1" class="table-responsive" style="color: white;">
                                        <?php if(isset($contact_msg)){?>
                                        <tr>
                                          <td colspan="2" align="center" valign="top"><?php echo $contact_msg;?></td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                          <td align="right" valign="top"> Validation code:</td>
                                          <td><img src="contact_captcha.php?rand=<?php echo rand();?>" id='contact_captchaimg'><br>
                                            <label for='message'>Enter the code above here :</label>
                                            <br>
                                            <input id="contact_captcha_code" name="contact_captcha_code" type="text">
                                            <br>
                                            Can't read the image? click <a href='javascript: contact_refreshCaptcha();'>here</a> to refresh.</td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                        </tr>
                                    </table>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="text-left ">
                                                <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit" id="snd" onclick="return checkAll2()" name="contactSubmit" value="send" style="background-color:#6CA5A1"/>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end right contact portion -->

                    </div>
                </div>
                <!-- start map portion -->

                <!-- end map portion -->
            </section>

            <section id="register" class="section-main contact">
                <div class="container">
                    <div class="row">

                        <!-- start contact left portion / contact address -->

                        <!--end left contact portion -->

                        <!-- start right contact portion /contact form-->
                         <div class="col-sm-6 col-sm-offset-3 contact-form-start">

                          <div class="section-common-space">

                <div class="text-center section-heading">
                            <img src="img/instincts/logo/instinctslogo-01.png" style="height: 100px"/>
                            <h2 class="title-sec" style="font-size : 36px;color: black;;">REGISTER</h2>
                        </div>

                <form method="get" class="matx-form-valid contact-form" id="reg">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="contactName" id="name" onblur="checkName()" value="<?php echo $_GET['contactName'] ?>"/>
                                 <span style="color:red;font-family:'Roboto'" id="nameSpan"></span>

                                <label class="mdl-textfield__label" for="name">Name</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="contactEmail" id="email" onblur="checkEmail()" value="<?php echo $_GET['contactEmail'] ?>"/>
                                 <span style="color:red;font-family:'Roboto'" id="emailSpan"></span>
                                <label class="mdl-textfield__label" for="email">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="contactCollege" id="college" onblur="checkCollege()" value="<?php echo $_GET['contactCollege'] ?>"/>
                                <span style="color:red;font-family:'Roboto'" id="collegeSpan"></span>

                                <label class="mdl-textfield__label" for="college">College</label>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="contactPhone" id="phone" onblur="checkPhone()" value="<?php echo $_GET['contactPhone'] ?>" />
                                <span style="color:red;font-family:'Roboto'" id="phoneSpan"></span>

                                <label class="mdl-textfield__label" for="phone">Phone number</label>
                            </div>
                        </div>
                    </div>

                    <table border="0"  cellpadding="5" cellspacing="1" class="table" style="color: white;">
                    <?php if(isset($msg)){?>
                    <tr>
                      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                      <td align="right" valign="top"> Validation code:</td>
                      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
                        <label for='message'>Enter the code above here :</label>
                        <br>
                        <input id="captcha_code" name="captcha_code" type="text">
                        <br>
                        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    </table>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-left ">
                               <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit" type="submit" onclick="return checkAll()" name="Submit">SUBMIT</button> -->
                                <input name="Submit" type="submit" value="Submit" onclick="return checkAll()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit" style="background-color:#6CA5A1">

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>


                         </div>
                </div>
                <!-- start map portion -->
                <div class="section bg-image-class maps">
                    <div class="overlay">
                        <div class="text-center map-content-start">
                            <div class="map-buttons">
                                <button type="button" id="map-open" class="btn-active btn btn-block btn-tranparent btn-animated from-top zmdi zmdi-chevron-down">
                                    <span>LOCATE US ON THE MAP</span>
                                </button>

                                <button type="button" id="map-close" class="btn btn-block btn-tranparent btn-animated from-bottom zmdi zmdi-chevron-up">
                                    <span>Close the map</span>
                                </button>
                            </div>
                            <div class="map-wrapper">
                              <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end map portion -->
            </section>

        </main>
        <!-- end main wrapper   -->

        <!-- start main footer -->
        <footer class="main-footer">
            <section class="footer-top">
                <div class="section">
                    <div class="section-common-space">
                        <div class="container">
                            <div class="row">
                                <div class="text-center ft-content-start">
                                    <a href="" data-target="#home" class="logo menu-smooth-scroll footer-logo wow fadeIn" data-wow-duration="1s">
                                        <img src="img/instincts/logo/instinctslogo-02.png" alt="logo" style="height: 100px;">
                                    </a>
<a href="https://play.google.com/store/apps/details?id=com.borntowindevelopers.instincts">
                                        <img src="img/instincts/Get_it_on_Google_play.png" alt="logo" style="height: 50px;">
                                    </a>
                                    <ul class="clearfix social footer-social hover-round">
                                        <li><a href="https://www.facebook.com/instincts.ssn/"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/instincts_ssn"><i class="zmdi zmdi-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footer-bottom">
                <div class="text-center">
                    <p>INSTINCTS &copy; 2016. ALL RIGHT RESERVED.</p>
                </div>
            </section>
        </footer>
        <!-- end main footer -->


        <!-- back to top button -->
        <button id="backToTop" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect btn-highlight back-to-top shade-on hide-bottom">
            <i class="zmdi zmdi-chevron-down"></i>
        </button>
        
        <script type='text/javascript'>
        function refreshCaptcha(){
            var img = document.images['captchaimg'];
            img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }
        function contact_refreshCaptcha(){
            var img = document.images['contact_captchaimg'];
            img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }
        </script>
        
        <script>
            function checkName()
            {

                var userName = document.getElementById("name").value;

                if(userName.length==0)
                {
                    document.getElementById("nameSpan").innerHTML="This field cannot be empty";
                 //   document.getElementById("name").focus();
                    return false;
                }
                else
                {
                     document.getElementById("nameSpan").innerHTML="";
                    return true;
                }
            }

            function checkEmail()
            {
                var userEmail = document.getElementById("email").value;

                var emailRegEx = /^((\w)+(\.(\w)+)*(@[a-zA-Z]+)(\.[a-zA-Z]+)+)$/;

                if(!emailRegEx.test(userEmail)){
                    //Error
                    document.getElementById("emailSpan").innerHTML="Enter a valid email ID";
                  //  document.getElementById("email").focus();
                    return false;
                }
                else
                {
                     document.getElementById("emailSpan").innerHTML="";
                     return true;

                   //  document.getElementById("emailSpan").innerHTML="";
                }
            }

            function checkCollege()
            {
                var userCollege = document.getElementById("college").value;

                if(userCollege.length==0)
                {
                    document.getElementById("collegeSpan").innerHTML="This field cannot be empty";
                  //  document.getElementById("college").focus();
                    return false;
                }
                else
                {
                     document.getElementById("collegeSpan").innerHTML="";
                    return true;
                }
            }

            function checkPhone()
            {
                var userPhone = document.getElementById("phone").value;

                var phoneRegEx = /^\d{10}$/;

                if(!phoneRegEx.test(userPhone))
                {
                    document.getElementById("phoneSpan").innerHTML="Enter a valid mobile number";
                  //  document.getElementById("phone").focus();
                    return false;
                }
                else
                {
                     document.getElementById("phoneSpan").innerHTML="";
                    return true;
                }
            }


            function checkAll()
            {
                return checkCollege() && checkEmail() && checkName() && checkPhone();
            }

        </script>
         <script>
            function checkName2()
            {

                var userName = document.getElementById("name2").value;

                if(userName.length==0)
                {
                    document.getElementById("nameSpan2").innerHTML="This field cannot be empty";
                 //   document.getElementById("name").focus();
                    return false;
                }
                else
                {
                     document.getElementById("nameSpan2").innerHTML="";
                    return true;
                }
            }

            function checkEmail2()
            {
                var userEmail = document.getElementById("email2").value;

                var emailRegEx = /^((\w)+(\.(\w)+)*(@[a-zA-Z]+)(\.[a-zA-Z]+)+)$/;

                if(!emailRegEx.test(userEmail)){
                    //Error
                    document.getElementById("emailSpan2").innerHTML="Enter a valid email ID";
                  //  document.getElementById("email").focus();
                    return false;
                }
                else
                {
                     document.getElementById("emailSpan2").innerHTML="";
                     return true;

                   //  document.getElementById("emailSpan").innerHTML="";
                }
            }

            function checkSubject()
            {
                var userCollege = document.getElementById("subject").value;

                if(userCollege.length==0)
                {
                    document.getElementById("subjectSpan").innerHTML="This field cannot be empty";
                  //  document.getElementById("college").focus();
                    return false;
                }
                else
                {
                     document.getElementById("subjectSpan").innerHTML="";
                    return true;
                }
            }

            function checkMessage()
            {
                var userCollege = document.getElementById("message").value;

                if(userCollege.length==0)
                {
                    document.getElementById("messageSpan").innerHTML="This field cannot be empty";
                  //  document.getElementById("college").focus();
                    return false;
                }
                else
                {
                     document.getElementById("messageSpan").innerHTML="";
                    return true;
                }
            }

            


            function checkAll2()
            {
                return checkSubject() && checkEmail2() && checkName2() && checkMessage();
            }

        </script>
        <!-- footer script start  -->
        <!--<script>window.jQuery || document.write('<script type="text/javascript" src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
        <script type="text/javascript" src="assets/libs/mdl/material.min.js"></script>
       
        <script type="text/javascript" src="assets/js/all-plugins.js"></script>
        <script type="text/javascript" src="assets/js/common-plugins.js"></script>
        <script type="text/javascript" src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/libs/sweetalert/sweet-alert.min.js"></script>
        <script type="text/javascript" src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="assets/libs/jwplayer/jwplayer.js"></script>
        <script src="assets/js/jquery.lettering.js"></script>
<script src="assets/js/jquery.textillate.js"></script>

                    <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="assets/libs/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="assets/js/custom.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript" src="assets/js/lightbox.js"></script>
        <script type="text/javascript" src="assets/js/common.js"></script>
        <script type="text/javascript" src="assets/js/all-components.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
    </body>
</html>