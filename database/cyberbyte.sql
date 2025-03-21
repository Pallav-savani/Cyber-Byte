-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 10:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `email_id` varchar(200) NOT NULL,
  `admin_password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`email_id`, `admin_password`) VALUES
('devang kakrecha', 'devang022'),
('parth patel', 'parthpatel0335'),
('savani pallav', 'pallav@0666');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(100) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `image` varchar(400) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `spec1` varchar(250) NOT NULL,
  `spec2` varchar(250) NOT NULL,
  `spec3` varchar(250) NOT NULL,
  `spec4` varchar(250) NOT NULL,
  `spec5` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `name`, `image`, `price`, `spec1`, `spec2`, `spec3`, `spec4`, `spec5`) VALUES
(1, 'Apple 2023 MacBook Pro Intel i9 9th Gen - (16 GB/1 TB SSD/Mac OS/4 GB Graphics) Silver', 'macbookpro-laptop.png', 215990, 'Processor : Intel Core i9 9th Gen', 'RAM | SSD : 16 GB | 1 TB', 'Display size : 16 inches | Quad HD Display', 'Graphics : AMD Redeon', 'Weight : 2 kg'),
(2, 'MSI Titan 18 HX intel core i9-14900HX GeForce RTX 4080 18-inch 120Hz', 'msi-laptop.jpg', 439990, 'Processor : Intel Core i9 14th Gen 14900HX Up to 4.8Ghz', 'RAM | SSD :  64 GB | 2 TB SSD', 'Display size : 18 Inches | UHD Plus Display | sRGB-100%', 'Graphics : 12 GB NVIDIA GeForce RTX 4080', 'Weight : 3.6 Kg'),
(3, 'Samsung Galaxy Book4 Pro Evo intel Core ultra 7 155H (16 GB/512 GB SSD) Moonstone Gray', 'samsung-laptop.png', 134990, 'Processor : Intel Core Ultra 7 155H', 'RAM | SSD : 16 GB | 512 GB SSD', 'Display size : 14 inches | WQXGA Display', 'Graphics : Intel Integrated', 'Weight : 1.23 Kg'),
(4, 'Asus ZenBook 14 Flip OLED (2023) Intel Evo i5 13th Gen 1340p - (16 GB/512 GB SSD/Windows 11 Home)', 'asus-laptop.jpg', 84090, 'Processor : Intel Core i5 13th Gen 1340p', 'RAM | SSD : 16 GB | 512 GB SSD', 'Display size : 14 Inch | OLED Display | 90Hz', 'Graphics : Intel Integrated', 'Weight : 1.50 Kg'),
(5, 'Lenovo Legion Pro 5 Intel Core i7 14th Gen 14650HX (16 GB/1 TB SSD/8 GB GeForce RTX 4060 Graphics Card) Onyx Grey', 'lenovo-laptop.jpg', 155990, 'Processor : Intel Core i7 14th Gen', 'RAM | SSD : 16 GB | 1 TB SSD', 'Display size : 16 Inch | WQXGA Display', 'Graphics : NVIDIA GeForce RTX 4060', 'Weight : 2.5 Kg'),
(6, 'Apple iPhone 15 pro max (Black Titanium, 256 GB) A17 Bionic Chip', 'iphone-15-pro-max.png', 139990, 'Processor : A17 Bionic Chip | Hexa Core', 'RAM | ROM : 256 GB ROM', 'Rear Camera : 48MP + 12MP + 12MP', 'Front Camera : 12MP', 'Display : 6.7 inch All Screen OLED Display '),
(7, 'Samsung Galaxy S24 ultra 5G (Titanium Gray, 512 GB) (12 GB RAM)', 's24-mobile.jpg', 130999, 'Processor : Snapdragon 8 Gen 3 | Octa Core | 3.39 GHz', 'RAM | ROM : 12 GB RAM | 512 GB ROM', 'Rear | Front Camera : 200MP + 50MP + 12MP + 10MP | 12MP', 'Display : 6.8 Inch Dynamic AMOLED 2X', 'Battery : 5000 mAh'),
(8, 'Vivo X100 Pro 5G (Asteroid Orange, 512GB) (16 GB RAM)', 'vivox100-mobile.jpg', 89999, 'Processor : Dimensity 9300 | Octa Core | 3.25 GHz', 'RAM | ROM : 16 GB RAM | 512 GB ROM', 'Rear | Front Camera : 50MP + 50MP + 50MP | 32MP', 'Display : 6.78 Inch Full HD + AMOLED', 'Battery : 5400 mAh'),
(9, 'Apple iPhone 12 (Purple, 256 GB) A14 Bionic Chip', 'iphone-12.png', 54999, 'Processor : A14 Bionic Chip With Neural Engine', 'RAM | ROM : 256 GB ROM', 'Rear Camera : 12MP + 12MP', 'Front Camera : 12MP', 'Display : 6.1 inch Super Retina XDR Display'),
(10, 'Realme GT 2 Pro (Paper White, 256 GB) (12 GB RAM)', 'realme-gt-2-pro-mobile.jpg', 39990, 'Processor : Qualcomm Snapdragon 8 Gen 1 | Octa Core | 3 GHz', 'RAM | ROM : 12 GB RAM | 256 GB ROM', 'Rear | Front Camera : 50MP   50MP   2MP | 32MP', 'Display : 6.7 inch Quad HD Display', 'Battery : 5000 mAh'),
(11, 'Apple 2022 iPad Pro (6th Gen) 512 GB ROM 12.9 inch with Wi-Fi Only (Space Grey)', 'ipad-pro.png', 108334, 'Processor | OS : Apple M2 Chip | iPad OS', 'RAM | ROM : 512 GB ROM', 'Rear | Front Camera : 12MP   12MP | 12MP', 'Display : 32.77 cm (12.9 inch) Quad HD Display', 'Battery : Lithium Polymer'),
(12, 'Samsung Galaxy Tab S9 (12 GB RAM) (256 GB ROM) 11.0 inch with Wi-Fi+5G Tablet (Beige)', 's9-tablet.webp', 97190, 'Processor | OS : Snapdragon 8 Gen 2  Upto 3.36 GHz | Android', 'RAM | ROM : 12 GB RAM | 256 GB ROM', 'Rear | Front Camera : 13.0 MP | 12MP', 'Battery : 8400 mAh', 'Ideal Usage : Entertainment, High Processing Tasks'),
(13, 'Xiaomi Pad 5 (6\\8 GB RAM) (128/256 GB RAM) 120 Hz Refresh Rate , 2.5K+ Display', 'xiaomipad5-tablet.jpg', 29999, 'Processor | OS : Qualcomm Snapdragon 860 | Octa Core | Android 11', 'RAM | ROM : 8 GB RAM | 256 GB ROM', 'Rear | Front Camera : 13MP | 8MP', 'Display : WQHD+ 10.95 inch | 120 Hz refresh rate', 'Battery : 8720 mAh'),
(14, 'Realme Pad 2 (8 GB RAM) (256 GB ROM) 11.5 inch with Wi-Fi+4G Tablet (Imagination Gery)', 'ralme-tablet.jpg', 23999, 'Processor | OS : Mediatek G99 | Android 13', 'RAM | ROM : 8 GB RAM | 256 GB ROM', 'Rear | Front Camera : 8MP | 5MP', 'Display : 2K Display upto 120Hz refresh rate', 'Battery : 8360 mAh Lithium Ion'),
(15, 'OnePlus Pad GO (8 GB RAM) (256 GB ROM) 11.35 inch with Wi-Fi+4G Tablet (Twin Mint)', 'onplus-tablet.png', 24999, 'Processor | OS : Mediatek Helio G99 | Android', 'RAM | ROM : 8 GB RAM | 256 GB ROM', 'Rear | Front Camera : 8.0 MP | 8 MP', 'Display : 28.83 cm (11.35 inch) Full HD+ Display', 'Battery : 8000 mAh'),
(16, 'LG UQ7500 139 cm (55 Inch) Ultra HD (4K) Smart LED TV & Active HDR (Black)', 'lg-tv.jpg', 43990, 'Operating System : WebOS', 'Display | Size : LED | 139 cm (55 Inch)', 'Audio : Number of Speakers - 2', 'Connectivity : HDMI Ports - 3 | 1 USB Ports', 'Supported Apps : Netflix | Prime Video | Disney Hotstar | Youtube'),
(17, 'Sony BRAVIA 55 Inch (139 cm) Ultra HD (4K) Smart Google TV (KD-55X74X)', 'sony-tv.jpg', 55990, 'Operating System : Google TV', 'Display : Ultra HD LED 55 inch (138.8 cm)', 'Audio : Number of Speakers - 2', 'Connectivity : HDMI Ports - 3 | 2 USB Ports', 'Supported Apps : Netflix | Prime Video | Disney+Hotstar | Youtube'),
(18, 'iFFALCON by TCL 55 inch (139 cm) Ultra HD (4K) LED Smart Google TV with Dolby Audio, HDR10 (iFF55U62)', 'falcon-tv.jpg', 27990, 'Operating System : Google TV', 'Display : LED 139 cm (55 inch) UHD (4K)', 'Audio : Number of Speakers - 2', 'Connectivity : HDMI Ports - 3 | 1 USB Ports', 'Supported Apps : Netflix | Prime Video | Disney+Hotstar | YouTube'),
(19, 'SAMSUNG New D Series Brighter Crystal 4K Vivid (2024 Edition) 138 cm (55 inch) UHD (4K) LED TV', 'samsung-tv.jpg', 46990, 'Operating System : Tizen | 2 GB RAM | 8 GB Storage', 'Display : LED 138 cm (55 inch) UHD (4K)', 'Audio : Number of Speakers - 2', 'Connectivity : HDMI Ports - 3 | 1 USB Ports', 'Supported Apps : Netflix | Prime Video | Disney+Hotstar | YouTube'),
(20, 'SONY Bravia 126 cm (50 inch) Ultra HD (4K) LED Smart TV (KD-50X75)', 'sony-tv2.jpg', 56890, 'Operating System : Google TV', 'Display : LED Ultra HD (4k)', 'Audio : Number of Speakers - 2', 'Connectivity : 3 HDMI Ports | 2 USB Ports', 'Supported Apps : Netflix | Prime Video | Disney+Hotstar | YouTube'),
(21, 'Autel Robotics EVO Lite  Premium Bundle, CMOS Sensor with 6K HDR Camera', 'autel-drone.jpg', 127320, 'Sensor : 1 Inch CMOS Sensor', 'Camera : 6K Video | 20 MP Photo', 'Flight Range : 12 KM Video Transmission', 'Flight Time : 41 Minutes Flight Time', 'Obstacle Avoidance'),
(22, 'DJI Avata 2 Fly More Combo (1 Battery), FPV Drone with 4K Camera', 'djiavata-drone.jpg', 82087, 'Takeoff Weight : Approx. 377 g', 'Max Takeoff Altitude : 5000 m', 'Max Flight Time : Approx. 23 mins', 'Internal Storage : 46 GB', 'Camera : 4K 60fps | 1080p 120fps'),
(23, 'DJI Mini 2 Ultralight and Foldable Drone Quadcopter with 4K Camera', 'djimini2-drone.jpg', 34499, 'Weight : 246 g', 'Battery : 2250 mAh Lithium Ion', 'Flight Time : 31 Minutes', 'Wi-Fi Range : 10 KM', 'Max Speed : 35.8 mph'),
(24, 'DJI Mini 4 Pro, Folding Mini-Drone with 4K HDR Video Camera', 'djimini4-drone.webp', 112499, 'Takeoff Weight : 249 g', 'Max Speed : 16 m/s in Sport Mode', 'Max Takeoff Altitude : 4000 m', 'Flight Time : 34 mins | 45 mins', 'Max Flight Distance : 18 KM'),
(25, 'DJI Mavic 3 Classic Drone camera with, 5.1K Video Recording', 'djimivic3-drone.jpeg', 236500, 'Weight : 895 gm', 'Sensor Type : 4/3 inch CMOS Sensor', 'Max Takeoff Altitude : 6000 m', 'Camera : 20 MP | 5.1K Video Recording', 'Flight Time : 46 Minutes'),
(26, 'Canon EOS R7, EOS R Technology meets APS-C Design Fast and Powerful', 'canon-camera.png', 159499, 'Sensor Type : Dual Pixel CMOS AF II', 'Camera : Full HD uo to 120 fps', 'Video : 4K / 60 fps', 'Processor : DIGIC X Processor', 'Shooting Method : Up to 15fps Continuous shooting'),
(27, 'SONY Alpha ILCE-6400l 24.2 MP Mirror-less Digital SLR Camera (Black) with 16-50 mm Power Lens', 'sony-camera.jpg', 90990, 'Brand : SONY', 'Model : ILCE-6400L-cr', 'Battery : 1 Lithium Metal', 'Memory Slots : 1 Memory Slot', 'Display Type : LCD | 3 Inch'),
(28, 'Nikon D5600 Digital SLR Camera with AF-P DX NIKKOR 18-55 mm VR Lens - VBA500K001', 'nikon-camera.png', 42499, 'Brand : NIKON', 'Model Name : D5600', 'Display Type : 3.2 Inch | LCD', 'Sensor Type : CMOS Sensor', 'Imaging : 24.2 MP Optical sensor Resolution'),
(29, 'Apple Watch SE (GPS, 44mm) - Gold Aluminium Case with Starlight Sport Band - Regular', 'apple-watch.png', 29999, 'Brand : Apple', 'Color : Gold Aluminium Case', 'Connectivity : GPS', 'Battery : Lithium Ion', 'Compatible Device : Smartphone'),
(30, 'Fossil Gen 6 Digital Gray Dial Mens Watch-FTW4059', 'fosil-watch.jpg', 12498, 'Brand : Fossil', 'Screen Size : 1.28 inches', 'Resolution : 390 x 390', 'Display Type : Digital', 'Supported Apps : Fitness Tracker, Heart Rate Monitor, GPS, Distance Tracker'),
(31, 'Fitbit Versa 4 Fitness Watch (Waterfall Blue/Platinum Aluminium) with 6 month Premium Membership', 'fitbit-watch.jpg', 20499, 'Style : Morden', 'Compatible Device : Tablet, Smartphone', 'Display Type : AMOLED', 'Battery Life : 6 Days', 'GPS : GPS Yes'),
(32, 'Samsung Galaxy Watch 5 Bluetooth (44 mm, Graphite, Compatible with Android only)', 'samsung-watch.jpg', 22999, 'Brand : SAMSUNG', 'Display Type | Size : AMOLED | 44 mm', 'Connectivity Technology : USB', 'Battery : Lithium Ion', 'Supported Apps : Fitness Tracker | Sleep Monitor | Heart Rate Monitor'),
(33, 'Fire-Boltt Smartwatch Brand Talk 2 Bluetooth Calling Smartwatch with Dual Button', 'firebolt-watch.jpg', 1499, 'Brand : Fire-Boltt', 'Model Name : Talk 2', 'Display : 1.28 inches | LCD', 'Battery : 280 mAh | 8 Days', 'Processor | OS : iOS | Android'),
(34, 'Amazon Echo Dot (4th Gen) | Smart speaker with Bigger sound (White)', 'echo-speaker.jpg', 5499, 'Brand : Amazon', 'Model Name : B7W64E', 'Product Gen : 4th Generation Echo Dot', 'Weight : 327 g', 'Generic Name : Smart Speakers'),
(35, 'Amazon Echo Dot (5th Gen) | Premium sound powered by Dolby and Alexa (Black)', 'alexa-speaker.png', 6499, 'Brand : Amazon', 'Model Name : C2N6L4', 'Product Gen : 5th Generation Echo Dot', 'Weight : 340 g', 'Generic Type : Smart Speakers'),
(36, 'SONOS Era 100 (Next Gen) with Built-in Alexa Smart Wi-Fi Speaker (Touch Control, White) ', 'sonos-speaker.jpeg', 29999, 'Brand : SONOS', 'Virtual Assistant : Built-in Alexa', 'Connectivity : Bluetooth | Wi-Fi | USB', 'USP : Deep Bass Technology | Three Class Digital Amplifier | Easy Touch Control', 'Power Source : Battery'),
(37, 'Google Home with Google Assistant Smart Speaker (White)', 'google-speaker.jpg', 9450, 'Brand : Google', 'Model Name : GHOME', 'Virtual Assistant : Google AI', 'Special Feature : Play Music from Popular Streaming', 'Configuration : Mono'),
(38, 'SONOS Roam SL with Alexa & Google Voice Assistant Smart Wi-Fi Speaker (Shadow Black)', 'sonos2-speaker.png', 19999, 'Brand : SONOS', 'Virtual Assistant : Built-in Alexa & Google', 'Connectivity : Bluetooth v5.0 | AirPlay 2 | Wi-Fi | USB', 'Power Source : USB ', 'Special Feature : Automatic Trueplay | Built-in Subwoofer'),
(39, 'Bose QuietComfort Ultra Wireless Noise Cancelling Over Ear Headphones with Spatial Audio (White Smoke)', 'bose-headphone.jpg', 35900, 'Brand : Bose Corporation India Pvt. Ltd.', 'Model : 880066-0200', 'Special Feature : Bose Noise Cancellation, ELEVATED DESIGN', 'Battery : Lithium Ion', 'Cable Feature : Without Cable'),
(40, 'SONY WH-1000XM4/LM Bluetooth Headset  (Blue, On the Ear)', 'sony-head.jpg', 22990, 'Brand : SONY', 'Model Name : WH1000XM4/LM', 'Connectivity : Bluetooth', 'Compatible Divice : Laptop | Tablet | Mobile', 'With Microphone : Yes'),
(41, 'Apple AirPods Pro (2nd gen) with MagSafe Case (USB-C) Bluetooth Headset (White, True Wireless)', 'apple-aripods.jpg', 18999, 'Brand : Apple', 'Model Name : MT JV3HN/A', 'Headphone Type : True Wireless', 'Connectivity : Bluetooth', 'With Microphone : Yes'),
(42, 'Sennheiser HD 800s Wired without Mic Headset (Silver, Black, On the Ear)', 'sennheiser-head.jpg', 124990, 'Brand : Sennheiser', 'Model Name : HD 800s', 'Connectivity : Wired', 'Compatible Device : Mobile, Laptop', 'Connector Type : 6.3'),
(43, 'Sony PlayStation Elite PLUS Wireless Headset with Dual Noise-Cancellation', 'playstation-head.jpg', 12335, 'Brand : SONY', 'Model Name : CFI-ZHW2', 'Battery : 1 Lithium Ion', 'Connectivity : Bluetooth v5.2', 'ENX Supported Technology with noise Cancelling'),
(44, 'AnkerWork C3 10 Webcam, 4K Webcam, 12 Megapixel, AI Auto Focus, 1080p@60FPS HDR', 'anker-camera.jpg', 17997, 'Brand : Anker', 'Sensor Technology : CMOS', 'Video Resolution : 4K@60FPS', 'Supported For : 12 MP 4K Display', 'Memory Type : SDHC'),
(45, 'Creative Live! Cam Sync V3 2K QHD USB Webcam with 4K Digital Zoom (Black)', 'creative-camera.jpg', 3999, 'Brand : Creative', 'Photo Sensor Technology : CMOS Sensor', 'Video Resolution : 1080p, 2K', 'Max Focal Length : 50', 'Flash Memory Type : SDXC'),
(46, 'DJI Phantom 3 Advanced Quadcopter Drone With 2.7K HD Video Camera', 'drone.png', 83405, 'Weight : 1.3 KG', 'Flight Time : 23 Minutes', 'Battery : 4480 mAh Lithium Polymer', 'Max Flight Altitude : 6000 m', 'GPS : GPS | GLONASS'),
(47, 'JAMMY ZONES DZ09 Smartwatch Compatible with All Smart Phones J23 Smartwatch', 'smart-watch.png', 1387, 'Brand : JAMMY ZONES', 'Connectivity : With Call Function', 'Display : Touchscreen | 40 mm', 'Compatible : Android & iOS', 'Battery Life : 8 Hours'),
(48, 'AMAZON Echo Plus (2nd Gen) - Premium sound powered by Dolby, Smart Home Hub (Black)', 'speker.png', 7851.47, 'Brand : Amazon', 'Model Name : L9D29R', 'Virtual Assistant : Built-in Alexa', 'Connectivity : USB | Bluetooth v5.0 | Wi-Fi', 'Power Source : Battery'),
(49, 'Logitech PTZ Pro 2 Video Camera for Conference Rooms, HD 1080p Video with Auto-Focus', 'camera.png', 11999, 'Brand : Logitech', 'Photo Sensor Technology : CMOS', 'Video Recording : 1080p', 'Max Focal Length : 1 mm', 'Flash Memory Type : SmartMedia, SDHC'),
(50, 'SONY MDR-V55 Extra Bass & DJ Headphones Without Mic (Black, On the Ear)', 'sony.png', 4890.43, 'Brand : SONY', 'Model Name : MDR-V55 Extra Bass', 'Headphone Type : On the Ear', 'Connectivity : Bluetooth', 'Compatible Device : Tablet, Mobile, Audio Player, Laptop'),
(51, 'Acer Swift Go 14 EVO OLED Intel Core i5 13th Gen 13500H - (16 GB/512 GB SSD/Windows 11 Home) Pure Silver)', 'Acer-laptop.jpg', 56990, 'Processor : Intel Core i5 13th Gen', 'RAM | SSD : 16 GB | 512 GB SSD', 'Display size : 14 Inch | WQXGA Display', 'Graphics : Intel Integarted', 'Weight : 1.25 Kg'),
(52, 'ASUS ROG Strix SCAR 16 Intel Core i9 14th Gen 14900HX - (32 GB/2 TB SSD/Windows 11 Home/16 GB Graphics/NVIDIA GeForce RTX 4090)', 'ASUS-rog-laptop.jpg', 339990, 'Processor : Intel Core i9 14th Gen', 'RAM | SSD : 32 GB | 2 TB SSD', 'Display size : 16 inch | WQXGA Display', 'Graphics : NVIDIA GeForce RTX', 'Weight : 2.65 Kg'),
(53, 'Dell XPS 9530 Intel Core i7 13th Gen 13700H - (32 GB/1 TB SSD/6 GB Graphics/NVIDIA GeForce RTX 4050) Silver', 'Dell-XPS-laptop.jpg', 279690, 'Processor : Intel Core i7 13th Gen', 'RAM | SSD : 32 GB | 1 TB SSD', 'Display size : 15.6 Inches | OLED Display', 'Graphics : NVIDIA GeForce RTX', 'Weight : 1.86 Kg'),
(54, 'Google Pixel 8 pro (Bay, 256 GB) (12 GB RAM)', 'GooglePixel8.jpg', 105999, 'Processor : Tensor G3', 'RAM | ROM : 12 GB RAM | 256 GB ROM', 'Rear| Front camera : 50MP + 48MP + 48MP | 10.5MP', 'Display : 6.7 inch LTPO OLED', 'Battery : 5050 mAh'),
(55, 'iQOO 12 5G (Legend, 256GB Storage) (12 GB RAM) Snapdragon® 8 Gen 3', 'iQOO.webp', 59990, 'Processor : Snapdragon 8 Gen 3 | Octa Core | 3.3 GHz', 'RAM | ROM : 12 GB RAM | 256 GB ROM', 'Rear Camera : 50MP', 'Display : 6.78 Inch | 144Hz LTPO AMOLED', 'Battery : 5000 mAh'),
(56, 'OnePlus 12 (Flowy Emerald, 512GB Storage) (16 GB RAM)', 'OnePlus12.jpg', 69990, 'Processor : Snapdragon 8 Gen 3 | Octa Core | 3.3 GHz', 'RAM | ROM : 16 GB RAM | 512 GB ROM', 'Rear Camera : 64MP + 50MP + 48MP', 'Display : ProXDR 2K 120Hz Display', 'Battery : 5400 mAh'),
(57, 'MI Xiaomi Pad 6 (8 GB RAM) (256 GB ROM) 11.0 inch with Wi-Fi Only Tablet (Graphite Grey)', 'xiaomi-pad-6-tablet.webp', 28999, 'Processor | OS : Qualcomm Snapdragon 870 Upto 2.42 GHz | Android', 'RAM | ROM : 8 GB RAM | 256 GB ROM', 'Rear | Front Camera : 13 MP | 8 MP', 'Display : 2.8K Resolution HDR 10 | 144 Hz', 'Battery : 8840 mAh'),
(58, 'HONOR Pad 9 (8 GB RAM) (256 GB ROM) 12.1 Inch with free Bluetooth Keyboard (Gray)', 'HONOR9-tablet.jpg', 24999, 'Processor | OS : Qualcomm Snapdragon 6 Gen 1 (4nm) | Android', 'RAM | ROM : 8 GB RAM | 256 GB ROM', 'Rear | Front Camera : 13.0 MP | 8 MP', 'Display : 12.1 inch (120 Hz) 2.5K+ Display', 'Battery : 8300 mAh'),
(59, 'OPPO Pad Air (4 GB RAM) (128 GB ROM) 10.36 inch with Wi-Fi Only Tablet (Grey)', 'OPPO-tablet.jpg', 12899, 'Processor | OS : Qualcomm Snapdragon 680 Upto 2.4 GHz | Android  ', 'RAM | ROM : 4 GB RAM | 128 GB ROM', 'Rear | Front Camera : 8.0 MP | 5 MP', 'Battery : 7100 mAh', 'Ideal Usage : Entertainment, Reading and Browsing, For Kids, Business'),
(60, 'Panasonic 139 cm (55 inches) Ultra HD (4K) LED Smart Google TV (TH-55MX660DX)', 'Panasonic-tv.jpg', 42990, 'Operating System : Google TV', 'Display : LED 139 cm (55 inch) Ultra HD (4K)', 'Audio : Number of Speakers - 2', 'Connectivity : HDMI Ports - 3 | 2 USB Ports', 'Supported Apps : Netflix | Prime Video | Disney+Hotstar | YouTube'),
(61, 'OnePlus 163 cm (65 inches) Q Series 4K Ultra HD QLED Smart Google TV 65 Q2 Pro (Black)', 'OnePlus-tv.jpg', 59990, 'Operating System : Google TV OS', 'Display : QLED 4K Ultra HD Display (120 Hz)', 'Audio : Dolby Atmos sound Configuration', 'Connectivity : 3 HDMI Ports | 2 USB Ports', 'Supported Apps : Netflix | Prime Video | Disney+Hotstar | YouTube'),
(62, 'Hisense 164 cm (65 inches) 4K Ultra HD Smart Mini LED QLED TV 65U7K (Black)', 'Hisense-tv.jpg', 84999, 'Operating System : VIDAA OS', 'Display : 4K Ultra HD Digital video format', 'Audio : Number of Speakers - 3', 'Connectivity : 4 HDMI Ports | 2 USB Ports', 'Supported Apps : Netflix | Prime Video | Disney+Hotstar | YouTube'),
(63, 'Lorcan GPS Quadcopter Drone with 4k Camera for Adults, RC Quadcopter with Auto Return', 'lorcan-drone.jpg', 13340, 'Brand : LORCAN', 'Model Name : DG600C', 'Special Feature : Integrated GPS, Rechargeable', 'Camera : Video 4K UHD 2160p', 'Age Range : Adult'),
(64, 'NUMOO Drone with 8K Camera, 5GHz FPV Transmission, GPS 3 - Axis, Obstacle Avoidance', 'DARK-Drone.jpg', 122777, 'Brand : GALAXY COMPUTER CENTER', 'Special Feature : Auto Follow, Integrated Camera, Foldable', 'Max Flight Altitude : 5000 m', 'GPS : YES', 'Flight Time : 60 mins'),
(65, 'Panasonic Lumix S5 FullFrame Mirrorless Camera with Lumix S 20-60mm Lens (Body Only)', 'Panasonic-camera.jpg', 109990, 'Brand : PANASONIC', 'Photo Sensor Technology : CMOS', 'Supported File Format : RAW', 'Max Aperture : 3.5 mm', 'Expanded ISO Minimum : 100'),
(66, 'Canon EOS R5 Full-Frame Mirrorless Camera with 8K Video, 45 MP Full-Frame CMOS Sensor', 'canon1-camera.jpg', 479419, 'Brand : CANON', 'Model Name : Canon EOS R5', 'Memory Storage : 1000 GB', 'Memory Slots : 2', 'Flash Memory Type : SDXC'),
(67, 'NoiseFit Halo 1.43 inches AMOLED Display, Bluetooth Calling Round Dial Smart Watch (Vintage Brown)', 'NoiseFit-watch.jpg', 2799, 'Brand : Noise', 'Model Name : NoiseFit Halo', 'Display : AMOLED | 1.43 inches', 'Battery : 300 mAh | 7 Days', 'Compatible OS : Android & iOS'),
(68, 'Amazfit GTR 2 (New Version) 46mm Smart Watch with HD AMOLED Display (Thunder Black)', 'Amazfit-watch.jpg', 7999, 'Brand : Amazfit', 'Model Name : GTR 2 New Version', 'Display : AMOLED | 1.39 Inch', 'IP Rating : IP68', 'Battery : Lithium Ion | 10 Days'),
(69, 'JBL Partybox Encore Essential | Portable Bluetooth Party Speaker | Built-in Powerbank | Mic Support PartyBox App (Black)', 'JBL-Speaker.jpg', 20990, 'Brand : JBL, HARMAN', 'Controller Type : Button, App Control', 'Connectivity : Bluetooth, Auxiliary, USB', 'Batter : 4800 mAh | 6 Hours', 'Signal-to-Noise Ratio : 80 dB'),
(70, 'boAt Stone 1200F with upto 9 Hours Battery, IPX7 and RGB LEDs 14 W Bluetooth Speaker (Grey Hound)', 'boAt-Speaker.jpg', 3999, 'Brand : boAt', 'Power Output (RMS) : 14 W', 'Connectivity : Bluetooth v5.0 | 10 m Range', 'IPX7 : Water Resistant', 'Battery Time : Upto 9 Hours(w/o LED) & 7 Hours(with LED)'),
(71, 'OnePlus Buds 3 in Ear TWS Bluetooth Earbuds with Upto 49dB Smart ANC Bluetooth Gaming Headset (Metallic Gray)', 'OnePlus-buts.jpg', 5499, 'Brand : OnePlus', 'Model Name : Buds 3 E509A', 'Headphone Type : True Wireless', 'Connectivity : Bluetooth', 'Compatible Device : Laptop, Mobile, Tablet'),
(72, 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes (Hazel Beige)', 'boAt-headphone.jpg', 1699.67, 'Brand : boAt', 'Model Name: Rockrez 450', 'Connectivity : (Via) Bluetooth', 'Battery : 1 Lithium Ion batteries required', 'Microphone : YES'),
(73, 'NVIDIA GeForce RTX 4090 Founders Edition Graphics Card 24GB GDDR6X - Titanium and Black', 'RTX-4090.jpg', 279990, 'Graphic Co-processor : NVIDIA GeForce RTX 4090', 'Brand : GeForce', 'Graphics RAM Size : 24 GB', 'GPU Clock Speed : 2.52 GHz', 'Output Interface : HDMI'),
(74, 'NVIDIA GeForce RTX 3090 Founders Edition Graphics Card, pci_e, GDDR6, 24 GB', 'rtx-3090.jpg', 249000, 'Graphics Co-processor : NVIDIA GeForce RTX 3090', 'Brand : NVIDIA', 'Graphics RAM Size : 24 GB', 'Output Interface : Display Port', 'GPU Clock Speed : 3.1 GHz'),
(75, 'Zotac Gaming Geforce GTX 1650 Amp Core Gddr6 4Gb 128Bit Pcie 3.0', 'rtx-1650.jpg', 13053, 'Graphics Co-processor : NVIDIA GeForce GTX 1650', 'Brand : Zotac', 'Graphics RAM Size : 4 GB', 'GPU Clock Speed : 1695 MHz', 'Graphics RAM Type : GDDR6'),
(76, 'GIGABYTE NVIDIA GeForce RTX 3060 Wind-force Fan 12GB, pci_e_x16, GDDR6', 'rtx-3060.jpg', 31770.7, 'Graphics Co-processor : NVIDIA GeForce RTX 3060', 'Brand : GIGABYTE', 'Graphics RAM Size : 12 GB', 'GPU Clock Speed : 1837 MHz', 'Output Interface : Display Port, HDMI'),
(77, 'GALAX PC Case Revolution-06 (REV-06W) White Gaming Cabinet | 4 RGB Cooling Fans', 'Galax-case.jpg', 3899.23, 'Case Type : Mid Tower', 'Brand : GALAX', 'Cooling Method : Water', 'Uses For : Gaming', 'Material : ATX, Tempered Glass, M-ATX, Metal, ITX, Mesh Cover, ABS'),
(78, 'ASUS ROG Strix Helios GX601 White Edition RGB Mid-Tower Computer Case', 'ASUS-case.jpg', 24200.4, 'Brand  : ASUS', 'Motherboard Compatibility : Extended ATX', 'Case Type : Mid Tower', 'Cooling Method : Water', 'Material : Tempered Glass, Alloy Steel, Aluminium'),
(79, 'Antec TORQUE Mid Tower Aluminium Gaming Cabinet | Computer Case | Support ATX, E-ATX, Micro-ATX - Black White', 'Antec-case.jpg', 37930.6, 'Brand : Antec', 'Motherboard Compatibility : ATX', 'Case Type : Mid Tower', 'Material : Aluminium', 'Cooling Method : Air'),
(80, 'Fractal Design Torrent Compact White Tempered Glass TG Clear Tint Window Mid Tower Computer Case', 'Fractal-case.jpg', 16919.6, 'Brand : Fractal Design', 'Motherboard Compatibilty : E-ATX Motherboards', 'Case Type : Tower', 'Material : Glass', 'Power Supply : Top Mount'),
(81, 'AULA F3287 Mechanical | Rainbow Backlight, Anti-ghosting, Blue Switch, TKL Wired USB Gaming Keyboard (Grey, White)', 'AULA-key.jpg', 2498.93, 'Brand : AULA', 'Suitable For : Laptop, Desktop, Gaming Console, MacBook, Chrome Book', 'Case Material : Aluminium', 'Size : Ten Keyless', 'Interface : Wired USB'),
(82, 'Ant Esports Gaming Keyboard MK1000 Mechanical Multicolor LED Backlit Wired TKL, 87 Keys 100% Anti-Ghosting (Black)', 'Ant-key.jpg', 1649.64, 'Brand : ANT', 'Suitable For : Laptop and PC', 'Case Material : Metal + ABS', 'Keyboard Size : Standard', 'Interface : Wired USB'),
(83, 'RPM Euro Games Gaming Keyboard Wired | 87 Keys & RGB Backlit | with Suspension Keys Wired USB Gaming Keyboard (Black)', 'RPM-key.jpg', 699, 'Brand : RPM', 'Suitable For : PC, Laptop, Tab & Mobile', 'Case Material : Plastic', 'Interface : Wired USB', 'Size : Tenkeyless'),
(84, 'Massdrop CTRL Mechanical Keyboard — Tenkeyless TKL (87 Key) Gaming Keyboard, Aluminium Frame (Cherry MX Brown RGB)', 'Massdrop-key.jpg', 64090, 'Brand : DROP', 'Compatible Device : Laptop', 'Connectivity : USB, USB-C', 'Keyboard Description : Gaming', 'Special Feature : Backlit'),
(85, 'Kreo (Limited Edition) Chimera Lucid  Transparent USB Wireless Gaming Mouse Adjustable DPI Up to 12400', 'Kreo-mous.jpg', 2999.43, 'Brand : Kreo', 'Connectivity : USB', 'Movement Detection Tech. : Optical', 'Number of Buttons : 7', 'Hand Orientation : Ambidextrous'),
(86, 'Logitech G304 Lightspeed Wireless Gaming Mouse, Hero Sensor, 12,000 DPI, Lightweight, 6 Programmable Buttons (White)', 'Logitech-mouse.jpg', 3095.54, 'Brand : Logitech G', 'Connectivity : Wireless', 'Movement Detection Tech. : Optical', 'Number of Buttons : 6', 'DPI : Up to 12000'),
(87, 'Razer Basilisk V3 Pro Customizable Wired Gaming Mouse with Chroma RGB Lighting Up to 26K DPI - Classic Black', 'Razer-mouse.jpg', 11130.7, 'Brand : Razer', 'Connectivity : Wired', 'Special Feature : Ergonomic Design', 'Movement Detection Tech. : Optical', 'Number of Buttons : 11'),
(88, 'ASUS ROG Spatha X Wireless Gaming Mouse (Magnetic Charging Stand) DPI Up to 19,000 (Aura RGB Lighting)', 'ASUS-mouse.jpg', 17939.3, 'Brand : ASUS', 'Connectivity : Bluetooth', 'Movement Detection Tech. : Bluetooth', 'Number of Buttons : 12', 'Special Feature : Wireless'),
(89, 'GIGABYTE B450M DS3H V2 (AMD Ryzen AM4/Micro ATX/M.2/HMDI/DVI/USB 3.1/DDR4/Motherboard)', 'GIGABYTE-motherbord.jpg', 6210.23, 'Brand : GIGABYTE', 'CPU Socket : Socket AM4', 'RAM Type : DDR4', 'Chipset Type : AMD B450M', 'Compatible Processor : AMD Ryzen 2nd Gen, 1st Gen And Radeon Vega Graphics'),
(90, 'MSI PRO H610M-E DDR4 Motherboard, Micro-ATX - Supports 14th/13th/12th Gen Intel Core Processor, LGA 1700-2 x DIMMs (3200MHz), 1x PCIe 4.0 x16 slot, 1 x M.2 Gen3, USB 3.2 Gen1, 1G LAN, HDMI 1.4 & VGA', 'MSI-Motherboard.jpg', 6195.54, ' Brand : MSI', 'CPU Socket : LGA 1700', 'Compatible Devices : Personal Computer', 'RAM Type : DDR4', 'Chipset Type : Intel H610'),
(91, 'ASUS Pro WS WRX80E-SAGE SE WIFI AMD Threadripper Pro EATX workstation motherboard (PCIe 4.0, ASMB9-iKVM, 2x10Gb LAN, 7xPCIe 4.0 X16 slots, 3xM.2,2xU.2 ports, 11 USB 3.2 Gen 2 ports,8-channel DDR4 ECC)', 'Asus-motherbord.jpg', 99999.6, 'Brand : ASUS', 'CPU Socket : Socket AM4', 'Compatible Devices : Personal Computer', 'RAM Type : DDR4', 'Chipset Type : AMD X570'),
(92, 'ASUS ROG Maximus Z790 Hero LGA 1700 ATX Motherboard with 20+1 Power Stages, DDR5, Five M.2 Slots, Wi-Fi 6E, Two Thunderbolt 4 Ports, USB 3.2 Gen 2x2, AI Overclocking, AI Cooling II, & Aura Sync RGB', 'ROG-motherbord.jpg', 100421, 'Brand : ASUS', 'CPU Socket : LGA 1700', 'Compatible Devices : Personal Computer', 'RAM Type : DDR5', 'Compatible Processors : Intel® Core 13th/12th/Pentium® Gold and Celeron® Processors'),
(93, 'amazon basics 4G LTE Wireless Dongle with All Sim Network Support|Plug&Play Data Card Stick with Up to 150Mbps WiFi Hotspot|2100Mah Rechargeable Battery|Sim Adapter Included (Black),Single_Band', 'amazon-wifi.jpg', 2699.54, 'Brand : Amazon basics', 'Special Feature : wps', 'Frequency Band Class : Single-Band', 'Compatible Devices : Laptop, Computer, Tablet, Smart Television', 'Included Components : Wireless Dongle with Product Manual, 1 Lithium ion battery'),
(94, 'ASUS ROG Rapture GT-AX11000 Pro Tri-Band WiFi 6 Extendable Gaming Router, 10G & 2.5G Ports, ASUS RangeBoost Plus, Triple-Level Game Acceleration, Subscription-Free Network Security, AiMesh Compatible', 'ASUS-wifi.jpg', 48299.4, 'Brand : ASUS', 'Special Feature : WPS', 'Frequency Band Class : Tri-Band', 'Wireless Communication : 802.11n, 802.11ax, 802.11a, 802.11ac, 802.11g', 'Compatible Devices : COMPUTER, MOBILE'),
(95, 'NETGEAR Orbi Whole Home Tri-Band Mesh Wi-Fi 6 System (RBK852) – Router with 1 Satellite Extender | Coverage Up to 5,000 Sq Ft and 60+ Devices | 11AX Mesh AX6000 Wi-Fi (Up to 6Gbps)', 'NETGEAR-wifi.jpg', 70300, 'Brand : Netgear', 'Special Feature : Access Point Mode', 'Frequency Band Class : Tri-Band', 'Wireless Communication : 802.11n, 802.11a, 802.11ac', 'Compatible Devices : Laptop, Personal Computer, Tablet, Smart Television, Smartphone'),
(96, 'JioFi M2S Black | 4G Router from Jio | On The Go Device | Video & HD Voice Calls | Connect & Share | Cashback Worth', 'JIO-wifi.jpg', 2349.53, 'Brand : JIO', 'Model Name : JioFi M2S', 'Special Feature : Remote Access', 'Wireless Communication : 802.11n, 802.11b, 802.11g', 'Compatible Devices : Personal Computer, Tablet, Smartphone'),
(97, 'Crucial P3 Plus 1TB PCIe 4.0 3D NAND NVMe M.2 SSD, up to 5000MB/s - CT1000P3PSSD8', 'Crucial-ssd.jpg', 5941, 'Brand : Crucial', 'Digital Storage Capacity : 1 TB', 'Hard Disk Interface : Solid State Drive', 'Compatible Devices : Laptop, Desktop', 'Connectivity Technology : SATA'),
(98, 'Crucial BX500 240 GB Laptop, Desktop Internal Solid State Drive (SSD) (CT240BX500SSD1)  (Interface: SATA, Form Factor: 2.5 Inch)', 'Crucial1-ssd.jpg', 1896, 'Brand : Crucial', 'Hard Disk Interface : Solid State Drive', 'Connectivity : SATA', 'Digital Storage Capacity : 240 GB', 'Compatible Device : Laptop, Desktop'),
(99, 'Intel SSD SSDPED1K015TA01 P4800X 1 2Heigh 1.5TB PCIex4 20nm 3D XPoint', 'Intel-SSD.jpg', 1003960, 'Brand : Intel', 'Digital Storage Capacity : 1500 GB (1.5 TB)', 'Hard Disk Interface : PCIE x 4', 'Connectivity Technology : USB', 'Compatible Devices : Desktop'),
(100, 'Apple SSD Kit for Mac Pro (8TB) Laptop USB Type C Class 2 SSD', 'Apple-SSD.jpg', 237288, 'Brand : Apple', 'SSD Storage Capacity : 8000 GB (8 TB)', 'Hard Disk Interface : USB-C', 'Connectivity : USB', 'Compatible Devices : Laptop'),
(101, 'Crucial RAM 16GB DDR5 4800MHz CL40 Desktop Memory CT16G48C40U5 (Black)', 'Crucial-RAM.jpg', 3909, 'Brand : Crucial', 'RAM Size : 16 GB', 'RAM Memory Technology : DDR5', 'Memory Speed : 4800 MHz', 'Compatible Devices : Desktop'),
(102, 'Corsair Vengeance LPX 16GB (1x16GB) DDR4 3200MHZ UDIMM C16 Desktop RAM Memory Module Black', 'Corsair-ram.jpg', 3440, 'Brand : Corsair', 'RAM Size : 16 GB', 'RAM Memory Technology : DDR4', 'Memory Speed : 3200 MHz', 'Compatible Devices : Desktop'),
(103, 'NEMIX RAM 256GB (2X128GB) DDR4 3200MHZ PC4-25600 8Rx4 1.2V 288-PIN ECC LRDIMM Load Reduced Server Memory KIT', 'NEMIX-RAM.jpg', 93774.9, 'Brand : NEMIX RAM', 'Computer Memory Size : 256 GB', 'RAM Memory Technology : DDR4', 'Memory Speed : 25600 MHz', 'Compatible Devices : Server'),
(104, 'G.SKILL Zeta R5 NEO Series (AMD Expo) DDR5 RAM 192GB (4x48GB) 6400MT/s CL32-39-39-102 1.40V Desktop Computer Memory RDIMM - Black (F5-6400R3239G48GQ4-ZR5NK)', 'G-ram.jpg', 223128, 'Brand : G.Skill', 'Computer Memory Size : 192 GB', 'RAM Memory Technology : DDR5 6400 SDRAM R-DIMM AMD EXPO', 'Memory Speed : 6400 MT/s', 'Compatible Devices : Desktop Workstation'),
(105, 'GAMDIAS Aura GP550 Atom Series Fully Black Power Supply', 'GAMDIAS-power.jpg', 4457.16, 'Brand : GAMDIAS', 'Compatible Devices : Personal Computer', 'Connector Type : SATA', 'Output Wattage : 550', 'Form Factor : ATX12V'),
(106, 'Ant Esports VS500L NonModular High Efficiency Gaming Power Supply/PSU with 1 x PCIe and 120mm Silent Fan', 'Ant-power.jpg', 2151, 'Brand : Ant Esports', 'Model Name : Ant Esports VS500L', 'Compatible Devices : PC', 'Connector Type : PCI Express', 'Output Wattage : 500 Watts'),
(107, 'Seasonic PRIME Ultra Gold 1000W (80+Gold, ATX 12V) PSU/Power Supply', 'Seasonic-power.jpg', 76605, 'Brand : Seasonic', ' Model Name : PRIME Ultra Gold', 'Compatible Devices : Personal Computer', 'Connector Type : ATX', 'Output Wattage : 1000 Watts'),
(108, '860W Turbo Cool X ATX PSU', 'Turbo-power.jpg', 111135, ' Brand : PC Power and Cooling', 'Compatible Devices : Personal Computer', 'Connector Type : ATX', 'Output Wattage : 860 Watts', 'Form Factor : ATX'),
(109, 'Intel Core i5-12400F Upto 4.4 GHz LGA1700 Socket 6 Cores 12 Threads Desktop Processor (Blue)', 'Intel-processor.jpg', 9998, 'Brand : Intel', 'CPU Model : Core i5-12400F', 'CPU Manufacturer : Intel', 'CPU Speed : 4.4 GHz', 'CPU Socket : LGA 1700'),
(110, 'AMD Ryzen 3 3200G with RadeonVega 8 Graphics Desktop Processor 4 Cores up to 4GHz 6MB Cache Socket AM4 (YD320GC5FHBOX)', 'AMD-processor.jpg', 5829, ' Brand : AMD', 'CPU Manufacturer : AMD', 'CPU Model : Ryzen 3 3200G', 'CPU Speed : 3.6 GHz', 'CPU Socket : Socket AM4'),
(111, 'Intel® Core™ i9-14900KS Desktop Processor 24 cores / 32 Thread (8 P-cores & 16 E-cores)', 'Intel1-processor.jpg', 68099, 'Brand : Intel', 'CPU Manufacturer : Intel', 'CPU Model : Core i9', 'CPU Base Speed : 3.2 GHz', 'CPU Socket : LGA 1700'),
(112, 'AMD 7000 Series Ryzen 9 7950X 3D Desktop Processor 16 cores 32 Threads 144 MB Cache 4.2 GHz Upto 5.7 GHz Socket AM5 (100-100000908WOF)', 'AMD1-processor.jpg', 58999, 'Brand : AMD', 'CPU Manufacturer : AMD', 'CPU Model : Ryzen 9 7950X 3D', 'CPU Speed : 5.6 GHz', 'CPU Socket : Socket AM5'),
(113, 'LG 27SR50F MyView Smart Monitor (27 inch, 68.6cm), FHD IPS Display (1920 x 1080) with webOS, Work & Play Smarter, ThinQ Home Dashboard, AirPlay 2 + Screen Share + Bluetooth, Stylish Design - White', 'LG-monotor.jpg', 16990, 'Brand : LG', 'Screen Size : 27 Inches', 'Resolution : FHD 1080p', 'Screen Surface Description : Glossy', 'Response Time : 5 Milliseconds'),
(114, 'SAMSUNG 32 inch M80C UHD HDR Smart Computer Monitor Screen with Streaming TV, Slimfit Camera Included, Wireless Remote PC Access, Alexa Built-in (LS32CM801UNXZA),Warm White', 'Samsung-monitor.jpg', 55634.6, 'Brand : SAMSUNG', ' Screen Size : 32 Inches', 'Display Technology : LCD', 'Resolution : 4K UHD 2160p', 'Special Feature : Built-In Webcam, Height Adjustment, USB Hub, High Dynamic Range, Built-In Speakers'),
(115, 'DELL Alienware 27 Gaming Monitor - AW2721D - 240Hz, 27 inches, (2560 x 1440) pixels QHD (Quad High Definition), Fast IPS Monitor with VESA Display HDR 600, NVIDIA G-SYNC Ultimate Certification- White', 'Dell-monitor.jpg', 108343, 'Brand : DELL Alienware', 'Screen Size : 27 Inches', 'Resolution : QHD Wide 1440p', 'Aspect Ratio : 16:9', 'Screen Surface Description : Flat'),
(116, 'Apple Pro Display XDR (32-inch with Retina 6K Display, Standard Glass)', 'apple-monitor.jpg', 519900, 'Brand : Apple', 'Screen Size : 32 Inches', 'Screen Surface Description : Flat', 'Response Time : 2 Milliseconds', 'Display : XDR Retina 6K Display'),
(117, 'Acer ALG Intel Core i5 12th Gen 12450H Gaming Laptop (16GB RAM/512GB SSD/6GB RTX 3050 Graphics/144Hz/Win11Home/Wifi 6) AL15G-52, 39.62cm (15.6 inch) FHD Display, Premium Metal Body, Steel Gray, 1.99KG', 'acer-alg-laptop.jpeg', 62990, 'Processor : Intel Core I5 12th Gen', 'RAM | ROM : 16 GB | 512 GB SSD', 'Display Size : 15.6 Inches Full HD, IPS Panel', 'Graphics : NVIDIA GeForce RTX 3050', 'Weight : 1.99 Kg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(300) NOT NULL,
  `password` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('a@gmail.com', '1'),
('abc@gmail.com', '12345'),
('dk07@gmail.com', 'dk07'),
('dk@gmail.com', 'dk07'),
('manan@gmail.com', 'manan'),
('pallav@gmail.com', 'pallav'),
('parthpatel@gmail.com', 'parthpatel0335'),
('savani@gmail.com', 'pallav'),
('savanipallav@gmail.com', 'savani_pallav'),
('vatsal@gmail.com', 'vatsal');

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
(232335, 'Acer-laptop.jpg', 'Savani palav J.', '9632587410', 'Gujrat', '362625', 'Manavadar', 3, 'savanipallav@gmail.com', 'To. :- Vadala (Ghed)', 'COD', 'Acer Swift Go 14 EVO OLED Intel Core i5 13th Gen 13500H - (16 GB/512 GB SSD)', 56990.00, 170970.00, '2024-09-02 07:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) DEFAULT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(200) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `qyt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`, `category`, `qyt`) VALUES
(1, 'Apple 2023 MacBook Pro Intel i9 9th Gen - (16 GB/1 TB SSD/Mac OS/4 GB Graphics) Silver', 215990, 'macbookpro-laptop.png', 'laptop', 2),
(2, 'MSI Titan 18 HX intel core i9-14900HX GeForce RTX 4080 18-inch 120Hz', 188090, 'msi-laptop.jpg', 'laptop', 10),
(3, 'Samsung Galaxy Book4 Pro Evo intel Core ultra 7 155H (16 GB/512 GB SSD) Moonstone Gray', 134990, 'samsung-laptop.png', 'laptop', 4),
(4, 'Asus ZenBook 14 Flip OLED i5-1340p 13th gen with intel Iris Xe Graphics', 84090, 'asus-laptop.jpg', 'laptop', 8),
(5, 'Lenovo Legion Pro 5 i7 14th Gen 14650HX - GeForce RTX 4060', 155990, 'lenovo-laptop.jpg', 'laptop', 14),
(6, 'Apple iPhone 15 pro max (Black Titanium, 256 GB) A17 Bionic Chip', 139990, 'iphone-15-pro-max.png', 'mobile', 3),
(7, 'Samsung Galaxy S24 ultra 5G (Titanium Gray, 512 GB) (12 GB RAM)', 130999, 's24-mobile.jpg', 'mobile', 0),
(8, 'Vivo X100 Pro 5G (Asteroid Orange, 512GB) (16 GB RAM)', 89999, 'vivox100-mobile.jpg', 'mobile', 13),
(9, 'Apple iPhone 12 (Purple, 256 GB) A14 Bionic Chip', 54999.3, 'iphone-12.png', 'mobile', 4),
(10, 'Realme GT 2 Pro (Paper White, 256 GB) (12 GB RAM)', 39999, 'realme-gt-2-pro-mobile.jpg', 'mobile', 10),
(11, 'Apple 2022 iPad Pro (6th Gen) 512 GB ROM 12.9 inch with Wi-Fi Only (Space Grey)', 108334, 'ipad-pro.png', 'tablet', 13),
(12, 'Samsung Galaxy Tab S9 (12 GB RAM) (256 GB ROM) 11.0 inch with Wi-Fi+5G Tablet (Beige)', 97190, 's9-tablet.webp', 'tablet', 15),
(13, 'Xiaomi Pad 5 (Multi Color, 256GB) (6/8GB RAM) 2.6Ghz', 29999, 'xiaomipad5-tablet.jpg', 'tablet', 8),
(14, 'Realme Pad 2 (8 GB RAM) (256 GB ROM) 11.5 inch with Wi-Fi+4G Tablet (Imagination Gery)', 23999, 'ralme-tablet.jpg', 'tablet', 10),
(15, 'OnePlus Pad GO (8 GB RAM) (256 GB ROM) 11.35 inch with Wi-Fi 4G Tablet (Twin Mint)', 24999, 'onplus-tablet.png', 'tablet', 10),
(16, 'LG UQ7500 139 cm (55 Inch) Ultra HD (4K) Smart LED TV & Active HDR (Black)', 43990, 'lg-tv.jpg', 'tv', 10),
(17, 'Sony BRAVIA 55 Inch (139 cm) Ultra HD (4K) Smart Google TV (KD-55X74X)', 55990, 'sony-tv.jpg', 'tv', 10),
(18, 'iFFALCON 55 inches 4K Ultra HD Smart LED Google TV (Black)', 39990, 'falcon-tv.jpg', 'tv', 10),
(19, 'SAMSUNG New D Series Brighter Crystal 4K Vivid (2024 Edition) 138 cm (55 inch) UHD (4K) LED TV', 46990, 'samsung-tv.jpg', 'tv', 10),
(20, 'SONY Bravia 126 cm (50 inch) Ultra HD (4K) LED Smart TV (KD-50X75)', 56890, 'sony-tv2.jpg', 'tv', 8),
(21, 'Autel Robotics EVO Lite  Premium Bundle, CMOS Sensor with 6K HDR Camera', 127320, 'autel-drone.jpg', 'drone', 10),
(22, 'DJI Avata 2 Fly More Combo (1 Battery) FPV Drone with 4K Camera', 82087, 'djiavata-drone.jpg', 'drone', 10),
(23, 'DJI Mini 2 Ultralight and Foldable Drone Quadcopter with 4K Camera', 34499, 'djimini2-drone.jpg', 'drone', 10),
(24, 'DJI Mini 4 Pro, Folding Mini-Drone with 4K HDR Video Camera', 112499, 'djimini4-drone.webp', 'drone', 10),
(25, 'DJI Mavic 3 Classic Drone camera with, 5.1K Video Recording', 236500, 'djimivic3-drone.jpeg', 'drone', 3),
(26, 'Canon EOS R7, EOS R Technology meets APS-C Design Fast and Powerful', 159499, 'canon-camera.png', 'camera', 7),
(27, 'SONY Alpha ILCE-6400l 24.2 MP Mirror-less Digital SLR Camera (Black) with 16-50 mm Power Lens', 90990, 'sony-camera.jpg', 'camera', 10),
(28, 'Nikon D5600 Digital SLR Camera with AF-P DX NIKKOR 18-55 mm VR Lens - VBA500K001', 42499, 'nikon-camera.png', 'camera', 10),
(29, 'Apple Watch SE (GPS, 44mm) - Gold Aluminium Case with Starlight Sport Band - Regular', 29999, 'apple-watch.png', 'watch', 10),
(30, 'Fossil Gen 6 Digital Gray Dial Mens Watch-FTW4059', 12498, 'fosil-watch.jpg', 'watch', 10),
(31, 'Fitbit Versa 4 Fitness Watch (Waterfall Blue/Platinum Aluminium)', 20499, 'fitbit-watch.jpg', 'watch', 10),
(32, 'Samsung Galaxy Watch 5 Bluetooth (44 mm, Graphite, Compatible with Android only)', 22999, 'samsung-watch.jpg', 'watch', 10),
(33, 'Fire-Boltt Smartwatch Brand Talk 2 Bluetooth Calling Smartwatch with Dual Button', 1499, 'firebolt-watch.jpg', 'watch', 10),
(34, 'Amazon Echo Dot (4th Gen) | Smart speaker with Bigger sound (White)', 5499, 'echo-speaker.jpg', 'speaker', 10),
(35, 'Amazon Echo Dot (5th Gen) | Premium sound powered by Dolby and Alexa (Black)', 6499, 'alexa-speaker.png', 'speaker', 10),
(36, 'SONOS Era 100 (Next Gen) with Built-in Alexa Smart Wi-Fi Speaker (Touch Control, White) ', 29999, 'sonos-speaker.jpeg', 'speaker', 10),
(37, 'Google Home with Google Assistant Smart Speaker (White)', 9450, 'google-speaker.jpg', 'speaker', 10),
(38, 'SONOS Roam SL with Alexa & Google Voice Assistant Smart Wi-Fi Speaker (Shadow Black)', 19999, 'sonos2-speaker.png', 'speaker', 10),
(39, 'Bose QuietComfort Ultra Wireless Noise Cancelling Over Ear Headphones (White Smoke)', 35900, 'bose-headphone.jpg', 'headphone', 10),
(40, 'SONY WH-1000XM4/LM Bluetooth Headset  (Blue, On the Ear)', 22990, 'sony-head.jpg', 'headphone', 10),
(41, 'Apple AirPods Pro (2nd gen) with MagSafe Case (USB-C) Bluetooth Headset (White, True Wireless)', 18999, 'apple-aripods.jpg', 'headphone', 10),
(42, 'Sennheiser HD 800s Wired without Mic Headset (Silver, Black, On the Ear)', 124990, 'sennheiser-head.jpg', 'headphone', 10),
(43, 'Sony PlayStation Elite PLUS Wireless Headset with Dual Noise-Cancellation', 12335, 'playstation-head.jpg', 'headphone', 10),
(44, 'AnkerWork C3 10 Webcam, 4K Webcam, 12 MP, AI Auto Focus, 1080p@60FPS HDR', 17999, 'anker-camera.jpg', 'camera', 10),
(45, 'Creative Live! Cam Sync V3 2K QHD USB Webcam with 4K Digital Zoom (Black)', 3999, 'creative-camera.jpg', 'camera', 10),
(46, 'DJI Phantom 3 Advanced Quadcopter Drone With 2.7K HD Video Camera', 83405, 'drone.png', 'drone', 2),
(47, 'JAMMY ZONES DZ09 Smartwatch Compatible with All Smart Phones J23 Smartwatch', 1387, 'smart-watch.png', 'watch', 10),
(48, 'AMAZON Echo Plus (2nd Gen) - Premium sound powered by Dolby (Black)', 7851.47, 'speker.png', 'speaker', 1),
(49, 'Logitech PTZ Pro 2 Video Camera for Conference Rooms, HD 1080p Video with Auto-Focus', 11999.4, 'camera.png', 'camera', 10),
(50, 'Sony MDR-V55 Red Extra Bass & Dj Headphone Without Mic (Black, On the Ear)', 4890.43, 'sony.png', 'headphone', 10),
(51, 'Acer Swift Go 14 EVO OLED Intel Core i5 13th Gen 13500H - (16 GB/512 GB SSD)', 56990, 'Acer-laptop.jpg', 'laptop', 3),
(52, 'ASUS ROG Strix SCAR 16 Intel Core i9 14th Gen 14900HX - (32 GB/2 TB SSD)', 339990, 'ASUS-rog-laptop.jpg', 'laptop', 10),
(53, 'Dell XPS 9530 Intel Core i7 13th Gen 13700H - (32 GB/1 TB SSD)', 279690, 'Dell-XPS-laptop.jpg', 'laptop', 10),
(54, 'Google Pixel 8 pro (Bay, 256 GB) (12 GB RAM)', 105999, 'GooglePixel8.jpg', 'mobile', 10),
(55, 'iQOO 12 5G (Legend, 256GB Storage) (12 GB RAM) Snapdragon® 8 Gen 3', 59990, 'iQOO.webp', 'mobile', 5),
(56, 'OnePlus 12 (Flowy Emerald, 512GB Storage) (16 GB RAM)', 69990, 'OnePlus12.jpg', 'mobile', 5),
(57, 'MI Xiaomi Pad 6 (8 GB RAM) (256 GB ROM) 11.0 inch with Wi-Fi Only Tablet (Graphite Grey)', 28999, 'xiaomi-pad-6-tablet.webp', 'tablet', 10),
(58, 'HONOR Pad 9 (8 GB RAM) (256 GB ROM) 12.1 Inch with free Bluetooth Keyboard (Gray', 24999, 'HONOR9-tablet.jpg', 'tablet', 10),
(59, 'OPPO Pad Air (4 GB RAM) (128 GB ROM) 10.36 inch with Wi-Fi Only Tablet (Grey)', 12899, 'OPPO-tablet.jpg', 'tablet', 10),
(60, 'Panasonic 139 cm (55 inches) Ultra HD (4K) LED Smart Google TV (TH-55MX660DX)', 42990, 'Panasonic-tv.jpg', 'tv', 10),
(61, 'OnePlus 163 cm (65 inches) Q Series 4K Ultra HD QLED Smart Google TV 65 Q2 Pro (Black)', 59990, 'OnePlus-tv.jpg', 'tv', 10),
(62, 'Hisense 164 cm (65 inches) 4K Ultra HD Smart Mini LED QLED TV 65U7K (Black)', 84999, 'Hisense-tv.jpg', 'tv', 0),
(63, 'Lorcan GPS Quadcopter Drone with 4k Camera for Adults, RC Quadcopter', 13340, 'lorcan-drone.jpg', 'drone', 10),
(64, 'NUMOO Drone with 8K Camera, 5GHz FPV Transmission, GPS 3 - Axis, Obstacle Avoidance', 122777, 'DARK-Drone.jpg', 'drone', 10),
(65, 'Panasonic Lumix S5 FullFrame Mirrorless Camera with Lumix S 20-60mm Lens (Body Only)', 109990, 'Panasonic-camera.jpg', 'camera', 10),
(66, 'Canon EOS R5 Full-Frame Mirrorless Camera with 8K Video, 45 MP Full-Frame CMOS Sensor', 479419, 'canon1-camera.jpg', 'camera', 10),
(67, 'NoiseFit Halo 1.43 inch AMOLED Display, Bluetooth Calling Smartwatch (Vintage Brown)', 2799, 'NoiseFit-watch.jpg', 'watch', 10),
(68, 'Amazfit GTR 2 (New Version) 46mm Smart Watch with HD AMOLED Display (Thunder Black)', 7999, 'Amazfit-watch.jpg', 'watch', 10),
(69, 'JBL Partybox Encore Essential | Portable Bluetooth Party Speaker | Built-in Powerbank (Black)', 20990, 'JBL-Speaker.jpg', 'speaker', 10),
(70, 'boAt Stone 1200F with upto 9 Hours Battery, 14 W Bluetooth Speaker (Grey Hound)', 3999, 'boAt-Speaker.jpg', 'speaker', 10),
(71, 'OnePlus Buds 3 TWS Earbuds with 49dB ANC Bluetooth Gaming Headset (Metallic Gray)', 5499, 'OnePlus-buts.jpg', 'headphone', 10),
(72, 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic 40MM Drivers (Hazel Beige)', 1699.67, 'boAt-headphone.jpg', 'headphone', 10),
(73, 'NVIDIA GeForce RTX 4090 Founders Edition Graphics Card 24GB GDDR6X', 279990, 'RTX-4090.jpg', 'graphic', 10),
(74, 'NVIDIA GeForce RTX 3090 Founders Edition Graphics Card, pci_e, GDDR6, 24 GB', 249000, 'rtx-3090.jpg', 'graphic', 10),
(75, 'Zotac Gaming Geforce GTX 1650 Amp Core Gddr6 4Gb 128Bit Pcie 3.0', 13053, 'rtx-1650.jpg', 'graphic', 10),
(76, 'GIGABYTE NVIDIA GeForce RTX 3060 Wind-force Fan 12GB, pci_e_x16, GDDR6', 31770.7, 'rtx-3060.jpg', 'graphic', 10),
(77, 'GALAX PC Case Revolution-06 (REV-06W) White Gaming Cabinet | 4 RGB Cooling Fans', 3899.23, 'Galax-case.jpg', 'cabinet', 7),
(78, 'ASUS ROG Strix Helios GX601 White Edition RGB Mid-Tower Computer Case', 24200.4, 'ASUS-case.jpg', 'cabinet', 10),
(79, 'Antec TORQUE Mid Tower Aluminium Gaming Cabinet | Computer Case', 37930.6, 'Antec-case.jpg', 'cabinet', 10),
(80, 'Fractal Design Torrent Compact White Tempered Glass TG Clear Tint Window', 16919.6, 'Fractal-case.jpg', 'cabinet', 10),
(81, 'AULA F3287 Mechanical | Rainbow Backlight, Anti-ghosting (Gray, White)', 2498, 'AULA-key.jpg', 'keyboard', 10),
(82, 'Ant Esports Gaming Keyboard MK1000 Mechanical Multicolor LED Backlit Keyboard (Black)', 1649.64, 'Ant-key.jpg', 'keyboard', 10),
(83, 'RPM Euro Games Gaming Keyboard Wired | 87 Keys & RGB Backlit (Black)', 699, 'RPM-key.jpg', 'keyboard', 10),
(84, 'Massdrop CTRL Mechanical Keyboard — Tenkeyless TKL (87 Key) Gaming Keyboard', 64090, 'Massdrop-key.jpg', 'keyboard', 10),
(85, 'Kreo (Limited Edition) Chimera Lucid USB Wireless Gaming Mouse (Transparent)', 2999.43, 'Kreo-mous.jpg', 'mouse', 10),
(86, 'Logitech G304 Lightspeed Wireless Gaming Mouse, Hero Sensor, 12,000 DPI (White)', 3095.54, 'Logitech-mouse.jpg', 'mouse', 10),
(87, 'Razer Basilisk V3 Pro Customizable Wired Gaming Mouse -- Classic Black', 11130.7, 'Razer-mouse.jpg', 'mouse', 10),
(88, 'ASUS ROG Spatha X Wireless Gaming Mouse (Magnetic Charging Stand) (Aura RGB Lighting)', 17939.3, 'ASUS-mouse.jpg', 'mouse', 10),
(89, 'GIGABYTE B450M DS3H V2 (AMD Ryzen AM4/USB 3.1/DDR4/Motherboard)', 6210.23, 'GIGABYTE-motherbord.jpg', 'motherboard', 10),
(90, 'MSI PRO H610M-E DDR4 Motherboard, Micro-ATX Supports 14th/13th/12th Gen Intel Core Processors', 6195.54, 'MSI-Motherboard.jpg', 'motherboard', 10),
(91, 'ASUS Pro WS WRX80E-SAGE SE WIFI AMD Threadripper Pro EATX workstation motherboard', 99999.6, 'Asus-motherbord.jpg', 'motherboard', 10),
(92, 'ASUS ROG Maximus Z790 Hero LGA 1700 ATX Motherboard with 20+1 Power Stages', 100420, 'ROG-motherbord.jpg', 'motherboard', 10),
(93, 'Amazon basics 4G LTE Wireless Dongle with All Sim Network Support - Upto 150Mbps', 2699.54, 'amazon-wifi.jpg', 'wifi', 10),
(94, 'ASUS ROG Rapture GT-AX11000 Pro Tri-Band WiFi 6 Extendable Gaming Router', 48299.4, 'ASUS-wifi.jpg', 'wifi', 10),
(95, 'NETGEAR Orbi Whole Home Tri-Band Wi-Fi 6 Mesh System (RBK852), Wi-Fi 6', 70300, 'NETGEAR-wifi.jpg', 'wifi', 10),
(96, 'JioFi M2S Black | 4G Router from Jio | On The Go Device | Video & HD Voice Calls', 2349.53, 'JIO-wifi.jpg', 'wifi', 10),
(97, 'Crucial P3 Plus 1TB PCIe 4.0 3D NAND NVMe M.2 SSD, up to 5000MB/s', 5941, 'Crucial-ssd.jpg', 'ssd', 10),
(98, 'Crucial BX500 240 GB Laptop, Desktop Internal Solid State Drive (SSD) (CT240BX500SSD1)', 1896, 'Crucial1-ssd.jpg', 'ssd', 7),
(99, 'Intel SSD SSDPED1K015TA01 P4800X 1 2Heigh 1.5TB PCIex4 20nm 3D XPoint', 1003960, 'Intel-SSD.jpg', 'ssd', 10),
(100, 'Apple SSD Kit for Mac Pro (8TB) Laptop USB Type C Class 2 SSD', 237288, 'Apple-SSD.jpg', 'ssd', 10),
(101, 'Crucial RAM 16GB DDR5 4800MHz CL40 Desktop Memory CT16G48C40U5 (Black)', 3909, 'Crucial-RAM.jpg', 'RAM', 10),
(102, 'Corsair Vengeance LPX 16GB (1x16GB) DDR4 3200MHZ Desktop RAM (Black)', 3440, 'Corsair-ram.jpg', 'RAM', 10),
(103, 'NEMIX RAM 256GB (2X128GB) DDR5 4800MHZ PC5-38400 4Rx4 ECC RDIMM KIT', 93774.9, 'NEMIX-RAM.jpg', 'RAM', 10),
(104, 'G.SKILL Zeta R5 NEO Series (AMD Expo) DDR5 RAM 192GB (4x48GB) 6400MT/s', 223127, 'G-ram.jpg', 'RAM', 10),
(105, 'GAMDIAS Aura GP550 Atom Series Fully Black Power Supply', 4457.16, 'GAMDIAS-power.jpg', 'power', 10),
(106, 'Ant Esports VS500L NonModular High Efficiency Gaming Power Supply/PSU', 2151, 'Ant-power.jpg', 'power', 10),
(107, 'Seasonic PRIME Ultra Gold 1000W (80+Gold, ATX 12V) PSU/Power Supply', 76605, 'Seasonic-power.jpg', 'power', 10),
(108, '860W Turbo Cool X ATX PSU', 111135, 'Turbo-power.jpg', 'power', 10),
(109, 'Intel Core i5-12400F Upto 4.4 GHz with 6 Cores 12 Threads Desktop Processor (Blue)', 9998, 'Intel-processor.jpg', 'processor', 10),
(110, 'AMD Ryzen 3 3200G with RadeonVega 8 Graphics Desktop Processor up to 4GHz', 5829, 'AMD-processor.jpg', 'processor', 10),
(111, 'Intel® Core™ i9-14900KS Desktop Processor 24 cores / 32 Thread (8 P-cores & 16 E-cores)', 68099, 'Intel1-processor.jpg', 'processor', 10),
(112, 'AMD 7000 Series Ryzen 9 7950X 3D Desktop Processor 16 cores 32 Threads (4.2 GHz Upto 5.7 GHz)', 58999, 'AMD1-processor.jpg', 'processor', 10),
(113, 'LG 27SR50F MyView Smart Monitor (68.6cm) FHD IPS Display (1920 x 1080) with webOS', 16990, 'LG-monotor.jpg', 'monitor', 10),
(114, 'SAMSUNG 32 inch M80C UHD HDR Smart Computer Monitor Screen with Streaming TV', 55634.6, 'Samsung-monitor.jpg', 'monitor', 10),
(115, 'DELL Alienware 27 Gaming Monitor AW2721D 240Hz, 27 inches, (2560 x 1440) - White', 108343, 'Dell-monitor.jpg', 'monitor', 10),
(116, 'Apple Pro Display XDR (32-inch with Retina 6K Display, Standard Glass)', 519900, 'apple-monitor.jpg', 'monitor', 10),
(117, 'Acer ALG Intel Core i5 12th Gen 12450 Gaming Laptop (16GB RAM/512GB SSD/6GB RTX 3050 Graphics)', 62990, 'acer-alg-laptop.jpeg', 'laptop', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

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
