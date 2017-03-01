<html>
<body>
    <?php 

        require='connection.php';

        $email=$_POST["email"];
        $password = $_POST["password"];
        $reenter = $_POST["reenterpassword"];

        $sql = "INSERT INTO signup_company (email, password, reenterpassword)
        VALUES ($email, $password, $reenter)";

    ?>
    <a href="../html/dashboard.html">Click Here to Continue</a>
</body>
</html>