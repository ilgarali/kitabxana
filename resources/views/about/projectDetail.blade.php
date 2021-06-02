@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">
        <div class="book-holder">
            <div class="container">
                <div class="date">{{$project->getTranslatedAttribute('title')}}</div>
                <div class="d-flex mt-4">
                    <div class="book-inner-left">
                        <img src="{{asset('storage/'. $project->image)}}" alt="">
                    </div>
                    <div class="book-inner-right">
                        {!! $project->getTranslatedAttribute('text') !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Main content End -->

    @endsection