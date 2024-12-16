<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2Q2QES1EEK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-2Q2QES1EEK');
    </script>

    <title>Joan Technologies</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="JOAN TECHNOLOGIES">
    <meta name="author" content="11soft">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="joan/joan_fav.png">
    <link rel="apple-touch-icon" href="joan/joan_fav.png">
    <link rel="apple-touch-icon" sizes="72x72" href="joan/joan_fav.png">
    <link rel="apple-touch-icon" sizes="114x114" href="joan/joan_fav.png">

    <!-- CSS -->
    <!-- REVOSLIDER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.min.css" media="screen">

    <!--  BOOTSTRAP -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--  GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->
    <link rel="stylesheet" href="css/icons-fonts.css">

    <!--  CSS THEME -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="/css/slick.css">

    <!-- Animation -->
    <link rel="stylesheet" href="css/animate_new.min.css">

    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="/css/simple-line-icons.css">

    <!-- ANIMATE -->
    <link rel='stylesheet' href="css/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div id="wrap" class="boxed ">
        <div class="grey-bg">
            <!-- HEADER -->
            <header id="nav" class="header header-1">
                <div class="header-wrapper">
                    <div class="container-m-30 clearfix">
                        <div class="logo-row">

                            <!-- LOGO -->
                            <div class="logo-container-2">
                                <div class="logo-2">
                                    <a href="/" class="clearfix">
                                        <img src="joan/logo.webp" class="logo-img" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <!-- BUTTON -->
                            <div class="menu-btn-respons-container">
                                <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse"
                                    data-target="#main-menu .navbar-collapse">
                                    <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- MAIN MENU CONTAINER -->
                    <div class="main-menu-container">
                        <div class="row">
                            <div class="col-12">
                                @if (session()->get('error'))
                                    <div id="errorAlert" class="alert alert-danger alert-dismissible fade show"
                                        role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                            aria-label="Danger:">
                                            <use xlink:href="#exclamation-triangle-fill" />
                                        </svg>
                                        {{ session()->get('error') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @elseif (session()->get('success'))
                                    <div id="successAlert" class="alert alert-success alert-dismissible fade show"
                                        role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24"
                                            role="img" aria-label="Success:">
                                            <use xlink:href="#check-circle-fill" />
                                        </svg>
                                        {{ session()->get('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="container-m-30 clearfix">

                            <!-- MAIN MENU -->
                            <div id="main-menu">
                                <div class="navbar navbar-default" role="navigation">

                                    <!-- MAIN MENU LIST -->
                                    <nav class="collapse collapsing navbar-collapse right-1024">
                                        <ul id="nav-onepage" class="nav navbar-nav">
                                            <!-- MENU ITEM -->
                                            <li>
                                                <a href="#index-link" class="top_scroll">
                                                    <div class="main-menu-title">HOME</div>
                                                </a>
                                            </li>

                                            <!-- MENU ITEM -->
                                            <li>
                                                <a href="#about_sec" class="about_scroll">
                                                    <div class="main-menu-title">ABOUT US</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#whyus" class="about_scroll">
                                                    <div class="main-menu-title">WHY US</div>
                                                </a>
                                            </li>

                                            <!-- MENU ITEM -->
                                            <li>
                                                <a href="#service_sec" class="service_scroll">
                                                    <div class="main-menu-title">SERVICES</div>
                                                </a>
                                            </li>

                                            <!-- MENU ITEM -->
                                            <li>
                                                {{-- <a href="#contact_sec" class="contact_scroll">
                                                    <div class="main-menu-title"></div>
                                                </a> --}}
                                            </li>
                                            <li>
                                                <a href="#contact_sec" class="contact_scroll">
                                                    <button class="nav-button">Impress Me!</button>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- END main-menu -->

                        </div>
                        <!-- END container-m-30 -->

                    </div>
                    <!-- END main-menu-container -->

                </div>
                <!-- END header-wrapper -->
            </header>

            <section class="home-showcase page-section" style="background: #f8f5f0" id="index-link">
                <div class="swiper home-showcaseSlider page-section">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide container">
                            <div class="swiper-image row" data-swiper-parallax-x="3%">
                                <div class="text-container col-lg-7">
                                    <div class="swiper1">
                                        <h1 class="bigTitle first1">Automate Smarter</h1>
                                        <h1 class="bigTitle secound1">Predict Faster</h1>
                                        <div class="container-arrow-button">
                                            <h4> Stay Ahead with AI and machine learning to enhance efficiency and gain
                                                strategic insights:</h4>
                                            <div class="cta arrow-button" href="javascript:void(0)">
                                                <ul class="banner_ull">
                                                    <li class="list11">Automate complex tasks seamlessly</li>
                                                    <li class="list12">Utilise predictive analytics for future-ready
                                                        decisions</li>
                                                    <li class="list13">Enhance customer experiences with personalised
                                                        solutions</li>
                                                </ul>
                                            </div>
                                            <div class="slider-btn-sec">
                                                <a href="#contact_sec" class="contact_scroll">
                                                    <button class="slider-newbtn">Find Me AI Solutions</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-img col-lg-5">
                                    <img src="/images/c1.png" alt="Slider Product">
                                </div>
                                <div class="filter"></div>
                            </div>
                        </div>
                        <div class="swiper-slide container">
                            <div class="swiper-image row" data-swiper-parallax-x="3%">
                                <div class="text-container col-lg-7">
                                    <div class="swiper2">
                                        <h1 class="bigTitle first1">Grow Without Limits,</h1>
                                        <h1 class="bigTitle secound1">Thrive in Any Situation</h1>
                                        <div class="container-arrow-button">
                                            <div class="cta arrow-button" href="javascript:void(0)">
                                                <div class="slide-content">
                                                    <h4>Embrace cloud technology for flexibility and growth that adapts
                                                        to your needs:</h4>
                                                    <ul class="banner_ull">
                                                        <li class="list11">Boost collaboration with cloud integration
                                                        </li>
                                                        <li class="list12">Optimise costs through scalable resources
                                                        </li>
                                                        <li class="list13">Ensure business continuity with reliable
                                                            disaster recovery</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slider-btn-sec">
                                                <a href="#contact_sec" class="contact_scroll">
                                                    <button class="slider-newbtn">Take Me to The Cloud</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-img col-lg-5">
                                    <img src="/images/newc2.png" alt="Slider Product">
                                </div>
                                <div class="filter"></div>
                            </div>
                        </div>
                        <div class="swiper-slide container">
                            <div class="swiper-image row" data-swiper-parallax-x="3%">
                                <div class="text-container col-lg-7">
                                    <div class="swiper3">
                                        <h1 class="bigTitle first1">See Clearly,
                                        </h1>
                                        <h1 class="bigTitle secound1">
                                            Act Decisively
                                        </h1>
                                        <div class="container-arrow-button">
                                            <div class="cta arrow-button" href="javascript:void(0)">
                                                <div class="slide-content">
                                                    <h4>Turn your data into practical insights for smarter decisions:
                                                    </h4>
                                                    <ul class="banner_ull">
                                                        <li class="list11">Visualise data for deeper understanding</li>
                                                        <li class="list12">Access comprehensive, advanced reporting
                                                        </li>
                                                        <li class="list13">Make confident, data-driven decisions</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slider-btn-sec">
                                                <a href="#contact_sec" class="contact_scroll">
                                                    <button class="slider-newbtn">Show Me My Insights</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-img col-lg-5">
                                    <img src="/images/c3.png" alt="Slider Product">
                                </div>
                                <div class="filter"></div>
                            </div>
                        </div>
                        <div class="swiper-slide container">
                            <div class="swiper-image row" data-swiper-parallax-x="3%">
                                <div class="text-container col-lg-7">
                                    <div class="swiper4">
                                        <h1 class="bigTitle first1">Guard What Matters,</h1>
                                        <h1 class="bigTitle secound1">Sleep Soundly</h1>
                                        <div class="container-arrow-button">
                                            <div class="cta arrow-button" href="javascript:void(0)">
                                                <div class="slide-content">
                                                    <h4>Protect your business with comprehensive cybersecurity
                                                        solutions:</h4>
                                                    <ul class="banner_ull">
                                                        <li class="list11">Safeguard sensitive data against breaches
                                                        </li>
                                                        <li class="list12">Defend against evolving cyber threats</li>
                                                        <li class="list13">Maintain business continuity with proactive
                                                            protection</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slider-btn-sec">
                                                <a href="#contact_sec" class="contact_scroll">
                                                    <button class="slider-newbtn">Strengthen My Security</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-img col-lg-5">
                                    <img src="/images/c4.png" alt="Slider Product">
                                </div>
                                <div class="filter"></div>
                            </div>
                        </div>
                    </div>
                    <!-- pagination -->
                    <div class="swiper-pagination showcaseSlider-pagination"></div>
                    <!-- navigation buttons -->
                    <div class="showcaseSlider-nav">
                        <div class="swiper-button-prev showcaseSlider-prev"></div>
                        <div class="swiper-button-next showcaseSlider-next"></div>
                    </div>
                </div>
            </section>

            <div id="clients_sec" class=" p-30-cont">
                <div class="container">
                    {{-- <div class="row">
                        <div class="col-md-12">
                            <div class="mb-50">
                                <h2 class="section-title">OUR <span class="bold">CLIENTS</span></h2>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <!-- CLIENTS 1 -->
                        <div class="col-md-6">
                            <div class="row client-row border-bot">
                                <div class="col-xs-6 col-lg-6 col-sm-3 text-center bord logo-pad border-right">
                                    <img src="logos/BT.svg" alt="BT Logo">
                                </div>
                                <div class="col-xs-6 col-lg-6 col-sm-3 text-center bord logo-pad">
                                    <img src="logos/questo.svg" alt="Questo Logo">
                                </div>
                                <div class="col-xs-6 col-lg-6 col-sm-3 text-center logo-pad border-right">
                                    <img src="logos/edge.svg" alt="Edgematics Logo">
                                </div>
                                <div class="col-xs-6 col-lg-6 col-sm-3 text-center logo-pad">
                                    <img src="logos/imedhas.png" alt="Imedhas Logo">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="elfsight-app-9ab8824b-0360-41f7-84a8-07502b69fcf4" data-elfsight-app-lazy>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section-background parallax page-section">
                <div id="about_sec" class="">
                    <div class="container fes1-cont ">
                        <div class="row">
                            <div class="col-md-4 fes1-img-cont mb-20">
                                <img class="image1" src="images/human.png" data-aos="fade-right"
                                    data-aos-duration="1500" alt="img">
                            </div>
                            <div class="col-md-8">
                                <div class="row row_class">
                                    <div class="col-md-12">
                                        <div class="fes1-main-title-cont wow fadeInDown">
                                            <div class="title-fs-60">
                                                WHO<br>
                                                <span class="bold">WE ARE</span>
                                            </div>
                                            <div class="line-3-100"></div>
                                        </div>
                                        <p class="para">At Joan Technologies, we're a passionate team of IT veterans
                                            driven by a shared mission: to empower businesses with technology solutions
                                            that
                                            unlock their full potential. We bring a unique blend of experience and
                                            enthusiasm to every project, ensuring you receive:</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn">
                                            <div class="fes1-box-icon">
                                                <img src="iii/Deep Expertise.svg" data-aos="zoom-in"
                                                    data-aos-delay="500" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3>DEEP EXPERTISE</h3>
                                            <p>Our team boasts a proven track record of success
                                                across diverse industries, backed by top-tier certifications. We bring a
                                                wealth of knowledge and experience to the table, ensuring we can
                                                tackle any challenge you face.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn" data-wow-delay="200ms">
                                            <div class="fes1-box-icon">
                                                <img src="iii/Bespoke Solutions.svg" data-aos="zoom-in"
                                                    data-aos-delay="500" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3>BESPOKE SOLUTIONS</h3>
                                            <p>We go beyond one-size-fits-all approaches. We
                                                listen, understand your specific needs, and craft custom IT strategies
                                                that align with your goals.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn" data-wow-delay="400ms">
                                            <div class="fes1-box-icon">
                                                <img src="iii/Agile Collaboration.svg" data-aos="zoom-in"
                                                    data-aos-delay="500" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3>AGILE COLLABORATION</h3>
                                            <p>Unlike large firms, our boutique structure fosters
                                                closer collaboration. You&#39;ll have direct access to our team,
                                                ensuring
                                                clear communication and a commitment to your success.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn" data-wow-delay="400ms">
                                            <div class="fes1-box-icon">
                                                <img src="iii/Results-Oriented Approach.svg" data-aos="zoom-in"
                                                    data-aos-delay="500" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3>RESULTS-ORIENTED APPROACH</h3>
                                            <p>We're not satisfied until you are. We
                                                measure success by the real-world results we deliver for your
                                                business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Divider-->
            <hr class="mt-0 mb-0">

            <section class="sectionn-background parallaxx page-section">
                <div id="whyus" class="">

                    <div class="container fes1-cont">
                        <div class="row ">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="fes1-main-title-cont wow fadeInDown">
                                            <div class="title-fs-60">
                                                WHY<br>
                                                <span class="bold">CHOOSE US ?</span>
                                            </div>
                                            <div class="line-3-100"></div>
                                        </div>
                                        <p class="para">We believe technology should be a catalyst for growth, not a
                                            source of
                                            frustration. By partnering with us, you gain a trusted advisor who:</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn">
                                            <div class="fes1-box-icon">
                                                <img src="iii/Prioritizes Understanding.svg" data-aos="zoom-in"
                                                    data-aos-delay="500" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3>PRIORITIZES UNDERSTANDING</h3>
                                            <p>We take the time to understand your
                                                business challenges and goals before offering solutions.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn" data-wow-delay="200ms">
                                            <div class="fes1-box-icon">
                                                <img src="iii/Values Agility.svg" data-aos="zoom-in"
                                                    data-aos-delay="500" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3>VALUES AGILITY</h3>
                                            <p>We adapt to your ever-changing needs and embrace
                                                innovation to keep you ahead of the curve.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn" data-wow-delay="400ms">
                                            <div class="fes1-box-icon">
                                                <img src="iii/Delivers Transparency.svg" data-aos="zoom-in"
                                                    data-aos-delay="500" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3>DELIVERS TRANSPARENCY</h3>
                                            <p>Open communication is key. We keep you
                                                informed at every step of the process.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="fes1-box wow fadeIn" data-wow-delay="400ms">
                                            <div class="fes1-box-icon">
                                                <img src="iii/Celebrates Your Success.svg" data-aos="zoom-in"
                                                    data-aos-delay="500" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3>CELEBRATES YOUR SUCCESS</h3>
                                            <p>Your success is our success. We're
                                                invested in helping your business thrive.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 fes1-img-cont mb-20">
                                <img src="images/why.webp" alt="img" data-aos="fade-left" data-aos-delay="500"
                                    data-aos-duration="1500" class="why-img">
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">

            <div class="for_contactus">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 for_cont_col_left">
                            <p class="hyperlink_p">Ready to unlock the power of technology for your business?</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 for_cont_col_right">
                            <div class="contact_margin">
                                <a href="#contact_sec" class="contact_scroll">
                                    <button class="nav-button">Impress Me!</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section id="service_sec" class="page-section fes4-cont">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="fes4-box wow fadeIn">
                                <h2 class="section-title">OUR <span class="bold">SERVICES</span></h2>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <div class=" wow fadeInDown">
                                <div class="title-fs-29">
                                    Empowering Your Business Through
                                    <span class="bold">Technology</span>
                                </div>
                                <div class="myline1"></div>
                            </div>
                            <p class="ourservicecontent">We offer a comprehensive suite of IT services designed to
                                address your
                                unique business needs and empower your growth.</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="600ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon">
                                                <img src="iii/IT Consulting.svg" data-aos="zoom-in"
                                                    data-aos-delay="1000" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3><span class="bold">IT CONSULTING</span></h3>
                                        </div>
                                        <div> Our experienced consultants provide strategic
                                            guidance on leveraging technology to achieve your business
                                            objectives.</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="800ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon">
                                                <img src="iii/Cloud Solutions.svg" data-aos="zoom-in"
                                                    data-aos-delay="1000" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3><span class="bold">CLOUD SOLUTIONS</span></h3>
                                        </div>
                                        <div>
                                            We help you migrate to the cloud, optimize your
                                            cloud environment, and unlock the benefits of scalability, agility, and
                                            cost-efficiency.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="1000ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon">
                                                <img src="iii/Application Development.svg" data-aos="zoom-in"
                                                    data-aos-delay="1000" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3><span class="bold">APPLICATION DEVELOPMENT</span></h3>
                                        </div>
                                        <div>
                                            Our team of developers craft custom
                                            software solutions that streamline workflows, enhance productivity, and
                                            give you a competitive edge.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="600ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon">
                                                <img src="iii/Managed IT Services.svg" data-aos="zoom-in"
                                                    data-aos-delay="1000" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3><span class="bold">MANAGED IT SERVICES</span></h3>
                                        </div>
                                        <div>
                                            Outsource your IT management to us, freeing
                                            up your in-house resources to focus on core business activities. We
                                            ensure your IT infrastructure runs smoothly and efficiently.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="800ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon">
                                                <img src="iii/Resource Augmentation.svg" data-aos="zoom-in"
                                                    data-aos-delay="1000" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3><span class="bold">RESOURCE AUGMENTATION</span></h3>
                                        </div>
                                        <div>
                                            Gain access to a pool of highly skilled IT
                                            professionals to fill temporary gaps or address specific project needs.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="1000ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon">
                                                <img src="iii/Infrastructure Design and Optimization.svg"
                                                    data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000"
                                                    alt="">
                                            </div>
                                            <h3><span class="bold">INFRASTRUCTURE DESIGN AND OPTIMIZATION</span></h3>
                                        </div>
                                        <div>
                                            We design and optimize
                                            your IT infrastructure for optimal performance, reliability, and
                                            scalability,
                                            ensuring your systems can grow alongside your business.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="600ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon">
                                                <img src="iii/SaaS (Software as a Service).svg" data-aos="zoom-in"
                                                    data-aos-delay="1000" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3><span class="bold">SAAS (Software as a Service)</span></h3>
                                        </div>
                                        <div>
                                            We help you leverage the benefits of
                                            cloud-based applications for a variety of business needs, from CRM to
                                            project management.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="800ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon">
                                                <img src="iii/IT Support.svg" data-aos="zoom-in"
                                                    data-aos-delay="1000" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3><span class="bold">IT SUPPORT</span></h3>
                                        </div>
                                        <div>
                                            Our dedicated support team provides ongoing assistance
                                            to troubleshoot technical issues and ensure your users have the
                                            resources they need.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="fes4-box wow fadeIn" data-wow-delay="1000ms">
                                        <div class="fes4-title-cont">
                                            <div class="fes4-box-icon">
                                                <img src="iii/Cybersecurity_1.svg" data-aos="zoom-in"
                                                    data-aos-delay="1000" data-aos-duration="1000" alt="">
                                            </div>
                                            <h3><span class="bold">CYBERSECURITY</span></h3>
                                        </div>
                                        <div>
                                            We safeguard your business against cyber threats with
                                            comprehensive security solutions to protect your data and critical
                                            infrastructure.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="for_contactus">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 for_cont_col_left">
                    <p class="hyperlink_p">Let us help you navigate the ever-evolving IT landscape and achieve your
                        business goals!</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 for_cont_col_right">
                    <div class="contact_margin">
                        <a href="#contact_sec" class="contact_scroll">
                            <button class="nav-button">Impress Me!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="mt-0 mb-0">

    <section id="contact_sec" class="page-section p-110-cont">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="cis-cont">
                        <div class="cis-icon">
                            <div class="icon icon-basic-geolocalize-01"></div>
                        </div>
                        <div class="cis-text">
                            <h3><span class="bold">HEADQUARTERS - UK</span></h3>
                            <p>314 Midsummer Boulevard, <br>Milton Keynes, <br>England, MK9 2UB
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="cis-cont">
                        <div class="cis-icon">
                            <div class="icon icon-basic-geolocalize-05"></div>
                        </div>
                        <div class="cis-text">
                            <h3><span class="bold">BRANCH OFFICE - INDIA</span></h3>
                            <p>No.: 6, 1st Floor, KCP Garden, <br>Behind PPG Institute of Technology, <br>Vilankurichi
                                Road, Saravanampatti, <br>Coimbatore - 641035.
                            </p>
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
                            <p><a href="tel:01908 101013">01908 101013</a> (UK)</p>
                        </div>
                    </div>
                    <div class="cis-cont">
                        <div class="cis-icon">
                            <div class="icon icon-basic-mail-open-text"></div>
                        </div>
                        <div class="cis-text">
                            <h3><span class="bold">EMAIL</span></h3>
                            <p><a href="mailto:hello@joantechnologies.com">hello@joantechnologies.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page-section biege-bg" id="contactus_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6" style="padding: 0">

                    <div id="map" style="height: 685px;"></div>
                </div>

                <div class="col-md-6">
                    <div class="contact-form-cont">
                        <!-- TITLE -->
                        <div class="mb-40">
                            <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                        </div>
                        {!! NoCaptcha::renderJs() !!}

                        @if ($errors->has('g-recaptcha-response'))
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        @endif
                        <!-- CONTACT FORM -->
                        <div class="">
                            <form action="/mail" method="POST" id="contactus-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <!-- <label>Your name *</label> -->
                                        <input type="text" value=""
                                            data-msg-required="Please enter your name" maxlength="100"
                                            class="controled" name="name" id="name" placeholder="NAME"
                                            required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <!-- <label>Your email address *</label> -->
                                        <input type="email" value=""
                                            data-msg-required="Please enter your email address"
                                            data-msg-email="Please enter a valid email address" maxlength="100"
                                            class="controled" name="email" id="email" placeholder="EMAIL"
                                            required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <input type="text" value=""
                                            data-msg-required="Please enter your Contact Number"
                                            data-msg-email="Please enter a valid contact Number" maxlength="15"
                                            class="controled" name="Contact" id="contact" placeholder="CONTACT"
                                            required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-40">
                                        <!-- <label>Message *</label> -->
                                        <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled"
                                            name="message" id="message" placeholder="MESSAGE" required></textarea>
                                    </div>
                                </div>
                                {!! NoCaptcha::display() !!}
                                <div class="row mt-30">
                                    <div class="col-md-12 text-center text-center-xxs">
                                        <input type="submit" value="SEND MESSAGE" class="button medium nav-button"
                                            data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                            <div class="alert alert-success hidden animated fadeIn" id="contactSuccess">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="alert alert-danger hidden animated shake" id="contactError">
                                <strong>Error!</strong> There was an error sending your message.
                            </div>

                            <div id="message-dialog" title="Message Sent">
                                <p>Your message has been sent successfully!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer page-section">
        <div class="container">
            <div class="pt-55-b-50-cont">
                <div class="ddd">
                    <div class="dd1">
                        <h6 class="supp_head">SUPPORT</h6>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <a href="/pdf/modern.pdf" target="_blank" class="SMN_effect-4">Modern Slavery
                                    Statement</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <a href="/pdf/cookie.pdf" target="_blank" class="SMN_effect-4">Cookie Policy</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <a href="/pdf/corporate.pdf" target="_blank" class="SMN_effect-4">Corporate
                                    Social Responsibility</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <a href="/pdf/privacy.pdf" target="_blank" class="SMN_effect-4">Privacy
                                    Statement</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <a href="/pdf/health.pdf" target="_blank" class="SMN_effect-4">Health And Safety
                                    Policy</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <a href="/pdf/terms.pdf" target="_blank" class="SMN_effect-4">Terms of Use</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <a href="/pdf/diversity.pdf" target="_blank" class="SMN_effect-4">Diversity,
                                    Equity, Inclusion</a>
                            </div>
                        </div>
                    </div>

                    <div class="dd2">
                        <div class="foot-review">
                            <div class="elfsight-app-4c9fddc0-50eb-4265-96f2-7896317ddcc7 all-review"
                                data-elfsight-app-lazy></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy_section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy_flex">
                        <p class="footer-text">Copyright &copy; <span id="current-year"></span> Joan Technologies Ltd.
                        </p>
                        <div class="footer-soc-a">
                            <a href="https://www.linkedin.com/company/joantechnologies" title="LinkedIn+"
                                target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- BACK TO TOP -->
    <p id="back-top">
        <a href="" id="back-to-top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
    </p>

    <!-- jQuery  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- MAGNIFIC POPUP -->
    <script src='js/jquery.magnific-popup.min.js'></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.js"></script>

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>

    <script>
        $(document).ready(function() {
            $('#current-year').text(new Date().getFullYear());
        });
    </script>

    <script>
        mapboxgl.accessToken =
            'pk.eyJ1IjoicGF2aXRocmFuNTYiLCJhIjoiY2xoZnUzaWhnMHZ2bjNxbzRweTk5bmdxNyJ9.qLY-Opstp2m3YyZAgDRPnQ';

        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/light-v10',
            zoom: 2
        });

        var popup1 = new mapboxgl.Popup({
                offset: 25
            })
            .setHTML(
                '<h4>Joan Technologies Ltd</h4><p>314 Midsummer Boulevard,</p><p>Milton Keynes,</p><p>England, MK9 2UB</p>'
            );

        var marker1 = new mapboxgl.Marker({
                color: '#008080', // Set the color to #008080
                anchor: 'bottom'
            })
            .setLngLat([-0.7575, 52.0416])
            .setPopup(popup1) // Set the popup to the marker
            .addTo(map);

        var popup2 = new mapboxgl.Popup({
                offset: 25
            })
            .setHTML(
                '<h4>Joan Technologies Ltd</h4><p>Door No.: 13, Thaneer Pandal,</p><p>Villankurichi Road,</p><p>Peelamedu, Coimbatore, <br> Tamil Nadu, India - 641004</p>'
            );

        var marker2 = new mapboxgl.Marker({
                color: '#008080', // Set the color to #008080
                anchor: 'bottom'
            })
            .setLngLat([77.0131, 11.0246])
            .setPopup(popup2) // Set the popup to the marker
            .addTo(map);

        // Automatically adjust zoom and center to fit both markers
        var bounds = new mapboxgl.LngLatBounds();
        bounds.extend([-0.7575, 52.0416]); // Milton Keynes coordinates
        bounds.extend([77.0131, 11.0246]); // Coimbatore coordinates

        map.fitBounds(bounds, {
            padding: 50,
            maxZoom: 2
        });
    </script>

    <style>
        .custom-marker {
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>


    <style>
        .custom-marker {
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>





    <!-- PORTFOLIO SCRIPTS -->
    {{-- <script src="js/isotope.pkgd.min.js"></script> --}}
    <script src="js/imagesloaded.pkgd.min.js"></script>
    {{-- <script src="js/masonry.pkgd.min.js"></script> --}}

    <!-- COUNTER -->
    <script src="js/jquery.countTo.js"></script>

    <!-- APPEAR -->
    <script src="js/jquery.appear.js"></script>
    {{-- <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47660501.js"></script> --}}

    <!-- OWL CAROUSEL -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- GOOLE MAP -->
    {{-- <script src="https://maps.google.com/maps/api/js?key=INSERT-YOUR-API-KEY-HERE"></script> --}}
    <script src="js/gmap3.min.js"></script>

    <!--[if lt IE 10]><script src="js/jquery.placeholder.js"></script><![endif]-->

    <!-- FORMS VALIDATION	-->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact-form-validation.min.js"></script>

    <!-- ONE PAGE NAV -->
    <script src="js/jquery.nav.js"></script>

    <!-- Slick Slider JS -->
    <script src="js/plugins/slick.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            speed: 1500, // Adjust the transition speed
            effect: 'slide', // Choose an effect for smoother transitions
        });
    </script>

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

                // Target all section elements on the page
                $('section').each(function(i) {
                    // Get the top offset of the section
                    var sectionTop = $(this).offset().top;

                    // Check if the scroll position has passed the section's top
                    if (scrollDistance >= sectionTop - 1) {
                        $('.nav li.current').removeClass('current');
                        $('.nav li').eq(i).addClass('current');
                    }
                });
            }).scroll();


        });
    </script>
    <!-- MAIN SCRIPT -->
    <script src="js/main.js"></script>

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
