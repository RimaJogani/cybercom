<?php
require './connection/connection.php';
session_start();


echo $id=$_SESSION['user_id'];


if(isset($_REQUEST['addBlogPost'])){

       $cid = $_POST['category_id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $url = $_POST['url'];
            $date = $_POST['pub_date'];
            $img=$_FILES['bimage']['name'];
            $tmp_name = $_FILES['bimage']['tmp_name'];

      if(!empty($cid) && !empty($title) && !empty($content) && !empty($url) && !empty($date) && !empty($tmp_name)){
                if(move_uploaded_file($tmp_name,'./../upload/'.$img)){
                    echo 'Image Upload Successfully';
                }
                else{
                    echo 'error while uploading Image';
                }
                $query = "insert into blog_post(user_id,category_id,title,url,content,image,publish_at)value('$id','$cid','$title','$url','$content','$img','$date')";
                
                $rs = mysqli_query($conn,$query);
            if($rs)

              {
                echo "Insert Success!";
                header("location:blogpost.php?");
                exit();
              }
            else
              {
                echo " failed try again!";
              }
            
    }

      
  }
?>














<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <hr class="my-2"><br>
    <div class="container text-right float-right">
        <a href="blogcategory.php" class="btn btn-success">Manage category</a>
        <a href="#" class="btn btn-warning">My Profile</a>
        <a href="logout.php" class="btn btn-danger">Log Out</a>
    </div><br><br>
    

    

            <form action="addblogpost.php" enctype="multipart/form-data" method="POST">
            <div class="jumbotron pb-1 mb-3">
                <hr class="my-2">
                <p>Add Blog Post</p>
            </div>
            <div class="form-row">
            
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4">
                <label for="">Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title"  />
                </div>
                <div class="col-lg-4">
                <label for="">Content</label>
                <textarea  class="form-control" placeholder="Content" name="content"  ></textarea>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
            <div class="form-row">
            
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4">
                <label for="">URL</label>
                <input type="text" class="form-control" placeholder="URL" name="url"  />
                </div>
                <div class="col-lg-4">
                <label for="">Published At</label>
                <input type="datetime-local" class="form-control" name="pub_date" />
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
            <div class="form-row">
            
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4">
                <label for="">Catagory</label>
                <select class="form-control" name="cid">
                    <option value="Select Category" selected>Select Category</option>
                    <?php

                        echo  $query = "select * from category";

                    if($rs=mysqli_query($conn,$query)){

                        $sql_num_rows=mysqli_num_rows($rs);
                            if($sql_num_rows >= 1){


                               while( $sql_row=mysqli_fetch_assoc($rs)){
                    ?>
                    <option value="<?php echo $sql_row['category_id'] ?>"><?php echo $sql_row['title'] ?></option>
                    <?php 
                        }
                    }
                    }
                    ?>
                </select>
                </div>
                <div class="col-lg-4">
                <label for="">Image</label>
                <input type="file" class="form-control"  name="bimage"  />
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
            <br>
            <div class="form-row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-2">
                <label for=""></label>
                <button type="submit" name="addBlogPost" class="btn btn-success btn-block">Add Blog Post</button>
                </div>
            </div>
        </div>




      
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>