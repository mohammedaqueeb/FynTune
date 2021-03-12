-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: quiz_fyntune
-- ------------------------------------------------------
-- Server version	5.7.32-log

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
-- Table structure for table `auth_user`
--

DROP TABLE IF EXISTS `auth_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_user` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `RoleId` int(11) DEFAULT NULL,
  `FullName` varchar(250) DEFAULT NULL,
  `MobileNo` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Password` text,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  `ModifiedBy` int(11) DEFAULT NULL,
  `Modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_user`
--

LOCK TABLES `auth_user` WRITE;
/*!40000 ALTER TABLE `auth_user` DISABLE KEYS */;
INSERT INTO `auth_user` VALUES (1,1,'Mohammed Aqueeb','9021088821','aqueeb96@gmail.com','e39688de0d1cf94d8b82c226e2bab77eb1d19f90590a4536dec523dd2885e79139d456ff42732db85366455140aa86789feb7f1c9d50f99bde8661804db086157LzJ+nGD/L4JQqZgkh8fw5UMqAFobjlW2ztb/fjPcDQ=',1,NULL,'2021-03-11 06:25:24'),(4,2,'aqueeb','aqueeb96@gmail.com','921088812','',1,NULL,'2021-03-11 10:53:43'),(5,2,'Suboot','soobur@gmail.com','6464646545645','',1,NULL,'2021-03-11 11:01:07'),(6,2,'','','','',1,NULL,'2021-03-11 11:06:41'),(7,2,'aqueeb','aque6@gmail.com','9210888','',1,NULL,'2021-03-11 11:35:56'),(8,2,'aqueeb','aqu6@gmail.com','78798798','',1,NULL,'2021-03-11 11:36:15'),(9,2,'aqueeb','aqu96@gmail.com','921088812','',1,NULL,'2021-03-11 11:36:47'),(10,2,'aqueeb','aqueebsasasas@gmail.com','5465654654','',1,NULL,'2021-03-11 11:41:20'),(11,2,'aqueeb','aqueeb546546@gmail.com','6546456465','',1,NULL,'2021-03-11 11:43:06'),(12,2,'aqueeb','aqueebasass@gmail.com','4645464645','',1,NULL,'2021-03-11 11:43:46'),(13,2,'aqueeb','aqueeb96@gmail.com','2132132222','',1,NULL,'2021-03-11 11:48:49'),(14,2,'aqueeb','aqueeb456444@gmail.com','7878999999','',1,NULL,'2021-03-11 11:49:19'),(15,2,'aqueeb','aqueeb96@gmail.com','1321321323','',1,NULL,'2021-03-11 11:49:46'),(16,2,NULL,NULL,NULL,'',1,NULL,'2021-03-11 11:56:35'),(17,2,'aqueeb','aqueeb96@gmail.com','7899999999','',1,NULL,'2021-03-11 13:59:00'),(18,2,'aqueeb','aqueeb96@gmail.com','9210888121','',1,NULL,'2021-03-11 16:08:29'),(19,2,'aqueeb','aqueeb96@gmail.com','9210888122','',1,NULL,'2021-03-12 06:55:35'),(20,2,'aqueeb','aqueeb96@gmail.com','9210888123','',1,NULL,'2021-03-12 09:23:51'),(21,2,'Aqueeb Shaikh','aqueeb96@gmail.com','9210888120','',1,NULL,'2021-03-12 12:55:37'),(22,2,'aqueeb','aqueeb96@gmail.com','1321465456','',1,NULL,'2021-03-12 12:58:07'),(23,2,'aqueeb','aqueeb96@gmail.com','1321111111','',1,NULL,'2021-03-12 13:57:11'),(24,2,'Aqueeb Shaikh','aqueeb96@gmail.com','8998989889','',1,NULL,'2021-03-12 13:58:51'),(25,2,'aqueeb','aqueeb96@gmail.com','9021088821','',1,NULL,'2021-03-12 14:05:18');
/*!40000 ALTER TABLE `auth_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz_details`
--

DROP TABLE IF EXISTS `quiz_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quiz_details` (
  `QuizDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `QuizId` int(11) DEFAULT NULL,
  `Question` varchar(250) DEFAULT NULL,
  `UserAns` varchar(250) DEFAULT NULL,
  `CorrectAns` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`QuizDetailId`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz_details`
--

LOCK TABLES `quiz_details` WRITE;
/*!40000 ALTER TABLE `quiz_details` DISABLE KEYS */;
INSERT INTO `quiz_details` VALUES (1,1,'What is the largest city and commercial capital of Sri Lanka?','Moratuwa','Colombo'),(2,1,'In the Morse code, which letter is indicated by 3 dots? ','S','S'),(3,1,'Pointers were not used in the original C programming language; they were added later on in C++.','False','False'),(4,1,'What is the protagonist&#039;s title given by the demons in DOOM (2016)?','Doom Guy','Doom Slayer'),(5,1,'Anatomy considers the forms of macroscopic structures such as organs and organ systems.',NULL,'True'),(6,1,'Which of the following names is the &quot;Mega Man&quot; Franchise known as in Japan?',NULL,'Rockman'),(7,1,'In &quot;Kingdom Hearts&quot;, what is the name of Sora&#039;s home world?',NULL,'Destiny Islands'),(8,1,'Which greek mathematician ran through the streets of Syracuse naked while shouting &quot;Eureka&quot; after discovering the principle of displacement?',NULL,'Archimedes'),(9,1,'Which major extinction event was caused by an asteroid collision and eliminated the majority of non-avian dinosaurs?',NULL,'Cretaceous-Paleogene'),(10,1,'In physics, conservation of energy and conservation of momentum are both consequences of which of the following?',NULL,'Noether&#039;s Theorem'),(11,2,'In relation to the British Occupation in Ireland, what does the IRA stand for.','Irish Republican Army','Irish Republican Army'),(12,2,'Which city is the capital of Switzerland?','Bern','Bern'),(13,2,'Norwegian producer Kygo released a remix of the song &quot;Sexual Healing&quot; by Marvin Gaye.','True','True'),(14,2,'The Herero genocide was perpetrated in Africa by which of the following colonial nations?',NULL,'Germany'),(15,2,'What Nationality is D.Va from Overwatch?',NULL,'Korean'),(16,2,'In Need For Speed: Most Wanted (2005), how many people are there to defeat on the blacklist?',NULL,'15'),(17,2,'What is the capital of Seychelles?',NULL,'Victoria'),(18,2,'Which WWF wrestler had the nickname &quot;The Ayatollah of Rock &#039;N&#039; Rolla&quot;?',NULL,'Chris Jericho'),(19,2,'How old was Muhammad Ali when he died?',NULL,'74'),(20,2,'When did the rapper Eazy-E die?',NULL,'March 26, 1995'),(21,3,'Which naval battle was considered the turning point of the Pacific Ocean Theater during World War 2?','Attack on Truk Island','Battle of Midway'),(22,3,'Which UK country features a dragon on their flag?','Wales','Wales'),(23,3,'When does Finland celebrate their independence day?','January 2nd','December 6th'),(24,3,'Who stars in Brutal Legend?',NULL,'Jack Black'),(25,3,'What is the full first name of the babysitter in Calvin and Hobbes?',NULL,'Rosalyn'),(26,3,'Which of these words means &quot;idle spectator&quot;?',NULL,'Gongoozler'),(27,3,'Who was the winner of &quot;Big Brother&quot; Season 10?',NULL,'Dan Gheesling'),(28,3,'What is the name of Eragon&#039;s dragon in &quot;Eragon&quot;?',NULL,'Saphira'),(29,3,'Who is credited with having created the world&#039;s first video game Easter Egg?',NULL,'Warren Robinett'),(30,3,'In Sid Meier&#039;s Civilization V, which World Wonder can only be built in cities on or next to a desert?',NULL,'Petra'),(31,4,'Soulja Boy&#039;s &#039;Crank That&#039; won a Grammy for Best Rap Song in 2007.','False','False'),(32,5,'Which European city has the highest mileage of canals in the world?','Birmingham','Birmingham'),(33,5,'In &quot;Mario Kart 64&quot;, Waluigi is a playable character.','False','False'),(34,5,'Spoon theory is a theory, utilizing &quot;Spoons&quot; as a metaphor for energy they can use in a day.','True','True'),(35,5,'Approximately how many Apple I personal computers were created?','200','200'),(36,6,'The series of the Intel HD graphics generation succeeding that of the 5000 and 6000 series (Broadwell) is called:','HD Graphics 500','HD Graphics 500'),(37,6,'In Kingdom Hearts the Paopu fruit is said to intertwine the destinies for two people forever.','True','True'),(38,7,'Which popular First Person Shooter (FPS) franchise, got a Real Time Strategy (RTS) game developed based on its universe?','Halo','Halo'),(39,7,'Which sign of the zodiac is represented by the Crab?','Cancer','Cancer'),(40,7,'Which of these is the name of a Japanese system of alternative medicine, literally meaning &quot;finger pressure&quot;?','Ukiyo','Shiatsu'),(41,8,'The Tiananmen Square protests of 1989 were held in Hong Kong.','False','False'),(42,8,'Who was not in the band &quot;The Smiths&quot;?','Martin Chambers','Martin Chambers'),(43,9,'Which actress&#039;s real name was Frances Ethel Gumm?','Julie Andrews','Judy Garland'),(44,9,'What is the &quot;powerhouse&quot; of the Eukaryotic animal cell?','Mitochondria','Mitochondria'),(45,9,'111,111,111 x 111,111,111 = 12,345,678,987,654,321','True','True'),(46,9,'Ashley Frangipane performs under the stage name Halsey.','False','True'),(47,9,'Which animal was part of an Russian domestication experiment in 1959?','Pigeons','Foxes'),(48,9,'Which supercar company is from Sweden?','Koenigsegg','Koenigsegg'),(49,9,'In the PAYDAY series, who is the iconic leader of the PAYDAY gang?','Dallas','Dallas'),(50,9,'What team did England beat to win in the 1966 World Cup final?','West Germany','West Germany'),(51,10,'The song &quot;Megalovania&quot; by Toby Fox made its third appearence in the 2015 RPG &quot;Undertale&quot;.','True','True'),(52,10,'Saul Hudson (Slash) of the band Guns N&#039; Roses is known for playing what type of guitar?','LsL Mongrel','Les Paul Standard'),(53,10,'Who is the only voice actor to have a speaking part in all of the Disney Pixar feature films? ','John Ratzenberger','John Ratzenberger'),(54,10,'Who is the main character of &quot;Metal Gear Solid 3&quot;?','Solid Snake','Naked Snake'),(55,10,'What is the name of the protagonist of J.D. Salinger&#039;s novel Catcher in the Rye?','Fletcher Christian','Holden Caulfield'),(56,10,'The numbering system with a radix of 16 is more commonly referred to as ','Hexidecimal','Hexidecimal'),(57,10,'What was Mountain Dew&#039;s original slogan?','Get\' that barefoot feelin\' drinkin\' Mountain Dew','Yahoo! Mountain Dew... It&#039;ll tickle your innards!'),(58,10,'How many rivers are in Saudi Arabia?','0','0'),(59,10,'Which weapon that was cut from the game &quot;Half Life 2&quot; was going to replace the crowbar?','Ice Axe','Ice Axe'),(60,10,'The drug cartel run by Pablo Escobar originated in which South American city?','Medellín','Medell&iacute;n'),(61,11,'Which movie released in 2016 features Superman and Batman fighting?','Batman v Superman: Dawn of Justice','Batman v Superman: Dawn of Justice'),(62,11,'Tetris is the #1 best-selling video game of all-time.','False','False'),(63,11,'What year did the game &quot;Overwatch&quot; enter closed beta?','2015','2015'),(64,11,'In 1720, England was in massive debt, and became in involved in the South Sea Bubble. Who was the main mastermind behind it?','John Blunt','John Blunt'),(65,11,'In Need For Speed Most Wanted (2005), what do you drive at the beginning of the career mode?','BMW M3 GTR','BMW M3 GTR'),(66,11,'The 2011 movie &quot;The Adventures of Tintin&quot; was directed by Steven Spielberg.','True','True'),(67,11,'In computing, what does LAN stand for?','Local Area Network','Local Area Network'),(68,12,'What was the game &quot;Galaga&quot; was a sequel to?','Galaxian','Galaxian'),(69,12,'In the book &quot;The Martian&quot;, how long was Mark Watney trapped on Mars (in Sols)?','401 Days','549 Days'),(70,12,'Which German city is located on the River Isar?','Berlin','Munich'),(71,12,'In what year was the first &quot;Mass Effect&quot; game released?','2007','2007'),(72,12,'What animal is featured in &quot;Bloons TD Battles&quot;?','Monkeys','Monkeys'),(73,12,'Which ocean borders the west coast of the United States?','Pacific','Pacific'),(74,12,'What is the species of the &quot;Predator&quot; in the 1987 movie &quot;Predator&quot;?','Xenomorph','Yautja'),(75,12,'What is the only Generation III Pokemon whose name begins with the letter I?','Illumise','Illumise'),(76,12,'What is the name of the first human being in Norse mythology?','Ask','Ask');
/*!40000 ALTER TABLE `quiz_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz_master`
--

DROP TABLE IF EXISTS `quiz_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quiz_master` (
  `QuizId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT NULL,
  `DateOfQuiz` datetime DEFAULT NULL,
  `TotalQuestion` int(11) DEFAULT NULL,
  `AttemptQuestion` int(11) DEFAULT NULL,
  `CorrectQuestion` int(11) DEFAULT NULL,
  `Score` decimal(18,2) DEFAULT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`QuizId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz_master`
--

LOCK TABLES `quiz_master` WRITE;
/*!40000 ALTER TABLE `quiz_master` DISABLE KEYS */;
INSERT INTO `quiz_master` VALUES (1,10,'2021-03-12 18:01:33',10,4,2,20.00,1),(2,10,'2021-03-12 18:07:20',10,3,3,30.00,1),(3,10,'2021-03-12 18:08:50',10,3,1,10.00,1),(4,10,'2021-03-12 18:10:59',10,1,1,10.00,1),(5,10,'2021-03-12 18:12:54',10,4,4,40.00,1),(6,10,'2021-03-12 18:14:21',10,2,2,20.00,1),(7,10,'2021-03-12 18:16:50',10,3,2,20.00,1),(8,10,'2021-03-12 18:26:50',10,2,2,20.00,1),(9,10,'2021-03-12 18:28:39',10,8,5,50.00,1),(10,10,'2021-03-12 19:27:31',10,10,5,50.00,1),(11,10,'2021-03-12 19:29:06',10,7,7,70.00,1),(12,10,'2021-03-12 19:35:35',10,9,6,60.00,1);
/*!40000 ALTER TABLE `quiz_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'quiz_fyntune'
--

--
-- Dumping routines for database 'quiz_fyntune'
--
/*!50003 DROP PROCEDURE IF EXISTS `Auth_Validate_User` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Auth_Validate_User`(
	pUserName TEXT
)
BEGIN
	
    DECLARE vCount INT;
    
    SET vCount = (SELECT COUNT(*) FROM auth_user WHERE RoleId = 1 AND Email = pUserName AND IsActive = 1);
    
    IF vCount > 0 THEN
		
        SELECT UserId, RoleId, FullName, Password
        FROM auth_user WHERE RoleId = 1 AND Email = pUserName AND IsActive = 1;
        
    ELSE
		
        SELECT 'Invalid UserName' AS ResponseMessage, 1 As HasError;
        
    END IF;
    
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Quiz_Details_Manage` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Quiz_Details_Manage`(
	
    pQuizId INT, 
    pQuestion VARCHAR(250), 
    pUserAns VARCHAR(250), 
    pCorrectAns VARCHAR(250)
)
BEGIN
    
    INSERT INTO quiz_details(QuizId, Question, UserAns, CorrectAns)
	VALUES(pQuizId, pQuestion, pUserAns, pCorrectAns);
	
	SELECT 'Quiz Question Added Successfully' AS ResponseMessage, LAST_INSERT_ID() AS ID;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Quiz_Fetch` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Quiz_Fetch`(
	pAction INT,
    pQuizId INT, 
    pUserId INT,
	pQuizDetailId INT,
    pDateFrom DATE,
    pDateTo DATE
)
BEGIN

	IF pAction = 1 THEN
		
        SELECT QuizId, qm.UserId , DateOfQuiz, TotalQuestion, AttemptQuestion, CorrectQuestion, Score,
        FullName, MobileNo, Email
        FROM quiz_master qm
        LEFT JOIN auth_user au ON qm.UserId = au.UserId
        WHERE qm.IsActive = 1 AND DateOfQuiz BETWEEN pDateFrom AND pDateTo
        ORDER BY QuizId DESC;
        
    ELSEIF pAction = 2 THEN
    
		SELECT QuizDetailId, qd.QuizId, Question, UserAns, CorrectAns,
        qd.QuizId, qm.UserId , DateOfQuiz, TotalQuestion, AttemptQuestion, CorrectQuestion, Score,
        FullName, MobileNo, Email
        FROM quiz_details qd
        LEFT JOIN quiz_master qm ON qd.QuizId = qm.QuizId
        LEFT JOIN auth_user au ON qm.UserId = au.UserId
        WHERE qd.QuizId = pQuizId;
    
    END IF;
	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Quiz_Master_Manage` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Quiz_Master_Manage`(
	
    pUserId INT, 
    pTotalQuestion INT, 
    pAttemptQuestion INT, 
    pCorrectQuestion INT, 
    pScore DECIMAL(18,2)
    
)
BEGIN

	DECLARE vLocalTime DATETIME;
     
    SET vLocalTime = CONVERT_TZ(NOW(), @@GLOBAL.TIME_ZONE, '+5:30');
    
    
    INSERT INTO quiz_master(UserId, DateOfQuiz, TotalQuestion, AttemptQuestion, CorrectQuestion, Score, IsActive)
	VALUES(pUserId,vLocalTime, pTotalQuestion, pAttemptQuestion, pCorrectQuestion, pScore, 1);
	
	SELECT 'Quiz Added Successfully' AS ResponseMessage, LAST_INSERT_ID() AS ID;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Quiz_Validate` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Quiz_Validate`(
	
    pFullName VARCHAR(250), 
    pMobileNo VARCHAR(45), 
    pEmail VARCHAR(45)
    
)
BEGIN

	DECLARE vCount INT;    
    
    SET vCount = (SELECT COUNT(*) FROM auth_user WHERE RoleId = 2 AND MobileNo = pMobileNo AND Email = pEmail AND IsActive = 1);
    
    IF vCount > 0 THEN
    
        SELECT 'You have already attempt this test' AS ResponseMessage, 1 As HasError;
        
    ELSE		
         INSERT INTO auth_user(RoleId, FullName, MobileNo, Email,Password, IsActive)
	     VALUES(2, pFullName, pMobileNo, pEmail, "", 1);
         
         SELECT 'Quiz Start' AS ResponseMessage, LAST_INSERT_ID() AS ID;
        
    END IF;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-12 19:39:30
