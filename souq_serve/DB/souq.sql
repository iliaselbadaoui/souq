-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 29, 2020 at 09:03 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `souq`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`, `email`) VALUES
(1, 'square', '5qu@R3', 'iliaselbadaoui98@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `last`, `email`, `pass`, `adress`, `city`, `birth`, `phone`) VALUES
(2, 'Ilias', 'Elbadaoui', 'iliassovich@outlook.com', 'aitfaska98', 'Ait Ourir, Al Haouz', 'Marrakech', '1998-06-04', '0628022976');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `ref` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `ref`, `description`, `photo`, `quantity`) VALUES
(1, 'iPhone 11 pro', 13000, 'aip11p', 'iPhone 11 pro max. designed by Apple in California', 'https://www.presse-citron.net/wordpress_prod/wp-content/uploads/2019/09/iPhone-11-Pro-Prix-1000x600.jpg', 10),
(2, 'MVMT Watch', 1500, 'MVMT Watch', 'MVMT watch, a class watch made in Italy, with more than 50 years of experiance', 'https://images.unsplash.com/photo-1558959001-2ff734aac13d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80', 21),
(3, 'Playstation 4 pro', 4500, 'ps4pro', 'Playstation 4 pro, 1To ssd, 4k display, comes with 4 Sony original games.', 'https://images.unsplash.com/photo-1518908336710-4e1cf821d3d1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1773&q=80', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`,`client`),
  ADD KEY `client` (`client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;