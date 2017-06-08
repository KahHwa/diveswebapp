<html>
<body>
    <?php

        require 'connection.php';
        
        $organizerName = $_POST["organizerName"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        // echo $email;
    
        $sql = "INSERT INTO registerorganizer(ORGANIZER_NAME, EMAIL, PASS) VALUES ('$organizerName', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";}
         else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        
       
        
    ?>

    <a href="../html/dashboard.html">Click Here to Continue</a>
</body>
</html>
