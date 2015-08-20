<?php
/*
Template Name: Events
*/
?>
<div class="container">
</span>
      <div class="about-head">
          <h1>UPCOMING EVENTS</h1>
          <span> </span>
        </div>
      <div class="gallery-grids">
      <section>
        <ul id="da-thumbs" class="da-thumbs">
          <?php query_posts('category_name=upcoming-events&showposts=10');
            if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>" class="b-animate-go  thickbox">
              <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="img-responsive"  alt="" />
              <div>
                <h5 class="blog_desc"><?php the_title(); ?></h5>
                <span class="blog_desc"><?php the_content( __('Continue Reading &rarr;', 'dw-timeline') ); ?></span>
              </div>
            </a>
          </li> 
           <?php endwhile; ?>
              <?php else : ?>
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <h1>Not Found</h1>
                </div>
              <?php endif; ?>        
        </ul>
        <div class="clearfix"> </div>
      </section>
      </div>
  </div>







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