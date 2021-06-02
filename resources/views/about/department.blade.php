@extends('layouts.master2')
@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <!-- <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Team One</h1>
                <ul>
                    <li>
                        <a class="active" href="index.html">Home</a>
                    </li>
                    <li>Team One</li>
                </ul>
            </div>
        </div> -->
        <!-- Breadcrumbs End -->

        <!-- Team Section Start -->
        <div id="rs-team" class="rs-team style1 orange-color pt-94 pb-100 md-pt-64 md-pb-70 white-bg mt-5">
            <div class="container">
                <div class="row">
                    @foreach ($departmentWorkers as $departmentWorker)
                        
                  
                    <div class="col-lg-3 col-sm-6 mb-30">
                        <div class="team-item">
                            <img src="{{asset('storage' . '/' . $departmentWorker->img)}}" alt="">
                            <div class="content-part">
                                <h4 class="name"><a href="team-single.html">{{$departmentWorker->getTranslatedAttribute('fullname')}}</a></h4>
                                <span class="designation">{{$departmentWorker->getTranslatedAttribute('post')}}</span>
                                <span class="designation">{{$departmentWorker->getTranslatedAttribute('info')}}</span>
                                <ul class="social-links">
                                    <li><a href="{{$departmentWorker->fb}}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{$departmentWorker->tw}}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{$departmentWorker->in}}"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @php
                
                    $lang = Session::get('locale');
                 
                @endphp
                @foreach ($departments as $department)
                               
                @php
                 
            
        
                $url =  $getParent->categoryParent->myslug->getTranslatedAttribute('slug');
                $url .= '/' .  $getParent->categoryParent->getTranslatedAttribute('slug');
                $url .= '/' .  $getParent->getTranslatedAttribute('slug');
                
                 $url .= '/' . $department->getTranslatedAttribute('slug');
              
                   @endphp
               
                <blockquote>
                    <h3 class="text-center">{{$department->getTranslatedAttribute('title')}}</h3>
                    <p>{{$department->getTranslatedAttribute('info')}}</p>
                    <div class="text-center">
                
                        <a href="{{url($url)}}" 
                            class="orange-btn readon main-home">{{setting('site.more_' . $lang)}}</a>
                    </div>
                </blockquote>
                @endforeach

                {{ $departments->links() }}
    
        </div>
        <!-- Team Section End -->


        <!-- Newsletter section start -->
        <!-- <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                            <div class="content-part">
                                <div class="sec-title">
                                    <div class="title-icon md-mb-15">
                                        <img src="assets/images/newsletter.png" alt="images">
                                    </div>
                                    <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <form class="newsletter-form">
                                <input type="email" name="email" placeholder="Enter Your Email" required="">
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Newsletter section end -->
    </div>
    <!-- Main content End -->

    @endsection