<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-education.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Education</a>

				<h1>Education</h1>
				<p>This table includes <?php echo counting("education", "id");?> education.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Degree</th>
			<th>Specialty</th>
			<th>University</th>
			<th>Period</th>
			<th>Graduating date</th>
			<th>Status</th>
			<th>Ssstatus</th>
			<th>Id</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$education = getAll("education");
				if($education) foreach ($education as $educations):
					?>
					<tr>
		<td><?php echo $educations['degree']?></td>
		<td><?php echo $educations['specialty']?></td>
		<td><?php echo $educations['university']?></td>
		<td><?php echo $educations['period']?></td>
		<td><?php echo $educations['graduating_date']?></td>
		<td><?php echo $educations['status']?></td>
		<td><?php echo $educations['ssstatus']?></td>
		<td><?php echo $educations['id']?></td>


						<td><a href="edit-education.php?act=edit&id=<?php echo $educations['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $educations['id']?>&cat=education" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				