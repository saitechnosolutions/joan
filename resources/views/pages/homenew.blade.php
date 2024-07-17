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
    <style>
        @font-face {
            font-family: "CabinetGrotesk-light";
            src: url("http://lucasroussy.com/fonts/cabinet-grotesk/CabinetGrotesk-Light.woff2") format("woff2");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "CabinetGrotesk-extrabold";
            src: url("assets/fonts/cabinet-grotesk/CabinetGrotesk-Extrabold.woff2") format("woff2");
            font-weight: normal;
            font-style: normal;
        }

        .bigTitle {
            font-family: 'Lato', Arial, Helvetica, sans-serif;
            line-height: 0.9;
            font-size: 30px;
            color: #4b4e53;
            font-weight: 800;
        }

        .text-container h4 {

              font-family: 'Open Sans', Arial, Helvetica, sans-serif;
            color: #4b4e53;
            font-size: 21px;
            line-height: 30px;
        }

        @media (min-width: 425px) {
            .bigTitle {
                font-size: 15px;
            }
        }

        @media (min-width: 1024px) {
            .bigTitle {
                font-size: 20px;
            }
        }


        .arrow-button {
            display: flex;
            align-items: center;
            text-decoration: none;
            font-family: "CabinetGrotesk-extrabold", sans-serif;
            color: #000;
            transition: padding 1s cubic-bezier(0.16, 1, 0.3, 1);
            width: fit-content;
            font-size: 12px;
        }

        .arrow-button svg {
            width: 33px;
            margin-left: 10px;
        }

        .arrow-button svg circle {
            transition: fill 0.75s ease;
            fill: transparent;
        }

        @media (min-width: 425px) {
            .arrow-button {
                font-size: 16px;
            }

            .arrow-button svg {
                width: 45px;
            }

        }

        @media (max-width: 1024px) {
            .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide {
                height: 100vh !important;
            }
        }

        @media (max-width: 991px) {

            .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide {

                height: 45vh !important;
            }

        }

        @media (max-width: 460px) {

            .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide {

                height: 100vh !important;
            }

            .bigTitle {
                font-size: 18px;
            }

            .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image {

                background-position: unset !important;
            }
        }


        @media (min-width: 1024px) {
            .arrow-button {
                font-size: 20px;
            }

            .arrow-button svg {
                width: 62px;
            }

        }

        @media (min-width: 1440px) {
            .arrow-button {
                font-size: 15px;
            }

            .arrow-button svg {
                width: 60px;
            }
        }

        @media (min-width: 1920px) {
            .arrow-button {
                font-size: 18px;
            }

            .arrow-button svg {
                width: 70px;
            }
        }
        .banner_ull{
            margin-left:-15px;
        }

        .home-showcase {
            padding: 0 var(--columnExt) 0;
            position: relative;
        }

        .home-showcase .home-showcaseSlider {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image {
            /* padding: 5vw; */
            /* width: calc(100% - (5vw*2));
            height: calc(100% - (5vw*2)); */
            width: 100%;
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: flex-end;
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container {
            max-width: 100%;
            margin: 0 0 5rem;
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .bigTitle {
            transform: translate(-140%, 0);
            transition: transform 1.15s cubic-bezier(0.58, 0, 0.28, 0.99) 0.4s;
            color: #4b4e53;

            margin: 0 0 2.5rem;
            text-shadow: #21212121 0px 0px 5px;
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .container-arrow-button {
            transform: translate(-160%, 0);
            transition: transform 0.6s cubic-bezier(0.58, 0, 0.28, 0.99) 1s;
            width: fit-content;
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .container-arrow-button .arrow-button {
            color: black;
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .container-arrow-button svg path {
            fill: #f8f5f0;
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .container-arrow-button svg circle {
            stroke: #f8f5f0;
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .container-arrow-button:hover svg circle {
            stroke: #f8f5f0;
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .filter {
            width: 100%;
            height: 100%;
            background-color: #f8f5f0;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            opacity: 0.5;
            transition: opacity 0.8s ease-in 0.5s;
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide-active .swiper-image .text-container .bigTitle,
        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide-active .swiper-image .text-container .container-arrow-button {
            transform: translate(0, 0);
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide-active .swiper-image .filter {
            opacity: 0;
        }

        .home-showcase .home-showcaseSlider .swiper-pagination {
            position: relative;
            bottom: 0;
            left: 0;
            width: fit-content;
            padding: 3.5% 0;
        }

        .home-showcase .home-showcaseSlider .swiper-pagination-bullet {
            width: 4vw;
            border-radius: 50px;
            height: 2px;
            background-color: #8f9397;
            opacity: 1;
            transition: width 0.8s ease-in-out, 0.4s ease-in-out;
            margin: 0 4px !important;
        }

        .home-showcase .home-showcaseSlider .swiper-pagination-bullet-active {
            background-color: #f7970e;
            width: 8vw;
        }

        .home-showcase .home-showcaseSlider .showcaseSlider-nav {
            display: flex;
            flex-direction: row;
            padding: 0 0 3.5% 5%;
            padding-right: 0;
        }

        .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-prev,
        .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-next {
            position: static;
            display: flex;
            align-items: flex-end;
            font-weight: 900;
            margin: 0 2vw;
            width: 20px;
            height: auto;
        }

        .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-prev.swiper-button-disabled,
        .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-next.swiper-button-disabled {
            opacity: 1;
        }

        .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-prev.swiper-button-disabled:after,
        .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-next.swiper-button-disabled:after {
            color: #8f9397;
        }

        .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-prev::after,
        .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-next::after {
            font-size: 4vw;
            color: #f7970e;
        }

        .home-showcase .home-showcaseSlider #macaron {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            margin: 5%;
            width: 30%;
        }

        .home-showcase .home-showcaseSlider #macaron #text-circle {
            animation: rotate-360 12s linear 0s infinite reverse forwards;
            transform-origin: center;
        }

        .home-showcase .scrollSliderButton {
            position: absolute;
            left: 50%;
            bottom: 0;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            transform: translate(-50%, 0%);
            color: #fff !important;
            text-decoration: none;
            font-size: 3.5vw;
            height: 21vw;
            font-family: "CabinetGrotesk-light", sans-serif;
        }

        .home-showcase .scrollSliderButton .line {
            height: 15vw;
            width: 1px;
            background: #8c97d0;
            margin-top: 5px;
            animation: scroll-anim-mobile 1.6s cubic-bezier(0.62, 0.01, 0.71, 0.47) 0s infinite normal forwards;
        }


        /* .swiper4 {
            background-image: url(/images/ban2.png);
        }

        .swiper3 {
            background-image: url(/images/ban3.png);
        }

        .swiper2 {
            background-image: url(/images/ban4.png);
        }

        .swiper1 {
            background-image: url(/images/ban1.png);
        } */

        .slider-img img {
            width: 100%;
        }

        .text-container h1 {
            margin: 3px;
        }

        .first1 {
            color: #4b4e53;
            font-family: 'Lato', Arial, Helvetica, sans-serif;
            font-size: 50px !important;
            line-height: 80px;
            font-weight: 300;
            margin: 0;
        }

        .secound1 {
            color: #4b4e53;
            font-family: 'Lato', Arial, Helvetica, sans-serif;
            font-size: 50px !important;
            line-height: 30px;
            font-weight: 900;
            margin: 0;
        }

        .banner_ull li {
            font-family: 'Open Sans', Arial, Helvetica, sans-serif;
            font-weight: normal;
            font-size: 21px;
            line-height: 35px;
            color: #7e8082;
        }

        .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image {
            padding: 20px 110px;
        }

        @media (min-width: 1024px) {

            .home-showcase .home-showcaseSlider {
                display: block;
            }



            .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image {
                align-items: center;
            }

            .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container {
                max-width: 75%;
                margin: 0;
            }

            .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .bigTitle {
                margin: 0 0 1.25rem;
            }

            .home-showcase .home-showcaseSlider .swiper-pagination {
                position: absolute;
                bottom: 0;
                left: 0;
                padding: 0 0 2.5% 5%;
            }

            .home-showcase .home-showcaseSlider .swiper-pagination-bullet {
                width: 1.5vw;
                height: 3px;
                margin: 0 8px !important;
            }

            .home-showcase .home-showcaseSlider .swiper-pagination-bullet-active {
                width: 3vw;
            }

            .home-showcase .home-showcaseSlider .showcaseSlider-nav {
                position: absolute;
                bottom: 0;
                right: 0;
                z-index: 1;
                padding: 0 5% 2.5% 5%;
            }

            .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-prev,
            .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-next {
                margin: 0 0.6vw;
            }

            .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-prev::after,
            .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-next::after {
                font-size: 1vw;
            }

            .home-showcase .home-showcaseSlider #macaron {
                width: fit-content;
                width: 8.4vw;
            }

            .home-showcase .scrollSliderButton {
                position: absolute;
                left: 50%;
                bottom: 0;
                z-index: 2;
                display: flex;
                flex-direction: column;
                align-items: center;
                transform: translate(-50%, 40%);
                color: #fff !important;
                text-decoration: none;
                font-size: 0.9vw;
                height: 4.8vw;
                font-family: "CabinetGrotesk-light", sans-serif;
            }

            .home-showcase .scrollSliderButton .line {
                height: 4.8vw;
                width: 2px;
                background: #8c97d0;
                margin-top: 5px;
                animation: scroll-anim 1.6s cubic-bezier(0.62, 0.01, 0.71, 0.47) 0s infinite normal forwards;
            }
        }

        @media only screen and (max-width: 860px) {
            .home-showcase .home-showcaseSlider .showcaseSlider-nav {
                position: relative;
                bottom: 70px;
            }

            .home-showcase .home-showcaseSlider .swiper-pagination {
                bottom: 70px;
            }

            .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image {
                padding: 2vh 5vw;
            }
        }

     @media only screen and (max-width: 1024px) {
         .first1 {

    font-size: 35px !important;
         }
         
         .secound1 {
    font-size: 35px !important;
         }
     }

        @media only screen and (max-width: 560px) {
            .slider-img img {
  display: none;
}
/*.swiper1{*/
/*        margin-top: 100px;*/
/*}*/
/*.swiper2{*/
/*        margin-top: 100px;*/
/*}*/
/*    .swiper3{*/
/*        margin-top: 100px;*/
/*}*/
/*    .swiper4{*/
/*        margin-top: 100px;*/
/*}*/
    
            .swiper1::before {
                
                
                /*background-image: url(/images/bgai.webp);*/
                
                
                
                 /*background-image: url(/images/newa1.webp);*/
                background-repeat: no-repeat;
                content: "";
                background-attachment: fixed;
                position: absolute;
                background-position: center;
                 background-size: 100%; 
                height: 100vh;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                opacity: 0.09;
            }

            .swiper2::before {
                /*background-image: url(/images/cloud.svg);*/
                     /*background-image: url(/images/cnew.webp);*/
                background-repeat: no-repeat;
                content: "";
                background-attachment: fixed;
                position: absolute;
                background-position: center;
                /* background-size: 100% 100%; */
                height: 100vh;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                opacity: 0.09;
            }

            .swiper3::before {
                /*background-image: url(/images/data2.svg);*/
                  /*background-image: url(/images/newdata.webp);*/
                background-repeat: no-repeat;
                content: "";
                background-attachment: fixed;
                position: absolute;
                background-position: center;
                /* background-size: 100% 100%; */
                height: 100vh;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                opacity: 0.09;
            }

            .swiper4::before {
                /*background-image: url(/images/cyber.svg);*/
                   /*background-image: url(/images/newwcyber.webp);*/
                background-repeat: no-repeat;
                content: "";
                background-attachment: fixed;
                position: absolute;
                background-position: center;
                /* background-size: 100% 100%; */
                height: 100vh;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                opacity: 0.09;
            }

            .home-showcase {
                position: relative;
            }

            .text-container {
                position: absolute;
                top: 10%;
            }

            .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .bigTitle {
                margin: 5px !important;
                line-height: 1.9;
            }
        }


        @media (max-width: 479px) {
            .bigTitle {
                font-size: 34px !important;
                line-height: 50px;
            }

            .banner_ull li {
                font-size: 17px !important;
            }
        }
        @media (max-width:1150px) {
        .slider-img img {
    width: 620px;
}
        }

        @media (min-width: 576px) and (max-width: 768px) {
            .bigTitle {
                font-size: 27px !important;
                line-height: 25px !important;
            }
        }

        @media (min-width: 769px) and (max-width: 991px) {
            .bigTitle {
                font-size: 30px !important;
                line-height: 30px !important;
            }
        }

        @media (min-width: 760px) and (max-width: 1024px) {
            .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide {
                height: 50vh !important;
            }
        }

 

        @media (min-width: 576px) and (max-width: 768px) {
            .text-container h4 {
                max-width: 100%;
                font-size: 21px;
                margin: 10px 0;
                line-height: 30px;
            }
        }
    </style>
</head>

<body>
    <div id="wrap" class="boxed ">
        <div class="grey-bg"> <!-- Grey BG  -->
            <!-- HEADER -->
            <header id="nav" class="header header-1">
                <div class="header-wrapper">
                    <div class="container-m-30 clearfix">
                        <div class="logo-row">

                            <!-- LOGO -->
                            <div class="logo-container-2">
                                <div class="logo-2">
                                    <a href="/" class="clearfix">
                                        <img src="joan/logo.png" class="logo-img" alt="Logo">
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
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                            aria-label="Success:">
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
                                                <a href="#clients_sec" class="clients_scroll">
                                                    <div class="main-menu-title">CLIENTS</div>
                                                </a>
                                            </li>

                                            <!-- MENU ITEM -->
                                            <li>
                                                <a href="#contact_sec" class="contact_scroll">
                                                    <div class="main-menu-title">CONTACT</div>
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

            <section class="home-showcase" style="background: #f8f5f0">
                <div class="swiper home-showcaseSlider page-section" id="index-link">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide container">
                            <div class="swiper-image row" data-swiper-parallax-x="3%">
                                <div class="text-container col-lg-6">
                                    <div class="swiper1">

                                    <h1 class="bigTitle first1">Unlocking</h1>
                                    <h1 class="bigTitle secound1">New Possiblities</h1>
                                    <div class="container-arrow-button">
                                        <h4> We can help you
                                            integrate
                                            AI and ML into your
                                            operations,enabling tasks like:</h4>
                                        <div class="cta arrow-button" href="javascript:void(0)">

                                            <ul class="banner_ull">
                                                <li class="list11">Automate Complex Tasks</li>
                                                <li class="list12">Predictive Analystics</li>
                                                <li class="list13">Enhance Customer Experience</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="slider-img col-lg-6">
                                     <img src="/images/newa1.webp" alt="Slider Product">
                                </div>
                                <div class="filter"></div>
                            </div>
                        </div>
                        <!--<div class="swiper-slide container">-->
                        <!--    <div class="swiper-image row" data-swiper-parallax-x="3%">-->
                        <!--        <div class="text-container col-lg-6">-->
                        <!--            <div class="swiper2">-->
                        <!--            <h1 class="bigTitle first1">Scalability &</h1>-->
                        <!--            <h1 class="bigTitle secound1">Agility</h1>-->
                        <!--            <div class="container-arrow-button">-->
                        <!--                <div class="cta arrow-button" href="javascript:void(0)">-->
                        <!--                    <div class="slide-content">-->
                        <!--                        <h4>Embrace the flexibility-->
                        <!--                            of-->
                        <!--                            cloud-based solutions for:</h4>-->
                        <!--                        <ul class="banner_ull">-->
                        <!--                            <li class="list11">Enhanced Collaboration</li>-->
                        <!--                            <li class="list12">Cost Optimization</li>-->
                        <!--                            <li class="list13">Improved Disaster Recovery</li>-->
                        <!--                        </ul>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        </div>-->
                        <!--        <div class="slider-img col-lg-6"> <img src="/images/cloud.svg" alt="Slider Product">-->
                        <!--        </div>-->
                        <!--        <div class="filter"></div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="swiper-slide container">-->
                        <!--    <div class="swiper-image row" data-swiper-parallax-x="3%">-->
                        <!--        <div class="text-container col-lg-6">-->
                        <!--            <div class="swiper3">-->
                        <!--            <h1 class="bigTitle first1">Transform Data into-->
                        <!--            </h1>-->
                        <!--            <h1 class="bigTitle secound1">-->
                        <!--                Actionable Insights-->
                        <!--            </h1>-->
                        <!--            <div class="container-arrow-button">-->
                        <!--                <div class="cta arrow-button" href="javascript:void(0)">-->
                        <!--                    <div class="slide-content">-->

                        <!--                        <h4>We can help you harness the power of data:</h4>-->
                        <!--                        <ul class="banner_ull">-->
                        <!--                            <li class="list11">Data Visualization</li>-->
                        <!--                            <li class="list12">Advanced Reporting</li>-->
                        <!--                            <li class="list13">Informed Decision Making</li>-->
                        <!--                        </ul>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        </div>-->

                        <!--        <div class="slider-img col-lg-6"> <img src="/images/data2.svg" alt="Slider Product">-->
                        <!--        </div>-->
                        <!--        <div class="filter"></div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="swiper-slide container">-->
                        <!--    <div class="swiper-image row" data-swiper-parallax-x="3%">-->
                        <!--        <div class="text-container col-lg-6">-->
                        <!--            <div class="swiper4">-->
                        <!--            <h1 class="bigTitle first1">Protecting Your</h1>-->
                        <!--            <h1 class="bigTitle secound1">Business Assets</h1>-->
                        <!--            <div class="container-arrow-button">-->
                        <!--                <div class="cta arrow-button" href="javascript:void(0)">-->
                        <!--                    <div class="slide-content">-->
                        <!--                        <h4>We offer-->
                        <!--                            comprehensive cybersecurity solutions to:</h4>-->
                        <!--                        <ul class="banner_ull">-->
                        <!--                            <li class="list11">Safeguard Sensitive Data</li>-->
                        <!--                            <li class="list12">Combat Cyber Threats</li>-->
                        <!--                            <li class="list13">Ensure Business Continuity</li>-->
                        <!--                        </ul>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        </div>-->
                        <!--        <div class="slider-img col-lg-6"> <img src="/images/cyber.svg" alt="Slider Product">-->
                        <!--        </div>-->
                        <!--        <div class="filter"></div>-->
                        <!--    </div>-->
                        <!--</div>-->

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

            <!-- FEATURES 1  Who we are -->
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
            <!--why choose us-->

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
                                <a href="#contactus_sec" class="contact_scroll1 cont_act">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FEATURES 4 our services -->
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
                <div class="col-lg-4 col-md-4 col-sm-12 for_cont_col_right">
                    <div class="contact_margin">
                        <a href="#contactus_sec" class="contact_scroll1 cont_act">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DIVIDER -->
    <hr class="mt-0 mb-0">

    <!-- CLIENTS 1 & TESTIMONIALS 1 -->
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

                <!-- CLIENTS 1 -->
                <div class="col-md-6">
                    <div class="row client-row border-bot">
                        <div class="col-xs-6 col-lg-6 col-sm-3 text-center bord logo-pad border-right">
                            <img src="logos/BT.svg" alt="" data-aos="fade-right" data-aos-delay="400">
                        </div>

                        <div class="col-xs-6 col-lg-6 col-sm-3 text-center bord logo-pad">
                            <img src="logos/Infosys.svg" alt="" data-aos="fade-down" data-aos-delay="600">
                        </div>

                        <div class="col-xs-6 col-lg-6 col-sm-3 text-center logo-pad border-right">
                            <img src="logos/Freston Analytics.svg" alt="" data-aos="fade-up"
                                data-aos-delay="800">
                        </div>

                        <div class="col-xs-6 col-lg-6 col-sm-3 text-center logo-pad">
                            <img src="logos/Mobisense.png" alt="" data-aos="fade-left"
                                data-aos-delay="1000">
                        </div>
                    </div>
                </div>

                <!-- TESTIMONIALS 1 -->
                <div class="col-md-6">
                    <div class="elfsight-app-9ab8824b-0360-41f7-84a8-07502b69fcf4" data-elfsight-app-lazy></div>
                </div>
            </div>
        </div>
    </div>


    <hr class="mt-0 mb-0">
    <!-- CONTACT INFO SECTION 1 -->
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
                            <p>314 Midsummer Boulevard, <br>Milton Keynes, <br>England, MK9 2UB
                            </p>
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

    <!-- GOOGLE MAP & CONTACT FORM -->
    <div class="page-section biege-bg" id="contactus_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3493.1687895206683!2d-0.7663386259705273!3d52.038918914703274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877aaa244893cc5%3A0x5e71eafb9a33a88d!2sRegus%20-%20Milton%20Keynes%20Midsummer%20Court!5e0!3m2!1sen!2sin!4v1713940533501!5m2!1sen!2sin"
                        width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-md-6">
                    <div class="contact-form-cont">
                        <!-- TITLE -->
                        <div class="mb-40">
                            <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                        </div>

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

                                <div class="row">
                                    <div class="col-md-12 text-center-xxs">
                                        <input type="submit" value="SEND MESSAGE" class="button medium gray"
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

    <!-- FOOTER 1 -->
    <footer class="page-section text-center ">
        <div class="container">
            <div class="pt-55-b-50-cont">
                <div class="row foot-row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <!-- Social Links -->
                        <div class="footer-soc-a">
                            <a href="https://www.linkedin.com/company/joantechnologies" title="LinkedIn+"
                                target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <!-- Copyright -->
                        <div class="footer-copy ">
                            <a href="/">&copy; Joan Technologies Ltd.</a>
                        </div>
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

    <!-- BACK TO TOP -->
    <p id="back-top">
        <a href="" id="back-to-top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
    </p>

    <!--CALL ICONS-->
    <div id="sy-whatshelp">
        <div class="sywh-services">
            <a href="https://api.whatsapp.com/send?phone=447474742390" class="whatsapp" target="_blank">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>

            </a>
            <a href="tel:+44 7474 74 2390" class="call">
                <i class="fa fa-phone"></i>
            </a>
        </div>
        <a class="sywh-open-services">
            <i class="fa fa-comments"></i>
            <i class="fa fa-times"></i>
        </a>
    </div>

    <!-- JS begin -->

    <!-- jQuery  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- MAGNIFIC POPUP -->
    <script src='js/jquery.magnific-popup.min.js'></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.js"></script>


    <!-- PORTFOLIO SCRIPTS -->
    {{-- <script src="js/isotope.pkgd.min.js"></script> --}}
    <script src="js/imagesloaded.pkgd.min.js"></script>
    {{-- <script src="js/masonry.pkgd.min.js"></script> --}}

    <!-- COUNTER -->
    <script src="js/jquery.countTo.js"></script>

    <!-- APPEAR -->
    <script src="js/jquery.appear.js"></script>

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
    // <script>
    //     var swiper = new Swiper('.swiper', {
    //         loop: true,
    //         autoplay: false,
    //         pagination: {
    //             el: '.swiper-pagination',
    //             clickable: true,
    //         },
    //         navigation: {
    //             nextEl: '.swiper-button-next',
    //             prevEl: '.swiper-button-prev',
    //         },
    //         autoplay: {
    //             delay: 5000,
    //             disableOnInteraction: false,
    //         },
    //     });
    // </script>

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