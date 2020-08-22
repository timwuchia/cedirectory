(function ($) {
  $(document).ready(function () {
    // initialize min height
    $site_header_height = $("header").height();
    $site_footer_height = $("footer").height();
    $site_footer_above_height = $(".footer-above").height();
    init_primary_minheight =
      "calc(100vh - " +
      $site_header_height +
      "px - " +
      $site_footer_height +
      "px - " +
      $site_footer_above_height +
      "px)";
    console.log(init_primary_minheight);
    $("#primary").css("min-height", init_primary_minheight);

    $(".single-image-slider-wrapper").slick({
      arrows: true,
      dots: false,
    });
    $(".top-banner").slick({
      arrows: true,
      dots: false,
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

    $(".orderby-options").on("change", function (e) {
      const valueSelected = e.target.value;
      postFilterURL;
      // var urlParams = new URLSearchParams(window.location.search);
      postFilterURL = replaceUrlParam(postFilterURL, "orderby", valueSelected);
    });
    $(".order-options").on("change", function (e) {
      const valueSelected = e.target.value;
      // var urlParams = new URLSearchParams(window.location.search);
      postFilterURL = replaceUrlParam(postFilterURL, "order", valueSelected);
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
