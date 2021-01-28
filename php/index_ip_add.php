<?php

require 'index_ipadd_include.php';



	if(!empty($http_client)){
		$ip_add=$http_client;
	}
	else if(!empty($http_x_for)){
		$ip_add=$http_x_for;
	}
	else
	{
		$ip_add=$ipaddress;
	}

	echo $ip_add;
foreach($add_arr as $ip){

	//echo $ip.'  ' ;
	if($ipaddress==$ip)
	{
		
		die('block ,'.$ipaddress);

	}
	
}

?>