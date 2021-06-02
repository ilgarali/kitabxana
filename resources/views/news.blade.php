@extends('layouts.master2')
@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <!-- Events Section Start -->
        <!-- <div class="container">
        </div> -->
        <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70 mt-5">
            <div class="page-title">Xəbərlər</div>
            <div class="container mt-5">
                <div class="row">
     

                    @foreach ($news as $n)
                        
                    @php
                        
                $slug = $menu->where('widget','news');
                
                $url = '';
                foreach ($slug as $slug) {
                  
                    $url =  $slug->getTranslatedAttribute('slug');
                }
               
            @endphp
                    <div class="col-lg-4 mb-30 col-md-6">
                        <a class="" href="{{url($url . '/' . $n->getTranslatedAttribute('slug'))}}">
                            <div class="">
                                <img src="{{asset('storage/' . $n->image)}}" alt="">
                            </div>
                            <div class="gallery-title">
                               {{$n->getTranslatedAttribute('title')}}
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="pagenav-link orange-color text-center">
                    <ul>
                        {{ $news->links() }}
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