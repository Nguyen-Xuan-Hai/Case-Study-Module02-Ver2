CREATE DATABASE  IF NOT EXISTS `case_study` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `case_study`;
-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: case_study
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

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
-- Table structure for table `BILL_DETAILS`
--

DROP TABLE IF EXISTS `BILL_DETAILS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `BILL_DETAILS` (
  `Bill_id` int NOT NULL AUTO_INCREMENT,
  `Bill_date` date DEFAULT NULL,
  `Amount` int DEFAULT NULL,
  `Discount` int DEFAULT NULL,
  `Total` int DEFAULT NULL,
  `Usr_id` int DEFAULT NULL,
  `Trip_id` int DEFAULT NULL,
  PRIMARY KEY (`Bill_id`),
  KEY `fkbdtd` (`Trip_id`),
  KEY `fkbdusr` (`Usr_id`),
  CONSTRAINT `BILL_DETAILS_ibfk_1` FOREIGN KEY (`Trip_id`) REFERENCES `TRIP_DETAILS` (`Trip_id`),
  CONSTRAINT `BILL_DETAILS_ibfk_2` FOREIGN KEY (`Usr_id`) REFERENCES `USER_TBL` (`Usr_id`),
  CONSTRAINT `fkbdtd` FOREIGN KEY (`Trip_id`) REFERENCES `TRIP_DETAILS` (`Trip_id`) ON DELETE CASCADE,
  CONSTRAINT `fkbdusr` FOREIGN KEY (`Usr_id`) REFERENCES `USER_TBL` (`Usr_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BILL_DETAILS`
--

LOCK TABLES `BILL_DETAILS` WRITE;
/*!40000 ALTER TABLE `BILL_DETAILS` DISABLE KEYS */;
INSERT INTO `BILL_DETAILS` VALUES (1,'2021-03-05',300000,0,100000,1,1),(2,'2021-03-18',19999999,0,20000,5,4);
/*!40000 ALTER TABLE `BILL_DETAILS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DRIVER`
--

DROP TABLE IF EXISTS `DRIVER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `DRIVER` (
  `Driver_id` int NOT NULL AUTO_INCREMENT,
  `F_name` varchar(10) DEFAULT NULL,
  `L_name` varchar(20) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Conatct_no` varchar(20) DEFAULT NULL,
  `Rating` int DEFAULT NULL,
  `Age` int DEFAULT NULL,
  `Experience` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Driver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DRIVER`
--

LOCK TABLES `DRIVER` WRITE;
/*!40000 ALTER TABLE `DRIVER` DISABLE KEYS */;
INSERT INTO `DRIVER` VALUES (2,'Dương','Văn','Male','0368153221',5,28,'2 năm'),(3,'Lê','Vãn','Male','0368153921	',4,26,'5 năm'),(4,'Ngọc','Nam','Male','03541532321',5,26,'2 năm'),(8,'Dương','Thường','Male','03541532321',4,35,'8 năm'),(12,'Mãn','Thường','FeMale','03612875682',4,40,'15 năm'),(16,'Mãn','Văn','Male','03612875682',3,4,'3 năm'),(19,'Dương','Nam','Male','03612875682',3,243,'3 năm'),(28,'Dương','Nam','Male','0368153921',4,26,'12 nam');
/*!40000 ALTER TABLE `DRIVER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FEEDBACK`
--

DROP TABLE IF EXISTS `FEEDBACK`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `FEEDBACK` (
  `Fbk_id` int NOT NULL AUTO_INCREMENT,
  `Message` varchar(140) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Ufb_id` int DEFAULT NULL,
  `Usr_id` int DEFAULT NULL,
  `Trip_id` int DEFAULT NULL,
  PRIMARY KEY (`Fbk_id`),
  KEY `fkfbufb` (`Ufb_id`),
  KEY `fkfbtd` (`Trip_id`),
  KEY `fkfbusr` (`Usr_id`),
  CONSTRAINT `FEEDBACK_ibfk_1` FOREIGN KEY (`Ufb_id`) REFERENCES `USER_FB` (`Ufb_id`),
  CONSTRAINT `FEEDBACK_ibfk_2` FOREIGN KEY (`Trip_id`) REFERENCES `TRIP_DETAILS` (`Trip_id`),
  CONSTRAINT `FEEDBACK_ibfk_3` FOREIGN KEY (`Usr_id`) REFERENCES `USER_TBL` (`Usr_id`),
  CONSTRAINT `fkfbtd` FOREIGN KEY (`Trip_id`) REFERENCES `TRIP_DETAILS` (`Trip_id`) ON DELETE CASCADE,
  CONSTRAINT `fkfbufb` FOREIGN KEY (`Ufb_id`) REFERENCES `USER_FB` (`Ufb_id`) ON DELETE CASCADE,
  CONSTRAINT `fkfbusr` FOREIGN KEY (`Usr_id`) REFERENCES `USER_TBL` (`Usr_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FEEDBACK`
--

LOCK TABLES `FEEDBACK` WRITE;
/*!40000 ALTER TABLE `FEEDBACK` DISABLE KEYS */;
INSERT INTO `FEEDBACK` VALUES (1,'service very good','anvan@gmail.com',1,1,1);
/*!40000 ALTER TABLE `FEEDBACK` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TAXI`
--

DROP TABLE IF EXISTS `TAXI`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `TAXI` (
  `Taxi_id` int NOT NULL AUTO_INCREMENT,
  `License_plates` varchar(20) DEFAULT NULL,
  `Model` varchar(20) DEFAULT NULL,
  `Year` date DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Color` varchar(20) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Driver_id` int DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Taxi_id`),
  UNIQUE KEY `License_plates` (`License_plates`),
  UNIQUE KEY `License_plates_2` (`License_plates`),
  KEY `fketadr` (`Driver_id`),
  CONSTRAINT `fketadr` FOREIGN KEY (`Driver_id`) REFERENCES `DRIVER` (`Driver_id`) ON DELETE CASCADE,
  CONSTRAINT `TAXI_ibfk_1` FOREIGN KEY (`Driver_id`) REFERENCES `DRIVER` (`Driver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TAXI`
--

LOCK TABLES `TAXI` WRITE;
/*!40000 ALTER TABLE `TAXI` DISABLE KEYS */;
INSERT INTO `TAXI` VALUES (1,'30-V555555','FR2000','2000-01-01','4 seat','Yelow','active',1,'anh3.jpg'),(2,'40-V222222','BEN2000','2021-03-05','7 seat','Blue','active',2,'anh4.jpg'),(3,'40-V3651902','BEN2000','2021-03-25','7 seat','White','active',3,'anh2.jpg'),(4,'40-V3753216','ROY2000','2021-03-11','7 seat','White','active',4,'anh2.jpg'),(70,'40-Ve23524355','ROY300','2021-03-12','4 Seat','White','Active',12,'anh1.jpg'),(72,'15-V1231241','ROY300','2021-03-26','7 Seat','Yellow','Active',16,'diagrams.png');
/*!40000 ALTER TABLE `TAXI` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRIP_DETAILS`
--

DROP TABLE IF EXISTS `TRIP_DETAILS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `TRIP_DETAILS` (
  `Trip_id` int NOT NULL AUTO_INCREMENT,
  `Trip_date` date DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `Driver_id` int DEFAULT NULL,
  `Usr_id` int DEFAULT NULL,
  `Taxi_id` int DEFAULT NULL,
  `Strt_time` datetime DEFAULT NULL,
  `End_time` datetime DEFAULT NULL,
  `Location_start` varchar(50) DEFAULT NULL,
  `Location_end` varchar(50) DEFAULT NULL,
  `Customer_number` int DEFAULT NULL,
  `Status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Trip_id`),
  KEY `fktddr` (`Driver_id`),
  KEY `fktdusr` (`Usr_id`),
  KEY `fktdtax` (`Taxi_id`),
  CONSTRAINT `fktddr` FOREIGN KEY (`Driver_id`) REFERENCES `DRIVER` (`Driver_id`) ON DELETE CASCADE,
  CONSTRAINT `fktdtax` FOREIGN KEY (`Taxi_id`) REFERENCES `TAXI` (`Taxi_id`) ON DELETE CASCADE,
  CONSTRAINT `fktdusr` FOREIGN KEY (`Usr_id`) REFERENCES `USER_TBL` (`Usr_id`) ON DELETE CASCADE,
  CONSTRAINT `TRIP_DETAILS_ibfk_1` FOREIGN KEY (`Driver_id`) REFERENCES `DRIVER` (`Driver_id`),
  CONSTRAINT `TRIP_DETAILS_ibfk_2` FOREIGN KEY (`Usr_id`) REFERENCES `USER_TBL` (`Usr_id`),
  CONSTRAINT `TRIP_DETAILS_ibfk_3` FOREIGN KEY (`Taxi_id`) REFERENCES `TAXI` (`Taxi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRIP_DETAILS`
--

LOCK TABLES `TRIP_DETAILS` WRITE;
/*!40000 ALTER TABLE `TRIP_DETAILS` DISABLE KEYS */;
INSERT INTO `TRIP_DETAILS` VALUES (1,'2020-03-16','30000/h',2,1,2,'2020-03-16 07:05:00','2020-03-16 10:05:00','Số 256 Đường Láng','Số 300 Đường Nguyễn Văn Cừ',3,'Cancelled'),(3,'2021-03-04','30000/h',3,2,3,'2021-03-04 12:26:00','2021-03-04 19:26:00','Số 1000 đường Giải Phóng - Hoàng Mai-Hà Nội','Số 21 đường Hải Bối- Đông Anh-Hà Nội',6,'Resolved'),(4,'2021-03-18','50000/h',4,5,4,'2021-03-17 19:32:00','2021-03-23 21:33:00','Số 56 Đường Láng','Số 21 đường Hải Bối- Đông Anh-Hà Nội',4,'In Process');
/*!40000 ALTER TABLE `TRIP_DETAILS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER_FB`
--

DROP TABLE IF EXISTS `USER_FB`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `USER_FB` (
  `Ufb_id` int NOT NULL AUTO_INCREMENT,
  `F_name` varchar(20) DEFAULT NULL,
  `L_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Ufb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER_FB`
--

LOCK TABLES `USER_FB` WRITE;
/*!40000 ALTER TABLE `USER_FB` DISABLE KEYS */;
INSERT INTO `USER_FB` VALUES (1,'A','Nguyên Văn');
/*!40000 ALTER TABLE `USER_FB` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER_TBL`
--

DROP TABLE IF EXISTS `USER_TBL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `USER_TBL` (
  `Usr_id` int NOT NULL AUTO_INCREMENT,
  `F_name` varchar(20) DEFAULT NULL,
  `L_name` varchar(20) DEFAULT NULL,
  `Contat_no` int DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Taxi_id` int DEFAULT NULL,
  `Age` int DEFAULT NULL,
  PRIMARY KEY (`Usr_id`),
  KEY `fkusta` (`Taxi_id`),
  CONSTRAINT `fkusta` FOREIGN KEY (`Taxi_id`) REFERENCES `TAXI` (`Taxi_id`) ON DELETE CASCADE,
  CONSTRAINT `USER_TBL_ibfk_1` FOREIGN KEY (`Taxi_id`) REFERENCES `TAXI` (`Taxi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER_TBL`
--

LOCK TABLES `USER_TBL` WRITE;
/*!40000 ALTER TABLE `USER_TBL` DISABLE KEYS */;
INSERT INTO `USER_TBL` VALUES (1,'Văn','An',125567859,'Male','Hà Đông',3,26),(2,'Mãn','Văn',178569231,'Male','Nam Định',2,18),(5,'Vệ','Văn',214324232,'FeMale','1234234',4,1324);
/*!40000 ALTER TABLE `USER_TBL` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `v_taxi`
--

DROP TABLE IF EXISTS `v_taxi`;
/*!50001 DROP VIEW IF EXISTS `v_taxi`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `v_taxi` AS SELECT 
 1 AS `License_plates`,
 1 AS `Model`,
 1 AS `Year`,
 1 AS `Type`,
 1 AS `Color`,
 1 AS `Status`,
 1 AS `Image`,
 1 AS `Driver_id`,
 1 AS `F_name`,
 1 AS `L_name`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `v_taxi`
--

/*!50001 DROP VIEW IF EXISTS `v_taxi`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf16_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_taxi` AS select `TAXI`.`License_plates` AS `License_plates`,`TAXI`.`Model` AS `Model`,`TAXI`.`Year` AS `Year`,`TAXI`.`Type` AS `Type`,`TAXI`.`Color` AS `Color`,`TAXI`.`Status` AS `Status`,`TAXI`.`Image` AS `Image`,`DRIVER`.`Driver_id` AS `Driver_id`,`DRIVER`.`F_name` AS `F_name`,`DRIVER`.`L_name` AS `L_name` from (`TAXI` join `DRIVER` on((`TAXI`.`Driver_id` = `DRIVER`.`Driver_id`))) */;
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

-- Dump completed on 2021-03-15 20:50:26
