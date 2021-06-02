

@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <!-- <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/breadcrumbs/4.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Gallery</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Educavo</a>
                        </li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div> -->
        <!-- Breadcrumbs End -->

        <!-- Events Section Start -->
        <!-- <div class="container">
        </div> -->
        <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70 mt-5">
            <div class="page-title">{{setting('site.video_gallery_' . $lang)}}</div>
            <div class="container mt-5">
                <div class="row">
                
                    @foreach ($videoGalleries as $videoGallery)
                    @php
                 
            
                 
                    $url =  $getParent->myslug->getTranslatedAttribute('slug');
                   
                    $url .= '/' .  $getParent->getTranslatedAttribute('slug');
                    
                     $url .= '/' . $videoGallery->getTranslatedAttribute('slug');
                  
                       @endphp
                   
                    <div class="col-lg-4 mb-30 col-md-6">
                        <a class="" href="{{url($url)}}">
                            <div class="">
                                <img src="{{asset('storage/' .$videoGallery->image)}}" alt="">
                            </div>
                            <div class="gallery-title">
                                {{$videoGallery->getTranslatedAttribute('title')}}
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="pagenav-link orange-color text-center">
                    <ul>
                        {{ $videoGalleries->links() }}
                        {{-- <li>1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="flaticon-next"></i></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <!-- Events Section End -->
    </div>
    <!-- Main content End -->

    @endsection