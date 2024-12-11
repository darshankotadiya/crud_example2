<?php
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = "";     // Replarf3t3t3fr3ce with your MySQL password
$dbname = "crud_example";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
