
 <?php  
 //insert.php  
 $connect = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $username = mysqli_real_escape_string($connect, $data->username);       
      $skill1 = mysqli_real_escape_string($connect, $data->skill1);
      $skill2 = mysqli_real_escape_string($connect, $data->skill2);
      $skill3 = mysqli_real_escape_string($connect, $data->skill3);
      $query = "INSERT INTO test_data(Name, Skill1, Skill2, Skill3) VALUES ('$username', '$skill1', '$skill2', '$skill3')";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Inserted...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?> 