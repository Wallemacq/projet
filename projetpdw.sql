/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.27-MariaDB : Database - projetpdw
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`projetpdw` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `projetpdw`;

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `nom_article` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `FK_article__categorie` (`id_categorie`),
  CONSTRAINT `FK_article__categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `article` */

/*Table structure for table `categorie` */

DROP TABLE IF EXISTS `categorie`;

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `categorie` */

insert  into `categorie`(`id_categorie`,`nom`) values 
(1,'decoration'),
(2,'accessoire');

/*Table structure for table `commande` */

DROP TABLE IF EXISTS `commande`;

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `id_statut` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `FK commande_statut` (`id_statut`),
  KEY `FK commande utilisateur` (`id_utilisateur`),
  CONSTRAINT `FK commande utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK commande_statut` FOREIGN KEY (`id_statut`) REFERENCES `statut` (`id_statut`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `commande` */

/*Table structure for table `commande_article` */

DROP TABLE IF EXISTS `commande_article`;

CREATE TABLE `commande_article` (
  `id_commande_article` int(11) NOT NULL,
  `prix` float NOT NULL,
  `id_commande` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  PRIMARY KEY (`id_commande_article`),
  KEY `FK commande_article__commmande` (`id_commande`),
  KEY `FK commande_article__article` (`id_article`),
  CONSTRAINT `FK commande_article__article` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK commande_article__commmande` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK commande_article__statut` FOREIGN KEY (`id_commande_article`) REFERENCES `statut` (`id_statut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `commande_article` */

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `role` */

insert  into `role`(`id_role`,`nom`) values 
(1,'admin'),
(2,'client');

/*Table structure for table `statut` */

DROP TABLE IF EXISTS `statut`;

CREATE TABLE `statut` (
  `id_statut` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_statut`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `statut` */

insert  into `statut`(`id_statut`,`nom`) values 
(1,'Visualisée'),
(2,'Rejetée'),
(3,'En cours de traitement'),
(4,'En attente'),
(5,'Prête à expédier'),
(6,'Partiellement expédiée'),
(7,'Expédiée'),
(8,'Livrée'),
(9,'Partiellement facturée'),
(10,'Facturée'),
(11,'Partiellement payée'),
(12,'Payée'),
(13,'Retournée'),
(14,'Archivée'),
(15,'Fermée');

/*Table structure for table `utilisateur` */

DROP TABLE IF EXISTS `utilisateur`;

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `FK utilisateur_role` (`id_role`),
  CONSTRAINT `FK utilisateur_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `utilisateur` */

insert  into `utilisateur`(`id_utilisateur`,`nom`,`prenom`,`login`,`password`,`id_role`,`adresse`) values 
(2,'Wallemacq','Bertrand','wallywall','projet',2,'rue des boulettes 4, 1000 Bruxelles'),
(3,'Admin','','istrateur','projet',1,'rue des boulettes 4, 1000 Bruxelles');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
