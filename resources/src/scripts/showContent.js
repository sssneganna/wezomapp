export const showContent = () => {
  $(".js-show-content").on("click", "button", function (event) {
    event.preventDefault();
    $(event.delegateTarget).toggleClass("active");
    $(event.target).toggleClass("open");
    if ($(this).hasClass("open")) {
      $(this).html("Скрыть");
    } else {
      $(this).html("Показать все");
    }
  });
};
