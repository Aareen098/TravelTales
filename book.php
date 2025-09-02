<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $myname1 = $_POST['myname1'];
    $myemail = $_POST['myemail'];
    $myphone = $_POST['myphone'];
    $myage = $_POST['myage'];
    $guests = $_POST['guests'];
    $departuredate = $_POST['departuredate'];
    $returndate = $_POST['returndate'];  
    $td = $_POST['td']; 
    $package = $_POST['package']; 
    $query = "INSERT INTO booknow(myname1,myemail,myphone,myage,guests,departuredate,returndate,td,package) VALUES ('$myname1','$myemail','$myphone','$myage','$guests','$departuredate','$returndate','$td','$package')";
    $result = mysqli_query($conn,$query);
    if($result > 0){
        include 'index.html';
        echo "<script>alert('Bookings Done! Thank You')</script>";
        
    }else{
        include 'book.html';
        echo "<script>alert('Data not inserted')</script>";
        
    }


}
?>