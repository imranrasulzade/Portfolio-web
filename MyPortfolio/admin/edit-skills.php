<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$skills = getById("skills", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Skills</legend>
						<input name="cat" type="hidden" value="skills">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Content</label>
							<input class="form-control" type="text" name="content" value="<?=$skills['content']?>" /><br>
							
							<label>Rank</label>
							<input class="form-control" type="text" name="rank" value="<?=$skills['rank']?>" /><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$skills['status']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				