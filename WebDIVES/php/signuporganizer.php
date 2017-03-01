<html>
<body>
    <?php
        $email= $_POST["email"];
        $password = $_POST["password"];
        $reenter = $_POST["reenterpassword"];
        echo $email;
       
       if (trim($password) == trim($reenter))
       {
           echo $email;
           echo $password;
           echo $reenter;
       }
       
        
    ?>

    <a href="../html/dashboard.html">Click Here to Continue</a>
</body>
</html>
