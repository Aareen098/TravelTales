<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['myname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $query = "INSERT INTO contactus(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
    $result = mysqli_query($conn,$query);
    if($result > 0){
        include 'index.html';
        echo "<script>alert('We'll contact you soon! Thank You')</script>";
        
    }else{
        include 'contact.html';
        echo "<script>alert('Data not inserted')</script>";
        
    }


}
?>