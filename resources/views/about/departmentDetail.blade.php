@extends('layouts.master2')
@section('content')


    <!-- Main content Start -->
    <div class="main-content">

        <!-- Blog Section Start -->
        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="blog-deatails">
                    <!-- <div class="bs-img">
                        <a href="#"><img src="assets/images/blog/inner/1.jpg" alt=""></a>
                    </div> -->
                    <div class="blog-full">
                        <div class="page-title">{{$department->getTranslatedAttribute('title')}}</div>
                        <div class="blog-desc mt-5">
                            {!! $department->getTranslatedAttribute('text')!!}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->
    </div>
    <!-- Main content End -->

@endsection