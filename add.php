<?php 

include 'conn.php';
if (isset($_POST['submit'])) {
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    echo "$fname,$lname,$email,$age,$password";
    $insert = "INSERT INTO `signup`(`fname`, `lname`, `email`, `age`, `password`) VALUES ('$fname','$lname','$email','$age','$password')";

    $pass = mysqli_query($conn,$insert);

    if ($pass) {
        $_SESSION['name'] = $fname;
        ?>

<script>
    alert ("You are signed up");
    window.open("http://localhost/GoTrip/Home.php",'_self');
</script>

        <?php
    }
    else{
        echo 'Error';
    }
}

?>