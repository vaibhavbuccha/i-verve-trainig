				<div id="add">
				<form action="insert.php" method="get">
					<tr>
					<td></td>
					<td><input type="text" name="domain" required placeholder="Domain"></td>
					<td><input type="email" name="email" required placeholder="Email"></td>
					<td><input type="text" name="name" required placeholder="Name"></td>
					<td><input type="text" name="number" required placeholder="Number"></td>
					<td colspan="2"><input type="submit" class="btn" name="add" value="add user"></td>
				</tr>
				</form>
			</div>
			<div id="edit">
				<form action="update.php" method="get">
					<?php
					
					if(isset($_GET['edit'])){
						$id = $_GET['edit'];
						$get_user = "SELECT * FROM user WHERE id= $id";
						$run = mysqli_query($con,$get_user);
						while($row = mysqli_fetch_array($run))
        				{
							
					
					?>
					<tr>
					<td></td>
					<td><input type="text" name="domain" value="<?php echo $row['domain'];?>" ></td>
					<td><input type="email" name="email" value="<?php echo $row['email'];?>"></td>
					<td><input type="text" name="name" value="<?php echo $row['name'];?>" ></td>
					<td><input type="text" name="number" value="<?php echo $row['number'];?>"></td>
					<td colspan="2"><button type="submit" class="btn" name="update" value="<?php echo $row['id']; ?>">Update</button></td>
				</tr>
				<?php
					}
				}
				?>
				</form>
			</div>
			</tbody>
			