<?php

require "database_connection.php";


	//	$sql ="INSERT INTO `food` (`food`, `calories`,`healthy_unhealthy`) VALUES ('salad','1000','h')";
		$sql="SELECT * FROM `food`";
		$results=array();
		if($sql_run=mysqli_query($mysqli,$sql))
		{
			if(mysqli_num_rows($sql_run)== NULL){
				echo "Record Not found...";
			}
			else{

				
				
				while($sql_rows=mysqli_fetch_assoc($sql_run)){
					$food=$sql_rows['food'];
					$calories=$sql_rows['calories'];
					$healthy_unhealthy=$sql_rows['healthy_unhealthy'];

					echo "food name:".$food."<br>";
					echo "food Calories:".$calories."<br>";
					echo "healthy_unhealthy :".$healthy_unhealthy."<br>";
				}
			}
		}
		




?>