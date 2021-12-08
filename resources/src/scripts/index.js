import "../styles/styles.scss";
import { openMenu } from "./openMenu.js";
import { scrollTop } from "./scrollTop.js";
import { togglePopup } from "./togglePopup.js";
import { openSearchMenu } from "./Search/openSearchMenu.js";
import { search } from "./Search/search.js";
import { showContent } from "./showContent.js";
import { InterObserver } from "./interObserver.js";
import { openPopup } from "./Popup/popup";

InterObserver();
openMenu();
scrollTop();
togglePopup();
openSearchMenu();
showContent();
search();
openPopup()