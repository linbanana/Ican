-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-11-13 07:39:34
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
-- 資料表結構 `rmodeldata`
--

CREATE TABLE `rmodeldata` (
  `r_model` varchar(50) DEFAULT NULL,
  `r_price` int(10) NOT NULL,
  `r_num` int(10) NOT NULL,
  `r_disc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `rmodeldata`
--

INSERT INTO `rmodeldata` (`r_model`, `r_price`, `r_num`, `r_disc`) VALUES
('Single', 1000, 20, '房間有一張床，供1人入住'),
('雙人房', 1500, 5, '房間有一張雙人床，供2人入住'),
('三人房', 2500, 8, '房間有一張雙人床還有加一張單人床，供3人入住'),
('三加一人房', 3000, 5, '房間有兩張雙人床，供4人入住');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
