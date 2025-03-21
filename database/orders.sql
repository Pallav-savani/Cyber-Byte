-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 08:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberbyte`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin_code` varchar(6) NOT NULL,
  `city` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `image`, `name`, `mobile_number`, `state`, `pin_code`, `city`, `quantity`, `email`, `address`, `payment_method`, `product_name`, `product_price`, `total_price`, `order_date`) VALUES
(213839, '../pics/xiaomipad5-tablet.jpg', 'Parth patel', '9876543210', 'Gujarat', '362001', 'Jamjodhapur', 2, 'parthpatel@gmail.com', '404, shree nagar, jamjodhapur, gujarat', 'COD', 'Xiaomi Pad 5 (Multi Color, 256GB) (6/8GB RAM)', 29999.00, 59998.00, '2024-07-12 17:04:51'),
(252495, '../pics/msi-laptop.jpg', 'parth patel', '8976564325', 'Gujarat', '360530', 'Jamanagar', 1, 'parthpatel@gmail.com', 'D - 401, krantijyot, uma township, Jamanagar, Gujarat - 360530', 'COD', 'MSI Titan 18 intel core i9-14900HX GeForce RTX 4090 18-inch', 188090.00, 188090.00, '2024-08-08 17:25:52'),
(467895, '../pics/playstation-head.jpg', 'Pallav Savani', '9510188358', 'Gujarat', '362625', 'Junagadh', 1, 'savanipallav@gmail.com', 'Near family mart, jalaram socity, junagadh, Gujarat', 'COD', 'Sony PS5 Pulse 3D Gaming Wireless Over Ear Headset with Dual Noise-Cancellation', 5999.00, 5999.00, '2024-08-08 17:56:26'),
(570527, '../pics/s24-mobile.jpg', 'parth patel', '8976564325', 'Gujarat', '360530', 'Jamanagar', 1, 'parthpatel@gmail.com', 'D - 401, krantijyot, uma township, Jamanagar, Gujarat - 360530', 'COD', 'Samsung Galaxy S24 ultra (Titanium Gray, 12GB / 256GB)', 129999.00, 129999.00, '2024-08-08 09:10:52'),
(605703, '../pics/iQOO.webp', 'Pallav Savani', '9510100666', 'Gujarat', '362625', 'Junagadh', 2, 'savanipallav@gmail.com', 'Near family mart, jalaram socity, junagadh, Gujarat', 'COD', 'iQOO 12 5G (Legend 12GB RAM 256GB Storage)Snapdragon® 8 Gen 3', 52999.00, 105998.00, '2024-08-08 17:28:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=995874;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
