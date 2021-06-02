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
                <h1 class="page-title">Faq</h1>
                <ul>
                    <li>
                        <a class="active" href="index.html">Home</a>
                    </li>
                    <li>Faq Us</li>
                </ul>
            </div>
        </div> -->
        <!-- Breadcrumbs End -->

        <div class="rs-faq-part orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="content-part mb-50 md-mb-30">
                    <div class="title mb-40 md-mb-15">
                        <h3 class="text-part text-center">{{$getParent->getTranslatedAttribute('menu_name')}}</h3>
                    </div>
                    <div id="accordion" class="accordion">
                        @foreach ($bData as $b)
                            
                       
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    {{$b->getTranslatedAttribute('grade')}}
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                @foreach ($b->lessons as $lesson)
                                <div class="card-body">
                                    <a href="{{$lesson->link}}">{{$lesson->getTranslatedAttribute('title')}}</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content End -->

@endsection