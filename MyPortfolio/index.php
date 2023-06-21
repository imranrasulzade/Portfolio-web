<!DOCTYPE html>
<?php
include "db.php";
	$sql = "SELECT * FROM `myinfo`;";
	$run = mysqli_query($con, $sql);
	$al = mysqli_fetch_assoc($run);
	$name = $al['name'];
	$surname = $al['surname'];
	$work = $al['work'];
	$email = $al['email'];
	$favicon = $al['favicon'];
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=$favicon?>"> <!--href database'den gelmese yerine   assets/img/icons/favicon.png  yaz -->

    <title><?=$name?> <?=$surname?> | Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script> 
    <script src="assets/js/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
	
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#nav">

	<div id="section-topbar">
		<div id="topbar-inner">
			<div class="container">
				<div class="row">
					<div class="dropdown">
						<ul id="nav" class="nav">
							<li class="menu-item"><a class="scroll" href="#about" title="About"><i class="icon-user"></i></a></li>
							<li class="menu-item"><a class="scroll" href="#education" title="Education"><i class="icon-book"></i></a></li>
							<li class="menu-item"><a class="scroll" href="#skills" title="Skills"><i class="icon-tasks"></i></a></li>
							<li class="menu-item"><a class="scroll" href="#contact" title="Contact"><i class="icon-envelope"></i></a></li>
							<!-- <li class="menu-item"><a class="scroll" href="#" title="change"><i class="icon-play-circle"></i></a></li> -->
						</ul><!--/ uL#nav -->
					</div><!-- /.dropdown -->

					<script>
						$("row.dropdown").click(function(){
						$(".row ul").slideToggle("slow" , function(){
						});
						});
					</script>

					<div class="clear"></div>
				</div><!--/.row -->
			</div><!--/.container -->

			<div class="clear"></div>
		</div><!--/ #topbar-inner -->
	</div><!--/ #section-topbar -->
	
	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1><?=$name?> <?=$surname?></h1>
					<h3><?=$work?>  |  <a style="color:white" href="mailto: <?=$email?>"><?=$email?></a> </h3>
				</div><!--/.col-lg-12 -->
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/.#headerwrap -->
	

	<!-- ABOUT SECTION-->
	<section id="about" name="about"></section>
	<?include"about.php";?>
	<!-- END OF ABOUT SECTION-->


	<!-- EDUCATION SECTION-->
	<section id="education" name="education"></section>
	<?include"education.php";?>
	<!-- END OF EDUCATION SECTION-->
	
	<!-- WORK SECTION-->
	
<!-- END OF WORK SECTION-->




	<!-- AWARD SECTION-->
	
<!-- END OF AWARD SECTION-->
	

	

	<!-- SKILLS SECTION-->
	<section id="skills" name="skills"></section>
	<?include"skills.php";?>
<!-- END OF SKILLS SECTION-->


	<!-- PORTFOLIO SECTION-->
	
	<!-- END OF PORTFOLIO SECTION-->


<!-- CONTACT SECTION-->
		<section id="contact" name="contact"></section>
		<?include"contact.php";?>
<!-- END OF CONTACT SECTION-->

<?
	$al1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `location`;"));
	$city = $al1['city'];

	$al2 = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `contact`;"));
	$web = $al2['web'];
?>
	
	<div id="c">
		<div class="container">
			<p><span>©  <script>var CurrentYear = new Date().getFullYear()
            document.write(CurrentYear)</script> <?=$city?>  &nbsp;</span> ...Created by <a href="<?=$web?>"><?=$surname?></a></p>
		</div>
	</div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.js"></script>

	<!--BACK TO TOP-->
	<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="icon-arrow-up"></i></a>
	<script src="assets/js/back-to-top.js"></script>

	
  </body>
</html>
