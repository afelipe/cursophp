-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.50-community - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-11-27 19:51:32
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
-- Dumping data for table mydb.cities: ~1 rows (approximately)
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` (`idcities`, `city`) VALUES
	(1, 'Zaragoza'),
	(2, 'Barcelona'),
	(3, 'Bilbao');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;

-- Dumping data for table mydb.coders: ~0 rows (approximately)
/*!40000 ALTER TABLE `coders` DISABLE KEYS */;
INSERT INTO `coders` (`idcoders`, `code`) VALUES
	(1, 'php'),
	(2, 'java');
/*!40000 ALTER TABLE `coders` ENABLE KEYS */;

-- Dumping data for table mydb.languages: ~0 rows (approximately)
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` (`idlanguages`, `language`) VALUES
	(1, 'Castellano'),
	(2, 'English');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;

-- Dumping data for table mydb.pets: ~0 rows (approximately)
/*!40000 ALTER TABLE `pets` DISABLE KEYS */;
INSERT INTO `pets` (`idpets`, `pet`) VALUES
	(1, 'Perro'),
	(2, 'Gato'),
	(3, 'Tigre');
/*!40000 ALTER TABLE `pets` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
