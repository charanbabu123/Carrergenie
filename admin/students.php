<?php
				include "../includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-students.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Students</a>

				<h1>Students</h1>
				<p>This table includes <?php echo counting("students", "id");?> students.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Name</th>
			<th>Profile photo</th>
			<th>Email id</th>
			<th>Contact number</th>
			<th>Password</th>
			<th>College id</th>
			<th>Dob</th>
			<th>Bio</th>
			<th>Address</th>
			<th>Website</th>
			<th>Skills</th>
			<th>Languages</th>
			<th>Status</th>
			<th>Created at</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$students = getAll("students");
				if($students) foreach ($students as $studentss):
					?>
					<tr>
		<td><?php echo $studentss['id']?></td>
		<td><?php echo $studentss['name']?></td>
		<td><?php echo $studentss['profile_photo']?></td>
		<td><?php echo $studentss['email_id']?></td>
		<td><?php echo $studentss['contact_number']?></td>
		<td><?php echo $studentss['password']?></td>
		<td><?php echo $studentss['college_id']?></td>
		<td><?php echo $studentss['dob']?></td>
		<td><?php echo $studentss['bio']?></td>
		<td><?php echo $studentss['address']?></td>
		<td><?php echo $studentss['website']?></td>
		<td><?php echo $studentss['skills']?></td>
		<td><?php echo $studentss['languages']?></td>
		<td><?php echo $studentss['status']?></td>
		<td><?php echo $studentss['created_at']?></td>


						<td><a href="edit-students.php?act=edit&id=<?php echo $studentss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $studentss['id']?>&cat=students" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "../includes/footer.php";?>
				