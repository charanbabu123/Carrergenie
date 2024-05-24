<?php
				include "../includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-jobs.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Jobs</a>

				<h1>Jobs</h1>
				<p>This table includes <?php echo counting("jobs", "id");?> jobs.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Recruiter id</th>
			<th>Title</th>
			<th>Role</th>
			<th>Description</th>
			<th>Ctc</th>
			<th>Elegibility</th>
			<th>Skills required</th>
			<th>Experience</th>
			<th>Course</th>
			<th>Status</th>
			<th>Created at</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$jobs = getAll("jobs");
				if($jobs) foreach ($jobs as $jobss):
					?>
					<tr>
		<td><?php echo $jobss['id']?></td>
		<td><?php echo $jobss['recruiter_id']?></td>
		<td><?php echo $jobss['title']?></td>
		<td><?php echo $jobss['role']?></td>
		<td><?php echo $jobss['description']?></td>
		<td><?php echo $jobss['ctc']?></td>
		<td><?php echo $jobss['elegibility']?></td>
		<td><?php echo $jobss['skills_required']?></td>
		<td><?php echo $jobss['experience']?></td>
		<td><?php echo $jobss['course']?></td>
		<td><?php echo $jobss['status']?></td>
		<td><?php echo $jobss['created_at']?></td>


						<td><a href="edit-jobs.php?act=edit&id=<?php echo $jobss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $jobss['id']?>&cat=jobs" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "../includes/footer.php";?>
				