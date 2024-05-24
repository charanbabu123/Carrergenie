<?php
				include "../includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-projects.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Projects</a>

				<h1>Projects</h1>
				<p>This table includes <?php echo counting("projects", "id");?> projects.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Student id</th>
			<th>Title</th>
			<th>Description</th>
			<th>Url</th>
			<th>Status</th>
			<th>Created at</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$projects = getAll("projects");
				if($projects) foreach ($projects as $projectss):
					?>
					<tr>
		<td><?php echo $projectss['id']?></td>
		<td><?php echo $projectss['student_id']?></td>
		<td><?php echo $projectss['title']?></td>
		<td><?php echo $projectss['description']?></td>
		<td><?php echo $projectss['url']?></td>
		<td><?php echo $projectss['status']?></td>
		<td><?php echo $projectss['created_at']?></td>


						<td><a href="edit-projects.php?act=edit&id=<?php echo $projectss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $projectss['id']?>&cat=projects" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "../includes/footer.php";?>
				