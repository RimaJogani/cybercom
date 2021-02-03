<?php



  if(isset($_POST['uemail']) && isset($_POST['upass'])){


    if(!empty($_POST['uemail']) && !empty($_POST['upass'])){

          $pass=$_POST['upass'];
          $email=$_POST['uemail'];

          echo "your Email Id : ".$email."<br>";
          echo "Your Password is : ".$pass."<br>";
    }

  }

?>




<!DOCTYPE html>
<html>
<head>
  
  <title></title>
</head>
<body>
  
  

</body>

<form  action="signin_form.php" method="post" onsubmit="return submitFunction()">
  


  
  
  


    <h2>Sign In</h2>
    Email Address<br>
    <input  type="email" id="uemail" name="uemail"><br><span id=uemail_e></span><br>
    Password<br>
    <input  type="Password" id="upass" name="upass"><br><span id=upass_e></span><br><br>
   
    <input type="submit" name="submit" value="Sign In"/>
  
</form>




<script src="signin_js.js"></script>

</html>