<?php
$servername = "ap-cdbr-azure-southeast-b.cloudapp.net";
$username = "b0ee69da112db5";
$password = "55cc88e9";
$database = "diveswebapp";

// Create connectionssss
$conn = new mysqli($servername, $username,$password, $password);

// Check connection
if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected To database successfully\n";
?>

