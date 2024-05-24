<?php
				include "../includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$tests_attempted = getById("tests_attempted", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Tests_attempted</legend>
						<input name="cat" type="hidden" value="tests_attempted">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Test id</label>
							<input class="form-control" type="text" name="test_id" value="<?=$tests_attempted['test_id']?>" /><br>
							
							<label>Student id</label>
							<input class="form-control" type="text" name="student_id" value="<?=$tests_attempted['student_id']?>" /><br>
							
							<label>Percentage</label>
							<textarea class="form-control" name="percentage"><?=$tests_attempted['percentage']?></textarea><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$tests_attempted['status']?>" /><br>
							
							<label>Created at</label>
							<input class="form-control" type="text" name="created_at" value="<?=$tests_attempted['created_at']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "../includes/footer.php";?>
				