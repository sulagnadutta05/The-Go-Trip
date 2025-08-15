<?php 

include 'conn.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

   
    $insert = "INSERT INTO `contact`(`name`, `number`, `email`, `message`) VALUES ('$name','$number','$email','$msg')";

    $pass = mysqli_query($conn,$insert);

    if ($pass) {
        ?>

<script>
    alert ("submitted successfully!!");
    window.open("http://localhost/GoTrip/Home.php",'_self');
</script>

        <?php
    }
    else{
        echo 'Error';
    }
}

?>