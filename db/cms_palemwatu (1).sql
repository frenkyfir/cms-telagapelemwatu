-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 05:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_palemwatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `description`, `harga`, `image`, `created_at`, `updated_at`) VALUES
(14, 'Kolam Renang', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '10000', 'menu-images/n7hXC07x5pn7XbTCH6OfUZC2zWWwDryV0rwmO1GM.jpg', '2023-07-04 22:09:09', '2023-07-04 22:09:09'),
(15, 'Spot foto baloon', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '5000', 'menu-images/GVnXNt3oeAUOlJPAYqjJc0GgPai5UO4g9FeF4LFM.jpg', '2023-07-04 22:10:54', '2023-07-04 22:10:54'),
(16, 'Test', 'ada sebvuah', NULL, 'menu-images/MSHG1uQ5JMiJKfBpWQ8d0uCkuyyiYmjjPADCpNbT.jpg', '2023-07-28 04:56:26', '2023-07-28 04:56:26'),
(17, '312', '312312', '312312', 'menu-images/JWIZRnevp06zVTgR0JxCSg9cLw4OBuaDXKnB9kRr.jpg', '2023-07-28 05:03:59', '2023-07-28 05:03:59'),
(18, '321321', '312321321', NULL, 'menu-images/pQ7JsEdbzhHcAuA8JkEOmg9jLUm5H8SutAEGmxjU.jpg', '2023-07-28 05:25:12', '2023-07-28 05:25:12'),
(19, '3123', '21321312', '312312', 'menu-images/0vIk0QXn19Bc0GJlXpMtInjheMJtSZJL0ZZDJiLV.jpg', '2023-07-28 05:25:17', '2023-07-28 05:25:17'),
(20, '33123', '12321312', '312312', 'menu-images/PoRrqSnLWgdkBXSysugwXR5rxqIXtD86BwVBcxQJ.jpg', '2023-07-28 05:25:24', '2023-07-28 05:25:24'),
(21, '32132', '312321', NULL, 'menu-images/5ILxoDu9fnNgteWW5urh3J1LfFmtLhNee7KkXf4c.jpg', '2023-08-01 08:14:19', '2023-08-01 08:14:19'),
(22, 'halo', 'halo', '312', 'menu-images/pea3w4BGKz7kcAtLubPDabNN9qiwCvqbSTYCHY40.jpg', '2023-08-01 08:14:49', '2023-08-01 08:14:49'),
(23, '321', '321312', '312', 'menu-images/xmMvaVxIo71VOmfaQwfjuu9aWpNK80FtZzgsV0bT.jpg', '2023-08-01 08:27:21', '2023-08-01 08:27:21'),
(24, 'dqsdas', 'dasdas', '1231', 'menu-images/UL6SI4Q9Cau7tHYbiRBWA6oSu9TEUjisqL6uNaKi.jpg', '2023-08-01 08:27:28', '2023-08-01 08:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_27_015342_create_tickets_table', 1),
(7, '2023_03_30_024410_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'ticket.index', 'ticket.index', NULL, NULL),
(2, 'ticket.create', 'ticket.create', NULL, NULL),
(3, 'ticket.edit', 'ticket.edit', NULL, NULL),
(4, 'ticket.delete', 'ticket.delete', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Wahana Kolam Renang', 'Pembukaan Wahana Kolam Renang', 'post-images/WcR4ecvUfKWnizdnFNFPMqvjtww0aTKlIfmONg2p.webp', '2023-06-25 04:28:47', '2023-06-25 04:28:47'),
(4, 'Penambahan Spot foto baloonn', 'sadas', 'post-images/DUmSAYsAnfodquNLexW2K04W79w2l4dC6yp2tHgD.jpg', '2023-06-25 06:32:55', '2023-07-28 05:17:06'),
(5, 'live music', 'akan diadakan live music pada hari minggu tgl 13/07/2023', 'post-images/3YaJYYbgwWSS7a4IlAtndzom315H8Ammtb3vaD3e.jpg', '2023-07-03 04:07:21', '2023-07-03 04:07:21'),
(6, 'live music', 'akan diadakan live music pada hari minggu tgl 13/07/2023', 'post-images/BVklqZBN06vaPmQOh6JlPmBJ3gSmUfKwA8XZPRM8.jpg', '2023-07-03 04:13:12', '2023-07-03 04:13:12'),
(7, 'Workshop Strategi Pengelolaan Desa Wisata', 'Gresik, Workshop yang diadakan Dr.H.Ahmad Iwan Junaih ,LC.MM.MPDi sebagai Anggota DPRD komisi B Propinsi Jawa Timur dengan tema strategi pengelolaan desa wisata di Aula LP Ma\'arif NU Kecamatan Benjeng Kabupaten Gresik.  Narasumber pengelolaan Desa Wisata yaitu Murjito, SH dan Setyo Hadi Pramono, ST telah memaparkan baik pengertian Desa Wisata dan Strateginya menjadi Desa Wisata. Serta Pegiat desa Sulaiman Wello juga hadir.  Setyo Direktur BUMDesa Pelemwatu sebagai narasumber memaparkan pentingnya 3 A yaitu Atraksi, Amenitas dan Aksesibilitas untuk Desa menjadi Desa Wisata. Juga memberikan wawasan bahwa tetap harus koordinasi dengan Dinas Pariwisata terkait , kala itu Bapak Fitter Kuntajaya, ST yang berkecimpung dengan urusan Desa Wisata.  Audiens dihadiri para kalangan pendidikan juga masyarakat Kecamatan Benjeng serta beberapa media berita.  Sampai akhir acara Bapak Khoirul sebagai pemandu acara mengucapkan bersyukur sudah diberikan ilmu tentang Desa Wisata yang banyak manfaat buat perekonomian Desa.', 'post-images/evHbb4JyS8Ks3xTQRRFDbPX7Viy1dZ7YBHw4Fldb.jpg', '2023-07-20 20:28:24', '2023-07-20 20:28:24'),
(9, '3123', '12312312', NULL, '2023-07-28 05:24:58', '2023-07-28 05:24:58'),
(10, '3123', '12321321', NULL, '2023-07-28 05:25:02', '2023-07-28 05:25:02'),
(11, '231321', '32312', 'post-images/W3APVaVJIOadoA9ARFF7AnxFVbocdCTJamxvLC8v.jpg', '2023-08-01 08:16:06', '2023-08-01 08:16:06'),
(12, 'iam better', '31', 'post-images/0LtrkkI7BO1gHtGPZcCw9aD1H9qBICGIbi5JF6Co.jpg', '2023-08-01 08:28:53', '2023-08-01 08:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', NULL, NULL),
(2, 'Support', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `about_me` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `location`, `about_me`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'frenky', 'frenky@gmail.com', '$2y$10$vTf1ScM1mmXOcni68harQ./rXWEXKEyU2UMPkX00mkkJQ0EUCTo/6', NULL, NULL, NULL, NULL, '2023-03-28 19:31:19', '2023-03-28 19:31:19'),
(12, 'Riki', 'riki@gmail.com', '$2y$10$bjbKeMzQ81ZaBg6O7O.No.7BsQxvSF.EXzxD4GxRhruFeia6UwkMy', NULL, NULL, NULL, NULL, '2023-04-09 21:14:51', '2023-04-09 21:14:51'),
(13, 'admin', 'admin@gmail.com', '$2y$10$xQk6C.vJ/EG79YK4.81P/uv7rEUMCtVlV13BVDnZg7o3PJ1KaWY2q', NULL, NULL, NULL, NULL, '2023-07-03 05:13:33', '2023-07-03 05:13:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
