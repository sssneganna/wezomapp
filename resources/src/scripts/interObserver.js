import { slickInit } from "./slick-carousel/index.js";
export const InterObserver = () => {
  let options = {
    rootMargin: "50px",
  };
  let callback = function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        slickInit();
        console.log("slider");
      }
    });
  };
  let observer = new IntersectionObserver(callback, options);
  const target = document.querySelector(".js-slider");
  observer.observe(target);
};

/*let callbackImg = function (entries, self) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.src = entry.target.getAttribute("data-src");
        self.unobserve(entry.target);
      }
    });
  };
  let observerImg = new IntersectionObserver(callbackImg);
  const imgs = document.querySelectorAll("[data-src]");
  imgs.forEach((img) => {
    observerImg.observe(img);
  });*/
