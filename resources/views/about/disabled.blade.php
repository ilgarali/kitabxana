@extends('layouts.master2')
@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <!-- Events Section Start -->
        <div class="rs-event orange-color pt-100 pb-100 md-pt-70 md-pb-70 mt-5">
            <div class="container">
                <div class="row">
                 

                        
                    @foreach ($disabilities as $disability)
                    @php

                    $url =  $getParent->myslug->getTranslatedAttribute('slug');
                     $url .= '/' .  $getParent->getTranslatedAttribute('slug');
                     $url .= '/' . $disability->getTranslatedAttribute('slug');
                  
                       @endphp
                  
                    <div class="col-lg-6 col-md-6">
                        <div class="event-item">
                            <div class="event-short">
                                <div class="content-part">
                                    <h4 class="title">
                                       
                                        <a href="{{url($url)}}"
                                             class="d-flex justify-content-between">{{$disability->getTranslatedAttribute('title')}}
                                            <i class="{{$disability->icon_class}}"></i>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Events Section End -->

    </div>
    <!-- Main content End -->

@endsection