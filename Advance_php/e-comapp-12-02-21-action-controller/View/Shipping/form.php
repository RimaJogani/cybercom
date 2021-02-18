
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
    <title></title>
</head>

<body>
   
<?php include_once('./pages/navBar.php'); ?>
   <section>
       <div class="container pt-4 mx-auto">
       
            <div class="bg-light p-5 rounded mx-auto">
              <button type="button" class="btn bg-dark btn-md d-flex justify-content-right"><a href="<?php echo $this->getUrl('grid');?>" class="text-white"> View Shipping</a> </button>
            <h3 class="d-flex justify-content-center">Add Payment</h3>
              <div class="col-md-7 mx-auto col-lg-8 mt-4">
         
                <form class="needs-validation" novalidate="" method="POST" action="<?php echo $this->getUrl('save');?>">
                  <div class="row g-3">
                    <div class="col-sm-6">
                     
                      <input type="text" class="form-control"  name="shippingName" placeholder="Name" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
        
                    <div class="col-sm-6">
                     
                      <input type="text" class="form-control"  name="shippingCode" placeholder="Code" value="" required="">
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
        
                    
                    <div class="col-sm-6">
                     
                      <input type="text" class="form-control"  name="shippingAmount" placeholder="Amount" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
        
                    <div class="col-sm-6">
                     
                      <input type="text" class="form-control"  name="description" placeholder="Discription" value="" required="">
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
                    
                   
                   
                    <div class="form-check form-switch col-sm-4 mt-5">
                        
                    <div class="switch">
                            <label>
                            Disabled
                            <input name='status' type='checkbox'> 
                            <span class="lever"></span>
                            Enabled
                            </label>
                        </div>
                    </div>
                 
        
                  <p class="d-flex justify-content-center">
                  <button class="btn waves-effect waves-light bg-dark text-white" type="submit" name="save">Add Shipping
                   
                     </button></a>&nbsp;&nbsp;
                    <button class="btn waves-effect waves-light bg-dark text-white" type="reset" name="cancel">Reset
                    
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