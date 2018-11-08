-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 09:31 AM
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
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `releasedate` date NOT NULL,
  `producer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(20) NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg	',
  `producerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`albumid`, `title`, `description`, `releasedate`, `producer`, `price`, `label`, `thumbnail`, `producerid`) VALUES
(0, 'N/A', '<p>N/A</p>', '0000-00-00', 'N/A', 0, 'N/A', 'https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int(11) NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `songid` int(11) NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploadtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `userid` int(11) UNSIGNED NOT NULL,
  `songid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png',
  `about` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`producerid`, `name`, `gender`, `dob`, `status`, `genre`, `associations`, `sites`, `avatar`, `about`) VALUES
(0, 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A', 'N/A', '<a href=\"#\">N/A</a><br>', '	\r\nhttp://ssl.gstatic.com/accounts/ui/avatar_2x.png', '<p>N/A</p>');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `songid` int(15) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `producer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `vocal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `album` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `lyric` longtext COLLATE utf8mb4_unicode_ci,
  `uploaddate` date NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg',
  `producerid` int(11) DEFAULT NULL,
  `albumid` int(11) DEFAULT NULL,
  `songaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `about` longtext COLLATE utf8mb4_unicode_ci,
  `level` int(1) DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `dob`, `gender`, `location`, `about`, `level`, `avatar`) VALUES
(3, 'Lý Quốc Trọng', 'trongdaigia19955@gmail.com', NULL, '$2y$10$QOcDzOpejqMgHmKLP4agF.lvG6o.nFoPv1BzwbycqUIXmQJuuWoDC', NULL, '2018-10-22 20:17:43', '2018-10-22 20:17:43', NULL, NULL, NULL, NULL, NULL, NULL),
(5, '1234', '12345@gmail.com', NULL, '$2y$10$he1/UHlQUiw8.2o5XuSj6.5eT7BlmfCxg63jIn8iSv/UlhlNuo65e', 'ho3UqV0L58h5nuN63MMDi9MMfevuG1mfYTy9ymMroEQVrxF3aaIug8CJac0b', '2018-10-26 01:18:06', '2018-10-28 21:23:58', NULL, 'Female', 'dsfgsdf', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 3, 'img/6c8f071210788b56c8c2cc98ec570227.jpg'),
(6, 'Acedia', '1234@gmail.com', NULL, '$2y$10$AQXfYItG7wINPymHsLAtdue/nN4Yxnqvqhwo2xAb4TP7n6YNvE56C', '7412k0OCLBTQEKgaOBlBxkbvKRNyrgpFDrPoJoejnCeFLpjskAOZKSIpaIxd', '2018-10-29 18:48:27', '2018-11-08 01:06:35', '2018-10-30', 'Female', '123', '<b><u>BIG BUGGY BUG BUG BIG BUG BUGGY BUG BIG</u></b>', 3, 'https://res.cloudinary.com/silentlove995/image/upload/c_scale,o_100,q_auto:eco,w_658,z_0.4/v1541664391/avatar/814ca3257321b666e97b7c2bac583e0e1541664383110.png'),
(7, 'Acedia', '123456@gmail.com', NULL, '$2y$10$plWnFqXt3iqaFsmz7OPDheTC/0wW.7p/U1hTY/us.Lef8qWlhuVUW', 'tGghL4AqfmK003WXPiP5Cb20sXSAs9xpOutrjI4hrMXZ6wjPa7vkfdLO7tFK', '2018-10-30 20:23:31', '2018-10-30 21:00:22', NULL, NULL, NULL, NULL, 3, 'img/3c13c7812b05c37375e33baef7d539df.jpg'),
(8, 'Acedia', '123@gmail.com', NULL, '$2y$10$GJbi3FglYdBISluNlDkiEu9QD9x79b4D73uGKueZ93GPv7i5q1TkS', '9u9OE7BKxVCwtIXkYk6xvEveDFnupynLKRhBxTf6KAvAjEReMY3wzUobkK5a', '2018-11-07 06:34:07', '2018-11-07 06:34:07', NULL, NULL, NULL, NULL, 3, 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png');

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
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD KEY `user_favorite` (`userid`),
  ADD KEY `song_favorite` (`songid`);

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
  ADD KEY `vocalid` (`producerid`,`albumid`),
  ADD KEY `producer_connect_song` (`producerid`),
  ADD KEY `album_connect` (`albumid`),
  ADD KEY `user_connect` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `albumid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `producerid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `songid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `song_favorite` FOREIGN KEY (`songid`) REFERENCES `songs` (`songid`),
  ADD CONSTRAINT `user_favorite` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `album_connect` FOREIGN KEY (`albumid`) REFERENCES `albums` (`albumid`),
  ADD CONSTRAINT `producer_connect_song` FOREIGN KEY (`producerid`) REFERENCES `producer` (`producerid`),
  ADD CONSTRAINT `user_connect` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
