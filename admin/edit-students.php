<?php
				include "../includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$students = getById("students", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Students</legend>
						<input name="cat" type="hidden" value="students">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Name</label>
							<textarea class="form-control" name="name"><?=$students['name']?></textarea><br>
							
							<label>Profile photo</label>
							<textarea class="form-control" name="profile_photo"><?=$students['profile_photo']?></textarea><br>
							
							<label>Email id</label>
							<textarea class="form-control" name="email_id"><?=$students['email_id']?></textarea><br>
							
							<label>Contact number</label>
							<textarea class="form-control" name="contact_number"><?=$students['contact_number']?></textarea><br>
							
							<label>Password</label>
							<textarea class="form-control" name="password"><?=$students['password']?></textarea><br>
							
							<label>College id</label>
							<input class="form-control" type="text" name="college_id" value="<?=$students['college_id']?>" /><br>
							
							<label>Dob</label>
							<input class="form-control" type="text" name="dob" value="<?=$students['dob']?>" /><br>
							
							<label>Bio</label>
							<textarea class="form-control" name="bio"><?=$students['bio']?></textarea><br>
							
							<label>Address</label>
							<textarea class="form-control" name="address"><?=$students['address']?></textarea><br>
							
							<label>Website</label>
							<textarea class="form-control" name="website"><?=$students['website']?></textarea><br>
							
							<label>Skills</label>
							<textarea class="form-control" name="skills"><?=$students['skills']?></textarea><br>
							
							<label>Languages</label>
							<textarea class="form-control" name="languages"><?=$students['languages']?></textarea><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$students['status']?>" /><br>
							
							<label>Created at</label>
							<input class="form-control" type="text" name="created_at" value="<?=$students['created_at']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "../includes/footer.php";?>
				