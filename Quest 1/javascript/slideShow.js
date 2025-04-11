
  let slideIndex = 0;

  function showSlides() {
    const slides = document.getElementsByClassName("slide");

    // Hide all slides
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    // Move to next slide
    slideIndex++;
    if (slideIndex > slides.length) slideIndex = 1;

    // Show the current slide
    slides[slideIndex - 1].style.display = "block";

    // Auto-slide every 5 seconds
    setTimeout(showSlides, 5000);
  }

  document.addEventListener("DOMContentLoaded", () => {
    showSlides();
  });

  // Optional: Keep arrow functionality
  function plusSlides(n) {
    slideIndex += n - 1; // Adjust index before auto increment
    showSlides();
  }

  window.plusSlides = plusSlides;

