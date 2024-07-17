<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Company Profile JTV</title>
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
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {"el": "#main-slider-pagination", "type": "bullets", "clickable": true }, "navigation": {"nextEl": "#main-slider__swiper-button-next", "prevEl": "#main-slider__swiper-button-prev" }, "autoplay": {"delay": 5000 }}'>
                <div class="swiper-wrapper">
                    <?php 
                    $detailhistory = $this->model_utama->view_where('history', array('id' => '1'));
                    $detailbadge = $this->model_utama->view_where('sampulgambar',array('page' => 'badge' ));

                    $history = $detailhistory->row_array(); 
                    $badge = $detailbadge->row_array(); 

                    foreach ($detailgambar->result_array() as $r) {   
                        $gambar = $r['gbr_sampulgambar'];
                    ?>
                    <div class="swiper-slide">
                        <div class="page-header-bg" 
                            style="background-image: url('<?php echo base_url("asset/img_playlist/$gambar"); ?>')">
                        </div>
                        <!-- /.image-layer -->
                        <div class="main-slider__social">
                            <a href="<?php echo $history['facebook']; ?>" target="_blank">facebook</a>
                            <a href="<?php echo $history['twitter']; ?>" target="_blank">twitter</a> 
                            <a href="<?php echo $history['instagram']; ?>" target="_blank">instagram</a>
                        </div>                        
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider__content">
                                        <div class="main-slider__title-box-1">
                                            <h2>Jawapos <br> Media <br> Televisi</h2>
                                            <div class="main-slider__title-box-2">
                                                <h2>JawaPos <br> Media <br> Televisi</h2>
                                            </div>
                                        </div>
                                        <!-- <a href="about.html" class="thm-btn">Discover More</a> -->
                                        <div class="main-slider-badge">
                                            <img data-tilt src="asset/img_playlist/<?php echo $badge['gbr_sampulgambar']; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- If we need navigation buttons -->
                <div class="slider-bottom-box clearfix">
                    <div class="swiper-pagination" id="main-slider-pagination"></div>
                    <div class="main-slider__nav">
                        <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                            <span class="icon-arrow-left"></span>
                        </div>
                        <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                            <span class="icon-arrow-right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Main Slider End-->

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
    <script src="asset/templateku/assets/vendors/jquery-tilt/tilt.jquery.min.js"></script>
    <!-- template js -->
    <script src="asset/templateku/assets/js/mibooz.js"></script>
</body>
</html>
