<?php
require 'D:\xampp_setup\htdocs\new_cycr\1\database_connection.php';

echo $c_id=$_POST["c_id"];


$sql="DELETE FROM user_contact WHERE id='$c_id'";

if($rs=mysqli_query($mysqli,$sql))
{
	echo 1;
}
else{
	echo 0;
}



?>