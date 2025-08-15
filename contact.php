<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <!-- Bootstrap CSS CDN for styling -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- fav-icon link -->
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

  <!-- css link -->
  <link rel="stylesheet" href="contact-us.css">

</head>

<body>

  <!-- navbar starts here -->
  <?php include 'header.php'; ?>
  <!-- navbar ends here -->

  <!-- Breadcrumb Area Start -->
  <div class="breadcrumb-area position-relative d-flex align-items-center justify-content-center text-center p-5"
    style="background-image: url(images/bg-img.png);">
    <div class="container position-relative z-1 p-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-inner">
            <h1 class="page-tittle text-white fw-bold mb-3 display-3 text-shadow-custom">
              Contact Us
            </h1>
            <ul
              class="pagelist d-flex justify-content-center align-items-center list-unstyled text-white fs-5 text-shadow-custom">
              <li>
                <a href="Home.php">Home &nbsp;</a>
              </li>
              <li>
                |
              </li>
              <li>
                &nbsp; Contact Us
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
  </div>
  <!-- Breadcrumb Area End -->

  <!-- Contact Us Section Start -->
  <section class="contact-us-section">
    <div class="container text-center">
      <h2 class="text-center">Contact Us</h2>
      <div class="row justify-content-center">
        <!-- Noida Office -->
        <div class="col-12 col-md-4 mb-4">
          <div class="office-card">
            <h3 class="h3">Noida Office</h3>
            <ul class="list-unstyled">
              <li>
                <i class="fas fa-map-marker-alt"></i>
                <span>Galaxy diamond plaza office No:: 1034 10th Floor C 1A, Sector 4, Greater Noida
                  west, Uttar Pradesh 201009</span>
              </li>
              <li>
                <i class="fas fa-clock"></i>
                <span>Office Hour 24 hours</span>
              </li>
              <li>
                <i class="fas fa-envelope"></i>
                <a href="mailto:info@thegotrip.com">info@thegotrip.com</a>
              </li>
              <li>
                <i class="fas fa-phone-alt"></i>
                <a href="tel:9027329930">9027329930 / +91 9582555364</a>
              </li>
              <li>
                <i class="fab fa-whatsapp"></i>
                <span>Whatsapp: 9027329930</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Haridwar & Varanasi Office -->
        <div class="col-12 col-md-4 mb-4 d-flex flex-column justify-content-between">
          <div class="office-card mb-4">
            <h3 class="h3">Haridwar Office</h3>
            <ul class="list-unstyled">
              <li>
                <i class="fas fa-map-marker-alt"></i>
                <span>Near Hari Ram Ashram, Krishna Nagar, Kankhal, Haridwar (U.K)</span>
              </li>
            </ul>
          </div>
          <div class="office-card">
            <h3 class="h3">Varanasi Office</h3>
            <ul class="list-unstyled">
              <li>
                <i class="fas fa-map-marker-alt"></i>
                <span>MM-12, VDA Colony Shivpur Ward, Shivpur Purani Chungi, Varanasi</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Surat & Indore Office -->
        <div class="col-12 col-md-4 mb-4 d-flex flex-column justify-content-between">
          <div class="office-card mb-4">
            <h3 class="h3">Surat Office</h3>
            <ul class="list-unstyled">
              <li>
                <i class="fas fa-map-marker-alt"></i>
                <span>55, Vinoba Nagar, SOC Navanagar, Dindoli, Surat, Gujarat-394210</span>
              </li>
            </ul>
          </div>
          <div class="office-card">
            <h3 class="h3">Indore Office</h3>
            <ul class="list-unstyled">
              <li>
                <i class="fas fa-map-marker-alt"></i>
                <span>203, TBC Tower Near Geeta Bhawan Square, Indore-452001 (M.P)</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Us Section End -->

  <!-- form -->
  <div class="container-fluid max-w-6xl mx-auto p-4 p-lg-5 bg-white rounded-3 card-custom-shadow">
    <!-- Header Section -->
    <div class="text-center mb-5">
      <h1 class="display-4 fw-bold text-primary mb-2"
        style="color:#172a5a !important; font-family: 'Times New Roman', Times, serif;">Get In Touch!</h1>
      <p class="lead text-secondary">Feel free to contact with us for any query or requirements</p>
    </div>

    <!-- Main Content Area: Image and Form -->
    <div class="row g-4 g-lg-5">
      <!-- Left Column: Image -->
      <div class="col-12 col-lg-6 image-col">
        <div class="bg-white rounded-3 card-custom-shadow overflow-hidden image-wrapper">
          <!-- Placeholder image as the original URL might not be accessible -->
          <img src="images/git.jpg" alt="...">
        </div>
      </div>

      <!-- Right Column: Form -->
      <div class="col-12 col-lg-6 form-col">
        <form class="form-content" action="CRUD/add-to-contact.php" method="post">
          <!-- Name and Number Fields -->
          <div class="row g-3 mb-4">
            <div class="col-12 col-md-6">
              <label for="name" class="form-label">Name</label>
              <input type="text" id="name" name="name" class="form-control rounded-3">
            </div>
            <div class="col-12 col-md-6">
              <label for="number" class="form-label">Number</label>
              <input type="text" id="number" name="number" class="form-control rounded-3">
            </div>
          </div>

          <!-- Email Field -->
          <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control rounded-3">
          </div>

          <!-- Message Field -->
          <div class="mb-4">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" name="message" rows="6" class="form-control rounded-3 resize-y"></textarea>
          </div>

          <!-- Send Message Button -->
          <div class="mt-auto"> <!-- Push button to bottom if space allows -->
            <input type="submit" name="submit" value="Send Message"
              class="btn btn-orange btn-lg px-5 py-3 rounded-3 shadow" style="width: fit-content; font-weight: 700;">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end of form -->

  <!-- map -->
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.9391555768243!2d88.3617693760211!3d22.543951879512147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02778578331da5%3A0xf915cac3570c9dd2!2sGo%20Get%20A%20Trip%20-%20Best%20Travel%20Agency%20in%20Kolkata!5e0!3m2!1sen!2sin!4v1754593129700!5m2!1sen!2sin"
    width="1520" height="400" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>

  <!-- footer -->
  <?php include 'footer.php'; ?>
  <!-- end of footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>