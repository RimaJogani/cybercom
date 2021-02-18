<?php


class Adapter{

	private $config=[
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'onlineapp'

		];
	private $connect=null;
	public function connection(){
			$connect=new mysqli($this->config['host'],$this->config['username'],$this->config['password'],$this->config['database']);
			$this->setConnect($connect);
			if(!$connect){
				return false;
			}
			return true;


	}
	public function getConnect(){
		return $this->connect;
	}
	public function setConnect(mysqli $connect){

		$this->connect=$connect;
		return $this;
	}
	public function isConnected(){
			if(!$this->getConnect()){
				
				return false;
			}
			return true;
		}

	public function fetchAll($query){
		
			if(!$this->isConnected()){
				return false;

			}
			 $result=mysqli_query($this->getConnect(),$query);
			
			if($result->num_rows > 0){
				
					$data=[];
					while ($row=$result->fetch_assoc()) {
						$data[]=$row;
						}
						return $data;
			}
	}
	public function fetchRow($query)
    {
		
        if(!$this->isConnected()){
            return false;
        }
		
        	 $result = mysqli_query($this->getConnect(), $query);
			
			
            if ($result->num_rows > 0) {
                $data = array();
                    while ($row = $result->fetch_assoc()) {
                        $data[] = $row;
                    }
                    return $data;
            }
       
    }
    

	public function insert($query){

		if (!$this->isConnected()) {
            $this->connection();
        }
		
			$result=mysqli_query($this->getConnect(),$query);
			if($result > 0){
				
				return $this->getConnect();
			}
			return false;

	}
	public function update($query)
    {
		
		if (!$this->isConnected()) {
            $this->connection();
        }
		
        $result = mysqli_query($this->getConnect(), $query);
		//echo "hii";
		print_r($result);
        if($result > 0){
			
            return $this->getConnect();
        }
		return false;
    }

	public function delete($query)
    {
		if (!$this->isConnected()) {
            $this->connection();
        }
		
       $result = mysqli_query($this->getConnect(), $query);
        if($result > 0){
            return $this->getConnect()->delete_id;
        }
		return false;
    }



}


?>