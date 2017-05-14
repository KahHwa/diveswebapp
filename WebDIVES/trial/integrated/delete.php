<?php  
 //delete.php  
 $connect = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $Id = $data->Id;  
      $query = "DELETE FROM test_data WHERE Id='$Id'";  
      if(mysqli_query($connect, $query))  
      {  
           echo 'Data Deleted';  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?>  