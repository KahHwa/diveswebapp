 <?php  
//  $db_name = "webappdb";  
//  $mysql_user = "root";  
//  $mysql_pass = "root";  
//  $server_name = "localhost";  
 $con = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp"); 

 $user_name = $_POST["login_name"];  
 $user_pass =  $_POST["login_pass"];  
 $sql_query = "select Company_name from company_signup where Password like '$user_pass';";  
 $result = mysqli_query($con,$sql_query);  
 if(mysqli_num_rows($result) >0 )  
 {  
 $row = mysqli_fetch_assoc($result);  
 $name =$row["Company_name"];  
 echo "Login Success..Welcome ".$name;  
 }  
 else  
 {   
 echo "Login Failed.......Try Again..";  
 }  
 ?> 