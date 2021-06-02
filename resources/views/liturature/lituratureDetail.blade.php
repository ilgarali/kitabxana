@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Blog Section Start -->
        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="blog-deatails">
                    <div class="blog-full">
                        @if ($checkPage !== 'fonoetika')
                        <div class="page-title">{{  $getCategory->getTranslatedAttribute('menu_name')}}</div>

                        <div class="inotherlang-title mt-5">
                            {{$letter->letter}}
                        </div>
                        <div class="blog-desc mt-5">
                            @php
                                $i = 1;
                            @endphp
                            
                            @foreach ($letter->eBooks($getCategory->id)->get() as $ebook)
                               
                            <div>{{$i++}}
                                <a href="{{$ebook->link}}">{{$ebook->title}}</a>
                            </div>
                                            
                            @endforeach
                        </div>
                        @else 
                        <div class="page-title">Fonetika</div>

                        <div class="inotherlang-title mt-5">
                            {{$letter->letter}}
                        </div>
                        <div class="blog-desc mt-5">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($letter->phonetics as $phonetic)
                
                            <div>{{$i++}}
                                <a href="{{$phonetic->link}}">{{$phonetic->title}}</a>
                            </div>
                                            
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->
    </div>
    <!-- Main content End -->

    @endsection