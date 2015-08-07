-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: co4la
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

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
-- Table structure for table `allowances`
--

DROP TABLE IF EXISTS `allowances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `allowances` (
  `role_id` int(10) unsigned NOT NULL,
  `privilege_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`role_id`,`privilege_id`),
  KEY `allowances_privilege_id_foreign` (`privilege_id`),
  CONSTRAINT `allowances_privilege_id_foreign` FOREIGN KEY (`privilege_id`) REFERENCES `privileges` (`id`) ON DELETE CASCADE,
  CONSTRAINT `allowances_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allowances`
--

LOCK TABLES `allowances` WRITE;
/*!40000 ALTER TABLE `allowances` DISABLE KEYS */;
INSERT INTO `allowances` VALUES (1,1,'2015-07-24 10:45:44','2015-07-24 10:45:44'),(1,2,'2015-07-24 10:45:44','2015-07-24 10:45:44'),(1,3,'2015-07-24 10:45:44','2015-07-24 10:45:44'),(1,4,'2015-07-24 10:45:44','2015-07-24 10:45:44'),(2,1,'2015-07-24 10:45:44','2015-07-24 10:45:44'),(2,2,'2015-07-24 10:45:44','2015-07-24 10:45:44');
/*!40000 ALTER TABLE `allowances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'cap','Cặp','2015-07-24 10:45:44','2015-07-24 10:45:44'),(2,'balo','Balo','2015-07-24 10:45:44','2015-07-24 10:45:44'),(3,'vi','Ví','2015-07-24 10:45:44','2015-07-24 10:45:44'),(4,'phu-kien','Phụ kiện','2015-07-24 10:45:44','2015-07-24 10:45:44'),(5,'van-phong-pham','Văn phòng phẩm','2015-07-24 10:45:44','2015-07-24 10:45:44'),(6,'handmade','Handmade','2015-07-24 10:45:44','2015-07-24 10:45:44');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `images_product_id_foreign` (`product_id`),
  CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (3,'/images/2xhevsvk0ekgfc2sfq2p3rjplvtyzi.jpg',6,'2015-07-26 08:06:34','2015-07-26 08:06:34'),(4,'/images/62c4kdxbctmfpbqgjfn9skwrebe6c0.jpg',7,'2015-07-26 08:07:05','2015-07-26 08:07:05'),(5,'/images/w13bk1weiqgxq3b2ffiqlixah9iyhp.jpg',8,'2015-07-26 08:09:14','2015-07-26 08:09:14'),(6,'/images/pv13abryw8nvnibnmoie8qaqwctkif.jpg',9,'2015-07-26 08:09:50','2015-07-26 08:09:50'),(7,'/images/fenbd6ogajum3o6tpizjowbe5hbhji.jpg',10,'2015-07-26 08:13:51','2015-07-26 08:13:51'),(8,'/images/vtgata4qkhq2sjg0gng4bqsmj6svev.jpg',11,'2015-07-26 08:14:21','2015-07-26 08:14:21'),(9,'/images/lzwym87b948f6q9nfkdyqexmirrrqp.jpg',12,'2015-07-26 08:16:28','2015-07-26 08:16:28'),(10,'/images/5ubt2vohx5dif6a1jghhedrfi03xnm.jpg',13,'2015-07-26 08:17:07','2015-07-26 08:17:07'),(11,'/images/djh1b4426c2lelmc7djf20p2cnsx90.jpg',14,'2015-07-26 08:25:12','2015-07-26 08:25:12'),(12,'/images/cb2ipk3qn99i7f32zscdwrhwsq2ft2.jpg',15,'2015-07-26 08:25:26','2015-07-26 08:25:26'),(13,'/images/2cf43fi7s7kneq89a4bepiog2ggodi.jpg',16,'2015-07-26 08:25:39','2015-07-26 08:25:39'),(14,'/images/22fls496pr2brfgurcs3zvg36j81d6.jpg',17,'2015-07-26 08:26:15','2015-07-26 08:26:15'),(16,'/images/yrpukfki5m0mpep8brb17ladr2u2q5.jpg',19,'2015-07-26 08:26:45','2015-07-26 08:26:45');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2015_07_23_125102_create_db',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) unsigned DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `orders_product_id_foreign` (`product_id`),
  CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'Chút Mập','0933333333',10,10,1600,'read','2015-07-26 19:24:48','2015-07-27 10:47:29'),(2,'Chút Heo','0905555555',10,30,4800,'unread','2015-07-26 19:27:09','2015-07-27 10:47:18');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privileges`
--

DROP TABLE IF EXISTS `privileges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privileges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privileges`
--

LOCK TABLES `privileges` WRITE;
/*!40000 ALTER TABLE `privileges` DISABLE KEYS */;
INSERT INTO `privileges` VALUES (1,'add-product','2015-07-24 10:45:44','2015-07-24 10:45:44'),(2,'del-product','2015-07-24 10:45:44','2015-07-24 10:45:44'),(3,'add-user','2015-07-24 10:45:44','2015-07-24 10:45:44'),(4,'del-user','2015-07-24 10:45:44','2015-07-24 10:45:44');
/*!40000 ALTER TABLE `privileges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `price` float(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (6,'Balo da','6-balo-da',2,380.00,'2015-07-26 08:06:34','2015-07-26 08:06:34'),(7,'Balo da đen','7-balo-da-den',2,380.00,'2015-07-26 08:07:05','2015-07-26 08:07:05'),(8,'Balo da hồng','8-balo-da-hong',2,380.00,'2015-07-26 08:09:14','2015-07-26 08:09:14'),(9,'Balo jean nâu','9-balo-jean-nau',2,210.00,'2015-07-26 08:09:50','2015-07-26 08:09:50'),(10,'Balo nỉ nâu xám','10-balo-ni-nau-xam',2,160.00,'2015-07-26 08:13:51','2015-07-27 12:39:11'),(11,'Balo nỉ xanh đen','11-balo-ni-xanh-den',2,160.00,'2015-07-26 08:14:21','2015-07-26 08:14:21'),(12,'Balo nỉ xanh dương','12-balo-ni-xanh-duong',2,160.00,'2015-07-26 08:16:28','2015-07-26 08:16:28'),(13,'Balo ren đen/trắng','13-balo-ren-den-trang',2,160.00,'2015-07-26 08:17:06','2015-07-26 08:17:07'),(14,'Cặp có nắp đen','14-cap-co-nap-den',1,220.00,'2015-07-26 08:25:12','2015-07-26 08:25:12'),(15,'Cặp có nắp hồng','15-cap-co-nap-hong',1,220.00,'2015-07-26 08:25:26','2015-07-26 08:25:26'),(16,'Cặp có nắp vàng đất','16-cap-co-nap-vang-dat',1,220.00,'2015-07-26 08:25:39','2015-07-26 08:25:39'),(17,'Ví dài hồng batch chấm bi','17-vi-dai-hong-batch-cham-bi',3,110.00,'2015-07-26 08:26:15','2015-07-26 08:26:15'),(19,'Ví ngắn mèo đi hia','19-vi-ngan-meo-di-hia',3,110.00,'2015-07-26 08:26:45','2015-07-26 08:26:45');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'owner','2015-07-24 10:45:44','2015-07-24 10:45:44'),(2,'admin','2015-07-24 10:45:44','2015-07-24 10:45:44');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'owner','$2y$10$KyDOokHg0eyl/bobCVbnjuGsra9f0nttDh4epujUlI7vk1CQMUfuK',1,'CmqRTUIYibPDTcF6nlKGiETdBAl8y9FkPuMXGYn679zRfDSYPJwnN7FVDjOB','2015-07-24 10:45:45','2015-07-27 12:35:19'),(2,'admin','$2y$10$qmJsR5YbdnStZ7cHyulzV.8gQRIqhgQHS1HB5.2CaxryH.Jzu9Yza',2,'7fVKIg65mnQuMv4adgLhW3LKoMEDYxsY0LWKmswClMT8fCq2oVe2cC2j7u80','2015-07-24 10:45:45','2015-07-27 12:43:14');
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

-- Dump completed on 2015-07-27 20:57:38
