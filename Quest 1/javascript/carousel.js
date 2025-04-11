
  const track = document.querySelector('.carousel-track');
  const slides = Array.from(track.children);
  const visibleSlides = 4;
  let index = 0;

  // Clone first few slides and append
  for (let i = 0; i < visibleSlides; i++) {
    const clone = slides[i].cloneNode(true);
    track.appendChild(clone);
  }

  const allSlides = Array.from(track.children);
  const slideWidth = slides[0].getBoundingClientRect().width;

  function updateCarousel() {
    index++;

    track.style.transition = 'transform 0.5s ease-in-out';
    track.style.transform = `translateX(-${index * slideWidth}px)`;

    // Highlight center
    allSlides.forEach(slide => slide.classList.remove('highlight'));
    const centerIndex = index + Math.floor(visibleSlides / 2);
    if (allSlides[centerIndex]) {
      allSlides[centerIndex].classList.add('highlight');
    }

    // When we reach the end of the original slides
    if (index >= slides.length) {
      setTimeout(() => {
        track.style.transition = 'none';
        track.style.transform = `translateX(0px)`;
        index = 0;
      }, 510); // wait for transition to finish
    }
  }

  setInterval(updateCarousel, 2000);

