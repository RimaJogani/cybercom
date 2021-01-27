<?php

$food = array('Pizza','Sendwitch');

foreach($food as $item)
{
	echo $item.'<br>';
}

//echo $food;
echo $food[0];

$food[0]='fruits';
print_r($food);


//Associative Array
$food1=array('Pizza'=>100,'Sendwitch'=>200);
print_r($food1);

//Multi Dimentional Array..

$food2=array('Healthy'=>array('Pasta','Salad'),'unHealthy'=>array('Pizza'));
print_r($food2);

echo $food2['Healthy'][0];

//foreach statement..

foreach($food2 as $elements => $inner_array ){
	echo '<strong>' .$elements.'</strong><br>';//Healthy and UnHealthy
	echo $inner_array.'<br>';//Array keyword
	foreach($inner_array as $item){
		echo $item .'<br>';//Array item
	}

} 



?>