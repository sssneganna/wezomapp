import "../styles/styles.scss";
import { openMenu } from "./openMenu.js";
import { scrollTop } from "./scrollTop.js";
import { togglePopup } from "./togglePopup.js";
import { openSearchMenu } from "./openSearchMenu.js";
import { showContent } from "./showContent.js";
import { InterObserver } from "./interObserver.js";

InterObserver();
openMenu();
scrollTop();
togglePopup();
openSearchMenu();
showContent();
