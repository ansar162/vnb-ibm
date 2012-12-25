-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2012 at 06:57 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `ibmdb_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `name` varchar(20) character set latin1 NOT NULL,
  `email` varchar(30) character set latin1 NOT NULL,
  `username` varchar(50) character set latin1 default NULL,
  `password` varchar(50) character set latin1 default NULL,
  `userlevel` varchar(20) character set latin1 default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`name`, `email`, `username`, `password`, `userlevel`) VALUES
('IBM User', 'ibmvnb1972@gmail.com', 'IBM1', 'cbf44511d041dc6d1dd73cc0c033122c', 'User Level3'),
('Ansar Basha', 'abm.ansar@gmail.com', 'admin', '0192023a7bbd73250516f069df18b500', 'User Level1'),
('Khaleel Ahmed', 'ibmvnb1972@gmail.com', 'manager', '0795151defba7a4b5dfa89170de46277', 'User Level2');
