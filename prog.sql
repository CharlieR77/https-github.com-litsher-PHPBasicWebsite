-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.6.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Versie:              8.2.0.4675
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Databasestructuur van project wordt geschreven
CREATE DATABASE IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `project`;


-- Structuur van  tabel project.agenda wordt geschreven
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL DEFAULT '0',
  `location` varchar(100) NOT NULL DEFAULT '0',
  `tickets` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel project.agenda: ~9 rows (ongeveer)
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` (`id`, `date`, `location`, `tickets`) VALUES
	(1, '2013-10-11', 'Bibelot, Dordrecht, NL', '/'),
	(2, '2014-11-27', 'Toronto, Quebec, CA', '/'),
	(3, '2015-11-09', 'Pjezno, Pskov, RU', 'http://www.popcentrale.nl/Actueel/Agenda.aspx#agenda763'),
	(5, '2015-11-11', 'Bibelot, Dordrecht, NL', '/'),
	(6, '2014-11-10', 'Bibelot, Dordrecht, NL', '1'),
	(7, '2014-11-19', 'Bibelot, Dordrecht, NL', '/'),
	(8, '2013-11-11', 'Bibelot, Dordrecht, NL', '/'),
	(9, '2014-11-11', 'Bibelot, Dordrecht, NL', '/'),
	(10, '2013-11-18', 'Bibelot, Dordrecht, NL', '/');
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
