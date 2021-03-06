<!DOCTYPE>
<html lang="en">
    <head>
        <title>DIVES - Log In</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../script/loginorganizer.js"></script>
        <link rel="stylesheet"  href="../style/login.css">
        <link rel="icon" href="/img/elg.ico"/>
    </head>
    <body>
        <!--Log in Page-->
        <div class="container">
            <div class="header">
                <?php 
                            if (!isset($_GET['role'])){
                                include ("index.php");
                            }
                            else{
                                $page = $_GET['page'];
                                $role = $_GET['role'];
                                include ("$role-$page.php");
                            }
                 ?>
                <div>
                    <p class="sansserif">WELCOME!</p>
                </div>
            </div>
            <div class="input-form">
                <form name="loginorganizer" action="../php/loginorganizer.php" onsubmit="return validateForm();" method="post">
                    <div class="form-input">
                        <input type="text" name="email" placeholder="Email" id="email">
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" placeholder="Password" id="password">
                    </div>
                    <input type="submit" name="submit" value="DIVE IN" class="btn-login">
                </form>
            </div>
            <div class="or">
                OR
            </div>
            <div class="create-acc">
                <a class="btn btn-default" role="button" href="signuporganizer.html">Create an Account</a>
            </div>
            <div class="back">
                <a href="options.php">Back</a>
            </div>
        </div>
    </body>
</html>