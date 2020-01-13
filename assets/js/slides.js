

const slideArea = document.querySelector(".hero-slides");
const slides = slideArea.querySelectorAll(".hero-slides div");

let currentSlide = 0;
let z = 1;

slideArea.addEventListener("click", function() {
  currentSlide = currentSlide + 1;

  if (currentSlide > slides.length - 1) {
    currentSlide = 0;
  }

  z = z + 1;

  //   remove animation 
  slides.forEach(function(item) {
    item.style.animation = ""; //nix
  });


  slides[currentSlide].style.zIndex = z;
  //   ADDING ADIMATION/
  slides[currentSlide].style.animation = "fade 0.5s";
});
// Hover Transition mit Random transform-translate
slideArea.addEventListener("mouseover", function() {
  slides.forEach(item => {
    const x = 60 * Math.random() - 20;
    const y = 60 * Math.random() - 20;
    item.style.transform = `translate(${x}px, ${y}px)`; 
  });
});
slideArea.addEventListener("mouseout", function() {
  slides.forEach(item => {
    item.style.transform = "";
  });
});
