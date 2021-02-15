<?php

/*$data=[];
$data['category']['attribute1']['option1']='1';
$data['category']['attribute1']['option2']='2';
$data['category']['attribute2']['option3']='3';
$data['category']['attribute2']['option4']='4';

echo '<pre>';
print_r($data);*/
$data = [

	['category'=>1,'attribute'=>1,'option'=>1],
	['category'=>1,'attribute'=>1,'option'=>2],
	['category'=>1,'attribute'=>2,'option'=>3],
	['category'=>1,'attribute'=>2,'option'=>4],
	['category'=>2,'attribute'=>3,'option'=>5],
	['category'=>2,'attribute'=>3,'option'=>6],
	['category'=>2,'attribute'=>4,'option'=>7],
	['category'=>2,'attribute'=>4,'option'=>8]
];

$final=[];
foreach ($data as $key => $value) {

		$category=$value['category'];
		$attribute=$value['attribute'];
		$option=$value['option'];
		$final[$category][$attribute][$option]=$option;

		//$final[]=$value['category'];
	//$final['category']['attribute1']['option1']='option1';
	//$final['category']['attribute1']['option2']='option2';
	//$final['category']['attribute2']['option3']='option3';
	//$final['category']['attribute2']['option4']='option4';
	//$final['category1']['attribute1']['option1']='option1';
	//$final['category1']['attribute1']['option2']='option2';
	//$final['category1']['attribute2']['option3']='option3';
	//$final['category1']['attribute2']['option4']='option4';

}

//echo "<pre>";

//print_r($final);









$data = [
	'1'=>[
		'1' => [
			'1' => 1,
			'2' => 2		
		],
		'2' => [
			'3' => 3,
			'4' => 4		
		]
	],
	'2'=>[
		'3' => [
			'5' => 5,
			'6' => 6		
		],
		'4' => [
			'7' => 7,
			'8' => 8		
		]
	],
];



	//print_r($data);

$final=[];
echo "<pre>";

foreach ($data as $key => $value) {
	
		
		
		foreach ($value as $key1 => $value1) {
			
		
			foreach ($value1 as $key2 => $value2) {
			$final[]=['category'=>$key,'attribute'=>$key1,'option'=>$key2];
			
			
			}
			
		}
		
		
	
}

print_r($final);

?>