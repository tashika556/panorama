<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Laila:wght@400;500;600;700&family=Montserrat:wght@100;300;400;500&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Poppins:wght@100;200;300;400;500;600&family=Redressed&family=Roboto+Condensed:ital,wght@0,400;1,400;1,700&family=Roboto:ital,wght@0,400;0,500;0,700;1,300;1,500&family=Spline+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Laila:wght@400;500;600;700&family=Montserrat:wght@100;300;400;500&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Poppins:wght@100;200;300;400;500;600&family=Redressed&family=Roboto+Condensed:ital,wght@0,400;1,400;1,700&family=Roboto:ital,wght@0,400;0,500;0,700;1,300;1,500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Laila:wght@400;500;600;700&family=Montserrat:wght@100;300;400;500&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Poppins:wght@100;200;300;400;500;600&family=Redressed&family=Roboto+Condensed:ital,wght@0,400;1,400;1,700&family=Roboto:ital,wght@0,400;0,500;0,700;1,300;1,500&family=Spline+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.minn.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
</head>
<?php wp_head(); ?>



<body>
    <section id="header" class="p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="large_log">
                        <a href="<?php echo get_page_link(9); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-fluid mt-3"
                                alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-3">


                    <!-- MENU TOGGLE BUTTON -->

                    <div class="d-flex">
                        <a href="#nav" class="nav__toggle" role="button" aria-expanded="false" aria-controls="menu">
                            <svg class="menuicon" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                viewBox="0 0 50 50">
                                <title>Toggle Menu</title>
                                <g>
                                    <line class="menuicon__bar" x1="13" y1="16.5" x2="37" y2="16.5" />
                                    <line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5" />
                                    <line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5" />
                                    <line class="menuicon__bar" x1="13" y1="32.5" x2="37" y2="32.5" />
                                    <circle class="menuicon__circle" r="23" cx="25" cy="25" />
                                </g>
                            </svg>
                        </a>
                        <div class="offer-btn">
                            <button class="" onclick="window.location.href='<?php echo get_page_link(190); ?>'">OFFER</button>
                        </div>
                        <div class="booknow_top-btn">
                            <button class="btn_button green_btn normal_btn text-white border-0" onclick="openNav()">Book
                                Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="viewport">


        <nav id="nav" class="nav" role="navigation">

            <!-- ACTUAL NAVIGATION MENU -->
            <ul class="nav__menu" id="menu" tabindex="-1" aria-label="main navigation" hidden>
                <li class="nav__item"><a href="<?php echo get_page_link(9); ?>" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="<?php echo get_page_link(25); ?>" class="nav__link">About</a></li>
            
                <li>
                    <a class="nav__link" href="#">Accommodation</a>
                    <ul id="sub_menus" class="sub-menu bg-white">
                        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'room',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'room',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
                        <li><a href="<?php the_permalink() ?>" class="nav__link"><?php the_title() ?></a></li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                    </ul>

                </li>
                <li class="nav__item"><a href="<?php echo get_page_link(87); ?>" class="nav__link">Activities</a></li>
                <li class="nav__item"><a href="<?php echo get_page_link(31); ?>" class="nav__link">Review</a></li>
                <li class="nav__item"><a href="<?php echo get_page_link(33); ?>" class="nav__link">GALLERY</a></li>
                <li class="nav__item"><a href="<?php echo get_page_link(219); ?>" class="nav__link">Videos</a></li>



                <li class="nav__item"><a href="<?php echo get_page_link(35); ?>" class="nav__link">Contact</a></li>
            </ul>
            <!-- ANIMATED BACKGROUND ELEMENT -->
            <div class="splash"></div>
        </nav>
        <!-- DEMO CONTENT -->

    </div>





    <div id="mySidenav" class="sidenav ">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6 bg-white ">
                    <div class="right_side_box text-left ">
                    <div action="">
                           
                                <?php the_field('bookform',9) ?>
                                </div>
                        </div>
                    </div>
                </div>
                  
                    <div class="col-lg-6">
                        <div class="booknow_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/booking-img.jpeg"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- book now end  -->
