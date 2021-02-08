<?php require 'D:\xampp_setup\htdocs\new_cycr\1\database_connection.php';

$id=$_GET['c_id'];
//echo $id;


	if(isset($_POST['update_contact'])){

         $uname=$_POST['uname'];
          $uemail=$_POST['uemail'];
          $phone=$_POST['phone'];
        echo $datetime=$_POST['dt'];
          $title=$_POST['title'];
         

           $qry="UPDATE user_contact SET name='$uname',email='$uemail',phone='$phone',title='$title' ,date_time='$datetime' WHERE id='$id'";

          echo $qry;

          $rs = mysqli_query($mysqli,$qry);
            if($rs)

              {
                echo "Update Success!";
                header("location:contact.php?update_msg=Contact Updated Successfully..");
                exit();
              }
            else
              {
                echo "Contact update failed!!";
              }

}

?>