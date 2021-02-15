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






$sql = mysqli_query($mysqli,"SELECT * FROM array_list");
while($row = mysqli_fetch_assoc($sql)){



 
  echo $farmer = $row['farmer']."=>  ";
 echo  $doctor = $row['doctor'];
   echo $child=$row['child'];
  

}

?>