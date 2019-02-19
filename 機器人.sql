-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2019 at 05:26 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cd105g3`
--

-- --------------------------------------------------------

--
-- Table structure for table `robot`
--

CREATE TABLE `robot` (
  `qsNo` int(11) NOT NULL COMMENT 'PK Auto Increment',
  `defaultQ` varchar(30) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) DEFAULT NULL,
  `ans3` varchar(100) DEFAULT NULL,
  `ans4` varchar(100) DEFAULT NULL,
  `qsOrd` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `robot`
--

INSERT INTO `robot` (`qsNo`, `defaultQ`, `ans1`, `ans2`, `ans3`, `ans4`, `qsOrd`) VALUES
(1, '大洋洲', '大洋洲我們有阿斯帕林山', NULL, NULL, NULL, '3'),
(2, '歐洲', '歐洲我們有阿爾卑斯山', NULL, NULL, NULL, '2'),
(3, '亞洲', '亞洲我們推薦日本富士山', '亞洲我們推薦喜馬拉雅山', '亞洲我們推薦珠穆朗瑪峰', '亞洲我們推薦台灣的玉山', '1'),
(4, '北美洲', '北美洲我們有優勝美地', NULL, NULL, NULL, '4'),
(5, '南美洲', '南美洲我們推薦百內國家公園聖克魯斯山', '南美洲我們推薦馬丘比丘', '南美洲我們推薦聖克魯斯山', NULL, '0'),
(6, '非洲', '非洲我們有吉力馬札羅山', NULL, NULL, NULL, '0'),
(7, '行程', '你想自行規劃還是官方行程呢?', '你想要去哪一個洲的山呢', '有找到想去的景點嗎？', NULL, '0'),
(8, '自行', '你有想去的地方嗎?我們有6大洲可以選擇', '自訂行程我們推薦玉山', '自訂行程我們推薦富士山', NULL, '0'),
(9, '官方', '你有看到中意的行程嗎', '有想去的景點嗎？', '可以參考我們的行程頁面', NULL, '0'),
(10, '其他回答', '可以說的更詳細一點嗎?或者參考下面標籤', '咩～～', '我只是隻羊我什麼都不知道', '怎麼會問羊這種問題呢？', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `robot`
--
ALTER TABLE `robot`
  ADD PRIMARY KEY (`qsNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `robot`
--
ALTER TABLE `robot`
  MODIFY `qsNo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK Auto Increment', AUTO_INCREMENT=11;
