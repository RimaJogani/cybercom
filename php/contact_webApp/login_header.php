<?php 
session_start();
require 'D:\xampp_setup\htdocs\new_cycr\1\database_connection.php';

$uemail_e=$upass_e='';
$error_e='';

if(isset($_POST['submit'])){

	if(isset($_POST['uemail']) && isset($_POST['upass'])){

		$uemail=$_POST['uemail'];
		$upass=md5($_POST['upass']);

					if(empty($uemail)){
							$uemail_e= "email is required";
						}
					if(empty($phone)){
							$upass_e= "Password is required";
					}

				if(!empty($uemail) && !empty($upass)){

					$sql="SELECT * FROM `user_form3` WHERE `email`='$uemail' AND `pass`='$upass'";
					if($sql_run=mysqli_query($mysqli,$sql)){

						$sql_num_rows=mysqli_num_rows($sql_run);
							if($sql_num_rows >= 1){


								while($sql_row=mysqli_fetch_assoc($sql_run)){
									$id=$sql_row['id'];
									$email=$sql_row['email'];
									$password=$sql_row['pass'];
									$username=$sql_row['fname'];
									
								}
								echo "email data".$email;
								echo "user_id" .$id;
								echo "user_session".$_SESSION['id']=$id;
								$_SESSION['username']=$username;


								header("location:index1.php");
								exit();
							}
					
							else{
								
									$error_e="Email Address or password incorrect";
								
								
							}

						}

				}

	}

					
	}		


?>