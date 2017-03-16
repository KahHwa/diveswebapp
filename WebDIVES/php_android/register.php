<?php
$con = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];


$statement = mysqli_prepare($con, "INSERT INTO user (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($statement, "ssss", $firstname, $lastname, $email, $password);
mysqli_stmt_execute($statement);

$response = array();
$response["success"] = true;

echo json_encode($response);

?>