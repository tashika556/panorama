<?php get_header(); ?>

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
<section class="offer_detail activities_detail p_image_right">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 ">

                <div class="acvitities_block mb-0">
                    <div class="img_block">
                        <img src="<?php echo the_post_thumbnail_url();?>" alt="img-fluid">
                    </div>
                    <div class="text mt-4 ">
                        <div class="offer_text">
                            <h3>from:<span><?php the_field('price') ?></span></h3>
                        </div>
                        <div class="section_title  my-3">

                            <h1><?php the_title() ?></h1>
                        </div>

                        <p><?php the_content() ?></p>


                        <div class="section_title  mt-4 mb-0">

                            <h2>Offer Includes:</h2>
                            <div class="offer_list mt-2">
                                <ul>
                                    <?php the_field('offerlist') ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>

<section id="activities_page" class="offer_detail gray_bg ">
    <div class="container">
        <div class="row">
            <div class="col-12 ">

                <div class="section_title text-center">
                    <h6>SPECIAL OFFERS</h6>
                    <h1>Other Offers</h1>
                </div>
            </div>
        </div>
        <div class="row">
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'offers',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'offercategory',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="col-lg-4 ">

                <div class="acvitities_block position-relative mr-lg-3 mr-0">
                    <div class="img_block">
                        <img src="<?php echo the_post_thumbnail_url();?>" alt="img-fluid">
                    </div>
                    <div class="text p-4 bg-white">
                        <div class="section_title  mb-2">

                            <h2><?php the_title() ?></h2>
                        </div>
                        <p><?php the_field('short_description') ?></p>

                        <div class="offer_block d-flex justify-content-between align-items-center mt-4">
                            <div class="offer_text">
                                <h3>from:<span><?php the_field('price') ?></span></h3>
                            </div>
                            <div class="btn_bg btn_medium  mt-0 ">
                                <a href="<?php the_permalink() ?>" class="text-white w-100">
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