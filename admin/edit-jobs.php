<?php
				include "../includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$jobs = getById("jobs", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Jobs</legend>
						<input name="cat" type="hidden" value="jobs">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Recruiter id</label>
							<input class="form-control" type="text" name="recruiter_id" value="<?=$jobs['recruiter_id']?>" /><br>
							
							<label>Title</label>
							<textarea class="form-control" name="title"><?=$jobs['title']?></textarea><br>
							
							<label>Role</label>
							<textarea class="form-control" name="role"><?=$jobs['role']?></textarea><br>
							
							<label>Description</label>
							<textarea class="form-control" name="description"><?=$jobs['description']?></textarea><br>
							
							<label>Ctc</label>
							<textarea class="form-control" name="ctc"><?=$jobs['ctc']?></textarea><br>
							
							<label>Elegibility</label>
							<textarea class="form-control" name="elegibility"><?=$jobs['elegibility']?></textarea><br>
							
							<label>Skills required</label>
							<textarea class="form-control" name="skills_required"><?=$jobs['skills_required']?></textarea><br>
							
							<label>Experience</label>
							<textarea class="form-control" name="experience"><?=$jobs['experience']?></textarea><br>
							
							<label>Course</label>
							<textarea class="form-control" name="course"><?=$jobs['course']?></textarea><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$jobs['status']?>" /><br>
							
							<label>Created at</label>
							<input class="form-control" type="text" name="created_at" value="<?=$jobs['created_at']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "../includes/footer.php";?>
				