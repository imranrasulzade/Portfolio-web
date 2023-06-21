<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$education = getById("education", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Education</legend>
						<input name="cat" type="hidden" value="education">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Degree</label>
							<input class="form-control" type="text" name="degree" value="<?=$education['degree']?>" /><br>
							
							<label>Specialty</label>
							<input class="form-control" type="text" name="specialty" value="<?=$education['specialty']?>" /><br>
							
							<label>University</label>
							<input class="form-control" type="text" name="university" value="<?=$education['university']?>" /><br>
							
							<label>Period</label>
							<input class="form-control" type="text" name="period" value="<?=$education['period']?>" /><br>
							
							<label>Graduating date</label>
							<input class="form-control" type="text" name="graduating_date" value="<?=$education['graduating_date']?>" /><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$education['status']?>" /><br>
							
							<label>Ssstatus</label>
							<input class="form-control" type="text" name="ssstatus" value="<?=$education['ssstatus']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				