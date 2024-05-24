<?php
				include "../includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-accomplishments.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Accomplishments</a>

				<h1>Accomplishments</h1>
				<p>This table includes <?php echo counting("accomplishments", "id");?> accomplishments.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Student id</th>
			<th>Title</th>
			<th>Description</th>
			<th>Date</th>
			<th>Status</th>
			<th>Created at</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$accomplishments = getAll("accomplishments");
				if($accomplishments) foreach ($accomplishments as $accomplishmentss):
					?>
					<tr>
		<td><?php echo $accomplishmentss['id']?></td>
		<td><?php echo $accomplishmentss['student_id']?></td>
		<td><?php echo $accomplishmentss['title']?></td>
		<td><?php echo $accomplishmentss['description']?></td>
		<td><?php echo $accomplishmentss['date']?></td>
		<td><?php echo $accomplishmentss['status']?></td>
		<td><?php echo $accomplishmentss['created_at']?></td>


						<td><a href="edit-accomplishments.php?act=edit&id=<?php echo $accomplishmentss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $accomplishmentss['id']?>&cat=accomplishments" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "../includes/footer.php";?>
				