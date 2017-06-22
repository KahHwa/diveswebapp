<?php  
 //select.php  
 $connect = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");  
 $data = json_decode (file_get_contents("php://input"));
 if (count($data)>0){
    $req1 = $data->req1;
    $req2 = $data->req2;
    $req3 = $data->req3;
    
    $output = array();
    $query = "SELECT Id, Name, Skill1, Skill2, Skill3 FROM test_data WHERE Skill1='$req1' or Skill2='$req2' or Skill3='$req3'  ";  
    $result = mysqli_query($connect, $query); 
    if(mysqli_num_rows($result) > 0)  
    {  
        while($row = mysqli_fetch_array($result))  
        {  
            $output[] = $row;  
        }  
        echo json_encode($output);  
    }  
 }
 ?>