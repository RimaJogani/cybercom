<?php
require_once './Model/Core/Adapter.php';

require_once './Controller/Core/Admin.php';
class Payment extends Admin{
	protected $payments=[];

	public function __construct(){

		parent::__construct();
	}

	public function gridAction(){
		try{
		$query = "select * from payment";
		$adapter=new Adapter();
		$adapter->connection();
		 $payments=$adapter->fetchAll($query);
		$this->setPayments($payments);
		require_once "./View/Payment/grid.php";
		}
		catch(Exception $e){
			echo $e->getMessage();
			die();
		}

	}
	public function getPayments(){
		return $this->payments;
	}
	public function setPayments($payments){
		$this->payments=$payments;
		return $this;
	}
	public function formAction(){
		require_once './View/Payment/form.php';
	}
	
	public function saveAction(){

			try{

				$paymentName=$this->getRequest()->getPost('paymentName');
				$paymentCode=$this->getRequest()->getPost('paymentCode');
				$paymentAmount=$this->getRequest()->getPost('paymentAmount');
				
				$description=$this->getRequest()->getPost('discription');
				
				if($this->getRequest()->getPost('status')){
					$status=1;

				}else{
					$status=0;
				}
				$curentDate=date('Y-m-d H:i:s');
			

					echo $query = "INSERT INTO `payment` (`paymentName`, `paymentCode`, `paymentAmount`, `discription`, `status`, `createDate`) VALUES ( '$paymentName', '$paymentCode', '$paymentAmount','$description', '$status', '$curentDate')";
				
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
            $paymentId=$this->getRequest()->getGet('id');

           	 $query="select * from payment where paymentId=".$paymentId;
		
            $adapter=new Adapter();
            $adapter->connection();
           $payments =$adapter->fetchRow($query);
            $this->setPayments($payments);
            require_once './View/Payment/editForm.php';
          
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

           echo   $paymentId=$this->getRequest()->getGet('id');
            
		   $paymentName=$this->getRequest()->getPost('paymentName');
		   $paymentCode=$this->getRequest()->getPost('paymentCode');
		   $paymentAmount=$this->getRequest()->getPost('paymentAmount');
		   
		   $description=$this->getRequest()->getPost('discription');
		   
		   if($this->getRequest()->getPost('status')){
			   $status=1;

		   }else{
			   $status=0;
		   }
		  
             $query="update payment set paymentName='$paymentName',paymentCode='$paymentCode',paymentAmount='$paymentAmount',discription='$description',status='$status' where paymentId=".$paymentId;
          
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

            $paymentId=$this->getRequest()->getGet('id');
            $query="delete from payment where paymentId=".$paymentId;
         
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
		   $paymentId=$this->getRequest()->getGet('id');
		   $status=$this->getRequest()->getGet('status');
	  
		   if($status==1){
			   $label=0;
		   }
		   else{
			$label=1;
		   }
	
		  echo $query="update payment set status='$label' where paymentId=".$paymentId;
		  
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