 <?php 
	 $detailhistory = $this->model_utama->view_where('history', array('id' => '1'));
     $detailabout = $this->model_utama->view_where('about', array('id' => '1'));
     $detailcontact = $this->model_utama->view_where('contact', array('id' => '1'));

     $about = $detailabout->row_array(); 
     $contact = $detailcontact->row_array(); 
     $history = $detailhistory->row_array(); 
?>
    <!--Site Footer Start-->
    <footer class="site-footer">
            <div class="site-footer__top">
                <div class="site-footer__top-shape"
                    style="background-image: url(asset/templateku/assets/images/shapes/site-footer-top-shape.png)"></div>
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="site-footer__top-left">
                            <h3 class="site-footer__top-left-title"><?php echo $about['tagline']; ?></h3>
                            <a href="tel:926668880000" class="site-footer__top-left-phone"><?php echo $contact['contact']; ?></a>
                        </div>
                        <div class="site-footer__top-right">
                            <div class="site-footer__top-right-social">
                                    <a href="<?php echo $history['twitter']; ?>" class="fab fa-twitter" target="_blank"></a>
                                    <a href="<?php echo $history['facebook']; ?>" class="fab fa-facebook-square" target="_blank"></a>
                                    <a href="<?php echo $history['instagram']; ?>" class="fab fa-instagram" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__middle">
                <div class="container">
                    <div class="site-footer__middle-inner">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__contact">
                                    <h3 class="footer-widget__title">Contact</h3>
                                    <p class="footer-widget__contact-text"><?php echo $contact['about']; ?> <br> <?php echo $contact['address']; ?></p>
                                    <h4 class="footer-widget__contact-email-phone">
                                        <a href="mailto:needhelp@company.com"
                                            class="footer-widget__contact-email"><?php echo $contact['contact']; ?></a>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__links clearfix">
                                    <h3 class="footer-widget__title">Links</h3>
                                    <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li><a href="<?= base_url('about') ?>">About</a></li>
                                    <li><a href="<?= base_url('program') ?>">Our Program</a></li>
                                    <li><a href="<?= base_url('team') ?>">Meet Our Team</a></li>
                                    <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="col-xl-5 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__newsletter">
                                    <h3 class="footer-widget__title">Newsletter</h3>
                                    <form class="footer-widget__newsletter-form">
                                        <div class="footer-widget__newsletter-input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                            <button type="submit" class="footer-widget__newsletter-btn"><i
                                                    class="far fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                    <div class="footer-widget__newsletter-bottom">
                                        <div class="footer-widget__newsletter-bottom-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="footer-widget__newsletter-bottom-text">
                                            <p>I agree to all your terms and policies</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyrights, <span class="dynamic-year"></span> <a
                                        href="#"><?php echo $about['tagline']; ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->

