<!DOCTYPE html>
<html lang="zxx">

    @include('includes.head')
   
<body class="defult-home">

    <!--Preloader area start here-->
    <div id="loader" class="loader orange-color">
        <div class="loader-container">
            <div class='loader-icon'>
                <img src="{{asset('front')}}/assets/images/pre-logo1.png" alt="">
            </div>
        </div>
    </div>
    <!--Preloader area End here-->

        <!--Full width header Start-->
        <div class="full-width-header header-style1 home8-style4">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
    
    
                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-2">
                                <div class="logo-cat-wrap">
                                    <div class="logo-part">
                                        <a href="{{url('/')}}" style="display: block;width:225px">
                                            <!-- <img src="assets/images/dark-logo.png" alt=""> -->
                                            <img class="normal-logo" src="{{asset('storage/') . '/' . $homedata->logo}}" width="100%" alt="">
                                            <!-- <img class="sticky-logo" src="assets/images/logo/logo-w-01.png" width="300px" alt=""> -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 text-right">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <li class="user-icon last-icon d-block d-lg-none">
                                                <!-- <a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a> -->
                                                <a id="az" class="text-dark lang">Az</a>
                                                |
                                                <a id="en" class="text-dark lang">En</a>
                                                |
                                                <a id="ru" class="text-dark lang">Ru</a>
                                            </li>
                                        </div>

                                        <script type="text/javascript">
                                            $('.lang').click(function(){
                                                let lang = $(this).attr('id');
                                                let url = window.location.href;
                                                console.log(url);
                                                $.ajax({
                                                  url: "/lang",
                                                  method: "GET",
                                                  data: {
                                                    lang:lang,
                                                    url:url,
                                                  },
                                                  success: function(data) {
                                                    //console.log(data);
                                                    window.location.replace(data);
                                                  }
                                                });
                                            });
                                    </script>

                                        <nav class="rs-menu">
                                            <ul class="nav-menu">
                                                       
                                                @include('includes.menu')

    
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
    
                                </div>
                            </div>
                            <div class="col-lg-2 text-right col-992">
                                <div class="expand-btn-inner d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a class="hidden-xs rs-search" 
                                            data-target=".search-modal" data-toggle="modal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                        <li class="icon-bar cart-inner no-border mini-cart-active">
                                            <a class="cart-icon">
                                                <span class="lang-lock"><i class="fa fa-globe"></i></span>
                                            </a>
                                            <div class="woocommerce-mini-cart text-left">
                                                <div class="cart-bottom-part">
                                                    <ul class="cart-icon-product-list">
                                                        <li class="display-flex">
                                                            <div class="icon-cart">
                                                                <a id="az" class="text-white lang">AZ</a>
                                                            </div>
                                                        </li>
                                                        <li class="display-flex">
                                                            <div class="icon-cart">
                                                                <a id="en" class="text-white lang">EN</a>
                                                            </div>
                                                        </li>
                                                        <li class="display-flex">
                                                            <div class="icon-cart">
                                                                <a id="ru" class="text-white lang">RU</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <script type="text/javascript">
                                                    $('.lang').click(function(){
                                                        let lang = $(this).attr('id');
                                                        let url = window.location.href;
                                                        console.log(url);
                                                        $.ajax({
                                                          url: "/lang",
                                                          method: "GET",
                                                          data: {
                                                            lang:lang,
                                                            url:url,
                                                          },
                                                          success: function(data) {
                                                            //console.log(data);
                                                            window.location.replace(data);
                                                          }
                                                        });
                                                    });
                                            </script>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->
    
                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <span id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </span>
                    </div>
                    <div class="canvas-logo">
                        <a href="{{url('/')}}"><img src="{{asset('front')}}/assets/images/dark-logo.png" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo by the
                            charms of pleasure of the moment data com so blinded by desire.</p>
                    </div>
                    <div class="offcanvas-gallery">
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('front')}}/assets/images/gallery/1.jpg">
                                <img src="{{asset('front')}}/assets/images/gallery/1.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('front')}}/assets/images/gallery/2.jpg">
                                <img src="{{asset('front')}}/assets/images/gallery/2.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('front')}}/assets/images/gallery/3.jpg">
                                <img src="{{asset('front')}}/assets/images/gallery/3.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('front')}}/assets/images/gallery/4.jpg">
                                <img src="{{asset('front')}}/assets/images/gallery/4.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('front')}}/assets/images/gallery/5.jpg">
                                <img src="{{asset('front')}}/assets/images/gallery/5.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('front')}}/assets/images/gallery/6.jpg">
                                <img src="{{asset('front')}}/assets/images/gallery/6.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="map-img">
                        <img src="assets/images/map.jpg" alt="">
                    </div>
                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->