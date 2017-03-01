<html>
<body>
    <?php
        $email= $_POST["email"];
        $password = $_POST["password"];
        $reenter = $_POST["reenterpassword"];
        
        //insert data
        $sql = "insert into signup_organizer(email, passord, reenterpassword" values ( '{$mysqli ->real_escape_string($_POST['email'])}','{$mysqli ->real_escape_string($_POST['password'])}','{$mysqli ->real_escape_string($_POST['reenterpassword'])}')
        
    ?>

    <a href="../html/dashboard.html">Click Here to Continue</a>
</body>
</html>
