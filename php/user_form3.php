<?php

require 'D:\xampp_setup\htdocs\new_cycr\1\database_connection.php';


if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['month']) && isset($_POST['day']) && isset($_POST['year']) && isset($_POST['gender']) && isset($_POST['country']) && isset($_POST['uemail'])
&& isset($_POST['phone']) && isset($_POST['pass']) && isset($_POST['cpass']))
	{
	if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['gender']) && !empty($_POST['country']) && !empty($_POST['month']) && !empty($_POST['day']) && !empty($_POST['year']) && !empty($_POST['uemail']) && !empty($_POST['phone'])&& !empty($_POST['pass']) && !empty($_POST['cpass']))
	{

			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$month=$_POST['month'];
			$day=$_POST['day'];
			$year=$_POST['year'];
			$gender=$_POST['gender'];
			$country=$_POST['country'];
			$email=$_POST['uemail'];
			$phone=$_POST['phone'];
			$pass=$_POST['pass'];
			$cpass=$_POST['cpass'];
			
			
				echo "First Name : ".$fname."<br>";
				echo "Last Name : ".$lname."<br>";
				echo "Date of Birth: ".$day." ".$month." ".$year."<br>";
				echo "Gender : ".$gender."<br>";
				echo "Country Name : ".$country."<br>";
				echo "Email Id : ".$email."<br>";
				echo "phone No: ".$phone."<br>";
				echo "Password is : ".$pass."<br>";
				echo "Confirm Password is : ".$cpass."<br>";

				 $qry="INSERT into user_form3(fname,lname,dob,gender,country,email,phone,pass) VALUES ('".$fname."','".$lname."','".$day.$month.$year."','".$gender."'
					,'".$country."','".$email."','".$phone."','".$pass."')";

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
		
		else {
				$fname="";
			$lname="";
			$month="";
			$day="";
			$year="";
			$gender="";
			$country="";
			$email="";
			$phone="";
			$pass="";
			$cpass="";			
		}
	}
	else{
			$fname="";
			$lname="";
			$month="";
			$day="";
			$year="";
			$gender="";
			$country="";
			$email="";
			$phone="";
			$pass="";
			$cpass="";		

	}				



?>
<!DOCTYPE html>
<html>
<head>
	<title>
	Task3
	</title>
	
	<link rel="stylesheet" type="text/css" href="user_form3_css.css">
	<script type="text/javascript" src="user_form3_js.js"></script>
</head>
<body onload="disablebutton()">
	<div class="bg">
		<div class="or">Sign Up</div><br>
		<form action="" name="uForm" method="POST" onsubmit="return validation()">
			<label>First Name</label>
		    <input type="text" name="fname" id="fname" placeholder="Enter First Name"><span id="fname_e" class="red"></span><br><br>

			<label>Last Name</label>
			<input type="text" name="lname" id="lname" placeholder="Enter Last Name"><span id="lname_e" class="red"></span><br><br>
            
            <label>Date Of Birth</label>
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
						<span id="bod" class="red"></span> <br><br>

            <label>Gender </label>
            <input type="radio" name="gender" id="gender" value="male">Male
            <input type="radio" name="gender" id="gender" value="female">Female	
            <span id="gender_e" class="red"></span><br><br>
            
            <label>Country</label>
			<select name="country" id="country">
			<option name="select" value="none" >select country</option>
				<option value="India">India</option>
				<option value="Pakistan">Pakistan</option>
				<option value="Canada">Canada</option>
				<option value="Landon">Landon</option>
				<option value="Switzerland">Switzerland</option>

			</select><span id="country_e" class="red"></span><br><br>

			<label>E-mail</label>
			<input type="email" name="uemail" id="uemail" placeholder="Enter E-mail ">
			<span id="email_e" class="red"></span><br><br>


			<label>Phone</label>
			<input type="tel" name="phone" id="phone"><span id="phone_e" class="red"></span><br><br>


			<label>Password</label>
			<input type="text" name="pass" id="pass"><span id="pass_e" class="red"></span>
			<br><br>

			<div><label>Confirm Password</label>
                <input type="text" name="cpass" id="cpass">
                <span id="cpass_e" class="red"></span>
            </div>

			<br>
			<div class="lable_width">
               
							<input type="checkbox" name="agree" id="terms" onchange="activateButton(this)">
							I accept this agreement
							<span id="agee_e" class="red"></span>
						
            </div>	


            
			<div class="or-btn" style="height: 40px;">
				<input type="submit" name="submit" value="submit" id="submit">
				<input type="reset" name=" reset" value="reset">
			</div>	
		</form>
	</div>
</body>
</html>