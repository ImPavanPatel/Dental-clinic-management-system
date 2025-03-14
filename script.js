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

document.querySelectorAll('.image-slider img').forEach(images => {
  images.onclick = () => {
    var src = images.getAttribute('src');
    document.querySelector('.main-home-image').src = src;
  };
});

var swiper = new Swiper(".review-slider", {
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 0,
    },
    768: {
      slidesPerView: 2,
    },
  },
  loop: true,
  grabCursor: true,
});

// Get today's date in YYYY-MM-DD format
const today = new Date();
const yyyy = today.getFullYear();
const mm = String(today.getMonth() + 1).padStart(2, '0'); // Month starts from 0
const dd = String(today.getDate()).padStart(2, '0');
const formattedDate = `${yyyy}-${mm}-${dd}`;

// Select the date input field
const dateInput = document.getElementById('appointment-date');

// Set today's date as the default value
dateInput.value = formattedDate;

// Set today's date as the minimum value
dateInput.setAttribute('min', formattedDate);

// Open the date picker on click
dateInput.addEventListener('click', () => {
  dateInput.showPicker(); // Forcefully opens the date picker
});