<?php
		$offset=0;
	
		if(isset($_POST['user_input']) &&  isset($_POST['Search_word']) && isset($_POST['Replace_word'])){

			$user_data=$_POST['user_input'];

			$Search_word=$_POST['Search_word'];
			$str_len=strlen($Search_word);
			$Replace_word=$_POST['Replace_word'];

			if(!empty($user_data) && !empty($Search_word) && !empty($Replace_word) )
			{
				while($str_position=strpos($user_data, $Search_word,$offset)){

				    $offset=$str_position+$str_len;

					$user_data=substr_replace($user_data, $Replace_word,$str_position,$str_len);



				}
				echo $user_data;
			}
			else{
				echo 'Please Fill it';
			}

			
		}



?>

<form action="index_find_replace.php" method="POST">

	<textarea name="user_input" rows="6" cols="20"></textarea><br><br>

	Search For:<input type="text" name="Search_word">
	<br><br>

	Replace For:<input type="text" name="Replace_word"><br><br>

	<input type="submit" name="submit" value="submit">

	


</form>