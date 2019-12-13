-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-13 06:49:12
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `src` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileName` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`id`, `userID`, `src`, `fileName`) VALUES
(9, 1, './img/fb879df1780beb428ae9cc2902985483jpg', 'Coffee-goods_15.jpg'),
(10, 1, './img/d794349f99c84927b0130a2a4072c24bjpg', 'Coffee-goods_02.jpg'),
(11, 1, './img/b088a75e69a64e5779e732b95b85f74cjpg', 'Coffee-goods_08.jpg'),
(12, 1, './img/35d7aa14a1b7c902f2dbbdaebe7adaf3jpg', 'cafe_11.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) NOT NULL,
  `workName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userID` int(10) NOT NULL,
  `imageID` int(10) NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `portfolio`
--

INSERT INTO `portfolio` (`id`, `workName`, `userID`, `imageID`, `href`) VALUES
(1, '   12321', 1, 10, '     http://google.com'),
(2, '   12321', 1, 11, '     http://google.com'),
(3, '   12321', 1, 9, '     http://google.com'),
(4, '   12321', 1, 10, '     http://google.com');

-- --------------------------------------------------------

--
-- 資料表結構 `resume`
--

CREATE TABLE `resume` (
  `id` int(10) NOT NULL,
  `resumeName` varchar(20) NOT NULL,
  `userID` int(10) NOT NULL,
  `shortSelfInterduction` int(10) NOT NULL,
  `selfInterduction` int(10) NOT NULL,
  `workExperience` text NOT NULL,
  `portfolio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `resume`
--

INSERT INTO `resume` (`id`, `resumeName`, `userID`, `shortSelfInterduction`, `selfInterduction`, `workExperience`, `portfolio`) VALUES
(1, '履歷1', 1, 19, 4, '7,8', '1,2,3'),
(2, '履歷2', 1, 21, 3, '7', '2,3,4');

-- --------------------------------------------------------

--
-- 資料表結構 `selfinterduction`
--

CREATE TABLE `selfinterduction` (
  `id` int(11) NOT NULL,
  `selfInterduction` text DEFAULT NULL,
  `userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `selfinterduction`
--

INSERT INTO `selfinterduction` (`id`, `selfInterduction`, `userID`) VALUES
(3, '		1111111111111111111111111111111111111111111111111111\r\n2222222222222222		', 1),
(4, '						22445afdasd		', 1),
(5, '				dsafdsfwe11112342', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `shortselfinterduction`
--

CREATE TABLE `shortselfinterduction` (
  `id` int(11) NOT NULL,
  `shortSelfInterduction` text DEFAULT NULL,
  `userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `shortselfinterduction`
--

INSERT INTO `shortselfinterduction` (`id`, `shortSelfInterduction`, `userID`) VALUES
(3, '123456789', 2),
(5, 'yyytttt', 2),
(6, 'kkkkkk	', 0),
(19, '短自介01 今天天氣真好', 1),
(20, '								短自介02 Today is a good day  	', 1),
(21, '短自介03 你好，歡迎光臨	', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `userbasicdata`
--

CREATE TABLE `userbasicdata` (
  `id` int(10) NOT NULL,
  `acc` text NOT NULL,
  `ps` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `photoPath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `userbasicdata`
--

INSERT INTO `userbasicdata` (`id`, `acc`, `ps`, `name`, `photoPath`) VALUES
(1, 'guest', 'guest', '林昱賢', './img/Coffee-goods_17.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `workexperience`
--

CREATE TABLE `workexperience` (
  `id` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `company` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seniority` int(11) NOT NULL,
  `join-time` date NOT NULL,
  `end-time` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `workexperience`
--

INSERT INTO `workexperience` (`id`, `userID`, `company`, `title`, `seniority`, `join-time`, `end-time`, `description`) VALUES
(2, 0, ' 測試-公司名稱  ', ' 一般員工    ', 5, '0000-00-00', '0000-00-00', '`1`323`		'),
(4, 0, ' 測試-公司名稱  ', ' 一般員工    ', 5, '0000-00-00', '0000-00-00', '					測試-職務說明					'),
(7, 1, '   124321', '     1243', 0, '2012-12-16', '2015-12-23', '							12fdgergtwefdshtytry			'),
(8, 1, '   2222222222222', '     dsfasdfdsa', 0, '2015-12-23', '2019-12-16', '										');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `selfinterduction`
--
ALTER TABLE `selfinterduction`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `shortselfinterduction`
--
ALTER TABLE `shortselfinterduction`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `userbasicdata`
--
ALTER TABLE `userbasicdata`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `workexperience`
--
ALTER TABLE `workexperience`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `selfinterduction`
--
ALTER TABLE `selfinterduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shortselfinterduction`
--
ALTER TABLE `shortselfinterduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `userbasicdata`
--
ALTER TABLE `userbasicdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `workexperience`
--
ALTER TABLE `workexperience`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
