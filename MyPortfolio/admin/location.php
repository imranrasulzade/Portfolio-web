<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-location.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Location</a>

				<h1>Location</h1>
				<p>This table includes <?php echo counting("location", "id");?> location.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Country</th>
			<th>City</th>
			<th>Street</th>
			<th>Raion</th>
			<th>PostalCode</th>
			<th>Id</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$location = getAll("location");
				if($location) foreach ($location as $locations):
					?>
					<tr>
		<td><?php echo $locations['country']?></td>
		<td><?php echo $locations['city']?></td>
		<td><?php echo $locations['street']?></td>
		<td><?php echo $locations['raion']?></td>
		<td><?php echo $locations['postalCode']?></td>
		<td><?php echo $locations['id']?></td>


						<td><a href="edit-location.php?act=edit&id=<?php echo $locations['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $locations['id']?>&cat=location" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				