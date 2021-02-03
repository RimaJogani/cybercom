<?php


require 'database_connection.php';

if (!isset($_POST['submit'])) 
{
	header("location:user_form.php");
	exit();
}


 
  

			$name=$_POST['uname'];
			$password=$_POST['upass'];
			$address=$_POST['uaddress'];
			$age=$_POST['uage'];
			$game=$_POST['ugame'];
			$gender=$_POST['ugender'];
			$file=$_POST['ufile'];
			
					echo "Welcome, ".$name."!!!!<br>";
					echo "password: ".$password."<br>";
					echo "address: ".$address."<br>";
					echo "age: ".$age."<br>";
					echo "gender: ".$gender."<br>";
					echo "file name: ".$file."<br>";
					echo "Select Game :";
					foreach($game as $value){
						echo $value." , ";
					}

					$t1=implode(',', $_POST['ugame']);

					$qry="INSERT into user_form1(name,password,address,
				age,gender,game,file) VALUES ('".$name."','".$password."','".$address."'
					,'".$age."','".$gender."','".$t1."','".$file."')";

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





	



?>

