<?php

require 'database_connection.php';

if (!isset($_POST['submit'])) 
{
	header("location:signin_form.php");
	exit();
}


          $pass=$_POST['upass'];
          $email=$_POST['uemail'];

          echo "your Email Id : ".$email."<br>";
          echo "Your Password is : ".$pass."<br>";

          $sql="INSERT into signin_user(email,password)VALUES('".$email."','".$pass."')";
          $row=mysqli_query($mysqli,$sql);

          if($row){

          	echo "Record insert..";
          	header("location:signin_form.php");
          	exit();
          }
          else
          {
          	echo "insert failed";
          }


?>

