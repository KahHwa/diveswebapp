<?php
if (!isset ($_GET['JobId'])){
     include ("recommend_home.php");
 }
    $connect = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");  
    $sql1= "SELECT * FROM microsoft_job WHERE microsoft_job.Id=".$_GET['JobId'];                                
    if($query1= mysqli_query($connect, $sql1)){
        $result1=mysqli_fetch_assoc($query1);
    }
    $keyword1 = $result1['Requirement1'];
    $keyword2 = $result1['Requirement2'];
    $keyword3 = $result1['Requirement3'];
    $sql ="SELECT * FROM test_data WHERE CONCAT(Skill1,Skill2,Skill3) LIKE ''%'.$keyword1.'%'' or ''%'.$keyword2.'%'' or ''%'.$keyword3.'%''";
    if($query= mysqli_query($connect, $sql)){
        $result=mysqli_fetch_assoc($query);
    }
?>


    <h1>Applicant rank for<br> </h1> <h3>Job Id: <?php echo $_GET['JobId']; ?> - Job Position: <?php echo $result1['Position']; ?></h3>
    <br ><br>
    <?PHP 
        echo ' '.$keyword1. ' ';
        echo ' '.$keyword1. ' ' ;
        echo ' '.$keyword3. ' ';
    ?>
    <br>
    <?php

    if(mysqli_num_rows($query)==0){?>
       <h5> <?php echo "Sorry,no applicant match the criterion";?> </h5><?php
    }
    else{
    ?>
        <div>
             <table class="table table-bordered">  
                <tr>  
                   <th>Applicant Id </th>
                   <th>Applicant Name</th>  
                   <th>Skill 1</th>
                   <th>Skill 2</th>
                   <th>Skill 3</th>
                </tr>
                   <?php
                   do {
                   ?>
                <tr>
                  <td><?php echo $result['Id']; ?></td>  
                  <td><?php echo $result['Name']; ?></td>  
                  <td><?php echo $result['Skill1']; ?></td>
                  <td><?php echo $result['Skill2']; ?></td>
                  <td><?php echo $result['Skill3']; ?></td>
                </tr>  
            <?php }while($result=mysqli_fetch_assoc($query))?>
           </table>
        </div>
        
<?php }
?>
<a class="btn btn-info btn-xs" href="recommend.php">Back</a>