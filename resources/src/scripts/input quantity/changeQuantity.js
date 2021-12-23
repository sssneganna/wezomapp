import $ from "jquery";

export const changeQuanity = () => {
  $("body").on("click", ".number-minus, .number-plus", function () {
    let $row = $(this).closest(".quantity");
    let $input = $row.find(".quantity__input");
    let step = $row.data("step");
    let val = parseFloat($input.val());

    if ($(this).hasClass("number-minus")) {
      val -= step;
    } else {
      val += step;
    }

    $input.val(val);
    $input.change();
    return false;
  });

  $("body").on("change", ".quantity__input", function () {
    let $input = $(this);
    let $row = $input.closest(".quantity");
    let min = parseInt($row.data("min"));
    let max = parseInt($row.data("max"));
    let val = $input.val();

    if (min && val < min) {
      val = min;
    } else if (max && val > max) {
      val = max;
    }

    $input.val(val);
  });
};
