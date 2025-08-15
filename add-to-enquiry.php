<?php 

include 'conn.php';
if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $numOfAdults = $_POST['numberOfAdults'];
    $numOfChild = $_POST['numberOfChild'];
    $email = $_POST['email'];
    $dateOfDepart = $_POST['DateOfDeparture'];
    $destination = $_POST['destination'];
    $msg = $_POST['message'];

    $insert = "INSERT INTO `enquiry`(`fname`, `lname`, `adult`, `child`, `email`, `departure_date`, `destination`, `message`) VALUES ('$fname','$lname','$numOfAdults','$numOfChild','$email','$dateOfDepart','$destination','$msg')";

    $pass = mysqli_query($conn,$insert);

    if ($pass) {
        ?>

<script>
    alert ("We will get back to you shortly.");
    window.open("http://localhost/GoTrip/Home.php",'_self');
</script>

        <?php
    }
    else{
        echo 'Error';
    }
}

?>