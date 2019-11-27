-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-11-27 02:22:15
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
CREATE DATABASE IF NOT EXISTS `ican` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ican`;

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
(1, '系統管理員', 'admin', '$2y$10$5ejczVchwglsQLZtIQmHW.teH8Tvv8aluu.aPeFuYt7CIhHxY4.W6', '男', '2019-11-14', 'admin@gmail.com', '0955445632', '', 'admin', 74, '2019-11-26 18:31:07', '0000-00-00 00:00:00'),
(2, '張惠玲', 'elven', '$2y$10$0BVHeh6R97hTcK4guYStm.d49gdFxLF/4CJgvLo0yIYZaoyMbr4ae', '女', '1987-04-05', 'elven@superstar.com', '0966765556', '台北市濟洲北路12號2樓', 'member', 12, '0000-00-00 00:00:00', '2019-11-02 12:03:12'),
(3, '彭建志', 'jinglun', '$2y$10$WqB2bnMSO/wgBiHSOBV2iuLbrUCsp8VmNJdK2AyIW6IANUL9jeFjC', '男', '1987-07-01', 'jinglun@superstar.com', '0918181111', '台北市敦化南路93號5樓', 'member', 0, NULL, '2019-11-02 12:03:12'),
(4, '謝耿鴻', 'sugie', '$2y$10$6uWtdYATI3b/wMRk.AaqIei852PLf.WjeKm8X.Asl0VTmpxCkqbW6', '男', '1987-08-11', 'edreamer@gmail.com', '0914530768', '台北市中央路201號7樓', 'member', 2, '0000-00-00 00:00:00', '2019-11-02 12:03:12'),
(5, '蔣志明', 'shane', '$2y$10$pWefN9xkeXOKCx59GF6ZJuSGNnIFBY4q/DCmCvAwOFtnoTCujb3Te', '男', '1984-06-20', 'shane@superstar.com', '0946820035', '台北市建國路177號6樓', 'member', 0, NULL, '2019-11-02 12:03:12'),
(6, '王佩珊', 'ivy', '$2y$10$RPrt3YfaSs0d82inYIK6he.JaPqOrisWMqASuxN5g62EyRio.lyEa', '女', '1988-02-15', 'ivy@superstar.com', '0920981230', '台北市忠孝東路520號6樓', 'member', 0, NULL, '2019-11-02 12:03:12'),
(7, '林志宇', 'zhong', '$2y$10$pee.jvO6f4sSKahlc4cLLO9RUMyx8aphyqkSUdwHTNSy4Ax7YPdpq', '男', '1987-05-05', 'zhong@superstar.com', '0951983366', '台北市三民路1巷10號', 'member', 0, NULL, '2019-11-02 12:03:12'),
(8, '李曉薇', 'lala', '$2y$10$oiC9CaGiOdWu.6w5b3.b/Ora6fSuh8Lrbj8Kg5BUPT15O3QptksQS', '女', '1985-08-30', 'lala@superstar.com', '0918123456', '台北市仁愛路100號', 'member', 0, NULL, '2019-11-02 12:03:12'),
(9, '賴秀英', 'crystal', '$2y$10$8Q0.JEGILRM91qAlMmWnB.wpcY.rJEbgNgV5ntIlqZmdGaHPwikji', '女', '1986-12-10', 'crystal@superstar.com', '0907408965', '台北市民族路204號', 'member', 0, NULL, '2019-11-02 12:03:12'),
(10, '張雅琪', 'peggy', '$2y$10$RNqnXDNHkcTI2Zh2bkTKnOesz0FLXhihhT8ZL8OHoMeYSq7jsILMi', '女', '1988-12-01', 'peggy@superstar.com', '0916456723', '台北市建國北路10號', 'member', 0, NULL, '2019-11-02 12:03:12'),
(11, '陳燕博', 'albert', '$2y$10$seMLwqcQRQiWa0jMBAcMMertjLbrPLRGNZoKc0NZ5FxTwWha7W3lm', '男', '1993-08-10', 'albert@superstar.com', '0918976588', '台北市北環路2巷80號', 'member', 0, NULL, '2019-11-02 12:03:12'),
(18, 'asd132', 'asd132', '$2y$10$umbgXRIicEo9W4huCH1DhOX94MU9d.N315rj5htg78MoZn5eZGslC', '女', '1995-08-04', 'ddd@gmail.com', '', '', 'member', 0, NULL, '2019-11-06 23:50:06'),
(19, 'asd223', 'asd223', '$2y$10$H2BGaY.Kcrq2.kVleykY/O0.VSgY8d0ncC8FpruNLO01njU6uYoeO', '女', '1995-08-07', 'aaa@gmail.com', '', '', 'member', 0, NULL, '2019-11-06 23:52:11'),
(20, 'iphone', 'iphonetest', '$2y$10$Nqow.7..kAgDRjpkfPvO1eqiRpH5soqGJ2..ghstEzIVb6By5OwK6', '女', '1995-12-13', 'iphone@gmail.com', '', '', 'member', 0, NULL, '2019-11-07 19:45:41'),
(23, 'as88995', 'as88995', '$2y$10$TRB2QvCXV8jqMmIejCZaF.4IBKBomWgPD.4iVbKedbtCbxfSRDrcC', '女', '1998-04-05', 'gggw@gmail.com', '', '', 'member', 0, NULL, '2019-11-07 23:20:46'),
(38, 'test5556572', 'test5556572', '$2y$10$b.Cm4Mgn2URLj.m9imjalus8D42mGv2ZMmTyku68Vj.pTSxq77YWi', '女', '2019-11-11', 'test5556572@gmail.com', '0944856253', '', 'member', 0, NULL, '2019-11-09 17:51:07'),
(39, '안녕하세요', 'qwer1234', '$2y$10$CkYjED43/iS8I9w2CpDv8er3c.W1kg4SWxILxn0HwYEN/feEwySBC', '女', '2019-11-09', 'asdf@gm.co', '0912345678', 'Dhdhdjdjdj', 'member', 1, '2019-11-09 18:09:24', '2019-11-09 18:08:49'),
(40, '小新', 'zxc001', '$2y$10$FQrPTP8sFtlGxmCTSsUD9eW4pIl6Bz5SGrEHLaW6oqBEtTlkmbZuG', '女', '2019-11-07', '123@123.com', '0933123456', '', 'member', 0, NULL, '2019-11-09 19:06:48'),
(41, 'test123', 'test123', '$2y$10$drleZYpEtRYrDs1IlPK9ROlSUe.hnPh7Xt4OtSHS6S/7L4g2KDP1q', '女', '2014-02-05', 'test123@gmail.com', '0955441256', '', 'member', 36, '2019-11-25 18:53:06', '2019-11-12 23:09:13'),
(42, 'xss123', 'xss123', '$2y$10$4oRkw/m5bKOgsoKBMGnKMuSSvyrGMOdy.aQPx9q4erMHHRUdgB2Ie', '女', '2019-11-06', '123@gmail.com', '0955446523', '<script type=\\\"text/javascript\\\" src=\\\"https://www.google.com/js/test.js\\\" ></script>', 'member', 0, NULL, '2019-11-13 13:14:56'),
(45, '系統管理員2', 'admin2', '$2y$10$u7RL7Ib8zSpaZd3qS4Lyh.MEow6qssVhoO5tFk5rUh952PXiKcEzm', '女', '2019-11-04', 'admin2@gmail.com', '0955445632', '', 'admin', 2, '2019-11-23 13:37:28', '2019-11-16 18:03:09'),
(46, 'Aaa', 'qwerasdf', '$2y$10$CazBtjCeSkKkeeY4d0LPx.B.KILvRoGgvYJYEuMNY7Sf/PO4fclqK', '女', '2019-11-20', 'A@a.com', '0913333333', '', 'member', 1, '2019-11-23 17:23:37', '2019-11-23 17:23:21'),
(47, '李澎澎', 'ab0722', '$2y$10$rsMEuYPtwj/XZ36rR5fRce.b0jBmNYuTL9JyIFWN4rgZjKSv/e2uK', '男', '1991-07-12', 'ab0722@gmail.com', '0937666565', '', 'member', 2, '2019-11-26 08:17:04', '2019-11-26 08:12:27'),
(48, '阿樂', 'ac0722', '$2y$10$tixu6KSdrPzUsSvsY9w7puNCVK.qKYRHmGt6FnFFLf1ZKI.PGHzGu', '女', '1992-11-18', 'ac0722@gmail.com', '0933666565', '', 'member', 0, NULL, '2019-11-26 08:18:54'),
(49, 'sfwe', 'qwe123', '$2y$10$RPb/NjLyyj7kCKc.Tr2GXelf.YIoPH24ec8ozGfC8oeyEXm.ZfXNy', '女', '2019-11-06', '12347@1423.com', '0945666666', '', 'member', 1, '2019-11-26 08:40:18', '2019-11-26 08:40:10'),
(50, 'asd123', 'asd123', '$2y$10$M3ch0.VwF5ozyObpt2oCxuNG4eXQc2OmF/m8rioVzp90YgX7X6pUu', '女', '2019-11-27', 'asd123@gmail.com', '0955441253', '', 'member', 1, '2019-11-26 10:49:58', '2019-11-26 10:49:47');

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `guestID` int(11) NOT NULL,
  `guestname` varchar(25) DEFAULT '0',
  `guestgender` varchar(1) NOT NULL,
  `guestphone` int(15) NOT NULL,
  `guestemail` varchar(30) NOT NULL,
  `guestcontent` text NOT NULL,
  `guesttime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`guestID`, `guestname`, `guestgender`, `guestphone`, `guestemail`, `guestcontent`, `guesttime`) VALUES
(41, '許', '女', 655465, '65554', '1211', '2019-11-11 10:19:26'),
(42, '許', '男', 91245, 'ad65@gmail.com', '你好', '2019-11-12 09:41:12'),
(43, '許直', '男', 252, '15215', '2626', '2019-11-12 13:57:44'),
(44, '許正代', '男', 0, '', '', '2019-11-12 14:12:04'),
(45, '許直式', '女', 91245, 'ad65@gmail.com', '6554', '2019-11-12 14:20:59'),
(46, '許直', '男', 91245, 'ad65@gmail.com', '你好', '2019-11-12 14:24:59'),
(47, '你好', '女', 2147483647, 'ad56565@gmail.com', '你好', '2019-11-12 15:18:29'),
(48, '13', '男', 4564, '54654', '+95959', '2019-11-12 15:19:44'),
(49, '許', '男', 91245, 'ad65@gmail.com', '623213', '2019-11-13 14:26:28'),
(51, '許', '男', 198192, '47949@gmail.com', '測試', '0000-00-00 00:00:00'),
(52, '12', '男', 91245, 'ad65@gmail.com', '14515', '2019-11-25 08:46:05'),
(53, '許', '男', 91245151, '65554@gmail.com', '測試11/25', '2019-11-25 08:46:32'),
(54, '陳菊', '女', 91245, 'ad65@gmail.com', '', '2019-11-25 09:47:29'),
(55, '12', '', 0, '', '', '2019-11-25 17:55:57'),
(56, 'ab0722', '男', 937666565, 'ab0722@gmail.com', '測試', '2019-11-26 08:13:28'),
(57, '李澎澎', '男', 937666565, 'ab0722@gmail.com', '測試', '2019-11-26 08:17:35'),
(58, '系統管理員', '男', 955445632, 'admin@gmail.com', '1233', '2019-11-26 10:46:20'),
(59, 'asd123', '女', 955441253, 'asd123@gmail.com', '13', '2019-11-26 10:50:30');

-- --------------------------------------------------------

--
-- 資料表結構 `modeldata`
--

CREATE TABLE `modeldata` (
  `r_model` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `r_price` int(10) NOT NULL,
  `r_num` int(10) NOT NULL,
  `r_disc` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `modeldata`
--

INSERT INTO `modeldata` (`r_model`, `r_price`, `r_num`, `r_disc`) VALUES
('單人/雙人客房', 1500, 8, '各式單雙人主題套房可供選擇'),
('四人家庭客房', 2400, 8, '各式家庭風格及主題套房可供選擇'),
('套房', 6000, 4, '有兩種高級式套房分別是總統風格及商務式風格');

-- --------------------------------------------------------

--
-- 資料表結構 `orderdata`
--

CREATE TABLE `orderdata` (
  `o_num` int(10) NOT NULL,
  `m_id` int(10) NOT NULL,
  `r_id` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `o_phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `o_time` date NOT NULL,
  `o_citime` date NOT NULL,
  `o_day` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `o_total` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `o_cotime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `orderdata`
--

INSERT INTO `orderdata` (`o_num`, `m_id`, `r_id`, `o_phone`, `o_time`, `o_citime`, `o_day`, `o_total`, `o_cotime`) VALUES
(1, 2147483647, '李連結', '', '0000-00-00', '2019-11-15', '2', '2500', '2019-11-14'),
(2, 2147483647, '張東閔', '', '0000-00-00', '2013-11-16', '1', '1500', '2019-11-15'),
(3, 2147483647, '陸愛善', '', '0000-00-00', '2014-11-15', '2', '2520', '2019-11-14'),
(4, 2147483647, '賴雅婷', '', '0000-00-00', '2009-10-15', '4', '1890', '2019-11-14'),
(5, 2147483647, '詹意希', '', '0000-00-00', '2019-11-15', '1', '2480', '2019-11-14'),
(6, 2147483647, '陳家如', '', '0000-00-00', '2018-05-15', '1', '2400', '2019-11-14'),
(7, 2147483647, '游思穎', '', '0000-00-00', '2009-11-25', '2', '8400', '2019-11-14'),
(8, 2147483647, '許尹辛', '', '0000-00-00', '2019-06-15', '1', '2500', '2019-11-14'),
(9, 2147483647, '陳哲維', '', '0000-00-00', '2019-11-15', '2', '2700', '2019-11-14'),
(10, 2147483647, '陳信宏', '', '0000-00-00', '2009-06-15', '2', '2500', '2019-11-14'),
(11, 2147483647, '李結', '', '0000-00-00', '2019-11-26', '1', '2500', '2019-11-14'),
(12, 2147483647, '許萬士', '', '0000-00-00', '2018-11-15', '2', '2500', '2019-11-14'),
(13, 2147483647, '李連結', '', '0000-00-00', '2019-06-15', '5', '8500', '2019-11-14'),
(14, 2147483647, '陳華強', '', '0000-00-00', '2011-11-15', '2', '2600', '2019-11-14'),
(15, 2147483647, '陳郁', '', '0000-00-00', '2016-11-15', '3', '5500', '2019-11-14'),
(16, 2147483647, '許志火', '', '0000-00-00', '2016-11-15', '2', '2500', '2019-11-14'),
(17, 0, '就是我', '5405454', '0000-00-00', '2019-10-30', '50', '500000', '2019-11-20'),
(18, 0, '123', '0955445625', '0000-00-00', '2019-11-12', '123', '456', '2019-11-05'),
(19, 0, '就是我', '099999', '0000-00-00', '2019-11-13', '500', '500000', '2019-11-20'),
(20, 0, '156', '789564', '0000-00-00', '2019-11-15', '123', '456', '2019-11-22');

-- --------------------------------------------------------

--
-- 資料表結構 `roomdata`
--

CREATE TABLE `roomdata` (
  `r_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `m_id` int(10) NOT NULL,
  `r_model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `r_price` int(10) NOT NULL,
  `r_disc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `roomdata`
--

INSERT INTO `roomdata` (`r_id`, `m_id`, `r_model`, `r_price`, `r_disc`) VALUES
('001', 0, '漫威主題套房', 0, ''),
('002', 0, '迪士尼主題套房', 0, ''),
('003', 0, '海洋世界主題套房', 0, ''),
('004', 0, '星空主題套房', 0, ''),
('005', 0, '埃及主題套房', 0, ''),
('006', 0, '羅馬主題套房', 0, ''),
('007', 0, '歐式客房', 0, ''),
('008', 0, '和式客房', 0, ''),
('009', 0, '經濟家庭房_1', 0, ''),
('010', 0, '經濟家庭房_2', 0, ''),
('011', 0, '經濟家庭房_3', 0, ''),
('012', 0, '經濟家庭房_4', 0, ''),
('013', 0, '豪華家庭房_1', 0, ''),
('014', 0, '豪華家庭房_2', 0, ''),
('015', 0, '豪華家庭房_3', 0, ''),
('016', 0, '豪華家庭房_4', 0, ''),
('017', 0, '商務套房_1', 0, ''),
('018', 0, '商務套房_2', 0, ''),
('019', 0, '總統套房_1', 0, ''),
('020', 0, '總統套房_2', 0, '');

-- --------------------------------------------------------

--
-- 資料表結構 `roomstatus`
--

CREATE TABLE `roomstatus` (
  `r_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `r_model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `r_count` int(100) NOT NULL,
  `r_date` date NOT NULL,
  `r_day` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `scooterdata`
--

CREATE TABLE `scooterdata` (
  `s_id` int(10) NOT NULL,
  `s_model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `s_price` int(10) NOT NULL,
  `s_num` int(10) NOT NULL,
  `s_disc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `scooterdata`
--

INSERT INTO `scooterdata` (`s_id`, `s_model`, `s_price`, `s_num`, `s_disc`) VALUES
(1, 'wew001', 500, 10, 'HS1鷹眼雙大燈(車款式樣與顏色以實車為準)'),
(2, 'www002', 350, 20, 'LEDV形光條設計搭配燻黑尾燈，顯現出豐富細膩的科技感'),
(3, 'eee003', 240, 30, '跑車級彩晶儀表(車款式樣與顏色以實車為準)'),
(4, 'eed004', 630, 20, '最新BOSCH ABS 9.1MB搭載(車款式樣與顏色以實車為準)'),
(5, 'sdd005', 200, 30, '後輪單缸卡鉗(車款式樣與顏色以實車為準)');

-- --------------------------------------------------------

--
-- 資料表結構 `s_orderdata`
--

CREATE TABLE `s_orderdata` (
  `s_order_id` int(10) NOT NULL,
  `m_id` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `s_orderdetail`
--

CREATE TABLE `s_orderdetail` (
  `s_orderdetid` int(10) NOT NULL,
  `s_order_id` int(10) NOT NULL,
  `s_id` int(10) NOT NULL,
  `s_unitprice` int(10) NOT NULL,
  `s_quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `memberdata`
--
ALTER TABLE `memberdata`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `m_username` (`m_username`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`guestID`);

--
-- 資料表索引 `orderdata`
--
ALTER TABLE `orderdata`
  ADD PRIMARY KEY (`o_num`);

--
-- 資料表索引 `roomdata`
--
ALTER TABLE `roomdata`
  ADD PRIMARY KEY (`r_id`);

--
-- 資料表索引 `roomstatus`
--
ALTER TABLE `roomstatus`
  ADD PRIMARY KEY (`r_id`);

--
-- 資料表索引 `scooterdata`
--
ALTER TABLE `scooterdata`
  ADD PRIMARY KEY (`s_id`);

--
-- 資料表索引 `s_orderdata`
--
ALTER TABLE `s_orderdata`
  ADD PRIMARY KEY (`s_order_id`);

--
-- 資料表索引 `s_orderdetail`
--
ALTER TABLE `s_orderdetail`
  ADD PRIMARY KEY (`s_orderdetid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `memberdata`
--
ALTER TABLE `memberdata`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `guestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orderdata`
--
ALTER TABLE `orderdata`
  MODIFY `o_num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `scooterdata`
--
ALTER TABLE `scooterdata`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `s_orderdata`
--
ALTER TABLE `s_orderdata`
  MODIFY `s_order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `s_orderdetail`
--
ALTER TABLE `s_orderdetail`
  MODIFY `s_orderdetid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
