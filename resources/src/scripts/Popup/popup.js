import "magnific-popup";
import "./popup.scss";
import $ from "jquery";

export const openPopup = () => {
  $("[data-popup]").each(function () {
    const $elem = $(this);
    const type = $elem.attr("data-type");
    if (type) {
      $elem.magnificPopup({
        type: type,
      });
    }
  });
};
