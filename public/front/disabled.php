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
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
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
        <!-- Events Section Start -->
        <div class="rs-event orange-color pt-100 pb-100 md-pt-70 md-pb-70 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="event-item">
                            <div class="event-short">
                                <div class="content-part">
                                    <h4 class="title">
                                        <a href="tovsiye.php" class="d-flex justify-content-between">
                                            Görmə məhdudiyyətli
                                            <i class="fas fa-eye-slash"></i>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="event-item">
                            <div class="event-short">
                                <div class="content-part">
                                    <h4 class="title"><a href="tovsiye.php" class="d-flex justify-content-between">
                                            Eşitmə və nitq məhdudiyyətli
                                            <i class="fas fa-deaf"></i>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Events Section End -->

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