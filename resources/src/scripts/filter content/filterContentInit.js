export const filterContentInit = () => {
  let start = 0,
    comments = $(".js-comment");

  $(".js-btn-showmore").on("click", showPart).click();

  function showPart() {
    comments.slice(start, (start += 4)).show();
    $(this)[comments.filter(":hidden").length ? "show" : "hide"]();
  }
};
