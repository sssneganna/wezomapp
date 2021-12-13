import $ from "jquery";

export const createSearchResults = () => {
  $(document).ready(function () {
    let $result = $(".js-search-results");
    let $text = $(".js-search-text");
    $("#search").on("keyup", function () {
      let search = $(this).val();
      if (search != "" && search.length > 2) {
        $.ajax({
          type: "POST",
          url: "/search",
          data: { search: search },
          success: function (res) {
            $result.html(res);
            $text.fadeOut();
          },
        });
      } else {
        $result.html("");
        $text.fadeIn();
      }
    });
  });
};
