<html>
<body>
<?php
$servername = "ap-cdbr-azure-southeast-b.cloudapp.net";
$username = "b0ee69da112db5";
$password = "55cc88e9";
$database = "diveswebapp";

// Create connection
$conn = mysqli_connect($servername, $username,$password, $password);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else{
    echo"Connected to database";
}
$sql = "SELECT Id, Requirement1, Requirement2, Requirement3 FROM microsoft_job ORDER BY Id";
$query = mysqli_query($sql);

$num_fields=mysqli_num_fields($query);
$num_rows=mysqli_num_rows($query);

$skillset = array();
while ($line=mysqli_fetch_array($query, MYSQL_ASSOC)){
            $skillset[]=$line;
}
echo json_encode($skilset);  
for($i=0;$i<$num_rows;$i++)
{
  for($j=0;$j<$num_fields;$j++)
  {
  echo " ". $skillset[$i][$j]. " ";
  }
echo '<br>';
}
?>
</body>
</html>
