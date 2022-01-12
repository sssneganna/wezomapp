import $ from "jquery";

export const slickInit = async () => {
  const $elImport = $(".js-import");
  if ($elImport.length) {
    await import("./loader.js");
    $(".js-slider").slick({
      slidesToShow: 5,
      slidesToScroll: 5,
      arrows: false,
      dots: true,
      infinite: true,
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          },
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 790,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
      ],
    });

    $(".js-btn-next").click(function () {
      $(".js-slider").slick("slickNext");
    });

    $(".js-btn-prev").click(function () {
      $(".js-slider").slick("slickPrev");
    });

    $(".js-slider-for").slick({
      infinite: true,
      vertical: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      observer: true,
      observeParents: true,
      dots: false,

      responsive: [
        {
          breakpoint: 769,
          settings: {
            vertical: false,
            dots: true,
          },
        },
      ],
    });

    $(".js-slider-nav > li").click(function () {
      $(".js-slider-for").slick("slickGoTo", $(this).index());
    });

    $(".js-slider-product").slick({
      swipeToSlide: true,
      slidesToShow: 6,
      slidesToScroll: 3,
      arrows: false,
      dots: false,
      responsive: [
        {
          breakpoint: 1080,
          settings: {
            dots: true,
            slidesToShow: 4,
            slidesToScroll: 4,
          },
        },
        {
          breakpoint: 769,
          settings: {
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 568,
          settings: {
            dots: true,
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
      ],
    });
  }
};
