<!DOCTYPE HTML>
<html>
  <head>
    <title>GDG JSS Noida</title>
    <!-- <link href="static/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
   
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ 
window.scrollTo(0,1); } </script>
    </script>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script>
      $(function() {
        var pull    = $('#pull');
          menu    = $('nav ul');
          menuHeight  = menu.height();
        $(pull).on('click', function(e) {
          e.preventDefault();
          menu.slideToggle();
        });
        $(window).resize(function(){
              var w = $(window).width();
              if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
              }
          });
      });
    </script>
  </head>
  <body>

