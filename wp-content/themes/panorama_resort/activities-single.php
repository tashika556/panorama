<?php get_header(); ?>


<section class="slider_wrapp banner p-0 position-relative">
    <ul class="main_slider position-relative">

        <li class="item">
            <div class="slider_img">
                <img src="<?php echo the_post_thumbnail_url(); ?>" />
            </div>
            <div class="slider_content text-center">
                <div class="mb-4">
                    <h3><?php the_title() ?></h3>
                </div>

            </div>
        </li>
      
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
                <div class="readmore__content text-center mb-3 ">
                    <p><?php the_content(); ?></p>

                </div>
                <div class="d-flex">
                    <button class="readmore__toggle custom-btn theme_btn border-0 mt-3 m-auto" role="switch"
                        aria-checked="true">
                        Show more
                    </button>
                </div>
                <hr class="hr_custome my-5">
                <div class="btn_section  pt-md-3 mb-2">
                    <?php
                $image = get_field('image'); ?>
                    <p><img class="alignnone img-fluid"
                            src="<?php echo $image['url'];?>"/>
                        </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog gray_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_title text-center">
                    <h6>EXPLORE</h6>
                    <h1>Activities</h1>
                </div>
            </div>
        </div>
        <div class="row">

        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'activity',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
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
                            <p><?php the_field('summary') ?></p>
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