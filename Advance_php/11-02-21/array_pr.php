<?php

$server='localhost';
$username='root';
$password='';
$db_name='practice_task1';





$mysqli = mysqli_connect($server, $username, $password,$db_name);

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
	//echo "Database Not Selected!";}

}

$data=[

	"farmer"=>[


		"doctor"=>["chaild_1"=>30,"chaild_2"=>60],

		"lawyer"=>["child_3"=>30,"child_4"=>60],

		"politician"=>["child_5"=>30,"child_6"=>60]]



];

print_r(array_change_key_case($data,CASE_UPPER));







/*$farmer=$docter=$child="";


foreach ($data as $key => $value) {

	$farmer= $key;

	foreach ($value as $key1 => $value1) {
		$doctor= $key1;

		foreach ($value1 as $value2) {
		$child= $value2;
		echo $sql="INSERT INTO array_list(farmer,doctor,child)VALUES('$farmer','$doctor','$child')";
		$rs=mysqli_query($mysqli,$sql);
		if($rs){
			echo "insert successfully";
		}
		else{
			echo "error";
		}
		}
	echo "<br>";
	}

	echo "<br>";

}
*/








echo "<pre>";
print_r($data);
echo "</pre>";
	















?>