@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">


        <!-- Events Section Start -->
        <!-- <div class="container">
        </div> -->
        <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70 ">
            <div class="container">
                <div class="bio-title">{{$berpa->getTranslatedAttribute('title')}}</div>
                <div class="row mt-5">
                    <div class="col-lg-12 mb-30 col-md-6">
                        <div class="d-flex">
                            <div class="">
                                <img src="{{asset('storage/' . $berpa->image)}}" alt="">
                            </div>
                            <div class="d-flex flex-column ml-4">
                                <div class="" style="width:800px">
                                    <p>
                                        {!! $berpa->getTranslatedAttribute('text') !!}
                                    </p>
                                </div>
                                <div>
                                    <a href="{{$berpa->link}}" class="mt-4 readon banner-style uppercase">Yüklə</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 mb-30 col-md-6">
                        <div class="">
                            <img src="assets/images/berpa-2.jpg" alt="">
                        </div>
                        <div class="gallery-title">
                            Boz pişik və qara pişik (Başqırd xalq nağılı)
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30 col-md-6">
                        <a class="" href="">
                            <div class="">
                                <img src="assets/images/berpa-3.jpg" alt="">
                            </div>
                            <div class="gallery-title">
                                Eyvaz Borçalı –Şah və qoca
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-30 col-md-6">
                        <a class="" href="">
                            <div class="">
                                <img src="assets/images/berpa.jpg" alt="">
                            </div>
                            <div class="gallery-title">
                                Gənclərlə görüş
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-30 col-md-6">
                        <a cla">
                            <div class="">
                                <img src="assets/images/gallery/gallery-3.jpg" alt="">
                            </div>
                            <div class="gallery-title">
                                Gənclərlə görüş
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-30 col-md-6">
                        <a cla">
                            <div class="">
                                <img src="assets/images/gallery/gallery-3.jpg" alt="">
                            </div>
                            <div class="gallery-title">
                                Gənclərlə görüş
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-30 col-md-6">
                        <a class="" href="">
                            <div class="">
                                <img src="assets/images/gallery/gallery-3.jpg" alt="">
                            </div>
                            <div class="gallery-title">
                                Gənclərlə görüş
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-30 col-md-6">
                        <a class="" href="">
                            <div class="">
                                <img src="assets/images/gallery/gallery-3.jpg" alt="">
                            </div>
                            <div class="gallery-title">
                                Gənclərlə görüş
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-30 col-md-6">
                        <a class="" href="">
                            <div class="">
                                <img src="assets/images/gallery/gallery-3.jpg" alt="">
                            </div>
                            <div class="gallery-title">
                                Gənclərlə görüş
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Events Section End -->
    </div>
    <!-- Main content End -->

    @endsection