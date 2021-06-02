@extends('layouts.master2')
@section('content')

@php
    $lang = Session::get('locale');
@endphp
    <!-- Main content Start -->
    <div class="main-content">
        <div class="container mt-60 pb-40">
            <div class="pt-59">
                <div class="page-title">
                    {{$getParent->getTranslatedAttribute('menu_name')}}
                </div>
                <div class="grid-audio mt-5 row">
                    @foreach ($bData as $b)
                        @php
                            $url = json_decode($b->file);
                        @endphp
      
                    <div class="story-name col-6 d-flex justify-content-center">
                        <div class="btn-player">
                            <div>
                                {{$b->getTranslatedAttribute('title')}}
                            </div>
                            <audio controls class="melody">
                                <source src="{{asset('storage/' . $url[0]->download_link)}}" type="audio/mpeg">
                            </audio>
                            <i class="fa fa-play"></i>
                            <a href="{{asset('storage/' . $url[0]->download_link)}}" class="banner-style m-59 readon uppercase text-center download-audio">Yüklə</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <script>
                    var btn_player = document.getElementsByClassName('btn-player');
                    var icon = document.getElementsByClassName('fa-play')[0];
                    var melody = document.getElementsByClassName('melody')[0];
                    for (i = 0; i < btn_player.length; i++) {
                        btn_player[i].addEventListener('click', function() {
                            if (this.children[1].paused) {
                                this.children[2].style.color = "gray"
                                this.children[1].play()
                            } else {
                                this.children[2].style.color = "black"
                                this.children[1].pause()
                            }
                        })
                    }
                </script>
            </div>
            <div class="pagenav-link orange-color text-center">
                <ul>
                    {{ $bData->links() }}
                    {{-- <li>1</li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="flaticon-next"></i></a></li> --}}
                </ul>
            </div>
        </div>
    </div>
    <!-- Main content End -->

@endsection