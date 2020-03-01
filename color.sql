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
-- テーブルの構造 `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL COMMENT 'カラーID',
  `genre_id` int(11) DEFAULT NULL COMMENT 'ジャンルID',
  `code1` varchar(30) DEFAULT NULL COMMENT 'カラーコード1',
  `code2` varchar(30) DEFAULT NULL COMMENT 'カラーコード2',
  `color_name` varchar(50) NOT NULL COMMENT '色ジャンルの名前'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='カラーコード';

--
-- テーブルのデータのダンプ `color`
--

INSERT INTO `color` (`color_id`, `genre_id`, `code1`, `code2`, `color_name`) VALUES
(1, 0, '#8AFF6E', '#EEFFE8', 'デフォルト'),
(2, 1, '#02820e', '#cce6ce', '和食'),
(3, 2, '#ff871e', '#ffe7d2', '洋食'),
(4, 3, '#0015c9', '#ccd0f4', '魚介・海鮮'),
(5, 4, '#92d681', '#daf1d4', 'イタリアン'),
(6, 5, '#ff8989', '#ffd7d7', '中華'),
(7, 6, '#ffadad', '#ffe3e3', '韓国'),
(8, 7, '#0015c9', '#ccd0f4', '居酒屋'),
(9, 8, '#ffaf8a', '#ffe4d7', 'スペイン'),
(10, 9, '#dabc92', '#f3e8da', 'カフェ'),
(11, 10, '#f8e469', '#fefae1', 'フレンチ'),
(12, 11, '#b272b4', '#e5cfe6', 'バー・お酒'),
(13, 0, '#ffd4d4', '#fff7f7', '春'),
(14, 0, '#69c6f0', '#ccecfa', '夏'),
(15, 0, '#ac5238', '#f8e3dd', '秋'),
(16, 0, '#a5aad4', '#edeef7', '冬');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'カラーID', AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
