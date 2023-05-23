 <!-- Template Name: Offer Page -->
 <?php get_header(); ?>

<section class="banner img_bg" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
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
<section id="activities_page" class="buddha_left padding bg_graylight position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 ">

                <div class="section_title text-center">
                    <h6>SPECIAL OFFERS</h6>
                    <h1>We Provide Lots of Offer In Resort</h1>
                </div>
            </div>
        </div>
        <div class="row">
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'offer',
   'orderby'=> 'date', 
   'category_name'=>'offercategory',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="col-lg-6 ">

                <div class="acvitities_block position-relative mr-md-3 mr-0">
                    <div class="img_block">
                        <img src="<?php echo the_post_thumbnail_url();?>" alt="img-fluid">
                    </div>
                    <div class="text p-md-5 p-3 gray_bg">
                        <div class="section_title  mb-2">

                            <h2><?php the_title() ?></h2>
                        </div>
                        <p><?php the_field('summary') ?></p>

                        <div class="offer_block d-flex justify-content-between align-items-center mt-4">
                            <div class="offer_text">
                                <h3>from:<span><?php the_field('price') ?></span></h3>
                            </div>
                            <div class="btn_bg btn_medium  mt-0 ">
                                <a href="<?php the_permalink() ?>" class="text-white">
                                    <div class="icon_text ">
                                        <span> Read More</span>
                                    </div>
                                    <div class="img_icon
                                    "><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_img.png" class="img-fluid" alt=""></div>
                                </a>
                            </div>

                        </div>

                    </div>     
                </div>

            </div>
           
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<section class="booking-logo py-lg-5 py-3 p_image_right">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6 text-center">
                <a href="<?php the_field('agoda',35) ?>" class="logo_item" alt="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-agoda.png" alt="#"
                        class="img-fluid">
                </a>
            </div>
            <div class="col-lg-3 col-6 text-center">
                <a href="<?php the_field('booking',35) ?>" class="logo_item" target="_blank"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo-booking.png" alt="#"
                        class="img-fluid"></a>
            </div>
            <div class="col-lg-3 col-6 text-center">
                <a href="<?php the_field('trip_advisor',35) ?>" class="logo_item" alt="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-tripadvisor.png" alt="#"
                        class="img-fluid">
                </a>
            </div>
            <div class="col-lg-3 col-6 text-center">
                <a href="<?php the_field('expedia',35) ?>" class="logo_item" target="_blank"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo-expedia.png" alt="#"
                        class="img-fluid"></a>
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