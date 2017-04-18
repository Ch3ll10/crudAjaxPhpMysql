
/*!40101 SET NAMES utf8 */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`exercise` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `exercise`;

/*Table structure for table `personas` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `contrasena` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `personas` */

insert  into `users`(`id`,`nombres`,`contrasena`) values (1,'DAVID BIZZ','555533322'),(2,'Jhon','1243344');

