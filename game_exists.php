<?php

$dbname = "gmilouc1_initiative";
$dbpwd = "miph6Saezook";
$dbuser = "gmilouc1";
 
$host = "mysql.cs.binghamton.edu";
$cid = mysqli_connect($host, $dbuser, $dbpwd, $dbname);
 
 
$game_id = $_GET["game_id"];
$game_id = str_replace("/", "", $game_id);
//echo $game_id;
 
 
 
$sql = "select * from games where game_id LIKE '$game_id'";
$result = mysqli_query($cid, $sql);
if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
echo "TRUE";
	

}
else{
	echo "FALSE";
}


?>
