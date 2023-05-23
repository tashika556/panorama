 <!-- Template Name: Home Page -->
<?php get_header(); ?>



<section class="slider_wrapp p-0 position-relative">
    <ul class="main_slider position-relative">
    <?php 
if( have_rows('imagesslider',9) ):?>
<?php while( have_rows('imagesslider',9) ) : the_row();?>

        <li class="item">
     
            <div class="slider_img">
    
                <img src="
                <?php 
$images = get_sub_field('image',9);
?><?php echo $images['url'];?>" />
            </div>
            <div class="slider_content text-center">
                <div class="mb-4">
                    <h3><?php the_sub_field('image_heading',9);?>
                    </h3>
                </div>
                <p><?php the_sub_field('image_content',9);?></p>
            </div>
            
 
        </li>
    
        <?php   endwhile; ?>
<?php endif;?> 

    </ul>
    <a href="#rooms" class="scroll-down" address="true"></a>
</section>

<!-- slider end  -->
<section id="date_section" class="p-0">
    <div class="container">
        <form action="" class="date_section_block">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row d-flex align-items-center h-100">
                        <div class=" col-lg-4 col-md-6 col-12">
                            <div class="date_lable">
                                <h6>Check in</h6>
                            </div>
                            <div id="date-picker-date-first" class="date-picker-date ml-0">
                                24/12/2017
                            </div>
                        </div>
                        <div class=" col-lg-4 col-md-6 col-12">
                            <div class="date_lable">
                                <h6>Check Out</h6>
                            </div>
                            <div class="date-picker-date ml-0">
                                28/12/2017
                            </div>
                        </div>
                        <div id="date-picker-modal" class="hidden-2">
                            <div id="date-picker-top-bar">
                                <div id="date-picker-previous-month" class="date-picker-change-month">&lsaquo;</div>
                                <div id="date-picker-month">December 17</div>
                                <div id="date-picker-next-month" class="date-picker-change-month">&rsaquo;</div>
                            </div>
                            <div id="date-picker-exit">&times;</div>
                            <table id="date-picker">
                                <tr id="date-picker-weekdays">
                                    <th>S</th>
                                    <th>M</th>
                                    <th>T</th>
                                    <th>W</th>
                                    <th>T</th>
                                    <th>F</th>
                                    <th>S</th>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="date_lable">
                                <h6>Adult</h6>
                            </div>
                            <div class="text__center">
                                <select class="cs-select cs-skin-elastic">
                                    <option value="" disabled selected>0</option>
                                    <option value="france">1</option>
                                    <option value="brazil">2</option>
                                    <option value="argentina">3</option>
                                    <option value="south-africa">4</option>
                                    <option value="south-africa">5</option>
                                    <option value="south-africa">6</option>
                                    <option value="south-africa">7</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="date_lable">
                                <h6>Children</h6>
                            </div>
                            <div class="text__center">
                                <select class="cs-select cs-skin-elastic">
                                    <option value="" disabled selected>0</option>
                                    <option value="france">1</option>
                                    <option value="brazil">2</option>
                                    <option value="argentina">3</option>
                                    <option value="south-africa">4</option>
                                    <option value="south-africa">5</option>
                                    <option value="south-africa">6</option>
                                    <option value="south-africa">7</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="btn_bg text-center d-flex align-items-center justify-content-center h-100 mt-lg-0 mt-2">
                        <a onclick="openNav()" class="text-white">
                            <div class="icon_text ">
                                <span> Check Availability</span>
                            </div>
                            <div class="img_icon
                                    "><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_img.png" class="img-fluid" alt=""></div>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="shap_img p-0">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="white_shap white_shap_home">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/white-shape-top.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="rooms" class="p_image   bg-white">
    <div class="container-fluid p-0">

        <div class="row no-gutters">
            <div class="col-lg-6 ">
                <div class="room_left_block d-flex flex-column justify-content-center h-100">
                    <div class="row">
                        <div class="col-md-8 ">
                            <div class="section_title">
                                <h6>OUR ROOMS</h6>
                                <h1>Fascinating rooms & suites</h1>
                            </div>
                        </div>
                    </div>      
                    <div class="row">

                        <div class="col-lg-12 mb-lg-0 mb-4">
                     
                            <div class="tab d-flex justify-content-center flex-column">
                
                                <button class="tablinks active mb-md-0 mb-3" onclick="openCity(event, 'one')" id="defaultOpen">
                           
                                    <div class="div_tab_block d-flex flex-md-row flex-column ">
                                        <div class="img_tab">
                                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(140);?>" alt="">
                                        </div>
                                        <div class="tab_text d-flex flex-column justify-content-center pl-4 py-md-0 py-4">
                                            <div class="mb-sm-3 mb-1">
                                                <h3><?php echo get_post(140)->post_title; ?></h3>
                                            </div>
                                            <h5>Starting from<small> <?php the_field('price_per_night',140) ?> / night</small>
                                            </h5>
                                        </div>
                                    </div>
                                </button>
                                <button class="tablinks" onclick="openCity(event, 'two')" id="defaultOpen">
                                    <div class="div_tab_block d-flex flex-md-row flex-column ">
                                        <div class="img_tab">
                                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(141);?>" alt="">
                                        </div>
                                        <div class="tab_text d-flex flex-column justify-content-center pl-4 py-md-0 py-4">
                                            <div class="mb-sm-3 mb-1">
                                                <h3><?php echo get_post(141)->post_title; ?></h3>
                                            </div>
                                            <h5>Starting from<small> <?php the_field('price_per_night',141) ?> /night</small>
                                            </h5>
                                        </div>
                                    </div>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-lg-6 ">
                <div id="one" class="tabcontent" style="display: block;">
                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(140);?>" class="img-fluid" alt="">
                    <div class="tabimg_text d-md-block d-none">
                        <h2><small>The Preview Of <?php echo get_post(140)->post_title; ?></small></h2>
                    </div>
                </div>
                <div id="two" class="tabcontent" style="display: none;">
                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(141);?>" alt="">
                    <div class="tabimg_text d-md-block d-none">
                        <h2><small>The Preview Of <?php echo get_post(141)->post_title; ?></small></h2>
                    </div>
                </div>

               


            </div>
        </div>
    </div>
</section>
<section class="about img_bg overlay " style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/slider/slider01.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto ">
                <div class="about_img-block text-center">
                    <div class="about_img position-relative ">


                        <div class="youtube_block">

                            <a href="<?php the_field('youtube') ?>"
                                class="youtube" mute=1 allow="autoplay">

                                <img class="about_youtube-btn"
                                    src="<?php echo get_template_directory_uri(); ?>/img/youtube_btn.gif" alt="">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-lg-8 col-12 m-auto">
                <div class="section_title text-center mb-0">


                    <div class="text_white">
                        <h1>Enjoy Your Wonderful Vacation</h1>
                        <div class="text-white pt-lg-3 pt-0">
                            <p><?php the_field('summary',25) ?></p>
                        </div>
                        <div class="btn_bg btn_medium ">
                            <a href="<?php echo get_page_link(25); ?>" class="text-white m-auto text-center">
                                <div class="icon_text ml-2">
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
    </div>
</section>

<section class="facilities  gray_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12 m-auto">
                <div class="section_title text-center">
                    <h6>FACILITIES</h6>
                    <h1>Giving entirely awesome</h1>
                </div>
            </div>
        </div>
        <div class="row">
             <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'facility',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'facility',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="services_img text-center mb-lg-0 mb-4 px-md-0 px-4">
                    <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid" alt="">
                    <div class="">
                        <div class="py-md-3 py-2">
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <p><?php the_content(); ?></p>
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
   'posts_per_page' => 20,
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/aagoda.png" class="img-fluid" alt="">
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