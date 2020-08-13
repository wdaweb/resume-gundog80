-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-05-11 15:21:58
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
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `resume_image`
--

CREATE TABLE `resume_image` (
  `id` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `path` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_image`
--

INSERT INTO `resume_image` (`id`, `userID`, `path`, `fName`, `text`) VALUES
(53, 1, './upFile/5183fed15bcd0719958f3e77fbfd04c1.jpg', '沙漠', '222'),
(54, 1, './upFile/566dfe8e043b600ee15c9a260cbbd6a5.jpg', 'Hydrangeas.jpg', ''),
(55, 1, './upFile/d77af487132349c27bfb9a89316d0c3b.jpg', 'Jellyfish.jpg', ''),
(57, 1, './upFile/384478d3fb2c0172d1384ae5ef8763e0.jpg', '企鵝', '111'),
(58, 1, './upFile/8c97807cc499710bcf2b0417d3bdc4a5.jpg', 'Lighthouse.jpg', ''),
(59, 1, './upFile/31dab8f8b4f47cc37bb3200640c84742.PNG', 'quidditch01', ''),
(60, 1, './upFile/9157fe67fe34251d64e699fee6336d27.PNG', 'quidditch02', ''),
(61, 1, './upFile/7c920c2061e277d0cae31494f81ad570.PNG', 'quidditch03', ''),
(62, 1, './upFile/c8142749d42928432485030f10bb82a2.PNG', 'poke01.PNG', ''),
(63, 1, './upFile/ae1db6954c69a8fbe6a5a699889f2a35.PNG', 'resume01.PNG', ''),
(64, 1, './upFile/f81753876f01de59772e9481f26feabc.PNG', 'resume02.PNG', ''),
(65, 1, './upFile/f43a1ae3899f7a659349c9a7dea0be73.PNG', 'resume03.PNG', ''),
(66, 1, './upFile/06a77fd0c78d9309a9d5eb728dd7f2c4.PNG', 'resume04.PNG', '');

-- --------------------------------------------------------

--
-- 資料表結構 `resume_portfolio`
--

CREATE TABLE `resume_portfolio` (
  `id` int(10) NOT NULL,
  `workName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userID` int(10) NOT NULL,
  `imageID` int(10) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_portfolio`
--

INSERT INTO `resume_portfolio` (`id`, `workName`, `userID`, `imageID`, `image`, `href`, `text`) VALUES
(1, '小遊戲-魁地奇', 1, 10, 'a:3:{i:0;s:2:\"59\";i:1;s:2:\"60\";i:2;s:2:\"61\";}', 'http://220.128.133.15/s1080317/quidditch/', '躲避對手打來的博格球\r\n並盡快的捉到金探子'),
(3, '小遊戲-翻牌計算機', 1, 9, 'a:1:{i:0;s:2:\"62\";}', 'http://220.128.133.15/s1080317/poke&cal/', '透過翻牌令等式相等\r\n翻出相同的卜克牌會加入\r\n計算式，每進行一定回合\r\n後將有隨機的數字掉落'),
(5, '作業練習-旅遊疫病警報', 1, 0, 'a:1:{i:0;s:2:\"11\";}', 'http://google.com111', '旅遊疫情警報'),
(6, '', 0, 0, 'a:3:{i:0;s:2:\"63\";i:1;s:2:\"65\";i:2;s:2:\"66\";}', '', ''),
(7, '求職履歷系統', 1, 0, 'a:3:{i:0;s:2:\"63\";i:1;s:2:\"65\";i:2;s:2:\"66\";}', '', '未完成，暫不提供連結');

-- --------------------------------------------------------

--
-- 資料表結構 `resume_resume`
--

CREATE TABLE `resume_resume` (
  `id` int(10) NOT NULL,
  `resumeName` varchar(20) NOT NULL COMMENT '履歷表名稱',
  `userID` int(10) NOT NULL,
  `sayHellow` text NOT NULL,
  `selfInterduction` text NOT NULL,
  `workExp` text NOT NULL,
  `portfolio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `resume_resume`
--

INSERT INTO `resume_resume` (`id`, `resumeName`, `userID`, `sayHellow`, `selfInterduction`, `workExp`, `portfolio`) VALUES
(1, '履歷1', 1, 'a:1:{i:0;s:2:\"19\";}', 'a:1:{i:0;s:1:\"3\";}', 'a:3:{i:0;s:2:\"13\";i:1;s:2:\"14\";i:2;s:2:\"15\";}', 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"3\";i:2;s:1:\"7\";}'),
(2, '履歷2', 1, '19', '3', '8', '2,3,4');

-- --------------------------------------------------------

--
-- 資料表結構 `resume_sayhellow`
--

CREATE TABLE `resume_sayhellow` (
  `id` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `resume_sayhellow`
--

INSERT INTO `resume_sayhellow` (`id`, `text`, `userID`) VALUES
(3, '123456789', 2),
(5, 'yyytttt', 2),
(6, 'kkkkkk	', 0),
(19, '您好，我叫林昱賢\r\n希望能有機會投入網頁設計全端或後端的工作', 1),
(21, '短自介03 你好，歡迎光臨	', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_selfinterduction`
--

CREATE TABLE `resume_selfinterduction` (
  `id` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `resume_selfinterduction`
--

INSERT INTO `resume_selfinterduction` (`id`, `text`, `userID`) VALUES
(3, '您好：\r\n　　我叫林昱賢，今年40歲，在本次轉換跑道之前從事機械製造與設計的工作大約有10年的時間。因為不是本科系的人員，所以在任職的期間對於機械方面的專業知識比較難以有系統的去掌握，反而在繪圖的流程．結構和規劃方面算是有自己的心得，在自己一個人工作的時候也算自得其樂吧。\r\n　　會下轉換跑道的決心是因為在昇飛的任職經驗中，深切的了解到之前所走的方向在本人所能接觸到的業界中是不受重視的，並且設計流程上的東西如果沒有足夠的話語權極易和其它人舊有的習慣衝突，並且自己一個人所搭建為了讓修改管理上有系統的工作方式在單一案件的速度上也造成了不少拖累，因為在當時的環境中尋覓不到改善的方向，因此決定轉職。\r\n　　在職訓局的學習過程中，一系列的課程中明顯的能感受到後面的技術其實不斷在修補前面技術上的弱點，也讓我確定了這次的選擇並沒有失誤。不過以學習的速度來說，理解能力自認還算不錯，但熟悉程式碼的速度只能算中等，除了基本的php和JQurery較為熟練外，其它的各種框架和套件和UI等等的，都只能算是知道有這個東西。\r\n 　　您可以在 https://wdaweb.github.io/1080317/ 看到一些我學習的作品集，希望能有在貴公司服務的機會。 \r\n\r\n\r\n', 1),
(4, '22445afdasd', 1),
(5, 'dsafdsfwe11112342kkk', 1),
(6, 'tyr\r\ntry', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_total`
--

CREATE TABLE `resume_total` (
  `id` int(1) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `resume_total`
--

INSERT INTO `resume_total` (`id`, `total`) VALUES
(1, 24);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_userbasicdata`
--

CREATE TABLE `resume_userbasicdata` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `acc` varchar(20) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `path` text NOT NULL,
  `fName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `resume_userbasicdata`
--

INSERT INTO `resume_userbasicdata` (`id`, `name`, `acc`, `pw`, `path`, `fName`) VALUES
(1, '林昱賢', 'test1', 'tttt', './upFile/1d96e7829405b4c270377d0542ef97bc.jpg', '照片.jpg'),
(2, '', '', '', './upFile/c2831abc7349d543adb0b881462785d1', '正面.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `resume_workexp`
--

CREATE TABLE `resume_workexp` (
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
-- 傾印資料表的資料 `resume_workexp`
--

INSERT INTO `resume_workexp` (`id`, `userID`, `company`, `title`, `seniority`, `join-time`, `end-time`, `description`) VALUES
(2, 0, ' 測試-公司名稱  ', ' 一般員工    ', 5, '0000-00-00', '0000-00-00', '`1`323`		'),
(4, 0, ' 測試-公司名稱  ', ' 一般員工    ', 5, '0000-00-00', '0000-00-00', '					測試-職務說明					'),
(13, 1, '泰山職訓-PHP網頁設計', '學員', 0, '2019-09-01', '2020-03-01', 'HTML CSS PHP  Javascript \r\n'),
(14, 1, '忠昇有限公司', '繪圖人員', 0, '2014-06-01', '2018-11-01', '(Inventer Autocad)繪圖人員/生產排刀/現場支援'),
(15, 1, '久越機械', '繪圖人員', 0, '2012-06-01', '2014-04-01', '(autocad-2d)繪圖或辦公室雜務');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_image`
--
ALTER TABLE `resume_image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_portfolio`
--
ALTER TABLE `resume_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_resume`
--
ALTER TABLE `resume_resume`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_sayhellow`
--
ALTER TABLE `resume_sayhellow`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_selfinterduction`
--
ALTER TABLE `resume_selfinterduction`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_total`
--
ALTER TABLE `resume_total`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_userbasicdata`
--
ALTER TABLE `resume_userbasicdata`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_workexp`
--
ALTER TABLE `resume_workexp`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_image`
--
ALTER TABLE `resume_image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_portfolio`
--
ALTER TABLE `resume_portfolio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_resume`
--
ALTER TABLE `resume_resume`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_sayhellow`
--
ALTER TABLE `resume_sayhellow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_selfinterduction`
--
ALTER TABLE `resume_selfinterduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_total`
--
ALTER TABLE `resume_total`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_userbasicdata`
--
ALTER TABLE `resume_userbasicdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_workexp`
--
ALTER TABLE `resume_workexp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
