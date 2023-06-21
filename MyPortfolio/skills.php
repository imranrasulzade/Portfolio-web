<?php 
include "db.php";

	$al = mysqli_fetch_assoc(mysqli_query($con, "SELECT `rank`,`content` FROM `skills` WHERE `id`='1';"));
	$s1 = $al['rank'];
	$s1con = $al['content'];

	$al = mysqli_fetch_assoc(mysqli_query($con, "SELECT `rank`,`content` FROM `skills` WHERE `id`='2';"));
	$s2 = $al['rank'];
	$s2con = $al['content'];

	$al = mysqli_fetch_assoc(mysqli_query($con, "SELECT `rank`,`content` FROM `skills` WHERE `id`='3';"));
	$s3 = $al['rank'];
	$s3con = $al['content'];

	$al = mysqli_fetch_assoc(mysqli_query($con, "SELECT `rank`,`content` FROM `skills` WHERE `id`='4';"));
	$s4 = $al['rank'];
	$s4con = $al['content'];

	$al = mysqli_fetch_assoc(mysqli_query($con, "SELECT `rank`,`content` FROM `skills` WHERE `id`='5';"));
	$s5 = $al['rank'];
	$s5con = $al['content'];

	$al = mysqli_fetch_assoc(mysqli_query($con, "SELECT `rank`,`content` FROM `skills` WHERE `id`='6';"));
	$s6 = $al['rank'];
	$s6con = $al['content'];

?>
	<div id="skillswrap">
		<div class="container">
			<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>SKILLS</h5>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="s1" height="120" width="120"></canvas>
						<p><?php echo ucfirst($s1con)?></p>
						<br>
						<script>
							var doughnutData = [
									{
										value: <?=$s1?>,
										color:"#1abc9c"
									},
									{
										value : <?=100-$s1?>,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("s1").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="s2" height="120" width="120"></canvas>
						<p><?php echo ucfirst($s2con)?></p>
						<br>
						<script>
							var doughnutData = [
									{
										value: <?=$s2?>,
										color:"#1abc9c"
									},
									{
										value : <?=100-$s2?>,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("s2").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="s3" height="120" width="120"></canvas>
						<p><?php echo ucfirst($s3con)?></p>
						<br>
						<script>
							var doughnutData = [
									{
										value: <?=$s3?>,
										color:"#1abc9c"
									},
									{
										value : <?=100-$s3?>,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("s3").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					
					<div class="col-lg-3 col-lg-offset-3 centered">
						<canvas id="s4" height="120" width="120"></canvas>
						<p><?php echo ucfirst($s4con)?></p>
						<br>
						<script>
							var doughnutData = [
									{
										value: <?=$s4?>,
										color:"#1abc9c"
									},
									{
										value : <?=100-$s4?>,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("s4").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="s5" height="120" width="120"></canvas>
						<p><?php echo ucfirst($s5con)?></p>
						<br>
						<script>
							var doughnutData = [
									{
										value: <?=$s5?>,
										color:"#1abc9c"
									},
									{
										value : <?=100-$s5?>,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("s5").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="s6" height="120" width="120"></canvas>
						<p><?php echo ucfirst($s6con)?></p>
						<br>
						<script>
							var doughnutData = [
									{
										value: <?=$s6?>,
										color:"#1abc9c"
									},
									{
										value : <?=100-$s6?>,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("s6").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

			</div><!--/.row -->
			<br>
		</div><!--/.container -->
	</div><!--/ #skillswrap -->
