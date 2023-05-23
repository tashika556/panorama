<?php get_header(); ?>

<section class="slider_wrapp banner p-0 position-relative">
    <ul class="main_slider position-relative">
        <?php
    $images = get_field('sliderimages');
if( $images ): ?>
<?php foreach( $images as $image ): ?>
        <li class="item">
            <div class="slider_img">
                <img src="<?php echo $image['url'];?>" />
            </div>
            <div class="slider_content text-center">
                <div class="mb-4">
                    <h3><?php the_title() ?></h3>
                </div>

            </div>
        </li>
        <?php endforeach; ?>
<?php endif;?> 
    </ul>

</section>

<!-- slider end  -->

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
            <div class="col-md-10 m-auto">
                <div class="room-price-wrap text-center">

                    <h1>Start from:<span><?php the_field('price_per_night') ?></span>/night</h1>
                    <div class="py-3">
                        <p><?php the_content() ?></p>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="room_facilities gray_bg p_image_right">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="facilities_img mb-lg-0 mb-5">
                    <img src="<?php $image= get_field('otherimage') ?>
                    
                    <?php echo $image['url'];?>  " class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6 pl-4">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title ">
                            <h6>FACILITIES</h6>
                            <h1>Room Facilities</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
             <?php   if( have_rows('room_facilities') ):?>
<?php while( have_rows('room_facilities') ) : the_row();?>
                    <div class="col-md-6 col-12">
                        <div class="services_img mb-md-5 mb-4 d-flex align-items-center">
                            <div class="facilities_icon">

                                <img src="<?php
                                $images = get_sub_field('logo');?>
                                <?php echo $images['url'];?>"  class="img-fluid" alt="">

                            </div>
                            <div class="pl-4">
                                <div>
                                    <h3><?php the_sub_field('title') ?></h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <?php   endwhile; ?>
<?php endif;?> 



                </div>
            </div>
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