<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$myinfo = getById("myinfo", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Myinfo</legend>
						<input name="cat" type="hidden" value="myinfo">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Name</label>
							<input class="form-control" type="text" name="name" value="<?=$myinfo['name']?>" /><br>
							
							<label>Surname</label>
							<input class="form-control" type="text" name="surname" value="<?=$myinfo['surname']?>" /><br>
							
							<label>TelNumber</label>
							<input class="form-control" type="text" name="telNumber" value="<?=$myinfo['telNumber']?>" /><br>
							
							<label>Work</label>
							<input class="form-control" type="text" name="work" value="<?=$myinfo['work']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$myinfo['email']?>" /><br>
							
							<label>Cv</label>
							<input class="form-control" type="text" name="cv" value="<?=$myinfo['cv']?>" /><br>
							
							<label>About</label>
							<input class="form-control" type="text" name="about" value="<?=$myinfo['about']?>" /><br>
							
							<label>Picture</label>
							<input class="form-control" type="text" name="picture" value="<?=$myinfo['picture']?>" /><br>
							
							<label>Favicon</label>
							<input class="form-control" type="text" name="favicon" value="<?=$myinfo['favicon']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				