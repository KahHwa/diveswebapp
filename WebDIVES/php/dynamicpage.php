<html><body>
<?php
require ('connection.php'); 
$sql=SELECT * FROM microsoft_job;
$query= mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($query);
do{
?>
<a class="btn btn-info btn-xs" href= "applicant_rank.html?Id=<?php echo $result['Id'];?>"><?php echo $result['Position']?></a>
<?php 
} while ($result=mysqli_fetch_assoc($query))
?>
</body>
</html>