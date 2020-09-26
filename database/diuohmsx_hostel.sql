-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 04:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diuohmsx_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(2, 'admin', 'admin@ohms.com', 'admin', '2020-09-19 17:46:05', '2020-09-19'),
(3, 'shuvongkor', 'shuvongkor@ohms.com', 'shuvongkor', '2020-09-19 17:46:05', '2020-09-19'),
(4, 'juwel', 'juwel@ohms.com', 'juwel', '2020-09-19 17:46:05', '2020-09-19'),
(5, 'raihan', 'raihan@ohms.com', 'raihan', '2020-09-19 17:46:05', '2020-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_sn` varchar(255) NOT NULL,
  `course_fn` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(1, 'BSC12', 'BSC', 'Bachelor  of Science', '2016-04-11 19:33:23'),
(2, 'BTECH101', 'B.Tech', 'Bachelor  of Technology', '2016-04-11 19:33:23'),
(5, 'MCA565', 'MCA', 'Master of Computer Science', '2016-04-11 19:34:40'),
(6, 'MBA75', 'MBA', 'Master of Business Administration', '2016-04-11 19:34:59'),
(7, 'BE765', 'BE', 'Bachelor of Engineering', '2016-04-11 19:35:19'),
(8, 'MSC13', 'MSC', 'Master of Science', '2016-04-11 19:33:23'),
(9, 'BA202', 'BA', 'Bachelor of Arts', '2016-04-11 19:33:23'),
(10, 'DP101', 'Diploma', 'Diploma in Engineering', '2016-04-11 19:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `feespm` int(11) NOT NULL,
  `foodstatus` int(11) NOT NULL,
  `stayfrom` date NOT NULL,
  `duration` int(11) NOT NULL,
  `course` varchar(500) NOT NULL,
  `regno` int(11) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `middleName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `egycontactno` bigint(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContactno` bigint(11) NOT NULL,
  `corresAddress` varchar(500) NOT NULL,
  `corresCIty` varchar(500) NOT NULL,
  `corresState` varchar(500) NOT NULL,
  `corresPincode` int(11) NOT NULL,
  `pmntAddress` varchar(500) NOT NULL,
  `pmntCity` varchar(500) NOT NULL,
  `pmnatetState` varchar(500) NOT NULL,
  `pmntPincode` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `roomno`, `seater`, `feespm`, `foodstatus`, `stayfrom`, `duration`, `course`, `regno`, `firstName`, `middleName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `postingDate`, `updationDate`) VALUES
(10, 100, 1, 8000, 0, '2020-09-21', 1, 'Bachelor  of Science', 35, 'Juwel', '', 'Hassan', 'male', 1753333331, 'juwel@gmail.com', 1753333331, 'abc', 'ddd', 1753333331, 'asd', 'asd', 'Dhaka', 1234, 'asd', 'asd', 'Dhaka', 1234, '2020-09-20 09:48:47', ''),
(11, 201, 2, 6000, 1, '2020-10-01', 3, 'Bachelor  of Science', 1, 'User', '', 'Sample', 'male', 1919999999, 'user@gmail.com', 1764782374, 'User Guardian', 'Father', 1764782374, 'User Address, BD', 'Dhaka', 'Dhaka', 1216, 'User Address, BD', 'Dhaka', 'Dhaka', 1216, '2020-09-25 22:37:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `fees`, `posting_date`) VALUES
(1, 5, 100, 8000, '2020-09-11 22:45:43'),
(2, 2, 201, 6000, '2020-09-12 01:30:47'),
(3, 2, 200, 6000, '2020-09-12 01:30:58'),
(4, 3, 112, 4000, '2020-09-12 01:31:07'),
(5, 5, 132, 2000, '2020-09-12 01:31:15'),
(6, 1, 600, 8000, '2020-09-26 10:52:23'),
(7, 1, 601, 8000, '2020-09-26 10:57:31'),
(8, 1, 603, 8000, '2020-09-26 10:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Dhaka'),
(2, 'Rangpur'),
(3, 'Barishal'),
(4, 'Rajshahi'),
(5, 'Comilla'),
(6, 'Chittagong'),
(7, 'Khulna'),
(8, 'Mymensingh'),
(9, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(1, 10, 'test@gmail.com', '', '', '', '2020-09-22 06:16:42'),
(11, 21, 'juwel@gmail.com', 0x3a3a31, '', '', '2020-09-20 09:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(10, '108061211', 'code', 'test', 'projects', 'male', '8467067344', 'test@gmail.com', 'Test@123', '2020-06-22 04:21:33', '22-09-2020 02:17:02', '22-06-2016 05:16:49'),
(21, '35', 'Juwel', '', 'Hassan', 'male', '01753333330', 'juwel@gmail.com', '123456', '2020-09-20 09:43:42', '20-09-2020 03:15:03', ''),
(22, '32', 'Raihan', 'Sajib', 'Kabir', 'male', '01456454780', 'raihan@gmail.com', '123456', '2020-09-21 19:21:38', '22-09-2020 01:23:09', ''),
(30, '103935', 'Sabbir', '', 'Mostofa', 'male', '01734444564', 'sabbirmost@gmail.com', 'sabbirmost@gmail.com', '2020-09-25 00:01:53', '', ''),
(31, '38', 'Shuvongkor', '', 'Barman', 'male', '01764782374', 'shuvongkor@gmail.com', 'shuvongkor', '2020-09-25 11:28:39', '', ''),
(32, '01', 'User', '', 'Sample', 'female', '01919999999', 'user@gmail.com', 'user', '2020-09-25 11:32:13', '26-09-2020 04:33:55', ''),
(33, '103936', 'Sabbir', 'Sabbir', 'Mostofa', 'male', '01734444564', 'sabbirmostafa@gmail.com', '12345', '2020-09-26 10:33:03', '26-09-2020 04:09:48', '26-09-2020 04:06:25'),
(34, '103900', 'Raihan', 'Ka', 'Sajib', 'male', '01734444564', 'rai@gmail.com', '103900', '2020-09-26 10:44:22', '26-09-2020 05:12:53', ''),
(36, '650', 'abc', '', 'Barman', 'male', '01734444565', 'test123@gmail.com', '1111', '2020-09-26 14:29:15', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
