<?php
// You can add PHP logic here if needed (e.g., database connections, form handling).
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ahirodent-Complete Oral Care Clinic | Dr. Sandesh Ahir</title>

    <!-- Favicon setup -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="image/favicon_io/favicon-16x16.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="image/favicon_io/favicon-32x32.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="image/favicon_io/apple-touch-icon.png"
    />
    <link rel="manifest" href="image/favicon_io/site.webmanifest" />
    <link rel="shortcut icon" href="image/favicon_io/favicon.ico" />

    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"
    />

    <!-- font awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!-- header section starts -->

    <header class="header">
      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#home" class="logo">
        <img src="image/logo.png" width="100px" alt="logo" />
      </a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about us</a>
        <a href="#menu">our treatments</a>
        <a href="#review">review</a>
        <a href="faq.php">FAQ</a>
      </nav>

      <a href="booking.php" class="btn">book an appointment</a>
    </header>

    <!-- header section ends -->

    <!-- home section starts -->

<!-- Include AOS Library -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<style>
  /* General Styling */
    .home {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 50px 10%;
    background: url("image/home_background.jpg") no-repeat center center/cover;
    position: relative;
  }

  .row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 100%;
    max-width: 1200px;
  }

  /* Text Content Styling */
  .content {
    max-width: 500px;
  }

  .content h3 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #fff;
    animation: fadeIn 1.5s ease-in-out;
  }

  .content p {
    font-size: 1.2rem;
    color: #f1f1f1;
    margin-top: 10px;
    animation: slideUp 1.2s ease-in-out;
  }

  /* Image Styling */
  .image {
    position: relative;
  }

  .main-home-image {
    width: 400px;
    transition: transform 0.5s ease-in-out;
    animation: bounceIn 1.5s ease-in-out;
  }

  /* Hover Effect */
  .main-home-image:hover {
    transform: scale(1.1) rotate(5deg);
  }

  /* Keyframe Animations */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes slideUp {
    from {
      opacity: 0;
      transform: translateY(50px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes bounceIn {
    0% {
      transform: scale(0.5);
      opacity: 0;
    }
    60% {
      transform: scale(1.1);
      opacity: 1;
    }
    100% {
      transform: scale(1);
    }
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .row {
      flex-direction: column;
      text-align: center;
    }
    .content h3 {
      font-size: 2rem;
    }
    .main-home-image {
      width: 100%;
      max-width: 300px;
    }
  }
</style>

<section class="home" id="home">
  <div class="row">
    <div class="content" data-aos="fade-right">
      <h3>Your best life begins with a smile</h3>
      <p>Get the best treatment for your teeth</p>
    </div>

    <div class="image" data-aos="fade-left">
      <img
        draggable="false"
        src="image/teeth.png"
        class="main-home-image"
        alt="home-img-1"
      />
    </div>
  </div>
</section>

<!-- Initialize AOS -->
<script>
  AOS.init({
    duration: 1200, // Animation duration
    once: true, // Animations happen once
  });
</script>


    <!-- home section ends -->

    <!-- about section starts -->

    <section class="about" id="about">
      <h1 class="heading">about us <span>why choose us</span></h1>

      <div class="row">
        <div class="image">
          <img src="image/DR2.jpg" alt="about-img" />
        </div>

        <div class="content">
          <h3 class="title">what makes our clinic special!</h3>
          <p>
            At our clinic, your smile is our priority! We offer expert care with
            advanced techniques and technology, ensuring top-quality treatment.
            Every patient receives a personalized approach with customized plans
            tailored to their needs. We prioritize your comfort, making every
            visit stress-free and welcoming. With timely appointments and
            flexible scheduling, we value your time. Plus, we provide
            affordable, high-quality care with transparent pricing and payment
            options. Trust us to bring out the best in your smile.
          </p>
          <a href="booking.php" class="btn">book your appointment today</a>

          <div class="icons-container">
            <div class="icons">
              <img src="image/stethoscope-solid.svg" alt="about-icon-1" />
              <h3>advanced treatments</h3>
            </div>
            <div class="icons">
              <img src="image/wallet-solid.svg" alt="about-icon-2" />
              <h3>affordable care</h3>
            </div>
            <div class="icons">
              <img src="image/calendar-check-regular.svg" alt="about-icon-3" />
              <h3>easy appointment</h3>
            </div>
            <div class="icons">
              <img src="image/chair-solid.svg" alt="about-icon-1" />
              <h3>Patitent Comfort</h3>
            </div>
            <div class="icons">
              <img src="image/face-smile-regular.svg" alt="about-icon-2" />
              <h3>Painless Dentistry</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- about section ends -->

    <!-- treatment section starts -->

    <section class="treatments" id="treatments">
      <h1 class="heading">treatments <span>procedures</span></h1>

      <div class="box-container">
        <div class="card">
          <h2>Root Canal Treatment</h2>
          <button class="btn" onclick="openTreatment('root-canal-treatment')">
            KNOW MORE
          </button>
        </div>
        <div class="card">
          <h2>Dental Implants</h2>
          <button class="btn" onclick="openTreatment('dental-implants')">
            KNOW MORE
          </button>
        </div>
        <div class="card">
          <h2>Invisible Braces</h2>
          <button class="btn" onclick="openTreatment('invisible-braces')">
            KNOW MORE
          </button>
        </div>
        <div class="card">
          <h2>Cosmetic Fillings</h2>
          <button class="btn" onclick="openTreatment('cosmetic-fillings')">
            KNOW MORE
          </button>
        </div>
        <div class="card">
          <h2>Dental Veneers</h2>
          <button class="btn" onclick="openTreatment('dental-veneers')">
            KNOW MORE
          </button>
        </div>
        <div class="card">
          <h2>Crowns and Bridges</h2>
          <button class="btn" onclick="openTreatment('crowns-bridges')">
            KNOW MORE
          </button>
        </div>
        <div class="card">
          <h2>Full Mouth Rehabilitation</h2>
          <button
            class="btn"
            onclick="openTreatment('full-mouth-rehabilitation')"
          >
            KNOW MORE
          </button>
        </div>
        <div class="card">
          <h2>Teeth Whitening</h2>
          <button class="btn" onclick="openTreatment('teeth-whitening')">
            KNOW MORE
          </button>
        </div>
      
        <div class="card">
          <h2>Dentures</h2>
          <button class="btn" onclick="openTreatment('dentures')">
            KNOW MORE
          </button>
        </div>
        <div class="card">
          <h2>Wisdom Tooth Surgery</h2>
          <button class="btn" onclick="openTreatment('wisdom-tooth-surgery')">
            KNOW MORE
          </button>
        </div>
      </div>
    </section>

    <script>
      function openTreatment(treatmentName) {
        window.location.href = `treatment-details.html?treatment=${encodeURIComponent(
          treatmentName
        )}`;
      }
    </script>

    <!-- treatment section ends -->

    <!-- achievements section starts -->

    <section class="achievements">
      <h1 class="heading">Achievements<span>our success in numbers</span></h1>
      <div class="counter-container">
        <div class="counter-item">
          <span class="counter-wrapper">
            <span class="counter" data-target="10000">0</span
            ><span class="plus">+</span>
          </span>
          <p>Happy Clients</p>
        </div>
        <div class="counter-item">
          <span class="counter-wrapper">
            <span class="counter" data-target="6000">0</span
            ><span class="plus">+</span>
          </span>
          <p>Smile Makeover</p>
        </div>
        <div class="counter-item">
          <span class="counter-wrapper">
            <span class="counter" data-target="7500">0</span
            ><span class="plus">+</span>
          </span>
          <p>Dental Implants</p>
        </div>
        <div class="counter-item">
          <span class="counter-wrapper">
            <span class="counter" data-target="5000">0</span
            ><span class="plus">+</span>
          </span>
          <p>Whitening</p>
        </div>
      </div>
    </section>

    <!-- achievements section ends -->

    <!-- review section starts -->

    <section class="review" id="review">
      <h1 class="heading">reviews <span>what people says</span></h1>

      <!-- Wrap slider and arrows in a container -->
      <div class="slider-container">
        <div class="slider-class">
          <div>
            <img src="image/review1.png" alt="review1" />
          </div>
          <div>
            <img src="image/review2.png" alt="review2" />
          </div>
          <div>
            <img src="image/review3.png" alt="review3" />
          </div>
          <div>
            <img src="image/review4.png" alt="review4" />
          </div>
        </div>

        <!-- Custom Arrow Buttons -->
        <div class="slick-custom-arrows">
          <button class="slick-prev">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="slick-next">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>
    </section>

    <!-- review section ends -->

    <!-- footer section starts -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <a href="index.php">
            <img src="image/logo.png" alt="logo" width="200px" />
          </a>
          <p>
            Ahirodent Dental Clinic in Vasai has 11 years of experience in smile
            makeovers & advanced dental care for a healthy, confident smile.
            Visit today!
          </p>
        </div>

        <div class="box">
          <h3>quick links</h3>
          <a href="#home"><i class="fas fa-arrow-right"></i>home</a>
          <a href="#about"><i class="fas fa-arrow-right"></i>about us</a>
          <a href="#treatments"><i class="fas fa-arrow-right"></i>our treatments</a>
          <a href="#review"><i class="fas fa-arrow-right"></i>review</a>
          <a href="booking.php"><i class="fas fa-arrow-right"></i>book</a>
          <a href="faq.php"><i class="fas fa-arrow-right"></i>FAQ</a>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="#"> <i class="fas fa-phone"></i> +91 8390233767 </a>
          <a href="#"> <i class="fas fa-phone"></i> +91 9699664106 </a>
          <a href="#" style="text-transform: none">
            <i class="fas fa-envelope"></i> ahirodent@gmail.com
          </a>
          <a
            href="https://www.google.com/maps/dir//122,+Dattatray+Shopping+Centre,+Vasai+Station+Rd,+Dindayal+Nagar,+Vasai+West,+Vasai-Virar,+Maharashtra+401202/@19.3805884,72.7462013,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3be7af6fd2e2406d:0x3c35ce942c93f645!2m2!1d72.828603!2d19.3806069?entry=ttu&g_ep=EgoyMDI1MDMxMS4wIKXMDSoJLDEwMjExNDU1SAFQAw%3D%3D"
          >
            <i class="fa-solid fa-location-dot"></i> Vasai, Mumbai, 401202
          </a>
        </div>

        <div class="box">
          <h3>social media</h3>
          <a href="https://m.facebook.com/ahirodent/">
            <i class="fab fa-facebook-f"></i> facebook
          </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="https://www.instagram.com/drsandesh_ahir/">
            <i class="fab fa-instagram"></i> instagram
          </a>
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>
      </div>

      <div class="credit">
        Website managed & developed by <span>us</span> | all rights reserved
      </div>
    </section>

    <!-- footer section ends -->

    <a
      href="https://wa.me/+919699664106"
      class="whatsapp-btn"
      target="_blank"
      aria-label="Contact us on WhatsApp"
    >
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
        alt="WhatsApp Logo"
      />
    </a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>
  </body>
</html>
