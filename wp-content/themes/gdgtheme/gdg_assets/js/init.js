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
            size: 50
        });
    });

var cw = $('.da-thumbs img').width();
$('.da-thumbs img').css({'height':cw+'px'});
var aw = $('.blog_row img').width();
$('.blog_row img').css({'height':aw+'px'});
var aw = $('.index_row img').width();
$('.index_row img').css({'height':aw+'px'});
$('input').addClass("form-control");

$('.author_image img').addClass("img-circle");

/*Event Display page*/
$( ".qem .qem-icon:nth-child(1)" ).remove();
$( ".qem-small .start" ).appendTo( ".custom_event_time" );
$( ".qem-small .location" ).appendTo( ".custom_event_venue" );
$( ".qem-small .address" ).appendTo( ".custom_event_address" );
$( ".qem-small .organisation" ).appendTo( ".custom_event_organisation" );
$( ".qem-small p" ).appendTo( ".event_post_desc" );
$( ".qem-small .qem-register" ).appendTo( ".event_post_register" );
$( ".qem-small .qemright" ).appendTo( ".event_post_eventpic" );
$(".qem-register input").addClass("form-control");
$(".qem-register h2").replaceWith("<h4>Register for this event</h4>");
$(".c_month").html($( ".qem-calendar-small .nonday .month" ).text());
$(".c_day").html($( ".qem-calendar-small .day" ).text());
$(".c_year").html($( ".qem-calendar-small .nonday" ).clone().children().remove().end().text());

$('.qem-small h2').delay(4000).fadeOut();