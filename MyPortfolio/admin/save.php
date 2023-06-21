<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "admins" || $cat_get == "admins") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `admins` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `admins` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `admins` WHERE id = '".$id_get."' ");
					}
					header("location:"."admins.php");
				}
				
				if($cat == "contact" || $cat_get == "contact") {
					$web = addslashes(htmlentities($_POST["web"], ENT_QUOTES));
$whatsapp = addslashes(htmlentities($_POST["whatsapp"], ENT_QUOTES));
$facebook = addslashes(htmlentities($_POST["facebook"], ENT_QUOTES));
$twitter = addslashes(htmlentities($_POST["twitter"], ENT_QUOTES));
$linkedin = addslashes(htmlentities($_POST["linkedin"], ENT_QUOTES));
$github = addslashes(htmlentities($_POST["github"], ENT_QUOTES));
$instagram = addslashes(htmlentities($_POST["instagram"], ENT_QUOTES));
$phoneNumber = addslashes(htmlentities($_POST["phoneNumber"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `contact` (  `web` , `whatsapp` , `facebook` , `twitter` , `linkedin` , `github` , `instagram` , `phoneNumber` , `email` ) VALUES ( '".$web."' , '".$whatsapp."' , '".$facebook."' , '".$twitter."' , '".$linkedin."' , '".$github."' , '".$instagram."' , '".$phoneNumber."' , '".$email."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `contact` SET  `web` =  '".$web."' , `whatsapp` =  '".$whatsapp."' , `facebook` =  '".$facebook."' , `twitter` =  '".$twitter."' , `linkedin` =  '".$linkedin."' , `github` =  '".$github."' , `instagram` =  '".$instagram."' , `phoneNumber` =  '".$phoneNumber."' , `email` =  '".$email."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `contact` WHERE id = '".$id_get."' ");
					}
					header("location:"."contact.php");
				}
				
				if($cat == "education" || $cat_get == "education") {
					$degree = addslashes(htmlentities($_POST["degree"], ENT_QUOTES));
$specialty = addslashes(htmlentities($_POST["specialty"], ENT_QUOTES));
$university = addslashes(htmlentities($_POST["university"], ENT_QUOTES));
$period = addslashes(htmlentities($_POST["period"], ENT_QUOTES));
$graduating_date = addslashes(htmlentities($_POST["graduating_date"], ENT_QUOTES));
$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
$ssstatus = addslashes(htmlentities($_POST["ssstatus"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `education` (  `degree` , `specialty` , `university` , `period` , `graduating_date` , `status` , `ssstatus` ) VALUES ( '".$degree."' , '".$specialty."' , '".$university."' , '".$period."' , '".$graduating_date."' , '".$status."' , '".$ssstatus."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `education` SET  `degree` =  '".$degree."' , `specialty` =  '".$specialty."' , `university` =  '".$university."' , `period` =  '".$period."' , `graduating_date` =  '".$graduating_date."' , `status` =  '".$status."' , `ssstatus` =  '".$ssstatus."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `education` WHERE id = '".$id_get."' ");
					}
					header("location:"."education.php");
				}
				
				if($cat == "location" || $cat_get == "location") {
					$country = addslashes(htmlentities($_POST["country"], ENT_QUOTES));
$city = addslashes(htmlentities($_POST["city"], ENT_QUOTES));
$street = addslashes(htmlentities($_POST["street"], ENT_QUOTES));
$raion = addslashes(htmlentities($_POST["raion"], ENT_QUOTES));
$postalCode = addslashes(htmlentities($_POST["postalCode"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `location` (  `country` , `city` , `street` , `raion` , `postalCode` ) VALUES ( '".$country."' , '".$city."' , '".$street."' , '".$raion."' , '".$postalCode."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `location` SET  `country` =  '".$country."' , `city` =  '".$city."' , `street` =  '".$street."' , `raion` =  '".$raion."' , `postalCode` =  '".$postalCode."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `location` WHERE id = '".$id_get."' ");
					}
					header("location:"."location.php");
				}
				
				if($cat == "myinfo" || $cat_get == "myinfo") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$surname = addslashes(htmlentities($_POST["surname"], ENT_QUOTES));
$telNumber = addslashes(htmlentities($_POST["telNumber"], ENT_QUOTES));
$work = addslashes(htmlentities($_POST["work"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$cv = addslashes(htmlentities($_POST["cv"], ENT_QUOTES));
$about = addslashes(htmlentities($_POST["about"], ENT_QUOTES));
$picture = addslashes(htmlentities($_POST["picture"], ENT_QUOTES));
$favicon = addslashes(htmlentities($_POST["favicon"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `myinfo` (  `name` , `surname` , `telNumber` , `work` , `email` , `cv` , `about` , `picture` , `favicon` ) VALUES ( '".$name."' , '".$surname."' , '".$telNumber."' , '".$work."' , '".$email."' , '".$cv."' , '".$about."' , '".$picture."' , '".$favicon."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `myinfo` SET  `name` =  '".$name."' , `surname` =  '".$surname."' , `telNumber` =  '".$telNumber."' , `work` =  '".$work."' , `email` =  '".$email."' , `cv` =  '".$cv."' , `about` =  '".$about."' , `picture` =  '".$picture."' , `favicon` =  '".$favicon."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `myinfo` WHERE id = '".$id_get."' ");
					}
					header("location:"."myinfo.php");
				}
				
				if($cat == "skills" || $cat_get == "skills") {
					$content = addslashes(htmlentities($_POST["content"], ENT_QUOTES));
$rank = addslashes(htmlentities($_POST["rank"], ENT_QUOTES));
$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `skills` (  `content` , `rank` , `status` ) VALUES ( '".$content."' , '".$rank."' , '".$status."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `skills` SET  `content` =  '".$content."' , `rank` =  '".$rank."' , `status` =  '".$status."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `skills` WHERE id = '".$id_get."' ");
					}
					header("location:"."skills.php");
				}
				?>