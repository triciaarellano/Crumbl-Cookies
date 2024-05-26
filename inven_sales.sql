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
-- Temporary view structure for view `join_logs_user`
--

DROP TABLE IF EXISTS `join_logs_user`;
/*!50001 DROP VIEW IF EXISTS `join_logs_user`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `join_logs_user` AS SELECT 
 1 AS `log_id`,
 1 AS `role`,
 1 AS `username`,
 1 AS `action`,
 1 AS `DateTime`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `join_sales_table`
--

DROP TABLE IF EXISTS `join_sales_table`;
/*!50001 DROP VIEW IF EXISTS `join_sales_table`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `join_sales_table` AS SELECT 
 1 AS `sales_id`,
 1 AS `product_id`,
 1 AS `quantity_sold`,
 1 AS `total_amount`,
 1 AS `payment_method`,
 1 AS `sales_date`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `join_transaction_table`
--

DROP TABLE IF EXISTS `join_transaction_table`;
/*!50001 DROP VIEW IF EXISTS `join_transaction_table`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `join_transaction_table` AS SELECT 
 1 AS `transaction_id`,
 1 AS `product_id`,
 1 AS `price`,
 1 AS `quantity_sold`,
 1 AS `transaction_date`*/;
SET character_set_client = @saved_cs_client;

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
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs_table`
--

LOCK TABLES `logs_table` WRITE;
/*!40000 ALTER TABLE `logs_table` DISABLE KEYS */;
INSERT INTO `logs_table` VALUES (1,77,'Logged IN','2024-05-13 00:00:00'),(2,91,'Logged IN','2024-05-13 00:00:00'),(3,91,'Logged IN','2024-05-13 00:00:00'),(4,90,'Logged IN','2024-05-13 00:00:00'),(5,91,'Logged IN','2024-05-13 00:00:00'),(6,77,'Logged IN','2024-05-13 14:18:09'),(7,91,'Logged IN','2024-05-13 14:24:52'),(8,77,'Logged IN','2024-05-13 14:27:19'),(9,77,'Logged IN','2024-05-13 14:29:49'),(10,90,'Logged IN','2024-05-13 14:36:56'),(11,77,'Logged IN','2024-05-13 14:39:49'),(12,90,'Logged IN','2024-05-13 14:45:05'),(13,90,'Logged IN','2024-05-13 15:01:02'),(14,77,'Logged IN','2024-05-13 16:40:51'),(15,90,'Logged IN','2024-05-13 16:42:15'),(16,77,'Logged IN','2024-05-13 18:16:56'),(17,90,'Logged IN','2024-05-13 18:17:06'),(18,84,'Logged IN','2024-05-13 18:23:15'),(19,77,'Logged IN','2024-05-13 18:52:38'),(20,91,'Logged IN','2024-05-13 22:31:03'),(21,77,'Logged IN','2024-05-13 22:36:16'),(22,90,'Logged IN','2024-05-13 22:40:20'),(23,77,'Logged IN','2024-05-13 22:41:36'),(24,91,'Logged IN','2024-05-17 13:24:12'),(25,91,'Logged OUT','2024-05-17 13:24:18'),(26,77,'Logged IN','2024-05-17 13:24:24'),(27,77,'Logged OUT','2024-05-17 13:24:42'),(28,91,'Logged IN','2024-05-17 13:24:52'),(29,91,'Logged OUT','2024-05-17 13:25:03'),(30,91,'Logged IN','2024-05-17 13:34:17'),(31,91,'Logged OUT','2024-05-17 13:34:32'),(32,90,'Logged IN','2024-05-17 17:15:43'),(33,92,'Logged IN','2024-05-17 18:10:56'),(34,92,'Logged OUT','2024-05-17 18:11:00'),(35,93,'Logged IN','2024-05-17 18:42:27'),(36,93,'Logged OUT','2024-05-17 18:42:34'),(37,94,'Logged IN','2024-05-17 18:45:34'),(38,94,'Logged OUT','2024-05-17 18:45:39'),(39,90,'Logged IN','2024-05-17 19:16:46'),(40,90,'Logged OUT','2024-05-17 19:16:58'),(41,76,'Logged IN','2024-05-17 19:26:02'),(42,76,'Logged IN','2024-05-17 19:26:29'),(43,76,'Logged IN','2024-05-17 19:26:50'),(44,76,'Logged IN','2024-05-17 19:27:03'),(45,76,'Logged IN','2024-05-17 19:27:12'),(46,76,'Logged OUT','2024-05-17 19:27:15'),(47,96,'Logged IN','2024-05-17 22:35:02'),(48,96,'Logged OUT','2024-05-17 22:35:28'),(49,96,'Logged IN','2024-05-17 22:44:50'),(50,96,'Logged OUT','2024-05-17 22:44:57'),(51,91,'Logged IN','2024-05-17 23:09:03'),(52,91,'Logged OUT','2024-05-17 23:09:05'),(53,90,'Logged IN','2024-05-17 23:10:34'),(54,90,'Logged OUT','2024-05-17 23:10:36'),(55,90,'Logged IN','2024-05-17 23:13:41'),(56,90,'Logged OUT','2024-05-17 23:13:42'),(57,91,'Logged IN','2024-05-17 23:13:58'),(58,91,'Logged OUT','2024-05-17 23:14:00'),(59,90,'Logged IN','2024-05-17 23:14:44'),(60,90,'Logged OUT','2024-05-17 23:14:45'),(61,90,'Logged IN','2024-05-17 23:18:32'),(62,90,'Logged OUT','2024-05-17 23:18:35'),(63,77,'Logged IN','2024-05-17 23:36:37'),(64,77,'Logged OUT','2024-05-17 23:36:39'),(65,93,'Logged IN','2024-05-17 23:36:54'),(66,93,'Logged OUT','2024-05-17 23:37:02'),(67,93,'Logged IN','2024-05-17 23:37:12'),(68,93,'Logged OUT','2024-05-17 23:44:22'),(69,97,'Logged IN','2024-05-17 23:48:16'),(70,97,'Logged OUT','2024-05-18 00:22:11'),(71,90,'Logged IN','2024-05-18 00:30:07'),(72,98,'Logged IN','2024-05-18 08:59:32'),(73,98,'Logged OUT','2024-05-18 21:06:40'),(74,90,'Logged IN','2024-05-18 21:06:48'),(75,90,'Logged OUT','2024-05-18 21:36:03'),(76,96,'Logged IN','2024-05-18 21:51:24'),(77,121,'Logged IN','2024-05-19 00:32:25'),(78,121,'Logged IN','2024-05-19 00:33:24'),(79,121,'Logged IN','2024-05-19 00:33:56'),(80,121,'Logged OUT','2024-05-19 00:34:09'),(81,121,'Logged IN','2024-05-19 01:21:00'),(82,108,'Logged IN','2024-05-19 14:01:59'),(83,108,'Logged OUT','2024-05-19 18:33:40'),(84,159,'Logged IN','2024-05-24 18:06:33'),(85,163,'Logged IN','2024-05-24 18:36:11'),(86,165,'Logged IN','2024-05-24 18:45:01'),(87,181,'Logged IN','2024-05-24 20:47:23'),(88,184,'Logged IN','2024-05-24 20:57:44'),(89,186,'Logged IN','2024-05-24 21:03:52'),(90,187,'Logged IN','2024-05-24 21:16:23'),(91,189,'Logged IN','2024-05-24 21:30:07'),(92,190,'Logged IN','2024-05-24 21:31:16'),(93,190,'Logged IN','2024-05-24 21:31:21'),(94,184,'Logged IN','2024-05-25 03:17:49'),(95,184,'Logged OUT','2024-05-25 03:20:01'),(96,184,'Logged IN','2024-05-25 03:20:10'),(97,184,'Logged OUT','2024-05-25 16:50:49'),(98,97,'Logged IN','2024-05-25 16:51:30'),(99,184,'Logged IN','2024-05-26 00:35:05');
/*!40000 ALTER TABLE `logs_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_table`
--

DROP TABLE IF EXISTS `product_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_table` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(45) DEFAULT NULL,
  `description` varchar(70) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `quantity_available` int(11) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL,
  `status` enum('Available','Unavailable') DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_table`
--

LOCK TABLES `product_table` WRITE;
/*!40000 ALTER TABLE `product_table` DISABLE KEYS */;
INSERT INTO `product_table` VALUES (25,'Choco Cookie','chocolate',120,8,'uploads/1.png','Available'),(27,'Pillow cookie','cravings',130,0,'uploads/2.png','Unavailable'),(28,'Cookie Dough','FAVEEEEE',150,0,'uploads/4.png','Unavailable'),(30,'Pink chookies','cute',120,43,'uploads/21.png','Available'),(31,'Pink M&Ms','prettyyy',120,43,'uploads/21.png','Available'),(32,'Rainbow Sparks','funfetti',140,0,'uploads/10.png','Unavailable'),(33,'Chocolate Sprinkles','chocolateee',100,23,'uploads/3.png',''),(34,'pillows','pillow',120,3,'uploads/2.png',''),(35,'pillows','pillow',120,7,'uploads/2.png',''),(36,'pillows','pillow',120,7,'uploads/2.png',''),(37,'Choco Crinkles','crinkleees',100,24,'uploads/22.png',NULL),(38,'Choco Crinkles','crinkles',102,22,'uploads/22.png',NULL),(39,'Lemon Cookie','asim',110,21,'uploads/12.png',NULL),(40,'Lemon Cookie','asim',110,21,'uploads/12.png',NULL),(41,'Blueberry Cookie','berriesss',165,12,'uploads/16.png',NULL),(42,'Blueberry Cookie','berriesss',165,12,'uploads/16.png',NULL),(43,'M&M Cookie','gumana ka',125,15,'uploads/15.png',NULL),(44,'asdads','asdasd',127,6,'uploads/crumbl-otp.jpg',NULL),(45,'almonds','sadada',130,12312,'uploads/9.png',NULL),(46,'234323','dfsf',0,213,'uploads/crumbl-bg.jpg',NULL),(47,'weqw','qwewqw',0,0,'uploads/3.png',NULL),(48,'qweqw','qewe',0,0,'uploads/10.png',NULL),(49,'qeqe','qeqew',0,0,'uploads/22.png',NULL),(50,'re','re',0,0,'uploads/25.png',NULL),(51,'asd','asd',0,0,'uploads/23.png',NULL),(52,'2312','1231',321,322,'uploads/22.png',NULL),(53,'534','45',345,435,'uploads/12.png',NULL),(54,'booberies','booo',232,123,'uploads/16.png',NULL),(55,'amonds','amooo',122,232,'uploads/9.png',NULL),(56,'mnms','mnm',102,0,'uploads/15.png','Unavailable'),(57,'icing cookie','ice',122,323,'uploads/14.png',NULL),(58,'Vanilla Cookie','banilalalla',134,32,'uploads/19.png',NULL),(59,'lime cookie','limeee',123,123,'uploads/23.png',NULL),(60,'brownieeeee','brown',232,232,'uploads/26.png','Available'),(61,'strawberry frosting','comkie',123,321,'uploads/27.png',NULL),(62,'leche','flan',123,32,'uploads/24.png',NULL);
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
INSERT INTO `sales_table` VALUES (1,2,NULL,'cash','05-25-2024');
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
INSERT INTO `transaction_table` VALUES (1,NULL,2,'05-09-2024'),(2,25,4,'05-25-2024');
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
  `status` enum('Active','Inactive') DEFAULT 'Inactive',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_table`
--

LOCK TABLES `user_table` WRITE;
/*!40000 ALTER TABLE `user_table` DISABLE KEYS */;
INSERT INTO `user_table` VALUES (51,'vince','Admin','mcflurry','81dc9bdb52d04dc20036dbd8313ed055','waltervincentdeasis@gmail.com',855164,'Active'),(53,'Patricia','Cashier','trixa','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',690763,'Active'),(61,'Tricia','Admin','bianca','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',16348,'Active'),(62,'Trish','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',9500,'Active'),(63,'Bianca','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',982239,'Active'),(64,'Bianca','Employee','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',571565,'Active'),(65,'Bianca','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',879873,'Active'),(66,'Bianca','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',714680,'Active'),(67,'hi','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',486982,'Active'),(69,'Patricia Arellano','Admin','bianca','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',797394,'Active'),(70,'luminor','Admin','lumi','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',711876,'Active'),(71,'Bianca','Admin','isha','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',596854,'Active'),(72,'Patricia Bianca','Admin','isha','202cb962ac59075b964b07152d234b70','patriciabianca.arellano.cics@ust.edu.ph',983183,'Active'),(73,'maria filipinas','Admin','pat','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',535213,'Active'),(74,'fili','Admin','fili','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',161458,'Active'),(75,'swan','Admin','swan','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',796811,'Active'),(76,'fin','Admin','mcflurry','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',286265,'Active'),(77,'hopeless','Admin','hope','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',238332,'Active'),(78,'runaway','Admin','runaway','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',253406,'Active'),(79,'fight','Admin','fight','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',625123,'Active'),(80,'Bianca','Admin','bianca','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',511365,'Active'),(81,'you','Admin','you','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',682374,'Active'),(82,'love','Admin','love','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',335002,'Active'),(84,'forever','Admin','forever','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',127981,'Active'),(85,'Bianca','Admin','pagod','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',337126,'Active'),(86,'Patricia Arellano','Admin','aa','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',11848,'Active'),(89,'isha','Admin','ishacakes','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',793162,'Active'),(90,'Twixchuya','Admin','twix','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',174597,'Active'),(91,'arellano','Admin','new','402acb1c3e3f37da6e1bb6cacadc315d','patriciabianca2424@gmail.com',709531,'Active'),(92,'Patricia Bianca Arellano','Employee','twish','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',686923,'Active'),(93,'Tricia Arellano','Employee','trish','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',990054,'Active'),(94,'walter vincent','Employee','wakki','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',27259,'Active'),(95,'bianca arellano','Employee','isha','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',221107,'Active'),(96,'marife arellano','Employee','marife','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',556655,'Active'),(97,'maria filipinas','Employee','maria','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',100140,'Active'),(98,'marife arellano','Employee','pinky','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',198189,'Active'),(99,'michiko','Employee','michiko','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(100,'michikaur','Employee','michi','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',731972,'Inactive'),(101,'wakki de asis','Employee','wak','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',777627,'Inactive'),(102,'wakki de asis','Employee','wak','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',278631,'Inactive'),(103,'wakki de asis','Employee','wak','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',867794,'Inactive'),(104,'tricia','Employee','trix','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',429322,'Inactive'),(105,'risha','Employee','risha','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',712244,'Inactive'),(106,'trix','Employee','trix','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',226719,'Inactive'),(107,'trix','Employee','trix','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',981190,'Inactive'),(108,'vince','Employee','vince','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',147133,'Inactive'),(109,'Bianca','Employee','bia','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',330868,'Inactive'),(110,'maria filipinas','Employee','mari','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',532081,'Inactive'),(111,'vince','Employee','bins','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',551161,'Inactive'),(112,'Patricia Arellano','Employee','rah','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',136733,'Inactive'),(113,'Bianca','Employee','bi','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',898130,'Inactive'),(114,'tricia bianca','Employee','ishabianca','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',684219,'Inactive'),(115,'Patricia Arellano','Employee','mcflurry','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',886985,'Inactive'),(116,'Bianca','Employee','esp','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',257808,'Inactive'),(117,'vince','Employee','bins','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',636678,'Inactive'),(118,'Patricia Arellano','Employee','arellano','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',267370,'Inactive'),(119,'Patricia Arellano','Employee','twix','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',701369,'Inactive'),(120,'wakki de asis','Employee','hope','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(121,'vince','Employee','walter','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(122,NULL,'','twix','$2y$10$mzV1UdvxsqjDIKPyekak2eogdfGBQJrd4IEID4',NULL,NULL,'Active'),(123,NULL,'','twix','$2y$10$Kwffoy8jB4tQSERPyuCvoOyzor0hXu0OvgqFoy',NULL,NULL,'Active'),(124,NULL,'','twix','$2y$10$VaQm.ML3PiFj7J.4.mRVPesMwo3ocJm6OFTDSV',NULL,NULL,'Active'),(125,NULL,'','twix','$2y$10$MeHyEQ4GMoPsTwnZ5MDREOqDsl1Oczilbqke0h',NULL,NULL,'Active'),(126,NULL,'admin','twix','$2y$10$szv0ay.hf7NhZ.iDn.YIRuaTQcxQbFlYJ8r4am',NULL,NULL,'Active'),(127,NULL,'admin','twix','$2y$10$jHY8cO7Alqdx0dpPiEZDA.b8uMiEmH51DNtVeF',NULL,NULL,'Active'),(128,NULL,'admin','twix','$2y$10$iWQOtGFNzeQeQ0dQZch8J.34IWHHvZ4lrx4UHg',NULL,NULL,'Active'),(129,NULL,'admin','twix','$2y$10$HxyIQc1o.lMPI2QOmJLfVunRLV7guoZLxIokAx',NULL,NULL,'Active'),(130,NULL,'admin','twix','$2y$10$PeOVF1S6oar4/4GOONObXOGWh6PJ8F38tJV1xG',NULL,NULL,'Active'),(131,NULL,'admin','twix','$2y$10$oIUXtxhZecPtLPYCKyxDmeptuArm3BC43VNzyI',NULL,NULL,'Active'),(132,NULL,'admin','twix','$2y$10$E4F/dNXeP7ua6/fDTnz2DOl1Wz1tiqnnlz565v',NULL,NULL,'Active'),(133,NULL,'admin','twix','$2y$10$FXUq6gd9iNDudkI4IljJceXqmaGbfgeSDgUXLz',NULL,NULL,'Active'),(134,NULL,'admin','twix','$2y$10$rxwKTGGfsREuwpcDO9eom.Kia.oxC8L2Ka97Y3',NULL,NULL,'Active'),(135,NULL,'admin','twix','$2y$10$AWmxjChqzI.BID1T.0yF2u9bLlboCSoOUDT5kZ',NULL,NULL,'Active'),(136,NULL,'admin','twix','$2y$10$IjlLuiUPwR36x2GfcRU2WemzTsEhVHrajsJYfo',NULL,NULL,'Active'),(137,NULL,'admin','hope','$2y$10$wNmy8MKRooAihJeSLoxTfe8UsquS9ilhLtdvgS',NULL,NULL,'Active'),(138,NULL,'admin','hope','$2y$10$lfwA3gi0b0I9YsXskdyiKOkNc3ViIRrKr.TD22',NULL,NULL,'Active'),(139,NULL,'employee','hello','$2y$10$WvVy3JWNvbOuGo7F.q8Uu.NmqbBSLIwSi4fLS6',NULL,NULL,'Active'),(140,NULL,'cashier','what','$2y$10$0V0QaHFNaplO3GwFdKqFaOk.JGjcorups6xYq/',NULL,NULL,'Active'),(141,NULL,'cashier','what','$2y$10$RFidCqLZJ8VXTRBtmyYcMeH9loMZwYHfkzHy9m',NULL,NULL,'Active'),(142,NULL,'cashier','what','$2y$10$VEem4wn4tIxyx7HHyFNvOevlnhrUwLoP9C2RE8',NULL,NULL,'Active'),(143,NULL,'','','$2y$10$XoA5hPDUeUDsTPfeOL7fQ.XvkxeXDMMvABDNNc',NULL,NULL,'Active'),(144,NULL,'','','$2y$10$DHdoPW3PBa85gAZRmn5x6OEaOTRt69W3aT4D95',NULL,NULL,'Active'),(145,NULL,'','','$2y$10$Jo6DIZL1m6GwmaHX40xk4.kd9jXlyxjueXTrO/',NULL,NULL,'Active'),(146,NULL,'','','$2y$10$Gbn4sQ00Q0aGL17/AGGPmeViliQgZSz5qwNAs5',NULL,NULL,'Active'),(147,NULL,'cashier','twix','$2y$10$w8oiNdreoNQazIeldJ3fA.TdNIj0vLpUFnODfw',NULL,NULL,'Active'),(148,'Arellano','Admin','twix','$2y$10$4WY4NTylFe81J5b9wIJ5A.ODfxkpycvIU1U6Ge','ishabianca@gmail.com',NULL,'Active'),(149,'Patricia Arellano','cashier','potcor','$2y$10$Z0mYqB1E5tKcvjkZiwQ.Ze1ndPap/X2QW3tlmw','patriciabianca2424@gmail.com',NULL,'Active'),(150,'Patricia Arellano','cashier','potcor','$2y$10$ZJzAh1GwsUihfQDb3GdLuOn/I46G.oXMmmaEb7','patriciabianca2424@gmail.com',NULL,'Active'),(151,'Patricia Arellano','cashier','potcor','$2y$10$.h0P5caYPiOyyBsi5tnQKeEwAylNkkX9YZ5A4K','patriciabianca2424@gmail.com',NULL,'Active'),(152,'Trisha','Employee','patricia','$2y$10$PlCu58e9T5jatQCadwPK7eBzqXB9d8ILMot1oc','ishabianca@gmail.com',NULL,'Active'),(153,'','','','$2y$10$aPmp2cuyhgQAqAKc7jUYAe1A5HuPyENcqWVI/V','',NULL,'Active'),(154,'Patricia Bianca','employee','icia','$2y$10$oiBcE4gwClqa594V05tYP.uAn6V1jsl3wvI34d','triciaa.arellano@gmail.com',NULL,'Inactive'),(155,'tricia biancaa','employee','icha','$2y$10$NKG2Hyw6psWtLoJ1gBraFu9QxDBh/sB1.BH81r','triciaa.arellano@gmail.com',NULL,'Inactive'),(156,'tricia bianca arellano','Employee','tribia','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',180753,'Inactive'),(157,'tricia garganta','Employee','garganta','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',511592,'Inactive'),(158,'tricia garganta','Employee','garganta','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',4184,'Inactive'),(159,'patricia bianca','Employee','ishabiancanton','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(160,'bianca patricia','employee','biancanton','$2y$10$ya.VETm0ess6TRUzPtvM5uqy/Znu8MeeVc4C6g','triciaa.arellano@gmail.com',NULL,'Inactive'),(161,'dhashd','admin','asda','$2y$10$tIpBK038GG5KWWx64dRJauAUOKuigUQF6UMjRw','triciaa.arellano@gmail.com',NULL,'Inactive'),(162,'gfdg','admin','fgdg','$2y$10$IbiBT0q2FPSudKqRPx.lselkd8CeNF2FVst22I','triciaa.arellano@gmail.com',NULL,'Inactive'),(163,'triciabiancakess','Employee','biancaur','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(164,'Patricia Arellano','admin','rahahah','$2y$10$YniCII45ijlC.Y5DzR6D3u4Em5PCFI0YMpCG3M','triciaa.arellano@gmail.com',NULL,'Active'),(165,'Bianca','Employee','rerere','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(166,'maria filipinas','admin','fili','$2y$10$n4bi55cWhXlhHnK2h1XUtueukvnU2K9nLK5/oq','triciaa.arellano@gmail.com',NULL,'Active'),(167,'maria filipinas','admin','rahahaha','$2y$10$VaiLm0DecsMaRcZ/loFbWejEqRVGRUSG5K5kmw','triciaa.arellano@gmail.com',NULL,'Active'),(168,'tomasino','Admin','rawr','$2y$10$GdeRILx4sXtCWBjY5vGVM.GT8ub40tMUJj.Lqu','triciaa.arellano@gmail.com',NULL,'Active'),(169,'Patricia Arellano','Cashier','star','$2y$10$JZzwsAPXeK5viwOdmZXKoem6BG33Hk.oGK845n','triciaa.arellano@gmail.com',NULL,'Active'),(170,'Biancaure','admin','ianca','$2y$10$Idk39M2U074q5XoGWk467eI7i7s3THHp6h6SM/','triciaa.arellano@gmail.com',NULL,'Inactive'),(171,'Biancaaa','admin','boink','$2y$10$e1xqfyCKRTdkW0YPQWHsHOtUGIXWMTKyGi6D0P','triciaa.arellano@gmail.com',NULL,'Inactive'),(172,'Bianca','admin','34233','$2y$10$8m86P7p221CgyvGin7/o.ehUZcxLeE6RfiyyrU','triciaa.arellano@gmail.com',NULL,'Inactive'),(173,'dfsf','admin','hopee','$2y$10$500r9vd6wENXfnlHuSXF1e0l7ABTkr6kdpZKMI','triciaa.arellano@gmail.com',NULL,'Inactive'),(174,'Bianca','admin','twixy','$2y$10$peIcjF9dyjyjTSpMkAiX5eC4tO5oEoefDOp04K','triciaa.arellano@gmail.com',NULL,'Inactive'),(175,'Patricia Arellano','admin','twixwewwaewae','$2y$10$ldDm0bGV..ORhVBG4d875.pMPAZQS86UEsM.Tl','triciaa.arellano@gmail.com',NULL,'Inactive'),(176,'Patricia Arellano','admin','sffsdfsd','$2y$10$dndSPkPamRAz/0wnimZUWePXlSUJryBAvk/D9a','triciaa.arellano@gmail.com',NULL,'Inactive'),(177,'maria filipinas','admin','fefefe','$2y$10$4JbN45TVUUkEULkAmx5gaetPxO9TfuZ/zd56MF','triciaa.arellano@gmail.com',NULL,'Inactive'),(178,'wakki de asis','admin','waks','$2y$10$6YOIm.jLcmUskRLjE1Vif.gcb7Av8hIaEtsDgo','triciaa.arellano@gmail.com',NULL,'Inactive'),(179,'Biancaaaa','admin','asdasdad','$2y$10$30j25HfUgHi5woYXJz1Wou7xvZwZ0JALetXfy2','triciaa.arellano@gmail.com',NULL,'Inactive'),(180,'tricia bianca garganta','employee','yaoyao','$2y$10$aal4DES1j.TVGjcVAyxJfOUaRYRR08tyv6xihm','triciaa.arellano@gmail.com',NULL,'Inactive'),(181,'Patricia Arellano','Employee','wewew','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(182,'Biancaaa','admin','swswsw','$2y$10$0ChH998YlK6F.Fv1ahQP8uQLSwG3/iZxEOeWFY','triciaa.arellano@gmail.com',NULL,'Active'),(183,'garganda','admin','garganda','$2y$10$XxL/DDnkl3Wu7VoJlm6uGebGGHeFIEAnJeRmKL','triciaa.arellano@gmail.com',NULL,'Active'),(184,'trishacakes','Admin','trishacakes','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(185,'biancacakes','admin','biancacakes','$2y$10$CPYgzUujaR8qg8Fpefakn.j0MZSI5SoKNaifCd','triciaa.arellano@gmail.com',NULL,'Active'),(186,'parellano','Admin','parellanow','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(187,'Bianca','Admin','DI NA GUMANA','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(188,'Patricia Arellano','admin','123123','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',129887,'Inactive'),(189,'faksdada','Admin','bad','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(190,'asdada','Employee','work','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(191,'hghg','Admin','kjk','17cedeccc3a6555b9a5826e4d726eae3','triciaa.arellano@gmail.com',217285,'Inactive'),(192,'twixchuya','Employee','twix','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',690006,'Inactive');
/*!40000 ALTER TABLE `user_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `join_logs_user`
--

/*!50001 DROP VIEW IF EXISTS `join_logs_user`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `join_logs_user` AS select `l`.`log_id` AS `log_id`,`u`.`role` AS `role`,`u`.`username` AS `username`,`l`.`action` AS `action`,`l`.`DateTime` AS `DateTime` from (`logs_table` `l` join `user_table` `u` on(`l`.`user_id` = `u`.`user_id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `join_sales_table`
--

/*!50001 DROP VIEW IF EXISTS `join_sales_table`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `join_sales_table` AS select `s`.`sales_id` AS `sales_id`,`t`.`product_id` AS `product_id`,`t`.`quantity_sold` AS `quantity_sold`,`s`.`total_amount` AS `total_amount`,`s`.`payment_method` AS `payment_method`,`s`.`sales_date` AS `sales_date` from (`sales_table` `s` join `transaction_table` `t` on(`s`.`transaction_id` = `t`.`transaction_id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `join_transaction_table`
--

/*!50001 DROP VIEW IF EXISTS `join_transaction_table`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `join_transaction_table` AS select `t`.`transaction_id` AS `transaction_id`,`pt`.`product_id` AS `product_id`,`pt`.`price` AS `price`,`t`.`quantity_sold` AS `quantity_sold`,`t`.`transaction_date` AS `transaction_date` from (`product_table` `pt` join `transaction_table` `t` on(`pt`.`product_id` = `t`.`product_id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-26  2:18:32
