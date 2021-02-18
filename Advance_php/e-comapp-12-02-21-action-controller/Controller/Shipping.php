<?php
require_once './Model/Core/Adapter.php';

require_once './Controller/Core/Admin.php';
class Shipping extends Admin{
	protected $shippings=[];

	public function __construct(){

		parent::__construct();
	}

	public function gridAction(){
		try{
		$query = "select * from shipping";
		$adapter=new Adapter();
		$adapter->connection();
		$shippings=$adapter->fetchAll($query);
		$this->setShippings($shippings);
		require_once "./View/Shipping/grid.php";
		}
		catch(Exception $e){
			echo $e->getMessage();
			die();
		}

	}
	public function getShippings(){
		return $this->shippings;
	}
	public function setShippings($shippings){
		$this->shippings=$shippings;
		return $this;
	}
	public function formAction(){
		require_once './View/Shipping/form.php';
	}
	
	public function saveAction(){

			try{

				$shippingName=$this->getRequest()->getPost('shippingName');
				$shippingCode=$this->getRequest()->getPost('shippingCode');
				$shippingAmount=$this->getRequest()->getPost('shippingAmount');
				
				$description=$this->getRequest()->getPost('description');
				
				if($this->getRequest()->getPost('status')){
					$status=1;

				}else{
					$status=0;
				}
				$curentDate=date('Y-m-d H:i:s');
			

					echo $query = "INSERT INTO `shipping` (`shippingName`, `shippingCode`, `shippingAmount`, `description`, `status`, `createDate`) VALUES ( '$shippingName', '$shippingCode', '$shippingAmount','$description', '$status', '$curentDate')";
				
					$adapter=new Adapter();
					$adapter->connection();
					$adapter->insert($query);
					
					$this->redirect('grid',NULL,NULL,true);
					exit();
		}
		catch(Exception $e){
			echo $e->getMessage();
			die();
		}	
		
	
	}
	
	public function editAction(){

        try{
            
           /*if(!$this->getRequest()->isPost()){
                    throw new Exception("Invalid Request.");
            }*/
            $shippingId=$this->getRequest()->getGet('id');

           	 $query="select * from shipping where shippingId=".$shippingId;
		
            $adapter=new Adapter();
            $adapter->connection();
           $shippings =$adapter->fetchRow($query);
            $this->setShippings($shippings);
            require_once './View/Shipping/editForm.php';
          
        }catch(Exception $e){
            echo $e->getMessage();
            die();
        }
     }
	 
     public function updateAction(){
         try{
             if(!$this->getRequest()->isPost()){
                 throw new Exception("Invalid Request.");
             }

           echo   $shippingId=$this->getRequest()->getGet('id');
            
		   $shippingName=$this->getRequest()->getPost('shippingName');
		   $shippingCode=$this->getRequest()->getPost('shippingCode');
		   $shippingAmount=$this->getRequest()->getPost('shippingAmount');
		   
		   $description=$this->getRequest()->getPost('description');
		   
		   if($this->getRequest()->getPost('status')){
			   $status=1;

		   }else{
			   $status=0;
		   }
		  
             $query="update shipping set shippingName='$shippingName',shippingCode='$shippingCode',shippingAmount='$shippingAmount',description='$description',status='$status' where shippingId=".$shippingId;
          
			$adapter=new Adapter();
             $adapter->connection();
            $adapter->update($query);
            $this->redirect('grid',NULL,NULL,false);



         }catch(Exception $e){
             echo $e->getMessage();
             die();
         }
     }

     public function deleteAction(){
         try{
              /* if(!$this->getRequest()->isPost()){
                    throw new Exception("Invalid Request.");
            }*/

            $shippingId=$this->getRequest()->getGet('id');
            $query="delete from shipping where shippingId=".$shippingId;
         
            $adapter=new Adapter();
            $adapter->connection();
            $adapter->delete($query);
         
            $this->redirect('grid',NULL,NULL,false);


         }catch(Exception $e){
             echo $e->getMessage();
             die();
         }
     }


	 public function statusAction(){
		try{
			/* if(!$this->getRequest()->isPost()){
				  throw new Exception("Invalid Request.");
		  }
		  */
		   $shippingId=$this->getRequest()->getGet('id');
		   $status=$this->getRequest()->getGet('status');
	  
		   if($status==1){
			   $label=0;
		   }
		   else{
			$label=1;
		   }
	
		  echo $query="update shipping set status='$label' where shippingId=".$shippingId;
		  
		  $adapter=new Adapter();
		  $adapter->connection();
		  $adapter->update($query);
	   
		  $this->redirect('grid',NULL,NULL,false);
	
		  }
	   catch(Exception $e){
		   echo $e->getMessage();
		   die();
	   }
	  }
	
	 




}


?>