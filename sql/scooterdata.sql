-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-11-13 07:39:22
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
-- 資料表結構 `scooterdata`
--

CREATE TABLE `scooterdata` (
  `s_id` int(10) NOT NULL,
  `s_model` varchar(50) NOT NULL,
  `s_price` int(10) NOT NULL,
  `s_num` int(10) NOT NULL,
  `s_disc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `scooterdata`
--

INSERT INTO `scooterdata` (`s_id`, `s_model`, `s_price`, `s_num`, `s_disc`) VALUES
(1, 'wew001', 500, 10, 'HS1鷹眼雙大燈(車款式樣與顏色以實車為準)'),
(2, 'www002', 350, 20, 'LEDV形光條設計搭配燻黑尾燈，顯現出豐富細膩的科技感'),
(3, 'eee003', 240, 30, '跑車級彩晶儀表(車款式樣與顏色以實車為準)'),
(4, 'eed004', 630, 20, '最新BOSCH ABS 9.1MB搭載(車款式樣與顏色以實車為準)'),
(5, 'sdd005', 200, 30, '後輪單缸卡鉗(車款式樣與顏色以實車為準)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
