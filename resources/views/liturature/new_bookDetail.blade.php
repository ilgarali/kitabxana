@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">
        <div class="book-holder">
            <div class="container">
                
                @foreach ($months as $month)
                    @if ($month->books($newBookCategory->id)->get()->count())
                <div class="date">{{$month->getTranslatedAttribute('month')}}</div>    
                
             
                    
              
                    @foreach ($month->books($newBookCategory->id)->get() as $newBook)
                        

                <div class="d-flex my-4">
                    <div class="book-inner-left">
                        <img src="{{asset('storage/' . $newBook->image)}}" alt="">
                    </div>
                    <div class="book-inner-right">
                        {!! $newBook->getTranslatedAttribute('text') !!}
                    </div>
                </div>
                    @endforeach
                    @endif
                @endforeach
            </div>

        </div>
    </div>
    <!-- Main content End -->

    @endsection