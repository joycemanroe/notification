/*
SQLyog Community v11.51 (32 bit)
MySQL - 5.6.20 : Database - registrasidb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`registrasidb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `registrasidb`;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Occupation` varchar(200) NOT NULL,
  `com_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`Name`,`Email`,`Phone`,`Occupation`,`com_code`) values (16,'Joyce','carolinasitorus95@gmail.com','081397629320','Students','38488fd200c67d12bbd54f3c062cbbc7'),(17,'Carolina','if413061@students.del.ac.id','081397629320','Students','35e3573dd8ab28980d7d6f0fd141e896'),(18,'Camelia','camelia@students.del.ac.id','081397629320','Students','d22cb73f45e0f912f7c1a5cb098cca1c');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
