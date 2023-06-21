<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$contact = getById("contact", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Contact</legend>
						<input name="cat" type="hidden" value="contact">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Web</label>
							<input class="form-control" type="text" name="web" value="<?=$contact['web']?>" /><br>
							
							<label>Whatsapp</label>
							<input class="form-control" type="text" name="whatsapp" value="<?=$contact['whatsapp']?>" /><br>
							
							<label>Facebook</label>
							<input class="form-control" type="text" name="facebook" value="<?=$contact['facebook']?>" /><br>
							
							<label>Twitter</label>
							<input class="form-control" type="text" name="twitter" value="<?=$contact['twitter']?>" /><br>
							
							<label>Linkedin</label>
							<input class="form-control" type="text" name="linkedin" value="<?=$contact['linkedin']?>" /><br>
							
							<label>Github</label>
							<input class="form-control" type="text" name="github" value="<?=$contact['github']?>" /><br>
							
							<label>Instagram</label>
							<input class="form-control" type="text" name="instagram" value="<?=$contact['instagram']?>" /><br>
							
							<label>PhoneNumber</label>
							<input class="form-control" type="text" name="phoneNumber" value="<?=$contact['phoneNumber']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$contact['email']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				