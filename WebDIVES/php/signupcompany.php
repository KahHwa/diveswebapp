<html>
<body>
    <?php 

        require 'connection.php';

        $email=$_POST["email"];
        $password = $_POST["password"];
        $reenter = $_POST["reenterpassword"];

        $sql = "INSERT INTO signupcompany(email, password, reenterpassword) VALUES ('$email', '$password', '$reenter')";
        if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";}
         else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    ?>
    <a href="../html/dashboard.html">Click Here to Continue</a>
</body>
</html>