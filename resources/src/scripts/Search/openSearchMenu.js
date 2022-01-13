export const openSearchMenu = () => {
  $(".js-is-active").on("click", function (e) {
    e.preventDefault();
    $(".js-is-active-content").toggleClass("is-active");
  });
};
