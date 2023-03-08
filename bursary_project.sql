-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 09:44 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bursary_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_details`
--

CREATE TABLE `academic_details` (
  `id` int(11) NOT NULL,
  `institution_name` varchar(255) NOT NULL,
  `institution_postal` varchar(255) NOT NULL,
  `institution_tel` int(255) NOT NULL,
  `admission_no` varchar(255) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `perfomance_status` varchar(255) NOT NULL,
  `annual_fees` double NOT NULL,
  `current_term_fees` double NOT NULL,
  `next_term_fees` int(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_tel` int(255) NOT NULL,
  `mother_tel` int(255) NOT NULL,
  `gurdian_name` varchar(255) NOT NULL,
  `gurdian_tel` int(255) NOT NULL,
  `death_certificate` enum('yes','no','','') NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_details`
--

INSERT INTO `academic_details` (`id`, `institution_name`, `institution_postal`, `institution_tel`, `admission_no`, `faculty_name`, `course_name`, `perfomance_status`, `annual_fees`, `current_term_fees`, `next_term_fees`, `father_name`, `father_tel`, `mother_tel`, `gurdian_name`, `gurdian_tel`, `death_certificate`, `time_stamp`) VALUES
(1, 'Murang\'a University', '2022-02-25', 99999, 'kkkkk', 'jki', 'kkkk', 'Very good', 777777, 5558, 5557, '', 0, 0, '', 0, '', '0000-00-00 00:00:00'),
(2, 'Murang\'a University', '2022-02-24', 99999, 'be232/0777/2018', 'IT', 'BBIT', 'Very good', 2390, 1230, 1320, 'peter', 99999, 0, '99999', 0, '', '0000-00-00 00:00:00'),
(3, 'Murang\'a University', '2022-02-24', 99999, 'be232/0777/2018', 'IT', 'BBIT', 'Very good', 2390, 1230, 1320, 'peter', 99999, 0, '99999', 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `id_number` int(255) NOT NULL,
  `sex` enum('male','female','other','') NOT NULL,
  `ethnicity` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(255) NOT NULL,
  `disability` enum('yes','no','','') NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `full_name`, `date_of_birth`, `id_number`, `sex`, `ethnicity`, `county`, `division`, `ward`, `email`, `tel`, `disability`, `time_stamp`) VALUES
(1, 'Joy Wambui Waweru', '2022-03-04', 36912045, 'female', 'kikuyu', 'laikipia', 'Nyahururu', 'Igwamiti', 'samuelnderitu495@gmail.com', 741515192, 'no', '2022-02-01 21:04:40'),
(2, 'Joy Wambui Waweru', '2022-02-17', 3333333, 'female', 'kikuyu', 'laikipia', 'Nyahururu', 'limuru', 'samuel@gmail.com', 741515192, 'no', '2022-02-01 23:21:00'),
(3, 'Joy Wambui Waweru', '2022-02-17', 3333333, 'female', 'kikuyu', 'laikipia', 'Nyahururu', 'limuru', 'samuel@gmail.com', 741515192, 'no', '2022-02-01 23:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name-files` varchar(255) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` enum('male','female','other','') NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `name`, `sex`, `email`, `password`, `type`, `time_stamp`) VALUES
(1, 'sami waweru', 'male', 'samuelnderitu495@gmail.com', '$2y$10$w/gNleOC7xgnFczSq/ocNe6NfQIaLyeHOGiUJq1QiLHy/i1R1dhdq', 1, '2022-02-01 21:03:10'),
(2, 'Joy Wambui', 'female', 'samuel@gmail.com', '$2y$10$l.kWneuslcWs1b1dhnPqQ.9DfGexpe5XuCzTF7AQ1YnN73yLxddGa', 0, '2022-02-01 23:18:50'),
(3, 'tabby', 'female', 'tab@gmail.com', '$2y$10$qemE3MnCjk7GOadtkuCmeOhV8.uPSpu7ORYEeJMEZ/z7gdKVLY3VO', 0, '2022-03-21 10:00:27'),
(4, 'sami waweru', 'female', 'samuelnderitu495@gmail.com', '$2y$10$0Wi56wFJ/hg6rhfqv244HOAHfd8t5.QRtna4ydUQzJqh1cVpKiGRi', 0, '2022-05-11 05:55:30'),
(5, 'sami waweru', 'male', 'magundaturnitin1@gmail.com', '$2y$10$Xv5W0Ttz2GIeg2jH/PqfDeNeCRXtJdInteZNq3VcNX/RYZO16yYPi', 0, '2022-05-11 05:59:30'),
(6, 'sami waweru', 'male', 'samuelnderitu495@gmail.com', '$2y$10$EiCKQ0mBFNMku3n2FBttmuJLwzHwmYHAdX0WiZR.za6JP1SfXIhha', 0, '2022-05-11 06:00:30'),
(7, 'sami waweru', 'male', 'samuel@gmail.com', '$2y$10$EJ9NbKsVwy0LHpb2GssPk.ffHBiCNYfgBVDqnfXDvr47lBdWcUCEm', 0, '2022-05-11 06:01:47'),
(8, 'sami waweru', 'female', 'magundaturnitin1@gmail.com', '$2y$10$uXZviAygUTHW1hu7f3sfW.T627y8beJL4Gl2bLeKYhisBbAe5GJ/a', 0, '2022-05-12 06:57:03'),
(9, 'Daniel kairu', 'male', 'dan@gmail.com', '$2y$10$P6uNvBmBVCc/CUIHpXD0ZePA3ahHPh3eY8zOM5ajgWDcZP3NEL34a', 0, '2022-05-24 10:53:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_details`
--
ALTER TABLE `academic_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_details`
--
ALTER TABLE `academic_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
