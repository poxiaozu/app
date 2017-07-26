-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-26 04:46:41
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `pid`) VALUES
(1, '衬衫', 0),
(2, '夹克', 0),
(3, '线衣', 0),
(4, '旗袍', 0),
(5, '修身型衬衫', 1),
(6, '定制', 0),
(7, '购物袋', 0),
(8, '调整', 0);

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
  `dztx` varchar(100) NOT NULL,
  `dzrs` int(100) NOT NULL,
  `bjtu` varchar(100) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `lists`
--

INSERT INTO `lists` (`lid`, `cid`, `posid`, `title`, `con`, `jianjie`, `imgurl`, `dengji`, `price`, `zan`, `keywords`, `dztx`, `dzrs`, `bjtu`) VALUES
(1, 3, '0', '士大夫', '<p>&nbsp;斯蒂芬万恶的师傅</p>', '第三方', 'upload/17-07-11/a46290691eb8426fe70bc90e5605eab8aa.jpg', '', '111', '', '是否', '', 0, ''),
(3, 2, '6', '开衫外套', '', '漂亮', 'upload/17-07-11/91acb4807cf49eb8428b2ccfbd6f3a3ac-1.jpg', '', '2000', '', '外套', '', 0, ''),
(4, 3, '6', '线衣', '', '线衣', 'upload/17-07-11/8173ee15f7042f4fcdf7cbc6be2ce79ac-7.jpg', '', '1000', '', '线衣', '', 0, ''),
(5, 2, '6', '夹克', '', '夹克', 'upload/17-07-11/d2ffbe0feb107f5e37689623aac0a2f9c-10.jpg', '', '3000', '', '外套', '', 0, ''),
(6, 1, '6', '衬衫', '', '衬衫', 'upload/17-07-11/1489c3cbd04e951cde59aad9443d9b0ac-12.jpg', '', '500', '', '衬衫', '', 0, ''),
(7, 3, '4', '线衣', '', '线衣', 'upload/17-07-11/73c3bea83b3675ed89c9dbaf28b83cdfc-2.jpg', '★★★★★', '1000', '', '线衣', '', 0, ''),
(8, 4, '4', '旗袍', '', '旗袍', 'upload/17-07-11/062f628da96a0f4debaba0ac7a2ab8fac-3.jpg', '★★★★★', '2000', '', '旗袍', '', 0, ''),
(9, 3, '5', '线衣', '', '人气单品活动进行中现在购 买还有礼品', 'upload/17-07-11/0f15e86835009c9efb9de89be3e1aa6fc-7.jpg', '', '1000', '', '线衣', '', 0, ''),
(11, 5, '5', '衬衫', '', '行中现在购 买还有礼品人气单品活动进', 'upload/17-07-11/0d76b11f62eceda153b4db882aa2ed5ec-12.jpg', '', '2000', '', '衬衫', '', 0, ''),
(13, 1, '3', '衬衫', '', '深蓝色格子衬衫，简单大气，修 身设计，让你脱颖而出。', 'upload/17-07-11/e90e688844282d70a251d1c88674716bc-16.jpg', '', '2000', '', '衬衫', '', 0, ''),
(14, 6, '7', '头像', '', '', 'upload/17-07-14/aaf679287e22819a31e3794c9e61fb99jc-t2.jpg', '', '', '', '头像', '', 0, ''),
(15, 6, '7', 'Designer cg', '', 'Jacket', 'upload/17-07-14/28f91265d01c63da6537c68da9bc5efajc-zan.jpg', '★★★★★', 'LV 5.0', '', '', '', 0, ''),
(16, 6, '', '地址', '', '', 'upload/17-07-14/437d55df8e7e40abcd0abb3cc3d21fd5jc-dizhi_07.png', '', '', '', '山西 忻州', '', 15736, ''),
(17, 6, '9', 'JACKE CG', '', 'Red skirt', 'upload/17-07-14/b5001f2d9e1f62c654e83f32d51d0c47jc-zan.jpg', '', '￥ 1999', '', '2017', '', 16890, 'upload/17-07-14/88a5ba8ef133f46b94a3ede841673863jc-t2_07.png'),
(18, 6, '', 'con', '', '', 'upload/17-07-14/88a5ba8ef133f46b94a3ede841673863jc-t2_07.png', '', '', '', 'con', '', 0, ''),
(19, 7, '', 'SHIRT', '', '深蓝色格子衬衫，简单大气，修身设计，让你脱颖而出', 'upload/17-07-14/cae9294c7d955987d56c98a9dd26dbbejc-g1.png', '', 'RMB 1856', '', '衬衫', '', 0, ''),
(20, 7, '', '2', '', '', 'upload/17-07-14/6aa829a633d74cac94767ebfeeec1efdjc-g2.png', '', '', '', '', '', 0, ''),
(21, 7, '', '3', '', '', 'upload/17-07-14/3e00553ccc13e16a3aa3a7561b92b62fjc-g3.png', '', '', '', '', '', 0, ''),
(22, 7, '', '4', '', '', 'upload/17-07-14/3f2f7ec5238e9f0e83921fb721edba57jc-g4.png', '', '', '', '', '', 0, ''),
(23, 8, '8', 'tz1', '', '', 'upload/17-07-14/3cfd361c929484d83edf6b8580ed2932jc-tz1.png', '', '66 RMB', '', '', '', 0, ''),
(24, 8, '8', 'tz2', '', '', 'upload/17-07-14/ae50a95e898345d0c01a8d58d5034de3jc-tz3.png', '', '77 RMB', '', '', '', 0, ''),
(25, 8, '8', 'tz3', '', '', 'upload/17-07-14/cd8131d462c3616e8bf479f333496b27jc-tz2.png', '', '88 RMB', '', '', '', 0, ''),
(26, 8, '8', 'tz4', '', '', 'upload/17-07-14/882c39cffa6ec653643c57d65c4f1cb3jc-tz4.png', '', '99 RMB', '', '', '', 0, ''),
(27, 6, '9', 'QACTE CG', '', 'Pink skirt', 'upload/17-07-14/0d76b11f62eceda153b4db882aa2ed5ec-12.jpg', '', '￥ 1680', '', '2017', '', 16000, 'upload/17-07-14/0d76b11f62eceda153b4db882aa2ed5ec-01.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `position`
--

INSERT INTO `position` (`posid`, `posname`) VALUES
(3, '轻奢品质'),
(4, '为你定制'),
(5, '惊喜活动'),
(6, '轮播图'),
(7, '头像'),
(8, '转化'),
(9, '设计师');

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
