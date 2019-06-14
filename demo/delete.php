<?php




$con = mysqli_connect("localhost","root","","demo");



if(isset($_GET['Delete'])){
	$id = $_GET['Delete'];
	$del = "DELETE FROM user WHERE id='$id'";
	if(mysqli_query($con,$del)){
		header("location:index.php");
	}
}














?>