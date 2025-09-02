<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $destination = $_POST['destination'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $timings = $_POST['timings'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $query = "INSERT INTO busbook(destination,`type`,date,timings,name,email,phone) VALUES ('$destination','$type','$date','$timings','$name','$email','$phone')";
    $result = mysqli_query($conn,$query);
    if($result > 0){
        include 'bustrain.html';
        echo "<script>alert('Bookings Done! Thank You')</script>";
        
    }else{
        include 'busbook.html';
        echo "<script>alert('Data not inserted')</script>";
        
    }


}
?>