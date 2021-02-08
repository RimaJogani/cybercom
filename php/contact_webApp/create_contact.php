<?php
session_start();
require 'D:\xampp_setup\htdocs\new_cycr\1\database_connection.php';


if(isset($_POST['create_contact'])) {

  
          $uname=$_POST['uname'];
          $uemail=$_POST['uemail'];
          $phone=$_POST['phone'];
        echo $datetime=$_POST['dt'];
          $title=$_POST['title'];
         
      
        $qry="INSERT into user_contact(name,email,phone,title,date_time) VALUES ('$uname','$uemail','$phone','$title','$datetime')";

          echo $qry;

          $rs = mysqli_query($mysqli,$qry);
            if($rs)

              {
                echo "Insert Success!";
                header("location:contact.php?insert_msg=Contact Saved Successfully..");
                exit();
              }
            else
              {
                echo " failed try again!";
              }

  
}
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" style="background-color: #2B65EC;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:#fff;">WebSite Title</a>
    </div>
   
    <ul class="nav navbar-nav navbar-right" >
      <li><a href="dashboard.php" style="color: #fff;"><span class="glyphicon glyphicon-home" style="color:white; "></span> Home</a></li>

      <li><a href="index1.php" style="color: #fff;"><span class="glyphicon glyphicon-log-in"></span> Contact</a></li>
       <li><a href="logout.php" style="color: #fff;"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<body>
    <div class="container register-form">
          <div class="jumbotron pb-1 mb-3">
                <hr class="my-2">
                <p>Create Contacts</p>
            </div>
            <div class="form">
                
              
  
              <form action="create_contact.php" method="POST">
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" name="uname">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email"name="uemail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please Enter Email in Correct Format" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Phone" maxlength="10" name="phone" required >
                            </div>
                            
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Title" name="title" required/>
                            </div>
                            
                            <div class="form-group">
                                <input type="datetime-local" class="form-control" name="dt" required>
                            </div>
                        </div>
                    </div>
                     <div class="form-row">
                
                <div class="col-lg-2">
                <label for=""></label>
                <button type="submit" name="create_contact" class="btn btn-success btn-block">Create</button>
                </div>
            </div>
                  </form>
                </div>
            </div>
        </div>

  </body>
</html>