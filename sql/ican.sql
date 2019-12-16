-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-16 11:58:33
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
(1, '系統管理員', 'admin', '$2y$10$5ejczVchwglsQLZtIQmHW.teH8Tvv8aluu.aPeFuYt7CIhHxY4.W6', '男', '2019-11-14', 'admin@gmail.com', '0955445632', '', 'admin', 91, '2019-12-16 16:24:08', '0000-00-00 00:00:00'),
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
(41, 'test123', 'test123', '$2y$10$drleZYpEtRYrDs1IlPK9ROlSUe.hnPh7Xt4OtSHS6S/7L4g2KDP1q', '女', '2014-02-05', 'test123@gmail.com', '0955441256', '', 'member', 44, '2019-12-13 08:46:49', '2019-11-12 23:09:13'),
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
(45, '許直式', '女', 91245, 'ad65@gmail.com', '6554', '2019-11-12 14:20:59'),
(46, '許直', '男', 91245, 'ad65@gmail.com', '你好', '2019-11-12 14:24:59'),
(47, '你好', '女', 2147483647, 'ad56565@gmail.com', '你好', '2019-11-12 15:18:29'),
(48, '13', '男', 4564, '54654', '+95959', '2019-11-12 15:19:44'),
(49, '許', '男', 91245, 'ad65@gmail.com', '623213', '2019-11-13 14:26:28'),
(51, '許', '男', 198192, '47949@gmail.com', '測試', '0000-00-00 00:00:00'),
(52, '12', '男', 91245, 'ad65@gmail.com', '14515', '2019-11-25 08:46:05'),
(53, '許', '男', 91245151, '65554@gmail.com', '測試11/25', '2019-11-25 08:46:32'),
(54, '陳菊', '女', 91245, 'ad65@gmail.com', '', '2019-11-25 09:47:29'),
(56, 'ab0722', '男', 937666565, 'ab0722@gmail.com', '測試', '2019-11-26 08:13:28'),
(57, '李澎澎', '男', 937666565, 'ab0722@gmail.com', '測試', '2019-11-26 08:17:35'),
(58, '系統管理員', '男', 955445632, 'admin@gmail.com', '1233', '2019-11-26 10:46:20'),
(59, 'asd123', '女', 955441253, 'asd123@gmail.com', '13', '2019-11-26 10:50:30'),
(62, '系統管理員', '男', 955445632, 'admin@gmail.com', 'gggggggggggggggggggggggggggggggggggggggggggggggggg', '2019-12-09 08:48:15'),
(63, '系統管理員', '男', 955445632, 'admin@gmail.com', 'gggggggggggggggggggggggggggggggggggggggggggggggggg', '2019-12-09 08:50:50'),
(67, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:20:01'),
(68, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:20:50'),
(69, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:20:54'),
(70, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:21:08'),
(71, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:21:44'),
(72, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:22:52'),
(73, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:23:05'),
(74, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:23:13'),
(75, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:23:43'),
(76, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:24:02'),
(77, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:24:10'),
(78, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:24:34'),
(79, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:24:48'),
(80, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:24:58'),
(81, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:25:05'),
(82, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:25:26'),
(83, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:25:34'),
(84, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:26:08'),
(85, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:28:37'),
(86, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:29:11'),
(87, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:31:13'),
(88, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:31:30'),
(89, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:37:16'),
(90, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:37:24'),
(91, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:37:41'),
(92, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:37:50'),
(93, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:38:05'),
(94, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:38:29'),
(95, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:38:40'),
(96, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:38:59'),
(97, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:39:06'),
(98, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:39:16'),
(99, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:41:29'),
(100, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:42:21'),
(101, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:43:00'),
(102, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:43:20'),
(103, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:45:32'),
(104, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:45:39'),
(105, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:49:03'),
(106, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:49:25'),
(107, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asgfdasgsgsopgjopasdg', '2019-12-09 10:49:59'),
(108, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 10:51:57'),
(109, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 10:55:55'),
(110, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 10:57:09'),
(111, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 10:57:27'),
(112, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 10:57:50'),
(113, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 10:58:46'),
(114, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 10:59:59'),
(115, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:00:29'),
(116, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:01:07'),
(117, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:01:23'),
(118, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:01:31'),
(119, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:02:03'),
(120, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:02:47'),
(121, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:03:39'),
(122, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:04:04'),
(123, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:04:52'),
(124, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:07:12'),
(125, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:07:35'),
(126, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:08:45'),
(127, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:09:02'),
(128, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:09:29'),
(129, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:10:04'),
(130, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:10:13'),
(131, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:10:27'),
(132, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:10:37'),
(133, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:10:59'),
(134, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:11:33'),
(135, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:12:07'),
(136, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:12:25'),
(137, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:12:35'),
(138, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:13:27'),
(139, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:13:37'),
(140, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:14:00'),
(141, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:14:10'),
(142, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:14:30'),
(143, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:16:00'),
(144, '系統管理員', '男', 955445632, 'admin@gmail.com', 'asfasfoashfoaihfioawehoifhaweiofhioawehfioawefawef', '2019-12-09 11:19:25'),
(145, '系統管理員', '男', 955445632, 'admin@gmail.com', 'esgesgageg', '2019-12-09 15:15:57');

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
(1, '8888888', '集線器（Hub）是指將多條乙太網路雙絞線或光纖集合連接在同一段物理介質下的裝置。集線器是運作在OSI模型中的實體層。它可以視作多埠的中繼器，若它偵測到碰撞，它會送出阻塞訊號。\r\n\r\n集線器通常會附上BNC and/or AUI轉接頭來連接傳統10BASE2或10BASE5網路。\r\n\r\n由於集線器會把收到的任何數位訊號，經過再生或放大，再從集線器的所有埠送出，這會造成訊號之間碰撞的機會很大，而且訊號也可能被竊聽，並且這代表所有連到集線器的裝置，都是屬於同一個碰撞網域以及廣播網域，因此大部份集線器已被交換機取代。\r\n\r\n集線器的種類\r\n被動型集線器（Passive Hub），集線器不需連接電源，因此網路訊號隨距離衰減，只適用於短距離的網路連接。\r\n主動型集線器（Active Hub），集線器需連接電源，可加強訊號強度（整波放大）。\r\n除此之外，有的集線器可能具有Up Link的插孔，可串接成樹狀區域網路。', '2019-12-10 13:25:28'),
(5, '12412', '214124', '2019-12-10 13:36:22'),
(6, '12412', '214124', '2019-12-10 13:40:06'),
(7, '12412', '214124', '2019-12-10 13:40:38'),
(9, '12412', '214124', '2019-12-10 13:40:44'),
(10, '12412', '214124', '2019-12-10 13:40:44'),
(11, '12412', '214124', '2019-12-10 13:40:58'),
(13, '12412', '214124', '2019-12-10 13:41:20'),
(15, '12412', '214124', '2019-12-10 13:47:11'),
(16, '12412', '214124', '2019-12-10 13:52:20'),
(17, '12412', '214124', '2019-12-10 13:52:50'),
(18, '12412', 'Read the license agreement and hit Agree to continue installation. Wait a few seconds while the file', '2019-12-10 13:53:07');

-- --------------------------------------------------------

--
-- 資料表結構 `orderdata`
--

CREATE TABLE `orderdata` (
  `o_num` int(10) NOT NULL,
  `o_time` date NOT NULL,
  `o_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `o_phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `o_citime` date NOT NULL,
  `o_day` int(10) NOT NULL,
  `o_total` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `o_cotime` date NOT NULL,
  `o_ferry` enum('公營','民營') COLLATE utf8_unicode_ci NOT NULL,
  `r_id` int(10) DEFAULT NULL,
  `t_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `orderdata`
--

INSERT INTO `orderdata` (`o_num`, `o_time`, `o_name`, `o_phone`, `o_citime`, `o_day`, `o_total`, `o_cotime`, `o_ferry`, `r_id`, `t_id`) VALUES
(32, '2019-12-26', '李澎澎', '0925333565', '2019-12-10', 2, '2000', '2019-12-11', '公營', 5, 0),
(36, '0000-00-00', '李澎澎', '0925333565', '2019-12-11', 1, '10000', '2019-12-12', '公營', 5, 0),
(39, '0000-00-00', '阿樂', '0931777777', '2019-12-10', 3, '18000', '2019-12-13', '公營', 8, 0),
(42, '0000-00-00', '阿樂', '0931777777', '2019-12-10', 2, '12000', '2019-12-12', '公營', 7, 0),
(43, '0000-00-00', '阿樂', '0931777777', '2019-12-10', 2, '14000', '2019-12-12', '公營', 10, 0),
(44, '0000-00-00', '阿樂', '0931777777', '2019-12-12', 1, '6000', '2019-12-13', '公營', 7, 0),
(45, '0000-00-00', '李澎澎', '0925333565', '2019-12-10', 2, '3000', '2019-12-12', '公營', 1, 0),
(46, '0000-00-00', '李澎澎', '0925333565', '2019-12-13', 1, '2400', '2019-12-14', '公營', 4, 0),
(47, '2019-12-19', '系統管理員', '', '2019-12-19', 3, '', '2019-12-28', '公營', NULL, 0);

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

--
-- 傾印資料表的資料 `s_orderdata`
--

INSERT INTO `s_orderdata` (`s_order_id`, `m_id`, `total`) VALUES
(1, 41, 3850),
(2, 41, 240),
(3, 41, 630);

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
(3, 3, 4, 630, 1);

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
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `guestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `newsdata`
--
ALTER TABLE `newsdata`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orderdata`
--
ALTER TABLE `orderdata`
  MODIFY `o_num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `s_order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `s_orderdetail`
--
ALTER TABLE `s_orderdetail`
  MODIFY `s_orderdetid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `traveldata`
--
ALTER TABLE `traveldata`
  MODIFY `t_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
