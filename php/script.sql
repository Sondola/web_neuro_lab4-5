-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: lab45
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `basket`
--

DROP TABLE IF EXISTS `basket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `basket` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_basket` int NOT NULL,
  `id_product` int NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `amount` int NOT NULL DEFAULT '1',
  `price` varchar(100) NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `delivery` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=980 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basket`
--

LOCK TABLES `basket` WRITE;
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fio` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `img_products`
--

DROP TABLE IF EXISTS `img_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `img_products` (
  `id_img` int NOT NULL AUTO_INCREMENT,
  `id_product` int DEFAULT NULL,
  `path` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img_products`
--

LOCK TABLES `img_products` WRITE;
/*!40000 ALTER TABLE `img_products` DISABLE KEYS */;
INSERT INTO `img_products` VALUES (76,74,'kaktus-plants-1.jpg',1),(77,75,'kecubung-plants-1.jpg',1),(79,77,'kecubung-plants2-2.jpg',1),(80,78,'kecubung-plants3-1.jpg',1),(81,79,'kecubung-plants3-2.jpg',1),(88,68,'kaktus-plants.jpg',1),(89,69,'landak-plants.jpg',1),(90,70,'kecubung-plants.jpg',1),(91,71,'kecubung-plants2.jpg',1),(92,72,'kecubung-plants3.jpg',1);
/*!40000 ALTER TABLE `img_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id_product` int NOT NULL AUTO_INCREMENT,
  `name_product` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (68,'Kaktus Plants','Kaktus are peculiar prickly plants that have adapted to life in arid deserts, on the barren plateaus of southern countries, belonging to the extensive cactus family.',85,1,'2023-05-30 15:06:20','2023-05-30 12:06:20'),(69,'Landak Plants','In nature, the landak blooms every 2-3 years, in pots – every 10-20 years. Flowering occurs mainly in spring, but it also happens in summer. ',105,1,'2023-05-30 15:13:14','2023-05-30 12:13:14'),(70,'Kecubung Plants','An indoor flower grows well at home, but rarely pleases with inflorescences.',85,1,'2023-05-30 15:14:14','2023-05-30 12:14:14'),(71,'Kecbung Plunts','It develops well and grows in the shade, but in summer it prefers places where there is a lot of light, but direct sunlight does not reach there, especially at the peak of solar activity.',85,1,'2023-05-30 15:15:56','2023-05-30 12:18:32'),(72,'Kecubung Plants','The plant has a small root system and heavy fleshy leaves. It is not necessary to choose narrow and high capacities for it. This vessel will fall under the weight of the foliage.',85,1,'2023-05-30 15:19:53','2023-05-30 12:19:53');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(20) DEFAULT NULL,
  `admin` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (60,'user1','user1@gmail.com','user1',1,NULL,'user1',0),(61,'user2','user2@gmail.com','user2',1,NULL,'user2',0),(62,'user3','user3@gmail.com','user3',1,'2023-11-28 23:54:08','user3',0),(63,'admin','admin@gmail.com','admin',1,'2023-05-30 20:13:33','admin_main',1);
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

-- Dump completed on 2023-05-30 12:44:04