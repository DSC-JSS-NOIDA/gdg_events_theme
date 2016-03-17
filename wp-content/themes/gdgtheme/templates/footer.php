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
<script>
      function showMap() {
        var mapPos = document.getElementById('map');
        var map = new google.maps.Map(mapPos, {
          center: {lat: 28.6131, lng: 77.3595},
          zoom: 16,
	fullscreenControl:true,
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=showMap" async defer></script>
<div id="map" style="width:100%;height:340px;"> </div>
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




