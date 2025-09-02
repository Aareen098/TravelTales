<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $pickup = $_POST['pickup'];
    $drop = $_POST['drop'];
    $type = $_POST['type'];

    $query = "INSERT INTO taxibook (name, date, time, pickup, `drop`, `type`) VALUES ('$name', '$date', '$time', '$pickup', '$drop', '$type')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        include 'taxi.html';
        echo "<script>alert('Booking Done! Thank You')</script>";
    } else {
        include 'taxi.html';
        echo "<script>alert('Data not inserted: " . mysqli_error($conn) . "')</script>";
    }
}
?>
