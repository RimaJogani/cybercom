<?php
require_once "./Model/Core/Adapter.php";

require_once "./Controller/Core/Admin.php";
class Customer extends Admin{
    protected $customers = [];
    
    public function __construct(){
      parent::__construct();
    }

    public function gridAction(){
      try{
        $query="select * from customer";
        $adapter = new Adapter();
        $adapter->connection();
        $customers=$adapter->fetchAll($query);
        $this->setCustomers($customers);
       require_once "./View/Customer/grid.php";
      }
      catch(Exception $e){
        echo $e->getMessage();
        die();
      }

    }
    public function setCustomers($customers){
        $this->customers=$customers;
        return $this;
    }
    public function getCustomers(){
        return $this->customers;
    }
    public function formAction(){
        require_once "./View/Customer/form.php";
    }
    public function saveAction(){

          try{
            if(!$this->getRequest()->isPost()){
                throw new Exception("invalid Request.");
            }
             $fname=$this->getRequest()->getPost('firstName');
            $lname=$this->getRequest()->getPost('lastName');
            $email=$this->getRequest()->getPost('email');
            $password=md5($this->getRequest()->getPost('password'));
            $contactNo=$this->getRequest()->getPost('contactNo');
            if($this->getRequest()->getPost('status')){
              $status=1;
          
            }else{
              $status=0;
            }
            $cuurentDate=date('Y-m-d H:i:s');
          
          
                $query="insert into customer (firstName,lastName,email,password,contactNo,status,createDate)VALUES('$fname','$lname','$email','$password','$contactNo','$status','$cuurentDate')";
                $adapter=new Adapter();
                $adapter->connection();
                $adapter->insert($query);
                $this->redirect('grid',NULL,NULL,true);

                exit(0);
              
             
            }
            catch(Exception $e){
              echo $e->getMessage();
              die();
            }
         
    }
    public function editAction(){
      try{
            
        /* if(!$this->getRequest()->isPost()){
                 throw new Exception("Invalid Request.");
         }*/
         $customerId=$this->getRequest()->getGet('id');
         $query="select * from customer where customerId=".$customerId;
         $adapter=new Adapter();
         $adapter->connection();
         $customer= $adapter->fetchRow($query);
         $this->setCustomers($customer);
         require_once './View/Customer/editForm.php';
       
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
          $id=$this->getRequest()->getGet('id');
          $fname=$this->getRequest()->getPost('firstName');
          $lname=$this->getRequest()->getPost('lastName');
          $email=$this->getRequest()->getPost('email');
         
          $contactNo=$this->getRequest()->getPost('contactNo');
          if($this->getRequest()->getPost('status')){
                 $status=1;
          }
          else{
              $status=0;
          }
          $updateDate=date('Y-m-d H:i:s');
         echo $query="update customer set firstName='$fname',lastName='$lname',email='$email',contactNo='$contactNo',status='$status',updateDate='$updateDate' where customerId=".$id;
      
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

         $customerId=$this->getRequest()->getGet('id');
         $query="delete from customer where customerId=".$customerId;
      
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
      }*/

       $customerId=$this->getRequest()->getGet('id');
       $status=$this->getRequest()->getGet('status');
  
       if($status==1){
           $label=0;
       }
       else{
        $label=1;
       }

      echo $query="update customer set status='$label' where customerId=".$customerId;
      
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