-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 02:20 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig-tpa-pemalang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot_parameters`
--

CREATE TABLE `bobot_parameters` (
  `id` int(10) UNSIGNED NOT NULL,
  `parameter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` int(10) UNSIGNED NOT NULL,
  `sistem_klasifikasi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bobot_parameters`
--

INSERT INTO `bobot_parameters` (`id`, `parameter`, `bobot`, `sistem_klasifikasi`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Kelerengan', 10, 'kriteria', 1, NULL, '2019-02-27 09:11:06'),
(2, 'Penggunaan Lahan', 20, 'kategori', 1, NULL, '2019-02-27 09:15:07'),
(3, 'Rawan Bencana Longsor', 15, 'kategori', 1, NULL, NULL),
(4, 'Curah Hujan', 15, 'kriteria', 1, NULL, NULL),
(5, 'Hidrogeologi', 20, 'kategori', 1, NULL, NULL),
(6, 'Jenis Tanah', 10, 'kategori', 1, NULL, NULL),
(7, 'Rawan Bencana Banjir', 10, 'kategori', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_alternatifs`
--

CREATE TABLE `data_alternatifs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kecamatan` int(10) UNSIGNED NOT NULL,
  `id_parameter` int(10) UNSIGNED NOT NULL,
  `nilai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_alternatifs`
--

INSERT INTO `data_alternatifs` (`id`, `id_kecamatan`, `id_parameter`, `nilai`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '7', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(2, 2, 1, '11', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(3, 3, 1, '11', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(4, 4, 1, '11', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(5, 5, 1, '7', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(6, 6, 1, '9', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(7, 7, 1, '7', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(8, 8, 1, '7', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(9, 9, 1, '26', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(10, 10, 1, '16', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(11, 11, 1, '7', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(12, 12, 1, '7', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(13, 13, 1, '11', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(14, 14, 1, '45', 1, '2019-02-25 08:58:23', '2019-02-27 10:37:46'),
(15, 1, 2, 'Industri', 1, '2019-02-25 10:01:37', '2019-02-27 10:38:42'),
(16, 2, 2, 'Hutan', 1, '2019-02-25 10:01:37', '2019-02-27 00:38:26'),
(17, 3, 2, 'Hutan', 1, '2019-02-25 10:01:37', '2019-02-27 10:38:42'),
(18, 4, 2, 'Industri', 1, '2019-02-25 10:01:37', '2019-02-27 10:38:42'),
(19, 5, 2, 'Kebun/Lapangan', 1, '2019-02-25 10:01:37', '2019-02-27 10:38:42'),
(20, 6, 2, 'Pemukiman', 1, '2019-02-25 10:01:37', '2019-02-27 10:38:42'),
(21, 7, 2, 'Pemukiman', 1, '2019-02-25 10:01:37', '2019-02-27 10:38:42'),
(22, 8, 2, 'Kebun/Lapangan', 1, '2019-02-25 10:01:37', '2019-02-27 10:38:42'),
(23, 9, 2, 'Kebun/Lapangan', 1, '2019-02-25 10:01:37', '2019-02-27 10:38:42'),
(24, 10, 2, 'Hutan', 1, '2019-02-25 10:01:37', '2019-02-27 10:40:02'),
(25, 11, 2, 'Industri', 1, '2019-02-25 10:01:37', '2019-02-27 10:38:42'),
(26, 12, 2, 'Sawah', 1, '2019-02-25 10:01:37', '2019-02-27 10:38:42'),
(27, 13, 2, 'Pemukiman', 1, '2019-02-25 10:01:37', '2019-02-27 10:38:42'),
(28, 14, 2, 'Hutan', 1, '2019-02-25 10:01:37', '2019-02-25 10:01:37'),
(29, 1, 3, 'Rendah', 1, '2019-02-26 21:27:28', '2019-02-27 00:20:54'),
(30, 2, 3, 'Sedang', 1, '2019-02-26 21:27:28', '2019-02-27 00:20:54'),
(31, 3, 3, 'Tinggi', 1, '2019-02-26 21:27:28', '2019-02-27 10:40:49'),
(32, 4, 3, 'Tinggi', 1, '2019-02-26 21:27:28', '2019-02-27 10:40:49'),
(33, 5, 3, 'Rendah', 1, '2019-02-26 21:27:28', '2019-02-27 10:40:49'),
(34, 6, 3, 'Tinggi', 1, '2019-02-26 21:27:28', '2019-02-26 21:27:28'),
(35, 7, 3, 'Rendah', 1, '2019-02-26 21:27:28', '2019-02-27 10:40:49'),
(36, 8, 3, 'Rendah', 1, '2019-02-26 21:27:28', '2019-02-27 10:40:49'),
(37, 9, 3, 'Tinggi', 1, '2019-02-26 21:27:28', '2019-02-26 21:27:28'),
(38, 10, 3, 'Tinggi', 1, '2019-02-26 21:27:28', '2019-02-26 21:27:28'),
(39, 11, 3, 'Rendah', 1, '2019-02-26 21:27:28', '2019-02-27 10:40:49'),
(40, 12, 3, 'Rendah', 1, '2019-02-26 21:27:28', '2019-02-27 10:40:49'),
(41, 13, 3, 'Rendah', 1, '2019-02-26 21:27:28', '2019-02-27 10:40:49'),
(42, 14, 3, 'Tinggi', 1, '2019-02-26 21:27:28', '2019-02-26 21:27:28'),
(43, 1, 4, '1600', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(44, 2, 4, '2760', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(45, 3, 4, '2760', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(46, 4, 4, '1600', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(47, 5, 4, '1600', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(48, 6, 4, '4500', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(49, 7, 4, '1600', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(50, 8, 4, '1600', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(51, 9, 4, '2760', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(52, 10, 4, '2760', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(53, 11, 4, '1600', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(54, 12, 4, '1600', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(55, 13, 4, '2760', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(56, 14, 4, '4500', 1, '2019-02-26 21:48:28', '2019-02-27 10:42:22'),
(57, 1, 5, 'Akuiver Produktif', 1, '2019-02-27 00:35:37', '2019-02-27 10:43:05'),
(58, 2, 5, 'Air Tanah Langka', 1, '2019-02-27 00:35:37', '2019-02-27 10:43:05'),
(59, 3, 5, 'Air Tanah Langka', 1, '2019-02-27 00:35:37', '2019-02-27 10:43:05'),
(60, 4, 5, 'Air Tanah Langka', 1, '2019-02-27 00:35:37', '2019-02-27 10:43:06'),
(61, 5, 5, 'Akuiver Produktif', 1, '2019-02-27 00:35:37', '2019-02-27 00:44:41'),
(62, 6, 5, 'Akuiver Produktif', 1, '2019-02-27 00:35:37', '2019-02-27 00:44:41'),
(63, 7, 5, 'Akuiver Produktif', 1, '2019-02-27 00:35:37', '2019-02-27 00:44:41'),
(64, 8, 5, 'Akuiver Produktif', 1, '2019-02-27 00:35:37', '2019-02-27 00:44:41'),
(65, 9, 5, 'Akuiver Produktif', 1, '2019-02-27 00:35:37', '2019-02-27 00:44:41'),
(66, 10, 5, 'Akuiver Produktif', 1, '2019-02-27 00:35:37', '2019-02-27 00:44:41'),
(67, 11, 5, 'Air Tanah Langka', 1, '2019-02-27 00:35:37', '2019-02-27 10:43:06'),
(68, 12, 5, 'Akuiver Produktif', 1, '2019-02-27 00:35:37', '2019-02-27 00:44:41'),
(69, 13, 5, 'Air Tanah Langka', 1, '2019-02-27 00:35:37', '2019-02-27 10:43:06'),
(70, 14, 5, 'Air Tanah Langka', 1, '2019-02-27 00:35:37', '2019-02-27 10:43:06'),
(71, 1, 6, 'Alluvial', 1, '2019-02-27 00:50:50', '2019-02-27 10:44:44'),
(72, 2, 6, 'Latosol', 1, '2019-02-27 00:50:50', '2019-02-27 10:44:44'),
(73, 3, 6, 'Regosol', 1, '2019-02-27 00:50:50', '2019-02-27 10:44:44'),
(74, 4, 6, 'Gromosol', 1, '2019-02-27 00:50:51', '2019-02-27 00:50:51'),
(75, 5, 6, 'Alluvial', 1, '2019-02-27 00:50:51', '2019-02-27 10:44:44'),
(76, 6, 6, 'Regosol', 1, '2019-02-27 00:50:51', '2019-02-27 12:56:26'),
(77, 7, 6, 'Alluvial', 1, '2019-02-27 00:50:51', '2019-02-27 10:44:44'),
(78, 8, 6, 'Alluvial', 1, '2019-02-27 00:50:51', '2019-02-27 10:44:44'),
(79, 9, 6, 'Gromosol', 1, '2019-02-27 00:50:51', '2019-02-27 00:50:51'),
(80, 10, 6, 'Latosol', 1, '2019-02-27 00:50:51', '2019-02-27 10:44:44'),
(81, 11, 6, 'Alluvial', 1, '2019-02-27 00:50:51', '2019-02-27 10:44:44'),
(82, 12, 6, 'Alluvial', 1, '2019-02-27 00:50:51', '2019-02-27 10:44:44'),
(83, 13, 6, 'Regosol', 1, '2019-02-27 00:50:51', '2019-02-27 10:44:44'),
(84, 14, 6, 'Regosol', 1, '2019-02-27 00:50:51', '2019-02-27 10:44:44'),
(85, 1, 7, 'Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 00:51:16'),
(86, 2, 7, 'Tidak Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 10:45:40'),
(87, 3, 7, 'Tidak Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 10:45:40'),
(88, 4, 7, 'Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 10:45:40'),
(89, 5, 7, 'Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 00:51:16'),
(90, 6, 7, 'Tidak Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 10:45:40'),
(91, 7, 7, 'Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 00:51:16'),
(92, 8, 7, 'Tidak Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 10:45:40'),
(93, 9, 7, 'Tidak Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 10:45:40'),
(94, 10, 7, 'Tidak Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 10:45:40'),
(95, 11, 7, 'Tidak Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 10:45:40'),
(96, 12, 7, 'Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 10:46:54'),
(97, 13, 7, 'Tidak Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 10:45:40'),
(98, 14, 7, 'Tidak Rawan Banjir', 1, '2019-02-27 00:51:16', '2019-02-27 10:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `daerah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
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
(5, 'Comai', 1, '2019-02-27 16:45:37', '0000-00-00 00:00:00'),
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
-- Table structure for table `nilai_klasifikasi_kategoris`
--

CREATE TABLE `nilai_klasifikasi_kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_parameter` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_klasifikasi_kategoris`
--

INSERT INTO `nilai_klasifikasi_kategoris` (`id`, `id_parameter`, `kategori`, `nilai`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 2, 'Hutan', 0, 1, NULL, '2019-02-25 04:58:45'),
(2, 2, 'Pemukiman', 1, 1, NULL, '2019-02-25 04:58:45'),
(3, 2, 'Sawah', 2, 1, NULL, '2019-02-25 04:58:45'),
(4, 2, 'Kebun/Lapangan', 3, 1, NULL, '2019-02-25 04:58:45'),
(5, 2, 'Industri', 4, 1, NULL, '2019-02-25 04:58:45'),
(6, 3, 'Tinggi', 0, NULL, NULL, NULL),
(7, 3, 'Sedang', 1, NULL, NULL, NULL),
(8, 3, 'Rendah', 2, NULL, NULL, NULL),
(9, 5, 'Akuiver Produktif', 0, NULL, NULL, NULL),
(10, 5, 'Air Tanah Langka', 2, NULL, NULL, NULL),
(11, 6, 'Gromosol', 0, NULL, NULL, NULL),
(12, 6, 'Latosol', 1, NULL, NULL, NULL),
(13, 6, 'Regosol', 2, NULL, NULL, NULL),
(14, 6, 'Alluvial', 3, NULL, NULL, NULL),
(15, 7, 'Rawan Banjir', 0, NULL, NULL, NULL),
(16, 7, 'Tidak Rawan Banjir', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_klasifikasi_kriterias`
--

CREATE TABLE `nilai_klasifikasi_kriterias` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_parameter` int(10) UNSIGNED NOT NULL,
  `batas_bawah` int(11) NOT NULL,
  `batas_atas` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_klasifikasi_kriterias`
--

INSERT INTO `nilai_klasifikasi_kriterias` (`id`, `id_parameter`, `batas_bawah`, `batas_atas`, `nilai`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 40, 100, 0, NULL, NULL, NULL),
(2, 1, 25, 40, 1, NULL, NULL, NULL),
(3, 1, 15, 25, 2, NULL, NULL, NULL),
(4, 1, 8, 15, 3, NULL, NULL, NULL),
(5, 1, 0, 8, 4, NULL, NULL, NULL),
(6, 4, 4000, 10000, 0, NULL, NULL, NULL),
(7, 4, 2750, 4000, 1, NULL, NULL, NULL),
(8, 4, 1500, 4000, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `tanggal_lahir`, `alamat`, `bio`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aufal Marom', 'admin@sigtpa.com', '$2y$10$LRcqx0U14KdJNVSnTZsR1.CJPz3bIS/4hK9yvZnAjFJDQ3jwh9lky', 'administrator', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Yudi Eko W', 'manager@sigtpa.com', '$2y$10$7sdnG5YlWOrqciJk3z9eb.eev4PQHkcoB.wg53OBbY/mkgeMy1s7y', 'manager', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Cahyo Ndut', 'operator@sigtpa.com', '$2y$10$oqoaKWZfv1xHi6A3qYQRqO8afztVfoW0bIs8cpaADPn2OSO.aFsri', 'operator', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot_parameters`
--
ALTER TABLE `bobot_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_alternatifs`
--
ALTER TABLE `data_alternatifs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_klasifikasi_kategoris`
--
ALTER TABLE `nilai_klasifikasi_kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_klasifikasi_kriterias`
--
ALTER TABLE `nilai_klasifikasi_kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

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
-- AUTO_INCREMENT for table `nilai_klasifikasi_kategoris`
--
ALTER TABLE `nilai_klasifikasi_kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `nilai_klasifikasi_kriterias`
--
ALTER TABLE `nilai_klasifikasi_kriterias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
