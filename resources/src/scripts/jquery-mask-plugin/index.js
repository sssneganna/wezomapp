import "jquery-mask-plugin";
import $ from "jquery";

export const createPhoneMask = () => {
  $(".js-mask-phone").mask("+38 (099) 99-99-999");
};
