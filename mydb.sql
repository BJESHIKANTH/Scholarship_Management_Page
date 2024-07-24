-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2023 at 03:48 AM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin.php`
--

CREATE TABLE `admin.php` (
  `id` varchar(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`username`, `password`) VALUES
('admin', 'admin2045');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`name`, `email`, `message`) VALUES
('Lahiri Sai', 'o190357@rguktong.ac.in', 'poiuytres'),
('Lahiri Sai', 'O190357@rguktong.ac.in', ''),
('Lahiri Sai', 'O190357@rguktong.ac.in', ''),
('Lahiri Sai', 'O190357@rguktong.ac.in', ''),
('Lahiri Sai', 'O190357@rguktong.ac.in', ''),
('Lahiri Sai', 'O190357@rguktong.ac.in', ''),
('Lahiri Sai', 'O190357@rguktong.ac.in', ''),
('Lahiri Sai', 'O190357@rguktong.ac.in', ''),
('Lahiri Sai', 'O190357@rguktong.ac.in', ''),
('Lahiri Sai', 'O190357@rguktong.ac.in', ''),
('Lahiri Sai', 'O190357@rguktong.ac.in', '');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'sai', 123, 'sai@gmail.com', '1234'),
(2, 'lahsai', 123, 'lahsai@gmail.com', '981'),
(3, 'sweety', 20092, 'sailah@gmail.com', '9087'),
(4, 'sai', 9817, 'hello@gmail.com', '1234'),
(5, 'lahiri', 1278, 'hari@gmail.com', '123'),
(6, 'Lahiri', 1278, 'lah@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `ex`
--

CREATE TABLE `ex` (
  `name` varchar(50) NOT NULL,
  `id` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ex`
--

INSERT INTO `ex` (`name`, `id`, `message`) VALUES
('', '', ''),
('Lahiri Sai', 'O190357', 'cgvjxhbkjlk'),
('Lahiri Sai', 'O190357', 'hfcghjkl'),
('Lahiri Sai', 'O190357', 'hfcghjkl'),
('Lahiri Sai', 'O190357', 'czdfhgjil;o');

-- --------------------------------------------------------

--
-- Table structure for table `examinor`
--

CREATE TABLE `examinor` (
  `Email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examinor`
--

INSERT INTO `examinor` (`Email`, `password`) VALUES
('Examinor', 'exam123');

-- --------------------------------------------------------

--
-- Table structure for table `od`
--

CREATE TABLE `od` (
  `full_name` varchar(50) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year_of_graduation` varchar(20) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `certificate` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `od`
--

INSERT INTO `od` (`full_name`, `student_id`, `department`, `year_of_graduation`, `reason`, `file`, `certificate`, `Email`) VALUES
('lahiri sai', 'O190357', 'cse', '2025', 'cxvjhwk gxhqjklx;qn', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190988', 'cse', '2025', 'fghjn  sdrtyuiokjb', 'IMG-20220905-WA0005.jpg', 'Original Degree', 'o190357@rguktong.ac.in'),
('lahiri sai', 'O190988', 'cse', '2025', 'fghjn  sdrtyuiokjb', 'IMG-20220905-WA0005.jpg', 'Original Degree', 'o190357@rguktong.ac.in'),
('lahiri sai', 'O190988', 'cse', '2025', 'fghjn  sdrtyuiokjb', 'IMG-20220905-WA0005.jpg', 'Original Degree', 'o190357@rguktong.ac.in'),
('lahiri sai', 'O190988', 'cse', '2025', 'bklj;k;dlb n', 'IMG-20220905-WA0005.jpg', 'Original Degree', 'o190357@rguktong.ac.in'),
('lahiri sai', 'O190357', 'cse', '2019', 'kgdssfgtuyiop', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'cse', '2019', 'kgdssfgtuyiop', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'cse', '2019', 'kgdssfgtuyiop', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'cse', '7901', 'zcxgfhjuoi', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'cxghgjk', '123', 'jgdgfhjkl;', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('chgjhklk', 'O190357', 'dgfhjyukil', 'cmxbk', 'nbm,jsx', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('chgjhklk', 'O190357', 'dgfhjyukil', 'cmxbk', 'nbm,jsx', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
(',kbv', 'O190357', 'cse', '2025', 'kjhgfcx', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
(',kbv', 'O190357', 'cse', '2025', 'kjhgfcx', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
(',kbv', 'O190357', 'cse', '2025', 'kjhgfcx', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('kuytds', 'O190357', 'oiuyg', 'opiuyg', ';oiuygfdc', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'xgfhj', '123', 'iuytgfdg,', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190988', 'kjh', 'fg', 'hg', 'IMG-20220905-WA0005.jpg', 'Original Degree', 'o190357@rguktong.ac.in'),
('lahiri sai', 'O190357', 'jhg', 'jhg', ';ljgh', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'u', 'g', 'g', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'l', '1', 'hkjk', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'cse', '2025', 'kjhgfdszdcnmj,.k', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'cse', '2025', 'fdgfhuiol;', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'cse', '2025', 'kjhtgdfs', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'cse', '2025', 'htgrfds', '1702173530.jpg', 'Province Certificate', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'cse', '2025', '.,mjnhbv', '1702173530.jpg', 'Province Certificate', 'sailahiri61@gmail.com'),
('latha', 'O190098', 'cse', '2025', 'Because I have Call Letter From WIpro Company', 'IMG-20220905-WA0005.jpg', 'Province Certificate', 'o190374@rguktong.ac.in'),
('latha', 'O190098', 'CSE', '2025', 'kiujyhtgfds', 'IMG-20220905-WA0005.jpg', 'Backlogs Certificate', 'o190374@rguktong.ac.in'),
('lahiri sai', 'O190098', 'CSE', '2025', 'kjhgf', 'IMG-20220905-WA0005.jpg', 'Backlogs Certificate', 'o190374@rguktong.ac.in'),
('lahiri sai', 'O190098', 'CSE', '2025', '.kjhgv', 'IMG-20220905-WA0005.jpg', 'Original Degree', 'o190374@rguktong.ac.in'),
('latha', 'O190098', 'CSE', '2025', 'oikujyhgf', 'IMG-20220905-WA0005.jpg', 'Marks Certificate', 'o190374@rguktong.ac.in'),
('siri', 'O190307', 'CSE', '2025', 'Because', 'IMG-20220905-WA0005.jpg', 'Marks Certificate', 'o190340@rguktong.ac.in'),
('abc', 'O190980', 'CSE', '2019', 'dgfhgjhkjl', 'IMG-20220905-WA0005.jpg', 'Backlogs Certificate', 'o190390@rguktong.ac.in'),
('lahiri sai', 'O190357', 'CSE', '2025', 'Because I have A offer Letter From Infosis', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri sai', 'O190357', 'CSE', '2025', 'sadfrtyuigfhjkl', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com'),
('lahiri', 'O190357', 'CSE', '2025', 'Because I have A offer letter from wipro', '1702173530.jpg', 'Original Degree', 'sailahiri61@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reg1`
--

CREATE TABLE `reg1` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `MotherName` varchar(50) NOT NULL,
  `FatherName` varchar(50) NOT NULL,
  `StudentMobile` varchar(10) NOT NULL,
  `ParentMobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg1`
--

INSERT INTO `reg1` (`username`, `password`, `Role`, `profile`, `Name`, `dob`, `Religion`, `year`, `Branch`, `class`, `MotherName`, `FatherName`, `StudentMobile`, `ParentMobile`) VALUES
('O190357@rguktong.ac.in', 'sai*1234', 'student', 'so.jpeg', 'Lahiri Sai', '2004-07-10', 'HINDHU', 'E3', 'CSE', 'CSE-2', 'K.Geetha', 'K.Nagaraju', '9652923854', '9010990292'),
('', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('O190002@rguktong.ac.in', '67890', '', '', '', '', '', '', '', '', '', '', '', ''),
('O190003@rguktong.ac.in', 'sai*1290', '', '', '', '', '', '', '', '', '', '', '', ''),
('kkk@gmail.com', '9019', '', '', '', '', '', '', '', '', '', '', '', ''),
('Examinor', 'exam123', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg2`
--

CREATE TABLE `reg2` (
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `profile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg2`
--

INSERT INTO `reg2` (`username`, `password`, `profile`) VALUES
('sailah@gmail.com', '2045', ''),
('sailahiri@gmail.com', '1290', ''),
('baba@gmail.com', '1890', '');

-- --------------------------------------------------------

--
-- Table structure for table `Report`
--

CREATE TABLE `Report` (
  `sid` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Report`
--

INSERT INTO `Report` (`sid`, `email`, `description`) VALUES
('202317138246', 'so@rguktong.ac.in', 'Problem Statement...'),
('O190357', 'so@rguktong.ac.in', 'dghjkl;'),
('202317138246', 'so@rguktong.ac.in', 'Problem Statement.................'),
('202317138246', 'so@rguktong.ac.in', 'problem statement......'),
('O190357', 'so@rguktong.ac.in', 'problem.......'),
('202317138246', 'so@rguktong.ac.in', 'poiuhgfdxzxcvbnm,.');

-- --------------------------------------------------------

--
-- Table structure for table `sai`
--

CREATE TABLE `sai` (
  `ScholorshipID` varchar(20) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CourseYear` varchar(10) NOT NULL,
  `JvdVasathi` varchar(10) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `TransactionId` varchar(30) NOT NULL,
  `profile_picture` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `cast` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sai`
--

INSERT INTO `sai` (`ScholorshipID`, `ID`, `Name`, `email`, `CourseYear`, `JvdVasathi`, `Amount`, `TransactionId`, `profile_picture`, `status`, `cast`) VALUES
('202310178247', 'O190309', 'Latha', 'o190002@rguktong.ac.in', 'E3&CSE', 'jvd1', '55000', 'sbi0', 'IMG-20220905-WA0005.jpg', 1, 'SC'),
('202317138246', 'O190357', 'Lahiri Sai', 'o190357@rguktong.1c.in', 'CSE&E3', 'jvd1', '11500', 'sbi1', 'IMG-20220905-WA0005.jpg', 1, 'BC-A'),
('202310178246', 'O190357', 'lahiri sai', 'o190357@rguktong.ac.in', 'CSE &E3', 'jvd2', '12500', 'sbi2', 'IMG-20220905-WA0005.jpg', 1, 'BC-A'),
('202310178246', 'O190357', 'Lahiri Sai', 'o190357@rguktong.ac.in', 'CSE &E3', 'jvd3', '12500', 'sbi3', 'IMG-20220905-WA0005.jpg', 1, 'BC-A'),
('202310178246', 'O190357', 'Lahiri Sai', 'O190357@rguktong.ac.in', 'CSE &E3', 'jvd5', '12500', 'sbi34', 'IMG-20220905-WA0005.jpg', 2, 'BC-A'),
('202310178246', 'O190357', 'Lahiri Sai', 'o190357@rguktong.ac.in', 'CSE &E3', 'jvd4', '12500', 'sbi4', 'IMG-20220905-WA0005.jpg', 2, 'BC-A'),
('202310178246', 'O190357', 'Lahiri Sai', 'o190002@rguktong.ac.in', 'E3&CSE', 'jvd2', '12500', 'sbi6', 'IMG-20220905-WA0005.jpg', 0, 'SC');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `status`) VALUES
(1, 'sai', 1),
(5, 'Lahiri Sai', 1),
(6, 'harikasri', 1),
(7, 'geetha', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sai`
--
ALTER TABLE `sai`
  ADD PRIMARY KEY (`TransactionId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
