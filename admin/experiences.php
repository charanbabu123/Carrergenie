<?php
				include "../includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-experiences.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Experiences</a>

				<h1>Experiences</h1>
				<p>This table includes <?php echo counting("experiences", "id");?> experiences.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Student id</th>
			<th>Company name</th>
			<th>Role</th>
			<th>Duration</th>
			<th>Description</th>
			<th>Status</th>
			<th>Created at</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$experiences = getAll("experiences");
				if($experiences) foreach ($experiences as $experiencess):
					?>
					<tr>
		<td><?php echo $experiencess['id']?></td>
		<td><?php echo $experiencess['student_id']?></td>
		<td><?php echo $experiencess['company_name']?></td>
		<td><?php echo $experiencess['role']?></td>
		<td><?php echo $experiencess['duration']?></td>
		<td><?php echo $experiencess['description']?></td>
		<td><?php echo $experiencess['status']?></td>
		<td><?php echo $experiencess['created_at']?></td>


						<td><a href="edit-experiences.php?act=edit&id=<?php echo $experiencess['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $experiencess['id']?>&cat=experiences" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "../includes/footer.php";?>
				