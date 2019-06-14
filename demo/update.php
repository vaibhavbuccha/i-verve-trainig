<?php


// connection

$con = mysqli_connect("localhost","root","","demo");


if (isset($_GET['update'])) {
	$id = $_GET['update'];
	$name= $_GET['name'];
	$number = $_GET['number'];
	$email = $_GET['email'];
	$domain = $_GET['domain'];

	$update = "UPDATE user SET name='$name', email='$email',number = '$number',domain='$domain' WHERE id ='$id' ";
	if(mysqli_query($con,$update)){
		header("location:index.php");
	}

}






?>