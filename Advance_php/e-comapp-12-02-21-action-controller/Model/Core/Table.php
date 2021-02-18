<?php

class Model_Table{

    protected $data=[];
	protected $adapter=null;
    protected $primaryKey = Null;
	protected $tableName =null;

    public function __construct(){
		
	}

    public function getPrimaryKey(){
		return $this->primaryKey;
	}
	public function setPrimaryKey($primaryKey){
		$this->primaryKey=$primaryKey;
		return $this;
	}
	public function getTableName(){
		return $this->tableName;
	}
	public function setTableName($tableName){
		$this->tableName=$tableName;
		return $this;
	}

	public function __set($key , $value){
				$this->data[$key]=$value;
		       return $this;

	}

	public function __get($key){
		
		if(!array_key_exists($key,$this->data)){
			return null;
		}
		return $this->data[$key];

	}

	public function setData(array $data){
		$this->data=array_merge($this->data,$data);
		
		return $this;
	}

	public function getData(){
		
		return $this->data;
	}

	public function setAdapter(){
		$this->adapter=new Adapter();
		return $this;
	}

	public function getAdapter(){
		if(!$this->adapter){
			$this->setAdapter();
		}
		return $this->adapter;
	}

	public function save(){

	
		
			if(array_key_exists($this->getPrimaryKey(),$this->getData()))
			{
					foreach($this->getData() as $key =>$value)   {
						$keys[]="`".$key."`='".$value."'";
					}
					$id=array_shift($keys);
					$keys=implode(',',$keys);
					echo $query="update `{$this->getTableName()}` set {$keys} where {$id}";
					return	$this->update($query);

					/*print_r($this->getData());
					if(array_key_exists('status',$this->getData())){
						$status=1;
	
					}else{
						$status=0;
					}
					echo  $query="update `{$this->getTableName()}` set+ `SKU`='{$this->data['sku']},`productName`='{$this->data['name']}',`productPrice`='{$this->data['price']}',`productDiscount`='{$this->data['discount']}',`productQty`='{$this->data['qty']}',`description`='{$this->data['description']}',`status`='$status',`updateDate`='{$this->data['updateDate']}' where `{$this->getPrimaryKey()}`= '{$this->data['productId']}'";
				 
					return	$this->update($query);*/



			}
			else{
					//print_r($this->getData());
					$keys=implode(",",array_keys($this->getData()));
					$values=array_values($this->getData());

					for($i=0; $i<count($values);$i++){
						$values[$i] = "'".$values[$i]."'";
					}
					$values=implode(',',$values);
					echo $query="insert into `{$this->getTableName()}` ({$keys}) values ({$values}) ";
                   
				    return $this->insert($query);
					
			}
		
	}
	public function insert($query){

		$row=$this->getAdapter()->insert($query);
        print_r($row);
		if(!$row){
			return false;
		}
		return $this;
	}

	
	public function update($query){
		
		$this->getAdapter()->connection();
		$row=$this->getAdapter()->update($query);
		print_r($row);
		if(!$row){
			return false;
		}
		return $this;
	}
	public function load($id){

		$id=(int)$id;
		  $query="select * from `{$this->getTableName()}` where `{$this->getPrimaryKey()}`=".$id;
	    return $this->fetchRow($query);
	}

	public function fetchRow($query){
		$this->getAdapter()->connection();
		$row=$this->getAdapter()->fetchRow($query);
		//print_r($row);
		if(!$row){
				return false;
		}

		$this->data=$row;
		return $this;
	}


}


?>