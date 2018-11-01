-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 05:02 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genesisconstruct`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `albumid` int(15) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `releasedate` date NOT NULL,
  `producer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(20) NOT NULL,
  `illust` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://png.pngtree.com/element_origin_min_pic/17/04/19/f0657f5b68eb9d3c6e0076fbd897322a.jpg',
  `songs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`albumid`, `title`, `description`, `releasedate`, `producer`, `price`, `illust`, `label`, `thumbnail`, `songs`, `producerid`) VALUES
(2, 'sda', NULL, '2017-12-30', 'asda', 1231, NULL, NULL, 'https://png.pngtree.com/element_origin_min_pic/17/04/19/f0657f5b68eb9d3c6e0076fbd897322a.jpg', 'sdfas, sdfas, asdfasd', 1),
(3, 'sda', NULL, '2017-12-29', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(4, 'sda', NULL, '2017-12-30', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(5, 'sda', NULL, '2017-12-29', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(6, 'sda', NULL, '2017-12-30', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(7, 'sda', NULL, '2017-12-29', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(8, 'sda', NULL, '2017-12-30', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(9, 'sda', NULL, '2017-12-29', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(10, 'sda', NULL, '2017-12-30', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(11, 'sda', NULL, '2017-12-29', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(12, 'sda', NULL, '2017-12-30', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(13, 'sda', NULL, '2017-12-29', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(14, 'sda', NULL, '2017-12-30', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(15, 'sda', NULL, '2017-12-29', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(16, 'sda', NULL, '2017-12-30', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1),
(17, 'sda', NULL, '2017-12-29', 'asda', 1231, NULL, NULL, 'img/v1.jpg', 'sdfas, sdfas, asdfasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int(11) NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `songid` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploadtime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_16_091144_create_admins_table', 2),
(4, '2018_10_18_010616_create_roles_table', 3),
(5, '2018_10_18_010743_create_role_user_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `producerid` int(15) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `associations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sites` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `works` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png',
  `discography` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`producerid`, `name`, `gender`, `dob`, `status`, `genre`, `associations`, `sites`, `works`, `avatar`, `discography`, `about`) VALUES
(1, 'adf', NULL, NULL, 'asd', 'asd', NULL, NULL, 'asd', 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png	', 'asdasf', '');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `songid` int(15) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `producer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `vocal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `album` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lyric` longtext COLLATE utf8mb4_unicode_ci,
  `uploaddate` date NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg',
  `vocalid` int(11) DEFAULT NULL,
  `producerid` int(11) DEFAULT NULL,
  `albumid` int(11) DEFAULT NULL,
  `songaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`songid`, `title`, `genre`, `producer`, `vocal`, `album`, `country`, `description`, `lyric`, `uploaddate`, `avatar`, `vocalid`, `producerid`, `albumid`, `songaddress`) VALUES
(1, 'cã', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(2, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg', NULL, NULL, NULL, 'sadfas'),
(3, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg', NULL, NULL, NULL, 'sadfas'),
(4, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg', NULL, NULL, NULL, 'sadfas'),
(5, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg', NULL, NULL, NULL, 'sadfas'),
(6, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg', NULL, NULL, NULL, 'sadfas'),
(7, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(8, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(9, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(10, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(11, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(12, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(13, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(14, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(15, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(16, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(17, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(18, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(19, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(20, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(21, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(22, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(23, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(24, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(25, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(26, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(27, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(28, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(29, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas'),
(30, 'asd', 'sda', '', '', NULL, NULL, NULL, NULL, '2017-12-12', 'img/v1.jpg', NULL, NULL, NULL, 'sadfas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `level` int(1) DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png',
  `favorite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `dob`, `gender`, `location`, `about`, `level`, `avatar`, `favorite`) VALUES
(3, 'Lý Quốc Trọng', 'trongdaigia19955@gmail.com', NULL, '$2y$10$QOcDzOpejqMgHmKLP4agF.lvG6o.nFoPv1BzwbycqUIXmQJuuWoDC', NULL, '2018-10-22 20:17:43', '2018-10-22 20:17:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '1234', '12345@gmail.com', NULL, '$2y$10$he1/UHlQUiw8.2o5XuSj6.5eT7BlmfCxg63jIn8iSv/UlhlNuo65e', 'njQ1elbHTCbyy2WSc3UVxXbY8DakWhffUwl3tusWapXOKgXMFVNpjBpeIT58', '2018-10-26 01:18:06', '2018-10-28 21:23:58', NULL, 'Female', 'dsfgsdf', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 3, 'img/6c8f071210788b56c8c2cc98ec570227.jpg', NULL),
(6, 'Acedia', '1234@gmail.com', NULL, '$2y$10$AQXfYItG7wINPymHsLAtdue/nN4Yxnqvqhwo2xAb4TP7n6YNvE56C', 'zy8v0yEeU1HhZgHDi26PTR6DWfJSfUt6yPfBOQ8V2kz8B4kaU2QetXNY3mEP', '2018-10-29 18:48:27', '2018-10-31 20:44:22', '2018-10-30', 'Female', '123', '<p><a href=\"http://facebook.com\" target=\"_blank\">asdfa</a><br></p>', 3, 'img/00c0eeb71d65e0ec675c3ca0e0886203.jpg', NULL),
(7, 'Acedia', '123456@gmail.com', NULL, '$2y$10$plWnFqXt3iqaFsmz7OPDheTC/0wW.7p/U1hTY/us.Lef8qWlhuVUW', '9SLqNmJbwZVWlHp5WCnBnM1fJsHlpP08MeozihvJ5gewebKCcc2TtuGGHh6g', '2018-10-30 20:23:31', '2018-10-30 21:00:22', NULL, NULL, NULL, NULL, 3, 'img/3c13c7812b05c37375e33baef7d539df.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vocals`
--

CREATE TABLE `vocals` (
  `vocalid` int(15) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `associations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sites` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `works` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`albumid`),
  ADD KEY `producerid` (`producerid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `song_comment` (`songid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`producerid`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`songid`),
  ADD KEY `vocalid` (`vocalid`,`producerid`,`albumid`),
  ADD KEY `producer_connect_song` (`producerid`),
  ADD KEY `album_connect` (`albumid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vocals`
--
ALTER TABLE `vocals`
  ADD PRIMARY KEY (`vocalid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `albumid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `producerid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `songid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vocals`
--
ALTER TABLE `vocals`
  MODIFY `vocalid` int(15) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `producer_name` FOREIGN KEY (`producerid`) REFERENCES `producer` (`producerid`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `song_comment` FOREIGN KEY (`songid`) REFERENCES `songs` (`songid`),
  ADD CONSTRAINT `user_comment` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `album_connect` FOREIGN KEY (`albumid`) REFERENCES `albums` (`albumid`),
  ADD CONSTRAINT `producer_connect_song` FOREIGN KEY (`producerid`) REFERENCES `producer` (`producerid`),
  ADD CONSTRAINT `vocal_name` FOREIGN KEY (`vocalid`) REFERENCES `vocals` (`vocalid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
