<?php


try{

	function division($no1,$no2){
		if($no2==0){
			throw new Exception("not divisible by 0");
			
		}
		else
			return $no1/$no2;
	}

}catch(Exception $ex){
	echo "error.".$ex->getMessage();
}

echo "output : ".division(10,5);


?>