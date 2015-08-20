<?php wp_footer(); ?>
<!--keep in touch-->
<div class="keep" style="background:url(<?php print(get_template_directory_uri()); ?>/gdg_assets/images/keep-banner.jpg) no-repeat 0px 0px;">
  <div class="container">
    <h3>Keep in touch with Us</h3>
    <ul>
      <li><a href="#"><span class="fb"> </span></a></li>
      <li><a href="#"><span class="twit"> </span></a></li>
      <li><a href="#"><span class="google"> </span></a></li>
      <li><a href="#"><span class="pin"> </span></a></li>
    </ul>
    <div class="find">
      <div class="col-md-4 find-left">
        <h4>Find Us</h4>
      </div>
      <div class="col-md-8 find-right">
        <div class="adrs">
          <h5>Address</h5>
          <p>JSS Academy of Technical Education C-20/1 Sector-62, Noida.</p>
        </div>
        <div class="adrs1">
          <h5>Email Us</h5>
          <p>hehe@gmail.com</p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--//keep in touch-->
<!--map-starts-->
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5230794515874!2d77.3595036!3d28.614081000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce541dc34567f%3A0x4fd027cb23d66b19!2sJSS+Academy+Of+Technical+Education!5e0!3m2!1sen!2sus!4v1439941200258" frameborder="0" style="border:0" allowfullscreen></iframe>
  <div class="map-mask">
    
  </div>
</div>
<!--map-end-->
  <!-- testing ends -->
    
    <div id="contact" class="contact">
        <div class="container">
        <div class="contact-grids">
          <div class="col-md-6">
            <div class="contact-left wow fadeInRight" data-wow-delay="0.4s">
              <h3>Contact Us</h3>
              <label>Don't be shy, drop us an email and say hello! We are always Ready to help you... :)</label>
              <div class="contact-left-grids">
                <div class="col-md-6">
                  <div class="contact-left-grid">
                    <p><span class="c-pluse"> </span><a href="https://plus.google.com/108501396545659745683/posts">plus.com/gdgjss</a></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="contact-right-grid">
                    <p><span class="c-face"> </span><a href="https://www.facebook.com/gdgjss">facebook.com/gdgjss</a></p>
                    </div>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <p>
          <div class="col-md-6">
            <div class="contact-right wow fadeInLeft" data-wow-delay="0.4s">
              <form action="contact" method="post">
              {% csrf_token %}
                <input name="name" type="text" class="text" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 
'Name...';}">
                <input name="from_email" type="text" class="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 
'Email...';}">
                <textarea name ="message" value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..
</textarea>
                <input class="wow shake" data-wow-delay="0.3s" type="submit" value="Send Message" />
              
              </form>
              
            </div>
            
          </div>
          </p>
 <div class="clearfix"> </div>
        </div>
        
        <div class="copy-right text-center">
          <p>Developed by - GDG JSS Noida</p>
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
                  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>
      </div>
      </div>
    </div>
  </body>
</html>




