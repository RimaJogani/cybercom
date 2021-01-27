<?php

function space($var){

	if(preg_match('/ /',$var)){
		return true;

	}else{
		return false;
	}

}

$var='It is cat';

if(space($var)){
	echo 'Has at least one space match';
}
else
{
	echo 'Has no space';
}
?>