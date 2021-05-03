-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: cardb
-- ------------------------------------------------------
-- Server version	8.0.24

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
-- Table structure for table `carlist`
--

DROP TABLE IF EXISTS `carlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carlist` (
  `idCar` int NOT NULL,
  `model` varchar(45) DEFAULT NULL,
  `carType` varchar(45) DEFAULT NULL,
  `carImg` varchar(100) DEFAULT NULL,
  `cost` decimal(16,2) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carlist`
--

LOCK TABLES `carlist` WRITE;
/*!40000 ALTER TABLE `carlist` DISABLE KEYS */;
INSERT INTO `carlist` VALUES (1,'Burger','Compact','carPics/pattyWagon.jpg',5000.00,'Patty Wagon'),(2,'Smart','Compact','carPics/smartCar.jpg',1.00,'Smart Car 2049'),(3,'Honda','Compact','carPics/hondaCivic.jpg',60.00,'Civic Honda'),(4,'Hotwheel','Sport','carPics/moneyCar',9999.00,'Max Speed M.92'),(5,'Audi','Sport','carPics/audiCar.jpg',2.00,'Audi R99'),(6,'Flat','SUV','carPics/bigmoneySUV.jpg',7000.00,'2D ForeRunner'),(7,'Candy','SUV','carPics/bigVan.jpg',400.00,'Contract Worker'),(8,'Jeep','SUV','carPics/jeep.jpg',600.00,'Wrangler'),(9,'Toyota','SUV','carPics/toyotaVan.jpg',30.00,'Soccer Van'),(10,'Limo','SUV','carPics/limo.jpg',50.00,'Prom Night');
/*!40000 ALTER TABLE `carlist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-02 21:12:34
