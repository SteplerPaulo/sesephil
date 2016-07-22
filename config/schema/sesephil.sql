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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `product_images` */

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
