 <!-- Template Name: Review Page -->
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
<section class="review p_image_right">
    <div class="container">
        <div class="row">
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'review',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'review',
   'posts_per_page' => 20,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
    
            <div class="col-md-6 mb-4">
                <div class="view_item d-flex justify-content-center h-100 align-items-center">
                    <div class="section_title p-5 mb-0 position-relative">
                        <q><?php the_content() ?></q><br>
                        <div class="test_btn_block d-flex    mt-3">
                            <div class="testi_img">
                                <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                            </div>
                            <div class="testi_text ml-3">
                                <div class="mb-2">
                                    <h3><?php the_title() ?></h3>
                                </div>
                                <h6 class="font-weight-light"><?php the_field('address') ?></h6>
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