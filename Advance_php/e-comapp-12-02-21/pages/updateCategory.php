<?php
    
require('./../connection/Adapter.php');
$conn=new Adapter();
$conn->connection();

    if(isset($_REQUEST['updateCategory'])){

        $name = $_REQUEST['name'];
        $description = $_REQUEST['description'];
        $categoryId=$_REQUEST['categoryId'];
        if(isset($_REQUEST['status'])){
            echo $status = 1; 
        }
        else{
            echo $status = 0;
        }
        if(!empty($name) && !empty($description)){

            echo $query = "update category set categoryName='$name',description='$description',categoryStatus='$status' where categoryId='$categoryId'";
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
    <title>category</title>
</head>

<body>
<?php include_once('navBar.php'); ?>
    
   <section>
       <div class="container pt-4 mx-auto">
       
            <div class="bg-light p-5 rounded mx-auto">
              <button type="button" class="btn bg-dark  btn-md d-flex justify-content-right"> <a href="category.php" class="text-white">View Category</a> </button>
            <h3 class="d-flex justify-content-center">Update Category</h3>
              <div class="col-md-7 mx-auto col-lg-8 mt-4">
         
                <form class="needs-validation" novalidate=""  method="post">

               
                  <div class="row g-3">

                  <?php
                         $query = "select * from category where categoryId =".$_GET['id'];
                         $row = $conn->fetchRow($query);
                        foreach ($row as $data) {
                ?>
               
                    <div class="col-sm-6">
                    <input type="hidden" name="categoryId" value="<?php echo $data['categoryId']?>">
                       
                      <input type="text" class="form-control" id="Name" name="name" placeholder="Name" value="<?php echo $data['categoryName']?>" required="">
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                      
                    </div>
                    
                    <div class="form-check form-switch col-sm-4 mt-5">
                        
                    <div class="switch">
                    <label>
                            Disabled
                            <?php if($data['categoryStatus']) {
                                $label = 'checked';    
                            ?>
                            <input name='status' type='checkbox' <?php echo $label; ?>> 
                            <?php } ?>
                            <span class="lever"></span>
                            Enabled
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12">
                      
                      <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo $data['description']?>" required="">
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                 <?php 
                }
                ?>
        
                      <p class="d-flex justify-content-center">
                  <button class="btn waves-effect waves-light bg-dark text-white" type="submit" name="updateCategory">Update Category
                   
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