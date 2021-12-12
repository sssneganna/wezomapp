import $ from "jquery";

export const slickInitNavSlider = async () => {
  const $elementnav = $(".js-slider-nav");
  if ($elementnav.length) {
    await import("./loader.js");

    $(".js-slider-for").slick({
      infinite: true,
      vertical: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            vertical: false,
          },
        },
      ],
    });

    $(".js-slider-nav > li").on("click", function () {
      $(".slider").slick("slickGoTo", $(this).index());
    });
  }
};
