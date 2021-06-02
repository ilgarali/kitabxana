@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content my-4">
        <div class="bio-inner-holder">
            <div class="container">
                <div class="bio-title my-4">
                    {{$newspaper->getTranslatedAttribute('title')}}
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <ul>
                            <li>   {{$newspaper->getTranslatedAttribute('description')}}</li>
                        </ul>
                        <a href="{{url($newspaper->link)}}" class="mt-4 readon banner-style uppercase h-100">Yüklə</a>
                    </div>
                    <div class="">
                        <img src="{{asset('storage/' . $newspaper->image_inner)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content End -->

    @endsection