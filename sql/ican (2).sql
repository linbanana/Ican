-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-11-15 04:04:26
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
  `r_model` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `r_price` int(10) NOT NULL,
  `r_num` int(10) NOT NULL,
  `r_disc` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `rmodeldata`
--

INSERT INTO `rmodeldata` (`r_model`, `r_price`, `r_num`, `r_disc`) VALUES
('單人/雙人客房', 1500, 8, '各式單雙人主題套房可供選擇'),
('四人家庭客房', 2400, 8, '各式家庭風格及主題套房可供選擇'),
('套房', 6000, 4, '有兩種高級式套房分別是總統風格及商務式風格');

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
('001', '單人/雙人客房', 1500, '各式單雙人主題套房可供選擇'),
('002', '單人/雙人客房', 1500, '各式單雙人主題套房可供選擇'),
('003', '單人/雙人客房', 1500, '各式單雙人主題套房可供選擇'),
('004', '單人/雙人客房', 1500, '各式單雙人主題套房可供選擇'),
('005', '單人/雙人客房', 1500, '各式單雙人主題套房可供選擇'),
('006', '單人/雙人客房', 1500, '各式單雙人主題套房可供選擇'),
('007', '單人/雙人客房', 1500, '各式單雙人主題套房可供選擇'),
('008', '單人/雙人客房', 1500, '各式單雙人主題套房可供選擇'),
('009', '四人家庭客房', 2400, '各式家庭風格及主題套房可供選擇'),
('010', '四人家庭客房', 2400, '各式家庭風格及主題套房可供選擇'),
('011', '四人家庭客房', 2400, '各式家庭風格及主題套房可供選擇'),
('012', '四人家庭客房', 2400, '各式家庭風格及主題套房可供選擇'),
('013', '四人家庭客房', 2400, '各式家庭風格及主題套房可供選擇'),
('014', '四人家庭客房', 2400, '各式家庭風格及主題套房可供選擇'),
('015', '四人家庭客房', 2400, '各式家庭風格及主題套房可供選擇'),
('016', '四人家庭客房', 2400, '各式家庭風格及主題套房可供選擇'),
('017', '套房', 6000, '有兩種高級式套房分別是總統風格及商務式風格'),
('018', '套房', 6000, '有兩種高級式套房分別是總統風格及商務式風格'),
('019', '套房', 6000, '有兩種高級式套房分別是總統風格及商務式風格'),
('020', '套房', 6000, '有兩種高級式套房分別是總統風格及商務式風格');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
