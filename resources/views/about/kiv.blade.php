@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
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
                        <div class="page-title">KİV</div>
                        <div class="date-kiv mt-5">
                            <span class="">{{$year->year}}</span>
                            <br>
                            <br>
                            
                            @foreach ($year->months as $month)
                               
                            <br>
                            <br>
                            <span>{{$month->getTranslatedAttribute('month')}}</span>
                            <div class="blog-desc mt-5">
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($month->kivs->where('year_id',$year->id) as $kiv)
                                    
                              
                                <div>{{$i++}}
                                    <a href="{{$kiv->link}}">{{$kiv->title}}</a>
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                        <div class="mt-5">
                            @foreach ($kivYears as $year)
                              
                                @php
                 
                 
                 
                                $url =  $getParent->myslug->getTranslatedAttribute('slug');
                                 $url .= '/' .  $getParent->getTranslatedAttribute('slug');
                                 $url .= '/' . $year->year;
                              
                                   @endphp
                            
                                
                            <a href="{{url($url)}}" class="years_kiv">{{$year->year}}</a>
                            
                           
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Blog Section End -->
    </div>
    <!-- Main content End -->

    @endsection