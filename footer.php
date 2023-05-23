<!-- FOOTER START -->
      <footer class="footer">
<div class="footer-top">
<div class="footer-logo">
<img src="<?php bloginfo('stylesheet_directory');?>/img/logo.png" alt="Kiddy Cuts"/>
</div>
<div class="footer-top-cnt">
  <div class="inner">
<div class="ftr-open-hour">
<p>
<?php
   // query for the about page
    $your_query = new WP_Query( 'pagename=footer-content' );
    // "loop" through query (even though it's just one page)
    while ( $your_query->have_posts() ) : $your_query->the_post();

	$value = the_field( "opening_time" );

if( $value ) {

    echo $value;

} else {

    echo '&nbsp;';

}?>
   </p>
</div>
<div class="ftr-address">
<p> <?php
$value = the_field( "quick_contact" );

if( $value ) {

    echo $value;

} else {

    echo '&nbsp;';

}?>
</p> <?php endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>

</div>
<div class="ftr-social">
<ul>
<li class="facebook"><a href="https://www.facebook.com/kiddycutssydney/?fref=ts" target="_black">facebook</a></li>
<li class="instagram"><a href="https://www.instagram.com/kiddy.cuts/" target="_black">instagram</a></li>
</ul>
</div>
</div>
</div>
</div>
<!--end of part-->

<?php //wp_footer(); ?>
<div class="footer-btm">
<div class="inner">
<div class="privacy">
<p><a href="http://www.kiddycuts.com.au/privacy-policy/">Privacy Policy</a></p>
</div>
<div class="copyright">
<p>Copyright © 2016 Kiddy Cuts</p>
</div>
<div class="designby">
<p>A Website By <a href="http://enhancemodern.com/" target="_blank">Enhance Modern</a><?php echo get_num_queries(); ?> queries in <?php timer_stop(1); ?> seconds.</p>
</div>
</div>
</div>
      </footer>
      <!-- FOOTER END -->
</div>

  <!-- MAIN WRAPPER END -->
  
 </div><!-- Loading--> 
<script src="<?php bloginfo('template_url');?>/js/vendor/jquery-1.11.2.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/vendor/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/vendor/jquery.cloud9carousel.js"></script>
<script src="<?php bloginfo('template_url');?>/js/vendor/jquery.reflection.js"></script>
<script src="<?php bloginfo('template_url');?>/js/vendor/jquery.magnific-popup.min.js"></script>
        <script src="<?php bloginfo('template_url');?>/js/main.js"></script>
       <?php /*?> <script src="<?php bloginfo('template_url');?>/js/jquery.js" type="text/javascript"></script><?php */?>
	<script src="<?php bloginfo('template_url');?>/js/animate.js" type="text/javascript"></script>
     <script src="<?php bloginfo('template_url');?>/js/collapse.js"></script>
    
     
     
        <script>
        $(document).ready(function(){
          //$('.testimonial ul').bxSlider();
          var countTestimonial = $('.testimonial ul li').size();
      if(countTestimonial > 1){
          $('.testimonial ul').bxSlider();
        }
        });
        </script>
        <!-- MAIN WRAPPER END -->


        <script>
        $(document).ready(function(){
            setTimeout(function(){
              $(function() {
              var showcase = $("#showcase")

              showcase.Cloud9Carousel( {
              yPos: 0,
              yRadius: 48,
              mirrorOptions: {
              gap: 12,
              height: 0.2
              },
              farScale: 0.5,
              buttonLeft: $(".nav > .left"),
              buttonRight: $(".nav > .right"),
              autoPlay: false,
              bringToFront: true,
              //onRendered: showcaseUp<a href="http://www.jqueryscript.net/time-clock/">date</a>d,
              onLoaded: function() {
              showcase.css( 'visibility', 'visible' )
              showcase.css( 'display', 'none' )
              showcase.fadeIn( 1500 )
              }
              } )

              function showcaseUpdated( showcase ) {
              var title = $('#item-title').html(
              $(showcase.nearestItem()).attr( 'alt' )
              )

              var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI)
              title.css('opacity', 0.5 + (0.5 * c))
              }

              // Simulate physical button click effect
              $('.nav > button').click( function( e ) {
              var b = $(e.target).addClass( 'down' )
              setTimeout( function() { b.removeClass( 'down' ) }, 80 )
              } )

              $(document).keydown( function( e ) {

              switch( e.keyCode ) {
              /* left arrow */
              case 37:
              $('.nav > .left').click()
              break

              /* right arrow */
              case 39:
              $('.nav > .right').click()
              }
              } )
              })
            },1000)
        // hexagon showcase for mobile

                $('#showcase-mobile > ul' ).bxSlider({
                  touchEnabled:false,
                  fixedBgPos:false
                });
              // hexagonal menu
              function hexMenuHt(){
                var itemWt = $('.showcase-menu-mobile a').width();
                 $('.showcase-menu-mobile a').height(itemWt)
              }
              hexMenuHt();
              $(window).resize(function(){
                  hexMenuHt();
              })

              // hexagonal menu trigger to slide
              $('.showcase-menu-mobile a:first-child').addClass('active');
              $('.showcase-menu-mobile a').click(function(){
              $('.showcase-menu-mobile a').removeClass('active');
              $(this).addClass('active');
              })
        $('.showcase-menu-mobile a.sm-short').click(function(e){
        e.preventDefault()
        $('.bx-default-pager .bx-pager-item:first-child a').click()
        })
        $('.showcase-menu-mobile a.sm-med').click(function(e){
        e.preventDefault()
        $('.bx-default-pager .bx-pager-item:nth-child(2) a').click()
        })
        $('.showcase-menu-mobile a.sm-long').click(function(e){
        e.preventDefault()
        $('.bx-default-pager .bx-pager-item:nth-child(3) a').click()
        })
        $('.showcase-menu-mobile a.sm-xlong').click(function(e){
        e.preventDefault()
        $('.bx-default-pager .bx-pager-item:nth-child(4) a').click()
        })
//-----

$('.popup-with-form').magnificPopup({
  type: 'inline',
  preloader: false,
  focus: '#name',

  // When elemened is focused, some mobile browsers in some cases zoom in
  // It looks not nice, so we disable it:
  callbacks: {
    beforeOpen: function() {
      if($(window).width() < 700) {
        this.st.focus = false;
      } else {
        this.st.focus = '#name';
      }
    },
    close: function() {
      $('body').removeClass('popup-opened');
      console.log('close')
    }
  },

});

//------
              });

        </script>
        <?php wp_footer(); ?>
    </body>
</html>
