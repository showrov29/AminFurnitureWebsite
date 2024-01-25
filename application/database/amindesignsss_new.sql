-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2024 at 10:41 AM
-- Server version: 8.0.35
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amindesignsss_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_m`
--

CREATE TABLE `cat_m` (
  `id` int NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sts` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat_m`
--

INSERT INTO `cat_m` (`id`, `pic`, `name`, `sts`) VALUES
(1, '2021-12-25-18-21-01furniture-icon-05.png', 'LIVINGROOM', 1),
(2, '2021-12-25-18-20-39furniture-icon-04.png', 'OFFICE', 1),
(3, '2021-12-25-18-19-56furniture-icon-03.png', 'CURTAINS', 1),
(4, '2021-12-25-18-18-26furniture-icon-03.png', 'BEDROOM', 1),
(5, '2021-12-25-18-16-39furniture-icon-03.png', 'PROFESSIONAL COMFORT', 1),
(7, 'f575dbe494c2441ac3c652779b9563fe.png', 'ORGANIZATION', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cat_s`
--

CREATE TABLE `cat_s` (
  `id` int NOT NULL,
  `cat_id` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sts` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_s`
--

INSERT INTO `cat_s` (`id`, `cat_id`, `name`, `sts`) VALUES
(1, '1', 'T-shirt', 1),
(2, '2', '3 piece', 1),
(3, '3', 'Shoe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_admin`
--

CREATE TABLE `ci_admin` (
  `id` int NOT NULL,
  `ref_id` varchar(11) NOT NULL,
  `business_id` int NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `business_img` varchar(255) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` varchar(35) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `name` varchar(35) DEFAULT NULL,
  `username` varchar(35) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `blood` varchar(20) DEFAULT NULL,
  `birth_date` varchar(100) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL,
  `address` text,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `zip` varchar(100) DEFAULT NULL,
  `verification_id_no` varchar(100) DEFAULT NULL,
  `verification_type` varchar(100) DEFAULT NULL,
  `user_type` varchar(25) DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `sts` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ci_admin`
--

INSERT INTO `ci_admin` (`id`, `ref_id`, `business_id`, `business_name`, `business_img`, `email`, `mobile`, `pass`, `password`, `name`, `username`, `gender`, `blood`, `birth_date`, `img`, `address`, `city`, `state`, `country`, `zip`, `verification_id_no`, `verification_type`, `user_type`, `login_time`, `logout_time`, `ip`, `sts`) VALUES
(1, '1', 0, 'Developer', '', 'sajib60@dipti.com.bd', '01863481554', '12', 'c20ad4d76fe97759aa27a0c99bff6710', 'Administrator', 'admin', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'admin', '2024-01-14 10:16:27', '2021-12-29 19:26:25', '103.79.182.3', 1),
(2, '1', 0, 'Amin Design Studio ', '', 'amindesignstudio@gmail.com', '017777', '12', 'c20ad4d76fe97759aa27a0c99bff6710', 'Md Saddam', 'saddam', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'admin', '2021-12-29 07:26:36', NULL, '103.231.162.80', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_business`
--

CREATE TABLE `ci_business` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `sts` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_business`
--

INSERT INTO `ci_business` (`id`, `name`, `sts`) VALUES
(1, 'shop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_settings`
--

CREATE TABLE `ci_settings` (
  `id` int NOT NULL,
  `owner` varchar(255) NOT NULL,
  `website_title` text,
  `fb_link` varchar(255) NOT NULL,
  `footer_text` text,
  `copy_right` text,
  `time_zone` varchar(200) DEFAULT NULL,
  `ltl_rtl` varchar(200) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `footer_logo` varchar(200) DEFAULT NULL,
  `favicon` varchar(200) DEFAULT NULL,
  `app_logo` varchar(250) DEFAULT NULL,
  `mobile_menu_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ci_settings`
--

INSERT INTO `ci_settings` (`id`, `owner`, `website_title`, `fb_link`, `footer_text`, `copy_right`, `time_zone`, `ltl_rtl`, `logo`, `footer_logo`, `favicon`, `app_logo`, `mobile_menu_image`) VALUES
(1, 'SAJIB AHMED', 'Amin Design Studio ', 'https://www.facebook.com/shahariar69', 'gazipur, Dhaka, Bangladesh\r\n  <br> Tell: +8801863-481554</br>\r\nEmail: sajib60@dipti.com.bd', 'Copy Right 2021', 'Asia/Dhaka', NULL, 'ee4137f96e757efaa2e8f6ff1dc8417c.jpg', 'uploads/images/f3.png', 'https://digitalsynapsebd.com/images/icon.gif', 'uploads/images/f2.png', 'uploads/images/w.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `cat_m_id` int NOT NULL,
  `cat_s_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `reguler_price` float NOT NULL,
  `discount_price` float DEFAULT NULL,
  `discount_percentage` varchar(10) DEFAULT NULL,
  `discount_date` date DEFAULT NULL,
  `pic` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `sts` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_m_id`, `cat_s_id`, `product_name`, `reguler_price`, `discount_price`, `discount_percentage`, `discount_date`, `pic`, `details`, `sts`) VALUES
(1, 4, 0, 'Wooden Table', 200, 0, '', '2021-12-05', '2021-12-25-15-05-17header-bg-3-2-400x400.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1),
(2, 4, 0, 'Bedside Lamp', 1500, 1200, '25%', '2021-12-09', '2021-12-25-15-12-44furniture-32.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1),
(3, 4, 2, 'Purple Chair', 500, 400, '10%', '2021-12-17', '2021-12-25-19-36-56furniture-32.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1),
(4, 2, 2, 'Office Desk with Mobile File Cabinet', 500, 350, '15%', '2022-01-01', '2021_12_29_14_41_18_808500_.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1),
(5, 3, 3, 'Dining Table', 42000, 0, '', '2022-01-01', '2021_12_29_14_42_00_970500_.jpg', 'Model: DI-17\r\nMaterial:  Engineered wood.\r\n1-year warranty service.\r\nFree fitting service.\r\nDisclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography, or your device display settings.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sts` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `pic`, `heading`, `details`, `sts`) VALUES
(1, '2021_12_25_1640421913_618hase.jpg', 'Man\'s Fashion ', 'Welcome To Amin Design Studio', 0),
(2, '2021_12_25_1640422040_175am-2.jpg', 'BEDROOM', 'Welcome To Amin Design Studio', 1),
(3, 'eca23ed1e4e74459f2221f4fb2634901.jpg', 'Bedside Lamp\r\n', 'Welcome To Amin Design Studio\r\n', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_m`
--
ALTER TABLE `cat_m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_s`
--
ALTER TABLE `cat_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_admin`
--
ALTER TABLE `ci_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_business`
--
ALTER TABLE `ci_business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_settings`
--
ALTER TABLE `ci_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`cat_s_id`),
  ADD KEY `brand_id` (`cat_m_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_m`
--
ALTER TABLE `cat_m`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cat_s`
--
ALTER TABLE `cat_s`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ci_admin`
--
ALTER TABLE `ci_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_business`
--
ALTER TABLE `ci_business`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_settings`
--
ALTER TABLE `ci_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
