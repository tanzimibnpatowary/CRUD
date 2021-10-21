<?php
	require_once("connection.php");
	$id = $_REQUEST["id"];
	$query = "DELETE FROM `user_info` WHERE id = '$id'";
	if(mysqli_query($con,$query)){
		header("location: index.php");
	}else{
		echo "Something went to wrong!";
	}
	
?>