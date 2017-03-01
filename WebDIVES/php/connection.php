<?php
$servername = "ap-cdbr-azure-southeast-b.cloudapp.net";
$username = "b0ee69da112db5";
$password = "55cc88e9";
$database = "diveswebapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>