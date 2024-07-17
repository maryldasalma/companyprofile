<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JTV Company Profile</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="asset/templateku/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="asset/templateku/assets/images/resources/jtvbadge.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="asset/templateku/assets/images/resources/jtvbadge.png" />
    <link rel="manifest" href="asset/templateku/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Mibooz HTML Template For Business" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Federo&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="asset/templateku/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/mibooz-icons/style.css">
    <link rel="stylesheet" href="asset/templateku/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/the-sayinistic-font/stylesheet.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="asset/templateku/assets/vendors/jquery-ui/jquery-ui.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="asset/templateku/assets/css/mibooz.css" />
    <link rel="stylesheet" href="asset/templateku/assets/css/mibooz-responsive.css" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="asset/templateku/assets/images/resources/jtvbadge.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper">
                    <div class="main-menu-wrapper__logo">
                        <a href="index.html"><img src="asset/templateku/assets/images/resources/jtvlogo.png" alt=""></a>
                    </div>
                    <div class="main-menu-wrapper__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <?php include "main_menu.php"?>
                    </div>
                    <!-- <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__call">
                            <div class="main-menu-wrapper__call-icon">
                                <img src="asset/templateku/assets/images/icon/phone-icon.png" alt="">
                            </div>
                        </div>
                        <div class="main-menu-wrapper__search-box">
                            <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a>
                        </div>
                    </div> -->
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <?php 
            $detailgambar = $this->model_utama->view_where('sampulgambar', array('page' => 'team'))->row_array();
            $gambar = $detailgambar['gbr_sampulgambar'];
        ?>
            <section class="page-header">
                <div class="page-header-bg" 
                    style="background-image: url('<?php echo base_url("asset/img_playlist/$gambar"); ?>')">
                </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo base_url(); ?>">Home</a>
                        <li>team</li>
                    </ul>
                    <h2>Our team</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Site Footer Start-->
        <?php include "footer.php"?>
        <!--Site Footer End-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="asset/templateku/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="asset/templateku/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/templateku/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="asset/templateku/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="asset/templateku/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="asset/templateku/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="asset/templateku/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="asset/templateku/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="asset/templateku/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="asset/templateku/assets/vendors/odometer/odometer.min.js"></script>
    <script src="asset/templateku/assets/vendors/swiper/swiper.min.js"></script>
    <script src="asset/templateku/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="asset/templateku/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="asset/templateku/assets/vendors/wow/wow.js"></script>
    <script src="asset/templateku/assets/vendors/isotope/isotope.js"></script>
    <script src="asset/templateku/assets/vendors/countdown/countdown.min.js"></script>
    <script src="asset/templateku/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="asset/templateku/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="asset/templateku/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="asset/templateku/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <!-- template js -->
    <script src="asset/templateku/assets/js/mibooz.js"></script>
</body>

</html>