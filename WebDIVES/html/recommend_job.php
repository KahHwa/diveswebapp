<?php
if (!isset ($_GET['JobId'])){
     include ("recommend_home.php");
 }
    $sql = "SELECT test_data.Id AS USERID, test_data.Name AS USERNAME, test_data.Skill1 AS SKILL1, test_data.Skill2 AS SKILL2, test_data.Skill3 AS SKILL3, microsoft_job.Id AS JOBID, microsoft_job.Position AS JOBTITLE FROM test_data JOIN microsoft_job ON test_data.Skill1=microsoft_job.Requirement1 or test_data.Skill2=microsoft_job.Requirement2 or test_data.Skill3=microsoft_job.Requirement3 WHERE microsoft_job.Id=".$_GET['JobId']; 
    $sql1= "SELECT * FROM microsoft_job WHERE microsoft_job.Id=".$_GET['JobId'];                                
    $connect = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");  
    
    if($query= mysqli_query($connect, $sql)){
        $result=mysqli_fetch_assoc($query);
    }
    if($query1= mysqli_query($connect, $sql1)){
        $result1=mysqli_fetch_assoc($query1);
    }
    
    // function KMP ($quest){
    //     $connect = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");      
    //     $KMP_result = mysqli_query($connect, $quest)
    //     return $KMP_result;
    // }

    // if (!isset ($_GET['JobId'])){
    //     include ("recommend_home.php");
    // }
    // else{
    //     $keyword1 =  $result1['Key1'];
    //     $keyword2 =  $result1['Key2'];
    //     $keyword3 =  $result1['Key3'];
    //     $quest= "SELECT * FROM test_data WHERE CONCAT('Skill1','Skill2','Skill3') LIKE '$keyword1' or '$keyword2' or' $keyword3'";
    //     $search_result= KMP($quest);
    // } 
?>

    <h1>Applicant rank for<br> </h1> <h3>Job Id: <?php echo $_GET['JobId']; ?> - Job Position: <?php echo $result1['Position']; ?></h3>
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
                  <td><?php echo $result['USERID']; ?></td>  
                  <td><?php echo $result['USERNAME']; ?></td>  
                  <td><?php echo $result['SKILL1']; ?></td>
                  <td><?php echo $result['SKILL2']; ?></td>
                  <td><?php echo $result['SKILL3']; ?></td>
                </tr>  
            <?php }while($result=mysqli_fetch_assoc($query))?>
           </table>
        </div>
        
<?php }
?>
<a class="btn btn-info btn-xs" href="recommend.php">Back</a>