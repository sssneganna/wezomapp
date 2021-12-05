export const openSearchMenu = () => {
  $(".js-search").on("click", function (event) {
    event.preventDefault();
    $(".search").toggleClass("active");
  });

  function closeSearchMenu() {
    $(".search").removeClass("active");
  }

  $(".modal-background").on("click", function (e) {
    closeSearchMenu();
  });
};
