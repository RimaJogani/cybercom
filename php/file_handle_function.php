<?php

$file="file.txt";


if(file_exists($file))
{
	//echo readfile($file);

	//copy($file, "new_file.txt");
	//rename("new_file.txt","old_file.txt");
	//unlink("old_file.txt");

	//mkdir("textfile	");

	//mkdir("textfile1");
	//rmdir("textfile1");
	echo 'file size : '.filesize($file).'<br>';
	echo 'File Type : '.filetype($file).'<br>';
	echo 'Path : '.realpath($file).'<br>';

	echo '<pre>';
	print_r(pathinfo(realpath($file))) ;	
	echo '</pre>';

		print_r(pathinfo(realpath($file),PATHINFO_DIRNAME).'<br>');
	print_r(pathinfo(realpath($file),PATHINFO_BASENAME).'<br>');
	print_r(pathinfo(realpath($file),PATHINFO_FILENAME).'<br>');
	print_r(pathinfo(realpath($file),PATHINFO_EXTENSION).'<br>');




	echo basename(realpath($file).'<br>');
	echo dirname(realpath($file));
}
else
{
	echo 'file does not exist';
}



?>