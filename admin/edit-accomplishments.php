<?php
				include "../includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$accomplishments = getById("accomplishments", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Accomplishments</legend>
						<input name="cat" type="hidden" value="accomplishments">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Student id</label>
							<input class="form-control" type="text" name="student_id" value="<?=$accomplishments['student_id']?>" /><br>
							
							<label>Title</label>
							<textarea class="form-control" name="title"><?=$accomplishments['title']?></textarea><br>
							
							<label>Description</label>
							<textarea class="form-control" name="description"><?=$accomplishments['description']?></textarea><br>
							
							<label>Date</label>
							<input class="form-control" type="text" name="date" value="<?=$accomplishments['date']?>" /><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$accomplishments['status']?>" /><br>
							
							<label>Created at</label>
							<input class="form-control" type="text" name="created_at" value="<?=$accomplishments['created_at']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "../includes/footer.php";?>
				