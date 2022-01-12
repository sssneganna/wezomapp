import $ from "jquery";

/*export const createTabs = () => {
  $(".js-tab").on("click", ".js-tab-trigger:not(.is-active)", function () {
    $(this)
      .addClass("is-active")
      .siblings()
      .removeClass("is-active")
      .closest(".js-tab")
      .find(".js-tab-content")
      .removeClass("is-active")
      .eq($(this).index())
      .addClass("is-active");
  });
};*/

export const createTabs = () => {
  $(".js-tab-trigger").on("click", function () {
    let id = $(this).attr("data-tab"),
      content = $('.js-tab-content[data-tab="' + id + '"]');

    const $elem = $(this);
    const type = $elem.attr("data-type-tab");
    if (type == "multi") {
      $(this).closest(".js-tab").find(".is-active").removeClass("is-active");
      $elem.addClass("is-active");

      $(this)
        .closest(".js-tab")
        .find(".js-tab-content is-active")
        .removeClass("is-active");
      content.addClass("is-active");
    }
    if (type == "single") {
      $(this).closest(".js-tab");
      $elem.toggleClass("is-active");

      $(this).closest(".js-tab");
      content.toggleClass("is-active");
    }
  });
};
