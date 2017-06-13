<html>
<body>
    <?php 

        require 'connection.php';

        $companyName=$_POST["companyName"];
        $email=$_POST["email"];
        $password = $_POST["password"];
        $query =mysqli_query("SELECT * FROM registercompany where EMAIL='$email'");
        $result=mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);
        // $row = 0;
        if ($row[0]>0){
                $sql = "INSERT INTO registercompany(COMPANY_NAME, EMAIL, PASS) VALUES ('$email', '$email', '$password')";

                if ($conn->query($sql) == TRUE) {
                    echo "New record created successfully";}
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        }
        else{
            echo "User Already Exist! " ;
        }
    ?>
    <a href="../html/dashboard.html">Click Here to Continue</a>
</body>
</html>