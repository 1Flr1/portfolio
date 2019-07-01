-- MySQL dump 10.13  Distrib 5.7.23, for osx10.9 (x86_64)
--
-- Host: localhost    Database: portfolio
-- ------------------------------------------------------
-- Server version	5.7.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `competences`
--

DROP TABLE IF EXISTS `competences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `competences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `niveau` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competences`
--

LOCK TABLES `competences` WRITE;
/*!40000 ALTER TABLE `competences` DISABLE KEYS */;
INSERT INTO `competences` VALUES (1,'Techno Web',4),(2,'Langage C',3),(3,'Python',3),(4,'Ergonomie',2);
/*!40000 ALTER TABLE `competences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projets`
--

DROP TABLE IF EXISTS `projets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projets`
--

LOCK TABLES `projets` WRITE;
/*!40000 ALTER TABLE `projets` DISABLE KEYS */;
INSERT INTO `projets` VALUES (1,'projet1','logo/logo1.jpg','Description Projet 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris elit augue, lobortis ac dictum non, venenatis vitae odio. Maecenas viverra ipsum vitae ex faucibus bibendum. Integer vestibulum semper bibendum. Duis condimentum mollis augue, finibus lacinia turpis lacinia at. Maecenas id lacinia lacus. Praesent urna felis, maximus eu dictum sed, malesuada nec metus. Sed dictum felis velit, in mollis nibh auctor nec. Aenean lobortis arcu a est feugiat, vel scelerisque ipsum pulvinar. '),(2,'projet2','logo/logo2.jpg','Description Projet 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris elit augue, lobortis ac dictum non, venenatis vitae odio. Maecenas viverra ipsum vitae ex faucibus bibendum. Integer vestibulum semper bibendum. Duis condimentum mollis augue, finibus lacinia turpis lacinia at. Maecenas id lacinia lacus. Praesent urna felis, maximus eu dictum sed, malesuada nec metus. Sed dictum felis velit, in mollis nibh auctor nec. Aenean lobortis arcu a est feugiat, vel scelerisque ipsum pulvinar. '),(3,'projet3','logo/logo3.jpg','Description Projet 3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris elit augue, lobortis ac dictum non, venenatis vitae odio. Maecenas viverra ipsum vitae ex faucibus bibendum. Integer vestibulum semper bibendum. Duis condimentum mollis augue, finibus lacinia turpis lacinia at. Maecenas id lacinia lacus. Praesent urna felis, maximus eu dictum sed, malesuada nec metus. Sed dictum felis velit, in mollis nibh auctor nec. Aenean lobortis arcu a est feugiat, vel scelerisque ipsum pulvinar. ');
/*!40000 ALTER TABLE `projets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-01 11:32:09
