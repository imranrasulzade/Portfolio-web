<?php
include "db.php";
$sql = "SELECT * FROM `education`;";
$run = mysqli_query($con, $sql);
$al = mysqli_fetch_assoc($run);

$degree = $al['degree'];
$specialty = $al['specialty'];
$university = $al['university'];
$period = $al['period'];
$graduating_date = $al['graduating_date'];
$status = $al['status'];
?>
<section id="resume" name="resume"></section>
	<!--EDUCATION DESCRIPTION -->
	<hr>
	<div class="container desc">
		
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>EDUCATION</h5>
				</div>
				<div class="col-lg-6">
					<p><t><?=$degree?> of <?=$specialty?></t><br/>
					<?=$university?> <br/>
						<i><?=$period?></i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>GRADUATING <?=$graduating_date?></sm><br/>
					<imp><sm><?=$status?></sm></imp>
					</p>
				</div>
				<!--
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Degree of Web Developer</t><br/>
						Hastings University <br/>
						<i>2 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>JUNE 2012</sm></p>
				</div>
-->
	
		</div><!--/.row -->
		<br>
		
	</div><!--/.container -->
	<hr>
