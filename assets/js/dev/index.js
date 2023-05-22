import { animate, scroll } from "motion";

global.motion = {
  animate,
  scroll
}

function detectDarkBg(){
  const contentWrapper = document.querySelector("main > .entry-content");
  if ( contentWrapper.querySelector(':first-child').classList.contains('has-contrast-background-color')) {
    document.body.classList.add('uncommon-content-has-background');
  }
}

function videoAutoPlayOnlyWhenIntersecting(){
  // check for video elements on the page
  const videos = document.querySelectorAll('video');
  if (videos.length > 0) {
    // create an IntersectionObserver instance
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // play the video
          entry.target.play();
        } else {
          // pause the video
          entry.target.pause();
        }
      });
    })
    // start observing
    videos.forEach((video) => {
      if (video.autoplay) {
        observer.observe(video);
      }
    })
  }
}


window.addEventListener("load", () => {
  detectDarkBg();
  videoAutoPlayOnlyWhenIntersecting();
})