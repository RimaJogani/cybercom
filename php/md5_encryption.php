<?php

	$md_pass=$file_read=$pass=$pass_e=" ";

if(isset($_POST['password'])){




	if(!empty($_POST['password'])){

		//echo 'password'.$pass.'<br>';
		//echo 'Binary formet : '.md5($pass,true);

		$md_pass=md5($_POST['password']);
		echo "md_pass : ".$md_pass;

		$filename="hash.txt";
		
		echo "write :".file_put_contents($filename, $md_pass."\n",FILE_APPEND);
	
		$file_handle=fopen($filename,'r');


		echo "file open: ".$file_read=fread($file_handle, filesize($filename));

		if(!$md_pass==$file_read){

			echo "password Incorrect..";
		}
		else{
			echo "password correct..";
		}

		

	}
	else
	{
		$pass_e='Password is required....';
	}



}

else{

	echo "set password";
}



?>






<form action="md5_encryption.php" method="POST">

	Password : <input type="Password" name="password"><?php  echo $pass_e; ?>
	<br><br>
	<input type="submit" name="submit" value="submit">
	



</form>