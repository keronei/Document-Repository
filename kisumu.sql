-- MySQL dump 10.13  Distrib 5.7.19, for macos10.12 (x86_64)
--
-- Host: localhost    Database: kisumu
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activities` (
  `Act_id` int(11) NOT NULL AUTO_INCREMENT,
  `Activity` varchar(500) NOT NULL,
  `c_id` int(11) NOT NULL,
  `Period` int(11) NOT NULL,
  PRIMARY KEY (`Act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
INSERT INTO `activities` VALUES (12,'1.1.1 Development of Referral Network SOP capturing   communication protocol, appropriate tracking logs etc',6,1),(13,'1.1.2 Dissemination of the SOP',6,2),(14,'1.1.3 Conducting follow up for any referral',6,3),(15,'1.1.4 Documentation to capture the Referral system done',6,4),(16,'1.3.1 Conduct quarterly support supervision to facilities',7,0),(17,'1.3.2 Feedback and recommendations',7,0),(18,'1.4.1 Conducting Medical Camps on Curative,  Preventive and Promotive',8,0),(19,'1.8.1 Offering Health Education on prevention of communicable diseases',9,0),(20,'1.8.2 Referrals to the facilities',9,0),(21,'1.8.3 Follow up on treatment',9,0),(22,'1.8.4 Defaulter tracing',9,0),(23,'1.8.5 Conducting dialogue days',9,0),(24,'2.3.1 Quantification of required items',10,1),(25,'2.3.2 Developing procurement plan',10,2),(26,'2.3.3 Prioritize the procurement plan as per the resource allocation',10,3),(27,'2.3.4 Implementation of procurement plans',10,4),(28,'2.3.1 Develop a maintenance plan',11,1),(29,'2.3.2 Implementation of the maintenance plan ',11,234),(30,'2.3.3 Documentation with job cards',11,234),(31,'3.7.1 Conduct training needs assessment',12,1),(32,'3.7.2 Develop training plan as per need',12,1),(33,'3.7.3 Implementation of the training plan',12,234),(34,'4.1.1 Availing standardize tools and registers',13,0),(35,'4.1.2 Sensitization of Health care workers and CHVs on data collection tools',13,1),(36,'4.1.3Collection of data and timely reporting to the next level',13,0),(37,'4.1.4Analysis of the collected data',13,0),(38,'4.1.5 Feedback',13,0),(46,' 6.2.1 Mapping the stakeholders',18,1),(47,'7.1.1 Holding stakeholders meeting',19,1),(48,'7.2.1 Developing areas of collaboration and activities jointly',19,1),(50,'7.2.2 Developing work plans',20,1),(51,'7.2.3Â  Implementation of the work plans',20,2),(52,'7.2.4Â  Review meetings to monitor and evaluate the progress',20,34),(53,'5.1.1 Developing Health plan inventory',14,1),(54,'5.2.1 Quantification of Health needs in line with Communicable diseases',15,12),(55,'5.3.1 Prioritize according to the allocated budget',16,0),(56,'5.4.1 Develop a procurement plan',17,0),(57,'5.4.2 Procurement of the health products',17,0),(58,'5.4.3 Receive and store the procured  products appropriately',17,0),(59,'5.4.4 Maintain the inventory records appropriately',17,0),(65,'Development of Referral Network SOP capturing communication protocol, appropriate tracking logs etc',21,1),(66,'Dissemination of the SOP',21,2),(67,' Conducting follow up for any referral',21,34),(68,' Documentation to capture the Referral system done',21,34);
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `challenges`
--

DROP TABLE IF EXISTS `challenges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `challenges` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Challenge` varchar(300) NOT NULL,
  `Ha_id` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `challenges`
--

LOCK TABLES `challenges` WRITE;
/*!40000 ALTER TABLE `challenges` DISABLE KEYS */;
INSERT INTO `challenges` VALUES (6,'1.1 Support provision of referral services from lower levels',4),(7,'1.3 Supportive supervision to lower units',4),(8,'1.4 Facilitate outreach services',4),(9,'1.8 Establish Community Units where needed',4),(10,'2.3 Procurement / purchase of required infrastructure in line with norms',4),(11,'2.3 Routine maintenance of existing functional infrastructure',4),(12,'3.7 Training of Health Workers',4),(13,'4.1 Collate information on health actions at this level of care',4),(14,'5.1 Health Products inventory development and management ',4),(15,'5.2 Warehousing / storage of health products',4),(16,'5.3 Develop annual, and medium term procurement plan for health products',4),(17,'5.4 Procurement / purchase of required health products',4),(18,'6.2 Engage with health actors to facilitate implementation of selected activities',4),(19,'7.1 Carry out quarterly stakeholder meetings with all health and health related actors ',4),(20,'7.2 Engage with health related sectors to ensure appropriate prioritization of activities affecting health',4),(21,'1.1 Support provision of referral services from lower levels',5);
/*!40000 ALTER TABLE `challenges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `boss_pic_path` varchar(200) NOT NULL,
  `headName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Medical labaratory','This department deals with All labaratory activities in Kisumu County, under the county Ministry of Health. The following are the major tasks: <br> 1. Collecting Information on labaratories in the county. <br> 2. Schedule and deliver lab equipments.<br>  In overal, the department will undertake all tasks that appartains Medical labs','profile','Lincoln Odhiambo'),(2,'Disease surveillance','Tracking of new diagnosis and curbing existing diseases for better health','profile','Alex Muchiri'),(3,'Human Reasource for health','HR overseeing health departments','profile','Felix Mwangangi'),(4,'HMIS','Health management Information Systems operating under Ministry of health in Kisumu county','profile','Felistus Ochieng'),(5,'Nutrition','Healthy foods and recommended diets for individuals','profile','Mercy Onsando'),(6,'Reproductive Health','Suited for assistance and stats in reproduction','profile','Melvin Barrack'),(7,'Health Promotion','Campaign on basic health living and such','profile','Klein Mativo'),(8,'QI & OT','Quality Improvement and occupational theraphy','profile',NULL),(9,'Community Health Services','Handles services offered to the general community','profile',NULL),(10,'WASH','Water and sanitation department','profile',NULL),(11,'Public Health','Health Admn. & Financing','profile',NULL),(12,'Health Admn. & Financing','Administrative on health sector','profile',NULL),(13,'Phamarcy','Handles drugs distribution','profile',NULL),(14,'Medical Engineering','Deals with new discoveries and implementation in the health sector','profile',NULL),(15,'Nursing','Nurses','profile',NULL);
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `health_area`
--

DROP TABLE IF EXISTS `health_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `health_area` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(1000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `health_area`
--

LOCK TABLES `health_area` WRITE;
/*!40000 ALTER TABLE `health_area` DISABLE KEYS */;
INSERT INTO `health_area` VALUES (4,'Eliminate Communicable conditions'),(5,'Halt, and reverse increasing burden of non communicable conditions'),(6,'Reduce the burden of Violence and Injuries'),(7,'Provide essential Medical services'),(8,'Minimize exposure to health Risk factors'),(9,'Strengthen collaboration with Health Related Sectors'),(10,'eliminate communicable diseases'),(11,'CBC');
/*!40000 ALTER TABLE `health_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `progress`
--

DROP TABLE IF EXISTS `progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `progress` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Act_id` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Datemodified` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `progress`
--

LOCK TABLES `progress` WRITE;
/*!40000 ALTER TABLE `progress` DISABLE KEYS */;
INSERT INTO `progress` VALUES (130,12,2,'2018-05-28'),(129,59,0,'2018-05-18'),(128,58,0,'2018-05-18'),(127,57,0,'2018-05-18'),(126,56,0,'2018-05-18'),(125,55,0,'2018-05-18'),(124,54,0,'2018-05-18'),(123,53,0,'2018-05-18'),(122,52,0,'2018-05-18'),(121,51,0,'2018-05-18'),(120,50,0,'2018-05-18'),(119,49,0,'2018-05-18'),(118,48,0,'2018-05-18'),(117,47,0,'2018-05-18'),(116,46,0,'2018-05-18'),(115,45,0,'2018-05-18'),(114,44,0,'2018-05-18'),(113,43,0,'2018-05-18'),(112,42,0,'2018-05-18'),(111,41,0,'2018-05-18'),(110,40,0,'2018-05-18'),(109,39,0,'2018-05-18'),(108,38,0,'2018-05-18'),(107,37,0,'2018-05-18'),(106,36,0,'2018-05-18'),(105,35,0,'2018-05-18'),(104,34,0,'2018-05-18'),(103,33,0,'2018-05-18'),(102,32,0,'2018-05-18'),(101,31,0,'2018-05-18'),(100,30,0,'2018-05-18'),(99,29,0,'2018-05-18'),(98,28,0,'2018-05-18'),(97,27,0,'2018-05-18'),(96,26,0,'2018-05-18'),(95,25,0,'2018-05-18'),(94,24,0,'2018-05-18'),(93,23,0,'2018-05-18'),(92,22,0,'2018-05-18'),(91,21,0,'2018-05-18'),(90,20,0,'2018-05-18'),(89,19,0,'2018-05-18'),(88,18,0,'2018-05-18'),(87,17,0,'2018-05-18'),(86,16,0,'2018-05-18'),(85,15,0,'2018-05-18'),(84,14,0,'2018-05-18'),(83,13,1,'2018-06-13'),(82,12,2,'2018-05-28'),(78,65,0,'2018-05-18'),(79,66,0,'2018-05-18'),(80,67,2,'2018-05-18'),(81,68,0,'2018-05-18'),(131,13,1,'2018-06-13'),(132,14,0,'2018-05-18'),(133,15,0,'2018-05-18'),(134,16,0,'2018-05-18'),(135,17,0,'2018-05-18'),(136,18,0,'2018-05-18'),(137,19,0,'2018-05-18'),(138,20,0,'2018-05-18'),(139,21,0,'2018-05-18'),(140,22,0,'2018-05-18'),(141,23,0,'2018-05-18'),(142,24,0,'2018-05-18'),(143,25,0,'2018-05-18'),(144,26,0,'2018-05-18'),(145,27,0,'2018-05-18'),(146,28,0,'2018-05-18'),(147,29,0,'2018-05-18'),(148,30,0,'2018-05-18'),(149,31,0,'2018-05-18'),(150,32,0,'2018-05-18'),(151,33,0,'2018-05-18'),(152,34,0,'2018-05-18'),(153,35,0,'2018-05-18'),(154,36,0,'2018-05-18'),(155,37,0,'2018-05-18'),(156,38,0,'2018-05-18'),(157,39,0,'2018-05-18'),(158,40,0,'2018-05-18'),(159,41,0,'2018-05-18'),(160,42,0,'2018-05-18'),(161,43,0,'2018-05-18'),(162,44,0,'2018-05-18'),(163,45,0,'2018-05-18'),(164,46,0,'2018-05-18'),(165,47,0,'2018-05-18'),(166,48,0,'2018-05-18'),(167,49,0,'2018-05-18'),(168,50,0,'2018-05-18'),(169,51,0,'2018-05-18'),(170,52,0,'2018-05-18'),(171,53,0,'2018-05-18'),(172,54,0,'2018-05-18'),(173,55,0,'2018-05-18'),(174,56,0,'2018-05-18'),(175,57,0,'2018-05-18'),(176,58,0,'2018-05-18'),(177,59,0,'2018-05-18');
/*!40000 ALTER TABLE `progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uploads_`
--

DROP TABLE IF EXISTS `uploads_`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uploads_` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `path` varchar(500) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `date_added` date NOT NULL,
  `size` int(5) NOT NULL,
  `kind` varchar(10) NOT NULL,
  `validity` date NOT NULL,
  `department_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uploads_`
--

LOCK TABLES `uploads_` WRITE;
/*!40000 ALTER TABLE `uploads_` DISABLE KEYS */;
INSERT INTO `uploads_` VALUES (58,'C_programming_assignment.docx.docx','C programming assignment.docx','2018-07-09',112478,'docx','2018-06-16',1);
/*!40000 ALTER TABLE `uploads_` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
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

-- Dump completed on 2018-07-26 16:17:40
