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
-- テーブルの構造 `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL COMMENT '市町村ID',
  `pre_id` int(11) DEFAULT NULL COMMENT '都道府県ID',
  `name` varchar(50) DEFAULT NULL COMMENT '地域名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='市町村';

--
-- テーブルのデータのダンプ `area`
--

INSERT INTO `area` (`area_id`, `pre_id`, `name`) VALUES
(1, 27, '梅田'),
(2, 27, '北新地'),
(3, 27, '茶屋町・中崎町'),
(4, 27, 'なんば'),
(5, 27, '心斎橋'),
(6, 27, '道頓堀'),
(7, 27, '堀江'),
(8, 27, '南船堀'),
(9, 27, '西長堀'),
(10, 27, '福島'),
(11, 27, '野田'),
(12, 27, '西九条・大阪ドーム'),
(13, 27, '大阪市ない南西部'),
(14, 27, '大阪ベイエリア'),
(15, 27, '天満'),
(16, 27, '西天満・南森・天満橋'),
(17, 27, '京橋・OBP'),
(18, 27, '淀屋橋・本町・北浜'),
(19, 27, '谷町・谷町四丁目'),
(20, 27, '上本町'),
(21, 27, '鶴橋'),
(22, 27, '天王寺'),
(23, 27, '新世界'),
(24, 27, '南河内'),
(25, 27, '泉南'),
(26, 27, '阪南'),
(27, 27, '大阪市内北東部'),
(28, 27, '東成区・生野区'),
(29, 27, '都島区・旭区'),
(30, 27, '城東区・鶴見区'),
(31, 27, '東淀川区'),
(32, 27, '新大阪・西中島・十三'),
(33, 27, '江坂・千里中央'),
(34, 27, '豊中・池田・高槻'),
(35, 27, '堺'),
(36, 27, '泉北');

-- --------------------------------------------------------

--
-- テーブルの構造 `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL COMMENT 'カラーID',
  `genre_id` int(11) DEFAULT NULL COMMENT 'ジャンルID',
  `code1` varchar(30) DEFAULT NULL COMMENT 'カラーコード1',
  `code2` varchar(30) DEFAULT NULL COMMENT 'カラーコード2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='カラーコード';

-- --------------------------------------------------------

--
-- テーブルの構造 `commitment`
--

CREATE TABLE `commitment` (
  `com_id` int(2) NOT NULL COMMENT 'こだわり条件ID',
  `commitment` varchar(50) DEFAULT NULL COMMENT 'こだわり条件名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='こだわり条件';

--
-- テーブルのデータのダンプ `commitment`
--

INSERT INTO `commitment` (`com_id`, `commitment`) VALUES
(0, '未選択'),
(1, '食べ放題'),
(2, '飲み放題'),
(3, '個室'),
(4, 'おしゃれ'),
(5, 'ワイン'),
(6, '日本酒');

-- --------------------------------------------------------

--
-- テーブルの構造 `conditions`
--

CREATE TABLE `conditions` (
  `con_id` int(11) NOT NULL COMMENT '条件登録ID',
  `user_id` int(11) DEFAULT NULL COMMENT '利用者ID',
  `pre_id` int(11) DEFAULT NULL COMMENT '都道府県ID',
  `genre_id` int(11) DEFAULT NULL COMMENT 'ジャンルID',
  `cuisine_id` int(11) DEFAULT NULL COMMENT '料理ジャンルID',
  `use_id` int(11) DEFAULT NULL COMMENT '利用シーンID',
  `com_id` int(11) DEFAULT NULL COMMENT 'こだわり条件ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='条件登録';

-- --------------------------------------------------------

--
-- テーブルの構造 `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL COMMENT 'コースID',
  `shop_id` int(11) DEFAULT NULL COMMENT '店舗ID',
  `name` varchar(100) DEFAULT NULL COMMENT 'コース名',
  `price` char(10) DEFAULT NULL COMMENT 'コース金額',
  `other` varchar(500) DEFAULT NULL COMMENT 'コース内のその他',
  `title` varchar(300) NOT NULL COMMENT 'タイトル',
  `img` varchar(100) NOT NULL COMMENT '写真'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='コース情報';


-- --------------------------------------------------------

--
-- テーブルの構造 `course_img`
--

CREATE TABLE `course_img` (
  `img_id` int(11) NOT NULL COMMENT 'コース写真のID',
  `course_id` int(11) DEFAULT NULL COMMENT 'コースID',
  `img` varchar(100) DEFAULT NULL COMMENT '写真URL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='コースの写真';

-- --------------------------------------------------------

--
-- テーブルの構造 `cuisine`
--

CREATE TABLE `cuisine` (
  `cuisine_id` int(2) NOT NULL COMMENT '料理ジャンルID',
  `cuisine` varchar(50) DEFAULT NULL COMMENT '料理ジャンル名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='料理ジャンル';

--
-- テーブルのデータのダンプ `cuisine`
--

INSERT INTO `cuisine` (`cuisine_id`, `cuisine`) VALUES
(0, '未登録'),
(1, '寿司'),
(2, '焼肉'),
(3, 'ラーメン'),
(4, '焼き鳥'),
(5, 'パスタ'),
(6, '鍋');

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
(0, '未登録');

-- --------------------------------------------------------

--
-- テーブルの構造 `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(2) NOT NULL COMMENT 'ジャンルID',
  `genre` varchar(50) DEFAULT NULL COMMENT 'ジャンル名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ジャンル';

--
-- テーブルのデータのダンプ `genre`
--

INSERT INTO `genre` (`genre_id`, `genre`) VALUES
(0, '未登録'),
(1, '和風'),
(2, '洋風'),
(3, '魚界・海鮮'),
(4, 'イタリアン'),
(5, '中華'),
(6, '韓国'),
(7, '居酒屋'),
(8, 'スペイン'),
(9, 'カフェ'),
(10, 'フレンチ'),
(11, 'バー・お酒');

-- --------------------------------------------------------

--
-- テーブルの構造 `monthly`
--

CREATE TABLE `monthly` (
  `mon_id` int(2) NOT NULL COMMENT '月額ID',
  `name` varchar(20) DEFAULT NULL COMMENT '名前',
  `monthly` int(11) DEFAULT NULL COMMENT '月額料金',
  `description` varchar(100) DEFAULT NULL COMMENT '月額の内容'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='月額情報';

--
-- テーブルのデータのダンプ `monthly`
--

INSERT INTO `monthly` (`mon_id`, `name`, `monthly`, `description`) VALUES
(1, 'ライトプラン', 1980, '簡単にデザインを決めたい人向け'),
(2, 'プレミアムプラン', 2980, '様々なデザインを使いたい人向け');

-- --------------------------------------------------------

--
-- テーブルの構造 `prefectures`
--

CREATE TABLE `prefectures` (
  `pre_id` int(2) NOT NULL COMMENT '都道府県ID',
  `prefectures` varchar(10) NOT NULL COMMENT '都道府県'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='都道府県';

--
-- テーブルのデータのダンプ `prefectures`
--

INSERT INTO `prefectures` (`pre_id`, `prefectures`) VALUES
(0, '未選択'),
(1, '北海道'),
(2, '青森県'),
(3, '岩手県'),
(4, '宮城県'),
(5, '秋田県'),
(6, '山形県'),
(7, '福島県'),
(8, '茨城県'),
(9, '栃木県'),
(10, '群馬県'),
(11, '埼玉県'),
(12, '千葉県'),
(13, '東京都'),
(14, '神奈川県'),
(15, '新潟県'),
(16, '富山県'),
(17, '石川県'),
(18, '福井県'),
(19, '山梨県'),
(20, '長野県'),
(21, '岐阜県'),
(22, '静岡県'),
(23, '愛知県'),
(24, '三重県'),
(25, '滋賀県'),
(26, '京都府'),
(27, '大阪府'),
(28, '兵庫県'),
(29, '奈良県'),
(30, '和歌山県'),
(31, '鳥取県'),
(32, '島根県'),
(33, '岡山県'),
(34, '広島県'),
(35, '山口県'),
(36, '徳島県'),
(37, '香川県'),
(38, '愛媛県'),
(39, '高知県'),
(40, '福岡県'),
(41, '佐賀県'),
(42, '長崎県'),
(43, '熊本県'),
(44, '大分県'),
(45, '宮崎県'),
(46, '鹿児島県'),
(47, '沖縄県');

-- --------------------------------------------------------

--
-- テーブルの構造 `reservation`
--

CREATE TABLE `reservation` (
  `reser_id` int(11) NOT NULL COMMENT '予約ID',
  `user_id` int(11) DEFAULT NULL COMMENT '利用者ID',
  `shop_id` int(11) DEFAULT NULL COMMENT '店舗ID',
  `reser_date` date DEFAULT NULL COMMENT '来店日',
  `reser_time` varchar(10) DEFAULT NULL COMMENT '来店時間',
  `reser_many` varchar(10) DEFAULT NULL COMMENT '来店人数',
  `reser_course` int(11) DEFAULT NULL COMMENT 'コースID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='予約';

-- --------------------------------------------------------

--
-- テーブルの構造 `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL COMMENT '店舗ID',
  `name` varchar(100) DEFAULT NULL COMMENT '店舗名',
  `addres` varchar(100) DEFAULT NULL COMMENT '店舗住所',
  `tel` char(20) DEFAULT NULL COMMENT '電話番号',
  `mail` varchar(50) DEFAULT NULL COMMENT '店舗メール',
  `login_id` varchar(7) NOT NULL COMMENT 'ログインID',
  `pass` varchar(16) DEFAULT NULL COMMENT 'パスワード',
  `monthly` int(2) DEFAULT NULL COMMENT '課金状況'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='店舗';

-- --------------------------------------------------------

--
-- テーブルの構造 `shop_design`
--

CREATE TABLE `shop_design` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL COMMENT '店舗ID',
  `color_id` int(11) DEFAULT NULL COMMENT 'カラーID',
  `design_id` int(11) DEFAULT NULL COMMENT 'デザインID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='店舗デザイン';

-- --------------------------------------------------------

--
-- テーブルの構造 `shop_img`
--

CREATE TABLE `shop_img` (
  `img_id` int(11) NOT NULL COMMENT '店舗写真のID',
  `shop_id` int(11) DEFAULT NULL COMMENT '店舗ID',
  `img` varchar(100) DEFAULT NULL COMMENT '写真URL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='店舗の写真';

-- --------------------------------------------------------

--
-- テーブルの構造 `shop_info`
--

CREATE TABLE `shop_info` (
  `id` int(11) NOT NULL COMMENT '店舗情報ID',
  `shop_id` int(11) DEFAULT NULL COMMENT '店舗ID',
  `title` varchar(20) DEFAULT NULL COMMENT 'タイトル',
  `info` varchar(300) DEFAULT NULL COMMENT '紹介文'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `shop_pos`
--

CREATE TABLE `shop_pos` (
  `id` int(11) NOT NULL COMMENT '店舗情報の追記ID',
  `shop_id` int(11) DEFAULT NULL COMMENT '店舗ID',
  `genre_id` int(11) DEFAULT NULL COMMENT 'ジャンルID',
  `access` varchar(150) DEFAULT NULL COMMENT 'アクセス方法',
  `shop_time` varchar(100) DEFAULT NULL COMMENT '営業時間',
  `budget` varchar(20) NOT NULL COMMENT '予算',
  `holiday` varchar(20) NOT NULL COMMENT '定休日',
  `url` varchar(100) NOT NULL COMMENT 'URL',
  `table_re` varchar(3) NOT NULL COMMENT 'テーブル座席数',
  `counter_re` varchar(3) NOT NULL COMMENT 'カウンター座席数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='店舗情報の追記';


-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL COMMENT '利用者ID',
  `name` varchar(50) DEFAULT NULL COMMENT '名前',
  `tel` char(15) DEFAULT NULL COMMENT '電話番号',
  `gender` int(11) DEFAULT NULL COMMENT '性別',
  `mail` varchar(50) DEFAULT NULL COMMENT 'メール',
  `pass` varchar(15) DEFAULT NULL COMMENT 'パスワード'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='利用者';

-- --------------------------------------------------------

--
-- テーブルの構造 `use_scene`
--

CREATE TABLE `use_scene` (
  `use_id` int(2) NOT NULL COMMENT '利用シーンID',
  `use_scene` varchar(50) DEFAULT NULL COMMENT '利用シーン名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='利用シーン';

--
-- テーブルのデータのダンプ `use_scene`
--

INSERT INTO `use_scene` (`use_id`, `use_scene`) VALUES
(0, '未選択'),
(1, '宴会'),
(2, '接待'),
(3, 'デート'),
(4, '家族'),
(5, '女子会'),
(6, '合コン');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `pre_id` (`pre_id`);

--
-- テーブルのインデックス `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- テーブルのインデックス `commitment`
--
ALTER TABLE `commitment`
  ADD PRIMARY KEY (`com_id`);

--
-- テーブルのインデックス `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`con_id`);

--
-- テーブルのインデックス `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- テーブルのインデックス `course_img`
--
ALTER TABLE `course_img`
  ADD PRIMARY KEY (`img_id`);

--
-- テーブルのインデックス `cuisine`
--
ALTER TABLE `cuisine`
  ADD PRIMARY KEY (`cuisine_id`);

--
-- テーブルのインデックス `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`design_id`);

--
-- テーブルのインデックス `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- テーブルのインデックス `monthly`
--
ALTER TABLE `monthly`
  ADD PRIMARY KEY (`mon_id`);

--
-- テーブルのインデックス `prefectures`
--
ALTER TABLE `prefectures`
  ADD PRIMARY KEY (`pre_id`);

--
-- テーブルのインデックス `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reser_id`);

--
-- テーブルのインデックス `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- テーブルのインデックス `shop_design`
--
ALTER TABLE `shop_design`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `shop_img`
--
ALTER TABLE `shop_img`
  ADD PRIMARY KEY (`img_id`);

--
-- テーブルのインデックス `shop_info`
--
ALTER TABLE `shop_info`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `shop_pos`
--
ALTER TABLE `shop_pos`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- テーブルのインデックス `use_scene`
--
ALTER TABLE `use_scene`
  ADD PRIMARY KEY (`use_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '市町村ID', AUTO_INCREMENT=37;

--
-- テーブルのAUTO_INCREMENT `conditions`
--
ALTER TABLE `conditions`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '条件登録ID';

--
-- テーブルのAUTO_INCREMENT `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'コースID', AUTO_INCREMENT=3;

--
-- テーブルのAUTO_INCREMENT `course_img`
--
ALTER TABLE `course_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'コース写真のID', AUTO_INCREMENT=5;

--
-- テーブルのAUTO_INCREMENT `monthly`
--
ALTER TABLE `monthly`
  MODIFY `mon_id` int(2) NOT NULL AUTO_INCREMENT COMMENT '月額ID', AUTO_INCREMENT=3;

--
-- テーブルのAUTO_INCREMENT `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reser_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '予約ID';

--
-- テーブルのAUTO_INCREMENT `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '店舗ID', AUTO_INCREMENT=11;

--
-- テーブルのAUTO_INCREMENT `shop_design`
--
ALTER TABLE `shop_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルのAUTO_INCREMENT `shop_img`
--
ALTER TABLE `shop_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '店舗写真のID';

--
-- テーブルのAUTO_INCREMENT `shop_info`
--
ALTER TABLE `shop_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '店舗情報ID', AUTO_INCREMENT=5;

--
-- テーブルのAUTO_INCREMENT `shop_pos`
--
ALTER TABLE `shop_pos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '店舗情報の追記ID', AUTO_INCREMENT=4;

--
-- テーブルのAUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '利用者ID';

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`pre_id`) REFERENCES `prefectures` (`pre_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
