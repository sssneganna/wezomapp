import $ from "jquery";
import "./styles.scss";

export const createAccordion = () => {
  $("[data-collapse]").on("click", function (event) {
    event.preventDefault();
    let $this = $(this),
      blockId = $this.data("collapse");
    $this.toggleClass("active");
  });
};
