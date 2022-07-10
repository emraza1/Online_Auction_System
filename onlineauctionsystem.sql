-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 11:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineauctionsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bid_car`
--

CREATE TABLE `bid_car` (
  `b_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `price` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bid_car`
--

INSERT INTO `bid_car` (`b_id`, `u_id`, `username`, `price`, `id`) VALUES
(18, 8, 'Zaira Zehra', 54305, 8),
(19, 0, 'Mohammad Raza', 54306, 8),
(20, 8, 'Zaira Zehra', 54310, 8);

-- --------------------------------------------------------

--
-- Table structure for table `bid_collect`
--

CREATE TABLE `bid_collect` (
  `b_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `price` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid_elec`
--

CREATE TABLE `bid_elec` (
  `b_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `price` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid_fur`
--

CREATE TABLE `bid_fur` (
  `b_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `price` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid_gar`
--

CREATE TABLE `bid_gar` (
  `b_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `price` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid_jew`
--

CREATE TABLE `bid_jew` (
  `b_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `price` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid_property`
--

CREATE TABLE `bid_property` (
  `b_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `price` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid_watch`
--

CREATE TABLE `bid_watch` (
  `b_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `price` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `car_title` text NOT NULL,
  `car_model` text NOT NULL,
  `make_year` text NOT NULL,
  `car_price` double NOT NULL,
  `cur_price` double NOT NULL,
  `btime` datetime NOT NULL,
  `mileage` text NOT NULL,
  `fuel` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `u_id`, `car_title`, `car_model`, `make_year`, `car_price`, `cur_price`, `btime`, `mileage`, `fuel`, `state`) VALUES
(3, 7, 'Honda civic', 'EX-L', '2018', 895, 895, '2018-06-14 16:22:00', '32', 'petrol', 'New'),
(4, 7, 'BMW', 'i8', '2014', 2001, 2001, '2018-05-08 02:23:00', '30', 'petrol', 'New'),
(5, 8, 'BMW', 'G11', '2015', 6789, 6789, '2019-06-29 12:30:35', '26', 'petrol', 'New'),
(6, 8, 'Toyota', 'MR2', '1984', 1002, 1002, '2018-10-10 13:00:00', '21', 'petrol', 'New'),
(7, 18, 'beetle', 'w55', '1981', 2349, 2349, '2018-12-08 07:40:00', '20', 'petrol', 'New'),
(8, 19, 'Mazda', '323 DX', '1986', 54301, 54310, '2018-06-26 20:05:00', '21', 'petrol', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `collectibles`
--

CREATE TABLE `collectibles` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `collect_title` text NOT NULL,
  `collect_type` text NOT NULL,
  `collect_price` double NOT NULL,
  `cur_price` double NOT NULL,
  `btime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collectibles`
--

INSERT INTO `collectibles` (`id`, `u_id`, `collect_title`, `collect_type`, `collect_price`, `cur_price`, `btime`) VALUES
(2, 7, '1895 $5 Liberty Head Half Eagle Gold', 'Currency', 584, 584, '2018-12-03 10:00:00'),
(3, 8, '1901-O Morgan Silver Dollar Lot 272', 'Currency', 978, 978, '2018-09-03 10:00:00'),
(4, 18, '1914-D $5 Gold Half Eagle VF Lot 1509G', 'Currency', 890, 890, '2018-10-03 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `phone` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `phone`, `message`) VALUES
(1, 'zaira', 'zaira@gmail.com', 'quality', '123456789', 'Good Website');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `elec_title` text NOT NULL,
  `elec_type` text NOT NULL,
  `elec_company` text NOT NULL,
  `elec_model` text NOT NULL,
  `elec_price` double NOT NULL,
  `cur_price` double NOT NULL,
  `state` text NOT NULL,
  `btime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`id`, `u_id`, `elec_title`, `elec_type`, `elec_company`, `elec_model`, `elec_price`, `cur_price`, `state`, `btime`) VALUES
(1, 7, 'PM Haier laptop', 'laptop', 'Haier', 'Y112', 878, 878, 'New', '2018-12-03 10:00:00'),
(2, 8, 'Dell laptop', 'laptop', 'Dell', 'Vostro', 558, 558, 'New', '2019-12-03 10:00:00'),
(3, 18, 'iphone 6', 'mobile phone', 'Apple', '6', 870, 870, 'New', '2018-05-28 23:00:00'),
(4, 19, 'Dell laptop', 'laptop', 'Dell', 'Studio', 250, 250, 'New', '2018-09-03 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `fur_type` text NOT NULL,
  `fur_pieces` text NOT NULL,
  `fur_price` double NOT NULL,
  `cur_price` double NOT NULL,
  `state` text NOT NULL,
  `btime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`id`, `u_id`, `fur_type`, `fur_pieces`, `fur_price`, `cur_price`, `state`, `btime`) VALUES
(1, 7, 'Sofa set', '3', 572, 572, 'New', '2018-12-03 18:00:00'),
(2, 8, 'bedroom set', '3', 890, 890, 'New', '2018-12-03 10:00:00'),
(4, 18, 'book shelf', '1', 322, 322, 'New', '2018-05-28 23:00:00'),
(5, 19, 'chair set', '4', 545, 545, 'New', '2018-12-03 10:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`) VALUES
(1, 'bed1'),
(2, 'car2'),
(3, 'watch1'),
(4, 'watch2'),
(5, 'house1'),
(6, 'house2'),
(7, 'ear1'),
(8, 'ear2'),
(9, 'sofa1'),
(10, 'bed1'),
(12, 'table1'),
(13, 'table2');

-- --------------------------------------------------------

--
-- Table structure for table `garments`
--

CREATE TABLE `garments` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `gar_type` text NOT NULL,
  `gar_material` text NOT NULL,
  `gar_brand` text NOT NULL,
  `gar_price` double NOT NULL,
  `cur_price` double NOT NULL,
  `gender` text NOT NULL,
  `state` text NOT NULL,
  `btime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garments`
--

INSERT INTO `garments` (`id`, `u_id`, `gar_type`, `gar_material`, `gar_brand`, `gar_price`, `cur_price`, `gender`, `state`, `btime`) VALUES
(2, 7, 'dress', 'lawn', 'maria b.', 48, 48, 'Men', 'New', '2018-12-03 10:00:00'),
(3, 8, 'Vintage 1969 gown', 'silk', 'Ellie Saab', 877, 877, 'Women', 'New', '2018-06-03 10:00:00'),
(4, 19, 'jacket limited collection', 'leather', 'forever21 ', 18, 18, 'Men', 'New', '2018-12-03 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jewellery`
--

CREATE TABLE `jewellery` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `jew_type` text NOT NULL,
  `jew_material` text NOT NULL,
  `jew_brand` text NOT NULL,
  `jew_price` double NOT NULL,
  `cur_price` double NOT NULL,
  `state` text NOT NULL,
  `btime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jewellery`
--

INSERT INTO `jewellery` (`id`, `u_id`, `jew_type`, `jew_material`, `jew_brand`, `jew_price`, `cur_price`, `state`, `btime`) VALUES
(1, 7, 'ring', 'gold', 'Tiffany', 67, 67, 'New', '2018-10-03 07:00:00'),
(2, 8, 'neclace', 'silver', 'Tiffany', 47, 47, 'New', '2018-12-03 10:00:00'),
(3, 18, 'bracelet', 'metal', 'Chopard', 76, 78, 'New', '2018-12-03 15:00:00'),
(5, 19, 'ring', 'diamond stone', 'Tiffany', 1980, 1980, 'New', '2018-12-24 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `property_type` text NOT NULL,
  `property_loc` text NOT NULL,
  `rooms` text NOT NULL,
  `property_price` double NOT NULL,
  `cur_price` double NOT NULL,
  `btime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `u_id`, `property_type`, `property_loc`, `rooms`, `property_price`, `cur_price`, `btime`) VALUES
(1, 7, 'Apartment', 'Multan', '3', 309, 309, '2019-10-04 10:00:00'),
(2, 8, 'plot', 'lahore', 'none', 7800, 7800, '2018-12-08 08:00:00'),
(3, 18, 'house', 'karachi', '4', 56750, 56750, '2018-10-09 10:00:00'),
(4, 18, 'tree house', 'karachi', '1', 12330, 12330, '2019-01-08 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `position`) VALUES
(1, 'Jade Anna', 'Director'),
(2, 'Thomson Don', 'Manager'),
(3, 'Smith Kevin', 'Planner'),
(4, 'Laura Hill', 'Graphic Designer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `phone` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `email`, `password`, `gender`, `phone`, `country`) VALUES
(0, 'Mohammad Raza', 'razakag2@gmail.com', 'momi12345', 'male', '1234567890', 'Pakistan'),
(7, 'M Raza ', 'raza.momi@gmail.com', 'm66666', 'male', '123456789', 'Pakistan'),
(8, 'Zaira Zehra', 'zaira.zehra@gmail.com', '12345', 'female', '0330-1234567', 'Pakistan'),
(18, 'Aqsa Batool', 'aqsabatool791@gmail.com', '12345', 'female', '1234567890', 'Pakistan'),
(19, 'Bushra Nasir', 'bushra9526@gmail.com', '12345', 'female', '1234567890', 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `watch_type` text NOT NULL,
  `watch_brand` text NOT NULL,
  `watch_price` double NOT NULL,
  `cur_price` double NOT NULL,
  `gender` text NOT NULL,
  `state` text NOT NULL,
  `btime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`id`, `u_id`, `watch_type`, `watch_brand`, `watch_price`, `cur_price`, `gender`, `state`, `btime`) VALUES
(1, 7, 'analog watch', 'titan', 55, 55, 'Men', 'New', '2018-05-28 23:00:00'),
(2, 8, 'digital', 'Xenoz', 101, 101, 'Men', 'New', '2018-12-21 18:00:00'),
(4, 18, 'analog watch', 'Rolex', 79, 79, 'Men', 'New', '2018-12-03 10:00:00'),
(5, 19, 'analog watch', 'Blancpain', 103, 103, 'Men', 'New', '2018-11-07 19:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_car`
--
ALTER TABLE `bid_car`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `bid_car_ibfk_1` (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `bid_collect`
--
ALTER TABLE `bid_collect`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `bid_collect_ibfk_1` (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `bid_elec`
--
ALTER TABLE `bid_elec`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `id` (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `bid_fur`
--
ALTER TABLE `bid_fur`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `id` (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `bid_gar`
--
ALTER TABLE `bid_gar`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `id` (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `bid_jew`
--
ALTER TABLE `bid_jew`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `id` (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `bid_property`
--
ALTER TABLE `bid_property`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `id` (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `bid_watch`
--
ALTER TABLE `bid_watch`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `id` (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `collectibles`
--
ALTER TABLE `collectibles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garments`
--
ALTER TABLE `garments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `jewellery`
--
ALTER TABLE `jewellery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bid_car`
--
ALTER TABLE `bid_car`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `bid_collect`
--
ALTER TABLE `bid_collect`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bid_elec`
--
ALTER TABLE `bid_elec`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bid_fur`
--
ALTER TABLE `bid_fur`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bid_gar`
--
ALTER TABLE `bid_gar`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bid_jew`
--
ALTER TABLE `bid_jew`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bid_property`
--
ALTER TABLE `bid_property`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bid_watch`
--
ALTER TABLE `bid_watch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `collectibles`
--
ALTER TABLE `collectibles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `garments`
--
ALTER TABLE `garments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jewellery`
--
ALTER TABLE `jewellery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `watch`
--
ALTER TABLE `watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid_car`
--
ALTER TABLE `bid_car`
  ADD CONSTRAINT `bid_car_ibfk_1` FOREIGN KEY (`id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bid_car_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bid_collect`
--
ALTER TABLE `bid_collect`
  ADD CONSTRAINT `bid_collect_ibfk_1` FOREIGN KEY (`id`) REFERENCES `collectibles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bid_collect_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bid_elec`
--
ALTER TABLE `bid_elec`
  ADD CONSTRAINT `bid_elec_ibfk_1` FOREIGN KEY (`id`) REFERENCES `electronics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bid_elec_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bid_fur`
--
ALTER TABLE `bid_fur`
  ADD CONSTRAINT `bid_fur_ibfk_1` FOREIGN KEY (`id`) REFERENCES `furniture` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bid_fur_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bid_gar`
--
ALTER TABLE `bid_gar`
  ADD CONSTRAINT `bid_gar_ibfk_1` FOREIGN KEY (`id`) REFERENCES `garments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bid_gar_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bid_jew`
--
ALTER TABLE `bid_jew`
  ADD CONSTRAINT `bid_jew_ibfk_1` FOREIGN KEY (`id`) REFERENCES `jewellery` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bid_jew_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bid_property`
--
ALTER TABLE `bid_property`
  ADD CONSTRAINT `bid_property_ibfk_1` FOREIGN KEY (`id`) REFERENCES `property` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bid_property_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bid_watch`
--
ALTER TABLE `bid_watch`
  ADD CONSTRAINT `bid_watch_ibfk_1` FOREIGN KEY (`id`) REFERENCES `watch` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bid_watch_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `collectibles`
--
ALTER TABLE `collectibles`
  ADD CONSTRAINT `collectibles_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `electronics`
--
ALTER TABLE `electronics`
  ADD CONSTRAINT `electronics_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `furniture`
--
ALTER TABLE `furniture`
  ADD CONSTRAINT `furniture_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `garments`
--
ALTER TABLE `garments`
  ADD CONSTRAINT `garments_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jewellery`
--
ALTER TABLE `jewellery`
  ADD CONSTRAINT `jewellery_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `watch`
--
ALTER TABLE `watch`
  ADD CONSTRAINT `watch_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
