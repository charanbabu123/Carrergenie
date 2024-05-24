<?php
				include "../includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$experiences = getById("experiences", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Experiences</legend>
						<input name="cat" type="hidden" value="experiences">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Student id</label>
							<input class="form-control" type="text" name="student_id" value="<?=$experiences['student_id']?>" /><br>
							
							<label>Company name</label>
							<textarea class="form-control" name="company_name"><?=$experiences['company_name']?></textarea><br>
							
							<label>Role</label>
							<textarea class="form-control" name="role"><?=$experiences['role']?></textarea><br>
							
							<label>Duration</label>
							<textarea class="form-control" name="duration"><?=$experiences['duration']?></textarea><br>
							
							<label>Description</label>
							<textarea class="form-control" name="description"><?=$experiences['description']?></textarea><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$experiences['status']?>" /><br>
							
							<label>Created at</label>
							<input class="form-control" type="text" name="created_at" value="<?=$experiences['created_at']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "../includes/footer.php";?>
				