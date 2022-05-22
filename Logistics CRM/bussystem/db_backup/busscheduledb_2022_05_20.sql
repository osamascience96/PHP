-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 09:26 PM
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
-- Database: `busscheduledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `company_id`, `name`, `address`, `timestamp`) VALUES
(1, 1, 'German Office', 'Potsdamer Platz 20, Gunzach, Germany', '2022-05-19 19:25:19'),
(2, 1, 'Berlin Office', 'Mellingburgredder 95, Erlangen, Germany', '2022-05-17 11:59:44'),
(6, 2, 'Austria Office', 'Building No.188, Sector 7, Bulgaria', '2022-05-16 08:15:55'),
(7, 2, 'France Office', 'House No.43, Street No.102, Farooq Street, Krishanagar, France', '2022-05-17 09:36:02'),
(9, 6, 'Illuminate Bulgaria Offic', 'House No.43, Street No.102, Farooq Street, Krishanagar, Lahore', '2022-05-19 07:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `header_user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `user_id`, `header_user_id`, `timestamp`) VALUES
(4, 11, 2, '2022-05-18 15:53:23'),
(5, 12, 2, '2022-05-19 07:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `company_assigned_id` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `user_id`, `name`, `address`, `company_assigned_id`, `timestamp`) VALUES
(1, 2, 'ABCD Transport', 'House No.43, Street No.105, Krishanagar, Lahore', 'BG7894561235', '2022-05-17 11:24:12'),
(2, 2, 'German Transport', 'Building No.88, Sector 7, Bulgaria', 'BG8855698855', '2022-05-15 16:48:56'),
(6, 2, 'Illuminate Transport', 'House No.43, Street No.102, Farooq Street, Krishanagar, Lahore', 'BG8887548585', '2022-05-18 12:48:55'),
(7, 2, 'Logistics Transport', 'House No.43, Street No.102, Farooq Street, Krishanagar, Lahore', 'BG7745869691', '2022-05-19 07:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `join_date` date NOT NULL,
  `tenure_end` date DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_id`, `company_id`, `branch_id`, `join_date`, `tenure_end`, `timestamp`) VALUES
(1, 4, 2, 7, '2022-05-17', '0000-00-00', '2022-05-19 15:16:45'),
(3, 6, 1, 2, '2022-05-17', '0000-00-00', '2022-05-17 17:39:59'),
(7, 13, 2, 7, '2022-05-19', '0000-00-00', '2022-05-19 07:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `timestamp`) VALUES
(1, 'Companies Access', '2022-05-19 09:13:00'),
(2, 'Edit Companies Access', '2022-05-19 09:13:12'),
(3, 'Add Companies Access', '2022-05-19 09:13:25'),
(4, 'Add Company Branch Access', '2022-05-19 09:13:43'),
(5, 'Edit Company Branch Access', '2022-05-19 09:14:05'),
(6, 'Branch Access', '2022-05-19 09:14:11'),
(7, 'Employees Access', '2022-05-19 09:14:15'),
(8, 'Add Employees Access', '2022-05-19 09:14:23'),
(9, 'Edit Employees Access', '2022-05-19 09:14:30'),
(10, 'Shipment Access', '2022-05-19 09:14:35'),
(11, 'Add Shipment Access', '2022-05-19 09:14:41'),
(12, 'Edit Shipment Access', '2022-05-19 09:14:48'),
(13, 'Delete Company Access', '2022-05-19 09:14:57'),
(14, 'Delete Branch Access', '2022-05-19 09:15:05'),
(15, 'Delete Employee Access', '2022-05-19 09:15:11'),
(16, 'Delete Shipment Access', '2022-05-19 09:15:17'),
(17, 'Client Access', '2022-05-19 09:15:22'),
(18, 'Add Client Access', '2022-05-19 09:15:29'),
(19, 'Edit Client Access', '2022-05-19 09:15:53'),
(20, 'Delete Client Access', '2022-05-19 09:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `from_address` text NOT NULL,
  `to_address` text NOT NULL,
  `pick_up_date` date NOT NULL,
  `expected_deliever_date` date NOT NULL,
  `deliever_date` date DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `company_id`, `branch_id`, `client_id`, `from_address`, `to_address`, `pick_up_date`, `expected_deliever_date`, `deliever_date`, `timestamp`) VALUES
(5, 1, 1, 4, 'House No.43, Street No.102, Farooq Street, Krishanagar, Gujranwala', 'House No.112, Street No.103, Farooq Street, Krishanagar, Lahore', '2022-05-18', '2022-05-19', '2022-05-19', '2022-05-19 13:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) DEFAULT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `type` enum('admin','employee','client','') NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `type`, `timestamp`) VALUES
(2, 'Osama', '', 'osamahu96@gmail.com', '2a6e72d00a18860da893c2189c66dcff', 'admin', '2022-05-13 17:16:34'),
(4, 'Ali ', 'Raza', 'aliraza88@gmail.com', '2a6e72d00a18860da893c2189c66dcff', 'employee', '2022-05-17 17:31:41'),
(6, 'Muhammad', 'Ali', 'muhammadali33@gmail.com', 'dede33849b4debf86520f99e59f93a3f', 'employee', '2022-05-17 17:39:59'),
(11, 'Ali ', 'Ahmad', 'aliahmad78@gmail.com', '2a6e72d00a18860da893c2189c66dcff', 'client', '2022-05-18 15:53:23'),
(12, 'Farham', 'Ahmad', 'farhanahmad88@gmail.com', 'a407f8d7c2f13a622ea844228473d4eb', 'client', '2022-05-19 07:04:12'),
(13, 'Harry', 'Potter', 'harrypotter89@gmail.com', '1422fb38e6a2fee8c85e2f1468700ef4', 'employee', '2022-05-19 07:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `is_active`, `timestamp`) VALUES
(9, 11, 10, 1, '2022-05-19 13:33:14'),
(10, 4, 4, 1, '2022-05-19 19:22:30'),
(11, 4, 8, 0, '2022-05-19 17:28:02'),
(12, 4, 11, 1, '2022-05-19 19:22:30'),
(13, 4, 17, 1, '2022-05-19 19:22:30'),
(14, 4, 18, 0, '2022-05-19 16:08:30'),
(15, 4, 1, 1, '2022-05-19 15:50:34'),
(16, 4, 3, 0, '2022-05-19 17:29:42'),
(17, 4, 5, 1, '2022-05-19 19:22:30'),
(18, 4, 6, 1, '2022-05-19 19:22:30'),
(19, 4, 7, 1, '2022-05-19 19:22:30'),
(20, 4, 12, 1, '2022-05-19 19:22:30'),
(21, 4, 16, 1, '2022-05-19 19:22:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id_constraint` (`company_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_constraint` (`user_id`),
  ADD KEY `header_user_id_constraint` (`header_user_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_company_constraint` (`user_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `company_employee_id_constraint` (`company_id`),
  ADD KEY `branch_employee_id_constraint` (`branch_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_shipment_id_constraint` (`company_id`),
  ADD KEY `branch_shipment_id_constraint` (`branch_id`),
  ADD KEY `client_shipment_id_constraint` (`client_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_constraint_role` (`user_id`),
  ADD KEY `role_id_user_constraint` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `company_id_constraint` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `header_user_id_constraint` FOREIGN KEY (`header_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_id_constraint` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `user_id_company_constraint` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `branch_employee_id_constraint` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `company_employee_id_constraint` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `branch_shipment_id_constraint` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `client_shipment_id_constraint` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `company_shipment_id_constraint` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `role_id_user_constraint` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `user_id_constraint_role` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
