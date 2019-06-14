<?php

class connection{
	public $con;
	public function __construct($table){
		$this->con = mysqli_connect("localhost","root","",$table)or die("getting error in connection");
	}
}





?>