<?php

class circle{
	const pi=3.14;

	public function __construct($radius){
		 $this->area($radius);
	}

	public function area($radius){

		echo "circle area : ".self::pi *($radius * $radius * $radius);

	}

}

$circle=new circle(10);

//$circle->area(10);


?>