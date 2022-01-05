require("jquery-circle-progress");
var $ = require("jquery");

export const createCircularProgress = () => {
  let progressBarOptions = {
    startAngle: -1.55,
    size: 144,
    value: 0.95,
    thickness: 12,
    fill: {
      color: "#E77E42",
    },
  };

  $(".circle")
    .circleProgress(progressBarOptions)
    .on("circle-animation-progress", function (event, progress, stepValue) {});
};
