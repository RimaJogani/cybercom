<?php

	$server=$_SERVER['SCRIPT_NAME'];
	//$server=$_SERVER['HTTP_HOST'];

?>


<form action="<?php echo $server; ?>" method="POST">

	<input type="submit" name="ok" value="submit">
	


</form>
