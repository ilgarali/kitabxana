@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content my-4">
        <div class="bio-inner-holder">
            <div class="container">
                <div class="bio-title">
                    {{$publish->getTranslatedAttribute('title')}}
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <ul>
                            <li>     {{$publish->getTranslatedAttribute('text')}}</li>
                        </ul>
                        <a href="{{$publish->link}}" class="mt-4 readon banner-style uppercase h-100">Yüklə</a>
                    </div>
                    <div class="">
                        <img src="{{asset('storage/' . $publish->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content End -->

@endsection