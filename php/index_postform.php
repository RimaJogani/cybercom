<?php

	$find=array('rima','riddhi','payal');
	$replace=array('R**a','R****i','P***l');

	if(isset($_POST['user_input']) && !empty($_POST['user_input'])){

		$user= $_POST['user_input'];
		$user_lc=strtolower($user);
		echo str_replace($find, $replace, $user_lc);
	}



?>

<form  action="index_postform.php" method="POST">

	<hr>
	<textarea name="user_input" rows="5" cols="20"><?php  echo $find; ?> </textarea><br><br>

	<input type="submit" name="submit" value="submit">
	

</form>