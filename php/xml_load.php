<?php

$xml=simplexml_load_file('xml_file.xml');

//echo $xml->producer[1]->name." is age ".$xml->producer[1]->age;

foreach ($xml->producer as $producer) {

	echo $producer->name." is age ".$producer->age.'<br>';
	foreach ($producer ->show as $show) {

		echo $show->showname.' is open on '.$show->showdate.'<br>';
		# code...
	}
	# code...
}

?>