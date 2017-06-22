<?php
    if (!isset ($_GET['JobId'])){
        include ("recommend_home.php");
    }
    
    $sql = "SELECT test_data.Id, test_data.Name, test_data.Skill1, test_data.Skill2, test_data.Skill3, microsoft_job.Id AS JOBID, microsoft_job.Position AS JOBTITLE FROM test_data JOIN microsoft_job ON test_data.Skill1=microsoft_job.Requirement1 or test_data.Skill2=microsoft_job.Requirement2 or test_data.Skill3=microsoft_job.Requirement3 WHERE microsoft_job.Id=".$_GET['JobId']; 
    $connect = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");  
                                    
    if($query= mysqli_query($connect, $sql)){
        $result=mysqli_fetch_assoc($query);
    }
    if(mysqli_num_rows($query)!=0){
        echo "Sorry,no applicant match the criterion";
    }
    else{
?>
        <h1>Applicant rank for<br> </h1> <h3>Job Id: <?php echo $result['JOBID']; ?> Job Position: <?php echo $result['JOBTITLE']; ?></h3>
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
                  <td><?php echo $result['test_data.Id'] ?></td>  
                  <td><?php echo $result['test_data.Name'] ?></td>  
                  <td><?php echo $result['test_data.Skill1'] ?></td>
                  <td><?php echo $result['test_data.Skill2'] ?></td>
                  <td><?php echo $result['test_data.Skill3'] ?></td>
                </tr>  
            <?php }while($result=mysqli_fetch_assoc($query))?>
           </table>
        </div>
<?php }
?>