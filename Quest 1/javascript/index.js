const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');
const closeBtn = document.getElementById('closeBtn');

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});
closeBtn.addEventListener('click', () => {
  navLinks.classList.remove('active');
});

const header = document.querySelector('.header');

window.addEventListener('scroll', () => {
  if (window.scrollY > 20) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});