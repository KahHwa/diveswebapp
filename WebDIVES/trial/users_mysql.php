<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("ap-cdbr-azure-southeast-b.cloudapp.net", "b0ee69da112db5", "55cc88e9", "diveswebapp");

$result = $conn->query("SELECT Name, Skill1, Skill2, Skill3 FROM test_data");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["Name"]       . '",';
    $outp .= '"Skill1":"'   . $rs["Skill1"]   . '",';
    $outp .= '"Skill2":"'   . $rs["Skill2"]   . '",';
    $outp .= '"Skill3":"'   . $rs["Skill3"]   . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>