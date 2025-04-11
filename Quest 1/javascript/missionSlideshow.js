let slideIndex = 1;

function showSlides(n) {
  const slides = document.querySelectorAll(".missionSlideshowContainer .eventSlide");

  if (n > slides.length) slideIndex = 1;
  else if (n < 1) slideIndex = slides.length;
  else slideIndex = n;

  slides.forEach(slide => slide.style.display = "none");
  slides[slideIndex - 1].style.display = "block";
}

function plusSlides(n) {
  showSlides(slideIndex + n);
}

document.addEventListener("DOMContentLoaded", () => {
  showSlides(slideIndex);
  window.plusSlides = plusSlides;

  // Auto-play slides
  setInterval(() => {
    plusSlides(1);
  }, 3000);
});
