-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2019 at 10:24 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot_parameters`
--

CREATE TABLE `bobot_parameters` (
  `id` int(10) UNSIGNED NOT NULL,
  `parameter` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` int(10) UNSIGNED NOT NULL,
  `bobot_relatif` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bobot_parameters`
--

INSERT INTO `bobot_parameters` (`id`, `parameter`, `bobot`, `bobot_relatif`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Kelerengan', 10, '0.1', 1, NULL, '2019-03-14 19:13:52'),
(2, 'Penggunaan Lahan', 20, '0.2', 1, NULL, '2019-03-14 19:13:52'),
(3, 'Rawan Bencana Longsor', 15, '0.15', 1, NULL, '2019-03-14 19:13:52'),
(4, 'Curah Hujan', 15, '0.15', 1, NULL, '2019-03-14 19:13:52'),
(5, 'Hidrogeologi', 20, '0.2', 1, NULL, '2019-03-14 19:13:52'),
(6, 'Jenis Tanah', 10, '0.1', 1, NULL, '2019-03-14 19:13:52'),
(7, 'Rawan Bencana Banjir', 10, '0.1', 1, NULL, '2019-03-14 19:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `data_alternatifs`
--

CREATE TABLE `data_alternatifs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kecamatan` int(10) UNSIGNED NOT NULL,
  `id_parameter` int(10) UNSIGNED NOT NULL,
  `nilai_parameter` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_klasifikasi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_parameter_bobot` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_alternatifs`
--

INSERT INTO `data_alternatifs` (`id`, `id_kecamatan`, `id_parameter`, `nilai_parameter`, `nilai_klasifikasi`, `nilai_parameter_bobot`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0-8%', '4', '40', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(2, 2, 1, '8-15%', '3', '30', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(3, 3, 1, '8-15%', '3', '30', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(4, 4, 1, '8-15%', '3', '30', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(5, 5, 1, '0-8%', '4', '40', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(6, 6, 1, '8-15%', '3', '30', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(7, 7, 1, '0-8%', '4', '40', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(8, 8, 1, '0-8%', '4', '40', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(9, 9, 1, '25-40%', '1', '10', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(10, 10, 1, '15-25%', '2', '20', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(11, 11, 1, '0-8%', '4', '40', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(12, 12, 1, '0-8%', '4', '40', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(13, 13, 1, '8-15%', '3', '30', 1, '2019-02-25 08:58:23', '2019-03-09 07:15:16'),
(15, 1, 2, 'Industri', '4', '80', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(16, 2, 2, 'Hutan', '0', '0', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(17, 3, 2, 'Hutan', '0', '0', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(18, 4, 2, 'Industri', '4', '80', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(19, 5, 2, 'Kebun/Lapangan', '3', '60', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(20, 6, 2, 'Pemukiman', '1', '20', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(21, 7, 2, 'Pemukiman', '1', '20', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(22, 8, 2, 'Kebun/Lapangan', '3', '60', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(23, 9, 2, 'Kebun/Lapangan', '3', '60', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(24, 10, 2, 'Hutan', '0', '0', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(25, 11, 2, 'Industri', '4', '80', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(26, 12, 2, 'Sawah', '2', '40', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(27, 13, 2, 'Pemukiman', '1', '20', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(28, 14, 2, 'Hutan', '0', '0', 1, '2019-02-25 10:01:37', '2019-03-03 00:35:25'),
(29, 1, 3, 'Rendah', '2', '30', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(30, 2, 3, 'Sedang', '1', '15', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(31, 3, 3, 'Tinggi', '0', '0', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(32, 4, 3, 'Tinggi', '0', '0', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(33, 5, 3, 'Rendah', '2', '30', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(34, 6, 3, 'Tinggi', '0', '0', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(35, 7, 3, 'Rendah', '2', '30', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(36, 8, 3, 'Rendah', '2', '30', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(37, 9, 3, 'Tinggi', '0', '0', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(38, 10, 3, 'Tinggi', '0', '0', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(39, 11, 3, 'Rendah', '2', '30', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(40, 12, 3, 'Rendah', '2', '30', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(41, 13, 3, 'Rendah', '2', '30', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(42, 14, 3, 'Tinggi', '0', '0', 1, '2019-02-26 21:27:28', '2019-03-03 00:35:31'),
(43, 1, 4, '1500-2750', '2', '30', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:02'),
(44, 2, 4, '2750-4000', '1', '15', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:02'),
(45, 3, 4, '2750-4000', '1', '15', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:02'),
(46, 4, 4, '1500-2750', '2', '30', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:02'),
(47, 5, 4, '1500-2750', '2', '30', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:02'),
(48, 6, 4, '>4000', '0', '0', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:03'),
(49, 7, 4, '1500-2750', '2', '30', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:03'),
(50, 8, 4, '1500-2750', '2', '30', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:03'),
(51, 9, 4, '2750-4000', '1', '15', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:03'),
(52, 10, 4, '2750-4000', '1', '15', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:03'),
(53, 11, 4, '1500-2750', '2', '30', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:03'),
(54, 12, 4, '1500-2750', '2', '30', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:03'),
(55, 13, 4, '2750-4000', '1', '15', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:03'),
(56, 14, 4, '>4000', '0', '0', 1, '2019-02-26 21:48:28', '2019-03-03 00:36:03'),
(57, 1, 5, 'Akuiver Produktif', '0', '0', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(58, 2, 5, 'Air Tanah Langka', '2', '40', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(59, 3, 5, 'Air Tanah Langka', '2', '40', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(60, 4, 5, 'Air Tanah Langka', '2', '40', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(61, 5, 5, 'Akuiver Produktif', '0', '0', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(62, 6, 5, 'Akuiver Produktif', '0', '0', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(63, 7, 5, 'Akuiver Produktif', '0', '0', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(64, 8, 5, 'Akuiver Produktif', '0', '0', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(65, 9, 5, 'Akuiver Produktif', '0', '0', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(66, 10, 5, 'Akuiver Produktif', '0', '0', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(67, 11, 5, 'Air Tanah Langka', '2', '40', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(68, 12, 5, 'Akuiver Produktif', '0', '0', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(69, 13, 5, 'Air Tanah Langka', '2', '40', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(70, 14, 5, 'Air Tanah Langka', '2', '40', 1, '2019-02-27 00:35:37', '2019-03-03 00:35:56'),
(71, 1, 6, 'Alluvial', '3', '30', 1, '2019-02-27 00:50:50', '2019-03-03 00:36:30'),
(72, 2, 6, 'Latosol', '1', '10', 1, '2019-02-27 00:50:50', '2019-03-03 00:36:30'),
(73, 3, 6, 'Regosol', '2', '20', 1, '2019-02-27 00:50:50', '2019-03-03 00:36:30'),
(74, 4, 6, 'Gromosol', '0', '0', 1, '2019-02-27 00:50:51', '2019-03-03 00:36:30'),
(75, 5, 6, 'Alluvial', '3', '30', 1, '2019-02-27 00:50:51', '2019-03-03 00:36:30'),
(76, 6, 6, 'Regosol', '2', '20', 1, '2019-02-27 00:50:51', '2019-03-03 00:36:30'),
(77, 7, 6, 'Alluvial', '3', '30', 1, '2019-02-27 00:50:51', '2019-03-03 00:36:30'),
(78, 8, 6, 'Alluvial', '3', '30', 1, '2019-02-27 00:50:51', '2019-03-03 00:36:30'),
(79, 9, 6, 'Gromosol', '0', '0', 1, '2019-02-27 00:50:51', '2019-03-03 00:36:30'),
(80, 10, 6, 'Latosol', '1', '10', 1, '2019-02-27 00:50:51', '2019-03-03 00:36:30'),
(81, 11, 6, 'Alluvial', '3', '30', 1, '2019-02-27 00:50:51', '2019-03-03 00:36:30'),
(82, 12, 6, 'Alluvial', '3', '30', 1, '2019-02-27 00:50:51', '2019-03-03 00:36:30'),
(83, 13, 6, 'Regosol', '2', '20', 1, '2019-02-27 00:50:51', '2019-03-03 00:36:30'),
(84, 14, 6, 'Regosol', '2', '20', 1, '2019-02-27 00:50:51', '2019-03-03 00:36:30'),
(85, 1, 7, 'Rawan Banjir', '0', '0', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(86, 2, 7, 'Tidak Rawan Banjir', '1', '10', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(87, 3, 7, 'Tidak Rawan Banjir', '1', '10', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(88, 4, 7, 'Rawan Banjir', '0', '0', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(89, 5, 7, 'Rawan Banjir', '0', '0', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(90, 6, 7, 'Tidak Rawan Banjir', '1', '10', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(91, 7, 7, 'Rawan Banjir', '0', '0', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(92, 8, 7, 'Tidak Rawan Banjir', '1', '10', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(93, 9, 7, 'Tidak Rawan Banjir', '1', '10', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(94, 10, 7, 'Tidak Rawan Banjir', '1', '10', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(95, 11, 7, 'Tidak Rawan Banjir', '1', '10', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(96, 12, 7, 'Rawan Banjir', '0', '0', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(97, 13, 7, 'Tidak Rawan Banjir', '1', '10', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(98, 14, 7, 'Tidak Rawan Banjir', '1', '10', 1, '2019-02-27 00:51:16', '2019-03-03 00:36:38'),
(99, 14, 1, '>40%', '0', '0', 1, '2019-03-02 22:46:18', '2019-03-03 00:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `daerah` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `daerah`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Ampelgading', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
(2, 'Bantarbolang', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
(3, 'Belik', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
(4, 'Bodeh', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
(5, 'Comal', 1, '2019-03-01 02:48:58', '0000-00-00 00:00:00'),
(6, 'Moga', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
(7, 'Pemalang', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
(8, 'Petarukan', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
(9, 'Pulosari', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
(10, 'Randudongkal', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
(11, 'Taman', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
(12, 'Ulujami', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
(13, 'Warungpring', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
(14, 'Watukumpul', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2018_12_10_095357_create_bobot_parameters_table', 1),
(10, '2019_02_02_110905_create_users_table', 1),
(11, '2019_02_02_111047_create_password_resets_table', 1),
(12, '2019_02_05_145018_create_data_tpa', 1),
(13, '2019_02_05_145145_create_kecamatan', 1),
(14, '2019_02_12_100903_create_nilai_klasifikasi_kriteria', 1),
(15, '2019_02_12_100937_create_nilai_klasifikasi_kategori', 1),
(16, '2019_02_25_091733_create_data_alternatifs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_klasifikasi`
--

CREATE TABLE `nilai_klasifikasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_parameter` int(10) UNSIGNED NOT NULL,
  `nilai_parameter` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_klasifikasi` int(10) NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_klasifikasi`
--

INSERT INTO `nilai_klasifikasi` (`id`, `id_parameter`, `nilai_parameter`, `nilai_klasifikasi`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 2, 'Hutan', 0, 1, NULL, '2019-03-02 22:08:20'),
(2, 2, 'Pemukiman', 1, 1, NULL, '2019-02-25 04:58:45'),
(3, 2, 'Sawah', 2, 1, NULL, '2019-02-25 04:58:45'),
(4, 2, 'Kebun/Lapangan', 3, 1, NULL, '2019-02-25 04:58:45'),
(5, 2, 'Industri', 4, 1, NULL, '2019-02-25 04:58:45'),
(7, 3, 'Sedang', 1, 1, NULL, NULL),
(8, 3, 'Rendah', 2, 1, NULL, NULL),
(9, 5, 'Akuiver Produktif', 0, 1, NULL, NULL),
(10, 5, 'Air Tanah Langka', 2, 1, NULL, NULL),
(11, 6, 'Gromosol', 0, 1, NULL, NULL),
(12, 6, 'Latosol', 1, 1, NULL, NULL),
(13, 6, 'Regosol', 2, 1, NULL, NULL),
(14, 6, 'Alluvial', 3, 1, NULL, NULL),
(15, 7, 'Rawan Banjir', 0, 1, NULL, NULL),
(16, 7, 'Tidak Rawan Banjir', 1, 1, NULL, NULL),
(18, 3, 'Tinggi', 0, 1, '2019-03-02 21:03:37', '2019-03-02 21:03:52'),
(20, 1, '25-40%', 1, 1, '2019-03-02 21:38:58', '2019-03-02 22:42:30'),
(21, 1, '15-25%', 2, 1, '2019-03-02 21:38:58', '2019-03-02 21:38:58'),
(22, 1, '8-15%', 3, 1, '2019-03-02 21:38:58', '2019-03-02 21:38:58'),
(23, 1, '0-8%', 4, 1, '2019-03-02 21:38:58', '2019-03-02 22:33:08'),
(24, 4, '>4000', 0, 1, '2019-03-02 21:40:31', '2019-03-02 22:01:37'),
(25, 4, '2750-4000', 1, 1, '2019-03-02 21:40:31', '2019-03-02 21:40:31'),
(26, 4, '1500-2750', 2, 1, '2019-03-02 21:40:31', '2019-03-02 21:49:31'),
(29, 1, '>40%', 0, 1, '2019-03-02 22:45:24', '2019-03-02 22:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `tanggal_lahir`, `alamat`, `bio`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aufal Marom', 'admin@sigtpa.com', '$2y$10$eAWxX7EorRYmugn.gf4.uOQab5scUm25JKawcEw4Zd.77e76AgXD2', 'administrator', '1997-11-25', 'Jl. Timoho. Timur 1A No. 2', 'a lifelong-learner.', NULL, NULL, '2019-06-25 08:11:07'),
(2, 'Yudi Eko W', 'manager@sigtpa.com', '$2y$10$PrVD9qnjLrJvOtO.jqFUF.GQazYUQ56OR198IoC60FbAAh7evPWG.', 'manager', NULL, NULL, NULL, NULL, NULL, '2019-06-25 04:30:10'),
(3, 'Cahyo', 'client@sigtpa.com', '$2y$10$u8.0etDsoWvwkpQeszul9ekSQdnymay/S1LepVOGqrwxV9VFemyT.', 'client', '1997-10-08', 'Jl. Sipodang', 'stay foolish stay hungry.', NULL, NULL, '2019-06-25 04:39:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot_parameters`
--
ALTER TABLE `bobot_parameters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `data_alternatifs`
--
ALTER TABLE `data_alternatifs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kecamatan` (`id_kecamatan`,`id_parameter`,`created_by`),
  ADD KEY `FK_data_alternatifs_id_parameter` (`id_parameter`),
  ADD KEY `FK_data_alternatifs_created_by` (`created_by`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_klasifikasi`
--
ALTER TABLE `nilai_klasifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `id_parameter` (`id_parameter`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot_parameters`
--
ALTER TABLE `bobot_parameters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `data_alternatifs`
--
ALTER TABLE `data_alternatifs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `nilai_klasifikasi`
--
ALTER TABLE `nilai_klasifikasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bobot_parameters`
--
ALTER TABLE `bobot_parameters`
  ADD CONSTRAINT `FK_bobot_parameters_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `data_alternatifs`
--
ALTER TABLE `data_alternatifs`
  ADD CONSTRAINT `FK_data_alternatifs_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_data_alternatifs_id_kecamatan` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatans` (`id`),
  ADD CONSTRAINT `FK_data_alternatifs_id_parameter` FOREIGN KEY (`id_parameter`) REFERENCES `bobot_parameters` (`id`);

--
-- Constraints for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD CONSTRAINT `FK_kecamatans_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `nilai_klasifikasi`
--
ALTER TABLE `nilai_klasifikasi`
  ADD CONSTRAINT `FK_nilai_klasifikasi_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_nilai_klasifikasi_id_parameter` FOREIGN KEY (`id_parameter`) REFERENCES `bobot_parameters` (`id`),
  ADD CONSTRAINT `nilai_klasifikasi_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `nilai_klasifikasi_ibfk_2` FOREIGN KEY (`id_parameter`) REFERENCES `bobot_parameters` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
