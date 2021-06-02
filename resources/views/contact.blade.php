@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset('front/')}}/assets/images/breadcrumbs/5.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color padding">
                <h1 class="page-title">Əlaqə</h1>
                <ul>
                    <li>
                        <a class="active" href="index.php">Ana Səhifə</a>
                    </li>
                    <li>Əlaqə</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Contact Section Start -->
        <div class="contact-page-section orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
            
          
                <div class="row align-items-center pb-50">
                    <div class="col-lg-4 md-mb-50">
                        <div class="contact-address-section style2">
                            <div class="contact-info mb-15 md-mb-30">
                                <div class="icon-part">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="content-part">
                                    <h5 class="info-subtitle">{{setting('site.address_' . $lang)}}</h5>
                                    <h4 class="info-title">{{$contact->getTranslatedAttribute('address')}} </h4>
                                </div>
                            </div>
                            <div class="contact-info mb-15 md-mb-30">
                                <div class="icon-part">
                                    <i class="fa fa-envelope-open-o"></i>
                                </div>
                                <div class="content-part">
                                    <h5 class="info-subtitle">{{setting('site.email_' . $lang)}}</h5>
                                    <h4 class="info-title"><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></h4>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="icon-part">
                                    <i class="fa fa-headphones"></i>
                                </div>
                                <div class="content-part">
                                    <h5 class="info-subtitle">{{setting('site.telephone_' . $lang)}}</h5>
                                    <h4 class="info-title"><a href="tel+0885898745"> {{$contact->number}}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!-- Map Section Start -->
                        <div class="contact-map">
                            <!-- <iframe src="https://maps.google.com/maps?q=Fort%20Miley&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.042666863909!2d49.83548821480415!3d40.38574696544827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9e25ee2511%3A0x56b5cd145f338c6b!2sSamad%20Vurgun%2C%20Baku%2C%20Azerbaijan!5e0!3m2!1sen!2s!4v1612951562699!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <!-- Map Section End -->
                    </div>
                </div>

                <div class="row align-items-end contact-bg1">
                    <div class="col-lg-4 md-pt-50 lg-pr-0">
                        <div class="contact-image">
                            <img src="{{asset('storage/' . $contact->image)}}" alt="Contact Images">
                        </div>
                    </div>
                    <div class="col-lg-8 lg-pl-0">
                        <div class="rs-quick-contact new-style">
                            <div class="inner-part mb-35">
                                <h2 class="title mb-15">{{setting('site.contact_' . $lang)}}</h2>
                                <p>{{setting('site.contact_text_' . $lang)}}</p>
                            </div>
                            <div id="form-messages" >
                              
                            </div>
                            <form id="contact-form" method="post" action="{{route('contact')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="name" placeholder="{{setting('site.name_' . $lang)}}" required="">
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="email" placeholder="{{setting('site.email_' . $lang)}}" required="">
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="number" placeholder="{{setting('site.telephone_' . $lang)}}" required="">
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="subject" placeholder="{{setting('site.subject_' . $lang)}}" required="">
                                    </div>

                                    <div class="col-lg-12 mb-40">
                                        <textarea class="from-control" id="message" name="message" placeholder="{{setting('site.message_' . $lang)}}" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="readon orange-btn" type="submit" value="{{setting('site.send_' . $lang)}}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Newsletter section start -->
        @include('includes.subscribe')
        <!-- Newsletter section end -->
    </div>
    <!-- Main content End -->

@endsection