-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 10:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE DATABASE `library_db`;
USE `library_db`;

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `book` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `author` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `ISBN` bigint(20) NOT NULL,
  `is_issued` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `category_id`, `book`, `author`, `ISBN`, `is_issued`) VALUES
(1, 9, 'Dune', 'Frank Herbert', 4832951841, 0),
(2, 9, 'I, Robot', 'Isaac Asimov', 2356324563, 0),
(3, 9, 'Neuromancer', 'William Gibson', 2384235235, 1),
(4, 9, 'Brave New World', 'Aldous Huxley', 3456455234, 0),
(5, 9, 'Do Androids Dream of Electric Sheep?', 'Philip K. Dick', 5475675745, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(50) COLLATE utf16_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, 'Horror'),
(2, 'Science'),
(3, 'Novel'),
(4, 'Poetry'),
(5, 'Biography'),
(6, 'History'),
(7, 'Philosophy'),
(8, 'Art'),
(9, 'Sci-fi'),
(10, 'Fantasy'),
(11, 'Romance'),
(12, 'Children\'s'),
(13, 'Crime'),
(14, 'Drama'),
(15, 'Graphic novel');

-- --------------------------------------------------------

--
-- Table structure for table `loaned_books`
--

CREATE TABLE `loaned_books` (
  `transaction_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `personnel_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date_of_issue` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `date_of_return` varchar(50) COLLATE utf16_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Dumping data for table `loaned_books`
--

INSERT INTO `loaned_books` (`transaction_id`, `book_id`, `personnel_id`, `member_id`, `date_of_issue`, `date_of_return`) VALUES
(1, 3, 1, 1, '24.05.2021 10:08', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `username` varchar(50) COLLATE utf16_turkish_ci DEFAULT NULL,
  `password` text COLLATE utf16_turkish_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_name`, `username`, `password`, `is_active`) VALUES
(1, 'NBbFT/21UBnMsDL4mgU9ZA==', 'sani', 'c2318cee73c68b44c1de757339f43aa6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `personnel_id` int(11) NOT NULL,
  `personnel_login` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `personnel_password` varchar(50) COLLATE utf16_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`personnel_id`, `personnel_login`, `personnel_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `loaned_books`
--
ALTER TABLE `loaned_books`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`personnel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `loaned_books`
--
ALTER TABLE `loaned_books`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `personnel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
