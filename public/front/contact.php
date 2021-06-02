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
    <!-- Main Menu css -->
    <link rel="stylesheet" href="assets/css/rsmenu-main.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
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
    <?php include "includes/header-in.php" ?>
    <!--Full width header End-->

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="assets/images/breadcrumbs/5.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color padding">
                <h1 class="page-title">Əlaqə</h1>
                <ul>
                    <li>
                        <a class="active" href="index.php">Ana Səhifə</a>
                    </li>
                    <li>Əlaqə</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Contact Section Start -->
        <div class="contact-page-section orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row align-items-center pb-50">
                    <div class="col-lg-4 md-mb-50">
                        <div class="contact-address-section style2">
                            <div class="contact-info mb-15 md-mb-30">
                                <div class="icon-part">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="content-part">
                                    <h5 class="info-subtitle">Address</h5>
                                    <h4 class="info-title">Bakı şəhəri, S.Vurğun küçəsi 88 </h4>
                                </div>
                            </div>
                            <div class="contact-info mb-15 md-mb-30">
                                <div class="icon-part">
                                    <i class="fa fa-envelope-open-o"></i>
                                </div>
                                <div class="content-part">
                                    <h5 class="info-subtitle">E-Poçt ünvanımız</h5>
                                    <h4 class="info-title"><a href="mailto:info@rstheme.com">info@clb.az</a></h4>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="icon-part">
                                    <i class="fa fa-headphones"></i>
                                </div>
                                <div class="content-part">
                                    <h5 class="info-subtitle">Əlaqə telefonu</h5>
                                    <h4 class="info-title"><a href="tel+0885898745"> (+99412) 597-08-79</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!-- Map Section Start -->
                        <div class="contact-map">
                            <!-- <iframe src="https://maps.google.com/maps?q=Fort%20Miley&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.042666863909!2d49.83548821480415!3d40.38574696544827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9e25ee2511%3A0x56b5cd145f338c6b!2sSamad%20Vurgun%2C%20Baku%2C%20Azerbaijan!5e0!3m2!1sen!2s!4v1612951562699!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <!-- Map Section End -->
                    </div>
                </div>

                <div class="row align-items-end contact-bg1">
                    <div class="col-lg-4 md-pt-50 lg-pr-0">
                        <div class="contact-image">
                            <img src="assets/images/contact-1.jpg" alt="Contact Images">
                        </div>
                    </div>
                    <div class="col-lg-8 lg-pl-0">
                        <div class="rs-quick-contact new-style">
                            <div class="inner-part mb-35">
                                <h2 class="title mb-15">Bizimlə Əlaqə</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eius to mod
                                    tempor incidi dunt ut dolore.</p>
                            </div>
                            <div id="form-messages"></div>
                            <form id="contact-form" method="post" action="mailer.php">
                                <div class="row">
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="name" placeholder="Ad" required="">
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="phone" placeholder="Telefon" required="">
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="subject" placeholder="Mövzu" required="">
                                    </div>

                                    <div class="col-lg-12 mb-40">
                                        <textarea class="from-control" id="message" name="message" placeholder="Mesaj" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="readon orange-btn" type="submit" value="Göndər">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Newsletter section start -->
        <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                            <div class="content-part">
                                <div class="sec-title">
                                    <div class="title-icon md-mb-15">
                                        <img src="assets/images/newsletter.png" alt="images">
                                    </div>
                                    <h2 class="title mb-0 white-color">Kitabxanamıza abunə olun</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <form class="newsletter-form">
                                <input type="email" name="email" placeholder="E-poçtunuzu daxil edin" required="">
                                <button type="submit">Abunə ol</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter section end -->
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
    <!-- Menu js -->
    <script src="assets/js/rsmenu-main.js"></script>
    <!-- op nav js -->
    <script src="assets/js/jquery.nav.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- magnific popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- contact form js -->
    <script src="assets/js/contact.form.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>