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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_band` varchar(50),
  `s_name` varchar(50),
  `s_album` varchar(50),
  `s_path` varchar(500),
  `s_hit_count` int(11) ,
  `s_cover` varchar(100),
  PRIMARY KEY(id)
)

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_firstname` text,
  `usr_lastname` text ,
  `usr_email` varchar(50) ,
  `usr_password` varchar(50) ,
  `usr_favorite` varchar(30) ,
  `usr_albums` varchar(30) ,
  `usr_playlists` varchar(30) ,
  `usr_genres` varchar(30),
    PRIMARY KEY(id)
)
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
