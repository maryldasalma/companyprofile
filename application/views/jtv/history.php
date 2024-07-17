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
                            <div class="main-menu-wrapper__call-number">
                                <p>Call Anytime</p>
                                <h5><a href="tel:926668880000">+ 92 666 888 0000</a></h5>
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
            $detailgambar = $this->model_utama->view_where('sampulgambar', array('page' => 'history'))->row_array();
            $detailhistory = $this->model_utama->view_where('history', array('id' => '1'));

            $history = $detailhistory->row_array(); 
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
                        <li>History</li>
                    </ul>
                    <h2>History</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__img">
                            <!-- <img src="asset/templateku/assets/images/resources/details.jpg" alt=""> -->
                        </div>
                    </div>
                </div>
                <div class="project-details__content">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="project-details__content-left">
                                <h3 class="project-details__content-title">History Of JTV</h3>
                                <p class="project-details__content-text-1" style="text-align: justify"><?php echo $history['history']; ?></p>
                                <p></p>
                                <h3 class="project-details__content-title">Logo JTV</h3>
                                <ul class="list-unstyled project-details__points">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text" style="text-align: justify">
                                            <p><?php echo $history['logo']; ?></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="project-details__content-right">
                                <div class="project-details__details-box">
                                    <div class="project-details__details-info">
                                        <div class="project-details__details-info-single">
                                            <h5 class="project-details__details-info-client">Pemilik:</h5>
                                            <p class="project-details__details-info-name"><?php echo $history['pemilik']; ?></p>
                                        </div>
                                        <div class="project-details__details-info-single">
                                            <h5 class="project-details__details-info-client">Jenis:</h5>
                                            <p class="project-details__details-info-name"><?php echo $history['jenis']; ?></p>
                                        </div>
                                        <div class="project-details__details-info-single">
                                            <h5 class="project-details__details-info-client">Tanggal Didirikan:</h5>
                                            <p class="project-details__details-info-name"><?php echo $history['tanggal']; ?></p>
                                        </div>
                                    </div>
                                    <div class="project-details__details-social-list">
                                        <a href=<?php echo $history['twitter']; ?> class="fab fa-twitter" target="_blank"></a>
                                        <a href=<?php echo $history['facebook']; ?> class="fab fa-facebook-square" target="_blank"></a>
                                        <a href=<?php echo $history['instagram']; ?> class="fab fa-instagram" target="_blank"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__pagination-box">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Project Details End-->

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