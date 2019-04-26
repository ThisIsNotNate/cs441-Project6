

<?php

$dbname = "gmilouc1_initiative";
$dbpwd = "miph6Saezook";
$dbuser = "gmilouc1";



$game_id = $_GET["game_id"]; //parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$game_id = str_replace("/", "", $game_id);

//echo $game_id;
 
$host = "mysql.cs.binghamton.edu";
$cid = mysqli_connect($host, $dbuser, $dbpwd, $dbname);
 
$sql = "select * from players where game_id LIKE '".$game_id."' order by initiative desc";
//echo $sql;
//$sql = "select * from players";
$result = mysqli_query($cid, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
 

 echo json_encode($row);
}



?>
