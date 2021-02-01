<?php

$uemail=$pass='';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  	 
  	 $uemail=testdetails($_POST["uemail"]);
  	 $pass=testdetails($_POST["pass"]);
  	 
  	 
  	 


	 }

	 
 function testdetails($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }



?>




<!DOCTYPE html>
<html>
<head>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	
	<title></title>
</head>
<body>
	<style type="text/css">
		 
        .contain{
          padding-left: 450px;
        }
        .img
        {
        	background-image: url(img/contact_img.jpg); 
        	width: 300px;
        	 height: 100px;
        	  background-repeat:no-repeat;

        }
        .c
        {
        	color: #fff; 
			font-weight: bold;
			text-align: center; 
			padding-top:20px;
        }
      
      		 input[type=password] {
      		 	border: 2px solid #ccc;
 				 border-radius: 4px;
  				font-size: 16px;
  				width: 30%;
  				box-sizing: border-box;
  				background-color: white;
  				
  				
  			}
  			 input[type=email] {
  				width: 30%;
  				box-sizing: border-box;
  				border: 2px solid #ccc;
 				 border-radius: 4px;
  				font-size: 16px;
  				background-color: white;
  				
  				
  				
  			
  			}
  			 button {
  				width: 100px;
  				box-sizing: border-box;
  				border: 2px solid #ccc;
 				 margin-left: 50px;
  				font-size: 16px;
  				background-color: lightblue;
  				color: #fff;
  				height: 30px;
  			
  				padding: 5px 10px 5px 10px;
  				
  			
  			}
	</style>
	
​
	

</body>

<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return submitFunction()">
	<center>


	
	<h2>Sign In</h2>
	

</center>
<div class="contain">

    Email Address<br>
    <input  type="email" id="uemail" name="uemail" required><p id=uemail_e></p><br>
    Password<br>
    <input  type="Password" id="pass" name="pass" required><p id=pass_e></p><br>
   
    <input type="submit" name="submit" value="Sign In"/>
</div>
</form>




<script src="signin_js.js"></script>
<?php 



         
         echo ("<p> your email address is $uemail</p>");
         echo ("<p>Your password $pass</p>");
         
        
?>

</html>