<?php

$var='hii My Self Rima';

//echo strlen($var);

for($i=1;$i<=strlen($var);$i++)
{
	echo $i.'<br>';
}


$var='hii Rima';
echo strtolower($var).'<br>';

echo strtoupper($var);

//string position

$var='This is a String, and it is example.';
$offset=0;
$find='String';

$string_len=strlen($find);

while($string_position=strpos($var,$find,$offset)){
	echo '<strong>'.$find.'</strong> found at'.$string_position.'<br>';

	$offset=$string_position+$string_len;

}

//string replace



$var ='hi myself Rima';

$new_var=substr_replace($var,'Riddhi',10,4);

echo $new_var.'<br>';



//replace predefine


$string='hello  myself Rima';

$new_str1=str_replace('hello','hi',$string);

echo $new_str1.'<br>';


$sentance=array('hello','Rima');
$replace=array('Hi','Payal');
$new_str1=str_replace($sentance,$replace,$string);
echo $new_str1.'<br>';
?>