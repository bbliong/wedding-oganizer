

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

    $(window).on('resize', function (){
      $wHeight = $(window).height();
      $item.height($wHeight);
    });

    $('.carousel').carousel({
      interval: 6000,
      pause: "false"
    });

      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
           $('.navbar').css({"background-color": "rgba(255,255,255,.9)", "color": "#4372B2"});
             $('.navbar-nav>li>a').css("color", "#4372B2");
        } else {
            $('.navbar').css("background-color", "transparent"); 
            $('.navbar-nav>li>a').css("color", "#fff");
          }
      });
    });
  

  $(document).ready(function() {
   
    var owl = $("#owl-demo");
    owl.owlCarousel({
    loop:true,
    responsiveClass:true,
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
   
  });
