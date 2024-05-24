<?php
				include "../includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-colleges.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Colleges</a>

				<h1>Colleges</h1>
				<p>This table includes <?php echo counting("colleges", "id");?> colleges.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Name</th>
			<th>Profile photo</th>
			<th>Email id</th>
			<th>Contact number</th>
			<th>Password</th>
			<th>Address</th>
			<th>Website</th>
			<th>About us</th>
			<th>Status</th>
			<th>Created at</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$colleges = getAll("colleges");
				if($colleges) foreach ($colleges as $collegess):
					?>
					<tr>
		<td><?php echo $collegess['id']?></td>
		<td><?php echo $collegess['name']?></td>
		<td><?php echo $collegess['profile_photo']?></td>
		<td><?php echo $collegess['email_id']?></td>
		<td><?php echo $collegess['contact_number']?></td>
		<td><?php echo $collegess['password']?></td>
		<td><?php echo $collegess['address']?></td>
		<td><?php echo $collegess['website']?></td>
		<td><?php echo $collegess['about_us']?></td>
		<td><?php echo $collegess['status']?></td>
		<td><?php echo $collegess['created_at']?></td>


						<td><a href="edit-colleges.php?act=edit&id=<?php echo $collegess['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $collegess['id']?>&cat=colleges" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "../includes/footer.php";?>
				