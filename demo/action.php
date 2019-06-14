<?php

class fetch_records{
	public $row;
	public function fetch($con)
	{
		
		$sql = "SELECT * FROM fields";
		$result = mysqli_query($con,$sql);
		if($this->row = mysqli_fetch_row($result)){
			return $this->row;
		}
		else
		{
			return 'data not found';
		}
	}
}







?>