<?php
require_once './Model/Core/Adapter.php';
require_once './Model/Product.php';
require_once './Controller/Core/Admin.php';
class Product extends Admin{
	protected $products=[];
	protected $product=NULL;
	public function __construct(){

		parent::__construct();
	}

	public function setProduct($product=NULL)
	{
		if(!$product){
			$product=new Model_Product();
			return $this;
		}
		
		$this->product=$product;
		return $this;
	}
	public function getProduct(){
		if(!$this->product){
			$this->setProduct();
		}
		return $this->product;
	}

	public function gridAction(){
		try{
		$query = "select * from product";
		$adapter=new Adapter();
		$adapter->connection();
		 $products=$adapter->fetchAll($query);
		$this->setProducts($products);
		require_once "./View/Product/grid.php";
		}
		catch(Exception $e){
			echo $e->getMessage();
			die();
		}

	}
	public function getProducts(){
		return $this->products;
	}
	public function setProducts($products){
		$this->products=$products;
		return $this;
	}
	public function formAction(){
		require_once './View/Product/form.php';
	}

	public function saveAction(){

			try{


				if(!$this->getRequest()->isPost()){
                    throw new Exception("Invalid Request.");
            }

				$productData=$this->getRequest()->getPost('product');
				echo "<pre>";
				//print_r($productData);
			
				$modelProduct=new Model_Product();

				$modelProduct->createDate=date('Y-m-d H:i:s');
				
				$modelProduct->setData($productData);
				$modelProduct->save();
				
				//print_r($modelProduct);
				$this->redirect('grid',NULL,NULL,true);
					//header("Location:http://localhost/new_cycr/e-comapp-12-02-21-action-controller/index.php?c=product&a=grid");
					exit(0);

					
				
				$sku=$this->getRequest()->getPost('sku');
				$name=$this->getRequest()->getPost('name');
				$price=$this->getRequest()->getPost('price');
				$discount=$this->getRequest()->getPost('discount');
				$description=$this->getRequest()->getPost('description');
				$qty=$this->getRequest()->getPost('qty');
				if($this->getRequest()->getPost('status')){
					$status=1;

				}else{
					$status=0;
				}
				$cuurentDate=date('Y-m-d H:i:s');
			

					echo $query = "insert into product(SKU,productName,productPrice,productDiscount,productQty,description,status,createDate) VALUES ('$sku','$name','$price','$discount',$qty,'$description','$status','$cuurentDate');";
					$adapter=new Adapter();
					$adapter->connection();
					$adapter->insert($query);
					$this->redirect('grid',NULL,NULL,true);
					//header("Location:http://localhost/new_cycr/e-comapp-12-02-21-action-controller/index.php?c=product&a=grid");
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
            $productId=(int)$this->getRequest()->getGet('id');
			if(!$productId){
				throw new Exception("Invalid Id. ");

			}
			$product=new Model_product();
			$product=$product->load($productId);
			echo "<pre>";
			//print_r($product);
			if(!$product){
				echo "No record Found.";
			}
			$this->setProduct($product);
			//$var=$this->getProduct();
			//print_r($var);

			
		
			
			require_once './View/Product/editForm.php';
			die();
			//echo $id;
			

			
            $query="select * from product where productId=".$productId;
            $adapter=new Adapter();
            $adapter->connection();
           $products= $adapter->fetchRow($query);
            $this->setProducts($products);
            require_once './View/Product/editForm.php';
          
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
			
              
			  $productData=$this->getRequest()->getPost('product');
			  echo "<pre>";
			 // print_r($productData);
			// print_r($_POST);
			  
			  $modelProduct=new Model_Product();

			  $modelProduct->updateDate=date('Y-m-d H:i:s');
			  $modelProduct->productId=$this->getRequest()->getGet('id');
			  $modelProduct->setData($productData);
			  $modelProduct->save();
			  
			  //print_r($modelProduct);
			  $this->redirect('grid',NULL,NULL,true);
				  //header("Location:http://localhost/new_cycr/e-comapp-12-02-21-action-controller/index.php?c=product&a=grid");
				  exit(0);
				  die();
			 
            
			  $sku=$this->getRequest()->getPost('sku');
			  $name=$this->getRequest()->getPost('name');
			  $price=$this->getRequest()->getPost('price');
			  $discount=$this->getRequest()->getPost('discount');
			  $description=$this->getRequest()->getPost('description');
			  $qty=$this->getRequest()->getPost('qty');
			  if($this->getRequest()->getPost('status')){
				  $status=1;

			  }else{
				  $status=0;
			  }
			  $updateDate=date('Y-m-d H:i:s');
             $query="update product set SKU='$sku',productName='$name',productPrice='$price',productDiscount='$discount',productQty='$qty',description='$description',status='$status',updateDate='$updateDate' where productId=".$productId;
          
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

            $productId=$this->getRequest()->getGet('id');
            $query="delete from product where productId=".$productId;
         
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
	
		   $productId=$this->getRequest()->getGet('id');
		   $status=$this->getRequest()->getGet('status');
	  
		   if($status==1){
			   $label=0;
		   }
		   else{
			$label=1;
		   }
	
		  echo $query="update product set status='$label' where productId=".$productId;
		  
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