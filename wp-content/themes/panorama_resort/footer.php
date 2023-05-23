<a id="button"></a>
<!-- footer section start -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="mb-3">
                    <a href="<?php echo get_page_link(9); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="img-fluid logo-footer"></a>
                </div>
                <div class="footer-about mb-lg-0 mb-5">
                     <?php the_field('summary',25) ?> 
                </div>

            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="useful-link">
                    <h2>Useful Links</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/home_line.png" alt="" class="img-fluid">
                    <div class="use-links">
                        <li><a href="<?php echo get_page_link(9); ?>">
                                <div id="basso">

                                    <span id="bottom"></span>

                                </div>
                                <div class="link_a">
                                    Home
                                </div>
                            </a></li>
                        <li><a href="<?php echo get_page_link(219); ?>">
                                <div id="basso">

                                    <span id="bottom"></span>

                                </div>
                                <div class="link_a">
                                    Videos
                                </div>
                            </a></li>
                        <li><a href="<?php echo get_page_link(33); ?>">
                                <div id="basso">

                                    <span id="bottom"></span>

                                </div>
                                <div class="link_a">
                                    Gallery </div>
                       

                    </div>
                </div>

            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="useful-link social-links">
                    <h2>Follow Us</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/home_line.png" alt="">
                    <div class="social-icons">
                        <li><a href="<?php the_field('facebook',35) ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                        <li><a href="<?php the_field('instagram',35) ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                        <li><a href="<?php the_field('twitter',35) ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                    </div>
                </div>


            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="useful-link address">
                    <h2>Address</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/home_line.png" alt="" class="img-fluid">
                    <div class="address-links">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field('address',35) ?></li>
                        <li><a href="tel: <?php the_field('phone_number',35) ?>"><i class="fa fa-phone" aria-hidden="true"></i>  <?php the_field('phone_number',35) ?></a>
                        </li>

                        <li><a href="mailto:<?php the_field('email',35) ?>"><i class="fa fa-envelope-open-o"
                                    aria-hidden="true"></i> <?php the_field('email',35) ?></a></li>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="pt-2">
            <div class="container">
                <div class="row py-2">
                    <div class="col-md-4 col-12">
                        <div
                            class="footer_item text-white text-md-left text-center d-flex align-items-center h-100 justify-content-md-start justify-content-center">
                            <small> Copyright © 2022 Panorama View Tower Resort.</small>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="button_img text-center d-flex align-items-center h-100 justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/accepts.png" class="img-fluid" style="
    
">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div
                            class="company_name  text-white text-md-right text-center d-flex align-items-center justify-content-md-end justify-content-center h-100">
                            <small class="text-white">Website by <a class="text-white" href="http://digisoftdev.com"
                                    target="_blank">DigiSoft Developers</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.minn.js"></script>
<!-- <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick-animation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/font-awesom.js "></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
<?php wp_footer(); ?>
</html>