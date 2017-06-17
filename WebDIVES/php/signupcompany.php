<html>
<body>
    <?php 

        //require 'connection.phps';
        $conn = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");
        $check ="SELECT * FROM registercompany where EMAIL='$email', COMPANY_NAME ='$companyName' ";
        $rs = mysqli_query($conn,$check);
        $data=mysqli_fetch_array($rs,MYSQLI_NUM);
        if ($data[0]>1){
            echo "Username or Email Already Taken<br/>";

        }
        else{
             $sql = "INSERT INTO registercompany(COMPANY_NAME, EMAIL, PASS) VALUES ('$companyName', '$email', '$password')";
                if (mysqli_query($conn,$sql)) {
                    echo "New record created successfully";}
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        }
        /*
        $companyName=$_POST["companyName"];
        $email=$_POST["email"];
        $password = $_POST["password"];
        $query =mysqli_query("SELECT * FROM registercompany where EMAIL='$email', COMPANY_NAME ='$companyName' ");
        $result=mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);
        // $row = 0;
        if ($row!=0){
                 echo "User Already Exist! " ;
        }
        else{
              $sql = "INSERT INTO registercompany(COMPANY_NAME, EMAIL, PASS) VALUES ('$companyName', '$email', '$password')";
                if ($conn->query($sql) == TRUE) {
                    echo "New record created successfully";}
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        }*/
    ?>
    <a href="../html/dashboard.html">Click Here to Continue</a>
</body>
</html>