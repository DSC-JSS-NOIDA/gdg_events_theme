<h1>This is developer Blogs</h1>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
          <header>
            <div class="about-head">
               <h3><b><?php the_title(); ?></b></h3>
               <span> </span>
            </div> 
          </header>
           <div>
             <div class="dev_blog_details"><?php the_content(); ?></div>
           </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
           <div class="author_details">
               <div>
                 <a><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="img-responsive img-thumbnail" style="width:100%;"></a>
               </div>
                <header>
                  <div class="about-head">
                     <h3><b>Author</b></h3>
                     <span> </span>
                  </div> 
                </header>
              <div class="author_image" align="center">
              <?php if(is_single()) echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
              <p><?php the_author(); ?> </p>
              <p> <?php the_author_description(); ?> </p>
              <p><span class="entry-date"><?php _e('', 'dw-timeline'); ?> <a href="<?php the_permalink(); ?>"><time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time></a></span></p>
              </div>
           </div>
           <?php comments_template('/templates/comments.php'); ?>
        </div>

      </div>
      <?php get_template_part('templates/entry-meta'); ?>
    </div>
  </article>   
<?php endwhile; ?>
