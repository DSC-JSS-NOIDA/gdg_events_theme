<!--loading page-->  
<div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>

    </div>
<!--loading page-->

    <div class="bg">
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
           </div>
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
                <h3>Google Developer Group -Induco... </h3>
                <p></p>
              </div>
            </div>
            <div class="col-md-4 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
              <div class="portfolio-work-grid-pic">
                <img src="<?php print(get_template_directory_uri()); ?>/gdg_assets/images/mom2.jpg" title="name" />
              </div>
              <div class="portfolio-work-grid-caption">
                <h3>Workshop on Web Development... </h3>
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
            
            
          </div>
          <div class="clearfix"> </div>
<!--Custom code-->
 <div class="about" id="port">
<div class="container">
  <div class="about-head">
          <h1>Upcoming Events</h1>
          <span> </span>
    </div>
    <div class="index_row row">
           <?php query_posts('category_name=upcoming-events&showposts=4');
             if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 blog-pannel" style="padding:5px;">
            <a href="<?php the_permalink(); ?>" class="mask"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="img-responsive img-thumbnail zoom-img" style="width:100%;max-width:300px;"></a>
            <div style="padding:5px;" >
               <h4 style="text-align:center !important;"><?php the_title(); ?></h4>
            </div>
            </div>
         
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

         
