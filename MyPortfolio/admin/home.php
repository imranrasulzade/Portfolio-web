<?php
		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr>
		
				<tr>
					<td><a href="admins.php">Admins</a></td>
					<td><?=counting("admins", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="contact.php">Contact</a></td>
					<td><?=counting("contact", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="education.php">Education</a></td>
					<td><?=counting("education", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="location.php">Location</a></td>
					<td><?=counting("location", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="myinfo.php">Myinfo</a></td>
					<td><?=counting("myinfo", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="skills.php">Skills</a></td>
					<td><?=counting("skills", "id")?></td>
				</tr>
				</table>
			<?php include "includes/footer.php";?>
			