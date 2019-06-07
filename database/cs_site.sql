-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2019 at 07:11 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uncategorized',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `author_id`, `body`, `type`, `category`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Title 1', 1, '<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu est sed lectus vestibulum commodo nec a ante. Nulla facilisi. Fusce at lacus nulla. Mauris ut ipsum in tortor tincidunt bibendum. Aliquam sem mauris, mattis id turpis ut, placerat pellentesque turpis. Quisque ut ante id lacus ullamcorper scelerisque ac eu lectus. Aliquam rhoncus felis vitae mattis pulvinar. Curabitur rutrum consectetur magna, in interdum ante sodales vitae. Sed finibus pellentesque convallis. Phasellus mollis nulla ac fermentum sodales. Vestibulum quis pretium tortor. Aliquam turpis purus, lobortis vel leo sit amet, hendrerit auctor nulla. Mauris dui tortor, porttitor sed tristique vitae, pellentesque non nisl. Mauris vel finibus mi, ac fringilla augue. Fusce cursus dui sit amet ex posuere malesuada. Pellentesque efficitur condimentum turpis at convallis.</b>\r\n\r\nPellentesque lobortis ipsum eget lacinia sodales. Aenean viverra euismod velit, ac interdum turpis luctus at. Vivamus accumsan felis vitae sem iaculis mattis. Proin nec cursus massa. Sed aliquet tempor diam, in placerat lectus sodales eu. Vivamus nibh sapien, convallis sed laoreet cursus, congue vel purus. Fusce facilisis, ex sed laoreet mattis, orci nulla vestibulum leo, at lacinia risus eros sit amet risus. Aenean dictum leo turpis, in dapibus massa faucibus eu. Suspendisse at placerat ipsum. Morbi ut imperdiet est.\r\n\r\nPraesent orci risus, sodales ut semper sed, bibendum ut arcu. Mauris id neque molestie, vehicula dui eu, euismod nunc. Suspendisse tincidunt eros laoreet vehicula congue. Nullam sapien ante, ultricies sit amet dui a, mattis scelerisque magna. Sed dui diam, convallis eget lacinia sed, vulputate non dolor. Duis sit amet mauris semper, iaculis lectus at, semper lectus. Etiam mattis quis metus sit amet euismod. Curabitur non pretium leo. Sed in lacus vel leo lacinia eleifend sit amet blandit odio. Duis elit mauris, eleifend ac ultricies eget, suscipit et quam. Aliquam eu nibh ac felis mattis fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\r\n\r\nVestibulum ultrices, ex sed congue aliquet, nisl orci auctor est, laoreet blandit leo lectus eu eros. Proin a ullamcorper magna. Suspendisse vehicula interdum quam, quis ultrices tellus elementum aliquam. Ut vestibulum sapien et lorem mattis gravida nec at felis. Curabitur sodales ac dolor sed posuere. Nulla erat purus, dapibus quis augue sed, bibendum malesuada enim. Morbi vel mauris ac turpis commodo dictum ac in tortor. Duis ultricies dolor at sem dignissim sollicitudin. Duis tempor venenatis egestas. Morbi vitae placerat turpis.\r\n\r\nSuspendisse neque ante, porta in felis sit amet, tincidunt porta nunc. Donec lobortis nibh et nulla euismod vestibulum. Mauris tempor tempus diam, eget porttitor ante convallis et. Cras lobortis felis vel ligula malesuada dignissim. Sed tempus purus eget mollis rutrum. Nunc mi orci, tincidunt ac varius ut, venenatis id felis. Vivamus scelerisque, orci eu pulvinar tempus, tellus ante feugiat eros, scelerisque vehicula justo metus at eros. Curabitur rutrum felis elit, pretium tempus eros rhoncus vitae. Sed eget suscipit ante. Suspendisse eget turpis eget elit bibendum viverra a a quam. Phasellus in erat felis.', 'news', 'news', NULL, '2019-06-07 04:28:57', '2019-06-07 04:28:57'),
(2, 'Title 2', 1, '<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu est sed lectus vestibulum commodo nec a ante. Nulla facilisi. Fusce at lacus nulla. Mauris ut ipsum in tortor tincidunt bibendum. Aliquam sem mauris, mattis id turpis ut, placerat pellentesque turpis. Quisque ut ante id lacus ullamcorper scelerisque ac eu lectus. Aliquam rhoncus felis vitae mattis pulvinar. Curabitur rutrum consectetur magna, in interdum ante sodales vitae. Sed finibus pellentesque convallis. Phasellus mollis nulla ac fermentum sodales. Vestibulum quis pretium tortor. Aliquam turpis purus, lobortis vel leo sit amet, hendrerit auctor nulla. Mauris dui tortor, porttitor sed tristique vitae, pellentesque non nisl. Mauris vel finibus mi, ac fringilla augue. Fusce cursus dui sit amet ex posuere malesuada. Pellentesque efficitur condimentum turpis at convallis.</b>\r\n\r\nPellentesque lobortis ipsum eget lacinia sodales. Aenean viverra euismod velit, ac interdum turpis luctus at. Vivamus accumsan felis vitae sem iaculis mattis. Proin nec cursus massa. Sed aliquet tempor diam, in placerat lectus sodales eu. Vivamus nibh sapien, convallis sed laoreet cursus, congue vel purus. Fusce facilisis, ex sed laoreet mattis, orci nulla vestibulum leo, at lacinia risus eros sit amet risus. Aenean dictum leo turpis, in dapibus massa faucibus eu. Suspendisse at placerat ipsum. Morbi ut imperdiet est.\r\n\r\nPraesent orci risus, sodales ut semper sed, bibendum ut arcu. Mauris id neque molestie, vehicula dui eu, euismod nunc. Suspendisse tincidunt eros laoreet vehicula congue. Nullam sapien ante, ultricies sit amet dui a, mattis scelerisque magna. Sed dui diam, convallis eget lacinia sed, vulputate non dolor. Duis sit amet mauris semper, iaculis lectus at, semper lectus. Etiam mattis quis metus sit amet euismod. Curabitur non pretium leo. Sed in lacus vel leo lacinia eleifend sit amet blandit odio. Duis elit mauris, eleifend ac ultricies eget, suscipit et quam. Aliquam eu nibh ac felis mattis fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\r\n\r\nVestibulum ultrices, ex sed congue aliquet, nisl orci auctor est, laoreet blandit leo lectus eu eros. Proin a ullamcorper magna. Suspendisse vehicula interdum quam, quis ultrices tellus elementum aliquam. Ut vestibulum sapien et lorem mattis gravida nec at felis. Curabitur sodales ac dolor sed posuere. Nulla erat purus, dapibus quis augue sed, bibendum malesuada enim. Morbi vel mauris ac turpis commodo dictum ac in tortor. Duis ultricies dolor at sem dignissim sollicitudin. Duis tempor venenatis egestas. Morbi vitae placerat turpis.\r\n\r\nSuspendisse neque ante, porta in felis sit amet, tincidunt porta nunc. Donec lobortis nibh et nulla euismod vestibulum. Mauris tempor tempus diam, eget porttitor ante convallis et. Cras lobortis felis vel ligula malesuada dignissim. Sed tempus purus eget mollis rutrum. Nunc mi orci, tincidunt ac varius ut, venenatis id felis. Vivamus scelerisque, orci eu pulvinar tempus, tellus ante feugiat eros, scelerisque vehicula justo metus at eros. Curabitur rutrum felis elit, pretium tempus eros rhoncus vitae. Sed eget suscipit ante. Suspendisse eget turpis eget elit bibendum viverra a a quam. Phasellus in erat felis.', 'news', 'news', NULL, '2019-06-07 04:29:06', '2019-06-07 04:29:06'),
(3, 'Title 3', 1, '<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu est sed lectus vestibulum commodo nec a ante. Nulla facilisi. Fusce at lacus nulla. Mauris ut ipsum in tortor tincidunt bibendum. Aliquam sem mauris, mattis id turpis ut, placerat pellentesque turpis. Quisque ut ante id lacus ullamcorper scelerisque ac eu lectus. Aliquam rhoncus felis vitae mattis pulvinar. Curabitur rutrum consectetur magna, in interdum ante sodales vitae. Sed finibus pellentesque convallis. Phasellus mollis nulla ac fermentum sodales. Vestibulum quis pretium tortor. Aliquam turpis purus, lobortis vel leo sit amet, hendrerit auctor nulla. Mauris dui tortor, porttitor sed tristique vitae, pellentesque non nisl. Mauris vel finibus mi, ac fringilla augue. Fusce cursus dui sit amet ex posuere malesuada. Pellentesque efficitur condimentum turpis at convallis.</b>\r\n\r\nPellentesque lobortis ipsum eget lacinia sodales. Aenean viverra euismod velit, ac interdum turpis luctus at. Vivamus accumsan felis vitae sem iaculis mattis. Proin nec cursus massa. Sed aliquet tempor diam, in placerat lectus sodales eu. Vivamus nibh sapien, convallis sed laoreet cursus, congue vel purus. Fusce facilisis, ex sed laoreet mattis, orci nulla vestibulum leo, at lacinia risus eros sit amet risus. Aenean dictum leo turpis, in dapibus massa faucibus eu. Suspendisse at placerat ipsum. Morbi ut imperdiet est.\r\n\r\nPraesent orci risus, sodales ut semper sed, bibendum ut arcu. Mauris id neque molestie, vehicula dui eu, euismod nunc. Suspendisse tincidunt eros laoreet vehicula congue. Nullam sapien ante, ultricies sit amet dui a, mattis scelerisque magna. Sed dui diam, convallis eget lacinia sed, vulputate non dolor. Duis sit amet mauris semper, iaculis lectus at, semper lectus. Etiam mattis quis metus sit amet euismod. Curabitur non pretium leo. Sed in lacus vel leo lacinia eleifend sit amet blandit odio. Duis elit mauris, eleifend ac ultricies eget, suscipit et quam. Aliquam eu nibh ac felis mattis fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\r\n\r\nVestibulum ultrices, ex sed congue aliquet, nisl orci auctor est, laoreet blandit leo lectus eu eros. Proin a ullamcorper magna. Suspendisse vehicula interdum quam, quis ultrices tellus elementum aliquam. Ut vestibulum sapien et lorem mattis gravida nec at felis. Curabitur sodales ac dolor sed posuere. Nulla erat purus, dapibus quis augue sed, bibendum malesuada enim. Morbi vel mauris ac turpis commodo dictum ac in tortor. Duis ultricies dolor at sem dignissim sollicitudin. Duis tempor venenatis egestas. Morbi vitae placerat turpis.\r\n\r\nSuspendisse neque ante, porta in felis sit amet, tincidunt porta nunc. Donec lobortis nibh et nulla euismod vestibulum. Mauris tempor tempus diam, eget porttitor ante convallis et. Cras lobortis felis vel ligula malesuada dignissim. Sed tempus purus eget mollis rutrum. Nunc mi orci, tincidunt ac varius ut, venenatis id felis. Vivamus scelerisque, orci eu pulvinar tempus, tellus ante feugiat eros, scelerisque vehicula justo metus at eros. Curabitur rutrum felis elit, pretium tempus eros rhoncus vitae. Sed eget suscipit ante. Suspendisse eget turpis eget elit bibendum viverra a a quam. Phasellus in erat felis.', 'news', 'news', NULL, '2019-06-07 04:29:11', '2019-06-07 04:29:11'),
(4, 'Title 4', 1, '<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu est sed lectus vestibulum commodo nec a ante. Nulla facilisi. Fusce at lacus nulla. Mauris ut ipsum in tortor tincidunt bibendum. Aliquam sem mauris, mattis id turpis ut, placerat pellentesque turpis. Quisque ut ante id lacus ullamcorper scelerisque ac eu lectus. Aliquam rhoncus felis vitae mattis pulvinar. Curabitur rutrum consectetur magna, in interdum ante sodales vitae. Sed finibus pellentesque convallis. Phasellus mollis nulla ac fermentum sodales. Vestibulum quis pretium tortor. Aliquam turpis purus, lobortis vel leo sit amet, hendrerit auctor nulla. Mauris dui tortor, porttitor sed tristique vitae, pellentesque non nisl. Mauris vel finibus mi, ac fringilla augue. Fusce cursus dui sit amet ex posuere malesuada. Pellentesque efficitur condimentum turpis at convallis.</b>\r\n\r\nPellentesque lobortis ipsum eget lacinia sodales. Aenean viverra euismod velit, ac interdum turpis luctus at. Vivamus accumsan felis vitae sem iaculis mattis. Proin nec cursus massa. Sed aliquet tempor diam, in placerat lectus sodales eu. Vivamus nibh sapien, convallis sed laoreet cursus, congue vel purus. Fusce facilisis, ex sed laoreet mattis, orci nulla vestibulum leo, at lacinia risus eros sit amet risus. Aenean dictum leo turpis, in dapibus massa faucibus eu. Suspendisse at placerat ipsum. Morbi ut imperdiet est.\r\n\r\nPraesent orci risus, sodales ut semper sed, bibendum ut arcu. Mauris id neque molestie, vehicula dui eu, euismod nunc. Suspendisse tincidunt eros laoreet vehicula congue. Nullam sapien ante, ultricies sit amet dui a, mattis scelerisque magna. Sed dui diam, convallis eget lacinia sed, vulputate non dolor. Duis sit amet mauris semper, iaculis lectus at, semper lectus. Etiam mattis quis metus sit amet euismod. Curabitur non pretium leo. Sed in lacus vel leo lacinia eleifend sit amet blandit odio. Duis elit mauris, eleifend ac ultricies eget, suscipit et quam. Aliquam eu nibh ac felis mattis fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\r\n\r\nVestibulum ultrices, ex sed congue aliquet, nisl orci auctor est, laoreet blandit leo lectus eu eros. Proin a ullamcorper magna. Suspendisse vehicula interdum quam, quis ultrices tellus elementum aliquam. Ut vestibulum sapien et lorem mattis gravida nec at felis. Curabitur sodales ac dolor sed posuere. Nulla erat purus, dapibus quis augue sed, bibendum malesuada enim. Morbi vel mauris ac turpis commodo dictum ac in tortor. Duis ultricies dolor at sem dignissim sollicitudin. Duis tempor venenatis egestas. Morbi vitae placerat turpis.\r\n\r\nSuspendisse neque ante, porta in felis sit amet, tincidunt porta nunc. Donec lobortis nibh et nulla euismod vestibulum. Mauris tempor tempus diam, eget porttitor ante convallis et. Cras lobortis felis vel ligula malesuada dignissim. Sed tempus purus eget mollis rutrum. Nunc mi orci, tincidunt ac varius ut, venenatis id felis. Vivamus scelerisque, orci eu pulvinar tempus, tellus ante feugiat eros, scelerisque vehicula justo metus at eros. Curabitur rutrum felis elit, pretium tempus eros rhoncus vitae. Sed eget suscipit ante. Suspendisse eget turpis eget elit bibendum viverra a a quam. Phasellus in erat felis.', 'news', 'news', NULL, '2019-06-07 04:29:15', '2019-06-07 04:29:15'),
(5, 'Title 5', 1, '<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu est sed lectus vestibulum commodo nec a ante. Nulla facilisi. Fusce at lacus nulla. Mauris ut ipsum in tortor tincidunt bibendum. Aliquam sem mauris, mattis id turpis ut, placerat pellentesque turpis. Quisque ut ante id lacus ullamcorper scelerisque ac eu lectus. Aliquam rhoncus felis vitae mattis pulvinar. Curabitur rutrum consectetur magna, in interdum ante sodales vitae. Sed finibus pellentesque convallis. Phasellus mollis nulla ac fermentum sodales. Vestibulum quis pretium tortor. Aliquam turpis purus, lobortis vel leo sit amet, hendrerit auctor nulla. Mauris dui tortor, porttitor sed tristique vitae, pellentesque non nisl. Mauris vel finibus mi, ac fringilla augue. Fusce cursus dui sit amet ex posuere malesuada. Pellentesque efficitur condimentum turpis at convallis.</b>\r\n\r\nPellentesque lobortis ipsum eget lacinia sodales. Aenean viverra euismod velit, ac interdum turpis luctus at. Vivamus accumsan felis vitae sem iaculis mattis. Proin nec cursus massa. Sed aliquet tempor diam, in placerat lectus sodales eu. Vivamus nibh sapien, convallis sed laoreet cursus, congue vel purus. Fusce facilisis, ex sed laoreet mattis, orci nulla vestibulum leo, at lacinia risus eros sit amet risus. Aenean dictum leo turpis, in dapibus massa faucibus eu. Suspendisse at placerat ipsum. Morbi ut imperdiet est.\r\n\r\nPraesent orci risus, sodales ut semper sed, bibendum ut arcu. Mauris id neque molestie, vehicula dui eu, euismod nunc. Suspendisse tincidunt eros laoreet vehicula congue. Nullam sapien ante, ultricies sit amet dui a, mattis scelerisque magna. Sed dui diam, convallis eget lacinia sed, vulputate non dolor. Duis sit amet mauris semper, iaculis lectus at, semper lectus. Etiam mattis quis metus sit amet euismod. Curabitur non pretium leo. Sed in lacus vel leo lacinia eleifend sit amet blandit odio. Duis elit mauris, eleifend ac ultricies eget, suscipit et quam. Aliquam eu nibh ac felis mattis fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\r\n\r\nVestibulum ultrices, ex sed congue aliquet, nisl orci auctor est, laoreet blandit leo lectus eu eros. Proin a ullamcorper magna. Suspendisse vehicula interdum quam, quis ultrices tellus elementum aliquam. Ut vestibulum sapien et lorem mattis gravida nec at felis. Curabitur sodales ac dolor sed posuere. Nulla erat purus, dapibus quis augue sed, bibendum malesuada enim. Morbi vel mauris ac turpis commodo dictum ac in tortor. Duis ultricies dolor at sem dignissim sollicitudin. Duis tempor venenatis egestas. Morbi vitae placerat turpis.\r\n\r\nSuspendisse neque ante, porta in felis sit amet, tincidunt porta nunc. Donec lobortis nibh et nulla euismod vestibulum. Mauris tempor tempus diam, eget porttitor ante convallis et. Cras lobortis felis vel ligula malesuada dignissim. Sed tempus purus eget mollis rutrum. Nunc mi orci, tincidunt ac varius ut, venenatis id felis. Vivamus scelerisque, orci eu pulvinar tempus, tellus ante feugiat eros, scelerisque vehicula justo metus at eros. Curabitur rutrum felis elit, pretium tempus eros rhoncus vitae. Sed eget suscipit ante. Suspendisse eget turpis eget elit bibendum viverra a a quam. Phasellus in erat felis.', 'news', 'news', NULL, '2019-06-07 04:29:20', '2019-06-07 04:29:20'),
(6, 'Title 6', 1, '<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu est sed lectus vestibulum commodo nec a ante. Nulla facilisi. Fusce at lacus nulla. Mauris ut ipsum in tortor tincidunt bibendum. Aliquam sem mauris, mattis id turpis ut, placerat pellentesque turpis. Quisque ut ante id lacus ullamcorper scelerisque ac eu lectus. Aliquam rhoncus felis vitae mattis pulvinar. Curabitur rutrum consectetur magna, in interdum ante sodales vitae. Sed finibus pellentesque convallis. Phasellus mollis nulla ac fermentum sodales. Vestibulum quis pretium tortor. Aliquam turpis purus, lobortis vel leo sit amet, hendrerit auctor nulla. Mauris dui tortor, porttitor sed tristique vitae, pellentesque non nisl. Mauris vel finibus mi, ac fringilla augue. Fusce cursus dui sit amet ex posuere malesuada. Pellentesque efficitur condimentum turpis at convallis.</b>\r\n\r\nPellentesque lobortis ipsum eget lacinia sodales. Aenean viverra euismod velit, ac interdum turpis luctus at. Vivamus accumsan felis vitae sem iaculis mattis. Proin nec cursus massa. Sed aliquet tempor diam, in placerat lectus sodales eu. Vivamus nibh sapien, convallis sed laoreet cursus, congue vel purus. Fusce facilisis, ex sed laoreet mattis, orci nulla vestibulum leo, at lacinia risus eros sit amet risus. Aenean dictum leo turpis, in dapibus massa faucibus eu. Suspendisse at placerat ipsum. Morbi ut imperdiet est.\r\n\r\nPraesent orci risus, sodales ut semper sed, bibendum ut arcu. Mauris id neque molestie, vehicula dui eu, euismod nunc. Suspendisse tincidunt eros laoreet vehicula congue. Nullam sapien ante, ultricies sit amet dui a, mattis scelerisque magna. Sed dui diam, convallis eget lacinia sed, vulputate non dolor. Duis sit amet mauris semper, iaculis lectus at, semper lectus. Etiam mattis quis metus sit amet euismod. Curabitur non pretium leo. Sed in lacus vel leo lacinia eleifend sit amet blandit odio. Duis elit mauris, eleifend ac ultricies eget, suscipit et quam. Aliquam eu nibh ac felis mattis fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\r\n\r\nVestibulum ultrices, ex sed congue aliquet, nisl orci auctor est, laoreet blandit leo lectus eu eros. Proin a ullamcorper magna. Suspendisse vehicula interdum quam, quis ultrices tellus elementum aliquam. Ut vestibulum sapien et lorem mattis gravida nec at felis. Curabitur sodales ac dolor sed posuere. Nulla erat purus, dapibus quis augue sed, bibendum malesuada enim. Morbi vel mauris ac turpis commodo dictum ac in tortor. Duis ultricies dolor at sem dignissim sollicitudin. Duis tempor venenatis egestas. Morbi vitae placerat turpis.\r\n\r\nSuspendisse neque ante, porta in felis sit amet, tincidunt porta nunc. Donec lobortis nibh et nulla euismod vestibulum. Mauris tempor tempus diam, eget porttitor ante convallis et. Cras lobortis felis vel ligula malesuada dignissim. Sed tempus purus eget mollis rutrum. Nunc mi orci, tincidunt ac varius ut, venenatis id felis. Vivamus scelerisque, orci eu pulvinar tempus, tellus ante feugiat eros, scelerisque vehicula justo metus at eros. Curabitur rutrum felis elit, pretium tempus eros rhoncus vitae. Sed eget suscipit ante. Suspendisse eget turpis eget elit bibendum viverra a a quam. Phasellus in erat felis.', 'news', 'news', NULL, '2019-06-07 04:29:24', '2019-06-07 04:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE `faculty` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_22_070126_create_articles_table', 1),
(4, '2019_05_31_074444_create_media_table', 1),
(5, '2019_06_04_154252_create_faculty_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `middle_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', NULL, NULL, NULL, 'test@mail.com', NULL, '$2y$10$aUGFTNQhmqbLb2z3Doc8N.2ex7rUYZm9M/H5lrxLNm5kpZN9D6GD2', NULL, '2019-06-06 20:26:34', '2019-06-06 20:26:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_author_id_foreign` (`author_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
