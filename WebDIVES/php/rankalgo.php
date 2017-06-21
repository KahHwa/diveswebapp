<html>
<body>
<?php
$servername = "ap-cdbr-azure-southeast-b.cloudapp.net";
$username = "b0ee69da112db5";
$password = "55cc88e9";
$database = "diveswebapp";

// Create connection
$conn = new mysqli($servername, $username,$password, $password);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT Id, Requirement1, Requirement2, Requirement3 FROM microsoft_job ORDER BY Id";
$query = mysqli_query($sql);

$skillset = array();
while ($line=mysqli_fetch_array($query, MYSQL_ASSOC)){
            $skillset[]= $line;
}

$num_fields=mysql_num_fields($query);
$num_rows=mysql_num_rows($query);

for($i=0;$i<$num_rows;$i++
{
  for($j=0;$j<$num_fields;$j++
  {
  echo " ". $skillset[$i][$j]. " ";
  }
echo '<br>';
}
?>
</body>
</html>