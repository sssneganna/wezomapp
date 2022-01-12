import "ion-rangeslider";
import "./index.scss";

export const createRangeSlider = () => {
  let $range = $(".js-range-slider");
  let $inputFrom = $(".js-min");
  let $inputTo = $(".js-max");
  let instance;
  let min = 410;
  let max = 6597;
  let from = 410;
  let to = 6597;

  $range.ionRangeSlider({
    skin: "round",
    type: "double",
    hide_from_to: true,
    hide_min_max: true,
    min: min,
    max: max,
    from: 410,
    to: 6597,
    onStart: updateInputs,
    onChange: updateInputs,
    onFinish: updateInputs,
  });
  instance = $range.data("ionRangeSlider");

  function updateInputs(data) {
    from = data.from;
    to = data.to;

    $inputFrom.prop("value", from);
    $inputTo.prop("value", to);
  }

  $inputFrom.on("change", function () {
    var val = $(this).prop("value");

    // validate
    if (val < min) {
      val = min;
    } else if (val > to) {
      val = to;
    }

    instance.update({
      from: val,
    });

    $(this).prop("value", val);
  });

  $inputTo.on("change", function () {
    var val = $(this).prop("value");

    // validate
    if (val < from) {
      val = from;
    } else if (val > max) {
      val = max;
    }

    instance.update({
      to: val,
    });

    $(this).prop("value", val);
  });
};
