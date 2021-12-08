import $ from "jquery";

export const search = () => {
  $(document).ready(function () {
    let $result = $(".js-search-results");

    $("#search").on("keyup", function () {
      let search = $(this).val();
      if (search != "" && search.length > 2) {
        $.ajax({
          type: "POST",
          url: "/search",
          data: { search: search },
          success: function (res) {
            $result.html(res);
          },
        });
      } else {
        $result.html("");
      }
    });
  });
};
