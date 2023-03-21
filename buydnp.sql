-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 12:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buydnp`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apartment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `country`, `phone`, `address`, `apartment`, `city`, `state`, `zip`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 'Poland', '+48571381144', '50 Şamil Əzizbəyov, Baku', 'some apartment here 14', 'Kraków', 'Azerbaijan', '31-881', '2023-03-21 08:42:14', '2023-03-21 08:42:14', NULL),
(2, 7, 'Sweden', '+48571381144', '50 Şamil Əzizbəyov, Baku', 'some apartment here 14', 'Kraków', 'Azerbaijan', '31-881', '2023-03-21 08:57:51', '2023-03-21 08:57:51', NULL),
(3, 7, 'Sweden', '+48571381144', '50 Şamil Əzizbəyov, Baku', 'some apartment here 14', 'Kraków', 'Azerbaijan', '31-881', '2023-03-21 14:17:52', '2023-03-21 14:17:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'DNP 2 4 Dinitrophenol', 'dnp-2-4-dinitrophenol', '2023-03-16 04:21:54', '2023-03-16 07:27:01'),
(2, NULL, 1, 'Cytomel T3', 'cytomel-t3', '2023-03-16 04:22:23', '2023-03-16 07:26:48'),
(3, NULL, 1, 'Injectable Anabolics', 'injectable-anabolics', '2023-03-16 04:22:36', '2023-03-16 07:26:23');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(160, 20, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(161, 20, 'category_id', 'select_dropdown', 'Category Id', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(162, 20, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 4),
(163, 20, 'slug', 'text', 'Slug', 1, 0, 0, 0, 0, 0, '{}', 5),
(164, 20, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 6),
(165, 20, 'description', 'rich_text_box', 'Description', 1, 0, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 7),
(166, 20, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"600\",\"height\":\"701\"},\"quality\":\"100%\"}', 8),
(167, 20, 'slider_images', 'multiple_images', 'Slider Images', 0, 0, 1, 1, 1, 1, '{\"resize\":{\"width\":\"600\",\"height\":\"701\"},\"quality\":\"100%\"}', 9),
(168, 20, 'availability', 'checkbox', 'AV', 1, 1, 1, 1, 1, 1, '{\"on\":\"in stock\",\"off\":\"out of stock\",\"checked\":\"true\"}', 10),
(169, 20, 'product_code', 'text', 'Code', 0, 1, 1, 1, 1, 1, '{}', 11),
(170, 20, 'brand_name', 'text', 'Brand', 0, 0, 1, 1, 1, 1, '{}', 12),
(171, 20, 'meta_title', 'text', 'Meta Title', 0, 0, 1, 1, 1, 1, '{}', 13),
(172, 20, 'meta_description', 'markdown_editor', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 14),
(173, 20, 'meta_keywords', 'text', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 15),
(174, 20, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 16),
(175, 20, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 17),
(176, 20, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 18),
(177, 20, 'product_belongsto_category_relationship', 'relationship', 'Category', 1, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 3),
(191, 23, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(192, 23, 'user_id', 'text', 'User', 1, 1, 1, 0, 0, 0, '{}', 3),
(193, 23, 'address_id', 'text', 'Address Id', 1, 0, 1, 0, 0, 0, '{}', 9),
(194, 23, 'total', 'text', 'Total', 1, 1, 1, 0, 0, 0, '{}', 7),
(195, 23, 'status', 'text', 'Status', 1, 1, 1, 0, 0, 0, '{}', 5),
(196, 23, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 11),
(197, 23, 'updated_at', 'timestamp', 'Updated At', 0, 0, 1, 0, 0, 0, '{}', 12),
(198, 23, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 13),
(199, 23, 'order_belongsto_user_relationship', 'relationship', 'User', 1, 1, 1, 0, 0, 0, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"addresses\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(200, 23, 'order_belongsto_address_relationship', 'relationship', 'Addresses', 1, 0, 1, 0, 0, 0, '{\"model\":\"App\\\\Models\\\\Address\",\"table\":\"addresses\",\"type\":\"belongsTo\",\"column\":\"address_id\",\"key\":\"id\",\"label\":\"id\",\"pivot_table\":\"addresses\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(201, 23, 'order_hasmany_order_product_relationship', 'relationship', 'Products', 1, 0, 1, 0, 0, 0, '{\"model\":\"App\\\\Models\\\\OrderProduct\",\"table\":\"order_products\",\"type\":\"hasMany\",\"column\":\"order_id\",\"key\":\"id\",\"label\":\"product_id\",\"pivot_table\":\"addresses\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(202, 23, 'uuid', 'text', 'Order', 1, 1, 1, 0, 0, 0, '{}', 2),
(203, 23, 'order_notes', 'text', 'Order Notes', 0, 0, 1, 0, 0, 0, '{}', 8);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(20, 'products', 'products', 'Product', 'Products', 'voyager-window-list', 'App\\Models\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2023-03-10 11:54:26', '2023-03-16 04:34:53'),
(23, 'orders', 'orders', 'Order', 'Orders', 'voyager-data', 'App\\Models\\Order', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-03-18 05:32:48', '2023-03-21 11:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-03-08 22:05:22', '2023-03-08 22:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2023-03-08 22:05:22', '2023-03-08 22:05:22', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 8, '2023-03-08 22:05:22', '2023-03-18 05:33:58', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 2, '2023-03-08 22:05:22', '2023-03-18 05:22:04', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 7, '2023-03-08 22:05:22', '2023-03-18 05:33:58', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 11, '2023-03-08 22:05:22', '2023-03-18 05:33:51', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2023-03-08 22:05:22', '2023-03-10 01:40:59', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2023-03-08 22:05:22', '2023-03-10 01:40:59', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2023-03-08 22:05:22', '2023-03-10 01:40:59', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2023-03-08 22:05:22', '2023-03-10 01:40:59', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 12, '2023-03-08 22:05:22', '2023-03-18 05:33:51', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 3, '2023-03-08 22:05:50', '2023-03-18 05:22:04', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 9, '2023-03-08 22:05:50', '2023-03-18 05:33:58', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 10, '2023-03-08 22:05:50', '2023-03-18 05:33:51', 'voyager.pages.index', NULL),
(15, 1, 'Products', '', '_self', 'voyager-window-list', NULL, NULL, 4, '2023-03-10 11:39:05', '2023-03-18 05:22:01', 'voyager.products.index', NULL),
(17, 1, 'Orders', '', '_self', 'voyager-data', NULL, NULL, 6, '2023-03-18 05:32:48', '2023-03-18 05:33:58', 'voyager.orders.index', NULL);

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2016_01_01_000000_create_pages_table', 2),
(26, '2016_01_01_000000_create_posts_table', 2),
(27, '2016_02_15_204651_create_categories_table', 2),
(28, '2017_04_11_000000_alter_post_nullable_fields_table', 2),
(30, '2023_03_10_153220_create_products_table', 3),
(31, '2023_03_18_081358_create_orders_table', 3),
(32, '2023_03_18_081545_create_order_products_table', 3),
(33, '2023_03_18_081627_create_addresses_table', 3),
(35, '2023_03_20_120438_add_order_notes_to_orders', 4),
(36, '2023_03_21_121622_add_phone_to_addresses', 5),
(37, '2023_03_21_121731_add_uuid_to_orders', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `status` enum('pending','processing','completed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uuid`, `user_id`, `address_id`, `total`, `status`, `order_notes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '606162772', 7, 1, '694.00', 'processing', 'some order notes here', '2023-03-21 08:42:14', '2023-03-21 17:46:34', NULL),
(2, '1157398346', 7, 2, '57.00', 'pending', 'some order notes here', '2023-03-21 08:57:51', '2023-03-21 08:57:51', NULL),
(3, '1431407049', 7, 3, '348.00', 'pending', 'some order notes here', '2023-03-21 14:17:52', '2023-03-21 14:17:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `price`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '348.00', 1, '2023-03-21 08:42:14', '2023-03-21 08:42:14', NULL),
(2, 1, 4, '219.00', 1, '2023-03-21 08:42:14', '2023-03-21 08:42:14', NULL),
(3, 1, 3, '70.00', 1, '2023-03-21 08:42:14', '2023-03-21 08:42:14', NULL),
(4, 1, 2, '57.00', 1, '2023-03-21 08:42:14', '2023-03-21 08:42:14', NULL),
(5, 2, 2, '57.00', 1, '2023-03-21 08:57:51', '2023-03-21 08:57:51', NULL),
(6, 3, 1, '348.00', 1, '2023-03-21 14:17:52', '2023-03-21 14:17:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2023-03-08 22:05:50', '2023-03-08 22:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rashad.upwork@gmail.com', '$2y$10$Hnc65CBwm5Pfa4pYQ9XNpOhIbvqtQdcvtKOVKw7j7r9l/TVwYqc8K', '2023-03-09 21:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(2, 'browse_bread', NULL, '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(3, 'browse_database', NULL, '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(4, 'browse_media', NULL, '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(5, 'browse_compass', NULL, '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(6, 'browse_menus', 'menus', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(7, 'read_menus', 'menus', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(8, 'edit_menus', 'menus', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(9, 'add_menus', 'menus', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(10, 'delete_menus', 'menus', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(11, 'browse_roles', 'roles', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(12, 'read_roles', 'roles', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(13, 'edit_roles', 'roles', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(14, 'add_roles', 'roles', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(15, 'delete_roles', 'roles', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(16, 'browse_users', 'users', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(17, 'read_users', 'users', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(18, 'edit_users', 'users', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(19, 'add_users', 'users', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(20, 'delete_users', 'users', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(21, 'browse_settings', 'settings', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(22, 'read_settings', 'settings', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(23, 'edit_settings', 'settings', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(24, 'add_settings', 'settings', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(25, 'delete_settings', 'settings', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(26, 'browse_categories', 'categories', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(27, 'read_categories', 'categories', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(28, 'edit_categories', 'categories', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(29, 'add_categories', 'categories', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(30, 'delete_categories', 'categories', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(31, 'browse_posts', 'posts', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(32, 'read_posts', 'posts', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(33, 'edit_posts', 'posts', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(34, 'add_posts', 'posts', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(35, 'delete_posts', 'posts', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(36, 'browse_pages', 'pages', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(37, 'read_pages', 'pages', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(38, 'edit_pages', 'pages', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(39, 'add_pages', 'pages', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(40, 'delete_pages', 'pages', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(46, 'browse_products', 'products', '2023-03-10 11:54:26', '2023-03-10 11:54:26'),
(47, 'read_products', 'products', '2023-03-10 11:54:26', '2023-03-10 11:54:26'),
(48, 'edit_products', 'products', '2023-03-10 11:54:26', '2023-03-10 11:54:26'),
(49, 'add_products', 'products', '2023-03-10 11:54:26', '2023-03-10 11:54:26'),
(50, 'delete_products', 'products', '2023-03-10 11:54:26', '2023-03-10 11:54:26'),
(56, 'browse_orders', 'orders', '2023-03-18 05:32:48', '2023-03-18 05:32:48'),
(57, 'read_orders', 'orders', '2023-03-18 05:32:48', '2023-03-18 05:32:48'),
(58, 'edit_orders', 'orders', '2023-03-18 05:32:48', '2023-03-18 05:32:48'),
(59, 'add_orders', 'orders', '2023-03-18 05:32:48', '2023-03-18 05:32:48'),
(60, 'delete_orders', 'orders', '2023-03-18 05:32:48', '2023-03-18 05:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(56, 1),
(57, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2023-03-08 22:05:50', '2023-03-08 22:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`slider_images`)),
  `availability` tinyint(4) NOT NULL DEFAULT 1,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `price`, `description`, `image`, `slider_images`, `availability`, `product_code`, `brand_name`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'DNP Dinitrophenol 200mg 100cps', 'dnp-dinitrophenol-200mg-100cps', 34800, '<p><strong>Buy DNP | Buy Dnp UK | Buy Dnp Canada</strong></p>\r\n<p>2,4-Dinitrophenol (DNP) is a supplement commonly used for fast and extreme weight loss in high-level bodybuilders (but is now gaining popularity with the general pollution as well).</p>', 'products\\March2023\\Uz4XeiIxNR2OFVfkKbGB.jpg', '[\"products\\\\March2023\\\\JhsOJMZFRh14SdstgAMf.jpg\"]', 1, 'DNP 200mg 100cps', 'Honest Chem', NULL, NULL, NULL, '2023-03-16 04:33:52', '2023-03-16 08:43:35', NULL),
(2, 3, 'Boldeno 250', 'boldeno-250', 5700, '<div id=\"product-product\" class=\"container\">\r\n<div class=\"row\">\r\n<div id=\"content\" class=\"col-sm-9\">\r\n<div class=\"product-info-details-more\">\r\n<div class=\"tab-content\">\r\n<div id=\"tab-description\" class=\"tab-pane active\">\r\n<p>Boldenone Undecylenate 250 mg/ml.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'products\\March2023\\L9DF5YRhB3Jxai2LVzl7.jpg', '[\"products\\\\March2023\\\\xLI9NBzdwEXUaGG3WFBy.jpg\"]', 1, 'Boldeno 250', 'Body Research Labs', NULL, NULL, NULL, '2023-03-16 07:17:59', '2023-03-17 05:06:39', NULL),
(3, 3, 'BP Anabolics Stack 150', 'bp-anabolics-stack-150', 7000, '<p>Trenbolone Acetate 50 mg/ml.&nbsp;Testosterone Propionate 50mg/ml. Drostanolone Propionate 50 mg/ml.</p>', 'products\\March2023\\SElKMcLl0463ZRwiEFTB.jpg', '[\"products\\\\March2023\\\\DBebP4ndGGPd6C8o8Snr.jpg\"]', 1, 'Anabolic Stack 150', 'Barba Pharma', NULL, NULL, NULL, '2023-03-16 08:39:25', '2023-03-17 04:46:25', NULL),
(4, 1, 'DNP Dinitrophenol 200mg 50cps', 'dnp-dinitrophenol-200mg-50cps', 21900, '<p>2,4-Dinitrophenol (DNP) is a supplement commonly used for fast and extreme weight loss in high-level bodybuilders (but is now gaining popularity with the general pollution as well). It is originally used as an explosive, a pesticide, as well as a range of other industrial processes including- dye, wood preserver, herbicide and photographic developer.</p>', 'products\\March2023\\8XzAZxlh50M98BnxjvF5.jpg', '[\"products\\\\March2023\\\\u3QxRTUcahFkj7miBvHi.jpg\"]', 1, 'Honest Chem', 'Honest Chem', NULL, NULL, NULL, '2023-03-16 08:43:09', '2023-03-16 08:43:09', NULL),
(5, 3, 'TrenoPump 250', 'trenopump-250', 9400, '<div id=\"product-product\" class=\"container\">\r\n<div class=\"row\">\r\n<div id=\"content\" class=\"col-sm-9\">\r\n<div class=\"product-info-details-more\">\r\n<div class=\"tab-content\">\r\n<div id=\"tab-description\" class=\"tab-pane active\">\r\n<div class=\"product-short-description\">\r\n<p>Trenbolone Enanthate 250 mg/ml</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'products\\March2023\\C7d8oZqlA7mcKNEs5T5b.jpg', '[\"products\\\\March2023\\\\7ZSh24b70hTjqMlcginy.jpg\"]', 1, 'TrenoPump 250', 'Pumping Iron Labs', NULL, NULL, NULL, '2023-03-21 19:54:59', '2023-03-21 19:54:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2023-03-08 22:05:22', '2023-03-08 22:05:22'),
(2, 'user', 'Normal User', '2023-03-08 22:05:22', '2023-03-08 22:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'BuyDNP', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to BuyDNP.', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2023-03-08 22:05:50', '2023-03-08 22:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$.5WPSmWi01eU2RdVHh.YMOwktGLIx/50dMCc33V5AbMboTP3zbz2O', 'Yrqj9gdFiiarHjPDVPJkQFmFvn9zv0qsaCNp14buvocybAruW5le8gJiHO5k', NULL, '2023-03-08 22:05:50', '2023-03-08 22:05:50'),
(6, 2, 'User Test', 'user@gmail.com', 'users/default.png', NULL, '$2y$10$1v8SHQwmRwTljkViv6hro.2okP8oBQ8q.coqtAZeIllk7PfQuegDm', NULL, NULL, '2023-03-09 21:44:22', '2023-03-09 23:18:42'),
(7, 2, 'user1 test', 'user1@gmail.com', 'users/default.png', NULL, '$2y$10$L2PrLwi4SLlTZIwgRCSNreG51pkjsJMsuw8J6InIqm0ZbckgQ6Ifq', NULL, NULL, '2023-03-20 13:39:52', '2023-03-20 13:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

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
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
