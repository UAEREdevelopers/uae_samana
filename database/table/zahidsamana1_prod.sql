-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2024 at 10:20 AM
-- Server version: 8.0.37
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zahidsamana1_prod`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint UNSIGNED NOT NULL,
  `property_id` int UNSIGNED NOT NULL,
  `amenity_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `property_id`, `amenity_image`, `heading_text`, `sub_heading_text`, `created_at`, `updated_at`) VALUES
(2, 1, '1718956154.webp', '4000+ Villas', 'Across the community', '2024-06-21 07:49:14', '2024-06-21 07:51:46'),
(3, 1, '1718956187.webp', 'Gated Community', 'With Multiple Entry points', '2024-06-21 07:49:47', '2024-06-21 07:51:35'),
(4, 1, '1718956390.webp', 'Tennis courts', '15 full size courts', '2024-06-21 07:53:10', '2024-06-21 07:53:10'),
(5, 1, '1718956413.webp', 'Sports Amenities', 'Accross the community', '2024-06-21 07:53:33', '2024-06-21 07:53:33'),
(6, 1, '1718956442.webp', 'Schools', 'Access to International Schools', '2024-06-21 07:54:02', '2024-06-21 07:54:02'),
(7, 1, '1718956467.webp', 'Golf Course', '18 Hole Golf course', '2024-06-21 07:54:27', '2024-06-21 07:54:27'),
(8, 1, '1718956492.webp', 'Gym', 'Equipped with World class Gym', '2024-06-21 07:54:52', '2024-06-21 07:54:52'),
(9, 1, '1718956529.webp', 'Pool', 'Swimming Pool', '2024-06-21 07:55:29', '2024-06-21 07:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `page_link` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `type`, `name`, `email`, `phone`, `message`, `page_link`, `created_at`, `updated_at`) VALUES
(1, 'Brochure', 'Rohan', 'rohan.uaere13@gmail.com', 'United Arab Emirates: +971 522436609', 'Free Brochure Download California', 'https://samanaproperties.ae/california', '2024-06-21 09:15:10', '2024-06-21 09:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `property_id` int UNSIGNED NOT NULL,
  `gallery_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_thumbnail_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_mix` int UNSIGNED NOT NULL,
  `is_ext` int UNSIGNED NOT NULL,
  `is_int` int UNSIGNED NOT NULL,
  `is_amenity` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `property_id`, `gallery_image`, `gallery_thumbnail_image`, `is_mix`, `is_ext`, `is_int`, `is_amenity`, `created_at`, `updated_at`) VALUES
(3, 1, '1718878286.webp', '1718878286.webp', 1, 0, 1, 0, '2024-06-20 10:11:26', '2024-06-20 10:11:26'),
(4, 1, '1718878307.webp', '1718878307.webp', 1, 0, 1, 0, '2024-06-20 10:11:47', '2024-06-20 10:11:47'),
(5, 1, '1718878363.webp', '1718878363.webp', 1, 1, 0, 0, '2024-06-20 10:12:43', '2024-06-20 10:12:43'),
(6, 1, '1718878385.webp', '1718878385.webp', 1, 1, 0, 0, '2024-06-20 10:13:05', '2024-06-20 10:13:05'),
(7, 1, '1718878459.webp', '1718878459.webp', 1, 0, 1, 1, '2024-06-20 10:14:19', '2024-06-20 10:14:19'),
(8, 1, '1718878490.webp', '1718878490.webp', 1, 1, 0, 1, '2024-06-20 10:14:50', '2024-06-20 10:14:50'),
(9, 1, '1718878522.webp', '1718878522.webp', 1, 1, 0, 0, '2024-06-20 10:15:22', '2024-06-20 10:15:22'),
(10, 1, '1718878546.webp', '1718878546.webp', 1, 1, 0, 0, '2024-06-20 10:15:46', '2024-06-20 10:15:46'),
(11, 1, '1718884486.webp', '1718878572.webp', 1, 1, 0, 1, '2024-06-20 10:16:12', '2024-06-20 11:54:46'),
(12, 1, '1718878622.webp', '1718878622.webp', 1, 1, 0, 1, '2024-06-20 10:17:02', '2024-06-20 10:17:02'),
(13, 2, '1718880449.webp', '1718880449.webp', 1, 1, 0, 1, '2024-06-20 10:47:29', '2024-06-20 10:47:29'),
(14, 2, '1718880474.webp', '1718880474.webp', 1, 1, 0, 1, '2024-06-20 10:47:54', '2024-06-20 10:47:54'),
(15, 2, '1718880500.webp', '1718880500.webp', 1, 0, 1, 1, '2024-06-20 10:48:20', '2024-06-20 10:48:20'),
(16, 2, '1718880527.webp', '1718880527.webp', 1, 1, 0, 0, '2024-06-20 10:48:47', '2024-06-20 10:48:47'),
(17, 2, '1718880569.webp', '1718880569.webp', 1, 1, 0, 0, '2024-06-20 10:49:29', '2024-06-20 10:49:29'),
(18, 2, '1718880598.webp', '1718880598.webp', 1, 0, 1, 0, '2024-06-20 10:49:58', '2024-06-20 10:49:58'),
(19, 2, '1718880853.webp', '1718880853.webp', 1, 0, 1, 0, '2024-06-20 10:54:13', '2024-06-20 10:54:13'),
(20, 2, '1718880870.webp', '1718880870.webp', 1, 0, 1, 0, '2024-06-20 10:54:30', '2024-06-20 10:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_22_082535_create_categories_table', 1),
(5, '2020_03_24_061006_create_tags_table', 1),
(6, '2020_03_24_113548_create_posts_table', 1),
(7, '2020_04_21_134614_create_settings_table', 1),
(8, '2020_04_22_145332_create_contacts_table', 1),
(9, '2024_06_13_071958_create_properties_table', 2),
(10, '2024_06_13_100251_create_galleries_table', 3),
(11, '2024_06_14_062331_create_enquiries_table', 4);

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
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_beds` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_construction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_handover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carousel_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carousel_image_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preview_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brochure_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floorplan_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `is_show` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `slug`, `no_of_beds`, `price`, `payment_construction`, `payment_handover`, `thumbnail_image`, `carousel_image`, `carousel_image_mobile`, `preview_image`, `property_video`, `brochure_pdf`, `floorplan_pdf`, `short_description`, `description`, `meta_title`, `meta_description`, `is_show`, `created_at`, `updated_at`) VALUES
(1, 'Twin Tower', 'twin-tower', '1- 3 Beds', 'from AED 991k', '65%', '35%', '1718272707.webp', '1718272731.webp', '1718272731.webp', '1718272759.webp', '1718871320.mp4', '1718269360.pdf', '1718272320.pdf', 'Live the nature-inspired life with our exclusively designed SAMANA Barari Twin Towers. Overlooking the vistas of Barari...', '<p style=\"font-family: sans-serif; font-size: 15px; background-color: rgb(242, 243, 247);\"><span style=\"font-family: math; font-size: 20px; text-align: justify; background-color: rgb(255, 255, 255);\">SAMANA Barari Views is a new project by SAMANA Developers and will be located in the Majan neighbourhood. The development will be 28-storeys tall and there will be studios and 1-3 bedroom apartments available to purchase. Construction is expected to be completed at the end of 2026.</span></p><p style=\"font-family: sans-serif; font-size: 15px; background-color: rgb(242, 243, 247);\"><span style=\"font-family: math; font-size: 20px; text-align: justify; background-color: rgb(255, 255, 255);\">These elegant and modern residences will feature calm, neutral colours in the interior design. Interested buyers will be able to choose from a variety of floor plans ranging from 400 sq. ft to 3,350 sq ft in size, as well as if the home should come fully furnished or unfurnished. Every residence offers scenic views of the Al Barari community from the balcony, which also has a private pool for your added comfort and enjoyment.</span></p>', 'Samana Barari Views at Majan | Samana Barari Twin Towers', 'Discover luxury living at Barari Views by Samana Developers. Nestled in a prime location, our residences offer modern amenities, stunning architecture, and unparalleled comfort. Explore our exclusive apartments designed for a sophisticated lifestyle. Visit us today!', 1, '2024-06-13 05:02:40', '2024-06-21 08:59:30'),
(2, 'California', 'california', '1- 2 Bedrooms', 'Starting from 769k AED', '65%', '35%', '1718288969.webp', '1718870102.webp', '1718870102.webp', '1718872323.webp', '1718879051.webm', '1718867376.pdf', '1718870652.pdf', 'Walk into the world of opulence, reflected perfectly in every detail of this exquisite project. This is where you experience the perfect amalgamation..', '<p style=\"text-align: justify; background-color: rgb(242, 243, 247);\"><font face=\"math\"><span style=\"font-size: 20px;\">Find your new home at SAMANA California 2, where luxury&nbsp;</span></font><span style=\"font-size: 20px; font-family: math;\">living meets modern convenience in the heart of the city.&nbsp;</span><font face=\"math\" style=\"font-size: 1rem;\"><span style=\"font-size: 20px;\">SAMANA California 2 offers you a unique blend of contemporary&nbsp;</span></font><span style=\"font-size: 20px; font-family: math;\">designs and serene surroundings. Every aspect of this&nbsp;</span><font face=\"math\" style=\"font-size: 1rem;\"><span style=\"font-size: 20px;\">residential property exudes elegance and comfort, promising an&nbsp;</span></font><span style=\"font-size: 20px; font-family: math;\">exceptional living experience.&nbsp;</span><span style=\"font-size: 20px; font-family: math;\">Indulge in an array of thoughtfully curated&nbsp;</span><span style=\"font-size: 20px; font-family: math;\">amenities designed to enhance your lifestyle at&nbsp;</span><span style=\"font-size: 20px; font-family: math;\">SAMANA California 2. Dive into the refreshing pool,&nbsp;</span><span style=\"font-size: 20px; font-family: math;\">relax in the comfort of your private pool set&nbsp;</span><span style=\"font-size: 20px; font-family: math;\">perfectly within your apartment, rejuvenate at the&nbsp;</span><span style=\"font-size: 20px; font-family: math;\">state-of-the-art fitness center, and unwind in the&nbsp;</span><span style=\"font-size: 20px; font-family: math;\">meticulously landscaped gardens. Experience&nbsp;</span><span style=\"font-size: 20px; font-family: math;\">luxury at its best and embrace the opulence.</span></p>', 'Samana California Dubai | Samana California Apartment', 'Samana California Apartment, 11-storey residential building located in the coveted Discovery Gardens area, this exceptional residence captures the essence of California\'s vibrant elegance', 1, '2024-06-13 10:29:29', '2024-06-21 09:57:23'),
(3, 'Portofino', 'portofino', '1- 2 Beds', 'Starting from AED 659K', '65%', '35%', '1718289044.webp', '', '', '', '', '1718868302.pdf', NULL, 'Live a Italian LifeStyle in the heart of Dubai. Welcome to Portofino where luxury living meet modern convienience.', NULL, 'SAMANA Portofino in Production City, Dubai', 'Samana Portofino at Dubai Production City (IMPZ) is a new creation by Samana Developers, poised to transform luxury living with its studios, and 1- & 2-bedroom apartments for sale.', 0, '2024-06-13 10:30:44', '2024-06-21 09:58:30'),
(4, 'GOLF VIEW', 'golf-view', '1- 3 Beds', 'Starting from AED 649K', '65%', '35%', '1718289099.webp', '', '', '', '', '1718868668.pdf', NULL, 'An amalgamation of high-end luxury and golfing grandeur, SAMANA GolfViews makes for your dream home', NULL, 'Samana Golf Views at Dubai Sports City', 'Samana Golf Views at Dubai Sports City, developed by Samana Developers, is the newest premier residential project offering studios, and 1, 2, and 3-bedroom apartments with pools.', 0, '2024-06-13 10:31:39', '2024-06-21 09:58:57'),
(5, 'Manhattan', 'manhattan', '1- 2 Bedrooms', 'Starting from AED 689K', '65%', '35%', '1718289142.webp', '', '', '', '', '1718868511.pdf', NULL, 'A new standard to contemporary living in Residential Develpment. An exceptional Residential Development which is located at JVC.', NULL, NULL, NULL, NULL, '2024-06-13 10:32:22', '2024-06-21 09:00:16'),
(6, 'Ivy Gardens 2', 'ivy-gardens-2', '1- 5 Bedrooms', 'Starting from 659k AED', '65%', '35%', '1718289222.webp', '', '', '', '', '1718868650.pdf', NULL, 'Walk into the world of opulence, reflected perfectly in every detail of this exquisite project. This is where you experience the perfect amalgamation..', NULL, 'Samana ivy gardens 2 | Get the benefits of Pre-Launch Offers', ':   Samana Ivy Gardens 2 are carefully crafted apartments feature bedrooms that open to a private swimming pool, providing a serene retreat in the heart of the bustling city.', 0, '2024-06-13 10:33:42', '2024-06-21 09:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reddit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `zoho_access_token` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `site_logo`, `description`, `facebook`, `twitter`, `instagram`, `reddit`, `email`, `copyright`, `phone`, `address`, `zoho_access_token`, `created_at`, `updated_at`) VALUES
(1, 'samanaproperties.ae', NULL, NULL, NULL, NULL, NULL, NULL, 'rohan.uaere13@gmail.com', 'copyright @ 2024', NULL, NULL, '1000.056a1fc3fb3a6840422c4adf5b007d6a.7be1ffa45e99045c08d17dc1e04ae188', NULL, '2024-06-21 09:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `description`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rohan', 'rohan.uaere13@gmail.com', NULL, '$2y$10$oFQz2mU4bQs5VTpERvkEtOuufvFrtX/iM80A636HRijeCW2hGbPzW', NULL, NULL, NULL, NULL, '2024-06-13 02:40:55', '2024-06-13 02:40:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
