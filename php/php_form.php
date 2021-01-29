<!DOCTYPE html>
<html>
<head>
	<title>php form</title>
</head>
<body>
<?php


		$uname_e = $uemail_e = $ugender_e = $uclass_e=$ucourse_e = "";
         $uname = $uemail = $gender = $class = $ucourse = $subject = "";




            if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["uname"])) {

               $uname_e = "Name is required";

            }else {

               $uname = testdetails($_POST["uname"]);
            }
            
            if (empty($_POST["uemail"])) {

               $uemail_e = "Email is required";

            }else {

               $uemail = testdetails($_POST["uemail"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {

                  $uemail_r = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["ucourse"])) {

               $ucourse_e = "";

            }else {

               $ucourse = testdetails($_POST["ucourse"]);
            }
            
            if (empty($_POST["class"])) {

               $uclass_e = "";

            }else {

               $class = testdetails($_POST["class"]);

            }
            
            if (empty($_POST["gender"])) {

               $ugender_e = "Gender is required";

            }else {

               $gender = testdetails($_POST["gender"]);
            }
            
            if (empty($_POST["subject"])) {

               $subject_e = "You must select 1 or more";

            }else {

               $subject = $_POST["subject"];	
            }
         }

 function testdetails($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }








?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

<h2>Absolute Classes Registration</h2>

Name : <input type="text" name="uname">*<?php  echo $uname_e;   ?><br><br>
Email : <input type="Email" name="uemail">*<?php  echo $uemail_e;   ?><br><br>
Time : <input type="text" name="ucourse"><?php  echo $ucourse_e  ?><br><br>
Classes : <textarea name="class" rows="5" cols="10"><?php  echo $uclass_e ?></textarea><br><br>
Gender : <input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="male">male *<?php  echo $ugender_e   ?><br><br>

Select : <select name="subject[]" size="4" multiple>
		<option value="Android">Android</option>
		<option value="Java">JAva</option>
		<option value="C#">C#</option>
		<option value="Data Base">Data Base</option>
	</select><br><br>

Agree <input type="checkbox" name="checked" value="1">
 <?php if(!isset($_POST['checked'])){ ?><span class = "error">* <?php echo "You must agree to terms";?></span>
               <?php } ?> 

<br><br>

<input type="submit" name="submit" value="submit">


</form>

<?php
         echo "<h2>Your given values are as :</h2>";
         echo ("<p>Your name is $uname</p>");
         echo ("<p> your email address is $uemail</p>");
         echo ("<p>Your class time at $ucourse</p>");
         echo ("<p>your class info $class </p>");
         echo ("<p>your gender is $gender</p>");
         
         for($i = 0; $i < count($subject); $i++) {
            echo($subject[$i] . " ");
         }
      ?>
</body>
</html>