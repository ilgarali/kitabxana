  @php
      $lang = Session::get('locale');
  @endphp
  <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    @foreach ($menu->where('widget','!==','index')->where('widget','!==','contact')->where('widget','!==','multimedia')->where('advantage','!==',2) as $mymenu )
                        
                   
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                        <h4 class="widget-title">{{$mymenu->getTranslatedAttribute('menu_name')}}</h4>
                   
                        <ul class="site-map">
                            @foreach ($mymenus->where('slug_id',$mymenu->id)  as $firstchild)
                            <li><a href="{{url($mymenu->getTranslatedAttribute('slug'),$firstchild->getTranslatedAttribute('slug'))}}">
                                {{$firstchild->getTranslatedAttribute('menu_name')}}</a></li>
                              
                            @if ($firstchild->widget === 'newBook')
                                 @foreach ($firstchild->category as $secondChild)
                                 <li><a href="{{url($mymenu->getTranslatedAttribute('slug') . '/' .
                                 $firstchild->getTranslatedAttribute('slug') . '/' . 
                                 $secondChild->getTranslatedAttribute('slug')
                                 )}}">
                                    {{$secondChild->getTranslatedAttribute('menu_name')}}</a></li>
                                 @endforeach
                             @endif   

                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                        <h4 class="widget-title">{{setting('site.address_' . $lang)}}</h4>
                        <ul class="address-widget">
                            <li>
                                <i class="flaticon-location"></i>
                                <div class="desc">{{$contact->getTranslatedAttribute('address')}}</div>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="desc">
                                    <a href="tel: {{$contact->number}}"> {{$contact->number}}</a> ,
                                    <a href="tel: {{$contact->number_2}}"> {{$contact->number_2}}</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="desc">
                                    <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-4 md-mb-20">
                        <div class="footer-logo md-text-center">
                            <a href="{{url('/')}}"><img src="{{asset('storage/') . '/' . $homedata->footer_logo}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 md-mb-20">
                        <div class="copyright text-center md-text-left">
                            <p>&copy; 2021 All Rights Reserved. Developed By <a href="https://abasoft.az/en">Abasoft
                                </a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-right md-text-left">
                        <ul class="footer-social">
                            <li><a href="{{$homedata->twitter}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$homedata->youtube}}"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="{{$homedata->facebook}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$homedata->instagram}}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->


        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->
    
        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->
        <!-- <script>
            console.log(document.getElementsByClassName('lang-lock')[0])
            document.getElementsByClassName('lang-lock')[0].addEventListener('click', function() {
                alert('dkjasdn')
                // document.getElementsByClassName('web-lang')[0].classList.add('active')
            })
        </script> -->
        <!-- modernizr js -->
        <script src="{{asset('front/')}}/assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="{{asset('front/')}}/assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{asset('front/')}}/assets/js/bootstrap.min.js"></script>
        <!-- Menu js -->
        <script src="{{asset('front/')}}/assets/js/rsmenu-main.js"></script>
        <!-- op nav js -->
        <script src="{{asset('front/')}}/assets/js/jquery.nav.js"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('front/')}}/assets/js/owl.carousel.min.js"></script>
        <!-- Slick js -->
        <script src="{{asset('front/')}}/assets/js/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{asset('front/')}}/assets/js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{asset('front/')}}/assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="{{asset('front/')}}/assets/js/wow.min.js"></script>
        <!-- Skill bar js -->
        <script src="{{asset('front/')}}/assets/js/skill.bars.jquery.js"></script>
        <script src="{{asset('front/')}}/assets/js/jquery.counterup.min.js"></script>
        <!-- counter top js -->
        <script src="{{asset('front/')}}/assets/js/waypoints.min.js"></script>
        <!-- video js -->
        <script src="{{asset('front/')}}/assets/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- magnific popup js -->
        <script src="{{asset('front/')}}/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- plugins js -->
        <script src="{{asset('front/')}}/assets/js/plugins.js"></script>
        <!-- contact form js -->
        <script src="{{asset('front/')}}/assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="{{asset('front/')}}/assets/js/main.js"></script>
    </body>
    
    </html>