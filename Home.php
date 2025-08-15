<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Go Trip | home</title>
    <!-- personal css  -->
    <link rel="stylesheet" href="home.css">

    <!-- fav-icon link -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

</head>

<body>
    <?php include 'header.php'; ?>

    <!-- carousel starts here -->
    <div class="container-fluid p-0">
        <div class="row m-0 p-0">
            <div class="col p-0">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/varanasi.jpg" class="d-block carimg" alt="..."
                                style="height: 700px;width: 1520px;opacity: 0.8;">
                            <h1><span class="ghat"> Varanasi</span><br><span class="v">Spiritual, ancient,
                                    vibrant</span></h1>
                        </div>
                        <div class="carousel-item">
                            <img src="images/kashmir.jpg" class="d-block carimg" alt="..."
                                style="height: 700px;width: 1520px;opacity: 0.8;">
                            <h1><span class="kash">kashmir</span><br><span class="k">The Heaven on Earth</span></h1>

                        </div>
                        <div class="carousel-item">
                            <img src="images/jaisalmer.jpg" class="d-block carimg" alt="..."
                                style="height: 700px;width: 1520px; opacity: 0.9;">
                            <h1><span class="raj">Rajasthan</span><br><span class="r">Vibrant desert state</span></h1>

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- carousel ends here -->

    <!-- hot packages section starts here -->

    <h1 class="heading">Trending Tour Packages</h1>

    <main class="container">
        <div class="row g-4 pb-5">

            <!-- Card 1: Dalhousie -->
            <div class="col-6 col-md-6 col-lg-3">
                <div class="card tour-card h-100">
                    <a href="#">
                        <img src="images/image2.jpg" class="card-img-top" alt="Weekend Dalhousie Trip">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                            <span>4 Nights / 5 Days</span>
                        </div>
                        <h5 class="card-title fw-semibold text-truncate"
                            title="Weekend Dalhousie Trip (by Volvo via Dhara..."><a href="details.php">Weekend Dalhousie Trip (by Volvo via
                                Dhara...</a></h5>
                        <p class="price">On Request</p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Kedarnath -->

            <div class="col-6 col-md-6 col-lg-3">
                <div class="card tour-card h-100">
                    <a href="#">
                        <img src="images/image1.jpg" class="card-img-top" alt="Dodham Yatra By Helicopter">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                            <span>2 Nights / 3 Days</span>
                        </div>
                        <h5 class="card-title" title="Dodham Yatra By Helicopter- 2022 ( Kedarna...">Dodham Yatra By
                            Helicopter- 2022 (
                            Kedarna...
                        </h5>
                        <p class="price">On Request</p>
                    </div>
                </div>
            </div>

            <!-- Card 3: Shimla -->
            <div class="col-6 col-md-6 col-lg-3">
                <div class="card tour-card h-100">
                    <a href="#">
                        <img src="images/image3.jpg" class="card-img-top" alt="Weekend Trip to Shimla">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                            <span>2 Nights / 3 Days</span>
                        </div>
                        <h5 class="card-title" title="Weekend Trip to Shimla (by Volvo)">
                            Weekend Trip to Shimla (by Volvo)</h5>
                        <p class="price">On Request</p>
                    </div>
                </div>
            </div>

            <!-- Card 4: Himachal -->
            <div class="col-6 col-md-6 col-lg-3">
                <div class="card tour-card h-100">
                    <a href="#">
                        <img src="images/image4.jpg" class="card-img-top" alt="Royal Himachal Tour">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                            <span>9 Nights / 10 Days</span>
                        </div>
                        <h5 class="card-title" title="Royal Himachal Tour (by Car)">Royal
                            Himachal Tour (by Car)</h5>
                        <p class="price">On Request</p>
                    </div>
                </div>
            </div>

            <!-- Card 5: Amritsar -->
            <div class="col-6 col-md-6 col-lg-3">
                <div class="card tour-card h-100">
                    <a href="#">
                        <img src="images/image5.jpg" class="card-img-top" alt="Royal Himachal Tour with Amritsar">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                            <span>10 Nights / 11 Days</span>
                        </div>
                        <h5 class="card-title" title="Royal Himachal Tour with Amritsar">Royal
                            Himachal Tour with Amritsar</h5>
                        <p class="price">On Request</p>
                    </div>
                </div>
            </div>

            <!-- Card 6: Manali -->
            <div class="col-6 col-md-6 col-lg-3">
                <div class="card tour-card h-100">
                    <a href="#">
                        <img src="images/image6.jpg" class="card-img-top" alt="Exotic Manali">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                            <span>3 Nights / 4 Days</span>
                        </div>
                        <h5 class="card-title" title="Exotic Manali (3 N/4 D) By Car Ex-">
                            Exotic Manali (3 N/4 D) By Car Ex-</h5>
                        <p class="price">On Request</p>
                    </div>
                </div>
            </div>

            <!-- Card 7: Manali Balloons -->
            <div class="col-6 col-md-6 col-lg-3">
                <div class="card tour-card h-100">
                    <a href="#">
                        <img src="images/image7.jpg" class="card-img-top" alt="Exotic Manali">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                            <span>3 Nights / 4 Days</span>
                        </div>
                        <h5 class="card-title fw-semibold text-truncate" title="Exotic Manali (3 N/4 D) By Car Ex">
                            Exotic Manali (3 N/4 D) By Car Ex</h5>
                        <p class="price">On Request</p>
                    </div>
                </div>
            </div>

            <!-- Card 8: Goa -->
            <div class="col-6 col-md-6 col-lg-3">
                <div class="card tour-card h-100">
                    <a href="#">
                        <img src="images/image8.jpg" class="card-img-top" alt="Goa Package">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                            <span>3 Nights / 4 Days</span>
                        </div>
                        <h5 class="card-title" title="Goa Package (3 N/4 D)">Goa Package (3
                            N/4 D)</h5>
                        <p class="price">On Request</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- hot packages section ends here -->

    <!-- The Go Trip Section Starts Here -->
    <section class="the-go-trip-section py-5">
        <div class="container my-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 mb-4 mb-lg-0 text-center text-lg-start">
                    <h2 class="display-4 fw-bold text-custom-primary mb-4"
                        style="font-family: 'Times New Roman', Times, serif;">
                        The Go Trip</h2>
                    <p class="text-secondary mb-3">
                        We are a professionally managed travel company based in Noida, Delhi NCR and Uttarakhand region
                        specializing
                        in custom-designed Holiday Tour Packages with clients around the globe.
                    </p>
                    <p class="text-secondary mb-3">
                        We care about you and your travel needs. We make sure you and your families are having fun while
                        you are
                        traveling.
                    </p>
                    <div class="submit-button">
                        <a href="about.php">
                            <input type="submit" value="Read more">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <img src="images/the-go-trip.jpg" alt="Scenic Mountains"
                        class="img-fluid rounded shadow-lg custom-image-border">
                </div>
            </div>
        </div>
    </section>
    <!-- The Go Trip Section Ends Here -->

    <?php include 'footer.php'; ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

    </script>


</body>

</html>