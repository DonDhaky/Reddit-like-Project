-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: yowl
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `post_id` bigint unsigned NOT NULL,
  `parentcomment_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (6,'2014_10_12_000000_create_users_table',1),(7,'2014_10_12_100000_create_password_reset_tokens_table',1),(8,'2019_08_19_000000_create_failed_jobs_table',1),(9,'2019_12_14_000001_create_personal_access_tokens_table',1),(10,'2024_04_07_003030_create_subreppits_table',2),(16,'2024_04_08_081824_create_posts_table',3),(18,'2024_04_08_125654_create_comments_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_path` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint unsigned NOT NULL,
  `subreppit_id` bigint unsigned NOT NULL,
  `likes` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'ChatGPT custom instructions are lit','','https://i.ibb.co/3W6vPRn/chatgpt-custom-instructions.webp',2,5,256,'2024-04-08 07:03:02','2024-04-08 07:03:02'),(2,'Kid draws on everything','','https://www.dropbox.com/scl/fi/cgr8zogewn1tzqwlfd0vo/draws_on_everything.mp4?rlkey=a5q4m483pgrqke24racgxjmkn&dl=1',1,2,102,'2024-04-08 07:48:37','2024-04-08 07:48:37'),(3,'Street Fighter 12','','https://www.dropbox.com/scl/fi/bx2gwfosdey418f58282k/SF12.mp4?rlkey=1w842d9ff127bxlg3nbihiv6b&dl=1',1,2,580,'2024-04-08 07:59:13','2024-04-08 07:59:13'),(4,'DPH should prohibit those mattresses from being resold...','','https://i.ibb.co/vw0D71x/mattresses.webp',2,1,47,'2024-04-08 08:03:18','2024-04-08 08:03:18'),(5,'Taunting a snake','','https://www.dropbox.com/scl/fi/z52tbw896wi6wn62gukwp/snack.mp4?rlkey=clptf6z182k2q7ufna760jngq&dl=1',2,3,899,'2024-04-08 08:06:34','2024-04-08 08:06:34'),(6,'This screenshot from a video published by the US State Department gets worse the more you look at it.','','https://i.ibb.co/bddcG0q/sweden.webp',1,4,87,'2024-04-08 08:11:28','2024-04-08 08:11:28'),(7,'Yes','','https://www.dropbox.com/scl/fi/cz1ly6siou54zgs72tnxw/yes.mp4?rlkey=vgyydhwthlta41wuiigi3kitk&dl=1',2,2,50,'2024-04-08 08:15:02','2024-04-08 08:15:02'),(8,'Parents being assholes','','https://www.dropbox.com/scl/fi/0fftz22sndo6j5jnzvs14/eggs.mp4?rlkey=kzej9jgp6dj1t7o9hh3xc27fk&dl=1',1,1,102,'2024-04-08 08:21:41','2024-04-08 08:21:41'),(9,'AI Gone Wild','','https://i.ibb.co/DC0jf6T/ai-gone-wild.webp',1,5,554,'2024-04-08 08:30:56','2024-04-08 08:30:56'),(10,'AI photo editing','','https://www.dropbox.com/scl/fi/dvo8h7actbgue1ocnwpzk/ai_editing.mp4?rlkey=ds6t9qbittbmb6bskqf21qiw1&dl=1',2,5,212,'2024-04-08 08:36:22','2024-04-08 08:36:22'),(11,'Son fails DNA test???','','https://i.ibb.co/nwDWdhN/dna.webp',1,4,1571,'2024-04-08 08:41:07','2024-04-08 08:41:07'),(12,'Doing a so called stunt not thinking if the plastic stool is good enough','','https://www.dropbox.com/scl/fi/kamrm6bkagnlwl76h9crc/stunt.mp4?rlkey=bi1ql9mnmj1d2wyl9ubwpzzb8&dl=1',1,3,12,'2024-04-08 08:45:12','2024-04-08 08:45:12'),(13,'Serpentine with no seatbelt','','https://www.dropbox.com/scl/fi/ku4ju5yzcm3vdnmbajng1/enjoying_the_ride.mp4?rlkey=plsco2qhgh38dvin49juj4pc4&dl=1',1,3,88,'2024-04-08 08:51:20','2024-04-08 08:51:20'),(14,'Ooookaay','','https://i.ibb.co/hCg8fwD/ganja.webp',2,4,753,'2024-04-08 08:55:18','2024-04-08 08:55:18'),(15,'Continuing to drive with a weird scraping sound','','https://www.dropbox.com/scl/fi/ttzzonqzh9huugfl5e2bo/weird-scraping-sound.mp4?rlkey=g5cpw1ic2wdtugu3ribuz2q5p&dl=1',2,3,200,'2024-04-08 08:59:32','2024-04-08 08:59:32'),(16,'Mum is angry at her child for growing','','https://i.ibb.co/6mKMMQj/growing.webp',1,1,512,'2024-04-08 09:02:17','2024-04-08 09:02:17'),(17,'WCGW Messing with a treadmill','','https://www.dropbox.com/scl/fi/q7mjy6vhlquabjgoivf8j/treadmill.mp4?rlkey=w348wqk7m6lheja22epxrxnz7&dl=1',2,3,41,'2024-04-08 09:06:04','2024-04-08 09:06:04');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subreppits`
--

DROP TABLE IF EXISTS `subreppits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subreppits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subreppits`
--

LOCK TABLES `subreppits` WRITE;
/*!40000 ALTER TABLE `subreppits` DISABLE KEYS */;
INSERT INTO `subreppits` VALUES (1,'ParentsAreFuckingDumb','When parenting needs a certificate','https://static01.nyt.com/images/2010/08/15/blogs/15complaintbox-span480/15complaintbox-span480-blogSpan.jpg','2024-04-06 22:45:21','2024-04-06 22:45:21'),(2,'KidsAreFuckingStupid','Natural selection starts early','https://www.awesomeinventions.com/wp-content/uploads/2019/12/My-first-fire-box-768x407.jpg','2024-04-06 23:13:24','2024-04-06 23:13:24'),(3,'WhatCouldGoWrong','All ready for a Darwin award: useful deaths','https://ds.static.rtbf.be/article/image/770x433/1/2/0/84117275be999ff55a987b9381e01f96-1451919958.jpg','2024-04-07 12:39:55','2024-04-07 12:39:55'),(4,'Facepalm','Shame, embarrassment, exasperation, consternation... it\'s here','https://i.kym-cdn.com/photos/images/newsfeed/000/540/519/cdc.png','2024-04-07 12:50:32','2024-04-07 12:50:32'),(5,'ChatGPT','The 5 mass extinction events that shaped the history of Earth — and the 6th that\'s happening now','https://cdn.mos.cms.futurecdn.net/eJ2xtFeoPaqUYoWJL62Zt5-650-80.jpg.webp','2024-04-07 13:11:42','2024-04-07 13:11:42');
/*!40000 ALTER TABLE `subreppits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Arthis','Art','art@art.com',NULL,'$2y$12$btQak7Bz4tXlB7Z6aeNrJ.Q3rUq.FnCoBlBBeHFwcPO/CBeVjSO.i','478',1,NULL,'2024-04-05 08:01:17','2024-04-05 08:01:17'),(2,'Wolfy','Wolf','wolf@wolf.com',NULL,'$2y$12$UDPJyLJ7FciQvHKheilKfeH.wr9F98GtW8u1/Thn/2G1n/eIpUQly','312',0,NULL,'2024-04-05 08:04:09','2024-04-05 08:04:09');
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

-- Dump completed on 2024-04-09 15:51:58
