-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-17 08:35:20
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
-- 資料庫： `icsn`
--

-- --------------------------------------------------------

--
-- 資料表結構 `t_orderdata`
--

CREATE TABLE `t_orderdata` (
  `o_num` int(10) NOT NULL,
  `m_id` int(10) NOT NULL,
  `daynum` int(11) NOT NULL,
  `travel_1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `travel_2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `travel_3` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `t_orderdata`
--

INSERT INTO `t_orderdata` (`o_num`, `m_id`, `daynum`, `travel_1`, `travel_2`, `travel_3`) VALUES
(0, 0, 1, '水上活動', '小琉球-小綠龜潛水', NULL),
(0, 0, 2, '烤肉', '品鮮火鍋烤肉吃到飽', NULL),
(0, 0, 3, '廟', '關廟幸山堂', NULL),
(0, 0, 4, '水上活動', '小琉球-小綠龜潛水', NULL),
(0, 0, 5, '烤肉', '品鮮火鍋烤肉吃到飽', NULL),
(0, 0, 6, '廟', '關廟幸山堂', NULL),
(0, 48, 7, '寶哥烘炸小琉球麻花捲相思旗艦店', '蛤板灣', '極香碳烤'),
(0, 48, 8, '中澳沙灘', '蛤板灣', '品鮮火鍋烤肉吃到飽'),
(0, 48, 10, '蛤板灣', '蛤板灣', '品鮮火鍋烤肉吃到飽'),
(0, 48, 12, '蛤板灣', '', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `t_orderdata`
--
ALTER TABLE `t_orderdata`
  ADD PRIMARY KEY (`daynum`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `t_orderdata`
--
ALTER TABLE `t_orderdata`
  MODIFY `daynum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
