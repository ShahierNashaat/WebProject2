-- MySQL dump 10.16  Distrib 10.1.28-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: ns
-- ------------------------------------------------------
-- Server version	10.1.28-MariaDB

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
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `City` varchar(300) DEFAULT NULL,
  `Name` varchar(300) NOT NULL,
  `Address` text NOT NULL,
  `Phone` bigint(20) DEFAULT NULL,
  `Type` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,'Asyut','Asyut General Hospital','Al-Majzoub Square, Al-Hamra II, Assiut, Assiut',882333158,'Hospital'),(2,'Asyut','South Egypt Cancer Institute - Assiut University','ASSYOUT, Assyout? Ash Sheyakhah as Sabeah, Qesm Than Asyut, Assiut Governorate',1068647747,'Hospital'),(3,'Asyut','Cairo Restaurant','Youlio Farouk Sbekn 26, Al Hamraa Ath Thaneyah, Qesm Than Asyut, Assiut Governorate',882344041,'Restaurant'),(4,'Asyut','El Watania Palace Hotel, Assiut','El-Gomhoreya, Assiut Governorate',882287981,'Hotel'),(5,'Asyut','El Watania mall','El-Gomhoreya, Assiut Governorate',NULL,'Mall'),(6,'Cairo','Nasser General Hospital','Industrial Area, Shubra Al Kheimah, Awal Shubra Al Kheimah, Al Qalyubia Governorate',242201554,'Hospital'),(7,'Cairo','Pizza Hut restaurant','265 Shoubra St.? SHOUBRA? As Sahel, Cairo Governorate',1020563004,'Restaurant'),(8,'Cairo','Steigenberger Hotel El Tahrir Cairo','2 Kasr Al Nile Bridge, Ismailia, Qasr an Nile, Cairo Governorate',225750777,'Hotel'),(9,'Cairo','Shoubra General Hospital (Kitchener)','76 Off El Teraa El Baqeya St., At Teraa Al Boulaqeyah, Shobra, Cairo Governorate',222352325,'Hospital'),(10,'Cairo','Nile City Towers mall','Mnia Al Kmh - Cairo Rd, Boulaq Num.1, Boulaq, Cairo Governorate',NULL,'Mall'),(11,'Alexandria','Andalusia Hospitals ELShalalat','7 Mohammed Mohammed Motawae St, Bab Sharqi WA Wabour Al Meyah, Qesm Bab Sharqi, Alexandria Governorate',NULL,'Hospital'),(12,'Alexandria','Gamal Abd El Naser Hospital','Abou Quer, Al Ibrahimeyah Qebli WA Al Hadrah Bahri, Qesm Bab Sharqi, Alexandria Governorate',34281244,'Hospital'),(13,'Alexandria','Crave restaurant','Corniche Street, Alexandria, Al Azaritah WA Ash Shatebi, Qesm Bab Sharqi, Alexandria Governorate',35911553,'Restaurant'),(14,'Alexandria','Amoun Hotel','32 Al-Nasr, Greater Manshiyya, Qism El-Mansheya, Alexandria Governorate',34818239,'Hotel'),(15,'Alexandria','Designia mall','Alexandria Desert Rd, Qetaa at Tarik as Sahrawi, Qesm Al Amereyah, Alexandria Governorate',33681000,'Mall'),(16,'Luxor','Hospital Cleopatra in Luxor','Luxor City, Luxor, Luxor Governorate',1210010278,'Hospital'),(17,'Luxor','Luxor International Hospital','Television St.? Gazirat Al Awameyah, Luxor, Luxor Governorate',952277194,'Hospital'),(18,'Luxor','McDonald\'s Luxor','Mabad Al Oksor, Luxor City, Luxor, Luxor Governorate',952374913,'Restaurant'),(19,'Luxor','Nefertiti Hotel','Luxor City, Luxor, Luxor Governorate',952372386,'Hotel'),(20,'Luxor','Ata bazar Hassle free shop','In Front Of Temple, Luxor City, Luxor Governorate',1550888921,'Mall'),(21,'Aswan','Aswan Heart Centre, Magdi Yacoub Foundation','Aswan Governorate',972391100,'Hospital'),(22,'Aswan','Evangelical Mission Hospital','Kornish Al Nile, Sheyakhah Oula, Qism Aswan, Aswan Governorate',972450166,'Hospital'),(23,'Aswan','Seti Abu Simbel Restaurant','Abou Simbel Touristic Village? ABOU SIMBEL? Qism Aswan, Aswan Governorate',973400087,'Restaurant'),(24,'Aswan','Marhaba Aswan Hotel','Corniche El Nil St.? DOWNTOWN? Qism Aswan, Aswan Governorate',972440102,'Hotel'),(25,'Aswan','Aswan Plaza Mall','Kornish Al Nile, Abu AR Rish Qebli, Qism Aswan, Aswan Governorate',NULL,'Mall'),(26,'Assiut','lkdsflk','8 scxvcx',NULL,'Hospital'),(27,'dfsd','cxdfsd','ewrer',12233,'Hospital'),(28,'sdfdsf','sdfsf','ewrewr',NULL,'Hospital');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) COLLATE utf8_bin NOT NULL,
  `LastName` varchar(100) COLLATE utf8_bin NOT NULL,
  `Email` varchar(200) COLLATE utf8_bin NOT NULL,
  `Password` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'shahier','nashaat','shahiern@yahoo.com','123'),(4,'shahier','nashaat','shahier@yahoo.com','1234'),(5,'shahier','nashaat','shahiern@yhoo.com','555');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-18 23:27:39
