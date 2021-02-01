<?php

$uname=$uemail=$subject=$msg='';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  	 $uname = testdetails($_POST["uname"]);
  	 $uemail=testdetails($_POST["uemail"]);
  	 $subject=testdetails($_POST["subject"]);
  	 
  	 $msg=testdetails($_POST['msg']);
  	 


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
		 
        
       
      
      		 input[type=text] {
      		 	border: 2px solid #ccc;
 				 border-radius: 4px;
  				font-size: 16px;
  				width: 60%;
  				box-sizing: border-box;
  				background-color: white;
  				background-image: url(img/user.png);
  				background-position: 10px 10px; 
  				background-repeat: no-repeat;
  				padding: 12px 20px 12px 40px;
  				padding-left: 50px;
  			}
  			 input[type=email] {
  				width: 60%;
  				box-sizing: border-box;
  				border: 2px solid #ccc;
 				 border-radius: 4px;
  				font-size: 16px;
  				background-color: white;
  				background-image: url(img/email.png);
  				background-position: 10px 10px; 
  				background-repeat: no-repeat;
  				padding: 12px 20px 12px 40px;
  				padding-left: 50px;
  			}
  			 input[type=tel] {
  				width: 60%;
  				box-sizing: border-box;
  				border: 2px solid #ccc;
 				 border-radius: 4px;
  				font-size: 16px;
  				background-color: white;
  				background-image: url(img/phone.png);
  				background-position: 10px 10px; 
  				background-repeat: no-repeat;
  				padding: 12px 20px 12px 40px;
  				padding-left: 50px;
  			}
  			textarea
  			{
  				width: 60%;
  				box-sizing: border-box;
  				border: 2px solid #ccc;
 				 border-radius: 4px;
  				font-size: 16px;
  				background-color: white;
  				background-image: url(img/textarea.png);
  				background-position: 10px 10px; 
  				background-repeat: no-repeat;
  				
  				padding-left: 50px;
  			}
  			 button {
  				width: 60%;
  				box-sizing: border-box;
  				border: 2px solid #ccc;
 				 
  				font-size: 16px;
  				background-color: lightblue;
  				color: #fff;
  				height: 30px;
  				
  				padding: 5px 10px 5px 10px;
  				
  			
  			}
	</style>
	
​
	

</body>

<form style="background-color: #EDC364; width:600px;height:500px; border:8px solid #523810; margin-left: 400px" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<center>


	
	<h2>CONTACT US</h2>
	

</center>

<center>
  <input  type="text" id="uname" name="uname" placeholder="Name...." required><p id=uname_e></p>
  
<br>
   <input  type="email" id="uemail" name="uemail" placeholder="Email....." required><p id=uemail_e></p><br>
   <input  type="text" id="subject" name="subject" placeholder="Sunject......" required><p id=subject_e></p><br>
   <textarea id="msg" name="msg" rows="4" cols="40" required></textarea><p id=msg_e></p>
</center><br>
  <center><button onclick="submitFunction()">Ok</button></center>
</form>




<script src="contact_us_js.js"></script>
<?php 



         echo ("<p>Your name is $uname</p>");
         echo ("<p> your email address is $uemail</p>");
         echo ("<p>Your subject $subject</p>");
         echo ("<p>your msg $msg </p>");
        
?>

</html>