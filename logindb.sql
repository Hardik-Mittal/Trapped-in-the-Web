-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 06:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `concern` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `concern`, `date`) VALUES
(1, 'admin', 'abhinav.anand.1999.ok@gmail.com', 'sdfghjkl;', '2020-05-13 14:27:18'),
(2, 'admin', 'abhinav.anand.1999.ok@gmail.com', 'aqswdfgbnhm,', '2020-05-13 14:27:25'),
(3, 'admin', 'abhinav.anand.1999.ok@gmail.com', 'aqswdfgbnhm,', '2020-05-13 14:29:45'),
(4, 'admin', 'abhinav.anand.1999.ok@gmail.com', 'aqswdfgbnhm,', '2020-05-13 14:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `dbmedi`
--

CREATE TABLE `dbmedi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `age` int(11) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospitalq`
--

CREATE TABLE `hospitalq` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `descr` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `appointment` date NOT NULL,
  `uniqueid` varchar(30) NOT NULL,
  `statusapp` varchar(30) NOT NULL,
  `time_slot` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitalq`
--

INSERT INTO `hospitalq` (`sno`, `name`, `email`, `gender`, `department`, `age`, `date`, `descr`, `user_id`, `appointment`, `uniqueid`, `statusapp`, `time_slot`) VALUES
(68, 'zaptainblade', 'abhinav.anand.1999.ok@gmail.com', 'female', 'Physician', 10, '2020-05-16 11:59:25', 'wertyui', 9, '2020-05-26', '9', 'OK fixed', '10:54'),
(69, 'nasdfg', 'asdfgh@gmail.com', 'male', 'Physician', 26, '2020-05-16 11:59:50', 'swdefghjk,.', 9, '2020-05-20', '9', 'sorry no appointment', ''),
(73, 'zaptainblade', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Neuro', 100, '2020-05-16 15:12:11', 'asdftyuio', 9, '2020-05-26', '9', 'OK ', '18:30'),
(74, 'apples', 'asdfghjkl@yahoo.com', 'male', 'Digestive', 89, '2020-05-16 23:09:57', 'asdfghjkl;zxcvbnm,./', 13, '2020-05-30', '13', 'OK fixed', ''),
(75, 'trapped in the web', 'sdfghjkl@gmail.com', 'male', 'Digestive', 100, '2020-05-17 00:21:14', 'asdfghzxcvbnmdfgh', 14, '2020-05-31', '14', 'sorry no appointment', ''),
(76, 'xeaea-12', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Cardio', 45, '2020-05-17 00:22:11', 'asdfghjkxcvbnm', 14, '2020-05-26', '14', 'OK fixed', '13:45');

-- --------------------------------------------------------

--
-- Table structure for table `medhist`
--

CREATE TABLE `medhist` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` char(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` char(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post2`
--

CREATE TABLE `post2` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` char(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(8, 'asdf', '$2y$10$qI2dlcAFip8.18UpNQBhLOMvhvmA1yRf8AHDLAxm/jhlWJlBBUBrG', '2020-05-14 23:26:15'),
(9, 'zaptianblade', '$2y$10$OzmTx96cDncHw2dFgblFdu35.VmkLIySUnCkmEN0jFln/M5VyWtpS', '2020-05-14 23:29:51'),
(10, 'watsup', '$2y$10$MFolt0ccC9cotzzGW2BEU.hqyUCUPwihuXLgid/u46LQnoNhe7Oby', '2020-05-15 10:02:21'),
(12, 'alphaadmin', '$2y$10$bR5ce6fzRfanxmNHp8ur..2yLoOoMhnnw9A6Esrenk2qOZjOqyb3C', '2020-05-15 10:14:57'),
(13, 'apples', '$2y$10$.0cLYgPse1/p1iGRFTmrHOZQiwqj6sv6/WicD7t5ibSdG.8ybbxJ6', '2020-05-16 23:09:09'),
(14, 'trapped in the web', '$2y$10$dAoXYZt/269IwzzsxUTv/OprthrkC.3NYX5oaW4QYSyNkSd1L4bU.', '2020-05-17 00:19:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `dbmedi`
--
ALTER TABLE `dbmedi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitalq`
--
ALTER TABLE `hospitalq`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `medhist`
--
ALTER TABLE `medhist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post2`
--
ALTER TABLE `post2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dbmedi`
--
ALTER TABLE `dbmedi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitalq`
--
ALTER TABLE `hospitalq`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `medhist`
--
ALTER TABLE `medhist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post2`
--
ALTER TABLE `post2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
