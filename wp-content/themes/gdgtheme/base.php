<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
  <?php do_action('get_header'); ?>
  <?php get_template_part('templates/header'); ?>
    <div class="content row">
      
        <?php include dw_timeline_template_path(); ?>
 
    </div>
  <?php get_template_part('templates/footer'); ?>

</body>
</html>
