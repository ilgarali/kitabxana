<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Educavo - Education HTML Template</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav-orange.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/linea-fonts.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="assets/css/rsmenu-main.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="defult-home">

    <!--Preloader area start here-->
    <div id="loader" class="loader orange-color">
        <div class="loader-container">
            <div class='loader-icon'>
                <img src="assets/images/pre-logo1.png" alt="">
            </div>
        </div>
    </div>
    <!--Preloader area End here-->

    <!--Full width header Start-->
    <?php include 'includes/header-in.php' ?>

    <!--Full width header End-->
    <!-- Main content Start -->
    <div class="main-content">
        <div class="container mt-60 pb-40">
            <div class="pt-59">
                <div class="page-title">
                    Audio Nağıllar, Hekayələr, Şeirlər
                </div>
                <div class="grid-audio mt-5 row">
                    <div class="story-name col-6 d-flex justify-content-center">
                        <div class="btn-player">
                            <div>
                                Yeni il (Zeynal Xəlil)...
                            </div>
                            <audio controls class="melody">
                                <source src="assets/images/audio.mp3" type="audio/mpeg">
                            </audio>
                            <i class="fa fa-play"></i>
                            <a href="assets/images/audio.mp3" class="banner-style m-59 readon uppercase text-center download-audio">Yüklə</a>
                        </div>
                    </div>
                    <div class="story-name col-6 d-flex justify-content-center">
                        <div class="btn-player">
                            <div>
                                Üçrəngli bayrağımız (Əjdər Ağayev)...
                            </div>
                            <audio controls class="melody">
                                <source src="assets/images/audio-2.mp3" type="audio/mpeg">
                            </audio>
                            <i class="fa fa-play"></i>
                            <a href="assets/images/audio-2.mp3" class="banner-style m-59 readon uppercase text-center download-audio">Yüklə</a>
                        </div>
                    </div>
                    <div class="story-name col-6 d-flex justify-content-center">
                        <div class="btn-player">
                            <div>
                                Tıq-tıq xanım (A.Şaiqin mənzum hekayəsi əsasında)...
                            </div>
                            <audio controls class="melody">
                                <source src="assets/images/audio-3.mp3" type="audio/mpeg">
                            </audio>
                            <i class="fa fa-play"></i>
                            <a href="assets/images/audio-3.mp3" class="banner-style m-59 readon uppercase text-center download-audio">Yüklə</a>
                        </div>
                    </div>
                    <div class="story-name col-6 d-flex justify-content-center">
                        <div class="btn-player">
                            <div>
                                Təbiəti sevək! (Yəhya Kərimov)...
                            </div>
                            <audio controls class="melody">
                                <source src="assets/images/audio-4.mp3" type="audio/mpeg">
                            </audio>
                            <i class="fa fa-play"></i>
                            <a href="assets/images/audio-4.mp3" class="banner-style m-59 readon uppercase text-center download-audio">Yüklə</a>
                        </div>
                    </div>
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
                    <li>1</li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="flaticon-next"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Main content End -->


    <!-- Footer Start -->
    <?php include "includes/footer.php" ?>

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

    <!-- modernizr js -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Menu js -->
    <script src="assets/js/rsmenu-main.js"></script>
    <!-- op nav js -->
    <script src="assets/js/jquery.nav.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- contact form js -->
    <script src="assets/js/contact.form.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>