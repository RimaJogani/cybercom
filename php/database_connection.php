<?php


$server='localhost';
$username='root';
$password='';
$db_name='practice_task';





$mysqli = mysqli_connect($server, $username, $password);

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$db = mysqli_select_db($mysqli,$db_name);

if($db)
{
	//echo "Database Selected!";
}
else{
	//echo "Database Not Selected!";
}
?>