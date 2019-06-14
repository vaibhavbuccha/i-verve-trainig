<tbody>

	<?php

	$sql2 = "select * from user";
	$query = mysqli_query($con,$sql2);
	while($result = mysqli_fetch_assoc($query))
	{
	$i;
	
		# code...
	// foreach ($result as $res) {
	?>
				<tr>
					
					<td><?php echo ++$i; ?></td>
					<td><?php echo $result['domain'];?></td>
					<td><?php echo $result['email'];?></td>
					<td><?php echo $result['name'];?></td>
					<td><?php echo $result['number'];?></td>
				<form action="#" method="get">
					<td><button class="btn btn-edit" type="submit" value="<?php echo $result['id']; ?>" name="edit" onclick="edit()">Edit</button></td>
				</form>
				<form action="delete.php" method="get">
					<td><button class="btn btn-delete" type='submit' value="<?php echo $result['id']; ?>" name="Delete">Delete</button></td>
				</form>
					<?php

						}
					?>
				</tr>
				