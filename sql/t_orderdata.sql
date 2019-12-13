-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-13 19:49:03
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.3.10

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
-- 資料表結構 `t_orderdata`
--

CREATE TABLE `t_orderdata` (
  `m_id` int(10) NOT NULL,
  `travel_1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `travel_2` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `t_orderdata`
--

INSERT INTO `t_orderdata` (`m_id`, `travel_1`, `travel_2`) VALUES
(0, '水上活動', '小琉球-小綠龜潛水'),
(0, '烤肉', '品鮮火鍋烤肉吃到飽'),
(0, '廟', '關廟幸山堂');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
