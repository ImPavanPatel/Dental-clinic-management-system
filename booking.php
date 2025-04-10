<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reserve an Appointment | Ahirodent Dental Clinic</title>

  <!-- Favicon setup -->
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="image/favicon_io/favicon-16x16.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="image/favicon_io/favicon-32x32.png" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="image/favicon_io/apple-touch-icon.png" />
  <link rel="manifest" href="image/favicon_io/site.webmanifest" />
  <link rel="shortcut icon" href="image/favicon_io/favicon.ico" />

  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />

  <!-- font awesome cdn link -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />

  <!-- custom css file link -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- header section starts -->

  <header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="index.php" class="logo">
      <img src="image/logo.png" width="100px" alt="logo" />
    </a>

    <nav class="navbar">
      <a href="index.php">home</a>
      <a href="index.php#about">about</a>
      <a href="index.php#treatments">our treatments</a>
      <a href="index.php#review">review</a>
      <a href="faq.php">FAQ</a>
      <!-- <a href="#book">book</a> -->
    </nav>
  </header>

  <!-- header section ends -->

  <!-- book section starts -->

  <section class="book" id="book" style="padding-top: 10rem">
    <h1 class="heading">booking <span>reserve an appointment</span></h1>

    <!-- Display Success Message if Set -->
    <?php
    if (isset($_GET['success']) && $_GET['success'] == 'true') {
      echo '
        <div class="alert alert-success success-message">
            <i class="fa fa-check-circle"></i> <strong>Success!</strong> Your appointment has been booked successfully! Our team will contact you soon.
        </div>';
    }
    ?>
    <form action="process_booking.php" method="POST">
      <label class="label required" for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Name" required class="box" />

      <label class="label required" for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Email" required class="box" />

      <label class="label required" for="phone">Phone number</label>
      <input id="phone" name="phone" type="tel" placeholder="9876543210" pattern="[0-9]{10}" required class="box" />

      <label class="label required" for="appointment-date">Select Appointment Date:</label>
      <input type="date" id="appointment-date" name="appointment_date" class="box" required />

      <label class="label required" for="referral-source">How did you hear about us?</label>
      <select class="box" id="referral-source" name="referral_source" required>
        <option value="google">Google</option>
        <option value="social_media">Social Media (Facebook, Instagram, etc.)</option>
        <option value="word_of_mouth">Word of Mouth</option>
        <option value="other">Other</option>
      </select>

      <label class="label required" for="message">Message</label>
      <textarea name="message" id="message" placeholder="Message" class="box" cols="30" rows="10" required></textarea>

      <input type="submit" value="book my appointment now" class="btn" />
    </form>

  </section>

  <!-- Include FontAwesome for the icon -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- Custom Styles and Animations -->
  <style>
    .alert {
      position: relative;
      padding: 15px;
      margin: 20px 0;
      border-radius: 5px;
      font-size: 18px;
      display: flex;
      align-items: center;
      background-color: #28a745;
      color: white;
      animation: slideIn 0.5s ease-out;
    }

    .alert i {
      margin-right: 10px;
      font-size: 24px;
    }

    .alert strong {
      font-weight: bold;
    }

    .close-btn {
      position: absolute;
      top: 5px;
      right: 10px;
      font-size: 22px;
      cursor: pointer;
      color: white;
    }

    .close-btn:hover {
      color: #f8f9fa;
    }

    /* Slide-in animation for the success message */
    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>

  <script>
    // Close the success message when the close button is clicked
    document.querySelector('.close-btn')?.addEventListener('click', function() {
      document.querySelector('.alert')?.style.display = 'none';
    });
  </script>


  <!-- book section ends -->

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
          <a href="index.php"><i class="fas fa-arrow-right"></i>home</a>
          <a href="index.php#about"><i class="fas fa-arrow-right"></i>about us</a>
          <a href="index.php#treatments"><i class="fas fa-arrow-right"></i>our treatments</a>
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
  <script>
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
  </script>
</body>

</html>