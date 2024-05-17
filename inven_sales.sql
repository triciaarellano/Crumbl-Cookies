-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: inven_sales
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `logs_table`
--

DROP TABLE IF EXISTS `logs_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logs_table` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `action` varchar(45) DEFAULT NULL,
  `DateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs_table`
--

LOCK TABLES `logs_table` WRITE;
/*!40000 ALTER TABLE `logs_table` DISABLE KEYS */;
INSERT INTO `logs_table` VALUES (1,77,'Logged IN','2024-05-13 00:00:00'),(2,91,'Logged IN','2024-05-13 00:00:00'),(3,91,'Logged IN','2024-05-13 00:00:00'),(4,90,'Logged IN','2024-05-13 00:00:00'),(5,91,'Logged IN','2024-05-13 00:00:00'),(6,77,'Logged IN','2024-05-13 14:18:09'),(7,91,'Logged IN','2024-05-13 14:24:52'),(8,77,'Logged IN','2024-05-13 14:27:19'),(9,77,'Logged IN','2024-05-13 14:29:49'),(10,90,'Logged IN','2024-05-13 14:36:56'),(11,77,'Logged IN','2024-05-13 14:39:49'),(12,90,'Logged IN','2024-05-13 14:45:05'),(13,90,'Logged IN','2024-05-13 15:01:02'),(14,77,'Logged IN','2024-05-13 16:40:51'),(15,90,'Logged IN','2024-05-13 16:42:15'),(16,77,'Logged IN','2024-05-13 18:16:56'),(17,90,'Logged IN','2024-05-13 18:17:06'),(18,84,'Logged IN','2024-05-13 18:23:15'),(19,77,'Logged IN','2024-05-13 18:52:38'),(20,91,'Logged IN','2024-05-13 22:31:03'),(21,77,'Logged IN','2024-05-13 22:36:16'),(22,90,'Logged IN','2024-05-13 22:40:20'),(23,77,'Logged IN','2024-05-13 22:41:36'),(24,91,'Logged IN','2024-05-17 13:24:12'),(25,91,'Logged OUT','2024-05-17 13:24:18'),(26,77,'Logged IN','2024-05-17 13:24:24'),(27,77,'Logged OUT','2024-05-17 13:24:42'),(28,91,'Logged IN','2024-05-17 13:24:52'),(29,91,'Logged OUT','2024-05-17 13:25:03'),(30,91,'Logged IN','2024-05-17 13:34:17'),(31,91,'Logged OUT','2024-05-17 13:34:32'),(32,90,'Logged IN','2024-05-17 17:15:43'),(33,92,'Logged IN','2024-05-17 18:10:56'),(34,92,'Logged OUT','2024-05-17 18:11:00'),(35,93,'Logged IN','2024-05-17 18:42:27'),(36,93,'Logged OUT','2024-05-17 18:42:34'),(37,94,'Logged IN','2024-05-17 18:45:34'),(38,94,'Logged OUT','2024-05-17 18:45:39'),(39,90,'Logged IN','2024-05-17 19:16:46'),(40,90,'Logged OUT','2024-05-17 19:16:58'),(41,76,'Logged IN','2024-05-17 19:26:02'),(42,76,'Logged IN','2024-05-17 19:26:29'),(43,76,'Logged IN','2024-05-17 19:26:50'),(44,76,'Logged IN','2024-05-17 19:27:03'),(45,76,'Logged IN','2024-05-17 19:27:12'),(46,76,'Logged OUT','2024-05-17 19:27:15'),(47,96,'Logged IN','2024-05-17 22:35:02'),(48,96,'Logged OUT','2024-05-17 22:35:28'),(49,96,'Logged IN','2024-05-17 22:44:50'),(50,96,'Logged OUT','2024-05-17 22:44:57'),(51,91,'Logged IN','2024-05-17 23:09:03'),(52,91,'Logged OUT','2024-05-17 23:09:05'),(53,90,'Logged IN','2024-05-17 23:10:34'),(54,90,'Logged OUT','2024-05-17 23:10:36'),(55,90,'Logged IN','2024-05-17 23:13:41'),(56,90,'Logged OUT','2024-05-17 23:13:42'),(57,91,'Logged IN','2024-05-17 23:13:58'),(58,91,'Logged OUT','2024-05-17 23:14:00'),(59,90,'Logged IN','2024-05-17 23:14:44'),(60,90,'Logged OUT','2024-05-17 23:14:45'),(61,90,'Logged IN','2024-05-17 23:18:32'),(62,90,'Logged OUT','2024-05-17 23:18:35'),(63,77,'Logged IN','2024-05-17 23:36:37'),(64,77,'Logged OUT','2024-05-17 23:36:39'),(65,93,'Logged IN','2024-05-17 23:36:54'),(66,93,'Logged OUT','2024-05-17 23:37:02'),(67,93,'Logged IN','2024-05-17 23:37:12'),(68,93,'Logged OUT','2024-05-17 23:44:22'),(69,97,'Logged IN','2024-05-17 23:48:16'),(70,97,'Logged OUT','2024-05-18 00:22:11'),(71,90,'Logged IN','2024-05-18 00:30:07');
/*!40000 ALTER TABLE `logs_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_table`
--

DROP TABLE IF EXISTS `product_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_table` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) DEFAULT NULL,
  `description` varchar(70) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `quantity_available` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_table`
--

LOCK TABLES `product_table` WRITE;
/*!40000 ALTER TABLE `product_table` DISABLE KEYS */;
INSERT INTO `product_table` VALUES (0,'Nutella','Chocolatey',120,11),(1,'Churro','Masarap',120,7),(2,'Sea Salt','Maalat',100,15),(3,'Matcha','Damo',100,12),(4,'Double Chocolate','Matamis',150,4),(5,'Chocolate Chip','Sakto lang',120,5),(6,'Rainbow Sprinkles','Happy lang',150,8),(7,'Almonds','Tigas',120,12);
/*!40000 ALTER TABLE `product_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales_table`
--

DROP TABLE IF EXISTS `sales_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sales_table` (
  `sales_id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `payment_method` varchar(45) DEFAULT NULL,
  `sales_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sales_id`),
  KEY `transaction_id` (`transaction_id`),
  CONSTRAINT `transaction_id` FOREIGN KEY (`transaction_id`) REFERENCES `transaction_table` (`transaction_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_table`
--

LOCK TABLES `sales_table` WRITE;
/*!40000 ALTER TABLE `sales_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `sales_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction_table`
--

DROP TABLE IF EXISTS `transaction_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaction_table` (
  `transaction_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity_sold` int(11) DEFAULT NULL,
  `transaction_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product_table` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction_table`
--

LOCK TABLES `transaction_table` WRITE;
/*!40000 ALTER TABLE `transaction_table` DISABLE KEYS */;
INSERT INTO `transaction_table` VALUES (1,1,2,'05-09-2024'),(2,1,4,'05-09-2024'),(3,2,5,'05-09-2024'),(4,3,3,'05-10-2024'),(5,3,1,'05-10-2024'),(6,4,8,'05-10-2024'),(7,5,5,'05-10-2024'),(8,6,3,'05-11-2024'),(9,1,2,'05-11-2024'),(10,5,1,'05-12-2024');
/*!40000 ALTER TABLE `transaction_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(70) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_table`
--

LOCK TABLES `user_table` WRITE;
/*!40000 ALTER TABLE `user_table` DISABLE KEYS */;
INSERT INTO `user_table` VALUES (17,'sofia','Admin','churro','hala','sofia@gmail.com',NULL,'active'),(18,'dawn','admin','don','dun','dawns@gmail.com',NULL,'active'),(19,'cass','Admin','rah','heho','cass@gmail.com',NULL,'active'),(30,'Patricia Arellano','Admin','chunky','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',937994,'active'),(34,'triciacake','Admin','uhm','5d41402abc4b2a76b9719d911017c592','patriciabianca2424@gmail.com',261383,'active'),(49,'maria filipinas','Admin','mcflurry','529ca8050a00180790cf88b63468826a','patriciabianca2424@gmail.com',756333,'active'),(51,'vince','Admin','mcflurry','81dc9bdb52d04dc20036dbd8313ed055','waltervincentdeasis@gmail.com',855164,'active'),(53,'Bianca ','Admin','bianca','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',690763,'active'),(61,'Bianca','Admin','bianca','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',16348,'active'),(62,'Bianca','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',9500,'active'),(63,'Bianca','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',982239,'active'),(64,'Bianca','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',571565,'active'),(65,'Bianca','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',879873,'active'),(66,'Bianca','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',714680,'active'),(67,'hi','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',486982,'active'),(69,'Patricia Arellano','Admin','bianca','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',797394,'active'),(70,'luminor','Admin','lumi','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',711876,'active'),(71,'Bianca','Admin','isha','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',596854,'active'),(72,'Patricia Bianca','Admin','isha','202cb962ac59075b964b07152d234b70','patriciabianca.arellano.cics@ust.edu.ph',983183,'active'),(73,'maria filipinas','Admin','pat','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',535213,'active'),(74,'fili','Admin','fili','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',161458,'active'),(75,'swan','Admin','swan','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',796811,'active'),(76,'fin','Admin','mcflurry','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',286265,'active'),(77,'hopeless','Admin','hope','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',238332,'active'),(78,'runaway','Admin','runaway','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',253406,'active'),(79,'fight','Admin','fight','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',625123,'active'),(80,'Bianca','Admin','bianca','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',511365,'active'),(81,'you','Admin','you','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',682374,'active'),(82,'love','Admin','love','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',335002,'active'),(84,'forever','Admin','forever','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',127981,'active'),(85,'Bianca','Admin','pagod','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',337126,'active'),(86,'Patricia Arellano','Admin','aa','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',11848,'active'),(89,'isha','Admin','ishacakes','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',793162,'active'),(90,'Twixchuya','Admin','twix','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',174597,'active'),(91,'arellano','Admin','new','402acb1c3e3f37da6e1bb6cacadc315d','patriciabianca2424@gmail.com',709531,'active'),(92,'Patricia Bianca Arellano','Employee','twish','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',686923,'active'),(93,'Tricia Arellano','Employee','trish','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',990054,'active'),(94,'walter vincent','Employee','wakki','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',27259,'active'),(95,'bianca arellano','Employee','isha','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',221107,'active'),(96,'marife arellano','Employee','marife','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',556655,'active'),(97,'maria filipinas','Employee','maria','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',100140,'active');
/*!40000 ALTER TABLE `user_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-18  1:10:06
