(function($) {
    $(document).ready(function(){
        $('.single-image-slider-wrapper').slick({
            arrows: true,
            dots: false
        });
        $('.top-banner').slick({
            arrows: true,
            dots: true
        });
        $('.product-cat-slider').slick({
            dots: false,
            arrows: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 2,
                }
              },
              {
                breakpoint: 576,
                settings: {
                  slidesToShow: 1,
                  arrows: false
                }
              }
            ]
          });
    });
}(jQuery));