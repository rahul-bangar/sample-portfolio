// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Scroll reveal animations
ScrollReveal().reveal('.hero-content', { delay: 200, distance: '50px', origin: 'bottom' });
ScrollReveal().reveal('.about', { delay: 200, distance: '50px', origin: 'bottom' });
ScrollReveal().reveal('.portfolio', { delay: 200, distance: '50px', origin: 'bottom' });
ScrollReveal().reveal('.contact', { delay: 200, distance: '50px', origin: 'bottom' });

// Show/hide footer based on scroll position
window.addEventListener('scroll', function () {
    var scrollPosition = window.innerHeight + window.pageYOffset;
    var documentHeight = document.body.offsetHeight;
    var footer = document.querySelector('footer');

    if (scrollPosition >= documentHeight) {
        footer.classList.add('visible');
    } else {
        footer.classList.remove('visible');
    }
});

window.addEventListener('DOMContentLoaded', () => {
  const loaderProgress = document.querySelector('.loader-progress');

  // Update the loader progress from 0% to 100% over a duration of 2 seconds
  const updateLoaderProgress = () => {
      let progress = 0;
      const interval = setInterval(() => {
          if (progress >= 100) {
              clearInterval(interval);
              // Hide the loader once the progress reaches 100%
              loaderProgress.style.display = 'none';
              document.querySelector('.loader').style.display = 'none'; // Hide the loader element
          } else {
              progress++;
              loaderProgress.style.width = `${progress}%`;
          }
      }, 20); // Adjust the interval duration as needed
  };

  // Call the updateLoaderProgress function when the page finishes loading
  window.addEventListener('load', () => {
      updateLoaderProgress();
  });
});

  

