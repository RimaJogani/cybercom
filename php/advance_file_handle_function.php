<?php
//open the file..
$file_read=fopen("file.txt", "rb");

/*if($file_read){
	echo "file is read";

}
else{
	echo "file not found";
}*/
//echo fgets($file_read).'<br>';



// read the enire file....
/*while(!feof($file_read)){
	echo fgets($file_read);
}*/

//close the file....
fclose($file_read);


//write the file...


/*$file_read=fopen("file.txt", "a");

if(fwrite($file_read,'Hello World')==false)
{
	echo '<br> not write';
}else{
	echo '<br> sucessfull write';
}*/


if(isset($_POST['user_name'])){

	$user_name=$_POST['user_name'];
	if(!empty($_POST['user_name'])){

		$file_read=fopen("file.txt","a");

		

		fwrite($file_read,$user_name);

		$readin=file("file.txt");
		foreach ($readin as $name) {
			echo trim($name);
			# code...
		}


	}
}


//file_put_contents use to direct open and close file..
file_put_contents("file.txt", "world war 1",FILE_APPEND);



//delete the file...
//unlink("new_file.txt");

	$file_read=fopen("file.txt", "rb");

		//reads the length of the file
		$data=fread($file_read,filesize("file.txt"));	
		echo 'Length of the file : '.$data.'<br>';

fclose($file_read);
?>


<form action="" method="POST">

	<input type="text" name="user_name"><br><br>
	<input type="submit" name="ok">
	</form>