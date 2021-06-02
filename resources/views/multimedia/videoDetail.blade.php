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
        <div class="video-gallery-in">
            <div class="container pb-5 pt-5 mt-5">
                <div class="video-gallery-title">
                    {{$bData->getTranslatedAttribute('title')}}
                </div>
                <br>
                <iframe width="100%" height="480" class="iframe-c"
                 src="{{$bData->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <!-- Events Section End -->
    </div>
    <!-- Main content End -->

@endsection