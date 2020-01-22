-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 12:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bathrooms`
--

CREATE TABLE `bathrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business_statuses`
--

CREATE TABLE `business_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carpentries`
--

CREATE TABLE `carpentries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `surface_area` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipements`
--

CREATE TABLE `equipements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sourceable_id` int(11) NOT NULL,
  `sourceable_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `garages`
--

CREATE TABLE `garages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heatings`
--

CREATE TABLE `heatings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kitchens`
--

CREATE TABLE `kitchens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2020_01_02_213521_create_Files_table', 1),
(4, '2020_01_02_213521_create_owner_contacts_table', 1),
(5, '2020_01_02_213521_create_owners_table', 1),
(6, '2020_01_02_213521_create_payment_options_table', 1),
(7, '2020_01_02_213521_create_realestates_table', 1),
(8, '2020_01_05_134106_create_cities_table', 1),
(9, '2020_01_05_134132_create_districts_table', 1),
(10, '2020_01_05_134148_create_slugs_table', 1),
(11, '2020_01_05_134204_create_streets_table', 1),
(12, '2020_01_05_134306_create_object_types_table', 1),
(13, '2020_01_05_134324_create_equipements_table', 1),
(14, '2020_01_05_134350_create_realestate_structures_table', 1),
(15, '2020_01_05_134401_create_heatings_table', 1),
(16, '2020_01_05_134416_create_carpentries_table', 1),
(17, '2020_01_05_134430_create_kitchens_table', 1),
(18, '2020_01_05_134443_create_bathrooms_table', 1),
(19, '2020_01_05_134455_create_accessories_table', 1),
(20, '2020_01_05_134508_create_garages_table', 1),
(21, '2020_01_05_134547_create_providers_table', 1),
(22, '2020_01_05_134601_create_terraces_table', 1),
(23, '2020_01_05_134737_create_realestate_cities_table', 1),
(24, '2020_01_05_134806_create_realestate_districts_table', 1),
(25, '2020_01_05_134820_create_realestate_slugs_table', 1),
(26, '2020_01_05_134839_create_realestate_streets_table', 1),
(27, '2020_01_05_134910_create_realestate_object_types_table', 1),
(28, '2020_01_05_134930_create_realestate_equipments_table', 1),
(29, '2020_01_05_135028_create_realestate_heatings_table', 1),
(30, '2020_01_05_135047_create_realestate_carpentries_table', 1),
(31, '2020_01_05_135101_create_realestate_kitchens_table', 1),
(32, '2020_01_05_135113_create_realestate_bathrooms_table', 1),
(33, '2020_01_05_135125_create_realestate_accessories_table', 1),
(34, '2020_01_05_135137_create_realestate_garages_table', 1),
(35, '2020_01_05_135155_create_realestate_providers_table', 1),
(36, '2020_01_05_135211_create_realestate_terraces_table', 1),
(37, '2020_01_05_135231_create_claims_table', 1),
(38, '2020_01_05_135245_create_realestate_claims_table', 1),
(39, '2020_01_11_180044_create_types_table', 1),
(40, '2020_01_11_180546_create_business_statuses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `object_types`
--

CREATE TABLE `object_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `UMCN` bigint(20) NOT NULL,
  `ID_NUMBER` smallint(6) NOT NULL,
  `company_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsible_person` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIN` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_number` smallint(6) DEFAULT NULL,
  `activity_code` smallint(6) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owner_contacts`
--

CREATE TABLE `owner_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payment_options`
--

CREATE TABLE `payment_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestates`
--

CREATE TABLE `realestates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `business_status_id` bigint(20) UNSIGNED NOT NULL,
  `street_number` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realestate_number` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `minimal_price` decimal(8,2) NOT NULL,
  `deposit` decimal(8,2) NOT NULL,
  `commission` smallint(6) NOT NULL,
  `payment_option_id` bigint(20) UNSIGNED NOT NULL,
  `construct_year` int(11) DEFAULT NULL,
  `floors` smallint(6) DEFAULT NULL,
  `of_floors` smallint(6) DEFAULT NULL,
  `level` smallint(6) DEFAULT NULL,
  `salon` int(11) DEFAULT NULL,
  `surface_area` int(11) DEFAULT NULL,
  `structure_id` bigint(20) UNSIGNED NOT NULL,
  `celling_height` decimal(8,2) DEFAULT NULL,
  `number_of_rooms` smallint(6) DEFAULT NULL,
  `number_of_bath` smallint(6) DEFAULT NULL,
  `number_of_terrace` smallint(6) DEFAULT NULL,
  `number_of_elevator` smallint(6) DEFAULT NULL,
  `number_of_air_conditions` smallint(6) DEFAULT NULL,
  `number_of_garage` smallint(6) DEFAULT NULL,
  `info` decimal(8,2) DEFAULT NULL,
  `electric` decimal(8,2) DEFAULT NULL,
  `network` decimal(8,2) DEFAULT NULL,
  `maintenance` decimal(8,2) DEFAULT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `active_from_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_accessories`
--

CREATE TABLE `realestate_accessories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `accessories_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_bathrooms`
--

CREATE TABLE `realestate_bathrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `bathroom_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_carpentries`
--

CREATE TABLE `realestate_carpentries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `carpentry_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_cities`
--

CREATE TABLE `realestate_cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_claims`
--

CREATE TABLE `realestate_claims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `claim_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_districts`
--

CREATE TABLE `realestate_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_equipments`
--

CREATE TABLE `realestate_equipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `equipment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_garages`
--

CREATE TABLE `realestate_garages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `garage_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_heatings`
--

CREATE TABLE `realestate_heatings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `heating_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_kitchens`
--

CREATE TABLE `realestate_kitchens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `kitchen_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_object_types`
--

CREATE TABLE `realestate_object_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `object_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_providers`
--

CREATE TABLE `realestate_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_slugs`
--

CREATE TABLE `realestate_slugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `slug_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_streets`
--

CREATE TABLE `realestate_streets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `street_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_structures`
--

CREATE TABLE `realestate_structures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_terraces`
--

CREATE TABLE `realestate_terraces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `realestate_id` bigint(20) UNSIGNED NOT NULL,
  `terrace_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slugs`
--

CREATE TABLE `slugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `streets`
--

CREATE TABLE `streets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terraces`
--

CREATE TABLE `terraces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bathrooms`
--
ALTER TABLE `bathrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_statuses`
--
ALTER TABLE `business_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carpentries`
--
ALTER TABLE `carpentries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipements`
--
ALTER TABLE `equipements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garages`
--
ALTER TABLE `garages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heatings`
--
ALTER TABLE `heatings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchens`
--
ALTER TABLE `kitchens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `object_types`
--
ALTER TABLE `object_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_contacts`
--
ALTER TABLE `owner_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_options`
--
ALTER TABLE `payment_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realestates`
--
ALTER TABLE `realestates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realestate_accessories`
--
ALTER TABLE `realestate_accessories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_accessories_realestate_id_accessories_id_unique` (`realestate_id`,`accessories_id`);

--
-- Indexes for table `realestate_bathrooms`
--
ALTER TABLE `realestate_bathrooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_bathrooms_realestate_id_bathroom_id_unique` (`realestate_id`,`bathroom_id`);

--
-- Indexes for table `realestate_carpentries`
--
ALTER TABLE `realestate_carpentries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_carpentries_realestate_id_carpentry_id_unique` (`realestate_id`,`carpentry_id`);

--
-- Indexes for table `realestate_cities`
--
ALTER TABLE `realestate_cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_cities_realestate_id_city_id_unique` (`realestate_id`,`city_id`);

--
-- Indexes for table `realestate_claims`
--
ALTER TABLE `realestate_claims`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_claims_realestate_id_claim_id_unique` (`realestate_id`,`claim_id`);

--
-- Indexes for table `realestate_districts`
--
ALTER TABLE `realestate_districts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_districts_realestate_id_district_id_unique` (`realestate_id`,`district_id`);

--
-- Indexes for table `realestate_equipments`
--
ALTER TABLE `realestate_equipments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_equipments_realestate_id_equipment_id_unique` (`realestate_id`,`equipment_id`);

--
-- Indexes for table `realestate_garages`
--
ALTER TABLE `realestate_garages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_garages_realestate_id_garage_id_unique` (`realestate_id`,`garage_id`);

--
-- Indexes for table `realestate_heatings`
--
ALTER TABLE `realestate_heatings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_heatings_realestate_id_heating_id_unique` (`realestate_id`,`heating_id`);

--
-- Indexes for table `realestate_kitchens`
--
ALTER TABLE `realestate_kitchens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_kitchens_realestate_id_kitchen_id_unique` (`realestate_id`,`kitchen_id`);

--
-- Indexes for table `realestate_object_types`
--
ALTER TABLE `realestate_object_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_object_types_realestate_id_object_type_id_unique` (`realestate_id`,`object_type_id`);

--
-- Indexes for table `realestate_providers`
--
ALTER TABLE `realestate_providers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_providers_realestate_id_provider_id_unique` (`realestate_id`,`provider_id`);

--
-- Indexes for table `realestate_slugs`
--
ALTER TABLE `realestate_slugs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_slugs_realestate_id_slug_id_unique` (`realestate_id`,`slug_id`);

--
-- Indexes for table `realestate_streets`
--
ALTER TABLE `realestate_streets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_streets_realestate_id_street_id_unique` (`realestate_id`,`street_id`);

--
-- Indexes for table `realestate_structures`
--
ALTER TABLE `realestate_structures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realestate_terraces`
--
ALTER TABLE `realestate_terraces`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestate_terraces_realestate_id_terrace_id_unique` (`realestate_id`,`terrace_id`);

--
-- Indexes for table `slugs`
--
ALTER TABLE `slugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `streets`
--
ALTER TABLE `streets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terraces`
--
ALTER TABLE `terraces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bathrooms`
--
ALTER TABLE `bathrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_statuses`
--
ALTER TABLE `business_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carpentries`
--
ALTER TABLE `carpentries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipements`
--
ALTER TABLE `equipements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `garages`
--
ALTER TABLE `garages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heatings`
--
ALTER TABLE `heatings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kitchens`
--
ALTER TABLE `kitchens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `object_types`
--
ALTER TABLE `object_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner_contacts`
--
ALTER TABLE `owner_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_options`
--
ALTER TABLE `payment_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestates`
--
ALTER TABLE `realestates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_accessories`
--
ALTER TABLE `realestate_accessories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_bathrooms`
--
ALTER TABLE `realestate_bathrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_carpentries`
--
ALTER TABLE `realestate_carpentries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_cities`
--
ALTER TABLE `realestate_cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_claims`
--
ALTER TABLE `realestate_claims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_districts`
--
ALTER TABLE `realestate_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_equipments`
--
ALTER TABLE `realestate_equipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_garages`
--
ALTER TABLE `realestate_garages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_heatings`
--
ALTER TABLE `realestate_heatings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_kitchens`
--
ALTER TABLE `realestate_kitchens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_object_types`
--
ALTER TABLE `realestate_object_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_providers`
--
ALTER TABLE `realestate_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_slugs`
--
ALTER TABLE `realestate_slugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_streets`
--
ALTER TABLE `realestate_streets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_structures`
--
ALTER TABLE `realestate_structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `realestate_terraces`
--
ALTER TABLE `realestate_terraces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `streets`
--
ALTER TABLE `streets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terraces`
--
ALTER TABLE `terraces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
