<?php
				include "../includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$recruiters = getById("recruiters", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Recruiters</legend>
						<input name="cat" type="hidden" value="recruiters">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Name</label>
							<textarea class="form-control" name="name"><?=$recruiters['name']?></textarea><br>
							
							<label>Profilephoto</label>
							<textarea class="form-control" name="profilephoto"><?=$recruiters['profilephoto']?></textarea><br>
							
							<label>Email id</label>
							<textarea class="form-control" name="email_id"><?=$recruiters['email_id']?></textarea><br>
							
							<label>Contact number</label>
							<textarea class="form-control" name="contact_number"><?=$recruiters['contact_number']?></textarea><br>
							
							<label>Password</label>
							<textarea class="form-control" name="password"><?=$recruiters['password']?></textarea><br>
							
							<label>Website</label>
							<textarea class="form-control" name="website"><?=$recruiters['website']?></textarea><br>
							
							<label>Address</label>
							<textarea class="form-control" name="address"><?=$recruiters['address']?></textarea><br>
							
							<label>Description</label>
							<textarea class="form-control" name="description"><?=$recruiters['description']?></textarea><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$recruiters['status']?>" /><br>
							
							<label>Created at</label>
							<input class="form-control" type="text" name="created_at" value="<?=$recruiters['created_at']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "../includes/footer.php";?>
				