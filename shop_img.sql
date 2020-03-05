-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `hew2`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `shop_img`
--

CREATE TABLE `shop_img` (
  `img_id` int(11) NOT NULL COMMENT '店舗写真のID',
  `shop_id` int(11) DEFAULT NULL COMMENT '店舗ID',
  `img` varchar(100) DEFAULT NULL COMMENT '写真URL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='店舗の写真';

--
-- テーブルのデータのダンプ `shop_img`
--

INSERT INTO `shop_img` (`img_id`, `shop_id`, `img`) VALUES
(1, 1, '752896-5c81d89e97d39-l.png'),
(2, 2, '18795151.jpg'),
(3, 3, '9512404.jpg'),
(4, 4, '19782026.jpg'),
(5, 5, '16226070.jpg'),
(6, 6, '1591277.jpg'),
(7, 7, '6615489.jpg'),
(8, 8, '19601768.jpg'),
(9, 9, '19221287.jpg'),
(10, 10, '9575376.jpg'),
(11, 11, '20398873.jpg'),
(12, 12, '7746571.jpg'),
(13, 13, '10656088.jpg'),
(14, 14, '21983010.jpg'),
(15, 15, '13462126.jpg'),
(16, 16, '19468495.jpg'),
(17, 17, '1045977.jpg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `shop_img`
--
ALTER TABLE `shop_img`
  ADD PRIMARY KEY (`img_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `shop_img`
--
ALTER TABLE `shop_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '店舗写真のID', AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
