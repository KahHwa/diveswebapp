<html>
<body>
    <?php
        $email= $_POST["email"];
        $password = $_POST["password"];
        $reenter = $_POST["reenterpassword"];
       
       if ($password == $reenter)
       {
           echo $email;
           echo $password;
           echo $reenter;
       }
       else
       {
           echo "<a href="../html/signuporganizer.html">Click Here to Continue</a>";
       }

        
    ?>

    <a href="../html/dashboard.html">Click Here to Continue</a>
</body>
</html>
