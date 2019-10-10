-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: Oct 20, 2008, 12:32 PM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `photoalbum`
--

-- --------------------------------------------------------

--
-- 資料表格式： `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) collate utf8_unicode_ci NOT NULL default '',
  `passwd` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 列出以下資料庫的數據： `admin`
--

INSERT INTO `admin` (`username`, `passwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- 資料表格式： `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `album_id` int(11) unsigned NOT NULL auto_increment,
  `album_date` datetime default NULL,
  `album_location` varchar(255) collate utf8_unicode_ci default NULL,
  `album_title` varchar(255) collate utf8_unicode_ci default NULL,
  `album_desc` text collate utf8_unicode_ci,
  PRIMARY KEY  (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- 列出以下資料庫的數據： `album`
--

INSERT INTO `album` (`album_id`, `album_date`, `album_location`, `album_title`, `album_desc`) VALUES
(1, '2008-10-20 12:11:53', '清水', '清水路邊老攤冰店', '清水路邊老攤冰店，很古早味的冰。'),
(2, '2008-10-20 12:13:08', '樹太老定食', '一家三口聚餐', '樹太老定食，不錯吃。'),
(3, '2008-10-20 12:14:37', '大翔書局', '十月份慶生', '幫朋友小朋友十月份慶生'),
(4, '2008-10-20 12:15:16', '三育書院', '三育書院', '三育書院很漂亮，假日可以進去逛逛。'),
(5, '2008-10-20 12:16:18', '文淵閣工作室', '忙碌的工作室', '大家忙著做卡片，很忙啊！'),
(6, '2008-10-20 12:17:22', '清水牛肉麵', '兒子吃牛肉麵', '清水牛肉麵，很好吃，看兒子的樣子就知道了。'),
(7, '2008-10-20 12:18:31', '埔里往武嶺的路上', '武嶺單車之旅', '武嶺，我來了。'),
(8, '2008-10-20 12:22:39', '高美溼地', '高美溼地', '高美溼地，怎麼拍都好看。'),
(9, '2008-10-20 12:24:31', '各處', '可愛的兒子', '嗯，真是可愛，誰生的嘛～～～');

-- --------------------------------------------------------

--
-- 資料表格式： `albumphoto`
--

CREATE TABLE IF NOT EXISTS `albumphoto` (
  `ap_id` int(11) unsigned NOT NULL auto_increment,
  `album_id` int(11) unsigned default NULL,
  `ap_subject` varchar(255) collate utf8_unicode_ci default NULL,
  `ap_date` datetime default NULL,
  `ap_picurl` varchar(100) collate utf8_unicode_ci default NULL,
  `ap_hits` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`ap_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

--
-- 列出以下資料庫的數據： `albumphoto`
--

INSERT INTO `albumphoto` (`ap_id`, `album_id`, `ap_subject`, `ap_date`, `ap_picurl`, `ap_hits`) VALUES
(1, 1, '清水路邊老攤冰店', '2008-10-20 12:13:03', 'IMAGE_042.jpg', 0),
(2, 1, '清水路邊老攤冰店', '2008-10-20 12:13:03', 'IMAGE_043.jpg', 0),
(3, 1, '清水路邊老攤冰店', '2008-10-20 12:13:03', 'IMAGE_044.jpg', 0),
(4, 1, '清水路邊老攤冰店', '2008-10-20 12:13:03', 'IMAGE_045.jpg', 0),
(5, 2, '樹太老定食', '2008-10-20 12:13:48', 'IMAGE_052.jpg', 0),
(6, 2, '樹太老定食', '2008-10-20 12:13:48', 'IMAGE_053.jpg', 0),
(7, 2, '樹太老定食', '2008-10-20 12:13:48', 'IMAGE_054.jpg', 0),
(8, 2, '樹太老定食', '2008-10-20 12:13:49', 'IMAGE_058.jpg', 0),
(9, 2, '樹太老定食', '2008-10-20 12:13:49', 'IMAGE_059.jpg', 0),
(10, 2, '樹太老定食', '2008-10-20 12:14:24', 'IMAGE_061.jpg', 0),
(11, 2, '樹太老定食', '2008-10-20 12:14:24', 'IMAGE_062.jpg', 0),
(12, 3, '十月份慶生', '2008-10-20 12:15:12', '200809202004_076.jpg', 0),
(13, 3, '十月份慶生', '2008-10-20 12:15:12', '200809202004_077.jpg', 0),
(14, 4, '三育書院', '2008-10-20 12:16:06', 'IMAGE_00073.jpg', 0),
(15, 4, '三育書院', '2008-10-20 12:16:06', 'IMAGE_00075.jpg', 0),
(16, 4, '三育書院', '2008-10-20 12:16:06', 'IMAGE_00076.jpg', 0),
(17, 4, '三育書院', '2008-10-20 12:16:06', 'IMAGE_00078.jpg', 0),
(18, 4, '三育書院', '2008-10-20 12:16:06', 'IMAGE_00079.jpg', 0),
(19, 5, '忙碌的工作室', '2008-10-20 12:17:20', 'IMAGE_011.jpg', 0),
(20, 5, '忙碌的工作室', '2008-10-20 12:17:20', 'IMAGE_012.jpg', 0),
(21, 5, '忙碌的工作室', '2008-10-20 12:17:20', 'IMAGE_013.jpg', 0),
(22, 5, '忙碌的工作室', '2008-10-20 12:17:20', 'IMAGE_015.jpg', 0),
(23, 6, '清水牛肉麵', '2008-10-20 12:18:28', 'IMAGE_034.jpg', 0),
(24, 6, '清水牛肉麵', '2008-10-20 12:18:28', 'IMAGE_035.jpg', 0),
(25, 6, '清水牛肉麵', '2008-10-20 12:18:28', 'IMAGE_041.jpg', 0),
(26, 6, '清水牛肉麵', '2008-10-20 12:18:28', 'IMAGE_048.jpg', 0),
(27, 7, '武嶺單車之旅', '2008-10-20 12:19:50', 'DSC09616.JPG', 0),
(28, 7, '武嶺單車之旅', '2008-10-20 12:19:50', 'DSC09627.JPG', 0),
(29, 7, '武嶺單車之旅', '2008-10-20 12:19:50', 'DSC09631.JPG', 0),
(30, 7, '武嶺單車之旅', '2008-10-20 12:19:50', 'DSC09678.JPG', 0),
(31, 7, '武嶺單車之旅', '2008-10-20 12:19:50', 'DSC09685.JPG', 0),
(32, 7, '武嶺單車之旅', '2008-10-20 12:20:18', 'DSC09689.JPG', 0),
(33, 7, '武嶺單車之旅', '2008-10-20 12:20:18', 'DSC09692.JPG', 0),
(34, 7, '武嶺單車之旅', '2008-10-20 12:20:18', 'DSC09695.JPG', 0),
(35, 8, '高美溼地', '2008-10-20 12:23:11', 'IMAGE_049.jpg', 0),
(36, 8, '高美溼地', '2008-10-20 12:23:11', 'IMAGE_050.jpg', 0),
(37, 8, '高美溼地', '2008-10-20 12:23:11', 'IMAGE_051.jpg', 0),
(38, 9, '可愛的兒子', '2008-10-20 12:25:25', '200809201134_072.jpg', 0),
(39, 9, '可愛的兒子', '2008-10-20 12:25:25', 'DSCN3442.JPG', 0),
(40, 9, '可愛的兒子', '2008-10-20 12:25:25', 'DSCN3449.JPG', 0),
(41, 9, '可愛的兒子', '2008-10-20 12:25:25', 'DSCN3562.JPG', 0),
(42, 9, '可愛的兒子', '2008-10-20 12:25:25', 'DSCN3693.JPG', 0),
(43, 9, '可愛的兒子', '2008-10-20 12:25:44', 'IMAGE_00038.jpg', 0),
(44, 9, '可愛的兒子', '2008-10-20 12:25:44', 'IMAGE_00040.jpg', 0),
(45, 9, '可愛的兒子', '2008-10-20 12:25:44', 'IMAGE_00135.jpg', 0);
