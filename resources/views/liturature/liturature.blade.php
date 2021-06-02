@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <!-- <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Blog Single</h1>
                <ul>
                    <li>
                        <a class="active" href="index.html">Home</a>
                    </li>
                    <li>Blog Single</li>
                </ul>
            </div>
        </div> -->
        <!-- Breadcrumbs End -->

        <!-- Blog Section Start -->
        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="blog-deatails">
                    <!-- <div class="bs-img">
                        <a href="#"><img src="assets/images/blog/inner/1.jpg" alt=""></a>
                    </div> -->
                    <div class="blog-full">
                       
                
                    
                       <div class="page-title">{{  $forSlug->getTranslatedAttribute('menu_name')}}</div>
                  
                        <div class="blog-desc mt-5">
                            <div class="find-link-by-letter">
                             
                                @foreach ($letters as $letter)
                                @php
                                
                                    $url = $forSlug->categoryParent->myslug ? 
                                    $forSlug->categoryParent->myslug->getTranslatedAttribute('slug') . '/' : 
                                    $forSlug->categoryParent->categoryParent->myslug->getTranslatedAttribute('slug') .'/'
                                    ;
                                    $url .= $forSlug->categoryParent->categoryParent  ? 
                                           $forSlug->categoryParent->categoryParent->getTranslatedAttribute('slug') . '/' :
                                            '';
                                    $url .=   $forSlug->categoryParent->getTranslatedAttribute('slug') . '/' . 
                                     $forSlug->getTranslatedAttribute('slug') . '/' . 
                                     $letter->letter;
                                  
                                @endphp
                                <a 
            
                                    href="
                               
                                    {{url($url)}}"
                               
                                   >
                                   {{$letter->letter}}
                                </a>
                                @endforeach

                            </div>
                        </div>
         
                    </div>
                </div>

            </div>
        </div>
        <!-- Blog Section End -->
    </div>
    <!-- Main content End -->

    @endsection