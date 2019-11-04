-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-11-04 05:59:28
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
-- 資料庫： `qeqe`
--

-- --------------------------------------------------------

--
-- 資料表結構 `memberdata`
--

CREATE TABLE `memberdata` (
  `m_id` int(10) NOT NULL,
  `m_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `m_username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `m_passwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `m_sex` enum('男','女') COLLATE utf8_unicode_ci NOT NULL,
  `m_birthday` date DEFAULT NULL,
  `m_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_level` enum('admin','member') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'member',
  `m_login` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `m_logintime` datetime DEFAULT NULL,
  `m_jointime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `memberdata`
--

INSERT INTO `memberdata` (`m_id`, `m_name`, `m_username`, `m_passwd`, `m_sex`, `m_birthday`, `m_email`, `m_phone`, `m_address`, `m_level`, `m_login`, `m_logintime`, `m_jointime`) VALUES
(1, '系統管理員', 'admin', '$2y$10$FO70lc.3/vTeE0Vaf7O3Jes.UArylzLnnxfZffTF7410vndnvhScm', '男', NULL, NULL, NULL, NULL, 'member', 28, '2019-10-31 09:53:32', '2008-10-20 16:36:15'),
(2, '張惠玲', 'elven', '$2y$10$0BVHeh6R97hTcK4guYStm.d49gdFxLF/4CJgvLo0yIYZaoyMbr4ae', '女', '1987-04-05', 'elven@superstar.com', '0966765556', '台北市濟洲北路12號2樓', 'member', 12, '2016-08-29 11:44:33', '2008-10-21 12:03:12'),
(3, '彭建志', 'jinglun', '$2y$10$WqB2bnMSO/wgBiHSOBV2iuLbrUCsp8VmNJdK2AyIW6IANUL9jeFjC', '男', '1987-07-01', 'jinglun@superstar.com', '0918181111', '台北市敦化南路93號5樓', 'member', 0, NULL, '2008-10-21 12:06:08'),
(4, '謝耿鴻', 'sugie', '$2y$10$6uWtdYATI3b/wMRk.AaqIei852PLf.WjeKm8X.Asl0VTmpxCkqbW6', '男', '1987-08-11', 'edreamer@gmail.com', '0914530768', '台北市中央路201號7樓', 'member', 2, '2016-08-29 14:03:53', '2008-10-21 12:06:08'),
(5, '蔣志明', 'shane', '$2y$10$pWefN9xkeXOKCx59GF6ZJuSGNnIFBY4q/DCmCvAwOFtnoTCujb3Te', '男', '1984-06-20', 'shane@superstar.com', '0946820035', '台北市建國路177號6樓', 'member', 0, NULL, '2008-10-21 12:06:08'),
(6, '王佩珊', 'ivy', '$2y$10$RPrt3YfaSs0d82inYIK6he.JaPqOrisWMqASuxN5g62EyRio.lyEa', '女', '1988-02-15', 'ivy@superstar.com', '0920981230', '台北市忠孝東路520號6樓', 'member', 0, NULL, '2008-10-21 12:06:08'),
(7, '林志宇', 'zhong', '$2y$10$pee.jvO6f4sSKahlc4cLLO9RUMyx8aphyqkSUdwHTNSy4Ax7YPdpq', '男', '1987-05-05', 'zhong@superstar.com', '0951983366', '台北市三民路1巷10號', 'member', 0, NULL, '2008-10-21 12:06:08'),
(8, '李曉薇', 'lala', '$2y$10$oiC9CaGiOdWu.6w5b3.b/Ora6fSuh8Lrbj8Kg5BUPT15O3QptksQS', '女', '1985-08-30', 'lala@superstar.com', '0918123456', '台北市仁愛路100號', 'member', 0, NULL, '2008-10-21 12:06:08'),
(9, '賴秀英', 'crystal', '$2y$10$8Q0.JEGILRM91qAlMmWnB.wpcY.rJEbgNgV5ntIlqZmdGaHPwikji', '女', '1986-12-10', 'crystal@superstar.com', '0907408965', '台北市民族路204號', 'member', 0, NULL, '2008-10-21 12:06:08'),
(10, '張雅琪', 'peggy', '$2y$10$RNqnXDNHkcTI2Zh2bkTKnOesz0FLXhihhT8ZL8OHoMeYSq7jsILMi', '女', '1988-12-01', 'peggy@superstar.com', '0916456723', '台北市建國北路10號', 'member', 0, NULL, '2008-10-21 12:06:08'),
(11, '陳燕博', 'albert', '$2y$10$seMLwqcQRQiWa0jMBAcMMertjLbrPLRGNZoKc0NZ5FxTwWha7W3lm', '男', '1993-08-10', 'albert@superstar.com', '0918976588', '台北市北環路2巷80號', 'member', 0, NULL, '2008-10-21 12:06:08');

-- --------------------------------------------------------

--
-- 資料表結構 `orderdata`
--

CREATE TABLE `orderdata` (
  `o_num` int(10) NOT NULL,
  `o_time` datetime NOT NULL,
  `o_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `o_phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `o_citime` datetime NOT NULL,
  `o_day` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `o_total` int(10) NOT NULL,
  `o_cotime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `orderdata`
--

INSERT INTO `orderdata` (`o_num`, `o_time`, `o_name`, `o_phone`, `o_citime`, `o_day`, `o_total`, `o_cotime`) VALUES
(1, '2019-10-21 10:37:26', '李連結', '0932995662', '2019-11-15 06:33:22', '2', 2500, '2019-11-14 09:36:28'),
(2, '2019-11-22 10:37:26', '張東閔', '0932995456', '2013-11-16 06:35:22', '1', 1500, '2019-11-15 09:36:28'),
(3, '2019-06-21 10:37:26', '陸愛善', '0932995662', '2014-11-15 06:33:22', '2', 2520, '2019-11-14 09:36:28'),
(4, '2019-01-11 10:37:26', '賴雅婷', '0932995662', '2009-10-15 05:33:22', '4', 1890, '2019-11-14 09:36:28'),
(5, '2019-11-28 10:37:26', '詹意希', '0932995662', '2019-11-15 06:33:22', '1', 2480, '2019-11-14 09:36:28'),
(6, '2019-11-27 10:37:26', '陳家如', '0932995662', '2018-05-15 04:33:22', '1', 2400, '2019-11-14 09:36:28'),
(7, '2019-07-21 10:37:26', '游思穎', '0932995662', '2009-11-25 06:37:22', '2', 8400, '2019-11-14 09:36:28'),
(8, '2019-11-17 10:37:26', '許尹辛', '0932995662', '2019-06-15 06:33:22', '1', 2500, '2019-11-14 09:36:28'),
(9, '2019-11-21 10:37:26', '陳哲維', '0932995662', '2019-11-15 06:33:22', '2', 2700, '2019-11-14 09:36:28'),
(10, '2019-11-21 10:37:26', '陳信宏', '0932995662', '2009-06-15 03:38:22', '2', 2500, '2019-11-14 09:36:28'),
(11, '2019-11-19 10:37:26', '李結', '0932995662', '2019-11-26 06:33:22', '1', 2500, '2019-11-14 09:36:28'),
(12, '2019-11-21 10:37:26', '許萬士', '0932995662', '2018-11-15 06:33:22', '2', 2500, '2019-11-14 09:36:28'),
(13, '2019-11-21 10:37:26', '李連結', '0932995662', '2019-06-15 02:33:22', '5', 8500, '2019-11-14 09:36:28'),
(14, '2019-11-23 10:37:26', '陳華強', '0932995662', '2011-11-15 06:33:22', '2', 2600, '2019-11-14 09:36:28'),
(15, '2019-11-21 10:37:26', '陳郁', '0932995662', '2016-11-15 01:33:22', '3', 5500, '2019-11-14 09:36:28'),
(16, '2019-11-24 10:37:26', '許志火', '0932995662', '2016-11-15 06:33:22', '2', 2500, '2019-11-14 09:36:28');

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
