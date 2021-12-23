import $ from "jquery";

export const createAccordion = () => {
  $("[data-collapse]").on("click", function (event) {
    event.preventDefault();
    let $this = $(this),
      blockId = $this.data("collapse");
    $this.toggleClass("is-active");
  });
};
