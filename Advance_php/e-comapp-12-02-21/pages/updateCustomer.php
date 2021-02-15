<?php
   require('./../connection/Adapter.php');
   $conn=new Adapter();
   $conn->connection();


   if(isset($_REQUEST['updateCustomer'])){
   //echo 'hii';
    $fname=$_POST['firstName'];
    $lname=$_REQUEST['lastName'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $contactNo=$_REQUEST['contactNo'];
    $currentDate=$_REQUEST['currentDate'];
    $customerId=$_REQUEST['customerId'];
    $updateDate=date('Y-m-d H:i:s');
    if(isset($_REQUEST['status'])){
      $status=1;
  
    }else{
      $status=0;
    }
   
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($contactNo)){
  
        echo $query = "update customer set firstName ='$fname',lastName='$lname',email='$email',password='$password',contactNo='$contactNo',status='$status',createDate = '$currentDate',updateDate='$updateDate' where customerId = $customerId";
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
              <form class="d-flex justify-content-right">
              <button type="button" class="btn bg-dark btn-md d-flex justify-content-right"><a href="customer.php" class="text-white">Veiw Customer</a></button>
              </form>
            <h3 class="d-flex justify-content-center">Update Customer</h3>
              <div class="col-md-7 mx-auto col-lg-8 mt-4">
         
                <form class="needs-validation" novalidate="" action="./updateCustomer.php" method="post">
                  <div class="row g-3">
                  <?php
                        $query = "select * from customer where customerId =".$_GET['id'];
                        $row = $conn->fetchRow($query);
                        foreach ($row as $data) {
                       
                ?>
                    <div class="col-sm-6">
                        <input type="hidden" name="customerId" value="<?php echo $data['customerId']?>">
                        <input type="hidden" name="currentDate" value="<?php echo $data['createDate']?>">
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" value="<?php echo $data['firstName']?>" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                        </div>
        
                    <div class="col-sm-6">
                     
                      <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" value="<?php echo $data['lastName']?>" required="">
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
        
                    <div class="col-12">
                     
                      <div class="input-group has-validation">
                       
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $data['email']?>" required="">
                      <div class="invalid-feedback">
                          Your username is required.
                        </div>
                      </div>
                    </div>
        
                   
        
                    <div class="col-12">
                     
                      <input type="password" class="form-control" name="password" id="password" placeholder="password" value="<?php echo $data['password']?>" required="">
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>
        
                    <div class="col-12">
                     
                      <input type="text" class="form-control" name="contactNo" id="contactNo" value="<?php echo $data['contactNo']?>" placeholder="Contact No ">
                    </div>
                    
                    <div class="form-check form-switch">
                        
                    <div class="switch">
                    <label>
                                Disabled
                                <?php if($data['status']) {
                                    $label = 'checked';     
                                    }else{
                                        $label = '!checked';  
                                    }
                                ?>
                                <input name='status' type='checkbox' <?php echo $label; ?> > 
                                <span class="lever"></span>
                                Enabled
                                </label>
                        </div>
                        </div>  
                      </div>
                      <?php
                    }
                ?>
        
                  <p class="d-flex justify-content-center">
                  <button class="btn waves-effect waves-light bg-dark text-white" type="submit" name="updateCustomer">update Customer
                    
                     </button></a>&nbsp;&nbsp;
                    
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