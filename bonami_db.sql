-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 04:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonami_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_rate` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_short_desc` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`id`, `product_name`, `product_rate`, `product_quantity`, `product_short_desc`, `product_category`, `product_image`) VALUES
(1, 'test', 12, 255, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'strawberry', 'product-img-1.jpg'),
(2, 'test 2', 52, 45, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'strawberry', 'product-img-6.jpg'),
(3, 'test 3', 85, 26, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'berry', 'product-img-2.jpg'),
(5, 'test 4 ', 25, 45, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'berry', 'product-img-5.jpg'),
(6, 'test 5', 856, 54, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lemon', 'product-img-3.jpg'),
(7, 'test 6', 155, 455445, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lemon', 'product-img-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '1 -> not replied\r\n2 -> replied'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `date`, `status`) VALUES
(1, 'sahil', 'satyam@bonamisoftware.com', 2147483647, 'testsubject', 'lorem ipsum te', '2021-11-15 14:47:30.680321', 1),
(2, 'test', 'test@gmail.com', 1234569870, 'testsubject', 'testtstste', '2021-11-15 14:47:30.680321', 2);

-- --------------------------------------------------------

--
-- Table structure for table `eccom_user`
--

CREATE TABLE `eccom_user` (
  `id` int(10) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL COMMENT '0-inactive 1-active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eccom_user`
--

INSERT INTO `eccom_user` (`id`, `uname`, `email`, `mobile`, `pass`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 123456789, '36b8eb2e486fa21a0726f73c2fe907db6902cb30fce32cf407847c8fe1e492586957e2a498207317c061a0a67e3aee7f9da474008256955c76e109ab616d0de8', 1),
(2, 'test', 'test@gmail.com', 123658974, '783cdb36d533b72d16c83a3ce653e91795af7b716a6218040645c68cfc7e0ed5de787b88bb380c89c079c8528a9452e312f4565921618aaafa0b409756cb7fad', 0),
(3, 'user', 'user@gmail.com', 4568525, '74eaf4ded32e433da7b9bf254414314d65271f40bb7e012916c4b2c7410a54fbecc196adcd1c263d51cb4cbec9e9d0bc6160f318c143b9b05b3a43fb632c7f30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pro_cms_pages`
--

CREATE TABLE `pro_cms_pages` (
  `id` int(11) NOT NULL,
  `type` tinyint(2) DEFAULT 0,
  `title` varchar(100) DEFAULT NULL,
  `sub_titile` varchar(100) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pro_general`
--

CREATE TABLE `pro_general` (
  `id` int(8) NOT NULL,
  `key_name` varchar(255) DEFAULT NULL,
  `key_value` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 2 COMMENT '0=del , 1=inactive, 2=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_general`
--

INSERT INTO `pro_general` (`id`, `key_name`, `key_value`, `status`) VALUES
(1, 'logo', 'C:xampp	mpphp6B22.tmp', 2),
(2, 'favicon', NULL, 2),
(3, 'email', 'skp28195@gmail.com', 2),
(4, 'contact', '9267979069', 2),
(5, 'address', '268/2 , Arya Mohalla , Nangloi , Delhi  ', 2),
(6, 'map_url', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.577820775118!2d77.16518901548021!3d28.70227298767103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d034f6d6d0327%3A0x2da8bc99c7f19664!2sBonami%20Software%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4', 2),
(7, 'facebook', 'https://www.facebook.com/profile.php?id=100029054132762', 2),
(8, 'linkedin', 'https://www.linkedin.com/in/sahil-prajapati-7b8176177/', 2),
(9, 'instagram', 'https://www.instagram.com/sahil201201/', 2),
(10, 'footer_about', ' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 2),
(11, 'site_name', 'Sahil Site', 2),
(13, 'bannersubtext', 'Latest test', 2),
(14, 'bannermaintext', 'Why do we use it?', 2);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `teamimage` varchar(255) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `teamoccupation` varchar(255) NOT NULL,
  `teamfacebook` varchar(255) NOT NULL,
  `teaminstagram` varchar(255) NOT NULL,
  `teamtwitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `teamimage`, `teamname`, `teamoccupation`, `teamfacebook`, `teaminstagram`, `teamtwitter`) VALUES
(1, 'team-1.jpg', 'Sahil', 'Developer', 'facebook.com', 'insta.com', 'twitter.com'),
(2, 'team-3.jpg', 'Aditiya', 'PHP', 'facebook.co', 'instag.com', 'twitter.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eccom_user`
--
ALTER TABLE `eccom_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_cms_pages`
--
ALTER TABLE `pro_cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_general`
--
ALTER TABLE `pro_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `eccom_user`
--
ALTER TABLE `eccom_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pro_cms_pages`
--
ALTER TABLE `pro_cms_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pro_general`
--
ALTER TABLE `pro_general`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
