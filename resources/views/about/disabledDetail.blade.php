@extends('layouts.master2')
@section('content')


    <!-- Main content Start -->
    <div class="main-content">

        <!-- Blog Section Start -->
        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="blog-deatails">
                    <div class="blog-full">
                        <div class="page-title">{{$disability->getTranslatedAttribute('title')}}</div>
                        <div class="blog-desc mt-5">
                            <p>
                               {!! $disability->getTranslatedAttribute('text') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->
    </div>
    <!-- Main content End -->

@endsection