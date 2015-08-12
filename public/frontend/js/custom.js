$("#menu").click(function(){ 
          $(".nav-mobile").toggle();  
      });

$(".lifestyle").hover(function(){ 
          $(".submenu").toggle();  
      });

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

$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 800) {
        $('.toTop').fadeIn();
    } else {
        $('.toTop').fadeOut();
    }

});
 $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

  function initialize() {
              var secheltLoc = new google.maps.LatLng(-6.221308,106.762807);

              var myMapOptions = {
                 zoom: 15
                ,center: secheltLoc,
                scrollwheel: false
                ,mapTypeId: google.maps.MapTypeId.ROADMAP
              };
              var theMap = new google.maps.Map(document.getElementById("map"), myMapOptions);


              var marker = new google.maps.Marker({
                map: theMap,
                draggable: true,
                scrollwheel: false,
                position: new google.maps.LatLng(-6.221308,106.762807),
                visible: true
              });

              var boxText = document.createElement("div");
              boxText.style.cssText = " border: 1px solid #ffcc00; margin-top: 8px; background: #fff; padding: 5px;";
              boxText.innerHTML = "<div class='infobox-wrapper'><div id='infobox'><div id='content'><div id='siteNotice'></div><div id='firstHeading'> <h1>GLOBE TELEDIGITAL INDONESIA</h1></div><div id='logo-map'><img src='images/map-icon.png' /></div><div id='bodyContent'><div class='address-map'><p class='no-padding'><span>Address</span>: <img src='images/map-office.png' /></p></div>Jl. Diamond 1, No 70, Pos Pengumben <br />  Jakarta Barat, Indonesia<div id='phone-map'><p class='no-padding'><span>Phone No. </span>: +62 811 828 1188</p></div><div id='email-map'><p class='no-padding'><span>Email </span>: info@gtionline.id</p></div><div class='detail-map right'><p class='no-padding'><a href='#''>See Detail...</a></p></div></div></div></div></div>";

              var myOptions = {
                 content: boxText
                ,disableAutoPan: false
                ,maxWidth: 0
                ,pixelOffset: new google.maps.Size(-140, 0)
                ,zIndex: null
                ,boxStyle: { 
                  opacity: 1
                  ,width: "280px"
                 }
                ,closeBoxMargin: "10px 2px 2px 2px"
                ,infoBoxClearance: new google.maps.Size(1, 1)
                ,isHidden: false
                ,pane: "floatPane"
                ,enableEventPropagation: false
              };

              google.maps.event.addListener(marker, "click", function (e) {
                ib.open(theMap, this);
              });

              var ib = new InfoBox(myOptions);

              ib.open(theMap, marker);
            }