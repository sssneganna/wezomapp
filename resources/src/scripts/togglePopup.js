import browserizr, { isIPad, isMobile } from "@wezom/browserizr";

export const togglePopup = () => {
  function openPopup() {
    $(".js-active").on("click", "button", function (e) {
      e.preventDefault();
      $(e.delegateTarget).toggleClass("active");
    });
  }

  $(document).on("click", function (e) {
    let target = $(".js-active");

    if (!target.is(e.target) && target.has(e.target).length === 0) {
      target.removeClass("active");
    }
  });

  if (browserizr.detect(isIPad) || browserizr.detect(isMobile)) {
    console.log("Yeah! Thats is IPad device");
    openPopup();
  }
};
