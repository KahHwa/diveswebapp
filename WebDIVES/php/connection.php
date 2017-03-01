<?php
$servername = "ap-cdbr-azure-southeast-b.cloudapp.net";
$username = "b0ee69da112db5";
$password = "55cc88e9";
$database = "diveswebapp";

$servername1 = "localhost";
$username1 = "root";
$password1 = "";
$database1 = "diveswebapp";

// Create connection
$conn = new mysqli($servername1, $username1, $password1, $database1);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>