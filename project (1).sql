-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 12:34 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `cand_no` int(20) NOT NULL,
  `cand_details` varchar(255) DEFAULT NULL,
  `p_no` int(20) DEFAULT NULL,
  `con_no` int(20) DEFAULT NULL,
  `cand_eno` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cand_no`, `cand_details`, `p_no`, `con_no`, `cand_eno`) VALUES
(201, 'ex-cm', 101, 11, 1001),
(202, 'ex-IAS', 102, 15, 1002),
(203, 'ex-IPS', 101, 17, 1006),
(204, 'ex-cm', 103, 11, 1008),
(205, 'ex-dm', 101, 13, 1007),
(206, 'ex-cm', 102, 11, 1015),
(207, 'ex-IAS', 101, 15, 1010),
(208, 'ex-IPS', 103, 17, 1014),
(209, 'ex-cm', 101, 19, 1026),
(210, 'ex-Dm', 102, 13, 1023),
(211, 'ex-cm', 103, 13, 1011),
(212, 'ex-IPS', 102, 17, 1017),
(213, 'ex-IAS', 103, 15, 1021),
(214, 'ex-cm', 102, 19, 1022),
(215, 'ex-SDM', 103, 19, 1024);

-- --------------------------------------------------------

--
-- Table structure for table `constituency`
--

CREATE TABLE `constituency` (
  `con_no` int(50) NOT NULL,
  `con_name` varchar(255) DEFAULT NULL,
  `s_no` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constituency`
--

INSERT INTO `constituency` (`con_no`, `con_name`, `s_no`) VALUES
(11, 'Laxmi Nagar', 1),
(12, 'Mathura', 2),
(13, 'Mayur Vihar', 1),
(14, 'Agra', 2),
(15, 'Malviya Nagar', 1),
(16, 'Patna', 3),
(17, 'Hauz Khaas', 1),
(18, 'Gurdaspur', 4),
(19, 'Saket', 1),
(20, 'Amritsar', 4);

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `p_no` int(20) NOT NULL,
  `p_name` varchar(255) DEFAULT NULL,
  `p_symbol` varchar(255) DEFAULT NULL,
  `p_leader_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`p_no`, `p_name`, `p_symbol`, `p_leader_name`) VALUES
(101, 'Congress', 'hand', 'Indira Gandhi'),
(102, 'BJP', 'Lotus', 'Narendra Modi'),
(103, 'AAP', 'Broom', 'Arvind Kejriwal');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `e_no` int(20) NOT NULL,
  `addr` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`e_no`, `addr`) VALUES
(1005, 'Images/rishabh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `no_of_votes` int(20) DEFAULT NULL,
  `con_no` int(50) DEFAULT NULL,
  `can_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `s_no` int(10) NOT NULL,
  `s_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`s_no`, `s_name`) VALUES
(1, 'Delhi'),
(2, 'UP'),
(3, 'Bihar'),
(4, 'Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `voter_id`
--

CREATE TABLE `voter_id` (
  `e_no` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `con_no` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter_id`
--

INSERT INTO `voter_id` (`e_no`, `name`, `sex`, `dob`, `address`, `con_no`) VALUES
(1001, 'garvit', 'm', '1995-01-01', 'a1', 11),
(1002, 'shubhra', 'f', '1995-01-02', 'a2', 15),
(1003, 'apporva', 'f', '1995-01-03', 'a3', 13),
(1004, 'sanya', 'f', '1995-01-04', 'a4', 17),
(1005, 'rishab', 'm', '1995-01-05', 'a5', 19),
(1006, 'kamaljeet', 'm', '1995-01-06', 'a6', 18),
(1007, 'sanyam', 'm', '1995-01-07', 'a7', 11),
(1008, 'manobhav', 'm', '1995-01-08', 'a8', 17),
(1009, 'shubham', 'm', '1995-01-09', 'a9', 13),
(1010, 'sanjay', 'm', '1995-01-10', 'a10', 19),
(1011, 'vivek', 'm', '1995-01-11', 'a11', 15),
(1012, 'vaibhav', 'm', '1995-01-12', 'a12', 14),
(1013, 'gaurav', 'm', '1995-01-13', 'a13', 17),
(1014, 'arnaav', 'm', '1995-01-14', 'a14', 19),
(1015, 'amar', 'm', '1995-01-15', 'a15', 16),
(1016, 'aman', 'm', '1995-01-16', 'a16', 15),
(1017, 'sujnesh', 'm', '1995-01-17', 'a17', 17),
(1018, 'geetansh', 'm', '1995-01-18', 'a18', 13),
(1019, 'priyanshu', 'm', '1995-01-19', 'a19', 17),
(1020, 'aditya', 'm', '1995-01-20', 'a20', 19),
(1021, 'pranjal', 'm', '1995-01-21', 'a21', 13),
(1022, 'rastogi', 'm', '1995-01-22', 'a22', 11),
(1023, 'deepali', 'f', '1995-01-23', 'a23', 19),
(1024, 'mayank', 'm', '1995-01-24', 'a24', 17),
(1025, 'shubhi', 'f', '1995-01-25', 'a25', 12),
(1026, 'yogita', 'f', '1995-01-26', 'a26', 11),
(1027, 'megha', 'f', '1995-01-27', 'a27', 13),
(1028, 'nirupam', 'f', '1995-01-28', 'a28', 20),
(1029, 'harshit', 'm', '1995-01-29', 'a29', 11),
(1030, 'shivam', 'm', '1995-01-30', 'a30', 13),
(1031, 'animesh', 'm', '1995-01-31', 'a31', 15),
(1032, 'priyansh', 'm', '1995-02-01', 'a32', 17),
(1033, 'avruty', 'f', '1995-02-02', 'a33', 19),
(1034, 'somya', 'f', '1995-02-03', 'a34', 11),
(1035, 'ananya', 'f', '1995-02-04', 'a35', 13),
(1036, 'sonali', 'f', '1995-02-05', 'a36', 15),
(1037, 'siddant', 'm', '1995-02-06', 'a37', 17),
(1038, 'siddarth', 'm', '1995-02-07', 'a38', 19),
(1039, 'rahul', 'm', '1995-02-08', 'a39', 11),
(1040, 'arun', 'm', '1995-02-09', 'a40', 13),
(1041, 'gaurang', 'm', '1995-02-10', 'a41', 15),
(1042, 'vikash', 'm', '1995-02-11', 'a42', 17),
(1043, 'pankaj', 'm', '1995-02-12', 'a43', 19),
(1044, 'prashant', 'm', '1995-02-13', 'a44', 11),
(1045, 'ekansh', 'm', '1995-02-14', 'a45', 13),
(1046, 'udit', 'm', '1995-02-15', 'a46', 15),
(1047, 'shashank', 'm', '1995-02-16', 'a47', 17),
(1048, 'palak', 'f', '1995-02-17', 'a48', 19),
(1049, 'parv', 'm', '1995-02-18', 'a49', 11),
(1050, 'harsh', 'm', '1995-02-19', 'a50', 13),
(1051, 'pratigya', 'f', '1995-02-20', 'a51', 15),
(1052, 'utkarsh', 'm', '1995-02-21', 'a52', 17),
(1053, 'saumitra', 'm', '1995-02-22', 'a53', 19),
(1054, 'nidhi', 'f', '1995-02-23', 'a54', 11),
(1055, 'chanchur', 'm', '1995-02-24', 'a55', 13),
(1056, 'simar', 'm', '1995-02-25', 'a56', 15),
(1057, 'naman', 'm', '1995-02-26', 'a57', 17),
(1058, 'manish', 'm', '1995-02-27', 'a58', 19),
(1059, 'prasoon', 'm', '1995-02-28', 'a59', 11),
(1060, 'arjun', 'm', '0000-00-00', 'a60', 13);

-- --------------------------------------------------------

--
-- Table structure for table `voter_list`
--

CREATE TABLE `voter_list` (
  `e_no` int(20) NOT NULL,
  `otp` int(20) DEFAULT NULL,
  `status` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter_list`
--

INSERT INTO `voter_list` (`e_no`, `otp`, `status`) VALUES
(1005, 7870, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`cand_no`),
  ADD KEY `p_no` (`p_no`),
  ADD KEY `con_no` (`con_no`),
  ADD KEY `cand_eno` (`cand_eno`);

--
-- Indexes for table `constituency`
--
ALTER TABLE `constituency`
  ADD PRIMARY KEY (`con_no`),
  ADD KEY `s_no` (`s_no`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`p_no`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`e_no`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`can_no`),
  ADD KEY `con_no` (`con_no`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `voter_id`
--
ALTER TABLE `voter_id`
  ADD PRIMARY KEY (`e_no`),
  ADD KEY `con_no` (`con_no`);

--
-- Indexes for table `voter_list`
--
ALTER TABLE `voter_list`
  ADD PRIMARY KEY (`e_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_ibfk_1` FOREIGN KEY (`p_no`) REFERENCES `party` (`p_no`),
  ADD CONSTRAINT `candidate_ibfk_2` FOREIGN KEY (`con_no`) REFERENCES `constituency` (`con_no`),
  ADD CONSTRAINT `candidate_ibfk_3` FOREIGN KEY (`cand_eno`) REFERENCES `voter_id` (`e_no`);

--
-- Constraints for table `constituency`
--
ALTER TABLE `constituency`
  ADD CONSTRAINT `constituency_ibfk_1` FOREIGN KEY (`s_no`) REFERENCES `state` (`s_no`);

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`e_no`) REFERENCES `voter_id` (`e_no`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`con_no`) REFERENCES `constituency` (`con_no`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`can_no`) REFERENCES `candidate` (`cand_no`);

--
-- Constraints for table `voter_id`
--
ALTER TABLE `voter_id`
  ADD CONSTRAINT `voter_id_ibfk_1` FOREIGN KEY (`con_no`) REFERENCES `constituency` (`con_no`);

--
-- Constraints for table `voter_list`
--
ALTER TABLE `voter_list`
  ADD CONSTRAINT `voter_list_ibfk_1` FOREIGN KEY (`e_no`) REFERENCES `voter_id` (`e_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
