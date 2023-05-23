<?php register_nav_menus(
    array('primary-menu'=>'Top Menu')
)
?>
<?php
add_theme_support('post-thumbnails');

// Our custom post type function
function create_posttype() {
  
    register_post_type( 'Activity',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Activity' ),
                'singular_name' => __( 'Activity' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'activity'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}
add_theme_support( 'custom-logo' );
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


function createtestimonials_posttype() {
  
    register_post_type( 'testimonial',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testimonial' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'testimonial'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createtestimonials_posttype' );


function createroom_posttype() {
  
    register_post_type( 'room',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Room' ),
                'singular_name' => __( 'Room' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'room'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createroom_posttype' );


function createoffer_posttype() {
  
    register_post_type( 'offer',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Offer' ),
                'singular_name' => __( 'offer' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'offer'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createoffer_posttype' );

function createreview_posttype() {
  
    register_post_type( 'review',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Review' ),
                'singular_name' => __( 'Review' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'review'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createreview_posttype' );

function createfacility_posttype() {
  
    register_post_type( 'facility',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Facility' ),
                'singular_name' => __( 'Facility' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'facility'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createfacility_posttype' );

function createvideoss_posttype() {
  
    register_post_type( 'videoss',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Videos' ),
                'singular_name' => __( 'videoss' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'videoss'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createvideoss_posttype' );

?>


