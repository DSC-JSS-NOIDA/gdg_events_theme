<div class="container">
     
     <?php
       if(in_category( 'upcoming-events' ))
       {
        get_template_part('templates/upevents-post');
       } 
       
      ?>
      <?php
       if(in_category( 'dev-blog' ))
       {
        get_template_part('templates/devblogs-post');
       } 
       
      ?>
      <?php
       if(in_category( 'past-events' ))
       {
        get_template_part('templates/pastevents-post');
       } 
       
      ?>


