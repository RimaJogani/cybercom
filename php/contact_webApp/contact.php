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
    <form action="contact.php">
        <div class="container-fluid">
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
           
            <div class="jumbotron pb-1 mb-3">
                <hr class="my-2">
                <p>Read Contacts</p>
                <p class="lead">
                 	<a href="create_contact.php" name="update" class="btn btn-success" >Create Contact</a>
                </p>
                <?php if(isset($_GET['insert_msg'])){  ?>
                <div class="alert alert-success" role="alert">
                  <p class="mb-0 text-center">
                    <?php echo $_GET['insert_msg']; ?>
                  </p>
                </div>
                <?php } ?>
                <?php if(isset($_GET['update_msg'])){  ?>
                <div class="alert alert-warning" role="alert">
                  <p class="mb-0 text-center">
                    <?php echo $_GET['update_msg']; ?>
                  </p>
                </div>
                <?php } ?>
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Title</th>
                        <th>DateTime</th>

                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php

					require 'D:\xampp_setup\htdocs\new_cycr\1\database_connection.php';


					$limit=5;
					if(isset($_GET['page'])){

							$page=$_GET['page'];
					}else{
						$page=1;
					}
				   

					 $offset=($page - 1) * $limit;

					$qry="SELECT * FROM user_contact LIMIT {$offset},{$limit} ";
					
			 		$rs=mysqli_query($mysqli,$qry);
					$mysqli_num_rows=mysqli_num_rows($rs);

					if($mysqli_num_rows>=1)
					{
						while ($row=mysqli_fetch_assoc($rs))
						{?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name']?></td>
								<td><?php echo $row['email']?></td>
								<td><?php echo $row['phone']?></td>
								<td><?php echo $row['title']?></td>
								<td><?php echo $row['date_time']?></td>
								<td><button class="btn  btn-danger" data-id='<?php echo $row['id'];?>'>Delete</a></button>
									
								</td>
								<td><a href="update_contact.php?id=<?php echo $row['id']; ?>" name="update" class="btn btn-warning" >Update</a>
							</tr>
				<?php	
						}
					}
			?>
        </tbody>
    </table>  




            <?php



		$qry1="SELECT * FROM user_contact";	

		$rs1=mysqli_query($mysqli,$qry1) or die("Query Falid");
		$mysqli_num_rows1=mysqli_num_rows($rs1);
		if($mysqli_num_rows1>=1){

			$total_records=$mysqli_num_rows1;
			
			$total_pages=ceil($total_records/$limit);
			 

			echo '<ul class="pagination admin-pagination">';
			for($i=1; $i <= $total_pages;$i++){

				echo '<li><a href="contact.php?page='.$i.'">'.$i.'</a></li>';


			}
			echo '</ul>';

		}
	
?>
           
    </form>

 <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function(){

		$(document).on("click",".btn",function(){

			var id=$(this).data("id");
			var element=this;
			alert(id);

			$.ajax({

				url: "ajex-delete.php",
				type:"POST",
				data :{c_id : id},
				success : function(data){
					if(data==1){

						$(element).closest("tr").fadeOut();

					}else{
						//$("#error-msg").html("can't delete records.").slideDown();
						//$("#success-msg").slideUp();
						aert("can't delete records");

					}
				}





			});





		});


	});




</script>
    
    
  </body>

</html>


























































