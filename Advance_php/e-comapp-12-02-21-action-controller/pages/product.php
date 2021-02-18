<?php
   require('./../connection/Adapter.php');
   $conn=new Adapter();
   $conn->connection();
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
    <title>Cuatomer</title>
    <script>
        function deleteProduct(id) {
           // alert(id);
                if (id == "") {
                    document.getElementById("data").innerHTML = "";
                    return;
                } else {
                   // alert(id);
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("data").innerHTML = this.responseText;
                    }
                    };
                    xmlhttp.open("GET","deleteProduct.php?id="+id,true);
                    xmlhttp.send();
                }
        }
    </script>
</head>

<body>
   
<?php include_once('navBar.php'); ?>
   <section>
       <div class="container pt-4">
       
            <div class="bg-light p-5 rounded">
              <h3>Product Details</h3>
              
              <a class="btn btn-md bg-dark text-white" href="addProduct.php" role="button"> ADD PRODUCT</a>
             
            
              <table class="table table-success table-striped mt-4">
              
                <thead>

                  <tr>
                    <th scope="col">SKU</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $query = "select * from product";
                $row = $conn->fetchAll($query);
                if($row == ""){
                    echo '<p class=text-center><strong>No Record Found</strong><p>';    
                }
                else{
                    foreach($row as $data){
                    //print_r($record);
            ?>
                  <tr id="data">
                        <td><?php echo $data['SKU'] ?></td>
                        <td><?php echo $data['productName'] ?></td>
                        <td><?php echo $data['productPrice'] ?></td>
                        <td><?php echo $data['productDiscount'] ?></td>
                        <td><?php echo $data['productQty'] ?></td>
                        <td><?php echo $data['description'] ?></td>
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
                        <td><button type="button" class="btn bg-success btn-sm"><a href="updateProduct.php?id=<?php echo $data['productId']; ?>" class="text-white">edit</a></button></td>
                        <td><button type="button" class="btn bg-danger btn-sm text-white" onclick="deleteProduct(<?php echo $data['productId']; ?>)">delete</button></td>
                        
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
        <br><br><br> <br><br><br> <br><br><br> 
        <?php include_once('footer.php'); ?>
</body>

</html>