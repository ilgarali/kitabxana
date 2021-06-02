@extends('layouts.master2')
@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <!-- Contact Section Start -->
        <div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70 mt-5">
            <div class="container">
                <!-- <div class="row rs-contact-box mb-90 md-mb-50">
                    <div class="col-lg-4 col-md-12-4 lg-pl-0 sm-mb-30 md-mb-30">
                        <div class="address-item">
                            <div class="icon-part">
                                <img src="assets/images/contact/icon/1.png" alt="">
                            </div>
                            <div class="address-text">
                                <span class="label">Address</span>
                                <span class="des">228-5 Main Street, Georgia, USA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30 md-mb-30">
                        <div class="address-item">
                            <div class="icon-part">
                                <img src="assets/images/contact/icon/2.png" alt="">
                            </div>
                            <div class="address-text">
                                <span class="label">Email Address</span>
                                <span class="des"><a href="mailto:info@rstheme.com">info@rstheme.com</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30">
                        <div class="address-item">
                            <div class="icon-part">
                                <img src="assets/images/contact/icon/3.png" alt="">
                            </div>
                            <div class="address-text">
                                <span class="label">Phone Number</span>
                                <span class="des"><a href="tel+0885898745">(+088)589-8745</a></span>
                            </div>
                        </div>
                    </div>
                </div> -->

                @php
                    $lang = Session::get('locale');
                @endphp
                @foreach ($branches as $branch)

                <div class="row rs-contact-box align-items-center">
                    <div class="col-lg-6 col-12 md-mb-30">
                        <!-- Map Section Start -->
                        <div class="contact-map3">
                            <iframe src="{{$branch->map_link}}"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 pl-60 md-pl-15">
                        <div class="address-item">
                            <div class="label-branch">{{$branch->getTranslatedAttribute('title')}}</div>
                            <div class="address-text mt-5">
                                <span class="label">{{setting('site.boss_' . $lang)}} </span>
                                {{$branch->boss}}
                            </div>
                            <div class="address-text mt-3">
                                <span class="label">{{setting('site.email_' . $lang)}} </span>
                                {{$branch->email}}
                            </div>
                            <div class="address-text mt-3">
                                <span class="label">{{setting('site.address_' . $lang)}} </span>
                                {{$branch->getTranslatedAttribute('address')}}
                            </div>
                            <div class="address-text mt-3">
                                <span class="label">{{setting('site.telephone_' . $lang)}} </span>
                                <span class="des"><a href="tel+0885898745">{{$branch->getTranslatedAttribute('telephone')}}</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Contact Section End -->
        <!-- Newsletter section start -->
        @include('includes.subscribe')
        <!-- Newsletter section end -->
    </div>
    <!-- Main content End -->

@endsection