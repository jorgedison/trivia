-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.9-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table cphpmysql.alumno
CREATE TABLE IF NOT EXISTS `alumno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table cphpmysql.alumno: ~3 rows (approximately)
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` (`id`, `nombres`, `apellidos`, `estado`) VALUES
	(1, 'Elivar Oswaldo', 'Largo Rios', '1'),
	(5, 'Juan', 'Vargas', '1'),
	(6, 'aaaa', 'dddd', '0');
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;

-- Dumping structure for table cphpmysql.respuesta
CREATE TABLE IF NOT EXISTS `respuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL DEFAULT 0,
  `pregunta` int(11) NOT NULL DEFAULT 0,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- Dumping data for table cphpmysql.respuesta: ~51 rows (approximately)
/*!40000 ALTER TABLE `respuesta` DISABLE KEYS */;
INSERT INTO `respuesta` (`id`, `value`, `pregunta`, `fecha_registro`) VALUES
	(30, 1, 0, '2018-10-05 22:47:26'),
	(31, 1, 0, '2018-10-05 22:47:35'),
	(32, 1, 0, '2018-10-05 22:47:46'),
	(33, 1, 0, '2018-10-05 22:52:35'),
	(34, 1, 0, '2018-10-05 22:52:40'),
	(35, 1, 0, '2018-10-05 22:52:45'),
	(36, 1, 0, '2018-10-05 22:53:02'),
	(37, 1, 0, '2018-10-05 22:53:04'),
	(38, 1, 0, '2018-10-05 22:53:06'),
	(39, 1, 0, '2018-10-05 22:53:06'),
	(40, 1, 0, '2018-10-05 22:53:07'),
	(41, 1, 0, '2018-10-05 22:53:08'),
	(42, 1, 0, '2018-10-05 22:55:58'),
	(43, 1, 0, '2018-10-05 22:56:00'),
	(44, 1, 0, '2018-10-05 22:56:01'),
	(45, 1, 0, '2018-10-05 22:56:03'),
	(46, 1, 0, '2018-10-05 23:22:19'),
	(47, 1, 0, '2018-10-05 23:22:20'),
	(48, 1, 0, '2018-10-05 23:22:21'),
	(49, 1, 0, '2018-10-05 23:22:22'),
	(50, 1, 0, '2018-10-05 23:22:23');
/*!40000 ALTER TABLE `respuesta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
