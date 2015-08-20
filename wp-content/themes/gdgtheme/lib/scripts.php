<?php
/**
 * Enqueue scripts and stylesheets
 */
function dw_timeline_scripts() {
  wp_enqueue_style('dw_timeline_main', get_template_directory_uri() . '/assets/css/main.css', false, '6c39f42987ae297a5a21e2bb35bf3402');
  wp_enqueue_style('custom_css', get_template_directory_uri() . '/gdg_assets/css/style.css', false, '6c39f42987ae297a5a21e2bb35bf3402');
  wp_enqueue_style('loading_css', get_template_directory_uri() . '/gdg_assets/css/loading.css', false, '6c39f42987ae297a5a21e2bb35bf3402');
  wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/gdg_assets/css/bootstrap.css', false, '6c39f42987ae297a5a21e2bb35bf3402');
   wp_enqueue_style('animate_css', get_template_directory_uri() . '/gdg_assets/css/animate.css', false, '6c39f42987ae297a5a21e2bb35bf3402');


  wp_enqueue_style( 'dw_timeline_style', get_stylesheet_uri(), false, 'c1a58eb4baaf24c3771085df3d54ff8d' );

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.7.0.min.js', false, null, false);
  wp_enqueue_script('jquery-jquery', get_template_directory_uri() . '/gdg_assets/js/jquery.min.js', false, null, false);
  wp_enqueue_script('nivo_lightbox', get_template_directory_uri() . '/assets/js/vendor/nivo-lightbox.min.js', false, null, false);
  wp_enqueue_script('infinitescroll', get_template_directory_uri() . '/assets/js/vendor/jquery.infinitescroll.min.js', false, '', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap-3.0.3.min.js', false, '', true);
  wp_enqueue_script('dw_timeline_scripts', get_template_directory_uri() . '/assets/js/scripts.js', false, '', true);
  
  //custom js for gdg static page
  wp_enqueue_script('gdg_easing', get_template_directory_uri() . '/gdg_assets/js/easing.js', false, '', true);
  wp_enqueue_script('gdg_move_top', get_template_directory_uri() . '/gdg_assets/js/move-top.js', false, '', true);
 wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/gdg_assets/js/wow.min.js', array(),null, false );
 wp_enqueue_script( 'jquery-chocolat', get_template_directory_uri() . '/gdg_assets/js/jquery.chocolat.js', false, '', true);
 wp_enqueue_script( 'jquery-hoverdir', get_template_directory_uri() . '/gdg_assets/js/jquery.hoverdir.js',false, '', true);
 wp_enqueue_script( 'jquery-modernizr', get_template_directory_uri() . '/gdg_assets/js/modernizr.custom.97074.js', false, '', true );
 wp_enqueue_script( 'js-init', get_template_directory_uri() . '/gdg_assets/js/init.js', false, '', true );
 wp_enqueue_script( 'truncate', get_template_directory_uri() . '/gdg_assets/js/truncate.min.js', false, '', true );

  
  
  //


  wp_localize_script( 'dw_timeline_scripts', 'dwtl', array(
    'template_directory_uri' => get_template_directory_uri()
  ) );
  wp_localize_script( 'dw_timeline_scripts', 'infinitescroll', array(
    'page' => __('page','dw-timeline'),
    'the_end' => __('the end','dw-timeline'),
  ) );
}
add_action('wp_enqueue_scripts', 'dw_timeline_scripts', 100);
  
register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'gdg' ),
) );

