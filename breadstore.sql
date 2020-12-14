-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-12-07 13:12:50
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `breadstore`
--
CREATE DATABASE IF NOT EXISTS `breadstore` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `breadstore`;

-- --------------------------------------------------------

--
-- 資料表結構 `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `pID` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `account` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `cart`
--

INSERT INTO `cart` (`ID`, `pID`, `count`, `account`) VALUES
(1, 2, 1, 'bar123'),
(2, 2, 17, 'bar123'),
(5, 1, 1, 'zzzz'),
(6, 1, 3, 'zzzz'),
(8, 1, 4, 'popo'),
(10, 3, 1, 'apple123cat'),
(11, 2, 1, '');

-- --------------------------------------------------------

--
-- 資料表結構 `produce`
--

CREATE TABLE `produce` (
  `ID` int(11) NOT NULL,
  `pName` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `pDescription` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pReview` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `pIMG` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kindNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `produce`
--

INSERT INTO `produce` (`ID`, `pName`, `pDescription`, `pReview`, `price`, `pIMG`, `kindNumber`) VALUES
(1, '紅豆麵包', '香甜綿密的紅豆餡被包覆在剛出爐的麵包裡，一起融入你的味蕾，獨特的香甜味道，讓人口水直流，越吃越唰嘴!', 0, 25, 'img/bread1.jpg', 1),
(2, '果醬麵包', '香酥的菠蘿麵包皮，包裏著特製果醬餡，這種香甜的滋味，讓人想一口接著一口。', 0, 30, 'img/bread2.jpg', 1),
(3, '紅豆麵包', '香甜綿密的紅豆餡被包覆在剛出爐的麵包裡，一起融入你的味蕾，獨特的香甜味道，讓人口水直流，越吃越唰嘴!', 0, 25, 'img/bread1.jpg', 1),
(4, '果醬麵包', '香酥的菠蘿麵包皮，包裏著特製果醬餡，這種香甜的滋味，讓人想一口接著一口。', 0, 30, 'img/bread2.jpg', 1),
(5, '蝴蝶酥', '外觀為淡黃或焦黃有很多層皺摺，外表刷上蛋液，撒上一些白砂糖，隨後兩邊分別向中間摺疊，最中間留個空， 兩面疊起並切成小條，最後經由烘箱做出來。', 0, 10, 'img/cookie1.jpg', 3),
(6, '牛軋餅-原味', '那迷人的濃郁奶香與酥脆爽口的蘇打餅完美融合，加上蘇打餅上的青蔥作點綴，口感巧妙不黏牙，只要咬一口，幸福溢滿口中！', 0, 15, 'img/cookie2.jpg', 3),
(7, '蝴蝶酥', '外觀為淡黃或焦黃有很多層皺摺，外表刷上蛋液，撒上一些白砂糖，隨後兩邊分別向中間摺疊，最中間留個空， 兩面疊起並切成小條，最後經由烘箱做出來。', 0, 10, 'img/cookie1.jpg', 3),
(8, '牛軋餅-原味', '那迷人的濃郁奶香與酥脆爽口的蘇打餅完美融合，加上蘇打餅上的青蔥作點綴，口感巧妙不黏牙，只要咬一口，幸福溢滿口中！', 0, 15, 'img/cookie2.jpg', 3),
(9, '檸檬蛋糕', '內裡海綿蛋糕的口感，搭上外層酸甜的糖霜，散發上淡淡的檸檬香味，在嘴裡慢慢地擴散開來，令人蘭以忘懷的味道。', 0, 100, 'img/cake1.jpg', 2),
(10, '烤布蕾', '口感綿密濃郁，香濃可口。加一點香草添增一點香氣，小小一口擁有了多種享受。', 0, 200, 'img/cake2.jpg', 2),
(11, '檸檬蛋糕', '內裡海綿蛋糕的口感，搭上外層酸甜的糖霜，散發上淡淡的檸檬香味，在嘴裡慢慢地擴散開來，令人蘭以忘懷的味道。', 0, 100, 'img/cake1.jpg', 2),
(12, '烤布蕾', '口感綿密濃郁，香濃可口。加一點香草添增一點香氣，小小一口擁有了多種享受。', 0, 200, 'img/cake2.jpg', 2),
(13, '蝴蝶酥', '外觀為淡黃或焦黃有很多層皺摺，外表刷上蛋液，撒上一些白砂糖，隨後兩邊分別向中間摺疊，最中間留個空， 兩面疊起並切成小條，最後經由烘箱做出來。', 0, 10, 'img/cookie1.jpg', 3);

-- --------------------------------------------------------

--
-- 資料表結構 `producesort`
--

CREATE TABLE `producesort` (
  `ID` int(11) NOT NULL,
  `kindName` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `kindNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `producesort`
--

INSERT INTO `producesort` (`ID`, `kindName`, `kindNumber`) VALUES
(1, 'bread', 1),
(2, 'cake', 2),
(3, 'cookie', 3);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `produce`
--
ALTER TABLE `produce`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `producesort`
--
ALTER TABLE `producesort`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `produce`
--
ALTER TABLE `produce`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `producesort`
--
ALTER TABLE `producesort`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
