import $ from "jquery";

export const slickInitNavSlider = async () => {
  const $element = $(".js-slider-for");
  if ($element.length) {
    await import("./loader.js");

    $element.slick({
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
            dots: true,
          },
        },
      ],
    });

    $(".js-slider-nav > li").click(function () {
      $(".js-slider-for").slick("slickGoTo", $(this).index());
    });
  }
};
