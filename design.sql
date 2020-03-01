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
-- テーブルの構造 `design`
--

CREATE TABLE `design` (
  `design_id` int(11) NOT NULL COMMENT 'デザインID',
  `design` varchar(50) DEFAULT NULL COMMENT 'その他デザイン'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='デザイン';

--
-- テーブルのデータのダンプ `design`
--

INSERT INTO `design` (`design_id`, `design`) VALUES
(0, '0'),
(1, 'spring.png'),
(2, 'summer.png'),
(3, 'autumn.png'),
(4, 'winter.png'),
(5, 'design1.png'),
(6, 'design2.png'),
(7, 'design3.png');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`design_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
