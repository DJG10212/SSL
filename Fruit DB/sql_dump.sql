-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.41-log - Source distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.5005
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for ssl
CREATE DATABASE IF NOT EXISTS `ssl` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ssl`;


-- Dumping structure for table ssl.fruits
CREATE TABLE IF NOT EXISTS `fruits` (
  `fruitId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fruitName` varchar(50) DEFAULT NULL,
  `fruitColor` varchar(50) DEFAULT NULL,
  `fruitImage` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fruitId`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- Dumping data for table ssl.fruits: ~3 rows (approximately)
/*!40000 ALTER TABLE `fruits` DISABLE KEYS */;
INSERT INTO `fruits` (`fruitId`, `fruitName`, `fruitColor`, `fruitImage`) VALUES
	(20, 'Banana', 'Yellow', 'https://www.organicfacts.net/wp-content/uploads/2013/05/Banana21.jpg'),
	(21, 'Apple', 'Red', 'http://boutonrougedesigns.com/wp-content/uploads/red-apple.jpg'),
	(22, 'Apple', 'Green', 'http://www.lanierupshaw.com/wp-content/uploads/2014/10/green-apple-fruit-hd-wallpaper.jpg');
/*!40000 ALTER TABLE `fruits` ENABLE KEYS */;


-- Dumping structure for table ssl.users101
CREATE TABLE IF NOT EXISTS `users101` (
  `userid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table ssl.users101: ~5 rows (approximately)
/*!40000 ALTER TABLE `users101` DISABLE KEYS */;
INSERT INTO `users101` (`userid`, `username`, `password`, `avatar`) VALUES
	(1, 'dj', '9e50c414c71ca41bc0eefbfc82d4e7f0', 'gengar_by_xous54.png'),
	(2, 'test', 'f99ee8c74dffdcaf47ba35e10da68026', 'Suicune_(anime_DP).png'),
	(3, 'bob', 'd4e6ddae681a528edef67dcc519fe59b', 'Typhlosion.png'),
	(4, 'admin', '9e50c414c71ca41bc0eefbfc82d4e7f0', ''),
	(7, 'bob', '11689e96115847ee7fe32a99dfbd0965', '');
/*!40000 ALTER TABLE `users101` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
