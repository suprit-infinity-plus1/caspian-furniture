<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Caspian - Office equipment eCommerce HTML Template</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- font -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/caspian_logo.webp') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo/caspian_logo.webp') }}">
    

</head>

<body class="preload-wrapper">

    <button id="scroll-top">
        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_15741_24194)">
                <path
                    d="M3 11.9175L12 2.91748L21 11.9175H16.5V20.1675C16.5 20.3664 16.421 20.5572 16.2803 20.6978C16.1397 20.8385 15.9489 20.9175 15.75 20.9175H8.25C8.05109 20.9175 7.86032 20.8385 7.71967 20.6978C7.57902 20.5572 7.5 20.3664 7.5 20.1675V11.9175H3Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </g>
            <defs>
                <clipPath id="clip0_15741_24194">
                    <rect width="24" height="24" fill="white" transform="translate(0 0.66748)" />
                </clipPath>
            </defs>
        </svg>
    </button>

    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <!-- #wrapper -->
    <div id="wrapper">

        <!-- topbar -->
        <div class="tf-topbar">
            <div class="container-full">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="topbar-left d-none d-xl-flex">
                            <div class="tf-languages">
                                <a href="tel:+919833210963" class="text-white">+91 9833210963</a>
                            </div>
                            <div class="tf-currencies">
                                <a href="tel:+919820123337" class="text-white">+91 9820123337</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="wrapper-slider-topbar">
                            <div class="swiper tf-sw-top_bar" data-preview="1" data-space="0" data-loop="true"
                                data-speed="2000" data-auto-play="true" data-delay="2000">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <p class="text-caption-1 text_white">
                                            Free shipping on all orders over <span class="text_primary">$20.00</span>
                                        </p>
                                    </div>
                                    <div class="swiper-slide">
                                        <p class="text-caption-1 text_white">
                                            Free shipping on all orders over
                                            <span class="text_primary">$20.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="navigation-topbar nav-next-topbar"><span class="icon icon-left"></span></div>
                            <div class="navigation-topbar nav-prev-topbar"><span class="icon icon-right"></span></div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="topbar-right justify-content-end d-none d-xl-flex">
                            <a href="about.html" class="text_white text-caption-1 link">About</a>
                            <a href="contact.html" class="text_white text-caption-1 link">Contact</a>
                            <a href="store-list.html" class="text_white text-caption-1 link">Location</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /topbar -->

        <!-- Header -->
        <header id="header" class="header-default">
            <div class="main-header">
                <div class="container-full">
                    <div class="row wrapper-header align-items-center">
                        <div class="col-xl-5 d-none d-xl-block">
                            <nav class="box-navigation text-center">
                                <ul class="box-nav-ul justify-content-start">
                                    <li class="menu-item">
                                        <a href="#wrapper" class="item-link">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#about" class="item-link">About</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#collections" class="item-link">Collections</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#products" class="item-link">Products</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#contact" class="item-link">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-4 col-2 d-xl-none">
                            <a href="#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas"
                                aria-controls="mobileMenu">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-8 text-center">
                            <a href="index.html" class="logo-header">
                                <img src="{{ asset('assets/images/logo/caspian_logo.webp') }}" alt="logo" class="logo">
                            </a>
                        </div>
                        <div class="col-xl-5 col-md-4 col-2 d-flex justify-content-end align-items-center">
                            <button id="navEnquiryBtn" class="nav-enquiry-btn" onclick="document.getElementById('enquiryModal').classList.add('active')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                <span>Get a Quote</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /Header -->

        @yield('content')


        <!-- .footer -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-body">
                            <div class="footer-left">
                                <div class="footer-infor flex-grow-1">
                                    <div class="footer-menu">
                                        <div class="footer-col-block">
                                            <h5 class="footer-heading text_white footer-heading-mobile">
                                                Quick Links
                                            </h5>
                                            <div class="tf-collapse-content">
                                                <ul class="footer-menu-list">
                                                    <li class="text-body-default">
                                                        <a href="#wrapper" class="link footer-menu_item">Home</a>
                                                    </li>
                                                    <li class="text-body-default">
                                                        <a href="#about" class="link footer-menu_item">About</a>
                                                    </li>
                                                    <li class="text-body-default">
                                                        <a href="#collections" class="link footer-menu_item">Collections</a>
                                                    </li>
                                                    <li class="text-body-default">
                                                        <a href="#products" class="link footer-menu_item">Products</a>
                                                    </li>
                                                    <li class="text-body-default">
                                                        <a href="#contact" class="link footer-menu_item">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="footer-col-block">
                                            <h5 class="footer-heading text_white footer-heading-mobile">
                                                Customer Services
                                            </h5>
                                            <div class="tf-collapse-content">
                                                <ul class="footer-menu-list">
                                                    <li class="text-body-default">
                                                        <a href="#" class="link footer-menu_item">Shipping</a>
                                                    </li>
                                                    <li class="text-body-default">
                                                        <a href="#" class="link footer-menu_item">Return &amp;
                                                            Refund</a>
                                                    </li>
                                                    <li class="text-body-default">
                                                        <a href="#" class="link footer-menu_item">Privacy
                                                            Policy</a>
                                                    </li>
                                                    <li class="text-body-default">
                                                        <a href="term-of-use.html"
                                                            class="link footer-menu_item">Terms
                                                            &amp; Conditions</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-phone-number">
                                        <h4 class="text_white number">+61 (9) 567 8765 43</h4>
                                        <h4 class="text_white mail">hello@yourname.com</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-col-block footer-newsletter">
                                <h3 class="footer-heading footer-heading-mobile text_white">
                                    Stay in the loop with Weekly newsletters
                                </h3>
                                <div class="tf-collapse-content">
                                    <form id="subscribe-form" action="#"
                                        class="form-newsletter subscribe-form" method="post"
                                        accept-charset="utf-8" data-mailchimp="true">
                                        <div id="subscribe-content" class="subscribe-content">
                                            <fieldset class="email">
                                                <input id="subscribe-email" type="email" name="email-form"
                                                    class="subscribe-email" placeholder="Enter your e-mail"
                                                    tabindex="0" aria-required="true">
                                            </fieldset>
                                            <div class="button-submit">
                                                <button id="subscribe-button"
                                                    class="subscribe-button text-body-default "
                                                    type="button">Subscribe<i
                                                        class="icon-arrow-up-right"></i></button>
                                            </div>
                                        </div>
                                        <div id="subscribe-msg" class="subscribe-msg"></div>
                                    </form>
                                    <ul class="tf-social-icon type-2">
                                        <li><a href="#" class="social-facebook"><i
                                                    class="icon icon-facebook"></i></a>
                                        </li>
                                        <li><a href="#" class="social-twiter"><i
                                                    class="icon icon-x"></i></a></li>
                                        <li><a href="#" class="social-instagram"><i
                                                    class="icon icon-instagram"></i></a>
                                        </li>
                                        <li><a href="#" class="social-amazon"><i
                                                    class="icon icon-telegram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-bottom-wrap">
                                <div class="left">
                                    <p class="text-body-default text_white">Copyright ©2025 Caspian. All Rights
                                        Reserved.
                                    </p>
                                </div>
                                <div class="center">
                                    <div class="tf-currencies">
                                        <select class="image-select center style-default style-box  type-currencies">
                                            <option selected data-thumbnail="images/country/us.svg">English (USD)
                                            </option>
                                            <option data-thumbnail="images/country/vn.svg">Vietnam (VND)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="tf-payment">
                                    <ul>
                                        <li>
                                            <img src="{{ asset('assets/images/payment/payment-1.png') }}"
                                                alt="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/images/payment/payment-2.png') }}"
                                                alt="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/images/payment/payment-3.png') }}"
                                                alt="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/images/payment/payment-4.png') }}"
                                                alt="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/images/payment/payment-5.png') }}"
                                                alt="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/images/payment/payment-6.png') }}"
                                                alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.footer -->



    </div><!-- /wrapper -->

    <!-- mobile menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                    <li class="nav-mb-item">
                        <a href="#wrapper" class="mb-menu-link" data-bs-dismiss="offcanvas">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#about" class="mb-menu-link" data-bs-dismiss="offcanvas">
                            <span>About</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#collections" class="mb-menu-link" data-bs-dismiss="offcanvas">
                            <span>Collections</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#products" class="mb-menu-link" data-bs-dismiss="offcanvas">
                            <span>Products</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#contact" class="mb-menu-link" data-bs-dismiss="offcanvas">
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
                <div class="mb-other-content">
                    <div class="group-icon">
                        <a href="wish-list.html" class="site-nav-icon">
                            <svg class="icon" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.8401 4.60987C20.3294 4.09888 19.7229 3.69352 19.0555 3.41696C18.388 3.14039 17.6726 2.99805 16.9501 2.99805C16.2276 2.99805 15.5122 3.14039 14.8448 3.41696C14.1773 3.69352 13.5709 4.09888 13.0601 4.60987L12.0001 5.66987L10.9401 4.60987C9.90843 3.57818 8.50915 2.99858 7.05012 2.99858C5.59109 2.99858 4.19181 3.57818 3.16012 4.60987C2.12843 5.64156 1.54883 7.04084 1.54883 8.49987C1.54883 9.95891 2.12843 11.3582 3.16012 12.3899L4.22012 13.4499L12.0001 21.2299L19.7801 13.4499L20.8401 12.3899C21.3511 11.8791 21.7565 11.2727 22.033 10.6052C22.3096 9.93777 22.4519 9.22236 22.4519 8.49987C22.4519 7.77738 22.3096 7.06198 22.033 6.39452C21.7565 5.72706 21.3511 5.12063 20.8401 4.60987V4.60987Z"
                                    stroke="#181818" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Wishlist
                        </a>
                        <a href="search-result.html" class="site-nav-icon">
                            <svg class="icon" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                    stroke="#181818" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M21.35 21.0004L17 16.6504" stroke="#181818" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Search
                        </a>
                        <a href="login.html" class="site-nav-icon">
                            <svg class="icon" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21"
                                    stroke="#181818" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                                    stroke="#181818" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Login
                        </a>

                    </div>
                    <div class="mb-notice">
                        <a href="contact.html" class="text-need">Need help ?</a>
                    </div>
                    <ul class="mb-info">
                        <li>Address: 1234 Fashion Street, Suite 567, <br> New York, NY 10001</li>
                        <li>Email: <b>example@example.com</b></li>
                        <li>Phone: <b>(212) 555-1234</b></li>
                    </ul>
                </div>
            </div>
            <div class="mb-bottom">
                <div class="bottom-bar-language">
                    <div class="tf-currencies">
                        <select class="image-select center style-default type-currencies">
                            <option selected data-thumbnail="images/country/us.svg">USD</option>
                            <option data-thumbnail="images/country/vn.svg">VND</option>
                        </select>
                    </div>
                    <div class="tf-languages">
                        <select class="image-select center style-default type-languages">
                            <option>English</option>
                            <option>Vietnam</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /mobile menu -->

    <!-- Categories -->
    <div class="offcanvas offcanvas-start canvas-filter canvas-categories" id="shopCategories">
        <div class="canvas-wrapper">
            <div class="canvas-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                    viewBox="0 0 256 256">
                    <path
                        d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
                    </path>
                </svg>
                <h5>Categories</h5>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </div>
            <div class="canvas-body">
                <div class="wd-facet-categories">
                    <div role="dialog" class="facet-title collapsed" data-bs-target="#forChair"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="forChair">
                        <img class="avt" src="{{ asset('assets/images/shop/product-1.jpg') }}"
                            alt="avt">
                        <span class="title">Chair</span>
                        <span class="icon icon-down"></span>
                    </div>
                    <div id="forChair" class="collapse">
                        <ul class="facet-body">
                            <li>
                                <a href="shop-default.html" class="item link"><img class="avt"
                                        src="{{ asset('assets/images/shop/product-1.jpg') }}" alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Saddle Chair</span></a>
                            </li>
                            <li>
                                <a href="shop-default.html" class="item link"><img class="avt"
                                        src="{{ asset('assets/images/shop/product-1.jpg') }}" alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Ergonomic Chair</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="wd-facet-categories">
                    <div role="dialog" class="facet-title collapsed" data-bs-target="#forDesk"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="forDesk">
                        <img class="avt" src="{{ asset('assets/images/shop/popup-slidebar-item-2.jpg') }}"
                            alt="avt">
                        <span class="title">Desk</span>
                        <span class="icon icon-down"></span>
                    </div>
                    <div id="forDesk" class="collapse">
                        <ul class="facet-body">
                            <li>
                                <a href="shop-default.html" class="item link"><img class="avt"
                                        src="{{ asset('assets/images/shop/popup-slidebar-item-2.jpg') }}"
                                        alt="avt"><span class="title-sub text-caption-1 text-secondary">Office
                                        Desk</span></a>
                            </li>
                            <li>
                                <a href="shop-default.html" class="item link"><img class="avt"
                                        src="{{ asset('assets/images/shop/popup-slidebar-item-2.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Standing Desk</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="wd-facet-categories">
                    <div role="dialog" class="facet-title collapsed" data-bs-target="#forPhone"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="forPhone">
                        <img class="avt" src="{{ asset('assets/images/shop/product-5.jpg') }}"
                            alt="avt">
                        <span class="title">Phone</span>
                        <span class="icon icon-down"></span>
                    </div>
                    <div id="forPhone" class="collapse">
                        <ul class="facet-body">
                            <li>
                                <a href="shop-default.html" class="item link"><img class="avt"
                                        src="{{ asset('assets/images/shop/product-5.jpg') }}" alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Charging Pad</span></a>
                            </li>
                            <li>
                                <a href="shop-default.html" class="item link"><img class="avt"
                                        src="{{ asset('assets/images/shop/product-5.jpg') }}" alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Charging Stand</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="wd-facet-categories">
                    <div role="dialog" class="facet-title collapsed" data-bs-target="#forLamp"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="forLamp">
                        <img class="avt" src="{{ asset('assets/images/gallery/gallery-3.jpg') }}"
                            alt="avt">
                        <span class="title">Lamp</span>
                        <span class="icon icon-down"></span>
                    </div>
                    <div id="forLamp" class="collapse">
                        <ul class="facet-body">
                            <li>
                                <a href="shop-default.html" class="item link"><img class="avt"
                                        src="{{ asset('assets/images/gallery/gallery-3.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Reflection Lamp</span></a>
                            </li>
                            <li>
                                <a href="shop-default.html" class="item link"><img class="avt"
                                        src="{{ asset('assets/images/gallery/gallery-3.jpg') }}"
                                        alt="avt"><span class="title-sub text-caption-1 text-secondary">Shore
                                        Lamp</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Categories -->

    <!-- search -->
    <div class="modal fade modal-search" id="search">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Search</h5>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <form class="form-search">
                    <fieldset class="text">
                        <input type="text" placeholder="Searching..." class="" name="text"
                            tabindex="0" value="" aria-required="true" required="">
                    </fieldset>
                    <button class="" type="submit">
                        <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                stroke="#181818" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M21.35 21.0004L17 16.6504" stroke="#181818" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </form>
                <div>
                    <h5 class="mb_16">Feature keywords Today</h5>
                    <ul class="list-tags">
                        <li><a href="#" class="radius-60 link">Dresses</a></li>
                        <li><a href="#" class="radius-60 link">Dresses women</a></li>
                        <li><a href="#" class="radius-60 link">Dresses midi</a></li>
                        <li><a href="#" class="radius-60 link">Dress summer</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="mb_16">Recently viewed products</h6>
                    <div class="tf-grid-layout tf-col-2 lg-col-3 xl-col-4 loadmore-item" data-display="4"
                        data-count="4">
                        <div class="card-product style-1 fl-item">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-1.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-1.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-1.1.jpg') }}"
                                        alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon compare ">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Ergonomic Chair Pro</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-1.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-1.2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-1.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-1.3.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 fl-item">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-2.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-2.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-2.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-2.1.jpg') }}"
                                        alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon compare ">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Open Box - Adjustable Laptop
                                    Stand</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-2.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-2.2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 fl-item">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-3.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-3.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-3.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-3.1.jpg') }}"
                                        alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon compare ">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Laptop Stand</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$89.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Orange</span>
                                        <span class="swatch-value bg-light-orange"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-3.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-3.2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-light-grey"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-3.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-3.3.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 fl-item">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-4.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-4.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-4.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-4.1.jpg') }}"
                                        alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon compare ">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Double Standing Desk</a>
                                <div class="price text-body-default ">$69.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Brown</span>
                                        <span class="swatch-value bg-light-brown"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-4.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-4.2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Bink</span>
                                        <span class="swatch-value bg-light-pink"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-4.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-4.3.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-dark-grey-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-4.4.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-4.4.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 fl-item">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-5.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-5.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-5.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-5.1.jpg') }}"
                                        alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon compare ">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Wireless Charging Dock</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$89.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Orange</span>
                                        <span class="swatch-value bg-light-orange"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-5.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-5.2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-light-grey"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-5.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-5.3.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 fl-item">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-6.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-6.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-6.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-6.1.jpg') }}"
                                        alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon compare ">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Ergonomic Headrest</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-6.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-6.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-6.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-6.2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 fl-item">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-7.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-7.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-7.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-7.1.jpg') }}"
                                        alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon compare ">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Hybrid Laptop Sleeve</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-7.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-7.2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-7.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-7.3.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 fl-item">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-8.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-8.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-8.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-8.1.jpg') }}"
                                        alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon compare ">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Wireless Charging Tray</a>
                                <div class="price text-body-default ">$69.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Brown</span>
                                        <span class="swatch-value bg-light-brown"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-8.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-8.2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Bink</span>
                                        <span class="swatch-value bg-light-pink"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-8.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-8.3.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-dark-grey-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-8.4.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-8.4.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 fl-item">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-9.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-9.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-9.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-9.1.jpg') }}"
                                        alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon compare ">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Softside Chair</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-9.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-9.2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-9.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-9.3.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 fl-item">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-10.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-10.jpg') }}"
                                        alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-10.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-10.1.jpg') }}"
                                        alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon compare ">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Double Standing Desk</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-10.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-10.2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-10.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-10.3.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 fl-item">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-11.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-11.jpg') }}"
                                        alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-11.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-11.1.jpg') }}"
                                        alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon compare ">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Duo Standing Desk</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$89.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Orange</span>
                                        <span class="swatch-value bg-light-orange"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-11.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-11.2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-light-grey"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-11.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-11.3.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 fl-item">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-12.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-12.jpg') }}"
                                        alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-12.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-12.1.jpg') }}"
                                        alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon compare ">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Alumina Lamp</a>
                                <div class="price text-body-default ">$69.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Brown</span>
                                        <span class="swatch-value bg-light-brown"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-12.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-12.2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Bink</span>
                                        <span class="swatch-value bg-light-pink"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-12.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-12.3.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-dark-grey-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-12.4.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-12.4.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Load Item -->
                <div class="wd-load view-more-button text-center">
                    <button class="tf-loading btn-loadmore tf-btn btn-reset"><span
                            class="text text-btn text-btn-uppercase">Load more</span></button>
                </div>
            </div>
        </div>
    </div>
    <!-- /search -->

    <!-- shoppingCart -->
    <div class="modal fullRight fade modal-shopping-cart" id="shoppingCart">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="tf-minicart-recommendations">
                    <h6 class="title">You May Also Like</h6>
                    <div class="wrap-recommendations">
                        <div class="list-cart">
                            <div class="list-cart-item">
                                <div class="image">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/images/shop/popup-slidebar-item-1.jpg') }}"
                                        src="{{ asset('assets/images/shop/popup-slidebar-item-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="content">
                                    <div class="name">
                                        <a class="link text-line-clamp-1" href="product-detail.html">Ergonomic Chair
                                            Pro</a>
                                    </div>
                                    <div class="cart-item-bot">
                                        <div class="text-button price">$59.99</div>
                                        <a class="link text-button" href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-cart-item">
                                <div class="image">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/images/shop/popup-slidebar-item-2.jpg') }}"
                                        src="{{ asset('assets/images/shop/popup-slidebar-item-2.jpg') }}"
                                        alt="">
                                </div>
                                <div class="content">
                                    <div class="name">
                                        <a class="link text-line-clamp-1" href="product-detail.html">Double Standing
                                            Desk</a>
                                    </div>
                                    <div class="cart-item-bot">
                                        <div class="text-button price">$59.99</div>
                                        <a class="link text-button" href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-cart-item">
                                <div class="image">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/images/shop/popup-slidebar-item-3.jpg') }}"
                                        src="{{ asset('assets/images/shop/popup-slidebar-item-3.jpg') }}"
                                        alt="">
                                </div>
                                <div class="content">
                                    <div class="name">
                                        <a class="link text-line-clamp-1" href="product-detail.html">Duo Standing
                                            Desk</a>
                                    </div>
                                    <div class="cart-item-bot">
                                        <div class="text-button price">$59.99</div>
                                        <a class="link text-button" href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-cart-item">
                                <div class="image">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/images/shop/popup-slidebar-item-4.jpg') }}"
                                        src="{{ asset('assets/images/shop/popup-slidebar-item-4.jpg') }}"
                                        alt="">
                                </div>
                                <div class="content">
                                    <div class="name">
                                        <a class="link text-line-clamp-1" href="product-detail.html">Alumina
                                            Lamp</a>
                                    </div>
                                    <div class="cart-item-bot">
                                        <div class="text-button price">$59.99</div>
                                        <a class="link text-button" href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-grow-1 h-100">
                    <div class="header">
                        <h5 class="title">Shopping Cart</h5>
                        <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                    </div>
                    <div class="wrap">
                        <div class="tf-mini-cart-threshold">
                            <div class="tf-progress-bar">
                                <div class="value" style="width: 0%;" data-progress="75">
                                    <i class="icon icon-shipping"></i>
                                </div>
                            </div>
                            <div class="text-caption-1">
                                Congratulations! You've got free shipping!
                            </div>
                        </div>
                        <div class="tf-mini-cart-wrap">
                            <div class="tf-mini-cart-main">
                                <div class="tf-mini-cart-sroll">
                                    <div class="tf-mini-cart-items">
                                        <div class="tf-mini-cart-item file-delete">
                                            <div class="tf-mini-cart-image">
                                                <img class="lazyload"
                                                    data-src="{{ asset('assets/images/shop/popup-cart-item-1.jpg') }}"
                                                    src="{{ asset('assets/images/shop/popup-cart-item-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="tf-mini-cart-info flex-grow-1">
                                                <div class="content">
                                                    <div class="left">
                                                        <div class="text-title"><a href="product-detail.html"
                                                                class="link line-clamp-1">Open Box -
                                                                Adjustable...</a>
                                                        </div>
                                                        <div class="text-secondary-2">Gray, Size C</div>
                                                        <div class="wg-quantity">
                                                            <span class="btn-quantity btn-decrease">-</span>
                                                            <input type="text" class="quantity-product"
                                                                name="number" value="1">
                                                            <span class="btn-quantity btn-increase">+</span>
                                                        </div>
                                                    </div>
                                                    <div class="right">
                                                        <div class="text-button tf-btn-remove remove">Remove</div>
                                                        <div class="text-button">1 X $60.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tf-mini-cart-item file-delete">
                                            <div class="tf-mini-cart-image">
                                                <img class="lazyload"
                                                    data-src="{{ asset('assets/images/shop/popup-cart-item-2.jpg') }}"
                                                    src="{{ asset('assets/images/shop/popup-cart-item-2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="tf-mini-cart-info flex-grow-1">
                                                <div class="content">
                                                    <div class="left">
                                                        <div class="text-title"><a href="product-detail.html"
                                                                class="link line-clamp-1">Ergonomic Chair Pro</a>
                                                        </div>
                                                        <div class="text-secondary-2">Gray, Size C</div>
                                                        <div class="wg-quantity">
                                                            <span class="btn-quantity btn-decrease">-</span>
                                                            <input type="text" class="quantity-product"
                                                                name="number" value="1">
                                                            <span class="btn-quantity btn-increase">+</span>
                                                        </div>
                                                    </div>
                                                    <div class="right">
                                                        <div class="text-button tf-btn-remove remove">Remove</div>
                                                        <div class="text-button">1 X $60.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tf-mini-cart-item file-delete">
                                            <div class="tf-mini-cart-image">
                                                <img class="lazyload"
                                                    data-src="{{ asset('assets/images/shop/popup-cart-item-3.jpg') }}"
                                                    src="{{ asset('assets/images/shop/popup-cart-item-3.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="tf-mini-cart-info flex-grow-1">
                                                <div class="content">
                                                    <div class="left">
                                                        <div class="text-title"><a href="product-detail.html"
                                                                class="link line-clamp-1">Double Standing Desk</a>
                                                        </div>
                                                        <div class="text-secondary-2">Gray, Size C</div>
                                                        <div class="wg-quantity">
                                                            <span class="btn-quantity btn-decrease">-</span>
                                                            <input type="text" class="quantity-product"
                                                                name="number" value="1">
                                                            <span class="btn-quantity btn-increase">+</span>
                                                        </div>
                                                    </div>
                                                    <div class="right">
                                                        <div class="text-button tf-btn-remove remove">Remove</div>
                                                        <div class="text-button">1 X $60.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tf-mini-cart-item file-delete">
                                            <div class="tf-mini-cart-image">
                                                <img class="lazyload"
                                                    data-src="{{ asset('assets/images/shop/popup-cart-item-4.jpg') }}"
                                                    src="{{ asset('assets/images/shop/popup-cart-item-4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="tf-mini-cart-info flex-grow-1">
                                                <div class="content">
                                                    <div class="left">
                                                        <div class="text-title"><a href="product-detail.html"
                                                                class="link line-clamp-1">Wireless Charging Dock</a>
                                                        </div>
                                                        <div class="text-secondary-2">Gray, Size C</div>
                                                        <div class="wg-quantity">
                                                            <span class="btn-quantity btn-decrease">-</span>
                                                            <input type="text" class="quantity-product"
                                                                name="number" value="1">
                                                            <span class="btn-quantity btn-increase">+</span>
                                                        </div>
                                                    </div>
                                                    <div class="right">
                                                        <div class="text-button tf-btn-remove remove">Remove</div>
                                                        <div class="text-button">1 X $60.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tf-mini-cart-item file-delete">
                                            <div class="tf-mini-cart-image">
                                                <img class="lazyload"
                                                    data-src="{{ asset('assets/images/shop/popup-cart-item-5.jpg') }}"
                                                    src="{{ asset('assets/images/shop/popup-cart-item-5.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="tf-mini-cart-info flex-grow-1">
                                                <div class="content">
                                                    <div class="left">
                                                        <div class="text-title"><a href="product-detail.html"
                                                                class="link line-clamp-1">Ergonomic Headrest</a>
                                                        </div>
                                                        <div class="text-secondary-2">Gray, Size C</div>
                                                        <div class="wg-quantity">
                                                            <span class="btn-quantity btn-decrease">-</span>
                                                            <input type="text" class="quantity-product"
                                                                name="number" value="1">
                                                            <span class="btn-quantity btn-increase">+</span>
                                                        </div>
                                                    </div>
                                                    <div class="right">
                                                        <div class="text-button tf-btn-remove remove">Remove</div>
                                                        <div class="text-button">1 X $60.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-mini-cart-bottom">
                                <div class="tf-mini-cart-tool">
                                    <div class="tf-mini-cart-tool-btn btn-add-note">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_6133_36620)">
                                                <path
                                                    d="M10 3.33325H4.16667C3.72464 3.33325 3.30072 3.50885 2.98816 3.82141C2.67559 4.13397 2.5 4.55789 2.5 4.99992V16.6666C2.5 17.1086 2.67559 17.5325 2.98816 17.8451C3.30072 18.1577 3.72464 18.3333 4.16667 18.3333H15.8333C16.2754 18.3333 16.6993 18.1577 17.0118 17.8451C17.3244 17.5325 17.5 17.1086 17.5 16.6666V10.8333"
                                                    stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16.25 2.0832C16.5815 1.75168 17.0312 1.56543 17.5 1.56543C17.9688 1.56543 18.4185 1.75168 18.75 2.0832C19.0815 2.41472 19.2678 2.86436 19.2678 3.3332C19.2678 3.80204 19.0815 4.25168 18.75 4.5832L10.8333 12.4999L7.5 13.3332L8.33333 9.99986L16.25 2.0832Z"
                                                    stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_6133_36620">
                                                    <rect width="20" height="20" fill="white"
                                                        transform="translate(0.833008)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <div class="text-caption-1">Note</div>
                                    </div>
                                    <div class="tf-mini-cart-tool-btn btn-estimate-shipping">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.333 2.5H0.833008V13.3333H13.333V2.5Z" stroke="#181818"
                                                stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.333 6.66675H16.6663L19.1663 9.16675V13.3334H13.333V6.66675Z"
                                                stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M4.58333 17.4999C5.73393 17.4999 6.66667 16.5672 6.66667 15.4166C6.66667 14.266 5.73393 13.3333 4.58333 13.3333C3.43274 13.3333 2.5 14.266 2.5 15.4166C2.5 16.5672 3.43274 17.4999 4.58333 17.4999Z"
                                                stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M15.4163 17.4999C16.5669 17.4999 17.4997 16.5672 17.4997 15.4166C17.4997 14.266 16.5669 13.3333 15.4163 13.3333C14.2657 13.3333 13.333 14.266 13.333 15.4166C13.333 16.5672 14.2657 17.4999 15.4163 17.4999Z"
                                                stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <div class="text-caption-1">Shipping</div>
                                    </div>
                                    <div class="tf-mini-cart-tool-btn btn-add-coupon">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.3247 11.1751L11.3497 17.1501C11.1949 17.305 11.0111 17.428 10.8087 17.5118C10.6064 17.5957 10.3895 17.6389 10.1705 17.6389C9.95148 17.6389 9.7346 17.5957 9.53227 17.5118C9.32994 17.428 9.14613 17.305 8.99134 17.1501L1.83301 10.0001V1.66675H10.1663L17.3247 8.82508C17.6351 9.13735 17.8093 9.55977 17.8093 10.0001C17.8093 10.4404 17.6351 10.8628 17.3247 11.1751V11.1751Z"
                                                stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M5.99902 5.83325H6.00902" stroke="#181818" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="text-caption-1">Coupon</div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-bottom-wrap">
                                    <div class="tf-cart-totals-discounts">
                                        <h5>Subtotal</h5>
                                        <h5 class="tf-totals-total-value">$186,99</h5>
                                    </div>
                                    <div class="tf-cart-checkbox">
                                        <div class="tf-checkbox-wrapp">
                                            <input class="" type="checkbox" id="CartDrawer-Form_agree"
                                                name="agree_checkbox">
                                            <div>
                                                <i class="icon-check"></i>
                                            </div>
                                        </div>
                                        <label for="CartDrawer-Form_agree">
                                            I agree with
                                            <a href="term-of-use.html" class="link"
                                                title="Terms of Service">Terms &
                                                Conditions</a>
                                        </label>
                                    </div>
                                    <div class="tf-mini-cart-view-checkout">
                                        <a href="shopping-cart.html" class="tf-btn w-100 btn-white has-border">View
                                            cart</a>
                                        <a href="checkout.html" class="tf-btn w-100 btn-onsurface">Check
                                            Out</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="link btn-line" href="shop-default.html">Or continue
                                            shopping</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-mini-cart-tool-openable add-note">
                                <div class="tf-mini-cart-tool-content">
                                    <label for="Cart-note" class="tf-mini-cart-tool-text">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_6766_32777)">
                                                    <path
                                                        d="M9.16699 3.33325H3.33366C2.89163 3.33325 2.46771 3.50885 2.15515 3.82141C1.84259 4.13397 1.66699 4.55789 1.66699 4.99992V16.6666C1.66699 17.1086 1.84259 17.5325 2.15515 17.8451C2.46771 18.1577 2.89163 18.3333 3.33366 18.3333H15.0003C15.4424 18.3333 15.8663 18.1577 16.1788 17.8451C16.4914 17.5325 16.667 17.1086 16.667 16.6666V10.8333"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M15.417 2.0832C15.7485 1.75168 16.1981 1.56543 16.667 1.56543C17.1358 1.56543 17.5855 1.75168 17.917 2.0832C18.2485 2.41472 18.4348 2.86436 18.4348 3.3332C18.4348 3.80204 18.2485 4.25168 17.917 4.5832L10.0003 12.4999L6.66699 13.3332L7.50033 9.99986L15.417 2.0832Z"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="text-title">Note</span>
                                    </label>
                                    <form class="form-add-note tf-mini-cart-tool-wrap">
                                        <fieldset class="d-flex">
                                            <textarea name="note" id="Cart-note" placeholder="Add special instructions for your order..."></textarea>
                                        </fieldset>
                                        <div class="tf-cart-tool-btns">
                                            <button type="submit"
                                                class="tf-btn btn-onsurface w-full ">Save</button>
                                            <div
                                                class="text-center link w-full text-btn-uppercase tf-mini-cart-tool-close">
                                                Cancel</div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tf-mini-cart-tool-openable estimate-shipping">
                                <div class="tf-mini-cart-tool-content">
                                    <label class="tf-mini-cart-tool-text">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_6766_32777)">
                                                    <path
                                                        d="M9.16699 3.33325H3.33366C2.89163 3.33325 2.46771 3.50885 2.15515 3.82141C1.84259 4.13397 1.66699 4.55789 1.66699 4.99992V16.6666C1.66699 17.1086 1.84259 17.5325 2.15515 17.8451C2.46771 18.1577 2.89163 18.3333 3.33366 18.3333H15.0003C15.4424 18.3333 15.8663 18.1577 16.1788 17.8451C16.4914 17.5325 16.667 17.1086 16.667 16.6666V10.8333"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M15.417 2.0832C15.7485 1.75168 16.1981 1.56543 16.667 1.56543C17.1358 1.56543 17.5855 1.75168 17.917 2.0832C18.2485 2.41472 18.4348 2.86436 18.4348 3.3332C18.4348 3.80204 18.2485 4.25168 17.917 4.5832L10.0003 12.4999L6.66699 13.3332L7.50033 9.99986L15.417 2.0832Z"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="text-title">Estimate shipping rates</span>
                                    </label>
                                    <form class="form-estimate-shipping tf-mini-cart-tool-wrap"
                                        id="form-estimate-shipping">

                                        <div class="mb_12">
                                            <div class="text-caption-1 text-secondary mb_8">Country</div>
                                            <div class="tf-select">
                                                <select class="text-title" id="shipping-country-form"
                                                    name="address[country]" data-default="">
                                                    <option value="Australia"
                                                        data-provinces='[["Australian Capital Territory","Australian Capital Territory"],["New South Wales","New South Wales"],["Northern Territory","Northern Territory"],["Queensland","Queensland"],["South Australia","South Australia"],["Tasmania","Tasmania"],["Victoria","Victoria"],["Western Australia","Western Australia"]]'>
                                                        Australia</option>
                                                    <option value="Austria" data-provinces='[]'>Austria</option>
                                                    <option value="Belgium" data-provinces='[]'>Belgium</option>
                                                    <option value="Canada"
                                                        data-provinces='[["Ontario","Ontario"],["Quebec","Quebec"]]'>
                                                        Canada
                                                    </option>
                                                    <option value="Czech Republic" data-provinces='[]'>Czechia
                                                    </option>
                                                    <option value="Denmark" data-provinces='[]'>Denmark</option>
                                                    <option value="Finland" data-provinces='[]'>Finland</option>
                                                    <option value="France" data-provinces='[]'>France</option>
                                                    <option value="Germany" data-provinces='[]'>Germany</option>
                                                    <option selected value="United States"
                                                        data-provinces='[["Alabama","Alabama"],["California","California"],["Florida","Florida"]]'>
                                                        United States</option>
                                                    <option value="United Kingdom"
                                                        data-provinces='[["England","England"],["Scotland","Scotland"],["Wales","Wales"],["Northern Ireland","Northern Ireland"]]'>
                                                        United Kingdom</option>
                                                    <option value="India" data-provinces='[]'>India</option>
                                                    <option value="Japan" data-provinces='[]'>Japan</option>
                                                    <option value="Mexico" data-provinces='[]'>Mexico</option>
                                                    <option value="South Korea" data-provinces='[]'>South Korea
                                                    </option>
                                                    <option value="Spain" data-provinces='[]'>Spain</option>
                                                    <option value="Italy" data-provinces='[]'>Italy</option>
                                                    <option value="Vietnam"
                                                        data-provinces='[["Ha Noi","Ha Noi"],["Da Nang","Da Nang"],["Ho Chi Minh","Ho Chi Minh"]]'>
                                                        Vietnam</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb_12">
                                            <div class="text-caption-1 text-secondary mb_8">State/Province</div>
                                            <div class="tf-select">
                                                <select class="text-title" name="address[province]"
                                                    id="shipping-province-form" data-default=""></select>
                                            </div>
                                        </div>
                                        <fieldset class="mb_12">
                                            <div class="text-caption-1 text-secondary mb_8">Postal/Zip Code</div>
                                            <input type="text" placeholder="100000" data-opend-focus
                                                id="zipcode" name="address[zip]" value="">
                                        </fieldset>
                                        <div id="zipcode-message" class="error mb_12" style="display: none;">
                                            We found one shipping rate available for undefined.
                                        </div>
                                        <div id="zipcode-success" class="success mb_12" style="display: none;">
                                            <p>We found one shipping rate available for your address:</p>
                                            <p class="standard">Standard at <span
                                                    class="standard-price">$8.00</span>
                                                USD</p>
                                        </div>
                                        <div class="tf-cart-tool-btns">
                                            <button type="submit" class="tf-btn btn-onsurface w-full w-100">
                                                Calculator</button>
                                            <div class="text-center w-100 link tf-mini-cart-tool-close">
                                                Cancel</div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tf-mini-cart-tool-openable add-coupon">
                                <div class="tf-mini-cart-tool-content">
                                    <label class="tf-mini-cart-tool-text">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_6766_32777)">
                                                    <path
                                                        d="M9.16699 3.33325H3.33366C2.89163 3.33325 2.46771 3.50885 2.15515 3.82141C1.84259 4.13397 1.66699 4.55789 1.66699 4.99992V16.6666C1.66699 17.1086 1.84259 17.5325 2.15515 17.8451C2.46771 18.1577 2.89163 18.3333 3.33366 18.3333H15.0003C15.4424 18.3333 15.8663 18.1577 16.1788 17.8451C16.4914 17.5325 16.667 17.1086 16.667 16.6666V10.8333"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M15.417 2.0832C15.7485 1.75168 16.1981 1.56543 16.667 1.56543C17.1358 1.56543 17.5855 1.75168 17.917 2.0832C18.2485 2.41472 18.4348 2.86436 18.4348 3.3332C18.4348 3.80204 18.2485 4.25168 17.917 4.5832L10.0003 12.4999L6.66699 13.3332L7.50033 9.99986L15.417 2.0832Z"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="text-title">Add A Coupon Code</span>
                                    </label>
                                    <form class="form-add-coupon tf-mini-cart-tool-wrap">
                                        <fieldset class="">
                                            <div class="text-caption-1 text-secondary mb_8">Enter Code</div>
                                            <input class="" type="text" placeholder="Discount code"
                                                name="text" tabindex="2" value=""
                                                aria-required="true" required="">
                                        </fieldset>
                                        <div class="tf-cart-tool-btns">
                                            <button type="submit" class="tf-btn btn-onsurface w-full w-100">
                                                Save</button>
                                            <div class="text-center w-100 link tf-mini-cart-tool-close">
                                                Cancel</div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /shoppingCart -->

    <!-- .quickView -->
    <div class="modal fullRight fade modal-quick-view" id="quickView">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="tf-quick-view-image">
                    <div class="wrap-quick-view wrapper-scroll-quickview">
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="beige">
                            <img class="lazyload"
                                data-src="{{ asset('assets/images/shop/quickview-slidebar-1.jpg') }}"
                                src="{{ asset('assets/images/shop/quickview-slidebar-1.jpg') }}" alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="gray">
                            <img class="lazyload"
                                data-src="{{ asset('assets/images/shop/quickview-slidebar-2.jpg') }}"
                                src="{{ asset('assets/images/shop/quickview-slidebar-2.jpg') }}" alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="grey">
                            <img class="lazyload"
                                data-src="{{ asset('assets/images/shop/quickview-slidebar-3.jpg') }}"
                                src="{{ asset('assets/images/shop/quickview-slidebar-3.jpg') }}" alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview">
                            <img class="lazyload"
                                data-src="{{ asset('assets/images/shop/quickview-slidebar-4.jpg') }}"
                                src="{{ asset('assets/images/shop/quickview-slidebar-4.jpg') }}" alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview">
                            <img class="lazyload"
                                data-src="{{ asset('assets/images/shop/quickview-slidebar-5.jpg') }}"
                                src="{{ asset('assets/images/shop/quickview-slidebar-5.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="header">
                        <h5 class="title">Quick View</h5>
                        <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                    </div>
                    <div class="tf-product-info-list">
                        <div class="tf-product-info-heading">
                            <div class="tf-product-info-name">
                                <h3 class="name">Ergonomic Chair Pro</h3>
                                <div class="sub">
                                    <div class="tf-product-info-rate">
                                        <div class="list-star-default">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                        <div class="text text-caption-1">(134 reviews)</div>
                                    </div>
                                    <div class="tf-product-info-sold">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.7076 9.80077L7.95759 19.1758C7.86487 19.2747 7.74247 19.3408 7.60888 19.3641C7.47528 19.3874 7.33773 19.3666 7.21699 19.3049C7.09625 19.2432 6.99886 19.1438 6.93953 19.0219C6.88019 18.8999 6.86213 18.762 6.88806 18.6289L8.03338 12.9L3.53103 11.2094C3.43434 11.1732 3.34811 11.1136 3.28005 11.036C3.21199 10.9584 3.16422 10.8651 3.14101 10.7645C3.11779 10.6639 3.11986 10.5591 3.14702 10.4595C3.17418 10.3599 3.22559 10.2686 3.29666 10.1937L12.0467 0.818744C12.1394 0.719788 12.2618 0.653675 12.3954 0.630383C12.529 0.60709 12.6665 0.627882 12.7873 0.68962C12.908 0.751359 13.0054 0.850694 13.0647 0.972636C13.1241 1.09458 13.1421 1.23251 13.1162 1.36562L11.9677 7.10077L16.4701 8.78906C16.5661 8.82547 16.6516 8.88496 16.7191 8.96228C16.7867 9.0396 16.8341 9.13236 16.8573 9.23237C16.8805 9.33237 16.8786 9.43655 16.852 9.53569C16.8253 9.63482 16.7747 9.72587 16.7045 9.80077H16.7076Z"
                                                fill="#DC9056" />
                                        </svg>

                                        <div class="text text-caption-1">18 sold in last 32 hours</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-desc">
                                <div class="tf-product-info-price">
                                    <h5 class="price-on-sale">$79.99</h5>
                                    <div class="compare-at-price">$98.99</div>
                                    <div class="badges-on-sale text-btn-uppercase">-25%
                                    </div>
                                </div>
                                <p>The garments labelled as Committed are products that have been produced using
                                    sustainable fibres or processes, reducing their environmental impact.</p>
                                <div class="tf-product-info-liveview">
                                    <i class="icon icon-eye"></i>
                                    <p class="text-caption-1">
                                        <span class="liveview-count">28</span>
                                        people are viewing this right now
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tf-product-info-choose-option">
                            <div class="variant-picker-item">
                                <div class="variant-picker-label mb_12">
                                    Colors:<span class="text-title variant-picker-label-value">Beige</span>
                                </div>
                                <div class="variant-picker-values">
                                    <input id="values-beige1" type="radio" name="color2" checked>
                                    <label
                                        class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview active"
                                        data-slide="0" data-price="79.99" for="values-beige1" data-value="Beige"
                                        data-scroll-quickview="beige">
                                        <span class="btn-checkbox bg-color-beige1"></span>
                                        <span class="tooltip">Beige</span>
                                    </label>
                                    <input id="values-gray1" type="radio" name="color2">
                                    <label class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview"
                                        data-slide="1" data-price="79.99" for="values-gray1" data-value="Gray"
                                        data-scroll-quickview="gray">
                                        <span class="btn-checkbox bg-color-gray"></span>
                                        <span class="tooltip">Gray</span>
                                    </label>
                                    <input id="values-grey1" type="radio" name="color2">
                                    <label class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview"
                                        data-slide="2" data-price="89.99" for="values-grey1" data-value="Grey"
                                        data-scroll-quickview="grey">
                                        <span class="btn-checkbox bg-color-grey"></span>
                                        <span class="tooltip">Grey</span>
                                    </label>
                                </div>
                            </div>
                            <div class="variant-picker-item">
                                <div class="d-flex justify-content-between mb_12">
                                    <div class="variant-picker-label">
                                        Size:<span class="text-title variant-picker-label-value">Size c -
                                            Large</span>
                                    </div>
                                    <a class="size-guide text-title link show-size-guide">Size Guide</a>
                                </div>
                                <div class="variant-picker-values gap12">
                                    <input type="radio" name="size2" id="values-s1">
                                    <label class="style-text size-btn" for="values-s1"
                                        data-value="Size A - Small">
                                        <span class="text-title">Size A - Small</span>
                                    </label>
                                    <input type="radio" name="size2" id="values-m1">
                                    <label class="style-text size-btn" for="values-m1" data-price="89.99"
                                        data-value="Size B - Medium">
                                        <span class="text-title">Size B - Medium</span>
                                    </label>

                                </div>
                            </div>
                            <div class="tf-product-info-quantity">
                                <div class="title mb_12">Quantity:</div>
                                <div class="wg-quantity">
                                    <span class="btn-quantity btn-decrease">-</span>
                                    <input class="quantity-product" type="text" name="number"
                                        value="1">
                                    <span class="btn-quantity btn-increase">+</span>
                                </div>
                            </div>
                            <div>
                                <div class="tf-product-info-by-btn mb_10">
                                    <a class="tf-btn btn-onsurface flex-grow-1   show-shopping-cart">
                                        <span>Add to cart -&nbsp;</span>
                                        <span class="tf-qty-price total-price">$79.99</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon hover-tooltip compare  show-compare">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip text-caption-2">Compare</span>
                                    </a>
                                    <a href="javascript:void(0);"
                                        class="box-icon hover-tooltip text-caption-2 wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip text-caption-2">Wishlist</span>
                                    </a>
                                </div>
                                <a href="#" class="tf-btn btn-primary w-full">Buy it now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.quickView -->

    <!-- .compare -->
    <div class="modal fade modal-compare" id="compare">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                <div class="tf-compare-table">
                    <div class="tf-compare-row tf-compare-grid">
                        <div class="tf-compare-col d-md-block d-none"></div>
                        <div class="tf-compare-col">
                            <div class="tf-compare-item">
                                <a class="tf-compare-image" href="product-detail.html">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/images/shop/product-10.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-10.jpg') }}" alt="img-compare">
                                </a>
                                <div class="tf-compare-content">
                                    <a class="link text-title text-line-clamp-1" href="product-detail.html">Double
                                        Standing Desk</a>
                                </div>
                            </div>
                        </div>
                        <div class="tf-compare-col">
                            <div class="tf-compare-item">
                                <a class="tf-compare-image" href="product-detail.html">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/images/shop/product-4.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-4.jpg') }}" alt="img-compare">
                                </a>
                                <div class="tf-compare-content">
                                    <a class="link text-title text-line-clamp-1" href="product-detail.html">Office
                                        Desk </a>
                                </div>
                            </div>
                        </div>
                        <div class="tf-compare-col">
                            <div class="tf-compare-item">
                                <a class="tf-compare-image" href="product-detail.html">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/images/shop/product-11.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-11.jpg') }}" alt="img-compare">
                                </a>
                                <div class="tf-compare-content">
                                    <a class="link text-title text-line-clamp-1" href="product-detail.html">Ribbed
                                        cotton-blend top</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-compare-row">
                        <div class="tf-compare-col tf-compare-field d-md-block d-none">
                            <h6>Rating</h6>
                        </div>
                        <div class="tf-compare-col tf-compare-field tf-compare-rate">
                            <div class="list-star">
                                <span class="icon icon-star"></span>
                                <span class="icon icon-star"></span>
                                <span class="icon icon-star"></span>
                                <span class="icon icon-star"></span>
                                <span class="icon icon-star"></span>
                            </div>
                            <span>(134 reviews)</span>
                        </div>
                        <div class="tf-compare-col tf-compare-field tf-compare-rate">
                            <div class="list-star">
                                <span class="icon icon-star"></span>
                                <span class="icon icon-star"></span>
                                <span class="icon icon-star"></span>
                                <span class="icon icon-star"></span>
                                <span class="icon icon-star"></span>
                            </div>
                            <span>(134 reviews)</span>
                        </div>
                        <div class="tf-compare-col tf-compare-field tf-compare-rate">
                            <div class="list-star">
                                <span class="icon icon-star"></span>
                                <span class="icon icon-star"></span>
                                <span class="icon icon-star"></span>
                                <span class="icon icon-star"></span>
                                <span class="icon icon-star"></span>
                            </div>
                            <span>(134 reviews)</span>
                        </div>
                    </div>
                    <div class="tf-compare-row">
                        <div class="tf-compare-col tf-compare-field d-md-block d-none">
                            <h6>Price</h6>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="price">$68.00</span>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="price">$68.00</span>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="price">$68.00</span>
                        </div>
                    </div>
                    <div class="tf-compare-row">
                        <div class="tf-compare-col tf-compare-field d-md-block d-none">
                            <h6>Type</h6>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="type">Table</span>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="type">Table</span>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="type">Table</span>
                        </div>
                    </div>
                    <div class="tf-compare-row">
                        <div class="tf-compare-col tf-compare-field d-md-block d-none">
                            <h6>Brand</h6>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="brand">-</span>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="brand">-</span>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="brand">-</span>
                        </div>
                    </div>
                    <div class="tf-compare-row">
                        <div class="tf-compare-col tf-compare-field d-md-block d-none">
                            <h6>size</h6>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="size">Size A, Size B</span>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="size">Size A, Size B</span>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="size">Size A, Size B</span>
                        </div>
                    </div>
                    <div class="tf-compare-row">
                        <div class="tf-compare-col tf-compare-field d-md-block d-none">
                            <h6>Color</h6>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <div class="list-compare-color justify-content-center">
                                <span class="item bg-color-beige1"></span>
                                <span class="item bg-color-grey"></span>
                                <span class="item bg-color-grey"></span>

                            </div>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <div class="list-compare-color justify-content-center">
                                <span class="item bg-color-beige1"></span>
                                <span class="item bg-color-grey"></span>
                                <span class="item bg-color-grey"></span>

                            </div>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <div class="list-compare-color justify-content-center">
                                <span class="item bg-color-beige1"></span>
                                <span class="item bg-color-grey"></span>
                                <span class="item bg-color-grey"></span>

                            </div>
                        </div>
                    </div>
                    <div class="tf-compare-row">
                        <div class="tf-compare-col tf-compare-field d-md-block d-none">
                            <h6>Metarial</h6>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="size">Cotton</span>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="size">Silk</span>
                        </div>
                        <div class="tf-compare-col tf-compare-field text-center">
                            <span class="size">Velvet</span>
                        </div>
                    </div>
                    <div class="tf-compare-row">
                        <div class="tf-compare-col tf-compare-field d-md-block d-none">
                            <h6>Add To Cart</h6>
                        </div>
                        <div class="tf-compare-col tf-compare-field tf-compare-viewcart text-center">
                            <a href="shopping-cart.html" class="btn-view-cart">Add To Cart</a>
                        </div>
                        <div class="tf-compare-col tf-compare-field tf-compare-viewcart text-center">
                            <a href="shopping-cart.html" class="btn-view-cart">Add To Cart</a>
                        </div>
                        <div class="tf-compare-col tf-compare-field tf-compare-viewcart text-center">
                            <a href="shopping-cart.html" class="btn-view-cart">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.compare -->

    <!-- size-guide -->
    <div class="modal fade modal-size-guide" id="size-guide">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content widget-tabs style-2">
                <table class="tab-sizeguide-table">
                    <thead>
                        <tr>
                            <th>Size</th>
                            <th>US</th>
                            <th>Bust</th>
                            <th>Waist</th>
                            <th>Low Hip</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>XS</td>
                            <td>2</td>
                            <td>32</td>
                            <td>24 - 25</td>
                            <td>33 - 34</td>
                        </tr>
                        <tr>
                            <td>S</td>
                            <td>4</td>
                            <td>26 - 27</td>
                            <td>34 - 35</td>
                            <td>35 - 26</td>
                        </tr>
                        <tr>
                            <td>M</td>
                            <td>6</td>
                            <td>28 - 29</td>
                            <td>36 - 37</td>
                            <td>38 - 40</td>
                        </tr>
                        <tr>
                            <td>L</td>
                            <td>8</td>
                            <td>30 - 31</td>
                            <td>38 - 29</td>
                            <td>42 - 44</td>
                        </tr>
                        <tr>
                            <td>XL</td>
                            <td>10</td>
                            <td>32 - 33</td>
                            <td>40 - 41</td>
                            <td>45 - 47</td>
                        </tr>
                        <tr>
                            <td>XXL</td>
                            <td>12</td>
                            <td>34 - 35</td>
                            <td>42 - 43</td>
                            <td>48 - 50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /size-guide -->


    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/lazysize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/multiple-modal.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/simpleParallaxVanilla.umd.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Failsafe preloader dismiss: ensures spinner always hides even if other scripts error -->
    <script>
        (function () {
            function dismissPreloader() {
                try {
                    var preload = document.querySelector('.preload');
                    if (preload) {
                        preload.style.transition = 'opacity 0.5s ease';
                        preload.style.opacity = '0';
                        setTimeout(function () {
                            preload.style.display = 'none';
                            if (preload.parentNode) preload.parentNode.removeChild(preload);
                        }, 500);
                    }
                } catch (e) {}
            }
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', dismissPreloader);
            } else {
                dismissPreloader();
            }
            // Extra safety: also run on window load
            window.addEventListener('load', dismissPreloader);
            // Ultimate fallback: force dismiss after 2 seconds
            setTimeout(dismissPreloader, 2000);
        })();
    </script>

    <!-- ====== Floating Buttons ====== -->
    <!-- Left: Enquiry floating button -->
    <button id="floatEnquiryBtn" class="float-btn float-enquiry-btn" onclick="document.getElementById('enquiryModal').classList.add('active')" aria-label="Open Enquiry Form">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
        <span class="float-btn-label">Enquiry</span>
    </button>

    <!-- Right: WhatsApp floating button -->
    <a id="floatWhatsappBtn" href="https://wa.me/919999999999" target="_blank" rel="noopener noreferrer" class="float-btn float-whatsapp-btn" aria-label="Chat on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
        <span class="float-btn-label">WhatsApp</span>
    </a>

    <!-- ====== Enquiry Popup Modal ====== -->
    <div id="enquiryModal" class="enquiry-modal-overlay" onclick="if(event.target===this)this.classList.remove('active')">
        <div class="enquiry-modal-box">
            <!-- Close -->
            <button class="enquiry-close-btn" onclick="document.getElementById('enquiryModal').classList.remove('active')" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>

            <!-- Header -->
            <div class="enquiry-modal-header">
                <h4 class="enquiry-modal-title">Send an Enquiry</h4>
                <p class="enquiry-modal-subtitle">Fill in the details below and we'll get back to you shortly.</p>
            </div>

            <!-- Form -->
            <form id="enquiryForm" class="enquiry-form" onsubmit="return false;">
                <div class="enq-row">
                    <div class="enq-group">
                        <label class="enq-label" for="enq-fname">FIRST NAME</label>
                        <input type="text" id="enq-fname" name="first_name" class="enq-input" placeholder="John" required>
                    </div>
                    <div class="enq-group">
                        <label class="enq-label" for="enq-lname">LAST NAME</label>
                        <input type="text" id="enq-lname" name="last_name" class="enq-input" placeholder="Doe" required>
                    </div>
                </div>
                <div class="enq-group">
                    <label class="enq-label" for="enq-email">EMAIL ADDRESS</label>
                    <input type="email" id="enq-email" name="email" class="enq-input" placeholder="john@example.com" required>
                </div>
                <div class="enq-group">
                    <label class="enq-label" for="enq-phone">PHONE NUMBER</label>
                    <input type="tel" id="enq-phone" name="phone" class="enq-input" placeholder="+1 (212) 000-0000">
                </div>
                <div class="enq-group">
                    <label class="enq-label" for="enq-subject">SUBJECT</label>
                    <input type="text" id="enq-subject" name="subject" class="enq-input" placeholder="Product Inquiry">
                </div>
                <div class="enq-group">
                    <label class="enq-label" for="enq-message">MESSAGE</label>
                    <textarea id="enq-message" name="message" class="enq-textarea" placeholder="Tell us about your requirements..." required></textarea>
                </div>
                <button type="submit" class="enq-submit-btn tf-btn btn-onsurface">SEND ENQUIRY &nbsp;&#8594;</button>
            </form>
        </div>
    </div>

    <!-- ====== Floating + Modal CSS ====== -->
    <style>
    /* ── Navbar Enquiry Button ── */
    .nav-enquiry-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background-color: var(--Onsurface);
        color: var(--White);
        border: none;
        border-radius: 3px;
        padding: 11px 22px;
        font-family: "Kumbh Sans", sans-serif;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        cursor: pointer;
        transition: background-color 0.25s ease, transform 0.2s ease;
        white-space: nowrap;
    }
    .nav-enquiry-btn:hover {
        background-color: var(--Primary);
        transform: translateY(-1px);
    }
    .nav-enquiry-btn svg { flex-shrink: 0; }

    /* ── Floating Buttons ── */
    .float-btn {
        position: fixed;
        bottom: 28px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 13px 20px;
        border-radius: 50px;
        font-family: "Kumbh Sans", sans-serif;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.06em;
        cursor: pointer;
        border: none;
        text-decoration: none;
        z-index: 9990;
        box-shadow: 0 4px 20px rgba(0,0,0,0.18);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .float-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 28px rgba(0,0,0,0.22);
    }
    .float-enquiry-btn {
        left: 28px;
        bottom: 28px;
        background-color: var(--Onsurface);
        color: var(--White) !important;
    }
    .float-whatsapp-btn {
        left: 28px;
        bottom: 90px;
        background-color: #25D366;
        color: #fff !important;
    }
    .float-btn-label { line-height: 1; }

    /* ── Popup Modal Overlay ── */
    .enquiry-modal-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(24, 24, 24, 0.55);
        backdrop-filter: blur(4px);
        z-index: 99999;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }
    .enquiry-modal-overlay.active {
        display: flex;
        animation: enqFadeIn 0.28s ease;
    }
    @keyframes enqFadeIn {
        from { opacity: 0; }
        to   { opacity: 1; }
    }

    /* ── Modal Box ── */
    .enquiry-modal-box {
        position: relative;
        background: var(--White);
        border-radius: 6px;
        width: 100%;
        max-width: 560px;
        max-height: 90vh;
        overflow-y: auto;
        padding: 48px 44px 44px;
        box-shadow: 0 24px 64px rgba(0,0,0,0.18);
        animation: enqSlideUp 0.3s ease;
    }
    @keyframes enqSlideUp {
        from { transform: translateY(24px); opacity: 0; }
        to   { transform: translateY(0);   opacity: 1; }
    }

    /* ── Close Button ── */
    .enquiry-close-btn {
        position: absolute;
        top: 18px;
        right: 20px;
        background: none;
        border: none;
        cursor: pointer;
        color: var(--Secondary);
        padding: 4px;
        display: flex;
        align-items: center;
        transition: color 0.2s ease;
    }
    .enquiry-close-btn:hover { color: var(--Onsurface); }

    /* ── Modal Header ── */
    .enquiry-modal-header { margin-bottom: 32px; }
    .enquiry-modal-title {
        font-family: "Marcellus", sans-serif;
        font-size: 26px;
        line-height: 34px;
        font-weight: 400;
        color: var(--Onsurface);
        margin-bottom: 8px;
    }
    .enquiry-modal-subtitle {
        font-size: 14px;
        line-height: 22px;
        color: var(--Secondary);
    }

    /* ── Form Layout ── */
    .enquiry-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .enq-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }
    .enq-group {
        display: flex;
        flex-direction: column;
        gap: 7px;
    }
    .enq-label {
        font-family: "Kumbh Sans", sans-serif;
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 0.14em;
        color: var(--Secondary2);
        text-transform: uppercase;
    }
    .enq-input,
    .enq-textarea {
        font-family: "Marcellus", sans-serif;
        font-size: 15px;
        line-height: 24px;
        color: var(--Onsurface);
        background: var(--Surface);
        border: 1px solid var(--line);
        border-radius: 3px;
        padding: 11px 14px;
        width: 100%;
        outline: none;
        transition: border-color 0.25s ease, box-shadow 0.25s ease;
        -webkit-appearance: none;
        appearance: none;
    }
    .enq-input:focus,
    .enq-textarea:focus {
        border-color: var(--Primary);
        box-shadow: 0 0 0 3px rgba(130,116,96,0.12);
        background: var(--White);
    }
    .enq-textarea {
        height: 110px;
        resize: vertical;
    }
    .enq-submit-btn {
        width: 100%;
        justify-content: center;
        font-family: "Kumbh Sans", sans-serif;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.12em;
        padding: 15px;
        border-radius: 3px;
        cursor: pointer;
        margin-top: 4px;
        transition: background-color 0.25s ease, transform 0.2s ease;
    }
    .enq-submit-btn:hover { transform: translateY(-1px); }

    /* ── Responsive ── */
    @media (max-width: 600px) {
        .enquiry-modal-box { padding: 36px 20px 32px; }
        .enq-row { grid-template-columns: 1fr; }
        .float-btn-label { display: none; }
        .float-btn { padding: 14px; border-radius: 50%; }
        .float-enquiry-btn { left: 18px; bottom: 22px; }
        .float-whatsapp-btn { left: 18px; bottom: 80px; }
        .nav-enquiry-btn span { display: none; }
    }
    </style>

</body>

</html>
