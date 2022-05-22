-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(4, 9, 'Brave New World', 'Aldous Huxley', 3456455234, 0),
(5, 9, 'Do Androids Dream of Electric Sheep?', 'Philip K. Dick', 5475675745, 0),
(7, 10, 'Harry Potter', 'JK Rowling', 9780545010, 0),
(8, 2, 'A Brief History of Time ', 'Stephan Hawkings', 9780553380, 0);

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
  `date_of_return` varchar(50) COLLATE utf16_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Dumping data for table `loaned_books`
--

INSERT INTO `loaned_books` (`transaction_id`, `book_id`, `personnel_id`, `member_id`, `date_of_issue`, `date_of_return`) VALUES
(7, 2, 1, 3, '2021-06-09 19:24:17', '2021-06-09 20:06:22'),
(8, 7, 1, 7, '2021-06-09 20:24:42', '2021-06-09 20:28:14'),
(9, 8, 1, 3, '2021-06-09 20:28:27', '2021-06-09 20:30:35');

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
(3, 'pKXKaUqgQzwCSFAnOkGSdA==', 'aliraza88', 'd84a401d7f16143804beb52fd6fc2d19', 1),
(4, '/jRMT9yeaFCEfHCUunL+0w==', 'haris776', 'd84a401d7f16143804beb52fd6fc2d19', 1),
(6, 'FPfsIPWeUd/DE14yWfKT2w==', NULL, NULL, 1),
(7, 'Nkznx94tsUCYNqE8maaRzAUBh6DN5amHLLqwkatz5VM=', 'khaliltr04', 'd84a401d7f16143804beb52fd6fc2d19', 1),
(8, 'H8KJYqh9zyq3haIWnTkqJg==', NULL, NULL, 1);

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
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `loaned_books`
--
ALTER TABLE `loaned_books`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `personnel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
