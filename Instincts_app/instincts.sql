-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2016 at 08:07 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `instincts`
--

-- --------------------------------------------------------

--
-- Table structure for table `gcm_admins`
--

CREATE TABLE IF NOT EXISTS `gcm_admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gcm_admins`
--

INSERT INTO `gcm_admins` (`id`, `username`, `password`, `email`) VALUES
(1, 'aswin', 'kumar', 'ashishere.nike@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gcm_users`
--

CREATE TABLE IF NOT EXISTS `gcm_users` (
`id` int(11) NOT NULL,
  `gcm_regid` text,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gcm_users`
--

INSERT INTO `gcm_users` (`id`, `gcm_regid`, `name`, `email`, `created_at`) VALUES
(1, 'f3oESxPmiHY:APA91bGcOm5VH6c7QLM3nCaDZ8NrfanRzU4JKTC5KMJd-mkJHZcZAKh3XJWpABTK84CM8XjC0byK-g1WJArZ6iedCBa3MN42Dd6_guryDN8sumxXmCA6xQYNsFtYYcRosw8lAeUjUtVm', 'aswinkumar', 'ash@gmail.com', '2016-02-16 08:06:17'),
(2, 'draWnxWGkh8:APA91bGIAcHZCrfb9TJfsmN6tz5aDEYsYmLwoftn7fIb3tJmPSrOZWs_QJ1gLTDq5FCIEU_XakZLnpHwQ6iMRPMlOJRP9vfsP2DFVeqgxpe20PtDom-9hX-j5s8d68uk8YlljenpEDRl', 'shar', 'akasnk@gmail.com', '2016-02-26 18:41:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gcm_users`
--
ALTER TABLE `gcm_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gcm_users`
--
ALTER TABLE `gcm_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
