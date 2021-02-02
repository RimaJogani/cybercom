<?php

require 'D:\xampp_setup\htdocs\new_cycr\1\database_connection.php';

	
	if(isset($_POST['uname']) && isset($_POST['upass']) && isset($_POST['ugender']) && isset($_POST['uaddress']) && isset($_POST['month']) && isset($_POST['day']) && isset($_POST['year']) && isset($_POST['ugame']) && isset($_POST['MaritalStatus']))
	{
	if(!empty($_POST['uname']) && !empty($_POST['upass']) && !empty($_POST['ugender']) && !empty($_POST['uaddress']) && !empty($_POST['month']) && !empty($_POST['day']) && !empty($_POST['year']) && !empty($_POST['ugame']) && !empty($_POST['MaritalStatus']))
	{

			$name=$_POST['uname'];
			$password=$_POST['upass'];
			$gender=$_POST['ugender'];
			$address=$_POST['uaddress'];
			$month=$_POST['month'];
			$day=$_POST['day'];
			$year=$_POST['year'];
			$game=$_POST['ugame'];
			$MaritalStatus=$_POST['MaritalStatus'];
			
			
					echo "Welcome, ".$name."!!!!<br>";
				echo "password: ".$password."<br>";
				echo "address: ".$address."<br>";
				echo "gender: ".$gender."<br>";
				echo "Date of Birth: ".$day." ".$month." ".$year."<br>";
				echo "Select Game :";
				foreach($game as $value){
					echo $value."   ";
				}
				echo "<br>Marital Status : ".$MaritalStatus;
	            $qry="INSERT into user_form(first_name,password,gender,
				address,dob,game,status) VALUES ('".$name."','".$password."','".$gender."'
					,'".$address."','".$day.$month.$year."','".$value."','".$MaritalStatus."')";

					//echo $qry;

					$rs = mysqli_query($mysqli,$qry);
						if($rs)

							{
								echo "Insert Success!";
							}
						else
							{
								echo "Insert Error!";
							}

		}
		else
		{
				$name="";
				$password="";
				$address="";
				$day="";
				$month="";
				$year="";
				$MaritalStatus="";
				$game="";
				$gender="";
		}
	}
	else
	{
				$name="";
				$password="";
				$address="";
				$day="";
				$month="";
				$year="";
				$MaritalStatus="";
				$game="";
				$gender="";
	}






?>
<!DOCTYPE html>
<html>
<head>
	<title> USER FORM2</title>
	<link rel="stylesheet" type="text/css" href="user_form2_css.css">
<script type="text/javascript" src="user_form2_js.js"></script>
</head>
<body onload="disablebutton()">
<div class="box">
	<div class="inner-box">
		<fieldset>
			<legend align="center">USER FORM</legend>
			<form action="user_form2.php" name="uForm" method="post" onsubmit=" return validation()">
				<table>
					<tr>
						<td><ul><li><label>Enter Name</label></li></ul>
						</td>
						<td><input type="text" name="uname" id="uname"><br><span id="uname_e" class="red"></td>	
					</tr>						
					<tr>
						<td><ul><li><label>Enter Password</label></li></ul>
						</td>
						<td><input type="text" name="upass" id="upass"><br><span id="upass_e" class="red"></span></td>
					</tr>		
					
					<tr>
						<td><ul><li><label>Gender</label></li></ul>
						</td>
						<td><input type="radio" name="ugender" value="Male">Male<input type="radio" name="ugender" value="Female">Female <br><span id="ugender_e" class="red"> </span> </td>
					</tr>

					<tr>
						<td><ul><li><label>Enter Address</label></li></ul>
						</td>
						<td><textarea cols="20" rows="2" name="uaddress" id="uaddress"></textarea><br><span id="uaddress_e" class="red"> </td>
					</tr>

					<tr>
						<td><ul><li><label>D.O.B</label></li></ul>
						</td>
						<td>
							<select name="month" id="month">
							<option name="select" value="none" >Month</option>
							<option value="Jan">Jan</option>
							<option value="Feb">Feb</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">Aug</option>
							<option value="September">Sept</option>
							<option value="October">Oct</option>
							<option value="November">Nov</option>
							<option value="December">Dec</option>
						</select>
						
						<select name="day" id="day">
							<option name="select" value="none" >Day</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
						
						<select name="year" id="year">
							<option name="select" value="none" >Year</option>
							<option value="2021">2021</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
							<option value="2014">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
							<option value="2000">2000</option>
							<option value="1999">1999</option>
							<option value="1998">1998</option>
						</select>
						<span id="bod" class="red"></span> 
						</td>
					</tr>

					<tr>
						<td><ul><li><label>Select Game</label></li></ul>
						</td>
						<td>
							<input type="checkbox" name="ugame[]" value="Hockey">Hockey
							<input type="checkbox" name="ugame[]" value="Football">Football	
							<input type="checkbox" name="ugame[]" value="Cricket">Cricket
							<input type="checkbox" name="ugame[]" value="Cricket">VolleyBall<br><span id="ugame_e" class="red"> </span> 
						</td>
					</tr>

					<tr>
						<td><ul><li><label>Marital Status</label></li></ul>
						</td>
						<td><input type="radio" name="MaritalStatus"  value="Married">Married<input type="radio" name="MaritalStatus" value="Unmarried">Unmarried<br><span id="maritalstatus_e" class="red"> </span> </td>
						
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" id="submit" value="Submit">&nbsp;<input type="reset" name="reset"></td></td>
					</tr>	

					<tr>
						<td></td>
						<td>
							<input type="checkbox" name="agree" id="terms" onchange="activateButton(this)">I accept this agreement
							<span id="span_agee" class="red"></span>
						</td>	
					</tr>
				</table>
			</form>
		</fieldset>
	</div>
</div>
</body>
</html>