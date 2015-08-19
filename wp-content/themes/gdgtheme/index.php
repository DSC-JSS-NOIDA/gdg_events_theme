    <script>
     new WOW().init();
    </script>
  
    <div class="bg">
      <div id="home" class="header wow bounceInDown" data-wow-delay="0.4s">
          <div class="top-header">
            <div class="container">
            <div class="logo">
              <a href="#"><img src="<?php print(get_template_directory_uri()); ?>/gdg_assets/images/logo.png" title="jss" height=30 width=150 /></a>
            </div>



             <nav class="top-nav"><br>
              <ul class="top-nav">
                <?php
          require_once('lib/wp_bootstrap_navwalker.php');
              wp_nav_menu( array(
              'menu'         => 'primary',
              'theme_location'  => 'primary',
              'depth'       => 2,
              'container'     => 'div',
              'menu_class'    => 'nav navbar-nav',
              'fallback_cb'   => 'wp_bootstrap_navwalker::fallback',
              'walker'      => new wp_bootstrap_navwalker())
            );
            ?>
              </ul>
              <a href="#" id="pull"><img src="<?php print(get_template_directory_uri()); ?>/gdg_assets/images/menu-icon.png" title="menu" /></a>
            </nav>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
            <div class="banner wow fadeIn" data-wow-delay="0.5s">
        <div class="container">
          <div class="banner-info text-center">
            <a href="index.php/dev-blogs"><h1>GDG - JSS Noida</h1></a><br />
            <span> </span>
            <p>Having a Developer Group would help bring up the IT skillset of students to a newer height ...</p>
          </div>
        </div>
      </div>
    </div>
      <div class="portfolio" id="detail">
        <div class="portfolio-top">
          <div class="col-md-8">
            <div class="portfolio-top-left wow fadeInLeft" data-wow-delay="0.4s">
              <h3>Why Are We Here !</h3>
              <p>Having a Developer Group in JSS would help bring up the IT skillset of our students to a newer height
              and bring them to terms with all things happening in and around Google and Open Source.
              </p><p>The student learning process will be very intuitive and exciting when it comes to all GDG events. The
              students will take back a rich technical experiences and awareness without being bogged down by
              long theoretical sessions.</p>
              <p>The way GDG comes into the scene is that it plans for events that are concise but technically
              enriching. Categorically GDG JSS Noida will offer 4 kinds of activities namely :</p>
              <div class="portfolio-top-left-grids">
                <div class="portfolio-top-left-grid">
                  <div class="portfolio-top-left-grid-left">
                    <span class="p-icon1"> </span>
                  </div>
                  <div class="portfolio-top-left-grid-right">
                    <h5>Workshops</h5>
                    <p>Sessions by professionals/trained students on topics of concern. The session would be interactive and tutorial in nature. </p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
                <div class="portfolio-top-left-grid">
                  <div class="portfolio-top-left-grid-left">
                    <span class="p-icon2"> </span>
                  </div>
                  <div class="portfolio-top-left-grid-right">
                    <h5>Seminars </h5>
                    <p>Lightning talks on concerned topics by IT professionals and regular speakers. </p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
                <div class="portfolio-top-left-grid">
                  <div class="portfolio-top-left-grid-left">
                    <span class="p-icon3"> </span>
                  </div>
                  <div class="portfolio-top-left-grid-right">
                    <h5>Meetups</h5>
                    <p>Provide a platform for regular meetups in college premises and be a source of information about all events taking place in and around Delhi/NCR. </p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="portfolio-top-left wow fadeInLeft" data-wow-delay="0.4s">
              <h3>Our Goals !!! </h3>
              
                
                  <br />
                    <p>As a developer group for Google we broadly classify our goals to be as follows :</p>
                  <br />
                  <ul>
                    <li>Bring out a radical change in the mindset of the college CS/IT crowd.</li><br>
                    <li>Develop an innovative approach to tackling and solving problems.</li><br>
                    <li>Provide a platform for budding technology evangelists.</li><br>
                    <li>Provide a community driven support system to college audience.</li><br>
                    <li>Expose different avenues to students to pursue their technological interests.</li>
                  </ul>
              
          </div>
          <div class="clearfix"> </div>
          <div class="about-head">
          <h1>Some Moments...</h1>
          <span> </span>
        </div>
          <div class="portfolio-works">
            <div class="col-md-4 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
              <div class="portfolio-work-grid-pic">
                <img src="<?php print(get_template_directory_uri()); ?>/gdg_assets/images/mom1.jpg" title="name" />
              </div>
              <div class="portfolio-work-grid-caption">
                <h3>Google Developer Group -Induco </h3>
                <p></p>
              </div>
            </div>
            <div class="col-md-4 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
              <div class="portfolio-work-grid-pic">
                <img src="<?php print(get_template_directory_uri()); ?>/gdg_assets/images/mom2.jpg" title="name" />
              </div>
              <div class="portfolio-work-grid-caption">
                <h3>Workshop on Web Development</h3>
                <p></p>
              </div>
            </div>
            <div class="col-md-4 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
              <div class="portfolio-work-grid-pic">
                <img src="<?php print(get_template_directory_uri()); ?>/gdg_assets/images/mom3.jpg" title="name" />
              </div>
              <div class="portfolio-work-grid-caption">
                <h3>Google Developers T-Shirt for You..</h3>
                <p></p>
              </div>
            </div>
            
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      
  <div id="services" class="services">
        <div class="container">
          <div class="service-head text-center">
            <h2>Upcoming Events</h2>
            <span> </span>
          </div>  
            <div class="tm-head-grids">
             <?php query_posts('category_name=upcoming-events&showposts=10');
            if (have_posts()) : while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>"><div class="tm-head-grid wow fadeInLeft" data-wow-delay="0.4s">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="">
                <h4><?php the_title(); ?></h4>
                <h5><?php the_content( __('Continue Reading &rarr;', 'dw-timeline') ); ?></h5>
              </div> </a>
               <?php endwhile; ?>
                <?php else : ?>
                  <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <h1>Not Found</h1>
                  </div>
                <?php endif; ?>
            </div>
            
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
    
  <!-- testing -->
  <div class="about" id="port">
      <div class="wrap"> 
        <div class="about-head">
          <h1>Past Events</h1>
          <span> </span>
        </div>

        <div class="event-time-line">
          <?php query_posts('category_name=past-events&showposts=10');
            if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li>
               <a href="<?php the_permalink(); ?>"><div class="event-image" style="background:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) no-repeat;background-size: 100% 100%;"></div></a>
              <div class="event-desc wow fadeInLeft" data-wow-delay="0.4s">
                <h2> <?php the_date(); ?></h2>
                <h4><p><b><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></b><br><?php the_content( __('Continue Reading &rarr;', 'dw-timeline') ); ?></p></h4>
              </div>
          </li>

          <?php endwhile; ?>
            

          <?php else : ?>
            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
              <h1>Not Found</h1>
            </div>

          <?php endif; ?>
    
      </div>
  
        <div class="clearfix"> </div>
        </div>
    </div>

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
         
