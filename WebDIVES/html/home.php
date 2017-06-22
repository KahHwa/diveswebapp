<table class="table table-bordered">  
                                <tr>  
                                    <th>JobId </th>
                                    <th>Job Name</th>  
                                    <th>Requirement 1</th>
                                    <th>Requirement 2</th>
                                    <th>Requirement 3</th>
                                    <th>Recommended Applicants</th>
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
                                        <td><a class="btn btn-info btn-xs" href="recommend_applicant.php?page=job&JobId=<?php echo $result['Id'];?>">Show Rank For <?php echo $result['Position']; ?></a></td>
                                </tr>  
                                <?php }while($result=mysqli_fetch_assoc($query))?>
</table>