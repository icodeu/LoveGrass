-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-08-27 15:23:02
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lovecao`
--

-- --------------------------------------------------------

--
-- 表的结构 `lovecount`
--

CREATE TABLE IF NOT EXISTS `lovecount` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `userscore` int(200) NOT NULL,
  `usertime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `lovecount`
--

INSERT INTO `lovecount` (`id`, `username`, `userscore`, `usertime`) VALUES
(1, 'wang', 24, '2014-08-27 13:09:52'),
(2, 'huan', 99, '2014-08-27 13:09:52'),
(3, 'wanghuan', 17, '2014-08-27 13:09:52'),
(4, 'huanwang', 33, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
