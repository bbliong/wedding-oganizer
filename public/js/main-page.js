

$(document).ready(function() {
    var $item = $('.carousel .item'); 
    var $wHeight = $(window).height();
    $item.eq(0).addClass('active');
    $item.height($wHeight); 
    $item.addClass('full-screen');

    $('.carousel img').each(function() {
      var $src = $(this).attr('src');
      var $color = $(this).attr('data-color');
      $(this).parent().css({
        'background-image' : 'url(' + $src + ')',
        'background-color' : $color
      });
      $(this).remove();
    });


        var owl = $("#owl-demo");
        owl.owlCarousel({
          loop:true,
          responsiveClass:true,
           autoplay:true,
          autoplayTimeout:1000,
          autoplayHoverPause:true,
   
          responsive:{
              0:{
                  items:1,
                  nav:true
              },
              600:{
                  items:3,
                  nav:false
              },
              800:{
                  items:4,
                  nav:false
              },
              1000:{
                  items:5,
                  nav:false
              }    
          }
         })

      $(window).on('resize', function (){
        $wHeight = $(window).height();
        $item.height($wHeight);
      });
      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
           $('.navbar').css({"background-color": "#FFF", "color": "#4372B2", "box-shadow" : "1px 1px 20px #222"});
             $('.navbar-nav>li>a').css("color", "#4372B2");
        } else {
            $('.navbar').css({"background-color" : "transparent","box-shadow" : "none" }); 
            $('.navbar-nav>li>a').css("color", "#fff");
          }
      });
  });

