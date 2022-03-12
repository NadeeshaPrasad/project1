-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2022 at 01:12 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `Id` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Age` char(3) NOT NULL,
  `Contact_No` char(10) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Person_Image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `Name`, `Date_of_birth`, `Age`, `Contact_No`, `Address`, `Religion`, `Person_Image`) VALUES
('983023355V', 'Nadeesha', '1998-10-28', '23', '0766894175', 'D/37,Madagama,Algama', 'Buddhist', '(210).jpg'),
('302463559V', 'Kalana', '1997-03-10', '70', '0735467854', 'B/64,Malagama,Algama', 'Buddhist', '(493).jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
