<?php

include_once "connect.php";
$connect = new connection("demo");
$con = mysqli_connect("localhost","root","","demo");

if (isset($_GET['add'])) {
	$name = $_GET['name'];
	$email = $_GET['email'];
	$number = $_GET['number'];
	$domain = $_GET['domain'];

	// echo $name .$email .$number .$domain;
	$insert = "INSERT INTO user (name,email,number,domain) VALUES ('$name','$email','$number','$domain') ";
	if(mysqli_query($con,$insert)){
		header("location:index.php");
	}
	
}



?>