-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-17 15:34:35
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.2.24

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
-- 資料表結構 `orderdata`
--

CREATE TABLE `orderdata` (
  `o_num` int(10) NOT NULL,
  `m_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `o_phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `o_citime` date NOT NULL,
  `o_day` int(10) NOT NULL,
  `o_total` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `o_cotime` date NOT NULL,
  `r_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `orderdata`
--

INSERT INTO `orderdata` (`o_num`, `m_id`, `o_phone`, `o_citime`, `o_day`, `o_total`, `o_cotime`, `r_id`) VALUES
(50, '48', '0933666565', '2019-12-17', 2, '3000', '2019-12-18', 3),
(51, '48', '0933666565', '2019-12-17', 3, '7200', '2019-12-19', 4),
(52, '48', '0933666565', '2019-12-17', 3, '7200', '2019-12-19', 6);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `orderdata`
--
ALTER TABLE `orderdata`
  ADD PRIMARY KEY (`o_num`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orderdata`
--
ALTER TABLE `orderdata`
  MODIFY `o_num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
