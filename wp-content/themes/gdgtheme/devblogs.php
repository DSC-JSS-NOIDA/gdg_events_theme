<?php
/*
Template Name: Dev Blogs
*/
?>
<div style="background:url(<?php print(get_template_directory_uri()); ?>/gdg_assets/images/blog-back.png) no-repeat fixed;background-size: 100% 100%;">
<div class="container">
	<div class="about-head">
          <h1>Blogs</h1>
          <span> </span>
    </div>
    <div class="blog_row row">
           <?php query_posts('category_name=dev-blog&showposts=10');
             if (have_posts()) : while (have_posts()) : the_post(); ?>
		    	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 blog-pannel" style="padding:5px;">
		    		<div style="background-color:white;">
		    		<a href="<?php the_permalink(); ?>" class="mask"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="img-responsive img-thumbnail zoom-img" style="width:100%;"></a>
		    		<div style="padding:5px;" >
		    		   <h3 class="blog_heading" style="text-align:center !important;"><?php the_title(); ?></h3>
		    		   <div class="blog_desc"><p style="text-align:center !important;padding:2px;"><?php the_content( __('Continue Reading &rarr;', 'dw-timeline') ); ?></p></div>
		    		   <a href="<?php the_permalink(); ?>"><button>Show More</button></a>
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
    <div class="clearfix"> </div> 
</div>
</div>