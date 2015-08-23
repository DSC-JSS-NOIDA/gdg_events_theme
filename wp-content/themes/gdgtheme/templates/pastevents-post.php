<div class="container">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <div class="about-head">
         <h3><b><?php the_title(); ?></b></h3>
         <span> </span>
      </div> 
    </header>
    <div class="container upevent_post_field">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
             <?php the_content(); ?>
             <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'dw-timeline'), 'after' => '</p></nav>')); ?>
          </div>
           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 author_details">
            <?php if(is_single()) echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
            <span class="byline author vcard">
              <?php echo __('By', 'dw-timeline'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a>
            </span>
            <p><?php echo get_the_date(); ?></p>
           </div>
      </div>
      </div>
     </article>
      <?php comments_template('/templates/comments.php'); ?>
      <?php endwhile; ?>
</div>