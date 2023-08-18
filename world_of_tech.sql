-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 07:40 AM
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
-- Database: `world_of_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_blogs`
--

CREATE TABLE `admin_blogs` (
  `id` int(11) NOT NULL,
  `blog_category` int(11) NOT NULL,
  `thumbnail` varchar(1000) NOT NULL,
  `blogtitle` varchar(1000) NOT NULL,
  `subtitle` varchar(1000) NOT NULL,
  `intro_para` mediumtext NOT NULL,
  `intro_img` varchar(1000) NOT NULL,
  `main_para` mediumtext NOT NULL,
  `main_img` varchar(1000) NOT NULL,
  `conclusion_para` mediumtext NOT NULL,
  `conclusion_img` varchar(1000) NOT NULL,
  `publish_date` date NOT NULL,
  `meta_tags` varchar(500) NOT NULL,
  `metatags_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_blogs`
--

INSERT INTO `admin_blogs` (`id`, `blog_category`, `thumbnail`, `blogtitle`, `subtitle`, `intro_para`, `intro_img`, `main_para`, `main_img`, `conclusion_para`, `conclusion_img`, `publish_date`, `meta_tags`, `metatags_description`) VALUES
(2, 1, '../blog_images/https___therealchamps.com_wp-content_uploads_getty-images_2017_07_1453284988.jpeg', 'Football', 'Football News', 'This is the intro paragraph', '../blog_images/Lionel-Messi-Argentina-2022-FIFA-World-Cup_(cropped).jpg', 'This is the main paragraph', '../blog_images/Cristiano_Ronaldo_WC2022_-_01_(cropped).jpg', 'This is the conclusion paragraph', '../blog_images/news.png', '2023-08-18', 'Football, Messi, Ronaldo, Mbappe', 'This is a football news blog');

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'WorldOfTech_Admin_778866_Official!!!', '$2y$10$wtwJTnK7t6e/mhlWNj.BlebaPCYkXvoimJLI/h8gWICNtSLa7xzG6');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_comment`
--

CREATE TABLE `blogs_comment` (
  `id` int(11) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs_comment`
--

INSERT INTO `blogs_comment` (`id`, `comments`, `blog_id`, `user_email`) VALUES
(1, 'Good', 2, 'mesum@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogcat`
--

CREATE TABLE `tbl_blogcat` (
  `id` int(11) NOT NULL,
  `blog_cat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blogcat`
--

INSERT INTO `tbl_blogcat` (`id`, `blog_cat`) VALUES
(1, 'Technology'),
(2, 'Entertainment'),
(3, 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `user_contact_details`
--

CREATE TABLE `user_contact_details` (
  `id` int(11) NOT NULL,
  `user_name` varchar(120) NOT NULL,
  `user_email` varchar(240) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `subject` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `plan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_contact_details`
--

INSERT INTO `user_contact_details` (`id`, `user_name`, `user_email`, `phone_number`, `subject`, `message`, `plan`) VALUES
(1, 'Mesum', 'masumbinshaukat@gmail.com', 2147483647, 'Testing', 'Testing 123456789', 'Business'),
(2, 'Zohair', 'zohair@gmail.com', 2147483647, 'Checking', 'Hellllooooooooooo', 'Business'),
(3, 'Rafay', 'arksmoke@gmail.com', 2147483647, 'Testing', 'Helloo', 'Basic'),
(4, 'Sarim', 'sarim@gmail.com', 2147483647, 'CV', 'I want to work', ''),
(5, 'Mesum Bin Shaukat', 'masumbinshaukat@gmail.com', 2147483647, 'Needed A Consultant', 'I need a consultancy session from a professional web app developer.', ''),
(6, 'Mesum Bin Shaukat', 'masumbinshaukat@gmail.com', 2147483647, 'Needed A Consultant', 'I need a consultancy session from a professional web app developer.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_blogs`
--
ALTER TABLE `admin_blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_category` (`blog_category`);

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_comment`
--
ALTER TABLE `blogs_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN KEY` (`blog_id`);

--
-- Indexes for table `tbl_blogcat`
--
ALTER TABLE `tbl_blogcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_contact_details`
--
ALTER TABLE `user_contact_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_blogs`
--
ALTER TABLE `admin_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs_comment`
--
ALTER TABLE `blogs_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blogcat`
--
ALTER TABLE `tbl_blogcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_contact_details`
--
ALTER TABLE `user_contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_blogs`
--
ALTER TABLE `admin_blogs`
  ADD CONSTRAINT `admin_blogs_ibfk_1` FOREIGN KEY (`blog_category`) REFERENCES `tbl_blogcat` (`id`);

--
-- Constraints for table `blogs_comment`
--
ALTER TABLE `blogs_comment`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`blog_id`) REFERENCES `admin_blogs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
