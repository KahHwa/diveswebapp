<?php
// $servername = "localhost";
// $username = "alcointc_shopu";
// $password = "u9DKw4g84h";
// $dbname = "alcointc_shop";
// Create connection
$conn = new mysqli("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Name =$_POST['name'];
$Password = $_POST['pass'];
$sql = "INSERT INTO company_signup (Company_name , Password) VALUES ('$Name','$Password')";
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 