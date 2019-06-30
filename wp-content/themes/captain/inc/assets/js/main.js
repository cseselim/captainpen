

(function($){

    $(document).ready(function() {
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 3,
            nav: true,
            loop: true,
            margin: 20,
            dots: false
          }
        }
      })
    })

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
        $('.navbar-brand a img').css('width','70');
      } else {
        $('.navbar-brand a img').css('width','');
      }
    }


})(jQuery);

