<?php
				include "../includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$educations = getById("educations", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Educations</legend>
						<input name="cat" type="hidden" value="educations">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Student id</label>
							<input class="form-control" type="text" name="student_id" value="<?=$educations['student_id']?>" /><br>
							
							<label>College name</label>
							<textarea class="form-control" name="college_name"><?=$educations['college_name']?></textarea><br>
							
							<label>Course</label>
							<textarea class="form-control" name="course"><?=$educations['course']?></textarea><br>
							
							<label>Duration</label>
							<textarea class="form-control" name="duration"><?=$educations['duration']?></textarea><br>
							
							<label>Score</label>
							<textarea class="form-control" name="score"><?=$educations['score']?></textarea><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$educations['status']?>" /><br>
							
							<label>Created at</label>
							<input class="form-control" type="text" name="created_at" value="<?=$educations['created_at']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "../includes/footer.php";?>
				