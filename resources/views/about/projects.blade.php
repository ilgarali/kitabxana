@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Events Section Start -->
        <div class="rs-event modify1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="page-title">{{setting('site.project_' . $lang)}}</div>
            <div class="container mt-5">
                <div class="row">
                    
                  
                    @foreach ($projects as $project)
                    @php
                 
            
                 
                    $url =  $getParent->myslug->getTranslatedAttribute('slug');
                   
                    $url .= '/' .  $getParent->getTranslatedAttribute('slug');
                    
                     $url .= '/' . $project->getTranslatedAttribute('slug');
                  
                       @endphp
             
                    <div class="col-lg-4 mb-30 col-md-6">
                        <div class="event-item">
                            <div class="event-short">
                                <div class="featured-img">
                                    <a 
            href="{{url($url)}}">
                                        <img src="{{asset('storage/') . '/' .$project->image}}" alt="Image"></a>
                                </div>
                                <div class="content-part">
                                   
                                    <h4 class="title"><a href="{{url($url)}}">
                                        {{$project->getTranslatedAttribute('title')}}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="container mt-4">
                <div class="pagenav-link orange-color text-center">
                    <ul>
                        <li>1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="flaticon-next"></i></a></li>
                    </ul>
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