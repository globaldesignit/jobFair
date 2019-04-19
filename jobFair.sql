-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 192.168.10.10    Database: job_fair
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `shortName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentPass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Global Design IT',1,'GDIT','60',1,'2019-04-04 06:25:10','2019-04-05 08:14:36');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (7,'2014_10_12_000000_create_users_table',1),(8,'2014_10_12_100000_create_password_resets_table',1),(9,'2019_03_28_082830_create_questions_table',1),(10,'2019_03_29_064550_create_results_table',1),(11,'2019_03_29_084958_create_locations_table',1),(12,'2019_04_01_081300_create_type_ques_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` longtext CHARACTER SET utf8 NOT NULL,
  `ans1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ans4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `typeQues` varchar(255) CHARACTER SET utf8 NOT NULL,
  `level` int(11) NOT NULL,
  `correctAns` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'<p><strong>&nbsp;Which of the following options shows the correct format of fetching class variables using the $this variable?</strong></p>','$this.$varname','$this.varname','$this->varname','$this->$varname','PHP',1,'$this->varname','2019-04-04 06:28:47','2019-04-04 06:28:47'),(4,'<p><strong>What will be the output?</strong></p>','20','21','27','25','PHP',1,'25','2019-04-04 06:30:05','2019-04-04 06:52:39'),(5,'<p><strong>Which of the following PHP functions will you use as a countermeasure against a cross-site scripting attack?</strong></p>','mysql_escape_string()','escapeshellcmd()','escapeshellarg()','htmlentities()','PHP',1,'htmlentities()','2019-04-04 06:30:29','2019-04-04 06:30:29'),(7,'<p><strong>Which of the following protocols is used for mail transfer?</strong></p>','FTP','HTTP','SMTP','SFTP','PHP',1,'SMTP','2019-04-04 06:31:49','2019-04-04 06:31:49'),(9,'<p><strong>Which of the following statements will you use to remove a table from Database?</strong></p>','DELETE TABLE <table_name> FROM DATABASE','DELETE TABLE <table_name>','DROP TABLE <table_name>','DROP TABLE <table_name> FROM DATABASE','PHP',1,'DROP TABLE <table_name>','2019-04-04 06:32:34','2019-04-04 06:32:34'),(10,'<p><strong>What is the preferred way of writing the value 25 to a session variable called age?</strong></p>','$age = 25; session_regiser(\'age\');','$_SESSION[\'age\'] = 25;','session_register(\'age\', 25);','$HTTP_SESSION_VARS[\'age\'] = 25;','PHP',1,'$_SESSION[\'age\'] = 25;','2019-04-04 06:33:03','2019-04-04 06:33:03'),(11,'<p><strong>Which of the following form element names can be used to create an array in PHP?</strong></p>','foo','[foo]','foo[]','foo[bar]','PHP',1,'foo[]','2019-04-04 06:33:24','2019-04-04 06:33:24'),(12,'<p><strong>Which operator is used to check if two values are equal and of same data type?</strong></p>','!=','=','==','===','PHP',1,'===','2019-04-04 06:33:43','2019-04-04 06:33:43'),(13,'<p><strong>What does SQL stand for?</strong></p>','Strong Question Language','Structured Query Language','Structured Question Language','Standard Query Language','PHP',1,'Structured Question Language','2019-04-04 06:34:01','2019-04-04 06:34:01'),(14,'<p><strong>Which of the following functions would be a valid way to create an array containing items from three existing arrays?</strong></p>','array_merge()','array_combine()','array_combine()','array_intersect()','PHP',1,'array_merge()','2019-04-04 06:34:25','2019-04-04 06:34:25'),(17,'<p><strong>Which of the following files can be used to modify PHP configurations?</strong></p>','httpd_php.conf','isset.ini','php.ini','config.ini','PHP',1,'php.ini','2019-04-04 06:35:35','2019-04-04 06:35:35'),(18,'<p><strong>Which one of the following property scopes is not supported by PHP ?</strong></p>','static','public','final','friendly','PHP',1,'friendly','2019-04-04 06:35:58','2019-04-04 06:35:58'),(19,'<p><strong>Which one of the following can be used to instantiate an object in PHP assuming class name to be Foo ?</strong></p>','obj = new foo ();','$obj = new $foo;','$obj = new foo;','$obj = new foo ();','PHP',1,'$obj = new foo ();','2019-04-04 06:36:27','2019-04-04 06:36:27'),(21,'<p><strong>CSS l&agrave; viết tắt của?&nbsp;</strong></p>','Creative Style Sheets.','Computer Style Sheets.','Cascading Style Sheets.','Colorful Style Sheets.','FE',1,'Cascading Style Sheets.','2019-04-04 06:39:02','2019-04-04 06:39:02'),(22,'<p><strong>Đặt d&ograve;ng li&ecirc;n kết với file CSS ở v&ugrave;ng n&agrave;o trong file HTML?&nbsp;</strong></p>','Trong thẻ <body>.','Trong thẻ <head>.','Ở cuối file HTML.','Ở đầu file HTML.','FE',1,'Trong thẻ <head>.','2019-04-04 06:39:25','2019-04-04 06:39:25'),(23,'<p><strong>D&ograve;ng n&agrave;o đặt ảnh bg.png l&agrave;m ảnh nền trang web : </strong></p>','bg-image: bg.png','background-image: bg.png','background-image:url=bg.png','background-image:url(bg.png)','FE',1,'background-image:url(bg.png)','2019-04-04 06:39:47','2019-04-04 06:39:47'),(24,'<p><strong>D&ograve;ng n&agrave;o để thiết lập canh đều cho văn bản&nbsp;</strong>:</p>','text-align: center','text-align: justify','font-align: left','font-align: right','FE',1,'text-align: justify','2019-04-04 06:40:06','2019-04-04 06:40:06'),(25,'<p><strong>Nh&oacute;m c&aacute;c đối tượng c&oacute; c&ugrave;ng thuộc t&iacute;nh v&agrave; c&oacute; thể được sử dụng nhiều lần l&agrave;:&nbsp;</strong></p>','class','id','Cả A và B đều đúng','Cả A và B đều sai','FE',1,'class','2019-04-04 06:40:51','2019-04-04 06:40:51'),(26,'<p><strong>Đ&acirc;u l&agrave; tag để xuống d&ograve;ng trong web?</strong></p>','<lb>','<lb>','<rb>','<break>','FE',1,'<lb>','2019-04-04 06:41:17','2019-04-04 06:41:17'),(27,'<p><strong>Từ HTML l&agrave; từ viết tắt của từ n&agrave;o?</strong></p>','Hyperlinks and Text Markup Language','Home Tool Markup Language','Hyper Text Markup Language','Tất cả đều sai','FE',1,'Hyper Text Markup Language','2019-04-04 06:41:49','2019-04-04 06:41:49'),(28,'<p><strong>Đ&acirc;u l&agrave; tag tạo ra ti&ecirc;u đề web k&iacute;ch cỡ lớn nhất.</strong></p>','<title>','<h1>','<h6>','<head>','FE',1,'<h1>','2019-04-04 06:42:11','2019-04-04 06:42:11'),(29,'<p><strong>Đ&acirc;u l&agrave; tag tạo ra 1 danh s&aacute;ch đứng đầu bằng số</strong></p>','<ul>','<list>','<ol>','<dl>','FE',1,'<ol>','2019-04-04 06:42:52','2019-04-04 06:42:52'),(30,'<p><strong>Tag n&agrave;o tạo ra 1 drop-down list?</strong></p>','<select>','<list>','<input type=\"dropdown\">','<input type=\"list\">','FE',1,'<select>','2019-04-04 06:43:16','2019-04-04 06:43:16'),(31,'<p><strong>&nbsp;Với HTML dưới đ&acirc;y :</strong></p>\r\n\r\n<p><strong>HTML :</strong></p>\r\n\r\n<p>&lt;ul class=&quot;list&quot; id=&quot;color&quot;&gt;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;span&gt;Item&lt;/span&gt;&lt;/li&gt;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; &lt;li class=&quot;flower&quot; id=&quot;prioritize&quot;&gt;&lt;span class=&quot;highlight&quot;&gt; Text &lt;/span&gt;&lt;/li&gt;</p>\r\n\r\n<p>&lt;/ul&gt;</p>\r\n\r\n<p><strong>CSS :</strong></p>\r\n\r\n<p>.list .flower {</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; color: red;</p>\r\n\r\n<p>}</p>\r\n\r\n<p>#prioritize {</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; color: blue;</p>\r\n\r\n<p>}</p>\r\n\r\n<p>M&agrave;u sắc của văn bản Text l&agrave; g&igrave; ?</p>','Red','Green','Brown','Blue','FE',1,'Blue','2019-04-04 06:44:57','2019-04-04 09:04:10'),(32,'<p><strong>Nếu bạn c&oacute; một trang kết quả t&igrave;m kiếm v&agrave; muốn l&agrave;m nổi bật c&aacute;c thuật ngữ t&igrave;m kiếm, th&igrave; tag HTML n&agrave;o bạn sử dụng dưới đ&acirc;y l&agrave; đ&uacute;ng?</strong></p>','<strong>','<mark>','<em>','<highlight>','FE',1,'<mark>','2019-04-04 06:45:51','2019-04-04 06:45:51'),(33,'<p><strong>L&agrave;m thế n&agrave;o để chọn một item bằng Class or ID trong Jquery:</strong></p>','$( \"#myDivId\" );','$( \".myCssClass\" );','var myDivElement = $( \"#myDivId\" ); var myDiv = $( \". myCssClass \" );','Cả 3 dòng trên đều đúng','FE',1,'Cả 3 dòng trên đều đúng','2019-04-04 06:46:15','2019-04-04 06:46:15'),(34,'<p><strong>L&agrave;m thế n&agrave;o để kiểm tra một phần tử c&oacute; Class &ldquo;</strong><strong><em>protected&rdquo;</em></strong><strong> trong JQuery:</strong></p>','hasClass( \"protected\" );','addClass( \"protected\" );','removeClass( \"protected\" );','Cả 3 dòng trên đều sai','FE',1,'hasClass( \"protected\" );','2019-04-04 06:46:40','2019-04-04 06:46:40'),(35,'<p><strong>L&agrave;m thế n&agrave;o để x&aacute;c định một yếu tố bật tắt của một phần tử :</strong></p>','var isVisible = $( \"#myDiv\" ).is( \":visible\" );','var isHidden = $( \"#myDiv\" ).is( \":hidden\" );','Cả 2 dòng trên đều đúng','Cả 2 dòng trên đều sai','FE',1,'Cả 2 dòng trên đều đúng','2019-04-04 06:47:01','2019-04-04 06:47:01'),(36,'<p><strong>L&agrave;m thế n&agrave;o để lấy gi&aacute; trị văn bản của một phần tử :</strong></p>','(\'.text\').val();','(\'.text\').text();','Cả 2 dòng trên đều đúng','Cả 2 dòng trên đều sai','FE',1,'Cả 2 dòng trên đều đúng','2019-04-04 06:47:20','2019-04-04 06:47:20'),(37,'<p><strong>H&agrave;m n&agrave;o sau đ&acirc;y kh&ocirc;ng phải l&agrave; h&agrave;m effect :</strong></p>','fadeIn() & fadeOut() & fadeToggle() & fadeTo()','slideDown()','slideToggle()','text()','FE',1,'text()','2019-04-04 06:47:40','2019-04-04 06:47:40'),(38,'<p><strong>What will be the output?&nbsp;</strong></p>\r\n\r\n<table cellspacing=\"0\" style=\"width:468.95pt\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#eeece1; height:96.6pt; width:468.95pt\">\r\n			<p>&lt;?php</p>\r\n\r\n			<p>&nbsp;&nbsp; class number {</p>\r\n\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; public $a= 10;</p>\r\n\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;public $b=20;</p>\r\n\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;private $c=30;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n			<p>&nbsp;&nbsp; }</p>\r\n\r\n			<p>&nbsp;&nbsp;&nbsp; $numbers = new number();</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;&nbsp;&nbsp; foreach($numbers as $var =&gt; $value) {</p>\r\n\r\n			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;echo &quot;$value &quot;;</p>\r\n\r\n			<p>&nbsp;&nbsp; &nbsp;}</p>\r\n\r\n			<p>?&gt;</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>','10 20','Error','10 20 30','10 20 null','PHP',1,'10 20','2019-04-04 09:05:54','2019-04-04 09:05:54');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `results` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shortName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localTest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` VALUES (1,'1','BK','Nguyễn Hoàng Sơn','1','1','1','1',1,NULL,NULL),(2,'','GDIT','123','123@yahoo.com','123','11','0',0,'2019-04-05 01:31:48','2019-04-05 06:35:45'),(3,'1','BK','GG','1','','1','1',0,NULL,NULL),(4,'','GDIT','123','123@yahoo.com','','11','0',0,'2019-04-05 01:31:48','2019-04-05 06:35:45');
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_ques`
--

DROP TABLE IF EXISTS `type_ques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type_ques` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `limit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_ques`
--

LOCK TABLES `type_ques` WRITE;
/*!40000 ALTER TABLE `type_ques` DISABLE KEYS */;
INSERT INTO `type_ques` VALUES (1,'.NET',1,3,'2019-04-04 06:22:49','2019-04-04 06:22:49'),(2,'.NET',2,2,'2019-04-04 06:22:56','2019-04-04 06:24:12'),(3,'PHP',1,1,'2019-04-04 06:24:33','2019-04-04 06:24:33'),(4,'A1',5,20,'2019-04-04 06:27:14','2019-04-04 06:27:14'),(5,'FE',1,10,'2019-04-04 06:37:30','2019-04-04 06:37:30');
/*!40000 ALTER TABLE `type_ques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','mail','$2a$10$XaqwJCCJGyMSEYMhApwlbuUP1lV4Pd9jqEXahgLrG/RRp5H9Ys3I.','WXLz8Cq6qS0v82UeYbU2h1MqvbeCnpi4ZgF7AflrY6fGfYNiNIZnipEBnaP8',NULL,NULL);
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

-- Dump completed on 2019-04-19 16:06:01
