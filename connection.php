<?php
// Database credentials
$servername = "localhost"; // Database server (usually 'localhost')
$username = "root";        // Database username
$password = "";            // Database password
$dbname = "traveltales"; // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
