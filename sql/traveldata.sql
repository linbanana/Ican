-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-09 05:34:09
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ican`
--

-- --------------------------------------------------------

--
-- 資料表結構 `traveldata`
--

CREATE TABLE `traveldata` (
  `m_id` int(10) NOT NULL,
  `o_num` int(10) NOT NULL,
  `t_id` int(20) NOT NULL,
  `t_class` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `t_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `t_ferry` enum('公營','民營') COLLATE utf8_unicode_ci NOT NULL,
  `t_disc` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `traveldata`
--

INSERT INTO `traveldata` (`m_id`, `o_num`, `t_id`, `t_class`, `t_name`, `t_ferry`, `t_disc`) VALUES
(0, 0, 1, '水上活動', '小琉球海底觀光潛水船', '', ''),
(0, 0, 2, '水上活動', '威尼斯海灘', '', ''),
(0, 0, 3, '潮間帶探索', '多仔坪', '', ''),
(0, 0, 4, '潮間帶探索', '杉福漁港北岸', '', ''),
(0, 0, 5, '特色景點', '白沙漁港', '', ''),
(0, 0, 6, '特色景點', '花瓶岩', '', ''),
(0, 0, 7, '特色景點', '望海亭', '', ''),
(0, 0, 8, '特色景點', '蛤板灣沙灘', '', ''),
(0, 0, 9, '特色景點', '白燈塔', '', ''),
(0, 0, 10, '特色景點', '龍蝦洞', '', ''),
(0, 0, 11, '美食小吃', '相思麵', '', ''),
(0, 0, 12, '美食小吃', '高記在地小吃', '', ''),
(0, 0, 13, '美食小吃', '休息讚雪花冰店', '', ''),
(0, 0, 14, '美食小吃', '花媽剉冰', '', ''),
(0, 0, 15, '美食小吃', '香串串烤肉專賣店', '', ''),
(0, 0, 16, '美食小吃', '餃神二代水餃', '', ''),
(0, 0, 17, '美食小吃', '小琉球~逍遙餐館~', '', ''),
(0, 0, 18, '美食小吃', '廟口點心站', '', ''),
(0, 0, 19, '美食小吃', '雲集美食家', '', ''),
(0, 0, 20, '美食小吃', '茶七茶八小琉球店', '', ''),
(0, 0, 21, '美食小吃', ' 小甜甜手工麻花捲', '', ''),
(0, 0, 22, '美食小吃', '琉球寶烘焙麻花捲', '', ''),
(0, 0, 23, '美食小吃', ' 秀月手工麻花捲', '', ''),
(0, 0, 24, '美食小吃', ' 小琉球星夜小島烘炸手工麻花捲', '', ''),
(0, 0, 25, '美食小吃', '加一家天然酵母手工麻花捲專賣', '', ''),
(0, 0, 26, '美食小吃', ' 黃家手工麻花捲', '', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `traveldata`
--
ALTER TABLE `traveldata`
  ADD PRIMARY KEY (`t_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `traveldata`
--
ALTER TABLE `traveldata`
  MODIFY `t_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
