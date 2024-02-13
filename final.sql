-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 03:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qid` int(11) NOT NULL,
  `qname` varchar(500) NOT NULL,
  `op1` varchar(300) NOT NULL,
  `op2` varchar(300) NOT NULL,
  `op3` varchar(300) NOT NULL,
  `op4` varchar(300) NOT NULL,
  `ans` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `qname`, `op1`, `op2`, `op3`, `op4`, `ans`) VALUES
(27, 'What is full form of PHP ?', 'Peripheral Hypertext', 'Hypertext  Peripheral', 'Peripheral Hyphen', 'Hypertext Preprocessor', 'Hypertext Preprocessor'),
(28, 'What is full form of html?', 'Hyper Text Markup Language', 'Hello Text Mark Language', 'Hyper Text Making Language', 'Hyper Task Markup Language', 'Hyper Text Markup Language'),
(29, 'IS Cookie used to store information?', 'yes', 'no ', 'none of above', 'both a and b', 'yes'),
(30, 'What is function to execute query?', 'mysqli_execute();', 'mysqli_func();', 'mysqli_query();', 'mysqli_run();', 'mysqli_query();'),
(31, 'How to close database connection?', 'mysqli_exit();', 'mysqli_close();', 'mysqli_open();', 'mysqli_enter();', 'mysqli_close()'),
(32, '1+1=?', '2', '4', '5', '6', '2'),
(33, '2+2', '3', '4', '5', '7', '4'),
(34, '6-2', '7', '4', '2', '1', '4'),
(35, '1-0', '1', '7', '8', '9', '1');

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `ID` int(5) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`ID`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'Smith', 'Jones', 'smith@gmail.com', 'Smith', 'smith1234'),
(2, 'Yuvi', 'roy', 'yuvi@gmail.com', 'yuvi', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `student_id` int(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`student_id`, `first_name`, `last_name`, `email`, `username`, `password`) VALUES
(1, 'ram', 'joshi', 'rauttanvi2@gmail.com', 'ram', 'ram123'),
(2, 'Tushar', 'Mehta', 'tushu@123', 'tushar', '45678'),
(3, 'Tanvi', 'Raut', 'tanvi', 'tanvi', '123456'),
(4, 'Jagruti', 'Kaulkar', 'jagu@gmail.com', 'jagu123', '12345'),
(5, 'William', 'David', 'william@gmail.com', 'William', 'william1234'),
(6, 'Palak', 'Narete', 'palak@gmail.com', 'palak', '12345'),
(7, 'yms', 'cn', 'sjh', 'dchj', 'jhcj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `student_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
