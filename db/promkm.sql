-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: promkm
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `kasir`
--

DROP TABLE IF EXISTS `kasir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kasir` (
  `id_kasir` int NOT NULL AUTO_INCREMENT,
  `id_barang` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `quantity` int NOT NULL,
  `status` enum('LUNAS','BELUM LUNAS') DEFAULT NULL,
  `status_bayar` tinyint(1) DEFAULT '1',
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_kasir`),
  KEY `fk_sales_barang` (`id_barang`),
  KEY `fk_kasir_users` (`id_user`),
  CONSTRAINT `kasir_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `stock` (`id`),
  CONSTRAINT `kasir_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kasir`
--

LOCK TABLES `kasir` WRITE;
/*!40000 ALTER TABLE `kasir` DISABLE KEYS */;
INSERT INTO `kasir` VALUES (1,10,10,5,'LUNAS',0,NULL),(2,13,10,7,'BELUM LUNAS',0,NULL),(3,9,10,5,NULL,0,'2022-12-17'),(4,9,10,8,NULL,0,'2022-12-17'),(5,9,10,3,'BELUM LUNAS',0,NULL),(6,9,10,1,'LUNAS',0,'2022-12-17'),(7,10,10,3,'LUNAS',0,'2022-12-17'),(8,13,10,1,'LUNAS',0,'2022-12-17'),(9,13,10,1,'LUNAS',0,'2022-12-17'),(10,9,10,1,'LUNAS',0,'2022-12-17'),(11,10,10,12,'LUNAS',0,'2022-12-17'),(12,15,8,5,'LUNAS',0,'2022-12-17'),(13,16,8,5,'LUNAS',0,'2022-12-17'),(14,17,8,7,'LUNAS',0,'2022-12-17'),(15,10,10,4,'LUNAS',0,'2022-12-17'),(16,11,10,10,'LUNAS',0,'2022-12-17'),(17,9,10,10,'LUNAS',1,'2022-12-18'),(18,9,10,3,'LUNAS',1,'2022-12-18'),(19,10,10,10,'LUNAS',1,'2022-12-18'),(20,11,10,30,'LUNAS',1,'2022-12-18');
/*!40000 ALTER TABLE `kasir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stock` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `harga_beli` int NOT NULL,
  `harga_jual` int NOT NULL,
  `barcode` varchar(25) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_s_u` (`id_user`),
  CONSTRAINT `fk_s_u` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` VALUES (1,NULL,'sdsadasd',1000,10000,'34222',12,NULL,NULL,NULL),(2,NULL,'Nasi Bakar',10000,10000,'2332',30,NULL,NULL,NULL),(3,NULL,'Nasi Campur',0,0,NULL,NULL,NULL,NULL,NULL),(4,3,'Nasi Campur maz',10000,11000,NULL,NULL,NULL,NULL,NULL),(5,NULL,'Miyopi',120000,150000,'234f34',30,NULL,NULL,NULL),(7,9,'BIng',100000,2000000,'3434ff',21,NULL,NULL,NULL),(8,9,'Banana',5000,1000000,'123fd',1,NULL,NULL,NULL),(9,10,'Nasi Uduk',1000,15000000,'3456',4,NULL,NULL,'2022-12-18 00:18:01'),(10,10,'Bakar Ayam',400000,450000,'342444',26,NULL,'2022-12-15 15:03:37','2022-12-18 00:05:39'),(11,10,'Bakar Ayam Spesial',45000,500000,'54321',10,NULL,'2022-12-15 16:28:12','2022-12-18 00:07:14'),(12,NULL,'',0,0,'1234',90,NULL,'2022-12-15 16:54:46','2022-12-15 23:54:46'),(13,10,'Nasi kuning Bakar',123000,2340,'42343',10,NULL,'2022-12-15 17:27:21','2022-12-17 02:36:10'),(14,8,'Pisang',10000,15000,'123',50,NULL,'2022-12-17 06:51:20','2022-12-17 13:51:20'),(15,8,'Pizza',30000,40000,'123',2,NULL,'2022-12-17 06:51:38','2022-12-17 13:51:38'),(16,8,'Efek Gedang Klotok',20000,50000,'123',22,NULL,'2022-12-17 06:52:08','2022-12-17 13:52:08'),(17,8,'PisCOK',10000,50000,'123',2,NULL,'2022-12-17 06:52:44','2022-12-17 13:52:44'),(18,8,'Kepala Banteng Merah',50000,2000,'123',10,NULL,'2022-12-17 06:53:30','2022-12-17 13:53:48'),(19,10,'Poster',30000,35000,'43',12,'1671351746_19333d00f714dd9f8bdf.jpeg','2022-12-17 19:22:26','2022-12-18 02:22:26');
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `umkm` varchar(100) NOT NULL,
  `sosmed` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'galeh','kigaleh321@gmail.com','','123','nasi bakar',NULL),(2,'galeh','kigaleh321@gmail.com','088888888888','123','nasi bakar',NULL),(3,'Ariya','3130021003@student.unusa.ac.id','32423424234','','nasi',NULL),(4,'Nanda','3130021007@student.unusa.ac.id','2323232323','','nasi',NULL),(5,'ain','3130021001@student.unusa.ac.id','2323232323','234','nasi kuning',NULL),(6,'ainul','3130021002@student.unusa.ac.id','2323232323','2456','kuning',NULL),(7,'sdsd','s@gmail.com','434','','dsdsd',NULL),(8,'india','b@gmail.com','23232323','54321','jasuke',NULL),(9,'budi','bud@gmail.com','0987634634','123','KEPO',NULL),(10,'nin','ki@gmail.com','234234234','123','entahlah',NULL);
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

-- Dump completed on 2022-12-18 15:39:21
