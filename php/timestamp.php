<?php   
	
	echo time().'<br>';
	$time=time();
	echo 'Atual Time : '.$atual_time=date('H:i:s',$time).'<br>';
	echo 'Atual Time : '.$atual_time=date('D M Y',$time).'<br>';


	echo 'Time  : '.$atual_time=date('d m y @ H:i:s',$time-(7*24*30*30)).'<br>';

	echo 'Time :'.$atual_time=date('D M Y',strtotime('+1 week')).'<br>';
	echo 'Time :'.$atual_time=date('d m y',strtotime('-1 week 3 hours 30 seconds'));



?>