


<!DOCTYPE html>
<html>
<head>
	
	<title>User Form</title>
	<script type="text/javascript" src="user_form_js.js"></script>
	<style type="text/css">

			.backcolor-blue{
				background-color: #3366FF;
			}
			.input{
				background-color: #CCFF66 ;
				margin:0px 30px;
			}
			
			select{
				background-color: #CCFF66 ;
			}
			textarea{
				background-color: #CCFF66 ;
			}
			.backcolor-yellow{
				background-color: #FFFF33;
			}
			.text-red{
				color:#FF0000;
				font-weight:bold;
				text-align:center;
			}

			.red{
				color:red;
				font-size:16px;
			}

			form{
				margin-left: 500px;
			}


	</style>
</head>
<body>

	<form action="user_form_header.php"  name="uForm" method="post" onsubmit="return validation()">

		<table  border="1" height="400" width="400">
			<tr class="backcolor-yellow">
		         <td colspan="2"><h1><center>User Form</center></h1></td>
	         </tr>
	         <tr class="backcolor-blue">
	         	<td>Enter Name:</td>
	         	<td><input type="text"  id="uname" name="uname"><br><span  id="uname_e"  class="red"></span></td>
	         </tr>
	          <tr class="backcolor-blue">
	         	<td>Enter Password:</td>
	         	<td><input type="Password" id="upass" name="upass"><br><span  id="upass_e"  class="red"></span></td>
	         </tr>
	          <tr class="backcolor-blue">
	         	<td>Enter Address:</td>
	         	<td><textarea id="uaddress" name="uaddress" rows="3" cols="20"></textarea><br><span  id="uaddress_e"  class="red"></span>
	         	</td>
	         </tr>
	         <tr class="backcolor-blue">
	         	<td>Select Game:</td>
	         	<td ><input type="checkbox" name="ugame[]" id="ugame[]" value="Hockey">Hockey<br>
	         		<input type="checkbox" name="ugame[]" id="ugame[]" value="Football">Football<br>
	         		<input type="checkbox" name="ugame[]" id="ugame[]" value="Badminton">Badminton<br>
	         		<input type="checkbox" name="ugame[]" id="ugame[]" value="Cricket">Cricket<br>
	         		<input type="checkbox" name="ugame[]" id="ugame[]" value="Volleyball">Volleyball<br><span id="ugame_e"  class="red"></span>

	         	</td>
	         </tr >
	         <tr class="backcolor-blue">
	         	<td>Gender:</td>
	         	<td>
	         		<input type="radio" name="ugender" id="ugender" value="male">Male<input type="radio" id="ugender" 
	         		name="ugender" value="female">Female<br><span  id="ugender_e"  class="red"></span>
	         	</td>
	         </tr>
	         <tr class="backcolor-blue">
	         	<td>Select ur age</td>
	         	<td>
	         		<select id="uage" name="uage">
	         			<option name="select"  selected hidden disabled value="none" >select age</option>
	         			<option value="1-15">1-15</option>
	         			<option value="16-30">16-30</option>
	         			<option value="31-60">31-60</option>
	         			<option value="60 above">60 above</option>

	         		</select><br><span id="uage_e"  class="red"></span>

	         	</td>
	         </tr>
	         <tr class="backcolor-blue">
	         	<td colspan="2"><center><input type="file" id="ufile" name="ufile" ></center><br><span id="ufile_e"  class="red"></span></td>
	         </tr>
	         <tr class="backcolor-blue">
	         	<td colspan="2">
	         		<center><input type="reset" name="reset" value="Reset">
	         		<input type="submit" name="submit" value="submit"></center>
	         	</td>
	         </tr>
	         
		
		</table>
	</form>

	


</body>
</html>