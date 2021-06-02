@extends('layouts.master')
@section('content')
    <div class="main-content">
    
        <!-- Slider Section Start -->
        <!-- <div class="rs-slider main-home">
            <div class="rs-carousel owl-carousel owl-home" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false">
                <div class="slider-content slide1">
                    <div class="container">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="content-part">

                        </div>
                    </div>
                </div>
            </div>

        </div> -->

        <!-- <div class="owl-carousel owl-home">
            <div class="item"> -->
        <div class="slider-content slide1" style="background-image: url('{{$homedata->main_img}}')">

        </div>
        <!-- </div>
        </div> -->

        <!-- Services Section Start -->
        <div class="rs-services rs-features style2 pt-100 md-pt-80">
            <div class="container">
                <div class="row">
                    @foreach ($features as $feature)
                    @php

                   

                     $url = $feature->menu->myslug ? $feature->menu->myslug->getTranslatedAttribute('slug') : '';
                     $url .= '/' . $feature->menu->getTranslatedAttribute('slug');
                  
                       @endphp
                    <div class="col-lg-4 col-md-12 md-mb-30">
                        <div class="features-wrap">
                            <span class="icon-part"><img src="{{asset('storage/' . $feature->icon)}}" width="50px" alt=""></span>
                            <h4 class="title"><a href="{{url($url)}}">{{$feature->menu->getTranslatedAttribute('menu_name')}}</a></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- About Section Start -->
    <div class="rs-about style9 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 md-mb-40">
                    <div class="img-part js-tilt" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                        <img src="{{asset('front')}}/assets/images/about-side.png" alt="images">
                    </div>
                </div>
                <div class="col-lg-6 pl-100 md-pl-15 col-md-12">
                    <div class="content">
                        <div class="sub-title mb-20">
                            {{$homedata->getTranslatedAttribute('about_text')}}
                        </div>
                        <h2 class="sl-title mb-40 md-mb-20">{{$homedata->getTranslatedAttribute('about_title')}}
                        </h2>
                        <p class="desc mb-50">
                            {{$homedata->getTranslatedAttribute('about_long_text')}}
                        </p>
                    </div>
                    <div class="btn-part">
                        @php
                        
                            $slug = $mymenus->where('widget','history');
                            
                            $url = '';
                            foreach ($slug as $slug) {
                                $url = $slug->myslug->getTranslatedAttribute('slug');
                                $url .= '/' .  $slug->getTranslatedAttribute('slug');
                            }
                         
                        @endphp
                        <a class="readon orange-btn" href="{{url($url)}}">{{$homedata->getTranslatedAttribute('about_button')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section Start -->
    <div id="rs-categories" class="rs-categories main-home pt-90 pb-100 md-pt-60 md-pb-40">
        <div class="container">
            <div class="row y-middle mb-50 md-mb-30">
                <div class="col-md-6 sm-mb-30">
                    <div class="sec-title">
                        <h2 class="title mb-0">{{$homedata->getTranslatedAttribute('new_title')}}</h2>
                    </div>
                </div>
                @php
                        
                            $slug = $menu->where('widget','home_book');
                            
                            $url = '';
                            foreach ($slug as $slug) {
                              
                                $url =  $slug->getTranslatedAttribute('slug');
                            }
                         
                        @endphp
                <div class="col-md-6">
                    <div class="btn-part text-right sm-text-left">
                        <a href="{{url($url)}}" class="view-all" 
                        style="color: #101010">{{$homedata->getTranslatedAttribute('new_button')}}</a>
                    </div>
                </div>
            </div>
            <div class="row mb-35">

                @foreach ($books as $book)
                    
               
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="categories-items">
                        <div class="cate-images">
                            <a href="{{url($book->menu->getTranslatedAttribute('slug') . '/' . $book->getTranslatedAttribute('slug'))}}"><img src="{{asset('front')}}/assets/images/new-book-home.jpg" alt=""></a>
                        </div>
                        <div class="contents">
                            <div class="img-part">
                                <img src="{{asset('front')}}/assets/images/categories/main-home/icon/1.png" alt="">
                            </div>
                            <div class="content-wrap">
                                <h2 class="title"><a href="{{url($book->menu->getTranslatedAttribute('slug') . '/' . $book->getTranslatedAttribute('slug'))}}">
                                    {{$book->getTranslatedAttribute('title')}}</a></h2>
                                <span class="course-qnty">{{$book->getTranslatedAttribute('author')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>
    <!-- About Section Start -->
    <div id="rs-about-video" class="rs-about-video pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="rs-about-video-title">
                @php
                        
                $slug = $mymenus->where('widget','videoGallery');
                
                $url = '';
                foreach ($slug as $slug) {
                    $url = $slug->myslug->getTranslatedAttribute('slug');
                    $url .= '/' .  $slug->getTranslatedAttribute('slug');
                }
             
            @endphp
                <h2 class="title text-white text-center"><a href="{{url($url)}}" class="text-white">
                    {{$homedata->getTranslatedAttribute('video_title')}}
                </a></h2>
            </div>
        </div>
        <div class="container">
            <div class="video-img-part media-icon orange-color2">
                <img src="{{asset('storage/') . '/' . $homedata->video_img}}" alt="Video Bg Image">
                <a class="popup-videos" href="{{$homedata->video_link}}">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- About Section End -->
    <!-- Xəbərlər -->
    <div id="rs-about" class="rs-about style9 pt-100 pb-200 md-pt-70 md-pb-70 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="h-100 d-flex flex-column justify-content-between">
                        <h2 class=""> {{$homedata->getTranslatedAttribute('news')}}</h2>

                    </div>
                </div>
                @php
                        
                $slug = $menu->where('widget','news');
                
                $url = '';
                foreach ($slug as $slug) {
                  
                    $url =  $slug->getTranslatedAttribute('slug');
                }
               
            @endphp
                <div class="col-lg-8 mt-4 mt-lg-0">
                    <div class="content-part">
                        <div class="about-img md-mb-50">
                            <div class="media-icon med-ico orange-color">
                                <img src="{{asset('storage/' . $news->image)}}" alt="">
                            </div>
                        </div>
                        <div class="sec-title3 pl-65 md-pl-15 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <h2 class="title">{{$news->getTranslatedAttribute('title')}}</h2>
                            <div class="desc mb-30 pr-50 md-pr-15">{{Str::words($news->getTranslatedAttribute('text'),50)}}
                            </div>

                            <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                <a class="readon orange-btn" href="{{url($url . '/' . $news->getTranslatedAttribute('slug'))}}"> {{$homedata->getTranslatedAttribute('about_button')}}</a>
                                <a href="{{url($url)}}" class="view-all ml-50" style="color: #101010"> {{$homedata->getTranslatedAttribute('new_button')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Xəbərlər End -->
    <!-- Testimonial Section Start -->
    <div class="rs-testimonial style8 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container-fluid kelamlar" style="background-image: url({{asset('storage/') . '/' . $homedata->quotes_bg}})">
            <div class="sec-title3 text-center">
                <h2 class="title mb-0 text-white"> {{$homedata->getTranslatedAttribute('quotes_title')}}</h2>
            </div>
            <div class="rs-carousel-c rs-quotes owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-md-device-dots="true">
                @foreach ($quotes as $quote)
                    
                
                <div class="testi-item">
                    <div class="author-desc">
                        <div class="desc">
                            <i class="fas fa-quote-right"></i>
                            <div class="owl-quote">
                                {{$quote->getTranslatedAttribute('text')}}
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">{{$quote->author}}</a>
                                <span class="designation">{{$quote->getTranslatedAttribute('post')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Popular Courses Section Start -->
    <div class="rs-event modify1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="event-item">
                        <div class="event-short">
                            @php
                        
                            $slug = $mymenus->where('widget','e_data');
                            
                            $url = '';
                            foreach ($slug as $slug) {
                                $url = $slug->myslug->getTranslatedAttribute('slug');
                                $url .= '/' .  $slug->getTranslatedAttribute('slug');
                            }
                        
                            @endphp
                            <div class="featured-img">
                                <a href="{{url($url)}}" class="dates text-white"> {{$homedata->getTranslatedAttribute('page_button')}}</a>
                            </div>
                            <div class="content-part">
                                <div class="time-sec">
                                    <div class="address"><i class="fas fa-swatchbook"></i></div>
                                </div>
                               
                                <h4 class="title"><a href="{{url($url)}}"> 
                                    {{$homedata->getTranslatedAttribute('base_title')}}</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-69 mt-md-0">
                    <div class="event-item">
                        <div class="event-short">
                            <div class="featured-img">
                                @php
                        
                                $slug = $mymenus->where('widget','virtual');
                                
                                $url = '';
                                foreach ($slug as $slug) {
                                    $url = $slug->myslug->getTranslatedAttribute('slug');
                                    $url .= '/' .  $slug->getTranslatedAttribute('slug');
                                }
                             
                                @endphp
                                <a href="{{url($url)}}" class="dates text-white"> {{$homedata->getTranslatedAttribute('page_button')}}</a>
                            </div>
                            <div class="content-part">
                                <div class="time-sec">
                                    <div class="address"><i class="fas fa-bookmark"></i></div>
                                </div>
                                <h4 class="title"><a href="#"> {{$homedata->getTranslatedAttribute('virtual_title')}}</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Courses Section End -->
    <!-- photo gallery -->
    <div class="rs-about style9 pt-10 pb-60 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-part d-flex content-part-2">
                        <div class="d-flex justify-content-between align-items-center flex-lg-row flex-column">
                            <div class="sec-title3 md-pl-15 wow fadeInUp media-icon-2 d-flex align-items-center w-100"
                             data-wow-delay="300ms" data-wow-duration="2000ms">
                                <!-- <div class="sub-title">Qalereya</div> -->
                                <div>
                                    @php
                        
                                    $slug = $mymenus->where('widget','photoGallery');
                                    
                                    $url = '';
                                    foreach ($slug as $slug) {
                                        $url = $slug->myslug->getTranslatedAttribute('slug');
                                        $url .= '/' .  $slug->getTranslatedAttribute('slug');
                                    }
                                 
                                @endphp
                                    <h2 class="title">{{$photoGalery->getTranslatedAttribute('title')}}</h2>
                                    <div class="desc mb-30 pr-50 md-pr-15">
                                    </div>
                                    <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                        <a class="readon orange-btn" href="{{url($url . '/' . $photoGalery->getTranslatedAttribute('slug'))}}">
                                             {{$homedata->getTranslatedAttribute('news_button_1')}}</a>
                                    </div>
                                </div>
                                <!-- <div class="desc mb-30 pr-50 md-pr-15">Lorem ipsum dolor sit amet, consectetur
                                        adipisic
                                        ing elit, sed eius to mod tempors incididunt ut labore etdo ldore magna this
                                        aliqua
                                        enims ad minim.Lorem ipsum dolor sit amet, consecte tur adipisic ing elit, sed
                                        eius
                                        to mod
                                        tem incididunt demo data.</div> -->

                            </div>
                            @php
                                $images = json_decode($photoGalery->images);
                                
                            @endphp
                            <div class="media-icon orange-color mt-4 mt-lg-0">
                                <img src="{{asset('storage/' . $images[0])}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="offset-lg-4">

                    </div> -->
            </div>
        </div>
    </div>
    <!-- photo gallery -->

    <!-- Göy qurşağı -->
    <div class="rs-cta section-wrap gray-bg">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="img-part">
                    <img src="{{asset('front')}}/assets/images/cta/home1.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                <div class="content">
                    <div class="sec-title mb-40 ">
                        <h2 class="title">{{$newspapers->getTranslatedAttribute('title')}}</h2>
                        <div class="d-flex download-holder">
                            <div class="desc">
                                {!! $newspapers->getTranslatedAttribute('contents') !!}
                            </div>
                            <a class="readon banner-style uppercase h-100 m-59" href={{$newspapers->link}}">Yüklə</a>
                        </div>
                    </div>
                    @php
                        
                    $slug = $mymenus->where('widget','newspaper');
                    
                    $url = '';
                    foreach ($slug as $slug) {
                        $url = $slug->myslug->getTranslatedAttribute('slug');
                        $url .= '/' .  $slug->getTranslatedAttribute('slug');
                    }
                 
                @endphp
                    <div class="btn-part">
                        <a class="readon orange-btn" href="{{$url}}">Hamısına bax</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </br>
    </br>
    <!-- Partner Start -->
    <div class="rs-partner pb-100 md-pb-70">
        <div class="container">
            <div class="rs-carousel partner-owl nav-disable owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="true" data-md-device-dots="false">
                <div class="partner-item">
                    <a href="#"><img src="{{asset('front')}}/assets/images/hey-o.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{asset('front')}}/assets/images/president.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{asset('front')}}/assets/images/wow.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{asset('front')}}/assets/images/med.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{asset('front')}}/assets/images/hey.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{asset('front')}}/assets/images/usaq.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{asset('front')}}/assets/images/unicef.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{asset('front')}}/assets/images/amk.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{asset('front')}}/assets/images/ibay.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner End -->

    <!-- Newsletter section start -->
    @include('includes.subscribe')
    <!-- Newsletter section end -->

    </div>
    <!-- Main content End -->



    @endsection