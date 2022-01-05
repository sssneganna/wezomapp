import "../styles/styles.scss";
import { openMenu } from "./openMenu.js";
import { scrollTop } from "./scrollTop.js";
import { togglePopup } from "./togglePopup.js";
import { openSearchMenu } from "./Search/openSearchMenu.js";
import { createSearchResults } from "./Search/createSearchResults.js";
import { showContent } from "./showContent.js";
//import { InterObserver } from "./interObserver.js";
import { openPopup } from "./Popup/popup";

import { createAccordion } from "./Accordion/index.js";
import { createPhoneMask } from "./jquery-mask-plugin/index.js";
import { changeQuanity } from "./input quantity/changeQuantity.js";
import { createTabs } from "./Tabs/tabs.js";
import { filterContentInit } from "./filter content/filterContentInit.js";
import { slickInit } from "./slick-carousel/index.js";
import { createCircularProgress } from "./circular progress/createCircularProgress.js";

createCircularProgress();
slickInit();
filterContentInit();
createTabs();
changeQuanity();

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
