-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

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
-- Table structure for table `consultations`
--

DROP TABLE IF EXISTS `consultations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consultations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NumCons` int(11) NOT NULL,
  `DateCons` date NOT NULL,
  `NumPat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `consultations_numcons_unique` (`NumCons`),
  KEY `consultations_numpat_foreign` (`NumPat`),
  CONSTRAINT `consultations_numpat_foreign` FOREIGN KEY (`NumPat`) REFERENCES `patients` (`NumPat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultations`
--

LOCK TABLES `consultations` WRITE;
/*!40000 ALTER TABLE `consultations` DISABLE KEYS */;
INSERT INTO `consultations` VALUES (1,1,'2019-12-30',1,'2019-12-24 09:04:27','2019-12-24 09:04:27'),(2,3,'2019-01-01',3,'2019-12-24 09:31:53','2019-12-24 09:31:53'),(3,2,'2019-01-01',2,'2019-12-24 09:48:26','2019-12-24 09:48:26'),(4,4,'2019-12-31',1,'2019-12-24 09:49:39','2019-12-24 09:49:39');
/*!40000 ALTER TABLE `consultations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
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
-- Table structure for table `login_models`
--

DROP TABLE IF EXISTS `login_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_models` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_models`
--

LOCK TABLES `login_models` WRITE;
/*!40000 ALTER TABLE `login_models` DISABLE KEYS */;
INSERT INTO `login_models` VALUES (1,'root','root','2019-12-23 20:57:32','2019-12-23 20:57:33');
/*!40000 ALTER TABLE `login_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (154,'2014_10_12_000000_create_users_table',1),(155,'2014_10_12_100000_create_password_resets_table',1),(156,'2019_08_19_000000_create_failed_jobs_table',1),(157,'2019_11_18_083255_create_login_models_table',1),(158,'2019_11_19_232626_create_patients_table',1),(159,'2019_11_19_232848_create_consultations_table',1),(160,'2019_11_19_232958_create_ordonnances_table',1),(161,'2019_11_30_214930_create_rdvs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordonnances`
--

DROP TABLE IF EXISTS `ordonnances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordonnances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NumOrd` int(11) NOT NULL,
  `DateOrd` date NOT NULL,
  `NomMedc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumCons` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ordonnances_numord_unique` (`NumOrd`),
  KEY `ordonnances_numcons_foreign` (`NumCons`),
  CONSTRAINT `ordonnances_numcons_foreign` FOREIGN KEY (`NumCons`) REFERENCES `consultations` (`NumCons`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordonnances`
--

LOCK TABLES `ordonnances` WRITE;
/*!40000 ALTER TABLE `ordonnances` DISABLE KEYS */;
INSERT INTO `ordonnances` VALUES (1,1,'2019-12-30','asas',1,'2019-12-24 09:04:27','2019-12-24 09:04:27'),(2,3,'2019-01-01','sazd',3,'2019-12-24 09:31:53','2019-12-24 09:31:53'),(3,2,'2019-01-01','asa',2,'2019-12-24 09:48:26','2019-12-24 09:48:26'),(4,4,'2019-12-31','zadzdazdazda',4,'2019-12-24 09:49:39','2019-12-24 09:49:39');
/*!40000 ALTER TABLE `ordonnances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NumPat` int(11) NOT NULL,
  `NomPat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrenomPat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateNaissPat` date NOT NULL,
  `SexePat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AddressPat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelephPat` int(11) NOT NULL,
  `EmailPat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `patients_numpat_unique` (`NumPat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` VALUES (1,1,'ZAYET','YASSER','2019-12-31','Male','RUE AL TAAMIR 8, 4081',55343665,'yasserzayet@live.com','2019-12-23 19:59:00','2019-12-23 19:59:00'),(2,2,'Ryckman','Neil','1994-12-31','Male','2038 Lincoln Drive',2147483647,'ziita.005@gmail.com','2019-12-24 08:55:51','2019-12-24 08:55:51'),(3,3,'yasser','zayet','2019-01-01','Male','rue al taamir 8',55343665,'yasserzayet@gmail.com','2019-12-24 09:08:04','2019-12-24 09:08:04');
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rdvs`
--

DROP TABLE IF EXISTS `rdvs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rdvs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NumRdv` int(11) NOT NULL,
  `NumPat` int(11) NOT NULL,
  `DateRdv` date NOT NULL,
  `TimeRdv` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rdvs_numrdv_unique` (`NumRdv`),
  KEY `rdvs_numpat_foreign` (`NumPat`),
  CONSTRAINT `rdvs_numpat_foreign` FOREIGN KEY (`NumPat`) REFERENCES `patients` (`NumPat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rdvs`
--

LOCK TABLES `rdvs` WRITE;
/*!40000 ALTER TABLE `rdvs` DISABLE KEYS */;
INSERT INTO `rdvs` VALUES (1,1,2,'2019-01-01','01:00:00','2019-12-24 08:56:09','2019-12-24 08:56:09'),(2,2,3,'2019-01-01','12:59:00','2019-12-24 09:27:39','2019-12-24 09:27:39'),(3,3,3,'2019-01-01','12:59:00','2019-12-24 09:31:53','2019-12-24 09:31:53'),(4,4,1,'2019-12-31','01:00:00','2019-12-24 09:49:39','2019-12-24 09:49:39');
/*!40000 ALTER TABLE `rdvs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2020-01-09  9:34:15
