@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">
        <div class="publish-holder-c">
            <div class="container">
                <div class="page-title">
                    {{$getParent->getTranslatedAttribute('menu_name')}}
                </div>
                <div class="row my-4">


                    @foreach ($bData as $publish)
                 
                    @php
                    $url = $getParent->categoryParent->myslug->getTranslatedAttribute('slug');
                    $url .=  '/' . $getParent->categoryParent->getTranslatedAttribute('slug');
                    $url .= '/' . $getParent->getTranslatedAttribute('slug');
                    $url .= '/' . $publish->getTranslatedAttribute('slug');
                      @endphp
                   
                    <div class="col-md-6 my-2">
                        <div class="d-flex flex-column flex-sm-row">
                            <div class="img-holder"><img src="{{asset('storage/' . $publish->image)}}" alt=""></div>
                            <div class="publish-text d-flex flex-column">
                               
                                <div class="publish-title"><a href="{{url(
                                    
                                    $url
                                   )}}
                                    ">
                                    {{$publish->getTranslatedAttribute('title')}}
                                </a></div>
                                <ul class="mt-4 mt-sm-0">
                                    <li>
                                        {{$publish->getTranslatedAttribute('text')}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                
    
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Main content End -->

@endsection