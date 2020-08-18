-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 07:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `id` int(11) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cell` int(11) NOT NULL,
  `Gender` text NOT NULL,
  `City` varchar(11) NOT NULL,
  `picSrc` varchar(30) NOT NULL DEFAULT '1.png',
  `quiz1` int(11) NOT NULL DEFAULT '0',
  `quiz2` int(11) NOT NULL DEFAULT '0',
  `Assignment` int(11) NOT NULL DEFAULT '0',
  `midTerm` int(11) NOT NULL DEFAULT '0',
  `finalTerm` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`id`, `regno`, `password`, `fname`, `lname`, `semester`, `email`, `cell`, `Gender`, `City`, `picSrc`, `quiz1`, `quiz2`, `Assignment`, `midTerm`, `finalTerm`) VALUES
(4, 'l1f17bscs0486', '123456', 'Bilal', 'Ahmad', 5, 'bilalahmad1@ucp.edu.', 135652, 'm', 'Lahore', '1.png', 5, 0, 0, 5, 0),
(5, 'l1f17bscs0500', '123456', 'Awais', 'Bara', 5, 'awais@ucp.edu.pk', 9845631, 'M', 'Lahore', '1.png', 0, 0, 0, 0, 0),
(6, 'l1f17bscs0500', '123456', 'Awais', 'Bara', 3, 'awais@ucp.edu.pk', 98864531, 'M', 'Lahore', '1.png', 0, 0, 0, 0, 0),
(7, 'l1f17bscs0490', '12345', 'Faheem', 'Alam', 4, 'faheem@ucp.edu.pk', 35493198, 'm', 'Lahore', '1.png', 0, 0, 0, 0, 0),
(8, 'l1f17bscs0278', 'skldkdldk', 'Mohsin', 'Sarwar', 5, 'mohisn@ucp.edu.pk', 2455548, 'm', 'Lahore', '1.png', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE `teach` (
  `id` int(11) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `graduation` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `picSrc` varchar(20) NOT NULL DEFAULT '1.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach`
--

INSERT INTO `teach` (`id`, `regno`, `password`, `fname`, `lname`, `graduation`, `email`, `cell`, `Gender`, `City`, `picSrc`) VALUES
(1, 't1f17bscs0', '12345', 'sarfraz', 'raza', 'MSCS', 'sarfraz@ucp.edu.pk', '8965323', 'm', 'Lahore', '1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teach`
--
ALTER TABLE `teach`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud`
--
ALTER TABLE `stud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teach`
--
ALTER TABLE `teach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
