-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 29 nov 2013 om 13:26
-- Serverversie: 5.5.20
-- PHP-Versie: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `H1` varchar(100) NOT NULL,
  `Tekst` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `about`
--

INSERT INTO `about` (`ID`, `H1`, `Tekst`) VALUES
(1, 'The Band', 'Floris (drums), Zino (rhythm guitar) and Rowan (lead guitar) were jamming for a long time, but it wasn''t until Timothy (vocals) joined the band in august 2012 for things to get serious. The great hurricane escape was born, with influences like Cancerbats and Comeback kid, they started to write songs. In february 2013 Niels (bassist) joined the band and thats when the band was finally complete.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `H1` varchar(100) NOT NULL,
  `Tekst` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `agenda`
--

INSERT INTO `agenda` (`ID`, `H1`, `Tekst`) VALUES
(1, 'Agenda', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `H1` varchar(100) NOT NULL,
  `Tekst` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `contact`
--

INSERT INTO `contact` (`ID`, `H1`, `Tekst`) VALUES
(1, 'Contact', '	Vocals: Timothy  Gitaar lead: Rowan  Gitaar rhythm: Zino  Bass: Niels  Drums: Floris');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Tekst` varchar(1000) NOT NULL,
  `H1` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `home`
--

INSERT INTO `home` (`ID`, `Tekst`, `H1`) VALUES
(1, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus', 'Welkom');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(100) NOT NULL,
  `Images` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `image`
--

INSERT INTO `image` (`ID`, `imagename`, `Images`) VALUES
(1, 'First Image', 'image1.jpg'),
(2, 'Second Image', 'image2.jpg'),
(3, 'Third Image', 'image3.jpg'),
(4, 'Fourth Image', 'image4.jpg'),
(5, 'Fifth Image', 'image5.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Text` varchar(1200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `news`
--

INSERT INTO `news` (`id`, `Text`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Illa tamen simplicia, vestra versuta. Terram, mihi crede, ea lanx et maria deprimet. At enim hic etiam dolore. Sed quod proximum fuit non vidit. Beatus sibi videtur esse moriens. Duo Reges: constructio interrete. Miserum hominem! Si dolor summum malum est, dici aliter non potest. Nulla erit controversia. Torquatus, is qui consul cum Cn. Quis est, qui non oderit libidinosam, protervam adolescentiam?');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `H1` varchar(100) NOT NULL,
  `Tekst` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `videos`
--

INSERT INTO `videos` (`ID`, `H1`, `Tekst`) VALUES
(1, 'Videos', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
