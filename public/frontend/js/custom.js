$(document).ready(function() {
        var navpos = $('#mainnav').offset();
        console.log(navpos.top);
          $(window).bind('scroll', function() {
            if ($(window).scrollTop() > navpos.top) {
              $('#mainnav').addClass('fixed');
             }
             else {
               $('#mainnav').removeClass('fixed');
             }
          });
      });