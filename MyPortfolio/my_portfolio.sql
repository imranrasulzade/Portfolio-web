-- MySqlBackup.NET 2.2.1
-- Dump Time: 2022-12-25 00:03:35
-- --------------------------------------
-- Server version 5.7.15-log MySQL Community Server (GPL)


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- 
-- Definition of admins
-- 

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table admins
-- 

/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins`(`id`,`name`,`email`,`password`,`role`) VALUES
(4,'imi','imran','97ee71481a68ecd3bfad9883f613b40f',1),
(3,'Admin','admin','21232f297a57a5a743894a0e4a801fc3',1);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- 
-- Definition of contact
-- 

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `web` varchar(101) DEFAULT NULL,
  `whatsapp` varchar(101) DEFAULT NULL,
  `facebook` varchar(101) DEFAULT NULL,
  `twitter` varchar(101) DEFAULT NULL,
  `linkedin` varchar(101) DEFAULT NULL,
  `github` varchar(101) DEFAULT NULL,
  `instagram` varchar(101) DEFAULT NULL,
  `phoneNumber` varchar(21) DEFAULT NULL,
  `email` varchar(61) DEFAULT NULL,
  `id` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table contact
-- 

/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact`(`web`,`whatsapp`,`facebook`,`twitter`,`linkedin`,`github`,`instagram`,`phoneNumber`,`email`,`id`) VALUES
('http://imranrasulzade.com/','https://api.whatsapp.com/send?phone=994107133033','https://www.facebook.com/imran.resulzade.9','https://twitter.com/rslzde/','https://www.linkedin.com/in/imran-rasulzade-997264259/','https://github.com/imranrasulzade','https://www.instagram.com/imran_rasulzade/','+994107133033','imranrasulzade5@gmail.com',1);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- 
-- Definition of education
-- 

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `degree` varchar(21) DEFAULT NULL,
  `specialty` varchar(56) DEFAULT NULL,
  `university` varchar(41) DEFAULT NULL,
  `period` varchar(31) DEFAULT NULL,
  `graduating_date` varchar(31) DEFAULT NULL,
  `status` varchar(36) DEFAULT NULL,
  `ssstatus` int(1) DEFAULT NULL,
  `id` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table education
-- 

/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education`(`degree`,`specialty`,`university`,`period`,`graduating_date`,`status`,`ssstatus`,`id`) VALUES
('Bachelor','Information Technology','Baku Engineering University','4 Years Course','in July 2024','IN PROGRESS',1,1);
/*!40000 ALTER TABLE `education` ENABLE KEYS */;

-- 
-- Definition of location
-- 

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `country` varchar(21) DEFAULT NULL,
  `city` varchar(21) DEFAULT NULL,
  `street` varchar(61) DEFAULT NULL,
  `raion` varchar(36) DEFAULT NULL,
  `postalCode` varchar(16) DEFAULT NULL,
  `id` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table location
-- 

/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location`(`country`,`city`,`street`,`raion`,`postalCode`,`id`) VALUES
('Azerbaijan','Baku','Tbilisi pp. 31/66','Yasamal','AZ 1005',1);
/*!40000 ALTER TABLE `location` ENABLE KEYS */;

-- 
-- Definition of myinfo
-- 

DROP TABLE IF EXISTS `myinfo`;
CREATE TABLE IF NOT EXISTS `myinfo` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `telNumber` varchar(20) DEFAULT NULL,
  `work` varchar(65) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `cv` varchar(206) DEFAULT NULL,
  `about` longtext,
  `picture` varchar(31) DEFAULT NULL,
  `favicon` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table myinfo
-- 

/*!40000 ALTER TABLE `myinfo` DISABLE KEYS */;
INSERT INTO `myinfo`(`id`,`name`,`surname`,`telNumber`,`work`,`email`,`cv`,`about`,`picture`,`favicon`) VALUES
(1,'İmran','Rəsulzadə','+994107133033','Developer','imranrasulzade5@gmail.com','https://www.mediafire.com/file/xciksbfas63w576/Imran_Rasulzade__CV.pdf/file','I am a student and a developer with 2 years of experience. I am interested in all types of visual communication, but my main focus is the backend of web, mobile and tablet applications. I am currently learning Java programming language. In addition, I have knowledge of C#, C++, PHP, Javascript.','assets/img/imish.png','assets/img/icons/favicon.png');
/*!40000 ALTER TABLE `myinfo` ENABLE KEYS */;

-- 
-- Definition of skills
-- 

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `content` varchar(21) DEFAULT NULL,
  `rank` varchar(8) DEFAULT NULL,
  `status` int(6) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table skills
-- 

/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills`(`content`,`rank`,`status`,`id`) VALUES
('java','60',1,1),
('c#','45',1,4),
('php','70',1,2),
('html5 / Css3','50',1,3),
('javascript','35',1,5),
('c++','40',1,6);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


-- Dump completed on 2022-12-25 00:03:36
-- Total time: 0:0:0:1:642 (d:h:m:s:ms)
-- Database Controller v1.3.8 / b231
