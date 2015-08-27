<?php wp_footer(); ?>
<div class="subscription_box" align="center">
    <div class="center_box_sub">
        <div class="about-head">
          <p><b>Subscribe Us</b></p>
          <span> </span>
        </div>
        <div class="event_calendar">
          <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
          <?php endif; ?>
        </div>
      </div>
</div>
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5230794515874!2d77.3595036!3d28.614081000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce541dc34567f%3A0x4fd027cb23d66b19!2sJSS+Academy+Of+Technical+Education!5e0!3m2!1sen!2sus!4v1439941200258" frameborder="0" style="border:0" allowfullscreen></iframe>
  <div class="map-mask">
    
  </div>
</div>
<!--map-end-->
    
   
      <div class="copy-right text-center" style="background-color:#001F33;">
          <p>Developed by - GDG JSS Noida</p>
          
                  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>
    

      <script type="text/javascript">
                  jQuery(document).ready(function() {
                    /*
                    var defaults = {
                        containerID: 'toTop', // fading element id
                      containerHoverID: 'toTopHover', // fading element hover id
                      scrollSpeed: 1200,
                      easingType: 'linear' 
                    };
                    */
                    
                    $().UItoTop({ easingType: 'easeOutQuart' });
                    
                  });
                </script>
  </body>
</html>




