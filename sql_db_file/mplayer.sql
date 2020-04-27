-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2020 at 10:13 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mplayer`
--

-- --------------------------------------------------------

--
-- Table structure for table `gan_list`
--

CREATE TABLE `gan_list` (
  `s_id` int(11) NOT NULL,
  `s_band` varchar(50) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_album` varchar(50) NOT NULL,
  `s_path` varchar(500) NOT NULL,
  `s_hit_count` int(11) NOT NULL,
  `s_cover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `usr_id` int(11) NOT NULL,
  `usr_firstname` text NOT NULL,
  `usr_lastname` text NOT NULL,
  `usr_email` varchar(50) NOT NULL,
  `usr_password` varchar(50) NOT NULL,
  `usr_favorite` varchar(30) NOT NULL,
  `usr_albums` varchar(30) NOT NULL,
  `usr_playlists` varchar(30) NOT NULL,
  `usr_genres` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gan_list`
--
ALTER TABLE `gan_list`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gan_list`
--
ALTER TABLE `gan_list`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
