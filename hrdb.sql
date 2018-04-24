-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 10:38 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_info`
--

CREATE TABLE `applicant_info` (
  `id` int(11) NOT NULL,
  `applicantid` int(250) NOT NULL,
  `userlevel` varchar(200) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` text,
  `password` varchar(250) DEFAULT NULL,
  `address` text,
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(300) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `telephone` text,
  `registrationdate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_info`
--

INSERT INTO `applicant_info` (`id`, `applicantid`, `userlevel`, `username`, `email`, `fullname`, `gender`, `dob`, `password`, `address`, `state`, `country`, `status`, `telephone`, `registrationdate`) VALUES
(1, 1, 'Applicant', 'henry oladeji', 'heolad@hotmail.com', 'Henry Oladeji', 'M', '2017-01-30', '4f54a2dbe126f0f2f165755d2d4b2c75', 'Old Winners', 'Oyo', 'Nigeria', 'Single', '08075770565', '2017-09-12'),
(2, 2, 'Applicant', 'Festus', 'festy5050@gmail.com', 'Festus Uduevbo', 'F', '2017-03-01', '4f54a2dbe126f0f2f165755d2d4b2c75', 'Uduevbo Way, Lekki Lagos.', 'Edo', 'me', 'Widow', '08033542303', '2017-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `company_id` varchar(20) NOT NULL,
  `company_name` varchar(150) DEFAULT NULL,
  `company_address` text,
  `sub_date` timestamp NULL DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employed_applicant`
--

CREATE TABLE `employed_applicant` (
  `employer_id` varchar(50) DEFAULT NULL,
  `job_id` varchar(50) DEFAULT NULL,
  `applicant_id` varchar(50) DEFAULT NULL,
  `position` varchar(300) DEFAULT NULL,
  `basic_salary` bigint(20) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `job_type` text,
  `interview_id` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employer_info`
--

CREATE TABLE `employer_info` (
  `employer_id` int(11) NOT NULL,
  `employer_name` varchar(200) NOT NULL,
  `contact_person` varchar(200) NOT NULL,
  `employer_email` varchar(150) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `service_category` text NOT NULL,
  `start_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `interview_id` varchar(50) DEFAULT NULL,
  `applicant_id` varchar(50) DEFAULT NULL,
  `vacancy_id` varchar(50) DEFAULT NULL,
  `interview_date` date DEFAULT NULL,
  `interview_score1` int(11) DEFAULT NULL,
  `interview_status` int(11) DEFAULT NULL,
  `interview_score2` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE `staff_info` (
  `id` int(11) NOT NULL,
  `staffid` varchar(250) DEFAULT NULL,
  `userlevel` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `employmentdate` date DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `telephone` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_info`
--

INSERT INTO `staff_info` (`id`, `staffid`, `userlevel`, `password`, `email`, `fullname`, `gender`, `employmentdate`, `dob`, `telephone`) VALUES
(1, 'admin@hrmanager.com', 'Administrator', '4f54a2dbe126f0f2f165755d2d4b2c75', 'admin@hrmanager.com', 'Administrator', 'Male', '2017-09-12', '1987-09-20', '08090901199');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `userleve_id` int(11) NOT NULL,
  `userlevel_name` varchar(150) DEFAULT NULL,
  `username` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vacancy_info`
--

CREATE TABLE `vacancy_info` (
  `vacancy_id` int(11) NOT NULL,
  `vacancy_name` varchar(20) NOT NULL,
  `requirement` varchar(20) NOT NULL,
  `date_opening` date NOT NULL,
  `closing_date` date NOT NULL,
  `employer_id` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_info`
--
ALTER TABLE `applicant_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `employer_info`
--
ALTER TABLE `employer_info`
  ADD PRIMARY KEY (`employer_id`);

--
-- Indexes for table `staff_info`
--
ALTER TABLE `staff_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`userleve_id`);

--
-- Indexes for table `vacancy_info`
--
ALTER TABLE `vacancy_info`
  ADD PRIMARY KEY (`vacancy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant_info`
--
ALTER TABLE `applicant_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employer_info`
--
ALTER TABLE `employer_info`
  MODIFY `employer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff_info`
--
ALTER TABLE `staff_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `userleve_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vacancy_info`
--
ALTER TABLE `vacancy_info`
  MODIFY `vacancy_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
