-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-10 09:45:46
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

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `newsdata`
--
ALTER TABLE `newsdata`
  ADD PRIMARY KEY (`newsid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `newsdata`
--
ALTER TABLE `newsdata`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
