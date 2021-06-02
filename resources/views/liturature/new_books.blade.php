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
                <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Events 2</h1>
                <ul>
                    <li>
                        <a class="active" href="index.html">Educavo</a>
                    </li>
                    <li>Events 2</li>
                </ul>
            </div>
        </div> -->
        <!-- Breadcrumbs End -->

        <!-- Events Section Start -->
        <div class="rs-event modify1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    @foreach ($newBookCategory as $newBook)
                        
           
                    <div class="col-lg-4 mb-30 col-md-6">
                        <div class="event-item">
                            <div class="event-short">
                                <div class="featured-img">
                                    <a href="{{url(
                                        $newBook->myMenu->myslug->getTranslatedAttribute('slug') . '/' . 
                                        $newBook->myMenu->getTranslatedAttribute('slug') . '/' . $newBook->getTranslatedAttribute('slug'))}}">
                                        <img src="{{asset('storage/' . $newBook->image)}}" alt="Image"></a>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="{{url(
                                        $newBook->myMenu->myslug->getTranslatedAttribute('slug') . '/' . 
                                        $newBook->myMenu->getTranslatedAttribute('slug') . '/' . $newBook->getTranslatedAttribute('slug'))}}">
                                        {{$newBook->getTranslatedAttribute('title')}}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Events Section End -->



        <!-- Newsletter section start -->
        @include('includes.subscribe')
        <!-- Newsletter section end -->

    </div>
    <!-- Main content End -->

    @endsection