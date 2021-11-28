export const openSearchMenu = () => {
  $(".js-search").on("click", function (event) {
    event.preventDefault();
    $(".form").toggleClass("active");
  });

  function closeSearchMenu() {
    $(".form").removeClass("active");
  }

  $(".modal-background").on("click", function (e) {
    closeSearchMenu();
  });
};
