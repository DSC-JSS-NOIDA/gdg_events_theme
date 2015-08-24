<?php
/*
Template Name: Events
*/
?>
<div class="container">
      <div class="gallery-grids">
      <div class="container">
        <div class="content-container">
                <div class="about-head">
                  <h1>UPCOMING EVENTS</h1>
                  <span> </span>
                </div>
            <div id="portfolio-content" class="center-text">
              <div class="portfolio-page" id="page-1">
              <?php query_posts('category_name=upcoming-events&showposts=10');
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="portfolio-group">
                  <div class="portfolio-item">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="image 1">
                    <div class="detail event_list_detail">
                       <div class="blog_heading"><h4><b><?php the_title(); ?></b></h4></div>
                      <div class="blog_desc"><?php the_content( __('Continue Reading &rarr;', 'dw-timeline') ); ?></div>   
                      <a href="<?php the_permalink();?>" align="center"><div><button class="btn" >View</button></div></a>
                    </div>
                    </div>
                         
                </div>
                <?php endwhile; ?>
                  <?php else : ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                      <h1>Not Found</h1>
                    </div>
                  <?php endif; ?>
              </div>
            </div>
          </div>


        <div class="content-container">
                <div class="about-head">
                  <h1>Past Events</h1>
                  <span> </span>
                </div>
            <div id="portfolio-content" class="center-text">
              <div class="portfolio-page" id="page-1">
              <?php query_posts('category_name=past-events&showposts=10');
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="portfolio-group">
                  <div class="portfolio-item">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="image 1">
                    <div class="detail event_list_detail">
                       <div class="blog_heading"><h4><b><?php the_title(); ?></b></h4></div>
                      <div class="blog_desc"><?php the_content( __('Continue Reading &rarr;', 'dw-timeline') ); ?></div>
                      <a href="<?php the_permalink();?>" align="center"><div><button class="btn view_btn">View</button></div></a>
                    </div>
                  </div>        
                </div>
                <?php endwhile; ?>
                  <?php else : ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                      <h1>Not Found</h1>
                    </div>
                  <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>


