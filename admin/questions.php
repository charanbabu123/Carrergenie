<?php
				include "../includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-questions.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Questions</a>

				<h1>Questions</h1>
				<p>This table includes <?php echo counting("questions", "id");?> questions.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Test id</th>
			<th>Question name</th>
			<th>Option 1</th>
			<th>Option 2</th>
			<th>Option 3</th>
			<th>Option 4</th>
			<th>Correct option</th>
			<th>Status</th>
			<th>Created at</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$questions = getAll("questions");
				if($questions) foreach ($questions as $questionss):
					?>
					<tr>
		<td><?php echo $questionss['id']?></td>
		<td><?php echo $questionss['test_id']?></td>
		<td><?php echo $questionss['question_name']?></td>
		<td><?php echo $questionss['option_1']?></td>
		<td><?php echo $questionss['option_2']?></td>
		<td><?php echo $questionss['option_3']?></td>
		<td><?php echo $questionss['option_4']?></td>
		<td><?php echo $questionss['correct_option']?></td>
		<td><?php echo $questionss['status']?></td>
		<td><?php echo $questionss['created_at']?></td>


						<td><a href="edit-questions.php?act=edit&id=<?php echo $questionss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $questionss['id']?>&cat=questions" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "../includes/footer.php";?>
				