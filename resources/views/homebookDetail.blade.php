@extends('layouts.master2')
@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <div class="book-holder">
            <div class="container">
                <div class="date">{{$book->getTranslatedAttribute('title')}}</div>
                <div class="d-flex mt-4">
                    <div class="book-inner-left">
                        <img src="{{asset('storage/' . $book->image)}}" alt="">
                    </div>
                    <div class="book-inner-right">

                        <p>{{$book->getTranslatedAttribute('text')}}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Main content End -->

@endsection