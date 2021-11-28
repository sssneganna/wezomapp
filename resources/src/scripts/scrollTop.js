export const scrollTop = () => {
  $(document).scroll(function () {
    let y = $(this).scrollTop();
    if (y > 800) {
      $(".js-scroll-top").fadeIn();
    } else {
      $(".js-scroll-top").fadeOut();
    }
  });
  $(".js-scroll-top").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 500);
    return false;
  });
};
