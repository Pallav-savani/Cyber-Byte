-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 08:45 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_medicine_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--
  CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `city_description` varchar(255) DEFAULT NULL
  );

--
-- Dumping data for table `city`
--


-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_city` varchar(255) NOT NULL,
  `company_state` varchar(255) NOT NULL,
  `company_country` varchar(255) NOT NULL,
  `company_mobile` text NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_description` text NOT NULL,
  `company_website` varchar(255) NOT NULL,
  `company_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_city`, `company_state`, `company_country`, `company_mobile`, `company_email`, `company_address`, `company_description`, `company_website`, `company_logo`) VALUES
(1, 'Mankind', '1', '2', '2', '8978675623', 'contact@addeco.com', 'zxcvzxcv', 'Just as an organization needs the right talent to drive its business objectives, people need theright environment to grow and achieve their career goals. The moment you step into TCS, you would be greeted with that unmistakable feeling of being at the right place.', 'zxcv', 'Mankind.jpg'),
(2, 'Cipla', '1', '2', '1', '5645654534', 'contact@frontpoint.com', 'asdf', 'Along with that, working with TCS affords you with a sense of certainty of a successful career that would be driven by boundless growth opportunities and exposure to cutting-edge technologies and learning possibilities.', 'asdf', 'Cipla.jpg'),
(3, 'Cosmedic', '2', '1', '1', '9456123434', 'contact@autod.com', 'adsf', ' The work environment at TCS is built around the belief of growth beyond boundaries. Some of the critical elements that define our work culture are global exposure, cross-domain experience, and work-life balance. Each of these elements goes much deeper than what it ostensibly conveys.', 'asdf', 'cosmedic.jpg'),
(4, 'Acreage', '2', '2', '1', '9878345265', 'contact@bitso.com', '', 'A US $40 billion corporation, the Aditya Birla Group is in the League of Fortune 500. It is anchored by an extraordinary force of over 136,000 employees belonging to 42 different nationalities. The Group has been ranked Number 4 in the global ‘Top Companies for Leaders’ ', '', 'Acreage .jpg');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India'),
(2, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_username` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_add1` varchar(255) NOT NULL,
  `customer_add2` varchar(255) NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_state` varchar(255) NOT NULL,
  `customer_country` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_mobile` varchar(255) NOT NULL,
  `customer_gender` varchar(255) NOT NULL,
  `customer_dob` varchar(255) NOT NULL,
  `customer_details` text NOT NULL,
  `customer_resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_username`, `customer_password`, `customer_name`, `customer_add1`, `customer_add2`, `customer_city`, `customer_state`, `customer_country`, `customer_email`, `customer_mobile`, `customer_gender`, `customer_dob`, `customer_details`, `customer_resume`) VALUES
(4, 'customer', 'test', 'Kaushal Kishore', 'House no : 768', 'Sector 2B', '1', '1', '1', 'kaushal.rahuljaiswal@gmail.com', '987654321', 'Male', '12 january, 2013', 'asdfdsaf', ''),
(6, 'atul', 'test', 'Atul Kumar', 'House no : 712', 'Sector 2A', '3', '2', '1', 'atul@gmail.com', '987654321', 'lkjkl', '10 June,2016', 'asdf', ''),
(7, 'amit', 'test', 'Amit Kumar', 'House no : 768', 'Sector 2B', '3', '1', '1', 'amit@gmail.com', '9324324546', '', '26 December,2015', '', ''),
(8, 'suman', 'test', 'Suman Singh', 'House no : 768', 'Sector 2A', '4', '2', '1', 'suman@gmail.com', '987654321', '', '13 January,1961', '', ''),
(9, 'arun', 'test', 'Arun Kumar', 'House no : 768', 'Sector 2A', '2', '2', '1', 'arun@gmail.com', '987654321', '', '12 january, 2013', '', ''),
(10, 'manasa', 'test', 'Manasa', 'New Delhi', 'India', '1', '2', '1', 'manasa@gmail.com', '9876543212', '', '18 January,1968', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_title` varchar(255) NOT NULL,
  `department_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_title`, `department_description`) VALUES
(1, 'IT Department', 'IT Department'),
(2, 'Java Developement', 'Java Developement Department'),
(3, 'HR Department', 'HR Department'),
(4, 'Web Developement', 'Web Developement');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_title` varchar(255) NOT NULL,
  `designation_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_title`, `designation_description`) VALUES
(1, 'Software Engineer', 'Software Engineer'),
(2, 'Sr. Software Engineer', 'Sr. Software Engineer'),
(3, 'Manager', 'Manager'),
(4, 'Sr. Manager', 'Sr. Manager'),
(5, 'Associate', 'Associate'),
(6, 'Sr. Associate', 'Sr. Associate');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_user` varchar(255) NOT NULL,
  `login_password` varchar(255) NOT NULL,
  `login_level` varchar(255) NOT NULL,
  `login_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_user`, `login_password`, `login_level`, `login_date`) VALUES
(1, 'admin', 'test', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_level`
--

CREATE TABLE `login_level` (
  `ll_id` int(11) NOT NULL,
  `ll_title` varchar(255) NOT NULL,
  `ll_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_level`
--

INSERT INTO `login_level` (`ll_id`, `ll_title`, `ll_description`) VALUES
(1, 'Admin', ''),
(2, 'HR Manager', ''),
(3, 'Employee', ''),
(4, 'Accountant', '');

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `month_id` int(11) NOT NULL,
  `month_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`month_id`, `month_name`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_user_id` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_user_id`, `order_date`, `order_status`, `order_total`) VALUES
(1, '4', '27/01/2018', '4', '4'),
(2, '3', '27/01/2018', '1', '4'),
(4, '4', '27/01/2018', '3', '4'),
(5, '4', '28/01/2018', '1', '4'),
(10, '4', '28/01/2018', '1', '4'),
(11, '4', '28/01/2018', '1', '4'),
(13, '4', '28/01/2018', '1', '4'),
(14, '4', '28/01/2018', '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `oi_id` int(11) NOT NULL,
  `oi_order_id` varchar(255) NOT NULL,
  `oi_product_id` varchar(255) NOT NULL,
  `oi_price_per_unit` varchar(255) NOT NULL,
  `oi_cart_quantity` varchar(255) NOT NULL,
  `oi_total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`oi_id`, `oi_order_id`, `oi_product_id`, `oi_price_per_unit`, `oi_cart_quantity`, `oi_total`) VALUES
(1, '1', '3', '3', '4', '5'),
(2, '1', '6', '3', '4', '5'),
(3, '1', '5', '3', '4', '5'),
(4, '1', '4', '3', '4', '5'),
(5, '1', '2', '3', '4', '5'),
(6, '2', '7', '3', '4', '5'),
(7, '2', '2', '3', '4', '5'),
(11, '4', '3', '3', '4', '5'),
(12, '5', '3', '3', '4', '5'),
(13, '5', '7', '3', '4', '5'),
(14, '5', '5', '3', '4', '5'),
(26, '10', '3', '3', '4', '5'),
(27, '10', '2', '3', '4', '5'),
(28, '10', '5', '3', '4', '5'),
(29, '11', '3', '3', '4', '5'),
(30, '11', '6', '3', '4', '5'),
(31, '11', '8', '3', '4', '5'),
(32, '11', '13', '3', '4', '5'),
(33, '11', '10', '3', '4', '5'),
(35, '13', '14', '3', '4', '5'),
(36, '13', '16', '3', '4', '5'),
(37, '13', '10', '3', '4', '5'),
(38, '13', '7', '3', '4', '5'),
(39, '13', '9', '3', '4', '5'),
(40, '14', '2', '3', '4', '5'),
(41, '14', '10', '3', '4', '5'),
(42, '14', '12', '3', '4', '5'),
(43, '14', '15', '3', '4', '5'),
(44, '14', '8', '3', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `os_id` int(11) NOT NULL,
  `os_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`os_id`, `os_title`) VALUES
(1, 'Confirmed'),
(2, 'Processing'),
(3, 'Packed'),
(4, 'Dispatched'),
(5, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_company_id` varchar(255) NOT NULL,
  `product_type_id` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_model_no` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_stock` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_company_id`, `product_type_id`, `product_title`, `product_model_no`, `product_price`, `product_stock`, `product_image`, `product_description`) VALUES
(1, '1', '1', 'Pynocare', '10001', '120', '97', 'PYNOCARE.png', 'Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health. Medicine aims to promote and maintain health and wellbeing.'),
(2, '1', '1', 'Paracetomal', '10002', '330', '96', 'Paracetomal.jpg', 'Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health. Medicine aims to promote and maintain health and wellbeing.'),
(3, '4', '3', 'Capsules', '10003', '236', '45', 'Capsules.jpg', 'Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health. Medicine aims to promote and maintain health and wellbeing.'),
(4, '4', '4', 'Ointment', '10004', '129', '11', 'ointments.jpg', 'Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health. Medicine aims to promote and maintain health and wellbeing.'),
(5, '2', '5', 'Vitamins', '10005', '168', '71', 'Vitamins.png', 'Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health. Medicine aims to promote and maintain health and wellbeing.'),
(6, '2', '5', 'Capsy Tablet', '10006', '149', '15', 'capsy-tablets.jpg', 'Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health. Medicine aims to promote and maintain health and wellbeing.'),
(7, '4', '3', 'Oystershell Calcium', '10010', '100', '6', 'Oystershell Calcium Tablet.jpg', 'Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health. Medicine aims to promote and maintain health and wellbeing.'),
(8, '2', '1', 'D-Alpha', '10007', '130', '8', 'D-Alpha.png', 'Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health. Medicine aims to promote and maintain health and wellbeing.'),
(9, '2', '4', 'Rosefe-XT', '10008', '157', '14', 'Rosefe-XT.jpeg', 'Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health. Medicine aims to promote and maintain health and wellbeing.'),
(10, '3', '2', 'Morphin Tablet', '10009', '1400', '15', 'Morphin Tablet.jpg', 'Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health. Medicine aims to promote and maintain health and wellbeing.'),
(12, '4', '1', 'Vitamin D', '10011', '600', '13', 'Vitamin D 400.jpg', 'Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health. Medicine aims to promote and maintain health and wellbeing.'),
(13, '2', '2', 'Ascoff Cough Syrup', '10012', '600', '15', 'Ascoff Cough Syrup.jpg', 'Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health. Medicine aims to promote and maintain health and wellbeing.');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'HR Manager'),
(3, 'Employee'),
(4, 'Accountant');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'UP'),
(2, 'MP');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Permanent Employee'),
(2, 'Consultant'),
(3, 'Intern'),
(5, 'Fresher');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `type_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`, `type_description`) VALUES
(1, 'Tablets', 'Tablets'),
(2, 'Syrups', 'Syrups'),
(3, 'Capsules', 'Capsules'),
(4, 'Ointments', 'Ointments'),
(5, 'Vitamins', 'Vitamins'),
(6, 'Antimalarial', 'Antimalarial');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_designation_id` varchar(255) NOT NULL,
  `user_department_id` varchar(255) NOT NULL,
  `user_level_id` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_add1` varchar(255) NOT NULL,
  `user_add2` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_dob` varchar(255) NOT NULL,
  `user_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_designation_id`, `user_department_id`, `user_level_id`, `user_username`, `user_password`, `user_name`, `user_add1`, `user_add2`, `user_city`, `user_state`, `user_country`, `user_email`, `user_mobile`, `user_gender`, `user_dob`, `user_details`) VALUES
(4, 'Sr. Associate', 'HR Department', '1', 'admin', 'test', 'Kaushal Kishore', 'House no : 768', 'Sector 2B', 'Allahabad', 'UP', 'India', 'kaushal.rahuljaiswal@gmail.com', '987654321', 'Male', '12 january, 2013', 'asdfdsaf'),
(6, 'Sr. Associate', 'HR Department', '2', 'hr', 'test', 'Atul Kumar', 'House no : 712', 'Sector 2A', 'Allahabad', 'UP', 'India', 'atul@gmail.com', '987654321', 'lkjkl', '10 June,2016', 'asdf'),
(7, 'Sr. Associate', 'HR Department', '3', 'employee', 'test', 'Amit Kumar', 'House no : 768', 'Sector 2B', 'Allahabad', 'UP', 'India', 'amit@gmail.com', '9324324546', '', '26 December,2015', ''),
(8, 'Sr. Associate', 'HR Department', '4', 'accountant', 'test', 'Suman Singh', 'House no : 768', 'Sector 2A', 'Allahabad', 'UP', 'India', 'suman@gmail.com', '987654321', '', '13 January,1961', ''),
(9, 'Sr. Associate', 'HR Department', '2', 'ece_hod', 'test', 'Arun Kumar', 'House no : 768', 'Sector 2A', 'Allahabad', 'UP', 'India', 'arun@gmail.com', '987654321', '', '12 january, 2013', ''),
(10, 'Sr. Associate', 'HR Department', '3', 'manasa', 'test', 'Manasa', 'New Delhi', 'India', 'Allahabad', 'UP', 'India', 'manasa@gmail.com', '9876543212', 'sf', '18 January,1968', 'sfd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `login_level`
--
ALTER TABLE `login_level`
  ADD PRIMARY KEY (`ll_id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`month_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`oi_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`os_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_level`
--
ALTER TABLE `login_level`
  MODIFY `ll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `month_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `oi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `os_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
