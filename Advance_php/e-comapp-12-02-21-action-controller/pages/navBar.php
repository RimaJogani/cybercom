<?php

require_once "./Controller/Core/Admin.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title> 

</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container">
          <a class="navbar-brand" href="./index.php">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php?c=product&a=grid" >Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php?c=customer&a=grid">Customer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php?c=category&a=grid">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php?c=payment&a=grid">Payment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php?c=shipping&a=grid">Shipping</a>
              </li>
             

             
            </ul>
           
          </div>
        </div>
      </nav>
</body>
</html>