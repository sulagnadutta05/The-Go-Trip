<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Go Trip | Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="blog-list.css">

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- fav-icon link -->
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
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
              Blog
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
                &nbsp; Blog
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
  </div>
  <!-- Breadcrumb Area End -->

  <main class="container py-5">
    <div class="row">

      <div class="col-lg-6 mb-4">
        <div class="card blog-post-card">
          <img src="images/Kerala card image top.jpg" class="card-img-top" alt="Kerala">
          <div class="card-body">
            <p class="card-date">10-Nov-2023</p>
            <h5 class="card-title">5 Must Visit Places in KERALA</h5>
            <p class="card-text">Explore the beautiful backwaters, lush green tea plantations, and pristine beaches of
              Kerala with our guide...</p>
            <a href="Kerala_blog.php" class="read-more">Read More &rarr;</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-4">
        <div class="card blog-post-card">
          <img src="images/Essential_card.jpg" class="card-img-top" alt="Travel Tips">
          <div class="card-body">
            <p class="card-date">25-Oct-2023</p>
            <h5 class="card-title">Essential Travel Tips for Your Next Adventure</h5>
            <p class="card-text">From packing hacks to safety advice, these tips will help you have a stress-free and
              enjoyable trip...</p>
            <a href="Travel tips.php" class="read-more">Read More &rarr;</a>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- footer -->
  <?php include 'footer.php'; ?>
  <!-- end of footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>