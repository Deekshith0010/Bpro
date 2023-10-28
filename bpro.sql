-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 09:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_email` varchar(100) NOT NULL,
  `ad_password` varchar(250) NOT NULL,
  `ad_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_email`, `ad_password`, `ad_date`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$K0/TRLOimdyX4WgfVboAauKM28mxwtCyRAXuqcfZeEIKfJT2uacQ2', '2023-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `gym_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `feed_status` varchar(30) NOT NULL,
  `feed_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE `gym` (
  `gym_id` int(11) NOT NULL,
  `gym_name` varchar(50) NOT NULL,
  `gym_phone` bigint(12) NOT NULL,
  `gym_email` varchar(60) NOT NULL,
  `gym_cert` varchar(350) NOT NULL,
  `gym_img` varchar(350) NOT NULL,
  `gym_about` varchar(1000) NOT NULL,
  `gym_address` varchar(255) NOT NULL,
  `gym_password` varchar(255) NOT NULL,
  `gym_status` varchar(30) DEFAULT NULL,
  `gym_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`gym_id`, `gym_name`, `gym_phone`, `gym_email`, `gym_cert`, `gym_img`, `gym_about`, `gym_address`, `gym_password`, `gym_status`, `gym_date`) VALUES
(1, 'Garodi Excel gym', 7411000685, 'garodiexcel@gmail.com', 'upload/gym1 certi.jpg', 'upload/gym1 img.jpg', 'garodi excel gym is one of the old school gym left in manglore where, bodybuilders are made..!', 'gardoi manglore', '$2y$10$kQZfrbVDBGc3v6tQdUOC1ug9J0GEvEJ6H3sgWSRXOFuhRONqWEWc6', 'accepted', '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `gymimage`
--

CREATE TABLE `gymimage` (
  `gimg_id` int(11) NOT NULL,
  `gym_id` int(11) NOT NULL,
  `gym_img` varchar(350) NOT NULL,
  `gimg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gymimage`
--

INSERT INTO `gymimage` (`gimg_id`, `gym_id`, `gym_img`, `gimg_date`) VALUES
(1, 1, 'upload/1688121205_gymimg1.jpg', '2023-06-30'),
(2, 1, 'upload/1688121212_gymimg2.jpg', '2023-06-30'),
(3, 1, 'upload/1688121218_gymimg3.jpg', '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `mem_id` int(11) NOT NULL,
  `gym_id` int(11) NOT NULL,
  `mem_title` varchar(50) NOT NULL,
  `mem_price` bigint(20) NOT NULL,
  `mem_duration` varchar(50) NOT NULL,
  `mem_descp` varchar(100) NOT NULL,
  `mem_status` varchar(30) DEFAULT NULL,
  `mem_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`mem_id`, `gym_id`, `mem_title`, `mem_price`, `mem_duration`, `mem_descp`, `mem_status`, `mem_date`) VALUES
(1, 1, 'Platinum', 25000, '1 year', 'Personal training,Free coffee,24/7 Access', NULL, '2023-06-30'),
(2, 1, 'Gold ', 12000, '6 months', '24/7 Access,free cofee', NULL, '2023-06-30'),
(3, 1, 'Sliver', 6000, '3 months', '24/7 Access', NULL, '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `mem_payment`
--

CREATE TABLE `mem_payment` (
  `mpay_id` int(11) NOT NULL,
  `gym_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `trans_id` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `mpay_status` varchar(40) NOT NULL,
  `mpay_date` date NOT NULL,
  `expiry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mem_payment`
--

INSERT INTO `mem_payment` (`mpay_id`, `gym_id`, `user_id`, `mem_id`, `trans_id`, `amount`, `mpay_status`, `mpay_date`, `expiry_date`) VALUES
(1, 1, 1, 1, '1111111111111111', 25000, '', '2023-06-30', '2024-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `tr_id` int(11) DEFAULT NULL,
  `gym_id` int(11) DEFAULT NULL,
  `post_img` varchar(350) NOT NULL,
  `post_about` varchar(2000) NOT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_status` varchar(30) DEFAULT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `tr_id`, `gym_id`, `post_img`, `post_about`, `post_title`, `post_status`, `post_date`) VALUES
(1, NULL, 1, 'upload/1688120533_post1.jpg', 'Open weight level bodybuliding compitation with 3 category', 'Master Vishwanath Classic ', NULL, '2023-06-30'),
(2, NULL, 1, 'upload/1688120739_post2.jpg', 'Late night party in Abbaka cruies with offerd food at 800/- per head respected who needs alcholic bevarge should carry by them selfes', 'Abbaka cruies night party 2023', NULL, '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(11) NOT NULL,
  `gym_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `req_status` varchar(30) NOT NULL,
  `req_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `gym_id`, `tr_id`, `req_status`, `req_date`) VALUES
(1, 1, 1, 'accepted', '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `sessions` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `tr_id`, `sessions`, `date`) VALUES
(1, 1, '12', '2023-06-30'),
(2, 1, '24', '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `session_book`
--

CREATE TABLE `session_book` (
  `urequest_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `sg_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `urequest_status` varchar(30) NOT NULL,
  `urequest_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session_book`
--

INSERT INTO `session_book` (`urequest_id`, `tr_id`, `sg_id`, `user_id`, `urequest_status`, `urequest_date`) VALUES
(1, 1, 1, 1, 'accepted', '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `session_gym`
--

CREATE TABLE `session_gym` (
  `sg_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `gym` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session_gym`
--

INSERT INTO `session_gym` (`sg_id`, `tr_id`, `session_id`, `price`, `gym`, `status`, `date`) VALUES
(1, 1, 1, 1000, 'Garodi Excel Multigym', '', '2023-06-30'),
(3, 1, 1, 1500, 'Dynamic Gym', '', '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `tr_id` int(11) NOT NULL,
  `tr_name` varchar(50) NOT NULL,
  `tr_phone` bigint(12) NOT NULL,
  `tr_email` varchar(50) NOT NULL,
  `tr_img` varchar(350) NOT NULL,
  `tr_cert` varchar(350) NOT NULL,
  `tr_occ` varchar(250) NOT NULL,
  `tr_know` varchar(250) NOT NULL,
  `tr_exp` varchar(50) NOT NULL,
  `tr_address` varchar(255) NOT NULL,
  `tr_about` varchar(1000) NOT NULL,
  `dob` date NOT NULL,
  `tr_weight` varchar(50) NOT NULL,
  `tr_height` varchar(50) NOT NULL,
  `tr_password` varchar(255) NOT NULL,
  `tr_status` varchar(30) DEFAULT NULL,
  `tr_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`tr_id`, `tr_name`, `tr_phone`, `tr_email`, `tr_img`, `tr_cert`, `tr_occ`, `tr_know`, `tr_exp`, `tr_address`, `tr_about`, `dob`, `tr_weight`, `tr_height`, `tr_password`, `tr_status`, `tr_date`) VALUES
(1, 'Alexa', 9019514967, 'vikyathsalian315@gmail.com', 'upload/trainer2.jpg', 'upload/trainer2.jpg', ' Personal trainer', 'phd in fitness science', '5', 'manglore', 'I am Alexa from manglore complete my PhD in fitness science and also 3x Mr India also 5 years experience as personal trainer', '2002-07-08', '70', '6', '$2y$10$DClbKrMaJECHt6oxfjVt5.UxvIdQAodMeUbnmYMbVRVNl21Qxd92y', 'accepted', '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `tr_payment`
--

CREATE TABLE `tr_payment` (
  `trpay_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `session` varchar(40) NOT NULL,
  `price` float NOT NULL,
  `trpay_status` varchar(30) NOT NULL,
  `trpay_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` bigint(12) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_img` varchar(350) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` varchar(30) DEFAULT NULL,
  `user_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_phone`, `user_address`, `user_img`, `user_email`, `user_password`, `user_status`, `user_date`) VALUES
(1, 'Deekshith', 9019514967, 'manglore', 'upload/1688118659_IMG_0232-01.jpeg', 'vikyathsalian315@gmail.com', '$2y$10$ke4HNIwb6Kn2uPA7.v1fU.ikCYTv/gqZfGPgEm6AXk5l1BgYFNdcu', NULL, '2023-06-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`gym_id`);

--
-- Indexes for table `gymimage`
--
ALTER TABLE `gymimage`
  ADD PRIMARY KEY (`gimg_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `mem_payment`
--
ALTER TABLE `mem_payment`
  ADD PRIMARY KEY (`mpay_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `session_book`
--
ALTER TABLE `session_book`
  ADD PRIMARY KEY (`urequest_id`);

--
-- Indexes for table `session_gym`
--
ALTER TABLE `session_gym`
  ADD PRIMARY KEY (`sg_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `tr_payment`
--
ALTER TABLE `tr_payment`
  ADD PRIMARY KEY (`trpay_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gym`
--
ALTER TABLE `gym`
  MODIFY `gym_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gymimage`
--
ALTER TABLE `gymimage`
  MODIFY `gimg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mem_payment`
--
ALTER TABLE `mem_payment`
  MODIFY `mpay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session_book`
--
ALTER TABLE `session_book`
  MODIFY `urequest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `session_gym`
--
ALTER TABLE `session_gym`
  MODIFY `sg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tr_payment`
--
ALTER TABLE `tr_payment`
  MODIFY `trpay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
