<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Goa</title>
  <!-- Bootstrap CSS CDN for styling -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- cnd link for font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- fav-icon link -->
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

  <!-- css link -->
  <link rel="stylesheet" href="style.css">
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
              Goa
            </h1>
            <ul
              class="pagelist d-flex justify-content-center align-items-center list-unstyled text-white fs-5 text-shadow-custom">
              <li>
                <a href="#">Home &nbsp;</a>
              </li>
              <li>
                |
              </li>
              <li>
                &nbsp; Goa
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
  </div>
  <!-- Breadcrumb Area End -->

  <!-- start of products -->
  <main class="container">
    <div class="row g-4 pb-5">

      <!-- Card 1 -->

      <div class="col-6 col-md-6 col-lg-4">
        <div class="card tour-card h-100">
          <a href="#">
            <img src="images/goa1.jpg" class="card-img-top" alt="Dodham Yatra By Helicopter">
          </a>
          <div class="card-body d-flex flex-column">
            <div class="d-flex align-items-center text-muted small mb-3">
              <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
              <span>6 Nights / 7 Days</span>
            </div>
            <h5 class="card-title" title="Goa Package (6 N/7 D)">Goa Package (6 N/7 D)
            </h5>
            <p class="price">On Request</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-6 col-md-6 col-lg-4">
        <div class="card tour-card h-100">
          <a href="#">
            <img src="images/goa2.jpg" class="card-img-top" alt="Weekend Dalhousie Trip">
          </a>
          <div class="card-body d-flex flex-column">
            <div class="d-flex align-items-center text-muted small mb-3">
              <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
              <span>4 Nights / 5 Days</span>
            </div>
            <h5 class="card-title fw-semibold text-truncate" title="Goa Package (4 N/5 D)">Goa Package (4 N/5 D)</h5>
            <p class="price">On Request</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-6 col-md-6 col-lg-4">
        <div class="card tour-card h-100">
          <a href="#">
            <img src="images/goa3.jpg" class="card-img-top" alt="Weekend Trip to Shimla">
          </a>
          <div class="card-body d-flex flex-column">
            <div class="d-flex align-items-center text-muted small mb-3">
              <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
              <span>3 Nights / 4 Days</span>
            </div>
            <h5 class="card-title" title="Goa Package (3 N/4 D)">
              Goa Package (3 N/4 D)</h5>
            <p class="price">On Request</p>
          </div>
        </div>
      </div>

    </div>
  </main>
  <!-- End of products -->

  <!-- footer  -->
  <?php include 'footer.php'; ?>
  <!-- end of footer  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>