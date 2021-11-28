export const openMenu = () => {
  function openWindow() {
    $("body").toggleClass("nav_is_visible");
  }

  function closeWindow() {
    $("body").removeClass("nav_is_visible");
  }

  $(".js-toggle-open").on("click", function (event) {
    event.preventDefault();
    openWindow();
  });

  $(".modal-background").on("click", function (e) {
    closeWindow();
  });
};
