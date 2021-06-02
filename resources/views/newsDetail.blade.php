@extends('layouts.master2')
@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <!-- Events Section Start -->
        <!-- <div class="container">
        </div> -->
        <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70 mt-5">
            <div class="container mt-5">
                <div class="bio-title">{{$news->getTranslatedAttribute('title')}}</div>
                <div class="row mt-5">
                    <div class="col-lg-12 mb-30 col-md-6">
                    
                        
                        <p>
                            {{$news->getTranslatedAttribute('text')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Events Section End -->
    </div>
    <!-- Main content End -->

@endsection