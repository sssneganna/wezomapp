import "../styles/styles.scss";
import { openMenu } from "./openMenu.js";
import { scrollTop } from "./scrollTop.js";
import { togglePopup } from "./togglePopup.js";
import { openSearchMenu } from "./Search/openSearchMenu.js";
import { createSearchResults } from "./Search/createSearchResults.js";
import { showContent } from "./showContent.js";
//import { InterObserver } from "./interObserver.js";
import { openPopup } from "./Popup/popup";
import { slickInitNavSlider } from "./slick-carousel/slickInitNavslider.js";
import { createAccordion } from "./Accordion/index.js";
import { createPhoneMask } from "./jquery-mask-plugin/index.js";

slickInitNavSlider();
createAccordion();
createPhoneMask();
//InterObserver();
openMenu();
scrollTop();
togglePopup();
openSearchMenu();
showContent();
createSearchResults();
openPopup();
