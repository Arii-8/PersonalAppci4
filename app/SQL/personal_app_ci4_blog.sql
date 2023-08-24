-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 06:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_app_ci4_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT 'John Doe',
  `content` text DEFAULT NULL,
  `status` enum('published','draft') NOT NULL DEFAULT 'draft',
  `created_at` datetime DEFAULT current_timestamp(),
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `author`, `content`, `status`, `created_at`, `slug`) VALUES
(1, 'Selamat datang di Codeigntier', 'John Doe', 'Pengenalan Codeigniter untuk Pemula.', 'draft', '2023-08-15 11:25:47', 'codeigniter-intro'),
(2, 'Hello World', 'John Doe', 'Hello World, ini contoh artikel', 'draft', '2023-08-15 11:25:47', 'hello-world'),
(3, 'Meetup komunitas Codeigniter Indonesia', 'John Doe', 'Seru sekali meetup perdana komunitas codeigniter..', 'draft', '2023-08-15 11:25:47', 'codeigniter-meetup'),
(5, 'React JS for beginner', 'John Doe', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat at praesentium eaque quas dolore, a quod consequuntur quasi repudiandae assumenda repellendus maiores alias ipsa corrupti iste repellat, eveniet excepturi nisi cupiditate velit. Dicta quibusdam in quos vitae officiis dolor earum, quis qui eaque ipsa reprehenderit, omnis suscipit necessitatibus. Earum nulla aspernatur exercitationem enim? Explicabo officiis porro earum sint nemo, cumque odit itaque doloribus ipsum, iste unde architecto sunt eaque voluptate debitis deserunt quae odio nostrum maiores expedita fugiat ducimus minima. Placeat ducimus voluptas, sit ab sequi sed voluptatum quos nobis!', 'published', '2023-08-17 17:37:33', 'react-js-for-beginner'),
(6, 'PHP codeigniter for beginner', 'John Doe', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat at praesentium eaque quas dolore, a quod consequuntur quasi repudiandae assumenda repellendus maiores alias ipsa corrupti iste repellat, eveniet excepturi nisi cupiditate velit. Dicta quibusdam in quos vitae officiis dolor earum, quis qui eaque ipsa reprehenderit, omnis suscipit necessitatibus. Earum nulla aspernatur exercitationem enim? Explicabo officiis porro earum sint nemo, cumque odit itaque doloribus ipsum, iste unde architecto sunt eaque voluptate debitis deserunt quae odio nostrum maiores expedita fugiat ducimus minima. Placeat ducimus voluptas, sit ab sequi sed voluptatum quos nobis!', 'published', '2023-08-17 17:38:11', 'php-codeigniter-for-beginner'),
(7, 'Django for  beginner', 'John Doe', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat at praesentium eaque quas dolore, a quod consequuntur quasi repudiandae assumenda repellendus maiores alias ipsa corrupti iste repellat, eveniet excepturi nisi cupiditate velit. Dicta quibusdam in quos vitae officiis dolor earum, quis qui eaque ipsa reprehenderit, omnis suscipit necessitatibus. Earum nulla aspernatur exercitationem enim? Explicabo officiis porro earum sint nemo, cumque odit itaque doloribus ipsum, iste unde architecto sunt eaque voluptate debitis deserunt quae odio nostrum maiores expedita fugiat ducimus minima. Placeat ducimus voluptas, sit ab sequi sed voluptatum quos nobis!', 'published', '2023-08-17 17:38:38', 'django-for-beginner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
