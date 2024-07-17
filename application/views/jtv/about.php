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

        <?php 
            $detailgambar = $this->model_utama->view_where('sampulgambar', array('page' => 'about'));
            $detailvideo = $this->model_utama->view_where('video', array('tagvid' => 'video'));
            $detailabout = $this->model_utama->view_where('about', array('id' => '1'));

            if ($detailvideo->num_rows() > 0 && $detailgambar->num_rows() > 0 && $detailabout->num_rows() > 0) {
                $videos = $detailvideo->result_array();
                $gambars = $detailgambar->result_array();
                $about = $detailabout->row_array(); 
                $video_url = $videos[0]['youtube'];

        ?>            
        <!-- Page Header Start -->
        <section class="page-header">
            <div class="page-header-bg" 
                style="background-image: url('<?php echo base_url("asset/img_playlist/" . $gambars[0]['gbr_sampulgambar']); ?>')">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li>About</li>
                    </ul>
                    <h2>About us</h2>
                </div>
            </div>
        </section>
        <!-- Page Header End -->

        <!-- About Page Start -->
        <section class="about-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-page__left">
                            <ul class="list-unstyled about-page__images">
                                <li>
                                    <div class="about-page__img-2">
                                        <img src="asset/img_playlist/<?php echo $gambars[1]['gbr_sampulgambar']; ?>" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="about-page__badge">
                                <img data-tilt src="asset/templateku/assets/images/resources/about-page-badge.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-page__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"><?php echo $about['tagline']; ?></span> 
                                    <h2 class="section-title__title"><?php echo $about['title']; ?></h2>
                            </div>
                            <p class="about-page__right-text-1" style="text-align: justify;">
                                <?php echo $about['text']; ?>
                            </p>
                            <h4 class="about-page__right-text-2"><?php echo $about['motto']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Page End -->

        <!-- Design Studio Start -->
        <section class="design-studio services-page-design-studio">
            <div class="design-studio-bg-box">
                <div class="design-studio-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url('asset/img_playlist/<?php echo $gambars[2]['gbr_sampulgambar']; ?>');">
                </div>
            </div>
            <div class="container">
                <div class="col-lg-12">
                    <div class="design-studio__inner">
                        <h2 class="design-studio__title">Visi <span>dan</span> Misi <br> JTV </h2>
                        <div class="design-studio__video-link">
                            <a href="<?php echo $video_url; ?>" class="video-popup">
                                <div class="design-studio__video-icon">
                                    <span class="icon-play-button"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Design Studio End -->

        <!-- Testimonial Two Start -->
        <section class="testimonial-two about-page-testimonial-two">
            <div class="testimonial-two-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img src="asset/templateku/assets/images/shapes/testimonial-two-shape.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="testimonial-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="testimonial-two__img">
                                <img src="asset/img_playlist/<?php echo $gambars[3]['gbr_sampulgambar']; ?>" alt="">
                                <div class="testimonial-two__box-1"></div>
                                <div class="testimonial-two__box-2"></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    <div class="col-xl-6">
                        <div class="testimonial-two__right">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">our customer feedbacks</span> -->
                                <h2 class="section-title__title">VISI DAN MISI</h2>
                            </div>
                            <div class="testimonial-two__carousel owl-theme owl-carousel">
                                <!--Testimonial Two Single-->
                                <div class="testimonial-two__single">
                                    <p class="testimonial-two__text" style="text-align: justify;">
                                        <?php echo $about['vision']; ?> </p>
                                    <div class="testimonial-two__client-info">
                                        <div class="testimonial-two__client-img">
                                            <img src="asset/templateku/assets/images/testimonial/visi.jpg" alt="">
                                        </div>
                                        <div class="testimonial-two__client-details">
                                            <h4 class="testimonial-two__client-name">Visi</h4>
                                            <!-- <p class="testimonial-two__client-title">Customer</p> -->
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Two Single-->
                                <div class="testimonial-two__single">
                                    <p class="testimonial-two__text" style="text-align: justify;"><?php echo $about['mission']; ?></p>
                                    <div class="testimonial-two__client-info">
                                        <div class="testimonial-two__client-img">
                                            <img src="asset/templateku/assets/images/testimonial/visi.jpg" alt="">
                                        </div>
                                        <div class="testimonial-two__client-details">
                                            <h4 class="testimonial-two__client-name">MISI</h4>
                                            <!-- <p class="testimonial-two__client-title">Customer</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Two End-->

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
    <script src="asset/templateku/assets/vendors/jquery-tilt/tilt.jquery.min.js"></script>
    <!-- template js -->
    <script src="asset/templateku/assets/js/mibooz.js"></script>
</body>

</html>