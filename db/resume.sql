-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-11 09:38:35
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
(1, 1, '測試-公司名稱', '一般員工', 5, '2016-11-01', '2022-02-23', '測試-職務說明'),
(2, 0, ' 測試-公司名稱  ', ' 一般員工    ', 5, '0000-00-00', '0000-00-00', '`1`323`		'),
(4, 0, ' 測試-公司名稱  ', ' 一般員工    ', 5, '0000-00-00', '0000-00-00', '					測試-職務說明					'),
(6, 1, '測試-公司名稱', '一般員工', 5, '2016-11-01', '2022-02-23', '測試-職務說明');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `workexperience`
--
ALTER TABLE `workexperience`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `workexperience`
--
ALTER TABLE `workexperience`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
