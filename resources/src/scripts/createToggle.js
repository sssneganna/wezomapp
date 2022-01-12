import $ from "jquery";

export const createToggle = () => {
  $(".js-is-active").on("click", function (e) {
    e.preventDefault();
    $(".catalog-main__sidebar").toggleClass("is-active");
  });
};
