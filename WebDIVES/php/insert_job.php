
 <?php  
 //insert.php  
 $connect = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $position = mysqli_real_escape_string($connect, $data->position);       
      $requirement1 = mysqli_real_escape_string($connect, $data->requirement1);
      $requirement2 = mysqli_real_escape_string($connect, $data->requirement2);
      $requirement3 = mysqli_real_escape_string($connect, $data->requirement3);
      $vacancy = mysqli_real_escape_string($connect, $data->vacancy);
      $applicant = mysqli_real_escape_string($connect, $data->applicant);
      $job_status = mysqli_real_escape_string($connect, $data->job_status;
      $btn_name = $data->btnName;
      if ($btn_name == "ADD")
      {
        $query = "INSERT INTO microsoft_job (Position, Requirement1, Requirement2, Requirement3, Vacancy, Applicants, Job_status ) VALUES ('$position', '$requirement1', '$requirement2', '$requirement3', '$vacancy', '$applicant', '$job_status' )";  
        if(mysqli_query($connect, $query))  
        {  
           echo "Data Inserted...";  
        }  
        else  
        {  
           echo 'Error';  
        } 
      }
      if ($btn_name == "Update")
      {
        $userid = $data->userid;
        $query = "UPDATE test_data SET Name = '$username', SKill1 = '$skill1', Skill2 = '$skill2', Skill3 = '$skill3' WHERE Id ='$jobid' ";  
        if(mysqli_query($connect, $query))  
        {  
            echo 'Data Updated...';  
        }  
        else  
        {  
            echo 'Error';  
        }
      }
       
 }  
 ?> 