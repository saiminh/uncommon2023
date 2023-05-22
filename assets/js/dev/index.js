import { animate, scroll } from "motion";

global.motion = {
  animate,
  scroll
}

window.addEventListener("load", () => {
  const contentWrapper = document.querySelector("main > .entry-content");
  if ( contentWrapper.querySelector(':first-child').classList.contains('has-contrast-background-color')) {
    document.body.classList.add('uncommon-content-has-background');
  }
})