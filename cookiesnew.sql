-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 07:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookies`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 6),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'arifturmuji316@gmail.com', 1, '2020-12-13 12:47:01', 1),
(2, '::1', 'arifturmuji316@gmail.com', 1, '2020-12-13 13:03:20', 1),
(3, '::1', 'arifturmuji316@gmail.com', 1, '2020-12-13 13:06:13', 1),
(4, '::1', 'arthurmuji@gmail.com', 2, '2020-12-13 13:13:20', 1),
(5, '::1', 'arifturmuji316@gmail.com', 1, '2020-12-13 13:19:43', 1),
(6, '::1', 'arthurmuji@gmail.com', 2, '2020-12-13 13:23:41', 1),
(7, '::1', 'arthurmuji@gmail.com', 2, '2020-12-13 13:25:22', 1),
(8, '::1', 'arifturmuji316@gmail.com', 1, '2020-12-13 13:29:41', 1),
(9, '::1', 'arthurmuji@gmail.com', 2, '2020-12-13 13:32:38', 1),
(10, '::1', 'arifturmuji316@gmail.com', 1, '2020-12-13 13:35:28', 1),
(11, '::1', 'arifturmuji316@gmail.com', 1, '2020-12-13 21:41:54', 1),
(12, '::1', 'narranaquila@gmail.com', 3, '2020-12-14 09:13:02', 1),
(13, '::1', 'narranaquila@gmail.com', 3, '2020-12-14 09:21:41', 1),
(14, '::1', 'test2', NULL, '2020-12-14 09:22:54', 0),
(15, '::1', 'abah@mail.unpas.ac.id', 4, '2020-12-14 09:25:16', 1),
(16, '::1', 'abah@mail.unpas.ac.id', 4, '2020-12-14 09:25:35', 1),
(17, '::1', 'abah@mail.unpas.ac.id', 4, '2020-12-14 09:26:18', 1),
(18, '::1', 'u', NULL, '2020-12-14 09:26:59', 0),
(19, '::1', 'arthurmuji@gmail.com', 2, '2020-12-14 09:27:06', 1),
(20, '::1', 'abah@mail.unpas.ac.id', 4, '2020-12-14 09:27:21', 1),
(21, '::1', 'jemy@mail.unpas.ac.id', 5, '2020-12-14 09:29:29', 1),
(22, '::1', 'jemy@mail.unpas.ac.id', 5, '2020-12-14 09:30:25', 1),
(23, '::1', 'jemy@mail.unpas.ac.id', 5, '2020-12-14 09:31:07', 1),
(24, '::1', 'jemy@mail.unpas.ac.id', 5, '2020-12-14 09:31:50', 1),
(25, '::1', 'abah@mail.unpas.ac.id', 4, '2020-12-14 09:32:03', 1),
(26, '::1', 'arifturmuji316@gmail.com', 1, '2020-12-14 09:32:27', 1),
(27, '::1', 'jemy@mail.unpas.ac.id', 5, '2020-12-14 09:33:06', 1),
(28, '::1', 'jemy@mail.unpas.ac.id', 5, '2020-12-14 09:38:29', 1),
(29, '::1', 'abah@mail.unpas.ac.id', 4, '2020-12-14 09:38:48', 1),
(30, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-20 09:40:13', 1),
(31, '::1', 'turmuji.183040006@mail.unpas.ac.id', 7, '2020-12-20 09:40:44', 1),
(32, '::1', 'turmuji.183040006@mail.unpas.ac.id', 7, '2020-12-20 09:41:05', 1),
(33, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-20 09:41:41', 1),
(34, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-20 09:42:01', 1),
(35, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-20 21:44:12', 1),
(36, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-20 21:45:01', 1),
(37, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-21 02:44:19', 1),
(38, '::1', 'turmuji.183040006@mail.unpas.ac.id', 7, '2020-12-21 03:00:47', 1),
(39, '::1', 'turmuji.183040006@mail.unpas.ac.id', 7, '2020-12-21 03:01:08', 1),
(40, '::1', 'turmuji.183040006@mail.unpas.ac.id', 7, '2020-12-21 03:01:22', 1),
(41, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-21 03:09:12', 1),
(42, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-21 03:09:29', 1),
(43, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-21 03:09:49', 1),
(44, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-21 03:10:07', 1),
(45, '::1', 'turmuji.183040006@mail.unpas.ac.id', 7, '2020-12-21 03:13:44', 1),
(46, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-21 03:19:55', 1),
(47, '::1', 'turmuji.183040006@mail.unpas.ac.id', 7, '2020-12-21 03:40:14', 1),
(48, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-21 06:08:55', 1),
(49, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-23 05:20:41', 1),
(50, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-23 16:18:34', 1),
(51, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-24 23:52:45', 1),
(52, '::1', 'turmuji.183040006@mail.unpas.ac.id', 7, '2020-12-25 00:04:20', 1),
(53, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-25 00:06:32', 1),
(54, '::1', 'turmuji.183040006@mail.unpas.ac.id', 7, '2020-12-25 00:09:30', 1),
(55, '::1', 'arifturmuji316@gmail.com', 6, '2020-12-25 00:10:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-user', 'Manage All User'),
(2, 'manage-profile', 'Manage User\'s Profile'),
(3, 'manage-recipe', 'Manage user\'s Recipe');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) UNSIGNED NOT NULL,
  `id` int(11) UNSIGNED NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `comment_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1607880465, 1);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(128) NOT NULL,
  `recipe_image` varchar(255) NOT NULL,
  `serving` varchar(50) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `ingredients` varchar(512) NOT NULL,
  `steps` varchar(512) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `status_resep` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `id`, `title`, `recipe_image`, `serving`, `duration`, `ingredients`, `steps`, `slug`, `status_resep`, `created_at`, `updated_at`) VALUES
(1, 6, 'cimin', '', '2', '30', 'telor', 'goreng teelor', 'cimin', 'approve', NULL, '2020-12-21 03:20:12'),
(2, 6, 'cimin', '', '2', '30', 'telor', 'goreng teelor', 'cimin', 'approve', NULL, '2020-12-21 03:20:12'),
(4, 6, 'bakso', '', '1', '50', 'baso + mie', 'goreng teelor', 'bakso', 'approve', '2020-12-21 03:39:43', '2020-12-21 03:39:43'),
(5, 7, 'mie ayam', '', '2', '50', 'baso + mie', 'rebus baso + rebus mie + sajikan', 'mie-ayam', 'approve', '2020-12-21 03:40:52', '2020-12-21 03:40:52'),
(6, 7, 'mie ayam', '', '2', '50', 'baso + mie', 'rebus baso + rebus mie + sajikan', 'mie-ayam', '', '2020-12-21 03:40:52', '2020-12-21 03:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `addres` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `lat` varchar(512) NOT NULL,
  `long` varchar(512) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `addres`, `about`, `updated_at`, `deleted_at`, `lat`, `long`, `phone`, `slug`) VALUES
(6, 'arifturmuji316@gmail.com', 'arifturmuji', NULL, 'default.svg', '$2y$10$yNbFvxCXIPlmhANtFMnNnOUOB.QWyCY.k5/gibbBKdLRbBz8VYQvy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-20 09:35:42', NULL, NULL, '2020-12-20 09:35:42', NULL, '', '', '', NULL),
(7, 'turmuji.183040006@mail.unpas.ac.id', 'ujangarthur', NULL, 'default.svg', '$2y$10$YQn26ws3mA71GRUNNosbYuQN0xrE4ojreUAHHkkL9kGiWeGRJR80e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-20 09:36:08', NULL, NULL, '2020-12-20 09:36:08', NULL, '', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `id` (`id`,`recipe_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`recipe_id`) ON UPDATE CASCADE;

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
