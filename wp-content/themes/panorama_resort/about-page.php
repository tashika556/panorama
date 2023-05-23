 <!-- Template Name: About Page -->
 <?php get_header(); ?>

<!-- <section class="slider_wrapp banner p-0 position-relative">
    <ul class="main_slider position-relative">
        <li class="item">
            <div class="slider_img">
                <img src="img/room/suites.jpg" />
            </div>
            <div class="slider_content text-center">
                <div class="mb-4">
                    <h3>Suites Room</h3>
                </div>

            </div>
        </li>
        <li class="item">
            <div class="slider_img">
                <img src="img/room/suites01.jpg" />
            </div>
            <div class="slider_content text-center">
                <div class="mb-4">
                    <h3>Suites Room</h3>
                </div>

            </div>
        </li>
    </ul>

</section> -->

<!-- slider end  -->

<section class="banner img_bg" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>)">
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

<section class="about_page">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12 m-auto">
                <div class="section_title text-center mb-4">
                    <h6>WELCOME TO</h6>
                    <h1>Panorama View Tower Resort</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 m-auto text-center">

                <div class="readmore__content mb-4 text-center">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <p><?php  the_content(); ?></p>     <?php endwhile; else: ?>
    
<?php endif; ?>
                </div>
                <button class="readmore__toggle custom-btn theme_btn border-0 mt-3 m-auto" role="switch"
                    aria-checked="true">
                    Show more
                </button>
            </div>
        </div>
    </div>
</section>

<section class="about_room bg_black">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12 ">
                <div class="section_title ">
                    <h6>WELCOME TO</h6>
                    <h1>Always Ready
                        to Take Challange</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="about_client d-lg-flex d-md-block d-flex align-items-center mb-md-0 mb-3">
                    <div class="about_client_number ">
                        <h1><?php the_field('years_experience') ?></h1>
                    </div>
                    <div class="about_client_text pl-3 text-white text-center mt-lg-0 mt-3">
                        <h2>Years Exp.</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about_client d-lg-flex d-md-block d-flex align-items-center mb-md-0 mb-3">
                    <div class="about_client_number ">
                        <h1><?php the_field('staff_number') ?> </h1>
                    </div>
                    <div class="about_client_text pl-3 text-white text-center mt-lg-0 mt-3">
                        <h2> Staffs</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about_client d-lg-flex d-md-block d-flex align-items-center mb-md-0 mb-3">
                    <div class="about_client_number ">
                        <h1><?php the_field('room_number') ?></h1>
                    </div>
                    <div class="about_client_text pl-3 text-white text-center mt-lg-0 mt-3">
                        <h2>Rooms</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="blog ">
    <div class="container">
   
    

        <div class="row">
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'activity',
   'orderby'=> 'date', 
   'category_name'=>'activitycat',
   'posts_per_page' => 3,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="col-lg-4 col-md-6"> 
          
      
              <div class="blog_block position-relative mb-4">
             
                    <div class="blog_img">
                        <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid" alt="">
                    </div>
                    <div class="blog_content text-white">
                        <h3><?php the_title() ?></h3>
                        <div class="blog_text ">
                            <?php the_field('summary') ?>
                        </div>

                        <hr class="hr_custome">
                        <div class="blog_date py-2">
                            <span><?php echo get_the_date() ?></span>
                        </div>
                        <div class="red_btn ">
                            <a href="<?php the_permalink(); ?>">
                                <div class="">
                                    Read More
                                </div>
                                <div class="arrow_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_img.png" class="img-fluid" alt="">
                                </div>
                            </a>
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