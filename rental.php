<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $days = $_POST['days'];
    $payment = $_POST['payment'];
    $query = "INSERT INTO rentalbook(name,email,date,days,payment) VALUES ('$name','$email','$date','$days','$payment')";
    $result = mysqli_query($conn,$query);
    if($result > 0){
        include 'rental.html';
        echo "<script>alert('Bookings Done! Thank You')</script>";
        
    }else{
        include 'rental.html';
        echo "<script>alert('Data not inserted')</script>";
        
    }


}
?>