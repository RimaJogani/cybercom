<?php

require_once "./Model/Core/Adapter.php";
require_once "./Model/Core/Table.php";

class Model_Product extends Model_Table{

	
	
	const STATUS_ENABLED = 1;
	const STATUS_DISABLED = 0;
	public function __construct(){
		Parent::__construct();
		$this->setTableName('product');
		$this->setPrimaryKey('productId');
	}

	public function getStatusOptions(){

		return [
			safe::STATUS_ENABLED =>"Enabled",
			safe::STATUS_DISABLED =>"Disabled"

		];
	}
	
}


?>