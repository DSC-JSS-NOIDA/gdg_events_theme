<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="container blog_post_container">
      <div class="row">
        <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 blog_post_body">
          <header>
            <div class="about-head">
               <h3 style="text-transform:uppercase;"><b><?php the_title(); ?></b></h3>
               <span> </span>
            </div> 
          </header>
           <div>
             <div class="dev_blog_details"><?php the_content(); ?></div>
           </div>
           <?php get_template_part('templates/entry-meta'); ?>

           <?php comments_template('/templates/comments.php'); ?>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 blog_post_body" align="center" >
           <div class="author_details" >
                <header>
                  <div class="about-head">
                     <h3><b>Author</b></h3>
                     <span> </span>
                  </div> 
                </header>
              <div class="author_image" align="center">
              <?php if(is_single()) echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
              <p><?php the_author_link(); ?> </p>
              <hr style="background-color:">
              <p><?php the_author_description(); ?> </p>
              </div>
              <div class="event_calendar">
                  <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                  <?php dynamic_sidebar( 'sidebar-2' ); ?>
                  <?php endif; ?>
              </div>
           </div>
        </div>

      </div>
    </div>
  </article>   
<?php endwhile; ?>
