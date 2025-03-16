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

document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");

  const animateCounters = () => {
    counters.forEach(counter => {
      const counterPosition = counter.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.3;

      if (counterPosition < screenPosition && !counter.classList.contains("animated")) {
        counter.classList.add("animated");

        const target = +counter.getAttribute("data-target");
        const increment = target / 200;

        const updateCount = () => {
          const count = +counter.innerText;

          if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 10);
          } else {
            counter.innerText = target; // Final number
          }
        };

        updateCount();
      }
    });
  };

  // Trigger the animation on scroll
  window.addEventListener("scroll", animateCounters);
});