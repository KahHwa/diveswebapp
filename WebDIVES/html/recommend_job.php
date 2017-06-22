<?php
    if (!isset ($_GET['JobId'])){
        include ("recommend_home.php");
    }
    $sql = "SELECT test_data.Id, test_data.Name, test_data.Skill1, test_data.Skill2, test_data.Skill3, microsoft_job.Id, microsoft_job.Position FROM test_data JOIN microsoft_job ON test_data.Skill1=microsoftjob_Requirement1 or test_data.Skill2=microsoftjob_Requirement2 or test_data.Skill3=microsoftjob_Requirement3 WHERE microsoft_job.Id=".$_GET['Id']; 
    if($query= mysqli_query($connect, $sql)){
        $result=mysqli_fetch_assoc($query);
    }
    if(mysqli_num_rows($query)==0){
        echo "Sorry, no applicant match the criteria";
    }
    else{
?>
        <h1>Applicant rank for Job Id =<?php echo " ".$_GET['Id']; ?> and Job Position :<?php echo $result['Position']; ?> </h1>
            <table class="table table-bordered">  
                <tr>  
                   <th>Applicant Id </th>
                   <th>Applicant Name</th>  
                   <th>Skill 1</th>
                   <th>Skill 2</th>
                   <th>Skill 3</th>
                </tr>
                   <?php
                    $connect = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");  
                    $sql= "SELECT * FROM microsoft_job";
                    $query = mysqli_query($connect, $sql);
                    $result = mysqli_fetch_assoc($query);      
                do {
                   ?>
                <tr>
                  <td><?php echo $result['Id'] ?></td>  
                  <td><?php echo $result['Position'] ?></td>  
                  <td><?php echo $result['Requirement1'] ?></td>
                  <td><?php echo $result['Requirement2'] ?></td>
                  <td><?php echo $result['Requirement3'] ?></td>
                  <td><a class="btn btn-info btn-xs" href="recommend.php?page=job&JobId=<?php echo $result['Id'];?>">Show Rank For <?php echo $result['Position']; ?></a></td>
                </tr>  
            <?php }while($result=mysqli_fetch_assoc($query))?>
           </table>
        
        
        
        
        
        
        
        <h1><?php echo $result['']; ?></h1>
        echo "User with Highest Ranked are: ";

    }
<?php
?>