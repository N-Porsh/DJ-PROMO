-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 25, 2015 at 11:16 PM
-- Server version: 5.5.38-log
-- PHP Version: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dj_promo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('8e02edd303326d092fbfdd8816d01103', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.91 Safari/537.36', 1422210518, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:5:"admin";s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:7:"user_id";s:1:"1";s:14:"old_last_login";s:10:"1422202936";}');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

CREATE TABLE IF NOT EXISTS `labels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `labels`
--

INSERT INTO `labels` (`id`, `user_id`, `title`, `filename`) VALUES
(1, 0, 'qweqwe', '0cd72a60e250ff82a879ea41bc517f21.jpg'),
(2, 1, 'Colol label', 'db25cd044f11663f0404e471799cd7d1.jpg'),
(3, 1, 'qwe', '01d51cbc4c327509d6af531d3618e5c8.JPG'),
(4, 1, 'qweqwe', 'c9f08955b55954a0c65268fa58e14a21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `date_created` (`date_created`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date_created`, `title`, `text`, `user_id`) VALUES
(1, '2015-01-08 17:19:31', 'Some Awesome post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit necessitatibus quis ipsam est minus placeat, ex rem asperiores consequatur, voluptate veritatis? Blanditiis assumenda aspernatur eos adipisci ex vitae natus tempora facere, saepe consectetur cum sint nobis quos magni porro. Soluta.', 1),
(2, '2015-01-08 18:19:25', 'Interesting news title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt fuga accusantium illo! Consectetur, architecto odit quod at iste quas non nostrum nisi temporibus dolores vel voluptatum officiis provident, nesciunt deserunt!', 1),
(3, '2015-01-09 16:18:30', 'third article', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, qui.', 1),
(4, '2015-01-10 13:18:30', 'fourth post FROM DATABASE', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolor, modi ab aliquid hic tempore voluptatum dolorem vitae repudiandae adipisci!', 1),
(5, '2015-01-11 09:26:11', 'Lorem ipsum dolor, Lorem ipsum dolor sit amet', 'consectetur adipisicing elit. Similique ab, unde, blanditiis minus ipsa sequi.', 1),
(6, '2015-01-11 18:23:41', 'ipsum sit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde possimus ut, omnis facilis, iste minus repudiandae dolores id, eligendi perferendis accusamus! Provident, nulla dicta. Velit!', 1),
(7, '2015-01-11 18:23:41', 'Lorem ipsum dolor, Lorem ipsum dolor sit amet', 'consectetur adipisicing elit. Similique ab, unde, blanditiis minus ipsa sequi.', 1),
(8, '2015-01-11 18:23:41', 'ipsum sit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde possimus ut, omnis facilis, iste minus repudiandae dolores id, eligendi perferendis accusamus! Provident, nulla dicta. Velit!', 1),
(9, '2015-01-11 18:23:41', 'Lorem ipsum dolor, Lorem ipsum dolor sit amet', 'consectetur adipisicing elit. Similique ab, unde, blanditiis minus ipsa sequi.', 1),
(10, '2015-01-11 18:23:41', 'ipsum sit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde possimus ut, omnis facilis, iste minus repudiandae dolores id, eligendi perferendis accusamus! Provident, nulla dicta. Velit!', 1),
(11, '2015-01-11 18:23:41', 'Lorem ipsum dolor, Lorem ipsum dolor sit amet', 'consectetur adipisicing elit. Similique ab, unde, blanditiis minus ipsa sequi.', 1),
(12, '2015-01-11 18:23:41', 'ipsum sit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde possimus ut, omnis facilis, iste minus repudiandae dolores id, eligendi perferendis accusamus! Provident, nulla dicta. Velit!', 1),
(13, '2015-01-11 18:23:41', 'Lorem ipsum dolor, Lorem ipsum dolor sit amet', 'consectetur adipisicing elit. Similique ab, unde, blanditiis minus ipsa sequi.', 1),
(14, '2015-01-11 18:23:41', 'ipsum sit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde possimus ut, omnis facilis, iste minus repudiandae dolores id, eligendi perferendis accusamus! Provident, nulla dicta. Velit!', 1),
(15, '2015-01-11 18:23:41', 'Lorem ipsum dolor, Lorem ipsum dolor sit amet', 'consectetur adipisicing elit. Similique ab, unde, blanditiis minus ipsa sequi.', 1),
(16, '2015-01-11 18:23:41', 'ipsum sit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde possimus ut, omnis facilis, iste minus repudiandae dolores id, eligendi perferendis accusamus! Provident, nulla dicta. Velit!', 1),
(17, '2015-01-11 19:34:51', 'Lorem ipsum dolor, Lorem ipsum dolor sit amet', 'consectetur adipisicing elit. Similique ab, unde, blanditiis minus ipsa sequi.', 1),
(18, '2015-01-11 20:43:45', 'MOOGFEST LOOKING FOR A NEW PLACE', 'Moogfest is reportedly looking for a new place for 2016.\nCurrently residing in Asheville, North Carolina, sources claim it’s looking to move to the city of Durham, approximately 250 miles away, although representatives of the music, art and technology festival have refused to comment.\nHowever, Indy Week reports they have confirmed a group working with Moogfest, Imprint Projects, have been in Durham to secure partnerships for a potential move.\nCasey Steinbacher, president and CEO of the Greater Durham Chamber of Commerce, said: “Durham has a long and proud history of welcoming and nurturing both artists and entrepreneurs.\n“We always keep our eyes and ears open for new opportunities to enhance life in this, one of America’s most exciting cities – and Moogfest could certainly be a good fit.”\nThere’s no Moogfest this year, but last year’s line-up included the likes of Flying Lotus, Dillon Francis, Art Department, Kaytranada and Machinedrum.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES
(1, '127.0.0.1', 'admin', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1422210524, 1),
(2, '127.0.0.1', 'jbl', '$2y$08$wQCpMisPqpjrlKd9IPdCMeCe.yIzGJsJkeHbpGlTWo3tKXTrGuZI2', NULL, 'john.b@yahoo.com', NULL, NULL, NULL, NULL, 1421502552, NULL, 1),
(3, '127.0.0.1', 'porshik', '$2y$08$VpT/oOVctcYO2ChEDBy3l.7NlwhQLwT11gaNjkPFkIBLqHSN3UILO', NULL, 'prs90@mail.ru', NULL, NULL, NULL, NULL, 1421504813, 1421588605, 1),
(4, '127.0.0.1', 'nikita', '$2y$08$cnYdOgSo60zdDRW0bN0ixuvQ4yxR9E1Q5bb7xyn7GxGA6RB/B93CK', NULL, 'porsh.spam@gmail.com', NULL, NULL, NULL, NULL, 1421518033, NULL, 1),
(5, '127.0.0.1', 'newuser', '$2y$08$iQLlVFMc7e/xohNmOZ2l4evKFcElEZsjcQr2MHvAM0ePdOWISoKfW', NULL, 'asdimn@asd.com', NULL, NULL, NULL, NULL, 1421521334, NULL, 1),
(6, '127.0.0.1', 'nw', '$2y$08$o.MgH0/.VkpvLb1vYHJj.OocEFc6/T1bq2p5FMObQhnthM0FDMoCu', NULL, 'nw@gmail.com', NULL, NULL, NULL, NULL, 1421522353, NULL, 1),
(7, '127.0.0.1', 'qweqw', '$2y$08$iDOBMkAXWnUsLltz3Pzivemg17JeWTREXIqgapsfsvfxYdRaSWpPO', NULL, 'qweqw@asq.com', NULL, NULL, NULL, NULL, 1421522449, NULL, 1),
(8, '127.0.0.1', 'fasdfas', '$2y$08$95ErWf7HkBJ0AN5Tuz28EOIbfMLchFoLLG0ifT8oYulhISiB/zsEO', NULL, 'qwe@asdkh.com', NULL, NULL, NULL, NULL, 1421522566, NULL, 1),
(9, '127.0.0.1', 'qweqwd', '$2y$08$iFWbiVVhFKJwaBNRYcSqp.AoFBU9YRDKCprIvYK/4KzIF2xKc3Yay', NULL, 'qwe123@sa.com', NULL, NULL, NULL, NULL, 1421522586, NULL, 1),
(11, '127.0.0.1', 'asfgasdjkfasd', '$2y$08$9Ee4dqLaItbMEjbbWaDbSuJEsFH1qd3JaTo3JOfOKuOLKLF6Ncs3u', NULL, 'askdhas@asd.com', NULL, NULL, NULL, NULL, 1421535206, NULL, 1),
(12, '127.0.0.1', 'test', '$2a$08$paVDvuv0s./XiVSRJcbjx.49wdmFbYaLTHuZjvq.Z7jvH/LiDIHI.', NULL, 'test@test.com', NULL, NULL, NULL, NULL, 1421588760, 1421603091, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_data`
--

CREATE TABLE IF NOT EXISTS `users_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pseudonym` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fav_music_genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users_data`
--

INSERT INTO `users_data` (`id`, `user_id`, `name`, `surname`, `pseudonym`, `country`, `phone`, `fav_music_genre`) VALUES
(1, 1, 'Nikita', 'Porshnjakov', 'Por$h', 'Estonia', '559 18 136', 'rock, pop'),
(2, 3, 'Nikita', 'surnmae', 'porshik_xaxa', 'Finland', '(+372) 55-91-81-36 1', 'rock , pop'),
(3, 12, 'some real test name', 'test surnmae', 'DJ Smash', 'Sweden', '4712947123', 'pop, rock');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2),
(5, 4, 2),
(6, 5, 2),
(7, 6, 2),
(8, 7, 2),
(9, 8, 2),
(10, 9, 2),
(12, 11, 2),
(13, 12, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
