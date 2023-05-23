<?php
if (have_posts())
{
    the_post(); rewind_posts(); 
    if ('activity' == get_post_type()){
        include (TEMPLATEPATH . '/activities-single.php');
    }
}
?>