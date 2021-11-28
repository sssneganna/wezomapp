import $ from "jquery";

export const slickInit = async () => {
  const $element = $(".js-slider");
  if ($element.length) {
    await import("./loader.js");
    $element.slick({
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
            autoplay: true,
            autoplaySpeed: 2000,

            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
      ],
    });

    $(".js-btn-next").click(function () {
      $element.slick("slickNext");
    });

    $(".js-btn-prev").click(function () {
      $element.slick("slickPrev");
    });
  }
};
