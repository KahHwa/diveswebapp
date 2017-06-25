<table class="table table-bordered">  
                                <tr>  
                                    <th>Job Id </th>
                                    <th>Job Name</th>  
                                    <th>Requirement 1</th>
                                    <th>Requirement 2</th>
                                    <th>Requirement 3</th>
                                    <th>Recommended Applicants</th>
                                </tr>
                    
                                    <?php
                                      $connect = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");  
                                      $sq= "SELECT * FROM microsoft_job";
                                      $q = mysqli_query($connect, $sq);
                                      $res = mysqli_fetch_assoc($q);      
                                    do {
                                    ?>
                                <tr>
                                        <td><?php echo $res['Id']; ?></td>  
                                        <td><?php echo $res['Position']; ?></td>  
                                        <td><?php echo $res['Requirement1']; ?></td>
                                        <td><?php echo $res['Requirement2']; ?></td>
                                        <td><?php echo $res['Requirement3']; ?></td>
                                        <td><a class="btn btn-info btn-xs" href="recommend.php?page=job&JobId=<?php echo $res['Id'];?>">Show Results></a></td>
                                </tr>  
                                <?php }while($res=mysqli_fetch_assoc($q))?>
</table>