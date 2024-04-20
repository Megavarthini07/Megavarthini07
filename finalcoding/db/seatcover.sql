-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2022 at 08:00 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `seatcover`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', '2017-01-24 21:51:18', '26-02-2018 07:05:25 AM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) NOT NULL,
  `categoryDescription` longtext NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(22, 'Four Wheeler', 'Four Wheeler', '2022-10-29 01:22:18', ''),
(23, 'Two Wheeler', 'Two Wheeler', '2022-10-29 01:22:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE IF NOT EXISTS `ordertrackhistory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderId` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ordertrackhistory`
--


-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE IF NOT EXISTS `productreviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `review` longtext NOT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `productreviews`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `subCategory` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productCompany` varchar(255) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productPriceBeforeDiscount` int(11) NOT NULL,
  `productDescription` longtext NOT NULL,
  `productImage1` varchar(255) NOT NULL,
  `productImage2` varchar(255) NOT NULL,
  `productImage3` varchar(255) NOT NULL,
  `shippingCharge` int(11) NOT NULL,
  `productAvailability` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(56, 18, 53, 'Herbal Heart Elixir', 'Cureveda', 395, 500, '', '01.jpg', '01.jpg', '', 0, 'In Stock', '2020-02-23 16:20:19', ''),
(57, 18, 53, 'Herbal Piles Peace Fast Relief Bavasir Hemorrhoid Support Piles', 'Cureveda', 2000, 995, '<br>', '02.jpg', '02.jpg', '', 0, 'In Stock', '2020-02-23 16:21:53', ''),
(58, 18, 53, 'Herbal Mood Elixir', 'Cureveda', 445, 600, '<br>', '03.jpg', '03.jpg', '', 0, 'In Stock', '2020-02-23 16:22:39', ''),
(59, 19, 54, 'Mahabhringraj Herbal Hair Oil 250gm', 'ON ON ', 199, 250, '<br>', '04.jpg', '04.jpg', '', 0, 'In Stock', '2020-02-23 16:27:28', ''),
(60, 19, 54, 'Nuzen Gold Herbal Hair Oil, 250ml', 'Nuzen', 650, 700, '<br>', '06.jpg', '06.jpg', '', 0, 'In Stock', '2020-02-23 16:28:41', ''),
(61, 19, 54, 'Payal Herbal Hair Oil 300ml', 'Payal ', 449, 500, '<br>', '05.jpg', '05.jpg', '', 0, 'In Stock', '2020-02-23 16:29:23', ''),
(62, 19, 55, 'Nuzen OrthoZen Herbal Pain Relief Oil , 50 ml -Pack 2', 'Nuzen', 250, 350, '<br>', '07.jpg', '07.jpg', '', 0, 'In Stock', '2020-02-23 16:31:09', ''),
(63, 19, 55, 'Dr Ortho Pain Relief Oil - 120 ml ', 'Dr Ortho', 650, 995, '<br>', '08.jpg', '08.jpg', '', 0, 'In Stock', '2020-02-23 16:33:10', ''),
(64, 19, 55, ' Herbal Ayurvedic Pain Reliever Oil', 'MAGRAN ', 1200, 1300, '<br>', '09.jpg', '09.jpg', '', 0, 'In Stock', '2020-02-23 16:34:07', ''),
(65, 20, 56, 'HANA HERBAL Ayurvedic Lip Balm Rose', 'HANA', 350, 450, '<br>', '10.jpg', '10.jpg', '', 0, 'In Stock', '2020-02-23 16:37:09', ''),
(66, 20, 56, 'The Natural Wash Herbal Beetroot', 'TNW ', 202, 250, '<br>', '11.jpg', '11.jpg', '', 0, 'In Stock', '2020-02-23 16:38:00', ''),
(67, 20, 56, 'HANA HERBAL Ayurvedic Lip Balm Butter Scotch', 'HANA', 362, 456, '<br>', '12.jpg', '12.jpg', '', 0, 'In Stock', '2020-02-23 16:38:51', ''),
(68, 21, 57, 'Lotus Herbals Probrite Illuminating Radiance Creme', 'Lotus Herbals', 350, 365, '<br>', '13.jpg', '13.jpg', '', 0, 'In Stock', '2020-02-23 16:42:56', ''),
(69, 21, 57, 'Lotus Herbals Whiteglow Flawless Complexion', 'Lotus Herbals', 250, 300, '<br>', '14.jpg', '14.jpg', '', 0, 'In Stock', '2020-02-23 16:43:40', ''),
(70, 21, 57, 'Lotus Herbals Opulence Botanical Eye Liner, 4g', 'Lotus Herbals', 175, 200, '<br>', '15.jpg', '15.jpg', '', 0, 'In Stock', '2020-02-23 16:44:57', ''),
(71, 22, 58, 'FOUR WHEELER SEAT COVER', 'FOUR WHEELER SEAT COVER', 6500, 7000, '<br>', 'product1.jpg', 'product1.jpg', '', 0, 'In Stock', '2022-10-29 01:24:41', ''),
(72, 23, 59, 'TANK COVER', 'TANK COVER', 250, 500, 'TANK COVER<br>', 'product2.jpg', 'product2.jpg', '', 0, 'In Stock', '2022-10-29 01:26:13', ''),
(73, 23, 59, 'MOBILE TANK COVER', 'MOBILE TANK COVER', 370, 500, '<br>', 'product3.jpg', 'product3.jpg', '', 0, 'In Stock', '2022-10-29 01:27:41', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(58, 22, 'Car', '2022-10-29 01:22:46', ''),
(59, 23, 'Two Wheeler', '2022-10-29 01:23:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(27, 'abu@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2018-02-26 09:42:51', '', 1),
(28, 'abu@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2020-02-23 12:08:37', '23-02-2020 12:14:41 PM', 1),
(29, 'rajabai@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2020-02-23 16:47:43', '23-02-2020 04:48:34 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `shippingAddress` longtext NOT NULL,
  `shippingState` varchar(255) NOT NULL,
  `shippingCity` varchar(255) NOT NULL,
  `shippingPincode` int(11) NOT NULL,
  `billingAddress` longtext NOT NULL,
  `billingState` varchar(255) NOT NULL,
  `billingCity` varchar(255) NOT NULL,
  `billingPincode` int(11) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(5, 'abuthaeer', 'abu@gmail.com', 9874652310, '202cb962ac59075b964b07152d234b70', '3/42, Kallipalayam Road', 'Tamilnadu', 'Erode', 638461, '3/42, Kallipalayam Road', 'Tamilnadu', 'Erode', 638461, '2022-10-29 09:42:43', ''),
(6, 'Raja', 'rajabai@gmail.com', 9638527544, '202cb962ac59075b964b07152d234b70', '', '', '', 0, '345, Periya Kadu Street, Erode', 'Tamilnadu', 'Erode', 698596, '2022-10-27 16:47:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wishlist`
--

