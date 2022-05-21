-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2022 at 03:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfollowercategory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetail`
--

CREATE TABLE `admindetail` (
  `id` int(30) NOT NULL,
  `adminemail` varchar(30) NOT NULL,
  `adminpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindetail`
--

INSERT INTO `admindetail` (`id`, `adminemail`, `adminpassword`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `dbinfluencertable`
--

CREATE TABLE `dbinfluencertable` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `followers` int(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `platform` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `category` varchar(25) NOT NULL,
  `crdate` datetime NOT NULL DEFAULT current_timestamp(),
  `imgname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbinfluencertable`
--

INSERT INTO `dbinfluencertable` (`id`, `name`, `mobile_no`, `email`, `followers`, `gender`, `platform`, `about`, `image`, `category`, `crdate`, `imgname`) VALUES
(13, 'Saurabh Shukla', '8012345678', 'sshukla_manit@yahoo.com', 791000, 'male', 'Tiktok', 'Hi this is Saurabh Shukla and I am a teacher and I teach programming to students and I make programming related videos on youtube.', 'upload/saurabhshukla(mysirg).jpg', 'fiftythousandplus', '2022-03-19 17:16:50', ''),
(14, 'Kshitij Thorat', '8779595501', 'iamkshitijthorat@gmail.com', 9850, 'male', 'Youtube', 'Hi I am Kshitij Thorat and I am a youtuber who makes content on Ecommerce,Cryptocurrencies and I make and sell my own courses as well.', 'upload/kshitijthoratnew.jpg', 'fivetotenthousand', '2022-03-19 17:25:59', ''),
(15, 'Vivek Bindra', '9484398433', 'vivekbindra1982@gmail.com', 18700000, 'male', 'Youtube', 'Hi I am Dr. Vivek Bindra, CEO & Founder of Bada Business Pvt Ltd.I make videos on entreprenuership and business', 'upload/vivekbindra.jpg', 'fiftythousandplus', '2022-03-19 18:18:35', ''),
(16, 'Ujjwal Patni', '7488374838', 'training@ujjwalpatni.com', 4500, 'male', 'Youtube', 'Hi I am Ujjwal Patni.I make content on youtube for entreprenuers and businessman.Ujjwal is also founder of Businessjeeto.com', 'upload/ujjwalpatni.jpg', 'onetofivethousand', '2022-03-19 18:26:01', ''),
(17, 'Nick Arora', '7484343843', 'nick@ecomtornado.com', 4700, 'male', 'Youtube', 'Hi I am Nick Arora and I make content on youtube of Ecommerce and business.I also invest in crypto and NFTs.', 'upload/nickarora.jpg', 'onetofivethousand', '2022-03-19 18:38:51', ''),
(18, 'Anshika Gupta', '7878384384', 'anshikagpt97@gmail.com', 13000, 'female', 'Youtube', 'Hi I am Anshika Gupta working in Amazon as an SDE.I make videos for guiding students who wants to work in top tech companies.', 'upload/anshikagupta.jpg', 'tentotwentythousand', '2022-03-19 19:16:04', ''),
(19, 'Akshay Saini', '7938483343', 'akshaysaini.in@gmail.com', 35000, 'male', 'Youtube', 'Hi I am Akshay Saini and I am an youtuber who loves to learn and teach programming.I am working as an SDE in Uber.', 'upload/akshaysaini.jpg', 'twentytofiftythousand', '2022-03-19 19:24:56', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `userid` int(10) NOT NULL,
  `useremail` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `usergender` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`userid`, `useremail`, `password`, `username`, `usergender`) VALUES
(1, 'abc123@gmail.com', '123456', 'abc123', 'Female'),
(2, 'abcefg@gmail.com', '12345678', '12345678', 'Male'),
(3, 'bfjbf@gmail.com', '123456', 'smdknf', 'female'),
(4, 'abc1112@gmail.com', 'abc11121', 'abc1112', 'female'),
(5, 'abc1113@gmail.com', '123456', 'abc1113', 'female'),
(6, 'harshhingu@gmail.com', '123456', 'Harsh Hingu', 'male'),
(7, 'abc@gmail.com', '123456', 'abc', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetail`
--
ALTER TABLE `admindetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbinfluencertable`
--
ALTER TABLE `dbinfluencertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindetail`
--
ALTER TABLE `admindetail`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dbinfluencertable`
--
ALTER TABLE `dbinfluencertable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
