export const createFilter = () => {
  if ($(".filter__values").find(".filter__value is-hide")) {
    $(".filter__values").on("click", ".filter__button-show", function () {
      $(this)
        .closest(".filter__values")
        .find('.filter__value[data-hide="true"]')
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
