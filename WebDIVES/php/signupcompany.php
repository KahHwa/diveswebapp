<html>
<body>
    <?php 

        require 'connection.php';

        $email=$_POST["email"];
        $password = $_POST["password"];
        $reenter = $_POST["reenterpassword"];
        $query =mysql_query('SELECT * FROM registercompany where EMAIL='$email'');
        $result=mysql_fetch_array($query);
        $row = mysql_num_rows ($query);
        
        if ($row == 0){
                $sql = "INSERT INTO signupcompany(email, password, reenterpassword) VALUES ('$email', '$password', '$reenter')";

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