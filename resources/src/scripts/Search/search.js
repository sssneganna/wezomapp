import $ from "jquery";

export const search = () => {
  $(document).ready(function () {
    let $result = $(".search__box-results");

    $("#search").on("keyup", function () {
      let search = $(this).val();
      if (search != "" && search.length > 2) {
        console.log(search);
        $.ajax({
          type: "POST",
          url: "/search",
        });
      }
    });
  });
};
