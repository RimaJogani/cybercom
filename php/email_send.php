<?php


	/*$to="rimapatel3091@gmail.com";
	$Subject="Test email";
	$msg="hii,test email";
	$header="From : rimapatel199808@gmail.com";

	mail($to, $Subject, $msg ,$header);
	echo "mail send";

*/

	if(isset($_POST['email']) && isset($_POST['Subject']) && isset($_POST['msg'])){
			$email=$_POST['email'];

		if(!empty($_POST['email']) && !empty($_POST['Subject']) && !empty($_POST['msg'])){

			$to="rimapatel3091@gmail.com";
			$Subject=$_POST['Subject'];
			$msg=$_POST['msg'];
			//$from=$_POST['email'];
			$header="From : ".$email;
			

			//$header=array("From : $from","Content-type : text/plain;charset=utf-8");
			//$header=implode("\r\n",$header);
			if(mail($to,$Subject,$msg,$header)){
				echo "mail sent";

			}else{
				echo "mail fails";
			}

		}else{
			echo "Enter detalis..";
		}

	}else{
		echo "set details..";
	}


?>


<form action="email_send.php" method="POST">

Email : <input type="email" name="email"><br><br>
Subject : <input type="text" name="Subject"><br><br>
Message : <textarea name="msg" rows="5" cols="10"></textarea><br><br>

<input type="submit" name="submit" value="submit">

</form>