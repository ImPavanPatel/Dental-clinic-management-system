let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};

window.onscroll = () => {
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
};

$(document).ready(function() {
  $('.slider-class').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    dots: true,
    infinite: true,
    speed: 500,
    cssEase: 'ease-in-out',
    slidesToShow: 1,
    slidesToScroll: 1,
    appendArrows: '.slick-slider', // Append arrows inside the slider container
    prevArrow: '<button type="button" class="slick-prev">Previous</button>',
    nextArrow: '<button type="button" class="slick-next">Next</button>',
  });

  // Remove any unwanted arrow elements outside the slider
  $('button.slick-prev').not('.slick-slider button.slick-prev').remove();
  $('button.slick-next').not('.slick-slider button.slick-next').remove();
});

//counter animation
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");
  const counterContainer = document.querySelector(".counter-container"); // Updated to match your HTML structure

  if (!counterContainer) {
    console.error("No element with class 'counter-container' found in the DOM.");
    return;
  }

  const animateCounters = () => {
    counters.forEach((counter) => {
      const target = +counter.getAttribute("data-target");
      const increment = target / 100; // Adjust for smoother animation

      let current = 0;

      const updateCounter = () => {
        if (current < target) {
          current = Math.ceil(current + increment);
          counter.textContent = current;
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target; // Ensure it ends at the target value
        }
      };

      updateCounter();
    });
  };

  // IntersectionObserver to trigger animation when the container comes into view
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounters();
          observer.disconnect(); // Stop observing once animation starts
        }
      });
    },
    { threshold: 0.5 }
  );

  // Observe the counter-container
  observer.observe(counterContainer);
});