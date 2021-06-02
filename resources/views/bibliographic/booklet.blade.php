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
                <h1 class="page-title">Blog Single</h1>
                <ul>
                    <li>
                        <a class="active" href="index.html">Home</a>
                    </li>
                    <li>Blog Single</li>
                </ul>
            </div>
        </div> -->
        <!-- Breadcrumbs End -->
        <div class="publish-holder-c">
            <div class="container">
                <div class="page-title">{{$getParent->getTranslatedAttribute('menu_name')}}</div>
                <div class="row my-5">
                    @foreach ($bData as $b)
                    @php
                    $url = $getParent->categoryParent->myslug->getTranslatedAttribute('slug');
                    $url .=  '/' . $getParent->categoryParent->getTranslatedAttribute('slug');
                    $url .= '/' . $getParent->getTranslatedAttribute('slug');
                    $url .= '/' . $b->getTranslatedAttribute('slug');
                      @endphp
                  
                    <div class="col-md-6 my-2">
                        <div class="d-flex">
                            <div class="img-holder"><img src="{{asset('storage/' . $b->image)}}" alt=""></div>
                            <div class="publish-text d-flex flex-column">
                                <div class="publish-title">
                                    <a href="{{url($url)}}">
                                        {{$b->getTranslatedAttribute('title')}}
    
                                    </a>
                                </div>
                                <ul>
                                    <li>
                                        {{$b->getTranslatedAttribute('text')}}
                                    </li>
                                    <span class="mt-5 d-block"><a href="{{$b->link}}" class="readon orange-btn text-center w-50">Yüklə</a></span>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="pagenav-link orange-color text-center mt-5">
                    <ul>
                        <li>1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="flaticon-next"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content End -->

@endsection