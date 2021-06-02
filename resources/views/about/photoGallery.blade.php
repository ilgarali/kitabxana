

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
        <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70 mt-5">
            <div class="page-title">{{setting('site.photo_gallery_' . $lang)}}</div>
            <div class="container mt-5">
                <div class="row">
                   
                    @foreach ($photoGaleries as $photoGalery)
                    @php
                    $images = json_decode($photoGalery->images);   
                   
                    @endphp    
                       @php
                 
            
                 
                       $url =  $getParent->myslug->getTranslatedAttribute('slug');
                      
                       $url .= '/' .  $getParent->getTranslatedAttribute('slug');
                       
                        $url .= '/' . $photoGalery->getTranslatedAttribute('slug');
                     
                          @endphp
                 
                    <div class="col-lg-4 mb-30 col-md-6">
                        <a class="" href="{{url($url)}}">
                            <div class="">
                                <img src="{{asset('storage/' . $images[0])}}" alt="">
                            </div>
                            <div class="gallery-title">
                                {{$photoGalery->getTranslatedAttribute('title')}}
                            </div>
                        </a>
                    </div>
                    @endforeach
    
                </div>
                <div class="pagenav-link orange-color text-center">
                    <ul>
                        {{-- <li>1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="flaticon-next"></i></a></li> --}}
                        {{ $photoGaleries->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <!-- Events Section End -->
    </div>
    <!-- Main content End -->

    @endsection