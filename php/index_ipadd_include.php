<?php
	
	$ipaddress=$_SERVER['REMOTE_ADDR'];

	$add_arr=array('::1','100:1:12:120');

	$http_client=$_SERVER['HTTP_CLIENT_IP'];

	$http_x_for=$_SERVER['HTTP_X_FORWARDED_FOR'];


?>