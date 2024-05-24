<?php
				include "../includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-recruiters.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Recruiters</a>

				<h1>Recruiters</h1>
				<p>This table includes <?php echo counting("recruiters", "id");?> recruiters.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Name</th>
			<th>Profilephoto</th>
			<th>Email id</th>
			<th>Contact number</th>
			<th>Password</th>
			<th>Website</th>
			<th>Address</th>
			<th>Description</th>
			<th>Status</th>
			<th>Created at</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$recruiters = getAll("recruiters");
				if($recruiters) foreach ($recruiters as $recruiterss):
					?>
					<tr>
		<td><?php echo $recruiterss['id']?></td>
		<td><?php echo $recruiterss['name']?></td>
		<td><?php echo $recruiterss['profilephoto']?></td>
		<td><?php echo $recruiterss['email_id']?></td>
		<td><?php echo $recruiterss['contact_number']?></td>
		<td><?php echo $recruiterss['password']?></td>
		<td><?php echo $recruiterss['website']?></td>
		<td><?php echo $recruiterss['address']?></td>
		<td><?php echo $recruiterss['description']?></td>
		<td><?php echo $recruiterss['status']?></td>
		<td><?php echo $recruiterss['created_at']?></td>


						<td><a href="edit-recruiters.php?act=edit&id=<?php echo $recruiterss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $recruiterss['id']?>&cat=recruiters" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "../includes/footer.php";?>
				