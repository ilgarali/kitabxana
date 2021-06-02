@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Events Section Start -->
        <!-- <div class="container">
        </div> -->
        <div class="rs-gallery pt-100 pb-100 md-pb-70">
            <div class="container mt-5">
                <div class="" style="font-size: 30px">{{$bData->getTranslatedAttribute('title')}}</div>
                <div class="row mt-5">
                    <div class="col-lg-12 mb-30 col-md-6">
                        <div class="">
                            {!! $bData->getTranslatedAttribute('text') !!}
                        </div>
                        
                    </div>
                    <div class="owl-carousel owl-virtual owl-loaded owl-drag">

                        @php
                        $images = json_decode($bData->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="item">
                            <div class="partner-item">
                                <a href="#"><img src="{{asset('storage/' . $image->download_link)}}" alt=""></a>
                            </div>
                        </div>
                     @endforeach   
                  


                    </div>
                </div>
            </div>
        </div>
        <!-- Events Section End -->
    </div>
    <!-- Main content End -->

@endsection