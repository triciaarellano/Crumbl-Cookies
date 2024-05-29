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
 1 AS `receipt_number`,
 1 AS `total_quantity`,
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
 1 AS `reference_number`,
 1 AS `receipt_number`,
 1 AS `status`,
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
) ENGINE=InnoDB AUTO_INCREMENT=358 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs_table`
--

LOCK TABLES `logs_table` WRITE;
/*!40000 ALTER TABLE `logs_table` DISABLE KEYS */;
INSERT INTO `logs_table` VALUES (1,77,'Logged IN','2024-05-13 00:00:00'),(2,91,'Logged IN','2024-05-13 00:00:00'),(3,91,'Logged IN','2024-05-13 00:00:00'),(4,90,'Logged IN','2024-05-13 00:00:00'),(5,91,'Logged IN','2024-05-13 00:00:00'),(6,77,'Logged IN','2024-05-13 14:18:09'),(7,91,'Logged IN','2024-05-13 14:24:52'),(8,77,'Logged IN','2024-05-13 14:27:19'),(9,77,'Logged IN','2024-05-13 14:29:49'),(10,90,'Logged IN','2024-05-13 14:36:56'),(11,77,'Logged IN','2024-05-13 14:39:49'),(12,90,'Logged IN','2024-05-13 14:45:05'),(13,90,'Logged IN','2024-05-13 15:01:02'),(14,77,'Logged IN','2024-05-13 16:40:51'),(15,90,'Logged IN','2024-05-13 16:42:15'),(16,77,'Logged IN','2024-05-13 18:16:56'),(17,90,'Logged IN','2024-05-13 18:17:06'),(18,84,'Logged IN','2024-05-13 18:23:15'),(19,77,'Logged IN','2024-05-13 18:52:38'),(20,91,'Logged IN','2024-05-13 22:31:03'),(21,77,'Logged IN','2024-05-13 22:36:16'),(22,90,'Logged IN','2024-05-13 22:40:20'),(23,77,'Logged IN','2024-05-13 22:41:36'),(24,91,'Logged IN','2024-05-17 13:24:12'),(25,91,'Logged OUT','2024-05-17 13:24:18'),(26,77,'Logged IN','2024-05-17 13:24:24'),(27,77,'Logged OUT','2024-05-17 13:24:42'),(28,91,'Logged IN','2024-05-17 13:24:52'),(29,91,'Logged OUT','2024-05-17 13:25:03'),(30,91,'Logged IN','2024-05-17 13:34:17'),(31,91,'Logged OUT','2024-05-17 13:34:32'),(32,90,'Logged IN','2024-05-17 17:15:43'),(33,92,'Logged IN','2024-05-17 18:10:56'),(34,92,'Logged OUT','2024-05-17 18:11:00'),(35,93,'Logged IN','2024-05-17 18:42:27'),(36,93,'Logged OUT','2024-05-17 18:42:34'),(37,94,'Logged IN','2024-05-17 18:45:34'),(38,94,'Logged OUT','2024-05-17 18:45:39'),(39,90,'Logged IN','2024-05-17 19:16:46'),(40,90,'Logged OUT','2024-05-17 19:16:58'),(41,76,'Logged IN','2024-05-17 19:26:02'),(42,76,'Logged IN','2024-05-17 19:26:29'),(43,76,'Logged IN','2024-05-17 19:26:50'),(44,76,'Logged IN','2024-05-17 19:27:03'),(45,76,'Logged IN','2024-05-17 19:27:12'),(46,76,'Logged OUT','2024-05-17 19:27:15'),(47,96,'Logged IN','2024-05-17 22:35:02'),(48,96,'Logged OUT','2024-05-17 22:35:28'),(49,96,'Logged IN','2024-05-17 22:44:50'),(50,96,'Logged OUT','2024-05-17 22:44:57'),(51,91,'Logged IN','2024-05-17 23:09:03'),(52,91,'Logged OUT','2024-05-17 23:09:05'),(53,90,'Logged IN','2024-05-17 23:10:34'),(54,90,'Logged OUT','2024-05-17 23:10:36'),(55,90,'Logged IN','2024-05-17 23:13:41'),(56,90,'Logged OUT','2024-05-17 23:13:42'),(57,91,'Logged IN','2024-05-17 23:13:58'),(58,91,'Logged OUT','2024-05-17 23:14:00'),(59,90,'Logged IN','2024-05-17 23:14:44'),(60,90,'Logged OUT','2024-05-17 23:14:45'),(61,90,'Logged IN','2024-05-17 23:18:32'),(62,90,'Logged OUT','2024-05-17 23:18:35'),(63,77,'Logged IN','2024-05-17 23:36:37'),(64,77,'Logged OUT','2024-05-17 23:36:39'),(65,93,'Logged IN','2024-05-17 23:36:54'),(66,93,'Logged OUT','2024-05-17 23:37:02'),(67,93,'Logged IN','2024-05-17 23:37:12'),(68,93,'Logged OUT','2024-05-17 23:44:22'),(69,97,'Logged IN','2024-05-17 23:48:16'),(70,97,'Logged OUT','2024-05-18 00:22:11'),(71,90,'Logged IN','2024-05-18 00:30:07'),(72,98,'Logged IN','2024-05-18 08:59:32'),(73,98,'Logged OUT','2024-05-18 21:06:40'),(74,90,'Logged IN','2024-05-18 21:06:48'),(75,90,'Logged OUT','2024-05-18 21:36:03'),(76,96,'Logged IN','2024-05-18 21:51:24'),(77,121,'Logged IN','2024-05-19 00:32:25'),(78,121,'Logged IN','2024-05-19 00:33:24'),(79,121,'Logged IN','2024-05-19 00:33:56'),(80,121,'Logged OUT','2024-05-19 00:34:09'),(81,121,'Logged IN','2024-05-19 01:21:00'),(82,108,'Logged IN','2024-05-19 14:01:59'),(83,108,'Logged OUT','2024-05-19 18:33:40'),(84,159,'Logged IN','2024-05-24 18:06:33'),(85,163,'Logged IN','2024-05-24 18:36:11'),(86,165,'Logged IN','2024-05-24 18:45:01'),(87,181,'Logged IN','2024-05-24 20:47:23'),(88,184,'Logged IN','2024-05-24 20:57:44'),(89,186,'Logged IN','2024-05-24 21:03:52'),(90,187,'Logged IN','2024-05-24 21:16:23'),(91,189,'Logged IN','2024-05-24 21:30:07'),(92,190,'Logged IN','2024-05-24 21:31:16'),(93,190,'Logged IN','2024-05-24 21:31:21'),(94,184,'Logged IN','2024-05-25 03:17:49'),(95,184,'Logged OUT','2024-05-25 03:20:01'),(96,184,'Logged IN','2024-05-25 03:20:10'),(97,184,'Logged OUT','2024-05-25 16:50:49'),(98,97,'Logged IN','2024-05-25 16:51:30'),(99,184,'Logged IN','2024-05-26 00:35:05'),(100,184,'Logged IN','2024-05-26 21:56:34'),(101,184,'Logged OUT','2024-05-26 21:59:38'),(102,184,'Logged IN','2024-05-26 21:59:54'),(103,184,'Logged IN','2024-05-27 00:48:37'),(104,184,'Logged OUT','2024-05-27 00:49:06'),(105,184,'Logged IN','2024-05-27 00:49:33'),(106,184,'Logged IN','2024-05-27 19:21:17'),(107,184,'Logged IN','2024-05-27 21:59:25'),(108,184,'Logged IN','2024-05-28 03:28:44'),(109,195,'Logged IN','2024-05-28 03:35:32'),(110,195,'Logged OUT','2024-05-28 03:35:57'),(111,195,'Logged IN','2024-05-28 03:36:05'),(112,195,'Logged OUT','2024-05-28 03:36:11'),(113,184,'Logged IN','2024-05-28 03:36:19'),(114,184,'Logged OUT','2024-05-28 03:36:23'),(115,201,'Logged IN','2024-05-28 11:03:35'),(116,201,'Logged OUT','2024-05-28 12:23:26'),(117,201,'Logged IN','2024-05-28 12:24:15'),(118,201,'Logged OUT','2024-05-28 12:24:17'),(119,184,'Logged IN','2024-05-28 12:33:51'),(120,184,'Logged OUT','2024-05-28 12:35:20'),(121,201,'Logged IN','2024-05-28 12:47:20'),(122,201,'Logged OUT','2024-05-28 12:47:22'),(123,202,'Logged IN','2024-05-28 12:55:39'),(124,184,'Logged IN','2024-05-28 12:55:57'),(125,184,'Placed an order with transaction ID 144','2024-05-28 19:23:48'),(126,184,'Placed an order with transaction ID 148','2024-05-28 20:20:35'),(127,184,'Placed an order with transaction ID 150 (Paid','2024-05-28 20:23:27'),(128,184,'Placed an order with transaction ID 153 (GCas','2024-05-28 20:24:19'),(129,184,'Placed an order w/ t_ID 155 Cash','2024-05-28 20:25:22'),(130,184,'Added a new account with username: yehey','2024-05-28 20:32:57'),(131,203,'Logged IN','2024-05-28 20:33:24'),(132,203,'Logged OUT','2024-05-28 20:33:29'),(133,184,'Logged IN','2024-05-28 20:33:35'),(134,184,'Edited account with username: change','2024-05-28 20:40:10'),(135,184,'Edited account with username: work','2024-05-28 20:40:43'),(136,184,'Added new product: frosting','2024-05-28 20:49:14'),(137,184,'Updated product with ID: 28','2024-05-28 20:49:47'),(138,184,'Added new product: rocky','2024-05-28 20:51:04'),(139,184,'Updated product with ID: 35','2024-05-28 23:34:28'),(140,184,'Logged OUT','2024-05-28 23:45:05'),(141,201,'Logged IN','2024-05-28 23:45:21'),(142,201,'Logged OUT','2024-05-28 23:45:26'),(143,184,'Logged IN','2024-05-28 23:46:35'),(144,184,'Logged OUT','2024-05-28 23:46:51'),(145,184,'Logged IN','2024-05-28 23:46:59'),(146,184,'Placed an order with Transaction ID 157 GCash','2024-05-29 00:12:07'),(147,184,'Placed an order with Transaction ID 159 GCash','2024-05-29 01:50:41'),(148,184,'Placed an order with Transaction ID 161 GCash','2024-05-29 01:56:38'),(149,184,'Placed an order with Transaction ID 163 GCash','2024-05-29 01:59:52'),(150,184,'Placed an order with Transaction ID 165 GCash','2024-05-29 02:38:35'),(151,184,'Placed an order with Transaction ID 166 GCash','2024-05-29 02:40:10'),(152,184,'Placed an order with Transaction ID 168 GCash','2024-05-29 02:44:02'),(153,184,'Placed an order with Transaction ID 170 Cash','2024-05-29 02:45:20'),(154,184,'Placed an order with Transaction ID 172 GCash','2024-05-29 02:51:15'),(155,184,'Placed an order with Transaction ID 173 Cash','2024-05-29 02:54:31'),(156,184,'Placed an order with Transaction ID 175 GCash','2024-05-29 03:26:27'),(157,184,'Placed an order with Transaction ID 177 GCash','2024-05-29 03:27:15'),(158,184,'Placed an order with Transaction ID 179 GCash','2024-05-29 03:30:22'),(159,184,'Logged OUT','2024-05-29 03:40:57'),(160,202,'Logged IN','2024-05-29 03:48:55'),(161,202,'Placed an order with Transaction ID 181 Cash','2024-05-29 03:50:42'),(162,202,'Placed an order with Transaction ID 183 GCash','2024-05-29 03:55:40'),(163,204,'Logged IN','2024-05-29 12:30:06'),(164,204,'Logged OUT','2024-05-29 12:33:56'),(165,201,'Logged IN','2024-05-29 12:35:17'),(166,184,'Logged IN','2024-05-29 12:36:13'),(167,184,'Placed an order with Transaction ID 185 GCash','2024-05-29 12:36:28'),(168,184,'Placed an order with Transaction ID 187 GCash','2024-05-29 12:38:23'),(169,184,'Logged OUT','2024-05-29 13:14:31'),(170,201,'Logged IN','2024-05-29 13:14:38'),(171,201,'Logged IN','2024-05-29 13:14:38'),(172,201,'Logged OUT','2024-05-29 13:44:44'),(173,201,'Logged IN','2024-05-29 13:45:02'),(174,201,'Logged OUT','2024-05-29 13:45:08'),(175,184,'Logged IN','2024-05-29 13:45:22'),(176,184,'Logged OUT','2024-05-29 13:45:27'),(177,184,'Logged IN','2024-05-29 13:46:14'),(178,184,'Logged OUT','2024-05-29 15:28:20'),(179,201,'Logged IN','2024-05-29 15:28:27'),(180,201,'Placed an order with Transaction ID 192 Cash','2024-05-29 15:28:43'),(181,201,'Placed an order with Transaction ID 194 Cash','2024-05-29 15:28:43'),(182,201,'Added new product: ','2024-05-29 16:51:50'),(183,201,'Added new product: ','2024-05-29 16:56:48'),(184,201,'Added new product: ','2024-05-29 16:57:07'),(185,201,'Updated product with ID: 25','2024-05-29 16:57:07'),(186,201,'Added new product: ','2024-05-29 16:57:16'),(187,201,'Updated product with ID: 25','2024-05-29 16:57:16'),(188,201,'Added new product: ','2024-05-29 16:57:34'),(189,201,'Updated product with ID: 56','2024-05-29 16:57:34'),(190,201,'Placed an order with Transaction ID 198 Cash','2024-05-29 17:02:12'),(191,201,'Placed an order with Transaction ID 200 GCash','2024-05-29 17:04:59'),(192,201,'Added new product: Chocolate Chip','2024-05-29 17:11:15'),(193,201,'Added new product: Choco Mochi','2024-05-29 17:13:42'),(194,201,'Added new product: Choconfetti','2024-05-29 17:14:29'),(195,201,'Added new product: Cookie Dough','2024-05-29 17:15:05'),(196,201,'Added new product: Buttermilk Pancake','2024-05-29 17:15:33'),(197,201,'Added new product: Pretzel Cookie','2024-05-29 17:16:15'),(198,201,'Added new product: Double Dutch','2024-05-29 17:17:09'),(199,201,'Added new product: Reese\\\'s Cookie','2024-05-29 17:18:04'),(200,201,'Added new product: Peanut Butter','2024-05-29 17:18:58'),(201,201,'Added new product: Birthday Cake','2024-05-29 17:19:55'),(202,201,'Added new product: Strawberry Sprinkles','2024-05-29 17:20:46'),(203,201,'Added new product: Lemon Crinkle','2024-05-29 17:21:37'),(204,201,'Added new product: Chocolate Cake','2024-05-29 17:22:25'),(205,201,'Added new product: Vanilla Pancake','2024-05-29 17:23:09'),(206,201,'Added new product: M&M Cookie','2024-05-29 17:23:52'),(207,201,'Added new product: Blueberry Dew','2024-05-29 17:24:29'),(208,201,'Added new product: Skillet Cookie','2024-05-29 17:25:22'),(209,201,'Added new product: Classic Pink Sugar','2024-05-29 17:26:30'),(210,201,'Added new product: Vanilla Frosting','2024-05-29 17:27:06'),(211,201,'Added new product: Pink Velvet Cake','2024-05-29 17:28:18'),(212,201,'Added new product: Pink M&M Cookie','2024-05-29 17:28:49'),(213,201,'Added new product: Choco Crinkles','2024-05-29 17:29:51'),(214,201,'Added new product: Key Lime Pie','2024-05-29 17:30:42'),(215,201,'Added new product: Dulce De Leche','2024-05-29 17:31:22'),(216,201,'Added new product: Oreo Surprise','2024-05-29 17:32:19'),(217,201,'Added new product: Brownie','2024-05-29 17:32:54'),(218,201,'Added new product: Coconut Pink','2024-05-29 17:33:33'),(219,201,'Added new product: Strawberry cake','2024-05-29 17:54:43'),(220,201,'Added new product: Peppermint Ice Cream','2024-05-29 17:56:05'),(221,201,'Added new product: Churro Frost','2024-05-29 17:57:05'),(222,201,'Added new product: Red Velvet Creme','2024-05-29 17:57:39'),(223,201,'Added new product: White Biscoff','2024-05-29 17:58:28'),(224,201,'Added new product: Oreo Milkshake','2024-05-29 17:59:49'),(225,201,'Added new product: Funfetti','2024-05-29 18:00:37'),(226,201,'Logged OUT','2024-05-29 18:13:42'),(227,201,'Logged IN','2024-05-29 18:13:48'),(228,201,'Logged OUT','2024-05-29 18:24:41'),(229,184,'Logged IN','2024-05-29 18:24:54'),(230,184,'Logged OUT','2024-05-29 18:26:05'),(231,201,'Logged IN','2024-05-29 18:26:11'),(232,201,'Placed an order with Transaction ID 202 Cash','2024-05-29 18:26:46'),(233,201,'Logged OUT','2024-05-29 18:34:17'),(234,184,'Logged IN','2024-05-29 18:34:24'),(235,184,'Logged OUT','2024-05-29 19:06:38'),(236,201,'Logged IN','2024-05-29 19:07:03'),(237,201,'Placed an order with Transaction ID 204 GCash','2024-05-29 19:07:21'),(238,201,'Logged OUT','2024-05-29 19:10:11'),(239,184,'Logged IN','2024-05-29 19:10:18'),(240,184,'Logged OUT','2024-05-29 19:20:40'),(241,201,'Logged IN','2024-05-29 19:20:48'),(242,201,'Placed an order with Transaction ID 206 GCash','2024-05-29 19:21:14'),(243,201,'Logged OUT','2024-05-29 19:26:49'),(244,201,'Logged IN','2024-05-29 19:27:04'),(245,201,'Placed an order with Transaction ID 208 GCash','2024-05-29 19:27:23'),(246,201,'Placed an order with Transaction ID 210 GCash','2024-05-29 19:31:15'),(247,201,'Placed an order with Transaction ID 212 GCash','2024-05-29 19:33:27'),(248,201,'Placed an order with Transaction ID 214 Cash','2024-05-29 19:38:32'),(249,201,'Placed an order with Transaction ID 216 GCash','2024-05-29 19:38:49'),(250,201,'Placed an order with Transaction ID 218 GCash','2024-05-29 19:54:39'),(251,201,'Placed an order with Transaction ID 220 GCash','2024-05-29 20:09:03'),(252,201,'Placed an order with Transaction ID 222','2024-05-29 20:18:32'),(253,201,'Placed an order with Transaction ID 224','2024-05-29 20:18:48'),(254,201,'Placed an order with Transaction ID 226 Cash','2024-05-29 20:19:04'),(255,201,'Placed an order with Transaction ID 228 GCash','2024-05-29 20:21:59'),(256,201,'Logged OUT','2024-05-29 20:29:17'),(257,184,'Logged IN','2024-05-29 20:29:37'),(258,184,'Logged OUT','2024-05-29 20:31:51'),(259,201,'Logged IN','2024-05-29 20:32:59'),(260,201,'Logged OUT','2024-05-29 20:33:08'),(261,201,'Logged IN','2024-05-29 20:36:40'),(262,201,'Logged OUT','2024-05-29 20:36:53'),(263,201,'Logged IN','2024-05-29 20:37:30'),(264,201,'Logged OUT','2024-05-29 20:37:34'),(265,201,'Logged IN','2024-05-29 20:38:49'),(266,201,'Logged OUT','2024-05-29 20:38:53'),(267,184,'Logged IN','2024-05-29 20:39:38'),(268,184,'Added a new account with username: cha','2024-05-29 20:40:14'),(269,205,'Logged IN','2024-05-29 20:40:58'),(270,205,'Added new product: ','2024-05-29 20:59:08'),(271,205,'Updated product with ID: 75','2024-05-29 20:59:08'),(272,205,'Added new product: ','2024-05-29 20:59:08'),(273,205,'Updated product with ID: 75','2024-05-29 20:59:08'),(274,205,'Added new product: ','2024-05-29 20:59:16'),(275,205,'Updated product with ID: 75','2024-05-29 20:59:16'),(276,205,'Logged OUT','2024-05-29 21:00:00'),(277,184,'Logged IN','2024-05-29 21:00:07'),(278,184,'Added new product: ','2024-05-29 21:00:29'),(279,184,'Added new product: rocky','2024-05-29 21:02:56'),(280,184,'Updated product with ID: 113','2024-05-29 21:03:03'),(281,184,'Added new product: zero','2024-05-29 21:04:15'),(282,184,'Added new product: zero','2024-05-29 21:04:15'),(283,184,'Updated product with ID: 115','2024-05-29 21:04:58'),(284,184,'Logged OUT','2024-05-29 21:05:17'),(285,201,'Logged IN','2024-05-29 21:05:26'),(286,201,'Placed an order with Transaction ID 230 Cash','2024-05-29 21:05:40'),(287,201,'Logged OUT','2024-05-29 21:05:47'),(288,184,'Logged IN','2024-05-29 21:05:54'),(289,184,'Added new product: texst','2024-05-29 21:06:59'),(290,184,'Updated product with ID: 116','2024-05-29 21:07:16'),(291,184,'Updated product with ID: 116','2024-05-29 21:07:22'),(292,184,'Updated product with ID: 116','2024-05-29 21:24:38'),(293,184,'Logged OUT','2024-05-29 21:30:54'),(294,93,'Logged IN','2024-05-29 21:31:05'),(295,93,'Updated product with ID: 116','2024-05-29 21:40:30'),(296,93,'Logged OUT','2024-05-29 21:41:06'),(297,201,'Logged IN','2024-05-29 21:41:12'),(298,201,'Logged OUT','2024-05-29 21:45:32'),(299,184,'Logged IN','2024-05-29 21:45:43'),(300,184,'Updated product with ID: 113','2024-05-29 21:49:43'),(301,184,'Added new product: Blueberry Creme','2024-05-29 21:50:31'),(302,205,'Logged IN','2024-05-29 22:06:48'),(303,205,'Logged OUT','2024-05-29 22:07:04'),(304,205,'Logged IN','2024-05-29 22:14:37'),(305,205,'Logged IN','2024-05-29 22:14:37'),(306,205,'Logged OUT','2024-05-29 22:14:44'),(307,184,'Logged IN','2024-05-29 22:14:55'),(308,184,'Added a new account with username: tri','2024-05-29 22:15:38'),(309,184,'Added a new account with username: asdas','2024-05-29 22:16:40'),(310,215,'Logged IN','2024-05-29 22:17:11'),(311,215,'Logged OUT','2024-05-29 22:17:23'),(312,218,'Logged IN','2024-05-29 22:25:06'),(313,218,'Logged IN','2024-05-29 22:25:19'),(314,205,'Logged IN','2024-05-29 22:26:27'),(315,205,'Logged OUT','2024-05-29 22:26:43'),(316,184,'Logged IN','2024-05-29 22:29:16'),(317,184,'Added a new account with username: biancaurr','2024-05-29 22:29:51'),(318,219,'Logged IN','2024-05-29 22:30:36'),(319,219,'Edited account with username: biancaurr','2024-05-29 22:30:54'),(320,219,'Logged OUT','2024-05-29 22:30:56'),(321,219,'Logged IN','2024-05-29 22:31:28'),(322,219,'Updated product with ID: 117','2024-05-29 22:32:46'),(323,219,'Logged OUT','2024-05-29 22:34:08'),(324,219,'Logged IN','2024-05-29 22:34:40'),(325,219,'Logged OUT','2024-05-29 22:34:59'),(326,184,'Logged IN','2024-05-29 22:35:24'),(327,184,'Added new product: Fruity Mallows','2024-05-29 22:37:09'),(328,184,'Edited account with username: biancaurr','2024-05-29 22:39:55'),(329,184,'Logged OUT','2024-05-29 22:39:59'),(330,219,'Logged IN','2024-05-29 22:40:08'),(331,219,'Edited account with username: biancaurrr','2024-05-29 22:40:31'),(332,219,'Added a new account with username: garga','2024-05-29 22:43:20'),(333,220,'Logged IN','2024-05-29 22:44:28'),(334,220,'Logged OUT','2024-05-29 22:44:38'),(335,184,'Logged IN','2024-05-29 22:44:48'),(336,184,'Updated product with ID: 118','2024-05-29 22:45:19'),(337,184,'Added new product: Valentine Cookie','2024-05-29 22:45:59'),(338,184,'Added new product: Valentine Cookie','2024-05-29 22:46:00'),(339,184,'Edited account with username: garga','2024-05-29 22:50:16'),(340,184,'Logged OUT','2024-05-29 22:50:57'),(341,184,'Logged IN','2024-05-29 22:51:25'),(342,184,'Logged OUT','2024-05-29 22:52:37'),(343,205,'Logged IN','2024-05-29 22:52:43'),(344,205,'Logged IN','2024-05-29 22:52:43'),(345,205,'Updated product with ID: 120','2024-05-29 22:54:04'),(346,205,'Logged OUT','2024-05-29 22:54:57'),(347,201,'Logged IN','2024-05-29 22:55:09'),(348,201,'Logged OUT','2024-05-29 22:58:36'),(349,201,'Logged IN','2024-05-29 22:58:43'),(350,201,'Logged IN','2024-05-29 22:58:44'),(351,201,'Placed an order with Transaction ID 236 Cash','2024-05-29 22:59:00'),(352,201,'Placed an order with Transaction ID 238 Cash','2024-05-29 22:59:44'),(353,201,'Placed an order with Transaction ID 239 GCash','2024-05-29 23:02:32'),(354,201,'Placed an order with Transaction ID 242 GCash','2024-05-29 23:04:29'),(355,201,'Placed an order with Transaction ID 245 GCash','2024-05-29 23:04:29'),(356,201,'Logged OUT','2024-05-29 23:07:23'),(357,184,'Logged IN','2024-05-29 23:07:39');
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
  `product_name` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity_available` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` enum('Available','Unavailable') NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_table`
--

LOCK TABLES `product_table` WRITE;
/*!40000 ALTER TABLE `product_table` DISABLE KEYS */;
INSERT INTO `product_table` VALUES (75,'Chocolate Chip','Original',120.00,15,'uploads/1.png','Available'),(76,'Choco Mochi','Cookie with mallows',130.00,12,'uploads/2.png',''),(77,'Choconfetti','Chocolate sprinkles',100.00,20,'uploads/3.png',''),(78,'Cookie Dough','Cookie Dough bits',150.00,14,'uploads/4.png','Available'),(79,'Buttermilk Pancake','Buttermilk toppings',125.00,12,'uploads/5.png',''),(80,'Pretzel Cookie','Pretzel with strawberry sauce',165.00,9,'uploads/6.png','Available'),(81,'Double Dutch','Milk Chocolate with Triple Chocolate combined',145.00,23,'uploads/7.png','Available'),(82,'Reese\'s Cookie','Peanut Butter ft. Reese\'s pieces',170.00,10,'uploads/8.png','Available'),(83,'Peanut Butter','Peanut butter with almond bits',120.00,14,'uploads/9.png','Available'),(84,'Birthday Cake','Rainbow Sprinkles with icing',150.00,28,'uploads/10.png','Available'),(85,'Strawberry Sprinkles','Strawberry frosting with white sprinkles',100.00,16,'uploads/11.png','Available'),(86,'Lemon Crinkle','Lemon zest toppings',100.00,18,'uploads/12.png','Available'),(87,'Chocolate Cake','Triple Chocolate with nerds bits',135.00,17,'uploads/13.png','Available'),(88,'Vanilla Pancake','Vanilla icing with caramel drizzle',125.00,17,'uploads/14.png','Available'),(89,'M&M Cookie','Cookie with M&M chunks',145.00,21,'uploads/15.png',''),(90,'Blueberry Dew','Blueberry jam with vanilla frosting',180.00,25,'uploads/16.png',''),(91,'Skillet Cookie','Mochi with almond bits',195.00,10,'uploads/17.png',''),(92,'Classic Pink Sugar','Strawberry frosting',130.00,24,'uploads/18.png',''),(93,'Vanilla Frosting','Vanilla frosting with white sprinkles',130.00,22,'uploads/19.png',''),(94,'Pink Velvet Cake','Red Velvet with pink frosting',145.00,24,'uploads/20.png','Available'),(95,'Pink M&M Cookie','Pink M&M chunks',145.00,19,'uploads/21.png','Available'),(96,'Choco Crinkles','Chocolate cookie with powdered sugar',120.00,31,'uploads/22.png','Available'),(97,'Key Lime Pie','Vanilla Frosting with Lime',205.00,6,'uploads/23.png','Available'),(98,'Dulce De Leche','Caramel with vanilla frosting',165.00,12,'uploads/24.png',''),(99,'Oreo Surprise','Vanilla frosting with oreo bits',195.00,29,'uploads/25.png','Available'),(100,'Brownie','Fudge brownie',140.00,23,'uploads/26.png',''),(101,'Coconut Pink','Strawberry frosting with coconut bits',120.00,11,'uploads/27.png','Available'),(102,'Strawberry cake','Vanilla frosting with pink bits',130.00,22,'uploads/28.png','Available'),(103,'Peppermint Ice Cream','Mini ice cone with mint frosting',180.00,22,'uploads/29.png','Available'),(104,'Churro Frost','Churro frosting',155.00,11,'uploads/30.png','Available'),(105,'Red Velvet Creme','Red velvet cookie with white frosting',135.00,42,'uploads/31.png','Available'),(106,'White Biscoff','Cookie butter with white chocolate chunks',220.00,18,'uploads/32.png',''),(107,'Oreo Milkshake','White cookie with oreo frosting',190.00,24,'uploads/33.png','Available'),(108,'Funfetti','Pink frosting with rainbow sprinkles',150.00,32,'uploads/34.png',''),(113,'Rocky Road','Milk and white chocolate chunks',120.00,32,'uploads/35.png','Available'),(117,'Blueberry Creme','Blueberry Creme Tart with bits',195.00,15,'uploads/36.png','Available'),(118,'Fruity','Vanilla frosting with mallows',140.00,11,'uploads/37.png','Available'),(119,'Valentine Cookie','Strawberry jam filling',230.00,5,'uploads/38.png','Available'),(120,'Valentine Cookie','Strawberry jam filling',230.00,96,'uploads/38.png','Available');
/*!40000 ALTER TABLE `product_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales_table`
--

DROP TABLE IF EXISTS `sales_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sales_table` (
  `sales_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` int(64) NOT NULL,
  `total_quantity` varchar(45) NOT NULL,
  `total_amount` double NOT NULL,
  `payment_method` varchar(45) NOT NULL,
  `sales_date` datetime NOT NULL,
  PRIMARY KEY (`sales_id`),
  KEY `transaction_id` (`transaction_id`),
  CONSTRAINT `fk_sales_transaction_id` FOREIGN KEY (`transaction_id`) REFERENCES `transaction_table` (`transaction_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_table`
--

LOCK TABLES `sales_table` WRITE;
/*!40000 ALTER TABLE `sales_table` DISABLE KEYS */;
INSERT INTO `sales_table` VALUES (135,202,'2',220,'cash','2024-05-29 12:26:46'),(136,204,'2',315,'gcash','2024-05-29 13:07:21'),(137,206,'2',315,'gcash','2024-05-29 13:21:14'),(138,208,'2',250,'gcash','2024-05-29 13:27:23'),(139,210,'2',245,'gcash','2024-05-29 13:31:15'),(140,212,'2',325,'gcash','2024-05-29 13:33:27'),(141,214,'2',255,'cash','2024-05-29 13:38:32'),(142,216,'2',325,'gcash','2024-05-29 13:38:49'),(143,218,'2',375,'gcash','2024-05-29 13:54:39'),(144,220,'2',275,'gcash','2024-05-29 14:09:03'),(145,222,'2',225,'cash','2024-05-29 14:18:32'),(146,224,'2',225,'cash','2024-05-29 14:18:48'),(147,226,'2',225,'cash','2024-05-29 14:19:04'),(148,228,'2',285,'gcash','2024-05-29 14:21:59'),(154,235,'2',150,'Cash','2024-05-29 00:00:00'),(155,236,'1',120,'cash','2024-05-29 16:59:00'),(156,238,'2',290,'cash','2024-05-29 16:59:44'),(157,239,'1',170,'gcash','2024-05-29 17:02:32'),(158,242,'3',520,'gcash','2024-05-29 17:04:29'),(159,245,'3',520,'gcash','2024-05-29 17:04:29'),(160,246,'1',220,'Cash','2024-05-29 00:00:00'),(161,247,'2',440,'Cash','2024-05-29 00:00:00');
/*!40000 ALTER TABLE `sales_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction_table`
--

DROP TABLE IF EXISTS `transaction_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaction_table` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity_sold` int(11) NOT NULL,
  `reference_number` varchar(45) NOT NULL,
  `receipt_number` varchar(45) NOT NULL,
  `status` enum('Paid','Pending') NOT NULL,
  `transaction_date` datetime NOT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product_table` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction_table`
--

LOCK TABLES `transaction_table` WRITE;
/*!40000 ALTER TABLE `transaction_table` DISABLE KEYS */;
INSERT INTO `transaction_table` VALUES (201,85,1,'none','rec_665702e668011','Paid','2024-05-29 12:26:46'),(202,83,1,'none','rec_665702e668011','Paid','2024-05-29 12:26:46'),(203,80,1,'none','rec_66570c69b0fd1','Pending','2024-05-29 13:07:21'),(204,84,1,'327632','rec_66570c69b0fd1','Paid','2024-05-29 13:07:21'),(205,81,1,'none','rec_66570faa1ac76','Pending','2024-05-29 13:21:14'),(206,82,1,'327421','rec_66570faa1ac76','Paid','2024-05-29 13:21:14'),(207,86,1,'none','rec_6657111bc3611','Pending','2024-05-29 13:27:23'),(208,78,1,'none','rec_6657111bc3611','Pending','2024-05-29 13:27:23'),(209,85,1,'none','rec_6657120394f87','Pending','2024-05-29 13:31:15'),(210,94,1,'213445','rec_6657120394f87','Paid','2024-05-29 13:31:15'),(211,101,1,'none','rec_66571287866c2','Pending','2024-05-29 13:33:27'),(212,97,1,'none','rec_66571287866c2','Pending','2024-05-29 13:33:27'),(213,88,1,'none','rec_665713b881d0e','Paid','2024-05-29 13:38:32'),(214,102,1,'none','rec_665713b881d0e','Paid','2024-05-29 13:38:32'),(215,107,1,'none','rec_665713c9b5e4a','Pending','2024-05-29 13:38:49'),(216,105,1,'none','rec_665713c9b5e4a','Pending','2024-05-29 13:38:49'),(217,103,1,'none','rec_6657177f71dbb','Pending','2024-05-29 13:54:39'),(218,99,1,'234312','rec_6657177f71dbb','Paid','2024-05-29 13:54:39'),(219,96,1,'none','rec_66571adf0cf56','Pending','2024-05-29 14:09:03'),(220,104,1,'342465','rec_66571adf0cf56','Paid','2024-05-29 14:09:03'),(221,85,1,'none','rec_66571d1852360','Pending','2024-05-29 14:18:32'),(222,88,1,'none','rec_66571d1852360','Pending','2024-05-29 14:18:32'),(223,85,1,'none','rec_66571d28d3331','Pending','2024-05-29 14:18:48'),(224,88,1,'none','rec_66571d28d3331','Pending','2024-05-29 14:18:48'),(225,85,1,'none','rec_66571d38e8b27','Paid','2024-05-29 14:19:04'),(226,88,1,'none','rec_66571d38e8b27','Paid','2024-05-29 14:19:04'),(227,87,1,'423424','rec_66571de7deae3','Paid','2024-05-29 14:21:59'),(228,84,1,'423424','rec_66571de7deae3','Paid','2024-05-29 14:21:59'),(235,84,2,'none','rec_6657428d80ef9','Paid','2024-05-29 00:00:00'),(236,75,1,'none','rec_665742b4483bd','Paid','2024-05-29 16:59:00'),(237,78,1,'none','rec_665742e03d687','Paid','2024-05-29 16:59:44'),(238,118,1,'none','rec_665742e03d687','Paid','2024-05-29 16:59:44'),(239,82,1,'423123','rec_66574388ce14e','Paid','2024-05-29 17:02:32'),(240,95,1,'none','rec_665743fd68b2a','Pending','2024-05-29 17:04:29'),(241,103,1,'none','rec_665743fd68b2a','Pending','2024-05-29 17:04:29'),(242,99,1,'none','rec_665743fd68b2a','Pending','2024-05-29 17:04:29'),(243,95,1,'453212','rec_665743fd7ccb7','Paid','2024-05-29 17:04:29'),(244,103,1,'453212','rec_665743fd7ccb7','Paid','2024-05-29 17:04:29'),(245,99,1,'453212','rec_665743fd7ccb7','Paid','2024-05-29 17:04:29'),(246,106,1,'none','rec_6657454540a23','Paid','2024-05-29 00:00:00'),(247,106,2,'none','rec_665745aa2ebaa','Paid','2024-05-29 00:00:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_table`
--

LOCK TABLES `user_table` WRITE;
/*!40000 ALTER TABLE `user_table` DISABLE KEYS */;
INSERT INTO `user_table` VALUES (51,'vince','Admin','mcflurry','81dc9bdb52d04dc20036dbd8313ed055','waltervincentdeasis@gmail.com',855164,'Active'),(53,'Patricia','Cashier','trixa','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',690763,'Active'),(61,'Tricia','Admin','bianca','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',16348,'Active'),(62,'Trish','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',9500,'Active'),(63,'Bianca','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',982239,'Active'),(64,'Bianca','Employee','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',571565,'Active'),(65,'Bianca','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',879873,'Active'),(66,'Bianca','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',714680,'Active'),(67,'hi','Admin','michiko','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',486982,'Active'),(69,'Patricia Arellano','Admin','bianca','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',797394,'Active'),(70,'luminor','Admin','lumi','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',711876,'Active'),(71,'Bianca','Admin','isha','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',596854,'Active'),(72,'Patricia Bianca','Admin','isha','202cb962ac59075b964b07152d234b70','patriciabianca.arellano.cics@ust.edu.ph',983183,'Active'),(73,'maria filipinas','Admin','pat','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',535213,'Active'),(74,'fili','Admin','fili','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',161458,'Active'),(75,'swan','Admin','swan','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',796811,'Active'),(76,'fin','Admin','mcflurry','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',286265,'Active'),(77,'hopeless','Admin','hope','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',238332,'Active'),(78,'runaway','Admin','runaway','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',253406,'Active'),(79,'fight','Admin','fight','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',625123,'Active'),(80,'Bianca','Admin','bianca','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',511365,'Active'),(81,'you','Admin','you','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',682374,'Active'),(82,'love','Admin','love','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',335002,'Active'),(84,'forever','Admin','forever','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',127981,'Active'),(85,'Bianca','Admin','pagod','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',337126,'Active'),(86,'Patricia Arellano','Admin','aa','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',11848,'Active'),(89,'isha','Admin','ishacakes','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',793162,'Active'),(90,'Twixchuya','Admin','twix','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',174597,'Active'),(91,'arellano','Admin','new','402acb1c3e3f37da6e1bb6cacadc315d','patriciabianca2424@gmail.com',709531,'Active'),(92,'Patricia Bianca Arellano','Employee','twish','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',686923,'Active'),(93,'Tricia Arellano','Employee','trish','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',990054,'Active'),(94,'walter vincent','Employee','wakki','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',27259,'Active'),(95,'bianca arellano','Employee','isha','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',221107,'Active'),(96,'marife arellano','Employee','marife','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',556655,'Active'),(97,'maria filipinas','Employee','maria','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',100140,'Active'),(98,'marife arellano','Employee','pinky','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',198189,'Active'),(99,'michiko','Employee','michiko','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(100,'michikaur','Employee','michi','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',731972,'Inactive'),(101,'wakki de asis','Employee','wak','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',777627,'Inactive'),(102,'wakki de asis','Employee','wak','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',278631,'Inactive'),(103,'wakki de asis','Employee','wak','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',867794,'Inactive'),(104,'tricia','Employee','trix','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',429322,'Inactive'),(105,'risha','Employee','risha','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',712244,'Inactive'),(106,'trix','Employee','trix','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',226719,'Inactive'),(107,'trix','Employee','trix','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',981190,'Inactive'),(108,'vince','Employee','vince','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',147133,'Inactive'),(109,'Bianca','Employee','bia','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',330868,'Inactive'),(110,'maria filipinas','Employee','mari','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',532081,'Inactive'),(111,'vince','Employee','bins','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',551161,'Inactive'),(112,'Patricia Arellano','Employee','rah','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',136733,'Inactive'),(113,'Bianca','Employee','bi','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',898130,'Inactive'),(114,'tricia bianca','Employee','ishabianca','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',684219,'Inactive'),(115,'Patricia Arellano','Employee','mcflurry','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',886985,'Inactive'),(116,'Bianca','Employee','esp','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',257808,'Inactive'),(117,'vince','Employee','bins','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',636678,'Inactive'),(118,'Patricia Arellano','Employee','arellano','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',267370,'Inactive'),(119,'Patricia Arellano','Employee','twix','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',701369,'Inactive'),(120,'wakki de asis','Employee','hope','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(121,'vince','Employee','walter','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(122,NULL,'','twix','$2y$10$mzV1UdvxsqjDIKPyekak2eogdfGBQJrd4IEID4',NULL,NULL,'Active'),(123,NULL,'','twix','$2y$10$Kwffoy8jB4tQSERPyuCvoOyzor0hXu0OvgqFoy',NULL,NULL,'Active'),(124,NULL,'','twix','$2y$10$VaQm.ML3PiFj7J.4.mRVPesMwo3ocJm6OFTDSV',NULL,NULL,'Active'),(125,NULL,'','twix','$2y$10$MeHyEQ4GMoPsTwnZ5MDREOqDsl1Oczilbqke0h',NULL,NULL,'Active'),(126,NULL,'admin','twix','$2y$10$szv0ay.hf7NhZ.iDn.YIRuaTQcxQbFlYJ8r4am',NULL,NULL,'Active'),(127,NULL,'admin','twix','$2y$10$jHY8cO7Alqdx0dpPiEZDA.b8uMiEmH51DNtVeF',NULL,NULL,'Active'),(128,NULL,'admin','twix','$2y$10$iWQOtGFNzeQeQ0dQZch8J.34IWHHvZ4lrx4UHg',NULL,NULL,'Active'),(129,NULL,'admin','twix','$2y$10$HxyIQc1o.lMPI2QOmJLfVunRLV7guoZLxIokAx',NULL,NULL,'Active'),(130,NULL,'admin','twix','$2y$10$PeOVF1S6oar4/4GOONObXOGWh6PJ8F38tJV1xG',NULL,NULL,'Active'),(131,NULL,'admin','twix','$2y$10$oIUXtxhZecPtLPYCKyxDmeptuArm3BC43VNzyI',NULL,NULL,'Active'),(132,NULL,'admin','twix','$2y$10$E4F/dNXeP7ua6/fDTnz2DOl1Wz1tiqnnlz565v',NULL,NULL,'Active'),(133,NULL,'admin','twix','$2y$10$FXUq6gd9iNDudkI4IljJceXqmaGbfgeSDgUXLz',NULL,NULL,'Active'),(134,NULL,'admin','twix','$2y$10$rxwKTGGfsREuwpcDO9eom.Kia.oxC8L2Ka97Y3',NULL,NULL,'Active'),(135,NULL,'admin','twix','$2y$10$AWmxjChqzI.BID1T.0yF2u9bLlboCSoOUDT5kZ',NULL,NULL,'Active'),(136,NULL,'admin','twix','$2y$10$IjlLuiUPwR36x2GfcRU2WemzTsEhVHrajsJYfo',NULL,NULL,'Active'),(137,NULL,'admin','hope','$2y$10$wNmy8MKRooAihJeSLoxTfe8UsquS9ilhLtdvgS',NULL,NULL,'Active'),(138,NULL,'admin','hope','$2y$10$lfwA3gi0b0I9YsXskdyiKOkNc3ViIRrKr.TD22',NULL,NULL,'Active'),(139,NULL,'employee','hello','$2y$10$WvVy3JWNvbOuGo7F.q8Uu.NmqbBSLIwSi4fLS6',NULL,NULL,'Active'),(140,NULL,'cashier','what','$2y$10$0V0QaHFNaplO3GwFdKqFaOk.JGjcorups6xYq/',NULL,NULL,'Active'),(141,NULL,'cashier','what','$2y$10$RFidCqLZJ8VXTRBtmyYcMeH9loMZwYHfkzHy9m',NULL,NULL,'Active'),(142,NULL,'cashier','what','$2y$10$VEem4wn4tIxyx7HHyFNvOevlnhrUwLoP9C2RE8',NULL,NULL,'Active'),(143,NULL,'','','$2y$10$XoA5hPDUeUDsTPfeOL7fQ.XvkxeXDMMvABDNNc',NULL,NULL,'Active'),(144,NULL,'','','$2y$10$DHdoPW3PBa85gAZRmn5x6OEaOTRt69W3aT4D95',NULL,NULL,'Active'),(145,NULL,'','','$2y$10$Jo6DIZL1m6GwmaHX40xk4.kd9jXlyxjueXTrO/',NULL,NULL,'Active'),(146,NULL,'','','$2y$10$Gbn4sQ00Q0aGL17/AGGPmeViliQgZSz5qwNAs5',NULL,NULL,'Active'),(147,NULL,'cashier','twix','$2y$10$w8oiNdreoNQazIeldJ3fA.TdNIj0vLpUFnODfw',NULL,NULL,'Active'),(148,'Arellano','Admin','twix','$2y$10$4WY4NTylFe81J5b9wIJ5A.ODfxkpycvIU1U6Ge','ishabianca@gmail.com',NULL,'Active'),(149,'Patricia Arellano','cashier','potcor','$2y$10$Z0mYqB1E5tKcvjkZiwQ.Ze1ndPap/X2QW3tlmw','patriciabianca2424@gmail.com',NULL,'Active'),(150,'Patricia Arellano','cashier','potcor','$2y$10$ZJzAh1GwsUihfQDb3GdLuOn/I46G.oXMmmaEb7','patriciabianca2424@gmail.com',NULL,'Active'),(151,'Patricia Arellano','cashier','potcor','$2y$10$.h0P5caYPiOyyBsi5tnQKeEwAylNkkX9YZ5A4K','patriciabianca2424@gmail.com',NULL,'Active'),(152,'Trisha','Employee','patricia','$2y$10$PlCu58e9T5jatQCadwPK7eBzqXB9d8ILMot1oc','ishabianca@gmail.com',NULL,'Active'),(153,'','','','$2y$10$aPmp2cuyhgQAqAKc7jUYAe1A5HuPyENcqWVI/V','',NULL,'Active'),(154,'Patricia Bianca','employee','icia','$2y$10$oiBcE4gwClqa594V05tYP.uAn6V1jsl3wvI34d','triciaa.arellano@gmail.com',NULL,'Inactive'),(155,'tricia biancaa','employee','icha','$2y$10$NKG2Hyw6psWtLoJ1gBraFu9QxDBh/sB1.BH81r','triciaa.arellano@gmail.com',NULL,'Inactive'),(156,'tricia bianca arellano','Employee','tribia','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',180753,'Inactive'),(157,'tricia garganta','Employee','garganta','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',511592,'Inactive'),(158,'tricia garganta','Employee','garganta','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',4184,'Inactive'),(159,'patricia bianca','Employee','ishabiancanton','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(160,'bianca patricia','employee','biancanton','$2y$10$ya.VETm0ess6TRUzPtvM5uqy/Znu8MeeVc4C6g','triciaa.arellano@gmail.com',NULL,'Inactive'),(161,'dhashd','admin','asda','$2y$10$tIpBK038GG5KWWx64dRJauAUOKuigUQF6UMjRw','triciaa.arellano@gmail.com',NULL,'Inactive'),(162,'gfdg','admin','fgdg','$2y$10$IbiBT0q2FPSudKqRPx.lselkd8CeNF2FVst22I','triciaa.arellano@gmail.com',NULL,'Inactive'),(163,'triciabiancakess','Employee','biancaur','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(164,'Patricia Arellano','admin','rahahah','$2y$10$YniCII45ijlC.Y5DzR6D3u4Em5PCFI0YMpCG3M','triciaa.arellano@gmail.com',NULL,'Active'),(165,'Bianca','Employee','rerere','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(166,'maria filipinas','admin','fili','$2y$10$n4bi55cWhXlhHnK2h1XUtueukvnU2K9nLK5/oq','triciaa.arellano@gmail.com',NULL,'Active'),(167,'maria filipinas','admin','rahahaha','$2y$10$VaiLm0DecsMaRcZ/loFbWejEqRVGRUSG5K5kmw','triciaa.arellano@gmail.com',NULL,'Active'),(168,'tomasino','Admin','rawr','$2y$10$GdeRILx4sXtCWBjY5vGVM.GT8ub40tMUJj.Lqu','triciaa.arellano@gmail.com',NULL,'Active'),(169,'Patricia Arellano','Cashier','star','$2y$10$JZzwsAPXeK5viwOdmZXKoem6BG33Hk.oGK845n','triciaa.arellano@gmail.com',NULL,'Active'),(170,'Biancaure','admin','ianca','$2y$10$Idk39M2U074q5XoGWk467eI7i7s3THHp6h6SM/','triciaa.arellano@gmail.com',NULL,'Inactive'),(171,'Biancaaa','admin','boink','$2y$10$e1xqfyCKRTdkW0YPQWHsHOtUGIXWMTKyGi6D0P','triciaa.arellano@gmail.com',NULL,'Inactive'),(172,'Bianca','admin','34233','$2y$10$8m86P7p221CgyvGin7/o.ehUZcxLeE6RfiyyrU','triciaa.arellano@gmail.com',NULL,'Inactive'),(173,'dfsf','admin','hopee','$2y$10$500r9vd6wENXfnlHuSXF1e0l7ABTkr6kdpZKMI','triciaa.arellano@gmail.com',NULL,'Inactive'),(174,'Bianca','admin','twixy','$2y$10$peIcjF9dyjyjTSpMkAiX5eC4tO5oEoefDOp04K','triciaa.arellano@gmail.com',NULL,'Inactive'),(175,'Patricia Arellano','admin','twixwewwaewae','$2y$10$ldDm0bGV..ORhVBG4d875.pMPAZQS86UEsM.Tl','triciaa.arellano@gmail.com',NULL,'Inactive'),(176,'Patricia Arellano','admin','sffsdfsd','$2y$10$dndSPkPamRAz/0wnimZUWePXlSUJryBAvk/D9a','triciaa.arellano@gmail.com',NULL,'Inactive'),(177,'maria filipinas','admin','fefefe','$2y$10$4JbN45TVUUkEULkAmx5gaetPxO9TfuZ/zd56MF','triciaa.arellano@gmail.com',NULL,'Inactive'),(178,'wakki de asis','admin','waks','$2y$10$6YOIm.jLcmUskRLjE1Vif.gcb7Av8hIaEtsDgo','triciaa.arellano@gmail.com',NULL,'Inactive'),(179,'Biancaaaa','admin','asdasdad','$2y$10$30j25HfUgHi5woYXJz1Wou7xvZwZ0JALetXfy2','triciaa.arellano@gmail.com',NULL,'Inactive'),(180,'tricia bianca garganta','employee','yaoyao','$2y$10$aal4DES1j.TVGjcVAyxJfOUaRYRR08tyv6xihm','triciaa.arellano@gmail.com',NULL,'Inactive'),(181,'Patricia Arellano','Employee','wewew','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(182,'Biancaaa','admin','swswsw','$2y$10$0ChH998YlK6F.Fv1ahQP8uQLSwG3/iZxEOeWFY','triciaa.arellano@gmail.com',NULL,'Active'),(183,'garganda','admin','garganda','$2y$10$XxL/DDnkl3Wu7VoJlm6uGebGGHeFIEAnJeRmKL','triciaa.arellano@gmail.com',NULL,'Active'),(184,'trishacakes','Admin','trishacakes','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(185,'biancacakes','admin','biancacakes','$2y$10$CPYgzUujaR8qg8Fpefakn.j0MZSI5SoKNaifCd','triciaa.arellano@gmail.com',NULL,'Active'),(186,'parellano','Admin','parellanow','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(187,'Bianca','Admin','DI NA GUMANA','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(188,'Patricia Arellano','admin','123123','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',129887,'Inactive'),(189,'faksdada','Admin','bad','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(190,'asdada','Employee','work','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(191,'hghg','Admin','kjk','17cedeccc3a6555b9a5826e4d726eae3','triciaa.arellano@gmail.com',217285,'Inactive'),(192,'twixchuya','Employee','twix','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',690006,'Inactive'),(193,'trishuya','Employee','trishcashier','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',74641,'Inactive'),(194,'trishuya','Employee','trishcashier','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(195,'patriciaaa','Cashier','tricia123','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(196,'tricia bianca','Employee','flurry','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',267118,'Inactive'),(197,'tricia bianca','Employee','flurry','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',190440,'Inactive'),(198,'tricia bianca','Admin','work','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(199,'twish','Employee','fury','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',687120,'Inactive'),(200,'twish','Employee','fury','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(201,'Patricia Arellano','Cashier','cake','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(202,'Bianca','Employee','change','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(203,'tricia bianca','Cashier','yehey','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(204,'patricia bianca arellano','Employee','trisha','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(205,'cha eunwoo','Employee','cha','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(207,'Patricia Bianca','Employee','biancaur','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',70744,'Inactive'),(208,'Patricia Bianca','Employee','biancaur','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(209,'Tricia Arellano','Employee','triciax','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',564266,'Inactive'),(210,'Tricia Arellano','Employee','triciax','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',336252,'Inactive'),(211,'Tricia Arellano','Employee','triciax','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(212,'Tricia Arellano','Employee','triciaxx','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',70090,'Inactive'),(213,'Tricia Arellano','Employee','triciaxx','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(214,'Tricia Arellano','Employee','tri','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',806595,'Inactive'),(215,'dasda','Admin','asdas','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active'),(216,'arellano','Employee','arell','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',984372,'Inactive'),(217,'arellano','Employee','arell','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(218,'tritri',NULL,'tri','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(219,'Tricia','Admin','biancaurrr','202cb962ac59075b964b07152d234b70','patriciabianca2424@gmail.com',NULL,'Active'),(220,'Patricia ','Employee','garga','202cb962ac59075b964b07152d234b70','triciaa.arellano@gmail.com',NULL,'Active');
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
/*!50001 VIEW `join_sales_table` AS select `s`.`sales_id` AS `sales_id`,`t`.`receipt_number` AS `receipt_number`,`s`.`total_quantity` AS `total_quantity`,`s`.`total_amount` AS `total_amount`,`s`.`payment_method` AS `payment_method`,`s`.`sales_date` AS `sales_date` from (`sales_table` `s` join `transaction_table` `t` on(`s`.`transaction_id` = `t`.`transaction_id`)) */;
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
/*!50001 VIEW `join_transaction_table` AS select `t`.`transaction_id` AS `transaction_id`,`pt`.`product_id` AS `product_id`,`pt`.`price` AS `price`,`t`.`quantity_sold` AS `quantity_sold`,`t`.`reference_number` AS `reference_number`,`t`.`receipt_number` AS `receipt_number`,`t`.`status` AS `status`,`t`.`transaction_date` AS `transaction_date` from (`product_table` `pt` join `transaction_table` `t` on(`pt`.`product_id` = `t`.`product_id`)) */;
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

-- Dump completed on 2024-05-29 23:49:46
