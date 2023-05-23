 <!-- Template Name: Contact Page -->
 <?php get_header(); ?>
<!-- slider end  -->
<section class="banner img_bg" style="background-image: url(<?php echo the_post_thumbnail_url();?>);">
    <div class="slider_content text-center">
        <h3><?php the_title() ?></h3>
    </div>
</section>
<section class="shap_img shap_inner p-0">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="white_shap ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/white-shape-top.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title ">
                    <h6>Locations</h6>
                    <h1>We Love to Hear from You</h1>
                </div>
            </div>
        </div>
        <div class="row_wrapp p-md-5 p-3 position-relative" style="
    background-image: url(<?php echo get_template_directory_uri(); ?>/img/contact_bg.jpg);
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="address_block mb-4">
                        <div class="icon_block">
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> </span>
                        </div>
                        <h2>Our Address</h2>
                        <p><?php the_field('address') ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class=" address_block mb-md-0 mb-4">
                        <div class="icon_block">
                            <span><i class="fa fa-phone" aria-hidden="true"></i> </span>
                        </div>
                        <h2>Phone</h2>
                        <p><a href="tel: <?php the_field('phone_number') ?>"> <?php the_field('phone_number') ?></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="address_block">
                        <div class="icon_block">
                            <span><i class="fa fa-envelope-open-o" aria-hidden="true"></i> </span>
                        </div>
                        <h2>Email Address</h2>
                        <p><a href="mailto:<?php the_field('email') ?>"> <?php the_field('email') ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="map p-0">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
              <?php the_field('map') ?>
            </div>
        </div>
    </div>
</section>

<section class="shap_img_buttom pt-0 ">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="white_shap ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/white-shape-bottom.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>