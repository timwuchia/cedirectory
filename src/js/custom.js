(function ($) {
  $(document).ready(function () {
    $(".single-image-slider-wrapper").slick({
      arrows: true,
      dots: false,
    });
    $(".top-banner").slick({
      arrows: true,
      dots: true,
    });
    $(".product-cat-slider").slick({
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
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            arrows: false,
          },
        },
      ],
    });

    // single product slider
    $("#single-product-slider").slick({
      // autoplay: true,
      speed: 1000,
      asNavFor: "#thumbnail-slider",
      focusOnSelect: true,
      arrows: false,
    });
    $("#thumbnail-slider").slick({
      slidesToShow: 3,
      speed: 1000,
      asNavFor: "#single-product-slider",
      focusOnSelect: true,
      arrows: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });

    // post filter query update

    // initialize select value by params
    var postFilterURL = window.location.href;

    function replaceUrlParam(url, paramName, paramValue) {
      if (paramValue == null) {
        paramValue = "";
      }
      var pattern = new RegExp("\\b(" + paramName + "=).*?(&|#|$)");
      if (url.search(pattern) >= 0) {
        return url.replace(pattern, "$1" + paramValue + "$2");
      }
      url = url.replace(/[?#]$/, "");
      return (
        url + (url.indexOf("?") > 0 ? "&" : "?") + paramName + "=" + paramValue
      );
    }

    $(".sort-options").on("change", function (e) {
      const valueSelected = e.target.value;
      postFilterURL;
      // var urlParams = new URLSearchParams(window.location.search);
      postFilterURL = replaceUrlParam(postFilterURL, "sortby", valueSelected);
    });
    $(".order-options").on("change", function (e) {
      const valueSelected = e.target.value;
      // var urlParams = new URLSearchParams(window.location.search);
      postFilterURL = replaceUrlParam(postFilterURL, "orderby", valueSelected);
    });
    $(".country-options").on("change", function (e) {
      const valueSelected = e.target.value;
      // var urlParams = new URLSearchParams(window.location.search);
      postFilterURL = replaceUrlParam(postFilterURL, "country", valueSelected);
    });
    $(".post-filters").submit(function (e) {
      e.preventDefault();
      location.replace(replaceUrlParam(postFilterURL));
    });
  });
})(jQuery);
