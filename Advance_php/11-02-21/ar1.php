<?php
$numbers= ["Rima","Riddhi","Payal","123"];

sort($numbers);
print_r($numbers);

print_r(sort($numbers));//output 1
print_r(array_change_key_case($numbers,CASE_UPPER));




$data=[
		"name"=>"rima",
		"age"=>21,
		"address"=>"Nikol"


];
sort($data);


//print_r($data);



?>