<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- bootstrap css cdn link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- external font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet">
  <!-- personal css link -->
  <link rel="stylesheet" href="details.css">

  <!-- fav-icon -->
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <title>Tour details | Dharamshala Dalhousie</title>
</head>

<body>

  <!-- navbar starts here -->
  <?php include 'header.php'; ?>
  <!-- navbar ends here -->

  <div class="container-fluid py-5 px-3">
    <div class="row">
      <!-- location image carousel -->
      <div class=" col-sm-12 col-md-12 col-lg-6">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/carousel1.jpg" class="d-block w-100 carousel_image" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/carousel2.jpg" class="d-block w-100 carousel_image" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/carousel3.jpg" class="d-block w-100 carousel_image" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- location details -->
      <div class="col-sm-12 col-md-12 col-lg-6">
        <p class="tourName">Weekend Dalhousie Trip via Dharamshala</p>
        <span class="time">4N/5D</span>
        <div class="row">
          <div class="col-6" style="margin: 10px 0px;">
            <p style="margin-top: 10px;"><i class="fa-solid fa-bowl-food"></i>Meals</p>
            <p><i class="fa-solid fa-hotel"></i>Hotels</p>
          </div>
          <div class="col-6" style="margin: 10px 0px;">
            <p style="margin-top: 10px;"><i class="fa-solid fa-car"></i>Transfer</p>
            <p><i class="fa-solid fa-camera"></i>Sightseeing</p>
          </div>
        </div>
        <p class="price py-2">Price: <span>on request</span></p>
        <p style="font-size: small;">Customizable itineraries where you may choose transport, stay & sightseeing as per
          your taste & comfort.</p>

        <!-- enquiry modal -->
        <button type="button" class="enquirebtn " data-bs-toggle="modal" data-bs-target="#exampleModal">
          Enquire Now
        </button>

        <!-- Modal -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Enquiry Form</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

              </div>

              <div class="modal-body">

                <form action="CRUD/add-to-enquiry.php" method="post">

                  <div class="row">

                    <div class="col">

                      <input type="text" class="form-control" id="firstName" placeholder="First name" name="firstname"
                        aria-label="First name">
                    </div>
                    <div class="col">

                      <input type="text" class="form-control" id="lastName" placeholder="Last name" name="lastname"
                        aria-label="Last name">

                    </div>

                  </div>



                  <div class="row">

                    <div class="col">

                      <input type="number" class="form-control" id="adult" placeholder="Adult" name="numberOfAdults"
                        aria-label="First name">

                    </div>
                    <div class="col">

                      <input type="number" class="form-control" id="child" placeholder="child(5-12 yrs.)"
                        name="numberOfChild" aria-label="Last name">
                    </div>

                  </div>



                  <div class="input-group flex-nowrap">

                    <span class="input-group-text" id="addon-wrapping" style="margin-top: 10px;"><i
                        class="fa-solid fa-envelope"></i></span>

                    <input type="text" class="form-control" id="email" placeholder="Email id" name="email"
                      aria-label="Username" aria-describedby="addon-wrapping">

                  </div>

                  <div class="input-group flex-nowrap">

                    <input type="date" class="form-control" id="departure" name="DateOfDeparture">

                  </div>



                  <div class="input-group">

                    <input type="text" class="form-control" id="destination" placeholder="Destination"
                      name="destination">
                  </div>



                  <div class="input-group" style="margin: 0.75rem 0rem;">
                    <textarea class="form-control" id="message" aria-label="With textarea" placeholder="Message"
                      name="message"></textarea>

                  </div>
                  <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Later</button>

                    <input type="submit" name="submit" value="submit" class="btn btn-primary">

                  </div>
                </form>

              </div>





            </div>

          </div>

        </div>

      </div>
    </div>

  </div>


  <!-- tour iternary -->


  <div class="container mx-3 my-5">
    <div class="row">

      <!-- tour iternary -->
      <div class="col-sm-12 col-md-7 col-lg-9">
        <h3 class="Iternary">Iternary</h3>
        <hr>
        <h5 class="sub">Day 1: DELHI - DALHOUSIE (Via Dharamshala ) (480 KMS/ 11-13 HRS) (OVERNIGHT JOURNEY)</h5>
        <p class="tourDetails" style="margin: 22px 0px;">Start your exotic trip to Dharamshala by boarding the Volvo
          from Delhi Volvo pick
          up point (Guests are
          requested to report at scheduled time). Overnight journey will be by Volvo.
          <strong>Dalhousie:</strong> The place is also famous with the name of <strong>“Mini Switzerland of
            India”</strong> due to its similar landscapes
          to that of Switzerland.
        </p>

        <h5 class="sub">DAY 2: ARRIVAL AT DHARAMSHALA – DALHOUSIE (120 KMS/5-6 HRS)</h5>
        <p class="tourDetails" style="margin: 22px 0px;">Today arrive at Dharamshala Volvo point and our cab will pickup
          you & drive to
          Dalhousie. The place is also famous with the name of “Mini Switzerland of India” due to its similar landscapes
          to that of Switzerland. Arrive & transfer to Dalhousie hotel. Rest of the day will be free to explore the
          local Market. Overnight stay at Hotel.
        </p>

        <h5 class="sub">DAY 3: KHAJJIAR + DALHOUSIE LOCAL</h5>
        <p class="tourDetails" style="margin: 22px 0px;">Today after heartily breakfast cover Khajjiar sightseeing (22
          Kms from Dalhousie).
          Khajjiar is a place where one can easily spend whole day by admiring the beauty of sparkling Khajjair Lake and
          lush greenery surrounding it. Later hit the roads to Dalhousie. On the way back, we will take a halt at
          Panchpula Waterfall and churches of St. John’s. Other interesting places to cover nearby Dalhousie will be
          churches St. Francis & St. Patricks, Subhash Chowk and Tibetan Market. Overnight stay will be at hotel.
        </p>

        <h5 class="sub">DAY 4: DALHOUSIE – DELHI (VIA DHARAMSHALA) (OVERNIGHT JOURNEY)</h5>
        <p class="tourDetails" style="margin: 22px 0px;">After breakfast check out from the hotel and drive to
          Dharamshala. Arrive
          Dharamshala bus stand & board the Volvo for Delhi while recalling all the memorable moments of your exotic
          trip.
        </p>
      </div>

      <!-- related packages -->

      <div class=" col-sm-12 col-md-5 col-lg-3">
        <div class="container" id="relatedpackage">
          <div class="card" style="width: 20rem;">
            <div class="card-header" style="background-color: #1b5e20 ; color: #e8f5e9;">
              <h6 style="text-align: center;" class="sub">Related packages</h6>
            </div>
            <div class="row">
              <div class="col-5">
                <img src="images/related1.jpg" alt="" class="cardimg">
              </div>
              <div class="col-7 cardItem">
                <p><a href="#">Royal Himachal Tour with Amritsar (by Car)</a></p>
                <p>10N/11D</p>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <img src="images/related2.jpg" alt="" class="cardimg">
              </div>
              <div class="col-7 cardItem">
                <p><a href="#">Royal Himachal Tour with Amritsar (by Car)</a></p>
                <p>10N/11D</p>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <img src="images/related3.jpg" alt="" class="cardimg">
              </div>
              <div class="col-7 cardItem">
                <p><a href="#">Royal Himachal Tour with Amritsar (by Car)</a></p>
                <p>10N/11D</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- footer  -->
  <?php include 'footer.php'; ?>
  <!-- end of footer  -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- <script src="details.js"></script> -->
</body>

</html>