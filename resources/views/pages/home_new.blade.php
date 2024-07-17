<!DOCTYPE html>
<html lang="en">

<head>
    <title>JOAN TECHNOLOGIES</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="JOAN TECHNOLOGIES">
    <meta name="author" content="11soft">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="joan/joan_fav.png">
    <link rel="apple-touch-icon" href="joan/joan_fav.png">
    <link rel="apple-touch-icon" sizes="72x72" href="joan/joan_fav.png">
    <link rel="apple-touch-icon" sizes="114x114" href="joan/joan_fav.png">
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.min.css" media="screen">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/icons-fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="css/animate_new.min.css">
    <link rel="stylesheet" href="/css/simple-line-icons.css">
    <link rel='stylesheet' href="css/animate.min.css"> {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div id="loader-overflow">
        <div id="loader3">Please enable JS</div>
    </div>
    <div id="wrap" class="boxed ">
        <div class="grey-bg">
            <header id="nav" class="header header-1">
                <div class="header-wrapper">
                    <div class="container-m-30 clearfix">
                        <div class="logo-row">
                            <div class="logo-container-2">
                                <div class="logo-2"> <a href="/" class="clearfix"> <img src="joan/logo.png"
                                            class="logo-img" alt="Logo"> </a> </div>
                            </div>
                            <div class="menu-btn-respons-container"> <button type="button"
                                    class="navbar-toggle btn-navbar collapsed" data-toggle="collapse"
                                    data-target="#main-menu .navbar-collapse"> <span aria-hidden="true"
                                        class="icon_menu hamb-mob-icon"></span> </button> </div>
                        </div>
                    </div>
                    <div class="main-menu-container">
                        <div class="row">
                            <div class="col-12">
                                @if (session()->get('error'))
                                    <div id="errorAlert" class="alert alert-danger alert-dismissible fade show"
                                        role="alert"> <svg class="bi flex-shrink-0 me-2" width="24" height="24"
                                            role="img" aria-label="Danger:">
                                            <use xlink:href="#exclamation-triangle-fill" />
                                        </svg> {{ session()->get('error') }} <button type="button" class="btn-close"
                                            data-bs-dismiss="alert" aria-label="Close"></button> </div>
                                @elseif (session()->get('success'))
                                    <div id="successAlert" class="alert alert-success alert-dismissible fade show"
                                        role="alert"> <svg class="bi flex-shrink-0 me-2" width="24" height="24"
                                            role="img" aria-label="Success:">
                                            <use xlink:href="#check-circle-fill" />
                                        </svg> {{ session()->get('success') }} <button type="button"
                                            class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="container-m-30 clearfix">
                            <div id="main-menu">
                                <div class="navbar navbar-default" role="navigation">
                                    <nav class="collapse collapsing navbar-collapse right-1024">
                                        <ul id="nav-onepage" class="nav navbar-nav">
                                            <li> <a href="#index-link" class="top_scroll">
                                                    <div class="main-menu-title">HOME</div>
                                                </a> </li>
                                            <li> <a href="#about_sec" class="about_scroll">
                                                    <div class="main-menu-title">ABOUT US</div>
                                                </a> </li>
                                            <li> <a href="#whyus" class="about_scroll">
                                                    <div class="main-menu-title">WHY US</div>
                                                </a> </li>
                                            <li> <a href="#service_sec" class="service_scroll">
                                                    <div class="main-menu-title">SERVICES</div>
                                                </a> </li>
                                            <li> <a href="#clients_sec" class="clients_scroll">
                                                    <div class="main-menu-title">CLIENTS</div>
                                                </a> </li>
                                            <li> <a href="#contact_sec" class="contact_scroll">
                                                    <div class="main-menu-title">CONTACT</div>
                                                </a> </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header> {{-- <div id="index-link" class="relative page-section"> <div class="rs-fullscr-container"> <div id="rs-fullscr" class="tp-banner"> <ul> <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500" data-thumb="joan/banner1.jpg" data-saveperformance="on" data-title=""> <img src="joan/banner1.jpg" alt="slidebg1" data-lazyload="joan/banner1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> <div class="tp-caption rs-parallaxlevel-4 zoomout" data-x="left" data-y="center" data-speed="1300" data-start="200" data-easing="Power3.easeInOut" style="z-index: 0;"> <div class="slider-bg-white-cap"></div> </div> <div class="rs-parallaxlevel-4 opacity-scroll2"> <div class="tp-caption dark-light-100 top-light-head tp-left sfb tp-resizeme" data-x="640" data-y="160" data-speed="500" data-start="850" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"> Unlocking New </div> <div class="tp-caption dark-black-100 tp-left sfb tp-resizeme" data-x="650" data-y="230" data-speed="500" data-start="1050" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"> Possibilities </div> <div class="tp-caption slider-1-cap-line tp-left hide-0-736 sfb tp-resizeme" data-x="650" data-y="350" data-speed="1000" data-start="1250" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"> <div class="cap-line"></div> </div> <div class="tp-caption banner_subcont dark-light-32 fs16-when-0-736 tp-left sfb tp-resizeme" data-x="650" data-y="400" data-speed="900" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto;">We can help you integrate AI and ML into your operations, enabling tasks like: </div> <div class="tp-caption dark-light-32 fs16-when-0-736 tp-left sfb tp-resizeme" data-x="650" data-y="500" data-speed="900" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"> <ul class="banner1_ul"> <li>Automate Complex Tasks</li> <li>Predictive Analytics</li> <li>Enhance Customer Experience</li> </ul> </div> </div> </li> <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500" data-thumb="joan/banner2.jpg" data-saveperformance="on" data-title=""> <img src="joan/banner2.jpg" alt="slidebg1" data-lazyload="joan/banner2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> <div class="tp-caption rs-parallaxlevel-4 zoomout" data-x="left" data-y="center" data-speed="1300" data-start="200" data-easing="Power3.easeInOut" style="z-index: 0;"> <div class="slider-bg-white-cap"></div> </div> <div class="rs-parallaxlevel-4 opacity-scroll2"> <div class="tp-caption dark-light-100 top-light-head tp-left sfb tp-resizeme" data-x="640" data-y="160" data-speed="500" data-start="850" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"> Scalability & </div> <div class="tp-caption dark-black-100 tp-left sfb tp-resizeme" data-x="650" data-y="230" data-speed="500" data-start="1050" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"> Agility </div> <div class="tp-caption slider-1-cap-line tp-left hide-0-736 sfb tp-resizeme" data-x="650" data-y="350" data-speed="1000" data-start="1250" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"> <div class="cap-line"></div> </div> <div class="tp-caption banner_subcont dark-light-32 fs16-when-0-736 tp-left sfb tp-resizeme" data-x="650" data-y="400" data-speed="900" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"> Embrace the flexibility of cloud-based solutions for: </div> <div class="tp-caption dark-light-32 fs16-when-0-736 tp-left sfb tp-resizeme" data-x="650" data-y="500" data-speed="900" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"> <ul class="banner1_ul"> <li>Enhanced Collaboration</li> <li>Cost Optimization</li> <li>Improved Disaster Recovery</li> </ul> </div> </div> </li> <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500" data-thumb="joan/banner3.jpg" data-saveperformance="on" data-title=""> <img src="joan/banner3.jpg" alt="slidebg1" data-lazyload="joan/banner3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> <div class="tp-caption rs-parallaxlevel-4 zoomout" data-x="left" data-y="center" data-speed="1300" data-start="200" data-easing="Power3.easeInOut" style="z-index: 0;"> <div class="slider-bg-white-cap"></div> </div> <div class="rs-parallaxlevel-4 opacity-scroll2"> <div class="tp-caption dark-light-100 top-light-head tp-left sfb tp-resizeme" data-x="640" data-y="160" data-speed="500" data-start="850" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"> Transform Data into </div> <div class="tp-caption dark-black-100 tp-left sfb tp-resizeme" data-x="650" data-y="230" data-speed="500" data-start="1050" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"> Actionable Insights </div> <div class="tp-caption slider-1-cap-line tp-left hide-0-736 sfb tp-resizeme" data-x="650" data-y="350" data-speed="1000" data-start="1250" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"> <div class="cap-line"></div> </div> <div class="tp-caption banner_subcont dark-light-32 fs16-when-0-736 tp-left sfb tp-resizeme" data-x="650" data-y="400" data-speed="900" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">We can help you harness the power of data: </div> <div class="tp-caption dark-light-32 fs16-when-0-736 tp-left sfb tp-resizeme" data-x="650" data-y="500" data-speed="900" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"> <ul class="banner1_ul"> <li>Data Visualization</li> <li>Advanced Reporting</li> <li>Informed Decision Making</li> </ul> </div> </div> </li> <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500" data-thumb="joan/banner4.jpg" data-saveperformance="on" data-title=""> <img src="joan/banner4.jpg" alt="slidebg1" data-lazyload="joan/banner4.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> <div class="tp-caption rs-parallaxlevel-4 zoomout" data-x="left" data-y="center" data-speed="1300" data-start="200" data-easing="Power3.easeInOut" style="z-index: 0;"> <div class="slider-bg-white-cap"></div> </div> <div class="rs-parallaxlevel-4 opacity-scroll2"> <div class="tp-caption dark-light-100 top-light-head tp-left sfb tp-resizeme" data-x="640" data-y="160" data-speed="500" data-start="850" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"> Protecting Your </div> <div class="tp-caption dark-black-100 tp-left sfb tp-resizeme" data-x="650" data-y="230" data-speed="500" data-start="1050" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"> Business Assets </div> <div class="tp-caption slider-1-cap-line tp-left hide-0-736 sfb tp-resizeme" data-x="650" data-y="350" data-speed="1000" data-start="1250" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"> <div class="cap-line"></div> </div> <div class="tp-caption banner_subcont dark-light-32 fs16-when-0-736 tp-left sfb tp-resizeme" data-x="650" data-y="400" data-speed="900" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">We offer comprehensive cybersecurity solutions to: </div> <div class="tp-caption dark-light-32 fs16-when-0-736 tp-left sfb tp-resizeme" data-x="650" data-y="500" data-speed="900" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"> <ul class="banner1_ul"> <li>Safeguard Sensitive Data</li> <li>Combat Cyber Threats</li> <li>Ensure Business Continuity</li> </ul> </div> </div> </li> </ul> </div> </div> <div class="local-scroll-cont"> <a href="#about_sec" class="scroll-down smooth-scroll"> <div class="icon icon-arrows-down"></div> </a> </div> </div> --}} <div class="slider-area page-section" id="index-link">
                <div class="quicky-element-carousel home-slider arrow-style"
                    data-slick-options='{ "slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "arrows": true, "dots": false, "autoplay" : false, "fade" : true, "autoplaySpeed" : 7000, "pauseOnHover" : false, "pauseOnFocus" : false }'
                    data-slick-responsive='[ {"breakpoint":768, "settings": { "slidesToShow": 1 }}, {"breakpoint":575, "settings": { "slidesToShow": 1 }} ]'>
                    <div class="slide-item animation-style-01 bg-1">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="inner-slide parallelbg1">
                                        <div class="slide-content">
                                            <h4 class="heading1">Unlocking</h4>
                                            <h4 class="heading2">New Possiblities</h4>
                                            <p class="short-desc">We can help you integrate AI and ML into your
                                                operations,enabling tasks like:</p>
                                            <ul class="banner_ul">
                                                <li class="list1">Automate Complex Tasks</li>
                                                <li class="list2">Predictive Analystics</li>
                                                <li class="list3">Enhance Customer Experience</li>
                                            </ul>
                                        </div>
                                        <div class="slider-img"> <img src="/images/ai.svg" alt="Slider Product">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item animation-style-01 bg-1">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="inner-slide parallelbg2">
                                        <div class="slide-content">
                                            <h4 class="heading1">Scalability &</h4>
                                            <h4 class="heading2">Agility</h4>
                                            <p class="short-desc">Embrace the flexibility of cloud-based solutions for:
                                            </p>
                                            <ul class="banner_ul">
                                                <li class="list1">Enhanced Collaboration</li>
                                                <li class="list2">Cost Optimization</li>
                                                <li class="list3">Improved Disaster Recovery</li>
                                            </ul>
                                        </div>
                                        <div class="slider-img"> <img src="/images/cloud.svg" alt="Slider Product">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item animation-style-01 bg-1">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="inner-slide parallelbg3">
                                        <div class="slide-content">
                                            <h4 class="heading1">Transform Data into</h4>
                                            <h4 class="heading2">Actionable Insights</h4>
                                            <p class="short-desc">We can help you harness the power of data:</p>
                                            <ul class="banner_ul">
                                                <li class="list1">Data Visualization</li>
                                                <li class="list2">Advanced Reporting</li>
                                                <li class="list3">Informed Decision Making</li>
                                            </ul>
                                        </div>
                                        <div class="slider-img"> <img src="/images/data2.svg" alt="Slider Product">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item animation-style-01 bg-1">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="inner-slide parallelbg4">
                                        <div class="slide-content">
                                            <h4 class="heading1">Protecting Your</h4>
                                            <h4 class="heading2">Business Assets</h4>
                                            <p class="short-desc">We offer comprehensive cybersecurity solutions to:
                                            </p>
                                            <ul class="banner_ul">
                                                <li class="list1">Safeguard Sensitive Data</li>
                                                <li class="list2">Combat Cyber Threats</li>
                                                <li class="list3">Ensure Business Continuity</li>
                                            </ul>
                                        </div>
                                        <div class="slider-img"> <img src="/images/cyber.svg" alt="Slider Product">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> {{-- <div class="slide-item animation-style-02 bg-1"> <div class="slider-progress"></div> <div class="container"> <div class="row"> <div class="col-lg-12"> <div class="inner-slide"> <div class="slide-content"> <h2>Basket Weave</h2> <p class="short-desc">Produce and supply various Handicraft items all over the world which were very attractive</p> <div class="slide-btn"> <a class="quicky-btn horizontal-line_ltr" href="shop-left-sidebar.html">Discover Now!</a> </div> </div> <div class="slider-img"> <img src="/images/2.png" alt="Slider Product"> </div> </div> </div> </div> </div> </div> <div class="slide-item animation-style-03 bg-1"> <div class="slider-progress"></div> <div class="container"> <div class="row"> <div class="col-lg-12"> <div class="inner-slide"> <div class="slider-img"> <img src="/images/3.png" alt="Slider Product"> </div> <div class="slide-content slide-content_right"> <h2>Basket Weave</h2> <p class="short-desc">Produce and supply various Handicraft items all over the world which were very attractive</p> <div class="slide-btn"> <a class="quicky-btn horizontal-line_ltr horizontal-line_rtl" href="shop-left-sidebar.html">Discover Now!</a> </div> </div> </div> </div> </div> </div> </div> --}}
                </div>
            </div>
            <section class="section-background parallax page-section">
                <div id="about_sec" class="">
                    <div class="container fes1-cont ">
                        <div class="row">
                            <div class="col-md-4 fes1-img-cont mb-20"> <img class="image1" src="images/human.png"
                                    data-aos="fade-right" data-aos-duration="1500" alt="img"> </div>
                            <div class="col-md-8">
                                <div class="row row_class">
                                    <div class="col-md-12">
                                        <div class="fes1-main-title-cont wow fadeInDown">
                                            <div class="title-fs-60"> WHO<br> <span class="bold">WE ARE</span>
                                            </div>
                                            <div class="line-3-100"></div>
                                        </div>
                                        <p class="para">At Joan Technologies, we're a passionate team of IT veterans
                                            driven by a shared mission: to empower businesses with technology solutions
                                            that unlock their full potential. We bring a unique blend of experience and
                                            enthusiasm to every project, ensuring you receive:</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn">
                                            <div class="fes1-box-icon"> <img src="iii/Deep Expertise.svg"
                                                    data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3>DEEP EXPERTISE</h3>
                                            <p>Our team boasts a proven track record of success across diverse
                                                industries, backed by top-tier certifications. We bring a wealth of
                                                knowledge and experience to the table, ensuring we can tackle any
                                                challenge you face.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn" data-wow-delay="200ms">
                                            <div class="fes1-box-icon"> <img src="iii/Bespoke Solutions.svg"
                                                    data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3>BESPOKE SOLUTIONS</h3>
                                            <p>We go beyond one-size-fits-all approaches. We listen, understand your
                                                specific needs, and craft custom IT strategies that align with your
                                                goals.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn" data-wow-delay="400ms">
                                            <div class="fes1-box-icon"> <img src="iii/Agile Collaboration.svg"
                                                    data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3>AGILE COLLABORATION</h3>
                                            <p>Unlike large firms, our boutique structure fosters closer collaboration.
                                                You&#39;ll have direct access to our team, ensuring clear communication
                                                and a commitment to your success.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn" data-wow-delay="400ms">
                                            <div class="fes1-box-icon"> <img src="iii/Results-Oriented Approach.svg"
                                                    data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3>RESULTS-ORIENTED APPROACH</h3>
                                            <p>We're not satisfied until you are. We measure success by the real-world
                                                results we deliver for your business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="mt-0 mb-0">
            <section class="sectionn-background parallaxx page-section">
                <div id="whyus" class="">
                    <div class="container fes1-cont">
                        <div class="row ">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="fes1-main-title-cont wow fadeInDown">
                                            <div class="title-fs-60"> WHY<br> <span class="bold">CHOOSE US ?</span>
                                            </div>
                                            <div class="line-3-100"></div>
                                        </div>
                                        <p class="para">We believe technology should be a catalyst for growth, not a
                                            source of frustration. By partnering with us, you gain a trusted advisor
                                            who:</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn">
                                            <div class="fes1-box-icon"> <img src="iii/Prioritizes Understanding.svg"
                                                    data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3>PRIORITIZES UNDERSTANDING</h3>
                                            <p>We take the time to understand your business challenges and goals before
                                                offering solutions.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn" data-wow-delay="200ms">
                                            <div class="fes1-box-icon"> <img src="iii/Values Agility.svg"
                                                    data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3>VALUES AGILITY</h3>
                                            <p>We adapt to your ever-changing needs and embrace innovation to keep you
                                                ahead of the curve.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn" data-wow-delay="400ms">
                                            <div class="fes1-box-icon"> <img src="iii/Delivers Transparency.svg"
                                                    data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3>DELIVERS TRANSPARENCY</h3>
                                            <p>Open communication is key. We keep you informed at every step of the
                                                process.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn" data-wow-delay="400ms">
                                            <div class="fes1-box-icon"> <img src="iii/Celebrates Your Success.svg"
                                                    data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3>CELEBRATES YOUR SUCCESS</h3>
                                            <p>Your success is our success. We're invested in helping your business
                                                thrive.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 fes1-img-cont mb-20"> <img src="images/why.svg" alt="img"
                                    data-aos="fade-left" data-aos-delay="500" data-aos-duration="1500"
                                    class="why-img"> </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="mt-0 mb-0">
            <div class="for_contactus">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 for_cont_col_left">
                            <p class="hyperlink_p">Ready to unlock the power of technology for your business?</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 for_cont_col_right"> <a href="#contactus_sec"
                                class="contact_scroll1 cont_act">CONTACT US</a> </div>
                    </div>
                </div>
            </div>
            <div id="service_sec" class="page-section fes4-cont">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="fes4-box wow fadeIn">
                                <h2 class="section-title">OUR <span class="bold">SERVICES</span></h2>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <div class=" wow fadeInDown">
                                <div class="title-fs-29"> Empowering Your Business Through <span
                                        class="bold">Technology</span> </div>
                                <div class="myline1"></div>
                            </div>
                            <p class="ourservicecontent">We offer a comprehensive suite of IT services designed to
                                address your unique business needs and empower your growth.</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="600ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon"> <img src="iii/IT Consulting.svg"
                                                    data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3><span class="bold">IT CONSULTING</span></h3>
                                        </div>
                                        <div> Our experienced consultants provide strategic guidance on leveraging
                                            technology to achieve your business objectives.</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="800ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon"> <img src="iii/Cloud Solutions.svg"
                                                    data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3><span class="bold">CLOUD SOLUTIONS</span></h3>
                                        </div>
                                        <div> We help you migrate to the cloud, optimize your cloud environment, and
                                            unlock the benefits of scalability, agility, and cost-efficiency. </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="1000ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon"> <img src="iii/Application Development.svg"
                                                    data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3><span class="bold">APPLICATION DEVELOPMENT</span></h3>
                                        </div>
                                        <div> Our team of developers craft custom software solutions that streamline
                                            workflows, enhance productivity, and give you a competitive edge. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="600ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon"> <img src="iii/Managed IT Services.svg"
                                                    alt=""> </div>
                                            <h3><span class="bold">MANAGED IT SERVICES</span></h3>
                                        </div>
                                        <div> Outsource your IT management to us, freeing up your in-house resources to
                                            focus on core business activities. We ensure your IT infrastructure runs
                                            smoothly and efficiently. </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="800ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon"> <img src="iii/Resource Augmentation.svg"
                                                    data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3><span class="bold">RESOURCE AUGMENTATION</span></h3>
                                        </div>
                                        <div> Gain access to a pool of highly skilled IT professionals to fill temporary
                                            gaps or address specific project needs. </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="1000ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon"> <img
                                                    src="iii/Infrastructure Design and Optimization.svg"
                                                    data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3><span class="bold">INFRASTRUCTURE DESIGN AND OPTIMIZATION</span></h3>
                                        </div>
                                        <div> We design and optimize your IT infrastructure for optimal performance,
                                            reliability, and scalability, ensuring your systems can grow alongside your
                                            business. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="600ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon"> <img
                                                    src="iii/SaaS (Software as a Service).svg" data-aos="zoom-in"
                                                    data-aos-delay="1000" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3><span class="bold">SAAS (Software as a Service)</span></h3>
                                        </div>
                                        <div> We help you leverage the benefits of cloud-based applications for a
                                            variety of business needs, from CRM to project management. </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="800ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon"> <img src="iii/IT Support.svg"
                                                    data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3><span class="bold">IT SUPPORT</span></h3>
                                        </div>
                                        <div> Our dedicated support team provides ongoing assistance to troubleshoot
                                            technical issues and ensure your users have the resources they need. </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="1000ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon"> <img src="iii/Cybersecurity_1.svg"
                                                    data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000"
                                                    alt=""> </div>
                                            <h3><span class="bold">CYBERSECURITY</span></h3>
                                        </div>
                                        <div> We safeguard your business against cyber threats with comprehensive
                                            security solutions to protect your data and critical infrastructure. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="for_contactus">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 for_cont_col_left">
                    <p class="hyperlink_p">Let us help you navigate the ever-evolving IT landscape and achieve your
                        business goals!</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 for_cont_col_right"> <a href="#contactus_sec"
                        class="contact_scroll1 cont_act">CONTACT US</a> </div>
            </div>
        </div>
    </div>
    <hr class="mt-0 mb-0">
    <div id="clients_sec" class="page-section p-110-cont">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-50">
                        <h2 class="section-title">OUR <span class="bold">CLIENTS</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row client-row border-bot">
                        <div class="col-xs-6 col-lg-6 col-sm-3 text-center bord logo-pad border-right"> <img
                                src="logos/BT.svg" alt=""> </div>
                        <div class="col-xs-6 col-lg-6 col-sm-3 text-center bord logo-pad"> <img
                                src="logos/Infosys.svg" alt=""> </div>
                        <div class="col-xs-6 col-lg-6 col-sm-3 text-center logo-pad border-right"> <img
                                src="logos/Freston Analytics.svg" alt=""> </div>
                        <div class="col-xs-6 col-lg-6 col-sm-3 text-center logo-pad"> <img src="logos/Mobisense.png"
                                alt=""> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="elfsight-app-9ab8824b-0360-41f7-84a8-07502b69fcf4" data-elfsight-app-lazy></div>
                </div>
            </div>
        </div>
    </div> {{-- <div id="team_sec" class="page-section biege-bg pt-100-cont"> <div class="container"> <div class="row"> <div class="col-md-12"> <div class="mb-40"> <h2 class="section-title">OUR <span class="bold">MEMBERS</span></h2> </div> </div> </div> <div class="row"> <div class="col-md-12 text-center wow fadeInUp" data-wow-duration="1s"> <img src="joan/ourteam.jpg" alt="img"> </div> </div> </div> </div> --}}
    <hr class="mt-0 mb-0">
    <div id="contact_sec" class="page-section p-110-cont">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="cis-cont">
                        <div class="cis-icon">
                            <div class="icon icon-basic-map"></div>
                        </div>
                        <div class="cis-text">
                            <h3><span class="bold">ADDRESS</span></h3>
                            <p>314 Midsummer Boulevard, <br>Milton Keynes, <br>England, MK9 2UB </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="cis-cont">
                        <div class="cis-icon">
                            <div class="icon icon-basic-mail"></div>
                        </div>
                        <div class="cis-text">
                            <h3><span class="bold">EMAIL</span></h3>
                            <p><a href="mailto:hello@joantechnologies.com">hello@joantechnologies.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="cis-cont">
                        <div class="cis-icon">
                            <div class="icon icon-basic-smartphone"></div>
                        </div>
                        <div class="cis-text">
                            <h3><span class="bold">CALL US</span></h3>
                            <p><a href="tel:+44 7474 742390">+44 7474 742390</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section biege-bg" id="contactus_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6"> <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3493.1687895206683!2d-0.7663386259705273!3d52.038918914703274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877aaa244893cc5%3A0x5e71eafb9a33a88d!2sRegus%20-%20Milton%20Keynes%20Midsummer%20Court!5e0!3m2!1sen!2sin!4v1713940533501!5m2!1sen!2sin"
                        width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
                <div class="col-md-6">
                    <div class="contact-form-cont">
                        <div class="mb-40">
                            <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                        </div>
                        <div class="">
                            <form action="/mail" method="POST" id="contactus-form"> @csrf <div class="row">
                                    <div class="col-md-12 mb-30"> <input type="text" value=""
                                            data-msg-required="Please enter your name" maxlength="100"
                                            class="controled" name="name" id="name" placeholder="NAME"
                                            required> </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-30"> <input type="email" value=""
                                            data-msg-required="Please enter your email address"
                                            data-msg-email="Please enter a valid email address" maxlength="100"
                                            class="controled" name="email" id="email" placeholder="EMAIL"
                                            required> </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-30"> <input type="text" value=""
                                            data-msg-required="Please enter your Contact Number"
                                            data-msg-email="Please enter a valid contact Number" maxlength="15"
                                            class="controled" name="Contact" id="contact" placeholder="CONTACT"
                                            required> </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-40">
                                        <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled"
                                            name="message" id="message" placeholder="MESSAGE" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center-xxs"> <input type="submit"
                                            value="SEND MESSAGE" class="button medium gray"
                                            data-loading-text="Loading..."> </div>
                                </div>
                            </form>
                            <div class="alert alert-success hidden animated fadeIn" id="contactSuccess">
                                <strong>Success!</strong> Your message has been sent to us. </div>
                            <div class="alert alert-danger hidden animated shake" id="contactError">
                                <strong>Error!</strong> There was an error sending your message. </div>
                            <div id="message-dialog" title="Message Sent">
                                <p>Your message has been sent successfully!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-section text-center ">
        <div class="container">
            <div class="pt-55-b-50-cont">
                <div class="row foot-row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="footer-soc-a"> <a href="https://www.linkedin.com/company/joantechnologies"
                                title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                        <div class="footer-copy "> <a href="/">&copy; Joan Technologies Ltd.</a> </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="foot-review">
                            <div class="elfsight-app-4c9fddc0-50eb-4265-96f2-7896317ddcc7 all-review"
                                data-elfsight-app-lazy></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <p id="back-top"> <a href="" id="back-to-top" title="Back to Top"><span
                class="icon icon-arrows-up"></span></a> </p>
    <div id="sy-whatshelp">
        <div class="sywh-services"> <a href="https://api.whatsapp.com/send?phone=447474742390" class="whatsapp"
                target="_blank"> <i class="fab fa-whatsapp" aria-hidden="true"></i> </a> <a
                href="tel:+44 7474 74 2390" class="call"> <i class="fa fa-phone"></i> </a> </div> <a
            class="sywh-open-services"> <i class="fa fa-comments"></i> <i class="fa fa-times"></i> </a>
    </div>
    </div>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src='js/jquery.magnific-popup.min.js'></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=INSERT-YOUR-API-KEY-HERE"></script>
    <script src="js/gmap3.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact-form-validation.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/plugins/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contactus-form').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        maxlength: 30,
                        customName: true
                    },
                    contact: {
                        required: true,
                        digits: true,
                        customNumeric: true
                    },
                    message: {
                        minlength: 3,
                        maxlength: 60
                    }
                },
                messages: {
                    name: {
                        required: "Please enter your name.",
                        minlength: "Your name must be at least 3 characters long.",
                        maxlength: "Your name cannot exceed 30 characters.",
                        customName: "Please enter a valid name without special characters."
                    },
                    contact: {
                        customNumeric: "Please enter only numbers."
                    },
                    message: {
                        minlength: "Your message must be at least 3 characters long.",
                        maxlength: "Your message cannot exceed 60 characters."
                    }
                }
            });
            $.validator.addMethod("customNumeric", function(value, element) {
                return this.optional(element) || /^[0-9]+$/.test(value);
            }, "Please enter only numbers.");
            $.validator.addMethod("customName", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9 ]*$/.test(value);
            }, "Please enter a valid name without special characters.");
        });
    </script>
    <script>
        jQuery(function($) {
            $('a.sywh-open-services').click(function() {
                if ($('.sywh-services').hasClass('active')) {
                    $('.sywh-services').removeClass('active');
                    $('a.sywh-open-services i.fa-times').hide();
                    $('a.sywh-open-services i.fa-comments').show();
                    $('a.sywh-open-services').removeClass('data-tooltip-hide');
                    $('.sywh-services a:nth-child(1)').delay(0).fadeOut();
                    $('.sywh-services a:nth-child(2)').delay(100).fadeOut();
                    $('.sywh-services a:nth-child(3)').delay(200).fadeOut();
                    $('.sywh-services a:nth-child(4)').delay(300).fadeOut();
                    $('.sywh-services a:nth-child(5)').delay(400).fadeOut();
                } else {
                    $('.sywh-services').addClass('active');
                    $('a.sywh-open-services i.fa-comments').hide();
                    $('a.sywh-open-services i.fa-times').show();
                    $('a.sywh-open-services').addClass('data-tooltip-hide');
                    $('.sywh-services a:nth-child(5)').delay(0).fadeIn();
                    $('.sywh-services a:nth-child(4)').delay(100).fadeIn();
                    $('.sywh-services a:nth-child(3)').delay(200).fadeIn();
                    $('.sywh-services a:nth-child(2)').delay(300).fadeIn();
                    $('.sywh-services a:nth-child(1)').delay(400).fadeIn();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#send-message").click(function() {
                $("#message-dialog").dialog({
                    modal: true,
                    buttons: {
                        Ok: function() {
                            $(this).dialog("close");
                        }
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        history.replaceState(null, null, '');
                    });
                }
            });
            $(window).scroll(function() {
                var scrollDistance = $(window).scrollTop();
                scrollDistance += 50;
                $('.page-section').each(function(i) {
                    if ($(this).position().top <= scrollDistance) {
                        $('.nav li.current').removeClass('current');
                        $('.nav li').eq(i).addClass('current');
                    }
                });
            }).scroll();
        });
    </script>
    <script src="js/main.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution-parallax.min.js"></script>
    <script>
        jQuery(document).ready(function() {
                    if ((navigator.appVersion.indexOf("Win") != -1) && (ieDetect == false)) {
                        jQuery('#rs-fullscr').revolution({
                                    dottedOverlay: "none",
                                    delay: 16000,
                                    startwidth: 1170,
                                    startheight: 700,
                                    hideThumbs: 200,
                                    thumbWidth: 100,
                                    thumbHeight: 50,
                                    thumbAmount: 5, //fullScreenAlignForce: "off", navigationType: "none", navigationArrows: "solo", navigationStyle: "preview4", hideTimerBar: "on", touchenabled: "on", onHoverStop: "on", swipe_velocity: 0.7, swipe_min_touches: 1, swipe_max_touches: 1, drag_block_vertical: false, parallax: "scroll", parallaxBgFreeze: "on", parallaxLevels: [45, 40, 35, 50], parallaxDisableOnMobile: "on", keyboardNavigation: "off", navigationHAlign: "center", navigationVAlign: "bottom", navigationHOffset: 0, navigationVOffset: 20, soloArrowLeftHalign: "left", soloArrowLeftValign: "center", soloArrowLeftHOffset: 20, soloArrowLeftVOffset: 0, soloArrowRightHalign: "right", soloArrowRightValign: "center", soloArrowRightHOffset: 20, soloArrowRightVOffset: 0, shadow: 0, fullWidth: "off", fullScreen: "on", spinner: "spinner4", stopLoop: "off", stopAfterLoops: -1, stopAtSlide: -1, shuffle: "off", autoHeight: "off", forceFullWidth: "off", hideThumbsOnMobile: "off", hideNavDelayOnMobile: 1500, hideBulletsOnMobile: "off", hideArrowsOnMobile: "off", hideThumbsUnderResolution: 0, hideSliderAtLimit: 0, hideCaptionAtLimit: 0, hideAllCaptionAtLilmit: 0, startWithSlide: 0, //fullScreenOffsetContainer: "" }); } else { jQuery('#rs-fullscr').revolution({ dottedOverlay: "none", delay: 16000, startwidth: 1170, startheight: 700, hideThumbs: 200, thumbWidth: 100, thumbHeight: 50, thumbAmount: 5, navigationType: "none", navigationArrows: "solo", navigationStyle: "preview4", hideTimerBar: "on", touchenabled: "on", onHoverStop: "on", swipe_velocity: 0.7, swipe_min_touches: 1, swipe_max_touches: 1, drag_block_vertical: false, parallax: "mouse", parallaxBgFreeze: "on", parallaxLevels: [0], parallaxDisableOnMobile: "on", keyboardNavigation: "off", navigationHAlign: "center", navigationVAlign: "bottom", navigationHOffset: 0, navigationVOffset: 20, soloArrowLeftHalign: "left", soloArrowLeftValign: "center", soloArrowLeftHOffset: 20, soloArrowLeftVOffset: 0, soloArrowRightHalign: "right", soloArrowRightValign: "center", soloArrowRightHOffset: 20, soloArrowRightVOffset: 0, shadow: 0, fullWidth: "off", fullScreen: "on", spinner: "spinner4", stopLoop: "off", stopAfterLoops: -1, stopAtSlide: -1, shuffle: "off", autoHeight: "off", forceFullWidth: "off", hideThumbsOnMobile: "off", hideNavDelayOnMobile: 1500, hideBulletsOnMobile: "off", hideArrowsOnMobile: "off", hideThumbsUnderResolution: 0, hideSliderAtLimit: 0, hideCaptionAtLimit: 0, hideAllCaptionAtLilmit: 0, startWithSlide: 0, }); } });
    </script> {{-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}
    <script>
        $('.ourclients').slick({
            dots: true,
            prevArrow: false,
            nextArrow: false,
            autoplay: true,
        });
    </script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            $('#back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>