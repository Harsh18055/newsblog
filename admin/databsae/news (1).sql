-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 05:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `allpost`
--

CREATE TABLE `allpost` (
  `allpost_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `allpost_title` varchar(5000) NOT NULL,
  `allpost_destruction` varchar(5000) NOT NULL,
  `allpost_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allpost`
--

INSERT INTO `allpost` (`allpost_id`, `cat_id`, `allpost_title`, `allpost_destruction`, `allpost_image`) VALUES
(14, 4, ' Harsh Sakariya', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'uploads/time_management_hero-1.png'),
(15, 1, ' HaHa', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'uploads/time_management_hero-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Politics'),
(2, 'Entertainment'),
(3, 'Sports '),
(4, 'Business'),
(5, 'Viraj');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`) VALUES
(2, 'uploads/website-12-06-2019-01.jpg'),
(5, 'uploads/website-12-06-2019-01.jpg'),
(6, 'uploads/website-12-06-2019-01.jpg'),
(7, 'uploads/website-12-06-2019-01.jpg'),
(8, 'uploads/website-12-06-2019-01.jpg'),
(9, 'uploads/website-12-06-2019-01.jpg'),
(10, 'uploads/website-12-06-2019-01.jpg'),
(11, 'uploads/website-12-06-2019-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latestnew`
--

CREATE TABLE `latestnew` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `author_news` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `destruction` varchar(5000) NOT NULL,
  `images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latestnew`
--

INSERT INTO `latestnew` (`id`, `cat_id`, `author_name`, `author_news`, `date`, `destruction`, `images`) VALUES
(183, 4, 'Harsh Sakariya', 'Business', ' 14-03-202', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'uploads/website-12-06-2019-01.jpg'),
(185, 3, 'Harsh Sakariya', 'Harsh', ' 20-03-202', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'uploads/website-12-06-2019-01.jpg'),
(187, 0, 'Harsh Sakariya', 'Business', ' Business ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.	', 'uploads/website-12-06-2019-01.jpg'),
(188, 1, 'Harsh Sakariya', 'Business ', ' Business ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'uploads/website-12-06-2019-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trendingpost`
--

CREATE TABLE `trendingpost` (
  `trending_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `trending_title` varchar(100) NOT NULL,
  `trending_destruction` varchar(5000) NOT NULL,
  `trending_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trendingpost`
--

INSERT INTO `trendingpost` (`trending_id`, `cat_id`, `trending_title`, `trending_destruction`, `trending_image`) VALUES
(27, 1, 'Harsh Sakariya', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'uploads/website-12-06-2019-01.jpg'),
(29, 0, 'Hrash', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'uploads/Time-Management-Training.jpg'),
(37, 1, 'Sakariya Harsh', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'uploads/website-12-06-2019-01.jpg'),
(38, 3, 'Dharmik', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'uploads/website-12-06-2019-01.jpg'),
(39, 4, 'Rushi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'uploads/website-12-06-2019-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(8, 'Viraj', 'viraj@gmail.com', '12345'),
(9, 'om', 'om@gmail.com', '123'),
(10, 'Harsh Sakariya', 'harsh@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allpost`
--
ALTER TABLE `allpost`
  ADD PRIMARY KEY (`allpost_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latestnew`
--
ALTER TABLE `latestnew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trendingpost`
--
ALTER TABLE `trendingpost`
  ADD PRIMARY KEY (`trending_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allpost`
--
ALTER TABLE `allpost`
  MODIFY `allpost_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `latestnew`
--
ALTER TABLE `latestnew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `trendingpost`
--
ALTER TABLE `trendingpost`
  MODIFY `trending_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
