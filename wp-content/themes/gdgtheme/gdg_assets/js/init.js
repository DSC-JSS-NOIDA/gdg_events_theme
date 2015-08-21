/*loading*/

        $(window).load(function() {
             $('body').addClass('loaded');
        });
/*--loading--*/
 new WOW().init();
/*Event Gallery*/
$(function() {
      
        $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

      });
/*--Event Gallery--*/
$(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });

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
/*dev blog*/
$(function(){
        $('.blog_desc').succinct({
            size: 100
        });
        $('.blog_heading').succinct({
            size: 20
        });
    });

var cw = $('.da-thumbs img').width();
$('.da-thumbs img').css({'height':cw+'px'});
var aw = $('.blog_row img').width();
$('.blog_row img').css({'height':aw+'px'});
var aw = $('.index_row img').width();
$('.index_row img').css({'height':aw+'px'});
$('input').addClass("form-control");