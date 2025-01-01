<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $hotelname = $_POST['hotelname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $guests = $_POST['guests'];
    $roomtype = $_POST['roomtype'];
    $query = "INSERT INTO hotelbook(hotelname,name,email,phone,checkin,checkout,guests,roomtype) VALUES ('$hotelname','$name','$email','$phone','$checkin','$checkout','$guests','$roomtype')";
    $result = mysqli_query($conn,$query);
    if($result > 0){
        include 'hotel.html';
        echo "<script>alert('Bookings Done! Thank You')</script>";
        
    }else{
        include 'hotelbook.html';
        echo "<script>alert('Data not inserted')</script>";
        
    }


}
?>