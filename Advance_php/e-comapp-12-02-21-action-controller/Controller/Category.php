<?php

require_once "./Model/Core/Adapter.php"; 
require_once "./Controller/Core/Admin.php";


class Category extends Admin{

    protected $categorys = [];

    public function __construct(){
        parent::__construct();
    }
    public function gridAction(){
        try{
        $query="select * from category";
        $adapter=new Adapter();
        $adapter->connection();
        $categorys=$adapter->fetchAll($query);
        if(!$categorys){
            throw new Exception("In Valid in Fetch.");
        }
        $this->setCategorys($categorys);
        require_once "./View/Category/grid.php";
        }
        catch(Exception $e){
            echo $e->getMessage();
            die();
        }

    }
    public function setCategorys($categorys){
        $this->categorys=$categorys;
        return $this;
    }
    public function getCategorys(){
        return $this->categorys;
    }
    public function formAction(){
        require_once "./View/Category/form.php";
    }
    public function saveAction(){
        try{
           
            if(!$this->getRequest()->isPost()){
                throw new Exception("invalid Request.");
            }
           // print_r($postData=$request->getPost());
           
           
            $name = $this->getRequest()->getPost('name');
            $description =$this->getRequest()->getPost('description');
            if(!$name || !$description){
                throw new Exception("empty value",1); 
               // $this->redirect('grid',NULL,NULL,true);
            }
            if($this->getRequest()->getPost('status')){
                 $status = 1; 
            }
            else{

                 $status = 0;
                }
           
    
                echo $query = "insert into category(categoryName,description,categoryStatus) VALUES ('$name','$description','$status');";
                $adapter=new Adapter();
                $adapter->connection();
                $adapter->insert($query);
                $this->redirect('grid',NULL,NULL,true);
    
                 exit(0);
            }catch(Exception $e){
                echo $e->getMessage();
                die();
            }

       
     }

     public function editAction(){

        try{
            
           /* if(!$this->getRequest()->isPost()){
                    throw new Exception("Invalid Request.");
            }*/
            $categaoryId=$this->getRequest()->getGet('id');
            $query="select * from category where categoryId=".$categaoryId;
            $adapter=new Adapter();
            $adapter->connection();
           $categorys= $adapter->fetchRow($query);
            $this->setCategorys($categorys);
            require_once './View/Category/editForm.php';
          
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
              $categoryId=$this->getRequest()->getGet('id');
      
             $categoryName=$this->getRequest()->getPost('name');
             $description=$this->getRequest()->getPost('description');
             if($this->getRequest()->getPost('status')){
                    $status=1;
             }
             else{
                 $status=0;
             }
           echo  $query="update category set categoryName='$categoryName',description='$description',categoryStatus='$status' WHERE categoryId= ".$categoryId;
             
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

            $categaoryId=$this->getRequest()->getGet('id');
            $query="delete from category where categoryId=".$categaoryId;
         
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

           $categaoryId=$this->getRequest()->getGet('id');
           $status=$this->getRequest()->getGet('status');
      
           if($status==1){
               $label=0;
           }
           else{
            $label=1;
           }

          echo $query="update category set categoryStatus='$label' where categoryId=".$categaoryId;
          
          $adapter=new Adapter();
          $adapter->connection();
          $adapter->update($query);
       
          $this->redirect('grid',NULL,NULL,false);


       }catch(Exception $e){
           echo $e->getMessage();
           die();
       }

     }



}

?>