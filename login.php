<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $myname = $_POST['myname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $query = "INSERT INTO login(myname,email,password,confirm) VALUES ('$myname','$email','$password','$confirm')";
    $result = mysqli_query($conn,$query);
    if($result > 0){
        include 'index.html';
        echo "<script>alert('Account created successfully! Thank You')</script>";
        
    }else{
        include 'login.html';
        echo "<script>alert('Data not inserted')</script>";
        
    }
}
?>