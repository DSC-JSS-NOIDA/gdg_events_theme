<?php
/*
Template Name: Events
*/
?>
<?php get_template_part('templates/header'); ?>
<h1>Hello EVENTS!!</h1>
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