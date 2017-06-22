 <?php  
 //select.php  
 $connect = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");  
 $output = array();
 $query = "SELECT Id, Name, Skill1, Skill2, Skill3 FROM test_data ";  
 $result = mysqli_query($connect, $query); 
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  
 ?>