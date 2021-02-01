<?php

 $uname=$upass=$uaddress=$ugame=$ugender=$uage=$ufile="";

 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

  	 $uname = testdetails($_POST["uname"]);
  	 $upass=testdetails($_POST["upass"]);
  	 $uaddress=testdetails($_POST["uaddress"]);
  	 $ugame=$_POST['ugame'];
  	 $ugender=testdetails($_POST['ugender']);
  	  $uage=$_POST['uage'];
  	  $ufile=testdetails($_POST['ufile']);


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
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Form</title>

</head>
<body>

	<form action="user_form.php" method="post" name="form">
		<table  border="1" height="400" width="400">
			<tr>
		         <td colspan="2"><h1><center>User Form</center></h1></td>
	         </tr>
	         <tr>
	         	<td><label>Enter Name:</label></td>
	         	<td><input type="text"  id="uname" name="uname" required><p id="uname_e"></p></td>
	         </tr>
	          <tr>
	         	<td>Enter Password:</td>
	         	<td><input type="Password" id="upass" name="upass" required><p id="upass_e"></p></td>
	         </tr>
	          <tr>
	         	<td>Enter Address:</td>
	         	<td><textarea id="uaddress"name="uaddress" rows="3" cols="20" required></textarea><p id="uaddress_e"></p></td>
	         </tr>
	         <tr>
	         	<td>Select Game:</td>
	         	<td ><input type="checkbox" name="ugame[]" value="Hockey">Hockey<br>
	         		<input type="checkbox" name="ugame[]" value="Football">Football<br>
	         		<input type="checkbox" name="ugame[]" value="Badminton">Badminton<br>
	         		<input type="checkbox" name="ugame[]" value="Cricket">Cricket<br>
	         		<input type="checkbox" name="ugame[]" value="Volleyball">Volleyball<br><p id="ugame_e"></p>

	         	</td>
	         </tr>
	         <tr>
	         	<td>Gender:</td>
	         	<td>
	         		<input type="radio" name="ugender" value="male">Male<input type="radio" name="ugender" value="female">Female

	         	</td>
	         </tr>
	         <tr>
	         	<td>Select ur age</td>
	         	<td>
	         		<select id="uage" name="uage[]"required>
	         			<option >select age</option>
	         			<option value="1-15">1-15</option>
	         			<option value="16-30">16-30</option>
	         			<option value="31-60">31-60</option>
	         			<option value="60 above">60 above</option>

	         		</select ><p id="uage_e"></p>

	         	</td>
	         </tr>
	         <tr>
	         	<td colspan="2"><center><input type="file" id="ufile" name="ufile" required></center><p id="ufile_e"></p></td>
	         </tr>
	         <tr>
	         	<td colspan="2">
	         		<center><input type="submit" name="reset" value="Reset">
	         		<button onclick="funValidation()">Submit</button></center>
	         	</td>
	         </tr>
	         
		
		</table>
	</form>

	<script src="user_form_js.js"></script>

<?php
         echo "<h2>Your given values are as :</h2>";
         echo ("<p>Your name is $uname</p>");
         echo ("<p> your Password is $upass</p>");
         echo ("<p>Your Address is $uaddress</p>");
         echo ("<p>your gender $ugender </p>");

         echo ("<p>your file name is $ufile</p>");
         
         for($i = 0; $i < count($ugame); $i++) {
            echo($ugame[$i] . " ");
         }
         echo '<br>';
          for($i = 0; $i < count($uage); $i++) {
            echo("select age is :".$uage[$i] . " ");
         }
      ?>
</body>
</html>