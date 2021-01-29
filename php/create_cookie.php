<?php

$cookie_name='user';
$cookie_value='google.com';

setcookie($cookie_name,$cookie_value,time()+(180),'/');

//echo $_COOKIE[$cookie_name];

?>

<html>

<?php 


	if(isset($_COOKIE[$cookie_name])){
		echo 'Cookie_name : '. $_COOKIE[$cookie_name];

	}else{
		echo '  Not careate cookies';
	}
  ?>

</html>