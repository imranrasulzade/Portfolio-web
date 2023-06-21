<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-myinfo.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Myinfo</a>

				<h1>Myinfo</h1>
				<p>This table includes <?php echo counting("myinfo", "id");?> myinfo.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Name</th>
			<th>Surname</th>
			<th>TelNumber</th>
			<th>Work</th>
			<th>Email</th>
			<th>Cv</th>
			<th>About</th>
			<th>Picture</th>
			<th>Favicon</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$myinfo = getAll("myinfo");
				if($myinfo) foreach ($myinfo as $myinfos):
					?>
					<tr>
		<td><?php echo $myinfos['id']?></td>
		<td><?php echo $myinfos['name']?></td>
		<td><?php echo $myinfos['surname']?></td>
		<td><?php echo $myinfos['telNumber']?></td>
		<td><?php echo $myinfos['work']?></td>
		<td><?php echo $myinfos['email']?></td>
		<td><?php echo $myinfos['cv']?></td>
		<td><?php echo $myinfos['about']?></td>
		<td><?php echo $myinfos['picture']?></td>
		<td><?php echo $myinfos['favicon']?></td>


						<td><a href="edit-myinfo.php?act=edit&id=<?php echo $myinfos['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $myinfos['id']?>&cat=myinfo" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				