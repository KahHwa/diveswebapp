<?PHP include_once("connection.php"); 
if( isset($_POST['txtUsername']) && isset($_POST['txtPassword']) ) { 
  $result = mysql_query("SELECT username, password FROM tbl_user ". " WHERE username = '".    
      $_POST['txtUsername'] ."' AND " . " password = '" . $_POST['txtPassword']. "'");   
  if(mysql_num_rows($result) > 0) { 
     if($_POST['mobile'] == "android"){ 
       echo "login_success"; 
        exit; 
    } 
    header("location: index.php"); 
  } 
  else{ 
    echo "Login Failed";
  } 
}
Login | KosalGeek
 
 
<h1>Login Example | <a href="”http://www.kosalgeek.com”">KosalGeek</a></h1>
<form action="<?PHP $_PHP_SELF ?>" method="post">
Username <input name="txtUsername" type="text" value="" />
Password <input name="txtPassword" type="password" value="" />
<input name="btnSubmit" type="submit" value="Login" /></form> 