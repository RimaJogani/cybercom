<?php  
	
	if(isset($_POST['ok'])){

		echo rand(1,6);
	}


?>
<form action=random_no.php method="POST">

	<input type="submit" name="ok" value="random_no">
	



</form>
