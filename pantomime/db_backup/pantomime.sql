-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:21 AM
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
-- Database: `pantomime`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `town_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `town_id`) VALUES
(100, 'John\r\n', 1),
(101, 'Jack', 5),
(102, 'Jim', 3),
(103, 'Jill', 4);

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `born_townid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `name`, `born_townid`) VALUES
(1, 'Peck Scollie', 7),
(2, 'Kirk Gunn', 2),
(3, 'Fiona McCulloch', 2),
(4, 'Kathryn McDonald', 6),
(5, 'Wang Munro', 4),
(6, 'Jill Houghton', 2),
(7, 'Susan Wood', 4),
(8, 'Caroline Kerkhoff', 5);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `years` text NOT NULL,
  `pandomime_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `years`, `pandomime_id`) VALUES
(7, '1957', 1),
(8, '1958', 2),
(9, '1959', 3),
(10, '1960', 1),
(11, '1961', 4),
(12, '1962', 1),
(13, '1963', 3),
(14, '1964', 1),
(15, '1965', 2),
(16, '1966', 1),
(17, '1967', 2),
(18, '1968', 1),
(19, '1969', 2),
(20, '1970', 1),
(21, '1971', 4),
(22, '1972', 2),
(23, '1973', 4),
(24, '1974', 3),
(25, '1975', 1),
(26, '1976', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pandomimes`
--

CREATE TABLE `pandomimes` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pandomimes`
--

INSERT INTO `pandomimes` (`id`, `name`) VALUES
(1, 'Robin Hood'),
(2, 'Cinderella'),
(3, 'Puss in Boots'),
(4, 'Aladdin');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Romantic lead'),
(2, 'Ballet'),
(3, 'Juvenile'),
(4, 'Slapstick'),
(5, 'Light comedy');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `starId` int(11) NOT NULL,
  `directId` int(11) NOT NULL,
  `roleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `event_id`, `starId`, `directId`, `roleId`) VALUES
(8, 7, 5, 7, 1),
(9, 7, 20, 7, 2),
(10, 7, 41, 7, 3),
(11, 7, 43, 7, 1),
(12, 7, 46, 7, 4),
(13, 8, 8, 5, 4),
(14, 8, 9, 5, 3),
(15, 8, 14, 5, 4),
(16, 8, 19, 5, 1),
(17, 8, 26, 5, 2),
(18, 8, 32, 5, 2),
(19, 8, 36, 5, 3),
(20, 9, 9, 4, 3),
(21, 9, 14, 4, 4),
(22, 9, 18, 4, 4),
(23, 9, 35, 4, 4),
(24, 9, 45, 4, 2),
(25, 10, 8, 4, 4),
(26, 10, 9, 4, 3),
(27, 10, 22, 4, 5),
(28, 10, 25, 4, 2),
(29, 10, 42, 4, 3),
(30, 10, 46, 4, 4),
(31, 11, 5, 6, 1),
(32, 11, 12, 6, 3),
(33, 11, 13, 6, 5),
(34, 11, 14, 6, 4),
(35, 11, 24, 6, 3),
(36, 11, 26, 6, 2),
(37, 11, 34, 6, 4),
(38, 11, 47, 6, 2),
(39, 12, 50, 8, 1),
(40, 12, 3, 8, 1),
(41, 12, 7, 8, 5),
(42, 12, 17, 8, 4),
(43, 12, 20, 8, 2),
(44, 12, 22, 8, 5),
(45, 12, 24, 8, 4),
(46, 12, 42, 8, 3),
(47, 12, 48, 8, 2),
(48, 13, 6, 5, 5),
(49, 13, 21, 5, 3),
(50, 13, 25, 5, 2),
(51, 13, 28, 5, 3),
(52, 13, 33, 5, 1),
(53, 13, 34, 5, 4),
(54, 13, 40, 5, 5),
(55, 13, 45, 5, 2),
(56, 14, 10, 5, 3),
(57, 14, 14, 5, 4),
(58, 14, 17, 5, 4),
(59, 14, 36, 5, 3),
(60, 14, 40, 5, 5),
(61, 14, 45, 5, 2),
(62, 14, 47, 5, 2),
(63, 15, 7, 3, 5),
(64, 15, 11, 3, 1),
(65, 15, 13, 3, 5),
(66, 15, 20, 3, 2),
(67, 15, 32, 3, 2),
(68, 15, 36, 3, 3),
(69, 15, 49, 3, 4),
(70, 16, 4, 3, 2),
(71, 16, 7, 3, 5),
(72, 16, 9, 3, 3),
(73, 16, 17, 3, 4),
(74, 16, 26, 3, 2),
(75, 16, 30, 3, 5),
(76, 16, 41, 3, 3),
(77, 16, 47, 3, 2),
(78, 17, 50, 2, 1),
(79, 17, 5, 2, 1),
(80, 17, 6, 2, 5),
(81, 17, 10, 2, 3),
(82, 17, 14, 2, 4),
(83, 17, 17, 2, 4),
(88, 17, 27, 2, 5),
(89, 18, 1, 8, 5),
(90, 18, 4, 8, 2),
(91, 18, 15, 8, 2),
(92, 18, 19, 8, 1),
(93, 18, 24, 8, 3),
(94, 18, 27, 8, 5),
(95, 18, 44, 8, 4),
(96, 18, 46, 8, 4),
(97, 19, 15, 4, 2),
(98, 19, 20, 4, 2),
(99, 19, 39, 4, 1),
(100, 19, 43, 4, 1),
(101, 19, 44, 4, 4),
(102, 19, 49, 4, 4),
(103, 20, 7, 4, 5),
(104, 20, 8, 4, 4),
(105, 20, 15, 4, 2),
(106, 20, 32, 4, 2),
(107, 20, 33, 4, 1),
(108, 20, 41, 4, 3),
(109, 20, 46, 4, 4),
(110, 20, 48, 4, 2),
(111, 21, 4, 1, 2),
(112, 21, 20, 1, 2),
(113, 21, 24, 1, 3),
(114, 21, 27, 1, 5),
(115, 21, 30, 1, 5),
(116, 21, 32, 1, 2),
(117, 21, 42, 1, 3),
(118, 21, 44, 1, 4),
(119, 22, 6, 5, 5),
(120, 22, 7, 5, 5),
(121, 22, 9, 5, 3),
(122, 22, 19, 5, 1),
(123, 22, 20, 5, 2),
(124, 22, 25, 5, 2),
(125, 22, 39, 5, 1),
(126, 23, 19, 4, 1),
(129, 23, 21, 4, 3),
(130, 23, 23, 4, 5),
(131, 23, 27, 4, 5),
(132, 23, 33, 4, 1),
(133, 23, 42, 4, 3),
(134, 23, 45, 4, 2),
(135, 23, 47, 4, 2),
(136, 23, 48, 4, 2),
(137, 23, 49, 4, 4),
(138, 24, 14, 2, 4),
(139, 24, 31, 2, 3),
(140, 24, 36, 2, 3),
(141, 24, 48, 2, 2),
(142, 25, 8, 3, 4),
(143, 25, 10, 3, 3),
(144, 25, 13, 3, 5),
(145, 25, 15, 3, 2),
(146, 25, 41, 3, 3),
(147, 26, 50, 7, 1),
(148, 26, 3, 7, 1),
(149, 26, 7, 7, 5),
(150, 26, 13, 7, 5),
(151, 26, 21, 7, 3),
(152, 26, 40, 7, 5),
(153, 26, 42, 7, 3),
(154, 26, 48, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `agentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`id`, `name`, `agentid`) VALUES
(1, 'Lise Cumming', 100),
(3, 'Karen Kinavey', 100),
(4, 'Catherine Munro', 100),
(5, 'Robert Halversen', 100),
(6, 'Kenneth Munro', 100),
(7, 'Patrick Ross', 100),
(8, 'Martin Gupta', 100),
(9, 'Tania Henry', 100),
(10, 'Hun Williamson', 100),
(11, 'Emma Mackay', 100),
(12, 'Frank Telford', 100),
(13, 'Crispin Seaton', 100),
(14, 'Fiona Haines', 100),
(15, 'Elizabeth Whyte', 100),
(17, 'Jane Oliver', 100),
(18, 'Robert Inyhensico', 100),
(19, 'Sondra Kennedy', 101),
(20, 'Brian Nabozny', 101),
(21, 'Tracy Dorrian', 101),
(22, 'William Tranoy', 101),
(23, 'Vivienne Sheaman', 101),
(24, 'Catherine McClenny', 101),
(25, 'Ian Kathrens', 101),
(26, 'Andrew Moore', 101),
(27, 'Donald Ekaette', 101),
(28, 'Pamela Laing', 101),
(30, 'Jane Maclellan\r\n', 102),
(31, 'Scott Westwood', 102),
(32, 'Sarah Lincoln', 102),
(33, 'Laura Bannatyne', 102),
(34, 'Ewen Kyle', 102),
(35, 'Juliet Beable', 102),
(36, 'Morag Tiley', 102),
(39, 'Gillian Lipscomb', 102),
(40, 'Fiona McManus', 102),
(41, 'Sze Valentine', 102),
(42, 'Robert Hillyard', 102),
(43, 'John McLellan', 102),
(44, 'Alison Duncan', 102),
(45, 'Nicole Davison', 103),
(46, 'Isabelle Findlay', 103),
(47, 'John Drummond', 103),
(48, 'John Gray', 103),
(49, 'Alexander Konis', 103),
(50, 'Stuart Sharrocks', 100);

-- --------------------------------------------------------

--
-- Table structure for table `towns`
--

CREATE TABLE `towns` (
  `id` int(11) NOT NULL,
  `town` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `towns`
--

INSERT INTO `towns` (`id`, `town`) VALUES
(1, 'Stirling\r\n'),
(2, 'Bannockburn'),
(3, 'Alloa\r\n'),
(4, 'Falkirk'),
(5, 'Dunblane'),
(6, 'Menstrie'),
(7, 'Dollar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `townid_fk` (`town_id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b_timid_fk` (`born_townid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pandomimeid_fk` (`pandomime_id`);

--
-- Indexes for table `pandomimes`
--
ALTER TABLE `pandomimes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `directId_fk` (`directId`),
  ADD KEY `roleid_fk` (`roleId`),
  ADD KEY `show_starid_fk` (`starId`),
  ADD KEY `eventid_pk` (`event_id`);

--
-- Indexes for table `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent_id_fk` (`agentid`);

--
-- Indexes for table `towns`
--
ALTER TABLE `towns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pandomimes`
--
ALTER TABLE `pandomimes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `stars`
--
ALTER TABLE `stars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `towns`
--
ALTER TABLE `towns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `townid_fk` FOREIGN KEY (`town_id`) REFERENCES `towns` (`id`);

--
-- Constraints for table `directors`
--
ALTER TABLE `directors`
  ADD CONSTRAINT `b_timid_fk` FOREIGN KEY (`born_townid`) REFERENCES `towns` (`id`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `pandomimeid_fk` FOREIGN KEY (`pandomime_id`) REFERENCES `pandomimes` (`id`);

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `directId_fk` FOREIGN KEY (`directId`) REFERENCES `directors` (`id`),
  ADD CONSTRAINT `eventid_pk` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `roleid_fk` FOREIGN KEY (`roleId`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `show_starid_fk` FOREIGN KEY (`starId`) REFERENCES `stars` (`id`);

--
-- Constraints for table `stars`
--
ALTER TABLE `stars`
  ADD CONSTRAINT `agent_id_fk` FOREIGN KEY (`agentid`) REFERENCES `agents` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
