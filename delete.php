<?php
	require_once 'DB.php';
	if(ISSET($_POST['delete'])){
		$image_name = $_FILES['photodelete']['name'];
		$image_temp = $_FILES['photodelete']['tmp_name'];
		$user_id = $_POST['user_id'];


				mysqli_query($connect, "DELETE FROM `products` WHERE ID='$user_id'") or die(mysqli_error());
				echo"<script>if(!alert('Product has been Deleted'))
    document.location = 'ManageProducts.php';
              </script>";
		
	}


	if(ISSET($_POST['deleteuser'])){
		$user_id = $_POST['user_id'];


			
				mysqli_query($connect, "DELETE FROM `users` WHERE ID='$user_id'") or die(mysqli_error());
				echo"<script>if(!alert('User has been Deleted'))
    document.location = 'ManageUsers.php';
              </script>";
		
	}


	if(ISSET($_POST['deletenews'])){
		$user_id = $_POST['user_id'];


			
				mysqli_query($connect, "DELETE FROM `news` WHERE ID='$user_id'") or die(mysqli_error());
				echo"<script>if(!alert('News has been Deleted'))
    document.location = 'ManageNews.php';
              </script>";
		
	}

	
?>