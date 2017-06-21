<?php  
 //select.php  
 $connect = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");  
 $output1 = array();
 $output2 = array();
 $point= array();
 $query1 = "SELECT Id, Position, Requirement1, Requirement2, Requirement3 FROM microsoft_job ";  
 $query2 = "SELECT Id, Name, Skill1, Skill2, Skill3 FROM testdata";  
 $result1 = mysqli_query($connect, $query1); 
 $result2 = mysqli_query($connect, $query2);  
 if(mysqli_num_rows($result1) > 0)  
 {  
      while($row1 = mysqli_fetch_array($result1))  
      {  
           $output1[] = $row1;  
      }  
}  
  if(mysqli_num_rows($result2) > 0)  
 {  
      while($row2 = mysqli_fetch_array($result2))  
      {  
           $output2[] = $row2;  
      }  
       
 }  
 $point= array();
 for ($x=1; $x<80;$x++){
    $point[$x] = 0;
 }
 
// $keyword_column_size = mysql_num_fields($output1);
  $keyword_row_size = mysql_num_rows($output1);
   //$skillset_column_size = mysql_num_fields($output2);
  $skillset_row_size = mysql_num_rows($output2);
  
  for ($x =1; x<=$keyword_row_size; x++){
    $keyword1 = $output1[x][3]; 
    $keyword2 = $output1[x][4]; 
    $keyword3 = $output1[x][5]; 

    for ($i =1; i<=$skillset_row_size;i++){
        for ($ii =3; ii<=5;ii++){
        if ((keyword1== $output2[i][ii] )&& ii==3){
            $point[$x] += 1000;
        }
        if ((keyword1== $output2[i][ii] )&& ii==4){
            $point[$x] += 900;
        }
        if ((keyword1== $output2[i][ii] )&& ii==5){
            $point[$x] += 800;
        }
        if ((keyword2== $output2[i][ii] )&& ii==3){
            $point[$x] += 700;
        }
        if ((keyword2== $output2[i][ii] )&& ii==4){
            $point[$x] += 600;
        }
        if ((keyword2== $output2[i][ii] )&& ii==5){
            $point[$x] += 500;
        }
        if ((keyword3== $output2[i][ii] )&& ii==3){
            $point[$x] += 400;
        }
        if ((keyword3== $output2[i][ii] )&& ii==4){
            $point[$x] += 300;
        }
        if ((keyword3== $output2[i][ii] )&& ii==5){
            $point[$x] += 200;
        }
      } 
      $Id = $output2[i][1];  
      $Username = $output2[i][2];  
      $Score== $point[i] ; 
      $sql = "INSERT INTO Rank(Id, Username, Score) VALUES ('$Id', '$Username', '$Score')";
      mysqli_query($connect,$sql);
    }
  }

   

 ?>