-- MySQL dump 10.13  Distrib 5.6.35, for Linux (x86_64)
--
-- Host: localhost    Database: eminkose_hayri
-- ------------------------------------------------------
-- Server version	5.6.35

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
-- Table structure for table `kelime`
--

DROP TABLE IF EXISTS `kelime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min` int(50) NOT NULL,
  `kelime` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `karsilik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelime`
--

LOCK TABLES `kelime` WRITE;
/*!40000 ALTER TABLE `kelime` DISABLE KEYS */;
INSERT INTO `kelime` (`id`, `min`, `kelime`, `karsilik`) VALUES (3,1,'merhaba','{ayni}'),(8,1,'iyiyim','{allah iyilik versin}'),(9,1,'K&ouml;t&uuml;y&uuml;m','{d&uuml;zelir inÅŸallah}'),(10,1,'selam','{ayni}'),(11,2,'selam&uuml;n aleyk&uuml;m','{ayni}'),(12,2,'Ä°yi sabahlar','{ayni}'),(13,2,'iyi g&uuml;nler','{ayni}'),(14,1,'nasÄ±lsÄ±n','{iyiyim sen?}'),(15,1,'iyi','{allah iyilik versin}');
/*!40000 ALTER TABLE `kelime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uyeler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kadi` varchar(50) NOT NULL DEFAULT '',
  `ksifi` varchar(100) NOT NULL DEFAULT '',
  `ytki` varchar(20) NOT NULL DEFAULT '',
  `adi` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eposta` varchar(255) DEFAULT NULL,
  `resim` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uyeler`
--

LOCK TABLES `uyeler` WRITE;
/*!40000 ALTER TABLE `uyeler` DISABLE KEYS */;
INSERT INTO `uyeler` (`id`, `kadi`, `ksifi`, `ytki`, `adi`, `eposta`, `resim`) VALUES (1,'pcbeyin','8fa33c55bab9eefe351c993c0a4f69060a298c58','1','Emin Köse','pinoki-tr@hotmail.com','assets/img/ek.jpg');
/*!40000 ALTER TABLE `uyeler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'eminkose_hayri'
--

--
-- Dumping routines for database 'eminkose_hayri'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-02 12:31:13
