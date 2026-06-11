@extends('layouts.master')

@section('content')
    <!-- .silideshow -->
    <div class="tf-slideshow style-default slider-nav-sw slider-effect-fade efect-2">
        <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1.428" data-tablet="1.2" data-mobile="1"
            data-centered="true" data-space="20" data-space-mb="0" data-loop="true" data-auto-play="false" data-pagination="1"
            data-pagination-md="1" data-pagination-lg="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="wrap-slider slide-1">
                        <div class="img-style">
                            <img class="lazyload" data-src="{{ asset('assets/images/slider/slider-1.jpg') }}"
                                src="{{ asset('assets/images/slider/slider-1.jpg') }}" alt="banner-cls">
                        </div>
                        <div class="box-content">
                            <div class="box-title">
                                <h1 class="text-white fade-item fade-item-1">Ergonomic Chair Pro</h1>
                                <p class="text-body-1 text-white fade-item fade-item-2">Get superior support and
                                    better posture with ergonomic chairs for long work hours</p>
                            </div>
                            <a href="shop-default.html" class="tf-btn btn-white fade-item fade-item-3">Explore
                                Collection <i class="icon-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wrap-slider slide-2">
                        <div class="img-style">
                            <img class="lazyload" data-src="{{ asset('assets/images/slider/slider-2.jpg') }}"
                                src="{{ asset('assets/images/slider/slider-2.jpg') }}" alt="banner-cls">
                        </div>
                        <div class="box-content">
                            <div class="box-title">
                                <h1 class="text-white fade-item fade-item-1">Wireless Charging Dock</h1>
                                <p class="text-body-1 text-white fade-item fade-item-2">Get superior support and
                                    better posture with ergonomic chairs for long work hours</p>
                            </div>
                            <a href="shop-default.html" class="tf-btn btn-white fade-item fade-item-3 ">Explore
                                Collection <i class="icon-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wrap-slider slide-3">
                        <div class="img-style">
                            <img class="lazyload" data-src="{{ asset('assets/images/slider/slider-3.jpg') }}"
                                src="{{ asset('assets/images/slider/slider-3.jpg') }}" alt="banner-cls">
                        </div>
                        <div class="box-content">
                            <div class="box-title">
                                <h1 class="text-white fade-item fade-item-1">Ergonomic Chair Pro</h1>
                                <p class="text-body-1 text-white fade-item fade-item-2">Get superior support and
                                    better posture with ergonomic chairs for long work hours</p>
                            </div>
                            <a href="shop-default.html" class="tf-btn btn-white fade-item fade-item-3 ">Explore
                                Collection <i class="icon-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wrap-slider slide-1">
                        <div class="img-style">
                            <img class="lazyload" data-src="{{ asset('assets/images/slider/slider-1.jpg') }}"
                                src="{{ asset('assets/images/slider/slider-1.jpg') }}" alt="banner-cls">
                        </div>
                        <div class="box-content">
                            <div class="box-title">
                                <h1 class="text-white fade-item fade-item-1">Ergonomic Duo Bundle</h1>
                                <p class="text-body-1 text-white fade-item fade-item-2">Get superior support and
                                    better posture with ergonomic chairs for long <br> work hours</p>
                            </div>
                            <a href="shop-default.html" class="tf-btn btn-white fade-item fade-item-3 ">Explore
                                Collection <i class="icon-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-pagination">
                <div class="container">
                    <div class="sw-dots sw-pagination-slider type-dot-line justify-content-center">
                    </div>
                </div>
            </div>
            <div class="sw-button swiper-button-next navigation-next-slider"></div>
            <div class="sw-button swiper-button-prev navigation-prev-slider"></div>
        </div>
    </div><!-- /.silideshow -->

    <!-- .categories -->
    <section id="collections" class="flat-spacing-2 ">
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <div class="text-center flat-spacing pt-0 line-bottom-container">
                        <div class="wrap-cls-img">
                            <div class="cls-img-item hover-img">
                                <div class="image img-style">
                                    <img data-src="{{ asset('assets/images/section/collections-banner.jpg') }}"
                                        src="{{ asset('assets/images/section/collections-banner.jpg') }}" alt="Cls Image">
                                </div>
                                <h3><a class="link" href="shop-default.html">Storage Solutions</a></h3>
                            </div>
                            <div class="cls-img-item hover-img">
                                <div class="image img-style">
                                    <img data-src="{{ asset('assets/images/section/collections-banner-1.jpg') }}"
                                        src="{{ asset('assets/images/section/collections-banner-1.jpg') }}"
                                        alt="Cls Image">
                                </div>
                                <h3><a class="link" href="shop-default.html">Lighting</a></h3>
                            </div>
                            <div class="cls-img-item hover-img">
                                <div class="image img-style">
                                    <img data-src="{{ asset('assets/images/section/collections-banner-2.jpg') }}"
                                        src="{{ asset('assets/images/section/collections-banner-2.jpg') }}"
                                        alt="Cls Image">
                                </div>
                                <h3><a class="link" href="shop-default.html">Office Chairs</a></h3>
                            </div>
                            <div class="cls-img-item hover-img">
                                <div class="image img-style">
                                    <img data-src="{{ asset('assets/images/section/collections-banner-3.jpg') }}"
                                        src="{{ asset('assets/images/section/collections-banner-3.jpg') }}"
                                        alt="Cls Image">
                                </div>
                                <h3><a class="link" href="shop-default.html">Accessories</a></h3>
                            </div>
                            <div class="cls-img-item hover-img">
                                <div class="image img-style">
                                    <img data-src="{{ asset('assets/images/section/collections-banner-4.jpg') }}"
                                        src="{{ asset('assets/images/section/collections-banner-4.jpg') }}"
                                        alt="Cls Image">
                                </div>
                                <h3><a class="link" href="shop-default.html">Decor Office</a></h3>
                            </div>

                        </div>
                        <a href="shop-default.html" class="btn-line"><span>View All Categiories</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.categories -->

    <!-- .about-us-main -->
    <section id="about" class="about-us-main pb-0">
        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-8">
                    <div class="heading-section text-center spacing-2">
                        <h1 class="wow fadeInUp">We Are GearO</h1>
                        <p class="text-body-1 text_secondary wow fadeInUp" data-wow-delay="0.1s">
                            We create unique furniture that improves the
                            new ways in which people live, work and play. For more than 70 years, we've
                            collaborated with the world's best designers to create furniture renowned for
                            its modularity, functionality, and uncompromising quality.
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="img-wrap">
                        <img class="lazyload effect-paralax "
                            src="{{ asset('assets/images/section/section-about.jpg') }}"
                            data-src="{{ asset('assets/images/section/section-about.jpg') }}" alt="">
                    </div>
                    <div class="main-content">
                        <div class="left">
                            <h3 class="mb_11 wow fadeInUp">Our Mission</h3>
                            <p class="text_secondary text-body-1 wow fadeInUp" data-wow-delay="0.1s">To create
                                growth opportunities through
                                education, community engagement, and innovative solutions. Our mission is to
                                uplift the lives of people in Odisha by driving positive social change,
                                enhancing access to resources, and fostering equitable development across the
                                region.</p>
                        </div>
                        <div class="right">
                            <h3 class="mb_11 wow fadeInUp">Our Vision</h3>
                            <p class="text_secondary text-body-1 wow fadeInUp" data-wow-delay="0.1s">To empower
                                the people of Odisha by promoting
                                sustainable development, preserving cultural heritage, and fostering innovation.
                                Our vision is to build a thriving community where economic growth and social
                                progress go hand in hand, ensuring a brighter future for all.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div dir="ltr" class="swiper tf-sw-iconbox" data-preview="4" data-tablet="3"
                        data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15"
                        data-pagination="1" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tf-box-icon">
                                    <div class="icon">
                                        <i class="icon-package"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Free & fast delivery</h5>
                                        <p>No extra costs, just the price you see.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-box-icon">
                                    <div class="icon">
                                        <i class="icon-arrow-down-left"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">14-Day Returns</h5>
                                        <p>Risk-free shopping with easy returns.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-box-icon">
                                    <div class="icon">
                                        <i class="icon-lifebuoy"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">24/7 Support</h5>
                                        <p>24/7 support, always here just for you</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-box-icon">
                                    <div class="icon">
                                        <i class="icon-sealpercent"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Member Discounts</h5>
                                        <p>Special prices for our loyal customers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-iconbox sw-dots type-circle d-flex justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.about-us-main -->

    <!-- .about-us -->
    <section class="flat-spacing-2 about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="img-style ">
                        <img class="lazyload " src="{{ asset('assets/images/section/box-about.jpg') }}"
                            alt="img_box-about">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-about">
                        <div class="heading-section spacing-3">
                            <h3 class="wow fadeInUp">Danish Design DNA</h3>
                            <p class="text-body-1 text_secondary wow fadeInUp" data-wow-delay="0.1s">GearO
                                products reflect the values of
                                craftsmanship, simplicity, functionality and quality materials that define our
                                Danish design roots.</p>
                        </div>
                        <div class="benefit">
                            <div class="benefit-item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="icon">
                                    <i class="icon-frame-3"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Form</h4>
                                    <p class="text-body-default text_secondary ">We carefully consider each
                                        detail, giving our designs a feeling of pure precision and purposeful
                                        craft.</p>
                                </div>
                            </div>
                            <div class="benefit-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon">
                                    <i class="icon-frame-2"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Feel
                                    </h4>
                                    <p class="text-body-default text_secondary ">Irresistibly crafted. Our
                                        products are intuitively inviting and welcoming, appealing to the
                                        senses.</p>
                                </div>
                            </div>
                            <div class="benefit-item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="icon">
                                    <i class="icon-frame-1"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Functionality</h4>
                                    <p class="text-body-default text_secondary ">Our designs are purposeful,
                                        carrying on the Danish tradition of design that values functionality and
                                        form.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- .about-us -->

    <!-- .top--pick -->
    <section id="products" class="flat-spacing-5 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-section text-center">
                        <h3 class="wow fadeInUp">Our Picks For You</h3>
                        <p class="text-body-default text_secondary wow fadeInUp" data-wow-delay="0.1s">Fresh
                            styles
                            just in! Elevate your look.</p>
                    </div>
                    <div class="tf-grid-layout tf-col-2 lg-col-4 ">
                        <div class="card-product style-1 wow fadeInUp" data-wow-delay="0s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-1.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-1.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-1.1.jpg') }}" alt="image-product">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                        To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class=" text-title title link">Ergonomic Chair
                                    Pro</a>
                                <div class="price text-body-default ">$79.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-1.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-1.2.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-1.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-1.3.jpg') }}" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-2.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-2.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-2.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-2.1.jpg') }}" alt="image-product">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                        To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class=" text-title title link">Open Box - Adjustable
                                    Laptop Stand</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload" data-src="{{ asset('assets/images/shop/product-2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-2.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-2.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-2.2.jpg') }}" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-3.3.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-3.3.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-3.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-3.1.jpg') }}" alt="image-product">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                        To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class=" text-title title link">Laptop Stand</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$89.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Orange</span>
                                        <span class="swatch-value bg-light-orange"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-3.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-3.2.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-light-grey"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-3.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-3.3.jpg') }}" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-4.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-4.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-4.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-4.1.jpg') }}" alt="image-product">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                        To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class=" text-title title link">Double Standing
                                    Desk</a>
                                <div class="price text-body-default ">$69.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Brown</span>
                                        <span class="swatch-value bg-light-brown"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-4.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-4.2.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Bink</span>
                                        <span class="swatch-value bg-light-pink"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-4.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-4.3.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-dark-grey-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-4.4.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-4.4.jpg') }}" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 wow fadeInUp" data-wow-delay="0s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-5.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-5.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-5.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-5.1.jpg') }}" alt="image-product">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                        To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class=" text-title title link">Wireless Charging
                                    Dock</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$89.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Orange</span>
                                        <span class="swatch-value bg-light-orange"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-5.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-5.2.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-light-grey"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-5.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-5.3.jpg') }}" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-6.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-6.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-6.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-6.1.jpg') }}" alt="image-product">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                        To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class=" text-title title link">Ergonomic
                                    Headrest</a>
                                <div class="price text-body-default ">$79.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload" data-src="{{ asset('assets/images/shop/product-6.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-6.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-6.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-6.2.jpg') }}" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-7.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-7.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-7.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-7.1.jpg') }}" alt="image-product">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                        To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class=" text-title title link">Hybrid Laptop
                                    Sleeve</a>
                                <div class="price text-body-default "><span
                                        class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-7.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-7.2.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-7.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-7.3.jpg') }}" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-product style-1 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-8.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-8.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-8.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-8.1.jpg') }}" alt="image-product">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                        To
                                        cart</a>
                                </div>
                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class=" text-title title link">Wireless Charging
                                    Tray</a>
                                <div class="price text-body-default ">$69.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Brown</span>
                                        <span class="swatch-value bg-light-brown"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-8.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-8.2.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Bink</span>
                                        <span class="swatch-value bg-light-pink"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-8.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-8.3.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-dark-grey-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-8.4.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-8.4.jpg') }}" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.top--pick -->

    <!-- .lookbook -->
    <section class="section-lookbook">
        <div class="left-img">
            <div class="cls-lookbook">
                <div class="img-style ">
                    <img class="lazyload" data-src="{{ asset('assets/images/banner/banner-lookbook-1.jpg') }}"
                        src="{{ asset('assets/images/banner/banner-lookbook-1.jpg') }}" alt="banner-cls">
                </div>
                <div class="lookbook-item position1 swiper-button" data-slide="0">
                    <div class="dropup-center dropup">
                        <div class="tf-pin-btn style-2">
                            <span></span>
                        </div>
                        <div class="loobook-product-wrap">
                            <div class="loobook-product">
                                <div class="img-style">
                                    <img src="{{ asset('assets/images/gallery/lookbook-3.jpg') }}" alt="img">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <a href="product-detail.html" class="text-title text-line-clamp-1 link">Double
                                            Standing Desk</a>
                                        <div class="price text-button">$69.99</div>
                                    </div>
                                    <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick
                                        View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lookbook-item position2 swiper-button" data-slide="1">
                    <div class="dropup-center dropup">
                        <div class="tf-pin-btn style-2">
                            <span></span>
                        </div>
                        <div class="loobook-product-wrap">
                            <div class="loobook-product">
                                <div class="img-style">
                                    <img src="{{ asset('assets/images/gallery/lookbook-1.jpg') }}" alt="img">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <a href="product-detail.html" class="text-title text-line-clamp-1 link">Ergonomic
                                            Headrest</a>
                                        <div class="price text-button">$69.99</div>
                                    </div>
                                    <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick
                                        View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-product">
            <div class="heading-section">
                <h3 class="wow fadeInUp">Start With These <br> Curated Spaces</h3>
                <p class="text-body-default text_secondary wow fadeInUp" data-wow-delay="0s">
                    Comfort and style meet to blissful perfection
                </p>
            </div>
            <div class="swiper tf-sw-lookbook sw-lookbook-wrap" data-loop="true" data-preview="1" data-tablet="1"
                data-mobile="1" data-space-lg="20" data-space-md="20" data-space="10" data-pagination="1"
                data-pagination-md="1" data-pagination-lg="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card-product style-1 wow fadeInUp" data-wow-delay="0s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-1.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-1.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-1.1.jpg') }}" alt="image-product">
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
                                <a href="product-detail.html" class=" text-title title link">Ergonomic Chair
                                    Pro</a>
                                <div class="price text-body-default ">$79.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-1.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-1.2.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-1.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-1.3.jpg') }}" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-product style-1">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('assets/images/shop/product-4.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-4.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('assets/images/shop/product-4.1.jpg') }}"
                                        src="{{ asset('assets/images/shop/product-4.1.jpg') }}" alt="image-product">
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
                                <a href="product-detail.html" class=" text-title title link">Double Standing
                                    Desk</a>
                                <div class="price text-body-default ">$69.99</div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Brown</span>
                                        <span class="swatch-value bg-light-brown"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-4.2.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-4.2.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Bink</span>
                                        <span class="swatch-value bg-light-pink"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-4.3.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-4.3.jpg') }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-dark-grey-2"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/images/shop/product-4.4.jpg') }}"
                                            src="{{ asset('assets/images/shop/product-4.4.jpg') }}" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-pagination-lookbook sw-dots type-circle justify-content-center"></div>
            </div>
        </div>
    </section>
    <!-- .lookbook -->

    <!-- .top-sale -->
    <section class="flat-spacing-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-section style-2">
                        <div class="left">
                            <h3 class="wow fadeInUp">Shop Top Sellers</h3>
                            <p class="text-body-default text_secondary wow fadeInUp" data-wow-delay="0s">Fresh
                                styles just in! Elevate your look.</p>
                        </div>
                        <div class="right wow fadeInUp">
                            <a href="shop-default.html" class="btn-line">
                                <span>View All Products</span></a>
                        </div>
                    </div>
                    <div class="sw-button-over">
                        <div class="swiper tf-sw-collection" data-preview="4" data-tablet="3" data-mobile-sm="2"
                            data-mobile="1" data-space-lg="30" data-space-md="20" data-space="15" data-loop="false">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card-product style-1 wow fadeInUp" data-wow-delay="0s">
                                        <div class="card-product-wrapper">
                                            <a href="product-detail.html" class="image-wrap">
                                                <img class="lazyload img-product"
                                                    data-src="{{ asset('assets/images/shop/product-9.jpg') }}"
                                                    src="{{ asset('assets/images/shop/product-9.jpg') }}"
                                                    alt="image-product">
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
                                                <a href="#shoppingCart" data-bs-toggle="modal"
                                                    class="btn-main-product">Add To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class=" text-title title link">Softside
                                                Chair</a>
                                            <div class="price text-body-default ">$79.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Blue</span>
                                                    <span class="swatch-value bg-light-blue"></span>
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/shop/product-9.2.jpg') }}"
                                                        src="{{ asset('assets/images/shop/product-9.2.jpg') }}"
                                                        alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Blue</span>
                                                    <span class="swatch-value bg-light-blue-2"></span>
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/shop/product-9.3.jpg') }}"
                                                        src="{{ asset('assets/images/shop/product-9.3.jpg') }}"
                                                        alt="image-product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product style-1 wow fadeInUp" data-wow-delay="0s">
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
                                                <a href="#shoppingCart" data-bs-toggle="modal"
                                                    class="btn-main-product">Add To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class=" text-title title link">Softside
                                                Chair</a>
                                            <div class="price text-body-default "><span
                                                    class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Blue</span>
                                                    <span class="swatch-value bg-light-blue"></span>
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/shop/product-10.2.jpg') }}"
                                                        src="{{ asset('assets/images/shop/product-10.2.jpg') }}"
                                                        alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Blue</span>
                                                    <span class="swatch-value bg-light-blue-2"></span>
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/shop/product-10.3.jpg') }}"
                                                        src="{{ asset('assets/images/shop/product-10.3.jpg') }}"
                                                        alt="image-product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product style-1 wow fadeInUp" data-wow-delay="0s">
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
                                                <a href="#shoppingCart" data-bs-toggle="modal"
                                                    class="btn-main-product">Add To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class=" text-title title link">Double
                                                Standing Desk</a>
                                            <div class="price text-body-default "><span
                                                    class="text-caption-1 old-price">$98.00</span>$89.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Orange</span>
                                                    <span class="swatch-value bg-light-orange"></span>
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/shop/product-11.2.jpg') }}"
                                                        src="{{ asset('assets/images/shop/product-11.2.jpg') }}"
                                                        alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Grey</span>
                                                    <span class="swatch-value bg-light-grey"></span>
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/shop/product-11.3.jpg') }}"
                                                        src="{{ asset('assets/images/shop/product-11.3.jpg') }}"
                                                        alt="image-product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product style-1 wow fadeInUp" data-wow-delay="0s">
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
                                                <a href="#shoppingCart" data-bs-toggle="modal"
                                                    class="btn-main-product">Add To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class=" text-title title link">Duo
                                                Standing Desk</a>
                                            <div class="price text-body-default ">$69.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Brown</span>
                                                    <span class="swatch-value bg-light-brown"></span>
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/shop/product-12.2.jpg') }}"
                                                        src="{{ asset('assets/images/shop/product-12.2.jpg') }}"
                                                        alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Bink</span>
                                                    <span class="swatch-value bg-light-pink"></span>
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/shop/product-12.3.jpg') }}"
                                                        src="{{ asset('assets/images/shop/product-12.3.jpg') }}"
                                                        alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Grey</span>
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
                                <div class="swiper-slide">
                                    <div class="card-product style-1">
                                        <div class="card-product-wrapper">
                                            <a href="product-detail.html" class="image-wrap">
                                                <img class="lazyload img-product"
                                                    data-src="{{ asset('assets/images/shop/product-1.jpg') }}"
                                                    src="{{ asset('assets/images/shop/product-1.jpg') }}"
                                                    alt="image-product">
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
                                                <a href="#shoppingCart" data-bs-toggle="modal"
                                                    class="btn-main-product">Add To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class=" text-title title link">Alumina
                                                Lamp</a>
                                            <div class="price text-body-default "><span
                                                    class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Blue</span>
                                                    <span class="swatch-value bg-light-blue"></span>
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/shop/product-1.2.jpg') }}"
                                                        src="{{ asset('assets/images/shop/product-1.2.jpg') }}"
                                                        alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Blue</span>
                                                    <span class="swatch-value bg-light-blue-2"></span>
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/shop/product-1.3.jpg') }}"
                                                        src="{{ asset('assets/images/shop/product-1.3.jpg') }}"
                                                        alt="image-product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-pagination d-lg-none d-block">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="sw-pagination-collection sw-dots  type-circle d-flex justify-content-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-button swiper-button-next nav-next-collection has-border d_lg_none "></div>
                        <div class="sw-button swiper-button-prev nav-prev-collection has-border d_lg_none "></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- .top-sale -->



    <!-- .collection  -->
    <section class="flat-spacing-2 pt-0">
        <div class="container">
            <div class="swiper tf-sw-mobile" data-screen="767" data-preview="1" data-space="15">
                <div class="swiper-wrapper grid-cls-v2">
                    <div class="swiper-slide item1">
                        <div class="collection-position style-2">
                            <a href="product-detail.html" class="img-style ">
                                <img class="lazyload effect-paralax"
                                    data-src="{{ asset('assets/images/banner/banner-1.jpg') }}"
                                    src="{{ asset('assets/images/banner/banner-1.jpg') }}" alt="banner-cls">
                            </a>
                            <div class="content cls-content">
                                <div class="cls-heading">
                                    <h3 class="text_white wow fadeInUp" data-wow-delay="0s">Super Sale Up To 50%
                                    </h3>
                                    <p class="text_white wow fadeInUp" data-wow-delay="0.1s">Reserved for
                                        special occasions</p>
                                </div>
                                <a href="product-detail.html" class="tf-btn btn-white  wow fadeInUp"
                                    data-wow-delay="0.2s">Explore Collection <i class="icon-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide item2">
                        <div class="collection-position style-2 spacing-1 ">
                            <a href="product-detail.html" class="img-style ">
                                <img class="lazyload effect-paralax"
                                    data-src="{{ asset('assets/images/banner/banner-7.jpg') }}"
                                    src="{{ asset('assets/images/banner/banner-7.jpg') }}" alt="banner-cls">
                            </a>
                            <div class="content cls-content">
                                <div class="cls-heading">
                                    <h4 class="text_white wow fadeInUp" data-wow-delay="0s">Upgrade Your
                                        Workspace</h4>
                                    <p class="text_white wow fadeInUp" data-wow-delay="0.1s">Modern office
                                        lighting</p>
                                </div>
                                <a href="product-detail.html" class="btn-line btn-line-white wow fadeInUp"
                                    data-wow-delay="0.2s"><span>
                                        Shop Lighting
                                    </span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide item3">
                        <div class="collection-position style-2 spacing-1 ">
                            <a href="product-detail.html" class="img-style ">
                                <img class="lazyload effect-paralax"
                                    data-src="{{ asset('assets/images/banner/banner-8.jpg') }}"
                                    src="{{ asset('assets/images/banner/banner-8.jpg') }}" alt="banner-cls">
                            </a>
                            <div class="content cls-content">
                                <div class="cls-heading">
                                    <h4 class="text_white wow fadeInUp" data-wow-delay="0s">Elevate Your Office
                                    </h4>
                                    <p class="text_white wow fadeInUp" data-wow-delay="0.1s">Stylish office
                                        decor</p>
                                </div>
                                <a href="product-detail.html" class="btn-line btn-line-white wow fadeInUp"
                                    data-wow-delay="0.2s">
                                    <span>
                                        Discover Decor
                                    </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-pagination-mb sw-dots type-circle justify-content-center d-md-none d-flex"></div>
            </div>
        </div>
    </section> <!-- /.collection  -->
    <!-- .collections -->
    {{-- <section class="flat-spacing-2 pt-0">
            <div class="section-box-cls">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section style-white">
                                <h3 class="wow fadeInUp">Discover Our Signature Interior Collections</h3>
                                <p class="text-body-default wow fadeInUp" data-wow-delay="0.1s">Explore our
                                    carefully
                                    crafted interior design
                                    collections, each tailored to bring elegance and <br> functionality to your spaces.
                                </p>
                            </div>
                            <ul class="tab-banner">
                                <li class="nav-tab-item wow fadeInUp">
                                    <div class="nav-tab-link hover-cursor-img">
                                        <h3 class="title text-line-clamp-1">
                                            <span class="text-title">01.</span>
                                            Modern Minimalist Collection
                                        </h3>
                                        <a href="shop-default.html" class="arr-link">
                                            <span class="text-button-small text-more">View More</span>
                                            <i class="icon icon-arrow-up-right"></i>
                                        </a>
                                        <div class="hover-image">
                                            <img src="{{ asset('assets/images/section/collections-banner.jpg') }}"
                                                alt="Hover Image">
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-tab-item wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="nav-tab-link hover-cursor-img ">
                                        <h3 class="title text-line-clamp-1">
                                            <span class="text-title">02.</span>
                                            Cozy Industrial Collection
                                        </h3>
                                        <a href="shop-default.html" class="arr-link">
                                            <span class="text-button-small text-more">View More</span>
                                            <i class="icon icon-arrow-up-right"></i>
                                        </a>
                                        <div class="hover-image">
                                            <img src="{{ asset('assets/images/section/collections-banner-1.jpg') }}"
                                                alt="Hover Image">
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-tab-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="nav-tab-link hover-cursor-img">
                                        <h3 class="title text-line-clamp-1">
                                            <span class="text-title">03.</span>
                                            Scandinavian Elegance Collection
                                        </h3>
                                        <a href="shop-default.html" class="arr-link">
                                            <span class="text-button-small text-more">View More</span>
                                            <i class="icon icon-arrow-up-right"></i>
                                        </a>
                                        <div class="hover-image">
                                            <img src="{{ asset('assets/images/section/collections-banner-2.jpg') }}"
                                                alt="Hover Image">
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-tab-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="nav-tab-link hover-cursor-img">
                                        <h3 class="title text-line-clamp-1">
                                            <span class="text-title">04.</span>
                                            Storage Solutions Collection
                                        </h3>
                                        <a href="shop-default.html" class="arr-link">
                                            <span class="text-button-small text-more">View More</span>
                                            <i class="icon icon-arrow-up-right"></i>
                                        </a>
                                        <div class="hover-image">
                                            <img src="{{ asset('assets/images/section/collections-banner-3.jpg') }}"
                                                alt="Hover Image">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.collections --> --}}

    <!-- .testimonials -->
    <section class="flat-spacing-2  section-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-section text-center">
                        <h3 class="wow fadeInUp">Customer Review</h3>
                        <p class="text-body-default text_secondary wow fadeInUp" data-wow-delay="0.1s">Our
                            customers
                            adore our products, and we
                            constantly aim to delight them.</p>
                    </div>
                    <div class="swiper tf-sw-testimonial" data-preview="3" data-tablet="2" data-mobile="1"
                        data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                        data-pagination-md="1" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item hover-img style-2">
                                    <div class="content">
                                        <div class="content-top">
                                            <div class="box-author align-items-center d-flex gap-6">
                                                <div class="text-title author"><a href="#"
                                                        class="link">Sarah</a>
                                                </div>
                                                <svg class="icon" width="20" height="21"
                                                    viewBox="0 0 20 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_15758_14563)">
                                                        <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549"
                                                            stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                            stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath>
                                                            <rect width="20" height="20" fill="white"
                                                                transform="translate(0 0.684082)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <div class="text-caption-2 text_secondary">Verified purchase</div>
                                            </div>
                                            <div class="list-star-default">
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                            </div>
                                            <p class="text-secondary">"I recently purchased a sofa from this
                                                store,
                                                and it has completely transformed my living room. The quality is
                                                outstanding, and the design fits perfectly with my style. "</p>
                                        </div>
                                        <div class="box-product">
                                            <div class="product-img avt-62 round">
                                                <img src="{{ asset('assets/images/shop/testimonials-item-1.jpg') }}"
                                                    alt="avt">
                                            </div>
                                            <div class="box-price">
                                                <p class="text-title  text-line-clamp-1"> <a href="product-detail.html"
                                                        class="link">Contrasting
                                                        sheepskin...</a></p>
                                                <div class="text-button price">$60.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item hover-img style-2">
                                    <div class="content">
                                        <div class="content-top">
                                            <div class="box-author align-items-center d-flex gap-6">
                                                <div class="text-title author"><a href="#"
                                                        class="link">Michael</a>
                                                </div>
                                                <svg class="icon" width="20" height="21"
                                                    viewBox="0 0 20 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_15758_14563)">
                                                        <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549"
                                                            stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                            stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath>
                                                            <rect width="20" height="20" fill="white"
                                                                transform="translate(0 0.684082)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <div class="text-caption-2 text_secondary">Verified purchase</div>
                                            </div>
                                            <div class="list-star-default">
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                            </div>
                                            <p class="text-secondary">"I recently purchased a sofa from this
                                                store,
                                                and it has completely transformed my living room. The quality is
                                                outstanding, and the design fits perfectly with my style. "</p>
                                        </div>
                                        <div class="box-product">
                                            <div class="product-img avt-62 round">
                                                <img src="{{ asset('assets/images/shop/testimonials-item-2.jpg') }}"
                                                    alt="avt">
                                            </div>
                                            <div class="box-price">
                                                <p class="text-title  text-line-clamp-1"> <a href="product-detail.html"
                                                        class="link">Contrasting
                                                        sheepskin...</a></p>
                                                <div class="text-button price">$60.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item hover-img style-2">
                                    <div class="content">
                                        <div class="content-top">
                                            <div class="box-author align-items-center d-flex gap-6">
                                                <div class="text-title author"><a href="#"
                                                        class="link">Jennifer</a>
                                                </div>
                                                <svg class="icon" width="20" height="21"
                                                    viewBox="0 0 20 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_15758_14563)">
                                                        <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549"
                                                            stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                            stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath>
                                                            <rect width="20" height="20" fill="white"
                                                                transform="translate(0 0.684082)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <div class="text-caption-2 text_secondary">Verified purchase</div>
                                            </div>
                                            <div class="list-star-default">
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                            </div>
                                            <p class="text-secondary">"I recently purchased a sofa from this
                                                store,
                                                and it has completely transformed my living room. The quality is
                                                outstanding, and the design fits perfectly with my style. "</p>
                                        </div>
                                        <div class="box-product">
                                            <div class="product-img avt-62 round">
                                                <img src="{{ asset('assets/images/shop/testimonials-item-3.jpg') }}"
                                                    alt="avt">
                                            </div>
                                            <div class="box-price">
                                                <p class="text-title  text-line-clamp-1"> <a href="product-detail.html"
                                                        class="link">Contrasting
                                                        sheepskin...</a></p>
                                                <div class="text-button price">$60.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item hover-img style-2">
                                    <div class="content">
                                        <div class="content-top">
                                            <div class="box-author align-items-center d-flex gap-6">
                                                <div class="text-title author"><a href="#"
                                                        class="link">Sarah</a>
                                                </div>
                                                <svg class="icon" width="20" height="21"
                                                    viewBox="0 0 20 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_15758_14563)">
                                                        <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549"
                                                            stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                            stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath>
                                                            <rect width="20" height="20" fill="white"
                                                                transform="translate(0 0.684082)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <div class="text-caption-2 text_secondary">Verified purchase</div>
                                            </div>
                                            <div class="list-star-default">
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                            </div>
                                            <p class="text-secondary">"I recently purchased a sofa from this
                                                store,
                                                and it has completely transformed my living room. The quality is
                                                outstanding, and the design fits perfectly with my style. "</p>
                                        </div>
                                        <div class="box-product">
                                            <div class="product-img avt-62 round">
                                                <img src="{{ asset('assets/images/shop/testimonials-item-1.jpg') }}"
                                                    alt="avt">
                                            </div>
                                            <div class="box-price">
                                                <p class="text-title  text-line-clamp-1"> <a href="product-detail.html"
                                                        class="link">Contrasting
                                                        sheepskin...</a></p>
                                                <div class="text-button price">$60.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-testimonial sw-dots type-circle d-flex justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- .testimonials -->

    <!-- .collections -->
    <section class="flat-spacing-2">
        <div class="swiper tf-sw-cls swiper-auto">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="cls-item">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('assets/images/section/categories-1.jpg') }}"
                                src="{{ asset('assets/images/section/categories-1.jpg') }}" alt="">
                        </div>
                        <h3 class="title">Storage Solutions</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cls-item">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('assets/images/section/categories-2.jpg') }}"
                                src="{{ asset('assets/images/section/categories-2.jpg') }}" alt="">
                        </div>
                        <h3 class="title">Office Chairs</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cls-item">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('assets/images/section/categories-3.jpg') }}"
                                src="{{ asset('assets/images/section/categories-3.jpg') }}" alt="">
                        </div>
                        <h3 class="title">Accessories</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cls-item">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('assets/images/section/categories-4.jpg') }}"
                                src="{{ asset('assets/images/section/categories-4.jpg') }}" alt="">
                        </div>
                        <h3 class="title">Decor Office</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cls-item">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('assets/images/section/categories-5.jpg') }}"
                                src="{{ asset('assets/images/section/categories-5.jpg') }}" alt="">
                        </div>
                        <h3 class="title">Lighting</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cls-item">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('assets/images/section/categories-6.jpg') }}"
                                src="{{ asset('assets/images/section/categories-6.jpg') }}" alt="">
                        </div>
                        <h3 class="title">Desks wood</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.collections -->

    <!-- News Insight -->
    <section class="flat-spacing-2 pt-0 section-news-insight">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-section">
                        <h3 class="wow fadeInUp">News Insight</h3>
                        <p class="text-body-default text_secondary wow fadeInUp" data-wow-delay="0.1s">Browse
                            our
                            Top Trending: the hottest picks loved
                            by all. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="collection-position style-2 spacing-2 has-over">
                        <a href="product-detail.html" class="img-style no-opacity w-100">
                            <img class="lazyload " data-src="{{ asset('assets/images/banner/banner-10.jpg') }}"
                                src="{{ asset('assets/images/banner/banner-10.jpg') }}" alt="banner-cls">
                        </a>
                        <div class="content cls-content">
                            <div class="cls-heading">
                                <ul class="meta mb-0">
                                    <li class="text-button-small"><a href="#" class="link text-white">January 3,
                                            2025</a></li>
                                    <li class="text-button-small text-white">by<a href="#"
                                            class="link text-white">Themesflat</a></li>
                                </ul>
                                <div>
                                    <h4 class="mb_8">
                                        <a href="blog-details.html" class="link text_white">How to Choose the
                                            Perfect Office Furniture for Productivity.</a>
                                    </h4>
                                    <p class="text_white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        In sed vulputate massa.</p>
                                </div>
                            </div>
                            <a href="product-detail.html" class="link text-white text-button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="relatest-post">
                        <div class="relatest-post-item style-2 style-row hover-image">
                            <div class="image">
                                <a href="blog-details.html">
                                    <img class="lazyload" data-src="{{ asset('assets/images/banner/banner-11.jpg') }}"
                                        src="{{ asset('assets/images/banner/banner-11.jpg') }}" alt="">
                                </a>
                                <div class="article-label">
                                    <a href="#" class="text-button-small">Guides</a>
                                </div>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                    <li class="text-button-small"><a href="#" class="link">March 02,
                                            2025</a></li>
                                    <li class="text-button-small">by<a href="#" class="link">
                                            Themesflat</a></li>
                                </ul>
                                <h5 class="title mb-0">
                                    <a class="link" href="blog-details.html">The Best Office Desks for Small
                                        Spaces</a>
                                </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.
                                </p>
                                <a href="blog-details.html" class="text-button link text-decoration">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="relatest-post-item style-2 style-row hover-image">
                            <div class="image">
                                <a href="blog-details.html">
                                    <img class="lazyload" data-src="{{ asset('assets/images/banner/banner-12.jpg') }}"
                                        src="{{ asset('assets/images/banner/banner-12.jpg') }}" alt="">
                                </a>
                                <div class="article-label">
                                    <a href="#" class="text-button-small">Tech </a>
                                </div>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                    <li class="text-button-small"><a href="#" class="link">March 02,
                                            2025</a></li>
                                    <li class="text-button-small">by<a href="#" class="link">
                                            Themesflat</a></li>
                                </ul>
                                <h5 class="title mb-0">
                                    <a class="link" href="blog-details.html">Storage Solutions for an
                                        Organized
                                        Office</a>
                                </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.
                                </p>
                                <a href="blog-details.html" class="text-button link text-decoration">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.News Insight -->

    <section class="flat-spacing-2 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-section text-center">
                        <h3 class="wow fadeInUp">Shop Instagram</h3>
                        <p class="text-body-default text_secondary wow fadeInUp" data-wow-delay="0.1s">Elevate
                            your
                            wardrobe with fresh finds today!
                        </p>
                    </div>
                    <div class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3" data-mobile="2"
                        data-space-lg="10" data-space-md="10" data-space="8" data-pagination="2"
                        data-pagination-md="3" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay="0s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('assets/images/gallery/gallery-1.jpg') }}"
                                            src="{{ asset('assets/images/gallery/gallery-1.jpg') }}"
                                            alt="image-gallery">
                                    </div>
                                    <a href="product-detail.html" class="box-icon hover-tooltip"><span
                                            class="icon icon-eye"></span> <span class="tooltip">View
                                            Product</span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('assets/images/gallery/gallery-2.jpg') }}"
                                            src="{{ asset('assets/images/gallery/gallery-2.jpg') }}"
                                            alt="image-gallery">
                                    </div>
                                    <a href="product-detail.html" class="box-icon hover-tooltip"><span
                                            class="icon icon-eye"></span> <span class="tooltip">View
                                            Product</span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('assets/images/gallery/gallery-3.jpg') }}"
                                            src="{{ asset('assets/images/gallery/gallery-3.jpg') }}"
                                            alt="image-gallery">
                                    </div>
                                    <a href="product-detail.html" class="box-icon hover-tooltip"><span
                                            class="icon icon-eye"></span> <span class="tooltip">View
                                            Product</span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('assets/images/gallery/gallery-4.jpg') }}"
                                            src="{{ asset('assets/images/gallery/gallery-4.jpg') }}"
                                            alt="image-gallery">
                                    </div>
                                    <a href="product-detail.html" class="box-icon hover-tooltip"><span
                                            class="icon icon-eye"></span> <span class="tooltip">View
                                            Product</span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('assets/images/gallery/gallery-5.jpg') }}"
                                            src="{{ asset('assets/images/gallery/gallery-5.jpg') }}"
                                            alt="image-gallery">
                                    </div>
                                    <a href="product-detail.html" class="box-icon hover-tooltip"><span
                                            class="icon icon-eye"></span> <span class="tooltip">View
                                            Product</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-gallery sw-dots type-circle justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.instagram -->


    <!-- contact -->
    <section id="contact" class="flat-spacing contact-section-premium">
        <div class="container">
            <!-- Section Header -->
            <div class="contact-header text-center wow fadeInUp mb_50">
                <h2 class="contact-main-title">Get in Touch</h2>
                <p class="contact-main-subtitle text_secondary">Whether you're inquiring about our bespoke collections,
                    seeking design<br>consultation, or simply wish to say hello, our team is at your service.</p>
            </div>

            <!-- Two Column Layout -->
            <div class="contact-grid">
                <!-- Left: Showroom Info -->
                <div class="contact-left wow fadeInLeft">
                    <div class="showroom-image-wrap">
                        <img src="{{ asset('assets/images/banner/unnamed.jpg') }}" alt="Showroom Interior"
                            class="showroom-img">
                    </div>
                    <div class="showroom-details">
                        <h5 class="showroom-name">New York Showroom</h5>
                        <p class="showroom-address text_secondary">123 Mercer Street<br>New York, NY 10012<br>United
                            States</p>

                        <div class="showroom-info-block">
                            <span class="info-label">INQUIRIES</span>
                            <a href="mailto:hello@gearo.com" class="info-link text_primary">hello@gearo.com</a>
                            <a href="tel:+12125550199" class="info-link info-link-phone">+1 (212) 555-0199</a>
                        </div>

                        <div class="showroom-info-block">
                            <span class="info-label">HOURS</span>
                            <p class="text-body-default mb_4">Monday – Saturday: 10am – 6pm</p>
                            <p class="text-body-default">Sunday: By Appointment</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Contact Form -->
                <div class="contact-right wow fadeInRight">
                    <div class="contact-form-card">
                        <h4 class="form-card-title">Send a Message</h4>
                        <form id="contactform" action="./contact/contact-process.php" method="post"
                            class="contact-form-premium">
                            <!-- Row 1: First Name + Last Name -->
                            <div class="form-row-premium">
                                <div class="form-group-premium">
                                    <label class="form-label-premium" for="first-name">FIRST NAME</label>
                                    <input type="text" id="first-name" name="first_name"
                                        class="form-input-premium" placeholder="" tabindex="1"
                                        aria-required="true" required>
                                </div>
                                <div class="form-group-premium">
                                    <label class="form-label-premium" for="last-name">LAST NAME</label>
                                    <input type="text" id="last-name" name="last_name" class="form-input-premium"
                                        placeholder="" tabindex="2" aria-required="true" required>
                                </div>
                            </div>

                            <!-- Row 2: Email Address -->
                            <div class="form-group-premium">
                                <label class="form-label-premium" for="email-address">EMAIL ADDRESS</label>
                                <input type="email" id="email-address" name="email" class="form-input-premium"
                                    placeholder="" tabindex="3" aria-required="true" required>
                            </div>

                            <!-- Row 3: Subject -->
                            <div class="form-group-premium">
                                <label class="form-label-premium" for="subject">SUBJECT</label>
                                <input type="text" id="subject" name="subject" class="form-input-premium"
                                    placeholder="" tabindex="4">
                            </div>

                            <!-- Row 4: Message -->
                            <div class="form-group-premium">
                                <label class="form-label-premium" for="message-premium">MESSAGE</label>
                                <textarea id="message-premium" name="message" class="form-textarea-premium" tabindex="5"
                                    aria-required="true" required></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="form-submit-premium">
                                <button type="submit" class="tf-btn btn-onsurface send-inquiry-btn">
                                    SEND INQUIRY &nbsp;&#8594;
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact -->
@endsection
