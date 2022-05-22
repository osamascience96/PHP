-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:10 AM
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
-- Database: `feelgoodcontact`
--

-- --------------------------------------------------------

--
-- Table structure for table `axis`
--

CREATE TABLE `axis` (
  `id` int(11) NOT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `Side_Select` varchar(225) DEFAULT NULL,
  `Value` int(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `axis`
--

INSERT INTO `axis` (`id`, `Product_id`, `Side_Select`, `Value`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 'none', 0, 1, '2020-08-10 01:17:43', '2020-08-04 03:13:05'),
(13, 4, 'left', 41, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(14, 4, 'left', 51, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(15, 4, 'right', 61, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(16, 4, 'right', 71, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(17, 4, 'right', 81, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(18, 4, 'right', 91, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(19, 1, 'left', 10, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(20, 1, 'left', 2, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(21, 1, 'left', 3, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(22, 1, 'right', 5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(23, 1, 'right', 4, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(24, 1, 'right', 8, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(52, 2, 'left', 0, 1, '2020-10-23 19:04:52', '2020-10-23 19:04:52'),
(59, 2, 'left', 1, 1, '2020-10-23 20:01:28', '2020-10-23 20:01:28'),
(60, 2, 'left', 2, 1, '2020-10-23 20:01:28', '2020-10-23 20:01:28'),
(61, 2, 'left', 3, 1, '2020-10-23 20:01:28', '2020-10-23 20:01:28'),
(62, 2, 'left', 4, 1, '2020-10-23 20:01:29', '2020-10-23 20:01:29'),
(63, 2, 'left', 5, 1, '2020-10-23 20:01:29', '2020-10-23 20:01:29'),
(64, 2, 'right', 5, 1, '2020-10-23 20:01:35', '2020-10-23 20:01:35'),
(65, 2, 'right', 6, 1, '2020-10-23 20:01:35', '2020-10-23 20:01:35'),
(66, 2, 'right', 7, 1, '2020-10-23 20:01:35', '2020-10-23 20:01:35'),
(67, 2, 'right', 8, 1, '2020-10-23 20:01:35', '2020-10-23 20:01:35'),
(68, 2, 'right', 9, 1, '2020-10-23 20:01:36', '2020-10-23 20:01:36'),
(69, 2, 'right', 10, 1, '2020-10-23 20:01:36', '2020-10-23 20:01:36'),
(70, 2, 'left', 6, 1, '2020-10-23 20:01:45', '2020-10-23 20:01:45'),
(71, 2, 'right', 11, 1, '2020-10-23 20:01:54', '2020-10-23 20:01:54'),
(72, 2, 'left', 0, 1, '2020-10-25 00:47:31', '2020-10-25 00:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `base_curve`
--

CREATE TABLE `base_curve` (
  `id` int(11) NOT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `Side_Select` varchar(225) DEFAULT NULL,
  `Value` double DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `base_curve`
--

INSERT INTO `base_curve` (`id`, `Product_id`, `Side_Select`, `Value`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 'none', 0, 0, '2020-08-10 01:18:52', '2020-08-04 03:13:05'),
(7, 3, 'left', 10, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(8, 3, 'left', 23, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(9, 3, 'left', 5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(10, 3, 'left', 10, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(11, 3, 'right', 25, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(12, 3, 'right', 30, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(19, 1, 'left', 10, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(20, 1, 'left', 2, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(21, 1, 'left', 3, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(22, 1, 'right', 5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(23, 1, 'right', 4, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(24, 1, 'right', 8, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(77, 2, 'left', 8.1, 1, '2020-10-22 21:07:06', '2020-10-22 21:07:06'),
(78, 2, 'left', 8.2, 1, '2020-10-22 21:07:06', '2020-10-22 21:07:06'),
(79, 2, 'left', 8.3, 1, '2020-10-22 21:07:06', '2020-10-22 21:07:06'),
(80, 147, 'left', 8, 1, '2020-11-08 10:39:57', '2020-11-08 10:39:57'),
(81, 147, 'left', 8.1, 1, '2020-11-08 10:39:57', '2020-11-08 10:39:57'),
(82, 147, 'left', 8.2, 1, '2020-11-08 10:39:57', '2020-11-08 10:39:57'),
(83, 147, 'left', 8.3, 1, '2020-11-08 10:39:57', '2020-11-08 10:39:57'),
(84, 147, 'right', 10, 1, '2020-11-08 10:40:07', '2020-11-08 10:40:07'),
(85, 147, 'right', 15, 1, '2020-11-08 10:40:25', '2020-11-08 10:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `benefits_description`
--

CREATE TABLE `benefits_description` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Benefits_Description` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benefits_description`
--

INSERT INTO `benefits_description` (`id`, `Product_id`, `Benefits_Description`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', 1, '2020-06-10 01:58:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Brand` varchar(225) DEFAULT NULL,
  `Type` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image_link` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `Product_id`, `Brand`, `Type`, `active`, `created_at`, `updated_at`, `image_link`) VALUES
(0, 1, 'none', '', 0, '2020-12-28 12:49:46', '0000-00-00 00:00:00', NULL),
(1, 1, 'Feel Good Collection', 'Glasses', 1, '2020-06-23 21:35:28', '0000-00-00 00:00:00', 'feelgoodcollection.png'),
(2, 1, 'Le Specs', 'Glasses', 1, '2020-06-23 21:49:36', '0000-00-00 00:00:00', 'lespecs.png'),
(3, 1, 'Oakley', 'Glasses', 1, '2020-06-23 21:52:17', '0000-00-00 00:00:00', 'oakley.png'),
(4, 1, 'O\'Neill', 'Glasses', 1, '2020-06-23 21:51:59', '0000-00-00 00:00:00', 'oneill.png'),
(5, 1, 'Polaroid', 'Glasses', 1, '2020-06-23 21:53:10', '0000-00-00 00:00:00', 'polaroid.png'),
(6, 1, 'Ray-Ban', 'Glasses', 1, '2020-06-23 21:54:12', '0000-00-00 00:00:00', 'rayban.png'),
(7, 1, 'Superdry', 'Glasses', 1, '2020-06-23 21:55:55', '0000-00-00 00:00:00', 'superdry.png'),
(8, 1, 'Tommy Hilfiger', 'Glasses', 1, '2020-06-23 21:56:49', '0000-00-00 00:00:00', 'tommy-hilfiger.png'),
(9, 1, 'Bvlgari', 'Sunglasses', 1, '2020-06-23 21:13:06', '0000-00-00 00:00:00', 'bvlgari.png'),
(10, 1, 'Calvin Klein', 'Sunglasses', 1, '2020-06-23 21:17:41', '0000-00-00 00:00:00', 'calvinklein.png'),
(11, 1, 'Carrera', 'Sunglasses', 1, '2020-06-23 21:17:50', '0000-00-00 00:00:00', 'carrera.png'),
(12, 1, 'Celine', 'Sunglasses', 1, '2020-06-23 21:18:03', '0000-00-00 00:00:00', 'celine.png'),
(13, 1, 'Chloe', 'Sunglasses', 1, '2020-06-23 21:33:55', '0000-00-00 00:00:00', 'chloe.png'),
(14, 1, 'Dolce & Gabbana', 'Sunglasses', 1, '2020-06-23 21:34:05', '0000-00-00 00:00:00', 'dolceandgabbana.png'),
(15, 1, 'Dunlop', 'Sunglasses', 1, '2020-06-23 21:34:26', '0000-00-00 00:00:00', 'dunlop.png'),
(16, 1, 'Dvf', 'Sunglasses', 1, '2020-06-23 21:34:41', '0000-00-00 00:00:00', 'dvf.png'),
(17, 1, 'Feel Good Collection', 'Sunglasses', 1, '2020-06-23 21:35:33', '0000-00-00 00:00:00', 'feelgoodcollection.png'),
(18, 1, 'Giorgio Armani', 'Sunglasses', 1, '2020-06-23 21:46:54', '0000-00-00 00:00:00', 'armani.png'),
(19, 1, 'Gucci', 'Sunglasses', 1, '2020-06-23 21:47:10', '0000-00-00 00:00:00', 'gucci.png'),
(20, 1, 'Hugo Boss', 'Sunglasses', 1, '2020-06-23 21:47:18', '0000-00-00 00:00:00', 'Hugo Boss.png'),
(21, 1, 'Jimmy Choo', 'Sunglasses', 1, '2020-06-23 21:47:47', '0000-00-00 00:00:00', 'Jimmy Choo.png'),
(22, 1, 'Kendall + Kylie', 'Sunglasses', 1, '2020-06-23 21:48:29', '0000-00-00 00:00:00', 'kendallkylie.png'),
(23, 1, 'Lacoste', 'Sunglasses', 1, '2020-06-23 21:48:57', '0000-00-00 00:00:00', 'Lacoste.png'),
(24, 1, 'Le Specs', 'Sunglasses', 1, '2020-06-23 21:49:48', '0000-00-00 00:00:00', 'lespecs.png'),
(25, 1, 'Linda Farrow', 'Sunglasses', 1, '2020-06-23 21:50:06', '0000-00-00 00:00:00', 'lindafarrow.png'),
(26, 1, 'Lipsy', 'Sunglasses', 1, '2020-06-23 21:50:23', '0000-00-00 00:00:00', 'lipsy.png'),
(27, 1, 'Michael Kors', 'Sunglasses', 1, '2020-06-23 21:50:54', '0000-00-00 00:00:00', 'michaelkors.png'),
(28, 1, 'Nike', 'Sunglasses', 1, '2020-06-23 21:51:15', '0000-00-00 00:00:00', 'nike.png'),
(29, 1, 'Oakley', 'Sunglasses', 1, '2020-06-23 21:52:21', '0000-00-00 00:00:00', 'oakley.png'),
(30, 1, 'O\'Neill', 'Sunglasses', 1, '2020-06-23 21:52:07', '0000-00-00 00:00:00', 'oneill.png\n'),
(31, 1, 'Oxydo', 'Sunglasses', 1, '2020-06-23 21:52:34', '0000-00-00 00:00:00', 'oxydo.png'),
(32, 1, 'Persol', 'Sunglasses', 1, '2020-06-23 21:52:47', '0000-00-00 00:00:00', 'persol.png'),
(33, 1, 'Polaroid', 'Sunglasses', 1, '2020-06-23 21:53:19', '0000-00-00 00:00:00', 'polaroid.png'),
(34, 1, 'Police', 'Sunglasses', 1, '2020-06-23 21:53:35', '0000-00-00 00:00:00', 'police.png'),
(35, 1, 'Prada', 'Sunglasses', 1, '2020-06-23 21:53:53', '0000-00-00 00:00:00', 'prada.png'),
(36, 1, 'Ray-Ban', 'Sunglasses', 1, '2020-06-23 21:54:17', '0000-00-00 00:00:00', 'rayban.png'),
(37, 1, 'Saint Laurent', 'Sunglasses', 1, '2020-06-23 21:54:40', '0000-00-00 00:00:00', 'saintlaurent.png'),
(38, 1, 'Stella McCartney', 'Sunglasses', 1, '2020-06-23 21:55:08', '0000-00-00 00:00:00', 'stellamccartney.png'),
(39, 1, 'Sunpocket', 'Sunglasses', 1, '2020-06-23 21:55:40', '0000-00-00 00:00:00', 'sunpocket.png'),
(40, 1, 'Superdry', 'Sunglasses', 1, '2020-06-23 21:55:59', '0000-00-00 00:00:00', 'superdry.png'),
(41, 1, 'Taylor Morris', 'Sunglasses', 1, '2020-06-23 21:56:15', '0000-00-00 00:00:00', 'taylormorris.png'),
(42, 1, 'Tommy Hilfiger', 'Sunglasses', 1, '2020-06-23 21:57:08', '0000-00-00 00:00:00', 'tommy-hilfiger.png'),
(43, 1, 'Valentino', 'Sunglasses', 1, '2020-06-23 21:57:25', '0000-00-00 00:00:00', 'Valentino.png'),
(44, 1, 'Versace', 'Sunglasses', 1, '2020-06-23 21:57:39', '0000-00-00 00:00:00', 'versace.png'),
(45, 1, 'Vogue', 'Sunglasses', 1, '2020-06-23 21:57:55', '0000-00-00 00:00:00', 'vogue.png'),
(53, 1, 'xc', 'Sunglasses', 1, '2021-01-11 03:54:29', '2021-01-11 03:54:29', '2021-01-07.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands_of_contact_lenses`
--

CREATE TABLE `brands_of_contact_lenses` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Brands_Name` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands_of_contact_lenses`
--

INSERT INTO `brands_of_contact_lenses` (`id`, `Product_id`, `Brands_Name`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', 0, '2020-10-03 00:10:54', '0000-00-00 00:00:00'),
(1, 1, 'Acuvue', 1, '2020-06-09 20:54:02', '0000-00-00 00:00:00'),
(2, 1, 'Air Optix', 1, '2020-06-09 20:54:47', '0000-00-00 00:00:00'),
(3, 1, 'Avaira', 1, '2020-06-09 20:55:56', '0000-00-00 00:00:00'),
(4, 1, 'Biofinity', 1, '2020-06-09 20:56:19', '0000-00-00 00:00:00'),
(5, 1, 'Biomedics', 1, '2020-06-09 20:56:43', '0000-00-00 00:00:00'),
(6, 1, 'Biotrue', 1, '2020-06-09 20:56:58', '0000-00-00 00:00:00'),
(7, 1, 'Clariti', 1, '2020-06-09 20:57:54', '0000-00-00 00:00:00'),
(8, 1, 'comfi', 1, '2020-06-09 20:58:25', '0000-00-00 00:00:00'),
(9, 1, 'Dailies', 1, '2020-06-09 20:58:39', '0000-00-00 00:00:00'),
(10, 1, 'Daysoft', 1, '2020-06-09 20:58:54', '0000-00-00 00:00:00'),
(11, 1, 'EasyVision', 1, '2020-06-09 20:59:07', '0000-00-00 00:00:00'),
(12, 1, 'Focus Dailies', 1, '2020-06-09 20:59:20', '0000-00-00 00:00:00'),
(13, 1, 'Frequency', 1, '2020-06-09 21:00:23', '0000-00-00 00:00:00'),
(14, 1, 'FreshLook', 1, '2020-06-09 21:00:32', '0000-00-00 00:00:00'),
(15, 1, 'MyDay', 1, '2020-06-09 21:00:42', '0000-00-00 00:00:00'),
(16, 1, 'Proclear', 1, '2020-06-09 21:00:55', '0000-00-00 00:00:00'),
(17, 1, 'PureVision', 1, '2020-06-09 21:01:08', '0000-00-00 00:00:00'),
(18, 1, 'SofLens', 1, '2020-06-09 21:01:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_merge`
--

CREATE TABLE `category_merge` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Product_merge` int(24) DEFAULT NULL,
  `type` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_merge`
--

INSERT INTO `category_merge` (`id`, `Product_id`, `Product_merge`, `type`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 0, 'none', 1, '2020-07-15 18:15:37', '2020-07-15 17:31:04'),
(1, 32, 1, 'cl', 1, '2020-07-17 00:50:47', '2020-07-16 18:34:47'),
(2, 33, 1, 'cl', 1, '2020-07-17 00:50:50', '2020-07-17 18:34:47'),
(3, 34, 1, 'cl', 1, '2020-07-17 00:50:52', '2020-07-18 18:34:47'),
(4, 35, 1, 'cl', 1, '2020-07-17 00:50:54', '2020-07-19 18:34:47'),
(5, 36, 1, 'cl', 1, '2020-07-20 18:35:35', '2020-07-20 18:34:47'),
(6, 37, 2, 'cl', 1, '2020-07-21 18:35:35', '2020-07-21 18:34:47'),
(7, 38, 2, 'cl', 1, '2020-07-22 18:35:35', '2020-07-22 18:34:47'),
(8, 39, 2, 'cl', 1, '2020-07-23 18:35:35', '2020-07-23 18:34:47'),
(9, 40, 2, 'cl', 1, '2020-07-24 18:35:35', '2020-07-24 18:34:47'),
(10, 41, 2, 'cl', 1, '2020-07-25 18:35:35', '2020-07-25 18:34:47'),
(11, 42, 1, 'cl', 1, '2020-07-26 18:35:35', '2020-07-26 18:34:47'),
(12, 43, 2, 'cl', 1, '2020-07-27 18:35:35', '2020-07-27 18:34:47'),
(13, 44, 2, 'cl', 1, '2020-07-28 18:35:35', '2020-07-28 18:34:47'),
(14, 45, 2, 'cl', 1, '2020-07-29 18:35:35', '2020-07-29 18:34:47'),
(15, 46, 3, 'cl', 1, '2020-07-30 18:35:35', '2020-07-30 18:34:47'),
(16, 47, 1, 'cl', 1, '2020-07-31 18:35:35', '2020-07-31 18:34:47'),
(17, 48, 1, 'cl', 1, '2020-08-01 18:35:35', '2020-08-01 18:34:47'),
(18, 49, 2, 'cl', 1, '2020-08-02 18:35:35', '2020-08-02 18:34:47'),
(19, 50, 2, 'cl', 1, '2020-08-03 18:35:35', '2020-08-03 18:34:47'),
(20, 51, 2, 'cl', 1, '2020-08-04 18:35:35', '2020-08-04 18:34:47'),
(21, 52, 2, 'cl', 1, '2020-08-05 18:35:35', '2020-08-05 18:34:47'),
(22, 53, 2, 'cl', 1, '2020-08-06 18:35:35', '2020-08-06 18:34:47'),
(23, 54, 1, 'cl', 1, '2020-08-07 18:35:35', '2020-08-07 18:34:47'),
(24, 55, 2, 'cl', 1, '2020-08-08 18:35:35', '2020-08-08 18:34:47'),
(25, 56, 2, 'cl', 1, '2020-08-09 18:35:35', '2020-08-09 18:34:47'),
(26, 57, 1, 'sl', 1, '2020-08-10 18:35:35', '2020-08-10 18:34:47'),
(27, 58, 2, 'sl', 1, '2020-08-11 18:35:35', '2020-08-11 18:34:47'),
(28, 59, 1, 'sl', 1, '2020-08-12 18:35:35', '2020-08-12 18:34:47'),
(29, 60, 5, 'sl', 1, '2020-08-13 18:35:35', '2020-08-13 18:34:47'),
(30, 61, 1, 'sl', 1, '2020-08-14 18:35:35', '2020-08-14 18:34:47'),
(31, 62, 1, 'sl', 1, '2020-08-15 18:35:35', '2020-08-15 18:34:47'),
(32, 63, 2, 'sl', 1, '2020-08-16 18:35:35', '2020-08-16 18:34:47'),
(33, 64, 4, 'sl', 1, '2020-08-17 18:35:35', '2020-08-17 18:34:47'),
(34, 65, 1, 'sl', 1, '2020-08-18 18:35:35', '2020-08-18 18:34:47'),
(35, 66, 1, 'sl', 1, '2020-08-19 18:35:35', '2020-08-19 18:34:47'),
(36, 67, 5, 'sl', 1, '2020-08-20 18:35:35', '2020-08-20 18:34:47'),
(37, 68, 1, 'sl', 1, '2020-08-21 18:35:35', '2020-08-21 18:34:47'),
(38, 69, 1, 'sl', 1, '2020-08-22 18:35:35', '2020-08-22 18:34:47'),
(39, 70, 3, 'sl', 1, '2020-08-23 18:35:35', '2020-08-23 18:34:47'),
(40, 71, 4, 'sl', 1, '2020-08-24 18:35:35', '2020-08-24 18:34:47'),
(41, 72, 1, 'sl', 1, '2020-08-25 18:35:35', '2020-08-25 18:34:47'),
(42, 73, 5, 'sl', 1, '2020-08-26 18:35:35', '2020-08-26 18:34:47'),
(43, 74, 3, 'sl', 1, '2020-08-27 18:35:35', '2020-08-27 18:34:47'),
(44, 75, 2, 'sl', 1, '2020-08-28 18:35:35', '2020-08-28 18:34:47'),
(45, 76, 2, 'sl', 1, '2020-08-29 18:35:35', '2020-08-29 18:34:47'),
(46, 77, 1, 'sl', 1, '2020-08-30 18:35:35', '2020-08-30 18:34:47'),
(47, 78, 5, 'sl', 1, '2020-08-31 18:35:35', '2020-08-31 18:34:47'),
(48, 79, 1, 'sl', 1, '2020-09-01 18:35:35', '2020-09-01 18:34:47'),
(49, 80, 3, 'sl', 1, '2020-09-02 18:35:35', '2020-09-02 18:34:47'),
(50, 81, 5, 'sl', 1, '2020-09-03 18:35:35', '2020-09-03 18:34:47'),
(51, 82, 1, 'sl', 1, '2020-09-04 18:35:35', '2020-09-04 18:34:47'),
(52, 83, 1, 'sl', 1, '2020-09-05 18:35:35', '2020-09-05 18:34:47'),
(53, 84, 1, 'sl', 1, '2020-09-06 18:35:35', '2020-09-06 18:34:47'),
(54, 85, 1, 'ec', 1, '2020-09-07 18:35:35', '2020-09-07 18:34:47'),
(55, 86, 4, 'ec', 1, '2020-09-08 18:35:35', '2020-09-08 18:34:47'),
(56, 87, 3, 'ec', 1, '2020-09-09 18:35:35', '2020-09-09 18:34:47'),
(57, 88, 1, 'ec', 1, '2020-09-10 18:35:35', '2020-09-10 18:34:47'),
(58, 89, 3, 'ec', 1, '2020-09-11 18:35:35', '2020-09-11 18:34:47'),
(59, 90, 1, 'ec', 1, '2020-09-12 18:35:35', '2020-09-12 18:34:47'),
(60, 91, 4, 'ec', 1, '2020-09-13 18:35:35', '2020-09-13 18:34:47'),
(61, 92, 1, 'ec', 1, '2020-09-13 18:35:35', '2020-09-13 18:34:47'),
(62, 92, 3, 'ec', 1, '2020-09-14 18:35:35', '2020-09-14 18:34:47'),
(63, 93, 1, 'ec', 1, '2020-09-14 18:35:35', '2020-09-14 18:34:47'),
(64, 93, 3, 'ec', 1, '2020-09-14 18:35:35', '2020-09-14 18:34:47'),
(65, 94, 2, 'ec', 1, '2020-09-14 18:35:35', '2020-09-14 18:34:47'),
(66, 95, 4, 'ec', 1, '2020-09-14 18:35:35', '2020-09-14 18:34:47'),
(67, 96, 3, 'ec', 1, '2020-09-14 18:35:35', '2020-09-14 18:34:47'),
(68, 97, 3, 'ec', 1, '2020-09-14 18:35:35', '2020-09-14 18:34:47'),
(69, 97, 1, 'ec', 1, '2020-09-19 18:35:35', '2020-09-19 18:34:47'),
(70, 98, 2, 'ec', 1, '2020-09-20 18:35:35', '2020-09-20 18:34:47'),
(71, 99, 3, 'ec', 1, '2020-09-21 18:35:35', '2020-09-21 18:34:47'),
(72, 100, 1, 'ec', 1, '2020-09-22 18:35:35', '2020-09-22 18:34:47'),
(73, 101, 1, 'ec', 1, '2020-09-23 18:35:35', '2020-09-23 18:34:47'),
(74, 102, 1, 'ec', 1, '2020-09-24 18:35:35', '2020-09-24 18:34:47'),
(75, 103, 1, 'ec', 1, '2020-09-25 18:35:35', '2020-09-25 18:34:47'),
(76, 104, 2, 'ec', 1, '2020-09-26 18:35:35', '2020-09-26 18:34:47'),
(77, 105, 3, 'ec', 1, '2020-09-27 18:35:35', '2020-09-27 18:34:47'),
(78, 106, 1, 'ec', 1, '2020-09-28 18:35:35', '2020-09-28 18:34:47'),
(79, 107, 1, 'ec', 1, '2020-09-29 18:35:35', '2020-09-29 18:34:47'),
(80, 108, 4, 'ec', 1, '2020-09-30 18:35:35', '2020-09-30 18:34:47'),
(81, 109, 1, 'ec', 1, '2020-10-01 18:35:35', '2020-10-01 18:34:47'),
(82, 110, 3, 'ec', 1, '2020-10-02 18:35:35', '2020-10-02 18:34:47'),
(83, 111, 1, 'ec', 1, '2020-10-03 18:35:35', '2020-10-03 18:34:47'),
(84, 112, 2, 'ec', 1, '2020-10-04 18:35:35', '2020-10-04 18:34:47'),
(85, 32, 4, 'cl', 1, '2020-08-04 03:27:56', '2020-08-04 03:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

CREATE TABLE `colours` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Side_Select` varchar(225) DEFAULT NULL,
  `Color` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`id`, `Product_id`, `Side_Select`, `Color`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 'none', 'none', 0, '2020-08-10 01:34:49', '2020-08-04 03:13:05'),
(1, 2, 'left', 'Green', 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(2, 2, 'right', 'Green', 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(9, 3, 'left', 'Pink', 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(10, 3, 'right', 'Pink', 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(14, 2, 'right', 'Hazel', 1, '2020-10-24 00:29:36', '2020-10-24 00:29:36'),
(32, 2, 'left', 'Blue', 1, '2020-10-25 00:47:11', '2020-10-25 00:47:11'),
(37, 147, 'left', 'Green', 1, '2020-11-08 10:41:39', '2020-11-08 10:41:39'),
(38, 147, 'right', 'Green', 1, '2020-11-08 10:41:50', '2020-11-08 10:41:50'),
(39, 147, 'right', 'Hazel', 1, '2020-11-08 10:41:58', '2020-11-08 10:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `contact_lense_color`
--

CREATE TABLE `contact_lense_color` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_lense_color`
--

INSERT INTO `contact_lense_color` (`id`, `name`, `image`, `active`, `created_at`, `updated_at`) VALUES
(0, 'none', 'none', 0, '2020-10-24 03:17:02', '2020-10-14 16:07:23'),
(1, 'Blue', 'blue-contact-lenses.png', 1, '2020-10-24 03:27:18', '2020-10-14 16:07:23'),
(2, 'Brown', 'brown-contact-lenses.png', 1, '2020-10-24 03:27:25', '2020-10-14 16:07:23'),
(3, 'Green', 'green-contact-lenses.png', 1, '2020-10-24 03:27:30', '2020-08-04 03:13:05'),
(4, 'Grey', 'grey-contact-lenses.png', 1, '2020-10-24 03:27:34', '2020-08-27 07:05:38'),
(5, 'Hazel', 'hazel-contact-lenses.png', 1, '2020-10-24 03:27:38', '2020-10-14 16:07:23'),
(6, 'Violet', 'violet-contact-lenses.png', 1, '2020-10-24 03:27:45', '2020-08-04 03:13:05'),
(7, 'Multi Colour Pack', 'rainbow-colours-drop-down-img.png', 1, '2020-10-24 03:28:08', '2020-08-27 07:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(225) DEFAULT NULL,
  `last_name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `presciption` varchar(225) NOT NULL,
  `country` varchar(225) DEFAULT NULL,
  `address1` varchar(225) DEFAULT NULL,
  `address2` varchar(225) DEFAULT NULL,
  `city_town` varchar(225) DEFAULT NULL,
  `country_state` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `presciption`, `country`, `address1`, `address2`, `city_town`, `country_state`, `phone`, `active`, `created_at`, `updated_at`) VALUES
(0, 'none', 'none', 'none@none.com', 'none', '', 'none', 'none', 'none', 'none', 'none', 'none', 0, '2020-09-24 03:59:18', '0000-00-00 00:00:00'),
(5, 'sdfasd', 'asdad', 'asd123@test.com', 'asd321', '', 'sadasdas', 'dsadasd', 'asdasd', 'asdasdas', 'sadasdas', 'dasdasd', 1, '2021-04-08 19:16:09', '2021-04-01 04:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `customer_review`
--

CREATE TABLE `customer_review` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Customer_id` int(24) DEFAULT NULL,
  `Customer_review` varchar(225) DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `Approve` int(11) NOT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_review`
--

INSERT INTO `customer_review` (`id`, `Product_id`, `Customer_id`, `Customer_review`, `stars`, `Approve`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 0, 'none', 0, 0, 0, '2020-08-31 04:45:39', '0000-00-00 00:00:00'),
(1, 1, 1, 'You Guys Are Awesome', 3, 1, 1, '2021-03-27 13:59:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cylinder`
--

CREATE TABLE `cylinder` (
  `id` int(11) NOT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `Side_Select` varchar(225) DEFAULT NULL,
  `Value` double DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cylinder`
--

INSERT INTO `cylinder` (`id`, `Product_id`, `Side_Select`, `Value`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 'none', 0, 0, '2020-08-11 04:53:12', '2020-08-04 03:13:05'),
(7, 3, 'left', 5, 1, '2020-10-23 18:53:34', '2020-06-10 02:29:47'),
(8, 3, 'left', 0, 1, '2020-10-23 18:52:48', '2020-06-10 02:29:47'),
(9, 3, 'left', 5, 1, '2020-10-23 18:53:38', '2020-06-10 02:29:47'),
(10, 3, 'left', 6, 1, '2020-10-23 18:53:41', '2020-06-10 02:29:47'),
(11, 3, 'right', 9, 1, '2020-10-23 18:53:42', '2020-06-10 02:29:47'),
(12, 3, 'right', 7, 1, '2020-10-23 18:53:45', '2020-06-10 02:29:47'),
(13, 4, 'left', -5.5, 1, '2020-10-23 18:53:48', '2020-06-10 02:29:47'),
(14, 3, 'left', -6.75, 1, '2020-10-23 18:53:54', '2020-06-10 02:29:47'),
(16, 4, 'right', 45, 1, '2020-10-23 18:53:57', '2020-06-10 02:29:47'),
(17, 4, 'right', 65, 1, '2020-10-23 18:53:59', '2020-06-10 02:29:47'),
(18, 4, 'right', 20, 1, '2020-10-23 18:54:01', '2020-06-10 02:29:47'),
(19, 1, 'left', 6, 1, '2020-10-23 18:54:04', '2020-06-10 02:29:47'),
(20, 1, 'left', 1, 1, '2020-10-23 18:54:08', '2020-06-10 02:29:47'),
(21, 1, 'left', 3, 1, '2020-10-23 18:54:10', '2020-06-10 02:29:47'),
(22, 1, 'right', 4, 1, '2020-10-23 18:54:12', '2020-06-10 02:29:47'),
(23, 1, 'right', 5, 1, '2020-10-23 18:54:14', '2020-06-10 02:29:47'),
(24, 1, 'right', 6, 1, '2020-10-23 18:54:16', '2020-06-10 02:29:47'),
(53, 2, 'left', -1, 1, '2020-10-23 15:55:26', '2020-10-23 15:55:26'),
(54, 2, 'left', -0.75, 1, '2020-10-23 15:55:26', '2020-10-23 15:55:26'),
(55, 2, 'left', -0.5, 1, '2020-10-23 15:55:26', '2020-10-23 15:55:26'),
(56, 2, 'right', -1.5, 1, '2020-10-23 15:55:48', '2020-10-23 15:55:48'),
(57, 2, 'right', -1.25, 1, '2020-10-23 15:55:48', '2020-10-23 15:55:48'),
(58, 2, 'right', -1, 1, '2020-10-23 15:55:48', '2020-10-23 15:55:48'),
(59, 2, 'right', -0.75, 1, '2020-10-23 15:55:48', '2020-10-23 15:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `diameter`
--

CREATE TABLE `diameter` (
  `id` int(11) NOT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `Side_Select` varchar(225) DEFAULT NULL,
  `Value` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diameter`
--

INSERT INTO `diameter` (`id`, `Product_id`, `Side_Select`, `Value`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 'none', 'none', 0, '2020-08-10 01:20:21', '2020-08-04 03:13:05'),
(7, 3, 'left', '10.00', 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(8, 3, 'left', '23.00', 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(9, 3, 'left', '5.00', 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(10, 3, 'left', '10.00', 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(11, 3, 'right', '25.00', 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(12, 3, 'right', '30.00', 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(19, 1, 'left', '10.00', 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(22, 1, 'right', '5.00', 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(27, 2, 'left', '13.1', 1, '2020-10-22 21:16:45', '2020-10-22 21:16:45'),
(28, 2, 'left', '13.2', 1, '2020-10-22 21:16:45', '2020-10-22 21:16:45'),
(30, 2, 'left', '13.4', 1, '2020-10-22 21:16:46', '2020-10-22 21:16:46'),
(31, 2, 'left', '13.5', 1, '2020-10-22 21:16:46', '2020-10-22 21:16:46'),
(32, 2, 'left', '13.6', 1, '2020-10-22 21:16:46', '2020-10-22 21:16:46'),
(33, 2, 'right', '13.2', 1, '2020-10-22 21:16:54', '2020-10-22 21:16:54'),
(34, 2, 'right', '13.3', 1, '2020-10-22 21:16:54', '2020-10-22 21:16:54'),
(36, 2, 'right', '13', 1, '2020-10-23 12:47:53', '2020-10-23 12:47:53'),
(37, 2, 'left', '12', 1, '2020-10-23 12:48:00', '2020-10-23 12:48:00'),
(38, 2, 'left', '15.8', 1, '2020-10-23 12:48:12', '2020-10-23 12:48:12'),
(39, 2, 'left', '15.9', 1, '2020-10-23 12:48:13', '2020-10-23 12:48:13'),
(40, 2, 'right', '14.8', 1, '2020-10-23 12:48:26', '2020-10-23 12:48:26'),
(41, 2, 'right', '14.9', 1, '2020-10-23 12:48:26', '2020-10-23 12:48:26'),
(42, 2, 'right', '15', 1, '2020-10-23 12:48:27', '2020-10-23 12:48:27'),
(43, 2, 'right', '15.1', 1, '2020-10-23 12:48:27', '2020-10-23 12:48:27'),
(44, 2, 'right', '15.2', 1, '2020-10-23 12:48:27', '2020-10-23 12:48:27'),
(45, 2, 'right', '15.3', 1, '2020-10-23 12:48:27', '2020-10-23 12:48:27'),
(46, 2, 'right', '15.4', 1, '2020-10-23 12:48:27', '2020-10-23 12:48:27'),
(47, 2, 'right', '15.5', 1, '2020-10-23 12:48:27', '2020-10-23 12:48:27'),
(48, 2, 'right', '15.6', 1, '2020-10-23 12:48:28', '2020-10-23 12:48:28'),
(50, 2, 'right', '15.8', 1, '2020-10-23 12:48:28', '2020-10-23 12:48:28'),
(51, 2, 'right', '14.8', 1, '2020-10-23 12:50:36', '2020-10-23 12:50:36'),
(52, 2, 'right', '14.9', 1, '2020-10-23 12:50:36', '2020-10-23 12:50:36'),
(53, 2, 'right', '15', 1, '2020-10-23 12:50:37', '2020-10-23 12:50:37'),
(54, 2, 'right', '15.1', 1, '2020-10-23 12:50:37', '2020-10-23 12:50:37'),
(55, 2, 'right', '15.2', 1, '2020-10-23 12:50:37', '2020-10-23 12:50:37'),
(56, 2, 'right', '15.3', 1, '2020-10-23 12:50:37', '2020-10-23 12:50:37'),
(57, 2, 'right', '15.4', 1, '2020-10-23 12:50:37', '2020-10-23 12:50:37'),
(58, 2, 'right', '15.5', 1, '2020-10-23 12:50:38', '2020-10-23 12:50:38'),
(59, 2, 'right', '15.6', 1, '2020-10-23 12:50:38', '2020-10-23 12:50:38'),
(60, 2, 'right', '15.7', 1, '2020-10-23 12:50:38', '2020-10-23 12:50:38'),
(61, 2, 'right', '15.8', 1, '2020-10-23 12:50:38', '2020-10-23 12:50:38'),
(62, 2, 'right', '0', 1, '2020-10-23 20:01:48', '2020-10-23 20:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `eye_care`
--

CREATE TABLE `eye_care` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Eye_Care` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eye_care`
--

INSERT INTO `eye_care` (`id`, `Product_id`, `Eye_Care`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', 0, '2020-12-10 20:30:22', '0000-00-00 00:00:00'),
(1, 1, 'Eye Drops', 1, '2020-06-10 07:59:08', '0000-00-00 00:00:00'),
(2, 1, 'Eye Accessories', 1, '2020-06-10 07:59:29', '0000-00-00 00:00:00'),
(3, 1, 'Dry Eye Treatments', 1, '2020-06-10 07:59:52', '0000-00-00 00:00:00'),
(4, 1, 'Supplements & Hygiene', 1, '2020-06-10 08:00:34', '0000-00-00 00:00:00'),
(5, 1, 'Travel Essentials', 1, '2020-06-10 08:01:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `frame_color`
--

CREATE TABLE `frame_color` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Frame_Color` varchar(225) DEFAULT NULL,
  `image_link` varchar(225) DEFAULT NULL,
  `Type` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frame_color`
--

INSERT INTO `frame_color` (`id`, `Product_id`, `Frame_Color`, `image_link`, `Type`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', NULL, '', 1, '2020-06-10 02:07:34', '0000-00-00 00:00:00'),
(1, 1, 'Black', 'black.png', 'Glasses', 1, '2020-06-16 07:46:29', '0000-00-00 00:00:00'),
(2, 1, 'Blue', 'blue.png', 'Glasses', 1, '2020-06-16 07:46:37', '0000-00-00 00:00:00'),
(3, 1, 'Bronze', 'bronze.png', 'Glasses', 1, '2020-06-16 07:46:45', '0000-00-00 00:00:00'),
(4, 1, 'Brown', 'brown-gradient.png', 'Glasses', 1, '2020-06-16 07:47:02', '0000-00-00 00:00:00'),
(5, 1, 'Gold', 'gold.png', 'Glasses', 1, '2020-06-16 07:47:22', '0000-00-00 00:00:00'),
(6, 1, 'Grey', 'grey.png', 'Glasses', 1, '2020-06-16 07:47:31', '0000-00-00 00:00:00'),
(7, 1, 'Gunmetal', 'gunmetal.png', 'Glasses', 1, '2020-06-16 07:47:50', '0000-00-00 00:00:00'),
(8, 1, 'Havana', 'tortoise.png', 'Glasses', 1, '2020-06-16 07:49:35', '0000-00-00 00:00:00'),
(9, 1, 'Navy', 'navy.png', 'Glasses', 1, '2020-06-16 07:50:02', '0000-00-00 00:00:00'),
(10, 1, 'Pink', 'pink.png', 'Glasses', 1, '2020-06-16 07:50:10', '0000-00-00 00:00:00'),
(11, 1, 'Purple', 'purple.png', 'Glasses', 1, '2020-06-16 07:50:21', '0000-00-00 00:00:00'),
(12, 1, 'Rose Gold', 'rosegold.png', 'Glasses', 1, '2020-06-16 07:50:44', '0000-00-00 00:00:00'),
(13, 1, 'Silver', 'silver.png', 'Glasses', 1, '2020-06-16 07:50:54', '0000-00-00 00:00:00'),
(14, 1, 'Transparent', 'clear.png', 'Glasses', 1, '2020-06-16 07:51:17', '0000-00-00 00:00:00'),
(15, 1, 'Black', 'black.png', 'Sunglasses', 1, '2020-06-16 08:38:42', '0000-00-00 00:00:00'),
(16, 1, 'Blue', 'blue.png', 'Sunglasses', 1, '2020-06-16 08:39:16', '0000-00-00 00:00:00'),
(17, 1, 'Brown', 'tortoise.png', 'Sunglasses', 1, '2020-06-16 09:05:54', '0000-00-00 00:00:00'),
(18, 1, 'Gold', 'gold.png', 'Sunglasses', 1, '2020-06-16 09:06:22', '0000-00-00 00:00:00'),
(19, 1, 'Gray & Silver', 'grey-gradient.png', 'Sunglasses', 1, '2020-06-16 09:06:39', '0000-00-00 00:00:00'),
(20, 1, 'Green', 'green.png', 'Sunglasses', 1, '2020-06-16 09:07:10', '0000-00-00 00:00:00'),
(21, 1, 'Orange', 'orange.png', 'Sunglasses', 1, '2020-06-16 09:07:26', '0000-00-00 00:00:00'),
(22, 1, 'Pink & Violet', 'pink.png', 'Sunglasses', 1, '2020-06-16 09:07:54', '0000-00-00 00:00:00'),
(23, 1, 'Red', 'red.png', 'Sunglasses', 1, '2020-06-16 09:08:04', '0000-00-00 00:00:00'),
(24, 1, 'White', 'white.png', 'Sunglasses', 1, '2020-06-16 09:08:16', '0000-00-00 00:00:00'),
(25, 1, 'Yellow', 'yellow.png', 'Sunglasses', 1, '2020-06-16 09:10:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `frame_size`
--

CREATE TABLE `frame_size` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Frame_Size` varchar(225) DEFAULT NULL,
  `Type` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frame_size`
--

INSERT INTO `frame_size` (`id`, `Product_id`, `Frame_Size`, `Type`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', NULL, 1, '2020-06-10 02:09:31', '0000-00-00 00:00:00'),
(1, 1, 'Large', 'Glasses', 1, '2020-07-11 16:29:48', '0000-00-00 00:00:00'),
(2, 1, 'Medium', 'Glasses', 1, '2020-07-11 16:29:50', '0000-00-00 00:00:00'),
(3, 1, 'Small', 'Glasses', 1, '2020-07-11 16:29:54', '0000-00-00 00:00:00'),
(4, 1, 'Large', 'Sunglasses', 1, '2020-07-11 16:31:15', '2020-07-11 16:31:15'),
(5, 1, 'Medium', 'Sunglasses', 1, '2020-07-11 16:31:41', '2020-07-11 16:31:41'),
(6, 1, 'Small', 'Sunglasses', 1, '2020-07-11 16:32:06', '2020-07-11 16:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `further_optical_advice`
--

CREATE TABLE `further_optical_advice` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Product_Optical_Advice` text DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `further_optical_advice`
--

INSERT INTO `further_optical_advice` (`id`, `Product_id`, `Product_Optical_Advice`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 'none', 1, '2020-08-18 10:42:52', '0000-00-00 00:00:00'),
(1, 1, 'Hello World', 1, '2020-08-13 04:04:02', '0000-00-00 00:00:00'),
(2, 2, '<b>Hexagonal</b>', 1, '2020-10-25 04:42:41', '2020-10-25 00:42:28'),
(3, 147, 'asdac', 1, '2020-11-11 08:25:03', '2020-11-11 08:25:03'),
(4, 5, 'xas', 1, '2020-12-10 09:08:20', '2020-12-10 09:08:20'),
(5, 42, 'asd', 1, '2020-12-10 10:12:50', '2020-12-10 10:12:50'),
(6, 103, 'ssaa', 1, '2020-12-15 16:29:18', '2020-12-15 16:29:18');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Image_Link` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `Product_id`, `Image_Link`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 'none', 1, '2020-08-31 04:39:49', '0000-00-00 00:00:00'),
(1, 9, 'FGC-Hugo-C1-Light-Gunmetal-011578-171.jpg', 1, '2020-07-07 07:34:25', '0000-00-00 00:00:00'),
(2, 9, 'FGC-Hugo-C1-Light-Gunmetal-031578-173.jpg', 1, '2020-07-07 07:35:02', '0000-00-00 00:00:00'),
(3, 9, 'FGC-Hugo-C1-Light-Gunmetal-041578-174.jpg', 1, '2020-07-07 07:35:21', '0000-00-00 00:00:00'),
(4, 9, 'FGC-Hugo-C1-Light-Gunmetal-051578-175.jpg', 1, '2020-07-07 07:35:48', '0000-00-00 00:00:00'),
(5, 9, 'case_fgc_011750-1891750-189.jpg', 1, '2020-07-07 07:36:03', '0000-00-00 00:00:00'),
(6, 2, 'dailies-02.jpg', 1, '2020-10-16 07:18:35', '0000-00-00 00:00:00'),
(7, 2, 'dailies-03.jpg', 1, '2020-10-16 07:18:53', '0000-00-00 00:00:00'),
(26, 147, 'acuvue-oasys-with-hydraluxe-1-day-90-pack-box1029-135.jpg', 1, '2020-11-08 14:35:53', '0000-00-00 00:00:00'),
(27, 147, 'is_f.jpg', 1, '2020-11-11 12:33:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Gender` varchar(225) DEFAULT NULL,
  `Type` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `Product_id`, `Gender`, `Type`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', '', 0, '2020-12-16 02:30:19', '0000-00-00 00:00:00'),
(1, 1, 'Women', 'Glasses', 1, '2020-06-10 11:44:27', '0000-00-00 00:00:00'),
(2, 1, 'Men', 'Glasses', 1, '2020-06-10 11:44:41', '0000-00-00 00:00:00'),
(3, 1, 'Unisex', 'Glasses', 1, '2020-06-10 11:44:54', '0000-00-00 00:00:00'),
(4, 1, 'Men', 'Sunglasses', 1, '2020-06-11 02:21:08', '0000-00-00 00:00:00'),
(5, 1, 'Women', 'Sunglasses', 1, '2020-06-11 02:20:41', '0000-00-00 00:00:00'),
(6, 1, 'Unisex', 'Sunglasses', 1, '2020-06-11 08:14:31', '0000-00-00 00:00:00'),
(10, 1, 'xc', 'Sunglasses', 1, '2021-01-11 03:54:22', '2021-01-11 03:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `labname` varchar(100) NOT NULL,
  `contactperson` varchar(100) NOT NULL,
  `accountnumber` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `labname`, `contactperson`, `accountnumber`, `address`, `phone`, `email`, `active`, `created_at`, `updated_at`) VALUES
(3, 'Naeem35', '50', 'wdqwe', 'edwed', 'dwedew', 'edwed', 1, '2021-03-27 04:36:18', '2021-03-27 09:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `lenses_visions_price`
--

CREATE TABLE `lenses_visions_price` (
  `id` int(11) NOT NULL,
  `type` varchar(225) DEFAULT NULL,
  `sv_distance` double DEFAULT NULL,
  `sv_reading` double DEFAULT NULL,
  `sv_computer_work` double DEFAULT NULL,
  `sv_glasses_only` double DEFAULT NULL,
  `sv_standard_15` double DEFAULT NULL,
  `sv_poly_159` double DEFAULT NULL,
  `sv_hi_index_16` double DEFAULT NULL,
  `sv_hi_index_167` double DEFAULT NULL,
  `sv_hi_index_174` double DEFAULT NULL,
  `sv_alize` double DEFAULT NULL,
  `sv_forte` double DEFAULT NULL,
  `sv_transition` double DEFAULT NULL,
  `sv_polarised` double DEFAULT NULL,
  `sv_uv` double DEFAULT NULL,
  `sv_tint` double DEFAULT NULL,
  `sv_clear` double NOT NULL,
  `b_28mm` double DEFAULT NULL,
  `b_28mm_blended` double DEFAULT NULL,
  `b_35mm` double DEFAULT NULL,
  `b_full_width` double DEFAULT NULL,
  `b_standard_15` double DEFAULT NULL,
  `b_poly_159` double DEFAULT NULL,
  `b_hi_index_16` double DEFAULT NULL,
  `b_hi_index_167` double DEFAULT NULL,
  `b_hi_index_174` double DEFAULT NULL,
  `b_alize` double DEFAULT NULL,
  `b_forte` double DEFAULT NULL,
  `b_transition` double DEFAULT NULL,
  `b_polarised` double DEFAULT NULL,
  `b_uv` double DEFAULT NULL,
  `b_tint` double DEFAULT NULL,
  `b_clear` double NOT NULL,
  `v_standard` double DEFAULT NULL,
  `v_better` double DEFAULT NULL,
  `v_best` double DEFAULT NULL,
  `v_standard_15` double DEFAULT NULL,
  `v_poly_159` double DEFAULT NULL,
  `v_hi_index_16` double DEFAULT NULL,
  `v_hi_index_167` double DEFAULT NULL,
  `v_hi_index_174` double DEFAULT NULL,
  `v_alize` double DEFAULT NULL,
  `v_forte` double DEFAULT NULL,
  `v_transition` double DEFAULT NULL,
  `v_polarised` double DEFAULT NULL,
  `v_uv` double DEFAULT NULL,
  `v_tint` double DEFAULT NULL,
  `v_clear` double NOT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lenses_visions_price`
--

INSERT INTO `lenses_visions_price` (`id`, `type`, `sv_distance`, `sv_reading`, `sv_computer_work`, `sv_glasses_only`, `sv_standard_15`, `sv_poly_159`, `sv_hi_index_16`, `sv_hi_index_167`, `sv_hi_index_174`, `sv_alize`, `sv_forte`, `sv_transition`, `sv_polarised`, `sv_uv`, `sv_tint`, `sv_clear`, `b_28mm`, `b_28mm_blended`, `b_35mm`, `b_full_width`, `b_standard_15`, `b_poly_159`, `b_hi_index_16`, `b_hi_index_167`, `b_hi_index_174`, `b_alize`, `b_forte`, `b_transition`, `b_polarised`, `b_uv`, `b_tint`, `b_clear`, `v_standard`, `v_better`, `v_best`, `v_standard_15`, `v_poly_159`, `v_hi_index_16`, `v_hi_index_167`, `v_hi_index_174`, `v_alize`, `v_forte`, `v_transition`, `v_polarised`, `v_uv`, `v_tint`, `v_clear`, `active`, `created_at`, `updated_at`) VALUES
(1, 'none', 0, 0, 0, 0, 7, 31, 36, 78, 91, 11, 55, 51, 52, 55, 15, 25, 35, 45, 55, 65, 1, 333, 3555, 5555, 0, 222, 44111, 6565, 0, 333, 1011, 0, 55, 145, 200, 0, 30, 35, 75, 90, 15, 3555, 0, 55, 11, 15, 60, 0, '2020-09-11 13:25:49', '2020-08-04 03:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `lens_colour`
--

CREATE TABLE `lens_colour` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `LENS_COLOUR` varchar(225) DEFAULT NULL,
  `image_link` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lens_colour`
--

INSERT INTO `lens_colour` (`id`, `Product_id`, `LENS_COLOUR`, `image_link`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', NULL, 0, '2021-01-08 05:36:32', '0000-00-00 00:00:00'),
(1, 1, 'Black', 'black.png', 1, '2020-06-16 14:04:11', '0000-00-00 00:00:00'),
(2, 1, 'Blue', 'blue.png', 1, '2020-06-16 14:04:17', '0000-00-00 00:00:00'),
(3, 1, 'Brown', 'orange-gradient.png', 1, '2020-06-16 14:05:05', '0000-00-00 00:00:00'),
(4, 1, 'Gold & Yellow', 'gold.png', 1, '2020-06-16 14:05:02', '0000-00-00 00:00:00'),
(5, 1, 'Gray & Silver', 'grey-gradient.png', 1, '2020-06-16 14:05:37', '0000-00-00 00:00:00'),
(6, 1, 'Green', 'green.png', 1, '2020-06-16 14:05:49', '0000-00-00 00:00:00'),
(7, 1, 'Orange', 'orange.png', 1, '2020-06-16 14:05:58', '0000-00-00 00:00:00'),
(8, 1, 'Red', 'red.png', 1, '2020-06-16 14:06:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lens_size`
--

CREATE TABLE `lens_size` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `LENS_SIZE` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lens_size`
--

INSERT INTO `lens_size` (`id`, `Product_id`, `LENS_SIZE`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', 0, '2021-01-11 07:31:32', '0000-00-00 00:00:00'),
(1, 1, 'Large', 1, '2020-06-16 10:37:50', '0000-00-00 00:00:00'),
(2, 1, 'Medium', 1, '2020-06-16 10:51:39', '0000-00-00 00:00:00'),
(3, 1, 'Small', 1, '2020-06-16 10:52:48', '0000-00-00 00:00:00'),
(6, 1, 'xc', 1, '2021-01-11 03:54:59', '2021-01-11 03:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Material` varchar(225) DEFAULT NULL,
  `Type` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `Product_id`, `Material`, `Type`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', '', 1, '2020-06-10 02:25:23', '0000-00-00 00:00:00'),
(1, 1, 'Acetate', 'Glasses', 1, '2020-06-10 09:37:31', '0000-00-00 00:00:00'),
(2, 1, 'Metal', 'Glasses', 1, '2020-06-10 09:37:51', '0000-00-00 00:00:00'),
(3, 1, 'Monel', 'Glasses', 1, '2020-06-10 09:38:02', '0000-00-00 00:00:00'),
(4, 1, 'Plastic', 'Glasses', 1, '2020-06-10 09:38:10', '0000-00-00 00:00:00'),
(5, 1, 'Rubber', 'Glasses', 1, '2020-06-10 09:38:17', '0000-00-00 00:00:00'),
(6, 1, 'Stainless Steel', 'Glasses', 1, '2020-06-10 09:38:24', '0000-00-00 00:00:00'),
(7, 1, 'Acetate', 'Sunglasses', 1, '2020-06-11 04:14:18', '0000-00-00 00:00:00'),
(8, 1, 'Plastic', 'Sunglasses', 1, '2020-06-11 04:14:26', '0000-00-00 00:00:00'),
(9, 1, 'Polycarbonate', 'Sunglasses', 1, '2020-06-11 04:14:35', '0000-00-00 00:00:00'),
(10, 1, 'Metal', 'Sunglasses', 1, '2020-06-11 04:14:43', '0000-00-00 00:00:00'),
(11, 1, 'Nylon', 'Sunglasses', 1, '2020-06-11 04:14:50', '0000-00-00 00:00:00'),
(12, 1, 'Cridal', 'Sunglasses', 1, '2020-06-11 04:14:58', '0000-00-00 00:00:00'),
(13, 1, 'Injected', 'Sunglasses', 1, '2020-06-11 04:15:06', '0000-00-00 00:00:00'),
(14, 1, 'Titanium', 'Sunglasses', 1, '2020-06-11 04:15:13', '0000-00-00 00:00:00'),
(18, 1, 'xc', 'Sunglasses', 1, '2021-01-11 03:55:03', '2021-01-11 03:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `number_of_pack`
--

CREATE TABLE `number_of_pack` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `NOP_Merge` int(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `number_of_pack`
--

INSERT INTO `number_of_pack` (`id`, `Product_id`, `NOP_Merge`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 0, 0, '2020-08-15 06:10:45', '0000-00-00 00:00:00'),
(1, 1, 2, 1, '2020-08-15 06:11:09', '2020-08-04 03:13:05'),
(3, 1, 4, 1, '2020-10-24 23:51:14', '2020-10-24 23:51:14'),
(5, 147, 32, 1, '2020-11-08 10:44:00', '2020-11-08 10:44:00'),
(6, 147, 32, 1, '2020-11-08 17:06:47', '2020-11-08 17:06:47'),
(12, 57, 5, 1, '2021-01-04 01:31:41', '2021-01-04 01:31:41'),
(13, 6, 59, 1, '2021-01-04 01:35:00', '2021-01-04 01:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `code` varchar(225) DEFAULT NULL,
  `type` varchar(225) DEFAULT NULL,
  `minimum_order_amount` int(24) DEFAULT NULL,
  `discount_value` int(24) DEFAULT NULL,
  `porv` varchar(225) DEFAULT NULL,
  `valid_from` varchar(225) DEFAULT NULL,
  `valid_upto` varchar(225) DEFAULT NULL,
  `offer_active` int(24) DEFAULT NULL,
  `description` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `name`, `code`, `type`, `minimum_order_amount`, `discount_value`, `porv`, `valid_from`, `valid_upto`, `offer_active`, `description`, `active`, `created_at`, `updated_at`) VALUES
(2, 'Naeem', '123', '2for1', 12, 22, NULL, '2021-04-01', '2021-03-11', 1, 'qqwedwqed', 1, '2021-03-27 13:08:19', '2021-03-27 09:08:19'),
(3, 'asd', '50', '2for1', 50, 12, NULL, '2021-03-20', '2021-03-16', 1, '1255', 1, '2021-03-27 13:58:41', '2021-03-27 09:58:41');

-- --------------------------------------------------------

--
-- Table structure for table `optician_brands`
--

CREATE TABLE `optician_brands` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Optician_Brands` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optician_brands`
--

INSERT INTO `optician_brands` (`id`, `Product_id`, `Optician_Brands`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', 0, '2020-10-15 16:47:56', '0000-00-00 00:00:00'),
(1, 1, 'Boots', 1, '2020-06-09 21:12:56', '0000-00-00 00:00:00'),
(2, 1, 'Optical Express', 1, '2020-06-09 21:13:09', '0000-00-00 00:00:00'),
(3, 1, 'Specsavers', 1, '2020-06-09 21:13:25', '0000-00-00 00:00:00'),
(4, 1, 'All Opticians', 1, '2021-04-25 09:48:13', '0000-00-00 00:00:00'),
(5, 1, 'Vision Express', 1, '2020-06-09 21:14:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `Customer_id` int(11) DEFAULT NULL,
  `Product_Type` varchar(225) DEFAULT NULL,
  `Product_Price` int(11) DEFAULT NULL,
  `Price_After_Discount` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Discount` varchar(225) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `Payment_id` int(11) DEFAULT NULL,
  `Shipper_id` int(11) DEFAULT NULL,
  `Power_Left` varchar(225) DEFAULT NULL,
  `Power_Right` varchar(225) DEFAULT NULL,
  `BC_Left` varchar(225) DEFAULT NULL,
  `BC_Right` varchar(225) DEFAULT NULL,
  `Diameter_Left` varchar(225) DEFAULT NULL,
  `Diameter_Right` varchar(225) DEFAULT NULL,
  `Cylinder_Left` varchar(225) DEFAULT NULL,
  `Cylinder_Right` varchar(225) DEFAULT NULL,
  `Axis_Left` varchar(225) DEFAULT NULL,
  `Axis_Right` varchar(225) DEFAULT NULL,
  `Left_Selected` varchar(225) DEFAULT NULL,
  `Right_Selected` varchar(225) DEFAULT NULL,
  `Qty_Boxes_Left` varchar(225) DEFAULT NULL,
  `Qty_Boxes_Right` varchar(225) DEFAULT NULL,
  `Number_Of_Pack` varchar(225) DEFAULT NULL,
  `Step_1_Option` varchar(225) DEFAULT NULL,
  `Step_2_Option` varchar(225) DEFAULT NULL,
  `Step_3_Option` varchar(225) DEFAULT NULL,
  `Prescription_id` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Product_id`, `Customer_id`, `Product_Type`, `Product_Price`, `Price_After_Discount`, `Quantity`, `Discount`, `Total`, `Payment_id`, `Shipper_id`, `Power_Left`, `Power_Right`, `BC_Left`, `BC_Right`, `Diameter_Left`, `Diameter_Right`, `Cylinder_Left`, `Cylinder_Right`, `Axis_Left`, `Axis_Right`, `Left_Selected`, `Right_Selected`, `Qty_Boxes_Left`, `Qty_Boxes_Right`, `Number_Of_Pack`, `Step_1_Option`, `Step_2_Option`, `Step_3_Option`, `Prescription_id`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, '2021-01-20 19:13:17', '2021-01-20 19:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_numbers`
--

CREATE TABLE `order_numbers` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `number` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_numbers`
--

INSERT INTO `order_numbers` (`id`, `name`, `number`, `active`, `created_at`, `updated_at`) VALUES
(1, 'product', 'PR1132', 1, '2021-01-11 08:00:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `payment_gateway_name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `secret_key` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `payment_gateway_name`, `email`, `secret_key`, `active`, `created_at`, `updated_at`) VALUES
(0, 'none', 'none', 'none', 0, '2021-01-20 19:14:10', '2021-01-20 19:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `popular_eye_care`
--

CREATE TABLE `popular_eye_care` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Popular_Eye_Care` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popular_eye_care`
--

INSERT INTO `popular_eye_care` (`id`, `Product_id`, `Popular_Eye_Care`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', 0, '2020-12-10 20:36:57', '0000-00-00 00:00:00'),
(1, 1, 'Altacor', 1, '2020-06-10 08:03:22', '0000-00-00 00:00:00'),
(2, 1, 'Artelac', 1, '2020-06-10 08:03:41', '0000-00-00 00:00:00'),
(3, 1, 'comfi', 1, '2020-06-10 08:04:11', '0000-00-00 00:00:00'),
(4, 1, 'Biotrue', 1, '2020-06-10 08:04:34', '0000-00-00 00:00:00'),
(5, 1, 'Blink', 1, '2020-06-10 08:04:51', '0000-00-00 00:00:00'),
(6, 1, 'The Body Doctor', 1, '2020-06-10 08:05:11', '0000-00-00 00:00:00'),
(7, 1, 'Systane', 1, '2020-06-10 08:05:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `popular_solutions`
--

CREATE TABLE `popular_solutions` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Popular_Solutions` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popular_solutions`
--

INSERT INTO `popular_solutions` (`id`, `Product_id`, `Popular_Solutions`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', 0, '2020-11-30 18:52:49', '0000-00-00 00:00:00'),
(1, 1, 'AO Sept', 1, '2020-06-10 04:58:29', '0000-00-00 00:00:00'),
(2, 1, 'Biotrue', 1, '2020-06-10 05:09:47', '0000-00-00 00:00:00'),
(3, 1, 'Boston', 1, '2020-06-10 05:33:53', '0000-00-00 00:00:00'),
(4, 1, 'comfi', 1, '2020-06-10 05:34:55', '0000-00-00 00:00:00'),
(5, 1, 'Complete', 1, '2020-06-10 05:37:33', '0000-00-00 00:00:00'),
(6, 1, 'EasySept', 1, '2020-06-10 05:38:12', '0000-00-00 00:00:00'),
(7, 1, 'Opti-free', 1, '2020-06-10 05:38:30', '0000-00-00 00:00:00'),
(8, 1, 'Ote Optics', 1, '2020-06-10 05:38:52', '0000-00-00 00:00:00'),
(9, 1, 'OxySept', 1, '2020-06-10 05:39:56', '0000-00-00 00:00:00'),
(10, 1, 'ReNu', 1, '2020-06-10 05:40:21', '0000-00-00 00:00:00'),
(11, 1, 'SoloCare', 1, '2020-06-10 05:40:54', '0000-00-00 00:00:00'),
(12, 1, 'Systane', 1, '2020-06-10 05:42:14', '0000-00-00 00:00:00'),
(13, 1, 'Total Care', 1, '2020-06-10 05:42:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `postage`
--

CREATE TABLE `postage` (
  `id` int(11) NOT NULL,
  `servicename` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postage`
--

INSERT INTO `postage` (`id`, `servicename`, `price`, `active`, `created_at`, `updated_at`) VALUES
(4, 'Asif Khan', 15, 1, '2021-03-27 04:16:50', '2021-03-27 10:19:56'),
(8, 'oo', 20, 1, '2021-03-27 09:57:53', '2021-03-27 10:20:12'),
(9, 'jjj', 100, 1, '2021-03-27 10:20:21', '2021-03-27 10:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `power`
--

CREATE TABLE `power` (
  `id` int(11) NOT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `Side_Select` varchar(225) DEFAULT NULL,
  `Plus` double DEFAULT NULL,
  `Minus` double DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `power`
--

INSERT INTO `power` (`id`, `Product_id`, `Side_Select`, `Plus`, `Minus`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', 0, 0, 0, '2020-08-09 23:22:09', '2020-08-04 03:13:05'),
(1, 1, 'right', 0.5, 0.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(2, 1, 'right', 0.75, 0.75, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(3, 1, 'right', 1, 1, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(4, 1, 'right', 1.25, 1.25, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(6, 1, 'right', 1.75, 1.75, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(7, 1, 'right', 2, 2, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(8, 1, 'right', 2.25, 2.25, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(9, 1, 'right', 2.5, 2.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(10, 1, 'right', 2.75, 2.75, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(11, 1, 'right', 3, 3, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(12, 1, 'right', 3.25, 3.25, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(13, 1, 'right', 3.5, 3.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(14, 1, 'right', 3.75, 3.75, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(15, 1, 'right', 4, 4, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(16, 1, 'right', 4.25, 4.25, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(17, 1, 'right', 4.5, 4.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(18, 1, 'right', 4.75, 4.75, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(19, 1, 'right', 5, 5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(20, 1, 'right', 5.25, 5.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(21, 1, 'right', 5.5, 5.75, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(22, 1, 'right', 5.75, 6, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(23, 1, 'right', 6, 6.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(24, 1, 'right', 6, 7, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(25, 1, 'right', 0, 7.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(26, 1, 'right', 0.5, 8, 1, '2020-08-10 02:02:27', '2020-06-10 02:29:47'),
(27, 1, 'right', 6.1, 8.5, 1, '2020-08-10 02:02:32', '2020-06-10 02:29:47'),
(28, 1, 'right', 6.8, 9, 1, '2020-08-10 02:02:36', '2020-06-10 02:29:47'),
(29, 1, 'right', 50, 9.5, 1, '2020-08-10 02:02:39', '2020-06-10 02:29:47'),
(30, 1, 'right', 12.3, 10, 1, '2020-08-10 02:02:43', '2020-06-10 02:29:47'),
(31, 1, 'left', 0.5, 0.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(32, 1, 'left', 0.75, 0.75, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(33, 1, 'left', 1, 1, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(34, 1, 'left', 1.25, 1.25, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(35, 1, 'left', 1.5, 1.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(36, 1, 'left', 1.75, 1.75, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(37, 1, 'left', 2, 2, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(38, 1, 'left', 2.25, 2.25, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(39, 1, 'left', 2.5, 2.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(40, 1, 'left', 2.75, 2.75, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(41, 1, 'left', 3, 3, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(42, 1, 'left', 3.25, 3.25, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(43, 1, 'left', 3.5, 3.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(44, 1, 'left', 3.75, 3.75, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(45, 1, 'left', 4, 4, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(46, 1, 'left', 4.25, 4.25, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(47, 1, 'left', 4.5, 4.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(48, 1, 'left', 4.75, 4.75, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(49, 1, 'left', 5, 5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(50, 1, 'left', 5.25, 5.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(51, 1, 'left', 5.5, 5.75, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(52, 1, 'left', 5.75, 6, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(53, 1, 'left', 6, 6.5, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(54, 1, 'left', 6, 7, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(55, 1, 'left', 2.5, 7.5, 1, '2020-08-10 02:01:26', '2020-06-10 02:29:47'),
(56, 1, 'left', 3.4, 8, 1, '2020-08-10 02:01:29', '2020-06-10 02:29:47'),
(57, 1, 'left', 0.5, 8.5, 1, '2020-08-10 02:01:33', '2020-06-10 02:29:47'),
(58, 1, 'left', 0.9, 9, 1, '2020-08-10 02:01:37', '2020-06-10 02:29:47'),
(59, 1, 'left', 0.57, 9.5, 1, '2020-08-10 02:01:43', '2020-06-10 02:29:47'),
(60, 1, 'left', 0.14, 10, 1, '2020-08-10 02:01:50', '2020-06-10 02:29:47'),
(73, 4, 'left', 12.54, 25.85, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(74, 4, 'left', 1.21, 23.64, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(75, 4, 'right', 2.74, 21.25, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(76, 4, 'right', 3.78, 2.65, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(77, 4, 'right', 0.28, 12.54, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(78, 4, 'right', 4.54, 1.21, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(3897, 2, 'left', 0, 0, 1, '2020-10-21 20:06:44', '2020-10-21 20:06:44'),
(3906, 2, 'right', 0, 0, 1, '2020-10-21 20:07:21', '2020-10-21 20:07:21'),
(3935, 2, 'left', 0, 0, 1, '2020-10-21 22:34:05', '2020-10-21 22:34:05'),
(3971, 2, 'right', 0, 0, 1, '2020-10-22 15:05:29', '2020-10-22 15:05:29'),
(3983, 2, 'right', 8, 0, 1, '2020-10-22 20:21:14', '2020-10-22 20:21:14'),
(3984, 2, 'left', 0, 0, 1, '2020-10-25 00:47:45', '2020-10-25 00:47:45'),
(3985, 2, 'left', 0, 0, 1, '2020-10-25 00:47:49', '2020-10-25 00:47:49'),
(3986, 49, 'left', 1, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3987, 49, 'left', 1.25, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3988, 49, 'left', 1.5, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3989, 49, 'left', 1.75, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3990, 49, 'left', 2, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3991, 49, 'left', 2.25, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3992, 49, 'left', 2.5, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3993, 49, 'left', 2.75, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3994, 49, 'left', 3, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3995, 49, 'left', 3.25, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3996, 49, 'left', 3.5, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3997, 49, 'left', 3.75, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3998, 49, 'left', 4, 0, 1, '2020-10-30 03:35:49', '2020-10-30 03:35:49'),
(3999, 147, 'left', 50, 0, 1, '2020-11-08 10:38:24', '2020-11-08 10:38:24'),
(4000, 147, 'right', 0, 2, 1, '2020-11-08 10:38:51', '2020-11-08 10:38:51'),
(4001, 147, 'right', 0, 1.75, 1, '2020-11-08 10:38:52', '2020-11-08 10:38:52'),
(4002, 147, 'right', 0, 1.5, 1, '2020-11-08 10:38:52', '2020-11-08 10:38:52'),
(4003, 147, 'right', 0, 1.25, 1, '2020-11-08 10:38:52', '2020-11-08 10:38:52'),
(4004, 147, 'right', 0, 1, 1, '2020-11-08 10:38:52', '2020-11-08 10:38:52'),
(4005, 147, 'right', 0, 0.75, 1, '2020-11-08 10:38:52', '2020-11-08 10:38:52'),
(4006, 147, 'right', 0, 0.5, 1, '2020-11-08 10:38:52', '2020-11-08 10:38:52'),
(4007, 147, 'right', 0, 0.25, 1, '2020-11-08 10:38:52', '2020-11-08 10:38:52'),
(4008, 147, 'right', 0, 0, 1, '2020-11-08 10:38:52', '2020-11-08 10:38:52'),
(4009, 147, 'right', 0.25, 0, 1, '2020-11-08 10:38:52', '2020-11-08 10:38:52'),
(4010, 147, 'right', 0.5, 0, 1, '2020-11-08 10:38:52', '2020-11-08 10:38:52'),
(4011, 147, 'right', 0.75, 0, 1, '2020-11-08 10:38:52', '2020-11-08 10:38:52'),
(4012, 147, 'right', 1, 0, 1, '2020-11-08 10:38:52', '2020-11-08 10:38:52'),
(4013, 147, 'right', 1.25, 0, 1, '2020-11-08 10:38:53', '2020-11-08 10:38:53'),
(4014, 147, 'right', 1.5, 0, 1, '2020-11-08 10:38:53', '2020-11-08 10:38:53'),
(4015, 147, 'right', 1.75, 0, 1, '2020-11-08 10:38:53', '2020-11-08 10:38:53'),
(4016, 147, 'right', 2, 0, 1, '2020-11-08 10:38:53', '2020-11-08 10:38:53'),
(4017, 147, 'right', 0, 0, 1, '2020-11-11 08:33:18', '2020-11-11 08:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `admin_id` int(24) DEFAULT NULL,
  `customer_id` int(24) DEFAULT NULL,
  `prescription_name` varchar(225) DEFAULT NULL,
  `added_by` varchar(225) DEFAULT NULL,
  `pupil_distance` varchar(225) DEFAULT NULL,
  `date_of_prescription` varchar(225) DEFAULT NULL,
  `extra_info` varchar(225) DEFAULT NULL,
  `right_sphere` varchar(225) DEFAULT NULL,
  `right_cylinder` varchar(225) DEFAULT NULL,
  `right_axis` varchar(225) DEFAULT NULL,
  `right_near_addition` varchar(225) DEFAULT NULL,
  `left_sphere` varchar(225) DEFAULT NULL,
  `left_cylinder` varchar(225) DEFAULT NULL,
  `left_axis` varchar(225) DEFAULT NULL,
  `left_near_addition` varchar(225) DEFAULT NULL,
  `right_d_sphere` varchar(225) DEFAULT NULL,
  `right_d_cylinder` varchar(225) DEFAULT NULL,
  `right_d_axis` varchar(225) DEFAULT NULL,
  `right_i_sphere` varchar(225) DEFAULT NULL,
  `right_i_cylinder` varchar(225) DEFAULT NULL,
  `right_i_axis` varchar(225) DEFAULT NULL,
  `right_i_near_addition` varchar(225) DEFAULT NULL,
  `right_n_sphere` varchar(225) DEFAULT NULL,
  `right_n_cylinder` varchar(225) DEFAULT NULL,
  `right_n_axis` varchar(225) DEFAULT NULL,
  `right_n_near_addition` varchar(225) DEFAULT NULL,
  `left_d_sphere` varchar(225) DEFAULT NULL,
  `left_d_cylinder` varchar(225) DEFAULT NULL,
  `left_d_axis` varchar(225) DEFAULT NULL,
  `left_i_sphere` varchar(225) DEFAULT NULL,
  `left_i_cylinder` varchar(225) DEFAULT NULL,
  `left_i_axis` varchar(225) DEFAULT NULL,
  `left_i_near_addition` varchar(225) DEFAULT NULL,
  `left_n_sphere` varchar(225) DEFAULT NULL,
  `left_n_cylinder` varchar(225) DEFAULT NULL,
  `left_n_axis` varchar(225) DEFAULT NULL,
  `left_n_near_addition` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `admin_id`, `customer_id`, `prescription_name`, `added_by`, `pupil_distance`, `date_of_prescription`, `extra_info`, `right_sphere`, `right_cylinder`, `right_axis`, `right_near_addition`, `left_sphere`, `left_cylinder`, `left_axis`, `left_near_addition`, `right_d_sphere`, `right_d_cylinder`, `right_d_axis`, `right_i_sphere`, `right_i_cylinder`, `right_i_axis`, `right_i_near_addition`, `right_n_sphere`, `right_n_cylinder`, `right_n_axis`, `right_n_near_addition`, `left_d_sphere`, `left_d_cylinder`, `left_d_axis`, `left_i_sphere`, `left_i_cylinder`, `left_i_axis`, `left_i_near_addition`, `left_n_sphere`, `left_n_cylinder`, `left_n_axis`, `left_n_near_addition`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 0, 'none', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-12 06:32:31', NULL),
(28, 0, 0, 'dads', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2020-10-12 03:33:18', '2020-10-12 03:33:18'),
(29, 0, 0, 'sd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2020-10-12 03:48:10', '2020-10-12 03:48:10'),
(30, 0, 0, 'ufoo', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2020-10-12 03:52:24', '2020-10-12 03:52:24'),
(31, 0, 0, '222', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2020-10-12 05:26:22', '2020-10-12 05:26:22'),
(32, 0, 0, '54', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2020-10-14 04:20:52', '2020-10-14 04:20:52'),
(33, 0, 0, 'sd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2020-10-15 01:42:55', '2020-10-15 01:42:55'),
(34, 0, 0, 'gg', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2020-10-15 02:09:46', '2020-10-15 02:09:46'),
(35, 0, 0, 'gg', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2020-10-15 03:11:32', '2020-10-15 03:11:32'),
(36, 0, 0, 'hh', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2020-10-16 16:49:15', '2020-10-16 16:49:15'),
(37, 0, 0, 'asdfsad', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2020-10-17 18:40:39', '2020-10-17 18:40:39'),
(38, 0, 0, 'xx', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2020-10-19 12:02:11', '2020-10-19 12:02:11'),
(39, 0, 0, 'cas', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2020-10-31 01:33:58', '2020-10-31 01:33:58'),
(40, 0, 0, 'eewww', 'user', '70', '16/1/2018', 'sda', '-4.50', '-3.50', '2', '+1.00', '', '-3.50', '1', '+0.75', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-21 16:33:11', '2021-01-21 16:33:11'),
(41, 0, 0, 'ssdd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-21 16:39:05', '2021-01-21 16:39:05'),
(42, 0, NULL, 'sd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-22 22:50:43', '2021-01-22 22:50:43'),
(43, 0, NULL, 'ss', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-22 22:52:50', '2021-01-22 22:52:50'),
(44, 0, NULL, 'Send It Later', 'user', NULL, '//', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-01-23 21:46:14', '2021-01-23 21:46:14'),
(45, 0, NULL, 'Send It Later', 'user', NULL, '//', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-01-23 21:51:07', '2021-01-23 21:51:07'),
(46, 0, NULL, 'Send It Later', 'user', NULL, '//', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-01-23 21:53:49', '2021-01-23 21:53:49'),
(47, 0, NULL, 'Send It Later', 'user', NULL, '//', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-01-23 22:02:27', '2021-01-23 22:02:27'),
(48, 0, NULL, 'Send It Later', 'user', NULL, '//', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-01-23 22:03:44', '2021-01-23 22:03:44'),
(49, 0, NULL, 'Send It Later', 'user', NULL, '//', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-01-23 22:05:21', '2021-01-23 22:05:21'),
(50, 0, NULL, 'xx', 'user', '63', '//', 'asd', '-0.75', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 22:19:46', '2021-01-23 22:19:46'),
(51, 0, NULL, 'asa', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 22:27:03', '2021-01-23 22:27:03'),
(52, 0, NULL, 'sd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 22:28:47', '2021-01-23 22:28:47'),
(53, 0, NULL, 'asd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 22:29:00', '2021-01-23 22:29:00'),
(54, 0, NULL, 'sd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 22:31:33', '2021-01-23 22:31:33'),
(55, 0, NULL, 'sd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 22:33:12', '2021-01-23 22:33:12'),
(56, 0, NULL, 'sd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 22:37:16', '2021-01-23 22:37:16'),
(57, 0, NULL, 'sda', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 22:56:50', '2021-01-23 22:56:50'),
(58, 0, NULL, 'sd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 23:00:02', '2021-01-23 23:00:02'),
(59, 0, NULL, 'sd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 23:33:55', '2021-01-23 23:33:55'),
(60, 0, NULL, 'xx', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 23:37:25', '2021-01-23 23:37:25'),
(61, 0, NULL, 'asd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 23:39:17', '2021-01-23 23:39:17'),
(62, 0, NULL, 'sd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 23:40:44', '2021-01-23 23:40:44'),
(63, 0, NULL, 'asd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 23:42:00', '2021-01-23 23:42:00'),
(64, 0, NULL, 'asd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 23:43:22', '2021-01-23 23:43:22'),
(65, 0, NULL, 'asdxx', 'user', '63', '//', 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 23:44:32', '2021-01-23 23:44:32'),
(66, 0, NULL, 'asd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 23:47:44', '2021-01-23 23:47:44'),
(67, 0, NULL, 'sx', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 23:50:03', '2021-01-23 23:50:03'),
(68, 0, NULL, 'sx', 'user', '63', '//', '', '-1.25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-23 23:52:30', '2021-01-23 23:52:30'),
(69, 0, 0, 'Tahir', 'user', '71', '16/2/2019', 'sda', '+0.50', 'DS', '3', '+1.25', 'BALANCE', 'PLANO', '1', '+0.75', '-4.25', '-3.75', '1', '-4.00', '-3.00', '2', '+1.00', '-3.25', '-3.00', '2', '+1.75', '-1.00', '-1.00', '15', '-1.75', '-1.00', '16', '+2.50', '-1.00', '0.00', '14', '+2.50', 1, '2021-01-24 11:50:48', '2021-01-24 11:50:48'),
(70, 0, 0, 'sx', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-28 01:38:07', '2021-01-28 01:38:07'),
(71, 0, 0, 'xx', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-28 02:00:50', '2021-01-28 02:00:50'),
(72, 0, 0, 'xx', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-28 02:01:25', '2021-01-28 02:01:25'),
(73, 0, 0, 'sxx', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-28 02:02:11', '2021-01-28 02:02:11'),
(74, 0, 0, 'asd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-01-28 02:02:48', '2021-01-28 02:02:48'),
(75, 0, 0, 'sd', 'user', '70', '2/2/2019', '', '-1.00', '-0.50', '14', '+1.50', '-0.75', 'INFINITY', '14', '+3.25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-03-08 04:57:25', '2021-03-08 04:57:25'),
(76, 0, 0, 'xx', 'user', '63', '30/11/2018', '', '-0.50', '-0.50', '14', '+1.00', '-0.50', 'PLANO', '18', '+3.25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-03-08 04:58:11', '2021-03-08 04:58:11'),
(77, 0, 0, 'sd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-03-08 04:58:46', '2021-03-08 04:58:46'),
(78, 0, 0, 'wqewq', 'user', '71', '28/10/2019', '', '-1.00', '-0.50', '14', '+1.25', '-0.50', 'INFINITY', '12', '+3.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-03-08 12:49:21', '2021-03-08 12:49:21'),
(79, 0, 0, 'sda', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-03-08 12:50:57', '2021-03-08 12:50:57'),
(80, 0, 0, 'sd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-03-08 13:41:12', '2021-03-08 13:41:12'),
(81, 0, 0, 'sd', 'user', '58', '17/2/2018', '', '-4.25', '-3.50', '2', '+0.75', '-4.00', '-3.25', '0', '+1.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-03-21 09:51:46', '2021-03-21 09:51:46'),
(82, 0, 0, 'asd', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-04-09 16:37:14', '2021-04-09 16:37:14'),
(83, 0, 0, 'zz', 'user', '63', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-04-14 17:09:52', '2021-04-14 17:09:52'),
(84, 0, 0, 'asd', 'user', '63', '//', '', '-0.50', '+3.75', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2021-04-20 21:23:38', '2021-04-20 21:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `order_number` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `name` varchar(225) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `Sale_Price` varchar(225) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Power_Range` varchar(225) DEFAULT NULL,
  `Base_Curve` varchar(225) DEFAULT NULL,
  `Diameter` varchar(225) DEFAULT NULL,
  `Lens_Material` varchar(225) DEFAULT NULL,
  `Water_Content` varchar(225) DEFAULT NULL,
  `Oxygen_Permeability` varchar(225) DEFAULT NULL,
  `Customer_Reviews` int(11) DEFAULT NULL,
  `Product_Qty_Description` varchar(200) DEFAULT NULL,
  `product_lense_description` int(11) DEFAULT NULL,
  `Pack` int(11) NOT NULL,
  `Product_Description` int(11) DEFAULT NULL,
  `Product_Detail_Advice` int(11) DEFAULT NULL,
  `Further_Optical_Advice` int(11) DEFAULT NULL,
  `Brands_of_Contact_Lenses` int(11) DEFAULT NULL,
  `Types_of_Contact_Lenses` int(11) DEFAULT NULL,
  `Shop_by_Manufacturer` int(11) DEFAULT NULL,
  `Types_of_Solutions` int(11) DEFAULT NULL,
  `Popular_Solutions` int(11) DEFAULT NULL,
  `Eye_Care` int(11) DEFAULT NULL,
  `Popular_Eye_Care` int(11) DEFAULT NULL,
  `Wearing_Type` int(11) DEFAULT NULL,
  `Optician_Brands` int(11) DEFAULT NULL,
  `Colours` int(11) DEFAULT NULL,
  `Gender` int(11) DEFAULT NULL,
  `Brand` int(11) DEFAULT NULL,
  `Shape` int(11) DEFAULT NULL,
  `Frame_Color` int(11) DEFAULT NULL,
  `LENS_SIZE` int(11) DEFAULT NULL,
  `LENS_COLOUR` int(11) DEFAULT NULL,
  `Frame_Size` int(11) DEFAULT NULL,
  `Material` int(11) DEFAULT NULL,
  `fm_height` int(11) NOT NULL,
  `fm_lense_width` int(11) NOT NULL,
  `fm_lense_bt_width` int(11) NOT NULL,
  `fm_stick_width` int(11) NOT NULL,
  `fm_width` int(11) NOT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `order_number`, `image`, `name`, `Price`, `Sale_Price`, `Quantity`, `Power_Range`, `Base_Curve`, `Diameter`, `Lens_Material`, `Water_Content`, `Oxygen_Permeability`, `Customer_Reviews`, `Product_Qty_Description`, `product_lense_description`, `Pack`, `Product_Description`, `Product_Detail_Advice`, `Further_Optical_Advice`, `Brands_of_Contact_Lenses`, `Types_of_Contact_Lenses`, `Shop_by_Manufacturer`, `Types_of_Solutions`, `Popular_Solutions`, `Eye_Care`, `Popular_Eye_Care`, `Wearing_Type`, `Optician_Brands`, `Colours`, `Gender`, `Brand`, `Shape`, `Frame_Color`, `LENS_SIZE`, `LENS_COLOUR`, `Frame_Size`, `Material`, `fm_height`, `fm_lense_width`, `fm_lense_bt_width`, `fm_stick_width`, `fm_width`, `active`, `created_at`, `updated_at`) VALUES
(1, 'OR1201', 'proclear-tailor-made-toric786-131.png', 'Proclear Tailor Made Toric', 87, '0', 12, '+20.00 to -20.00 Cylinders\r\n-0.50 to -6.00 Axes\r\n1° to 180°', '8.0mm to 9.3mm', '13.6mm to 15.2mm', 'Omafilcon A', '59%', '121 Dk/t', 0, '3 lens / box', 3, 0, 0, 1, 1, 16, 2, 3, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-11-04 05:24:36', '0000-00-00 00:00:00'),
(2, 'OR1202', 'dailies-total-1-90-pack786-131.png', 'Dailies Total 1 (90 Pack)', 65.67, '71.95', 0, '6.00 to -12.00', '8.5mm', '14.1mm', 'Delefilcon A', '33%', '156 Dk/t', 0, '6 lenses / box', 6, 0, 0, 1, 0, 9, 1, 1, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-10-17 09:09:08', '0000-00-00 00:00:00'),
(3, 'OR1203', 'acuvue-oasys-with-hydraluxe-1-day-90-pack-main1029-133.png', 'Acuvue Oasys 1-Day with HydraLuxe (90 Pack)', 64.47, '65.95', 45, '8.00 to -12.00', '8.5mm, 9.0mm', '14.3mm', 'Senofilcon A', '38%', '121 Dk/t', 0, '90 Lenses / box', 90, 0, 0, 1, 0, 1, 1, 4, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2021-04-25 10:02:52', '0000-00-00 00:00:00'),
(4, 'OR1204', '1-day-acuvue-trueye-with-hydraclear-90pk786-131.png', '1 Day Acuvue TruEye (90 Pack)', 59.67, '69.95', 32, '6.00 to -12.00', '8.5mm, 9.0mm', '14.2mm', 'Narafilcon A', '46%', '118 Dk/t', 0, '90 lenses / box', 90, 0, 0, 1, 0, 1, 1, 4, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2021-04-25 10:02:58', '0000-00-00 00:00:00'),
(5, 'OR1205', 'comfi-travel-pack788-131.png', 'comfi All-in-One Solution Travel Pack', 2.99, '4 .00', 50, '0', '0', '0', '0', '0', '0', 0, '100 ml', NULL, 49, 0, 0, 0, 0, 0, 0, 4, 4, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2021-04-25 10:03:00', '0000-00-00 00:00:00'),
(6, 'OR1206', 'comfi-all-in-one-solution-1-month788-131.png', 'comfi All-in-One Solution\n', 4.49, '5.5', 40, '0', '0', '0', '0', '0', '0', 0, '250 ml', NULL, 0, 0, 0, 0, 0, 0, 0, 1, 4, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2021-04-25 10:03:07', '0000-00-00 00:00:00'),
(7, 'OR1207', 'contaxts_case899-133963-133.png', 'Feel Good Contact Lens Case', 0.7, '0', 20, '0', '0', '0', '0', '0', '0', 0, '1 x case', NULL, 10, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2021-04-25 10:03:10', '0000-00-00 00:00:00'),
(8, 'OR1208', 'fgc-pouch-11526-151.jpg', 'Feel Good Pouch', 0.89, '0', 30, '0', '0', '0', '0', '0', '0', 0, '1 x pouch', NULL, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2021-04-25 10:03:15', '0000-00-00 00:00:00'),
(9, 'OR1209', 'FGC-Hugo-C1-Light-Gunmetal-021578-172.jpg', 'FGC Hugo C1 Light Gunmetal', 12, '25', 50, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 3, 1, 6, 7, 0, 0, 1, 2, 28, 54, 17, 140, 135, 1, '2021-04-25 10:03:19', '0000-00-00 00:00:00'),
(10, 'OR1210', 'FGC-Hugo-C2-Gold-021579-172.jpg', 'FGC Hugo C2 Gold', 12, '25', 60, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 3, 1, 6, 5, 0, 0, 2, 2, 34, 52, 19, 142, 120, 1, '2021-04-25 10:03:22', '0000-00-00 00:00:00'),
(11, 'OR1211', 'Police-Lewis-03-SPLA24-0594-Gold_021351-153.jpg', 'Police Lewis 03 SPLA24 0594 Gold\n', 123, '0', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 4, 34, 13, 18, 0, 2, 4, 10, 0, 0, 0, 0, 0, 1, '2021-04-25 10:03:24', '0000-00-00 00:00:00'),
(12, 'OR1212', '2_rayban_orb2140_901-58789-133.jpg', 'Ray-Ban RB2140 Original Wayfarer Black 901/58 Polarised\n', 115, '0', 10, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 6, 36, 15, 15, 0, 6, 5, 8, 0, 0, 0, 0, 0, 1, '2021-04-25 10:03:27', '0000-00-00 00:00:00'),
(13, 'OR1213', '1_sds_rockstar_122952-133.jpg', 'Superdry Rock Star 122 Matte Tortoise', 20, '25', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 6, 40, 15, 17, 0, 3, 2, 8, 0, 0, 0, 0, 0, 1, '2021-04-25 10:03:30', '2020-06-11 16:41:54'),
(14, 'OR1214', '1_superdry_shockwave_127_matte_black836-133.jpg', 'Superdry Shockwave 127 Matte Black', 23, '28', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 6, 40, 12, 15, 0, 6, 2, 8, 10, 20, 20, 50, 5, 1, '2021-04-25 10:03:32', '2020-06-11 16:41:54'),
(15, 'OR1215', '1_sds_rockstar_104b1063-137.jpg', 'Superdry Rock Star 104B Matte Black', 30, '35', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 6, 40, 14, 15, 0, 5, 2, 8, 0, 0, 0, 0, 0, 1, '2021-04-25 10:04:50', '2020-06-11 16:41:54'),
(16, 'OR1216', '01_04_cc0blkcrymtblk5221145plgrhd3_762753324917_degree548-131.jpg', 'Oxydo OX 1086/S Eminent Black CC0HD', 45, '75', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 5, 31, 12, 15, 0, 5, 2, 8, 0, 0, 0, 0, 0, 1, '2021-04-25 10:04:52', '2020-06-11 16:41:54'),
(17, 'OR1217', '01_01_pw3brownhavana5120140crmrazif2_762753511676_degree548-131.jpg', 'Oxydo OX 1096/S Remarkable Havana P3WIF', 47.4, '79', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 6, 31, 15, 17, 0, 3, 2, 8, 0, 0, 0, 0, 0, 1, '2021-04-25 10:04:54', '2020-06-11 16:41:54'),
(18, 'OR1218', '01_05_807black5121140crgrhd3_762753511553_degree548-131.jpg', 'Oxydo OX 1096/S Eminent Black 807HD', 47.4, '79', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 6, 31, 15, 17, 0, 5, 2, 8, 0, 0, 0, 0, 0, 1, '2021-04-25 10:04:56', '2020-06-11 16:41:54'),
(19, 'OR1219', '1_sunpocket-samoa-all-black1182-137.jpg', 'Sunpocket Samoa All Black', 47.4, '79', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 6, 39, 13, 15, 0, 1, 2, 8, 0, 0, 0, 0, 0, 1, '2021-04-25 10:04:59', '2020-06-11 16:41:54'),
(20, 'OR1220', '1_sunpocket-samoa-all-black1182-137.jpg', 'Sunpocket Tonga Shiny Black', 47.4, '79', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 39, 14, 15, 0, 5, 2, 8, 0, 0, 0, 0, 0, 1, '2020-06-11 16:41:54', '2020-06-11 16:41:54'),
(21, 'OR1221', '1_sunpocket-tobago-crystal-ocean1185-137.jpg', 'Sunpocket Tobago Crystal Ocean', 47.4, '79', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 39, 14, 24, 0, 2, 2, 8, 0, 0, 0, 0, 0, 1, '2020-06-11 16:41:54', '2020-06-11 16:41:54'),
(22, 'OR1222', '1_sunpocket-tobago-grey1186-137.jpg', 'Sunpocket Tobago Grey', 47.4, '79', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 39, 14, 19, 0, 5, 2, 8, 0, 0, 0, 0, 0, 1, '2020-06-11 16:41:54', '2020-06-11 16:41:54'),
(23, 'OR1223', '1_sunpocket-ischia-blue-azure1187-137.jpg', 'Sunpocket Ischia Blue Azure', 47.4, '79', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 39, 13, 16, 0, 2, 2, 8, 0, 0, 0, 0, 0, 1, '2020-06-11 16:41:54', '2020-06-11 16:41:54'),
(24, 'OR1224', '1_sunpocket-tonga-dark-tortoise1188-137.jpg', 'Sunpocket Tonga Dark Tortoise', 47.4, '79', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 39, 14, 17, 0, 6, 2, 8, 0, 0, 0, 0, 0, 1, '2020-06-11 16:41:54', '2020-06-11 16:41:54'),
(25, 'OR1225', '1_sunpocket-tonga-shiny-black1184-137.jpg', 'Sunpocket Tobago Shiny Black', 47.4, '79', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 39, 14, 15, 0, 5, 2, 8, 0, 0, 0, 0, 0, 1, '2020-06-11 16:41:54', '2020-06-11 16:41:54'),
(26, 'OR1226', '01_dvf830s_019_58_17_135_zianna_degree442-132.jpg', 'DVF 830S Zianna Onyx 019', 52.5, '75', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 16, 18, 19, 0, 8, 2, 13, 0, 0, 0, 0, 0, 1, '2020-06-11 16:41:54', '2020-06-11 16:41:54'),
(27, 'OR1227', '01_dvf610s_001_56_17_135_ivy_side444-132.jpg', 'DVF 610S Ivy Black 001', 56, '80', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 16, 15, 15, 0, 1, 2, 7, 0, 0, 0, 0, 0, 1, '2020-06-11 16:41:54', '2020-06-11 16:41:54'),
(28, 'OR1228', '1_kendall-kyle_lexi_kk4002_rosegold845-133.jpg', 'Kendall + Kylie KK4002 Lexi Rose Gold 780', 60, '100', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 22, 10, 19, 0, 4, 2, 10, 0, 0, 0, 0, 0, 1, '2020-06-11 16:41:54', '2020-06-11 16:41:54'),
(29, 'OR1229', 'Vogue-VO5294S-W44_11-Black_011341-152.jpg', 'Vogue VO5294S W44/11 Black', 63.9, '71', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 45, 18, 15, 0, 5, 2, 8, 0, 0, 0, 0, 0, 1, '2020-06-11 16:41:54', '2020-06-11 16:41:54'),
(30, 'OR1230', 'Vogue-VO5294S-W65613-Havana_011388-152.jpg', 'Vogue VO5294S W65613 Havana', 63.9, '71', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 45, 18, 17, 3, 3, 0, 8, 0, 0, 0, 0, 0, 1, '2021-01-11 08:20:26', '2021-01-11 04:20:26'),
(31, 'OR1231', 'Vogue-VO4118S-352_11-Black_011339-152.jpg', 'Vogue VO4118S 352/11 Black', 76.5, '85', 20, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 40, 20, 24, 3, 6, 0, 13, 0, 0, 0, 0, 0, 1, '2021-01-11 08:18:29', '2021-01-11 04:18:29'),
(32, 'OR1232', 'comfi-daily-disposable-30pack786-1311054-132.png', 'comfi Daily Disposable\r\n', 8.49, '10.5', 30, '	6.00 to -12.00', '8.6mm\r\n', '14.2mm\r\n', 'Hemafilcon\r\n', '58%\r\n', '28 Dk/t\r\n', 0, '30 lens / box', 30, 0, 0, 0, 0, 8, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:47:05', '2020-06-12 16:41:54'),
(33, 'OR1233', 'comfi-pure301042-133.png', 'comfi Pure 1 Day', 11.9, '12.95', 30, '	6.00 to -12.00', '8.6mm\r\n', '14.2mm\r\n', 'Unifilcon B', '53%\n', '68 Dk/t\r\n', 0, '30 lens / box', 30, 0, 0, 0, 0, 8, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:47:09', '2020-06-13 16:41:54'),
(34, 'OR1234', 'dailies-aquacomfort-plus786-131.png', 'Dailies AquaComfort Plus', 13.89, '17.95', 30, '8.00 to -15.00', '8.7mm\r\n', '14mm\r\n', 'Nelfilcon A', '69%', '26 Dk/t', 0, '30 lens / box', 30, 0, 0, 0, 0, 9, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:47:14', '2020-06-14 16:41:54'),
(35, 'OR1235', '1-day-acuvue-moist786-131.png', '1 Day Acuvue Moist', 15.89, '19.95', 30, '	6.00 to -12.00', '	8.5mm, 9.0mm', '14.2mm', 'Etafilcon A', '58%', '33 Dk/t', 0, '30 lens / box', 30, 0, 0, 1, 0, 1, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-10-27 01:54:18', '2020-06-15 16:41:54'),
(36, 'OR1236', 'focus-dailies-all-day-comfort-90-pack786-131.png', 'Focus Dailies All Day Comfort (90 Pack)', 41.67, '45.95', 90, '	6.00 to -10.00', '	8.6mm', '13.8mm', 'Nelfilcon A', '69%', '26 Dk/t', 0, '90 lens / box', 90, 0, 0, 0, 0, 9, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:47:22', '2020-06-16 16:41:54'),
(37, 'OR1237', 'comfi-air-3-lenses-pack-main1019-133.png', 'comfi Air', 5.99, '7.9', 3, '+6.00 to -0.50', '	8.6mm', '	14.2mm', '	Filicon 1', '	47%', '190 Dk/t', 0, '3 lens / box', 3, 0, 0, 0, 0, 8, 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:47:26', '2020-06-17 16:41:54'),
(38, 'OR1238', 'air-optix-for-astigmatism786-131.png', 'Air Optix For Astigmatism', 17.89, '35.95', 3, '6.00 to -10.00\r\n 	Cylinders\r\n-0.75, -1.25, -1.75, -2.25\r\nAxes\r\n10? - 180?', '	8.7mm', '	14.5mm', 'Lotrafilcon B', '	33%', '108 Dk/t', 0, '3 lens / box', 3, 0, 0, 0, 0, 2, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:47:29', '2020-06-18 16:41:54'),
(39, 'OR1239', 'air-optix-night-and-day-aqua786-131.png', 'Air Optix Night & Day Aqua', 21.9, '37.5', 3, '6.00 to -10.00', '8.4mm, 8.6mm', '13.8mm', 'Lotrafilcon A', '24%', '175 Dk/t', 0, '3 lens / box', 3, 0, 0, 0, 0, 2, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:47:35', '2020-06-19 16:41:54'),
(40, 'OR1240', 'air-optix-hydraglyde786-131.png', 'Air Optix Plus HydraGlyde', 12.89, '35.25', 3, '	8.00 to -12.00', '8.6mm', '14.2mm', 'Lotrafilcon B', '33%', '138 Dk/t', 0, '3 lens / box', 3, 0, 0, 0, 0, 2, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:47:43', '2020-06-20 16:41:54'),
(41, 'OR1241', 'air-optix-night-and-day-aqua-6-pack786-131.png', 'Air Optix Night & Day Aqua (6 Pack)', 43.8, '50.95', 6, '6.00 to -10.00', '8.4mm, 8.6mm', '13.8mm', 'Lotrafilcon A', '24%', '175 Dk/t', 0, '6 lens / box', 6, 0, 0, 0, 0, 2, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:47:47', '2020-06-21 16:41:54'),
(42, 'OR1242', 'dailies-aquacomfort-plus-multifocal786-131.png', 'Dailies AquaComfort Plus Multifocal\r\n', 24.89, '31.95', 30, '6.00 to -10.00   ADD\r\nLOW Up to to 1.25\r\nMID 1.50 to 2.00\r\nHIGH 2.25 to 2.50', '8.7mm', '14mm', 'Nelfilcon A', '69%', '26 Dk/t', 0, '3 lens / box', 3, 0, 0, 0, 0, 9, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:47:52', '2020-06-22 16:41:54'),
(43, 'OR1243', 'freshlook-colors786-131.png', 'FreshLook Colors', 14.89, '20.95', 2, '	6.00 to -8.00', '8.6mm', '14.5mm', 'Phemfilcon A', '55%', '20 Dk/t', 0, '2 lens / box', 2, 0, 0, 0, 0, 14, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:47:56', '2020-06-23 16:41:54'),
(44, 'OR1244', 'air-optix-aqua-multifocal786-131.png', 'Air Optix Aqua Multifocal\r\n', 22.9, '26.95', 3, '6.00 to -10.00\r\n 	ADD\r\nLOW Up to 1.25\r\nMID 1.50 to 2.00\r\nHIGH 2.25 to 2.50', '8.6mm', '14.2mm', 'Lotrafilcon B\r\n', '33%\r\n', '138 Dk/t', 0, '3 lens / box', 3, 0, 0, 0, 0, 2, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:47:59', '2020-06-24 16:41:54'),
(45, 'OR1245', 'purevision-2-hd786-131.png', 'PureVision2', 14.4, '', 3, '6.00 to -12.00', '8.6mm', '14mm', 'Balafilcon A', '36%', '130 Dk/t', 0, '3 lens / box', 3, 0, 0, 0, 0, 17, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:48:03', '2020-06-25 16:41:54'),
(46, 'OR1246', 'acuvue-2786-131.png', 'Acuvue 2', 17.89, '18.95', 0, '8.00 to -12.00', '8.3mm, 8.7mm', '14mm', 'Etafilcon A', '58%', '25.5 Dk/t', 0, '6 lens / box', 6, 0, 0, 0, 0, 1, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:48:07', '2020-06-26 16:41:54'),
(47, 'OR1247', 'freshlook-illuminate786-131.png', 'FreshLook Illuminate', 14.9, '', 10, '0.00 to -8.00', '8.6mm', '13.8mm', 'Nelfilcon A', '69%', '26 Dk/t', 0, '10 lenses / box', 10, 0, 0, 0, 0, 14, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:48:11', '2020-06-27 16:41:54'),
(48, 'OR1248', 'clariti1day-toric1074-136.png', 'Clariti 1 Day Toric', 23.89, '', 30, '4.00 to -9.00\r\n 	Cylinders\r\n-0.75, -1.25, -1.75, -2.25\r\nAxes\r\n10? - 180?', '8.6mm', '14.1mm', 'Somofilcon A', '56%', '57 Dk/t', 0, '30 Lenses / box', 30, 0, 0, 0, 0, 7, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:48:16', '2020-06-28 16:41:54'),
(49, 'OR1249', 'avaira-toric-vitality786-1311022-133.png', 'Avaira Vitality Toric', 16.4, '17.95', 3, '	6.00 to -10.00\r\n 	Cylinders\r\n-0.75, -1.25, -1.75, -2.25\r\nAxes\r\n10? - 180?', '8.5mm', '14.5mm', 'Fanfilcon A', '55%', '90 Dk/t', 0, '3 Lenses / box', 3, 0, 0, 0, 0, 3, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:48:21', '2020-06-29 16:41:54'),
(50, 'OR1250', 'frequency-xcel-toric786-131.png', 'Frequency Xcel Toric', 13.89, '19.95', 3, '6.00 to -8.00\r\n 	Cylinders\r\n-0.75, -1.25, -1.75, -2.25\r\nAxes\r\n10? - 180?', '8.7mm', '14.4mm', 'Methafilcon A', '55%', '18 Dk/t', 0, '3 Lenses / box', 3, 0, 0, 0, 0, 13, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:48:24', '2020-06-30 16:41:54'),
(51, 'OR1251', 'purevision-2-for-presbyopia-3pack786-131.png', 'PureVision2 for Presbyopia', 22.89, '25.95', 3, '	6.00 to -10.00\r\n 	ADD\r\nLow 0.75 to 1.50\r\nHigh 1.75 to 2.50', '8.6mm', '14mm', 'Balafilcon A', '36%', '130 Dk/t', 0, '3 Lenses / box', 3, 0, 0, 0, 0, 17, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:48:40', '2020-07-01 16:41:54'),
(52, 'OR1252', 'biofinity-xr-toric786-131.png', 'Biofinity XR Toric', 34.9, '', 3, '10.00 to -10.00\r\n 	Cylinders\r\n-0.75, -1.25, -1.75, -2.25\r\n-2.75, -3.25, -3.75, -4.25\r\n-4.75, -5.25, -5.75\r\nAxes\r\n5? - 180?', '8.7mm', '14.5mm', 'Comfilcon A', '48%', '116 Dk/t', 0, '3 Lenses / box', 3, 0, 0, 0, 0, 4, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:48:45', '2020-07-02 16:41:54'),
(53, 'OR1253', 'frequency-55-aspheric_6pack995-133.png', 'Frequency 55 Aspheric (6 Pack)', 13.78, '25.95', 6, '+8.00 to -10.00', '8.4mm, 8.7mm', '14.4mm', 'Methafilcon A', '55%', '21 Dk/t', 0, '6 Lenses / box', 6, 0, 0, 0, 0, 13, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:48:50', '2020-07-03 16:41:54'),
(54, 'OR1254', 'biomedics-one-day786-131.png', 'Biomedics 1 Day', 11, '', 30, '6.00 to -10.00', '8.7mm', '14.2mm', 'Ocufilcon B', '52%', '24 Dk/t', 0, '30 Lenses / box', 30, 0, 0, 0, 0, 5, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:48:54', '2020-07-04 16:41:54'),
(55, 'OR1255', 'ultra-contacts-lenses-for-astigmatism-side_main1053-133.png', 'Bausch & Lomb Ultra for Astigmatism', 54.49, '59.95', 6, '6.00 to -9.00\r\n 	Cylinders\r\n-0.75, -1.25, -1.75, -2.25, -2.75\r\nAxes\r\n10? - 180?', '8.6mm', '14.5mm', 'Samfilcon A', '46%', '114 Dk/t', 0, '6 Lenses / box', 6, 0, 0, 0, 0, 19, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 19:48:59', '2020-07-05 16:41:54'),
(56, 'OR1256', 'softlens-38786-131.png', 'SofLens 38', 20.89, '24.95', 6, '4.00 to -9.00', '8.4mm, 8.7mm, 9.0mm', '14mm', 'Polymacon', '38%', '24.3 Dk/t', 0, '6 Lenses / box', 6, 0, 0, 0, 0, 18, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-12-15 02:14:16', '2020-12-14 22:14:16'),
(57, 'OR1257', NULL, 'comfi All-in-One Solution Triple Pack', 9.99, '12.5', 40, '0', '0', '0', '0', '0', '0', 0, '250 ml', 0, 0, 0, 0, 0, 0, 0, 0, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-12-12 09:56:58', '2020-12-12 04:56:58'),
(58, 'OR1258', 'lens-plus-solution-360ml-pack788-131.png', 'Lens Plus Solution Value Pack', 3.95, '', 360, '0', '0', '0', '0', '0', '0', 0, '360 ml', NULL, 0, 0, 0, 0, 0, 0, 0, 2, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-08 16:41:00', '2020-07-08 16:41:00'),
(59, 'OR1259', 'biotrue-multi-purpose-solution-2-pack788-131.png', 'Biotrue Multi-Purpose Solution Twin Pack', 15.49, '', 300, '0', '0', '0', '0', '0', '0', 0, '300ml bottles', NULL, 0, 0, 0, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-09 16:41:00', '2020-07-09 16:41:00'),
(60, 'OR1260', 'total-care-disinfecting-storing-and-wetting-120ml788-131.png', '\r\nTotal Care Disinfecting, Storing and Wetting Solution', 6.19, '', 120, '0', '0', '0', '0', '0', '0', 0, '120 ml ', NULL, 0, 0, 0, 0, 0, 0, 0, 5, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-10 16:41:00', '2020-07-10 16:41:00'),
(61, 'OR1261', 'renu-multi-purpose-solution788-131.png', 'ReNu Multi-Purpose Solution Triple Pack', 16.49, '', 720, '0', '0', '0', '0', '0', '0', 0, '720 ml ', NULL, 0, 0, 0, 0, 0, 0, 0, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-11 16:41:00', '2020-07-11 16:41:00'),
(62, 'OR1262', 'opti-free-express-value-pack788-131.png', 'Opti-Free Express Twin Pack', 16.49, '', 355, '0', '0', '0', '0', '0', '0', 0, '2x355ml Bottle', NULL, 0, 0, 0, 0, 0, 0, 0, 1, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-12 16:41:00', '2020-07-12 16:41:00'),
(63, 'OR1263', 'sensitive-eye-plus-saline-solution825-132.png', 'Sensitive Eyes Plus Saline Solution', 5.49, '', 500, '0', '0', '0', '0', '0', '0', 0, '500ml', NULL, 0, 0, 0, 0, 0, 0, 0, 2, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-13 16:41:00', '2020-07-13 16:41:00'),
(64, 'OR1264', 'easysept-solution-3-month-pack788-131.png', 'EasySept Solution Triple Pack', 20, '', 720, '0', '0', '0', '0', '0', '0', 0, '720 ml ', NULL, 0, 0, 0, 0, 0, 0, 0, 4, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-14 16:41:00', '2020-07-14 16:41:00'),
(65, 'OR1265', 'optifree_replenish_2pack243-82.jpg', 'Opti-Free RepleniSH Twin Pack', 17.99, '', 300, '0', '0', '0', '0', '0', '0', 0, '2 * 300ml', NULL, 0, 0, 0, 0, 0, 0, 0, 1, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-15 16:41:00', '2020-07-15 16:41:00'),
(66, 'OR1266', 'renu-multi-plus-solution788-131.png', 'ReNu Multi-Plus Solution Triple Pack', 16.49, '', 720, '0', '0', '0', '0', '0', '0', 0, '720ml', NULL, 0, 0, 0, 0, 0, 0, 0, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-16 16:41:00', '2020-07-16 16:41:00'),
(67, 'OR1267', 'ote_clean_cleaner910-133.jpg', 'Ote Clean', 7.49, '', 40, '0', '0', '0', '0', '0', '0', 0, '40ml', NULL, 0, 0, 0, 0, 0, 0, 0, 5, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-17 16:41:00', '2020-07-17 16:41:00'),
(68, 'OR1268', 'boston-simplus-multi-action-solution788-131.png', 'Boston Simplus', 6.8, '', 120, '0', '0', '0', '0', '0', '0', 0, '120ml Bottle', NULL, 0, 0, 0, 0, 0, 0, 0, 1, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-18 16:41:00', '2020-07-18 16:41:00'),
(69, 'OR1269', 'opti-free-puremoist-3-month788-131.png', 'Opti-Free Puremoist Twin Pack', 19.49, '', 300, '0', '0', '0', '0', '0', '0', 0, '2x300ml', NULL, 0, 0, 0, 0, 0, 0, 0, 1, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-19 16:41:00', '2020-07-19 16:41:00'),
(70, 'OR1270', 'ao-sept-plus-hydraglyde-twin-pack788-131.png', 'AOsept Plus HydraGlyde Twin Pack', 25.49, '', 360, '0', '0', '0', '0', '0', '0', 0, '2x360ml', NULL, 0, 0, 0, 0, 0, 0, 0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-20 16:41:00', '2020-07-20 16:41:00'),
(71, 'OR1271', 'renu-multi-purpose-solution-flight-pack788-131.png', 'ReNu Multi-Purpose Solution Flight Pack', 5.79, '', 60, '0', '0', '0', '0', '0', '0', 0, '2 x 60ml', NULL, 0, 0, 0, 0, 0, 0, 0, 4, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-21 16:41:00', '2020-07-21 16:41:00'),
(72, 'OR1272', 'acuvue-revitalens-multi-purpose-disinfecting-solution1567-169.png', 'Acuvue RevitaLens Multi-Purpose Disinfecting Solution', 17.49, '', 300, '0', '0', '0', '0', '0', '0', 0, '2 x 300ml', NULL, 0, 0, 0, 0, 0, 0, 0, 1, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-22 16:41:00', '2020-07-22 16:41:00'),
(73, 'OR1273', 'total1750-132.jpg', 'Total Care Daily Cleaner Twin Pack', 5.89, '', 150, '0', '0', '0', '0', '0', '0', 0, '2 x 15ml bottles', NULL, 0, 0, 0, 0, 0, 0, 0, 5, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-23 16:41:00', '2020-07-23 16:41:00'),
(74, 'OR1274', 'oxysept-1-step-90-days-pack788-131.png', 'Oxysept 1 Step Triple Pack', 22.9, '', 300, '0', '0', '0', '0', '0', '0', 0, '3 * 300ml', NULL, 0, 0, 0, 0, 0, 0, 0, 3, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-07-24 16:41:00', '2020-07-24 16:41:00'),
(75, 'OR1275', 'ultrazyme-universal-protein-cleaner788-131.png', 'Ultrazyme Universal Protein Cleaner', 9.4, '', 10, '0', '0', '0', '0', '0', '0', 0, '10 tablets', NULL, 0, 0, 0, 0, 0, 0, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-12-15 19:03:57', '2020-12-15 15:03:57'),
(76, 'OR1276', 'lens-plus-solution-120ml-pack788-131.png', 'Lens Plus Solution', 3.65, '', 120, '0', '0', '0', '0', '0', '0', 0, '120 ml Bottle', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-12-15 19:03:36', '2020-12-15 15:03:36'),
(77, 'OR1277', 'cadence-solution__011766-190.jpg', 'Cadence Comfort Multi-Purpose Solution', 13.99, '', 250, '0', '0', '0', '0', '0', '0', 0, '3 x 250 ml', NULL, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-12-15 19:03:26', '2020-12-15 15:03:26'),
(78, 'OR1278', NULL, 'Boston Advance Conditioning Solution', 6.7, '20', 120, '0', '0', '0', '0', '0', '0', 0, '120ml Bottle', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-12-15 02:42:22', '2020-12-14 22:42:22'),
(79, 'OR1279', '', 'SoloCare Aqua', 11, '', 360, '0', '0', '0', '0', '0', '0', 0, '360 ml Bottle', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-12-15 02:11:04', '2020-12-14 22:11:04'),
(80, 'OR1280', NULL, 'AOsept Plus HydraGlyde', 15, '23', 360, '0', '0', '0', '0', '0', '0', 0, '360 ml Bottle', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-12-15 02:13:58', '2020-12-14 22:13:58'),
(81, 'OR1281', NULL, 'Boston Advance Cleaner', 7, '', 30, '0', '0', '0', '0', '0', '0', 0, '30ml Bottle', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-12-13 11:16:42', '2020-12-13 06:16:42'),
(82, 'OR1282', NULL, 'SoloCare Aqua Twin Pack', 18, '', 360, '0', '0', '0', '0', '0', '0', 0, '2x360ml Bottle', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-12-13 11:16:29', '2020-12-13 06:16:29'),
(83, 'OR1283', NULL, 'Menicare Soft Twin Pack', 21, '', 360, '0', '0', '0', '0', '0', '0', 0, '2x360ml Bottle', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-12-13 11:16:15', '2020-12-13 06:16:15'),
(84, 'OR1284', NULL, 'Boston Simplus Flight Pack', 9, '', 60, '0', '0', '0', '0', '0', '0', 0, '2 x 60ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-12-13 11:15:16', '2020-12-13 06:15:16'),
(85, 'OR1285', 'comfi-drops1061-137.png', 'comfi Drops', 2.25, '3.75', 10, '0', '0', '0', '0', '0', '0', 0, '10ml bottle', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-04 16:41:00', '2020-08-04 16:41:00'),
(86, 'OR1286', 'eye-doctor-lid-wipes-11123-137.png', 'The Eye Doctor Lid Wipes', 3.89, '', 20, '0', '0', '0', '0', '0', '0', 0, '20 wipes', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-05 16:41:00', '2020-08-05 16:41:00'),
(87, 'OR1287', 'blink-intensive-tears-eye-drops-vials788-131.png', 'Blink Intensive Tears Vials', 5.39, '', 20, '0', '0', '0', '0', '0', '0', 0, '20 x 0.4 vials', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-06 16:41:00', '2020-08-06 16:41:00'),
(88, 'OR1288', 'blink-n-clean-eye-drops788-131.png', 'Blink-N-Clean Eye Drops', 3.99, '', 15, '0', '0', '0', '0', '0', '0', 0, '15ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-07 16:41:00', '2020-08-07 16:41:00'),
(89, 'OR1289', 'thera-pearl-eye-mask788-131.png', 'Thera-Pearl Eye Mask', 7, '', 1, '0', '0', '0', '0', '0', '0', 0, '1 Box', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-08 16:41:00', '2020-08-08 16:41:00'),
(90, 'OR1290', 'blink-soothing-eye-drops-bottle788-131.png', 'Blink Contacts Bottle', 4.49, '', 10, '0', '0', '0', '0', '0', '0', 0, '10ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-09 16:41:00', '2020-08-09 16:41:00'),
(91, 'OR1291', 'blink-lid-clean-wipes788-131.png', 'Blink Lid Clean', 6.99, '', 20, '0', '0', '0', '0', '0', '0', 0, '20 wipes', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-10 16:41:00', '2020-08-10 16:41:00'),
(92, 'OR1292', 'blink-intensive-tears-eye-drops-bottle788-131825-132.png', 'Blink Intensive Tears Bottle', 5.39, '', 10, '0', '0', '0', '0', '0', '0', 0, '10ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-11 16:41:00', '2020-08-11 16:41:00'),
(93, 'OR1293', 'systane-ultra-bottle788-131.png', 'Systane Ultra Bottle\r\n', 10.39, '', 10, '0', '0', '0', '0', '0', '0', 0, '10ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-12 16:41:00', '2020-08-12 16:41:00'),
(94, 'OR1294', 'eye-doctor11157-136.png', 'The Eye Doctor Allergy', 7.99, '', 1, '0', '0', '0', '0', '0', '0', 0, '1', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-13 16:41:00', '2020-08-13 16:41:00'),
(95, 'OR1295', 'systane-lid-wipes788-131.png', 'Systane Lid Wipes', 9.5, '', 30, '0', '0', '0', '0', '0', '0', 0, '30 wipes', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-14 16:41:00', '2020-08-14 16:41:00'),
(96, 'OR1296', 'artelac-nighttime-gel-main1093-136.png', 'Artelac Nighttime Gel', 5.89, '', 10, '0', '0', '0', '0', '0', '0', 0, '10g tube', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-15 16:41:00', '2020-08-15 16:41:00'),
(97, 'OR1297', 'clinitas-soothe-vials788-131.png', 'Clinitas Soothe', 6.49, '', 20, '0', '0', '0', '0', '0', '0', 0, '20 x 0.5ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-16 16:41:00', '2020-08-16 16:41:00'),
(98, 'OR1298', 'cleaning_kit31168-136.jpg', 'Feel Good Cleaning Kit', 2.99, '', 1, '0', '0', '0', '0', '0', '0', 0, '1 Box', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-17 16:41:00', '2020-08-17 16:41:00'),
(99, 'OR1299', 'clinitas-soothe-multi788-131.png', 'Clinitas Soothe Multi', 7.99, '', 10, '0', '0', '0', '0', '0', '0', 0, '10ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-18 16:41:00', '2020-08-18 16:41:00'),
(100, 'OR1300', 'icaps788-131.png', 'ICaps Tablets', 13, '', 30, '0', '0', '0', '0', '0', '0', 0, '30 Tablets', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-19 16:41:00', '2020-08-19 16:41:00'),
(101, 'OR1301', 'blink-refreshing-daily-eye-drops-bottle788-131.png', 'Blink Refreshing Bottle', 3.99, '', 10, '0', '0', '0', '0', '0', '0', 0, '10 ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-20 16:41:00', '2020-08-20 16:41:00'),
(102, 'OR1302', 'blink-triple-action930-133.png', 'Blink Intensive Triple Action', 9.99, '', 10, '0', '0', '0', '0', '0', '0', 0, '10ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-21 16:41:00', '2020-08-21 16:41:00'),
(103, 'OR1303', 'systane-ultra-vials788-131.png', 'Systane Ultra Vials', 13.99, '', 30, '0', '0', '0', '0', '0', '0', 0, '30 x 0.70ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-22 16:41:00', '2020-08-22 16:41:00'),
(104, 'OR1304', 'tote_bag11166-137.png', 'Feel Good Contacts Cotton Tote Bag', 1, '', 1, '0', '0', '0', '0', '0', '0', 0, '1 x bag', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-23 16:41:00', '2020-08-23 16:41:00'),
(105, 'OR1305', 'blink-refreshing-hydrating-eye-mist-10ml788-131.png', 'Blink Refreshing Hydrating Eye Mist 10ml', 13.5, '', 10, '0', '0', '0', '0', '0', '0', 0, '10ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-24 16:41:00', '2020-08-24 16:41:00'),
(106, 'OR1306', 'artelac_rebalance-lr304-106304-90305-881093-136.png', 'Artelac Rebalance', 7.49, '', 10, '0', '0', '0', '0', '0', '0', 0, '10ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-25 16:41:00', '2020-08-25 16:41:00'),
(107, 'OR1307', 'systane-hydration-eye-drops788-131.png', 'Systane Hydration', 14.99, '', 10, '0', '0', '0', '0', '0', '0', 0, '10ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-26 16:41:00', '2020-08-26 16:41:00'),
(108, 'OR1308', 'eye-doctor-lid-cleanser-11124-137.png', 'The Eye Doctor Lid Cleanser', 8.49, '', 100, '0', '0', '0', '0', '0', '0', 0, '100ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-27 16:41:00', '2020-08-27 16:41:00'),
(109, 'OR1309', 'eye-doctor-premium-11125-137.png', 'The Eye Doctor Premium', 15.99, '', 1, '0', '0', '0', '0', '0', '0', 0, '1 Eye Mask', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-28 16:41:00', '2020-08-28 16:41:00'),
(110, 'OR1310', 'systane-lubricant-eye-gel788-131.png', 'Systane Lubricant Gel Drops', 14.49, '', 10, '0', '0', '0', '0', '0', '0', 0, '10ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-29 16:41:00', '2020-08-29 16:41:00'),
(111, 'OR1311', 'systane-balance-eye-drops788-131.png', 'Systane Balance Bottle', 14.49, '', 10, '0', '0', '0', '0', '0', '0', 0, '10ml', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-30 16:41:00', '2020-08-30 16:41:00'),
(112, 'OR1312', 'feel-good-handy-kit-11131-136.png', 'Feel Good Handy Kit', 2.99, '', 1, '0', '0', '0', '0', '0', '0', 0, '1 Box', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-08-31 16:41:00', '2020-08-31 16:41:00'),
(113, 'OR1313', 'Ray-Ban-Erika-RX7046-5365-Rubber-Havana_021706-191.jpg', 'Ray-Ban Erika RX7046 5365 Rubber Havana', 55.9, '0', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 6, 7, 8, 0, 0, 2, 5, 0, 0, 0, 0, 0, 1, '2020-09-01 16:41:00', '2020-09-01 16:41:00'),
(114, 'OR1314', 'FGC-Jay-C2-Matte-Black-021598-178.jpg', 'FGC Jay C2 Matte Black', 20, '0', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 8, 15, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-02 16:41:00', '2020-09-02 16:41:00'),
(115, 'OR1315', 'FGC-Zac-C3-Grey-021618-184.jpg', 'FGC Zac C3 Grey', 12, '29', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 10, 19, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-03 16:41:00', '2020-09-03 16:41:00'),
(116, 'OR1316', 'Ray-Ban-Round-Metal-RX3447V-2500-47-Gold_021717-191.jpg', 'Ray-Ban Round Metal RX3447V 2500 47 Gold', 65.95, '', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 6, 7, 18, 0, 0, 2, 2, 0, 0, 0, 0, 0, 1, '2020-09-04 16:41:00', '2020-09-04 16:41:00'),
(117, 'OR1317', 'FGC-Hugo-C3-Black-021580-172.jpg', 'FGC Hugo C3 Black', 12, '25', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 6, 15, 0, 0, 2, 2, 0, 0, 0, 0, 0, 1, '2020-09-05 16:41:00', '2020-09-05 16:41:00'),
(118, 'OR1318', 'FGC-Zac-C2-Matte-Black-021615-184.jpg', 'FGC Zac C2 Matte Black', 12, '29', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 10, 15, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-06 16:41:00', '2020-09-06 16:41:00'),
(119, 'OR1319', 'FGC-Danny-C3-Black-Crystal-021635-184.jpg', 'FGC Danny C3 Black Crystal', 20, '50', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 8, 9, 14, 0, 0, 3, 6, 0, 0, 0, 0, 0, 1, '2021-01-06 23:33:34', '2021-01-06 19:33:34'),
(120, 'OR1320', 'FGC-Anu-C5-Transparent-021609-184.jpg', 'FGC Anu C5 Transparent', 20, '0', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 18, 14, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-08 16:41:00', '2020-09-08 16:41:00'),
(121, 'OR1321', 'FGC-Anu-C2-Milky-Pink-021607-184.jpg', 'FGC Anu C2 Milky Pink', 20, '0', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 18, 14, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-09 16:41:00', '2020-09-09 16:41:00'),
(122, 'OR1322', 'Ray-Ban-Round-Metal-RX3447V-2500-50-Gold_021713-193.jpg', 'Ray-Ban Round Metal RX3447V 2500 50 Gold', 65.95, '0', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 6, 7, 18, 0, 0, 2, 2, 0, 0, 0, 0, 0, 1, '2020-09-10 16:41:00', '2020-09-10 16:41:00'),
(123, 'OR1323', 'Ray-Ban-RX5268-5119-52-Matte-Black_021697-184.jpg', 'Ray-Ban RX5268 5119 52 Matte Black', 56, '0', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 6, 7, 15, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-11 16:41:00', '2020-09-11 16:41:00'),
(124, 'OR1324', 'FGC-Zac-C5-Tortoise-021619-185.jpg', 'FGC Zac C5 Tortoise\r\n', 12, '29', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 7, 8, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-12 16:41:00', '2020-09-12 16:41:00'),
(125, 'OR1325', 'FGC-Anu-C4-Purple-Stripe-021608-184.jpg', 'FGC Anu C4 Purple Stripes', 20, '', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 3, 11, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-13 16:41:00', '2020-09-13 16:41:00'),
(126, 'OR1326', 'FGC-Sienna-C1-Black-021621-184.jpg', 'FGC Sienna C1 Black', 20, '', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 8, 1, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-14 16:41:00', '2020-09-14 16:41:00'),
(127, 'OR1327', 'FGC-Ryan-C4-Grey-Crystal-021670-184.jpg', 'FGC Ryan C4 Grey Crystal', 29, '', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 6, 6, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-15 16:41:00', '2020-09-15 16:41:00'),
(128, 'OR1328', 'Oakley-Wheelhouse-OX8166-03-52-Satin-Grey-Smoke_021721-197.jpg', 'Oakley Wheelhouse OX8166 03 52 Satin Grey Smoke', 85, '', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 3, 8, 6, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-16 16:41:00', '2020-09-16 16:41:00'),
(129, 'OR1329', 'Ray-Ban-Erika-RX7046-5953-Transparent_021749-191.jpg', 'Ray-Ban Erika RX7046 5953 Transparent', 74, '', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 6, 7, 14, 0, 0, 2, 1, 0, 0, 0, 0, 0, 1, '2020-09-17 16:41:00', '2020-09-17 16:41:00'),
(130, 'OR1330', 'FGC-Jay-C3-Grey-Stripe-021599-178.jpg', 'FGC Jay C3 Grey Stripes', 20, '', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 8, 6, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-18 16:41:00', '2020-09-18 16:41:00'),
(131, 'OR1331', 'FGC-Fox-C3-Beige-Crystal-021668-184.jpg', 'FGC Fox C3 Beige Crystal', 29, '', 5, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 5, 4, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-19 16:41:00', '2020-09-19 16:41:00'),
(132, 'OR1332', 'Oakley-Pitchman-OX8050-01-53-Satin-Black_021716-191.jpg', 'Oakley Pitchman OX8050 01 53 Satin Black', 85, '', 25, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 3, 8, 1, 0, 0, 2, 1, 0, 0, 0, 0, 0, 1, '2020-09-20 16:41:00', '2020-09-20 16:41:00'),
(133, 'OR1333', 'Superdry-SDO-Tegan-001-Silver_021673-184.jpg', 'Superdry SDO Tegan 001 Silver', 59, '', 13, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 7, 7, 13, 0, 0, 2, 2, 0, 0, 0, 0, 0, 1, '2020-09-21 16:41:00', '2020-09-21 16:41:00'),
(134, 'OR1334', 'FGC-Adam-C2-Matte-Black_Shiny-Light-Gunmetal-021597-178.jpg', 'FGC Adam C2 Matte Black/Shiny Light Gunmetal', 39, '', 28, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1, 6, 6, 0, 0, 2, 2, 0, 0, 0, 0, 0, 1, '2020-09-22 16:41:00', '2020-09-22 16:41:00'),
(135, 'OR1335', 'ONeill-ONO-Aidan-004-Matte-Black_021629-184.jpg', 'O\'Neill ONO-Aidan 004 Matte Black', 59, '', 35, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 4, 6, 1, 0, 0, 2, 6, 0, 0, 0, 0, 0, 1, '2020-09-23 16:41:00', '2020-09-23 16:41:00'),
(136, 'OR1336', 'tommy-hilfiger-th1636-086-dark-havana-021756-191.jpg', 'Tommy Hilfiger TH1636 086 Dark Havana', 75, '', 42, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 8, 6, 8, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-24 16:41:00', '2020-09-24 16:41:00'),
(137, 'OR1337', 'ONeill-ONO-Tide-102-Matte-Tortoise_021630-184.jpg', 'O\'Neill ONO-Tide 102 Matte Tortoise', 59, '', 88, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 4, 8, 1, 0, 0, 2, 6, 0, 0, 0, 0, 0, 1, '2020-09-25 16:41:00', '2020-09-25 16:41:00'),
(138, 'OR1338', 'le-specs-outskirt-vintage-tortoise-021769-191.jpg', 'Le Specs Outskirt Vintage Tortoise', 49, '', 23, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 2, 7, 8, 0, 0, 2, 1, 0, 0, 0, 0, 0, 1, '2020-09-26 16:41:00', '2020-09-26 16:41:00'),
(139, 'OR1339', 'le-specs-perception-matte-bone-021783-191.jpg', 'Le Specs Perception Matte Bone', 49, '', 38, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 2, 13, 14, 0, 0, 2, 4, 0, 0, 0, 0, 0, 1, '2020-09-27 16:41:00', '2020-09-27 16:41:00'),
(140, 'OR1340', 'le-specs-goldfinch-black-021771-191.jpg', 'Le Specs Goldfinch Black', 49, '', 25, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 3, 1, 0, 0, 2, 6, 0, 0, 0, 0, 0, 1, '2020-09-28 16:41:00', '2020-09-28 16:41:00'),
(141, 'OR1341', 'le-specs-house-party-54-antique-gunmetal-021772-191.jpg', 'Le Specs House Party 54 Antique Gunmetal', 49, '', 12, '0', '0', '0', '0', '0', '0', 0, '0', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 2, 1, 7, 0, 0, 2, 6, 0, 0, 0, 0, 0, 1, '2020-09-29 16:41:00', '2020-09-29 16:41:00'),
(151, 'PR1115', 'ff.PNG', 'ssdd', 23, '', 0, '0', '0', '0', '0', '0', '0', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-11-30 19:57:54', '2020-11-30 19:57:54'),
(162, 'PR1126', '', 'glasses', 120, '50', 12, '0', '0', '0', '0', '0', '0', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 5, 6, 0, 0, 3, 5, 0, 0, 0, 0, 0, 1, '2020-12-28 13:35:11', '2020-12-28 13:35:11'),
(163, 'PR1127', '125939939_1728684053973145_3697426849276409586_n.jpg', 'glasses2', 120, '50', 12, '0', '0', '0', '0', '0', '0', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 6, 6, 0, 0, 3, 6, 25, 45, 32, 45, 80, 1, '2020-12-29 11:46:07', '2020-12-28 13:40:06'),
(166, 'PR1130', 'photo-shocked-redhead-female-kid-with-long-curly-hair-posing-pink-background-casual-clothes-raising-eyebrows-looking-camera-amazedly-covering-mouth-with-hands-rounding-eyes.jpg', 'Mee Product', 12, '13', 14, '0', '0', '0', '0', '0', '0', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 13, 15, 20, NULL, NULL, 0, 12, 0, 0, 0, 0, 0, 1, '2021-01-11 03:58:51', '2021-01-11 03:58:51'),
(167, 'PR1131', 'photo-shocked-redhead-female-kid-with-long-curly-hair-posing-pink-background-casual-clothes-raising-eyebrows-looking-camera-amazedly-covering-mouth-with-hands-rounding-eyes.jpg', 'Asif Rasheed', 12, '13', 14, '0', '0', '0', '0', '0', '0', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 9, 11, 20, 1, 1, 0, 11, 0, 0, 0, 0, 0, 1, '2021-01-11 03:59:57', '2021-01-11 03:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_description`
--

CREATE TABLE `product_description` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Product_Description` text DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_description`
--

INSERT INTO `product_description` (`id`, `Product_id`, `Product_Description`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 'none', 1, '2020-08-17 15:38:43', '0000-00-00 00:00:00'),
(1, 9, '<h4>Product Description</h4>\r\nSmart and sophisticated, FGC Hugo C1 Light Gunmetal glasses for men and women can be worn every day. ', 1, '2020-07-09 05:10:18', '0000-00-00 00:00:00'),
(2, 1, 'Product Description\r\nSmart and sophisticated, FGC Hugo C1 Light Gunmetal Contact Lenses for men and women can be worn every day.<i>sdsda</i>', 1, '2020-10-25 04:37:44', '0000-00-00 00:00:00'),
(3, 2, '<b>Hala Madrid</b>', 1, '2020-10-25 04:38:27', '2020-10-25 00:38:13'),
(4, 58, 'asd', 1, '2020-11-08 04:51:02', '2020-11-08 04:51:02'),
(5, 147, 'adsas', 1, '2020-11-11 08:24:59', '2020-11-11 08:24:59'),
(6, 5, 'asd', 1, '2020-12-10 09:08:17', '2020-12-10 09:08:17'),
(7, 42, '<div><div><h2>1 Day Acuvue Moist For Astigmatism Product Description</h2></div></div><div><div>1 Day Acuvue Moist for Astigmatism are toric daily disposable contact lenses, designed to correct the effects of astigmatism. Enjoy the convenience of a fresh and comfortable pair of toric lenses, designed to last from morning till night, every day.The blink-stabilising design of 1 Day Acuvue Moist for Astigmatism features four zones (as opposed to the traditional one zone) that ensure the lens stays perfectly stable on your cornea, even during movement. This delivers clear, comfortable and stable vision all day long. No matter how active your lifestyle is, these Acuvue Moist lenses won\'t let your astigmatism hold you back.</div></div>', 1, '2020-12-10 15:16:11', '2020-12-10 10:13:18'),
(8, 103, 'ssdd', 1, '2020-12-15 16:29:15', '2020-12-15 16:29:15'),
(9, 163, 'ss', 1, '2020-12-29 08:01:30', '2020-12-29 08:01:30'),
(10, 14, 'sda', 1, '2021-01-11 04:41:40', '2021-01-11 04:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail_advice`
--

CREATE TABLE `product_detail_advice` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Product_Detail_Advice` text DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_detail_advice`
--

INSERT INTO `product_detail_advice` (`id`, `Product_id`, `Product_Detail_Advice`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 'none', 1, '2020-10-27 01:50:21', '0000-00-00 00:00:00'),
(1, 1, 'Hello Sample', 1, '2020-08-15 06:08:25', '0000-00-00 00:00:00'),
(2, 2, '<b>1<br></b>', 1, '2020-10-27 01:53:03', '2020-10-25 00:51:53'),
(3, 5, 'sda', 1, '2020-12-10 09:08:22', '2020-12-10 09:08:22'),
(4, 103, 'sda12', 1, '2020-12-15 16:29:21', '2020-12-15 16:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_merge`
--

CREATE TABLE `product_merge` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Merge` int(24) DEFAULT NULL,
  `Type` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_merge`
--

INSERT INTO `product_merge` (`id`, `Product_id`, `Merge`, `Type`, `active`, `created_at`, `updated_at`) VALUES
(1, 0, 0, NULL, 1, '2020-07-15 17:31:42', '0000-00-00 00:00:00'),
(2, 9, 11, 'Glasses', 1, '2020-07-11 17:17:41', '0000-00-00 00:00:00'),
(3, 9, 12, 'Glasses', 1, '2020-07-11 17:17:44', '0000-00-00 00:00:00'),
(5, 10, 9, 'Glasses', 1, '2020-07-11 17:17:45', '0000-00-00 00:00:00'),
(6, 10, 12, 'Glasses', 1, '2020-07-11 17:17:48', '0000-00-00 00:00:00'),
(7, 11, 9, 'Sunglasses', 1, '2020-07-11 17:36:29', '2020-07-11 17:36:29'),
(8, 11, 10, 'Sunglasses', 1, '2020-07-11 17:36:54', '2020-07-11 17:36:54'),
(9, 12, 9, 'Sunglasses', 1, '2020-07-11 17:46:13', '2020-07-11 17:46:13'),
(10, 12, 10, 'Sunglasses', 1, '2020-07-11 17:46:24', '2020-07-11 17:46:24'),
(11, 12, 11, 'Sunglasses', 1, '2020-07-11 17:46:36', '2020-07-11 17:46:36'),
(13, 9, 164, 'Glasses', 1, '2020-12-31 14:33:14', '2020-12-31 14:33:14'),
(14, 164, 9, 'Glasses', 1, '2021-01-04 01:44:24', '2021-01-04 01:44:24'),
(15, 164, 164, 'Glasses', 1, '2021-01-04 01:44:33', '2021-01-04 01:44:33'),
(17, 17, 11, 'Sunglasses', 1, '2021-01-11 04:35:12', '2021-01-11 04:35:12'),
(18, 11, 15, 'Sunglasses', 1, '2021-04-11 16:35:54', '2021-04-11 16:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `quantity_of_boxes`
--

CREATE TABLE `quantity_of_boxes` (
  `id` int(11) NOT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `Side_Select` varchar(225) DEFAULT NULL,
  `Value` int(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quantity_of_boxes`
--

INSERT INTO `quantity_of_boxes` (`id`, `Product_id`, `Side_Select`, `Value`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 'none', 0, 0, '2020-08-10 01:28:09', '2020-08-04 03:13:05'),
(3, 3, 'left', 12, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(4, 3, 'right', 10, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(5, 4, 'left', 6, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(6, 4, 'right', 8, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(7, 1, 'left', 12, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(8, 1, 'right', 12, 1, '2020-06-10 02:29:47', '2020-06-10 02:29:47'),
(11, 147, 'left', 4, 1, '2020-11-08 10:42:47', '2020-11-08 10:42:47'),
(12, 147, 'right', 2, 1, '2020-11-08 10:42:51', '2020-11-08 10:42:51'),
(13, 52, 'left', 4, 1, '2020-11-11 08:34:36', '2020-11-11 08:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `reglaze`
--

CREATE TABLE `reglaze` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reglaze`
--

INSERT INTO `reglaze` (`id`, `name`, `price`, `image`, `active`, `created_at`, `updated_at`) VALUES
(0, 'none', 0, 'none', 0, '2020-08-07 04:32:35', '2020-08-04 03:13:05'),
(2, 'SEMI RIMLESS REGLAZE', 15, 'semi-rimless-reglaze.png', 1, '2020-08-07 04:33:38', '2020-08-04 03:13:05'),
(4, 'Any', 100, 'ssdd.jpg', 1, '2021-03-26 12:50:15', '2021-03-26 12:50:15'),
(13, 'asd', 50, 'ALLCOURT-PRINTING-mobile.png', 1, '2021-03-27 14:10:35', '2021-03-27 10:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `shape`
--

CREATE TABLE `shape` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Shape` varchar(225) DEFAULT NULL,
  `image_link` varchar(255) DEFAULT NULL,
  `Type` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shape`
--

INSERT INTO `shape` (`id`, `Product_id`, `Shape`, `image_link`, `Type`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', NULL, '', 1, '2020-06-10 02:33:03', '0000-00-00 00:00:00'),
(1, 1, 'Aviator', 'aviator.png', 'Glasses', 1, '2020-06-15 18:17:36', '0000-00-00 00:00:00'),
(2, 1, 'Butterfly', 'butterfly.png', 'Glasses', 1, '2020-06-15 18:17:52', '0000-00-00 00:00:00'),
(3, 1, 'Cat Eye', 'cateye.png', 'Glasses', 1, '2020-06-15 18:18:05', '0000-00-00 00:00:00'),
(4, 1, 'Clubmaster', 'clubmaster.png', 'Glasses', 1, '2020-06-15 18:18:27', '0000-00-00 00:00:00'),
(5, 1, 'Oval', 'oval.png', 'Glasses', 1, '2020-06-15 18:18:47', '0000-00-00 00:00:00'),
(6, 1, 'Rectangle', 'rectangle.png', 'Glasses', 1, '2020-06-15 18:19:29', '0000-00-00 00:00:00'),
(7, 1, 'Round', 'round.png', 'Glasses', 1, '2020-06-15 18:19:39', '0000-00-00 00:00:00'),
(8, 1, 'Square', 'square.png', 'Glasses', 1, '2020-06-15 18:19:47', '0000-00-00 00:00:00'),
(9, 1, 'Wayfarer', 'wayfarer.png', 'Glasses', 1, '2020-06-15 18:19:56', '0000-00-00 00:00:00'),
(10, 1, 'Aviator', 'aviator.png', 'Sunglasses', 1, '2020-06-16 08:26:03', '0000-00-00 00:00:00'),
(11, 1, 'Oval', 'oval.png', 'Sunglasses', 1, '2020-06-16 08:26:19', '0000-00-00 00:00:00'),
(12, 1, 'Rectangle', 'rectangle.png', 'Sunglasses', 1, '2020-06-16 08:26:30', '0000-00-00 00:00:00'),
(13, 1, 'Round', 'round.png', 'Sunglasses', 1, '2020-06-16 08:26:40', '0000-00-00 00:00:00'),
(14, 1, 'Square', 'square.png', 'Sunglasses', 1, '2020-06-16 08:26:51', '0000-00-00 00:00:00'),
(15, 1, 'Wayfarer', 'wayfarer.png', 'Sunglasses', 1, '2020-06-16 08:26:59', '0000-00-00 00:00:00'),
(16, 1, 'Wrap', 'wrap.png', 'Sunglasses', 1, '2020-06-16 08:27:10', '0000-00-00 00:00:00'),
(17, 1, 'Clubmaster', 'clubmaster.png', 'Sunglasses', 1, '2020-06-16 08:27:20', '0000-00-00 00:00:00'),
(18, 1, 'Cat Eye', 'cateye.png', 'Sunglasses', 1, '2020-06-16 08:27:30', '0000-00-00 00:00:00'),
(19, 1, 'Butterfly', 'butterfly.png', 'Sunglasses', 1, '2020-06-16 08:27:37', '0000-00-00 00:00:00'),
(20, 1, 'Hexagonal', 'hexagonal.png', 'Sunglasses', 1, '2020-06-16 08:27:49', '0000-00-00 00:00:00'),
(21, 1, 'Octagonal', 'octagonal.png', 'Sunglasses', 1, '2020-06-16 08:27:56', '0000-00-00 00:00:00'),
(28, 1, 'xc', '10400239_10206175023916995_2254365601940764553_n.jpg', 'Sunglasses', 1, '2021-01-11 03:54:36', '2021-01-11 03:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(11) NOT NULL,
  `service_name` varchar(225) DEFAULT NULL,
  `charges` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `service_name`, `charges`, `active`, `created_at`, `updated_at`) VALUES
(0, 'none', '0', 0, '2021-01-20 19:14:15', '2021-01-20 19:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `shop_by_manufacturer`
--

CREATE TABLE `shop_by_manufacturer` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Manufacturer_Name` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_by_manufacturer`
--

INSERT INTO `shop_by_manufacturer` (`id`, `Product_id`, `Manufacturer_Name`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 'none', 0, '2020-10-31 13:02:17', '0000-00-00 00:00:00'),
(1, 1, 'Alcon (Ciba Vision)', 1, '2020-06-09 21:10:30', '0000-00-00 00:00:00'),
(2, 1, 'Bausch & Lomb', 1, '2020-06-09 21:10:45', '0000-00-00 00:00:00'),
(3, 1, 'CooperVision / Sauflon', 1, '2020-06-09 21:10:57', '0000-00-00 00:00:00'),
(4, 1, 'Johnson & Johnson', 1, '2020-06-10 07:31:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `types_of_contact_lenses`
--

CREATE TABLE `types_of_contact_lenses` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Contact_Lense_Type` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types_of_contact_lenses`
--

INSERT INTO `types_of_contact_lenses` (`id`, `Product_id`, `Contact_Lense_Type`, `active`, `created_at`, `updated_at`) VALUES
(0, 0, 'none', 0, '2020-10-31 13:02:30', '0000-00-00 00:00:00'),
(1, 1, 'Daily Contact Lenses', 1, '2020-06-09 21:05:01', '0000-00-00 00:00:00'),
(2, 1, 'Monthly Contact Lenses', 1, '2020-06-09 21:06:54', '0000-00-00 00:00:00'),
(3, 1, 'Two Weekly Lenses', 1, '2020-06-09 21:07:09', '0000-00-00 00:00:00'),
(4, 1, 'Coloured Contact Lenses', 1, '2020-06-09 21:07:26', '0000-00-00 00:00:00'),
(5, 1, 'Torics for Astigmatism', 1, '2020-06-09 21:07:40', '0000-00-00 00:00:00'),
(6, 1, 'Multifocal Lenses', 1, '2020-06-09 21:07:53', '0000-00-00 00:00:00'),
(7, 1, 'Yearly Contact Lenses', 1, '2020-06-09 21:08:04', '0000-00-00 00:00:00'),
(8, 1, 'Extended Wear Lenses', 1, '2020-06-09 21:08:14', '0000-00-00 00:00:00'),
(9, 1, 'Silicone Hydrogel Lenses', 1, '2020-06-09 21:08:25', '0000-00-00 00:00:00'),
(10, 1, 'Cheap Contact Lenses', 1, '2020-07-10 13:21:57', '0000-00-00 00:00:00'),
(11, 1, 'No Prescription Lenses', 1, '2020-07-10 13:22:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `types_of_solutions`
--

CREATE TABLE `types_of_solutions` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Solution_Type` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types_of_solutions`
--

INSERT INTO `types_of_solutions` (`id`, `Product_id`, `Solution_Type`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', 0, '2020-11-30 19:12:21', '0000-00-00 00:00:00'),
(1, 1, 'Multi-Purpose Solution', 1, '2020-06-10 04:52:57', '0000-00-00 00:00:00'),
(2, 1, 'Saline Solutions', 1, '2020-06-10 04:53:29', '0000-00-00 00:00:00'),
(3, 1, 'Peroxide Solutions', 1, '2020-06-10 04:53:51', '0000-00-00 00:00:00'),
(4, 1, 'Travel Pack Solutions', 1, '2020-06-10 04:54:04', '0000-00-00 00:00:00'),
(5, 1, 'Rigid & Permeable Solutions', 1, '2020-06-10 04:54:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `role` varchar(50) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `role`, `active`, `created_at`, `updated_at`) VALUES
(2, 'woieq21312312', 'k201054@nu.edu.213123123k', 'dsfsd', '3098421', 'Billing', 1, '2021-04-01 04:34:41', '2021-04-01 04:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `wearing_type`
--

CREATE TABLE `wearing_type` (
  `id` int(11) NOT NULL,
  `Product_id` int(24) DEFAULT NULL,
  `Wearing_Type` varchar(225) DEFAULT NULL,
  `Type` varchar(225) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wearing_type`
--

INSERT INTO `wearing_type` (`id`, `Product_id`, `Wearing_Type`, `Type`, `active`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', '', 1, '2020-06-10 02:36:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `axis`
--
ALTER TABLE `axis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `base_curve`
--
ALTER TABLE `base_curve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefits_description`
--
ALTER TABLE `benefits_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands_of_contact_lenses`
--
ALTER TABLE `brands_of_contact_lenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_merge`
--
ALTER TABLE `category_merge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colours`
--
ALTER TABLE `colours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_lense_color`
--
ALTER TABLE `contact_lense_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_review`
--
ALTER TABLE `customer_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cylinder`
--
ALTER TABLE `cylinder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diameter`
--
ALTER TABLE `diameter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eye_care`
--
ALTER TABLE `eye_care`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frame_color`
--
ALTER TABLE `frame_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frame_size`
--
ALTER TABLE `frame_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `further_optical_advice`
--
ALTER TABLE `further_optical_advice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lenses_visions_price`
--
ALTER TABLE `lenses_visions_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lens_colour`
--
ALTER TABLE `lens_colour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lens_size`
--
ALTER TABLE `lens_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `number_of_pack`
--
ALTER TABLE `number_of_pack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optician_brands`
--
ALTER TABLE `optician_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_numbers`
--
ALTER TABLE `order_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_eye_care`
--
ALTER TABLE `popular_eye_care`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_solutions`
--
ALTER TABLE `popular_solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postage`
--
ALTER TABLE `postage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `power`
--
ALTER TABLE `power`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Product_Description` (`Product_Description`),
  ADD KEY `Product_Detail_Advice` (`Product_Detail_Advice`);

--
-- Indexes for table `product_description`
--
ALTER TABLE `product_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_detail_advice`
--
ALTER TABLE `product_detail_advice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_merge`
--
ALTER TABLE `product_merge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantity_of_boxes`
--
ALTER TABLE `quantity_of_boxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reglaze`
--
ALTER TABLE `reglaze`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shape`
--
ALTER TABLE `shape`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_by_manufacturer`
--
ALTER TABLE `shop_by_manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types_of_contact_lenses`
--
ALTER TABLE `types_of_contact_lenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types_of_solutions`
--
ALTER TABLE `types_of_solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wearing_type`
--
ALTER TABLE `wearing_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `axis`
--
ALTER TABLE `axis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `base_curve`
--
ALTER TABLE `base_curve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `benefits_description`
--
ALTER TABLE `benefits_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `brands_of_contact_lenses`
--
ALTER TABLE `brands_of_contact_lenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category_merge`
--
ALTER TABLE `category_merge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `colours`
--
ALTER TABLE `colours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `contact_lense_color`
--
ALTER TABLE `contact_lense_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_review`
--
ALTER TABLE `customer_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cylinder`
--
ALTER TABLE `cylinder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `diameter`
--
ALTER TABLE `diameter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `eye_care`
--
ALTER TABLE `eye_care`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `frame_color`
--
ALTER TABLE `frame_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `frame_size`
--
ALTER TABLE `frame_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `further_optical_advice`
--
ALTER TABLE `further_optical_advice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lenses_visions_price`
--
ALTER TABLE `lenses_visions_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lens_colour`
--
ALTER TABLE `lens_colour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lens_size`
--
ALTER TABLE `lens_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `number_of_pack`
--
ALTER TABLE `number_of_pack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `optician_brands`
--
ALTER TABLE `optician_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_numbers`
--
ALTER TABLE `order_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popular_eye_care`
--
ALTER TABLE `popular_eye_care`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `popular_solutions`
--
ALTER TABLE `popular_solutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `postage`
--
ALTER TABLE `postage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `power`
--
ALTER TABLE `power`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4018;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `product_description`
--
ALTER TABLE `product_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_detail_advice`
--
ALTER TABLE `product_detail_advice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_merge`
--
ALTER TABLE `product_merge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `quantity_of_boxes`
--
ALTER TABLE `quantity_of_boxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reglaze`
--
ALTER TABLE `reglaze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `shape`
--
ALTER TABLE `shape`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_by_manufacturer`
--
ALTER TABLE `shop_by_manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `types_of_contact_lenses`
--
ALTER TABLE `types_of_contact_lenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `types_of_solutions`
--
ALTER TABLE `types_of_solutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wearing_type`
--
ALTER TABLE `wearing_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Product_Description`) REFERENCES `product_description` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Product_Detail_Advice`) REFERENCES `product_detail_advice` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
