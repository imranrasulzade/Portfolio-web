<?php
		error_reporting(0);
		@session_start();
		if (!isset($_SESSION["sess_admin_login"])){header("location:"."index.php");}
			include("includes/connect.php");
			include("includes/data.php");
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="@housamz">

				<meta name="description" content="Mass Admin Panel">
				<title>My_portfolio Admin Panel</title>
				<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">

				<!-- Custom CSS -->
				<link rel="stylesheet" href="includes/style.css">
				<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

				<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
					<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				<![endif]-->
			</head>

			<body>

			<div class="wrapper">
				<!-- Sidebar Holder -->
				<nav id="sidebar" class="bg-primary">
					<div class="sidebar-header">
						<h3>
							My_portfolio Admin Panel<br>
							<i id="sidebarCollapse" class="glyphicon glyphicon-circle-arrow-left"></i>
						</h3>
						<strong>
							My_portfolio<br>
							<i id="sidebarExtend" class="glyphicon glyphicon-circle-arrow-right"></i>
						</strong>
					</div><!-- /sidebar-header -->

					<!-- start sidebar -->
					<ul class="list-unstyled components">
						<li>
							<a href="home.php" aria-expanded="false">
								<i class="glyphicon glyphicon-home"></i>
								Home
							</a>
						</li>
			<li><a href="admins.php"> <i class="glyphicon glyphicon-bitcoin"></i>Admins <span class="pull-right"><?=counting("admins", "id")?></span></a></li>
<li><a href="contact.php"> <i class="glyphicon glyphicon-tasks"></i>Contact <span class="pull-right"><?=counting("contact", "id")?></span></a></li>
<li><a href="education.php"> <i class="glyphicon glyphicon-open-file"></i>Education <span class="pull-right"><?=counting("education", "id")?></span></a></li>
<li><a href="location.php"> <i class="glyphicon glyphicon-plus-sign"></i>Location <span class="pull-right"><?=counting("location", "id")?></span></a></li>
<li><a href="myinfo.php"> <i class="glyphicon glyphicon-earphone"></i>Myinfo <span class="pull-right"><?=counting("myinfo", "id")?></span></a></li>
<li><a href="skills.php"> <i class="glyphicon glyphicon-education"></i>Skills <span class="pull-right"><?=counting("skills", "id")?></span></a></li>
<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
				</ul>
			</nav><!-- /end sidebar -->

			<!-- Page Content Holder -->
			<div id="content">