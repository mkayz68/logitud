# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.31)
# Database: logitud
# Generation Time: 2020-10-26 8:32:37 AM +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categorie
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorie`;

CREATE TABLE `categorie` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table epreuve
# ------------------------------------------------------------

DROP TABLE IF EXISTS `epreuve`;

CREATE TABLE `epreuve` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lieu` varchar(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table particpant
# ------------------------------------------------------------

DROP TABLE IF EXISTS `particpant`;

CREATE TABLE `particpant` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(11) NOT NULL DEFAULT '',
  `prenom` varchar(11) NOT NULL DEFAULT '',
  `dateDeNaiss` date NOT NULL,
  `mail` varchar(11) DEFAULT NULL,
  `photo` longblob,
  `profil_id` int(11) unsigned NOT NULL,
  `categorie_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profil_id` (`profil_id`),
  KEY `categorie_id` (`categorie_id`),
  CONSTRAINT `particpant_ibfk_1` FOREIGN KEY (`profil_id`) REFERENCES `particpant` (`id`),
  CONSTRAINT `particpant_ibfk_2` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table passage
# ------------------------------------------------------------

DROP TABLE IF EXISTS `passage`;

CREATE TABLE `passage` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `num_passage` int(11) DEFAULT NULL,
  `temps_passage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table profil
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profil`;

CREATE TABLE `profil` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
