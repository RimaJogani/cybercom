<?php

if ( isset($_GET['fname'])&& !empty($_GET['fname'])){
 $fname=$_GET['fname'];


	if(strtolower($fname)=='rima')
	{
		echo 'you are the best'.$fname;
	}
}


?>

<form action="index_upperform.php" method="GET">
	
Fname:  <input type="text" name="fname">
<br>
<input type="submit" name="ok" value="submit">

</form>