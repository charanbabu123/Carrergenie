<?php
				include "../includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$colleges = getById("colleges", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Colleges</legend>
						<input name="cat" type="hidden" value="colleges">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Name</label>
							<textarea class="form-control" name="name"><?=$colleges['name']?></textarea><br>
							
							<label>Profile photo</label>
							<textarea class="form-control" name="profile_photo"><?=$colleges['profile_photo']?></textarea><br>
							
							<label>Email id</label>
							<textarea class="form-control" name="email_id"><?=$colleges['email_id']?></textarea><br>
							
							<label>Contact number</label>
							<textarea class="form-control" name="contact_number"><?=$colleges['contact_number']?></textarea><br>
							
							<label>Password</label>
							<textarea class="form-control" name="password"><?=$colleges['password']?></textarea><br>
							
							<label>Address</label>
							<textarea class="form-control" name="address"><?=$colleges['address']?></textarea><br>
							
							<label>Website</label>
							<textarea class="form-control" name="website"><?=$colleges['website']?></textarea><br>
							
							<label>About us</label>
							<textarea class="form-control" name="about_us"><?=$colleges['about_us']?></textarea><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$colleges['status']?>" /><br>
							
							<label>Created at</label>
							<input class="form-control" type="text" name="created_at" value="<?=$colleges['created_at']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "../includes/footer.php";?>
				