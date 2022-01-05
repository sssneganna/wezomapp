import $ from "jquery";

export const createTabs = () => {
  $(".js-tab").on("click", ".js-tab-trigger:not(.is-active)", function () {
    $(this)
      .addClass("is-active")
      .siblings()
      .removeClass("is-active")
      .closest(".js-tab")
      .find(".js-tab-content")
      .removeClass("is-active")
      .eq($(this).index())
      .addClass("is-active");
  });
};

/*export const createTabs = () => {
  $(".js-tab").on("click", ".js-tab-trigger", function (e) {
 let id = $(this).attr("data-tab"),
   content = $('.js-tab-content[data-tab="' + id + '"]');
 let target = $(this);

 $(e.delegateTarget).find(".is-active").removeClass("is-active");
 target.addClass("is-active");

 $(".js-tab-content.is-active").removeClass("is-active");
 content.addClass("is-active");
});
};*/
