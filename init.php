
<?php

$dbname = "gmilouc1_initiative";
$dbpwd = "miph6Saezook";
$dbuser = "gmilouc1";
 
$host = "mysql.cs.binghamton.edu";
$cid = mysqli_connect($host, $dbuser, $dbpwd, $dbname);
 
$sql = "select * from players";
$result = mysqli_query($cid, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
 $nm = $row["name"];
 $hp = $row["current_health"];

 echo json_encode($row);
}



?>


