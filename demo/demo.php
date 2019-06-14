<?php

$con = mysqli_connect("localhost","root","","demo");

$sql = "select * from fields";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_row($result)){
	print_r($row);
}






?>