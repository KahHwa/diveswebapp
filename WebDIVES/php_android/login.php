<?php
    $con = mysqli_connect("mysql10.000webhost.com", "a3288368_user", "abcd1234", "a3288368_data");
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM user WHERE email = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID, $fname, $lname, $email, $password);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["fname"] = $fname;
        $response["lname"] = $lname;
        $response["email"] = $email;
        $response["password"] = $password;
    }
    
    echo json_encode($response);
?>