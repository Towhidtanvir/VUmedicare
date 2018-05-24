-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 11:32 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vumedicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE `available` (
  `id` int(40) NOT NULL,
  `value` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available`
--

INSERT INTO `available` (`id`, `value`) VALUES
(1, 'not avaiable');

-- --------------------------------------------------------

--
-- Table structure for table `bloodtype`
--

CREATE TABLE `bloodtype` (
  `id` int(11) NOT NULL,
  `bloodGroup` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodtype`
--

INSERT INTO `bloodtype` (`id`, `bloodGroup`) VALUES
(1, 'A POSITIVE'),
(3, 'A NEGATIVE'),
(5, 'B POSITIVE'),
(7, 'B NEGATIVE'),
(9, 'AB POSITIVE'),
(11, 'AB NEGATIVE'),
(13, 'O POSITIVE'),
(16, 'O NEGATIVE');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `studentId` int(11) NOT NULL,
  `department` varchar(40) NOT NULL,
  `bloodGroup` varchar(40) NOT NULL,
  `cell` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `email`, `studentId`, `department`, `bloodGroup`, `cell`, `password`, `address`, `image`, `status`) VALUES
(4, 'Md waliullah', 'eee@gmail.com', 142311019, 'EEE', 'B POSITIVE', 1558343434, 'a', 'Tikapara', 'rsz_job.jpg', 'not available'),
(6, 'Md. shabbir', 'towhid@gmail.com', 142311011, 'BBA', 'O NEGATIVE', 1558925323, 'a', 'Miapara', 'rsz_final.jpg', 'available'),
(21, 'Md Shofiq', 'eee@gmail.com', 142311019, 'CSE', 'A POSITIVE', 1558343444, 'a', 'Tikapara', 'rsz_job.jpg', 'not available'),
(22, 'Md. shisir', 'towhid@gmail.com', 142311011, 'BBA', 'A NEGATIVE', 1558926655, 'a', 'Miapara', 'rsz_final.jpg', 'available'),
(23, 'Md Mizan', 'eee@gmail.com', 142311019, 'EEE', 'O POSITIVE', 1558343431, 'a', 'Tikapara', 'rsz_job.jpg', 'not available'),
(24, 'Md. Mahtab', 'towhid@gmail.com', 142311011, 'BBA', 'B NEGATIVE', 1558925320, 'a', 'Miapara', 'rsz_final.jpg', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `sender`, `receiver`) VALUES
(10, 'tow@gmail.com', 'k@gmail.com'),
(11, 'tow@gmail.com', 'k@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shouts`
--

CREATE TABLE `shouts` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shouts`
--

INSERT INTO `shouts` (`id`, `user`, `message`, `time`) VALUES
(52, 'towhid', 'kkk', '10:48:37'),
(53, 'towhid', 'sds', '10:48:46'),
(54, 'towhid', 'hello', '10:56:13'),
(55, 'towhid', 'dasdd', '10:58:18'),
(56, 'towhid', 'need urjent blood', '11:01:32'),
(59, 'shabbir ahmed', 'urgent nedded A+ blood ', '03:18:38'),
(60, 'Md. Towhidul Islam', 'hello i need B+ blood urgently', '11:13:46'),
(61, 'Md. Towhidul Islam', 'gfgf', '12:37:07'),
(62, 'Md. Towhidul Islam', 'i need blood', '03:49:03'),
(63, 'Md. Towhidul Islam', 'hello i neeed blood', '04:14:52'),
(64, 'Md. Towhidul Islam', 'text', '11:19:01'),
(65, 'Md. Towhidul Islam', 'd', '11:19:18'),
(66, 'towhid islam', 'hey', '02:17:58'),
(67, 'towhid islam', 'hey', '11:26:06'),
(68, 'towhid islam', 'hfgh', '12:57:18'),
(69, 'Md. Samsul', 'urgent blood needed', '01:13:59'),
(70, 'fas', 'i need o+', '08:58:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodtype`
--
ALTER TABLE `bloodtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shouts`
--
ALTER TABLE `shouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodtype`
--
ALTER TABLE `bloodtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shouts`
--
ALTER TABLE `shouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
