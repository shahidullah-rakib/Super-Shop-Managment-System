-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 05:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `super-shop-mgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountent`
--

CREATE TABLE `accountent` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `joiningDate` date NOT NULL,
  `leaveDate` date NOT NULL,
  `type` varchar(20) DEFAULT 'accountent',
  `profilePicture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountent`
--

INSERT INTO `accountent` (`id`, `name`, `password`, `dob`, `gender`, `email`, `phone`, `address`, `joiningDate`, `leaveDate`, `type`, `profilePicture`) VALUES
(1, 'Mr. jhon', '12', '2021-04-15', 'male', 'a@gmail.com', '01721142653', 'a, b, c , d', '2021-04-16', '2021-04-30', 'accountent', '../upload/A.jpg'),
(3, 'Rakib Shahidullah', '12', '2014-01-11', 'male', 'z@gmail.com', '01721142653', 'amirjongnuton-bazer', '0000-00-00', '0000-00-00', 'accountent', '../upload/B.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `type` varchar(20) DEFAULT 'admin',
  `profilePicture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `dob`, `gender`, `email`, `phone`, `address`, `type`, `profilePicture`) VALUES
(22, 'Roqtim Khan', '12', '2021-03-18', 'male', 'b@gmail.com', '01721142653', 'amirjon', 'admin', '../upload/D.jpg'),
(24, 'Al Amin', '12', '2021-03-12', 'male', 'c@gmail.com', '01721142653', 'amirjongnuton-baze', 'admin', '../upload/B.jpg'),
(109, 'Rakib Shahidullah', '12', '2013-12-29', 'male', 'a@gmail.com', '01721142653', 'amirjongnuton-baze', 'admin', '../upload/A.jpg'),
(115, 'MD. Khalid', '12', '2013-12-29', 'male', 'e@gmail.com', '01721142653', 'amirjongnuton-baze', 'admin', '../upload/D.jpg'),
(118, 'Rakib Shahidullah', 'as1245rt', '2010-12-26', 'male', 'f@gmail.com', '01721142653', 'amirjong\r\nnuton-baze', 'admin', '../upload/E.png'),
(122, 'Salman Khan', '12asqwdg', '1992-01-28', 'male', 'salman@gmail.com', '01721142653', 'amirjong\r\nnuton-baze', 'admin', '../upload/F.png'),
(123, 'Pricila Saha', '12', '2011-02-01', 'female', 'g@gmail.com', '01721142653', 'amirjongnuton-baze', 'admin', '../upload/c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `allproduct`
--

CREATE TABLE `allproduct` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `entryDate` date NOT NULL,
  `expDate` date NOT NULL,
  `buyPrice` varchar(20) NOT NULL,
  `salePrice` varchar(20) NOT NULL,
  `discount` varchar(20) NOT NULL,
  `vat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allproduct`
--

INSERT INTO `allproduct` (`id`, `name`, `company`, `catagory`, `entryDate`, `expDate`, `buyPrice`, `salePrice`, `discount`, `vat`) VALUES
(4, 'Kitket', 'PRAN', 'Chocolate', '2021-04-21', '2023-10-17', '8', '15', 'NULL', '20'),
(5, 'Chilli Shoch', 'PRAN', 'Vegetables', '2021-04-24', '0000-00-00', '15', '25', 'Null', 'Null'),
(6, 'Knife', 'RFL', 'Kitchen', '2021-04-24', '0000-00-00', '15', '25', 'Null', 'Null'),
(7, 'Knife', 'RFL', 'Kitchen', '2021-04-24', '0000-00-00', '15', '25', 'Null', 'Null'),
(9, 'Knife', 'RFL', 'Kitchen', '2021-04-24', '0000-00-00', '15', '25', 'Null', 'Null'),
(10, 'Knife', 'RFL', 'Kitchen', '2021-04-24', '0000-00-00', '15', '25', 'Null', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `chocolates_product`
--

CREATE TABLE `chocolates_product` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `buyingPrice` varchar(20) NOT NULL,
  `sellingPrice` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `entryDate` date NOT NULL,
  `expDate` date NOT NULL,
  `discount` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chocolates_product`
--

INSERT INTO `chocolates_product` (`id`, `name`, `buyingPrice`, `sellingPrice`, `company`, `entryDate`, `expDate`, `discount`) VALUES
(1, 'Lolipop', '9', '10', 'PRAN', '2021-04-10', '2023-08-11', '4');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` varchar(20) DEFAULT 'customer',
  `profilePicture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `password`, `dob`, `gender`, `email`, `phone`, `address`, `type`, `profilePicture`) VALUES
(1, 'Mr. tom', '123', '2021-04-08', 'male', 'tom@gmail.com', '01721142653', 'a, b, c , d', 'customer', '../upload/A.jpg'),
(2, 'Rakib Shahidullah', '12', '2012-01-09', 'male', '18-38243-2@student.aiub.edu', '01721142653', 'amirjongnuton-bazer', 'customer', '../upload/B.jpg'),
(3, 'Rakib Shahidullah', '12', '2004-12-26', 'male', 'shsidullarakib@gmail.com', '+8801721142653', 'amirjongnuton-bazer', 'customer', '../upload/E.png');

-- --------------------------------------------------------

--
-- Table structure for table `emp_salary`
--

CREATE TABLE `emp_salary` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `salary_month` varchar(20) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `bonus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_salary`
--

INSERT INTO `emp_salary` (`id`, `name`, `type`, `email`, `salary_month`, `salary`, `bonus`) VALUES
(1, 'jhon', 'Accountent', 'jhon@gmail.com', 'january', '50,000', 'NULL'),
(10, 'Rakib Shahidullah', 'Admin', 'shsidullarakib@gmail.com', 'July', '550000', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `help_message`
--

CREATE TABLE `help_message` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help_message`
--

INSERT INTO `help_message` (`id`, `name`, `email`, `message`) VALUES
(1, 'Mr. Ron', 'ron@gmail.com', 'My product was not delivered. '),
(2, 'jhon', 'jhon@gmail.com', 'Your service is good.');

-- --------------------------------------------------------

--
-- Table structure for table `sales_unit`
--

CREATE TABLE `sales_unit` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `vat` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_unit`
--

INSERT INTO `sales_unit` (`id`, `name`, `catagory`, `price`, `vat`, `date`) VALUES
(1, 'KitKat', 'chocolate', '20', '1', '2021-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `joiningDate` date NOT NULL,
  `leaveDate` date NOT NULL,
  `type` varchar(20) DEFAULT 'seller',
  `profilePicture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `name`, `password`, `dob`, `gender`, `email`, `phone`, `address`, `joiningDate`, `leaveDate`, `type`, `profilePicture`) VALUES
(2, 'Mr. Ron', '12345', '2021-04-08', 'male', 'ron@gmail.com', '01721142653', 'a,b,c', '2021-04-16', '2021-04-30', 'seller', '../upload/B.jpg'),
(8, 'Rakib Shahidullah', '12', '2012-01-02', 'male', 'a@gmail.com', '01721142653', 'amirjong\r\nnuton-bazer', '0000-00-00', '0000-00-00', 'seller', '../upload/D.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `product` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `customer_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `product`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(1, 'Pan', '500.00', 1, '20.00', '2021-04-24 00:52:17', 'On Delivery', 'Shahidullah Rakib', '01721142653', 'a@gmail.com', 'A,B,C,D');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountent`
--
ALTER TABLE `accountent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `allproduct`
--
ALTER TABLE `allproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chocolates_product`
--
ALTER TABLE `chocolates_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `emp_salary`
--
ALTER TABLE `emp_salary`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`email`);

--
-- Indexes for table `help_message`
--
ALTER TABLE `help_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_unit`
--
ALTER TABLE `sales_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountent`
--
ALTER TABLE `accountent`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `allproduct`
--
ALTER TABLE `allproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chocolates_product`
--
ALTER TABLE `chocolates_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `emp_salary`
--
ALTER TABLE `emp_salary`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `help_message`
--
ALTER TABLE `help_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales_unit`
--
ALTER TABLE `sales_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
