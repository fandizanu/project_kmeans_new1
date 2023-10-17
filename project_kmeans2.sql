-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 12:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_kmeans2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_foto`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin_default.jpg'),
(2, 'Jamaluddin', 'jamal', '74f56399c89f4bd03ff5e85b6bf4e85f', 'admin_default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kecamatan_id` int(11) NOT NULL,
  `kecamatan_nama` varchar(100) NOT NULL,
  `kecamatan_alamat` varchar(100) NOT NULL,
  `kecamatan_latitude` varchar(100) NOT NULL,
  `kecamatan_longtitude` varchar(100) NOT NULL,
  `kecamatan_foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kecamatan_id`, `kecamatan_nama`, `kecamatan_alamat`, `kecamatan_latitude`, `kecamatan_longtitude`, `kecamatan_foto`) VALUES
(2, 'Samalanga', 'Samalanga', '5.0858407', '96.37600345', ''),
(3, 'Sp.Mamplam', 'Sp. Mamplam', '5.0854592499999995', '96.41468517938034', ''),
(4, 'Pandrah', 'Pandrah', '5.0750943500000005', '96.45229876464089', ''),
(5, 'Jeunib', 'Jeunieb', '5.0606796', '96.48204971426321', ''),
(6, 'peulimbang', 'Peulimbang', '5.1874669', '96.5246332', 'no_image_xxxxx.png'),
(7, 'Peudada', 'Peudada', '5.0654534', '96.56530488694182', 'no_image_xxxxx.png'),
(8, 'Juli', 'Juli', '5.0771204', '96.69976748764887', 'no_image_xxxxx.png'),
(9, 'Jeumpa', 'Jeumpa', '5.09807895', '96.6407419895061', 'no_image_xxxxx.png'),
(10, 'Kota Juang', 'Kota Juang', '5.1944136499999995', '96.72126899847709', 'no_image_xxxxx.png'),
(11, 'Kuala', 'Kuala', '5.2335087', '96.72018980698466', 'no_image_xxxxx.png'),
(12, 'Jangka', 'Jangka', '5.24880835', '96.78816629717882', 'no_image_xxxxx.png'),
(13, 'Peusangan', 'Peusangan', '5.1951213', '96.77795733880339', 'no_image_xxxxx.png'),
(14, 'Peusangan Selatan', 'Peusangan Selatan', '5.0677311', '96.75894546646151', 'no_image_xxxxx.png'),
(15, 'Peusangan Siblah Krueng', 'Peusangan Siblah Krueng', '5.1612309', '96.8144095', 'no_image_xxxxx.png'),
(16, 'Makmur', 'Makmur', '5.1284658499999995', '96.84534759854668', 'no_image_xxxxx.png'),
(17, 'Gandapura', 'adsdasdas', '5.2285654', '96.8791291', 'no_image_xxxxx.png'),
(18, 'Kuta Blang', 'adasd', '5.2111057', '96.8435748', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `kriteria_id` int(11) NOT NULL,
  `kriteria_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`kriteria_id`, `kriteria_nama`) VALUES
(2, 'Jenis Jalan'),
(3, 'Curah Hujan'),
(4, 'Penggunaan Lahan'),
(5, 'Kemiringan Lahan');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `tanaman_id` int(11) NOT NULL,
  `tanaman_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`tanaman_id`, `tanaman_nama`) VALUES
(1, 'Samarinda');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman_kriteria`
--

CREATE TABLE `tanaman_kriteria` (
  `tk_id` int(11) NOT NULL,
  `tk_tanaman` int(11) NOT NULL,
  `tk_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanaman_kriteria`
--

INSERT INTO `tanaman_kriteria` (`tk_id`, `tk_tanaman`, `tk_kriteria`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(4, 1, 5),
(31, 2, 6),
(32, 2, 7),
(33, 2, 8),
(34, 6, 2),
(35, 6, 3),
(36, 6, 4),
(37, 6, 5),
(38, 6, 6),
(39, 6, 7),
(40, 6, 8),
(41, 5, 2),
(42, 5, 3),
(43, 5, 4),
(44, 5, 5),
(45, 5, 6),
(46, 4, 2),
(47, 4, 3),
(48, 4, 5),
(49, 4, 6),
(50, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tanaman_nilai`
--

CREATE TABLE `tanaman_nilai` (
  `tn_id` int(11) NOT NULL,
  `tn_tanaman` int(11) NOT NULL,
  `tn_kecamatan` int(11) NOT NULL,
  `tn_kriteria` int(11) NOT NULL,
  `tn_nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanaman_nilai`
--

INSERT INTO `tanaman_nilai` (`tn_id`, `tn_tanaman`, `tn_kecamatan`, `tn_kriteria`, `tn_nilai`) VALUES
(1, 1, 2, 2, '184'),
(2, 1, 2, 3, '144'),
(3, 1, 2, 4, '900'),
(4, 1, 2, 5, '210'),
(5, 1, 3, 2, '2'),
(6, 1, 3, 3, '2173.5'),
(7, 1, 3, 4, '1.05'),
(8, 1, 3, 5, '807'),
(9, 1, 4, 2, '172'),
(10, 1, 4, 3, '123.5'),
(11, 1, 4, 4, '950'),
(12, 1, 4, 5, '117'),
(13, 1, 5, 2, '340'),
(14, 1, 5, 3, '212.6'),
(15, 1, 5, 4, '975'),
(16, 1, 5, 5, '423'),
(17, 1, 6, 2, '459'),
(18, 1, 6, 3, '303.3'),
(19, 1, 6, 4, '945'),
(20, 1, 6, 5, '1.585'),
(21, 1, 7, 2, '564'),
(22, 1, 7, 3, '317.4'),
(23, 1, 7, 4, '1.15'),
(24, 1, 7, 5, '1.01'),
(25, 1, 8, 2, '1.627'),
(26, 1, 8, 3, '1556.4'),
(27, 1, 8, 4, '1.2'),
(28, 1, 8, 5, '2.098'),
(29, 1, 9, 2, '2.101'),
(30, 1, 9, 3, '2429.3'),
(31, 1, 9, 4, '1.23'),
(32, 1, 9, 5, '1.064'),
(37, 1, 10, 2, '205'),
(38, 1, 10, 3, '168.2'),
(39, 1, 10, 4, '1.16'),
(40, 1, 10, 5, '285'),
(41, 1, 11, 2, '204'),
(42, 1, 11, 3, '219.7'),
(43, 1, 11, 4, '1.15'),
(44, 1, 11, 5, '199'),
(45, 1, 12, 2, '938'),
(46, 1, 12, 3, '711.5'),
(47, 1, 12, 4, '980'),
(48, 1, 12, 5, '2.41'),
(49, 1, 13, 2, '2215'),
(50, 1, 13, 3, '2179.4'),
(51, 1, 13, 4, '106'),
(52, 1, 13, 5, '1118'),
(53, 1, 14, 2, '1.762'),
(54, 1, 14, 3, '1799.8'),
(55, 1, 14, 4, '1.15'),
(56, 1, 14, 5, '4.778'),
(57, 1, 15, 2, '667'),
(58, 1, 15, 3, '610.5'),
(59, 1, 15, 4, '980'),
(60, 1, 15, 5, '1.425'),
(61, 1, 16, 2, '993'),
(62, 1, 16, 3, '1032.6'),
(63, 1, 16, 4, '1.12'),
(64, 1, 16, 5, '1.31'),
(65, 1, 17, 2, '893'),
(66, 1, 17, 3, '1113.6'),
(67, 1, 17, 4, '1.74'),
(68, 1, 17, 5, '1.639'),
(69, 1, 18, 2, '793'),
(70, 1, 18, 3, '624.8'),
(71, 1, 18, 4, '1.1'),
(72, 1, 18, 5, '457'),
(85, 6, 2, 2, '13'),
(86, 6, 2, 3, '6'),
(87, 6, 2, 4, '51'),
(88, 6, 2, 5, '4'),
(89, 6, 2, 6, '45'),
(90, 6, 2, 7, '33'),
(91, 6, 2, 8, '79'),
(92, 6, 17, 2, '32'),
(93, 6, 17, 3, '29'),
(94, 6, 17, 4, '37'),
(95, 6, 17, 5, '63'),
(96, 6, 17, 6, '2'),
(97, 6, 17, 7, '10'),
(98, 6, 17, 8, '100'),
(99, 6, 6, 2, '49'),
(100, 6, 6, 3, '70'),
(101, 6, 6, 4, '13'),
(102, 6, 6, 5, '61'),
(103, 6, 6, 6, '79'),
(104, 6, 6, 7, '25'),
(105, 6, 6, 8, '36'),
(106, 6, 16, 2, '88'),
(107, 6, 16, 3, '1'),
(108, 6, 16, 4, '47'),
(109, 6, 16, 5, '73'),
(110, 6, 16, 6, '22'),
(111, 6, 16, 7, '74'),
(112, 6, 16, 8, '17'),
(113, 6, 9, 2, '42'),
(114, 6, 9, 3, '21'),
(115, 6, 9, 4, '52'),
(116, 6, 9, 5, '85'),
(117, 6, 9, 6, '41'),
(118, 6, 9, 7, '92'),
(119, 6, 9, 8, '68'),
(120, 6, 10, 2, '7'),
(121, 6, 10, 3, '45'),
(122, 6, 10, 4, '38'),
(123, 6, 10, 5, '87'),
(124, 6, 10, 6, '2'),
(125, 6, 10, 7, '59'),
(126, 6, 10, 8, '36'),
(127, 6, 3, 2, '49'),
(128, 6, 3, 3, '72'),
(129, 6, 3, 4, '84'),
(130, 6, 3, 5, '86'),
(131, 6, 3, 6, '83'),
(132, 6, 3, 7, '54'),
(133, 6, 3, 8, '13'),
(134, 6, 4, 2, '25'),
(135, 6, 4, 3, '71'),
(136, 6, 4, 4, '82'),
(137, 6, 4, 5, '93'),
(138, 6, 4, 6, '72'),
(139, 6, 4, 7, '96'),
(140, 6, 4, 8, '68'),
(141, 6, 5, 2, '39'),
(142, 6, 5, 3, '42'),
(143, 6, 5, 4, '67'),
(144, 6, 5, 5, '91'),
(145, 6, 5, 6, '6'),
(146, 6, 5, 7, '61'),
(147, 6, 5, 8, '32'),
(148, 6, 7, 2, '36'),
(149, 6, 7, 3, '74'),
(150, 6, 7, 4, '38'),
(151, 6, 7, 5, '44'),
(152, 6, 7, 6, '31'),
(153, 6, 7, 7, '70'),
(154, 6, 7, 8, '37'),
(155, 6, 8, 2, '61'),
(156, 6, 8, 3, '1'),
(157, 6, 8, 4, '33'),
(158, 6, 8, 5, '76'),
(159, 6, 8, 6, '59'),
(160, 6, 8, 7, '89'),
(161, 6, 8, 8, '90'),
(162, 6, 11, 2, '93'),
(163, 6, 11, 3, '63'),
(164, 6, 11, 4, '83'),
(165, 6, 11, 5, '98'),
(166, 6, 11, 6, '69'),
(167, 6, 11, 7, '42'),
(168, 6, 11, 8, '5'),
(169, 6, 12, 2, '29'),
(170, 6, 12, 3, '55'),
(171, 6, 12, 4, '31'),
(172, 6, 12, 5, '58'),
(173, 6, 12, 6, '60'),
(174, 6, 12, 7, '91'),
(175, 6, 12, 8, '18'),
(176, 6, 13, 2, '54'),
(177, 6, 13, 3, '86'),
(178, 6, 13, 4, '73'),
(179, 6, 13, 5, '83'),
(180, 6, 13, 6, '21'),
(181, 6, 13, 7, '54'),
(182, 6, 13, 8, '35'),
(183, 6, 14, 2, '41'),
(184, 6, 14, 3, '88'),
(185, 6, 14, 4, '77'),
(186, 6, 14, 5, '27'),
(187, 6, 14, 6, '20'),
(188, 6, 14, 7, '17'),
(189, 6, 14, 8, '48'),
(190, 6, 15, 2, '1'),
(191, 6, 15, 3, '63'),
(192, 6, 15, 4, '71'),
(193, 6, 15, 5, '81'),
(194, 6, 15, 6, '5'),
(195, 6, 15, 7, '47'),
(196, 6, 15, 8, '3'),
(197, 6, 18, 2, '5'),
(198, 6, 18, 3, '100'),
(199, 6, 18, 4, '57'),
(200, 6, 18, 5, '81'),
(201, 6, 18, 6, '76'),
(202, 6, 18, 7, '40'),
(203, 6, 18, 8, '52'),
(204, 5, 2, 2, '12'),
(205, 5, 2, 3, '47'),
(206, 5, 2, 4, '14'),
(207, 5, 2, 5, '89'),
(208, 5, 2, 6, '3'),
(209, 5, 3, 2, '25'),
(210, 5, 3, 3, '19'),
(211, 5, 3, 4, '25'),
(212, 5, 3, 5, '6'),
(213, 5, 3, 6, '5'),
(214, 5, 4, 2, '94'),
(215, 5, 4, 3, '79'),
(216, 5, 4, 4, '20'),
(217, 5, 4, 5, '4'),
(218, 5, 4, 6, '38'),
(219, 5, 5, 2, '63'),
(220, 5, 5, 3, '90'),
(221, 5, 5, 4, '78'),
(222, 5, 5, 5, '23'),
(223, 5, 5, 6, '7'),
(224, 5, 6, 2, '87'),
(225, 5, 6, 3, '49'),
(226, 5, 6, 4, '97'),
(227, 5, 6, 5, '81'),
(228, 5, 6, 6, '4'),
(229, 5, 7, 2, '88'),
(230, 5, 7, 3, '47'),
(231, 5, 7, 4, '75'),
(232, 5, 7, 5, '22'),
(233, 5, 7, 6, '32'),
(234, 5, 8, 2, '8'),
(235, 5, 8, 3, '13'),
(236, 5, 8, 4, '44'),
(237, 5, 8, 5, '52'),
(238, 5, 8, 6, '5'),
(239, 5, 9, 2, '65'),
(240, 5, 9, 3, '96'),
(241, 5, 9, 4, '49'),
(242, 5, 9, 5, '4'),
(243, 5, 9, 6, '56'),
(244, 5, 10, 2, '80'),
(245, 5, 10, 3, '99'),
(246, 5, 10, 4, '53'),
(247, 5, 10, 5, '72'),
(248, 5, 10, 6, '12'),
(249, 5, 11, 2, '43'),
(250, 5, 11, 3, '95'),
(251, 5, 11, 4, '7'),
(252, 5, 11, 5, '44'),
(253, 5, 11, 6, '93'),
(254, 5, 12, 2, '23'),
(255, 5, 12, 3, '34'),
(256, 5, 12, 4, '1'),
(257, 5, 12, 5, '47'),
(258, 5, 12, 6, '11'),
(259, 5, 13, 2, '98'),
(260, 5, 13, 3, '73'),
(261, 5, 13, 4, '58'),
(262, 5, 13, 5, '51'),
(263, 5, 13, 6, '33'),
(264, 5, 14, 2, '71'),
(265, 5, 14, 3, '47'),
(266, 5, 14, 4, '49'),
(267, 5, 14, 5, '9'),
(268, 5, 14, 6, '50'),
(269, 5, 15, 2, '80'),
(270, 5, 15, 3, '68'),
(271, 5, 15, 4, '18'),
(272, 5, 15, 5, '39'),
(273, 5, 15, 6, '4'),
(274, 5, 16, 2, '5'),
(275, 5, 16, 3, '15'),
(276, 5, 16, 4, '24'),
(277, 5, 16, 5, '49'),
(278, 5, 16, 6, '98'),
(284, 5, 17, 2, '71'),
(285, 5, 17, 3, '73'),
(286, 5, 17, 4, '42'),
(287, 5, 17, 5, '94'),
(288, 5, 17, 6, '26'),
(289, 5, 18, 2, '32'),
(290, 5, 18, 3, '97'),
(291, 5, 18, 4, '49'),
(292, 5, 18, 5, '44'),
(293, 5, 18, 6, '28'),
(294, 4, 2, 2, '33'),
(295, 4, 2, 3, '32'),
(296, 4, 2, 5, '91'),
(297, 4, 2, 6, '53'),
(298, 4, 2, 8, '74'),
(299, 4, 3, 2, '37'),
(300, 4, 3, 3, '85'),
(301, 4, 3, 5, '49'),
(302, 4, 3, 6, '5'),
(303, 4, 3, 8, '22'),
(304, 4, 4, 2, '28'),
(305, 4, 4, 3, '73'),
(306, 4, 4, 5, '33'),
(307, 4, 4, 6, '80'),
(308, 4, 4, 8, '45'),
(309, 4, 5, 2, '100'),
(310, 4, 5, 3, '16'),
(311, 4, 5, 5, '34'),
(312, 4, 5, 6, '30'),
(313, 4, 5, 8, '41'),
(314, 4, 6, 2, '79'),
(315, 4, 6, 3, '45'),
(316, 4, 6, 5, '66'),
(317, 4, 6, 6, '46'),
(318, 4, 6, 8, '46'),
(319, 4, 7, 2, '82'),
(320, 4, 7, 3, '6'),
(321, 4, 7, 5, '66'),
(322, 4, 7, 6, '10'),
(323, 4, 7, 8, '30'),
(324, 4, 8, 2, '52'),
(325, 4, 8, 3, '57'),
(326, 4, 8, 5, '92'),
(327, 4, 8, 6, '19'),
(328, 4, 8, 8, '1'),
(329, 4, 9, 2, '18'),
(330, 4, 9, 3, '68'),
(331, 4, 9, 5, '65'),
(332, 4, 9, 6, '68'),
(333, 4, 9, 8, '56'),
(334, 4, 10, 2, '3'),
(335, 4, 10, 3, '23'),
(336, 4, 10, 5, '40'),
(337, 4, 10, 6, '16'),
(338, 4, 10, 8, '44'),
(339, 4, 11, 2, '51'),
(340, 4, 11, 3, '97'),
(341, 4, 11, 5, '12'),
(342, 4, 11, 6, '62'),
(343, 4, 11, 8, '36'),
(344, 4, 12, 2, '39'),
(345, 4, 12, 3, '40'),
(346, 4, 12, 5, '35'),
(347, 4, 12, 6, '50'),
(348, 4, 12, 8, '33'),
(349, 4, 13, 2, '25'),
(350, 4, 13, 3, '69'),
(351, 4, 13, 5, '4'),
(352, 4, 13, 6, '58'),
(353, 4, 13, 8, '16'),
(354, 4, 14, 2, '17'),
(355, 4, 14, 3, '95'),
(356, 4, 14, 5, '66'),
(357, 4, 14, 6, '41'),
(358, 4, 14, 8, '43'),
(359, 4, 15, 2, '49'),
(360, 4, 15, 3, '38'),
(361, 4, 15, 5, '95'),
(362, 4, 15, 6, '18'),
(363, 4, 15, 8, '32'),
(364, 4, 16, 2, '87'),
(365, 4, 16, 3, '39'),
(366, 4, 16, 5, '25'),
(367, 4, 16, 6, '15'),
(368, 4, 16, 8, '51'),
(369, 4, 17, 2, '62'),
(370, 4, 17, 3, '36'),
(371, 4, 17, 5, '60'),
(372, 4, 17, 6, '54'),
(373, 4, 17, 8, '67'),
(374, 4, 18, 2, '56'),
(375, 4, 18, 3, '32'),
(376, 4, 18, 5, '59'),
(377, 4, 18, 6, '25'),
(378, 4, 18, 8, '93');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kecamatan_id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kriteria_id`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`tanaman_id`);

--
-- Indexes for table `tanaman_kriteria`
--
ALTER TABLE `tanaman_kriteria`
  ADD PRIMARY KEY (`tk_id`);

--
-- Indexes for table `tanaman_nilai`
--
ALTER TABLE `tanaman_nilai`
  ADD PRIMARY KEY (`tn_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `kecamatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `kriteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `tanaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tanaman_kriteria`
--
ALTER TABLE `tanaman_kriteria`
  MODIFY `tk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tanaman_nilai`
--
ALTER TABLE `tanaman_nilai`
  MODIFY `tn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
