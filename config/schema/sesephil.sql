/*
SQLyog Ultimate v9.10 
MySQL - 5.6.17 : Database - sesephil
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sesephil` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sesephil`;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert  into `categories`(`id`,`parent_id`,`lft`,`rght`,`name`,`slug`) values (1,NULL,1,28,'Main','main'),(2,1,2,3,'Pregnancy Test Kit','pregnancy-test-kit'),(3,1,4,5,'Dosiflow','dosiflow'),(4,1,6,7,'Welcare Products','welcare-products'),(5,1,8,9,'Philcast Orthopedic Casting Tapes','philcast-orthopedic-casting-tapes'),(6,1,10,11,'Sesemed Products','sesemed-products'),(7,1,12,13,'Locally Produce Products','locally-produce-products'),(8,1,14,15,'Gloves','gloves'),(9,1,16,17,'Flexicare','flexicare'),(10,1,18,19,'NEX Disposal Surgical Brush','NEX-disposal-surgical-brush'),(11,1,20,21,'Supercath5','supercath5'),(12,1,22,23,'Eco Bath Towelletes','eco-bath-towelletes'),(13,1,24,25,'Assut Sutures','assut-sutures'),(14,1,26,27,'Other Products','other-products');

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `events` */

/*Table structure for table `inquiries` */

DROP TABLE IF EXISTS `inquiries`;

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` text,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `inquiries` */

insert  into `inquiries`(`id`,`from`,`subject`,`content`,`created`) values (1,'pkerroj@gmail.com','Test 1','Dear Sir, \r\nHope you are doing well! \r\nThis is James from ABC LLC. We are a trading company with offices in Europe\r\nand Latin America. \r\nWe need Polished Floor Tiles. \r\nDark Black Color: 795 pcs of 1000*1000/mm and 125 pcs of 800*800/mm.\r\nBrown Color: 260 pcs of 800*800/mm. \r\nCan you send me prices of your products; also let me know your Minimum \r\nOrder, payment terms and delivery time. ','2016-07-24 12:41:30'),(2,'pkerroj@gmail.com','Test 2','Dear Sir, \r\nHope you are doing well! \r\nThis is James from ABC LLC. We are a trading company with offices in Europe\r\nand Latin America. \r\nWe need Polished Floor Tiles. \r\nDark Black Color: 795 pcs of 1000*1000/mm and 125 pcs of 800*800/mm.\r\nBrown Color: 260 pcs of 800*800/mm. \r\nCan you send me prices of your products; also let me know your Minimum \r\nOrder, payment terms and delivery time. ','2016-07-24 12:41:51'),(3,'pkerroj@gmail.com','SEND VIA SMTP WITH ATTACHED FILE','Dear Sir, \r\nHope you are doing well! \r\nThis is James from ABC LLC. We are a trading company with offices in Europe\r\nand Latin America. \r\nWe need Polished Floor Tiles. \r\nDark Black Color: 795 pcs of 1000*1000/mm and 125 pcs of 800*800/mm.\r\nBrown Color: 260 pcs of 800*800/mm. \r\nCan you send me prices of your products; also let me know your Minimum \r\nOrder, payment terms and delivery time. ','2016-07-24 12:42:54'),(4,'pkerroj@gmail.com','SEND VIA SMTP ','Dear Sir, \r\nHope you are doing well! \r\nThis is James from ABC LLC. We are a trading company with offices in Europe\r\nand Latin America. \r\nWe need Polished Floor Tiles. \r\nDark Black Color: 795 pcs of 1000*1000/mm and 125 pcs of 800*800/mm.\r\nBrown Color: 260 pcs of 800*800/mm. \r\nCan you send me prices of your products; also let me know your Minimum \r\nOrder, payment terms and delivery time. ','2016-07-24 12:44:12'),(5,'pkerroj@gmail.com','101','Hi ','2016-07-24 13:39:35'),(6,'pkerroj@gmail.com','Inquiry about Vet Veterinary Infusion Pump with Cage Mounting','Dear Sir, \r\nHope you are doing well! \r\nThis is James from ABC LLC. We are a trading company with offices in Europe\r\nand Latin America. \r\nWe need Polished Floor Tiles. \r\nDark Black Color: 795 pcs of 1000*1000/mm and 125 pcs of 800*800/mm.\r\nBrown Color: 260 pcs of 800*800/mm. \r\nCan you send me prices of your products; also let me know your Minimum \r\nOrder, payment terms and delivery time. \r\nThanks and best regards, ','2016-07-24 13:52:34'),(7,'pkerroj@gmail.com','Testing','Paulo CVOntetn','2016-07-26 13:07:41');

/*Table structure for table `inquiry_files` */

DROP TABLE IF EXISTS `inquiry_files`;

CREATE TABLE `inquiry_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inquiry_id` int(11) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `inquiry_files` */

insert  into `inquiry_files`(`id`,`inquiry_id`,`file_name`) values (1,1,'TYPING.docx'),(2,3,'TYPING.docx'),(3,5,'cake1.jpg'),(4,6,'pt.jpg'),(5,7,'MASONRY.docx');

/*Table structure for table `manufacturers` */

DROP TABLE IF EXISTS `manufacturers`;

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `manufacturers` */

insert  into `manufacturers`(`id`,`name`,`address`) values (1,'PHAMATEC','Activity Road, San Diego California, U.S.A'),(2,'GUANGZHOU WONDFO BIOTECH CO., LTD','WONFO SCIENTECH PARK, SOUTH CHINA UNIVERSITY OF TECHNOLOGY, GUANGZHOU, P.R. CHINA'),(3,'IND DIAGNOSTIC INC.','1629 Forsters Way, Delta, B. C., V3M 6S7 Canada'),(4,'ATLAST LINK (BEIJING) TECHNOLOGY CO., LTD',''),(5,'INTEE PRODUCTS INCORPORATED',''),(6,'Leveton S.A.U - Spain','');

/*Table structure for table `product_images` */

DROP TABLE IF EXISTS `product_images`;

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `product_images` */

insert  into `product_images`(`id`,`product_id`,`img_file`,`caption`) values (6,1,'One_Step_HCG_Pregnancy_Test_Cassette_SM_DG01.jpg','T'),(4,3,'pt.jpg','PT 1'),(5,3,'images.jpg','PT 2'),(7,1,'Clinical_HCG_Pregnancy_Cassette_Test_YT_052.jpg','k'),(8,2,'HCG_Pregnancy_Test_Strip.jpg','l'),(9,2,'Rapid_HCG_Pregnancy_Test_strip_cassette_midstream_with_CE_ISO_Certificated.jpg','m'),(11,4,'dosiflow_500x500.jpeg','s'),(12,4,'dosi_flow_adef_rio.jpg',''),(13,4,'dosiFuser_500x500.jpeg','');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `manufacturer_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`id`,`category_id`,`manufacturer_id`,`name`,`slug`,`description`) values (1,2,1,'Snapkit Pregnancy Test','snapkit-pregnancy-test','&#8226; hCG Urine Test\r\n&#8226; For in-vitro diagnostic test\r\n&#8226; Easy to use\r\n&#8226; One step test\r\n&#8226; Available at Watson\'s branches nationwoide\r\n\r\n\r\n'),(2,2,3,'Lifepack Pregnancy Test','lifepack-pregnancy-test','&#8226; hCG Urine Test\r\n&#8226; For in-vitro diagnostic test\r\n&#8226; Easy to use\r\n&#8226; One step Test\r\n&#8226; Available at Watson\'s branches nationwide'),(3,2,2,'Accuprobe Pregnancy Test','accuprobe-pregnancy-test','&#8226; hCG Urine Test\r\n&#8226; For-vitro diagnostic test\r\n&#8226; Easy to use\r\n&#8226; One Step Test\r\n&#8226; Available at Watson\'s branches nationwide'),(4,1,6,'2nd Generation IV Line System','2nd-generation-iv-line-system','&#8226; Drop size: 60 drops/ml\r\n&#8226; Flow range: 5 to 250 ml/hour\r\n&#8226; Tube diameter: 2,8 x 4, 1mm\r\n&#8226; Total Lenght: 210 cm\r\n&#8226; Air intake filter: 1um\r\n&#8226; Particle filter: 15um');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
