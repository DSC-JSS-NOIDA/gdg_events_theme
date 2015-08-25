<?php
/*
Template Name: Dev Blogs
*/
?>
<div style="background:url(<?php print(get_template_directory_uri()); ?>/gdg_assets/images/blog-back.png) no-repeat fixed;background-size: 100% 100%;padding-top:0px !important;">
	<div class="blog_page_title about-head">
          <h1>Blogs</h1>
          <span> </span>
    </div>
    <div class="clearfix"> </div> 
    <!--blog test-->
    <section id="blog" class="latest-blog-section section-padding">
      <div class="container">
        <div class="row">
             <?php query_posts('category_name=dev-blog&showposts=10');
             if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-sm-4" >
            <article class="blog-post-wrapper" style="background-color:white;">
              <div class="figure">    
                <div class="post-thumbnail blog_row">
                  <a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="img-responsive " alt="" style="width:100%;"></a>
                </div>
                  <i class="fa fa-file-photo-o"></i>
              </div><!-- /.figure -->
              <header class="entry-header">
                <div class="post-meta">
                  <span class="the-category"> 
                  </span>
                </div>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel=""><?php the_title(); ?></a></h2>
                <hr>
                <div class="entry-meta">
                  <ul class="list-inline">
                    <li>
                      <span class="the-author">
                        <a ><?php echo the_author_link(); ?></a> 
                      </span>
                    </li>
                    <li>
                      <span class="the-time">
                        <a ><?php echo get_the_date(); ?></a>
                      </span>
                    </li>
                    <li>
                      <span class="the-comments">
                        <a href="<?php comments_link(); ?>" title="comments"><?php echo get_comments_number(); ?> </a>
                      </span>
                    </li>
                  </ul>
                </div><!-- .entry-meta -->
              </header><!-- .entry-header -->
            </article>
          </div><!-- /.col-sm-4 -->

               <?php endwhile; ?>
                <?php else : ?>
                  <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <p class="error_message">Hey, Wait!! Eat, Code and Check Again after sometime. We are working on it.</p>
                  </div>
                <?php endif; ?>

        </div><!-- /.row -->
        <!-- <div class="blog-more text-center">
          <a href="#" class="btn btn-primary">View More</a>
        </div>
         -->
      </div><!-- /.container -->
    </section><!-- End Blog Section -->
    <!-- blog test ends -->

</div>