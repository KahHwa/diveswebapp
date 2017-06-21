<html><body>
    <?php 
        require 'connection.php';
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = mysql_query("SELECT * FROM registercompany where EMAIL='$email'");
        $result = mysql_fetch_array($query);
        $row = mysql_num_rows($query);
        if (($email == "") && ($password == ""))
        {
            echo "Login failed";
            exit;
        }
        if($row != 0)
        {
            if($password != $result['PASS'])
            {
                echo "Wrong Password";
            }
            else
            {
                echo "Welcome to DIVES ". $result['COMPANY_NAME'];
                echo "<br>";
                echo "<a href="../html/dashboard.html">click here</a>";
            }
        }
        else
        {
            echo "Cannot find company";
        }
    ?>
</body></html>

