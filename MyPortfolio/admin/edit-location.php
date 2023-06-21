<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$location = getById("location", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Location</legend>
						<input name="cat" type="hidden" value="location">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Country</label>
							<input class="form-control" type="text" name="country" value="<?=$location['country']?>" /><br>
							
							<label>City</label>
							<input class="form-control" type="text" name="city" value="<?=$location['city']?>" /><br>
							
							<label>Street</label>
							<input class="form-control" type="text" name="street" value="<?=$location['street']?>" /><br>
							
							<label>Raion</label>
							<input class="form-control" type="text" name="raion" value="<?=$location['raion']?>" /><br>
							
							<label>PostalCode</label>
							<input class="form-control" type="text" name="postalCode" value="<?=$location['postalCode']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				