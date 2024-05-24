<?php
				include "../includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-tests_attempted.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Tests_attempted</a>

				<h1>Tests_attempted</h1>
				<p>This table includes <?php echo counting("tests_attempted", "id");?> tests_attempted.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Test id</th>
			<th>Student id</th>
			<th>Percentage</th>
			<th>Status</th>
			<th>Created at</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$tests_attempted = getAll("tests_attempted");
				if($tests_attempted) foreach ($tests_attempted as $tests_attempteds):
					?>
					<tr>
		<td><?php echo $tests_attempteds['id']?></td>
		<td><?php echo $tests_attempteds['test_id']?></td>
		<td><?php echo $tests_attempteds['student_id']?></td>
		<td><?php echo $tests_attempteds['percentage']?></td>
		<td><?php echo $tests_attempteds['status']?></td>
		<td><?php echo $tests_attempteds['created_at']?></td>


						<td><a href="edit-tests_attempted.php?act=edit&id=<?php echo $tests_attempteds['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $tests_attempteds['id']?>&cat=tests_attempted" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "../includes/footer.php";?>
				