<?php
$servername = "localhost";
$username = "asw008";
$password = "pandemicfth";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 