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
                    <div class="blog-full">
                        <div class="page-title">Elektron kitablar</div>

                        <div class="blog-desc mt-5">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($forSlug->category as $category)
                            @if ($category->books->count() > 0)
                                
                            @foreach ($category->books as $book)
                            <div>{{$i++}}
                                <a href="{{$book->link}}">{{$book->getTranslatedAttribute('title')}}</a>
                            </div>
                            @endforeach
                            
                            @endif

                            @endforeach


                            @foreach ($forSlug->category as $category)
                               
                                @foreach ($category->category as $cat)
                                    
                                @if ($cat->books->count() > 0)
                                @foreach ($cat->books as $book)
                            <div>{{$i++}}
                                <a href="{{$book->link}}">{{$book->getTranslatedAttribute('title')}}</a>
                            </div>
                            @endforeach
                                 @endif
                            @endforeach
                          

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

