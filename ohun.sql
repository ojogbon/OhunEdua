-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2019 at 01:55 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ohun`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`, `status`) VALUES
(1, 'admin', 'admin', '2019-09-10 11:28:30', '0');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(222) NOT NULL,
  `path` varchar(222) NOT NULL,
  `title` text NOT NULL,
  `address` text NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `path`, `title`, `address`, `date`, `status`) VALUES
(1, 't1.jpg', '../forAllImage/t1.jpg', 'Summer IFA Discuss', 'Duis ultrices tortor non felis convallis bibendum. Maecenas diam velit, sollicitudin at imperdiet ac, consectetur non nibh. Etiam eget dapibus nulla. Nulla placerat mauris ut elit placerat luctus. Aliquam porttitor leo non nisl scelerisque sollicitudin.', '2019-09-21 21:19:50', '0'),
(2, 'egungun-2.jpg', '../forAllImage/egungun-2.jpg', 'Ifa the voice ', 'This is the ifa i am telling you about. you can\'t just  see the truth of the whole matter at ones in the \r\nshop of all join and every  and any where just like you know the post.', '2019-10-02 13:34:40', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `subject` varchar(211) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `date`, `status`) VALUES
(1, 'gbola  gbade', 'gbade@gmail.com', 'Too good', 'Polite sadipscing elitr, sed diam is nonumy is eirmod tempor invidunt ut labore et dolore magna aliquyam .', '2019-09-10 11:04:21', '0'),
(2, 'golden mart', 'ljhgjk@gmail.com', 'just asking', 'this is a message for the baba ifa and his group', '2019-09-21 22:01:28', '0'),
(3, 'ajo aboli', 'oladeleakinwunmi@gmail.com', 'cool and cam ', 'This the one you really want i know', '2019-09-21 22:05:10', '0'),
(4, 'done xame', 'boope@gma', 'Cap build', 'This is the most ', '2019-10-01 08:49:19', '0'),
(5, 'golden mart', 'ljhgjk@gmail.com', 'good ', 'all for us', '2019-10-02 13:45:37', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(222) NOT NULL,
  `path` varchar(222) NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `path`, `date`, `status`) VALUES
(2, 'b-1.jpg', '../forAllImageb-1.jpg', '2019-09-21 21:12:37', '0'),
(3, 'estate4.jpg', '../forAllImage/estate4.jpg', '2019-09-21 21:25:10', '0'),
(4, 'egungun-2.jpg', '../forAllImage/egungun-2.jpg', '2019-09-30 19:54:58', '0'),
(5, 'egunugun.jpg', '../forAllImage/egunugun.jpg', '2019-09-30 19:59:04', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
