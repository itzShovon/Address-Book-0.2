-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 02:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `address_book_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `person_about`
--

CREATE TABLE `person_about` (
  `user_ID` text,
  `person_no` text,
  `person_address` text,
  `person_birthday` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_about`
--

INSERT INTO `person_about` (`user_ID`, `person_no`, `person_address`, `person_birthday`) VALUES
('345', '1', 'Meherchandi, Rajshahi, Bangladesh', '7/2/1996'),
('345', '2', 'fdsafsda', '446');

-- --------------------------------------------------------

--
-- Table structure for table `person_contact`
--

CREATE TABLE `person_contact` (
  `user_ID` text,
  `person_no` text,
  `person_full_name` text,
  `person_nick_name` text,
  `person_website` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_contact`
--

INSERT INTO `person_contact` (`user_ID`, `person_no`, `person_full_name`, `person_nick_name`, `person_website`) VALUES
('345', '1', 'Zahidul Islam', 'Shovon', 'itzShovon'),
('345', '2', 'afsa', 'fdas', 'dsafe');

-- --------------------------------------------------------

--
-- Table structure for table `person_phone`
--

CREATE TABLE `person_phone` (
  `user_ID` text,
  `person_no` text,
  `person_phone_no` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_phone`
--

INSERT INTO `person_phone` (`user_ID`, `person_no`, `person_phone_no`) VALUES
('345', '1', '01554722282'),
('345', '2', '01677353430'),
('345', '2', '01677353440'),
('345', '1', '01677353430');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_ID` text,
  `user_password` text,
  `user_name` text,
  `user_email` text,
  `user_phone_no` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_ID`, `user_password`, `user_name`, `user_email`, `user_phone_no`) VALUES
('111', '111', 'User Name', 'useremail@mail.com', '01557422282'),
('234', '234', 'Shovon', 'zahidul.cse14@gmail.com', '01554722282'),
('345', '345', 'temp', 'temp@mail.com', '01557422282');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
