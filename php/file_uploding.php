<?php

if(isset($_FILES['img'])){
	echo '<pre>';
	print_r($_FILES);
	echo '</pre>';


	$file_name=$_FILES['img']['name'];

	$extension=strtolower(substr($file_name,strpos($file_name,'.')+1));
	$file_size=$_FILES['img']['size'];
	$file_tmpname=$_FILES['img']['tmp_name'];
	$file_type=$_FILES['img']['type'];


	if($extension=='jpg' || $extension=='jpeg' && $file_size<=2097125){

		if(move_uploaded_file($file_tmpname,"textfile/".$file_name )){
			echo 'sucsessful upload';

		}else{
			echo 'not upload';
		}

	}
	else{
		echo 'must be jpg';
	}
	

}
?>





<form action='' method="POST" enctype="multipart/form-data">
	

<input type="file" name="img"><br>

<input type="submit" name="ok">

</form>