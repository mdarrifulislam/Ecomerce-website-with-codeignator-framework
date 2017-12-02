-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 01:24 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_codeignater_ecomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_short_description` varchar(255) NOT NULL,
  `category_long_description` text NOT NULL,
  `category_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_short_description`, `category_long_description`, `category_status`) VALUES
(1, 'first product changed', 'product short description', '                                                                product long description                                                        ', 3),
(2, 'sdfghj', 'fghjnkm', 'dfgvhbjnkm', 3),
(3, 'fghjk', 'ghbjnkm', 'dghn fghjkm', 3),
(4, 'Mobile', 'Mobile short description', 'Mobile long description<br>', 1),
(5, 'Laptop', 'laptop short descrition', 'laptop long description<br>', 1),
(6, 'Man fasion', 'Man fashion short description', 'Man fashion long description. &nbsp; <br>', 1),
(7, 'Woman fashsion', 'woman fashsion short description', 'woman fashion long description<br>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_name` varchar(255) NOT NULL,
  `manufacturer_short_description` text NOT NULL,
  `manufacturer_long_description` text NOT NULL,
  `manufacturer_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_short_description`, `manufacturer_long_description`, `manufacturer_status`) VALUES
(1, 'Brands', 'brand short descriptions', '                                brand long descriptions<br>                            ', 1),
(2, 'manufacturer name ', 'manufacturer short description', 'long description<br>', 1),
(3, 'name ', 'brand short description', 'brand long description<br>', 1),
(4, 'Hp Laptop', 'Hp Laptop short description', 'hp laptop long description<br>', 1),
(5, 'Asus laptop', 'Asus laptop long description', 'Asus laptop long description<br>', 1),
(6, 'Dell Laptop', 'Dell Laptop short description', 'Dell Laptop long description<br>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_short_description` varchar(255) NOT NULL,
  `product_long_description` text NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_manufacturer` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `top_product` tinyint(3) NOT NULL COMMENT 'top products are showed on slider',
  `product_status` tinyint(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_short_description`, `product_long_description`, `product_quantity`, `product_price`, `product_category`, `product_manufacturer`, `product_image`, `top_product`, `product_status`) VALUES
(4, 'Smart phone', 'smart phone short description', 'smart phone long description<br>', 12, 0.00, 4, 0, 'uploads/2012_12_04_0c_htcjbutterf_aCu.jpg', 0, 1),
(5, 'Lenovo Tablet', 'lenevo tablet short description', 'lenevo tablet long description<br>', 34, 0.00, 5, 0, 'uploads/Lenovo-Yoga-8-HD-Tab-B6000-Mobile-Phones-For-sale-at-All-Nigeria.jpg', 0, 1),
(6, 'Amazing Man sunglas ', 'Amazing man sunglass short description', 'Amazing man sunglass long description<br>', 44, 0.00, 6, 0, 'uploads/ray_ban_aviator_sunglasses-t2.jpg', 0, 1),
(7, 'Silk Sari ', 'Silk Sari short description', 'silk sari long description<br>', 34, 0.00, 7, 0, 'uploads/shreya-saran-wedding-wear-navy-blue-georgette-saree-with-blouse-a16084-b49.jpg', 0, 1),
(8, 'Dell laptop', 'product short description', 'product long description<br>', 34, 35000.00, 5, 1, 'uploads/c05116270.png', 0, 1),
(9, 'Asus IN2345 laptop', 'well', 'Asus IN2345 laptop long description<br>', 45, 4567.00, 5, 5, 'uploads/P_setting_F5F5F5_1_90_end_300_png.jpg', 1, 1),
(10, 'hp IP34455 laptop', 'well', 'hp IP34455 laptop long description<br>', 45, 34567.00, 5, 4, 'uploads/5868705_sa.jpg', 1, 1),
(11, 'Dell Inspiron laptop', 'well', 'dell inspiron long description<br>', 34, 34000.00, 5, 6, 'uploads/7115qBaO5JL__SX355_.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` tinyint(3) NOT NULL,
  `user_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_role`, `user_status`) VALUES
(2, '', 'admin@gmail.com', '$2y$10$RUU.CBopX7wsj5nZkdv9k.eOc9S1jzK9GRkxj7z0qNZFnx/xY1Mfi', 1, 1),
(3, 'arif', 'admin@gmail.com', '12345', 1, 1),
(4, 'fgh', 'admin@gmail.com', '$2y$10$IOZF/z2JyRHpQPKahQq8xeVu9mvQdMxQdkFVnqnLbK3dXVn5hbvQO', 1, 1),
(5, 'adif', 'adif@gmail.com', '$2y$10$qgfTowqCtGipgnYa7/FHu.EkQ6ENcAIxGFRIXcw89ga/DgVQ1BUX.', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
