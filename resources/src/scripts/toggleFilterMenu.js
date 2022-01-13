import $ from "jquery";

export const toggleFilterMenu = () => {
  $(".js-active-trigger").on("click", function (event) {
    event.preventDefault();

    $(".js-active-content").toggleClass("is-active");
  });

  function closeFilterMenu() {
    $(".js-active-content").removeClass("is-active");
  }

  $(".modal-background").on("click", function () {
    closeFilterMenu();
  });
};
