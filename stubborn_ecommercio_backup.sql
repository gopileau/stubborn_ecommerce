-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: stubborn_ecommercio
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CART_USER` (`user_id`),
  CONSTRAINT `FK_CART_USER` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Category 1'),(2,'Category 2');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20250131200105','2025-03-30 12:44:55',20),('DoctrineMigrations\\Version20250131200617','2025-03-30 12:44:55',148),('DoctrineMigrations\\Version20250131222210','2025-03-30 12:44:56',64),('DoctrineMigrations\\Version20250205232143','2025-03-30 12:44:56',237),('DoctrineMigrations\\Version20250205232144','2025-03-30 12:44:56',1),('DoctrineMigrations\\Version20250205232145','2025-03-30 12:44:56',4),('DoctrineMigrations\\Version20250205232147','2025-03-30 12:44:56',81);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sizes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`sizes`)),
  `price` double NOT NULL,
  `stock` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`stock`)),
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D34A04AD12469DE2` (`category_id`),
  CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,1,'Blackbelt','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',29.9,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',1,'images/Blackbelt.jpeg','Description du produit Blackbelt'),(2,1,'BlueBelt','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',29.9,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',0,'images/BlueBelt.jpeg','Description du produit BlueBelt'),(3,2,'Street','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',34.5,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',0,'images/Street.jpeg','Description du produit Street'),(4,2,'Pokeball','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',45,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',1,'images/Pokeball.jpeg','Description du produit Pokeball'),(5,1,'Blackbelt','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',29.9,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',1,'images/Blackbelt.jpeg','Description du produit Blackbelt (duplicate)'),(6,1,'BlueBelt','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',29.9,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',0,'images/BlueBelt.jpeg','Description du produit BlueBelt (duplicate)'),(7,2,'Street','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',34.5,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',0,'images/Street.jpeg','Description du produit Street (duplicate)'),(8,2,'Pokeball','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',45,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',1,'images/Pokeball.jpeg','Description du produit Pokeball (duplicate)'),(9,1,'PinkLady','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',29.9,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',0,'images/PinkLady.jpeg','Description du produit PinkLady'),(10,1,'Snow','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',32,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',0,'images/Snow.jpeg','Description du produit Snow'),(11,2,'Greyback','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',28.5,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',0,'images/Greyback.jpeg','Description du produit Greyback'),(12,2,'BlueCloud','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',45,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',0,'images/BlueCould.jpeg','Description du produit BlueCloud'),(13,1,'BornInUsa','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',59.9,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',1,'images/BornInUsa.jpeg','Description du produit BornInUsa'),(14,2,'GreenSchool','[\"XS\", \"S\", \"M\", \"L\", \"XL\"]',42.2,'{\"XS\": 2, \"S\": 2, \"M\": 2, \"L\": 2, \"XL\": 2}',0,'images/GreenSchool.jpeg','Description du produit GreenSchool');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'laura','lauravgonzalez99@gmail.com','$2y$13$hHAdkPm5N0rckBBbNFzRmOkL1w0ICq1yOmwxiApjacruE2dHSml9e','94 rue de courcelles','[\"ROLE_USER\"]');
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

-- Dump completed on 2025-03-30 13:53:47
