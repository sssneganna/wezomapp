export const createFilter = () => {
  if ($(".js-filter").find(".js-filter-value is-hide")) {
    $(".js-filter").on("click", ".js-filter-btn", function () {
      $(this)
        .closest(".js-filter")
        .find('.js-filter-value[data-hide="true"]')
        .toggleClass("is-hide");
      $(this).toggleClass("open");

      if ($(this).hasClass("open")) {
        $(this).html("Скрыть");
      } else {
        $(this).html("+ показать все");
      }
    });
  }
};
