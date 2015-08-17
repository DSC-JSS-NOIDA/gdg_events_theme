<div class="container">
<!---form-->
   <h1 class="entry-title"> Register for <?php the_title(); ?></h1>
    <div class="row">
        <form role="form">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Your Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Your Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Branch</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
        <div class="col-lg-5 col-md-push-1">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! Message sent.</strong>
                </div>
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Please check all page inputs.</strong>
                </div>
            </div>
        </div>
    </div>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
     
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'dw-timeline'), 'after' => '</p></nav>')); ?>
    </div>
    <footer>
      <?php
        $tags_list = get_the_tag_list( '', __( ', ', 'dw-timeline' ) );
        if ( $tags_list ) :
      ?>
        <div class="entry-tags">
          <span class="tags-title"><?php _e('Tags: ','dw-timeline') ?></span>
          <span class="tags-links">
          <?php printf( __( '%1$s', 'dw-timeline' ), $tags_list ); ?>
        </span>
        </div>
      <?php endif; ?>
    </footer>
  </article>
   <?php get_template_part('templates/entry-meta'); ?>
  <?php comments_template('/templates/comments.php'); ?>
<?php endwhile; ?>


</div>
