<?php

require('./../connection/Adapter.php');
$conn=new Adapter();
$conn->connection();
if(isset($_REQUEST['updateProduct'])){
    //echo 'hii';
    $sku=$_REQUEST['sku'];
    $name=$_REQUEST['name'];
    $price=$_REQUEST['price'];
    $discount=$_REQUEST['discount'];
    $description=$_REQUEST['description'];
    $qty=$_REQUEST['qty'];
    $productId = $_REQUEST['productId'];
     $currentDate = $_REQUEST['currentdate'];
    if(isset($_REQUEST['status'])){
      $status=1;
  
    }else{
      $status=0;
    }
    $updateDate=date('Y-m-d H:i:s');
    if(!empty($sku) && !empty($name) && !empty($price) &&!empty($discount) &&!empty($qty) && !empty($description)){
  
        echo $query = "update product set SKU ='$sku',productName ='$name',productPrice = '$price',productDiscount='$discount',productQty = '$qty',description='$description',status='$status',createDate='$currentDate',updateDate='$updateDate' where productId = $productId";
        $conn->update($query);     
  }
     

}



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Customer</title>
</head>

<body>
   
<?php include_once('navBar.php'); ?>
   <section>
   <div class="container pt-4 mx-auto">
       
       <div class="bg-light p-5 rounded mx-auto">
         <button type="button" class="btn bg-dark btn-md d-flex justify-content-right"><a href="product.php" class="text-white"> View Product</a> </button>
       <h3 class="d-flex justify-content-center">Update Product</h3>
         <div class="col-md-7 mx-auto col-lg-8 mt-4">
              
             
                <form class="needs-validation" novalidate="">
                <?php
                    $query = "select * from product where productId =".$_GET['id'];
                    $row = $conn->fetchRow($query);
                        foreach ($row as $data) {
                      
                ?>
                  <div class="row g-3">
                    <div class="col-sm-6">
                    <input type="hidden" name="currentdate" value="<?php echo $data['createDate']?>">
                    <input type="hidden" name="productId" value="<?php echo $data['productId']?>">
                      <input type="text" class="form-control" id="sku" name="sku" placeholder="SKU" value="<?php echo $data['SKU']?>" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
        
                    <div class="col-sm-6">
                     
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $data['productName']?>" required="">
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
        
                    
                    <div class="col-sm-6">
                     
                      <input type="text" class="form-control" id="price" name="price" placeholder="Price"value="<?php echo $data['productPrice']?>" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
        
                    <div class="col-sm-6">
                     
                      <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" value="<?php echo $data['productDiscount']?>" required="">
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
                    
                    <div class="col-sm-12">
                     
                      <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo $data['description']?>" required="">
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
                    <div class="col-sm-6">
                
                    <input id="quantity" name="qty" type="number" min="1" max="10" name="qty" class="validate" value="<?php echo $data['productQty']?>" placeholder="Quantity" >
                            
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                      
                    </div>
                    <div class="form-check form-switch col-sm-4 mt-5">
                        
                    <div class="switch">
                    <label>
                            Disabled
                            <?php if($data['status']) {
                                $label = 'checked';    
                            ?>
                            <input name='status' type='checkbox' <?php echo $label; ?>> 
                            <?php } ?>
                            <span class="lever"></span>
                            Enabled
                            </label>
                        </div>
                    </div>
                  
                  <?php
                    }
                ?>
                  <p class="d-flex justify-content-center">
                  <button class="btn waves-effect waves-light bg-dark text-white" type="submit" name="updateProduct">Update Product
                    
                     </button>
                  </p>
                </form>
              </div>
            
             
            </div>
       </div>
   </section>

   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>

</body>

</html>