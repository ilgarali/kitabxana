@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">
        <div class="publish-holder-c">
            <div class="page-title">{{setting('site.newspaper_' . $lang)}}</div>
            <div class="container mt-5">
                <div class="d-flex justify-content-between">
                    @foreach ($newspapers as $newspaper)
                    @php

                    $url =  $getParent->myslug->getTranslatedAttribute('slug');
                     $url .= '/' .  $getParent->getTranslatedAttribute('slug');
                     $url .= '/' . $newspaper->getTranslatedAttribute('slug');
                  
                       @endphp
                    
                    <div class="d-flex">
                        <div class="img-holder"><img src="{{asset('storage/' . $newspaper->image)}}" alt=""></div>
                        <div class="publish-text d-flex flex-column">
                            <div class="publish-title">
                                <a href="{{url($url)}}">
                                    {{$newspaper->getTranslatedAttribute('title')}}</a></div>
                            <ul>
                                <li>
                                  {{$newspaper->getTranslatedAttribute('description')}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach

                </div>
       
            </div>
            <div class="container mt-4">
                <div class="pagenav-link orange-color text-center">
                    <ul>
                        {{ $newspapers->links() }}
                        {{-- <li>1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="flaticon-next"></i></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content End -->

    @endsection