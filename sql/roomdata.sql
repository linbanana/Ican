-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-11-13 07:39:29
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
-- 資料表結構 `roomdata`
--

CREATE TABLE `roomdata` (
  `r_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `r_model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `r_price` int(10) NOT NULL,
  `r_disc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `roomdata`
--

INSERT INTO `roomdata` (`r_id`, `r_model`, `r_price`, `r_disc`) VALUES
('001', 'Single', 1000, 'Single room, room has one bed for 1 perso'),
('002', 'Double', 2000, 'Double room, room has one bed for 2 perso'),
('003', 'Triple', 3000, 'Triple room, room has one bed for 3 perso'),
('004', 'Quadruple', 4000, 'Quadruple room, room has one bed for 4 perso');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
