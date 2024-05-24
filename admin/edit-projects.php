<?php
				include "../includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$projects = getById("projects", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Projects</legend>
						<input name="cat" type="hidden" value="projects">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Student id</label>
							<input class="form-control" type="text" name="student_id" value="<?=$projects['student_id']?>" /><br>
							
							<label>Title</label>
							<textarea class="form-control" name="title"><?=$projects['title']?></textarea><br>
							
							<label>Description</label>
							<textarea class="form-control" name="description"><?=$projects['description']?></textarea><br>
							
							<label>Url</label>
							<textarea class="form-control" name="url"><?=$projects['url']?></textarea><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$projects['status']?>" /><br>
							
							<label>Created at</label>
							<input class="form-control" type="text" name="created_at" value="<?=$projects['created_at']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "../includes/footer.php";?>
				