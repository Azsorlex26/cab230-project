-- MySQL dump 10.13  Distrib 8.0.11, for Win64 (x86_64)
--
-- Host: localhost    Database: cab230_db
-- ------------------------------------------------------
-- Server version	8.0.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `hotspots`
--

DROP TABLE IF EXISTS `hotspots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `hotspots` (
  `name` varchar(48) COLLATE utf8_bin NOT NULL,
  `address` varchar(128) COLLATE utf8_bin NOT NULL,
  `suburb` varchar(25) COLLATE utf8_bin NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotspots`
--

LOCK TABLES `hotspots` WRITE;
/*!40000 ALTER TABLE `hotspots` DISABLE KEYS */;
INSERT INTO `hotspots` VALUES ('7th Brigade Park, Chermside','Delaware St','Chermside',-27.37893,153.04461),('Annerley Library Wifi','450 Ipswich Road','Annerley, 4103',-27.50942285,153.0333218),('Ashgrove Library Wifi','87 Amarina Avenue','Ashgrove, 4060',-27.44394629,152.9870981),('Banyo Library Wifi','284 St. Vincents Road','Banyo, 4014',-27.37396641,153.0783234),('Booker Place Park','Birkin Rd & Sugarwood St','Bellbowrie',-27.56353,152.89372),('Bracken Ridge Library Wifi','Corner Bracken and Barrett Street','Bracken Ridge, 4017',-27.31797261,153.0378735),('Brisbane Botanic Gardens','Mt Coot-tha Rd','Toowong',-27.47724,152.97599),('Brisbane Square Library Wifi','Brisbane Square, 266 George Street','Brisbane, 4000',-27.47091173,153.0224598),('Bulimba Library Wifi','Corner Riding Road & Oxford Street','Bulimba, 4171',-27.45203086,153.0628242),('Calamvale District Park','Formby & Ormskirk Sts','Calamvale',-27.62152,153.03665),('Carina Library Wifi','Corner Mayfield Road & Nyrang Street','Carina, 4152',-27.49169314,153.0912127),('Carindale Library Wifi','The Home and Leisure Centre, Corner Carindale Street  & Banchory Court, Westfield Carindale Shopping Centre','Carindale, 4152',-27.50475928,153.1003965),('Carindale Recreation Reserve','Cadogan and Bedivere Sts','Carindale',-27.497,153.11105),('Chermside Library Wifi','375 Hamilton  Road','Chermside, 4032',-27.3856032,153.0349028),('City Botanic Gardens Wifi','Alice Street','Brisbane City',-27.47561,153.03005),('Coopers Plains Library Wifi','107 Orange Grove Road','Coopers Plains, 4108',-27.56510509,153.0403183),('Corinda Library Wifi','641 Oxley Road','Corinda, 4075',-27.53880237,152.9809091),('D.M. Henderson Park','Granadilla St','MacGregor',-27.57745,153.07603),('Einbunpin Lagoon','Brighton Rd','Sandgate',-27.31947,153.06822),('Everton Park Library Wifi','561 South Pine Road','Everton park, 4053',-27.4053336,152.9904205),('Fairfield Library Wifi','Fairfield Gardens Shopping Centre, 180 Fairfield Road','Fairfield, 4103',-27.50909038,153.0259709),('Forest Lake Parklands','Forest Lake Bld','Forest Lake',-27.6202,152.96625),('Garden City Library Wifi','Garden City Shopping Centre, Corner Logan and Kessels Road','Upper Mount Gravatt, 4122',-27.56244221,153.0809183),('Glindemann Park','Logan Rd','Holland Park West',-27.52552,153.06923),('Grange Library Wifi','79 Evelyn Street','Grange, 4051',-27.42531193,153.0174728),('Gregory Park','Baroona Rd','Paddington',-27.467,152.99981),('Guyatt Park','Sir Fred Schonell Dve','St Lucia',-27.49297,153.00187),('Hamilton Library Wifi','Corner Racecourt Road and Rossiter Parade','Hamilton, 4007',-27.43790137,153.0642227),('Hidden World Park','Roghan Rd','Fitzgibbon',-27.33971701,153.034981),('Holland Park Library Wifi','81 Seville Road','Holland Park, 4121',-27.52292286,153.0722921),('Inala Library Wifi','Inala Shopping centre, Corsair Ave','Inala, 4077',-27.59828574,152.9735217),('Indooroopilly Library Wifi','Indrooroopilly Shopping centre, Level 4, 322 Moggill Road','Indooroopilly, 4068',-27.49764287,152.9736471),('Kalinga Park','Kalinga St','Clayfield',-27.40666,153.05217),('Kenmore Library Wifi','Kenmore Village Shopping Centre, Brookfield Road','Kenmore, 4069',-27.50592852,152.9386437),('King Edward Park (Jacob\'s Ladder)','Turbot St and Wickham Tce','Brisbane',-27.46589,153.02406),('King George Square','Ann & Adelaide Sts','Brisbane',-27.46843,153.02422),('Mitchelton Library Wifi','37 Helipolis Parada','Mitchelton, 4053',-27.41704165,152.9783402),('Mt Coot-tha Botanic Gardens Library Wifi','Administration Building, Brisbane Botanic Gardens (Mt Coot-tha), Mt Coot-tha Road','Toowong, 4066',-27.47529908,152.9760412),('Mt Gravatt Library Wifi','8 Creek Road','Mt Gravatt, 4122',-27.53855482,153.0802628),('Mt Ommaney Library Wifi','Mt Ommaney Shopping Centre, 171 Dandenong Road','Mt Ommaney, 4074',-27.54824198,152.9378099),('New Farm Library Wifi','135 Sydney Street','New Farm, 4005',-27.46736574,153.0495841),('New Farm Park Wifi','Brunswick Street','New Farm',-27.47046,153.05223),('Nundah Library Wifi','1 Bage Street','Nundah, 4012',-27.40125908,153.0583751),('Oriel Park','Cnr of Alexandra & Lancaster Rds','Ascot',-27.42928,153.05768),('Orleigh Park','Hill End Tce','West End',-27.48995,153.00326),('Post Office Square','Queen & Adelaide Sts','Brisbane',-27.46735,153.02735),('Rocks Riverside Park','Counihan Rd','Seventeen Mile Rocks',-27.54153,152.95913),('Sandgate Library Wifi','Seymour Street','Sandgate, 4017',-27.32060523,153.0704927),('Stones Corner Library Wifi','280 Logan Road','Stones Corner, 4120',-27.49803575,153.043655),('Sunnybank Hills Library Wifi','Sunnybank Hills Shopping Centre, Corner Compton and Calam Roads','Sunnybank Hills, 4109',-27.6109253,153.0550706),('Teralba Park','Pullen & Osborne Rds','Everton Park',-27.40286,152.98059),('Toowong Library Wifi','Toowon Village Shopping Centre, Sherwood Road','Toowong, 4066',-27.48505116,152.9925091),('West End Library Wifi','178 - 180 Boundary Street','West End, 4101',-27.48245078,153.0120763),('Wynnum Library Wifi','Wynnum Civic Centre, 66 Bay Terrace','Wynnum, 4178',-27.44244894,153.1731968),('Zillmere Library Wifi','Corner Jennings Street and Zillmere Road','Zillmere, 4034',-27.36014232,153.0407898);
/*!40000 ALTER TABLE `hotspots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `reviews` (
  `reviewID` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8_bin NOT NULL,
  `description` varchar(1024) COLLATE utf8_bin NOT NULL,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `name` varchar(48) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`reviewID`),
  KEY `username` (`username`),
  KEY `name` (`name`),
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`name`) REFERENCES `hotspots` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `salt` varchar(70) COLLATE utf8_bin NOT NULL,
  `password` varchar(70) COLLATE utf8_bin NOT NULL,
  `fName` varchar(100) COLLATE utf8_bin NOT NULL,
  `lName` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `state` varchar(18) COLLATE utf8_bin NOT NULL,
  `postcode` int(4) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-28 12:15:56
