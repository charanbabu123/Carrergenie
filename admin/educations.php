<?php
				include "../includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-educations.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Educations</a>

				<h1>Educations</h1>
				<p>This table includes <?php echo counting("educations", "id");?> educations.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Student id</th>
			<th>College name</th>
			<th>Course</th>
			<th>Duration</th>
			<th>Score</th>
			<th>Status</th>
			<th>Created at</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$educations = getAll("educations");
				if($educations) foreach ($educations as $educationss):
					?>
					<tr>
		<td><?php echo $educationss['id']?></td>
		<td><?php echo $educationss['student_id']?></td>
		<td><?php echo $educationss['college_name']?></td>
		<td><?php echo $educationss['course']?></td>
		<td><?php echo $educationss['duration']?></td>
		<td><?php echo $educationss['score']?></td>
		<td><?php echo $educationss['status']?></td>
		<td><?php echo $educationss['created_at']?></td>


						<td><a href="edit-educations.php?act=edit&id=<?php echo $educationss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $educationss['id']?>&cat=educations" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "../includes/footer.php";?>
				