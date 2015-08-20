<!DOCTYPE HTML>
<html>
  <head>
    <title>GDG JSS Noida</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ 
window.scrollTo(0,1); } </script>
    </script>
    
  </head>
  <body>    
      <div id="home" class="header wow bounceInDown" data-wow-delay="0.4s">
          <div class="top-header">
            <div class="container">
            <div class="logo">
              <img src="<?php print(get_template_directory_uri()); ?>/gdg_assets/images/logo.png" title="jss" height=30 width=150 />
            </div>
             <nav class="top-nav"><br>
              <ul class="top-nav">
                <?php
          get_template_part('lib/wp_bootstrap_navwalker');
              wp_nav_menu( array(
              'menu'         => 'primary',
              'theme_location'  => 'primary',
              'depth'       => 2,
              'container'     => 'div',
              'menu_class'    => 'nav navbar-nav',
              'fallback_cb'   => 'wp_bootstrap_navwalker::fallback',
              'walker'      => new wp_bootstrap_navwalker())
            );
            ?>
              </ul>
              <a href="#" id="pull"><img src="<?php print(get_template_directory_uri()); ?>/gdg_assets/images/menu-icon.png" title="menu" /></a>
            </nav>
            <div class="clearfix"> </div>
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			  <?php dynamic_sidebar( 'sidebar-1' ); ?>
			  <?php endif; ?>
          </div>
        </div>
      </div>

