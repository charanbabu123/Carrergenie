<?php
				include "../includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-tests.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Tests</a>

				<h1>Tests</h1>
				<p>This table includes <?php echo counting("tests", "id");?> tests.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Test name</th>
			<th>Description</th>
			<th>Status</th>
			<th>Created at</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$tests = getAll("tests");
				if($tests) foreach ($tests as $testss):
					?>
					<tr>
		<td><?php echo $testss['id']?></td>
		<td><?php echo $testss['test_name']?></td>
		<td><?php echo $testss['description']?></td>
		<td><?php echo $testss['status']?></td>
		<td><?php echo $testss['created_at']?></td>


						<td><a href="edit-tests.php?act=edit&id=<?php echo $testss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $testss['id']?>&cat=tests" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "../includes/footer.php";?>
				