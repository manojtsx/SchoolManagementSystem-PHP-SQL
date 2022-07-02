-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 05:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Name` varchar(100) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Name`, `Type`, `Description`) VALUES
('', '', 'This is an description. HI I am writing about this subject as a good subject if it is donw clearly.'),
('hi', 'Bachelor Degree', 'This is an description. HI I am writing about this subject as a good subject if it is donw clearly.'),
('ICTE', 'Bachelor Degree', 'This is a good platform for every students who wants to learn with less knowledge.'),
('ICTE', 'Bachelor Degree', 'This is a very good platform for less knowledge');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(20) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Pass` varchar(10) NOT NULL,
  `Position` varchar(15) NOT NULL,
  `Date` varchar(15) DEFAULT NULL,
  `Phone_No` int(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Username`, `Pass`, `Position`, `Date`, `Phone_No`, `Email`) VALUES
('Remon Shrestha', 'admin', 'admin', 'Admin', NULL, NULL, NULL),
('Manoj Shrestha', 'teacher', 'teacher', 'Facilitator', NULL, NULL, NULL),
('Rahul Chapagain', 'student', 'student', 'Student', NULL, NULL, NULL),
('Nirwan Done', 'remon5', 'remon5', 'Student', '2022-06-06', 2147483647, 'shresthanewar678@gmail.com.np'),
('Herman Hollerith', 'remon1', 'remon1', 'Student', '2022-06-06', 2147483647, 'shresthanewar678@gmail.com'),
('Manoj Shrestha', 'remon6', 'remon6', 'Student', '2022-06-06', 2147483647, 'manojbicte@gmail.com'),
('Derman Gregor', 'remon2', 'remon2', 'Student', '2022-06-06', 2147483647, 'shresthanewar678@gmail.com.np'),
('Menaka lover', 'hello', 'hello', 'Student', '2022-06-19', 2147483647, 'shresthanewar678@gmail.com'),
('Menaka lover', 'hello', 'hello', 'Student', '2022-06-19', 2147483647, 'shresthanewar678@gmail.com'),
('Cyan Magar', 'cyan1', 'cyan1', 'Facilitator', '2017-04-17', 9816683, 'cyanmagar@gmail.com'),
('Sagar Gaire', 'sagar1', 'sagar1', 'Facilitator', '2022-05-30', 2147483647, 'manojbicte@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
