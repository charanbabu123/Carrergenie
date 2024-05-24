<?php
				include "../includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$questions = getById("questions", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Questions</legend>
						<input name="cat" type="hidden" value="questions">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Test id</label>
							<input class="form-control" type="text" name="test_id" value="<?=$questions['test_id']?>" /><br>
							
							<label>Question name</label>
							<textarea class="form-control" name="question_name"><?=$questions['question_name']?></textarea><br>
							
							<label>Option 1</label>
							<textarea class="form-control" name="option_1"><?=$questions['option_1']?></textarea><br>
							
							<label>Option 2</label>
							<textarea class="form-control" name="option_2"><?=$questions['option_2']?></textarea><br>
							
							<label>Option 3</label>
							<textarea class="form-control" name="option_3"><?=$questions['option_3']?></textarea><br>
							
							<label>Option 4</label>
							<textarea class="form-control" name="option_4"><?=$questions['option_4']?></textarea><br>
							
							<label>Correct option</label>
							<textarea class="form-control" name="correct_option"><?=$questions['correct_option']?></textarea><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$questions['status']?>" /><br>
							
							<label>Created at</label>
							<input class="form-control" type="text" name="created_at" value="<?=$questions['created_at']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "../includes/footer.php";?>
				