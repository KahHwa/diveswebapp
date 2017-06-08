<html>
<body>
    <?php 

        require 'connection.php';

        $companyName=$_POST["companyName"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO registercompany(username, email, pass) VALUES ('$companyName', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";}
         else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    ?>
    <a href="../html/dashboard.html">Click Here to Continue</a>
</body>
</html>