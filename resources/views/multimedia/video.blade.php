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
        <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70 mt-5">
            <div class="container mt-5">
                <div class="page-title">{{$getParent->getTranslatedAttribute('menu_name')}}</div>
                <div class="row mt-4">
                    @foreach ($bData as $b)
                    @php
                 
                   $url = $getParent->categoryParent->myslug ? 
                   $getParent->categoryParent->myslug->getTranslatedAttribute('slug') : '';
                   $url .= $getParent->myslug ? 
                   $getParent->myslug->getTranslatedAttribute('slug') : '';
                   $url .= '/' .  $getParent->categoryParent->getTranslatedAttribute('slug');
                    $url .= '/' .  $getParent->getTranslatedAttribute('slug');
                    $url .= '/' . $b->getTranslatedAttribute('slug');
                 
                      @endphp
                    
                   
                    <div class="col-lg-4 mb-30 col-md-6">
                        <a class="" href="{{url($url)}}">
                            <div class="">
                                <img src="{{asset('storage/' . $b->image)}}" alt="">
                            </div>
                            <div class="gallery-title">
                                <a href="{{url($url)}}">{{$b->getTranslatedAttribute('title')}}</a>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="pagenav-link orange-color text-center">
                    <ul>
                        {{ $bData->links() }}
                        {{-- <li>1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="flaticon-next"></i></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <!-- Events Section End -->
    </div>
    <!-- Main content End -->

@endsection