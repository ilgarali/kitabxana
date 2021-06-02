@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">
        <div class="container" style="margin-top: 150px; padding-bottom: 100px">
            <div class="page-title">
               {{setting('site.archive_' . $lang)}}
            </div>
            <div class="d-flex justify-content-center mt-5">
               @foreach ($archives as $archive)
                   
            
                <div class="archive mx-2">
                    <a href="{{$archive->link}}"><img src="{{asset('storage/' .  $archive->image)}}" width="100%" alt=""></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Main content End -->

    @endsection