<?php

//$data['category'][1]['categoryname']='c1';
//$data['category'][1]['attribute'][1]['attributename']='a1';
//$data['category'][1]['attribute'][1]['option'][1]['optionname']='o1';
//$data['category'][1]['attribute'][1]['option'][2]['optionname']='o2';
//$data['category'][2]['categoryname']='c2';
//$data['category'][2]['attribute'][2]['attributename']='a2';
//$data['category'][2]['attribute'][2]['option'][3]['optionname']='o3';
//$data['category'][2]['attribute'][2]['option'][4]['optionname']='o4';


//echo "<pre>";

//print_r($data);

$data = [

	['category'=>1,'categoryname'=>'c1','attribute'=>1,'attributename'=>'a1','option'=>1,'optionname'=>'o1'],
	['category'=>1,'categoryname'=>'c1','attribute'=>1,'attributename'=>'a1','option'=>2,'optionname'=>'o2'],
	['category'=>1,'categoryname'=>'c1','attribute'=>2,'attributename'=>'a2','option'=>3,'optionname'=>'o3'],
	['category'=>1,'categoryname'=>'c1','attribute'=>2,'attributename'=>'a2','option'=>4,'optionname'=>'o4'],
	['category'=>2,'categoryname'=>'c2','attribute'=>3,'attributename'=>'a3','option'=>5,'optionname'=>'o5'],
	['category'=>2,'categoryname'=>'c2','attribute'=>3,'attributename'=>'a3','option'=>6,'optionname'=>'o6'],
	['category'=>2,'categoryname'=>'c2','attribute'=>4,'attributename'=>'a4','option'=>7,'optionname'=>'o7'],
	['category'=>2,'categoryname'=>'c2','attribute'=>4,'attributename'=>'a4','option'=>8,'optionname'=>'o8']

];
$final=[];
foreach ($data as $key => $value) {

	$final['category'][$value['category']]['name']=$value['categoryname'];
	$final['category'][$value['category']]['attribute'][$value['attribute']]['name']=$value['attributename'];
	$final['category'][$value['category']]['attribute'][$value['attribute']]['option'][$value['option']]['name']=$value['optionname'];

	
}



//echo "<pre>";

//print_r($final);



$final1=[];
$data1 = [
	'category'=> [
		'1'=>[
			'name' => 'c1',
			'attribute'=>[
				'1' => [
					'name'=>'a1',
					'option' => [
						'1'=>[
							'name' => 'o1'
						],
						'2'=>[
							'name' => 'o2'
						]
					]
				],
				'2' => [
					'name'=>'a2',
					'option' => [
						'3'=>[
							'name' => 'o3'
						],
						'4'=>[
							'name' => 'o4'
						]
					]
				]
			]
		],
		'2'=>[
			'name' => 'c2',
			'attribute'=>[
				'3' => [
					'name'=>'a3',
					'option' => [
						'5'=>[
							'name' => 'o5'
						],
						'6'=>[
							'name' => 'o6'
						]
					]
				],
				'4' => [
					'name'=>'a4',
					'option' => [
						'7'=>[
							'name' => 'o7'
						],
						'8'=>[
							'name' => 'o8'
						]
					]
				]
			]
		]
	]
];



foreach ($data1 as $value) {

	
	foreach ($value as $key1 => $value1) {

		foreach ($value1['attribute'] as $key2=> $value2) {
			
			foreach ($value2['option'] as $key3 => $value3) {
				
					$final1[]=[
						"category"=>$key1,
						"categoryname"=>$value1['name'],
						"attribute"=>$key2,
						"attributename"=>$value2['name'],
						"option"=>$key3,
						"optionname"=>$value3['name']

					];



			}
			
		
		}

	}


	# code...
}


echo "<pre>";
print_r($final1);



?>