-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-27 11:13:12
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
(1, '系統管理員', 'admin', '$2y$10$1XjAGS760Utkh0cS2Lt8b.eBggZ2Mn5IJSs972pRz1bPydlbJg1zS', '男', '2019-11-14', 'admin@gmail.com', '0955445632', '', 'admin', 118, '2019-12-27 18:06:20', '0000-00-00 00:00:00'),
(2, '張惠玲', 'elven', '$2y$10$0BVHeh6R97hTcK4guYStm.d49gdFxLF/4CJgvLo0yIYZaoyMbr4ae', '女', '1987-04-05', 'elven@superstar.com', '0966765556', '台北市濟洲北路12號2樓', 'member', 12, '0000-00-00 00:00:00', '2019-11-02 12:03:12'),
(3, '彭建志', 'jinglun', '$2y$10$WqB2bnMSO/wgBiHSOBV2iuLbrUCsp8VmNJdK2AyIW6IANUL9jeFjC', '男', '1987-07-01', 'jinglun@superstar.com', '0918181111', '台北市敦化南路93號5樓', 'member', 0, NULL, '2019-11-02 12:03:12'),
(4, '謝耿鴻', 'sugie', '$2y$10$6uWtdYATI3b/wMRk.AaqIei852PLf.WjeKm8X.Asl0VTmpxCkqbW6', '男', '1987-08-11', 'edreamer@gmail.com', '0914530768', '台北市中央路201號7樓', 'member', 2, '0000-00-00 00:00:00', '2019-11-02 12:03:12'),
(5, '蔣志明', 'shane', '$2y$10$pWefN9xkeXOKCx59GF6ZJuSGNnIFBY4q/DCmCvAwOFtnoTCujb3Te', '男', '1984-06-20', 'shane@superstar.com', '0946820035', '台北市建國路177號6樓', 'member', 0, NULL, '2019-11-02 12:03:12'),
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
(41, 'test123', 'test123', '$2y$10$drleZYpEtRYrDs1IlPK9ROlSUe.hnPh7Xt4OtSHS6S/7L4g2KDP1q', '女', '2014-02-05', 'test123@gmail.com', '0955441256', '', 'member', 47, '2019-12-26 10:37:15', '2019-11-12 23:09:13'),
(42, 'xss123', 'xss123', '$2y$10$4oRkw/m5bKOgsoKBMGnKMuSSvyrGMOdy.aQPx9q4erMHHRUdgB2Ie', '女', '2019-11-06', '123@gmail.com', '0955446523', '<script type=\\\"text/javascript\\\" src=\\\"https://www.google.com/js/test.js\\\" ></script>', 'member', 0, NULL, '2019-11-13 13:14:56'),
(45, '系統管理員2', 'admin2', '$2y$10$u7RL7Ib8zSpaZd3qS4Lyh.MEow6qssVhoO5tFk5rUh952PXiKcEzm', '女', '2019-11-04', 'admin2@gmail.com', '0955445632', '', 'admin', 2, '2019-11-23 13:37:28', '2019-11-16 18:03:09'),
(46, 'Aaa', 'qwerasdf', '$2y$10$CazBtjCeSkKkeeY4d0LPx.B.KILvRoGgvYJYEuMNY7Sf/PO4fclqK', '女', '2019-11-20', 'A@a.com', '0913333333', '', 'member', 1, '2019-11-23 17:23:37', '2019-11-23 17:23:21'),
(47, '李澎澎', 'ab0722', '$2y$10$rsMEuYPtwj/XZ36rR5fRce.b0jBmNYuTL9JyIFWN4rgZjKSv/e2uK', '男', '1991-07-12', 'ab0722@gmail.com', '0937666565', '', 'member', 13, '2019-12-26 08:53:10', '2019-11-26 08:12:27'),
(48, '阿樂', 'ac0722', '$2y$10$tixu6KSdrPzUsSvsY9w7puNCVK.qKYRHmGt6FnFFLf1ZKI.PGHzGu', '女', '1992-11-18', 'ac0722@gmail.com', '0933666565', '', 'member', 2, '2019-12-26 08:39:34', '2019-11-26 08:18:54'),
(49, 'sfwe', 'qwe123', '$2y$10$RPb/NjLyyj7kCKc.Tr2GXelf.YIoPH24ec8ozGfC8oeyEXm.ZfXNy', '女', '2019-11-06', '12347@1423.com', '0945666666', '', 'member', 5, '2019-12-26 09:28:58', '2019-11-26 08:40:10'),
(50, 'zxc123', 'zxc123', '$2y$10$UBd4VuhAcThkMjTdZNdrEe1PYtke/QP7UzG3Lc6Z/ZDv1mpifmc7K', '女', '2019-12-12', 'zxc123@gmail.com', '0945863253', '', 'member', 0, NULL, '2019-12-26 08:47:48'),
(51, '中文', 'asd123', '$2y$10$Op2qpVQiJCE/2TylrzQvfeiZxMf/s5st/vy057EBRqBUAVkc9P4MS', '男', '2019-12-18', 'asd123@ads.com', '0956462674', '', 'admin', 2, '2019-12-26 09:08:52', '2019-12-26 08:56:45'),
(52, 'dffff', 'shiori', '$2y$10$bkB2NOtlAPPBgKQYotdiuuv1niPiDYXnPlr0uKA62Gp5dA8lkNy6W', '女', '2019-12-17', '123344@12ddd3.com', '0945666645', '', 'member', 1, '2019-12-26 09:00:19', '2019-12-26 09:00:06'),
(53, 'qwe1232', 'qwe1232', '$2y$10$QAst.ptc.ggsm3m7Zprptu47YfN76ukAfTQMqzSItKhHVXzZaZOv2', '女', '2019-12-05', 'qwe1232@gmail.com', '0944556325', '', 'member', 0, NULL, '2019-12-26 09:03:30'),
(54, 'qwe12322', 'qwe12322', '$2y$10$mm2xDIosouadeT/4WY6d7Od6jKErsxS7.hSlURrB5gvNAfy2MZa3y', '女', '2019-12-05', 'qwe12322@gmail.com', '0944556322', '', 'member', 0, NULL, '2019-12-26 09:06:17'),
(55, '陳聖文', 'h90011h', '$2y$10$eNTfNHR2bdgnDQEDAtOqDuh00Uw5SJj24RmSPeT70SoMOlQ1Xddhq', '男', '1995-04-08', 'h90011h@gmail.com', '0972469448', '高雄市大寮區後庄里民智街15巷5號', 'member', 3, '2019-12-26 09:25:29', '2019-12-26 09:16:26'),
(56, 'test223', 'test223', '$2y$10$uRkqZxDjV7Bo5/4cR6Zazu9oMJwM2Uk/W2kWMgDxEOAMChMH9wyU6', '男', '2019-12-20', 'test223@gmail.com', '0944886532', '', 'member', 1, '2019-12-26 10:29:15', '2019-12-26 10:29:06'),
(57, 'Dio', 'diohsu', '$2y$10$v4h2cDmGmzRMb8YZ8KrkIO7cF2MIInCnzBSVmCleWvbRJ.MwvbSpK', '女', '1982-02-09', 'Diohsu@awoo.com.tw', '0903087340', '', 'member', 1, '2019-12-26 10:53:03', '2019-12-26 10:51:38');

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `guestID` int(11) NOT NULL,
  `guestname` varchar(25) COLLATE utf8_unicode_ci DEFAULT '0',
  `guestgender` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `guestphone` int(15) NOT NULL,
  `guestemail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `guestcontent` text COLLATE utf8_unicode_ci NOT NULL,
  `guesttime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`guestID`, `guestname`, `guestgender`, `guestphone`, `guestemail`, `guestcontent`, `guesttime`) VALUES
(149, 'test223', '男', 944886532, 'test223@gmail.com', 'test', '2019-12-26 10:36:44');

-- --------------------------------------------------------

--
-- 資料表結構 `newsdata`
--

CREATE TABLE `newsdata` (
  `newsid` int(11) NOT NULL,
  `newstitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `newscontent` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `newstime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `newsdata`
--

INSERT INTO `newsdata` (`newsid`, `newstitle`, `newscontent`, `newstime`) VALUES
(1, '安安', '今天耶誕節，訂房不用錢', '2019-12-25 20:09:07'),
(2, 'test', 'test', '2019-12-26 10:31:05');

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
  `r_id` int(10) NOT NULL,
  `o_ferry` enum('自行訂購','公營','民營') COLLATE utf8_unicode_ci NOT NULL DEFAULT '自行訂購'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `orderdata`
--

INSERT INTO `orderdata` (`o_num`, `m_id`, `o_phone`, `o_citime`, `o_day`, `o_total`, `o_cotime`, `r_id`, `o_ferry`) VALUES
(1, '1', '0955445632', '2019-01-09', 1, '0', '2019-01-10', 0, '自行訂購'),
(2, '1', '0955445632', '2019-01-20', 8, '19200', '2019-01-27', 4, '自行訂購'),
(3, '48', '0933666565', '2019-01-02', 2, '4800', '2019-01-03', 4, '自行訂購'),
(4, '1', '0955445632', '2019-01-02', 2, '12000', '2019-01-03', 7, '自行訂購'),
(5, '1', '0955445632', '2019-12-25', 2, '0', '2019-12-27', 0, '自行訂購'),
(7, '47', '0937666565', '2019-01-02', 2, '5210', '2019-01-03', 5, '民營'),
(8, '49', '0945666666', '2019-12-26', 2, '4800', '2019-12-27', 4, '自行訂購'),
(9, '51', '0956462674', '2019-01-10', 2, '5180', '2019-01-11', 5, '公營'),
(11, '55', '0972469448', '2019-01-05', 2, '3000', '2019-01-06', 3, '自行訂購'),
(12, '52', '0945666645', '2019-12-26', 2, '4800', '2019-12-27', 5, '自行訂購'),
(15, '57', '0903087340', '2020-01-01', 8, '12000', '2020-01-08', 1, '自行訂購'),
(16, '1', '0955445632', '2019-01-02', 2, '4800', '2019-01-03', 6, '自行訂購'),
(17, '1', '0955445632', '2019-01-05', 2, '12380', '2019-01-06', 7, '公營'),
(18, '1', '0955445632', '2019-01-10', 2, '3380', '2019-01-11', 1, '公營'),
(19, '1', '0955445632', '2019-01-02', 2, '3000', '2019-01-03', 1, '自行訂購');

-- --------------------------------------------------------

--
-- 資料表結構 `roomdata`
--

CREATE TABLE `roomdata` (
  `r_id` int(10) NOT NULL,
  `r_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `r_model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `r_price` int(10) NOT NULL,
  `r_disc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `roomdata`
--

INSERT INTO `roomdata` (`r_id`, `r_type`, `r_model`, `r_price`, `r_disc`) VALUES
(1, '單人/雙人客房', '漫威主題套房', 1500, '各式單雙人主題套房可供選擇'),
(2, '單人/雙人客房', '迪士尼主題套房', 1500, '各式單雙人主題套房可供選擇'),
(3, '單人/雙人客房', '海洋世界主題套房', 1500, '各式單雙人主題套房可供選擇'),
(4, '四人家庭客房', '經濟家庭房', 2400, '各式家庭風格及主題套房可供選擇'),
(5, '四人家庭客房', '豪華家庭房', 2400, '各式家庭風格及主題套房可供選擇'),
(6, '四人家庭客房', '和式客房', 2400, '各式家庭風格及主題套房可供選擇'),
(7, '套房', '商務套房', 6000, '有兩種高級式套房分別是總統風格及商務式風格'),
(10, '套房', '總統套房', 7000, '有兩種高級式套房分別是總統風格及商務式風格'),
(11, '套房', '商務套房', 6000, '有兩種高級式套房分別是總統風格及商務式風格');

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
(1, 'Gogoro S2 ABS', 500, 10, 'HS1鷹眼雙大燈(車款式樣與顏色以實車為準)'),
(2, 'Gogoro S2 Adventure', 350, 20, 'LEDV形光條設計搭配燻黑尾燈，顯現出豐富細膩的科技感'),
(3, 'Gogoro S2 Café Racer', 240, 30, '跑車級彩晶儀表(車款式樣與顏色以實車為準)'),
(4, 'Gogoro 2 Rumbler', 630, 20, '最新BOSCH ABS 9.1MB搭載(車款式樣與顏色以實車為準)'),
(5, 'Gogoro 2 Delight', 200, 30, '後輪單缸卡鉗(車款式樣與顏色以實車為準)');

-- --------------------------------------------------------

--
-- 資料表結構 `s_orderdata`
--

CREATE TABLE `s_orderdata` (
  `s_order_id` int(10) NOT NULL,
  `m_id` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `s_orderdata`
--

INSERT INTO `s_orderdata` (`s_order_id`, `m_id`, `total`) VALUES
(1, 41, 3850),
(2, 41, 240),
(3, 41, 630),
(4, 49, 1000),
(5, 49, 1260),
(6, 49, 2260),
(7, 52, 2130),
(8, 56, 1850),
(9, 1, 350);

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
-- 傾印資料表的資料 `s_orderdetail`
--

INSERT INTO `s_orderdetail` (`s_orderdetid`, `s_order_id`, `s_id`, `s_unitprice`, `s_quantity`) VALUES
(1, 1, 2, 350, 11),
(2, 2, 3, 240, 1),
(3, 3, 4, 630, 1),
(4, 4, 1, 500, 2),
(5, 5, 4, 630, 2),
(6, 6, 1, 500, 2),
(7, 6, 4, 630, 2),
(8, 7, 1, 500, 3),
(9, 7, 4, 630, 1),
(10, 8, 2, 350, 1),
(11, 8, 1, 500, 3),
(12, 9, 2, 350, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `traveldata`
--

CREATE TABLE `traveldata` (
  `t_id` int(20) NOT NULL,
  `t_class` enum('周邊景點','麻花捲','水上活動','烤肉','廟') COLLATE utf8_unicode_ci NOT NULL,
  `t_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `traveldata`
--

INSERT INTO `traveldata` (`t_id`, `t_class`, `t_name`) VALUES
(1, '周邊景點', '蛤板灣'),
(2, '周邊景點', '美人洞'),
(3, '周邊景點', '烏鬼洞'),
(4, '周邊景點', '龍蝦洞'),
(5, '周邊景點', '中澳沙灘'),
(6, '周邊景點', '山豬溝'),
(7, '周邊景點', '厚石魚澳'),
(8, '周邊景點', '竹林生態濕地公園'),
(9, '周邊景點', '肚仔坪'),
(10, '周邊景點', '花瓶石'),
(11, '麻花捲', '王老師手工麻花捲'),
(12, '麻花捲', '龍鑽烘炸手工麻花捲'),
(13, '麻花捲', '寶哥烘炸小琉球麻花捲相思旗艦店'),
(14, '麻花捲', '合家手工麻花捲'),
(15, '麻花捲', '蘇媽媽手工麻花捲'),
(16, '麻花捲', '香香手工麻花捲'),
(17, '麻花捲', '小琉球黃家麻花捲'),
(18, '麻花捲', '二伯母手工麻花捲'),
(19, '麻花捲', '小琉球在地人手工麻花捲'),
(20, '麻花捲', '三姐手工麻花捲'),
(21, '水上活動', '小琉球-小綠龜潛水'),
(22, '水上活動', '蜂潛水海洋俱樂部潛水中心'),
(23, '水上活動', '潛水阿貴民宿'),
(24, '水上活動', '永春浮潛'),
(25, '水上活動', '田老大潛水'),
(26, '水上活動', '奧之海潛水旅宿'),
(27, '水上活動', '啾開心浮潛'),
(28, '水上活動', '小琉球綠蠵龜潛水住宿'),
(29, '水上活動', '阿Ya潛棧 A Ya Diving Ho'),
(30, '水上活動', '八福育樂有限公司小琉球觀光海底玻璃船'),
(31, '烤肉', '品鮮火鍋烤肉吃到飽'),
(32, '烤肉', '蘇媽媽碳烤BBQ'),
(33, '烤肉', '夯吧燒烤'),
(34, '烤肉', '極香碳烤'),
(35, '烤肉', '小琉球燒肉王'),
(36, '烤肉', '小琉球五點燒烤'),
(37, '烤肉', '鑫月碳烤'),
(38, '烤肉', '謝榴阿嬤燒烤'),
(39, '烤肉', '上好炭烤'),
(40, '廟', '關廟幸山堂'),
(41, '廟', '大眾千歲廟'),
(42, '廟', '小琉球天仙宮'),
(43, '廟', '碧雲寺觀音佛祖'),
(44, '廟', '土地公(天南福安宮)'),
(45, '廟', '小琉球池隆宮'),
(46, '廟', '小琉球三隆宮'),
(47, '廟', '小琉球華山代天宮'),
(48, '廟', '小琉球水仙宮'),
(49, '周邊景點', '小琉球海洋館');

-- --------------------------------------------------------

--
-- 資料表結構 `t_orderdata`
--

CREATE TABLE `t_orderdata` (
  `o_num` int(10) NOT NULL,
  `m_id` int(10) NOT NULL,
  `daynum` int(11) NOT NULL,
  `travel_1` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '無行程',
  `travel_2` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '無行程',
  `travel_3` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '無行程'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `t_orderdata`
--

INSERT INTO `t_orderdata` (`o_num`, `m_id`, `daynum`, `travel_1`, `travel_2`, `travel_3`) VALUES
(6, 1, 1, '王老師手工麻花捲', '蛤板灣', '品鮮火鍋烤肉吃到飽'),
(6, 1, 2, '王老師手工麻花捲', '小琉球-小綠龜潛水', '平安回家'),
(7, 47, 1, '蛤板灣', '小琉球-小綠龜潛水', '品鮮火鍋烤肉吃到飽'),
(7, 47, 2, '王老師手工麻花捲', '小琉球-小綠龜潛水', '平安回家'),
(9, 51, 1, '王老師手工麻花捲', '蛤板灣', '品鮮火鍋烤肉吃到飽'),
(9, 51, 2, '龍蝦洞', '王老師手工麻花捲', '平安回家'),
(10, 55, 1, '蛤板灣', '小琉球-小綠龜潛水', '品鮮火鍋烤肉吃到飽'),
(10, 55, 2, '王老師手工麻花捲', '品鮮火鍋烤肉吃到飽', '平安回家'),
(11, 55, 1, '蛤板灣', '品鮮火鍋烤肉吃到飽', '品鮮火鍋烤肉吃到飽'),
(11, 55, 2, '小琉球-小綠龜潛水', '王老師手工麻花捲', '平安回家'),
(13, 56, 1, '蛤板灣', '美人洞', '鑫月碳烤'),
(13, 56, 2, '王老師手工麻花捲', '小琉球-小綠龜潛水', '平安回家'),
(14, 56, 1, '王老師手工麻花捲', '王老師手工麻花捲', '品鮮火鍋烤肉吃到飽'),
(14, 56, 2, '品鮮火鍋烤肉吃到飽', '關廟幸山堂', '平安回家'),
(17, 1, 1, '王老師手工麻花捲', '品鮮火鍋烤肉吃到飽', '品鮮火鍋烤肉吃到飽'),
(17, 1, 2, '關廟幸山堂', '小琉球-小綠龜潛水', '平安回家'),
(18, 1, 1, '品鮮火鍋烤肉吃到飽', '蛤板灣', '品鮮火鍋烤肉吃到飽'),
(18, 1, 2, '品鮮火鍋烤肉吃到飽', '蛤板灣', '平安回家');

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
-- 資料表索引 `newsdata`
--
ALTER TABLE `newsdata`
  ADD PRIMARY KEY (`newsid`);

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
-- 資料表索引 `traveldata`
--
ALTER TABLE `traveldata`
  ADD PRIMARY KEY (`t_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `memberdata`
--
ALTER TABLE `memberdata`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `guestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `newsdata`
--
ALTER TABLE `newsdata`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orderdata`
--
ALTER TABLE `orderdata`
  MODIFY `o_num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `roomdata`
--
ALTER TABLE `roomdata`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `scooterdata`
--
ALTER TABLE `scooterdata`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `s_orderdata`
--
ALTER TABLE `s_orderdata`
  MODIFY `s_order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `s_orderdetail`
--
ALTER TABLE `s_orderdetail`
  MODIFY `s_orderdetid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `traveldata`
--
ALTER TABLE `traveldata`
  MODIFY `t_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
