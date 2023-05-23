 <!-- Template Name: Gallery Page -->
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
                     <img src="<?php echo get_template_directory_uri(); ?>/img/white-shape-top.png" class="img-fluid"
                         alt="">
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- <section class="gallery_page bg_gray">
     <div class="container">



         <div class="row_wrapp-gallery">
             <div class="row">
                 <div class="col-lg-3 col-md-6">


                     <div class="blog_block position-relative mb-4">

                         <div class="blog_img text-center">

                         </div>


                     </div>
                 </div>

             </div>

         </div>

     </div>

 </section> -->

 <section id="photo_section" class="padding bg_graylight pb-0">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="section_title ">
                     <div class="float-text">
                         <?php the_content();?>
                     </div>

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
                     <img src="<?php echo get_template_directory_uri(); ?>/img/white-shape-bottom.png" class="img-fluid"
                         alt="">
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php get_footer(); ?>