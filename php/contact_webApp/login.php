<?php
include ('login_header.php');
require 'D:\xampp_setup\htdocs\new_cycr\1\database_connection.php';


 
if (isset($_SESSION['id'])) {

    header("location:index1.php");
    exit();
  
  }




?>

<!DOCTYPE html>
<html>
<head>
  
  <title></title>

  <style type="text/css">
    body
    {
      justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    }
    .b
    {
      box-sizing: border-box; 
    }
    .f
    {
      background-color: grey; border-radius:50px solid red; width: 500px; height: 350px;
    }
    .d1
    {
        background-color: #fefefe;
      border: 1px solid #888;
       width: 80%;
       height: 87%;
       margin-left: 50px;
       border-radius: 8px;
    }
    .d2
    {
        background-color: red; height: 40px; color: #fff; font-size: 30px; font-weight: bold;
        border-radius: 8px;
        padding-left: 20px;
    }
    input[type=email], input[type=password] {
    width: 90%;
  padding: 10px;
 margin-left: 10px;
  display: inline-block;
  border: none;
  ba
  ckground: #f1f1f1;
}
input[type=submit] {
    background-color: green;
    margin-left: 150px;
    width: 80px;
    height: 40px;
    color: #fff;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}

  </style>
</head>
<body>
  
  

</body class="b">

<form  action="login.php" method="post" onsubmit="return submitFunction()" class="f">
  
  <div class="d1" >
  <div class="d2">Sign In</div><br>
    <?php echo $error_e;?>
    <div style="margin-left: 10px;">Email Address</div><br>

    <input  type="email" id="uemail" name="uemail"><br><span id=uemail_e></span><br>
    <div  style="margin-left: 10px;">Password</div><br>
    <input  type="Password" id="upass" name="upass"><br><span id=upass_e></span><br><br>
   
    <input type="submit" name="submit" value="Sign In"/>
   <center> <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p></center>
  </div>
</form>




<script src="login_js.js"></script>

</html>