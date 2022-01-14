-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 02:23 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dty`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_registration_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_vehicle_registration_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `phone`, `address`, `gender`, `car_name`, `car_capacity`, `vehicle_registration_number`, `type_vehicle_registration_number`, `created_at`, `updated_at`, `email`) VALUES
(5, 'Susanto', '087766574633', 'Jalan Mawar IV', 'Pria', 'Honda Brio 2012', '5 seats', 'B 7664 BNF', 'Genap', NULL, NULL, 'susanto@drivetoyou.id'),
(6, 'Johan Lumban Tobing', '0877667564', 'Jalan Semangka II', 'Pria', 'Daihatsu Sigra 2017', '8 seats', 'B 1773 BMM', 'Ganjil', NULL, NULL, 'johan@drivetoyou.id'),
(8, 'Daniel', '085666647777', 'Jalan Merdeka Selatan VII C', 'Pria', 'Toyota Avanza G 2012', '8 Seats', 'B 1288 BNM', 'Genap', NULL, NULL, 'daniel@drivetoyou.id');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_12_27_054359_create_order_table', 2),
(5, '2021_12_27_054951_create_drivers_table', 3),
(6, '2021_12_27_073238_add_3_column_to_orders_table', 4),
(7, '2021_12_27_075113_add_1_column_to_orders_table', 5),
(8, '2021_12_27_082252_add_2_column_to_orders_table', 6),
(9, '2021_12_27_104004_add_1_column_to_drivers_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pickup_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_driver`, `pickup_address`, `shipper_name`, `shipper_phone`, `drop_address`, `receiver_name`, `receiver_phone`, `order_type`, `quantity`, `notes`, `date`, `price`, `created_at`, `updated_at`, `pickup_photo`, `received_photo`, `fee_status`, `delivery_status`, `pickup_time`) VALUES
(1, '6', 'Jalan X', 'Imanuel', '0876766454', 'Jalan Y', 'Intan', '980078685', 'Hampers', '1', 'xx', '2021-12-28 16:51:24', '100000', '2021-12-26 17:00:00', '2021-12-28 09:51:24', '', '', 'unpaid', 'On The Way To Receiver', ''),
(2, '5', 'Jalan Melawai V', 'Tiffany', '08776756476', 'Jalan Raya Makasar', 'Johan', '098878756544', 'Hampers', '1', 'Test', '2021-12-28 16:57:07', '120000', NULL, NULL, NULL, NULL, 'unpaid', 'Pickup', '09:00'),
(3, '5', 'test', 'test', 'test', 'test', 'test', 'test', 'Hampers', '1', 'test', '2021-12-28 16:57:10', '150000', NULL, NULL, NULL, NULL, 'unpaid', 'Pickup', '07:30'),
(4, '5', 'test', 'test', 'test', 'test', 'test', 'test', 'Hampers', '1', 'sss', '2021-12-28 16:57:20', '150000', NULL, NULL, NULL, NULL, 'unpaid', 'Delivered', '07:30'),
(5, '5', 'Jalan Kenanga V Jakarta Barat', 'Stefani', '087777777', 'Jalan Mawar Merah IX Jakarta Selatan', 'Rudi', '088888888', 'Cup Cake', '1', 'Butuh dry ice', '2021-12-28 16:57:24', '120000', NULL, NULL, NULL, NULL, 'unpaid', 'Pickup', '09:00'),
(6, '5', 'Jalan Kenanga V Jakarta Timur', 'Annisa Cake', '089788887774', 'Jalan Melawai XIII No. 29 Jakarta Selatan', 'Handoyo', '08776646566', 'Wet Cake', '1', 'Butuh dry ice', '2021-12-28 16:38:37', '120000', NULL, '2021-12-28 09:38:37', NULL, NULL, 'unpaid', 'On The Way To Receiver', '09:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@itsolutionstuff.com', NULL, 1, '$2y$10$USM989Fcq.RQXKcteLvIp.Hoqw1j2Ab7vSwj0iwyOH8m.J0xsj0U2', NULL, '2021-12-26 22:38:49', '2021-12-26 22:38:49'),
(2, 'User', 'user@itsolutionstuff.com', NULL, 0, '$2y$10$cWjpgPTEQbxOjDJ/yT4QAugmcLpePh8f9kW0iKCQ1O67wNlkZPGMe', NULL, '2021-12-26 22:38:49', '2021-12-26 22:38:49'),
(5, 'Driver', 'susanto@drivetoyou.id', NULL, 0, '$2y$10$mEymqMFL8AefhGkOyp6K1O9pmPkaTmvdWhUGRCb2JsCBl5NbKL.RC', NULL, NULL, NULL),
(6, 'Driver', 'johan@drivetoyou.id', NULL, 1, '$2y$10$wIpa7VGGgR3vhhwvnAtKW.HNZw9CaFCACCia7yotaHFcJb5BOkD4S', NULL, NULL, NULL),
(8, 'Driver', 'daniel@drivetoyou.id', NULL, 0, '$2y$10$k9gssuj5VDP0MfU1W9LOg.nADnIftaaFC5afINIk7venzyGDWjfeK', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
