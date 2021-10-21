<?php
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$name = $_POST["name"];
		$f_name = $_POST["f_name"];
		$mobile = $_POST["mobile"];
		$i_name = $_POST["i_name"];
		$query = "INSERT INTO `user_info`(`name`, `f_name`, `mobile`, `i_name`) VALUES ('$name','$f_name','$mobile','$i_name')";
		$process = mysqli_query($con,$query);
		if($process){
			echo "Submitted";
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
				<input type="text" name="name" class="form-control" placeholder="Enter Name" required>
			</div>
			<div class="col">
				<label>Father's Name</label>
				<input type="text" name="f_name" class="form-control" placeholder="Enter Father's Name" required>
			</div>
		  </div>
		  <div class="form-row">
			<div class="col">
				<label>Mobile</label>
				<input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile" required>
			</div>
			<div class="col">
				<label>Institute</label>
				<input type="text" name="i_name" class="form-control" placeholder="Enter Institute Name" required>
			</div>
		  </div>
		  <button id="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
		</form>
		
		<table id="t_table" class="table table-striped">
		  <thead>
			<tr>
			  <th scope="col">Name</th>
			  <th scope="col">Father's Name</th>
			  <th scope="col">Mobile</th>
			  <th scope="col">Institute Name</th>
			  <th scope="col">Update</th>
			  <th scope="col">Delete</th>
			</tr>
		  </thead>
		  <tbody>
			 <?php
                    $retrive = "SELECT * FROM user_info";
                    $result = mysqli_query($con,$retrive);
                    while($row = mysqli_fetch_array($result)){
                        $id = $row['id'];
                        ?>
                    <tr>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['f_name']?></td>
                        <td><?php echo $row['mobile']?></td>
                        <td><?php echo $row['i_name']?></td>
						<td ><button class="btn btn-primary"><a style="color:white; text-decoration:none;" href='edit_info.php?id=<?php echo $id; ?>'>Edit</a></button></td>
                        <td><button class="btn btn-danger"><a style="color:white; text-decoration:none;" href='delete_info.php?id=<?php echo $id; ?>'>Delete</a></button></td>
                        </tr>
                <?php
                }
                ?>
			
		  </tbody>
		</table>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>