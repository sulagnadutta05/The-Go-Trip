<?php
session_start();
include "CRUD/conn.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // This is for debugging, you can remove it later
    // echo "$email,$password";

    $match = "SELECT * FROM `signup` WHERE `email` = '$email' AND `password` = '$password'";
    $pass = mysqli_query($conn, $match);
    $row = mysqli_num_rows($pass);
    $result = mysqli_fetch_assoc($pass);
    $fname = $result["fname"];
  
    if ($row > 0) {
        $_SESSION['name'] = $fname; 
?>
        <script>
            alert("You're in");
            window.open("http://localhost/GoTrip/Home.php", '_self');
        </script>
    <?php
    } else { 
    ?>
        <script>
            alert("Email/Password doesn't match");
            window.open("http://localhost/GoTrip/login.php", '_self');
        </script>
<?php
    }
}
?>