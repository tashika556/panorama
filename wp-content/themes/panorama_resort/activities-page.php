 
 
 <!-- Template Name: Activities Page -->
 <?php get_header(); ?>



<!-- slider end  -->
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



<section class="blog ">
    <div class="container">
   
    

        <div class="row">
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'activity',
   'orderby'=> 'date', 
   'category_name'=>'activitycat',
   'posts_per_page' => 100,
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


<section class="view img_bg d-flex align-items-center">
    <div class="container">
        <div class="row">
 
            <div class="col-lg-6 col-md-10 col-12 m-auto">
                <div class="view_slider bg-white">
                <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'testimonial',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'testimonial',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
                    <div class="view_item">
                        <div class="section_title text-center  p-5 mb-0">
                            <h6>TESTIMONIAL</h6>
                            <a href="">
                                <h1>What Client Say </h1>
                            </a>

                            <p><?php the_content(); ?></p><br>
                            <div class="test_btn_block d-flex justify-content-center align-items-center  mt-3">
                                <div class="testi_img">
                                    <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid" alt="">
                                </div>
                                <div class="testi_text ml-3 d-flex align-items-center flex-column">
                                    <div class="mb-2">
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <h6 class="font-weight-light"><?php the_field('address') ?></h6>
                                </div>
                            </div>

                        </div>
                    </div>    <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
                   
                </div>
            
            </div>
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