<?php
include "db.php";
$sql = "SELECT * FROM `myinfo`;";
$run = mysqli_query($con, $sql);
$al = mysqli_fetch_assoc($run);
$cv = $al['cv'];
$about = $al['about'];
$picture = $al['picture'];
?>
<section id="about" name="about"></section>

	<div id="intro">
		<div class="container">
			<div class="row">
			<h5 id="aboutH5"> &nbsp; ABOUT</h5>
				<div class="col-lg-2 col-lg-offset-1">
				</div>
				<div class="col-lg-6" id="aboutdiv">
				<img src="<?=$picture?>" alt="" class="pp"> <!--src gelmese database'den onda yerine  imish.jpg  yaz-->
					<p id="pabout"><?=$about?> 
					</p>
				</div>
				<div class="col-lg-3">
					
					<p style="margin-top: 15px;"><a href="<?=$cv?>" id="download" target="_blank"><i class="icon-file"><sm>  &nbsp; DOWNLOAD PDF (CV)</sm></i></a> </p>
				
				</div>
				<br>
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #intro -->

