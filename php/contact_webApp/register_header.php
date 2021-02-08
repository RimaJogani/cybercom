<?php

session_start();
require 'D:\xampp_setup\htdocs\new_cycr\1\database_connection.php';

$fname_e=$lname_e=$dob_e=$gender_e=$country_e=$email_e=$phone_e=$pass_e=$cpass_e='';

;

if(isset($_POST['submit'])){

			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$month=$_POST['month'];
			$day=$_POST['day'];
			$year=$_POST['year'];
			$gender=$_POST['gender'];
			//echo $gender;
			$country=$_POST['country'];
			$email=$_POST['uemail'];
			$phone=$_POST['phone'];
			$pass=$_POST['pass'];
			$cpass=$_POST['cpass'];



					if(empty($fname)){
						$fname_e="fname is required";
						
					}
					if(empty($lname)){
						$lname_e= "lname is required";
					}
					if(empty($month) && empty($day) && empty($year)){
						$dob_e= "date of birth  is required";
					}
					if(empty($gender)){
						$gender_e="gender is required";
					}
					if(empty($country)){
						$country_e="country is required";
					}
					if(empty($email)){
						$email_e= "email is required";
					}
					if(empty($phone)){
						$phone_e= "phone is required";
					}
					if(empty($pass)){
						$pass_e= "password  is required";
					}
					
					if($pass != $cpass){
						$pass_e ="The two passwords do not match";
					}

					if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['gender']) && !empty($_POST['country']) && !empty($_POST['month']) && !empty($_POST['day']) && !empty($_POST['year']) && !empty($_POST['uemail']) && !empty($_POST['phone'])&& !empty($_POST['pass']) && !empty($_POST['cpass']))
					{
						$password=md5($pass);

					 $user_check_query = "SELECT * FROM user_form3 WHERE email='$email' OR pass='$password'";
					 $result = mysqli_query($mysqli, $user_check_query);
  					$user = mysqli_fetch_assoc($result);
						
  						if ($user) { // if user exists
						    if ($user['email'] == $email) {
						    	$email_e="email already exists";
						      
						    }

						    if ($user['pass'] == $password) {
						    	$pass_e="pass already exists";
						      
						    }
					 	 }
					 	 else{


					 
					  	

					   $query="INSERT into user_form3(fname,lname,dob,gender,country,email,phone,pass) VALUES ('".$fname."','".$lname."','".$day.$month.$year."','".$gender."'
					,'".$country."','".$email."','".$phone."','".$password."')";

					  	mysqli_query($mysqli, $query);
					  	$_SESSION['username'] = $fname;
					  	$_SESSION['success'] = "You are now logged in";
					  	header('location: index1.php');
					  
					  	}

					  }





}


?>