<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $destination = $_POST['destination'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $passengers = $_POST['passengers'];
    $class = $_POST['class'];
    $query = "INSERT INTO flightbook(destination,fullname,email,date,passengers,class) VALUES ('$destination','$fullname','$email','$date','$passengers','$class')";
    $result = mysqli_query($conn,$query);
    if($result > 0){
        include 'flight.html';
        echo "<script>alert('Bookings Done! Thank You')</script>";
        
    }else{
        include 'flight.html';
        echo "<script>alert('Data not inserted')</script>";
        
    }


}
?>