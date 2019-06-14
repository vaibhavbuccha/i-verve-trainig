 

<?php 

include_once "connect.php";
include_once "action.php";

$fields_db = new connection("demo");
$con = $fields_db->con;
$sql = "select * from fields";
$result = mysqli_query($con,$sql);


?>

<thead>
	<?php
		while($row = mysqli_fetch_row($result)){
			?>
			<th><?php foreach ($row as $rows) {
				echo $rows;
			} ; ?></th>

			<?php
		}
?>	
			<th>Update</th>
			<th>Delete</th>
</thead>