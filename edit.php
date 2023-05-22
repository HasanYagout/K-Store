<?php
	require_once 'DB.php';
	if(ISSET($_POST['editproduct'])){
    $user_id = $_POST['user_id'];
    if($_FILES['photoupdate']['name']==''){
      
      $result=mysqli_query($connect, "SELECT IMAGE from `products` WHERE ID = '$user_id'") or die(mysqli_error());
      $row=mysqli_fetch_array($result);
      $name=$_POST['name'];
      $rr=$_POST['previous'];
      $company=$_POST['company'];
      $details = $_POST['details'];
      $quantity=$_POST['quantity'];
      $cost = $_POST['cost'];
		$retail = $_POST['retail'];
    $wholesale = $_POST['wholesale'];
    $units = $_POST['units'];
    $type = $_POST['type'];
    mysqli_query($connect, "UPDATE `products` set `NAME` = '$name', `IMAGE` = '$rr', `COMPANY` = '$company', `DETAILS` = '$details', `QUANTITY` = '$quantity', `COST` = '$cost', `PRICE_RETAIL` = '$retail', `PRICE_WHOLESALE` = '$wholesale', `UNITS_PER_DOZEN` = '$units', `TYPE` = '$type' WHERE `ID` = '$user_id'") or die(mysqli_error());
    echo "<script>alert('product Updated!')
    window.location.href='ManageProducts.php';
    </script>";

    }
    else{
      $image_name = $_FILES['photoupdate']['name'];
      $image_temp = $_FILES['photoupdate']['tmp_name'];
   
      $company=$_POST['company'];
      $details = $_POST['details'];
      $quantity=$_POST['quantity'];
      $cost = $_POST['cost'];
		$retail = $_POST['retail'];
    $wholesale = $_POST['wholesale'];
    $units = $_POST['units'];
    $type = $_POST['type'];
      $exp = explode(".", $image_name);
      $end = end($exp);
      $name = time().".".$end;
      $path = "upload/".$name;
      $allowed_ext = array("gif", "jpg", "jpeg", "png","");
        
            move_uploaded_file($image_temp, $path);
            mysqli_query($connect, "UPDATE `products` set NAME = '$name', IMAGE = '$path', COMPANY = '$company', DETAILS = '$details', QUANTITY = '$quantity', COST = '$cost', PRICE_RETAIL = '$retail', PRICE_WHOLESALE = '$wholesale', UNITS_PER_DOZEN = '$units', TYPE = '$type' WHERE `ID` = '$user_id'") or die(mysqli_error());
            echo "<script>alert('Product Updated!')
            window.location.href='ManageProducts.php';
            </script>";
    
  
    }
		

				
				
		
	}


	if(ISSET($_POST['updateuser'])){
		$user_id = $_POST['user_id'];
		$firstname = $_POST['firstname'];
    	$lastname = $_POST['lastname'];
    	$email = $_POST['email'];
    	$type = $_POST['type'];


			
				mysqli_query($connect, "UPDATE `users` SET FIRSTNAME='$firstname', LASTNAME='$lastname',EMAIL='$email',TYPE='$type' WHERE ID=$user_id") or die(mysqli_error());
				echo"<script>if(!alert('User has been updated'))
    document.location = 'ManageUsers.php';
              </script>";
		
	}
  if(ISSET($_POST['editnews'])){
    $user_id = $_POST['user_id'];
    if($_FILES['photoupdate']['name']==''){
      $result=mysqli_query($connect, "SELECT IMAGE from `news` WHERE ID = '$user_id'") or die(mysqli_error());
      $row=mysqli_fetch_array($result);
      $rr=$row['IMAGE'];
      $title=$_POST['title'];
      $date=$_POST['date'];
      $paragraph=$_POST['paragraph'];
      
    mysqli_query($connect, "UPDATE `news` set `TITLE` = '$title', `DATE`='$date' ,`PARAGRAPH` = '$paragraph', `IMAGE` = '$rr' WHERE `ID` = '$user_id'") or die(mysqli_error());
    echo "<script>alert('News Updated!')
    window.location.href='ManageNews.php';
    </script>";

    }
  }


  
?>