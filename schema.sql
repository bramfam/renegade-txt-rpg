-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2019 at 11:17 PM
-- Server version: 5.7.19
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renegade`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `character_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `character_practices`
--

CREATE TABLE `character_practices` (
  `id` int(10) UNSIGNED NOT NULL,
  `practice_name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `character_types`
--

CREATE TABLE `character_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `character_types`
--

INSERT INTO `character_types` (`id`, `title`, `description`) VALUES
(1, 'Mercenary', 'Sunt praesentium doloribus et unde aut dolor. Consectetur voluptatem unde veniam harum.'),
(2, 'Knight', 'Dicta quo excepturi consequatur qui. Sint ratione veniam ut quibusdam voluptatem amet ad.'),
(3, 'Soldier', 'Optio omnis temporibus quae occaecati rerum iste optio. Voluptatibus id temporibus nobis illum.'),
(4, 'Commoner', 'Quo et tempore vel maxime voluptatem id quidem. Enim atque deleniti dolorem quis cum non et.'),
(5, 'Squire', 'Blanditiis est velit quia et optio eum consequatur. Non voluptas minima sint consectetur.');

-- --------------------------------------------------------

--
-- Table structure for table `faction_types`
--

CREATE TABLE `faction_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `faction_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faction_types`
--

INSERT INTO `faction_types` (`id`, `faction_type`) VALUES
(1, 'Mercenaries'),
(2, 'Knights'),
(3, 'Soldiers\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kingdoms`
--

CREATE TABLE `kingdoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kingdoms`
--

INSERT INTO `kingdoms` (`id`, `name`, `description`) VALUES
(1, 'Sherfoye', 'Et veniam neque quam eius. Iusto enim provident omnis rerum. Molestiae nulla neque est.'),
(2, 'Mattgard', 'Et dolore suscipit sit ea voluptatem nihil fugit. Necessitatibus voluptatem delectus quidem qui.'),
(3, 'Battgard', 'Et quos est explicabo aliquid. Molestiae minus molestiae rerum odio ut velit doloremque quis.'),
(4, 'Geiber', 'Laboriosam neque exercitationem omnis et doloremque. Ullam dolorem aperiam voluptatem.'),
(5, 'Wendham', 'Inventore fugit expedita laboriosam doloremque. Quia eos omnis eos et provident quis aut.');

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
(1, '2019_07_16_225728_users', 1),
(2, '2019_07_16_230509_characters', 1),
(3, '2019_07_23_230049_create_character_practices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jerrold Wiegand MD', 'lcole', 'lindsey49@example.org', '$2y$10$ls9qlPFxkioqGec11BV2i.h8hzNXqT2Ewp1/eH6N2/nsyQt0ujX8O', 'yJ1lWROttn', '2019-07-25 17:31:48', '2019-07-25 17:31:48'),
(2, 'Mrs. Yvette Jerde II', 'cydney02', 'abartell@example.net', '$2y$10$EQEobF3bi0fzIeMxEIpn1ugfLQpxdK7woMC6oYzPTsnzwA/uaCgae', 'ynGzqI7FmH', '2019-07-25 17:31:48', '2019-07-25 17:31:48'),
(3, 'Dr. Vinnie Hoppe DDS', 'natalie.gorczany', 'ekeeling@example.com', '$2y$10$y6K.3JJriXVdnYjEn/3Tduqpx4JPaIqEshomQNq1p6cbRrLpim8Pu', 't3p956EA7I', '2019-07-25 17:31:48', '2019-07-25 17:31:48'),
(4, 'Mrs. Idell Parker', 'rmoen', 'eliseo48@example.org', '$2y$10$tR16iTmLvXy7/Luh2nc.1OvpUJkcyEP4f.7cGS3Qz.S3ZjLRxvyyS', 'TIQDA5sJYh', '2019-07-25 17:31:48', '2019-07-25 17:31:48'),
(5, 'Filiberto Prohaska', 'rogahn.noemie', 'weldon37@example.net', '$2y$10$2a71z2OnlyvlwNhkaGEpbOApf2jhetnPqM7c6BidbiFTRfugdv7VO', 'U42FXX1LvH', '2019-07-25 17:31:49', '2019-07-25 17:31:49'),
(6, 'Grace Langosh', 'monahan.ariel', 'jasmin.sawayn@example.net', '$2y$10$dQ8jpfsPGhEwZ.HgnTXdqeCQ.kkxM8V0y7/6tJPJtDbooBeQylrHq', 'LDidVO6xLa', '2019-07-25 17:31:49', '2019-07-25 17:31:49'),
(7, 'Burnice Hansen', 'austyn.kozey', 'leif.moore@example.org', '$2y$10$TQfuc9btKwoFBQk4smvDHu1c1hKs7vUf9dqguGrIur37DcS82uz7S', 'MxNoaeOtNu', '2019-07-25 17:31:49', '2019-07-25 17:31:49'),
(8, 'Gail Schulist', 'price.toby', 'derick40@example.com', '$2y$10$KUUpucHDlbjERjrKcg8JZua0LTV3Cf2UxyIt5NGNonrAoNAyNyQ5W', 'c8Zd43ja7r', '2019-07-25 17:31:49', '2019-07-25 17:31:49'),
(9, 'Dr. Granville McClure', 'carley53', 'zturner@example.net', '$2y$10$1FEb/zxytWyXNEOOKBZoluKkZVGgszAVfy18Nvq4oElWoDFnBD5K6', 'NRBiNg4F87', '2019-07-25 17:31:49', '2019-07-25 17:31:49'),
(10, 'Orval Graham', 'hodkiewicz.lowell', 'dfranecki@example.org', '$2y$10$kjBbcSkrKq0bj1Oi3xqNYONfLL9gIcWNoeVE314fbzgStCRmpiJta', 'mpWeuO4mHd', '2019-07-25 17:31:49', '2019-07-25 17:31:49'),
(11, 'Dr. Ahmad Dibbert', 'considine.iva', 'tracey90@example.net', '$2y$10$b3g5wZLRlirs8PGggeT./.7HTeoAJWadFdHOCsLzlnlqjXkesBgeC', 'nAiyXt4XYo', '2019-07-29 07:22:40', '2019-07-29 07:22:40'),
(12, 'Kara Mills', 'simone.nader', 'mankunding@example.org', '$2y$10$Gwzl/CUKxGjpuQM1yseu/upP2muywslu.db.lMdVWXRJtnA6.wEqK', 'ba0YONHCSb', '2019-07-29 07:22:40', '2019-07-29 07:22:40'),
(13, 'Prof. Zula Kris', 'anna85', 'turcotte.jasen@example.net', '$2y$10$dProAJk6K06N.bXqIyR1tuBwpZN/nEAqq.q.y3jyevvTBAIBEmAQm', 'jYvrfGClne', '2019-07-29 07:22:40', '2019-07-29 07:22:40'),
(14, 'Rhett Stark', 'yritchie', 'sanford.dillon@example.org', '$2y$10$zka2/z.awwoqGt5.svZJnOFOFUZEmfjIlPCywy8hGQoBrl6WRzOfa', 'hmQDfcVcyZ', '2019-07-29 07:22:40', '2019-07-29 07:22:40'),
(15, 'Dr. Assunta Smitham', 'chasity38', 'mcassin@example.com', '$2y$10$kY2KhyTVFyApb5KCjpEzXeHJ0tcnbAeNirpAC6qN2PzpLUhUrCL0.', '4dQznkIm5w', '2019-07-29 07:22:40', '2019-07-29 07:22:40'),
(16, 'Luna Durgan PhD', 'yost.lizzie', 'kayla54@example.net', '$2y$10$1sMoBYWJrKHHLqrMVMApdujUGmEqqnYEmq8VfIqg71.4CDKJkypHi', '4u2cOeIJFo', '2019-07-29 07:22:40', '2019-07-29 07:22:40'),
(17, 'Rosemarie Grant', 'wwilderman', 'kilback.heaven@example.org', '$2y$10$LmTryhkaBxF9Bk9z712AYOJ7llj4Yrfnc405mPDITam3Sr5GeaKk6', 'ezOh6ohdT3', '2019-07-29 07:22:40', '2019-07-29 07:22:40'),
(18, 'Henri Jacobson', 'lea.gutkowski', 'lola98@example.com', '$2y$10$IGLzlSPAkyUx/PI8lVwaNu3Urx45hmX8nos7dsy6xvTrxXZKLAu3m', 'aCTs1G095h', '2019-07-29 07:22:40', '2019-07-29 07:22:40'),
(19, 'Dr. Hayley Nader', 'schmeler.jaron', 'tianna.gulgowski@example.net', '$2y$10$k9pUO.zsgn9xmzdDGa5Iuu3TrNxqrsseK25n/NWpBVLvfvTS0s5iC', 'q4gwscxY1H', '2019-07-29 07:22:40', '2019-07-29 07:22:40'),
(20, 'Mr. Guy Herzog III', 'conroy.deon', 'lmurphy@example.net', '$2y$10$IBTTBjkcWhHXS1LJXBek4e0UhLefqSVVJ2KfHQoboVUyF23/tpmlW', 'l9SW0hGv7O', '2019-07-29 07:22:40', '2019-07-29 07:22:40'),
(21, 'Prof. Rickie Nader MD', 'ejacobi', 'noah.cartwright@example.com', '$2y$10$ZbVliRr2yvWmJ0hqdX.WuOikQeFyouli4DP1VIaNGqP3MLMLpZgoK', 'cUCq7pjK6L', '2019-07-29 07:23:46', '2019-07-29 07:23:46'),
(22, 'Harmony Koelpin V', 'josie61', 'milo.kohler@example.org', '$2y$10$.ovzgePa43zECbMCOXbYa.QiPOBbI4mO9XgJT9MWSItzUSMi.fwGK', '3HSO0fyxVb', '2019-07-29 07:23:46', '2019-07-29 07:23:46'),
(23, 'Dr. Adrien Bruen III', 'adolphus66', 'russell.krajcik@example.com', '$2y$10$VCt1jlOpGmKtUB1qnk6cFOX4Cdl4c8F6UJARLYCAOp12M6.EMcdYS', 'uBwtqUkK16', '2019-07-29 07:23:46', '2019-07-29 07:23:46'),
(24, 'Susan Murazik IV', 'pearl.senger', 'hjacobson@example.net', '$2y$10$yG2f4aYgJmDQI8d3cPmjd.seM9Q9rjGz2jX9RqHT.CclMUjp40sOu', 'ECpYSKcTnN', '2019-07-29 07:23:46', '2019-07-29 07:23:46'),
(25, 'Mr. Domenico Parisian', 'michael82', 'nienow.kristian@example.org', '$2y$10$M.ew.0DhI07lztmMCFlkvOYQOKnvpwUuDgEGk5oklu5G2VWrlZCp.', 'dc5fm8wQLK', '2019-07-29 07:23:46', '2019-07-29 07:23:46'),
(26, 'Miss Katherine Hills III', 'elmo.lebsack', 'lubowitz.greyson@example.org', '$2y$10$3Qgt5G0VUYKzLbp6xuoQk.oImhFz1LqyoFSV...ELLvKQAh.FgaMC', 'CEd138ygqZ', '2019-07-29 07:23:46', '2019-07-29 07:23:46'),
(27, 'Nellie Marquardt', 'breitenberg.judy', 'beryl14@example.com', '$2y$10$gqgdGzj2zenD2fAbTDzKIu8HcJvCdEvUBdXFawulnpDFHzH87pFCK', 'P5jb4Yt8TZ', '2019-07-29 07:23:46', '2019-07-29 07:23:46'),
(28, 'Gene Stracke', 'paolo25', 'dlemke@example.net', '$2y$10$hDFUywlP7XST4jP8cBQiLODQzlAPI80npRx/SVAk76fx6c7ZctXm2', '3RVwFUGPg5', '2019-07-29 07:23:46', '2019-07-29 07:23:46'),
(29, 'Granville Friesen', 'maude38', 'champlin.letha@example.com', '$2y$10$hpYYobfWtdhroy6KGO7e3ukb2pExQ0HG3qklrl4jWi2UejU/6iB5u', 'H9JAWjYJps', '2019-07-29 07:23:46', '2019-07-29 07:23:46'),
(30, 'August Gleichner', 'dejuan59', 'hermann.adolphus@example.com', '$2y$10$wd4Pj36s.NjKZmYFLsz3VeXBJsI.uVHH8MFVVf.D8jBofpmnqg2sS', 'dpckk0EX3g', '2019-07-29 07:23:46', '2019-07-29 07:23:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD KEY `characters_user_id_foreign` (`user_id`);

--
-- Indexes for table `character_practices`
--
ALTER TABLE `character_practices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `character_types`
--
ALTER TABLE `character_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faction_types`
--
ALTER TABLE `faction_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kingdoms`
--
ALTER TABLE `kingdoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `character_practices`
--
ALTER TABLE `character_practices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `character_types`
--
ALTER TABLE `character_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faction_types`
--
ALTER TABLE `faction_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kingdoms`
--
ALTER TABLE `kingdoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
