<?php
	require_once("connection.php");
	$id = $_REQUEST["id"];
	$retrive = "SELECT * FROM `user_info` WHERE id = '$id'";
	$result = mysqli_query($con,$retrive);
	$name = ""; $f_name = ""; $mobile = ""; $i_name = "";
	while($row = mysqli_fetch_array($result)){
	   $name = $row["name"];
	   $f_name = $row["f_name"];
	   $mobile = $row["mobile"];
	   $i_name = $row["i_name"];
	}
	//update code
	
	if(isset($_POST["update"])){
		$u_name = $_POST["name"];
		$u_father = $_POST["f_name"];
		$u_mobile = $_POST["mobile"];
		$u_ins = $_POST["i_name"];
		$u_query = "UPDATE `user_info` SET `name`='$u_name',`f_name`='$u_father',`mobile`='$u_mobile',`i_name`='$u_ins' WHERE id = '$id'";
		if(mysqli_query($con,$u_query)){
			header("location: index.php");
		}else{
			echo "Something went to wrong!";
		}
		
	}
	
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <style>
	#p_title{
		text-align: center;
		padding-top: 25px;
	}
	#submit{
		margin-top: 15px;
	}
	#t_table{
		margin-top: 15px;
	}
	#a_button{
		color: #FFF;
	}
  </style>
  <body>
    <div class="container">
		<h2 id="p_title">CRUD Project by Sayed</h2>
		<form method="POST">
		  <div class="form-row">
			<div class="col">
				<label>Name</label>
				<input type="text" value="<?php echo $name; ?>" name="name" class="form-control" placeholder="Enter Name" required>
			</div>
			<div class="col">
				<label>Father's Name</label>
				<input type="text" value="<?php echo $f_name; ?>" name="f_name" class="form-control" placeholder="Enter Father's Name" required>
			</div>
		  </div>
		  <div class="form-row">
			<div class="col">
				<label>Mobile</label>
				<input type="text" value="<?php echo $mobile; ?>" name="mobile" class="form-control" placeholder="Enter Your Mobile" required>
			</div>
			<div class="col">
				<label>Institute</label>
				<input type="text" value="<?php echo $i_name; ?>" name="i_name" class="form-control" placeholder="Enter Institute Name" required>
			</div>
		  </div>
		  <button id="submit" name="update" type="submit" class="btn btn-primary">Update</button>
		</form>
	
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>