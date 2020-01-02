-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 03:13 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chickenv_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `about` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about`, `name`, `image`, `description`, `address`, `email`, `pnumber`, `created_at`, `updated_at`) VALUES
(1, 'Chicken Village is one of the restaurants which\r\n             provide quality food in Harare, it was designed with the \r\n             history in mind we have created a soft\r\n             industrial dining room, combined with an open kitchen, coffee take out bar and on site coffee roastery..nice', 'Chicken Village', 'uploads/logo/1540790955logo.png', 'Chicken Village has the perfect place to enjoy \r\n            fine food and great cocktails with excellent service, \r\n            in comfortable atmospheric surroundings.\r\n             We have a soft dining room, combined with an open kitchen, coffee take out bar.', 'Cnr 2nd Street and Robert Mugabe Ave Harare', 'infor@chickenvillage.co.zw', '+263 784 552 768', '2018-10-24 17:44:32', '2018-10-29 06:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `headline`, `sub_headline`, `description`, `image`, `created_at`, `updated_at`) VALUES
(11, 'Hello, We Are Chicken Village', 'We are Food Masters', 'Chicken Village has the perfect place to enjoy fine food and\r\n                            great cocktails with <br>excellent service, in comfortable atmospheric surroundings.', 'uploads/banners/154075185218.jpg', '2018-10-28 16:37:32', '2018-10-28 16:37:32'),
(12, 'Chicken Village Offers', 'Fresh & Tasty Meals', 'Food To fit your lifestyle & health.', 'uploads/banners/1540752135154038121924.jpg', '2018-10-28 16:42:15', '2018-10-28 16:42:15'),
(13, 'We Are Food Masters!', 'Welcome To Chicken Village', 'We Serve Quality Food', 'uploads/banners/154075243330.jpg', '2018-10-28 16:47:13', '2018-10-28 16:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `category`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(8, 'Chicken Wrap', 'main', 'Chicken Wrap by Chicken Village', 'uploads/dishes/154075279325.jpg', 4, '2018-10-28 16:53:13', '2018-10-28 16:53:13'),
(9, 'Original Village Shawarma', 'main', 'Original Village Shawarma by Chicken Village', 'uploads/dishes/154075289229.jpg', 3, '2018-10-28 16:54:52', '2018-10-28 16:54:52'),
(10, 'Chicken Salad', 'salad', 'Chicken Salad By Chicken Village', 'uploads/dishes/154075300623.jpg', 3, '2018-10-28 16:56:46', '2018-10-28 16:56:46'),
(11, '500ml Coke', 'drink', 'Coke 500ml', 'uploads/dishes/15407531012.png', 1, '2018-10-28 16:58:21', '2018-10-28 16:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `faq` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `faq`, `created_at`, `updated_at`) VALUES
(1, 'Who is the owner of Chicken Village restaurant?', '2018-10-28 17:40:57', '2018-10-28 17:40:57'),
(2, 'When did Chicken Village restaurant established?', '2018-10-28 17:41:48', '2018-10-28 17:41:48'),
(3, 'How many tables in the resturant?', '2018-10-28 17:42:11', '2018-10-28 17:42:11'),
(4, 'Can i have a reservation on Chicken Village?', '2018-10-28 17:42:43', '2018-10-28 17:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `caption`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'team', 'with love by Chicken Village', 'uploads/gallery/1540847803154075279325.jpg', '2018-10-24 19:07:07', '2018-10-29 19:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(10) UNSIGNED NOT NULL,
  `food_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `food_name`, `meal`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(5, 'chips and Beefstew', 'breakfast', 'Et dolorem officiis dolorem est. Inventore in libero vitae vitae aut dolore recusandae. Quia soluta vero natus quae nihil ad.', 'uploads/154039447830.jpg', 43, '2018-10-23 17:17:11', '2018-10-24 13:21:18'),
(6, 'Chicken Stir Fry', 'lunch', 'Chicken Stir Fry', 'uploads/154076379824.jpg', 4, '2018-10-23 17:17:11', '2018-10-28 19:56:38'),
(8, 'Original Beef Burger', 'breakfast', 'Original Beef Burger', 'uploads/154076389027.jpg', 2, '2018-10-23 17:17:11', '2018-10-28 19:58:10'),
(9, 'T-Bone steak & Chips', 'supper', 'T-Bone steak & Chips', 'uploads/154076399430.jpg', 6, '2018-10-23 17:17:11', '2018-10-28 19:59:54'),
(11, 'T-Bone steak', 'supper', 'T-Bone steak', 'uploads/154076405831.jpg', 5, '2018-10-23 17:17:11', '2018-10-28 20:00:58'),
(12, 'Full Chicken', 'lunch', 'Roasted   Full Chicken by Chicken Village', 'uploads/154080532532.jpg', 12, '2018-10-23 17:17:11', '2018-10-29 07:28:45'),
(13, '4 Pieces & Medium Chips', 'supper', '4 Pieces & Medium Chips', 'uploads/154080546837.jpg', 7, '2018-10-23 17:17:11', '2018-10-29 07:31:08'),
(14, '1 Piece & Chips + 4 Winglets', 'lunch', '1 Piece & Chips + 4 Winglets', 'uploads/154080559738.jpg', 5, '2018-10-23 17:17:11', '2018-10-29 07:33:17'),
(15, '1 Piece & Medium Chips', 'supper', '1 Piece & Medium Chips', 'uploads/154080571639.jpg', 3, '2018-10-23 17:17:11', '2018-10-29 07:35:16'),
(16, '2 Piece & Medium Chips', 'supper', '2 Piece & Medium Chips', 'uploads/154080598540.jpg', 4, '2018-10-23 17:17:11', '2018-10-29 07:39:45'),
(17, '3 Piece & Medium Chips + Coleslaw', 'supper', '3 Piece & Medium Chips + Coleslaw', 'uploads/154080617941.jpg', 6, '2018-10-23 17:17:11', '2018-10-29 07:42:59'),
(18, '6 Piece & 2 Medium Chips + Coleslaw', 'supper', '6 Piece & 2 Medium Chips + Coleslaw', 'uploads/154080639042.jpg', 13, '2018-10-23 17:17:11', '2018-10-29 07:46:30'),
(19, 'Cheesy Chips', 'breakfast', 'Cheesy Chips', 'uploads/154080648043.jpg', 3, '2018-10-23 17:17:11', '2018-10-29 07:48:00'),
(20, 'Id perferendis quo ut molestiae.', 'drink', 'Velit esse delectus nulla facilis dicta sint nulla. Dicta sunt sed eos vel. Labore libero repudiandae facere. Quasi asperiores corrupti assumenda nihil quae. Consequatur est numquam voluptatibus repellat quis.', 'uploads/23.jpg', 46, '2018-10-23 17:17:11', '2018-10-23 17:17:11'),
(21, 'Quia nam.', 'drink', 'Tempora velit eum deleniti qui ex. Voluptate facilis illo exercitationem nihil est fuga. Et non rerum et illo amet. Itaque nobis ducimus et consequatur.', 'uploads/23.jpg', 19, '2018-10-23 17:17:11', '2018-10-23 17:17:11'),
(26, 'Chicken Cheese Burger', 'breakfast', 'Chicken Cheese Burger', 'uploads/154076370628.jpg', 3, '2018-10-23 17:17:12', '2018-10-28 19:55:06'),
(27, 'Chicken Salad', 'supper', 'Chicken Salad by Chicken Village', 'uploads/23.jpg', 18, '2018-10-23 17:17:12', '2018-10-28 19:48:14'),
(28, 'Cheese Burger', 'breakfast', 'Cheese Burger ....', 'uploads/154076354619.jpg', 3, '2018-10-23 17:17:12', '2018-10-28 19:52:26'),
(32, 'chips and chicken', 'supper', '<p>the best chicken and chips super meal<br></p>', 'uploads/154037484439.jpg', 12, '2018-10-24 07:54:04', '2018-10-24 07:54:04'),
(33, 'Original Village Shwama', 'breakfast', '<p>Monkfish, onion, paella rice, garlic &amp; smoked paprika, creamy \r\nchesapeake crab dip with artichoke, baked and topped with cheddar \r\ncheese, with crusty bread for dipping. creamy chesapeake crab dip with \r\nartichoke, baked and topped with cheddar cheese. </p>', 'uploads/154040548129.jpg', 5, '2018-10-24 16:24:41', '2018-10-24 16:24:41');

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
(1, '2018_10_23_145609_create_meals_table', 1),
(2, '2018_10_23_190926_create_meals_table', 2),
(3, '2018_10_24_103413_create_banners_table', 3),
(4, '2018_10_24_115438_create_drinks_table', 4),
(6, '2018_10_24_133019_create_teams_table', 5),
(7, '2018_10_24_174830_create_abouts_table', 6),
(8, '2018_10_24_193912_create_abouts_table', 7),
(9, '2018_10_24_195941_create_dishes_table', 8),
(10, '2018_10_24_203856_create_galleries_table', 9),
(11, '2018_10_25_044644_create_faqs_table', 10),
(12, '2018_10_25_045628_create_news_table', 10),
(13, '2018_10_25_143017_create_testmonials_table', 10),
(14, '2018_10_26_154559_create_testimonials_table', 11),
(15, '2014_10_12_000000_create_users_table', 12),
(16, '2014_10_12_100000_create_password_resets_table', 12),
(17, '2018_10_28_201150_create_responds_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `msg`, `category`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Promotion', 'promotion', '1.1	BACKGROUND TO THE PROBLEM\r\nIn January 2017 the government of Zimbabwe through the Ministry of Primary and Secondary Education introduced an updated Curriculum Framework and related syllabi for implementation in all schools in the country. For secondary schools the Framework outlines the following learning areas:\r\n•	Computer Science, Geography, Physics, Chemistry, Biology, Additional Mathematics, Pure Mathematics, Statistics, History, Sociology, Economic History, Family and Religious Studies. \r\nThe first two phases of the implementation of the new curriculum began in 2017 with training in syllabi interpretation of some teachers involved in the teaching of classes beginning the new curriculum system.\r\nCurrently learners are assisted by teachers. The teacher may be having a class of learners ranging from 40 to 50.\r\nThere was limited time to implement the new curriculum, New Curriculum requires resources which some schools cannot afford, teacher and headmasters claimed that they were yet to see the final syllabuses yet the new curriculum was in progress. Teachers and Headmasters also claimed that they were yet to receive new textbooks and learning material for the new curriculum the syllabi are not readily available in schools. The teaching material or textbooks for the new curricula are not readily available, yet there are completely new subjects that have been introduced such as Heritage Studies and Economic History. Teachers, as key implementers of the new curriculum, have not received the adequate in-service training necessary for the immediate implementation\r\nYet surprisingly, ministry officials are calling for wholesale implementation at primary and secondary schools. The new curriculum has great emphasis on information and communication technology (ICT), yet the ministry has not taken any contingent measures to close the ICT gulf between urban and rural schools or even training of teachers so that they are not deskilled by the new curriculum. \r\n1.2	STATEMENT OF THE PROBLEM\r\nWith limited time to implement the new curriculum. Teachers and Headmasters, as key implementers of the new curriculum, have not received the adequate in-service training necessary for the immediate implementation and they claimed that they were yet to see the final syllabuses yet the new curriculum was in progress, also claimed that they were yet to receive new textbooks and learning material for the new curriculum the syllabi are not readily available in schools.', 'business', 'uploads/news/15404822585.jpg', '2018-10-25 13:44:18', '2018-10-26 19:43:09'),
(3, 'Hoza Friday Promo', 'hoza-friday-promo', 'Hoza Friday Promo With Chicken Village', 'Promotion', 'uploads/news/15405019893.jpg', '2018-10-25 19:13:09', '2018-10-25 19:13:33'),
(4, 'Hoza Weekend', 'hoza-weekend', 'Hoza Weekend Saturday promotion with chicken village', 'Promotion', 'uploads/news/154050212817.jpg', '2018-10-25 19:15:28', '2018-10-25 19:15:28'),
(5, 'chicken and chips for the', 'weekend-chicken-and-chips', 'chicken and chips for the weekend', 'Promotion', 'uploads/news/154053067424.jpg', '2018-10-26 03:11:14', '2018-10-26 03:11:14'),
(6, 'chicken and chips for the weekend', 'chicken-and-chips-for-the-weekend', 'chicken and chips for the weekend plus extra wing', 'Promotion', 'uploads/news/15405308157.jpg', '2018-10-26 03:11:52', '2018-10-26 03:13:35'),
(7, 'the Burgar', 'the-bread', 'From green bean casserole to mashed potatoes and cranberry sauce, find standout Thanksgiving sides from Food Network chefs find standout.', 'prices', 'uploads/news/154058452427.jpg', '2018-10-26 18:08:44', '2018-10-28 17:23:57'),
(8, 'Mid Week Meals', 'mid-week-meals', 'I’ve been baking this cake for many years, and have experimented with making it into cupcakes, as a layer cake, serving it dusted with\r\nI’ve been baking this cake for many years, and have experimented with making it into cupcakes, as a layer cake, serving it dusted with\r\nI’ve been baking this cake for many years, and have experimented with making it into cupcakes, as a layer cake, serving it dusted with\r\nI’ve been baking this cake for many years, and have experimented with making it into cupcakes, as a layer cake, serving it dusted with', 'News and events', 'uploads/news/154075458512.jpg', '2018-10-27 05:12:17', '2018-11-06 16:14:15'),
(9, 'Mighty Mondays', 'mighty-mondays', 'I began my career as a recipe tester for cookbooks, and I did that work for two years. I loved cookbooks and loved browsing for them...', 'News', 'uploads/news/15407545111.jpg', '2018-10-28 04:52:18', '2018-10-29 07:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('gabrielmusodza@gmail.com', '$2y$10$xwWWgBNAcwY8qifbFjfyl.z85Maf9yhv/D5LG8JfQdZ6YXH3sdaSG', '2018-10-28 15:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `responds`
--

CREATE TABLE `responds` (
  `id` int(10) UNSIGNED NOT NULL,
  `faqs_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `respond` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `responds`
--

INSERT INTO `responds` (`id`, `faqs_id`, `respond`, `created_at`, `updated_at`) VALUES
(1, '3', 'Chicken Village is one of the restaurants which provide quality food in Harare, it was designed with the history in mind we have created a soft industrial dining room, combined with an open kitchen, coffee take out bar and on site coffee roastery.', '2018-10-28 18:53:35', '2018-10-28 18:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `role`, `pnumber`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mrs Makumbe', 'Dirctor', '07743373888', 'uploads/team/1540393500user.png', '2018-10-24 12:36:23', '2018-10-24 13:05:00'),
(2, 'Blessing Sibanda', 'Shop Manager', '0773 627 282', 'uploads/team/1540393669user.png', '2018-10-24 12:36:24', '2018-10-24 13:07:49'),
(3, 'Irvine Gava', 'Shift Manager', '0773626222', 'uploads/team/1540393840user.png', '2018-10-24 12:36:24', '2018-10-24 13:10:40'),
(6, 'Mr Makumbe', 'Dirctor', '0773626222', 'uploads/team/1540753393user.png', '2018-10-24 12:59:27', '2018-10-28 17:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `position`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Gabriel Musodza', 'We\'ve been to Chicken Village many times over the years. We know what to expect: great food and awesome prices ”', 'Customer', 'uploads/testimonials/1540753976user.png', '2018-10-26 14:55:34', '2018-10-28 17:12:56'),
(3, 'Tendai Mambure', 'The reasonable prices, the great atmosphere are only topped by the delicious food. Keep up the great work', 'Customer', 'uploads/testimonials/15405732491c111df3-f322-45a3-afd1-b7052c92f36d.jpg', '2018-10-26 15:00:49', '2018-10-28 17:14:01'),
(5, 'Makatuka K', 'Chicken Village is simply the best. Great Food, nice atmosphere and very reasonable prices. It just doesn\'t get any better', 'Customer', 'uploads/testimonials/1540754116maker.png', '2018-10-26 15:11:55', '2018-10-28 17:15:16'),
(6, 'Mr Nhunzvi', 'The reasonable prices, the great atmosphere are only topped by the delicious food. Keep up the great work', 'Cheff', 'uploads/testimonials/154057414915 - 1.jpg', '2018-10-26 15:15:49', '2018-10-28 17:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gabriel Musodza', 'gabrielmusodza@gmail.com', NULL, '$2y$10$ZqJIoAzIMxYArlvS71M9QeshzfMEewUzS1BI7Jmd3H4B06V4xNJxW', 1, 'e2W5evitQUV60ylrcvZ9hWl1X6bZZDDEXZdHbaAN7HwyxWtgegttsyEb87nK', '2018-10-28 15:37:19', '2018-10-29 12:30:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `responds`
--
ALTER TABLE `responds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `responds`
--
ALTER TABLE `responds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
