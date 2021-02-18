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
   
<?php include_once('./pages/navBar.php'); ?>
   <section>
       <div class="container pt-4">
       
            <div class="bg-light p-5 rounded">
              <h3>Customer Details</h3>
              
              <a class="btn btn-md  text-white bg-dark" href="<?php echo $this->getUrl('form');?>" role="button"> ADD CUSTOMER</a>
              
            
              <table class="table table-success table-striped mt-4">
                <thead>
                  <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created Date</th>
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $row=$this->getCustomers();
                    if($row == ""){
                        echo '<p class=text-center><strong>No Record Found</strong><p>';    
                    }
                    else{
                        foreach($row as $data){
                        
            ?>
                  
                <tr id="data">
                <td><?php echo $data['firstName'] ?></td>
                <td><?php echo $data['lastName'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['contactNo'] ?></td>
                <td><?php 
                        if($data['status']){
                            echo 'Enabled';
                        }
                        else{
                            echo 'Disabled';
                        }
                    ?>
                </td>

                <td><?php echo $data['createDate'] ?></td>
                <?php
                
                if($data['status'] == 1){
                  $label='Enable';
                }
                else{
                  $label='Desable';
                }
        
        ?>
        <th><button type="button" class="btn bg-success text-white btn-sm"> <a href="<?php echo $this->getUrl('status',NULL,['id'=>$data['customerId'],'status'=>$data['status']]);?>" class="text-white">Status</a></th></button>
                <th><button type="button" class="btn bg-success btn-sm"><a href="<?php echo $this->getUrl('edit',NULL,['id'=>$data['customerId']]);?>" class="text-white">edit</a></button></th>
                <th><button type="button" class="btn bg-danger text-white btn-sm"  ><a href="<?php echo $this->getUrl('delete',NULL,['id'=>$data['customerId']]);?>" class="text-white">delete</a></button></th>
            
            </tr>
           <?php } } ?>   
          
                </tbody>
              </table>
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
        <br><br><br> <br><br><br> <br>
        <?php include_once('./pages/footer.php'); ?>
</body>


    
</html>