<?php
require('./../connection/Adapter.php');
$conn=new Adapter();
$conn->connection();



$id=$_GET['id'];
    //echo $id;
	$sql = "delete from customer WHERE customerId = $id";
	mysqli_query($conn->getConnect(), $sql);
	
    mysqli_close($conn->getConnect());

?>