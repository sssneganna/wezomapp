export const showContent = () => {
  $(".js-show-content").on("click", "button", function (event) {
    event.preventDefault();
    $(event.delegateTarget).toggleClass("active");
  });
};
