--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `comment` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `page_id`, `comment`, `time`) VALUES
(1, 1, 1, 0x54686973206973206a75737420636f6d6d656e74, 1316263677),
(2, 2, 1, 0x5468616e6b20596f75203a29, 1316287603);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`) VALUES
(1, 'Billa', 'bagharbilla@gmail.com'),
(2, 'Gower', 'adgower@gmail.com');
