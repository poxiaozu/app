-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-11 10:16:26
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `private`
--

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(200) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `pid`) VALUES
(1, '衬衫', 0),
(2, '夹克', 0),
(3, '线衣', 0),
(4, '旗袍', 0),
(5, '修身型衬衫', 1);

-- --------------------------------------------------------

--
-- 表的结构 `lists`
--

CREATE TABLE IF NOT EXISTS `lists` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `posid` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `con` longtext NOT NULL,
  `jianjie` varchar(500) NOT NULL,
  `imgurl` varchar(200) NOT NULL,
  `dengji` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `zan` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `lists`
--

INSERT INTO `lists` (`lid`, `cid`, `posid`, `title`, `con`, `jianjie`, `imgurl`, `dengji`, `price`, `zan`, `keywords`) VALUES
(1, 3, '3;6', '士大夫', '<p>&nbsp;斯蒂芬万恶的师傅</p>', '第三方', 'upload/17-07-11/a46290691eb8426fe70bc90e5605eab8aa.jpg', '', '111', '', '是否');

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mname` varchar(100) NOT NULL,
  `mpass` varchar(32) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `nicheng` varchar(100) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`mid`, `mname`, `mpass`, `photo`, `phone`, `address`, `nicheng`) VALUES
(1, 'kelly', 'c77fcb0bf0a7881d386bcb29117a371a', 'upload/17-07-11/ae6e145c200ece9507646aae6bf5e64daa.jpg', '18613590289', '山西运城', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `posid` int(11) NOT NULL AUTO_INCREMENT,
  `posname` varchar(100) NOT NULL,
  PRIMARY KEY (`posid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `position`
--

INSERT INTO `position` (`posid`, `posname`) VALUES
(3, '轻奢品质'),
(4, '为你定制'),
(5, '惊喜活动'),
(6, '轮播图');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `upass` varchar(32) NOT NULL,
  `nicheng` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `nicheng`, `photo`, `phone`, `address`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'upload/17-07-11/2144777fa9b4f13fe38cb594649f0bbbxzks3.jpg', '15703412651', '山西太原', 1),
(5, 'ww', 'ad57484016654da87125db86f4227ea3', 'ww', 'upload/17-07-11/434dbae7cdc7bc624344e4605ea31315aa.jpg', '12345678901', 'www', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
