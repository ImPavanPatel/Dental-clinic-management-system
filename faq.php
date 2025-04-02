<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ - Ahirodent Complete Oral Care Clinic | Dr. Sandesh Ahir</title>

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
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="faq.css" />
</head>

<body>
  <header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="index.html" class="logo">
      <img
        src="image/logo.png"
        width="100px"
        alt="Ahirodent Dental Clinic Logo" />
    </a>
    <nav class="navbar">
      <a href="index.php#home">home</a>
      <a href="index.php#about">about us</a>
      <a href="index.php#treatments">our treatments</a>
      <a href="index.php#review">review</a>
      <a href="index.php#book">book</a>
      <a href="faq.php">FAQ</a>
    </nav>
    <a href="booking.html" class="btn">book an appointment</a>
  </header>

  <section class="faq-section" style="padding-top: 10rem">
    <h1 class="heading">Frequently Asked <span>Questions</span></h1>
    <div class="faq-container">
      <div class="faq-item">
        <button class="faq-question">What are your clinic's hours?</button>
        <div class="faq-answer">
          <p>
            Our clinic is open from [Start Time] to [End Time] on [Days of the
            Week].
          </p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">
          What payment methods do you accept?
        </button>
        <div class="faq-answer">
          <p>
            We accept [List Payment Methods, e.g., cash, credit cards,
            insurance].
          </p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Do you accept my insurance?</button>
        <div class="faq-answer">
          <p>
            We accept [List Insurance Providers]. Please contact our office to
            verify your coverage.
          </p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">
          How often should I schedule a dental checkup?
        </button>
        <div class="faq-answer">
          <p>
            We recommend scheduling a dental checkup every two months for
            optimal oral health.
          </p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">
          What should I do in case of a dental emergency?
        </button>
        <div class="faq-answer">
          <p>
            In case of a dental emergency, please call our clinic immediately
            at +91 8390233767.
          </p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">How can I book an appointment?</button>
        <div class="faq-answer">
          <p>
            You can book an appointment through our website's booking form, or
            by calling us directly at +91 8390233767.
          </p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Do you provide teeth whitening?</button>
        <div class="faq-answer">
          <p>
            Yes, we offer professional teeth whitening services to brighten
            your smile.
          </p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">"Do you offer online booking?"</button>
        <div class="faq-answer">
          <p>Yes, we offer online at our website : www.ahirodent.com .</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">
          "How can I maintain good oral hygiene at home?"
        </button>
        <div class="faq-answer">
          <p>
            Brush twice daily, floss daily, and use recommended oral care
            products.
          </p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">"What causes bad breath?"</button>
        <div class="faq-answer">
          <p>
            Poor oral hygiene, dry mouth, and certain foods or medical
            conditions can cause bad breath.
          </p>
        </div>
      </div>
    </div>
    <section class="query-form">
    <h2>Any Query?</h2>
    <form action="query_process.php" method="POST">
      <!-- <label for="name"></label> -->
      <input type="text" id="name" name="name" placeholder="Enter your name" required />

      <!-- <label for="email">Email</label> -->
      <input type="email" id="email" name="email" placeholder="Enter your email" required />

      <!-- <label for="message">Message</label> -->
      <textarea id="message" name="message" placeholder="Enter your query" rows="5" required></textarea>

      <button type="submit">Submit Query</button>
    </form>
  </section>
  </section>

  <section class="footer"></section>

  <footer class="footer">
    &copy; 2025 Ahirodent Dental Clinic | All Rights Reserved
  </footer>

<script src="script.js"></script>
<script src="faq.js"></script>
</body>

</html>