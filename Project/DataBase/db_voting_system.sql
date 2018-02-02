-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 09:17 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(15) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `c_id` int(15) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_department` varchar(255) NOT NULL,
  `p_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`c_id`, `c_name`, `c_department`, `p_id`) VALUES
(1, 'Purna Chandrasekhar', 'IT', 1),
(2, 'Jhon Doe', 'ECE', 2),
(3, 'Goku', 'IT', 1),
(4, 'Hussain', 'IT', 1),
(5, 'Arghya Jyoti', 'CE', 2),
(6, 'Narayan Sharma', 'IT', 3),
(7, 'Tharun Kumar', 'ECE', 4),
(8, 'Manish', 'CE', 1),
(9, 'Tanuja', 'CE', 1),
(10, 'Shreeja', 'CE', 2),
(11, 'Marcus', 'CIVIL', 2),
(12, 'Ashok', 'ECE', 2),
(13, 'Shiv Nath Yadav', 'IT', 3),
(15, 'Rohit', 'EE', 3),
(16, 'Akash', 'EE', 3),
(17, 'Shivam', 'IT', 4),
(18, 'Praveen', 'ECE', 4),
(19, 'Vimal', 'ECE', 4),
(20, 'Kamal', 'ECE', 4),
(21, 'Mahesh', 'IT', 5),
(23, 'Rakesh', 'EE', 5),
(25, 'Komali', 'ECE', 5),
(26, 'Soumya', 'CE', 6),
(27, 'Ramya', 'CE', 6),
(28, 'Tanya', 'IT', 6),
(29, 'Prakash', 'ECE', 6),
(31, 'Chandu', 'ECE', 7),
(32, 'Shruthi', 'EE', 7),
(33, 'Rajini', 'CIVIL', 7),
(34, 'Vijay', 'EE', 8),
(35, 'Gandhi', 'ECE', 8),
(36, 'Sumanth', 'CIVIL', 8),
(37, 'Gautham', 'CE', 8),
(38, 'Ram Gopal Varma', 'CIVIL', 9),
(39, 'Virat', 'CE', 9),
(40, 'Ram', 'ECE', 9);

-- --------------------------------------------------------

--
-- Table structure for table `flag`
--

CREATE TABLE `flag` (
  `user_id` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_id`, `p_name`) VALUES
(1, 'President'),
(2, 'Vice President'),
(3, 'Treasurer'),
(4, 'Public Relations Director'),
(5, 'general secretary'),
(6, 'joint secretary'),
(7, 'cultural secretary'),
(8, 'sports secretary'),
(9, 'editor');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(15) NOT NULL,
  `tokens` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `tokens`) VALUES
(1, 'jiuhnjmk'),
(3, 'hslfai14'),
(4, 'ncvksfss'),
(5, 'sfdgdsgg'),
(6, 'eyryrgda'),
(7, 'yuiuojmn'),
(8, 'srsrsfse'),
(9, 'ddtrybgh'),
(10, 'sdwewewr'),
(11, 'jyuyiyjg'),
(12, 'bhytgffd'),
(13, 'olikujyh'),
(14, 'ploiuyhh'),
(15, 'qawsedrf'),
(16, 'azsxdcfv'),
(17, 'qzwxecrv'),
(18, 'awsedrft'),
(19, 'gyhujiok'),
(20, 'plokijuh'),
(21, 'ygtfrdes'),
(22, 'mknjbhvg'),
(23, 'xdcfszax'),
(24, 'wdefrgth'),
(26, 'ytrghjuj'),
(29, 'lpkoijuh'),
(30, 'qawsdsdw'),
(31, 'cdfgbjgj'),
(32, 'yhgbfvdc'),
(33, 'zxsaqwsd'),
(34, 'mkiujhnb'),
(35, 'zaqwerty'),
(36, 'okiumnbv'),
(37, 'wenbedsq'),
(38, 'olpjuybv'),
(39, 'qawedtgu'),
(40, 'qawqacvb'),
(41, 'qawolikm'),
(42, 'poiuytrf'),
(43, 'mnbvcxza'),
(44, 'lokplokj'),
(45, 'cdeswxza'),
(46, 'mjnhbyui'),
(47, 'ploiuytb'),
(48, 'qawsedxz'),
(49, 'poimnbvc'),
(50, 'qawslpod'),
(51, 'qwertyyy'),
(52, 'nbvbvbvb'),
(53, 'iuiuuiui'),
(54, 'zaqazaqa'),
(55, 'xswsxsws'),
(56, 'lplplplp'),
(57, 'cgfdvfde'),
(58, 'ijuhygtb'),
(59, 'bbbbtrfh'),
(60, 'wwhgbwoo'),
(61, 'gwhgbwoo'),
(62, 'fwhgbwoo'),
(63, 'gwhgbwoo'),
(64, 'urwirwrr'),
(65, 'grwirwrr'),
(66, 'krwidwrr'),
(67, 'dwidswrr'),
(68, 'vrvirwrr'),
(69, 'yrwihgrr'),
(70, 'yrwdeerr'),
(71, 'yrwimkrr');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(15) NOT NULL,
  `Roll_no` varchar(25) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `department` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `phn_num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Roll_no`, `firstname`, `lastname`, `username`, `department`, `password`, `phn_num`) VALUES
(49, 'IT-14-44', 'Chandra', 'sekhar', 'chandfeeu', 'IT', '827ccb0eea8a706c4c34a16891f84e7b', '7981565936'),
(50, 'IT-14-42', 'Shivam', 'parke', 'Shivam', 'IT', '827ccb0eea8a706c4c34a16891f84e7b', '7981565874'),
(51, 'IT-14-55', 'Naveen', 'nani', 'Naveen', 'CIVIL', '827ccb0eea8a706c4c34a16891f84e7b', '7891565402');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `user_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`user_id`, `c_id`) VALUES
(49, 1),
(49, 6),
(49, 7),
(49, 10),
(49, 21),
(49, 28),
(49, 31),
(49, 34),
(49, 38),
(50, 1),
(50, 10),
(50, 13),
(50, 18),
(50, 23),
(50, 28),
(50, 33),
(50, 35),
(50, 38);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`c_id`,`c_name`,`c_department`,`p_id`),
  ADD KEY `candidate_ibfk_1` (`p_id`);

--
-- Indexes for table `flag`
--
ALTER TABLE `flag`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `Roll-no` (`Roll_no`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`user_id`,`c_id`),
  ADD KEY `votes_ibfk_2` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `c_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `post` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flag`
--
ALTER TABLE `flag`
  ADD CONSTRAINT `flag_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `candidate` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
