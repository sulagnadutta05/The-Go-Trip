<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- navbar starts here -->
    <nav class="navbar navbar-expand-lg navbar-dark mx-auto p-3 rounded-lg shadow-sm"
        style="background-color: #1b2631;">
        <div class="container-fluid">
            <!-- Navbar Brand/Logo -->
            <div class="branding">
                <a class="navbar-brand d-flex" href="Home.php">
                    <!-- Placeholder image for logo -->
                    <img src="images/logo.png" class="rounded-full headimg" alt="Go Trip Logo">
                </a>
            </div>

            <!-- Toggler button for responsive navigation on small screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links that collapse on smaller screens -->
            <div class="collapse navbar-collapse d-lg-flex" id="navbarNav">
                <!-- Spacer to push navigation links to the center on large screens -->
                <div class="flex-grow-1 d-none d-lg-block"></div>
                <ul class="navbar-nav"> <!-- Removed m-auto class -->
                    <li class="nav-item">
                        <a class="nav-link active text-white px-3 py-2 rounded-md" aria-current="page"
                            href="Home.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white px-3 py-2 rounded-md" href="about.php"><b>About Us</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <b style="color: white;">Packages</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="goa.php"><b>Goa</b></a>
                            </li>
                            <li><a class="dropdown-item" href="manali.php"><b>Manali</b></a>
                            </li>
                            <li><a class="dropdown-item" href="shimla.php"><b>Shimla</b></a></li>

                            <li><a class="dropdown-item" href="dalhousie.php"><b>Dalhousie</b></a>
                            </li>

                            <li><a class="dropdown-item" href="uttarakhand.php"><b>Uttarakhand</b></a></li>

                            <li><a class="dropdown-item" href="himachal-pradesh.php"><b>Himachal
                                        Pradesh</b></a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white px-3 py-2 rounded-md" href="blog-list.php"><b>Blogs</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white px-3 py-2 rounded-md" href="contact.php"><b>Contact Us</b></a>
                    </li>
                </ul>


                <!-- Spacer to push buttons to the far right on large screens -->
                <div class="flex-grow-1 d-none d-lg-block"></div>
                <?php if (isset($_SESSION['name'])) { ?>
                    <span class="me-3" style="color: #def5c0ff"><i class="fa-regular fa-user"></i>Welcome,
                        <strong style="color: #def5c0ff"><?php echo $_SESSION['name']; ?></strong></span>
                    <a href="logout.php" class="btn rounded-pill" id="logout">Logout</a>
                <?php } else { ?>
                    <div class="d-flex impbtn"> <!-- Removed ms-auto, now pushed by flex-grow-1 -->
                        <a href="login.php" class="btn me-2 rounded-pill" id="login">Login</a>
                        <a href="sign-in.php" class="btn rounded-pill" id="signup">Sign Up</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>
    <!-- navbar ends here -->
</body>

</html>