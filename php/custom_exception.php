<?php

$server="localhost";
$user_name="root";
$password="";
$db_name="practice_task1";


class ServerException extends Exception{

	public function show_error(){

		return "Error on line".$this->getLine().'in'.$this->getFile();
	}
}
class DatabaseException extends Exception{

	public function show_error(){

		return "Error on line".$this->getLine().'in'.$this->getFile();
	}
}


try{

	if(!$con=mysqli_connect($server,$user_name,$password)){

		throw new ServerException();
		
	}else if(!mysqli_select_db($con,$db_name)){

			throw new DatabaseException();
			
	}
	else{
		echo "connected...";
	}


}catch(Exception $ex){
	echo $ex->show_error();
}catch(Exception $ex){
	echo $ex->show_error();
}


?>