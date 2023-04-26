-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: portfolio
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `about_user`
--

DROP TABLE IF EXISTS `about_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `disc` varchar(600) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `age` int DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `degree` varchar(45) DEFAULT NULL,
  `freelance` varchar(45) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_user`
--

LOCK TABLES `about_user` WRITE;
/*!40000 ALTER TABLE `about_user` DISABLE KEYS */;
INSERT INTO `about_user` VALUES (1,'Website/App/Software Developer','Hi I\'m Kunal Gurav a Developer. I can bulid you websites software as well as applications according to your requirements','2006-01-12',17,'9028908958','officialkunal44@gmail.com','Maharastra','BCA','','https://www.trekfin.in');
/*!40000 ALTER TABLE `about_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'App'),(2,'Web'),(3,'Soft');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `proj_title` varchar(80) DEFAULT NULL,
  `proj_desc` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'mukund songire','mukund@gmail.com','Worker Management System','I wanna build a software that manages my workers and their salary'),(2,'mukund songire','mukund@gmail.com','Worker Management System','I wanna build a software that manages my workers and their salary'),(3,'kunal gurav','kunal@gmail.com','kjhkjlhlkjh','fgdgfdhgdhgfd');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `counter`
--

DROP TABLE IF EXISTS `counter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `counter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon` varchar(45) DEFAULT NULL,
  `title` varchar(70) DEFAULT NULL,
  `pre` int DEFAULT NULL,
  `post` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `counter`
--

LOCK TABLES `counter` WRITE;
/*!40000 ALTER TABLE `counter` DISABLE KEYS */;
INSERT INTO `counter` VALUES (1,'bi bi-emoji-smile','Happy Client',0,108),(2,'bi bi-cast','Projects',0,330),(3,'bi bi-award','Rewards',0,10),(4,'bi bi-code-square','Code Experience',50,70);
/*!40000 ALTER TABLE `counter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `education` (
  `id` int NOT NULL AUTO_INCREMENT,
  `std` varchar(70) DEFAULT NULL,
  `passing_y` varchar(45) DEFAULT NULL,
  `school_name` varchar(70) DEFAULT NULL,
  `desc` mediumtext,
  `board` varchar(45) DEFAULT NULL,
  `streme` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education`
--

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` VALUES (1,'10th','2020-2021','Bhagirath English School, Jalgaon India','Overall, schools play a critical role in providing education and preparing students for success in their future careers and personal lives. They provide a structured learning environment, access to resources, and opportunities for personal growth and development.','State Board',NULL),(2,'12th','2022-2023','Swami Vivekanand jr. college, Jalgaon India','Swami Vivekanand jr. college,  play a critical role in providing education and preparing students for success in their future careers and personal lives. They provide a structured learning environment, access to resources, and opportunities for personal growth and development.','State Board','Science (PCM)');
/*!40000 ALTER TABLE `education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_works`
--

DROP TABLE IF EXISTS `my_works`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `my_works` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_name` varchar(60) DEFAULT NULL,
  `project_url` varchar(60) DEFAULT NULL,
  `project_date` date DEFAULT NULL,
  `client_name` varchar(50) DEFAULT NULL,
  `catagory` varchar(45) DEFAULT NULL,
  `project_desc` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_works`
--

LOCK TABLES `my_works` WRITE;
/*!40000 ALTER TABLE `my_works` DISABLE KEYS */;
INSERT INTO `my_works` VALUES (1,'Computer Institute Website','www.trekfin.in','2023-03-23','Rahul Bharude','web','This website is basically used for getting admitions and making online lectures available.'),(2,'Worker Management System','worker_management_sys.exe','2022-10-15','Harish Patil','app','This software manages temperory workers permenant workers and their salary as well as it gives performance of each worker to company.');
/*!40000 ALTER TABLE `my_works` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `project_date` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio`
--

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` VALUES (1,'Computer Institute Website','2','Rahul Bharude','2023-03-23','assets/img/portfolio/portfolio-1.jpg','www.trekfin.in','This website is basically used for getting admitions and making online lectures available.'),(2,'Worker Management System','1','Harish Patil','2022-10-15','assets/img/portfolio/portfolio-2.jpg','worker_management.exe','This software manages temperory workers permenant workers and their salary as well as it gives performance of each worker to company.');
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon` varchar(45) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'bi bi-window-dock','Web Development','Our web development service offers custom-designed and responsive websites that are optimized for search engines and user experience.'),(2,'bi bi-android2','Android app','Our Android app development service provides custom-built mobile applications for businesses of all sizes.'),(3,'bi bi-window','Windows based software','Our Windows-based software service provides tailored solutions for businesses looking to streamline their operations. ');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES (1,'bi bi-filetype-py','Python','#ffbb2c'),(2,'bi bi-filetype-java','Java','#e80368'),(3,'bi bi-c-circle','C/C++','#e361ff'),(4,'bi bi-filetype-php','PHP','#47aeff'),(5,'bi bi-filetype-html','HTML','#ffa76e'),(6,'bi bi-filetype-css','CSS','#11dbcf'),(7,'bi bi-filetype-js','JAVASCRIPT','#4233ff'),(8,'bi bi-record-circle','DART','#b2904f');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonial` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quote` text,
  `name` varchar(75) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonial`
--

LOCK TABLES `testimonial` WRITE;
/*!40000 ALTER TABLE `testimonial` DISABLE KEYS */;
INSERT INTO `testimonial` VALUES (1,'I have never experienced such exceptional service before. The team went above and beyond to ensure my needs were met.','Rahul Bharude','Owner, Trekfin institute','assets/img/testimonials/testimonials-1.jpg'),(2,'Working with [company name] was a game-changer for my business. Their expertise and dedication helped me achieve my goals in record time.','Sarah Johnson','CEO, Johnson Enterprises','assets/img/testimonials/testimonials-2.jpg'),(3,'Working with [Company Name] has been a game changer for my business. Their expertise and dedication have helped me achieve my goals and take my company to the next level.','John Smith','CEO, XYZ Corporation','assets/img/testimonials/testimonials-3.jpg');
/*!40000 ALTER TABLE `testimonial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(300) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `instagram` varchar(200) DEFAULT NULL,
  `whatsapp` varchar(200) DEFAULT NULL,
  `telegram` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `r_summary` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Kunal Gurav','KunalGurav44','bbc438e15851e1eee4173c7169732c413a61567d','Jalgaon','Web/App Developer','#','https://instagram.com/off_icialkunal07?igshid=ZDdkNTiNTM=','https://wa.me/9028908958','https://t.me/@OfficialKunal07',NULL,'Rukhmini nagar near kolhe hills, jalogaon India.','I am a dedicated software developer with experience in Java and Python. My goal is to work on innovative projects that push the boundaries of what\'s possible in software development. I am a quick learner and thrive in collaborative environments.');
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

-- Dump completed on 2023-04-24 17:06:35
